<?php
/* Smarty version 5.4.1, created on 2024-10-31 02:05:48
  from 'file:reset.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_6722e5fc58b988_67906378',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c83beab5643d365d7f1bd62992dafb754cbd3cf6' => 
    array (
      0 => 'reset.tpl',
      1 => 1710783770,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_head.tpl' => 1,
    'file:_header.tpl' => 1,
    'file:_footer.tpl' => 1,
  ),
))) {
function content_6722e5fc58b988_67906378 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/dhakabypass/linkingdots.dev/content/themes/default/templates';
$_smarty_tpl->renderSubTemplate('file:_head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
$_smarty_tpl->renderSubTemplate('file:_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<!-- page content -->
<div class="container mt30">
  <div class="row">
    <div class="col-md-6 col-lg-5 mx-md-auto">
      <!-- reset form -->
      <div class="card card-register">
        <div class="card-header">
          <h4 class="card-title"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Forgot your password?");?>
</h4>
          <p class="card-subtitle"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Enter the email address associated with your account and we will send you a link to reset your password.");?>
</p>
        </div>
        <div class="card-body pt0">
          <form class="js_ajax-forms" data-url="core/forget_password.php">
            <!-- email -->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-text bg-transparent"><i class="fas fa-envelope fa-fw"></i></span>
                <input name="email" type="email" class="form-control" placeholder='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Email");?>
' required>
              </div>
            </div>
            <!-- email -->

            <?php if ($_smarty_tpl->getValue('system')['reCAPTCHA_enabled']) {?>
              <div class="form-group">
                <!-- reCAPTCHA -->
                <?php echo '<script'; ?>
 src='https://www.google.com/recaptcha/api.js' async defer><?php echo '</script'; ?>
>
                <div class="g-recaptcha" data-sitekey="<?php echo $_smarty_tpl->getValue('system')['reCAPTCHA_site_key'];?>
"></div>
                <!-- reCAPTCHA -->
              </div>
            <?php }?>

            <div class="d-grid form-group">
              <input type="hidden" name="secret" value="<?php echo $_smarty_tpl->getValue('secret');?>
">
              <button type="submit" class="btn btn-primary">
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Continue");?>

              </button>
            </div>

            <!-- error -->
            <div class="alert alert-danger x-hidden"></div>
            <!-- error -->
          </form>
          <div class="mt20 text-center">
            <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/signin" class="text-link"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Back to Signin");?>
</a>
          </div>
          <div class="mt20 text-center">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Do not have an account?");?>
 <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/signup" class="text-link"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Sign Up");?>
</a>
          </div>
        </div>
      </div>
      <!-- reset form -->
    </div>
  </div>
</div>
<!-- page content -->

<?php $_smarty_tpl->renderSubTemplate('file:_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
}
