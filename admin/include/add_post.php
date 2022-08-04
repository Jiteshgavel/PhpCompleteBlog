<?php
      if(isset($_POST['create_post']))
      {
             
            $post_title =mysqli_real_escape_string($con,$_POST['title']);
            $post_author = mysqli_real_escape_string($con,$_POST['author']);
            $post_category_id =mysqli_real_escape_string($con, $_POST['post_category']);
            //$post_status = $_POST['post_status'];

            $post_image = mysqli_real_escape_string($con,$_FILES['image']['name']);
            $post_image_temp =$_FILES['image']['tmp_name'];

            $post_tags = mysqli_real_escape_string($con,$_POST['post_tags']);
            $post_content = mysqli_real_escape_string($con,$_POST['post_content']);
            $post_date = date('d-m-y'); 
            //$post_comment_count =4;

            move_uploaded_file($post_image_temp,"../images/$post_image");

            $query = "INSERT INTO posts (post_category_id,post_title,post_author,post_date,post_image,post_content,post_tags,post_status)";
            $query .="VALUES({$post_category_id},'{$post_title}','{$post_author}',now(),'{$post_image}','{$post_content}','{$post_tags}','draft')";
            
            $create_post_query = mysqli_query($con,$query);
            confirmQuery($create_post_query);

            $the_post_id = mysqli_insert_id($con);
            echo "<p class = 'bg-success'>Post Created : <a href='../post-details.php?p_id={$the_post_id}'>View Post</a> OR <a href='post.php'>Edit More Post</a></p>";
            
      }

?>


<form action="" method="post" enctype="multipart/form-data">    
    
<div class="form-group">
         <label for="title">Post Title</label>
          <input type="text" class="form-control" name="title">
      </div>

      <div class="form-group">
       <label for="category">Post Category Id</label>
       <select name="post_category" id="" class="form-control">
            <?php
            $query = "SELECT * FROM categories";
            $select_caterories = mysqli_query($con,$query);
            confirmQuery( $select_caterories);

            while($row = mysqli_fetch_assoc($select_caterories))
            {
                  $cat_id = $row['cat_id'];
                  $cat_title = $row['cat_title'];

                  echo "<option value='$cat_id'>{$cat_title}</option>" ;                                               
            }
            ?>
       </select>
      </div>

      <div class="form-group">
       <label for="category">Post Author</label>
       <input type="text" class="form-control" name="author">
      
      </div>

      <!-- <select name="post_status" id="" class="form-control" >
            <option value="draft">Select Status</option>

           <option value='draft'>Draft</option>";
            <option value='published'>Publish</option>";
             
      </select> -->

      <div class="form-group">
       <label for="category">Post Image</label>
       <input type="file" class="form-control" name="image">
      </div>

      <div class="form-group">
       <label for="category">Post Tags</label>
       <input type="text" class="form-control" name="post_tags">
      </div>

      <div class="form-group" id="">
       <label for="category">Post Content</label>
       <textarea class="form-control" name="post_content" id="editor"  cols="30" rows="10"></textarea>
      </div>
      <script>
                        ClassicEditor
                                .create( document.querySelector( '#editor' ) )
                                .then( editor => {
                                        console.log( editor );
                                } )
                                .catch( error => {
                                        console.error( error );
                                } );
      </script>
      

      <div class="form-group">
            <input class="btn btn-primary" type="submit" name="create_post" value="publish ">
      </div>

</form>