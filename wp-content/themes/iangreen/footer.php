<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage IAN_Green
 * @since IAN-Green 1.0
 */

?>
		
	<?php get_template_part( 'template-parts/footer/footer-widgets' ); ?>
	<section class="footer">
   <div class="row">
     <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">   
     <?php
		wp_nav_menu(
			array(
				'theme_location' => 'footer_top_menu',
				'items_wrap'      => '<ul  class="nav top-footer-nav">%3$s</ul>',
				'container'      => false,
				'depth'          => 1,
				'fallback_cb'    => false,
				'add_foot_top_list_class'  => 'nav-item'
			)
		);
		?>
     
	  <p>
	 <?php echo  get_theme_mod('copywrite_footer_desc_setting'); ?><br>
        <span>&#169;  <?php echo  get_theme_mod('copywrite_footer_company_setting'); ?></span>
      </p>
      <?php
		wp_nav_menu(
			array(
				'theme_location' => 'footer_bottom_menu',
				'items_wrap'      => '<ul  class="nav top-footer-nav">%3$s</ul>',
				'container'      => false,
				'depth'          => 1,
				'fallback_cb'    => false,
				'add_foot_top_list_class'  => 'nav-item'
			)
		);
		?>
     </div>
     <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
      <p class="dev-by">
       Site by <a href="https://starberry.tv/" target="_blank"><b>Starbeery</b>
      </p>
     </div>
   </div>
  </section>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
