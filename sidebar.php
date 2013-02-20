<div id="sidebar">
  <div class="MainMenu">
    <ul>
		  <?php 	/* Widgetized sidebar, if you have the plugin installed. */
			if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
        <li><?php include (TEMPLATEPATH . '/searchform.php'); ?></li>

			<!-- Author information is disabled per default. Uncomment and fill in your details if you want to use it.
			<li><h2>Author</h2>
			<p>A little something about you, the author. Nothing lengthy, just an overview.</p>
			</li>
			-->
      
        <?php wp_list_pages('depth=1&title_li=<h2>'._('Main Menu').'</h2>'); ?>
              
        <li><h2>The Brux</h2>
				  <!--
          <ul>
            <?php wp_get_archives('type=monthly'); ?>
          </ul>
          -->
          <?php /*add Ajax_Calendar */ ajax_calendar(); ?>
        </li>        
                			
        <?php wp_list_categories('show_count=1&title_li=<h2>Bruxisms</h2>'); ?>
        
        <?php /* If this is the frontpage */ if ( is_home() || is_page() ) { ?>
				<?php wp_list_bookmarks('category=10'); ?>
        
        <li><h2>Site Links</h2>
				  <ul>
            <?php wp_register(); ?>
            <li><?php wp_loginout(); ?></li>
            <!-- 
            <li><a href="http://validator.w3.org/check/referer" title="This page validates as XHTML 1.0 Transitional">Valid <abbr title="eXtensible HyperText Markup Language">XHTML</abbr></a></li>
            <li><a href="http://gmpg.org/xfn/"><abbr title="XHTML Friends Network">XFN</abbr></a></li>
            <li><a href="http://wordpress.org/" title="Powered by WordPress, state-of-the-art semantic personal publishing platform.">WordPress</a></li>
            -->
            <?php wp_meta(); ?>
          </ul>
				</li>
				
          <?php } ?>

          <?php endif; ?>

    </ul>
  </div>
  <div class="under">
    <?php wp_cumulus_insert(); ?><br />
  </div>

  <div class="center">
    <a class="snap_shots" href="http://www.snap.com/snapshots.php?source=www.snap.com&campaign=shot_badge!!shotsbadge4-160x40.gif"><img src="http://i.snap.com/images/shotsbadge4-160x40.gif" width="160" height="40" alt="Enhanced with Snapshots" title="Enhanced with Snapshots" /></a>
  </div>

  <!-- Additional content - ad space / banners / etc. -->
  <?php include('common/jbBanners.php'); ?>
  
</div>
