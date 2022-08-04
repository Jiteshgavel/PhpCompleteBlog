<?php include "include/login.php"?>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered col-lg-4" role="document">
    <div class="modal-content">
      <div class="modal-header ">

      <h4 class="modal-title w-100 font-weight-bold">Sign in</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>


      </div>
      <br>
  <p class="  mr-5 ml-5">
		<a href="" class="btn btn-block text-white bg-danger btn-twitter"> <i class="fa fa-google" aria-hidden="true"></i>   Login via google</a>
		<a href="" class="btn bg-primary text-white btn-block btn-facebook"> <i class="fa fa-facebook" aria-hidden="true"></i>   Login via facebook</a>
  </p>
  
  <p class="text-center  border-primary ">Or</p>
 <?php login(); ?>

      <form action="" method="POST">
      <div class="pl-3 pr-3">
      <div class="form-group">
                 <input type="email" name="user_email" class="form-control" placeholder="Enter UserEmail">
        </div>
         <div class="input-group">
              <input type="password" name="password" class="form-control"  placeholder="Enter Password">
                <span class="input-group-btn">
                      <button class="btn btn-primary" name="login" type="submit">Login</button>
                </span>
          </div>
          </div>
          </form>
          <p>&nbsp; Not a member? <a href="signup.php">signUp</a></p>
          <br>
          
    </div>
   
  </div>
</div>