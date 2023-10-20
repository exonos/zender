<?php
/* Smarty version 4.3.2, created on 2023-10-19 14:17:54
  from 'C:\laragon\www\zender\templates\dashboard\pages\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6530ca12a06412_68650881',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ef4e263d195789eefeed9f5bded61399ec301984' => 
    array (
      0 => 'C:\\laragon\\www\\zender\\templates\\dashboard\\pages\\login.tpl',
      1 => 1697678232,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../modules/analytics.block.tpl' => 1,
  ),
),false)) {
function content_6530ca12a06412_68650881 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container-fluid" zender-wrapper zender-authenticate-page zender-wrapper-authenticate>
    <?php $_smarty_tpl->_subTemplateRender("file:../modules/analytics.block.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div class="row justify-content-center align-items-center" zender-authenticate-form>
        <div class="col-md-<?php if (isTablet) {?>6<?php } else { ?>4<?php }?>">
            <div class="mb-4 text-center" zender-authenticate-logo>
                <a href="<?php echo site_url;?>
"><img src="<?php echo get_image("logo_light");?>
"></a>
            </div>

            <div class="auth-form card">
                <div class="card-body">
                    <div zender-login-confirm>
                        <?php if (system_social_auth < 2) {?>
                        <?php if (in_array("facebook",explode(",",system_social_platforms))) {?>
                        <a href="<?php echo site_url;?>
/social/facebook" class="btn btn-info btn-lg btn-block text-white">
                            <i class="la la-facebook"></i> <?php echo __("lang_and_dash_pg_log_line14");?>

                        </a>
                        <?php }?>
                        <?php if (in_array("google",explode(",",system_social_platforms))) {?>
                        <a href="<?php echo site_url;?>
/social/google" class="btn btn-danger btn-lg btn-block text-white">
                            <i class="la la-google"></i> <?php echo __("lang_and_dash_pg_log_line17");?>

                        </a>
                        <?php }?>
                        <?php if (in_array("vk",explode(",",system_social_platforms))) {?>
                        <a href="<?php echo site_url;?>
/social/vkontakte" class="btn btn-primary btn-lg btn-block text-white"><i class="la la-vk"></i> <?php echo __("lang_and_dash_pg_log_line20");?>
</a>
                        <?php }?>

                        <div class="row mt-4">
                            <div class="col"><hr></div>
                            <div class="col-auto"><?php echo __("lang_form_loginor");?>
</div>
                            <div class="col"><hr></div>
                        </div>
                        <?php }?>

                        <form zender-authenticate-login>
                            <div class="form-group mb-3">
                                <input type="text" name="email" class="input form-control" placeholder="<?php echo __("lang_form_emailaddress");?>
">
                            </div>

                            <div class="form-group mb-3">
                                <input type="password" name="password" class="input form-control" placeholder="<?php echo __("lang_form_password");?>
">
                            </div>

                            <?php if (system_recaptcha < 2) {?>
                            <?php if (!empty(system_recaptcha_key) || !empty(system_recaptcha_secret)) {?>
                            <div class="form-group text-center mb-3">
                                <div class="g-recaptcha" data-sitekey="<?php echo system_recaptcha_key;?>
"></div>
                            </div>
                            <?php }?>
                            <?php }?>

                            <div class="btn-group-vertical btn-group-lg btn-block">
                                <button type="submit" class="btn btn-success p-2">
                                    <i class="la la-sign-in"></i> <?php echo __("lang_btn_signin");?>

                                </button>

                                <?php if (system_registrations < 2) {?>
                                <a href="<?php echo site_url("dashboard/authenticate/register");?>
" class="btn btn-warning p-2" zender-nav>
                                    <i class="la la-edit"></i> <?php echo __("lang_and_dash_pg_log_line54");?>

                                </a>
                                <?php }?>
                            </div>
                        </form>

                        <div class="mt-3 text-center">
                            <a href="<?php echo site_url("dashboard/authenticate/forgot");?>
" class="text-uppercase" zender-nav><?php echo __("lang_form_forgotpass");?>
</a>
                        </div>

                        <?php if (system_recaptcha < 2) {?>
                        <?php if (!empty(system_recaptcha_key) || !empty(system_recaptcha_secret)) {?>
                        <?php echo '<script'; ?>
 src="https://www.recaptcha.net/recaptcha/api.js" async defer><?php echo '</script'; ?>
>
                        <?php }?>
                        <?php }?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><?php }
}
