<!-- marcia-tobias student number 2985044. -->
<!-- lucas-vigarinho student number 2989295. -->

<?php
// allow to store variables to be used in all page.
session_start();

//Print the email for the user, after log ing.
if(!$_SESSION['email'])
?>

<!-- Is an instruction to the browser about what version of html the page is written in
That declaration must be the very first thing in your HTML document, even before the HTML tag. -->
<!DOCTYPE html>
<!-- That tag specifies the language code english. -->
<html lang="en">
<!-- That element is a container for a metadata. -->
<head>
    <!-- Define a title for my HTML document. -->
    <title>LanguageFluent</title>
    <!-- Meta element is used to specify which character set is used, page description, keywords, author,
    and other metadata. -->
    <!-- Define the character set used. -->
    <meta charset="utf-8">
    <!-- Required meta tag for bootstrap (responsive). -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Load the reset file, with this is guarantee the page will run correctly at different browsers. -->
    <link rel="stylesheet" href="../css/reset.css">
    <!-- Load the bootstrap file, with this is possible to apply changes using the library bootstrap. -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- Load the css file, with this is possible to apply the changes using the style file. -->
    <link rel="stylesheet" href="../css/style.css">
    <!-- Load the query file, with this is possible to make the site responsive. -->
    <link rel="stylesheet" href="../css/queries.css">
</head>
<header
<!-- Navbar fixed on the top and transparent background. -->
<nav class="navbar navbar-expand-xl navbar-light bg-white fixed-top">
    <!-- Container to hold the brand insight of the navbar. -->
    <div class="container">
        <!-- Nav brand with a link to the main page. -->
        <a class="navbar-brand" href="../public/index.php">
            <!-- Logo of the brand. -->
            <img src="../images/logo2.jpg" class="img-fluid" alt="logo" height="82" width="284"/>
        </a>
        <!-- Collapse button, hamburger button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent15" aria-controls="navbarSupportedContent15"
                aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <!-- Collapsible content -->
            <nav class="collapse navbar-collapse" id="main-menu">
                <!-- Links of pages in the website. -->
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="../public/index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../views/whereStudy.php">Where to Study</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../views/inConstruction.php">Living in Ireland</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../views/inConstruction.php">Research</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../views/aboutUs.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../views/contactUs.php">Contact Us</a>
                    </li>
                </ul>
            </nav>
            <!-- Links for user menu. -->
            <nav class="collapse navbar-collapse" id="main-user">
                <!-- Links of pages in the website -->
                <ul class="navbar-nav text-right">
                    <li class="nav-item">
                        <a class="nav-link" href="../views/registration.php">Log In</a>
                        <div class="justify-right">
                            <!-- Print the email of the user. -->
                            <p class="small" style="color:#4ece51">
                                <?php
                                echo $_SESSION['email'];
                                ?></p>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../files/logout.php">Log Out</a>
                    </li>
                </ul>
            </nav>
        </div>
    </nav>
</header
</html>
