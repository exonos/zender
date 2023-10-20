<?php
/* Smarty version 4.3.2, created on 2023-10-19 14:17:54
  from 'C:\laragon\www\zender\templates\dashboard\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6530ca12a45cf6_10252161',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd1d72ee9f19482cb5868a2dc164c85be465062b9' => 
    array (
      0 => 'C:\\laragon\\www\\zender\\templates\\dashboard\\footer.tpl',
      1 => 1697678232,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6530ca12a45cf6_10252161 (Smarty_Internal_Template $_smarty_tpl) {
?>    <div zender-preloader>
        <div class="loadingio loadingio-spinner-ripple-c4xwekkbyc9">
            <div class="ldio-k6xrhuhg6o">
                <div></div>
                <div></div>
            </div>
        </div>
    </div>

    <?php echo '<script'; ?>
 src="<?php echo _assets("js/libs/fetch.min.js");?>
"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 defer>
        window.template = "<?php echo template;?>
";
        window.site_url = "<?php echo site_url;?>
";
        window.tawk_id = "<?php echo system_tawk_id;?>
";
        window.titansys_echo = "<?php echo titansys_echo;?>
";
        window.alertsound = <?php if (logged_alertsound < 2) {?>true<?php } else { ?>false<?php }?>;
        window.message_max = <?php echo system_message_max;?>
;
        window.color_primary = "<?php echo system_theme_background;?>
";
        window.alert_position = "<?php if (language_rtl) {?>topRight<?php } else { ?>topLeft<?php }?>";
        window.overlap_alert_position = "<?php if (language_rtl) {?>bottomRight<?php } else { ?>bottomLeft<?php }?>";
        window.consent_position = "<?php if (language_rtl) {?>bottom-right<?php } else { ?>bottom-left<?php }?>";
        window.recaptcha_status = <?php if (system_recaptcha < 2) {
if (empty(system_recaptcha_key) || empty(system_recaptcha_secret)) {?>false<?php } else { ?>true<?php }
} else { ?>false<?php }?>;

        var lang_datatable_processing = "<?php echo __("lang_datatable_processing");?>
",
            lang_datatable_length = "<?php echo __("lang_datatable_length");?>
",
            lang_datatable_info = "<?php echo __("lang_datatable_info");?>
",
            lang_datatable_empty = "<?php echo __("lang_datatable_empty");?>
",
            lang_datatable_filtered = "<?php echo __("lang_datatable_filtered");?>
",
            lang_datatable_loading = "<?php echo __("lang_datatable_loading");?>
",
            lang_datatable_zero = "<?php echo __("lang_datatable_zero");?>
",
            lang_datatable_null = "<?php echo __("lang_datatable_null");?>
",
            lang_datatable_first = "<?php echo __("lang_datatable_first");?>
",
            lang_datatable_prev = "<?php echo __("lang_datatable_prev");?>
",
            lang_datatable_next = "<?php echo __("lang_datatable_next");?>
",
            lang_datatable_last = "<?php echo __("lang_datatable_last");?>
",
            lang_response_went_wrong = "<?php echo __("lang_response_went_wrong");?>
",
            lang_delete_title = "<?php echo __("lang_delete_title");?>
",
            lang_delete_tagline = "<?php echo __("lang_delete_tagline");?>
",
            lang_validate_cannotemp = "<?php echo __("lang_validate_cannotemp");?>
",
            lang_alert_attention = "<?php echo __("lang_alert_attention");?>
",
            lang_date_today = "<?php echo __("lang_date_today");?>
",
            lang_date_yesterday = "<?php echo __("lang_date_yesterday");?>
",
            lang_date_7days = "<?php echo __("lang_date_7days");?>
",
            lang_date_30days = "<?php echo __("lang_date_30days");?>
",
            lang_date_month = "<?php echo __("lang_date_month");?>
",
            lang_date_lmonth = "<?php echo __("lang_date_lmonth");?>
",
            lang_date_custom = "<?php echo __("lang_date_custom");?>
",
            lang_copy_data = "<?php echo __("lang_copy_data");?>
",
            lang_unknown_action_method = "<?php echo __("lang_unknown_action_method");?>
",
            lang_btn_confirm = "<?php echo __("lang_btn_confirm");?>
",
            lang_btn_cancel = "<?php echo __("lang_btn_cancel");?>
",
            lang_suspend_user_title = "<?php echo __("lang_suspend_user_title");?>
",
            lang_suspend_user_desc = "<?php echo __("lang_suspend_user_desc");?>
",
            lang_unsuspend_user_title = "<?php echo __("lang_unsuspend_user_title");?>
",
            lang_unsuspend_user_desc = "<?php echo __("lang_unsuspend_user_desc");?>
",
            lang_response_session_false = "<?php echo __("lang_response_session_false");?>
",
            lang_require_name = "<?php echo __("lang_require_name");?>
",
            lang_require_email = "<?php echo __("lang_require_email");?>
",
            lang_require_password = "<?php echo __("lang_require_password");?>
",
            lang_require_cpassword = "<?php echo __("lang_require_cpassword");?>
",
            lang_validate_cannotemp = "<?php echo __("lang_validate_cannotemp");?>
",
            lang_alert_attention = "<?php echo __("lang_alert_attention");?>
",
            lang_cookieconsent_message = "<?php echo __("lang_cookieconsent_message");?>
",
            lang_cookieconsent_link = "<?php echo __("lang_cookieconsent_link");?>
",
            lang_cookieconsent_dismiss = "<?php echo __("lang_cookieconsent_dismiss");?>
",
            lang_pendingdelete_title = "<?php echo __("lang_pendingdelete_title");?>
",
            lang_pendingdelete_desc = "<?php echo __("lang_pendingdelete_desc");?>
",
            lang_js_loader_pleasewait = "<?php echo __("lang_js_loader_pleasewait");?>
",
            lang_js_userstatus_online = "<?php echo __("lang_js_userstatus_online");?>
",
            lang_js_userstatus_offline = "<?php echo __("lang_js_userstatus_offline");?>
",
            lang_js_whatsapp_linksuccess = "<?php echo __("lang_js_whatsapp_linksuccess");?>
",
            lang_js_whatsapp_linkfailed = "<?php echo __("lang_js_whatsapp_linkfailed");?>
",
            lang_js_whatsapp_linkexist = "<?php echo __("lang_js_whatsapp_linkexist");?>
",
            lang_js_whatsapp_loaderprocessing = "<?php echo __("lang_js_whatsapp_loaderprocessing");?>
",
            lang_js_clearpending_title = "<?php echo __("lang_js_clearpending_title");?>
",
            lang_js_clearpending_desc = "<?php echo __("lang_js_clearpending_desc");?>
",
            lang_js_clearpending_processing = "<?php echo __("lang_js_clearpending_processing");?>
",
            lang_js_authenticate_processing = "<?php echo __("lang_js_authenticate_processing");?>
",
            lang_js_actiontrigger_title = "<?php echo __("lang_js_actiontrigger_title");?>
",
            lang_js_actiontrigger_typetitle = "<?php echo __("lang_js_actiontrigger_typetitle");?>
",
            lang_js_actiontrigger_typesms = "<?php echo __("lang_js_actiontrigger_typesms");?>
",
            lang_js_actiontrigger_typewa = "<?php echo __("lang_js_actiontrigger_typewa");?>
",
            lang_js_actiontrigger_typeussd = "<?php echo __("lang_js_actiontrigger_typeussd");?>
",
            lang_js_actiontrigger_typenoti = "<?php echo __("lang_js_actiontrigger_typenoti");?>
",
            lang_js_actiontrigger_loader = "<?php echo __("lang_js_actiontrigger_loader");?>
",
            lang_js_actiontranslator_title = "<?php echo __("lang_js_actiontranslator_title");?>
",
            lang_js_actiontranslator_from = "<?php echo __("lang_js_actiontranslator_from");?>
",
            lang_js_actiontranslator_to = "<?php echo __("lang_js_actiontranslator_to");?>
",
            lang_js_actiontranslator_loader = "<?php echo __("lang_js_actiontranslator_loader");?>
",
            lang_js_actionregen_title = "<?php echo __("lang_js_actionregen_title");?>
",
            lang_js_actionregen_desc = "<?php echo __("lang_js_actionregen_desc");?>
",
            lang_js_actionregen_loader = "<?php echo __("lang_js_actionregen_loader");?>
",
            lang_js_actionclear_title = "<?php echo __("lang_js_actionclear_title");?>
",
            lang_js_actionclear_desc = "<?php echo __("lang_js_actionclear_desc");?>
",
            lang_js_processing_dataloader = "<?php echo __("lang_js_processing_dataloader");?>
",
            lang_js_build_title = "<?php echo __("lang_js_build_title");?>
",
            lang_js_build_desc = "<?php echo __("lang_js_build_desc");?>
",
            lang_js_build_btnbuild = "<?php echo __("lang_js_build_btnbuild");?>
",
            lang_js_reorder_title = "<?php echo __("lang_js_reorder_title");?>
",
            lang_js_reorder_desc = "<?php echo __("lang_js_reorder_desc");?>
",
            lang_js_deletetrash_title = "<?php echo __("lang_js_deletetrash_title");?>
",
            lang_js_deletetrash_desc = "<?php echo __("lang_js_deletetrash_desc");?>
",
            lang_js_tablesexport_copy = "<?php echo __("lang_js_tablesexport_copy");?>
",
            lang_js_tablesexport_excel = "<?php echo __("lang_js_tablesexport_excel");?>
",
            lang_js_tablesexport_pdf = "<?php echo __("lang_js_tablesexport_pdf");?>
",
            lang_requests_build_submitrequest = "<?php echo __("lang_requests_build_submitrequest");?>
",
            lang_requests_reorder_loader = "<?php echo __("lang_requests_reorder_loader");?>
",
            lang_requests_deleteitem_loader = "<?php echo __("lang_requests_deleteitem_loader");?>
",
            lang_js_calendarall_option = "<?php echo __("lang_js_calendarall_option");?>
",
            lang_js_calendarall_apply = "<?php echo __("lang_js_calendarall_apply");?>
",
            lang_js_calendarall_cancel = "<?php echo __("lang_js_calendarall_cancel");?>
",
            lang_js_calendarall_from = "<?php echo __("lang_js_calendarall_from");?>
",
            lang_js_calendarall_to = "<?php echo __("lang_js_calendarall_to");?>
",
            lang_js_calendarall_week = "<?php echo __("lang_js_calendarall_week");?>
",
            lang_js_calendarall_daysu = "<?php echo __("lang_js_calendarall_daysu");?>
",
            lang_js_calendarall_daymo = "<?php echo __("lang_js_calendarall_daymo");?>
",
            lang_js_calendarall_daytu = "<?php echo __("lang_js_calendarall_daytu");?>
",
            lang_js_calendarall_daywe = "<?php echo __("lang_js_calendarall_daywe");?>
",
            lang_js_calendarall_dayth = "<?php echo __("lang_js_calendarall_dayth");?>
",
            lang_js_calendarall_dayfr = "<?php echo __("lang_js_calendarall_dayfr");?>
",
            lang_js_calendarall_daysa = "<?php echo __("lang_js_calendarall_daysa");?>
",
            lang_js_calendarall_monjan = "<?php echo __("lang_js_calendarall_monjan");?>
",
            lang_js_calendarall_monfeb = "<?php echo __("lang_js_calendarall_monfeb");?>
",
            lang_js_calendarall_monmar = "<?php echo __("lang_js_calendarall_monmar");?>
",
            lang_js_calendarall_monapr = "<?php echo __("lang_js_calendarall_monapr");?>
",
            lang_js_calendarall_monmay = "<?php echo __("lang_js_calendarall_monmay");?>
",
            lang_js_calendarall_monjun = "<?php echo __("lang_js_calendarall_monjun");?>
",
            lang_js_calendarall_monjul = "<?php echo __("lang_js_calendarall_monjul");?>
",
            lang_js_calendarall_monaug = "<?php echo __("lang_js_calendarall_monaug");?>
",
            lang_js_calendarall_monsep = "<?php echo __("lang_js_calendarall_monsep");?>
",
            lang_js_calendarall_monoct = "<?php echo __("lang_js_calendarall_monoct");?>
",
            lang_js_calendarall_monnov = "<?php echo __("lang_js_calendarall_monnov");?>
",
            lang_js_calendarall_mondec = "<?php echo __("lang_js_calendarall_mondec");?>
",
            lang_response_whatsapp_creatingqr = "<?php echo __("lang_response_whatsapp_creatingqr");?>
",
            lang_datatable_addedtoclipboard = "<?php echo __("lang_datatable_addedtoclipboard");?>
",
            lang_datatable_addedtoclipboardkeys = "<?php echo __("lang_datatable_addedtoclipboardkeys");?>
",
            lang_datatable_addedtoclipboardmulti = "<?php echo __("lang_datatable_addedtoclipboardmulti");?>
",
            lang_datatable_addedtoclipboardsingle = "<?php echo __("lang_datatable_addedtoclipboardsingle");?>
",
            lang_js_response_titanechorefreshdesc = "<?php echo __("lang_js_response_titanechorefreshdesc");?>
",
            lang_campaign_popup_titleresume = "<?php echo __("lang_campaign_popup_titleresume");?>
",
            lang_campaign_popup_titlestop = "<?php echo __("lang_campaign_popup_titlestop");?>
",
            lang_campaign_popup_descsmsresume = "<?php echo __("lang_campaign_popup_descsmsresume");?>
",
            lang_campaign_popup_descsmsstop = "<?php echo __("lang_campaign_popup_descsmsstop");?>
",
            lang_campaign_popup_descwaresume = "<?php echo __("lang_campaign_popup_descwaresume");?>
",
            lang_campaign_popup_descwastop = "<?php echo __("lang_campaign_popup_descwastop");?>
",
            lang_plugin_mpg_popuppayumoneymobilenumber = "<?php echo __("lang_plugin_mpg_popuppayumoneymobilenumber");?>
",
            lang_js_wa_form_audiotype_entermsg = "<?php echo __("lang_js_wa_form_audiotype_entermsg");?>
",
            lang_js_wa_form_audionotavail_disinput = "<?php echo __("lang_js_wa_form_audionotavail_disinput");?>
";

        fetchInject([
            "<?php echo _assets("js/template.dashboard.js");?>
", <?php echo plugin_scripts;?>

        ], fetchInject([
            "<?php echo _assets("js/custom.run.js",true);?>
", <?php echo plugin_styles;?>

        ], fetchInject([
            "<?php echo _assets("js/functions.js");?>
",
            "<?php echo _assets("js/libs/he.min.js");?>
",
            "<?php echo _assets("js/libs/mfb.min.js");?>
",
            "<?php echo _assets("js/libs/card.min.js");?>
",
            "<?php echo _assets("js/libs/daterangepicker.min.js");?>
"
        ], fetchInject([
            "<?php echo _assets("js/libs/pjax.min.js");?>
",
            "<?php echo _assets("js/libs/moment.min.js");?>
",
            "<?php echo _assets("js/libs/waves.min.js");?>
",
            "<?php echo _assets("js/libs/nprogress.min.js");?>
",
            "<?php echo _assets("js/libs/jquery.loading.min.js");?>
",
            "<?php echo _assets("js/libs/qrcode.min.js");?>
",
            "<?php echo _assets("js/libs/scrollto.min.js");?>
",
            "<?php echo _assets("js/libs/izitoast.min.js");?>
",
            "<?php echo _assets("js/libs/codeflask.min.js");?>
",
            "<?php echo _assets("js/libs/clipboard.min.js");?>
",
            "<?php echo _assets("js/libs/autocomplete.min.js");?>
",
            "<?php echo _assets("js/libs/iframeResizer.min.js");?>
",
            "<?php echo _assets("js/libs/bootstrap-select.min.js");?>
",
            "<?php echo _assets("js/libs/jquery.word-and-character-counter.min.js");?>
",
            "<?php echo _assets("js/libs/cookieconsent.min.js");?>
",
            "<?php echo _assets("js/libs/datatables.min.js");?>
",
            "<?php echo _assets("js/libs/tooltipster.bundle.min.js");?>
",
            "<?php echo _assets("js/libs/alertsound.min.js");?>
",
            "<?php echo _assets("js/libs/jsoneditor.min.js");?>
",
            "<?php echo _assets("js/libs/echo.min.js");?>
"
        ], fetchInject([
            "<?php echo _assets("js/libs/bootstrap.min.js");?>
"
        ], fetchInject([
            "<?php echo _assets("js/libs/jquery.min.js");?>
",
            "<?php echo _assets("css/custom.css",true);?>
",
            "<?php if (language_rtl) {
echo _assets("css/libs/mfb.rtl.min.css");
} else {
echo _assets("css/libs/mfb.min.css");
}?>",
            "<?php echo _assets("css/libs/waves.min.css");?>
",
            "<?php echo _assets("css/libs/animate.min.css");?>
",
            "<?php echo _assets("css/libs/izitoast.min.css");?>
",
            "<?php echo _assets("css/libs/datatables.min.css");?>
",
            "<?php echo _assets("css/libs/daterangepicker.min.css");?>
",
            "<?php echo _assets("css/libs/bootstrap-select.min.css");?>
",
            "<?php echo _assets("css/libs/cookieconsent.min.css");?>
",
            "<?php echo _assets("css/libs/tooltipster.bundle.min.css");?>
",
            "<?php echo _assets("css/libs/jsoneditor.min.css");?>
"
        ]))))));
    <?php echo '</script'; ?>
>
</body>

</html><?php }
}
