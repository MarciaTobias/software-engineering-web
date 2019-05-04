<?php
?>
<!--Main Navigation-->

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
    <link rel="stylesheet" href="../css/style3.css">
    <!-- Load the query file, with this is possible to make the site responsive. -->
    <link rel="stylesheet" href="../css/queries.css">
</head>
<header class="intro-header">

    <!--Navbar-->
    <mdb-navbar SideClass="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
        <mdb-navbar-brand>
            <a class="logo navbar-brand waves-light" mdbWavesEffect href="#"><strong>MDB</strong></a>
        </mdb-navbar-brand>
        <links>
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active waves-light" mdbWavesEffect>
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item waves-light" mdbWavesEffect>
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item waves-light" mdbWavesEffect>
                    <a class="nav-link" href="#">Profile</a>
                </li>
            </ul>
            <form class="form-inline waves-light" mdbWavesEffect>
                <div class="md-form mt-0">
                    <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                </div>
            </form>
        </links>
    </mdb-navbar>

    <!--Intro Section-->
    <section class="view intro-2">
        <div class="full-bg-img mask rgba-gradient">
            <div class="container flex-center">
                <div class="d-flex align-items-center content-height w-100">
                    <div class="row flex-center pt-5 mt-3 w-100">
                        <div class="col-md-6 text-center text-md-left mb-5">
                            <div class="white-text">
                                <h2 class="h1 h1-responsive font-bold wow fadeInLeft" data-wow-delay="0.3s">Sign up right
                                    now! </h2>
                                <hr class="hr-light wow fadeInLeft" data-wow-delay="0.3s">
                                <h6 class="wow fadeInLeft" data-wow-delay="0.3s">Lorem ipsum dolor sit amet, consectetur
                                    adipisicing
                                    elit. Rem repellendus quasi fuga nesciunt dolorum nulla magnam veniam sapiente, fugiat!
                                    Commodi sequi
                                    non animi ea dolor molestiae, quisquam iste, maiores. Nulla.</h6>
                                <br>
                                <a mdbBtn color="white" outline="true" class="wow fadeInLeft waves-light" data-wow-delay="0.3s"
                                   mdbWavesEffect>Learn more</a>
                            </div>
                        </div>

                        <div class="col-md-6 col-xl-5 offset-xl-1">
                            <!--Form-->
                            <div class="card wow fadeInRight" data-wow-delay="0.3s">
                                <div class="card-body">
                                    <!--Header-->
                                    <div class="text-center">
                                        <h3 class="white-text"><i class="fas fa-user white-text"></i> Register:</h3>
                                        <hr class="hr-light">
                                    </div>

                                    <!--Body-->
                                    <div class="md-form">
                                        <i class="fas fa-user prefix white-text"></i>
                                        <input type="text" id="form3" class="form-control" mdbInput>
                                        <label for="form3">Your name</label>
                                    </div>
                                    <div class="md-form">
                                        <i class="fas fa-envelope prefix white-text"></i>
                                        <input type="text" id="form2" class="form-control" mdbInput>
                                        <label for="form2">Your email</label>
                                    </div>

                                    <div class="md-form">
                                        <i class="fas fa-lock prefix white-text"></i>
                                        <input type="password" id="form4" class="form-control" mdbInput>
                                        <label for="form4">Your password</label>
                                    </div>

                                    <div class="text-center">
                                        <button mdbBtn color="indigo" class="waves-light" mdbWavesEffect>Sign up</button>
                                        <hr class="hr-light mb-3 mt-4">

                                        <div class="inline-ul text-center d-flex justify-content-center">
                                            <a class="icons-sm tw-ic px-4"><i class="fab fa-twitter white-text"></i></a>
                                            <a class="icons-sm li-ic px-4"><i class="fab fa-linkedin-in white-text"> </i></a>
                                            <a class="icons-sm ins-ic px-4"><i class="fab fa-instagram white-text"> </i></a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!--/.Form-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</header>
<!--Main Navigation-->
