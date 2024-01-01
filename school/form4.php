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
        <form class="form" action="form4.php" method="post">
           <center> <img src="logo.png" width="10%" style="padding-bottom: 2%;"></center>
       <center> <h2 style="padding-bottom: 30px;border-bottom:2px solid blue;">Student Registration Form</h2></center>
       <center><h6 style="padding-bottom: 2%;padding-top: 2%;">Other Helpful Information</h6></center>
       <div class="row">
       <div class="mb-3 col-md-4">
                <label class="form-label">Medical Insurance</label>
                <input type="text" class="form-control" name="insurance" placeholder="Insurance you use">
            </div> <div class="mb-3 col-md-4">
                <label class="form-label">Religion</label>
                <input type="text" class="form-control" name="religion" placeholder="Religion You Belong In" required>
            </div> <div class="mb-3 col-md-4">
                <label class="form-label">Sport</label>
                <input type="text" class="form-control" name="sport" placeholder="Sport you do">
            </div> 
            </div>
            <center><h6 style="padding-bottom: 2%;padding-top: 2%;">
        Write three authorized people(names and relation) to visit or participate in emergency cases for this student</h6></center>
            <div class="row">
       <div class="mb-3 col-md-8">
                <input type="text" class="form-control" name="name1" placeholder="Names" required>
            </div> <div class="mb-3 col-md-4">
                <input type="text" class="form-control" name="relation1" placeholder="Relation" required>
            </div> 
            </div>
            <div class="row">
       <div class="mb-3 col-md-8">
                <input type="text" class="form-control" name="name2" placeholder="Names" required>
            </div> <div class="mb-3 col-md-4">
                <input type="text" class="form-control" name="relation2" placeholder="Relation" required>
            </div> 
            </div>
            <div class="row">
       <div class="mb-3 col-md-8">
                <input type="text" class="form-control" name="name3" placeholder="Names" required>
            </div> <div class="mb-3 col-md-4">
                <input type="text" class="form-control" name="relation3" placeholder="Relation" required>
            </div> 
            </div>

            <button type="submit" class="btn btn-primary" name="submit" style="margin-top:40px;">Finish</button>
            <div class="footer">
        <center><p>Page of 4/4</p></center>
    </div>
        </form>
       
    </div>
    

    <!-- Include Bootstrap JS from CDN (Optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php
if(isset($_POST["submit"])){
    $insurance=$_POST["insurance"];
    $religion=$_POST["religion"];
    $sport=$_POST["sport"];
    $name1=$_POST["name1"];
    $name2=$_POST["name2"];
    $name3=$_POST["name3"];
    $relation1=$_POST["relation1"];
    $relation2=$_POST["relation2"];
    $relation3=$_POST["relation3"];
        $connect=mysqli_connect("localhost","root","","school");
        $sid=$_SESSION["sid"];
    $q=mysqli_query($connect,"insert into information values('','$insurance','$religion','$sport','$sid');");
    $q2=mysqli_query($connect,"insert into vistors values('','$name1','$relation1','$sid'),('','$name2','$relation2','$sid'),('','$name3','$relation3','$sid');");

    if($q2){
        ?><script>window.location.href="back2.php"</script><?php
    }
    else{
        echo "<script>alert('error occured')</script>";
    }
}
?>