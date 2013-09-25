<style>
    #start{
        text-align:center;
    }
    #add{
        text-align:center;
    }
    #remove{
        text-align:center;
    }
    a.deviceremlink{
        display:inline-block;
        width: 90px;
        height: 120px;
    }
    #progressbar{
        margin:auto;
    }      
    .ui-progressbar {
        position: relative;
        width:220px;
    }
    .progress-label {
        position: relative;
        left: 50%;
        top: 4px;
        font-weight: bold;
        text-shadow: 1px 1px 0 #fff;
    }
</style>

<div id='l-main'>
    <div class='l-container l-body'>
        <div class='dashboard' id='start'>
            <p><h2>Data Connection is {$wsresp.response}.</h2></p>
            <p><h2>There is {if $isOnline.response != 1} not {/if} an oomi device detected on your network.</h2></p>
            <p><h2>From this panel you can add and remove system</h2></p>
            <br>
            <h2>These are your current systems</h2>
            {foreach $systems as $system}
                <img src="/assets/images/{$system.image}" alt="{$system.description}" title="{$system.description}">
            {/foreach}
            <br>
            <h2>What would you like to do?</h2><br><br>
            <a class="btn" href="#" id="addDevice">Add a new system</a> <a class="btn" href="#" id="removeDevice">Remove a system</a>
        </div>
        <div class='dashboard' id='add'>
            <h2>What type of system would you like to add?</h2>
            {foreach $system_types as $system_type}
                <a href="#" class="deviceaddlink" data-type="{$system_type.id}" data-hw="{$system_type.hw_id}"><img src="/assets/images/{$system_type.image}" alt="{$system_type.type}" title="{$system_type.type}"></a>
            {/foreach}
        </div>
        <div class='dashboard' id='remove'>
            <h2>What system would you like to remove?</h2>
            {foreach $systems as $system}
                <a href="#" class="deviceremlink" data-id="{$system.system_id}"><img src="/assets/images/{$system.image}" alt="{$system.description}" title="{$system.description}"><br><h4>{$system.description}</h4></a>
            {/foreach}
        </div>
    </div>
</div>
        
        <div id="dialog-confirm-delete" title="Are you sure?">
            <p><span class="ui-con ui-icon-alert" style="float: left; margin: 0 7px 20px 0;"></span><img id="removeconfirm" src="" data-id=""><br>Are you sure you want to remove this system?<br>This cannot be undoone.</p>
        </div>
        <div id="dialog-confirm-add" title="Searching">
            <p><span class="ui-con ui-icon-alert" style="float: left; margin: 0 7px 20px 0;"></span><img id="addconfirm" src="" data-hw=""><br>Searching for systems...</p>
            <div id="progressbar"></div>
            <div id="return"></div>
        </div>
<script>
    $(function(){
        //page init
        var progressbar = $( "#progressbar" );
        $("#progressbar").hide();
        progressbar.progressbar({ value: false });
        $('#add').hide();
        $('#remove').hide();
        
        $('#addDevice').bind('click', function(event){
            event.preventDefault();
            $('#start').hide('slow');
            $('#add').show('slow');
        });
        $('#removeDevice').bind('click', function(event){
            event.preventDefault();
            $('#start').hide('slow');
            $('#remove').show('slow');
        });
        
        $("#dialog-confirm-delete").dialog({
            autoOpen: false,
            resizeable: false,
            height: 280,
            width: 500,
            modal: true,
            buttons:{
                "Go Ahead": function(){
                    $.ajax({
                        type: "POST", 
                        url: "/systems/remove",
                        data: {
                            systemID : $("#removeconfirm").attr("data-id")
                        }
                    }).success(function(data){
                    $("#dialog-confirm").dialog("close");
                        location.reload();
                    });
                },
                Cancel: function(){
                    $(this).dialog("close");
                }
            }
        });
        $("#dialog-confirm-add").dialog({
            autoOpen: false,
            resizeable: false,
            height: 280,
            width: 500,
            modal: true,
            buttons:{
                "Awesome": function(){
                    $.ajax({
                        type: "POST", 
                        url: "/systems/add",
                        data: {
                            systemID : $("#removeconfirm").attr("data-id")
                        }
                    }).success(function(data){
                    $("#dialog-confirm").dialog("close");
                        location.reload();
                    });
                },
                Cancel: function(){
                    $(this).dialog("close");
                }
            }
        });
        $('.deviceremlink').bind('click', function(event){
            event.preventDefault();
            $("#removeconfirm").attr("data-id", $(this).attr("data-id"));
            $("#removeconfirm").attr("src", $(this).children("img").attr("src"));
            $("#dialog-confirmd-delete").dialog("open");
        });
        
        $(".deviceaddlink").bind('click', function(event){
              event.preventDefault();
              $("#addconfirm").attr("data-hw", $(this).attr("data-hw"));
              $("#addconfirm").attr("src", $(this).children("img").attr("src"));
              $("#dialog-confirm-add").dialog("open");
              $("#progressbar").show();
              progressbar.progressbar( "value", 0 );
              var val = progressbar.progressbar( "value" ) || 0;
              for(var offset = 0; offset <= 25; offset++){
              $.ajax({
                    //async: false,
                    type: "POST",  
                    url: "/netcheck/deepscan",
                    data: { o : 2, offset: offset}  
                  }).success(function(data){
                    val = progressbar.progressbar( "value" ) || 0;
                    progressbar.progressbar( "value", val + 4 );
                    });
                }
                $.ajax({
                    //async: false,
                    type: "POST",  
                    url: "/netcheck/scanone",
                    data: { hw : $("#addconfirm").attr("data-hw") }  
                  }).done(function(data){
                    $('#return').html(data);
                    $("#progressbar").hide();
                });
        });
    });
</script>