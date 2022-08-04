<?php  include "include/header.php" ?>
<?php  include "include/nav.php" ?>
<?php  include "include/preloader.php" ?>

    
    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="heading-page header-text">
      <section class="page-heading">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="text-content">
                <h4>contact us</h4>
                <h2>let’s stay in touch!</h2>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    
    <!-- Banner Ends Here -->

    <section class="contact-us">
      <div class="container">
        <div class="row">
        
          <div class="col-lg-12">
            <div class="down-contact">
              <div class="row">
                <div class="col-lg-8">
                  <div class="sidebar-item contact-form">
                    <div class="sidebar-heading">
                      <h2>Send us a message</h2>
                    </div>
                  <?php
                  if(isset($_POST['submit']))
                  {
                         $name =   $_POST['name'];
                         $email =  $_POST['email'];
                         $subject =  $_POST['subject'];
                         $body =  $_POST['body'];

                      if(!empty($name) && !empty($email) && !empty($subject) && !empty($body))
                      {
                        $name =  mysqli_real_escape_string($con,$name);
                        $email =  mysqli_real_escape_string($con,$email);
                        $subject = mysqli_real_escape_string($con,$subject);
                        
                        $body = mysqli_real_escape_string($con,$body);

                        $message = "<h3>Name: $name </h3>";
                        
                        $message.=   "<h5>$body</h5>";    

                              $to =   "jittugavel@gmail.com";
                              $subject = wordwrap($_POST['subject'],70);
                              $body =   $_POST['body'];
                              $header = "Form : ".$_POST['email'];

                            // send email
                              $send = mail($to,$subject,$message,$header);

                              if( $send == true )
                              {
                                echo "<div class='alert alert-success' role='alert'>
                                        Information submited sucessfully
                                    </div>";
                              }
                              else
                              echo "<div class='alert alert-danger' role='alert'>
                              Information Not submited
                             </div>";

                      }
                  }

                  ?>
                    <div class="content">
                      <form  action="" method="post">
                        <div class="row">
                          <div class="col-md-6 col-sm-12">
                            <fieldset>
                              <input name="name" type="text" id="name" placeholder="Your name" required="">
                            </fieldset>
                          </div>
                          <div class="col-md-6 col-sm-12">
                            <fieldset>
                              <input name="email" type="text" id="email" placeholder="Your email" required="">
                            </fieldset>
                          </div>
                          <div class="col-md-12 col-sm-12">
                            <fieldset>
                              <input name="subject" type="text" id="subject" placeholder="Subject">
                            </fieldset>
                          </div>
                          <div class="col-lg-12">
                            <fieldset>
                              <textarea name="body" rows="6" id="body" placeholder="Your Message" required=""></textarea>
                            </fieldset>
                          </div>
                          <div class="col-lg-12">
                            <fieldset>
                              <button type="submit" name="submit" id="form-submit" class="main-button">Send Message</button>
                            </fieldset>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="sidebar-item contact-information">
                    <div class="sidebar-heading">
                      <h2>contact information</h2>
                    </div>
                    <div class="content">
                      <ul>
                        <li>
                          <h5>knowledge4u@gmail.com</h5>
                          <span>EMAIL ADDRESS</span>
                        </li>
                        <li>
                          <h5>C.G  
                          	<br>Raipur </h5>
                          <span>STREET ADDRESS</span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
         
          
        </div>
      </div>
    </section>

    
    <?php  include "include/footer.php" ?>