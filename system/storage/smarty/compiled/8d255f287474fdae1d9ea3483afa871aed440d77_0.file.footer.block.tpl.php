<?php
/* Smarty version 4.3.2, created on 2023-10-19 00:22:04
  from 'C:\laragon\www\zender\templates\dashboard\modules\footer.block.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6530d91cf2be81_23537346',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8d255f287474fdae1d9ea3483afa871aed440d77' => 
    array (
      0 => 'C:\\laragon\\www\\zender\\templates\\dashboard\\modules\\footer.block.tpl',
      1 => 1697678232,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6530d91cf2be81_23537346 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="footer">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 col-12">
                <div class="copyright text-center <?php if (language_rtl) {?>text-md-right<?php } else { ?>text-md-left<?php }?>">
                    <p>
                        <a href="#" zender-page="3/about"><?php echo __("lang_dashboard_footer_about");?>
</a> &middot;
                        <a href="#" zender-page="4/terms-of-service"><?php echo __("lang_dashboard_footer_terms");?>
</a> &middot;
                        <a href="#" zender-page="5/privacy-policy"><?php echo __("lang_dashboard_footer_privacy");?>
</a>
                    </p>
                </div>
            </div>

            <div class="col-md-6 col-12">
                <div class="copyright text-center <?php if (language_rtl) {?>text-md-left<?php } else { ?>text-md-right<?php }?>">
                    <p><?php echo __("lang_dashboard_footer_copyright");?>
 &copy; <?php echo date("Y");?>
</p>
                </div>
            </div>
        </div>
    </div>
</div><?php }
}
