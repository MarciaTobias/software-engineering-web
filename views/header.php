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
    <title><?php echo $page_title; ?></title>
<!--    <title>LanguagFluent</title>-->
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
    <link rel="stylesheet" href="../css/style4.css">
    <!-- Load the query file, with this is possible to make the site responsive. -->
    <link rel="stylesheet" href="../css/queries.css">
</head>
<header>
    <!-- Navbar fixed on the top and transparent background. -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <!-- Container to hold the brand insight of the navbar-->
        <div class="container">
            <!-- Nav brand with a link to the home page -->
            <a class="navbar-brand" href="home.php">
                <!-- Logo of LanguagFluent-->
                <img src="../images/logo2.jpg" class="img-fluid" alt="logo" height="82" width="284"/>
            </a>
            <!-- Collapse button, hamburger button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent15"
                    aria-controls="navbarSupportedContent15" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <!-- Collapsible content -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent15">
                <!-- Links of pages in the website -->
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Where to Study</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Living in Ireland</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Research</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Full page image header with vertically centered content -->
    <div class="masthead">
        <div class="container col-12 align-items-center h-100">
            <img src="../images/West-Coast-ireland-overview-cliffs-of-moher-xlarge.jpg" alt="Snow" >
            <div class="centered">
                <h1 class="font-weight-light">Study English in Ireland</h1>
                <hr>
                <p>And check experiences from others students!</p>
            </div>
        </div>
    </div>
</header>
<!-- Section with images and links to others pages of the this wesite -->
<section>
    <div class="container">
        <div class="card-deck row-1">
            <div class="card col-md-6 bg-transparent border-0">
                <img class="card-img-top" src="../images/blackboard.png" alt="blackboard">
                <div class="card-body">
                    <button type="button" class="btn btn-lg btn-success">Where to Study</button>
                </div>
            </div>
            <div class="card col-md-6 bg-transparent border-0">
                <img class="card-img-top" src="../images/home.png" alt="home">
                <div class="card-body">
                    <button type="button" class="btn btn-lg btn-secondary">Living in Ireland</button>
                </div>
            </div>
            <div class="card col-md-6 bg-transparent border-0">
                <img class="card-img-top" src="../images/search.png" alt="search">
                <div class="card-body">
                    <button type="button" class="btn btn-lg btn-info">Research</button>
                </div>
            </div>
            <div class="card col-md-6 bg-transparent border-0">
                <img class="card-img-top" src="../images/teamwork.png" alt="team">
                <div class="card-body">
                    <button type="button" class="btn btn-lg btn-warning">About Us</button>
                </div>
            </div>
        </div>
    </div>
</section>
</html>