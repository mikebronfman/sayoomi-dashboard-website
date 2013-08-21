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
                <canvas id="activityChart" width="600" height="240"></canvas>
            </div>
            <script>
                var ctx = document.getElementById("activityChart").getContext("2d");
                var data = {
                    labels : ["January","February","March","April","May","June","July"],
                    datasets : [
                    {
                        fillColor : "rgba(220,220,220,0.5)",
                        strokeColor : "rgba(220,220,220,1)",
                        pointColor : "rgba(220,220,220,1)",
                        pointStrokeColor : "#fff",
                        data : [65,59,90,81,56,55,40]
                    },
                    {
                        fillColor : "rgba(151,187,205,0.5)",
                        strokeColor : "rgba(151,187,205,1)",
                        pointColor : "rgba(151,187,205,1)",
                        pointStrokeColor : "#fff",
                        data : [28,48,40,19,96,27,100]
                    }
                    ]
                };
                var myNewChart = new Chart(ctx).Line(data);
            </script>
            <!-- ACTIVITY CONTENT START -->

        </div>
        <!-- ACTIVITY END -->

    </div>
</div>