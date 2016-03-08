/**
* header_inc.php 
* Establish header with NAV and image links to rssviewer.php, facebook.com, linkedin.com, instragram.com
* Uses bootswatch theme
*
* @package RSS-FEEDS
* @authorA: George Wong: <w0ng3r@gmail.com>
* @authorB: Grace Sangonpiyaphan: <ggrace5599@gmail.com>
* @version 1.0 2015/04/30 
* @link http://w0ng3r.dlinkddns.com/app/RSSViewer.php
* @license http://www.apache.org/licenses/LICENSE-2.0
* @see RSSViewer.php
* @see SQL.sql
* @see inc_0700/config_inc.php
* @see admin_add.php
* @see admin_dashboard.php
* @see admin_edit.php
* @see admin_info.php
* @see admin_log_list.php
* @see admin_log_view.php
* @see admin_login.php
* @see admin_logout.php
* @see admin_reset.php
* @see admin_validate.php
* @see adminer.php
* @see header_inc.php
* @see footer_inc.php
* @see index.php
* @see loadRSS.php
* @see simple.php
* @todo none
*/



<?php
//theme specific functions
include 'bootswatch_functions.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
	<?php include INCLUDE_PATH . 'meta_inc.php'; ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--Bootstrap themes use style settings to change look and feel -->
    <link rel="stylesheet" href="<?=THEME_PATH;?>css/<?=$config->style;?>" media="screen">
    <link rel="stylesheet" href="<?=THEME_PATH;?>css/bootswatch.min.css">
	<link rel="stylesheet" href="<?=THEME_PATH;?>css/bootswatch-overrides.css">
    <!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  </head>
  <body>
     <div class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a href="<?=VIRTUAL_PATH?>" class="navbar-brand"><?=$config->banner;?></a>
		    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="navbar-collapse collapse" id="navbar-main">
          <ul class="nav navbar-nav">
			<?php 
				echo bootswatchLinks($config->nav1,'<li>','</li>','<li class="active">'); #link arrays are created in config_inc.php file - see bootswatch_functions.php
			?>
          </ul>
            <ul class="list-unstyled">
              <li class="pull-right">
            <a href="rssviewer.php"><img class="logo" src="images/gg.jpg" width="50" height="30" alt="" title=""></a>
            <a href="facebook.com"><img class="logo" src="images/fb.jpg" width="20" height="20" alt="" title=""> </a>
            <a href="linkedin.com"><img class="logo" src="images/linkedin.jpg" width="20" height="20" alt="" title=""> </a>
            <a href="instragram.com"><img class="logo" src="images/ig.jpg" width="20" height="20" alt="" title=""> </a></li>
            </ul>
			<?php
				echo bootswatchAdmin();  //add right aligned Admin link - see bootswatch_functions.php
			?>
        </div>
      </div>
    </div>
    <div class="container">
				<?php
				echo bootswatchFeedback();  //feedback on form operations - see bootswatch_functions.php
			?>
