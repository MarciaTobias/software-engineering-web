<?php
?>

<!-- marcia.tobias student number 2985044 -->
<!-- lucas.virgarinho student number -->

<!-- Is an instruction to the browser about what version of html the page is written in
That declaration must be the very first thing in your HTML document, even before the HTML tag. -->
<!DOCTYPE html>
<!-- That tag specifies the language code english. -->
<html lang="en">
<!-- That element is a container for a metadata. -->
<head>
    <!-- Define a title for my HTML document. -->
    <title>LanguagFluent</title>
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
<body>
    <!--Navbar-->

    <nav class="navbar sticky-top navbar-expand-md navbar-dark bg-primary justify-content-center">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="#">Log In</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Register</a>
            </li>
        </ul>
    </nav>

    <nav class="navbar navbar-expand-md navbar-light">
        <a class="navbar-brand" href="#">
            <img src="../images/logo.jpg" class="img-fluid" alt="logo" height="90" width="150" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">Search</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Where to Study</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Living Ireland</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About Us</a>
                </li>
            </ul>
        </div>
    </nav>
<br>
</body>
</html>



