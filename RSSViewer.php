/**
 * RSSViewer.php * Outputs a form with news items as automatic feeds from various tech websites related to Computer, Gaming, Mobile news
 * Uses NewsItem.php to create class thai includes Title, Description, URL, date, and image
 * Fetch and cache data from and into the database
 * View 10 items per page
 * Pub timestamp as last update
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

require 'inc_0700/config_inc.php'; #provides configuration, pathing, error handling, db credentials
include 'include/loadRSS.php';
include 'include/NewsItem.php';
$config->titleTag = "RSS Viewer Page"; #Fills <title> tag. If left empty will fallback to $config->titleTag in config_inc.php  
$config->banner = 'RSS Viewer'; #goes inside header
$iConn = @mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die(myerror(__FILE__,__LINE__,mysqli_connect_error())) ;
$sql = 'select Time_Stamp from wn16_p3_articles limit 1';
$result = mysqli_query($iConn, $sql);
$lastUpdate =  new DateTime();
$numRow = mysqli_num_rows($result);


while($row = $result->fetch_assoc())
{
    $lastUpdate =  new DateTime($row['Time_Stamp']);


}


get_header('SmallPark_AboutUs_header_inc.php'); #defaults to theme header or header_inc.php
$date = new DateTime();

$interval = $date->diff($lastUpdate);
$timeDifference=$interval->format('%i');


//checks age of data, or if database is empty
if(($timeDifference > 10) || $numRow ==0)
{


    $loader = new RSSLoader();
    $loader->reloadRSS();
  

}


//display results
$sql2 = 'select * from wn16_p3_articles limit 10';
$result2 = mysqli_query($iConn, $sql2);

echo '
<html>
<body>

<table>';

while($row2 = $result2->fetch_assoc())
{

    $item = new NewsItem($row2['Title'], $row2['Description'], $row2['URL'], $row2['OriginalDate'], $row2['ImageURL']);
    $item->display();


}



echo '
</table>
</body>


</html>';


get_footer(); #defaults to theme header or footer_inc.php
