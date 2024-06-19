<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title><?php if (!isset($page_title)){ echo ('SecureBallot - Secure E-Voting Solution.'); }else {  echo ($page_title); }?></title>

    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
    <link rel="canonical" href="index.html" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?php if (!isset($page_title)) {
                                            echo ('SecureBallot - Secure E-Voting Solution.');
                                        } else {
                                            echo ($page_title);
                                        } ?>" />
    <meta property="og:url" content="index.html" />
    <meta property="og:site_name" content="SecureBallot" />
    <meta property="og:description" content="<?php if (!isset($page_title)) {
                                            echo ('SecureBallot - Secure E-Voting Solution.');
                                        } else {
                                            echo ($page_title);
                                        } ?>" />
    <meta property="og:image" content="assets/images/media/2021/01/logo-234.jpg" />
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/fav.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/fav.png">
    

    <!-- ===========Main Css Link==================== -->

    <link rel="stylesheet" href="assets/css/style.css">


    <!-- ===============Favicon=============== -->

    <link rel="icon" type="image/x-icon" href="assets/images/fav.png">

    <!-- =======boxicon============= -->

    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css" />

    <!-- ==========fontawesome Link=========== -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
        
        <script src="assets/js/verify.js" defer></script>
</head>

<body>
    <header id="header">
        <a href="" class="main-logo">
            <img src="assets/images/logo.png">
        </a>

        <ul class="navlist">
            <li><a href="index.php" class="nav_links">Home</a></li>

            <li><a href="works.php" class="nav_links">How It Works</a></li>

            <li><a href="about.php" class="nav_links">About Us</a></li>

            <li><a href="contact.php" class="nav_links">Contact Us</a></li>
        </ul>

        <div class="header-menu">
            <a href="login.php" class="header-btn">Login</a>
            <div class="bx bx-menu" id="menu-icon"></div>
        </div>
    </header>