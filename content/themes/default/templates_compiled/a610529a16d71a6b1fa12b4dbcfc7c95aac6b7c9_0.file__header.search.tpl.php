<?php
/* Smarty version 5.4.1, created on 2024-10-30 17:20:10
  from 'file:_header.search.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_67226aca7b5e84_24162474',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a610529a16d71a6b1fa12b4dbcfc7c95aac6b7c9' => 
    array (
      0 => '_header.search.tpl',
      1 => 1692644440,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__svg_icons.tpl' => 1,
    'file:ajax.search.tpl' => 1,
  ),
))) {
function content_67226aca7b5e84_24162474 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/dhakabypass/linkingdots.dev/content/themes/default/templates';
?><div class="search-wrapper d-none d-md-block">
  <form>
    <input id="search-input" type="text" class="form-control" placeholder='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Search");?>
' autocomplete="off">
    <div class="search-input-icon">
      <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"header-search",'class'=>"header-icon",'width'=>"20px",'height'=>"20px"), (int) 0, $_smarty_current_dir);
?>
    </div>
    <div id="search-results" class="dropdown-menu dropdown-widget dropdown-search js_dropdown-keepopen">
      <div class="dropdown-widget-header">
        <span class="title"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Search Results");?>
</span>
      </div>
      <div class="dropdown-widget-body">
        <div class="loader loader_small ptb10"></div>
      </div>
      <a class="dropdown-widget-footer" id="search-results-all" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/search/"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("See All Results");?>
</a>
    </div>
    <?php if ($_smarty_tpl->getValue('user')->_logged_in && $_smarty_tpl->getValue('user')->_data['search_log']) {?>
      <div id="search-history" class="dropdown-menu dropdown-widget dropdown-search js_dropdown-keepopen">
        <div class="dropdown-widget-header">
          <span class="text-link float-end js_clear-searches">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Clear");?>

          </span>
          <span class="title"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Recent Searches");?>
</span>
        </div>
        <div class="dropdown-widget-body">
          <?php $_smarty_tpl->renderSubTemplate('file:ajax.search.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('results'=>$_smarty_tpl->getValue('user')->_data['search_log']), (int) 0, $_smarty_current_dir);
?>
        </div>
        <a class="dropdown-widget-footer" id="search-results-all" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/search/"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Advanced Search");?>
</a>
      </div>
    <?php }?>
  </form>
</div><?php }
}