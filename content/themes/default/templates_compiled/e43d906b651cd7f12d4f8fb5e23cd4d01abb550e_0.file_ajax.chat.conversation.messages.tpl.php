<?php
/* Smarty version 5.4.1, created on 2024-11-05 16:23:48
  from 'file:ajax.chat.conversation.messages.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_672a46942570c1_66822901',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e43d906b651cd7f12d4f8fb5e23cd4d01abb550e' => 
    array (
      0 => 'ajax.chat.conversation.messages.tpl',
      1 => 1647990182,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:ajax.chat.messages.tpl' => 1,
  ),
))) {
function content_672a46942570c1_66822901 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/dhakabypass/linkingdots.dev/content/themes/default/templates';
if ($_smarty_tpl->getValue('conversation')['total_messages'] >= $_smarty_tpl->getValue('system')['max_results']) {?>
  <!-- see-more -->
  <div class="alert alert-chat see-more small js_see-more" data-id=<?php echo $_smarty_tpl->getValue('conversation')['conversation_id'];?>
 data-get="messages">
    <span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Loading Older Messages");?>
</span>
    <div class="loader loader_small x-hidden"></div>
  </div>
  <!-- see-more -->
<?php }?>

<ul>
  <?php $_smarty_tpl->renderSubTemplate('file:ajax.chat.messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('messages'=>$_smarty_tpl->getValue('conversation')['messages']), (int) 0, $_smarty_current_dir);
?>
</ul><?php }
}
