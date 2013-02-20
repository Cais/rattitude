  <hr />

  <div class="footer">
    <!-- Navigation Bar -->
    <?php include(WP_CONTENT_DIR . '/themes/3rats/' . 'common/jbNavBar.php'); ?>
    
    <!-- If you'd like to support WordPress, having the "powered by" link somewhere on your blog is the best way; it's our only promotion or advertising. -->
    <p>
		  <?php bloginfo('name'); ?> is proudly powered by
		  <a href="http://wordpress.org/">WordPress</a>
		  <br /><a href="<?php bloginfo('rss2_url'); ?>">Entries (RSS)</a>
		  and <a href="<?php bloginfo('comments_rss2_url'); ?>">Comments (RSS)</a>.
		  <!-- <?php echo get_num_queries(); ?> queries. <?php timer_stop(1); ?> seconds. -->
    </p>
    
    <!-- Page footer - copyright, etc. -->
    <?php include(WP_CONTENT_DIR . '/themes/3rats/' . 'common/jbFooter.php'); ?>  

    <!-- Acknowledgements, Awards, Certifications -->
    <?php include(WP_CONTENT_DIR . '/themes/3rats/' . 'common/jbNotation.php'); ?>

  </div>

  <?php include(TEMPLATEPATH . '/jbLogo.php'); ?> <!-- Designer Mark -->

  <?php wp_footer(); ?>
  
  </body>
</html>
