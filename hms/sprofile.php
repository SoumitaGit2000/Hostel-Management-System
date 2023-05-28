<?php
require 'connection.php';
if(!empty($_SESSION["id"]))
{
  $id = $_SESSION["id"];
  $result = mysqli_query($conn, "SELECT * FROM sregistration WHERE id = $id");
  $row = mysqli_fetch_assoc($result);
}
else
{
  header("Location: slogin.php");
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
                    <li class="nav-item"><a class="nav-link" href="sprofile.php"><h5>Dashboard</h5></a></li>
                    <li class="nav-item"><a class="nav-link" href="logout.php"><h5>Logout</h5></a></li>
                </ul>
            </div>
        </nav>

        <div class="jumbotron big-banner" style="height: 400px; padding-top: 100px;">
            <div class="offset-1">
                <div class ="row align-items-center">
                    <div class="col-8 text-capitalize">
                        <h1 class="display-5 font-weight-bold"><font size="25">Dashboard</font></h1>
                        <hr class="my-4">
                        <div class="d-inline-flex text-white">
                            <p class="m-0 text-uppercase"><h4>Welcome <?php echo $row['firstname']; ?> <?php echo $row['middlename']; ?> <?php echo $row['lastname']; ?></h4></p>
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
                        <form class="row g-3" action="update.php" method="post">
                            <h4>Introduction</h4>
                            <div class="col-md-12 form-group">
                                <label class="form-label">Student ID</label>
                                <input class="form-control" value="<?php echo $row['id'] ?>"/>
                            </div>
                            <div class="col-md-12 form-group">
                                <label class="form-label">First Name</label>
                                <input class="form-control" value="<?php echo $row['firstname'] ?>"/>
                            </div>
                            <div class="col-md-12 form-group">
                                <label class="form-label">Middle Name</label>
                                <input class="form-control" value="<?php echo $row['middlename'] ?>"/>
                            </div>
                            <div class="col-md-12 form-group">
                                <label class="form-label">Last Name</label>
                                <input class="form-control" value="<?php echo $row['lastname'] ?>"/>
                            </div>
                            <h4>Other Details</h4>
                            <div class="col-md-12 form-group">
                                <label class="form-label">Email</label>
                                <input class="form-control" value="<?php echo $row['email'] ?>"/>
                            </div>
                            <div class="col-md-12 form-group">
                                <label class="form-label"><mark style="background-color: yellow;">Password</mark></label>
                                <input class="form-control" value="<?php echo $row['password'] ?>"/>
                            </div>
                            <div class="col-md-12 form-group">
                                <label class="form-label"><mark style="background-color: yellow;">Phone Number</mark></label>
                                <input class="form-control" value="<?php echo $row['number'] ?>"/>
                            </div>
                            <div class="col-md-12 form-group">
                                <label class="form-label"><mark style="background-color: yellow;">Address With Pincode</mark></label>
                                <input class="form-control" value="<?php echo $row['address'] ?>"/>
                            </div>
                            <div class="col-md-12 form-group">
                                <label class="form-label"><mark style="background-color: yellow;">Location (Town/City, State)</mark></label>
                                <input class="form-control" value="<?php echo $row['location'] ?>"/>
                            </div>
                            <div class="col-md-12 form-group">
                                <label class="form-label">Date of Birth</label>
                                <input class="form-control" value="<?php echo $row['dob'] ?>"/>
                            </div>
                            <div class="col-md-12 form-group">
                                <label class="form-label">Gender</label>
                                <input class="form-control" value="<?php echo $row['gender'] ?>"/>
                            </div>
                            <h4>Identity Proof</h4>
                            <div class="col-md-12 form-group">
                                <label class="form-label">Aadhar Card Number</label>
                                <input class="form-control" value="<?php echo $row['aadharnumber'] ?>"/>
                            </div>
                            <div class="col-md-12 form-group">
                                <label class="form-label">Pan Card Number</label>
                                <input class="form-control" value="<?php echo $row['pannumber'] ?>"/>
                            </div>
                            <h4>Educational Details</h4>
                            <div class="col-md-12 form-group">
                                <label class="form-label"><mark style="background-color: yellow;">College Name</mark></label>
                                <input class="form-control" value="<?php echo $row['collegename'] ?>"/>
                            </div>
                            <div class="col-md-12 form-group">
                                <label class="form-label"><mark style="background-color: yellow;">Stream</mark></label>
                                <input class="form-control" value="<?php echo $row['stream'] ?>"/>
                            </div>
                            <div class="col-md-12 form-group">
                                <label class="form-label"><mark style="background-color: yellow;">Year of Starting From</mark></label>
                                <input class="form-control" value="<?php echo $row['yos'] ?>"/>
                            </div>
                            <div class="col-md-12 form-group">
                                <label class="form-label"><mark style="background-color: yellow;">Year of Passing Out</mark></label>
                                <input class="form-control" value="<?php echo $row['yop'] ?>"/>
                            </div>
                            <h4>Parent Details</h4>
                            <div class="col-md-12 form-group">
                                <label class="form-label">Father's Name</label>
                                <input class="form-control" value="<?php echo $row['fathername'] ?>"/>
                            </div>
                            <div class="col-md-12 form-group">
                                <label class="form-label"><mark style="background-color: yellow;">Father's Phone Number</mark></label>
                                <input class="form-control" value="<?php echo $row['fathernumber'] ?>"/>
                            </div>
                            <div class="col-md-12 form-group">
                                <label class="form-label">Mother's Name</label>
                                <input class="form-control" value="<?php echo $row['mothername'] ?>"/>
                            </div>
                            <div class="col-md-12 form-group">
                                <label class="form-label"><mark style="background-color: yellow;">Mother's Phone Number</mark></label>
                                <input class="form-control" value="<?php echo $row['mothernumber'] ?>"/>
                            </div>
                            <h4>Room Details</h4>
                            <div class="col-md-12 form-group">
                                <label class="form-label">Room Type</label><br>
                                <input class="form-control" value="<?php echo $row['roomtype'] ?>"/>
                            </div>
                            <br><b>Note:</b><br>Only highlighted fields are able to edit. 
                            <div class="col-md-12">
                                <center>
                                    <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                                    <input type="submit" name="edit" class="btn btn-success" value="EDIT">
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