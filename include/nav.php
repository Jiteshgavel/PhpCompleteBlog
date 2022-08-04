
<?php  include "include/login_form.php" ?>

<?php //session_start()?>
<!-- ***** Preloader Start ***** -->

    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.php"><h2>knowledge4u<em>.</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="index.php">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="blog.php">Blog Entries</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact Us</a>
              </li>
              <li class="nav-item">
                 <a href=""  class="nav-link"    data-toggle="modal" data-target="#exampleModalCenter">Login</a>
              </li>
              <?php 

                if(isset($_SESSION['user_role']))
                 {
                        echo "<li class='nav-item'><a class='nav-link' href='admin/Post.php'>Admin Panel</a></li>";  
                }

              ?>

            </ul>
          </div>
        </div>
      </nav>
    </header>

