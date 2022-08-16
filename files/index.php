<?php
include('conn.php');
include('header.php');
include('leftbar.php');
?>

                <div class="main-content">
                    <div class="container-fluid">
                        <div class="row clearfix">
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="widget">
                                    <div class="widget-body">
                                        <a href="registration.php">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="state">
                                                <h3>  New Registrations</h3>
                                            </div>
                                            <div class="icon">
                                                <i class="ik ik-users"></i>

                                            </div>
                                            
                                               
                                            </div>
                                             <?php
                  $result=$mysqli->query("select *  from registration") or die(mysqli_error($mysqli));
               
                  while(list($USER_ID,$USER_NAME,$PASSWORD,$REG_DATE,$REG_TIME,$BUSSINESSPERSON_ID,$GOODS_ID,$STATUS)=mysqli_fetch_array($result))
                  {
                    $sql="SELECT COUNT(USER_ID) AS total FROM registration where status='pending'";
                    $result=$mysqli->query($sql);
                    $values=mysqli_fetch_assoc($result);
                    $num_rows=$values["total"];
                    echo "<h3>$num_rows</h3>";
                 
                  }
                                            ?>
                                        <small class="text-small mt-10 d-block"></small>
                                    </div>
                                    <a href="registration.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                                    </div>
                                </div>
                            </a>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="widget">
                                    <a href="businessperson.php">
                                    <div class="widget-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="state">
                                                <h3>Business Person</h3>
                                            </div>
                                            <div class="icon">
                                                <i class="ik ik-layers"></i>
                                            </div>
                                        </div>
                                        <small class="text-small mt-10 d-block"></small>
                                    </div>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>

                                    </div>
                                </div>
                            </a>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="widget">
                                    <div class="widget-body">
                                        <a href="payment.php">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="state">
                                                <h3>Payment</h3>
                                            </div>
                                            <div class="icon">
                                                <i class="ik ik-shopping-cart"></i>
                                            </div>
                                        </div>
                                        <small class="text-small mt-10 d-block"></small>
                                    </div>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                                    </div>
                                
                                </div>
                                </a>
                            </div>
                            
                             <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="widget">
                                    <div class="widget-body">
                                        <a href="confirmation.php">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="state">
                                                <h3>Confirmation</h3>
                                            </div>
                                            <div class="icon">
                                                <i class="ik ik-check"></i>
                                            </div>
                                            </div>
                                        <small class="text-small mt-10 d-block"></small>
                                    </div>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                                    </div>
                              
                                </div>
                                  </a>
                            </div>
                             <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="widget">
                                    <a href="revenuecollectors.php">
                                    <div class="widget-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="state">
                                                <h3>Revenue Collector</h3>
                                            </div>
                                            <div class="icon">
                                                <i class="ik ik-user"></i>
                                            </div>
                                            </div>
                                        <small class="text-small mt-10 d-block"></small>
                                    </div>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                                    </div>
                                </div>
                            
                            </div>
                            </a>
                        </div>
                <aside class="right-sidebar">
                    <div class="sidebar-chat" data-plugin="chat-sidebar">
                        <div class="sidebar-chat-info">
                            <h6>Feedback</h6>
                                   
                       
                    </div>
                </div>

                <footer class="footer">
                    <div class="w-100 clearfix">
                        <span class="text-center text-sm-left d-md-inline-block">Copyright © Dennis Omuya.</span>
                        <span class="float-none float-sm-right mt-1 mt-sm-0 text-center">Designed by Omuya</a></span>
                    </div>
                </footer>
                
            </div>
        
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script>window.jQuery || document.write('<script src="src/js/vendor/jquery-3.3.1.min.js"><\/script>')</script>
        <script src="plugins/popper.js/dist/umd/popper.min.js"></script>
        <script src="plugins/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="plugins/perfect-scrollbar/dist/perfect-scrollbar.min.js"></script>
        <script src="plugins/screenfull/dist/screenfull.js"></script>
        <script src="plugins/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="plugins/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
        <script src="plugins/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
        <script src="plugins/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
        <script src="plugins/jvectormap/jquery-jvectormap.min.js"></script>
        <script src="plugins/jvectormap/tests/assets/jquery-jvectormap-world-mill-en.js"></script>
        <script src="plugins/moment/moment.js"></script>
        <script src="plugins/tempusdominus-bootstrap-4/build/js/tempusdominus-bootstrap-4.min.js"></script>
        <script src="plugins/d3/dist/d3.min.js"></script>
        <script src="plugins/c3/c3.min.js"></script>
        <script src="js/tables.js"></script>
        <script src="js/widgets.js"></script>
        <script src="js/charts.js"></script>
        <script src="dist/js/theme.min.js"></script>
        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    </body>
</html>
