<?php include('./inc/header.php'); ?>
<?php error_reporting(0); ?>
<?php
include('./config/db.php');
if (isset($_POST['submitc'])) {
 $cname = $_POST['cname'];
 $cemail = $_POST['cemail'];
 $contactus = $_POST['contactus'];
 // echo "Success";
 $sql = "INSERT INTO `contact`(`cname`, `cemail`, `contactus`) VALUES 
('$cname','$cemail','$contactus')";
 $result = mysqli_query($conn, $sql) or die('Error');
 header('Location:contact.php');
}
?>
<?php if ($_SESSION['cname']) : ?>
MyJOHO
48
MCC, Department of Computer Science, 2021-22
 <?php header('Location:contact.php') ?>
<?php else : ?>
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
 <h5 class="text-center mb-3 fw-normal text-dark"> Contact Us
 </h5>
 <!-- Form START -->
 <form class="mt-2" action="contact.php" method="post">
 <div class="mb-3">
 <label for="exampleInputEmail1" class="form-label text-dark">Name</label>
 <input type="text" name="cname" class="form-control" 
id="exampleInputEmail1" aria-describedby="emailHelp">
 </div>
 <div class="mb-3">
 <label for="exampleInputEmail1" class="form-label text-dark">Email 
address</label>
 <input type="email" name="cemail" class="form-control" 
id="exampleInputEmail1" aria-describedby="emailHelp">
 </div>
 <div class="mb-4">
 <label for="exampleInputEmail1" class="form-label text-dark">Contact 
Us</label>
 <textarea type="text" name="contactus" class="form-control" 
id="exampleInputEmail1" aria-describedby="emailHelp">
 </textarea>
 </div>
 <div class="text-center">
 <button type="submit" name="submitc" class="btn btn-primary textdark">Submit</button>
 </div>
 </div>
 </form>
 </div>
 </div>
 </div>
 </section>
 </main>
 <br><br>
 <?php include('./inc/footer.php'); ?>
 <?php endif; ?>