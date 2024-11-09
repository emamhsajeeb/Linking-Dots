<?php
/* Smarty version 5.4.1, created on 2024-10-30 17:49:15
  from 'file:ajax.course.publisher.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_6722719b401698_01013780',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b53666c3af0747a03315c8f98a9e9ba0b374a5fd' => 
    array (
      0 => 'ajax.course.publisher.tpl',
      1 => 1714501976,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__svg_icons.tpl' => 1,
    'file:__categories.recursive_options.tpl' => 1,
    'file:__custom_fields.tpl' => 1,
  ),
))) {
function content_6722719b401698_01013780 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/dhakabypass/linkingdots.dev/content/themes/default/templates';
?><div class="modal-header">
  <h6 class="modal-title">
    <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"courses",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Create New Course");?>

  </h6>
  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<form class="js_ajax-forms" data-url="posts/course.php?do=publish">
  <div class="modal-body">
    <div class="row">
      <!-- title -->
      <div class="form-group col-md-6">
        <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Title");?>
</label>
        <input name="title" type="text" class="form-control">
      </div>
      <!-- title -->
      <!-- location -->
      <div class="form-group col-md-6">
        <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Location");?>
</label>
        <input name="location" type="text" class="form-control">
      </div>
      <!-- location -->
    </div>
    <!-- course fees -->
    <div class="form-group">
      <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Course Fees");?>
</label>
      <div>
        <div class="input-group">
          <input name="fees" type="text" class="form-control" placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Course Fees");?>
">
          <select class="form-select" name="fees_currency">
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('currencies'), 'currency');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('currency')->value) {
$foreach0DoElse = false;
?>
              <option value="<?php echo $_smarty_tpl->getValue('currency')['currency_id'];?>
" <?php if ($_smarty_tpl->getValue('system')['system_currency_id'] == $_smarty_tpl->getValue('currency')['currency_id']) {?>selected<?php }?>><?php echo $_smarty_tpl->getValue('currency')['symbol'];?>
 (<?php echo $_smarty_tpl->getValue('currency')['code'];?>
)</option>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
          </select>
        </div>
      </div>
    </div>
    <!-- course fees -->
    <!-- start/end date -->
    <div class="row">
      <div class="form-group col-md-6">
        <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Start Date");?>
</label>
        <input type="datetime-local" class="form-control" name="start_date">
      </div>
      <div class="form-group col-md-6">
        <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("End Date");?>
</label>
        <input type="datetime-local" class="form-control" name="end_date">
      </div>
    </div>
    <!-- start/end date -->
    <!-- category -->
    <div class="form-group">
      <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Category");?>
</label>
      <select class="form-select" name="category">
        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('courses_categories'), 'category');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('category')->value) {
$foreach1DoElse = false;
?>
          <?php $_smarty_tpl->renderSubTemplate('file:__categories.recursive_options.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
      </select>
    </div>
    <!-- category -->
    <!-- description -->
    <div class="form-group">
      <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Description");?>
</label>
      <textarea name="description" rows="5" dir="auto" class="form-control"></textarea>
      <div class="form-text">
        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Describe the responsibilities and preferred skills for this course");?>

      </div>
    </div>
    <!-- description -->
    <!-- custom fields -->
    <?php if ($_smarty_tpl->getValue('custom_fields')) {?>
      <?php $_smarty_tpl->renderSubTemplate('file:__custom_fields.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_custom_fields'=>$_smarty_tpl->getValue('custom_fields'),'_registration'=>true), (int) 0, $_smarty_current_dir);
?>
    <?php }?>
    <!-- custom fields -->
    <!-- cover image -->
    <div class="form-group">
      <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Cover Image");?>
</label>
      <div class="x-image">
        <div class="x-image-loader">
          <div class="progress x-progress">
            <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
        <i class="fa fa-camera fa-lg js_x-uploader" data-handle="x-image"></i>
        <input type="hidden" class="js_x-image-input" name="cover_image" value="">
      </div>
    </div>
    <!-- cover image -->
    <!-- error -->
    <div class="alert alert-danger mt15 mb0 x-hidden"></div>
    <!-- error -->
  </div>
  <div class="modal-footer">
    <?php if ($_smarty_tpl->getValue('share_to') == "page") {?>
      <input type="hidden" name="handle" value="page">
      <input type="hidden" name="id" value="<?php echo $_smarty_tpl->getValue('share_to_id');?>
">
    <?php } elseif ($_smarty_tpl->getValue('share_to') == "group") {?>
      <input type="hidden" name="handle" value="group">
      <input type="hidden" name="id" value="<?php echo $_smarty_tpl->getValue('share_to_id');?>
">
    <?php } elseif ($_smarty_tpl->getValue('share_to') == "event") {?>
      <input type="hidden" name="handle" value="event">
      <input type="hidden" name="id" value="<?php echo $_smarty_tpl->getValue('share_to_id');?>
">
    <?php }?>
    <button type="submit" class="btn btn-primary"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Publish");?>
</button>
  </div>
</form><?php }
}
