<?php
/* Smarty version 5.4.1, created on 2024-11-02 11:58:54
  from 'file:__feeds_notification.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_672613fe43aea1_39802239',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7b967747174ce2ee91c3086dc4afc078c8876773' => 
    array (
      0 => '__feeds_notification.tpl',
      1 => 1707255592,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__svg_icons.tpl' => 2,
    'file:__reaction_emojis.tpl' => 1,
  ),
))) {
function content_672613fe43aea1_39802239 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/dhakabypass/linkingdots.dev/content/themes/default/templates';
?><li class="feeds-item <?php if (!$_smarty_tpl->getValue('notification')['seen']) {?>unread<?php }?>" data-id="<?php echo $_smarty_tpl->getValue('notification')['notification_id'];?>
">
  <a class="data-container" href="<?php echo $_smarty_tpl->getValue('notification')['url'];?>
" <?php if ($_smarty_tpl->getValue('notification')['action'] == "mass_notification") {?>target="_blank" <?php }?>>
    <div class="data-avatar">
      <img src="<?php echo $_smarty_tpl->getValue('notification')['user_picture'];?>
" alt="">
    </div>
    <div class="data-content">
      <div>
        <span class="name"><?php echo $_smarty_tpl->getValue('notification')['name'];?>
</span>
        <?php if (!$_smarty_tpl->getValue('notification')['system_notification'] && $_smarty_tpl->getValue('notification')['user_verified']) {?>
          <span class="verified-badge" data-bs-toggle="tooltip" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Verified User");?>
'>
            <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"verified_badge",'width'=>"20px",'height'=>"20px"), (int) 0, $_smarty_current_dir);
?>
          </span>
        <?php }?>
        <?php if (!$_smarty_tpl->getValue('notification')['system_notification'] && $_smarty_tpl->getValue('notification')['user_subscribed']) {?>
          <span class="pro-badge" data-bs-toggle="tooltip" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Pro User");?>
'>
            <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"pro_badge",'width'=>"20px",'height'=>"20px"), (int) 0, $_smarty_current_dir);
?>
          </span>
        <?php }?>
      </div>
      <div>
        <?php if ($_smarty_tpl->getValue('notification')['reaction']) {?>
          <div class="reaction-btn float-start mr5">
            <div class="reaction-btn-icon">
              <div class="inline-emoji no_animation">
                <?php $_smarty_tpl->renderSubTemplate('file:__reaction_emojis.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_reaction'=>$_smarty_tpl->getValue('notification')['reaction']), (int) 0, $_smarty_current_dir);
?>
              </div>
            </div>
          </div>
        <?php } else { ?>
          <i class="<?php echo $_smarty_tpl->getValue('notification')['icon'];?>
 mr5"></i>
        <?php }?>
        <?php echo $_smarty_tpl->getValue('notification')['message'];?>

      </div>
      <div class="time js_moment" data-time="<?php echo $_smarty_tpl->getValue('notification')['time'];?>
"><?php echo $_smarty_tpl->getValue('notification')['time'];?>
</div>
    </div>
  </a>
</li><?php }
}
