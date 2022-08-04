
                        <form action="" method="POST">
                            <div class="form-group">
                                <label for="cat-title">Edit Categories</label>

                                <?php
                            //update categories
                            if(isset($_GET['edit']))
                            {
                            $cat_id =mysqli_real_escape_string($con,$_GET['edit']);
                            $query = "SELECT * FROM categories WHERE cat_id = $cat_id";
                            $select_caterories_id = mysqli_query($con,$query);
                            
                            if(!$select_caterories_id)
                            {
                                die("Query Error! ".mysqli_error($select_caterories_id));
                            }
                            else{
                            while($row = mysqli_fetch_assoc($select_caterories_id))
                                {
                                    $cat_id = $row['cat_id'];
                                    $cat_title = $row['cat_title'];
                                    ?>

                                    <Input value="<?php if(isset($cat_title)){echo $cat_title;} ?>" type="text" class="form-control" name="cat_title"></Input>                    

                                <?php }} }?>
                            
                            <?php
                                
                                //Update categories
                                if(isset($_POST['update']))
                                {
                                $cat_title =$_POST['cat_title'];
                                
                                $query = "UPDATE categories SET cat_title = '{$cat_title}' WHERE CAT_ID = {$cat_id}";
                                $update_query = mysqli_query($con,$query);
                                if(!$update_query)
                                {
                                    die("Query Error! ".mysqli_error($update_query));
                                }
                                }
                                
                            ?>                               
                            </div>
                            <div class="form-group">
                                <input class="btn btn-primary" type="submit" name="update" value="UpdateCategories">
                            </div>
                        </form>
                        