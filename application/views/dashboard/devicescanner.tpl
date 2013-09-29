<div style="text-align: center;" style="position: relative;">
    <br>
    <input type="button" value="Quick Scan" id="scan" name="netcheck" />
    <input type="button" value="Deep Scan" id="deepscan" name="netcheck" />
    <br>
    <input type="text" id="ip" /><br>
    <input type="button" value="Targeted Quick Scan" id="tscan" name="netcheck" />
    <input type="button" value="Targeted Deep Scan" id="tdeepscan" name="netcheck" />
    <br>
    <input type="text" id="url" /><br>
    <input type="text" id="method" /><br>
    <input type="text" id="params" /><br>
    <input type="button" value="Raw Command" id="rawcommand" name="rawCommand" />
    <input type="button" value="Targeted Raw Command" id="trawcommand" name="targetedRawCommand" />
    <div id="return"></div>
    <div id="progressbar"></div>

</div>
<style>
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
<script>
$(function() {
    var progressbar = $( "#progressbar" );
    $("#progressbar").hide();
    progressbar.progressbar({ value: false });

    $('input#scan').bind('click', function(event) {
      event.preventDefault();
      $('#return').html('<img src="/assets/images/spinner-2x.gif" />');
      $.ajax({
            
            type: "POST",  
            url: "/netcheck/scan",
            data: { o : 2 }  
          }).success(function(data){
            $('#return').html(data);
        });
    });
    $('input#deepscan').bind('click', function(event) {
      event.preventDefault();
      $("#progressbar").show();
      progressbar.progressbar( "value", 0 );
      var val = progressbar.progressbar( "value" ) || 0;
        $.ajax({
            type: "POST",  
            url: "/netcheck/scan",
            data: { o : 2 }  
          }).done(function(data){
            $('#return').html(data);
            $("#progressbar").hide();
        });
    });
    
    $('input#tscan').bind('click', function(event) {
      event.preventDefault();
      $('#return').html('<img src="/assets/images/spinner-2x.gif" />');
      var ip = $("#ip").val();
      $.ajax({
            
            type: "POST",  
            url: "/netcheck/targetedScan",
            data: { ip : ip }  
          }).success(function(data){
            $('#return').html(data);
        });
    });
    $('input#tdeepscan').bind('click', function(event) {
      event.preventDefault();
      $("#progressbar").show();
      var ip = $("#ip").val();
      progressbar.progressbar( "value", 0 );
      var val = progressbar.progressbar( "value" ) || 0;
      for(var offset = 0; offset <= 25; offset++){
      $.ajax({
              
            type: "POST",  
            url: "/netcheck/targetedDeepScan",
            data: { ip : ip, offset: offset }  
          }).success(function(data){
            val = progressbar.progressbar( "value" ) || 0;
            progressbar.progressbar( "value", (val + 4) );            
        });
      }
        $.ajax({
            type: "POST",  
            url: "/netcheck/targetedScan",
            data: { ip : ip }  
          }).done(function(data){
            $('#return').html(data);
            $("#progressbar").hide();
        });
    });
    $('input#trawcommand').bind('click', function(event){
        event.preventDefault();
        var ip = $("#ip").val();
        var url = $("#url").val(); 
        var method = $("#method").val();
        var params = $("#params").val();
        $.ajax({
            type: "POST",  
            url: "/command/sendRawCommand",
            data: { ip : ip, url: url, method: method, params: params }  
          }).success(function(data){
            $('#return').html(data);
        });

    });
  
  });
</script>