<?php include "include/admin_header.php"?>

<?php if($con)  ?> 
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
                        
                        
                    </div>
                </div>
                <!-- /.row -->

                       
                <!-- /.row -->
                
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-file-text fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">


                            <?php
                            $query = "SELECT * FROM posts";
                            $select_all_post = mysqli_query($con,$query);
                            $post_count= mysqli_num_rows($select_all_post);
                            ?>


                            <div class='huge'><?php echo  $post_count; ?></div>
                                    <div>Posts</div>
                                </div>
                            </div>
                        </div>
                        <a href="./Post.php">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-comments fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">

                                <?php
                               // $query = "SELECT * FROM COMMENTS";
                                //$select_all_comment = mysqli_query($con,$query);
                                //$comment_count= mysqli_num_rows($select_all_comment);
                                 //?>


                                <div class='huge'><?php //echo  $comment_count; ?></div>
                                <div>Comments</div>
                                </div>
                            </div>
                        </div>
                        <a href="./comment.php">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-user fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">

                                <?php
                              $query = "SELECT * FROM users";
                              $select_all_users = mysqli_query($con,$query);
                              $users_count= mysqli_num_rows($select_all_users);
                                 ?>

                                <div class='huge'><?php echo  $users_count; ?></div>
                                    <div> Users</div>
                                </div>
                            </div>
                        </div>
                        <a href="./user.php">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">

                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-list fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">

                                <?php
                                $query = "SELECT * FROM categories";
                                $select_all_categories = mysqli_query($con,$query);
                                $categories_count= mysqli_num_rows( $select_all_categories);
                                 ?>
                                    <div class='huge'><?php echo  $categories_count; ?></div>
                                    <div>Categories</div>
                                </div>
                            </div>
                        </div>
                        <a href="./categories.php">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
                <!-- /.row -->
            <?php
            $query = "SELECT * FROM posts WHERE post_status = 'published'";
            $select_all_published_post = mysqli_query($con,$query);
            $post_published_count= mysqli_num_rows($select_all_published_post);
           
            $query = "SELECT * FROM posts WHERE post_status = 'draft'";
            $select_all_draft_post = mysqli_query($con,$query);
            $post_draft_count= mysqli_num_rows($select_all_draft_post);

            //$query = "SELECT * FROM COMMENTS WHERE COMMENT_STATUS = 'UNAPPROVE'";
            //$select_unapproved_comment = mysqli_query($con,$query);
            //$unapproved_comment_count= mysqli_num_rows( $select_unapproved_comment);

           $query = "SELECT * FROM users WHERE user_role = 'subscriber'";
           $select_user_role = mysqli_query($con,$query);
           $subscriber_role_count= mysqli_num_rows( $select_user_role);

           $query = "SELECT * FROM users WHERE user_role = 'admin'";
           $select_user_role = mysqli_query($con,$query);
           $admin_role_count= mysqli_num_rows( $select_user_role);



             ?>
           
            <div class="row">
                <script type="text/javascript">
                google.charts.load('current', {'packages':['bar']});
                google.charts.setOnLoadCallback(drawChart);

                function drawChart() {
                    var data = google.visualization.arrayToDataTable([
                    ['Date', 'Count'],

                    <?php
                    $element_text = ['All Post','Active Posts','Draft Post','User','Admin','Subscriber','Categories'];
                    $element_count =[$post_count,$post_published_count,$post_draft_count,$users_count,$admin_role_count,$subscriber_role_count,$categories_count];
                    for($i=0; $i<7;$i++){
                    echo "['{$element_text[$i]}'".","."{$element_count[$i]}],";

                    }
                    ?>
                   // ['Posts', 1000],                    
                    ]);

                    var options = {
                    chart: {
                        title: '',
                        subtitle: '',
                    }
                    };

                    var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

                    chart.draw(data, google.charts.Bar.convertOptions(options));
                }
    </script>
    <div id="columnchart_material" style="width: 'auto'; height: 500px;"></div>

                </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <?php include "include/admin_footer.php"?>