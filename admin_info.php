<?php
/**
 * admin_info.php shows phpInfo() command results
 *
 * @package RSS-FEEDS
 * @authorA: George Wong: <w0ng3r@gmail.com>
 * @authorB: Grace Sangonpiyaphan: <ggrace5599@gmail.com>
 * @version 1.0 2015/04/30 
 * @link http://w0ng3r.dlinkddns.com/app/RSSViewer.php
 * @license http://opensource.org/licenses/osl-3.0.php Open Software License ("OSL") v. 3.0
 * @todo none
 */
 
require '../inc_0700/config_inc.php'; #provides configuration, pathing, error handling, db credentials

$access = "admin"; #admins can edit themselves, developers can edit any - don't change this var or no one can edit their own data
include_once INCLUDE_PATH . 'admin_only_inc.php'; #session protected page - level is defined in $access var
$config->titleTag = 'PHP Info'; #Fills <title> tag. If left empty will fallback to $config->titleTag in config_inc.php
$config->metaRobots = 'no index, no follow';#never index admin pages 

# END CONFIG AREA ---------------------------------------------------------- 
phpInfo();
?>
