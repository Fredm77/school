
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Registration Form</title>
    <!-- Include Bootstrap CSS from CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .hero-btn{
    display: inline-block;
    text-decoration: none;
    color: blue;
    border: 2px solid rgb(98, 135, 236);
    padding: 12px 44px;
    font-size: 14px;
    background: transparent;
    position: relative;
    cursor: pointer;
    border-radius: 25px;
    font-weight: 600;
}
.hero-btn:hover{
    border: 1px solid rgb(67, 67, 247);
    background: blue;
    transition: 1s;
    color: white;
}
    </style>
</head>

<body>

<center> <img src="logo.png" width="20%" style="padding-bottom: 2%;padding-top:5%;"></center>
<center><h3>Welcome To Ecole Des Science BYIMANA <br> Registration Form System</h2></center>
<center style="padding-top: 2%;"><h4>Registered Students:
<?php
 $connect=mysqli_connect("localhost","root","","school");
 $q=mysqli_query($connect,"select count(sid) from person;");
 while($row=mysqli_fetch_array($q)){

?><span style="color:blue"><?php  echo $row['0']; ?></span></h4></center><?php }
?>    

<center><a href="admin1.php" class="hero-btn" style="margin-top: 2%;">Start</a></center>
    <!-- Include Bootstrap JS from CDN (Optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>