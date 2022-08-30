<?php session_start(); ?>
<!doctype html>
<html>
   <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>ADMIN | Login</title>
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <!-- <script src="css/bootstrap.bundle.min.js"></script> -->
        <link rel="stylesheet" href="../icon/bootstrap-icons.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body> 
        <div id="wrapper-admin" >
            <div class="container">
                <div class="row">
                    <!-- Form Start -->                      
                    <div class="col-md-offset-0 col-md-6">
                        <img class="logo" src="images/logo.png">
                        <h3 class="heading">Login</h3>
                        <?php include "config.php";
if (isset($_POST['login'])) {
    include "config.php";

    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = md5($_POST['password']);
    if(empty($username))
            {
                echo '<div class="alert alert-danger">Fill Username.</div>';
            }
    elseif(empty($password))
            {
                echo '<div class="alert alert-danger">Fill Password.</div>';
            }            
            else{

            
    $sql3 = "SELECT user_id,username FROM user WHERE username = '{$username}' AND password = '{$password}'";

    $result3 = mysqli_query($conn, $sql3) or die("Query Failed.");
    if (mysqli_num_rows($result3) > 0) {
        while ($row3 = mysqli_fetch_assoc($result3)) {
            session_start();
            $_SESSION["username"] = $row3['username'];
            $_SESSION["user_id"] = $row3['user_id'];
            header("Location:{$hostname}notice.php");         
        }
    }
    else {
        echo '<div class="alert alert-danger">Username And Password are Not Matched.</div>';
    }
}}
?>                        
                        <form  class=""  action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method ="POST" >
                            <div class="form-group">
                            <label >Username</label>
                                <input type="text" name="username" id="username" class="form-control" autocomplete="off"  >
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="text" name="password" id="password" class="form-control" autocomplete="off" >
                            </div>
                            <input type="submit" name="login" id="login" class="btn btn-primary" value="login" />
                        </form>
                        <!-- /Form  End -->
                        
</div>
<div class="vl"></div>
                  <!-- Registration  -->
                  <div class="col-md-offset-0 col-md-6">
                  <!-- Form Start -->
                  <h3 class="heading">Registration</h3>
                     
                  <?php include "config.php";
if (isset($_POST['save'])) {
    $f_name = mysqli_real_escape_string($conn, $_POST['f_name']);
    $l_name = mysqli_real_escape_string($conn, $_POST['l_name']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, md5($_POST['password']));

    $user_check = "SELECT username,password FROM user WHERE username = '{$username}' AND password = '{$password}'";
    $result1 = mysqli_query($conn, $user_check) or die("Query Failed.");

    if (mysqli_num_rows($result1) > 0) {
        echo "<div class='alert alert-danger'>Username Already Exists.</div>";
    }
    else {
        $sql = "INSERT INTO user(f_name,l_name,username,password)
        VALUES('{$f_name}','{$l_name}','{$username}','{$password}')";

        $result = mysqli_query($conn, $sql);
        if ($result > 0) {
            echo "<div class='alert alert-success'>Successfully Registered</div>";
        // header("location: {$hostname}notice.php");
        }
        else {
            echo "<div class='alert alert-danger'>Registration Failed.</div>";
        }
    }
}
?>
                 <form class="bg-info login_form" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method ="POST" autocomplete="off">
                    <div class="form-group">
                          <label>First Name</label>
                          <input type="text" name="f_name" class="form-control" placeholder="First Name" autocomplete="off" required>                        
                      </div>                      
                      <div class="form-group">
                          <label>Last Name</label>
                          <input type="text" name="l_name" class="form-control" placeholder="Last Name" autocomplete="off" required>             
                      </div>
                  
                         <div class="form-group">
                          <label>User Name</label>
                          <input type="text" name="username" class="form-control" placeholder="Username" autocomplete="off"required >            
                      </div>
                        
                      <div class="form-group">
                          <label>Password</label>
                          <input type="password" name="password" class="form-control" placeholder="Password" autocomplete="off" required>

                      </div>
                      <input type="submit"  name="save" class="btn btn-primary" value="Save" />
                      <!-- Form End-->                                      
                </form>              
               </div> 
           </div>
       </div>
   </div> 
</body>
</html>
                   
               
