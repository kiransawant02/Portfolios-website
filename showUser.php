<?php include('./inc/header.php'); ?>
<h1 class="text-center mt-2 nb-1 fw-bold" >Your Profile</h1>
<div>
<div class="bg">
<div class="container">
<div class="row d-flex justify-content-center">
<div class="col-md-10 mt-2 pt-5">
<div class="row z-depth-3">
<?php include('./config/db.php');
$id = $_SESSION['id'];
$query = "SELECT * FROM uprofile where id=$id";
$row=mysqli_query($conn,$query);
$datas=mysqli_fetch_assoc($row);
$q = "SELECT * FROM users where id=$id";
$r=mysqli_query($conn,$q);
$datab=mysqli_fetch_assoc($r);
?>
<div class=" text-light col-sm-6 text-dark">
<p class="font-weight-bold">Username:<?php echo $datab['username']; ?></p>
<h6 class="text-muted"></h6>
</div>
<div class="col-sm-6">
<input type="hidden" name="urname" autocomplete="off" class="form-control" value="<?php 
echo $session?>" readonly="">
</div>
<div class="col-sm-4 bg-light border border-dark border-width:5 rounded-left">
<div class="card-block text-center text-dark">
<h2 class="font-weight-bold mt-4 "></h2>
<img class="border border-dark container" src="<?php echo $datas['img1']; ?>">
<p>Profile Picture </p>
</div>
</div>
<div class="col-sm-8 bg-white rounded-right border shadow">
<h3 class="mt-3 text-center fw-bold text-dark">Information</h3>
<hr class="badge-primary mt-0 w-100">
<div class="row">
<div class="col-sm-6">
<p class="font-weight-bold">Name:<?php echo $datab['name']; ?></p>
<h6 class="text-muted"></h6>
</div>
<div class="col-sm-6">
<p class="font-weight-bold">Email:<?php echo $datab['email']; ?></p>
<h6 class="text-muted"></h6>
</div>
</div>
<h5 class="mt-3">Category</h5>
<hr class="bg-primary">
<div class="row">
<div class="col-sm-6">
<p class="font-weight-bold fs-4"><?php echo $datas['category']; ?></p>
<h6 class="text-muted">
</div>
<h4 class="mt-3">Links related to work</h4>
<hr class="bg-primary">
<div class="row">
<div class="col-sm-6">
<p class="font-weight-bold">Instagram</p>
<a href="<?php echo $datas['link1']; ?>" class="btn btn-secondary">Instagram</a>
</div>
<div class="col-sm-6">
<p class="font-weight-bold">LinkedIN</p>
<a href="<?php echo $datas['link2']; ?>" class="btn btn-secondary">LinkedIN</a>
<a href="services.php" class="btn btn-dark">services</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<br><br>
<?php include('./inc/footer.php'); ?>