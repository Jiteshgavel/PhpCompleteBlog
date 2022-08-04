<!-- Banner Starts Here -->
<div class="main-banner header-text">
      <div class="container-fluid">
        <div class="owl-banner owl-carousel">

          <?php

          $query = "SELECT * FROM posts ORDER BY post_id DESC limit 6";
          $select_all_post = mysqli_query($con,$query);

          while($row = mysqli_fetch_assoc($select_all_post))
          {
              $post_id = $row['post_id'];
              $post_category = $row['post_category_id'];
              $post_title =  substr($row['post_title'],0,25);
              $post_author = $row['post_author'];
              $post_date = $row['post_date'];
              $post_image = $row['post_image'];
              $post_content = substr($row['post_content'],0,20);
              $post_status = $row['post_status'];

              if($post_status == 'published')
              {    
            ?>

          <div class="item">
            <img src="images/<?php echo $post_image;?>" alt="">
            <div class="item-content">
              <div class="main-content">
                <div class="meta-category " >
                <?php/*
                          $query = "SELECT * FROM categories WHERE CAT_ID = {$post_category}";
                          $select_all_category = mysqli_query($con,$query);
                          if(!$select_all_category)
                          {
                              die("query failed..".mysqli_error($select_all_category));
                          }

                          $row = mysqli_fetch_array($select_all_category);

                          $cat_id = $row['cat_id'];
                          $post_category = $row['cat_title'];

                      */?>



                 <!-- <span ><?php //echo $post_category ?></span>-->
                </div>
                <a href="post-details.php?p_id=<?php echo $post_id ?>"><h4><?php echo $post_title ?></h4></a>
                <ul class="post-info">
                  <li><a href="#"><?php echo $post_author ?></a></li>
                  <li><a href="#"><?php echo date('F d Y', strtotime($post_date)); ?></a></li>
                </ul>
              </div>
            </div>
          </div>
          <?php } }?>
         
        
        </div>
      </div>
    </div>
    <!-- Banner Ends Here -->