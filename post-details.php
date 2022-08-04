<?php  include "include/header.php" ?>
<?php  include "include/nav.php" ?>
<?php  include "include/preloader.php" ?>
   

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="heading-page  header-text">
    <?php  include "include/banner.php" ?>
    </div>
    
    <!-- Banner Ends Here -->

    
    <section class="blog-posts grid-system">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="all-blog-posts">
              <div class="row">

                <div class="col-lg-12">

                <?php
                if(isset($_GET['p_id']))
                {

                  $the_post_id =    $_GET['p_id'];

                  $view_query =  "UPDATE posts SET post_views_count = post_views_count + 1 WHERE post_id = {$the_post_id}";
                  $send_query = mysqli_query($con,$view_query);
                  if(!$send_query)
                  {
                      die("Queary error".mysqli_error($send_query));
                  }
                  $the_post_id =    $_GET['p_id'];
                  $query = "SELECT * FROM posts WHERE post_id = {$the_post_id}";
                                  $select_all_post = mysqli_query($con,$query);
                  
                                  while($row = mysqli_fetch_assoc($select_all_post))
                                  {
                                    $post_category = $row['post_category_id'];
                                      $post_title = $row['post_title'];
                                      $post_author = $row['post_author'];
                                      $post_date = $row['post_date'];
                                      $post_image = $row['post_image'];
                                      $post_content = $row['post_content'];
                                      $post_tags = $row['post_tags'];
                                  ?>
                  
                  <div class="blog-post">
                    <div class="blog-thumb">
                      <img src="images/<?php echo $post_image;?>" alt="">
                    </div>
                    <div class="down-content">

                    <?php
                          $query = "SELECT * FROM categories WHERE cat_id = {$post_category}";
                          $select_all_category = mysqli_query($con,$query);
                          if(!$select_all_category)
                          {
                              die("query failed..".mysqli_error($select_all_category));
                          }

                          $row = mysqli_fetch_array($select_all_category);

                          $cat_id = $row['cat_id'];
                          $post_category = $row['cat_title'];

                      ?>
                      <span><?php echo $post_category ?></span>
                      <a ><h4><?php echo $post_title ?></span></h4></a>
                      <ul class="post-info">
                        <li><a ><?php echo $post_author ?></span></a></li>
                        <li><a ><?php echo date('F d Y', strtotime($post_date));?></span></a></li>

                      </ul>
                      <p><?php echo $post_content ?></span></p>
                      <div class="post-options">
                        <div class="row">
                          <div class="col-6">
                            <ul class="post-tags">
                              <li><i class="fa fa-tags"></i></li>
                              <li> <a href="tags.php?p_tag=<?php echo $post_tags; ?>"><?php echo  $post_tags; ?></a></li>
                            </ul>
                          </div>
                          <div class="col-6">
                            <ul class="post-share">
                              <li><i class="fa fa-share-alt"></i></li>
                              <li><a href="#">Facebook</a>,</li>
                              <li><a href="#"> Twitter</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <?php } }?>
                </div>

                <div class="col-lg-12">
                  <div class="main-button">
                    <a href="blog.php">View All Posts</a>
                  </div>
                </div>


           
                

                


              </div>
            </div>
          </div>


          <?php  include "include/sidebar.php" ?>


        </div>
      </div>
    </section>

    
    <?php  include "include/footer.php" ?>