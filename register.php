
<?php  include "include/header.php" ?>


<div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content p-4 pb-5" >
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Sign in</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="include/login.php" method="POST">
      <div class="form-group">
                 <input type="email" name="user_email" class="form-control" placeholder="Enter UserEmail">
        </div>
         <div class="input-group">
              <input type="password" name="password" class="form-control"  placeholder="Enter Password">
                <span class="input-group-btn">
                      <button class="btn btn-primary" name="login" type="submit">Login</button>
                </span>
          </div>
          </form>
          <p>&nbsp; Not a member? <a href="signup.php">signUp</a></p>
    </div>
  </div>
</div>

<div class="text-center">
  <a href="" class="btn btn-default btn-rounded mb-4" data-toggle="modal" data-target="#modalLoginForm">Launch
     Login</a>
</div>
 <!-- Bootstrap core JavaScript -->
 <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>