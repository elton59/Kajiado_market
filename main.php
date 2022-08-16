    <?php
session_start();
error_reporting(0);
if(!isset($_SESSION['uname']))
{
  header('location:index.php');
}
error_reporting(0);
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
                                        <a href="payment.php">
                                        <div class="d-flex justify-content-between align-items-center">
                                                         <div class="state">
                                                <h3>total stalls  available:
                                                 <?php
                                         $result=$mysqli->query("select *  FROM  stalls") or die(mysqli_error($mysqli));
               
                  while(list($STALL_ID,$STALL_NAME,$LOCATION,$BUSSINESSPERSON_ID,$MARKET_NAME,$STATUS)=mysqli_fetch_array($result))
                  {
                    $sql="SELECT COUNT(STALL_ID) AS total FROM stalls where status='available'";
                    $result=$mysqli->query($sql);
                    $values=mysqli_fetch_assoc($result);
                    $num_rows=$values["total"];
                    echo "<h3>$num_rows</h3>";
                 
                  }
                                         ?></h3>
                                     </div>
                                            </div>
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
                                    <div class="widget-body">
                                        <a href="market.php">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="state">
                                                <h3>Total markets</h3>
                                            </div>
                                            <div class="icon">
                                                <i class="ik ik-map"></i>
                                            </div>
                                        </div>
                                         <?php
                                         $result=$mysqli->query("select *  from market") or die(mysqli_error($mysqli));
               
                  while(list($MARKET_ID,$MARKET_NAME,$MARKET_LOCATION)=mysqli_fetch_array($result))
                  {
                    $sql="SELECT COUNT(MARKET_ID) AS total FROM market";
                    $result=$mysqli->query($sql);
                    $values=mysqli_fetch_assoc($result);
                    $num_rows=$values["total"];
                    echo "<h3>$num_rows</h3>";
                }
                                         ?>
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
                                        
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="state">
                                                <h3>Total registered business people</h3>
                                            </div>
                                            <div class="icon">
                                                <i class="ik ik-users"></i>
                                            </div>
                                            </div>
                                             <?php
                                         $result=$mysqli->query("select *  from businessperson") or die(mysqli_error($mysqli));
               
                  while(list($BUSINESSPERSON_ID,$FIRST_NAME,$LAST_NAME,$USERNAME,$PHONE_NO,$EMAIL)=mysqli_fetch_array($result))
                  {
                    $sql="SELECT COUNT(BUSINESSPERSON_ID) AS total FROM businessperson";
                    $result=$mysqli->query($sql);
                    $values=mysqli_fetch_assoc($result);
                    $num_rows=$values["total"];
                    echo "<h3>$num_rows</h3>";
                }
                                         ?>
                                        <small class="text-small mt-10 d-block"></small>
                                    </div>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                                    </div>
                              
                                </div>
                                  </a>
                            </div>
                        </div>
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
        <script>window.jQuery || document.write('<script src="files/src/js/vendor/jquery-3.3.1.min.js"><\/script>')</script>
        <script src="files/plugins/popper.js/dist/umd/popper.min.js"></script>
        <script src="files/plugins/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="files/plugins/perfect-scrollbar/dist/perfect-scrollbar.min.js"></script>
        <script src="files/plugins/screenfull/dist/screenfull.js"></script>
        <script src="files/plugins/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="files/plugins/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
        <script src="files/plugins/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
        <script src="files/plugins/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
        <script src="files/plugins/jvectormap/jquery-jvectormap.min.js"></script>
        <script src="files/plugins/jvectormap/tests/assets/jquery-jvectormap-world-mill-en.js"></script>
        <script src="files/plugins/moment/moment.js"></script>
        <script src="files/plugins/tempusdominus-bootstrap-4/build/js/tempusdominus-bootstrap-4.min.js"></script>
        <script src="files/plugins/d3/dist/d3.min.js"></script>
        <script src="files/plugins/c3/c3.min.js"></script>
        <script src="files/js/tables.js"></script>
        <script src="files/js/widgets.js"></script>
        <script src="files/js/charts.js"></script>
        <script src="files/dist/js/theme.min.js"></script>
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
