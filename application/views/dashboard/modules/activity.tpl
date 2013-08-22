<div id='l-inset'>
    <div class='l-container'>

        <!-- ACTIVITY START -->
        <div class='charts'>
            <div class='charts-header'>
                <div class='charts-title'>
                    <h1>Your Device Activity</h1>
                </div>
                <div class='charts-toggle btn-group'>
                    <button class="btn btn-small btn-subtle is-active" data-period="daily" name="button" type="submit">Today</button>
                    <button class="btn btn-small btn-subtle" data-period="weekly" name="button" type="submit">This Week</button>
                    <button class="btn btn-small btn-subtle" data-period="monthly" name="button" type="submit">This Month</button>
                </div>
            </div>

            <!-- ACTIVITY CONTENT START -->
            <div class='charts-chart'>
                <canvas id="activityChart" width="715" height="240"></canvas>
            </div>
            <script>
                var ctx = document.getElementById("activityChart").getContext("2d");
                var data = {
                    labels : ["12am","1","2","3","4","5","6","7","8","9","10","11","12pm","1","2","3","4","5","6","7","8","9","10","11"],
                    datasets : [
                    {
                        fillColor : "rgba(109, 179, 247 ,1)",
                        strokeColor : "rgba(56, 122, 170, 1)",
                        data : [0,0,0,0,0,1,1,1,1,1,2,2,1,0,0,2,2,3,3,3,3,5,1,1]
                    }
                    ]
                };
                var options = {
                    barValueSpacing : 2,
                    scaleOverride   : true,
                    scaleSteps      : 8,
                    scaleStepWidth  : 1,
                    scaleStartValue : 0
                    
                };
                var myNewChart = new Chart(ctx).Bar(data, options);
            </script>
            <!-- ACTIVITY CONTENT START -->

        </div>
        <!-- ACTIVITY END -->

    </div>
</div>