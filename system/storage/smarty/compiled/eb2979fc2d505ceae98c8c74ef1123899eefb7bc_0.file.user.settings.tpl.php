<?php
/* Smarty version 4.3.2, created on 2023-10-19 00:26:23
  from 'C:\laragon\www\zender\templates\dashboard\widgets\modals\user.settings.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6530da1fa190d4_70803595',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eb2979fc2d505ceae98c8c74ef1123899eefb7bc' => 
    array (
      0 => 'C:\\laragon\\www\\zender\\templates\\dashboard\\widgets\\modals\\user.settings.tpl',
      1 => 1697678233,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6530da1fa190d4_70803595 (Smarty_Internal_Template $_smarty_tpl) {
?><form zender-form>
    <div class="modal-content">
        <div class="modal-header">
            <h3 class="modal-title">
                <i class="la la-user-cog la-lg"></i> <?php echo $_smarty_tpl->tpl_vars['title']->value;?>

            </h3>

            <button type="button" class="close" data-dismiss="modal">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        
        <div class="modal-body">
            <div class="form-row">
                <div class="form-group col-12">
                    <label>
                        <?php echo __("lang_form_avatar");?>
 <i class="la la-info-circle" title="<?php echo __("lang_and_uset17");?>
"></i>
                    </label>
                    <input type="file" name="avatar" class="form-control pb-5">
                </div>

                <div class="form-group col-12">
                    <label>
                        <?php echo __("lang_form_name");?>
 <i class="la la-info-circle" title="<?php echo __("lang_and_uset24");?>
"></i>
                    </label>
                    <input type="text" name="name" class="form-control" placeholder="<?php echo __("lang_and_uset26");?>
" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['user']['name'];?>
">
                </div>

                <div class="form-group col-12">
                    <label>
                        <?php echo __("lang_form_emailaddress");?>
 <i class="la la-info-circle" title="<?php echo __("lang_and_uset31");?>
"></i>
                    </label>
                    <input type="text" name="email" class="form-control" placeholder="<?php echo __("lang_and_uset33");?>
" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['user']['email'];?>
">
                </div>

                <div class="form-group col-12">
                    <label>
                        <?php echo __("lang_form_usertimezone");?>
 <i class="la la-info-circle" title="<?php echo __("lang_and_uset38");?>
"></i>
                    </label>
                    <select name="timezone" class="form-control" data-live-search="true">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value['timezones'], 'timezone');
$_smarty_tpl->tpl_vars['timezone']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['timezone']->value) {
$_smarty_tpl->tpl_vars['timezone']->do_else = false;
?>
                        <option value="<?php echo strtolower($_smarty_tpl->tpl_vars['timezone']->value);?>
" <?php if (strtolower($_smarty_tpl->tpl_vars['timezone']->value) == strtolower(logged_timezone)) {?>selected<?php }?>><?php echo strtoupper($_smarty_tpl->tpl_vars['timezone']->value);?>
</option>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>
                </div>

                <div class="form-group col-12">
                    <label>
                        <?php echo __("lang_forms_edituser_clockformat");?>
 <i class="la la-info-circle" title="<?php echo __("lang_forms_edituser_clockformathelp");?>
"></i>
                    </label>
                    <select name="clock_format" class="form-control" data-live-search="true">
                        <option value="1" <?php if ($_smarty_tpl->tpl_vars['data']->value['formatting']['container']['clock_format'] < 2) {?>selected<?php }?>><?php echo __("lang_forms_edituser_clockformatselect1");?>
</option>
                        <option value="2" <?php if ($_smarty_tpl->tpl_vars['data']->value['formatting']['container']['clock_format'] > 1) {?>selected<?php }?>><?php echo __("lang_forms_edituser_clockformatselect2");?>
</option>
                    </select>
                </div>

                <div class="form-group col-12">
                    <label>
                        <?php echo __("lang_forms_edituser_dateformat");?>
 <i class="la la-info-circle" title="<?php echo __("lang_forms_edituser_dateformathelp");?>
"></i>
                    </label>
                    <select name="date_format" class="form-control" data-live-search="true">
                        <option value="1" <?php if ($_smarty_tpl->tpl_vars['data']->value['formatting']['container']['date_format'] < 2) {?>selected<?php }?>>MM<?php echo $_smarty_tpl->tpl_vars['data']->value['formatting']['container']['separator_selected'];?>
DD<?php echo $_smarty_tpl->tpl_vars['data']->value['formatting']['container']['separator_selected'];?>
YYYY</option>
                        <option value="2" <?php if ($_smarty_tpl->tpl_vars['data']->value['formatting']['container']['date_format'] == 2) {?>selected<?php }?>>DD<?php echo $_smarty_tpl->tpl_vars['data']->value['formatting']['container']['separator_selected'];?>
MM<?php echo $_smarty_tpl->tpl_vars['data']->value['formatting']['container']['separator_selected'];?>
YYYY</option>
                        <option value="3" <?php if ($_smarty_tpl->tpl_vars['data']->value['formatting']['container']['date_format'] == 3) {?>selected<?php }?>>YYYY<?php echo $_smarty_tpl->tpl_vars['data']->value['formatting']['container']['separator_selected'];?>
MM<?php echo $_smarty_tpl->tpl_vars['data']->value['formatting']['container']['separator_selected'];?>
DD</option>
                        <option value="4" <?php if ($_smarty_tpl->tpl_vars['data']->value['formatting']['container']['date_format'] > 3) {?>selected<?php }?>>YYYY<?php echo $_smarty_tpl->tpl_vars['data']->value['formatting']['container']['separator_selected'];?>
DD<?php echo $_smarty_tpl->tpl_vars['data']->value['formatting']['container']['separator_selected'];?>
MM</option>
                    </select>
                </div>

                <div class="form-group col-12">
                    <label>
                        <?php echo __("lang_forms_edituser_dateseparator");?>
 <i class="la la-info-circle" title="<?php echo __("lang_forms_edituser_dateseparatorhelp");?>
"></i>
                    </label>
                    <select name="date_separator" class="form-control" data-live-search="true">
                        <option value="1" <?php if ($_smarty_tpl->tpl_vars['data']->value['formatting']['container']['date_separator'] < 2) {?>selected<?php }?>>MM-DD-YYYY</option>
                        <option value="2" <?php if ($_smarty_tpl->tpl_vars['data']->value['formatting']['container']['date_separator'] == 2) {?>selected<?php }?>>MM/DD/YYYY</option>
                        <option value="3" <?php if ($_smarty_tpl->tpl_vars['data']->value['formatting']['container']['date_separator'] == 3) {?>selected<?php }?>>MM.DD.YYYY</option>
                        <option value="4" <?php if ($_smarty_tpl->tpl_vars['data']->value['formatting']['container']['date_separator'] > 3) {?>selected<?php }?>>MM DD YYYY</option>
                    </select>
                </div>

                <div class="form-group col-12">
                    <label>
                        <?php echo __("lang_and_uset49");?>
 <i class="la la-info-circle" title="<?php echo __("lang_and_uset49_1");?>
"></i>
                    </label>
                    <select name="country" class="form-control" data-live-search="true">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value['countries'], 'country');
$_smarty_tpl->tpl_vars['country']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['country']->key => $_smarty_tpl->tpl_vars['country']->value) {
$_smarty_tpl->tpl_vars['country']->do_else = false;
$__foreach_country_1_saved = $_smarty_tpl->tpl_vars['country'];
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['country']->key;?>
" data-tokens="<?php echo strtolower($_smarty_tpl->tpl_vars['country']->value);?>
" <?php if ($_smarty_tpl->tpl_vars['country']->key == logged_country) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['country']->value;?>
 (<?php echo $_smarty_tpl->tpl_vars['country']->key;?>
)</option>
                        <?php
$_smarty_tpl->tpl_vars['country'] = $__foreach_country_1_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>
                </div>

                <div class="form-group col-12">
                    <label>
                        <?php echo __("lang_and_uset60");?>
 <i class="la la-info-circle" title="<?php echo __("lang_and_uset60_1");?>
"></i>
                    </label>
                    <select name="alertsound" class="form-control">
                        <option value="1" <?php if ($_smarty_tpl->tpl_vars['data']->value['user']['alertsound'] < 2) {?>selected<?php }?>><?php echo __("lang_form_enable");?>
</option>
                        <option value="2" <?php if ($_smarty_tpl->tpl_vars['data']->value['user']['alertsound'] > 1) {?>selected<?php }?>><?php echo __("lang_form_disable");?>
</option>
                    </select>
                </div>

                <div class="form-group col-12">
                    <label>
                        <?php echo __("lang_form_changepass");?>
 <i class="la la-info-circle" title="<?php echo __("lang_and_uset70");?>
"></i>
                    </label>
                    <input type="password" name="password" class="form-control" placeholder="<?php echo __("lang_form_password_leave");?>
">
                </div>

                <input type="hidden" name="current_email" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['user']['email'];?>
">
            </div>
        </div>

        <div class="modal-footer">
            <button type="submit" class="btn btn-lg btn-primary">
                <i class="la la-check-circle la-lg"></i> <?php echo __("lang_btn_save");?>

            </button>
        </div>
    </div>
</form><?php }
}
