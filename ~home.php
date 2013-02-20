<?php get_header(); ?>

<div class="left">
  <?php get_sidebar(); ?>
</div>

  <div class="main_body">
  
  <p>Welcome to our home for fancy pet rats and pet rat interests.  This is a place for pet rats and their friends. A place to discuss their lives, their loves and promote a healthy and informed opinion of rats as pets and companions.<br /></p>

  <p>We will always be adding and improving the information about pet rats that can be found here. We will strive to make sure the details are correct, and easy to understand.  Please feel free to make comments as we are always open to constructive suggestions.<br /></p>
  
  <p>We will be adding a FAQ section shortly. If you wish to contribute to our site, just send an email to: <a title="Ask Mr. Rattitude" href="mailto:Mr.Rattitude@rattitude.com?subject=Ask Mr. Rattitude">Ask Mr. Rattitude</a>. You ask the questions (rat related, of course); we find the answers. If you believe your pet rat is not well, please contact your vet as soon as possible.</p>

  <ul>
    <li>We recently converted the web site to a WordPress installation, and will be utilizing the functionality that allows for.</li>
    <li>Visit our blog "The Brux" for pet rat related ideas and discussions. We have provided a link in our main menus. (NB: We are importing our writings from "The Brux" and will be continuing here using WordPress.)</li>
    <li>We are currently restructuring our article presentation and storage system to better organize our information about pet rats and other related items. We expect to bring our old articles into our WordPress installation in the near future.</li>
    <li>A gallery page has been added. We are working on content and how best to manage these pet rat images.</li>
    <li>Our Rainbow Bridge area is dedicated to the memory of our friends, and their friends. Please feel free to visit and take a moment to reflect.</li>
  </ul>  
  
  <p>As a bonus for everyone that is following our progress or if you just love your pet rats we are offering free Rattitude Wallpapers ... just follow this <a title="Downloads" href="downloads.php">link to our download pages</a> ... and Enjoy!<br /></p>

  <p>Our Official Forums are now located at <a title="RatChatter Forums" href="http://www.RatChatter.com">www.RatChatter.com</a>, please feel free to visit and join our growing community. Registration is free, and all interested individuals are encouraged to log in and participate.</p>

    <p><span id="signature">Yours,<br />Mr. Rattitude</span></p>
    
  <hr>

	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

			<div class="post" id="post-<?php the_ID(); ?>">
				<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
				<small><?php the_time('F jS, Y') ?> <!-- by <?php the_author() ?> --></small>

				<div class="entry">
					<?php the_content('Read the rest of this entry &raquo;'); ?>
				</div>

				<p class="postmetadata"><?php the_tags('Tags: ', ', ', '<br />'); ?> Posted in <?php the_category(', ') ?> | <?php edit_post_link('Edit', '', ' | '); ?>  <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></p>
			</div>

		<?php endwhile; ?>

		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
		</div>

	<?php else : ?>

		<h2 class="center">Not Found</h2>
		<p class="center">Sorry, but you are looking for something that isn't here.</p>
		<?php include (TEMPLATEPATH . "/searchform.php"); ?>

	<?php endif; ?>

  </div>

<?php get_footer(); ?>
