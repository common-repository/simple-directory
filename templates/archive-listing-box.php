<?php
/**
 * The template for displaying Category pages
 *
 */
get_header();
 $s = get_option('simple_directory_settings');
  ?>
<?php simple_directory_vc_compatibility(); ?>
<div id="<?php sdir_archive_id();?>" class=" content-area archive-listing <?php sdir_archive_class();?>">
	<main id="main" class="site-main  " role="main">
			<header class="listing-archive-header row">
				<?php	if ( have_posts() ) :	?>
				<?php $tax = get_queried_object()->term_id;
				$z_image_url = get_option('z_taxonomy_image'.$tax);
				$sdir_image_url = get_option('sdir_taxonomy_image'.$tax);
				if($sdir_image_url !=''){?>
	<div class="medium-3 columns">
	<img src="<?php if
	(function_exists('sdir_taxonomy_image_url')) echo sdir_taxonomy_image_url(); ?>"></div>
			<div class="medium-9 columns">
				<?php }
elseif($z_image_url !='' ){?>
        <div class="medium-3 columns">
      	<img src="<?php if (function_exists('z_taxonomy_image_url')) echo z_taxonomy_image_url(); ?>"></div>
      			<div class="medium-9 columns">
<?php }

else {?><div class="small-12 columns"><?php }?>
				<h1 class="archive-title"><?php echo single_cat_title('',false);?></h1>
		<?php

					// Show an optional term description.
					$term_description = term_description();
					if ( ! empty( $term_description ) ) :
						printf( '<div class="taxonomy-description">%s</div>', $term_description );
					endif;
				?>
	</div>
<?php endif;?>
			</header><!-- .archive-header -->
<div class="row row-padded loopcontent">


<?php while ( have_posts() ) : the_post();{?>
	<?php $m = get_post_meta($post->ID);?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<?php sdir_listing_header();?>
				</article>
					
<?php } endwhile;
posts_nav_link();
?>


</main>
</div>
<?php
$s = get_option('simple_directory_settings');
	$show_sidebar = $s['archive_listing_show_sidebar'];
	if ($show_sidebar == 'yes'){
		get_sidebar();
	}?>
<?php get_footer();
