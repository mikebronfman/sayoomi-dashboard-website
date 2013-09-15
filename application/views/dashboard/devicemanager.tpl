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
</style>

<div id='l-main'>
    <div class='l-container l-body'>
        <div class='dashboard' id='start'>
            <p><h2>From this panel you can add and remove devices</h2></p>
            <br>
            <h2>These are your current devices</h2><br>
            <br>
            <h2>What would you like to do?</h2><br><br>
            <a class="btn" href="#" id="addDevice">Add a new device</a> <a class="btn" href="#" id="removeDevice">Remove a device</a>
        </div>
        <div class='dashboard' id='add'>
            
            Add device panel
        </div>
        <div class='dashboard' id='remove'>
            Remove device Panel
        </div>
    </div>
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
    
    });
</script>