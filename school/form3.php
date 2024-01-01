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
        .form{
            border-radius: 10px;
            box-shadow: 0 0 30px 0px rgba(57, 86, 247, 0.2);
            padding: 50px;
        }
        .form-control{
            width: 90%;
        }
        .footer{
           margin-bottom: 1%;
        }
    </style>
</head>

<body>

    <div class="container mt-6" style="padding-top: 55px;padding-bottom:40px;">
        <form class="form" action="form3.php" method="post">
           <center> <img src="logo.png" width="10%" style="padding-bottom: 2%;"></center>
       <center> <h2 style="padding-bottom: 30px;border-bottom:2px solid blue;">Student Registration Form</h2></center>
       <center><h6 style="padding-bottom: 2%;padding-top: 2%;">Details Residence</h6></center>
       <div class="row">
       <div class="mb-3 col-md-4">
                <label class="form-label">District</label>
                <input type="text" class="form-control" name="rdistrict" placeholder="Enter your District of Residence" required>
            </div> <div class="mb-3 col-md-4">
                <label class="form-label">Sector</label>
                <input type="text" class="form-control" name="rsector" placeholder="Enter your Sector of Residence" required>
            </div> 
            <div class="mb-3 col-md-4">
                <label class="form-label">Cell</label>
                <input type="text" class="form-control" name="rcell" placeholder="Enter your Cell Residence" required>
            </div>
            </div>
            <div class="row">
            <div class="mb-3 col-md-4">
                <label class="form-label">Village</label>
                <input type="text" class="form-control" name="rvillage" placeholder="Enter your Village Residence" required>
            </div> 
            <div class="mb-3 col-md-4">
                <label class="form-label">Sponsorship Type</label>
                <input type="text" class="form-control" name="sponsor" placeholder="Government,self or other">
            </div>      
            </div>
            <center><h6 style="padding-bottom: 2%;padding-top: 2%;">Previous school attended information</h6></center>
            <div class="row">
       <div class="mb-3 col-md-4">
                <label class="form-label">District</label>
                <input type="text" class="form-control" name="pdistrict" placeholder="Previous School District" required>
            </div> <div class="mb-3 col-md-4">
                <label class="form-label">Sector</label>
                <input type="text" class="form-control" name="psector" placeholder="Previous School Sector" required>
            </div> <div class="mb-3 col-md-4">
                <label class="form-label">School Name</label>
                <input type="text" class="form-control" name="pname" placeholder="Previous School Name" required>
            </div> 
            </div>
            <div class="row">
       <div class="mb-3 col-md-4">
                <label class="form-label">Class</label>
                <input type="text" class="form-control" name="pclass" placeholder="Your Previous Class" required>
            </div> <div class="mb-3 col-md-4">
                <label class="form-label">Academic Year</label>
                <input type="text" class="form-control" name="ay" placeholder="Previous Acafemic Year" required>
            </div> <div class="mb-3 col-md-4">
                <label class="form-label">National Examination Aggregates</label>
                <input type="text" class="form-control" name="agg" required>
            </div> 
            </div>

            <button type="submit" class="btn btn-primary" name="submit" style="margin-top:40px;">Next</button>
            <div class="footer">
        <center><p>Page of 3/4</p></center>
    </div>
        </form>
       
    </div>
    

    <!-- Include Bootstrap JS from CDN (Optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php
if(isset($_POST["submit"])){
    $rdistrict=$_POST["rdistrict"];
    $rsector=$_POST["rsector"];
    $rcell=$_POST["rcell"];
    $rvillage=$_POST["rvillage"];
    $sponsor=$_POST["sponsor"];
        $connect=mysqli_connect("localhost","root","","school");
        $sid=$_SESSION["sid"];
    $q=mysqli_query($connect,"insert into residence values('','$rdistrict','$rsector','$rcell','$rvillage','$sid');");

    //previous school

    $pdistrict=$_POST["pdistrict"];
    $psector=$_POST["psector"];
    $pname=$_POST["pname"];
    $pclass=$_POST["pclass"];
    $ay=$_POST["ay"];
    $agg=$_POST["agg"];
    $q2=mysqli_query($connect,"insert into prev_school values('','$pdistrict','$psector','$pname','$pclass','$ay','$agg','$sid');");
    $q3=mysqli_query($connect,"insert into sponsorship values('','$sponsor','$sid');");
    ?>
    <script>window.location.href = "form4.php";</script>
    <?php 
    if($q && $q2 && $q3){
        echo "<script>alert('saved successfully')</script>";
    }
    else{
        echo "<script>alert('error occured')</script>";
    }
}
?>