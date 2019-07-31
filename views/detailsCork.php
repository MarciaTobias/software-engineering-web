<!-- marcia-tobias student number 2985044. -->
<!-- lucas-vigarinho student number 2989295. -->

<!-- Is an instruction to the browser about what version of html the page is written in
That declaration must be the very first thing in your HTML document, even before the HTML tag. -->
<!DOCTYPE html>
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
<?php include ('../views/header.php'); ?>
<div class="mt-4"></div>
<div class="container">

    <div class="breadcrumb d-flex justify-content-between ">
        <div class="container ">
            <div class="row ">
                <div class="col-md-4 col-lg-4 ">
                    <form class="input-group d-inline-flex  " >
                        <input class="form-control mr-sm-2" type="text" placeholder=" Institution Name">
                        <button class="btn btn-success" type="submit"><i class="fa fa-search"></i> Search</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- Creating a main container container with the -->
    <div class="container justify-content-right pt-3">
        <!-- Creating a container to the searches fields -->
        <form action="search" method="post" class="d-block d-sm-12 d-lg-flex mb-4">
            <!-- Creating the container of the fields for search -->
            <div class="fields d-block d-lg-flex">
                <!-- creating the text field search first field -->
                <div class="text-field-search one-third"><input type="text" class="form-control" placeholder="Keyword search..."></div>
                <div class="select-wrap one-third">
                    <!-- creating the course field, describing some standard course titles -->
                    <select id="courseId" class="form-control">
                        <option value="">Course</option>
                        <option value="">General English</option>
                        <option value="">Business English</option>
                        <option value="">Intensive English</option>
                        <option value="">One-to-one</option>
                        <option value="">Others</option>
                    </select>
                </div>
                <!-- Creating the cities field, defining the cities of the institutions subscribed -->
                <div class="select-wrap one-third">
                    <select id="citiesId" class="form-control">
                        <option value="">All cities</option>
                        <option value="">Dublin</option>
                        <option value="">Cork</option>
                        <option value="">Galway</option>
                        <option value="">Limerick</option>
                        <option value="">Belfast</option>
                    </select>
                </div>
                <!-- Creating the level field, defining in which level the user is looking for courses-->
                <div class="select-wrap one-third">
                    <select id="levelId" class="form-control">
                        <option value="">Difficulty level</option>
                        <option value="">Beginner</option>
                        <option value="">Intermediate</option>
                        <option value="">Advance</option>
                        <option value="">Proficient</option>
                    </select>
                </div>
                <!-- Creating the accommodation field, describing the standard accommodations -->
                <div class="select-wrap one-third">
                    <select id="accommodationId" class="form-control">
                        <option value="">Accommodation</option>
                        <option value="">No accommodation</option>
                        <option value="">accommodation lowest</option>
                        <option value="">apartment single</option>
                        <option value="">apartment shared</option>
                        <option value="">homestay s</option>
                        <option value="">on campus</option>
                    </select>
                </div>
                <!-- Creating the fields to absorb the limit price to the user define in its search-->
                <div class="textfield-search one-third"><input type="text" class="form-control" placeholder="Min price €"></div>
                <div class="textfield-search one-third"><input type="text" class="form-control" placeholder="Max price €"></div>
            </div>
            <!-- Creating the input search to serve as an action to look for the search stipulated-->
            <input type="submit" class="search-submit btn col-sm-12 col-lg-1 btn-primary" value="Search">
        </form>
    </div>

    <!-- Creating a container to describe the title of the page -->
    <div class="row">
        <div class="col-md-12 mb-3 ">
            <h2> Institution Details </h2>
        </div>
    </div>

    <!-- Creating the container to the institution chosen -->
    <div class="row mb-3">
        <!-- Defining the positioning of the containers in different sizes -->
        <div class="col-sm-12 col-md-12 col-lg-12">
            <!-- Creating the first part of the container, utilizing the class card  -->
            <div class="card">
                <!-- Creating the card body of the first part   -->
                <div class="card-body">
                    <!-- Creating a container to describe all the information of the first part of the card class    -->
                    <div class="row">
                        <!-- Creating the container to insert the image and defining the different formats according to the display size -->
                        <div class="col-md-3 col-lg-3 ">
                            <!-- defining the image to be shown -->
                            <img src="../images/Cork%20English%20World.jpg" class="img-thumbnail mt-4" alt="Card Image">
                        </div>
                        <!-- Creating the container article to describe the institution -->
                        <article class="col-md-6  col-lg-6 card-body ">
                            <div class="list-title ">
                                <ul class="list-inline list-unstyled">
                                    <li class="list-inline-item "><a href="https://www.cew.ie/"><h4>Cork English World</h4></a></li>
                                    <li class="list-inline-item text-warning"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half"></i></li>
                                    <li class="list-inline-item text-success"><i class="fa fa-thumbs-up"></i></li>
                                </ul>
                            </div>
                            <!-- Creating the container to describe and link the location, address and map (google map)-->
                            <div class="list-location">
                                <a href="https://www.google.com/maps/place/Cork+English+World/@51.894949,-8.4794481,15z/data=!4m5!3m4!1s0x0:0xb16f13e4f29b1e47!8m2!3d51.894949!4d-8.4794481"><i class="fa fa-map-marker"></i><small style="color: black; font-style: italic;"> Address: Crawford Business Park, Bishop St, The Lough, Cork</small> </a>
                            </div>
                            <!-- Creating a container to set and show up a description of the institution -->
                            <div class="list-description mt-3">
                                CEW promotes excellence through lifelong learning by providing a high quality range of English Courses to equip students with accredited skills that have international recognition and that are relevant to the present and future workplace.
                            </div>
                        </article>

                        <!-- Creating the second part of the card body with the rating -->
                        <div class="row col-md-3 col-lg-3 border-left card-body">
                            <!-- Defining the title of the second part of the Card body, using the average value among the reviews of the users-->
                            <div class="review-block-title mb-4">AVERAGE RATING - 4.5</div>
                            <div class="side">
                                <!-- Decryption of the first progress bar -->
                                <div>5 star</div>
                            </div>
                            <!-- Defining the progress bar for 5 stars-->
                            <div class="col-xs-8 col-md-9">
                                <div class="progress progress-striped ">
                                    <div class="progress-bar progress-bar-success " role="progressbar" aria-valuenow="20"
                                         aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                        <span class="sr-only">80%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="side">
                                <!-- Decryption of the second progress bar -->
                                <div>4 star</div>
                            </div>
                            <!-- Defining the progress bar for 4 stars-->
                            <div class="col-xs-8 col-md-9 pt-1">
                                <div class="progress">
                                    <div class="progress-bar progress-bar-success bg-success" role="progressbar" aria-valuenow="20"
                                         aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                        <span class="sr-only">60%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="side">
                                <!-- Decryption of the third progress bar -->
                                <div>3 star</div>
                            </div>
                            <!-- Defining the progress bar for 3 stars-->
                            <div class="col-xs-8 col-md-9 pt-1">
                                <div class="progress">
                                    <div class="progress-bar progress-bar-info bg-info" role="progressbar" aria-valuenow="20"
                                         aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                        <span class="sr-only">40%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="side">
                                <!-- Decryption of the second progress bar -->
                                <div>2 star</div>
                            </div>
                            <!-- Defining the progress bar for 2 stars-->
                            <div class="col-xs-8 col-md-9 pt-1">
                                <div class="progress">
                                    <div class="progress-bar progress-bar-warning bg-warning" role="progressbar" aria-valuenow="20"
                                         aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                        <span class="sr-only">20%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="side">
                                <!-- Decryption of the first progress bar -->
                                <div>1 star</div>
                            </div>
                            <!-- Defining the progress bar for 1 stars-->
                            <div class="col-xs-8 col-md-9 pt-1">
                                <div class="progress">
                                    <div class="progress-bar progress-bar-danger bg-danger" role="progressbar" aria-valuenow="80"
                                         aria-valuemin="0" aria-valuemax="100" style="width: 15%">
                                        <span class="sr-only">15%</span>
                                    </div>
                                </div>
                            </div>
                            <!-- Decryption of the how many reviews the first institution receive -->
                            <ul class="list-unstyled">
                                <li class="text-secondary"><small>10 Reviews  </small></li>
                            </ul>
                            <!-- Creating the button to give a opportunity to the user verify more details of the institution -->
                            <button type="button"  class="btn btn-outline-primary mt-4 ml-4" >Details</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!--Creating a bootstrap carousel to display time to time which picture linked in here #myCarousel, using spaces, and marge to make   -->
    <div id="my_carousel" class="carousel slide" style="width:69.4em;height:30em;" data-ride="carousel">
        <!--Opening the carousel class to verify the carousel items on the list -->
        <ol class="carousel-indicators">
            <!--Thefining the number of pages are going to change -->
            <li data-target="#my_carousel" data-slide-to="0" class="active" ></li>
            <li data-target="#my_carousel" data-slide-to="1" ></li>
            <li data-target="#my_carousel" data-slide-to="2" ></li>
            <li data-target="#my_carousel" data-slide-to="3" ></li>
        </ol>
        <!-- Creating the carousel inner, to show to the active table where find the next carousel-item active-->
        <div class="carousel-inner">
            <!-- Creating the carousel item -->
            <div class="carousel-item active">
                <!--Defining the video to be shown  -->
                <video class="embed-responsive embed-responsive-16by9"  controls>
                    <source src="../images/Top%20things%20to%20do%20in%20Cork.mp4" type="video/mp4">
                </video>
            </div>
            <!-- Creating the carousel item -->
            <div class="carousel-item" style="width:69.4em;height:30em;" >
                <!--Defining the picture to be shown  -->
                <img class="second-slide" src="../images/cork%20-%20images.jpg" alt="second-slide">
            </div>
            <!-- Creating the carousel item -->
            <div class="carousel-item" style="width:69.4em;height:30em;">
                <!--Defining the picture to be shown  -->
                <img class="third-slide w-100" src="../images/Cork-English-Academy-building.jpg" alt="third-slide">
            </div>
            <!-- Creating the carousel item -->
            <div class="carousel-item" style="width:69.4em;height:30em;">
                <!--Defining the picture to be shown  -->
                <img class="fourth-slide w-100" src="../images/CEC-students.jpg" alt="fourth-slide">
            </div>
        </div>
        <!--Creating the carousel control as icon previous-->
        <a class="carousel-control-prev" href="#my_carousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <!--Creating the carousel control as icon next-->
        <a class="carousel-control-next" href="#my_carousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>


    <!-- Creating a container to show four standard optional courses of the institution chosen -->
    <div class="row mx-0">
        <!-- Creating the container for the first step of the initiate level -->
        <div class="card col-lg-3 col-sm-6 p-1 bg-white text-center" id="btn_card1_first">
            <!-- Defining image to be chosen  -->
            <img class="card-img-top" src="../images/General%20English.png" alt="Card image cap">
            <div class="card-body" id="card1_first_step">
                <!-- Declaring the title of the step -->
                <h4 class="card-title"><em>First step</em></h4>
                <!-- Show the initial message to attract the user -->
                <p class="card-text">The general english is the first step of all initial student </p>

            </div>
            <!-- Create the container footer of the card, with a link button details, linking to the institution site course-->
            <div class="card-footer">
                <a href="https://www.cew.ie/general-english-courses" class="btn btn-danger ">Course details</a>
            </div>
        </div>
        <!-- Creating the container for the second step of the intermediate level -->
        <div class="card col-lg-3 col-sm-6 p-1 bg-white text-center" id="btn_card1_second">
            <!-- Defining image to be chosen  -->
            <img class="card-img-top" src="../images/Exam%20Preparation.png" alt="Card image cap">
            <div class="card-body" id="card1_second_step">
                <!-- Declaring the title of the step -->
                <h4 class="card-title"><em>Second step</em></h4>
                <!-- Show the initial message to attract the user -->
                <p class="card-text">Cork English World is a certified Cambridge Examination Preparation centre.</p>

            </div>
            <!-- Create the container footer of the card, with a link button details, linking to the institution site course-->
            <div class="card-footer">
                <a href="https://www.cew.ie/cambridge-examination-preparation" class="btn btn-danger ">Course details</a>
            </div>
        </div>
        <!-- Creating the container for the third step of the advanec level -->
        <div class="card col-lg-3 col-sm-6 p-1 bg-white text-center" id="btn_card1_third">
            <!-- Defining image to be chosen  -->
            <img class="card-img-top" src="../images/Academic%20Programme.png" alt="Card image cap">
            <div class="card-body" id="card1_third_step">
                <!-- Declaring the title of the step -->
                <h4 class="card-title"><em>Third step</em></h4>
                <!-- Show the initial message to attract the user -->
                <p class="card-text">Academic /Work & Study is a programme that is offered by Cork English World for students who wish to achieve a high level of English to WORK or STUDY in an English speaking environment. </p>

            </div>
            <!-- Create the container footer of the card, with a link button details, linking to the institution site course-->
            <div class="card-footer">
                <a href="https://www.cew.ie/academic-work-study" class="btn btn-danger ">Course details</a>
            </div>
        </div>
        <!-- Creating the container for the fourth step of the proficient level -->
        <div class="card col-lg-3 col-sm-6 p-1 bg-white text-center" id="btn_card1_fourth">
            <!-- Defining image to be chosen  -->
            <img class="card-img-top" src="../images/Business%20English.png" alt="Card image cap">
            <div class="card-body" id="card1_fourth_step">
                <!-- Declaring the title of the step -->
                <h4 class="card-title"><em>Forth step</em></h4>
                <!-- Show the initial message to attract the user -->
                <p class="card-text">The Business English course is designed for people who want to develop their Business English skills and acumen. </p>
            </div>
            <!-- Create the container footer of the card, with a link button details, linking to the institution site course-->
            <div class="card-footer">
                <a href="https://www.cew.ie/business-english-2017" class="btn btn-danger ">Course details</a>
            </div>
        </div>
    </div> <!-- class row mx-0 -->

    <!-- Load the page student reviews. -->
    <?php include('../views/studentReviews.php'); ?>


</div>

<!-- Text and icons aligned at the center of the page -->
<?php include ('../views/footer.php'); ?>
