<div style="text-align: center;">
    <input type="button" value="Quick Scan" id="scan" name="netcheck" />
    <input type="button" value="Deep Scan" id="deepscan" name="netcheck" />
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
    
  
  });
</script>