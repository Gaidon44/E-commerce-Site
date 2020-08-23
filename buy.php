<?php
// include header.php file
include ('header.php');
?>

<!-- inluding section for taking banking details--> 

<section class="py-4 pl-10">
  <h6 class="font-rubik font-size-18 pl-3 pb-3">Enter your bank details for payments</h6>
  <form>
    <div class="form-group column font-rale font-size-10 pl-5">

      <div class="col-xs-4">
        <label for="First Name">First Name:</label>
        <input type="text" class="form-control w-50"> 
      </div>


      <div class="col-xs-4>">
        <label for="Last Name">Last Name:</label>
        <input type="text" class="form-control w-50">
      </div>

      <div class="col-xs-4">
        <label for="Email">Email:</label>
        <input type="text" class="form-control w-50">
      </div>

      <div class="col-xs-4">
        <label for="Bank Account Number">Account Number:</label>
        <input type="text" class="form-control w-50">
      </div>

      <div class="col-xs-4">
        <label for="CVS">CVS:</label>
        <input type="text" class="form-control w-50">
      </div>

      <div class="pull-right pt-4">
        <a href="bye.php" class="btn btn-danger" role="button">Submit</a>
      </div>
      <small id="emailHelp2" class="form-text text-muted">We'll never share your Details with anyone.</small>

      <h6 class="font-rubik font-size-15 pl-10 pt-5">Supported Payments</p>
        <div class="col-sm-4 col-md-6 col-lg-4">
        <img src="./assets/vm.png" class="img-fluid">
  </div>

  </form>
</section>


<?php
// include footer.php file
include ('footer.php');
?>
