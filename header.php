<?php session_start();
define('CSSPATH', './inc/css/'); //define css path
$cssItem = 'style.css'; //css item to display
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-
EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fontawesome/4.7.0/css/font-awesome.min.css">
    <title>MyJoho</title>
</head>

<body class="d-flex flex-column h-100 bg-light">

    <header class="border-bottom">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"></a>
                <img src="../../Final/Images/Party.png" style='width: 5rem; height: 5rem;'>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    datatarget="#navbarSupportedContent" aria-controls="navbarSupportedContent" ariaexpanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto me-2 mb-lg-0 ms-md-auto">
                        <li class="nav-item active">
                            <a class="nav-link active" aria-current="page" href="./homepage.php">Home</a>
                        </li>
                        <li class="nav-itema active">
                            <a class="nav-link" href="about.php">About</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="contact.php">Contact</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="adminlogin.php">Admin</a>
                        </li>
                        <?php if (isset($_SESSION['id'])) : ?>
                        <li class="nav-item active">
                            <a class="nav-link" href="services.php">Services</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="./logout.php">Logout</a>
                        </li>
                        <?php else : ?>
                        <li class="nav-item">
                            <a class="nav-link" href="./login.php">Log IN</a>
                        </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>
    </header>