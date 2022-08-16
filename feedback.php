<?php
error_reporting(0);
include('conn.php');
include('header.php');
include('leftbar.php');
?>
<!DOCTYPE html>
<html>
<head>
  <title>Kajiado Market</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>  
    

        <div class="auth-wrapper">
            <div class="container-fluid h-100">
                <div class="row flex-row h-100 bg-white">
                    <div class="col-xl-8 col-lg-6 col-md-5 p-0 d-md-block d-lg-block d-sm-none d-none">
                        <div class="lavalite-bg" style="background-image:url('files/src/img/feedback.jpg')">
                            <div class="lavalite-overlay"></div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-7 my-auto p-0">
                        <div class="authentication-form mx-auto">
                            <div class="logo-centered">
                                <a href="../index.html"><img src="../src/img/brand.svg" alt=""></a>
                            </div>
                         
                           <?php
                           if(isset($_POST['send']))
                           {
                           $bpid=$_POST['bpid'];
                           $remark=$_POST['remark'];
                           $result=$mysqli->query("INSERT INTO feedback(BUSINESSPERSONID,REMARKS) VALUES('$bpid','$remark')") or die($mysqli->error);
                           if($result)
                           {
                            echo "<script>alert('thank you for your feedback')</script>";
                           }
                         }
                           ?>
                            <form  method="POST" >
                                <?php
                if(isset($_POST['bpid']))
                {
                    $bpid=$_POST['bpid'];
                }
                if(isset($_POST['remark']))
                {
                    $remark=$_POST['remark'];
                }
                
                    ?>
                    <h1>Please send us your feedback</h1> 
                              
                                 <div class="form-group">
                                    <input type="text" class="form-control" placeholder="BussinesspersonID" required name="bpid">
                                    <i class="ik ik-lock"></i>
                                </div>
                              <p>REMARK:</p>
                                <textarea type="form-control" type="textarea" name="remark" rows="7" placeholder="please type your remark here"></textarea>
                                 
                                <div class="sign-btn text-center">
                                    <input type="submit" class="btn btn-theme" name="send" value="send">
                                </div>
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>
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