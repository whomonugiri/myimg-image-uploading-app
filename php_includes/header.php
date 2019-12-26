<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>MYIMG - <?php echo isset($_SESSION['login_id'])?"Welcome ".$_SESSION['login_fname']:"Upload & Manage Your Images"; ?></title>
    <link rel="icon" href="imgs/icon.png" type="image/png">
    <link rel="stylesheet" href="css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Quicksand|Courier+Prime|Oswald&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/286824e84e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
</head>
<body>
<main class="main">
<!--   this is header-->
    <header class="header">
        <nav class="left-side-menu"><ul><a href="about_us.php"><li class="li"><i class="fas fa-question-circle"></i> About Us</li></a></ul></li></ul></nav>
        <div class="site-logo"><a href="index.php"><img src="imgs/logo.png" alt="logo" class="logo-img"></a></div>
    <nav class="right-side-menu"><ul>
    <?php if($isUserLoggedIn): ?>
    <a href="update_profile.php"><li class="li"><i class="fas fa-user-circle"></i> <?php echo $_SESSION['login_fname']; ?></li></a><a href="./image_gallery.php"><li class="li"><i class="fas fa-images"></i> My Images</li></a><a href="./php_includes/logout.php"><li class="spcl-btn"><i class="fas fa-sign-out-alt"></i> Logout</li></a>
    <?php endif; ?>
    <?php if(!$isUserLoggedIn): ?>
     <li class="li" id="signin">Sign in</li><a href="./create_new_account.php"><li class="spcl-btn"><i class="fas fa-user-alt"></i> Create Account</li></a>
    <?php endif; ?>
   
    
    </ul></nav>
    </header>