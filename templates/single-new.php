<?php
/*
* The template for displaying single listings.
*/

get_header(); ?>
<?php simple_directory_vc_compatibility(); ?>
<div class="wrapper" itemscope itemtype="<?php sdir_listing_type();?>"><!--MAIN PAGE DIV-->



<div id="<?php sdir_single_id();?>" class=" <?php sdir_single_class();?> single-listing-content"><!--LISTING CONTENT DIV-->
	<main id="main" class=" " role="main">
<?php
while (have_posts()): the_post();
$m = get_post_meta($post->ID);
$s = get_option('simple_directory_settings');

 ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<?php sdir_listing_header();?>
<div class="row row-padded">


<div class="small-12 columns">
	<div class="small-12 columns">

<?php the_content();?>
</div>
</div>
</div>
<div class="row">
	<div class="small-12 medium-4 columns">
		<?php if(has_term('','listing_category')){?>
		<h4><?php _e('Categories','simple-dir');?></h4>
		<?php $terms = get_the_terms($post->ID, 'listing_category');
foreach ($terms as $term){
  $term_link = get_term_link( $term, 'listing_category' );
	echo '<a href="'.$term_link.'">'.$term->name.'</a><br/>';
}}?>

	</div>
	<div class="small-12 medium-4 columns end">
<?php if(has_term('','listing-tags'))
{?>
		<h4><?php _e('Tags','simple-dir');?></h4>
		<?php $tags = get_the_terms($postid,'listing-tags');
		foreach ($tags as $tag){
			$tag_link = get_term_link($tag,'listing-tags');
			echo '<a href="'.$tag_link.'">'.$tag->name.'</a><br/>';
		}

  }?>

	</div>
	<?php if( $s['show_comments'] == 'yes') {?>
   <div class="small-12 columns">

	 </div>

   <?php

   comments_template();?>
</div>
     <?php }?>


</div>


</article><!-- END ARTICLE-->
	<?php endwhile;?>
  </main><!-- END #main -->

</div>  <!--END LISTING CONTENT DIV-->

<?php  //LOAD THE SIDEBAR (IF SELECTED)
$s= get_option('simple_directory_settings');
$show_sidebar = $s['single_listing_show_sidebar'];
if ($show_sidebar == 'yes'){get_sidebar();	}?>
</div><!--END .wrap-->




<?php get_footer();?><!--GET THE SITE FOOTER-->
