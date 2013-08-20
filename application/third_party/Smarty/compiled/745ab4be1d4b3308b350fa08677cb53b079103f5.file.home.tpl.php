<?php /* Smarty version Smarty-3.1.13, created on 2013-08-14 18:57:57
         compiled from "C:\Server\Web\poweredbyredstone.com\sayoomi\application\views\dashboard\home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12612520c07747e8dd3-35201903%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '745ab4be1d4b3308b350fa08677cb53b079103f5' => 
    array (
      0 => 'C:\\Server\\Web\\poweredbyredstone.com\\sayoomi\\application\\views\\dashboard\\home.tpl',
      1 => 1376531847,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12612520c07747e8dd3-35201903',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_520c07748564a9_13564599',
  'variables' => 
  array (
    'activity' => 0,
    'overview' => 0,
    'systems' => 0,
    'users' => 0,
    'devices' => 0,
    'history' => 0,
    'devicemanager' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_520c07748564a9_13564599')) {function content_520c07748564a9_13564599($_smarty_tpl) {?><!-- ========== (HIDDEN) DEVICE ACTIVITY START ========== -->

<?php echo $_smarty_tpl->tpl_vars['activity']->value;?>


<!-- ========== (HIDDEN) DEVICE ACTIVITY END ========== -->


<!-- ========== MAIN DASHBOARD CONTROL START ========== -->

<div id='l-main'>
    <div class='l-container l-body'>
        <div class='dashboard'>

            <!-- BASIC DEVICE METRICS START -->
            <?php echo $_smarty_tpl->tpl_vars['overview']->value;?>

            <!-- BASIC DEVICE METRICS END -->

            <!-- USER-COMMAND ACTIVITY FILTER START -->
            <div class='row dashboard-responses'>
                <div class='survey-responses'>
                    <div class='span-5 append-1'>

                        <!-- FILTER 1 START -->
                        <?php echo $_smarty_tpl->tpl_vars['systems']->value;?>

                        <!-- FILTER 1 END -->
                        <?php echo $_smarty_tpl->tpl_vars['users']->value;?>

                        <!-- FILTER 2 START -->
                        <?php echo $_smarty_tpl->tpl_vars['devices']->value;?>

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

                        <?php echo $_smarty_tpl->tpl_vars['history']->value;?>


                    </div>
                </div>

            </div>
            
        </div>
    </div>
</div>
<?php echo $_smarty_tpl->tpl_vars['devicemanager']->value;?>

<script>
  (function() {
    var chart;
  
    chart = new TimeSeriesChart('.chart', "/survey_responses/time_series");
  
    window.chart = chart;
  
    $('.charts-toggle').on('click', 'button', function(event) {
      var period;
      event.preventDefault();
      $(this).addClass('is-active').siblings().removeClass('is-active');
      period = $(this).data('period');
      return chart.changePeriod(period);
    });
  
    $(document.body).on('click', '.nps-graph-btn', function(event) {
      var $btn;
      window.setTimeout(chart.load, 0);
      $('#l-top').toggleClass('is-inset');
      $('#l-inset').toggleClass('inset-chart is-active');
      $btn = $(this);
      $btn.toggleClass('is-active');
      return $btn.text($btn.is('.is-active') ? 'Hide activity' : 'Show activity');
    });
  
  }).call(this);
</script>
<script>
  (function() {
  
    SurveyResponses.BAR_TOTAL_WIDTH = 680;
  
    window.surveyResponses = new SurveyResponses('.survey-responses', "/survey_responses", null, {
      "nps": 6,
      "response_count": 6,
      "filtered_response_count": 6,
      "detractor_count": 2,
      "detractor_percent": 33.3,
      "passive_count": 2,
      "passive_percent": 33.3,
      "promoter_count": 2,
      "promoter_percent": 33.3
    }, {
      "group": null,
      "commented": null,
      "properties": null
    });
  
  }).call(this);
</script>
<?php }} ?>