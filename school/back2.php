<?php
session_start();
$sid=$_SESSION["sid"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Registration Form</title>
    <!-- Include Bootstrap CSS from CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    </style>
</head>
<html>
<body>

<center> <img src="logo.png" width="20%" style="padding-bottom: 2%;padding-top:5%;"></center>

<?php
 $connect=mysqli_connect("localhost","root","","school");
 $q=mysqli_query($connect,"select * from person where sid=$sid;");
 while($row=mysqli_fetch_array($q)){
?>
<center><h3>Thank you <?php echo $row["names"]; ?> For Registering <br>You have been Successfully registered at Ecole Des Science BYIMANA</h3></center>

<center style="padding-top: 3%;"><h4>Your ID is <span style="color: blue;"><?php echo $row["sid"]; ?></span><br> Keep it in mind you will be asked when you reach at school</h4></center><?php }?>
    <!-- Include Bootstrap JS from CDN (Optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>