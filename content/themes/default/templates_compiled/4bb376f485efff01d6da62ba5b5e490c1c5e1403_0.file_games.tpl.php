<?php
/* Smarty version 5.4.1, created on 2024-10-31 06:36:50
  from 'file:games.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_672325828b2647_17841259',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4bb376f485efff01d6da62ba5b5e490c1c5e1403' => 
    array (
      0 => 'games.tpl',
      1 => 1708280874,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_head.tpl' => 1,
    'file:_header.tpl' => 1,
    'file:_sidebar.tpl' => 1,
    'file:__feeds_game.tpl' => 1,
    'file:_no_data.tpl' => 1,
    'file:_footer.tpl' => 1,
  ),
))) {
function content_672325828b2647_17841259 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/dhakabypass/linkingdots.dev/content/themes/default/templates';
$_smarty_tpl->renderSubTemplate('file:_head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
$_smarty_tpl->renderSubTemplate('file:_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<!-- page header -->
<div class="page-header">
  <img class="floating-img d-none d-md-block" src="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->getValue('system')['theme'];?>
/images/headers/undraw_gaming_re_cma2.svg">
  <div class="circle-2"></div>
  <div class="circle-3"></div>
  <div class="<?php if ($_smarty_tpl->getValue('system')['fluid_design']) {?>container-fluid<?php } else { ?>container<?php }?>">
    <h2><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Games");?>
</h2>
    <p class="text-xlg"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('system')['system_description_games']);?>
</p>
  </div>
</div>
<!-- page header -->

<!-- page content -->
<div class="<?php if ($_smarty_tpl->getValue('system')['fluid_design']) {?>container-fluid<?php } else { ?>container<?php }?> sg-offcanvas" style="margin-top: -25px;">

  <div class="position-relative">
    <!-- tabs -->
    <div class="content-tabs rounded-sm shadow-sm clearfix">
      <ul>
        <li <?php if ($_smarty_tpl->getValue('view') == '' || $_smarty_tpl->getValue('view') == "genre") {?>class="active" <?php }?>>
          <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/games"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Discover");?>
</a>
        </li>
        <?php if ($_smarty_tpl->getValue('user')->_logged_in) {?>
          <li <?php if ($_smarty_tpl->getValue('view') != '' && $_smarty_tpl->getValue('view') != "genre") {?>class="active" <?php }?>>
            <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/games/played"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Your Games");?>
</a>
          </li>
        <?php }?>
      </ul>
    </div>
    <!-- tabs -->
  </div>

  <div class="row">

    <?php if ($_smarty_tpl->getValue('view') == '' || $_smarty_tpl->getValue('view') == "genre") {?>
      <!-- left panel -->
      <div class="col-md-4 col-lg-3 sg-offcanvas-sidebar">
        <!-- genres -->
        <div class="card">
          <div class="card-body with-nav">
            <ul class="side-nav">
              <li <?php if ($_smarty_tpl->getValue('view') == '' || $_smarty_tpl->getValue('view') == "search") {?>class="active" <?php }?>>
                <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/games">
                  <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("All");?>

                </a>
              </li>
              <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('genres'), '_genre');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('_genre')->value) {
$foreach0DoElse = false;
?>
                <li <?php if ($_smarty_tpl->getValue('view') == "genre" && $_smarty_tpl->getValue('genre')['genre_id'] == $_smarty_tpl->getValue('_genre')['genre_id']) {?>class="active" <?php }?>>
                  <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/games/genre/<?php echo $_smarty_tpl->getValue('_genre')['genre_id'];?>
/<?php echo $_smarty_tpl->getValue('_genre')['genre_url'];?>
">
                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('_genre')['genre_name']);?>

                  </a>
                </li>
              <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            </ul>
          </div>
        </div>
        <!-- genres -->
      </div>
      <!-- left panel -->
    <?php } else { ?>
      <!-- side panel -->
      <div class="col-12 d-block d-md-none sg-offcanvas-sidebar">
        <?php $_smarty_tpl->renderSubTemplate('file:_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
      </div>
      <!-- side panel -->
    <?php }?>

    <?php if ($_smarty_tpl->getValue('view') == "game") {?>

      <!-- content panel -->
      <div class="col-12 sg-offcanvas-mainbar">
        <div class="post">
          <div class="ptb20 plr20">
            <div class="post-header mb0">
              <div class="post-avatar">
                <div class="post-avatar-picture" style="background-image:url(<?php echo $_smarty_tpl->getValue('game')['thumbnail'];?>
);">
                </div>
              </div>
              <div class="post-meta">
                <div class="float-end">
                  <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/games" class="btn btn-sm btn-light d-none d-lg-block">
                    <i class="fa fa-arrow-circle-left mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Go Back");?>

                  </a>
                  <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/games" class="btn btn-sm btn-icon btn-light d-block d-lg-none">
                    <i class="fa fa-arrow-circle-left"></i>
                  </a>
                </div>
                <div class="h6 mt5 mb0"><?php echo $_smarty_tpl->getValue('game')['title'];?>
</div>
              </div>
            </div>
          </div>
        </div>
        <div class="ratio ratio-16x9">
          <iframe frameborder="0" src="<?php echo $_smarty_tpl->getValue('game')['source'];?>
"></iframe>
        </div>
      </div>
      <!-- content panel -->

    <?php } else { ?>

      <!-- content panel -->
      <?php if ($_smarty_tpl->getValue('view') == '' || $_smarty_tpl->getValue('view') == "genre") {?><div class="col-md-8 col-lg-9 sg-offcanvas-mainbar"><?php } else { ?><div class="col-12 sg-offcanvas-mainbar"><?php }?>

          <!-- content -->
          <div>
            <?php if ($_smarty_tpl->getValue('games')) {?>
              <ul class="row">
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('games'), '_game');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('_game')->value) {
$foreach1DoElse = false;
?>
                  <?php $_smarty_tpl->renderSubTemplate('file:__feeds_game.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_tpl'=>'box'), (int) 0, $_smarty_current_dir);
?>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
              </ul>

              <!-- see-more -->
              <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('games')) >= $_smarty_tpl->getValue('system')['games_results']) {?>
                <div class="alert alert-post see-more js_see-more" data-get="<?php echo $_smarty_tpl->getValue('get');?>
" <?php if ($_smarty_tpl->getValue('view') == "genre") {?>data-id="<?php echo $_smarty_tpl->getValue('genre')['genre_id'];?>
" <?php }?> <?php if ($_smarty_tpl->getValue('view') == "played") {?>data-uid="<?php echo $_smarty_tpl->getValue('user')->_data['user_id'];?>
" <?php }?>>
                  <span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("See More");?>
</span>
                  <div class="loader loader_small x-hidden"></div>
                </div>
              <?php }?>
              <!-- see-more -->
            <?php } else { ?>
              <?php $_smarty_tpl->renderSubTemplate('file:_no_data.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
            <?php }?>
          </div>
          <!-- content -->

        </div>
        <!-- content panel -->

      <?php }?>

    </div>
  </div>
  <!-- page content -->

<?php $_smarty_tpl->renderSubTemplate('file:_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
}
