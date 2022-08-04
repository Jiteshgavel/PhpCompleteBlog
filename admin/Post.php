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
                            <small><?php echo strtoupper($_SESSION['username']) ;?></small>
                        </h1>
                        <?php
                        if(isset($_GET['source']))
                        {
                            $source = $_GET['source'];
                        }
                        else
                        {
                            $source = "";
                        }
                        switch($source)
                        {
                            case 'add_post';
                            include "include/add_post.php";
                           
                            break;

                            case 'edit_post';
                            include "include/edit_post.php";
                            break;

                            case '3';
                            echo "Nice 3";
                            break;

                            default:
                            //code here
                            include "include/view_all_post.php";
                            break;
                        }
                        ?>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <?php include "include/admin_footer.php"?>