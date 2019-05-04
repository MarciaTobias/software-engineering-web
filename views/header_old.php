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

    <!-- Meta element is used to specify which character set is used, page description, keywords, author,
    and other metadata. -->
    <!-- Define the character set used. -->
    <meta charset="UTF-8">

    <!-- Required meta tag for bootstrap (responsive). -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Define a description of the web page. -->
    <meta name="description" content="LanguagFluent">

    <!-- Define the author of a page. -->
    <meta name="author" content="Marcia Tobias">
    <meta name="author" content="Lucas Virgarinho">

    <!-- Load the reset file, with this is guarantee the page will run correctly at different browsers. -->
    <link rel="stylesheet" href="css/reset.css">

    <!-- Load the bootstrap file, with this is possible to apply changes using the library bootstrap. -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Load the css file, with this is possible to apply the changes using the style file. -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Load the query file, with this is possible to make the site responsive. -->
    <link rel="stylesheet" href="css/queries.css">

    <!-- Define a title for my HTML document. -->
    <title>LanguagFluent</title>
</head>
<body>
<!--<div id="main-wrapper">-->
    <header>

        <!--Navbar-->
        <nav class="navbar navbar-light light-blue lighten-4">

            <!-- Navbar brand -->
            <a class="navbar-brand" href="#">Navbar</a>

            <!-- Collapse button -->
            <button class="navbar-toggler toggler-example" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1"
                    aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"><span class="dark-blue-text"><i
                            class="fas fa-bars fa-1x"></i></span></button>

            <!-- Collapsible content -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent1">

                <!-- Links -->
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                </ul>
                <!-- Links -->

            </div>
            <!-- Collapsible content -->

        </nav>
        <!--/.Navbar-->




        <!-- The <nav> tag defines a set of navigation links. -->
        <!-- Theming the navbar is the combination of theming classes and background-color utilities. -->
        <!-- .navbar is a wrapping for responsive collapsing and color scheme classes. -->
        <!-- Decrease the Navbar height by 1rem: -->
        <!-- Margin and padding in all sides -->
        <nav class="navbar navbar-dark navbar-expand-sm bg-primary justify-content-end py-1 m-2 pb-1">
            <!-- Use the <ul> tag together with the <li> tag to create unordered lists.-->
            <!-- .navbar-nav for a full-height and lightweight navigation. -->
            <ul class="navbar-nav user-menu">
                <li><a class="nav-link small" href='#'>My Account</a></li>
                <li><a class="nav-link small" href='#'>Basket</a></li>
                <li><a class="nav-link small" href='#'>Checkout</a></li>
            </ul>
        </nav>
        <div class="container-fluid p-0">
            <!-- Columns have horizontal padding to create the gutters between individual columns, however, you can
            remove the margin from rows and padding from columns with .no-gutters on the .row. -->
            <div class="row ml-2 no gutters">
                <!-- The text will be underneath of the logo when collapse to -->
                <!--                <div class=""> &lt;!&ndash; "" I changed to sm &ndash;&gt;-->
                <!-- The <img> tag defines an image in an HTML page. This tag requires two attributes: src and alt.
In reality images are not inserted into to HTML page but images are linked to HTML. -->
                <!-- Anytime you need to display a piece of content—like an image with an optional caption,
                consider using a <figure>. -->
                <figure class="col-m-5 col-lg-5 col-xl-5">
                    <img src="images/logo2org.jpg" class="img-fluid"
                         alt="mill_flowers_logo" height="61" width="259"/>
                    <!-- Edit the text for uppercase and italic-->
                    <figcaption class="text-uppercase font-italic">Artisan flower arrangements</figcaption>
                </figure>
                <!-- The <h1> to <h6> tags are used to define HTML headings. -->
                <!-- Transform text in components with text capitalization classes -->
                <!-- <h6 class="text-uppercase">Artisan flower arrangements</h6>-->
                <!--                </div>-->
                <div class="col-m-7 col-lg-7 col-xl-7">
                    <!-- The <address> tag defines the contact information for the author/owner of a document or an
                    article. -->
                    <!-- Alignment to the right side of the page -->
                    <!-- mr - set margin-right or padding-right -->
                    <address class="text-md-right mr-3">
                        <a class="small" href="tel:+353614486165">+353 (0)61 4486165</a>
                        <!-- 4 - (by default) for classes that set the margin or padding to $spacer * 1.5 -->
                        <a class="small pl-4" href="mailto:info@millflowers.ie">info@millflowers.ie</a>
                    </address>
                    <!-- Div container to permit to align the search bar and the button.-->
                    <!-- Make the search bar a flex box, to ajust the size of the bar according to the size of the
                    screen-->
                    <div class="input-group d-inline-flex bd-highlight pr-2">
                        <input type="text" class="form-control" placeholder="Search">
                        <!-- Btn-primary is the default blue colour for a button. -->
                        <button class="btn btn-primary sm-2 my-sm-0" type="submit">Search</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- A standard navigation bar is created with the .navbar class, followed by a responsive collapsing class:
        .navbar-expand-xl|lg|md|sm (stacks the navbar vertically on extra large, large, medium or small screens). -->
        <!-- Coloring the navbar and the hamburger -->
        <nav class="navbar navbar-expand-sm navbar-light light-blue lighten-4">
            <!-- .navbar-brand for your company, product, or project name. -->
            <a class="navbar-brand" href="home.html">Mill Flowers</a>
            <!-- .navbar-toggler for use with our collapse plugin and other navigation toggling behaviors. -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsingNavbarXs">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse" id="collapsingNavbarXs">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Buy On Line</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Weddings</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact Us</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
</body>