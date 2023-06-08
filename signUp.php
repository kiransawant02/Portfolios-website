<?php include('./inc/header.php'); ?>
<?php include('./config/db.php') ?>
<?php error_reporting(0); ?>
<?php
include("config/db.php");
if (isset($_POST['register'])) {
 $name = $_POST['name'];
 $username = $_POST['username'];
 $email = $_POST['email'];
 $password = $_POST['password'];
 $q = " select * from users where username='$username'";
 $result = mysqli_query($conn, $q);
 $num = mysqli_num_rows($result);
 if ($num == 1) {
 header('location: signup.php?error:UsernameExists');
 } else {
 if ($name != '' && $username != '' && $email != '' && $password != '') {
 // echo "Success";
 $pwd_hash = md5($password);
 $sql = "INSERT INTO users (name,username,email,password) VALUES ('$name', 
'$username', '$email', '$pwd_hash')";
 $query = $conn->query($sql);
 if ($query) {
 header('Location:login.php');
 }
 }
 }
}
?>
<?php
define('CSSPATH', './inc/css/'); //define css path
$cssItem = 'style.css'; //css item to display
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>MYJOJO</title>
 <link rel="stylesheet" 
href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css">
 <link rel="stylesheet" href="<?php echo (CSSPATH . "$cssItem"); ?>" type="text/css">
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrapicons@1.5.0/font/bootstrap-icons.css">
</head>
<body>
 <main class="content mt-3">
 <section>
 <div class="container">
 <div class="row">
 <div class="col-md-10 col-lg-8 col-xl-6 mx-auto">
 <div class="bg-primary-soft p-4 p-sm-5 border border- shadow mt-3">
 <div class="text-center mb-4">
 <h2 class="login_title text-dark"> MyJoho</h2>
 </div>
 <h5 class="text-center mb-3 fw-normal text-dark"> Create your account
 </h5>
 <!-- Form START -->
 <form class="mt-2" action="signup.php" method="POST" onsubmit="return 
mysignin()">
 <!-- Form START -->
 <div class="mb-3">
 <label class="form-label text-dark" for="exampleInputEmail1">Full 
Name</label>
 <input type="text" name="name" id="name1" class="form-control" 
aria-describedby="nameHelp" placeholder="Full name">
 <span id="namesign" class="text-danger font-wright-bold"></span>
 </div>
 <!-- Username -->
 <div class="mb-3">
 <label class="form-label text-dark" 
for="exampleInputEmail1">Username</label>
 <input type="text" name="username" id="uname" class="form-control" 
aria-describedby="UsernameHelp" placeholder="Username">
 <span id="unamesign" class="text-danger font-wright-bold"></span>
 </div>
 <!-- Email -->
 <div class="mb-3">
 <label class="form-label text-dark" for="exampleInputEmail1">Email 
address</label>
 <input type="email" name="email" id="email" class="form-control" 
id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="E-mail">
 <small id="emailHelp" class="form-text text-dark">We'll never share 
your email with anyone else.</small>
 <span id="emailsign" class="text-danger font-wright-bold"></span>
 </div>
 <!-- Password -->
 <div class="mb-3">
 <label class="form-label text-dark" 
for="exampleInputPassword1">Password</label>
 <input type="password" name="password" id="password" class="formcontrol" id="exampleInputPassword1" placeholder="*********">
 <span id="passwordsign" class="text-danger font-wright-bold"></span>
 </div>
 <!-- Button -->
 <div class="row align-items-center">
 <div class="col-sm-4">
 <input type="submit" name="register" class="btn btn-success" 
value="Sign me up">
 </div>
 <div class="col-sm-8 text-sm-end mt-3 ">
 <span>Have an account? <a href="./login.php" class="link-primary 
text-dark"><u>Sign in</u></a></span>
 </div>
 </div>
 </form>
 </div>
 </div>
 </div>
 </section>
 </main>