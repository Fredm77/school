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
        <form class="form" action="form2.php" method="post">
           <center> <img src="logo.png" width="10%" style="padding-bottom: 2%;"></center>
       <center> <h2 style="padding-bottom: 30px;border-bottom:2px solid blue;">Student Registration Form</h2></center>
       <center><h6 style="padding-bottom: 2%;padding-top: 2%;">Details of Birth</h6></center>
       <div class="row">
       <div class="mb-3 col-md-4">
                <label class="form-label">Province</label>
                <input type="text" class="form-control" name="bprovince" placeholder="Enter your Province of Birth" required>
            </div> <div class="mb-3 col-md-4">
                <label class="form-label">District</label>
                <input type="text" class="form-control" name="bdistrict" placeholder="Enter your District of Birth" required>
            </div> <div class="mb-3 col-md-4">
                <label class="form-label">Sector</label>
                <input type="text" class="form-control" name="bsector" placeholder="Enter your Sector of Birth" required>
            </div> 
            </div>
            <div class="row">
            <div class="mb-3 col-md-4">
                <label class="form-label">Cell</label>
                <input type="text" class="form-control" name="bcell" placeholder="Enter your Cell of Birth" required>
            </div> <div class="mb-3 col-md-4">
                <label class="form-label">Village</label>
                <input type="text" class="form-control" name="bvillage" placeholder="Enter your Village of Birth" required>
            </div>    
            </div>
            <center><h6 style="padding-bottom: 2%;padding-top: 2%;">Parenthood(fill where appropriate)</h6></center>
            <div class="row">
       <div class="mb-3 col-md-4">
                <label class="form-label">Father's Name</label>
                <input type="text" class="form-control" name="fname" placeholder="Enter your Father's Name">
            </div> <div class="mb-3 col-md-4">
                <label class="form-label">ID</label>
                <input type="text" class="form-control" name="fid" placeholder="Father's ID">
            </div> <div class="mb-3 col-md-4">
                <label class="form-label">Telephone</label>
                <input type="text" class="form-control" name="ftel" placeholder="+2507.......">
            </div> 
            </div>
            <div class="row">
       <div class="mb-3 col-md-4">
                <label class="form-label">Mother's Name</label>
                <input type="text" class="form-control" name="mname" placeholder="Enter your Mother's Name">
            </div> <div class="mb-3 col-md-4">
                <label class="form-label">ID</label>
                <input type="text" class="form-control" name="mid" placeholder="Mother's ID">
            </div> <div class="mb-3 col-md-4">
                <label class="form-label">Telephone</label>
                <input type="text" class="form-control" name="mtel" placeholder="+2507.......">
            </div> 
            </div>
            <div class="row">
       <div class="mb-3 col-md-4">
                <label class="form-label">Guardian's Name</label>
                <input type="text" class="form-control" name="gname" placeholder="Guardian's Name">
            </div> <div class="mb-3 col-md-4">
                <label class="form-label">ID</label>
                <input type="text" class="form-control" name="gid" placeholder="Guardian's ID">
            </div> <div class="mb-3 col-md-4">
                <label class="form-label">Telephone</label>
                <input type="text" class="form-control" name="gtel" placeholder="+2507.......">
            </div> 
            </div>
            <button type="submit" class="btn btn-primary" name="submit" style="margin-top:40px;">Next</button>
            <div class="footer">
        <center><p>Page of 2/4</p></center>
    </div>
        </form>
       
    </div>
    

    <!-- Include Bootstrap JS from CDN (Optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php
if(isset($_POST["submit"])){
    $bprovince=$_POST["bprovince"];
    $bdistrict=$_POST["bdistrict"];
    $bsector=$_POST["bsector"];
    $bcell=$_POST["bcell"];
    $bvillage=$_POST["bvillage"];
        $connect=mysqli_connect("localhost","root","","school");
        $sid=$_SESSION["sid"];
    $q=mysqli_query($connect,"insert into dob values('','$bprovince','$bdistrict','$bsector','$bcell','$bvillage','$sid');");
    ?>
      <script>window.location.href = "form3.php";</script><?php
    //Fathers detail
    if(isset($_POST["fname"])){
        $fname=$_POST["fname"];
    $fid=$_POST["fid"];
    $ftel=$_POST["ftel"];
    $q2=mysqli_query($connect,"insert into fathers values('','$fname','$fid','$ftel','$sid');");
    }

    //Mothers Detail
    if(isset($_POST["mname"])){
        $mname=$_POST["mname"];
        $mid=$_POST["mid"];
        $mtel=$_POST["mtel"];
        $q3=mysqli_query($connect,"insert into mothers values('','$mname','$mid','$mtel','$sid');");
    }

    //guardian detail

    if(isset($_POST["gname"])){
        $gname=$_POST["gname"];
    $gid=$_POST["gid"];
    $gtel=$_POST["gtel"];
    $q4=mysqli_query($connect,"insert into guardian values('','$gname','$gid','$gtel','$sid');");
    }
    if($q || $q2 || $q3 || $q4){
        echo "<script>alert('saved successfully')</script>";
    }
    else{
        echo "<script>alert('error occured')</script>";
    }
}
?>