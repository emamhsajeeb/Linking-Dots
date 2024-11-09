<?php
/* Smarty version 5.4.1, created on 2024-11-03 14:39:48
  from 'file:settings.linked.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_67278b347f6250_94022156',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '797c1f2f1a79cf827e944d4f835d8f17114b50b6' => 
    array (
      0 => 'settings.linked.tpl',
      1 => 1710347426,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__svg_icons.tpl' => 7,
  ),
))) {
function content_67278b347f6250_94022156 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/dhakabypass/linkingdots.dev/content/themes/default/templates';
?><div class="card-header with-icon">
  <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"linked_accounts",'class'=>"main-icon mr15",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
  <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Linked Accounts");?>

</div>
<div class="card-body">
  <?php if ($_smarty_tpl->getValue('system')['facebook_login_enabled']) {?>
    <div class="form-table-row">
      <div class="avatar">
        <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"facebook",'width'=>"40px",'height'=>"40px"), (int) 0, $_smarty_current_dir);
?>
      </div>
      <div>
        <div class="form-label h6 mb5"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Facebook");?>
</div>
        <div class="form-text d-none d-sm-block">
          <?php if ($_smarty_tpl->getValue('user')->_data['facebook_connected']) {?>
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Your account is connected to");?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Facebook");?>

          <?php } else { ?>
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Connect your account to");?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Facebook");?>

          <?php }?>
        </div>
      </div>
      <div class="text-end">
        <?php if ($_smarty_tpl->getValue('user')->_data['facebook_connected']) {?>
          <a class="btn btn-sm btn-danger" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/revoke/facebook"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Disconnect");?>
</a>
        <?php } else { ?>
          <a class="btn btn-sm btn-primary" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/connect/facebook"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Connect");?>
</a>
        <?php }?>
      </div>
    </div>
  <?php }?>

  <?php if ($_smarty_tpl->getValue('system')['google_login_enabled']) {?>
    <div class="form-table-row">
      <div class="avatar">
        <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"google",'width'=>"40px",'height'=>"40px"), (int) 0, $_smarty_current_dir);
?>
      </div>
      <div>
        <div class="form-label h6 mb5"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Google");?>
</div>
        <div class="form-text d-none d-sm-block">
          <?php if ($_smarty_tpl->getValue('user')->_data['google_connected']) {?>
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Your account is connected to");?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Google");?>

          <?php } else { ?>
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Connect your account to");?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Google");?>

          <?php }?>
        </div>
      </div>
      <div class="text-end">
        <?php if ($_smarty_tpl->getValue('user')->_data['google_connected']) {?>
          <a class="btn btn-sm btn-danger" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/revoke/google"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Disconnect");?>
</a>
        <?php } else { ?>
          <a class="btn btn-sm btn-primary" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/connect/google"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Connect");?>
</a>
        <?php }?>
      </div>
    </div>
  <?php }?>

  <?php if ($_smarty_tpl->getValue('system')['twitter_login_enabled']) {?>
    <div class="form-table-row">
      <div class="avatar">
        <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"twitter",'width'=>"40px",'height'=>"40px"), (int) 0, $_smarty_current_dir);
?>
      </div>
      <div>
        <div class="form-label h6 mb5"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Twitter");?>
</div>
        <div class="form-text d-none d-sm-block">
          <?php if ($_smarty_tpl->getValue('user')->_data['twitter_connected']) {?>
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Your account is connected to");?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Twitter");?>

          <?php } else { ?>
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Connect your account to");?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Twitter");?>

          <?php }?>
        </div>
      </div>
      <div class="text-end">
        <?php if ($_smarty_tpl->getValue('user')->_data['twitter_connected']) {?>
          <a class="btn btn-sm btn-danger" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/revoke/twitter"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Disconnect");?>
</a>
        <?php } else { ?>
          <a class="btn btn-sm btn-primary" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/connect/twitter"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Connect");?>
</a>
        <?php }?>
      </div>
    </div>
  <?php }?>

  <?php if ($_smarty_tpl->getValue('system')['linkedin_login_enabled']) {?>
    <div class="form-table-row">
      <div class="avatar">
        <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"linkedin",'width'=>"40px",'height'=>"40px"), (int) 0, $_smarty_current_dir);
?>
      </div>
      <div>
        <div class="form-label h6 mb5"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Linkedin");?>
</div>
        <div class="form-text d-none d-sm-block">
          <?php if ($_smarty_tpl->getValue('user')->_data['linkedin_connected']) {?>
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Your account is connected to");?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Linkedin");?>

          <?php } else { ?>
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Connect your account to");?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Linkedin");?>

          <?php }?>
        </div>
      </div>
      <div class="text-end">
        <?php if ($_smarty_tpl->getValue('user')->_data['linkedin_connected']) {?>
          <a class="btn btn-sm btn-danger" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/revoke/linkedin"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Disconnect");?>
</a>
        <?php } else { ?>
          <a class="btn btn-sm btn-primary" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/connect/linkedin"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Connect");?>
</a>
        <?php }?>
      </div>
    </div>
  <?php }?>

  <?php if ($_smarty_tpl->getValue('system')['vkontakte_login_enabled']) {?>
    <div class="form-table-row">
      <div class="avatar">
        <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"vk",'width'=>"40px",'height'=>"40px"), (int) 0, $_smarty_current_dir);
?>
      </div>
      <div>
        <div class="form-label h6 mb5"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Vkontakte");?>
</div>
        <div class="form-text d-none d-sm-block">
          <?php if ($_smarty_tpl->getValue('user')->_data['vkontakte_connected']) {?>
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Your account is connected to");?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Vkontakte");?>

          <?php } else { ?>
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Connect your account to");?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Vkontakte");?>

          <?php }?>
        </div>
      </div>
      <div class="text-end">
        <?php if ($_smarty_tpl->getValue('user')->_data['vkontakte_connected']) {?>
          <a class="btn btn-sm btn-danger" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/revoke/vkontakte"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Disconnect");?>
</a>
        <?php } else { ?>
          <a class="btn btn-sm btn-primary" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/connect/vkontakte"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Connect");?>
</a>
        <?php }?>
      </div>
    </div>
  <?php }?>

  <?php if ($_smarty_tpl->getValue('system')['wordpress_login_enabled']) {?>
    <div class="form-table-row">
      <div class="avatar">
        <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"wordpress",'width'=>"40px",'height'=>"40px"), (int) 0, $_smarty_current_dir);
?>
      </div>
      <div>
        <div class="form-label h6 mb5"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Wordpress");?>
</div>
        <div class="form-text d-none d-sm-block">
          <?php if ($_smarty_tpl->getValue('user')->_data['wordpress_connected']) {?>
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Your account is connected to");?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("wordpress");?>

          <?php } else { ?>
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Connect your account to");?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("wordpress");?>

          <?php }?>
        </div>
      </div>
      <div class="text-end">
        <?php if ($_smarty_tpl->getValue('user')->_data['wordpress_connected']) {?>
          <a class="btn btn-sm btn-danger" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/revoke/wordpress"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Disconnect");?>
</a>
        <?php } else { ?>
          <a class="btn btn-sm btn-primary" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/connect/wordpress"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Connect");?>
</a>
        <?php }?>
      </div>
    </div>
  <?php }?>

  <?php if ($_smarty_tpl->getValue('system')['sngine_login_enabled']) {?>
    <div class="form-table-row">
      <div class="avatar">
        <img src="<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('system')['sngine_app_icon'];?>
" width="40" height="40" alt="<?php ob_start();
echo $_smarty_tpl->getValue('system')['sngine_app_name'];
$_prefixVariable1 = ob_get_clean();
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_prefixVariable1);?>
">
      </div>
      <div>
        <div class="form-label h6 mb5"><?php ob_start();
echo $_smarty_tpl->getValue('system')['sngine_app_name'];
$_prefixVariable2 = ob_get_clean();
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_prefixVariable2);?>
</div>
        <div class="form-text d-none d-sm-block">
          <?php if ($_smarty_tpl->getValue('user')->_data['sngine_connected']) {?>
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Your account is connected to");?>
 <?php ob_start();
echo $_smarty_tpl->getValue('system')['sngine_app_name'];
$_prefixVariable3 = ob_get_clean();
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_prefixVariable3);?>

          <?php } else { ?>
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Connect your account to");?>
 <?php ob_start();
echo $_smarty_tpl->getValue('system')['sngine_app_name'];
$_prefixVariable4 = ob_get_clean();
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_prefixVariable4);?>

          <?php }?>
        </div>
      </div>
      <div class="text-end">
        <?php if ($_smarty_tpl->getValue('user')->_data['sngine_connected']) {?>
          <a class="btn btn-sm btn-danger" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/revoke/sngine"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Disconnect");?>
</a>
        <?php } else { ?>
          <a class="btn btn-sm btn-primary" href="https://<?php echo $_smarty_tpl->getValue('system')['sngine_app_domain'];?>
/api/oauth?app_id=<?php echo $_smarty_tpl->getValue('system')['sngine_appid'];?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Connect");?>
</a>
        <?php }?>
      </div>
    </div>
  <?php }?>
</div><?php }
}
