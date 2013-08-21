<?php /* Smarty version Smarty-3.1.13, created on 2013-08-20 17:15:40
         compiled from "C:\Server\Web\poweredbyredstone.com\sayoomi\application\views\dashboard\modules\device_overview.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12826520c072394b777-64034933%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2c7a906a3883def2cba2450ba64df48a66e139e9' => 
    array (
      0 => 'C:\\Server\\Web\\poweredbyredstone.com\\sayoomi\\application\\views\\dashboard\\modules\\device_overview.tpl',
      1 => 1376978704,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12826520c072394b777-64034933',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_520c072394ef93_48997054',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_520c072394ef93_48997054')) {function content_520c072394ef93_48997054($_smarty_tpl) {?><div class='row dashboard-metrics'>
    <div class='metrics'>

        <!-- BASIC METRICS START -->
        <div class='metrics-section metric-section-nps'>
            <div class='nps'>
                <div class='nps-number'><span class="val-nps">6</span></div>
                <div class='nps-label'>Your Devices</div>
                <div class='nps-graph'>
                    <button class='nps-graph-btn btn btn-tiny btn-graph'>Show Activity</button>
                </div>
            </div>
        </div>
        <!-- BASIC METRICS END -->

        <!-- ACTIVITY MONITOR BAR START -->
        <div class='metrics-section metric-section-bars'>
            <div class='bars'>
                <div class='bars-inner'>
                    <div class='ttooltip bar-promoter' style='width: 226px'>
                        <div class='ttooltip-content bar-tooltip'>
                            <div class='bar-percent'><span class="val-promoter-percent">33</span>%</div>
                            <div class='bar-absolute'>
                                <span class='val-promoter-count'>2</span>
                                <span class='val-promoter-label'>Enables</span>
                            </div>
                        </div>
                    </div>
                    <div class='ttooltip bar-passive' style='width: 226px'>
                        <div class='ttooltip-content bar-tooltip'>
                            <div class='bar-percent'><span class="val-passive-percent">33</span>%</div>
                            <div class='bar-absolute'>
                                <span class='val-passive-count'>2</span>
                                <span class='val-passive-label'>Modifies</span>
                            </div>
                        </div>
                    </div>
                    <div class='ttooltip bar-detractor' style='width: 227px'>
                        <div class='ttooltip-content bar-tooltip'>
                            <div class='bar-percent'><span class="val-detractor-percent">33</span>%</div>
                            <div class='bar-absolute'>
                                <span class='val-detractor-count'>2</span>
                                <span class='val-detractor-label'>Disables</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ACTIVITY MONITOR BAR END -->

    </div>
</div><?php }} ?>