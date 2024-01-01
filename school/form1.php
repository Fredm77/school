<?php
session_start();
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
        .form{
            border-radius: 10px;
            box-shadow: 0 0 30px 0px rgba(57, 86, 247, 0.2);
            padding: 50px;
        }
        .form-control{
            width: 55%;
        }
        .footer{
           margin-bottom: 1%;
        }
        /* label{
            font-weight: bold;
        } */
    </style>
</head>

<body>

    <div class="container mt-6" style="padding-top: 55px;padding-bottom:40px;">
        <form class="form" action="form1.php" method="post">
           <center> <img src="logo.png" width="10%" style="padding-bottom: 2%;"></center>
       <center> <h2 style="padding-bottom: 30px;border-bottom:2px solid blue;">Student Registration Form</h2></center>
       <center><h6 style="padding-bottom: 2%;padding-top: 2%;">Personal Information</h6></center>
            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" class="form-control" name="name" placeholder="Enter your full name" required>
            </div>
            <div class="mb-3">
                <label  class="form-label">Gender</label><br>
                <input type="radio" name="gender" value="M"><span style="padding-right: 5%;padding-left: 0.5%;">Male</span>
                <input type="radio" name="gender" value="F"><span style="padding-left: 0.5%;">Female</span>

            </div>

            <div class="mb-3">
                <label for="text" class="form-label">Date of Birth</label>
                <input type="date" class="form-control" name="dob" required>
            </div>
            <div class="mb-3">
                <label for="text" class="form-label">Nationality</label>
                <input type="text" class="form-control" name="nationality" placeholder="Enter your Nationality" required>
            </div>
            <div class="mb-3">
                <label for="text" class="form-label">Disability</label>
                <input type="text" class="form-control"   name="disability" placeholder="Disability(if any)">
            </div>
            <div class="mb-3">
                <label for="text" class="form-label">E-mail</label>
                <input type="email" class="form-control" name="email" placeholder="E-mail address of student">
            </div>
            <div class="mb-3">
                <label  class="form-label">Official Paper</label><br>
                <input type="radio" name="op" value="Passport"><span style="padding-right: 2%;padding-left: 0.5%;">Passport</span>
                <input type="radio" name="op" value="National ID"><span style="padding-right: 2%;padding-left: 0.5%;">National ID</span>
                <input type="radio" name="op" value="Driving License"><span style="padding-right: 2%;padding-left: 0.5%;">Driving License</span>
                <input type="radio" name="op" value="None"><span style="padding-left: 0.5%;">None</span>
            </div>
            <div class="mb-3">
                <label for="text" class="form-label">Official Paper Number</label>
                <input type="text" class="form-control" name="official_num" placeholder="Official Paper Number">
            </div>
            <button type="submit" class="btn btn-primary" name="submit" style="margin-top:40px;">Next</button>
            <div class="footer">
        <center><p>Page of 1/4</p></center>
    </div>
        </form>
       
    </div>
    

    <!-- Include Bootstrap JS from CDN (Optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php
if(isset($_POST["submit"])){
    $name=$_POST["name"];
    $gender=$_POST["gender"];
    $dob=$_POST["dob"];
    $nationality=$_POST["nationality"];
    $disability=$_POST["disability"];
    $connect=mysqli_connect("localhost","root","","school");
    $q=mysqli_query($connect,"insert into person values('','$name','$gender','$dob','$nationality','$disability');");
    header("Location:form2.php");
   
    if($q){
        $connect=mysqli_connect("localhost","root","","school");
        $q3=mysqli_query($connect,"SELECT * FROM person ORDER BY person.sid DESC;");
    $row=mysqli_fetch_array($q3);
    $id=$row["sid"];
    $_SESSION["sid"]=$row["sid"];
    $sid=$_SESSION["sid"];
    $email=$_POST["email"];
   $op=$_POST["op"];
   $opn=$_POST["official_num"];
   $q4=mysqli_query($connect,"insert into address values('','$email','$op','$opn','$sid');");
   echo "<script>alert('done')</script>";
    }
    else{
        echo "<script>alert('error occured')</script>";
    }
}
?>