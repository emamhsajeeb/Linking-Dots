<?php
/* Smarty version 5.4.1, created on 2024-10-30 17:20:41
  from 'file:admin.dashboard.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_67226ae9d63387_49864697',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '71987bfe17788177a7bc06090416bd7a97fc530f' => 
    array (
      0 => 'admin.dashboard.tpl',
      1 => 1714171148,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67226ae9d63387_49864697 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/dhakabypass/linkingdots.dev/content/themes/default/templates';
?><div class="card">
  <div class="card-header with-icon">
    <i class="fa fa-tachometer-alt mr10"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Dashboard");?>

  </div>
  <div class="card-body">
    <?php if ($_smarty_tpl->getValue('user')->_is_admin) {?>
      <div id="admin-chart-dashboard" class="admin-chart mb20"></div>
      <div class="row">
        <div class="col-sm-6">
          <div class="stat-panel bg-gradient-primary">
            <div class="stat-cell narrow">
              <i class="fa fa-users bg-icon"></i>
              <span class="text-xxlg"><?php echo $_smarty_tpl->getValue('insights')['users'];?>
</span><br>
              <span class="text-lg"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Users");?>
</span><br>
              <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/users"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Manage Users");?>
</a>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="stat-panel bg-gradient-teal">
            <div class="stat-cell narrow">
              <i class="fa fa-clock bg-icon"></i>
              <span class="text-xxlg"><?php echo $_smarty_tpl->getValue('insights')['online'];?>
</span><br>
              <span class="text-lg"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Online");?>
</span><br>
              <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/users/online"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Manage Online");?>
</a>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4">
          <div class="stat-panel bg-gradient-warning">
            <div class="stat-cell narrow">
              <i class="fa fa-clock bg-icon"></i>
              <span class="text-xxlg"><?php echo $_smarty_tpl->getValue('insights')['pending'];?>
</span><br>
              <span class="text-lg"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Pending");?>
</span><br>
              <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/users/pending"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Manage Pending");?>
</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="stat-panel bg-gradient-danger">
            <div class="stat-cell narrow">
              <i class="fa fa-envelope bg-icon"></i>
              <span class="text-xxlg"><?php echo $_smarty_tpl->getValue('insights')['not_activated'];?>
</span><br>
              <span class="text-lg"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Not Activated");?>
</span><br>
              <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/users/not_activated"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Manage Not Activated");?>
</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="stat-panel bg-gradient-red">
            <div class="stat-cell narrow">
              <i class="fa fa-minus-circle bg-icon"></i>
              <span class="text-xxlg"><?php echo $_smarty_tpl->getValue('insights')['banned'];?>
</span><br>
              <span class="text-lg"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Banned");?>
</span><br>
              <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/users/banned"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Manage Banned");?>
</a>
            </div>
          </div>
        </div>
      </div>
    <?php }?>
    <div class="row">
      <div class="col-lg-4">
        <div class="stat-panel bg-gradient-gray">
          <div class="stat-cell narrow">
            <i class="fa fa-clipboard-user bg-icon"></i>
            <span class="text-xxlg"><?php echo $_smarty_tpl->getValue('insights')['vistors'];?>
</span><br>
            <span class="text-lg"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Total Visits");?>
</span><br>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="stat-panel bg-gradient-gray">
          <div class="stat-cell narrow">
            <i class="fa fa-clipboard-user bg-icon"></i>
            <span class="text-xxlg"><?php echo $_smarty_tpl->getValue('insights')['vistors_today'];?>
</span><br>
            <span class="text-lg"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Today Visits");?>
</span><br>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="stat-panel bg-gradient-gray">
          <div class="stat-cell narrow">
            <i class="fa fa-clipboard-user bg-icon"></i>
            <span class="text-xxlg"><?php echo $_smarty_tpl->getValue('insights')['vistors_month'];?>
</span><br>
            <span class="text-lg"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("This Month Visits");?>
</span><br>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6">
        <div class="stat-panel bg-gradient-success">
          <div class="stat-cell narrow">
            <i class="fa fa-newspaper bg-icon"></i>
            <span class="text-xxlg"><?php echo $_smarty_tpl->getValue('insights')['posts'];?>
</span><br>
            <span class="text-lg"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Posts");?>
</span><br>
            <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/posts"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Manage Posts");?>
</a>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="stat-panel bg-gradient-success">
          <div class="stat-cell narrow">
            <i class="fa fa-comments bg-icon"></i>
            <span class="text-xxlg"><?php echo $_smarty_tpl->getValue('insights')['comments'];?>
</span><br>
            <span class="text-lg"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Comments");?>
</span><br>
            <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/reports"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Manage Reports");?>
</a>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-4">
        <div class="stat-panel bg-gradient-primary">
          <div class="stat-cell narrow">
            <i class="fa fa-flag bg-icon"></i>
            <span class="text-xxlg"><?php echo $_smarty_tpl->getValue('insights')['pages'];?>
</span><br>
            <span class="text-lg"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Pages");?>
</span><br>
            <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/pages"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Manage Pages");?>
</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="stat-panel bg-gradient-primary">
          <div class="stat-cell narrow">
            <i class="fa fa-users bg-icon"></i>
            <span class="text-xxlg"><?php echo $_smarty_tpl->getValue('insights')['groups'];?>
</span><br>
            <span class="text-lg"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Groups");?>
</span><br>
            <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/groups"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Manage Groups");?>
</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="stat-panel bg-gradient-primary">
          <div class="stat-cell narrow">
            <i class="fa fa-calendar bg-icon"></i>
            <span class="text-xxlg"><?php echo $_smarty_tpl->getValue('insights')['events'];?>
</span><br>
            <span class="text-lg"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Events");?>
</span><br>
            <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/events"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Manage Events");?>
</a>
          </div>
        </div>
      </div>
    </div>
    <?php if ($_smarty_tpl->getValue('user')->_is_admin) {?>
      <div class="row">
        <div class="col-sm-6">
          <div class="stat-panel bg-gradient-info">
            <div class="stat-cell narrow">
              <i class="fa fa-comments bg-icon"></i>
              <span class="text-xxlg"><?php echo $_smarty_tpl->getValue('insights')['messages'];?>
</span><br>
              <span class="text-lg"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Messages");?>
</span><br>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="stat-panel bg-gradient-cyan">
            <div class="stat-cell narrow">
              <i class="fa fa-globe bg-icon"></i>
              <span class="text-xxlg"><?php echo $_smarty_tpl->getValue('insights')['notifications'];?>
</span><br>
              <span class="text-lg"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Notifications");?>
</span><br>
            </div>
          </div>
        </div>
      </div>
    <?php }?>
  </div>
</div><?php }
}
