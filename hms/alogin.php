<?php
require 'connection.php';
if(!empty($_SESSION["email"]))
{
    header("Location: aprofile.php");
}
if(isset($_POST["submit"]))
{
    $email = $_POST['email'];
    $password = $_POST['password'];
    $result = mysqli_query($conn, "SELECT * FROM aregistration WHERE email = '$email'");
    $row = mysqli_fetch_assoc($result);
    if(mysqli_num_rows($result) > 0)
    {
        if($password == $row['password'])
        {
            $_SESSION["login"] = true;
            $_SESSION["email"] = $row["email"];
            echo '<script> alert("Login Successfully"); </script>';
            header("Location: aprofile.php");
        }
        else
        {
            echo '<script> alert("Password is wrong. Try again."); </script>';
        }
    }
    else
    {
        echo '<script> alert("User is not registered. Try again."); </script>';
    }
}
?>

<!doctype html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="css/custom-style.css">
        <title>Student Hostel Management System</title>
        <style>
        </style>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand mr-4" href="home.html">
                <font color="red" size="20"><b>Student</b></font>
                <font color="white" size="25"><b>Hostel</b></font>
                <font color="white" size="25"><b>Management</b></font>
                <font color="red" size="20"><b>System</b></font>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav m-auto">
                    <li class="nav-item"><a class="nav-link" href="home.html"><h5>Home</h5></a></li>
                    <li class="nav-item"><a class="nav-link" href="about.html"><h5>About</h5></a></li>
                    <li class="nav-item"><a class="nav-link" href="sregistration.php"><h5>Registration</h5></a></li>
                    <li class="nav-item dropdown">
                        <h5>
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Login</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="slogin.php">Student Login</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="alogin.php">Admin Login</a>
                        </h5>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="contact.html"><h5>Contact</h5></a></li>
                </ul>
            </div>
        </nav>

        <div class="jumbotron big-banner" style="height: 400px; padding-top: 100px;">
            <div class="offset-1">
                <div class ="row align-items-center">
                    <div class="col-8 text-capitalize">
                        <h1 class="display-5 font-weight-bold"><font size="25">Admin Login</font></h1>
                        <hr class="my-4">
                        <div class="d-inline-flex">
                            <p class="m-0 text-uppercase"><a class="text-white" href="home.html"><h4>Home</h4></a></p>
                            <i class="fa fa-angle-double-right pt-2 px-2 text-secondary"></i>
                            <p class="m-0 text-uppercase"><a class="text-white" href="alogin.php"><h4>Admin Login</h4></a></p>
                        </div>
                        <p class="text-white">A Place for You.</p>
                    </div>
                </div>
            </div>
        </div>

        <section class ="Form">
            <div class ="container mt-5">
                <div class = "row">
                    <div class="container mt-6">
                        <h1 class="font-weight-bold py-3"><center>Admin Login</center></h1>
                        <br>
                        <form class="row g-3" action="" method="post">
                            <div class="col-md-12 form-group">
                                <label for="email" class="form-label">Email<font color="red">*</font></label>
                                <input type="email" class="form-control" id="email" name="email" required/>
                            </div>
                            <div class="col-md-12 form-group">
                                <label for="password" class="form-label">Password<font color="red">*</font></label>
                                <input type="password" class="form-control" id="password" name="password" required/>
                            </div>
                            <div class="col-md-12">
                                <center><button type="submit" class="btn btn-primary" name="submit">Submit</button></center>
                            </div><br><br>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <footer>
            <nav class="navbar navbar-expand navbar-dark bg-dark">
                <ul class="navbar-nav m-auto">
                    <li class="nav-item text-white">© 2024 Student Hostel Management System. All Rights Reserved.</li>
                </ul>
            </nav>
        </footer>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>