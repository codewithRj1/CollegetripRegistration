<?php
$server= "localhost";
$username = "root";
$password = "";
$dbname = "Projects2";
$con = mysqli_connect($server, $username, $password, $dbname);

$Full_name =$_REQUEST['Full_name'];
$email = $_REQUEST['email'];
$age =$_REQUEST['age'];
$number = $_REQUEST['Number'];
$description= $_REQUEST['description'];

$sql= "INSERT INTO `student_details` (`ID`, `Full Name`, `Email`, `Age`, `Number`, `Description`, `Date`)
 VALUES (NULL, '$Full_name', '$email', '$age', '$number', '$description', current_timestamp())";

if(mysqli_query($con, $sql)){
    // echo "<h3>data stored in a database successfully."
    //     . " Please browse your localhost php my admin"
    //     . " to view the updated data</h3>";

    // echo nl2br("\n$first_name\n $last_name\n "
    //     . "$gender\n $address\n $email");
} else{
    echo "ERROR: Hush! Sorry $sql. "
        . mysqli_error($con);
}
 
// Close connection
mysqli_close($con);







?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>College trip</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link rel="stylesheet" href="index.css">
  </head>

  <body>
    <div class="container-fluid pt-5">
      <h2>S S College of Engineering <p>Fill Your Details</p></h2>

      
    
    </div>
    <div class="form">
      <form action="Index.php" method="post">
        <div>
<input type="text" name="Full_name" id="Full_name" placeholder=" Enter your Full Name"></div>
<div><input type="email" name="email" id="email" placeholder="Enter Your Email"></div>
<div><input type="text" name="age" id="age" placeholder="Enter Your Age"></div>
<div><input type="text" name="Number" id="Number" placeholder="Enter your Mobile Numer"></div>
<div><textarea name="description" id="description" cols="10" rows="10" placeholder="Enter Your Descriptions"></textarea></div>
<button type="submit" class="btn1">Submit</button>
<button type="reset" class="btn2">Reset</button>

      </form>

    </div>
        <!-- Include Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>