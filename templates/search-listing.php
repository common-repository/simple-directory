<?php
/**
 * The template for displaying Search Results
  *
 */
get_header();
 $s = get_option('simple_directory_settings');
  ?>
<?php simple_directory_vc_compatibility(); ?>
<div id="<?php sdir_search_results_parent_id();?>" class=" content-area search-listing <?php sdir_search_results_parent_class();?>">
	<main id="main" class="site-main  " role="main">
			<header class="search-results-header row">
        <div class="small-12 columns">
          <?php if(have_posts()):?>
          <?php $allsearch = new WP_Query("s=$s&showposts=-1"); $key = wp_specialchars($s, 1); $count = $allsearch->post_count; ?>

          <h2 class="search-results-title">
            <?php
            global $wp_query;

            $search_query = get_search_query();
            echo __('Results For:&nbsp;','simple-dir');
            echo ucwords($search_query);
            echo '&nbsp('.$wp_query->found_posts.')';

            ?>
          </h2>


        <?php else:?>
          <h1 class="archive-title"><?php _e('No Results','simple-dir');?></h1>
        <?php endif;?>
          </div>

			</header><!-- .archive-header -->
<div class="row row-padded loopcontent">
<div class="small-12 columns">

<?php while ( have_posts() ) : the_post();{?>
	<?php $m = get_post_meta($post->ID);?>
				<article class="card" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<?php sdir_search_listing_header();?>
				</article>

<?php } endwhile;
posts_nav_link();
?>

</div>


</main>
</div>
<?php
$s = get_option('simple_directory_settings');
	$show_sidebar = $s['sdir_search_show_sidebar'];
	if ($show_sidebar == 'yes'){
		get_sidebar();
	}?>
<?php get_footer();
