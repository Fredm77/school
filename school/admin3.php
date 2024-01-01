<?php
session_start();
@$sid=$_SESSION["sid"];
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
        .login{
        color: white;
        background-color: #2691d9;
        background-size: 200px;
        border-radius: 10px;
        border: none;
        padding: 2px 3%;
        width: 27%;
        font-size: 24px;
        margin: 10px -5px;
    }
    </style>
</head>

<body>
<?php
                           $connect=mysqli_connect("localhost","root","","school");
                           $q=mysqli_query($connect,"SELECT person.names,person.gender,address.email,person.dob,person.nationality,address.official,address.official_num,person.disability 
                           FROM person,address WHERE person.sid=address.sid and person.sid=$sid;");
                            if($q){

                            }
                            else{
                                echo "<script>alert('Your ID is not correct')</script>";
                               ?> <script>window.location.href = "admin2.php";</script><?php
                            }
                           while($data=mysqli_fetch_array($q))
                           {
                          
                          ?>
                             <center><h4 style="padding-top: 2%;"> Welcome to the details of <?php echo $data['names']?></h4></center>
                          <?php } ?>
                          <center><h6 style="padding-top: 2%;">Person Information</h6></center>
    
  <center>

  <table class="table table-striped " style="width: 80%;margin-top:2%;"> 
    <tr>
    <th>Names</th>
      <th>Gender</th>
      <th>Email</th>
      <th>Date Of Birth</th>
      <th>Nationality</th>
      <th>Official Paper</th>
      <th>Official Paper Number</th>
      <th>Disability</th>
    </tr>
    <tr>
    <?php
                           $connect=mysqli_connect("localhost","root","","school");
                           $q=mysqli_query($connect,"SELECT person.names,person.gender,address.email,person.dob,person.nationality,address.official,address.official_num,person.disability 
                           FROM person,address WHERE person.sid=address.sid and person.sid=$sid;");
                           while($data=mysqli_fetch_array($q))
                           {
                          
                          ?>
                            <tr>
                            <td><?php echo $data['names']?></td>
                            <td><?php echo $data['gender']?></td>
                            <td><?php echo $data['email']?></td>
                            <td><?php echo $data['dob']?></td>
                            <td><?php echo $data['nationality']?></td>
                            <td><?php echo $data['official']?></td>
                            <td><?php echo $data['official_num']?></td>
                            <td><?php echo $data['disability']?></td>
                          
                        </tr>
                          <?php } ?>
    </tr>
    </table>
  </center>
  <center><h6 style="padding-top: 2%;">Parenthood</h6></center>
  <center>
  <table class="table table-striped " style="width: 80%;margin-top:2%;"> 
    <tr>
    <th></th>
      <th>Name</th>
      <th>ID</th>
      <th>Telephone</th>
    </tr>
    <tr>
    <?php
                           $connect=mysqli_connect("localhost","root","","school");
                           $q=mysqli_query($connect,"SELECT fname,fnid,ftel from fathers WHERE sid=$sid;");
                           while($data=mysqli_fetch_array($q))
                           {
                          
                          ?>
                            <tr>
                            <b><td style="font-weight: bold;">Father</td></b>
                            <td><?php echo $data['fname']?></td>
                            <td><?php echo $data['fnid']?></td>
                            <td><?php echo $data['ftel']?></td>
                        </tr>
                          <?php } ?>
    </tr>
    <tr>
    <?php
                           $connect=mysqli_connect("localhost","root","","school");
                           $q2=mysqli_query($connect,"SELECT mname,mnid,mtel FROM mothers WHERE sid=$sid;");
                           while($data=mysqli_fetch_array($q2))
                           {
                          
                          ?>
                            <tr>
                            <b><td  style="font-weight: bold;">Mother</td></b>
                            <td><?php echo $data['mname']?></td>
                            <td><?php echo $data['mnid']?></td>
                            <td><?php echo $data['mtel']?></td>
                        </tr>
                          <?php } ?>
    </tr>
    <tr>
    <?php
                           $connect=mysqli_connect("localhost","root","","school");
                           $q=mysqli_query($connect,"SELECT gname,gnid,gtel FROM guardian WHERE sid=$sid;");
                           while($data=mysqli_fetch_array($q))
                           {
                          
                          ?>
                            <tr>
                            <b><td  style="font-weight: bold;">Guardian</td></b>
                            <td><?php echo $data['gname']?></td>
                            <td><?php echo $data['gnid']?></td>
                            <td><?php echo $data['gtel']?></td>
                        </tr>
                          <?php } ?>
    </tr>
    </table>
  </center>
  <center><h6 style="padding-top: 2%;">Details Of Birth</h6></center>
  <center>
  <table class="table table-striped " style="width: 80%;margin-top:2%;"> 
    <tr>
    <th>Province</th>
      <th>District</th>
      <th>Sector</th>
      <th>Cell</th>
      <th>Village</th>
    </tr>
    <tr>
    <?php
                           $connect=mysqli_connect("localhost","root","","school");
                           $q=mysqli_query($connect,"select * from dob where sid=$sid;");
                           while($data=mysqli_fetch_array($q))
                           {
                          
                          ?>
                            <tr>
                            <td><?php echo $data['province']?></td>
                            <td><?php echo $data['district']?></td>
                            <td><?php echo $data['sector']?></td>
                            <td><?php echo $data['cell']?></td>
                            <td><?php echo $data['village']?></td>
                          
                        </tr>
                          <?php } ?>
    </tr>
    </table>
  </center>
  <center><h6 style="padding-top: 2%;">Details Of Residence and other information</h6></center>
  <center>
  <table class="table table-striped " style="width: 80%;margin-top:2%;"> 
    <tr>
      <th>District</th>
      <th>Sector</th>
      <th>Cell</th>
      <th>Village</th>
      <th>Insurance</th>
      <th>Religion</th>
      <th>Sport</th>
    </tr>
    <tr>
    <?php
                           $connect=mysqli_connect("localhost","root","","school");
                           $q=mysqli_query($connect,"SELECT residence.district,residence.sector,residence.cell,residence.village,information.insurance,information.religion,information.sport 
                           FROM
                            residence,information WHERE residence.sid=information.sid	 AND residence.sid=$sid;");
                           while($data=mysqli_fetch_array($q))
                           {
                          
                          ?>
                            <tr>
                            <td><?php echo $data['district']?></td>
                            <td><?php echo $data['sector']?></td>
                            <td><?php echo $data['cell']?></td>
                            <td><?php echo $data['village']?></td>
                            <td><?php echo $data['insurance']?></td>
                            <td><?php echo $data['religion']?></td>
                            <td><?php echo $data['sport']?></td>
                        </tr>
                          <?php } ?>
    </tr>
    </table>
  </center>
  <center><h6 style="padding-top: 2%;">Previous School and Sponsorship</h6></center>
  <center>
  <table class="table table-striped " style="width: 80%;margin-top:2%;"> 
    <tr>
      <th>District</th>
      <th>Sector</th>
      <th>School Name</th>
      <th>Class</th>
      <th>Ac Year</th>
      <th>Aggregates</th>
      <th>Sponsorship</th>
    </tr>
    <tr>
    <?php
                           $connect=mysqli_connect("localhost","root","","school");
                           $q=mysqli_query($connect,"SELECT prev_school.district,prev_school.sector,prev_school.schoolName,prev_school.class,prev_school.aYear,prev_school.agg,sponsorship.stype 
                           FROM prev_school,sponsorship WHERE prev_school.sid=sponsorship.sid AND prev_school.sid=$sid;");
                           while($data=mysqli_fetch_array($q))
                           {
                          
                          ?>
                            <tr>
                            <td><?php echo $data['district']?></td>
                            <td><?php echo $data['sector']?></td>
                            <td><?php echo $data['schoolName']?></td>
                            <td><?php echo $data['class']?></td>
                            <td><?php echo $data['aYear']?></td>
                            <td><?php echo $data['agg']?></td>
                            <td><?php echo $data['stype']?></td>
                          
                        </tr>
                          <?php } ?>
    </tr>
    </table>
  </center>
  <center><h6 style="padding-top: 2%;">Visitors</h6></center>
  <center>
  <table class="table table-striped " style="width: 80%;margin-top:2%;"> 
    <tr>
    <th>Names</th>
      <th style="width: 20%;">Relation</th>
    </tr>
    <tr>
    <?php
                           $connect=mysqli_connect("localhost","root","","school");
                           $q=mysqli_query($connect,"SELECT names,relation FROM vistors WHERE sid=$sid;");
                           while($data=mysqli_fetch_array($q))
                           {
                          
                          ?>
                            <tr>
                            <td><?php echo $data['names']?></td>
                            <td><?php echo $data['relation']?></td>
                        </tr>
                          <?php } ?>
    </tr>
    </table>
  </center>
<br><br>
<div class="row">

<form action="admin3.php" method="post">
<center><input type="submit" value="Home" name="home" class="login"></center>
<center><input type="submit" value="Delete the Student" name="login" class="login"></center>
</form>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php
if(isset($_POST["login"])){
    $connect=mysqli_connect("localhost","root","","school"); 
    $q=mysqli_query($connect,"delete from person where sid=$sid");
    $q2=mysqli_query($connect,"delete from dob where sid=$sid");
    $q3=mysqli_query($connect,"delete from address where sid=$sid");
    $q4=mysqli_query($connect,"delete from information where sid=$sid");
    $q5=mysqli_query($connect,"delete from fathers where sid=$sid");
    $q6=mysqli_query($connect,"delete from mothers where sid=$sid");
    $q7=mysqli_query($connect,"delete from guardian where sid=$sid");
    $q8=mysqli_query($connect,"delete from prev_school where sid=$sid");
    $q9=mysqli_query($connect,"delete from residence where sid=$sid");
    $q10=mysqli_query($connect,"delete from sponsorship where sid=$sid");
    $q11=mysqli_query($connect,"delete from vistors where sid=$sid");

    if($q && $q2 && $q3 && $q4 && $q5 && $q6 && $q7 && $q8 && $q9 &&$q10 && $q11){
        echo "<script>alert('Student Deleted Successfully')</script>";
        ?><script>window.location.href="back.php";</script><?php
    }
    else{
        echo "<script>alert('error occured')</script>";
    }
}
if(isset($_POST["home"])){
 ?><script>window.location.href="back.php";</script><?php
}
?>