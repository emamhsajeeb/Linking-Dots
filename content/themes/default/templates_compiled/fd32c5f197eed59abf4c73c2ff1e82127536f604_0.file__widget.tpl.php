<?php
/* Smarty version 5.4.1, created on 2024-10-30 17:20:10
  from 'file:_widget.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_67226acaa857e8_87498743',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fd32c5f197eed59abf4c73c2ff1e82127536f604' => 
    array (
      0 => '_widget.tpl',
      1 => 1724262622,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67226acaa857e8_87498743 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/dhakabypass/linkingdots.dev/content/themes/default/templates';
if ($_smarty_tpl->getValue('widgets')) {?>
  <!-- Widgets -->
  <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('widgets'), 'widget');
$foreach22DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('widget')->value) {
$foreach22DoElse = false;
?>
    <?php if ($_smarty_tpl->getValue('widget')['target_audience'] == 'all' || ($_smarty_tpl->getValue('widget')['target_audience'] == 'visitors' && !$_smarty_tpl->getValue('user')->_logged_in) || ($_smarty_tpl->getValue('widget')['target_audience'] == 'members' && $_smarty_tpl->getValue('user')->_logged_in)) {?>
      <div class="card">
        <div class="card-header">
          <strong><?php ob_start();
echo $_smarty_tpl->getValue('widget')['title'];
$_prefixVariable1 = ob_get_clean();
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_prefixVariable1);?>
</strong>
        </div>
        <div class="card-body"><?php echo $_smarty_tpl->getValue('widget')['code'];?>
</div>
      </div>
    <?php }?>
  <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
  <!-- Widgets -->
<?php }
}
}
