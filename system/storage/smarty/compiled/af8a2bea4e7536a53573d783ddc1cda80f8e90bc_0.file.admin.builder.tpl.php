<?php
/* Smarty version 4.3.2, created on 2023-10-19 00:22:18
  from 'C:\laragon\www\zender\templates\dashboard\widgets\modals\admin.builder.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6530d92ae703a2_81510212',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'af8a2bea4e7536a53573d783ddc1cda80f8e90bc' => 
    array (
      0 => 'C:\\laragon\\www\\zender\\templates\\dashboard\\widgets\\modals\\admin.builder.tpl',
      1 => 1697678233,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6530d92ae703a2_81510212 (Smarty_Internal_Template $_smarty_tpl) {
?><form zender-form>
    <div class="modal-content">
        <div class="modal-header">
            <h3 class="modal-title">
                <i class="la la-tools la-lg"></i> <?php echo $_smarty_tpl->tpl_vars['title']->value;?>

            </h3>

            <button type="button" class="close" data-dismiss="modal">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        
        <div class="modal-body">
            <div class="form-row">
                <div class="form-group mb-0 col-12">
                    <h4 class="text-uppercase"><?php echo __("lang_and_admin_build_line16");?>
</h4>
                </div>

                <div class="form-group col-md-6">
                    <label>
                        <?php echo __("lang_form_builderpackagename");?>
 <i class="la la-info-circle la-lg" title="<?php echo __("lang_and_admin_build_line21");?>
"></i>
                    </label>
                    <input type="text" name="package_name" class="form-control" placeholder="<?php echo __("lang_and_admin_build_line23");?>
" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['builder']['package_name'];?>
">
                </div>

                <div class="form-group col-md-6">
                    <label>
                        <?php echo __("lang_form_builderappname");?>
 <i class="la la-info-circle la-lg" title="<?php echo __("lang_and_admin_build_line28");?>
"></i>
                    </label>
                    <input type="text" name="app_name" class="form-control" placeholder="<?php echo __("lang_and_admin_build_line30");?>
" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['builder']['app_name'];?>
">
                </div>

                <div class="form-group col-md-6">
                    <label>
                        <?php echo __("lang_form_builderappdesc");?>
 <i class="la la-info-circle la-lg" title="<?php echo __("lang_and_admin_build_line35");?>
"></i>
                    </label>
                    <input type="text" name="app_desc" class="form-control" placeholder="eg. <?php echo __("lang_form_builderappdesc_placeholder");?>
" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['builder']['app_desc'];?>
">
                </div>

                <div class="form-group col-md-6">
                    <label>
                        <?php echo __("lang_and_admin_build_line42");?>
 <i class="la la-info-circle la-lg" title="<?php echo __("lang_and_admin_build_line42_1");?>
"></i>
                    </label>
                    <input type="color" name="app_color" class="form-control" placeholder="<?php echo __("lang_and_admin_build_line44");?>
" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['builder']['app_color'];?>
">
                </div>

                <div class="form-group col-md-6">
                    <label>
                        <?php echo __("lang_and_admin_build_line49");?>
 <i class="la la-info-circle la-lg" title="<?php echo __("lang_and_admin_build_line_49_1");?>
"></i>
                    </label>
                    <input type="text" name="apk_version" class="form-control" placeholder="<?php echo __("lang_and_admin_build_line51");?>
" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['builder']['apk_version'];?>
">
                </div>

                <div class="form-group col-md-6">
                    <label>
                        <?php echo __("lang_and_admin_build_line56");?>
 <i class="la la-info-circle la-lg" title="<?php echo __("lang_and_admin_build_line_56_1");?>
"></i>
                    </label>
                    <input type="text" name="build_email" class="form-control" placeholder="<?php echo __("lang_and_admin_build_line58");?>
" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['builder']['build_email'];?>
">
                </div>

                <div class="form-group mb-0 col-12">
                    <h4 class="text-uppercase"><?php echo __("lang_and_admin_build_line62");?>
</h4>
                </div>

                <div class="form-group col-md-6">
                    <label>
                        <?php echo __("lang_and_admin_build_line67");?>
 <i class="la la-info-circle la-lg" title="<?php echo __("lang_and_admin_build_line67_1");?>
"></i>
                        <?php if ($_smarty_tpl->tpl_vars['data']->value['assets']['google']) {?><span class="badge badge-success"><?php echo __("lang_form_uploaded");?>
</span><?php } else { ?><span class="badge badge-danger"><?php echo __("lang_form_notuploaded");?>
</span><?php }?>
                    </label>
                    <input type="file" name="google" class="form-control pb-5">
                </div>

                <div class="form-group col-md-6">
                    <label>
                        <?php echo __("lang_and_admin_build_line75");?>
 <i class="la la-info-circle la-lg" title="<?php echo __("lang_and_admin_build_line75_1");?>
"></i>
                        <?php if ($_smarty_tpl->tpl_vars['data']->value['assets']['firebase']) {?><span class="badge badge-success"><?php echo __("lang_form_uploaded");?>
</span><?php } else { ?><span class="badge badge-danger"><?php echo __("lang_form_notuploaded");?>
</span><?php }?>
                    </label>
                    <input type="file" name="firebase" class="form-control pb-5">
                </div>

                <div class="form-group mb-0 col-12">
                    <h4 class="text-uppercase"><?php echo __("lang_and_admin_build_line82");?>
</h4>
                </div>

                <div class="form-group col-md-6">
                    <label>
                        <?php echo __("lang_form_builderapplogo");?>
 <i class="la la-info-circle la-lg" title="<?php echo __("lang_and_admin_build_line87");?>
"></i>
                        <?php if ($_smarty_tpl->tpl_vars['data']->value['assets']['logo']) {?><span class="badge badge-success"><?php echo __("lang_form_uploaded");?>
</span><?php } else { ?><span class="badge badge-danger"><?php echo __("lang_form_notuploaded");?>
</span><?php }?>
                    </label>
                    <input type="file" name="app_logo" class="form-control pb-5">
                </div>

                <div class="form-group col-md-6">
                    <label>
                        <?php echo __("lang_and_admin_build_line95");?>
 <i class="la la-info-circle la-lg" title="<?php echo __("lang_and_admin_build_line95_1");?>
"></i>
                        <?php if ($_smarty_tpl->tpl_vars['data']->value['assets']['logo_login']) {?><span class="badge badge-success"><?php echo __("lang_form_uploaded");?>
</span><?php } else { ?><span class="badge badge-danger"><?php echo __("lang_form_notuploaded");?>
</span><?php }?>
                    </label>
                    <input type="file" name="app_logo_login" class="form-control pb-5">
                </div>

                <div class="form-group col-md-6">
                    <label>
                        <?php echo __("lang_form_builderappicon");?>
 <i class="la la-info-circle la-lg" title="<?php echo __("lang_and_admin_build_line103");?>
"></i>
                        <?php if ($_smarty_tpl->tpl_vars['data']->value['assets']['icon']) {?><span class="badge badge-success"><?php echo __("lang_form_uploaded");?>
</span><?php } else { ?><span class="badge badge-danger"><?php echo __("lang_form_notuploaded");?>
</span><?php }?>
                    </label>
                    <input type="file" name="app_icon" class="form-control pb-5">
                </div>

                <div class="form-group col-md-6">
                    <label>
                        <?php echo __("lang_form_builderappsplash");?>
 <i class="la la-info-circle la-lg" title="<?php echo __("lang_and_admin_build_line111");?>
"></i>
                        <?php if ($_smarty_tpl->tpl_vars['data']->value['assets']['splash']) {?><span class="badge badge-success"><?php echo __("lang_form_uploaded");?>
</span><?php } else { ?><span class="badge badge-danger"><?php echo __("lang_form_notuploaded");?>
</span><?php }?>
                    </label>
                    <input type="file" name="app_splash" class="form-control pb-5">
                </div>

                <div class="form-group mb-0 col-12">
                    <h4 class="text-uppercase"><?php echo __("lang_and_admin_build_line118");?>
</h4>
                </div>

                <div class="form-group col-md-6">
                    <label>
                        <?php echo __("lang_and_admin_build_line123");?>
 <i class="la la-info-circle la-lg" title="<?php echo __("lang_and_admin_build_line123_1");?>
"></i>
                    </label>
                    <textarea name="script" class="form-control mb-3" rows="13" placeholder="<?php echo __("lang_and_admin_build_line125");?>
"><?php echo system_app_js;?>
</textarea>
                </div>

                <div class="form-group col-md-6">
                    <label>
                        <?php echo __("lang_and_admin_build_line130");?>
 <i class="la la-info-circle la-lg" title="<?php echo __("lang_and_admin_build_line130_1");?>
"></i>
                    </label>
                    <textarea name="css" class="form-control mb-3" rows="13" placeholder="eg., body { display: none; }"><?php echo system_app_css;?>
</textarea>
                </div>

                <div class="form-group col-12">
                    <label>
                        <?php echo __("lang_and_admin_build_line137");?>
 <i class="la la-info-circle la-lg" title="<?php echo __("lang_and_admin_build_line137_1");?>
"></i>
                    </label>
                    <textarea name="layout" class="form-control mb-3" rows="20" placeholder="eg., alert.success('<?php echo __("lang_and_admin_build_line139");?>
');"><?php echo $_smarty_tpl->tpl_vars['data']->value['layout'];?>
</textarea>
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
