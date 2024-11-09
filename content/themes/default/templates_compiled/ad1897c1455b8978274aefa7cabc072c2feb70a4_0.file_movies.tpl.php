<?php
/* Smarty version 5.4.1, created on 2024-10-31 06:36:50
  from 'file:movies.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_67232582116d94_87476288',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ad1897c1455b8978274aefa7cabc072c2feb70a4' => 
    array (
      0 => 'movies.tpl',
      1 => 1726869634,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_head.tpl' => 1,
    'file:_header.tpl' => 1,
    'file:_ads.tpl' => 1,
    'file:__svg_icons.tpl' => 1,
    'file:__social_share.tpl' => 1,
    'file:_no_data.tpl' => 1,
    'file:_footer.tpl' => 1,
  ),
))) {
function content_67232582116d94_87476288 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/dhakabypass/linkingdots.dev/content/themes/default/templates';
$_smarty_tpl->renderSubTemplate('file:_head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
$_smarty_tpl->renderSubTemplate('file:_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<!-- page header -->
<div class="page-header">
  <img class="floating-img d-none d-md-block" src="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->getValue('system')['theme'];?>
/images/headers/undraw_movie_night_fldd.svg">
  <div class="circle-2"></div>
  <div class="circle-3"></div>
  <div class="<?php if ($_smarty_tpl->getValue('system')['fluid_design']) {?>container-fluid<?php } else { ?>container<?php }?>">
    <h2><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Movies");?>
</h2>
    <p class="text-xlg"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('system')['system_description_movies']);?>
</p>
    <div class="row mt20">
      <div class="col-sm-9 col-lg-6 mx-sm-auto">
        <form class="js_search-form" data-handle="movies">
          <div class="input-group">
            <input type="text" class="form-control" name="query" placeholder='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Search for movies");?>
'>
            <button type="submit" class="btn btn-light"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Search");?>
</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- page header -->

<!-- page content -->
<div class="<?php if ($_smarty_tpl->getValue('system')['fluid_design']) {?>container-fluid<?php } else { ?>container<?php }?> mt20 sg-offcanvas">
  <div class="row">

    <!-- left panel -->
    <div class="col-md-4 col-lg-3 sg-offcanvas-sidebar">
      <!-- genres -->
      <div class="card">
        <div class="card-body with-nav">
          <ul class="side-nav">
            <li <?php if ($_smarty_tpl->getValue('view') == '' || $_smarty_tpl->getValue('view') == "search") {?>class="active" <?php }?>>
              <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/movies">
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("All");?>

              </a>
            </li>
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('genres'), '_genre', true);
$_smarty_tpl->getVariable('_genre')->iteration = 0;
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('_genre')->value) {
$foreach0DoElse = false;
$_smarty_tpl->getVariable('_genre')->iteration++;
$_smarty_tpl->getVariable('_genre')->last = $_smarty_tpl->getVariable('_genre')->iteration === $_smarty_tpl->getVariable('_genre')->total;
$foreach0Backup = clone $_smarty_tpl->getVariable('_genre');
?>
              <li <?php if ($_smarty_tpl->getValue('view') == "genre" && $_smarty_tpl->getValue('genre')['genre_id'] == $_smarty_tpl->getValue('_genre')['genre_id']) {?>class="active" <?php }?>>
                <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/movies/genre/<?php echo $_smarty_tpl->getValue('_genre')['genre_id'];?>
/<?php echo $_smarty_tpl->getValue('_genre')['genre_url'];?>
">
                  <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('_genre')['genre_name']);?>

                </a>
              </li>
            <?php
$_smarty_tpl->setVariable('_genre', $foreach0Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
          </ul>
        </div>
      </div>
      <!-- genres -->
    </div>
    <!-- left panel -->

    <!-- right panel -->
    <div class="col-md-8 col-lg-9 sg-offcanvas-mainbar">

      <?php $_smarty_tpl->renderSubTemplate('file:_ads.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

      <?php if ($_smarty_tpl->getValue('view') == "movie") {?>

        <div class="blog-wrapper" style="border-radius: 16px;">

          <div>
            <div class="post-avatar">
              <div class="post-avatar-picture" style="background-image:url(<?php echo $_smarty_tpl->getValue('movie')['poster'];?>
);">
              </div>
            </div>
            <div class="post-meta">
              <h3 style="margin-top: 0px; margin-bottom: 5px;"><?php echo $_smarty_tpl->getValue('movie')['title'];?>
</h3>
              <?php if ($_smarty_tpl->getValue('movie')['release_year']) {?>
                <span class="text-muted"><?php echo $_smarty_tpl->getValue('movie')['release_year'];?>
</span>
              <?php }?>
              <?php if ($_smarty_tpl->getValue('movie')['genres_list']) {?>
                <?php if ($_smarty_tpl->getValue('movie')['release_year']) {?> ‧ <?php }?>
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('movie')['genres_list'], '_genre', true);
$_smarty_tpl->getVariable('_genre')->iteration = 0;
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('_genre')->value) {
$foreach1DoElse = false;
$_smarty_tpl->getVariable('_genre')->iteration++;
$_smarty_tpl->getVariable('_genre')->last = $_smarty_tpl->getVariable('_genre')->iteration === $_smarty_tpl->getVariable('_genre')->total;
$foreach1Backup = clone $_smarty_tpl->getVariable('_genre');
?>
                  <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/movies/genre/<?php echo $_smarty_tpl->getValue('_genre')['genre_id'];?>
/<?php echo $_smarty_tpl->getValue('_genre')['genre_url'];?>
">
                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('_genre')['genre_name']);?>

                  </a>
                  <?php if (!$_smarty_tpl->getVariable('_genre')->last) {?>/<?php }?>
                <?php
$_smarty_tpl->setVariable('_genre', $foreach1Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
              <?php }?>
              <?php if ($_smarty_tpl->getValue('movie')['duration']) {?>
                <?php if ($_smarty_tpl->getValue('movie')['genres_list']) {?> ‧ <?php }?>
                <span class="text-muted"><?php echo $_smarty_tpl->getValue('movie')['duration'];?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("minutes");?>
</span>
              <?php }?>
            </div>
          </div>

          <div style="margin: 20px -30px;">
            <?php if ($_smarty_tpl->getValue('movie')['can_watch']) {?>
              <?php if ($_smarty_tpl->getValue('movie')['source_type'] == "youtube") {?>
                <div class="ratio ratio-16x9">
                  <iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('get_youtube_id')($_smarty_tpl->getValue('movie')['source'],false);?>
" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
              <?php } elseif ($_smarty_tpl->getValue('movie')['source_type'] == "vimeo") {?>
                <div class="ratio ratio-16x9">
                  <iframe width="560" height="315" src="https://player.vimeo.com/video/<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('get_vimeo_id')($_smarty_tpl->getValue('movie')['source']);?>
" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
                </div>
              <?php } elseif ($_smarty_tpl->getValue('movie')['source_type'] == "link") {?>
                <div>
                  <video class="js_video-plyr" id="video-<?php echo $_smarty_tpl->getValue('movie')['movie_id'];?>
" playsinline controls preload="false">
                    <source src="<?php echo $_smarty_tpl->getValue('movie')['source'];?>
" type="video/mp4">
                    <source src="<?php echo $_smarty_tpl->getValue('movie')['source'];?>
" type="video/webm">
                  </video>
                </div>
              <?php } elseif ($_smarty_tpl->getValue('movie')['source_type'] == "uploaded") {?>
                <div>
                  <video class="js_video-plyr" id="video-<?php echo $_smarty_tpl->getValue('movie')['movie_id'];?>
" playsinline controls preload="false">
                    <source src="<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('movie')['source'];?>
" type="video/mp4">
                    <source src="<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('movie')['source'];?>
" type="video/webm">
                  </video>
                </div>
              <?php }?>
            <?php } else { ?>
              <!-- need payment -->
              <div class="text-center text-muted ptb25 plr25">
                <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"locked",'class'=>"main-icon mb20",'width'=>"96px",'height'=>"96px"), (int) 0, $_smarty_current_dir);
?>
                <div class="text-md">
                  <span style="padding: 8px 20px; background: #ececec; border-radius: 18px; font-weight: bold;">
                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("PAID CONTENT");?>

                  </span>
                </div>
                <div class="d-grid">
                  <button class="btn btn-info rounded rounded-pill mt20" data-toggle="modal" data-url="#payment" data-options='{ "handle": "movies", "id": <?php echo $_smarty_tpl->getValue('movie')['movie_id'];?>
, "price": <?php echo $_smarty_tpl->getValue('movie')['price'];?>
, "vat": "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('get_payment_vat_value')($_smarty_tpl->getValue('movie')['price']);?>
", "fees": "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('get_payment_fees_value')($_smarty_tpl->getValue('movie')['price']);?>
", "total": "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('get_payment_total_value')($_smarty_tpl->getValue('movie')['price']);?>
", "total_printed": "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('get_payment_total_value')($_smarty_tpl->getValue('movie')['price'],true);?>
" }'>
                    <i class="fa fa-money-check-alt mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("PAY");?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('print_money')($_smarty_tpl->getSmarty()->getModifierCallback('number_format')($_smarty_tpl->getValue('movie')['price'],2));?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("TO WATCH FOR");?>
 <?php echo $_smarty_tpl->getValue('movie')['available_for'];?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("DAYS");?>

                  </button>
                </div>
              </div>
              <!-- need payment -->
            <?php }?>
          </div>

          <div class="blog-text mb20">
            <?php echo $_smarty_tpl->getValue('movie')['description'];?>

          </div>

          <?php ob_start();
echo $_smarty_tpl->getValue('movie')['stars'];
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1) {?>
            <div>
              <strong><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Stars");?>
:</strong>
              <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getSmarty()->getModifierCallback('explode')(',',$_smarty_tpl->getValue('movie')['stars']), '_star', true);
$_smarty_tpl->getVariable('_star')->iteration = 0;
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('_star')->value) {
$foreach2DoElse = false;
$_smarty_tpl->getVariable('_star')->iteration++;
$_smarty_tpl->getVariable('_star')->last = $_smarty_tpl->getVariable('_star')->iteration === $_smarty_tpl->getVariable('_star')->total;
$foreach2Backup = clone $_smarty_tpl->getVariable('_star');
?>
                <span class="text-primary"><?php echo $_smarty_tpl->getValue('_star');?>
</span><?php if (!$_smarty_tpl->getVariable('_star')->last) {?>, <?php }?>
              <?php
$_smarty_tpl->setVariable('_star', $foreach2Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            </div>
          <?php }?>

          <?php if ($_smarty_tpl->getValue('movie')['release_year']) {?>
            <div class="mt20">
              <strong><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Release");?>
:</strong> <?php echo $_smarty_tpl->getValue('movie')['release_year'];?>

            </div>
          <?php }?>

          <?php if ($_smarty_tpl->getValue('movie')['duration']) {?>
            <div class="mt20">
              <strong><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Duration");?>
:</strong> <?php echo $_smarty_tpl->getValue('movie')['duration'];?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("minutes");?>

            </div>
          <?php }?>

          <?php if ($_smarty_tpl->getValue('movie')['genres_list']) {?>
            <div class="blog-tags mt20">
              <ul>
                <li>
                  <strong><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Genres");?>
:</strong>
                </li>
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('movie')['genres_list'], '_genre', true);
$_smarty_tpl->getVariable('_genre')->iteration = 0;
$foreach3DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('_genre')->value) {
$foreach3DoElse = false;
$_smarty_tpl->getVariable('_genre')->iteration++;
$_smarty_tpl->getVariable('_genre')->last = $_smarty_tpl->getVariable('_genre')->iteration === $_smarty_tpl->getVariable('_genre')->total;
$foreach3Backup = clone $_smarty_tpl->getVariable('_genre');
?>
                  <li>
                    <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/movies/genre/<?php echo $_smarty_tpl->getValue('_genre')['genre_id'];?>
/<?php echo $_smarty_tpl->getValue('_genre')['genre_url'];?>
">
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('_genre')['genre_name']);?>

                    </a>
                  </li>
                <?php
$_smarty_tpl->setVariable('_genre', $foreach3Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
              </ul>
            </div>
          <?php }?>

          <?php if ($_smarty_tpl->getValue('movie')['imdb_url']) {?>
            <div class="mt20">
              <strong><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("IMDB");?>
:</strong> <a href="<?php echo $_smarty_tpl->getValue('movie')['imdb_url'];?>
" target="_blank"><?php echo $_smarty_tpl->getValue('movie')['imdb_url'];?>
</a>
            </div>
          <?php }?>

          <div class="mt20">
            <strong><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Views");?>
:</strong> <?php echo $_smarty_tpl->getValue('movie')['views'];?>

          </div>

          <div class="mt20">
            <strong><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Share");?>
:</strong>
            <?php $_smarty_tpl->renderSubTemplate('file:__social_share.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_link'=>((string)$_smarty_tpl->getValue('system')['system_url'])."/movie/".((string)$_smarty_tpl->getValue('movie')['movie_id'])."/".((string)$_smarty_tpl->getValue('movie')['movie_url'])), (int) 0, $_smarty_current_dir);
?>
          </div>
        </div>

      <?php } else { ?>

        <?php if ($_smarty_tpl->getValue('view') == "search") {?>
          <div class="bs-callout bs-callout-info mt0">
            <!-- results counter -->
            <span class="badge rounded-pill badge-lg bg-secondary"><?php echo $_smarty_tpl->getValue('total');?>
</span> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("results were found for the search for");?>
 "<strong class="text-primary"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('htmlentities')($_smarty_tpl->getValue('query'),ENT_QUOTES,'utf-8');?>
</strong>"
            <!-- results counter -->
          </div>
        <?php }?>

        <?php if ($_smarty_tpl->getValue('movies')) {?>
          <ul class="row">
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('movies'), '_movie');
$foreach4DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('_movie')->value) {
$foreach4DoElse = false;
?>
              <li class="col-sm-6 col-md-6 col-lg-4">
                <div class="movie-card">
                  <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/movie/<?php echo $_smarty_tpl->getValue('_movie')['movie_id'];?>
/<?php echo $_smarty_tpl->getValue('_movie')['movie_url'];?>
" class="movie-card-top">
                    <div class="movie-picture" style="background-image:url('<?php echo $_smarty_tpl->getValue('_movie')['poster'];?>
');"></div>
                    <div class="movie-info">
                      <?php if ($_smarty_tpl->getValue('_movie')['genres_list'][0]) {?>
                        <div class="meta"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('_movie')['genres_list'][0]['genre_name']);?>
</div>
                      <?php }?>
                      <?php if ($_smarty_tpl->getValue('_movie')['genres_list'][1]) {?>
                        <div class="meta"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('_movie')['genres_list'][1]['genre_name']);?>
</div>
                      <?php }?>
                      <div class="meta">
                        <span class="btn btn-info"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Watch");?>
</span>
                      </div>
                    </div>
                  </a>
                  <div class="movie-card-bottom">
                    <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/movie/<?php echo $_smarty_tpl->getValue('_movie')['movie_id'];?>
/<?php echo $_smarty_tpl->getValue('_movie')['movie_url'];?>
" class="movie-title">
                      <?php echo $_smarty_tpl->getValue('_movie')['title'];?>
 <?php if ($_smarty_tpl->getValue('_movie')['is_paid']) {?><span class="badge rounded-pill bg-danger"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Paid");?>
</span><?php }?>
                    </a>
                    <div class="movie-year"><?php if ($_smarty_tpl->getValue('_movie')['release_year']) {
echo $_smarty_tpl->getValue('_movie')['release_year'];
} else {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("N/A");
}?></div>
                  </div>
                </div>
              </li>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
          </ul>

          <?php echo $_smarty_tpl->getValue('pager');?>

        <?php } else { ?>
          <?php $_smarty_tpl->renderSubTemplate('file:_no_data.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
        <?php }?>

      <?php }?>
    </div>
    <!-- right panel -->

  </div>
</div>
<!-- page content -->

<?php $_smarty_tpl->renderSubTemplate('file:_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
}
