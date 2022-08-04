<?php  include "include/header.php" ?>
<?php  include "include/nav.php" ?>

<?php  include "include/preloader.php" ?>
<?php  include "include/slider.php" ?>    

    <!-- Page Content -->
    

   


    <section class="blog-posts">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="all-blog-posts">
              <div class="row">


              
                <div class="col-lg-12">


                <?php
                $query = "SELECT * FROM posts ORDER BY post_id DESC limit 1,2";
                $select_all_post = mysqli_query($con,$query);

                while($row = mysqli_fetch_assoc($select_all_post))
                {
                    $post_id = $row['post_id'];
                    $post_category = $row['post_category_id'];
                    $post_title = $row['post_title'];
                    $post_author = $row['post_author'];
                    $post_date = $row['post_date'];
                    $post_image = $row['post_image'];
                    $post_content = $row['post_content'];
                    $post_status = $row['post_status'];
                    $post_tags = $row['post_tags'];

                    if($post_status == 'published')
                    {    
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
                      <a><h4><?php echo $post_title ?></h4></a>
                      <ul class="post-info">
                        <li><a href="#"><?php echo $post_author ?></a></li>
                        <li><a href="#"><?php echo date('F d Y', strtotime($post_date)); ?></a></li>
                        <!--<li><a href="#">12 Comments</a></li>-->
                      </ul>
                      <p><?php echo $post_content ?></p>
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