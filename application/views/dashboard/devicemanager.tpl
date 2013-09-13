<div style="text-align: center;">
    <br>
    <input type="button" value="Quick Scan" id="scan" name="netcheck" />
    <input type="button" value="Deep Scan" id="deepscan" name="netcheck" />
    <br>
    <input type="text" id="ip" /><br>
    <input type="button" value="Targeted Quick Scan" id="tscan" name="netcheck" />
    <input type="button" value="Targeted Deep Scan" id="tdeepscan" name="netcheck" />
    <div id="return"></div>
</div>
<script>
$(function() {
    $('input#scan').bind('click', function(event) {
      event.preventDefault();
      $('#return').html('<img src="/assets/images/spinner-2x.gif" />');
      $.ajax({
            type: "POST",  
            url: "/netcheck/scan",
            data: { o : 2 }  
          }).done(function(data){
            $('#return').html(data);
            });
    });
    $('input#deepscan').bind('click', function(event) {
      event.preventDefault();
      $('#return').html('<img src="/assets/images/spinner-2x.gif" />');
      $.ajax({
            type: "POST",  
            url: "/netcheck/deepscan",
            data: { o : 2 }  
          }).done(function(data){
            $('#return').html(data);
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
          }).done(function(data){
            $('#return').html(data);
            });
    });
    $('input#tdeepscan').bind('click', function(event) {
      event.preventDefault();
      $('#return').html('<img src="/assets/images/spinner-2x.gif" />');
      var ip = $("#ip").val();
      $.ajax({
            type: "POST",  
            url: "/netcheck/targetedDeepScan",
            data: { ip : ip }  
          }).done(function(data){
            $('#return').html(data);
            });
    });
    
  
  });
</script>