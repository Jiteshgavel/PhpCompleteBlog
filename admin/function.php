<?php

function escape($string)
{
    global $con;
    mysqli_real_escape_string($con,trim($string)); 
}








function confirmQuery($result){
    global $con;
    if(!$result)
            {
                  die("query failed..".mysqli_error($con));
            }
}

function insert_Cetogries()
{ global $con;

    if(isset($_POST['submit']))

                        {
                            $cat_title = mysqli_real_escape_string($con,$_POST['cat_tital']);
                            
                            if($cat_title == "" || empty($cat_title))
                            {
                                echo "<div class='alert alert-danger'>";
                                echo  "<strong>Empty!</strong> Text field is empity";
                                echo "</div>";
                            }
                            else{
                                $query = "INSERT INTO categories (cat_title)";
                                $query.="VALUE('{$cat_title}')";
                                $create_caterories = mysqli_query($con,$query);
                                if(!$create_caterories)
                                {
                                    die("query failed..".mysqli_error($create_caterories));
                                }
                            }
                        }
}

function  all_Catogries()
{
    global $con;
    $query = "SELECT * FROM categories";
                                $select_caterories = mysqli_query($con,$query);
                                if(!$select_caterories)
                                {
                                    die("query failed..".mysqli_error($select_caterories));
                                }
                                while($row = mysqli_fetch_assoc($select_caterories))
                                {
                                    $cat_id = $row['cat_id'];
                                    $cat_name = $row['cat_title'];
                                    echo "<tr>";
                                    echo "<td>{$cat_id}</td>";
                                    echo "<td>{$cat_name}</td>";
                                    if($_SESSION['user_role'] == 'admin')
                                    {
                                     echo "<td><a href='categories.php? delete={$cat_id}'>Delete</a></td>";
                                    echo "<td><a href='categories.php?edit={$cat_id}'>Edit</a></td>";
                                    echo "</tr>";
                                }}

}

function delete_caterories()
{   global $con;
    if(isset($_GET['delete']))
    {
    $cat_id =mysqli_real_escape_string($con,$_GET['delete']);
    $query = "DELETE FROM categories WHERE cat_id = {$cat_id}";
    $delete_query = mysqli_query($con,$query);
    }
}



?>