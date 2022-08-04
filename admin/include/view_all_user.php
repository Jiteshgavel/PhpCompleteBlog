<table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>User Name</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                  <?php  if($_SESSION['user_role'] == 'admin')
                                    {
                                        echo  "<th>Admin</th>
                                            <th>Subscriber</th>
                                            <th>Edit</th>
                                            <th>Delete</th>";
                                            }
                                   ?>
                                
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                $query = "SELECT * FROM users";
                                $select_users = mysqli_query($con,$query);
                                if(!$select_users)
                                {
                                    die("query failed..".mysqli_error($con));
                                }
                                while($row = mysqli_fetch_assoc($select_users))
                                {
                                    $user_id = $row['user_id'];
                                    $user_name = $row['user_name'];
                                    $user_password = $row['user_password'];
                                    $user_firstname = $row['user_firstname'];
                                    $user_lastname = $row['user_lastname'];
                                    $user_email = $row['user_email'];
                                    $user_image = $row['user_image'];
                                    $user_role = $row['user_role'];
                                    

                                    echo "<tr>";
                                    echo "<td> $user_id</td>";
                                    echo "<td> $user_name</td>";
                                    echo "<td>  $user_firstname </td>";
                                    
 /*  
                                    $query = "SELECT * FROM categories WHERE cat_id = {$post_category_id} ";
                                    $select_categories_id = mysqli_query($con,$query);  
                                    while($row = mysqli_fetch_assoc($select_categories_id)) {
                                    $cat_id = $row['cat_id'];
                                    $cat_title = $row['cat_title'];

                                    echo "<td>{$cat_title}</td>";

                                    }

*/
                                    echo "<td> $user_lastname </td>";
                                    echo "<td> $user_email</td>";
                                    echo "<td> $user_role</td>";

                                 /*   $query = "SELECT * FROM POSTS WHERE POST_ID = $comment_post_id";
                                    $select_post_id_query = mysqli_query($con,$query);
                                    while($row = mysqli_fetch_assoc($select_post_id_query))
                                    {
                                        $post_id = $row['post_id'];
                                        $post_title = $row['post_title'];
                                        echo "<td><a href='../post.php?p_id=$post_id'>$post_title</a></td>";
                                    }
*/
                                    if($_SESSION['user_role'] == 'admin')
                                    {
                                    echo "<td><a href='user.php? admin={$user_id}'>Admin</a></td>";
                                    echo "<td><a href='user.php? sub={$user_id}'>Subscriber</a></td>";
                                    echo "<td><a href='user.php? source=edit_user&edit_user={$user_id}'>Edit</a></td>";
                                    echo "<td><a href='user.php? delete=$user_id'>Delete</a></td>";
                                    echo "</tr>";
                                    }
                                }
                            ?>
                                    
                            </tbody>
                            
                        </table>

                        <?php

                        if(isset($_GET['admin']))
                        {
                            $user_id = mysqli_real_escape_string($con,$_GET['admin']);
                            $query = "UPDATE users SET user_role = 'admin' WHERE USER_ID = {$user_id}";
                            $change_to_admin = mysqli_query($con,$query);
                            header("Location: user.php");
                        }

                        if(isset($_GET['sub']))
                        {
                            $user_id = mysqli_real_escape_string($con,$_GET['sub']);
                            $query = "UPDATE users SET user_role = 'subscriber' WHERE USER_ID = {$user_id}";
                            $change_to_sub = mysqli_query($con,$query);
                            header("Location: user.php");

                            if(!$con)
                            {
                                die("Query Failed".mysqli_error($con));
                            }
                        }

                        if(isset($_GET['delete']))
                        {
                            $user_id = mysqli_real_escape_string($con,$_GET['delete']);
                            $query = "DELETE FROM users WHERE user_id = {$user_id}";
                            $delete_user_query = mysqli_query($con,$query);
                            header("Location: user.php");
                        }

                        ?>