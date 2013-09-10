<div style="text-align: center;">
    <input type="button" value="Check Network" id="netcheck" name="netcheck" />
    <div id="return"></div>
</div>
<script>
$(function() {
    $('input#netcheck').bind('click', function(event) {
      event.preventDefault();
      $.ajax({
            type: "POST",  
            url: "/netcheck/scan",
            data: { o : 2 }  
          }).done(function(data){
            $('#return').html(data);
            });
    });
  
    
  
  });
</script>