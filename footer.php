    <hr />

    <div class="footer">

        <!-- Navigation Bar -->
        <?php
        // include(WP_CONTENT_DIR . '/themes/3rats/' . 'common/jbNavBar.php');
        get_template_part( 'common/jbNavBar' ); ?>

        <!-- If you'd like to support WordPress, having the "powered by" link somewhere on your blog is the best way; it's our only promotion or advertising. -->

        <p>
            <?php bloginfo('name'); ?> is proudly powered by
            <a href="http://wordpress.org/">WordPress</a>
            <br /><a href="<?php bloginfo('rss2_url'); ?>">Entries (RSS)</a>
            and <a href="<?php bloginfo('comments_rss2_url'); ?>">Comments (RSS)</a>.
            <!-- <?php echo get_num_queries(); ?> queries. <?php timer_stop(1); ?> seconds. -->
        </p>

        <!-- Page footer - copyright, etc. -->
        <?php // include(WP_CONTENT_DIR . '/themes/3rats/' . 'common/jbFooter.php');
        get_template_part( 'common/jbFooter' ); ?>

        <!-- Acknowledgements, Awards, Certifications -->
        <?php
        // include(WP_CONTENT_DIR . '/themes/3rats/' . 'common/jbNotation.php');
        get_template_part( 'common/jbNotation' ); ?>

    </div>

    <?php
    // include( TEMPLATEPATH . '/jbLogo.php' );
    get_template_part( 'jbLogo' ); ?> <!-- Designer Mark -->

    <?php wp_footer(); ?>

</body>
</html>