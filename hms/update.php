<?php
require 'connection.php';
if(!empty($_SESSION["id"]))
{
  $id = $_SESSION["id"];
  $query_run = mysqli_query($conn, "SELECT * FROM sregistration WHERE id='$id' ");
  $row = mysqli_fetch_assoc($query_run);
}
else
{
  header("Location: sprofile.php");
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
                        <h1 class="display-5 font-weight-bold"><font size="25">Update</font></h1>
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
                        <h1 class="font-weight-bold py-3"><center>Update</center></h1>
                        <br>
                        <form class="row g-3" action="" method="post">
                            <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                            <h4>Details</h4>
                            <div class="col-md-12 form-group">
                                <label for="password" class="form-label">Password<font color="red">*</font></label>
                                <input type="password" class="form-control" id="password" name="password" value="<?php echo $row['password'] ?>" required/>
                            </div>
                            <div class="col-md-12 form-group">
                                <label for="number" class="form-label">Phone Number<font color="red">*</font></label>
                                <input type="text" class="form-control" id="number" name="number" value="<?php echo $row['number'] ?>" required/>
                            </div>
                            <div class="col-md-12 form-group">
                                <label for="address" class="form-label">Address With Pincode<font color="red">*</font></label>
                                <textarea rows="2" cols="20" class="form-control" id="address" name="address" value="<?php echo $row['address'] ?>" required/></textarea>
                            </div>
                            <div class="col-md-12 form-group">
                                <label for="location" class="form-label">Location (Town/City, State)<font color="red">*</font></label>
                                <input type="text" class="form-control" id="location" name="location" value="<?php echo $row['location'] ?>" required/>
                            </div>
                            <h4>Educational Details</h4>
                            <div class="col-md-12 form-group">
                                <label for="collegename" class="form-label">College Name<font color="red">*</font></label>
                                <input type="text" class="form-control" id="collegename" name="collegename" value="<?php echo $row['collegename'] ?>" required/>
                            </div>
                            <div class="col-md-12 form-group">
                                <label for="stream" class="form-label">Stream<font color="red">*</font></label>
                                <input type="text" class="form-control" id="stream" name="stream" value="<?php echo $row['stream'] ?>" required/>
                            </div>
                            <div class="col-md-12 form-group">
                                <label for="yos" class="form-label">Year of Starting From<font color="red">*</font></label>
                                <input type="text" class="form-control" id="yos" name="yos" value="<?php echo $row['yos'] ?>" required/>
                            </div>
                            <div class="col-md-12 form-group">
                                <label for="yop" class="form-label">Year of Passing Out<font color="red">*</font></label>
                                <input type="text" class="form-control" id="yop" name="yop" value="<?php echo $row['yop'] ?>" required/>
                            </div>
                            <h4>Parent Details</h4>
                            <div class="col-md-12 form-group">
                                <label for="fathernumber" class="form-label">Father's Phone Number<font color="red">*</font></label>
                                <input type="text" class="form-control" id="fathernumber" name="fathernumber" value="<?php echo $row['fathernumber'] ?>" required/>
                            </div>
                            <div class="col-md-12 form-group">
                                <label for="mothernumber" class="form-label">Mother's Phone Number<font color="red">*</font></label>
                                <input type="text" class="form-control" id="mothernumber" name="mothernumber" value="<?php echo $row['mothernumber'] ?>" required/>
                            </div>
                            <br><b>Note:</b><br>Correctly fill up all the fields before submit.
                            <div class="col-md-12">
                                <center>
                                    <a href="sprofile.php" class="btn btn-danger">BACK</a>
                                    <button type="submit" name="update" class="btn btn-success">UPDATE</button>
                                </center>
                            </div><br><br>
                        </form>
                        <?php
                            if(isset($_POST['update']))
                            {
                                $password = $_POST['password'];
                                $number = $_POST['number'];
                                $address = $_POST['address'];
                                $location = $_POST['location'];
                                $collegename = $_POST['collegename'];
                                $stream = $_POST['stream'];
                                $yos = $_POST['yos'];
                                $yop = $_POST['yop'];
                                $fathernumber = $_POST['fathernumber'];
                                $mothernumber = $_POST['mothernumber'];
                                $query_run = mysqli_query($conn, "UPDATE sregistration SET password='$password', number='$number', address='$address', location='$location', collegename='$collegename', stream='$stream', yos='$yos', yop='$yop', fathernumber='$fathernumber', mothernumber='$mothernumber' WHERE id='$id' ");
                                if($query_run)
                                {
                                    echo '<script> alert("Data is updated"); </script>';
                                }
                                else
                                {
                                    echo '<script> alert("Data is not updated"); </script>';
                                }
                            }
                        ?>
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