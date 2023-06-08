<?php include('./inc/header.php'); ?>
<div class="container-fluid">
 <div class="col-md-12">
 <div class="row">
 <?php
 $server = "localhost";
 $user = "root";
 $password = "";
 $dbname = "myjoho";
 $id=$_SESSION['id'];
 $conn = mysqli_connect($server, $user, $password, $dbname);
 $Record = mysqli_query($conn, 'Select * from uprofile where category="Web 
Developement"');
 while ($row = mysqli_fetch_array($Record)) {
 echo "
 <div class='col-md-6 col-lg-4 mb-3 m-auto'>
 <div class='card container mt-1 border border shadow bg-light' style='width: 
25rem;'>
 <img class='container mt-1 card-img-top' style='height: 20rem width: 20rem;' 
src='$row[img1]'>
 <div class='d-flex'>
 <p class='fs-4'>$row[name1]</p></div>
 <p>$row[category]</p>
 <h6>UserInfo</h6>
 <p>$row[userinfo]</p>
 <div class='d-flex'>
 <a class='btn btn-success mb-2 nx-5'href='$row[link1]'> Instagram</a>
 <a class='btn btn-success mb-2 mx-5'href='$row[link2]'> LinkedIn</a>
 </div>
 </div>
 </div>
 ";
 }
 ?>
 </div>
 </div>
</div>
<?php include('./inc/footer.php'); ?>
