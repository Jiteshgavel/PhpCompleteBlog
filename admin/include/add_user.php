
<?php


if(isset($_POST['create_user']))
      {           
            $user_firstname = mysqli_real_escape_string($con,$_POST['user_firstname']);
            $user_lastname =mysqli_real_escape_string($con, $_POST['user_lastname']);
            //$user_role = mysqli_real_escape_string($con,$_POST['user_role']);
            $user_name = mysqli_real_escape_string($con,$_POST['user_name']);

            //$post_image = $_FILES['image']['name'];
            //$post_image_temp = $_FILES['image']['tmp_name'];

            $user_email = mysqli_real_escape_string($con,$_POST['user_email']);
           
           // $post_date = date('d-m-y'); 
            

            //move_uploaded_file($post_image_temp,"../images/$post_image");

            $query = "INSERT INTO users(user_firstname,user_lastname,user_role,user_name,user_email)";
            $query .="VALUES('{$user_firstname}','{$user_lastname}','subscriber','{$user_name}','{$user_email}')";
            
            $create_user_query = mysqli_query($con,$query);
            confirmQuery($create_user_query);
            echo "User Created : ".""."<a href='user.php'>View User</a>";
            
      }

?>

<form action="" method="post" enctype="multipart/form-data">    
    
      <div class="form-group">
         <label for="title">First Name</label>
          <input type="text" class="form-control" name="user_firstname">
      </div>

      <div class="form-group">
         <label for="title">Last Name</label>
          <input type="text" class="form-control" name="user_lastname">
      </div>

      <!-- <div class="form-group">
       <label for="category">User Role</label>
       <select name="user_role" id="" class="form-control">
            <option value="subscriber">Select Option</option>
            <option value="admin">Admin</option>
            <option value="subscriber">Subscriber</option>
       </select>
      </div> -->

    <!--  <div class="form-group">
       <label for="category">User Image</label>
       <input type="text" class="form-control" name="user_name">
      </div>
-->


      <div class="form-group">
       <label for="category">User Name</label>
       <input type="text" class="form-control" name="user_name">
      </div>

      <div class="form-group">
       <label for="category">Email</label>
       <input type="email" class="form-control" name="user_email">
      </div>
 
      <div class="form-group">
            <input class="btn btn-primary" type="submit" name="create_user" value="AddUser">
      </div>

</form>