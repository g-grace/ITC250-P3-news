<?php
/**
 * index.php is an ADMIN ONLY page for redirects! 
 *
 * DO NOT place this folder in the root of your application space!
 *
 * DO place this in the ADMIN folder! (whatever you name it!!)
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
 
require '../inc_0700/config_inc.php'; #provides configuration, pathing, error handling, db credentials

$redirect_to_login = TRUE; #if true, will redirect to admin login page, else redirect to main site index

# END CONFIG AREA ---------------------------------------------------------- 

if($redirect_to_login)
{# redirect to current login page
	myRedirect($config->adminLogin);
}else{#redirect to main site index
	myRedirect(VIRTUAL_PATH . "index.php"); 
}
?>
