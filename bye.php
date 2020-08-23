<?php
// include header.php file
include ('header.php');
?>
 
 <h6 class="font-rubik font-size-15 pt-3 pl-5 text-dark-bold">Your Payments Are Successfull</h6>
 <h6 class="font-rubik font-size-15 pt-2 pl-5 pb-5 text-dark-bold">Please Feel Free To Look For More products And Amazing offers</h6>

 <div class="pl-5">
        <button class="btn btn-danger font-rubik font-size-20" disabled>
        
        <span class="spinner-grow spinner-grow-sm"></span>
         New phones Coming Soon
        </button>
</div>


<?php

    /*  include top sale section */
    include ('Template/_top-sale.php');
    /*  include top sale section */

     /*  include banner ads  */
     include ('Template/_banner-ads.php');
     /*  include banner ads  */
?>


<?php
// include footer.php file
include ('footer.php');
?>