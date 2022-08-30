<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nist</title>
    <link rel="stylesheet" href="icon/bootstrap-icons.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/bootstrap.js"></script>
    <!-- My CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/form.css">
    <script src="js/form.js"></script>
</head>

<body id="body-color">
    <!-- go to top -->
    <!-- NAVE BAR START -->
    <div class="container-fluid Outer">
        <div class=" row">
            <div class=" col-md-12 col-sm-12 navbarShadow">
                <nav class="navbar  NavBar navbar-expand  navbar-light">
                    <a class="navbar-brand" href="index.php" id="nist_logo_name">NIST</a>
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0  navItem">
                        <li class="nav-item  <?php if ($active_page == 'home') {
                                                    echo 'active';
                                                } ?>">
                            <a class="nav-link " href="index.php"> <i class=" bi bi-house"></i> Home</a>
                        </li>
                        <li class="nav-item <?php if ($active_page == 'gallery') {
                                                echo 'active';
                                            } ?>">
                            <a class="nav-link" href="gallery.php"><i class="bi bi-shop"></i> gallery</a>
                        </li>
                        <li class="nav-item <?php if ($active_page == 'course') {
                                                echo 'active';
                                            } ?>">
                            <a class="nav-link " href="course.php"><i class="bi bi-person"></i> course</a>
                        </li>
                        <li class="nav-item <?php if ($active_page == 'contacts') {
                                                echo 'active';
                                            } ?>">
                            <a class="nav-link " href="contact.php"><i class="bi bi-phone"></i> contact</a>
                        </li>
                        <li class="nav-item <?php if ($active_page == 'about') {
                                                echo 'active';
                                            } ?>">
                            <a class="nav-link " href="about.php"><i class="bi bi-phone"></i> about</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <main>
                <section>
                    <h3>welcome to</h3>
                    <div id="logo">
                        <a href="index.php"><img src="Image/logo.png" alt="LOGO"></a>
                    </div>
                    <h2>nist azamgarh</h2>
                    <p>work is worship</p>
                </section>
            </main>
        </div>
    </div>
    <br>