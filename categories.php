<?php  include "include/header.php" ?>
<?php  include "include/nav.php" ?>
<?php  include "include/preloader.php" ?>
    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="heading-page header-text">
    <?php  include "include/banner.php" ?>
    </div>
    
    <!-- Banner Ends Here -->
    <section class="blog-posts grid-system">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="all-blog-posts">
              <div class="row">

              <?php
              if(isset($_GET['p_id']))
              $post_cat_id = $_GET['p_id'];
              $query = "SELECT * FROM posts WHERE post_category_id = $post_cat_id ORDER BY post_id DESC";
              $select_all_post = mysqli_query($con,$query);

              while($row = mysqli_fetch_assoc($select_all_post))
              {
                  $post_id = $row['post_id'];
                  $post_category = $row['post_category_id'];
                  $post_title = $row['post_title'];
                  $post_author = $row['post_author'];
                  $post_date = $row['post_date'];
                  $post_image = $row['post_image'];
                  $post_content = substr($row['post_content'],0,100);
                  $post_status = $row['post_status'];
                  if($post_status == 'published')
                  {    
              ?>
                <div class="col-lg-6">
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
                      <a href="post-details.php?p_id=<?php echo $post_id ?>"><h4><?php echo $post_title ?></h4></a>
                      <ul class="post-info">
                        <li><a href="#"><?php echo $post_author ?></a></li>
                        <li><a href="#"><?php echo date('F d Y', strtotime($post_date)); ?></a></li>          
                      </ul>
                      <p><?php echo $post_content ?></p>
                      <div class="post-options">
                        <div class="row">
                          <div class="col-lg-12">
                            <ul class="post-tags">
                              <li><i class="fa fa-tags"></i></li>
                              <li><a href="#">Best Templates</a>,</li>
                              <li><a href="#">TemplateMo</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <?php } }?>
                <div class="col-lg-12">
                  <ul class="page-numbers">
                    <li><a href="#">1</a></li>
                    <li class="active"><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
                  </ul>
                </div>

              </div>
            </div>


          </div>



          <?php  include "include/sidebar.php" ?>

                      

        </div>
      </div>
    </section>
        
    <?php  include "include/footer.php" ?>
