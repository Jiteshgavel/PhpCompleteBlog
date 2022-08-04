<?php

    if(isset($_GET['edit_user']))
    {
       $the_user_id = $_GET['edit_user'];
    
    $query = "SELECT * FROM users WHERE USER_ID = {$the_user_id}";
    $select_user_by_id = mysqli_query($con,$query);
    if(!$select_user_by_id)
    {
         die("query failed..".mysqli_error($con));
    }
    

    while($row = mysqli_fetch_assoc($select_user_by_id))
    {
        $user_id = $row['user_id'];
        $user_firstname = $row['user_firstname'];
        $user_lastname = $row['user_lastname'];
     
        $user_name = $row['user_name'];
        $user_email = $row['user_email'];
      

       // $post_tags = $row['post_tags'];
        //$post_comment_count = $row['post_comment_count'];
        //$post_date = $row['post_date'];
    }
    }

?>
<?php
      if(isset($_POST['update_user']))
      {

           
            $user_firstname = mysqli_real_escape_string($con,$_POST['user_firstname']);
            $user_lastname = mysqli_real_escape_string($con,$_POST['user_lastname']);
           // $user_role = mysqli_real_escape_string($con,$_POST['user_role']);
            $user_name =mysqli_real_escape_string($con, $_POST['user_name']);

            //$post_image = $_FILES['image']['name'];
            //$post_image_temp = $_FILES['image']['tmp_name'];

            $user_email = mysqli_real_escape_string($con,$_POST['user_email']);
           // $user_password =mysqli_real_escape_string($con, $_POST['user_password']);
           // $post_date = date('d-m-y'); 
            

            //move_uploaded_file($post_image_temp,"../images/$post_image");


            $query = "UPDATE users SET ";
            $query .="user_firstname  = '{$user_firstname}', ";
            $query .="user_lastname = '{$user_lastname}', ";
            // $query .="user_role   =  '{$user_role}', ";
            $query .= "user_name ='{$user_name}', ";
            $query .="user_email = '{$user_email}' ";
            // $query .="user_password   = '{$user_password}' ";
            $query .= "WHERE user_id = {$the_user_id}";
            $update_user = mysqli_query($con,$query);
        
            if(!$update_user)
            {
                die("query fail".mysqli_error($update_user));
            }
            
      }

?>

 



<form action="" method="post" enctype="multipart/form-data">    
    

      <form action="" method="post" enctype="multipart/form-data">    
    
      <div class="form-group">
         <label for="title">First Name</label>
          <input type="text" value="<?php echo  $user_firstname; ?>" class="form-control" name="user_firstname">
      </div>

      <div class="form-group">
         <label for="title">Last Name</label>
          <input type="text" class="form-control" value="<?php echo  $user_lastname; ?>" name="user_lastname">
      </div>

      <!-- <div class="form-group">
       <label for="category">User Role</label>
       <select name="user_role" id="" class="form-control">
       <option value='<?php //echo  $user_role; ?>'><?php //echo  $user_role; ?></option>
       <?php
            // if($user_role == 'admin')
            // {
            //     echo "<option value='subscriber'>Subscriber</option>";
            // }
            // else
            // {
            //     echo "<option value='admin'>Admin</option>";
            // }
      

          
            ?>
  
       </select>
      </div> -->

    <!--  <div class="form-group">
       <label for="category">User Image</label>
       <input type="text" class="form-control" name="user_name">
      </div>
-->


      <div class="form-group">
       <label for="category">User Name</label>
       <input type="text" class="form-control" value="<?php echo $user_name ; ?>" name="user_name">
      </div>

      <div class="form-group">
       <label for="category">Email</label>
       <input type="email" class="form-control" value="<?php echo  $user_email; ?>" name="user_email">
      </div>


      <!-- <div class="form-group">
       <label for="category">Password</label>
       <input type="password" class="form-control" value="<?php //echo  $user_password; ?>" name="user_password">
      </div>

       -->
      
      <div class="form-group">
            <input class="btn btn-primary" type="submit" name="update_user" value="UdateUser">
      </div>

</form>