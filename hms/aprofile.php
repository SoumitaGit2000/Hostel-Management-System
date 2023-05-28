<?php
require 'connection.php';
if(!empty($_SESSION["email"]))
{
  $email = $_SESSION["email"];
  $result = mysqli_query($conn, "SELECT * FROM sregistration");
}
else
{
  header("Location: alogin.php");
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
                    <li class="nav-item"><a class="nav-link" href="aprofile.php"><h5>Dashboard</h5></a></li>
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
                            <p class="m-0 text-uppercase"><h4>Welcome Admin</h4></p>
                        </div>
                        <p class="text-white">A Place for You.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="table-responsive">
        <table class="table table-bordered table-hover" style="background-color: white;">
            <thead class="table-dark">
                <tr>
                    <th><center>Student ID</center></th>
                    <th><center>Name</center></th>
                    <th><center>Email</center></th>
                    <th><center>Phone Number</center></th>
                    <th><center>Address With Pincode</center></th>
                    <th><center>Location (Town/City, State)</center></th>
                    <th><center>Date of Birth</center></th>
                    <th><center>Gender</center></th>
                    <th><center>Aadhar Card Number</center></th>
                    <th><center>Pan Card Number</center></th>
                    <th><center>College Name</center></th>
                    <th><center>Stream</center></th>
                    <th><center>Year of Starting From</center></th>
                    <th><center>Year of Passing Out</center></th>
                    <th><center>Father's Name</center></th>
                    <th><center>Father's Phone Number</center></th>
                    <th><center>Mother's Name</center></th>
                    <th><center>Mother's Phone Number</center></th>
                    <th><center>Room Type</center></th>
                    <th><center>Option</center></th>
                </tr>
            </thead>
            <?php
            if($result)
            {
                while($row = mysqli_fetch_array($result))
                {
            ?>
            <tbody>
                <tr>
                    <td><center><?php echo $row['id']; ?></center></td>
                    <td><center><?php echo $row['firstname']; ?> <?php echo $row['middlename']; ?> <?php echo $row['lastname']; ?></center></td>
                    <td><center><?php echo $row['email']; ?></center></td>
                    <td><center><?php echo $row['number']; ?></center></td>
                    <td><center><?php echo $row['address']; ?></center></td>
                    <td><center><?php echo $row['location']; ?></center></td>
                    <td><center><?php echo $row['dob']; ?></center></td>
                    <td><center><?php echo $row['gender']; ?></center></td>
                    <td><center><?php echo $row['aadharnumber']; ?></center></td>
                    <td><center><?php echo $row['pannumber']; ?></center></td>
                    <td><center><?php echo $row['collegename']; ?></center></td>
                    <td><center><?php echo $row['stream']; ?></center></td>
                    <td><center><?php echo $row['yos']; ?></center></td>
                    <td><center><?php echo $row['yop']; ?></center></td>
                    <td><center><?php echo $row['fathername']; ?></center></td>
                    <td><center><?php echo $row['fathernumber']; ?></center></td>
                    <td><center><?php echo $row['mothername']; ?></center></td>
                    <td><center><?php echo $row['mothernumber']; ?></center></td>
                    <td><center><?php echo $row['roomtype']; ?></center></td>
                    <form action="delete.php" method="post">
                        <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                        <td><center><input type="submit" name="delete" class="btn btn-danger" value="DELETE"></center></td>
                    </form>
                </tr>
            </tbody>
            <?php
                }
            }
            else
            {
                echo '<script> alert("No record is found"); </script>';
            }
            ?>
        </table>
        </div>

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