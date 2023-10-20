<?php
/* Smarty version 4.3.2, created on 2023-10-19 10:11:27
  from 'C:\laragon\www\zender\templates\dashboard\widgets\modals\add.apikey.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6531633fa9dcf0_84594606',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c556770f8ce16ee430b20b2b616c5de3fd3bfaf7' => 
    array (
      0 => 'C:\\laragon\\www\\zender\\templates\\dashboard\\widgets\\modals\\add.apikey.tpl',
      1 => 1697678232,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6531633fa9dcf0_84594606 (Smarty_Internal_Template $_smarty_tpl) {
?><form zender-form>
    <div class="modal-content">
        <div class="modal-header">
            <h3 class="modal-title">
                <i class="la la-key la-lg"></i> <?php echo $_smarty_tpl->tpl_vars['title']->value;?>

            </h3>

            <button type="button" class="close" data-dismiss="modal">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        
        <div class="modal-body">
            <div class="form-row">
                <div class="form-group col-12">
                    <label>
                        <?php echo __("lang_form_name");?>
 <i class="la la-info-circle" title="<?php echo __("lang_and_dash_api_line17");?>
"></i>
                    </label>
                    <input type="text" name="name" class="form-control" placeholder="<?php echo __("lang_and_dash_api_line19");?>
">
                </div>

                <div class="form-group col-12">
                    <label>
                        <?php echo __("lang_form_permissions");?>
 <i class="la la-info-circle" title="<?php echo __("lang_and_dash_api_line24");?>
"></i>
                    </label>
                    <select name="permissions[]" class="form-control" data-live-search="true" multiple>
                        <option value="otp">otp</option>
                        <option value="sms_send" selected>sms_send</option>
                        <option value="sms_send_bulk">sms_send_bulk</option>
                        <option value="wa_send" selected>wa_send</option>
                        <option value="wa_send_bulk">wa_send_bulk</option>
                        <option value="ussd">ussd</option>
                        <option value="validate_wa_phone">validate_wa_phone</option>
                        <option value="get_credits">get_credits</option>
                        <option value="get_earnings">get_earnings</option>
                        <option value="get_subscription">get_subscription</option>
                        <option value="get_sms_pending">get_sms_pending</option>
                        <option value="get_wa_pending">get_wa_pending</option>
                        <option value="get_sms_received">get_sms_received</option>
                        <option value="get_wa_received">get_wa_received</option>
                        <option value="get_sms_sent">get_sms_sent</option>
                        <option value="get_sms_campaigns">get_sms_campaigns</option>
                        <option value="get_wa_sent">get_wa_sent</option>
                        <option value="get_wa_campaigns">get_wa_campaigns</option>
                        <option value="get_contacts" selected>get_contacts</option>
                        <option value="get_groups">get_groups</option>
                        <option value="get_ussd">get_ussd</option>
                        <option value="get_notifications">get_notifications</option>
                        <option value="get_wa_accounts">get_wa_accounts</option>
                        <option value="get_devices" selected>get_devices</option>
                        <option value="get_rates">get_rates</option>
                        <option value="get_shorteners">get_shorteners</option>
                        <option value="get_unsubscribed">get_unsubscribed</option>
                        <option value="create_whatsapp">create_whatsapp</option>
                        <option value="create_contact">create_contact</option>
                        <option value="create_group">create_group</option>
                        <option value="start_sms_campaign">start_sms_campaign</option>
                        <option value="stop_sms_campaign">stop_sms_campaign</option>
                        <option value="start_wa_campaign">start_wa_campaign</option>
                        <option value="stop_wa_campaign">stop_wa_campaign</option>
                        <option value="delete_contact">delete_contact</option>
                        <option value="delete_group">delete_group</option>
                        <option value="delete_sms_sent">delete_sms_sent</option>
                        <option value="delete_sms_campaign">delete_sms_campaign</option>
                        <option value="delete_wa_account">delete_wa_account</option>
                        <option value="delete_wa_sent">delete_wa_sent</option>
                        <option value="delete_wa_campaign">delete_wa_campaign</option>
                        <option value="delete_sms_received">delete_sms_received</option>
                        <option value="delete_wa_received">delete_wa_received</option>
                        <option value="delete_ussd">delete_ussd</option>
                        <option value="delete_unsubscribed">delete_unsubscribed</option>
                        <option value="delete_notification">delete_notification</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="modal-footer">
            <button type="submit" class="btn btn-lg btn-primary">
                <i class="la la-check-circle la-lg"></i> <?php echo __("lang_btn_submit");?>

            </button>
        </div>
    </div>
</form><?php }
}
