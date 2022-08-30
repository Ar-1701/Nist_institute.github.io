<?php 
        include "config.php";
        session_start();

        if(!isset($_SESSION["username"]))
        {
            header("Location:{$hostname}");
        }  
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>ADMIN Panel</title>
        <!-- Bootstrap -->
        <link rel="stylesheet" href="../css/bootstrap.min.css"> 
        <script src="css/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="../icon/bootstrap-icons.css">
				<!-- My CSS -->
	    <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <!-- HEADER -->
        <div id="header-admin">
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row">
                    <!-- LOGO -->
                    <div class="col-md-offest-1 col-md-7">
                        <a href="post.php"><img class="logo" src="images/logo.png"></a>
                    </div>
                    <!-- /LOGO-CLosed -->
                      <!-- LOG-Out -->
                    <div class="col-md-offest-1 col-md-5">
                <a href="logout.php" class="admin-logout btn"><i><?php echo $_SESSION['username'] ;?></i class="text">-logout</a>        
                    </div>
                    <!-- /LOG-Out -->
                </div>
            </div>
        </div>
        <!-- /HEADER -->
        <!-- Menu Bar -->
        <div id="admin-menubar">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                       <ul class="admin-menu">
                            <li>
                                <a href="notice.php">Notice</a>
                            </li>
                            <li>
                                <a href="about-list.php">about</a>
                            </li>
                            <li>
                                <a href="category.php">Category</a>
                            </li>
                            <li>
                                <a href="course-list.php">course</a>
                            </li>
                            <li>
                                <a href="carousel-list.php">carousel</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Menu Bar -->
