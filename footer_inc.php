/**
* footer_inc.php 
* Establish footer where navigate to filter on Source and Category of the RSS-FEEDS, website, contact, code checker
* Copyright of the theme
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
      
      <footer>
        <div class="row">
          <div class="col-lg-12">
            
            <ul class="list-unstyled">
              <li class="pull-right"><a href="#top">Back to top</a></li>
            </ul>
              
              
			<p><?=$config->copyright;?>. Theme by <a href="http://bootswatch.com/">Bootswatch</a>, based on <a href="http://getbootstrap.com/css/">Bootstrap</a>.
            </p>
            
            <div>
                <h2>Contact G &amp; G's RSS News Feeds</h2>
				<h3>Call 0-123-456-789</h3>
                <a href="w0ng3r.dlinkddns.com/app/RSSViewer.php">G &amp;G</a>
            <a href="rss.com" target="_blank">RSS</a>
<span>&copy; 2016 rssviewer.com. All Rights Reserved - Authored by George and Grace</span>
            <a href="http://phpcodechecker.com" target="_blank">Valid PHP</a> ~ 
            </div>

          </div>
        </div>
        
      </footer>
    

    </div>


    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="<?=THEME_PATH;?>js/bootstrap.min.js"></script>
    <script src="<?=THEME_PATH;?>js/bootswatch.js"></script>
  </body>
</html>
