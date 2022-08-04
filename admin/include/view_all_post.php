<?php

if(isset($_POST['checkBoxArray']))
{
   foreach($_POST['checkBoxArray'] as $postValueId)
   {
      
     $bulk_options =    mysqli_real_escape_string($con,$_POST['bulk_options']);

    switch($bulk_options)
    {
        case 'published' :
     
        $query = "UPDATE posts SET post_status = '{$bulk_options}' WHERE post_id ={$postValueId} ";
        $publish_bulk = mysqli_query($con,$query);

        break;

        case 'reset' :
     
            $query = "UPDATE posts SET post_views_count = 0 WHERE post_id ={$postValueId} ";
            $draft_bulk = mysqli_query($con,$query);
    
            break;

        case 'delete' :
     
            $query = "DELETE FROM posts  WHERE post_id ={$postValueId} ";
            $delete_bulk = mysqli_query($con,$query);
    
            break;

            case 'draft' :
     
                $query = "UPDATE posts SET post_status = '{$bulk_options}' WHERE post_id ={$postValueId} ";
                $draft_bulk = mysqli_query($con,$query);
        
                break;
    




        case 'clone' :
     
            $query = "SELECT * FROM posts  WHERE post_id ={$postValueId} ";
            $select_post_query = mysqli_query($con,$query);

            while($row = mysqli_fetch_assoc($select_post_query))
             {
                $post_id = $row['post_id'];
                $post_author = $row['post_author'];
                $post_title = $row['post_title'];
                $post_category_id = $row['post_category_id'];
                $post_status = $row['post_status'];
                $post_image = $row['post_image'];
                $post_content = $row['post_content'];
                $post_tags = $row['post_tags'];
              
               
             }
            $query = "INSERT INTO posts (post_category_id,post_title,post_author,post_date,post_image,post_content,post_tags,post_status)";
            $query .="VALUES({$post_category_id},'{$post_title}','{$post_author}',now(),'{$post_image}','{$post_content}','{$post_tags}','{$post_status}')";
            $create_post_query = mysqli_query($con,$query);
            if(!$create_post_query)
            {
                die("query failed..".mysqli_error($select_post));
            }
    
            break;
            

    }

   }
}




?>



<form action="" method="POST">

<table class="table table-bordered table-hover">

    <div id="bulkOptionsContainer" class="col-xs-4" style="padding: 0px;">

        <select name="bulk_options" id="" class="form-control">
            <option value="">Select Option</option>
            <?php
            if($_SESSION['user_role'] == 'admin')
            {
            echo"<option value='published'>Publish</option>
            <option value='draft'>Draft</option>
            <option value='clone'>Clone</option>
            <option value='delete'>Delete</option>
            <option value='reset'>Reset Views</option>";
            }
            ?>
        </select>
    </div>

    <div  class="col-xs-4 ">

        <input type="submit" name="submit" class="btn btn-success " value="Apply">
        <a href="Post.php?source=add_post" class=" btn btn-primary ">Add New</a>
        

    </div>

<br><br><br>
    

                            <thead>
                                <tr>
                                <th><input id="selectAllBoxes" type="checkbox"></th>
                                    <th>Id</th>
                                    <th>Author</th>
                                    <th>Title</th>
                                    <th>Category</th>
                                    <th>Status</th>
                                    <th>Image</th>
                                    <th>Tags</th>
                                  <!--  <th>Comment</th>-->
                                    <th>Date</th>
                                    <?php
                                    if($_SESSION['user_role'] == 'admin')
                                    {
                                     echo "
                                     <th>Draft</th>
                                     <th>Publish</th>
                                     <th>View Post</th>
                                    <th>Edit</th>
                                    <th>Delete</th> 
                                    <th>Views</th> ";
                                    }
                                    ?>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                $query = "SELECT * FROM posts ORDER BY post_id DESC";
                                $select_post = mysqli_query($con,$query);
                                if(!$select_post)
                                {
                                    die("query failed..".mysqli_error($select_post));
                                }
                                while($row = mysqli_fetch_assoc($select_post))
                                {
                                    $post_id = $row['post_id'];
                                    $post_author = $row['post_author'];
                                    $post_title = $row['post_title'];
                                    $post_category_id = $row['post_category_id'];
                                    $post_status = $row['post_status'];
                                    $post_image = $row['post_image'];
                                    $post_content = $row['post_content'];
                                    $post_tags = $row['post_tags'];
                                    $post_comment_count = $row['post_comment_count'];
                                    $post_date = $row['post_date'];
                                    $post_views_count = $row['post_views_count'];
                                    echo "<tr>";
                                    ?>
                                    
                                    
                                    <td><input class='checkBoxes' type='checkbox' name='checkBoxArray[]' value='<?php echo $post_id; ?>'></td>

                                <?php
                                   // echo "<td><input class='checkBoxes' id='selectAllBoxes' type='checkbox'></td>";
                                    echo "<td>$post_id</td>";
                                    echo "<td>$post_author</td>";
                                    echo "<td> $post_title</td>";

                                    $query = "SELECT * FROM categories WHERE cat_id = {$post_category_id} ";
                                    $select_categories_id = mysqli_query($con,$query);  
                                    while($row = mysqli_fetch_assoc($select_categories_id)) {
                                    $cat_id = $row['cat_id'];
                                    $cat_title = $row['cat_title'];

                                    echo "<td>{$cat_title}</td>";

                                    }


                                    echo "<td>$post_status</td>";
                                    echo "<td><img width='100' src='../images/$post_image' alt ='image'></td>";
                                    echo "<td>$post_tags</td>";
                                   // echo "<td>$post_content</td>";
                                   // echo "<td> $post_comment_count</td>";


                                
                                   
                                  
                                    echo "<td>$post_date</td>";
                                    if($_SESSION['user_role'] == 'admin')
                                    {
                                    echo "<td><a href='Post.php?draft={$post_id}'>Draft</a></td>"; 
                                    echo "<td><a href='Post.php?published={$post_id}'>Publish</a></td>";    
                                    echo "<td><a href='../post-details.php?p_id={$post_id}'>View Post</a></td>";
                                    echo "<td><a onClick=\" javascript: return confirm('Are you sure you want to Edit');\" href='Post.php? source=edit_post&p_id={$post_id}'>Edit</a></td>";
                                    echo "<td><a onClick=\" javascript: return confirm('Are you sure you want to Delete');\" href='Post.php? delete={$post_id}'>Delete</a></td>";
                                    //echo "<td> $post_comment_count</td>";
                                    echo "<td><a onClick=\" javascript: return confirm('Are you sure you want to Reset Views ');\" href='Post.php? reset={$post_id}'>$post_views_count</a></td>";
                                    echo "</tr>";
                                   }
                                }
                            
                            ?>
                                    
                            </tbody>
                            
                        </table>
                </form>



                        <?php

                        if(isset($_GET['delete']))
                        {
                            $post_id =  mysqli_real_escape_string($con,$_GET['delete']);
                            $query = "DELETE FROM posts WHERE post_id = {$post_id}";
                            $delete_query = mysqli_query($con,$query);
                            header("Location: Post.php");
                        }


                        if(isset($_GET['reset']))
                        {
                            $post_id = $_GET['reset'];
                            $query = "UPDATE posts SET post_views_count = 0  WHERE post_id =".mysqli_real_escape_string($con, $_GET['reset'])." ";
                            $update_view_query = mysqli_query($con,$query);
                            header("Location: Post.php");
                        }

                        if(isset($_GET['draft']))
                        {
                            $user_id = mysqli_real_escape_string($con,$_GET['draft']);
                            $query = "UPDATE posts SET post_status = 'draft' WHERE post_id = {$user_id}";
                            $change_to_admin = mysqli_query($con,$query);
                            header("Location: Post.php");
                        }

                        if(isset($_GET['published']))
                        {
                            $user_id = mysqli_real_escape_string($con,$_GET['published']);
                            $query = "UPDATE posts SET post_status = 'published' WHERE post_id = {$user_id}";
                            $change_to_admin = mysqli_query($con,$query);
                            header("Location: Post.php");
                        }



                        ?>