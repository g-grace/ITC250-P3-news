/**
 * NewsItem.php is the Class using to create objects for the RSS-Feeds App as news' items with Title, Description,  URL, date, image fields
 * 
 * In addition it shows images from the feeds
 *
 * @package RSS-FEEDS
 * @authorA: George Wong: <w0ng3r@gmail.com>
 * @authorB: Grace Sangonpiyaphan: <ggrace5599@gmail.com>
 * @version 1.0 2015/04/30 
 * @link http://w0ng3r.dlinkddns.com/app/RSSViewer.php
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @see RSSViewer.php
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
Class NewsItem
{
    public $Title='';
    public $Description='';
    public $DateAdded='';
    public $URL='';
    public $ImageURL='';
    
    public function __construct($Title, $Description,  $URL, $date, $image)
    {

        $this->Title = $Title;
        $this->Description = $Description;
        $this->DateAdded = $date;
        $this->URL = $URL;
        $this->ImageURL = $image;

    }

    public function display() //creates each individual news story on page
    {

        echo '
    

        <tr>
            <td><a href="'.$this->URL .'"><h3>'.$this->Title.'</a></h3></td>
            <td valign="bottom"><small>Date Published '.$this->DateAdded.'</small></td>
        </tr>
       <tr>
       
       </tr><td><img src="'.
             $this->ImageURL.'
        "heigh="200" width="200"</td><tr>
            <td><p>'.$this->Description.'</p></td>
    
        
       
        </tr>';
        


    }

}
