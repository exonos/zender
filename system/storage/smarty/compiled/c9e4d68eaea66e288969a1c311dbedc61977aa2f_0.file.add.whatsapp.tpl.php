<?php
/* Smarty version 4.3.2, created on 2023-10-19 00:24:03
  from 'C:\laragon\www\zender\templates\dashboard\widgets\modals\add.whatsapp.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6530d993a237e4_15409387',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c9e4d68eaea66e288969a1c311dbedc61977aa2f' => 
    array (
      0 => 'C:\\laragon\\www\\zender\\templates\\dashboard\\widgets\\modals\\add.whatsapp.tpl',
      1 => 1697678233,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6530d993a237e4_15409387 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal-content">
    <div class="modal-header">
        <h3 class="modal-title" zender-wa-link-title>
            <i class="la la-whatsapp la-lg"></i> <?php echo $_smarty_tpl->tpl_vars['title']->value;?>

        </h3>
    </div>
    
    <div class="modal-body mb-2">
        <div class="text-center">
            <div id="wa_intro">
                <p class="px-5"><?php echo ___(__("lang_widgets_addwhatsapp_newmodal"),array($_smarty_tpl->tpl_vars['data']->value['linkbtn']));?>
</p>
                <div class="btn-group">
                    <button class="btn btn-primary btn-lg" zender-whatsapp-link>
                        <i class="la la-chain"></i> <?php echo __("lang_and_whatsapp_line16");?>

                    </button>
                    <button class="btn btn-danger btn-lg" data-dismiss="modal">
                        <i class="la la-close"></i> <?php echo __("lang_widgets_addwhatsapp_newmodal4");?>

                    </button>
                </div>
            </div>

            <div id="wa_link">
                <div class="mt-2 mb-3" id="wa_qrcode"></div>
                <h1 id="wa_countdown"></h1>
            </div>
        </div>
    </div>
</div><?php }
}
