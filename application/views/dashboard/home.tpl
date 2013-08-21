<!-- ========== (HIDDEN) DEVICE ACTIVITY START ========== -->

{$activity}

<!-- ========== (HIDDEN) DEVICE ACTIVITY END ========== -->


<!-- ========== MAIN DASHBOARD CONTROL START ========== -->

<div id='l-main'>
    <div class='l-container l-body'>
        <div class='dashboard'>

            <!-- BASIC DEVICE METRICS START -->
            {$overview}
            <!-- BASIC DEVICE METRICS END -->

            <!-- USER-COMMAND ACTIVITY FILTER START -->
            <div class='row dashboard-responses'>
                <div class='survey-responses'>
                    <div class='span-5 append-1'>

                        <!-- FILTER 1 START -->
                        {$systems}
                        <!-- FILTER 1 END -->
                        {$users}
                        <!-- FILTER 2 START -->
                        {$devices}
                        <!-- FILTER 2 END -->

                        <!-- FILTER 3 START -->
                        
                    </div>
                    <!-- FILTER 3 END -->

                    <!-- ========== MAIN DASHBOARD CONTROL END ========== -->


                    <!-- ========== MAIN DASHBOARD BODY START ========== -->

                    <div class='span-18 last'>
                        <h2 class='survey-responses-summary'>
                            <span class='val-filtered-response-count'></span>
                            Operation History
                        </h2>

                        {$history}

                    </div>
                </div>

            </div>
            
        </div>
    </div>
</div>
{$devicemanager}
<script>
  (function() {
    $('.charts-toggle').on('click', 'button', function(event) {
      event.preventDefault();
      $(this).addClass('is-active').siblings().removeClass('is-active');
    });
  
    $(document.body).on('click', '.nps-graph-btn', function(event) {
      var $btn;
      //window.setTimeout(chart.load, 0);
      $('#l-top').toggleClass('is-inset');
      $('#l-inset').toggleClass('inset-chart is-active');
      $btn = $(this);
      $btn.toggleClass('is-active');
      return $btn.text($btn.is('.is-active') ? 'Hide activity' : 'Show activity');
    });
  
  }).call(this);
</script>
