<?php
                                                
require_once(__DIR__.'/../mysql_connect.php');
session_start();
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>User Profile</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Paper Dashboard core CSS    -->
    <link href="assets/css/paper-dashboard.css" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--  Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/themify-icons.css" rel="stylesheet">

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-background-color="white" data-active-color="info">

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="websiteHome.php" class="simple-text">
                    Dolljoy
                </a>
            </div>

            <ul class="nav">
                <li>
                    <a href="clientDashboard.php">
                        <i class="ti-panel"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="active">
                    <a href="clientUserProfile.php">
                        <i class="ti-user"></i>
                        <p>User Profile</p>
                    </a>
                </li>
                <!--
                <li>
                    <a href="clientReviewOrders.php">
                        <i class="ti-search"></i>
                        <p>Review Orders</p>
                    </a>
                </li>
                -->
                <li>
                    <a href="clientOrderTracking.php">
                        <i class="ti-flag-alt-2"></i>
                        <p>Order Tracking</p>
                    </a>
                </li>
                <li>
                    <a href="clientOrderHistory.php">
                        <i class="ti-book"></i>
                        <p>Order History</p>
                    </a>
                </li>
            </ul>
    	</div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>
                    <a class="navbar-brand" href="clientUserProfile.php">User Profile</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="ti-link"></i>
									<p>Website</p>
									<b class="caret"></b>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="websiteHomeLoggedIn.php">Homepage</a></li>
                                <li><a href="websiteGalleryLoggedIn.php">Gallery</a></li>
                                <li><a href="websiteServicesLoggedIn.php">Services</a></li>
                                <li><a href="#">Contact Us</a></li>
                              </ul>
                        </li><li>
                            <a href="websiteHome.php">
								<i class="ti-shift-right"></i>
								<p>Logout</p>
                            </a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>

        
        
<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-10 col-md-7">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">View profile details</h4>
                            </div>
                            <div class="content">
                                <form>
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Company</label>
                                                <?php
                                                
                                                
                                                $username=$_SESSION['username'];
                                                
                                                $query = "SELECT * FROM clientaccount WHERE CRepUsername='$username'";

                                                // ORDER DETAILS TABLE

                                                $result=mysqli_query($dbc,$query);
                                                while ($row=mysqli_fetch_array($result)){
                                                    $name = $row['CName'];
                                                    $address = $row['CAddress'];
                                                    $contactno = $row['CContactNo'];
                                                    $email = $row['CEmailAdd'];
                                                    $fname = $row['CRepFirstName'];
                                                    $lname = $row['CRepLastName']; //
                                                    $cnum = $row['CRepContactNo'];
                                                    $caddress = $row['CRepAddress'];
                                                    $cemail = $row['CRepEmailAdd'];
                                                    $un = $row['CRepUsername'];
                                                
                                                
                                                echo "<br>".$name;
                                                    
                                                echo '
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Contact Number</label>
                                                <br>'.$contactno;
                                           echo' </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email address</label>
                                                <br>'.$email;
                                           echo ' </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Address</label>
                                                <br>'.$address;
                                           echo ' </div>
                                        </div>
                                    </div>

                                    <p>______________________________________________________________________________________________________________</p>

                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Representative Name</label>
                                                <br>'.$fname.' '.$lname;
                                          echo ' </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Contact Number</label>
                                                <br>'.$cnum;
                                          echo ' </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Email address</label>
                                                <br>'.$cemail;
                                         echo ' 
                                         </div> 
                                         </div> 
                                         </div>
                                         
                                         <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Address</label>
                                                <br>'.$address;
                                          echo ' </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Username</label>
                                                <br>'.$un;
                                                
                                                
                                                
                                                }
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                    <!--
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-info btn-fill btn-wd">Update Profile</button>
                                    </div>
                                    -->
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>


        <footer class="footer">
            <div class="container-fluid">
                <div class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script> designed by <a href="http://www.creative-tim.com">Creative Tim</a>
                </div>
            </div>
        </footer>

    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="assets/js/bootstrap-checkbox-radio.js"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
	<script src="assets/js/paper-dashboard.js"></script>

	<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>

	
</html>
