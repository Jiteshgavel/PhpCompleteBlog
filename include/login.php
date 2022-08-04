
 

<?php

function login()
{
     session_start(); 
    global $con;
        if(isset($_POST['login']))
            {
                $useremail = $_POST['user_email'];
                $password = $_POST['password'];

                $useremail =   mysqli_real_escape_string($con,$useremail);
                $password =    mysqli_real_escape_string($con,$password);

            $query = "SELECT * FROM users WHERE user_email ='{$useremail}'";
            $select_user_query = mysqli_query($con,$query);

                if(!$select_user_query)
                {
                    die("Query Fail".mysqli_error($select_user_query));
                }

                while($row = mysqli_fetch_array($select_user_query))
                {
                    $db_user_id = $row['user_id'];
                    $db_user_name = $row['user_name'];
                    $db_user_password = $row['user_password'];
                    $db_user_firstname = $row['user_firstname'];
                    $db_user_lastname = $row['user_lastname'];
                    $db_user_role = $row['user_role'];
                }
                    
                $verify = password_verify($password,$db_user_password);
                if(!$verify)
                {
                    // echo "<div class='alert alert-success' role='alert'>
                    //              Information submited sucessfully
                    //      </div>";
                    
                    
                }
                if($verify){
                    $_SESSION['username'] = $db_user_name;
                    $_SESSION['firstname'] = $db_user_firstname;
                    $_SESSION['lastname'] = $db_user_lastname;
                    $_SESSION['user_role'] = $db_user_role;
                    header("Location: ../CMS-blog/admin");  
                    
               // header("Location: ../index.php");
                }

            }
}