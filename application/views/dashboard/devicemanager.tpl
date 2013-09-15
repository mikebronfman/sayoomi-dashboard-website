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
</style>

<div id='l-main'>
    <div class='l-container l-body'>
        <div class='dashboard' id='start'>
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
            Add device panel
        </div>
        <div class='dashboard' id='remove'>
            <h2>What system would you like to remove?</h2>
            {foreach $systems as $system}
                <a href="#" class="deviceremlink" data-id="{$system.system_id}"><img src="/assets/images/{$system.image}" alt="{$system.description}" title="{$system.description}"><br><h4>{$system.description}</h4></a>
            {/foreach}
        </div>
    </div>
</div>
        
        <div id="dialog-confirm" title="Are you sure?">
            <p><span class="ui-con ui-icon-alert" style="float: left; margin: 0 7px 20px 0;"></span><img id="removeconfirm" src="" data-id=""><br>Are you sure you want to remove this system?<br>This cannot be undoone.</p>
        </div>
<script>
    $(function(){
        //page init
        $('#add').hide();
        $('#remove').hide();
        
        $('#addDevice').bind('click', function(){
            $('#start').hide('slow');
            $('#add').show('slow');
        });
        $('#removeDevice').bind('click', function(){
            $('#start').hide('slow');
            $('#remove').show('slow');
        });
        
        $("#dialog-confirm").dialog({
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
        
        $('.deviceremlink').bind('click', function(){
            $("#removeconfirm").attr("data-id", $(this).attr("data-id"));
            $("#removeconfirm").attr("src", $(this).children("img").attr("src"));
            $("#dialog-confirm").dialog("open");
        });
    });
</script>