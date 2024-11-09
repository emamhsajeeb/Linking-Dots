<?php
/* Smarty version 5.4.1, created on 2024-11-02 11:07:23
  from 'file:__reaction_emojis.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_672607eb1a7b64_08522069',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e4e6e48f103a4e98a6547116940354da1950d689' => 
    array (
      0 => '__reaction_emojis.tpl',
      1 => 1667439018,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_672607eb1a7b64_08522069 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/dhakabypass/linkingdots.dev/content/themes/default/templates';
?><!-- reaction -->
<div class="emoji">
  <img src="<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('reactions')[$_smarty_tpl->getValue('_reaction')]['image'];?>
" alt="<?php echo $_smarty_tpl->getValue('reactions')[$_smarty_tpl->getValue('_reaction')]['title'];?>
" />
</div>
<!-- reaction --><?php }
}
