<?php
/* Smarty version 4.3.2, created on 2023-10-19 00:25:42
  from 'C:\laragon\www\zender\templates\dashboard\widgets\modals\system.update.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6530d9f6d64630_07024382',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0334c5cfa445ec9106d4dafd250b79df6bb26062' => 
    array (
      0 => 'C:\\laragon\\www\\zender\\templates\\dashboard\\widgets\\modals\\system.update.tpl',
      1 => 1697678233,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6530d9f6d64630_07024382 (Smarty_Internal_Template $_smarty_tpl) {
?><form zender-form>
    <div class="modal-content">
        <div class="modal-header">
            <h3 class="modal-title">
                <i class="la la-file-excel la-lg"></i> <?php echo $_smarty_tpl->tpl_vars['title']->value;?>

            </h3>

            <button type="button" class="close" data-dismiss="modal">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        
        <div class="modal-body">
            <div class="form-row">
                <div class="form-group col-12">
                    <label>
                        <?php echo __("lang_and_sysup17");?>
 <i class="la la-info-circle" title="<?php echo __("lang_and_sysup17_1");?>
"></i>
                    </label>
                    <input type="file" name="update" class="form-control pb-5">
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
