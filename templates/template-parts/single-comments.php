<?php
/*
*  The comments for single listings
*
*/

function sdir_single_comments(){
global $wp_query;
$s = get_option('simple_directory_settings');
if(isset($s['show_comments']) && $s['show_comments'] == 'yes'){?>

	<div class="row">
<div class="small-12 columns">

<?php comments_template(); ?>
</div>
</div>


<?php }}



 ?>
