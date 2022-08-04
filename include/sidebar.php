
<div class="col-lg-4">
            <div class="sidebar">
              <div class="row">
                <div class="col-lg-12">
                <div class="well">
               
                  <!-- <h4>Login</h4> -->
                  <div class="sidebar-heading">
                      <h2>Search</h2>
                    </div>

                  
                  <br>
                  <?php 
                 
                    if(!isset($_SESSION['user_role']))
                    {
                    // echo "<div class='alert alert-danger' role='alert'>
                    //   Information submited sucessfully
                    //   </div>";
                    }
                  
                    ?>
                  <form action="include/login.php" method="POST">
                  <!-- <div class="form-group">
                      <input type="email" name="user_email" class="form-control" placeholder="Enter UserEmail">
                  </div> -->
                  <div class="input-group">
                      <input type="text" name="password" class="form-control"  placeholder="Search ">
                      <span class="input-group-btn">
                          <button class="btn btn-primary" name="login" type="submit">Search</button>
                      </span>
                  </div>
                  
                   <!-- <p>&nbsp; Not a member? <a href="signup.php">signUp</a></p> -->

                      </form>
                     
                  <!-- /.input-group -->
              </div>



              

                </div>

                <div class="col-lg-12">
                  <div class="sidebar-item recent-posts">
                    <div class="sidebar-heading">
                      <h2>Recent Posts</h2>
                    </div>

                    <?php

                      $query = "SELECT * FROM posts ORDER BY post_id DESC limit 3";
                      $select_all_post = mysqli_query($con,$query);

                      while($row = mysqli_fetch_assoc($select_all_post))
                      {
                          $post_id = $row['post_id'];
                          $post_title = $row['post_title'];
                          $post_date = $row['post_date'];
                          $post_status = $row['post_status'];
                          if($post_status == 'published')
                          {    
                          
                      ?>
                    
                    <div class="content">
                      <ul>
                        <li><a href="post-details.php?p_id=<?php echo $post_id ?>">
                          <h5><?php echo $post_title ?></h5>
                          <span><?php echo date('F d Y', strtotime($post_date)); ?></span>
                        </a></li>
                      </ul>
                    </div>
                    <?php } }?>


                  </div>
                </div>

                <div class="col-lg-12">
                  <div class="sidebar-item categories">

                    <div class="sidebar-heading">
                      <h2>Categories</h2>
                    </div>
                    
                    <div class="content">
                    <?php

                    $query = "SELECT * FROM categories  ORDER BY cat_id DESC limit 7";
                    $select_all_categories = mysqli_query($con,$query);

                    while($row = mysqli_fetch_assoc($select_all_categories))
                    {
                        $cat_id = $row['cat_id'];
                        $cat_title = $row['cat_title'];
                    ?>
                      <ul>
                        <li><a href="categories.php?p_id=<?php echo $cat_id; ?>"><?php echo $cat_title ?></a></li>
                      </ul>
                      <?php } ?>
                    </div>
                  </div>
                </div>


                <div class="col-lg-12">
                  <div class="sidebar-item tags">
                    <div class="sidebar-heading">
                      <h2>Tag Clouds</h2>
                    </div>
                    <div class="content">
                    
                      <ul>
                      <?php
                        $query = "SELECT DISTINCT post_tags FROM posts  ORDER BY post_id DESC limit 20";
                        $select_all_post = mysqli_query($con,$query);
                        while($row = mysqli_fetch_assoc($select_all_post))
                        {   
                            $post_tags = $row['post_tags'];
                        ?>
                        <li><a href="tags.php?p_tag=<?php echo $post_tags; ?>"><?php echo $post_tags; ?></a></li>
                        <?php } ?>
                      </ul>
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>