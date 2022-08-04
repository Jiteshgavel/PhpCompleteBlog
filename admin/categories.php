<?php include "include/admin_header.php"?>

    <div id="wrapper">
        
    <!-- Nav-->
    <?php include "include/admin_nav.php"?>   

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Wel Come Admin
                            <small>Author</small>
                        </h1>
                    <div class="col-xs-6">
                        <?php
                          /// Insert categories Function
                            
                            insert_Cetogries();
                        
                        ?>

                        <form action="categories.php" method="POST">
                            <div class="form-group">
                                <label for="cat-title">Add Categories</label>
                                <input type="text" class="form-control" name="cat_tital">
                            </div>
                            <div class="form-group">
                                <input class="btn btn-primary" type="submit" name="submit" value="Add Categories">
                            </div>
                        </form>

                        <?php
                            if(isset($_GET['edit']))
                            {
                                $cat_id = mysqli_real_escape_string($con,$_GET['edit']);

                                include "include/update_caterories.php";
                            }
                        ?>
                        
                    </div>
                     <div class="col-xs-6">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Category</th>
                                  <?php  if($_SESSION['user_role'] == 'admin')
                                    {
                                      echo  "<th>Delete</th>
                                             <th>Edit</th>";
                                    }
                                    ?>
                                    
                                </tr>
                            </thead>
                            <tbody>
                            <?php all_Catogries();?>

                            <?php
                            //delete categories
                            delete_caterories();
                            ?>
                             </tbody>
                        </table>
                        </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <?php include "include/admin_footer.php"?>