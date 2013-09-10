<div style="text-align: center;">
    <input type="button" value="Check Network" id="netcheck" name="netcheck" />
    <div id="return"></div>
</div>
<script>
(function() {
    $('input#netcheck').on('click', 'button', function(event) {
      event.preventDefault();
      $.ajax({
            type: "POST",  
            url: {$clientIP},
            data: { o : 2 }  
          }).done(function(data){
            $('#return').text(data);
            });
    });
  
    
  
  }).call(this);
</script>