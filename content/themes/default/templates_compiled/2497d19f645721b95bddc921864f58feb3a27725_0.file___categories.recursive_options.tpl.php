<?php
/* Smarty version 5.4.1, created on 2024-10-30 17:20:10
  from 'file:__categories.recursive_options.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_67226aca9e2698_13443488',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2497d19f645721b95bddc921864f58feb3a27725' => 
    array (
      0 => '__categories.recursive_options.tpl',
      1 => 1664819264,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__categories.recursive_options.tpl' => 2,
  ),
))) {
function content_67226aca9e2698_13443488 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/dhakabypass/linkingdots.dev/content/themes/default/templates';
?><option <?php if ($_smarty_tpl->getValue('data_category') == $_smarty_tpl->getValue('category')['category_id']) {?>selected style="font-weight: 600;" class="bg-info" <?php }?> value="<?php echo $_smarty_tpl->getValue('category')['category_id'];?>
">
  <?php echo str_repeat((string) "- - ", (int) $_smarty_tpl->getValue('category')['iteration']);
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getSmarty()->getModifierCallback('truncate')($_smarty_tpl->getValue('category')['category_name'],30));?>

</option>
<?php if ($_smarty_tpl->getValue('category')['sub_categories']) {?>
  <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('category')['sub_categories'], '_category');
$foreach18DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('_category')->value) {
$foreach18DoElse = false;
?>
    <?php $_smarty_tpl->renderSubTemplate('file:__categories.recursive_options.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('category'=>$_smarty_tpl->getValue('_category')), (int) 0, $_smarty_current_dir);
?>
  <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
}
}
}
