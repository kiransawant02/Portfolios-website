<?php include('./inc/header.php');
if (isset($_POST['login'])) {
 include 'config/db.php';
 $uname = $_POST['username'];
 $pass = $_POST['password'];
 $q = " select * from adminuser where name='$uname' && password='$pass'";
 $result = mysqli_query($conn, $q);
 $row = mysqli_fetch_array($result);
 $num = mysqli_num_rows($result);
 $id = $row['id'];
 if ($num == 1) {
 $_SESSION['id'] = $id;
 header('location: Admin/userinfo.php');
 } else {
 header('location: adminlogin.php?IncorrectUsernameOrPassword');
 }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title class="">My JOHO</title>
 <link rel="stylesheet" 
href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css">
 <link rel="stylesheet" href="<?php echo (CSSPATH . "$cssItem"); ?>" type="text/css">
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrapicons@1.5.0/font/bootstrap-icons.css">
</head>
<body>
 <section class="my-5">
 <div class="py-5">
 <h1 class="text-center">My JOHO</h1>
 </div>
 <div class="w-50 m-auto">
 <form action="" method="POST">
 <div class="form-group">
 <label>Username</label>
 <input type="text" name="username" autocomplete="off" class="form-control" 
required>
 </div>
 <div class="form-group">
 <label>Password</label>
 <input type="password" name="password" autocomplete="off" class="formcontrol" required>
 </div>
 <button type="submit" name="login" class="btn btn-success">Login</button>
 </form>
 </div>
 </section>
 <br><br>
 <?php include('./inc/footer.php'); ?>