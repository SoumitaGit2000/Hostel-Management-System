<?php
require 'connection.php';
if(!empty($_SESSION["id"]))
{
    header("Location: sprofile.php");
}
if(isset($_POST["submit"]))
{
    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$number = $_POST['number'];
	$address = $_POST['address'];
	$location = $_POST['location'];
	$dob = $_POST['dob'];
	$gender = $_POST['gender'];
	$aadharnumber = $_POST['aadharnumber'];
	$pannumber = $_POST['pannumber'];
	$collegename = $_POST['collegename'];
	$stream = $_POST['stream'];
	$yos = $_POST['yos'];
	$yop = $_POST['yop'];
	$fathername = $_POST['fathername'];
	$fathernumber = $_POST['fathernumber'];
	$mothername = $_POST['mothername'];
	$mothernumber = $_POST['mothernumber'];
	$roomtype = $_POST['roomtype'];
    $duplicate = mysqli_query($conn, "SELECT * FROM sregistration WHERE email = '$email'");
    if(mysqli_num_rows($duplicate) > 0)
    {
        echo '<script> alert("Email has already taken"); </script>';
        header("location:registration.php");
    }
    else
    {
        $query = "INSERT INTO sregistration VALUES('','$firstname','$middlename','$lastname','$email','$password','$number','$address','$location','$dob','$gender','$aadharnumber','$pannumber','$collegename','$stream','$yos','$yop','$fathername','$fathernumber','$mothername','$mothernumber','$roomtype')";
        mysqli_query($conn, $query);
        echo '<script> alert("Registration Successful"); </script>';
        header("location:slogin.php");
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
                        <h1 class="display-5 font-weight-bold"><font size="25">Registration</font></h1>
                        <hr class="my-4">
                        <div class="d-inline-flex">
                            <p class="m-0 text-uppercase"><a class="text-white" href="home.html"><h4>Home</h4></a></p>
                            <i class="fa fa-angle-double-right pt-2 px-2 text-secondary"></i>
                            <p class="m-0 text-uppercase"><a class="text-white" href="sregistration.php"><h4>Registration</h4></a></p>
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
                        <h1 class="font-weight-bold py-3"><center>Registration</center></h1>
                        <br>
                        <form class="row g-3" action="" method="post">
                            <h4>Introduction</h4>
                            <div class="col-md-12 form-group">
                                <label for="firstname" class="form-label">First Name<font color="red">*</font></label>
                                <input type="text" class="form-control" id="firstname" name="firstname" required/>
                            </div>
                            <div class="col-md-12 form-group">
                                <label for="middlename" class="form-label">Middle Name</label>
                                <input type="text" class="form-control" id="middlename" name="middlename"/>
                            </div>
                            <div class="col-md-12 form-group">
                                <label for="lastname" class="form-label">Last Name<font color="red">*</font></label>
                                <input type="text" class="form-control" id="lastname" name="lastname" required/>
                            </div>
                            <h4>Other Details</h4>
                            <div class="col-md-12 form-group">
                                <label for="email" class="form-label">Email<font color="red">*</font></label>
                                <input type="email" class="form-control" id="email" name="email" required/>
                            </div>
                            <div class="col-md-12 form-group">
                                <label for="password" class="form-label">Password<font color="red">*</font></label>
                                <input type="password" class="form-control" id="password" name="password" required/>
                            </div>
                            <div class="col-md-12 form-group">
                                <label for="number" class="form-label">Phone Number<font color="red">*</font></label>
                                <input type="text" class="form-control" id="number" name="number" required/>
                            </div>
                            <div class="col-md-12 form-group">
                                <label for="address" class="form-label">Address With Pincode<font color="red">*</font></label>
                                <textarea rows="2" cols="20" class="form-control" id="address" name="address" required/></textarea>
                            </div>
                            <div class="col-md-12 form-group">
                                <label for="location" class="form-label">Location (Town/City, State)<font color="red">*</font></label>
                                <input type="text" class="form-control" id="location" name="location" required/>
                            </div>
                            <div class="col-md-12 form-group">
                                <label for="dob" class="form-label">Date of Birth<font color="red">*</font></label>
                                <input type="date" class="form-control" id="dob" name="dob" required/>
                            </div>
                            <div class="col-md-12 form-group">
                                <label for="gender" class="form-label">Gender<font color="red">*</font></label><br>
                                <input type="radio" id="gender" name="gender" value="Male" required/> Male<br>
                                <input type="radio" id="gender" name="gender" value="Female" required/> Female<br>
                                <input type="radio" id="gender" name="gender" value="Others" required/> Others<br>
                            </div>
                            <h4>Identity Proof</h4>
                            <div class="col-md-12 form-group">
                                <label for="aadharnumber" class="form-label">Aadhar Card Number<font color="red">*</font></label>
                                <input type="text" class="form-control" id="aadharnumber" name="aadharnumber" required/>
                            </div>
                            <div class="col-md-12 form-group">
                                <label for="pannumber" class="form-label">Pan Card Number<font color="red">*</font></label>
                                <input type="text" class="form-control" id="pannumber" name="pannumber" required/>
                            </div>
                            <h4>Educational Details</h4>
                            <div class="col-md-12 form-group">
                                <label for="collegename" class="form-label">College Name<font color="red">*</font></label>
                                <input type="text" class="form-control" id="collegename" name="collegename" required/>
                            </div>
                            <div class="col-md-12 form-group">
                                <label for="stream" class="form-label">Stream<font color="red">*</font></label>
                                <input type="text" class="form-control" id="stream" name="stream" required/>
                            </div>
                            <div class="col-md-12 form-group">
                                <label for="yos" class="form-label">Year of Starting From<font color="red">*</font></label>
                                <input type="text" class="form-control" id="yos" name="yos" required/>
                            </div>
                            <div class="col-md-12 form-group">
                                <label for="yop" class="form-label">Year of Passing Out<font color="red">*</font></label>
                                <input type="text" class="form-control" id="yop" name="yop" required/>
                            </div>
                            <h4>Parent Details</h4>
                            <div class="col-md-12 form-group">
                                <label for="fathername" class="form-label">Father's Name<font color="red">*</font></label>
                                <input type="text" class="form-control" id="fathername" name="fathername" required/>
                            </div>
                            <div class="col-md-12 form-group">
                                <label for="fathernumber" class="form-label">Father's Phone Number<font color="red">*</font></label>
                                <input type="text" class="form-control" id="fathernumber" name="fathernumber" required/>
                            </div>
                            <div class="col-md-12 form-group">
                                <label for="mothername" class="form-label">Mother's Name<font color="red">*</font></label>
                                <input type="text" class="form-control" id="mothername" name="mothername" required/>
                            </div>
                            <div class="col-md-12 form-group">
                                <label for="mothernumber" class="form-label">Mother's Phone Number<font color="red">*</font></label>
                                <input type="text" class="form-control" id="mothernumber" name="mothernumber" required/>
                            </div>
                            <h4>Room Details</h4>
                            <div class="col-md-12 form-group">
                                <label for="roomtype" class="form-label">Room Type<font color="red">*</font></label><br>
                                <input type="radio" id="roomtype" name="roomtype" value="Single Room With Attached Washroom" required/> Single Room With Attached Washroom (1 small bed, 1 small wardrobe, 1 study table) <b>Price: Rs. 6,500</b><br>
                                <input type="radio" id="roomtype" name="roomtype" value="Single Room With Non-Attached Washroom" required/> Single Room With Non-Attached Washroom (1 small bed, 1 small wardrobe, 1 study table) <b>Price: Rs. 5,500</b><br>
                                <input type="radio" id="roomtype" name="roomtype" value="Shared Room" required/> Shared Room (maximum no of roommates: 4 separate beds, 1 attached washroom, 4 small wardrobes, 4 study tables) <b>Price: Rs. 4,500</b><br>
                            </div>
                            <br><b>Note:</b><br>
                            (1) All room are finalized as per first come first serve and room availability.<br>(2) Shared rooms are divided as per gender.
                            <div class="col-md-12">
                                <center>
                                    <button type="reset" class="btn btn-primary">Clear</button>
                                    <button type="submit" class="btn btn-primary"name="submit">Submit</button>
                                </center>
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