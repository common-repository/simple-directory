<?php
/*
* The Link Bar
* Functions are in template-functions/link-bar-functions.php
*/


function sdir_link_bar(){?>



<div class="small-10 columns show-for-medium">

  <div class="expanded button-group ">
  	<?php

    sdir_full_link_bar();
    ?>

  </div>
</div>
<div class="small-10 columns small-centered show-for-small-only">

<div class="stacked button-group ">
  <?php sdir_mobile_link_bar();?>
</div>

</div>


</div>






<?php }




 ?>
