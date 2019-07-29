<!-- marcia-tobias student number 2985044. -->
<!-- lucas-vigarinho student number 2989295. -->

<!-- Include action to load header. -->
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

    <?php include ('../views/searchBar.php'); ?>

    <!-- Creating a container to describe the title of the page -->
    <div class="row  ">
        <div class="col-md-12 mb-3 ">
            <h2 style="color:#38c93d;"> Institution Details </h2>
        </div>
    </div>

    <!-- Creating the container to the institution chosen -->
    <div class="row mb-3 ">
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
                            <img src="../images/<?php
                            // Shows the image of the school using the information from the database.
                            // Create connection
                            $conn = new mysqli("localhost", "root", "root", "language_fluent");
                            // Check connection
                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            }

                            //$nameInstitution = $_POST['keyword'];
                            $resultInstitution = "SELECT * FROM Institution WHERE institution_Name LIKE '%Delfin%' ";
                            $result = mysqli_query($conn, $resultInstitution);

                            if ($result->num_rows > 0) {

                                // output data of each row
                                while($row = $result->fetch_assoc()) {

                                    echo $row["institution_Image_one"];

                                }
                            } else {
                                echo "0 results";
                            }

                            $conn->close(); ?>" class="img-thumbnail mt-4" alt="Card Image">
                        </div>
                        <!-- Creating the container article to describe the institution -->
                        <article class="col-md-6  col-lg-6 card-body ">
                            <div class="list-title ">
                                <ul class="list-inline list-unstyled">
                                    <li class="list-inline-item "><a href="https://www.cew.ie/"><h4>
                                                <?php
                                                // Shows the name of the school using the information from the database.
                                                // Create connection
                                                $conn = new mysqli("localhost", "root", "root", "language_fluent");
                                                // Check connection
                                                if ($conn->connect_error) {
                                                    die("Connection failed: " . $conn->connect_error);
                                                }

                                                $resultInstitution = "SELECT * FROM Institution WHERE institution_Name LIKE '%Delfin%' ";
                                                $result = mysqli_query($conn, $resultInstitution);

                                                if ($result->num_rows > 0) {

                                                    // output data of each row
                                                    while($row = $result->fetch_assoc()) {

                                                        echo $row["institution_Name"];
                                                    }
                                                } else {
                                                    echo "0 results";
                                                }

                                                $conn->close();
                                                ?>
                                            </h4></a></li>
                                    <li class="list-inline-item text-warning"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half"></i></li>
                                    <li class="list-inline-item text-success"><i class="fa fa-thumbs-up"></i></li>
                                </ul>
                            </div>
                            <!-- Creating the container to describe and link the location, address and map (google map)-->
                            <div class="list-location">
                                <a href="https://www.google.com/maps/place/Delfin+English+School+Dublin/@53.353524,-6.261906,15z/data=!4m2!3m1!1s0x0:0xb08e9110344f19e1?sa=X&ved=2ahUKEwidu4D525biAhVaQxUIHb-AB30Q_BIwFnoECAkQCA"><i class="fa fa-map-marker"></i><small> Address:
                                        <?php
                                        // Shows the address of the school using the information from the database.
                                        // Create connection
                                        $conn = new mysqli("localhost", "root", "root", "language_fluent");
                                        // Check connection
                                        if ($conn->connect_error) {
                                            die("Connection failed: " . $conn->connect_error);
                                        }

                                        $resultInstitution = "SELECT * FROM Institution WHERE institution_Name LIKE '%Delfin%' ";
                                        $result = mysqli_query($conn, $resultInstitution);

                                        if ($result->num_rows > 0) {

                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {

                                                echo $row["institution_Address"];
                                            }
                                        } else {
                                            echo "0 results";
                                        }

                                        $conn->close();
                                        ?>
                                    </small> </a>
                            </div>
                            <!-- Creating a container to set and show up a description of the institution -->
                            <div class="list-description">
                                <small style="color: #38c93d ">
                                    <?php
                                    // Shows the description of the school using the information from the database.
                                    // Create connection
                                    $conn = new mysqli("localhost", "root", "root", "language_fluent");
                                    // Check connection
                                    if ($conn->connect_error) {
                                        die("Connection failed: " . $conn->connect_error);
                                    }

                                    $resultInstitution = "SELECT * FROM Institution WHERE institution_Name LIKE '%Delfin%' ";
                                    $result = mysqli_query($conn, $resultInstitution);

                                    if ($result->num_rows > 0) {

                                        // output data of each row
                                        while($row = $result->fetch_assoc()) {

                                            echo $row["institution_Description"];
                                        }
                                    } else {
                                        echo "0 results";
                                    }

                                    $conn->close();
                                    ?>
                                </small>
                            </div>
                        </article>

                        <!-- Creating the second part of the card body with the rating -->
                        <div class="row col-md-3 col-lg-3 border-left card-body">
                            <!-- Defining the title of the second part of the Card body, using the average value among the reviews of the users-->
                            <div class="review-block-title mb-2" style="color: #38c93d " >AVERAGE RATING - 4.5</div>
                            <div class="side" style="color:#38c93d;">
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
                            <div class="side" style="color:#38c93d;">
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
                            <div class="side" style="color:#38c93d;">
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
                            <div class="side" style="color:#38c93d;">
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
                            <div class="side" style="color:#38c93d;">
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
                            <button type="button"  class="btn btn-outline-primary  ml-4" >Details</button>
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
                    <source src="../images/<?php
                    // Shows the image of the school using the information from the database.
                    // Create connection
                    $conn = new mysqli("localhost", "root", "root", "language_fluent");
                    // Check connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }

                    //$nameInstitution = $_POST['keyword'];
                    $resultInstitution = "SELECT * FROM Institution WHERE institution_Name LIKE '%Delfin%' ";
                    $result = mysqli_query($conn, $resultInstitution);

                    if ($result->num_rows > 0) {

                        // output data of each row
                        while($row = $result->fetch_assoc()) {

                            echo $row["institution_Video_One"];

                        }
                    } else {
                        echo "0 results";
                    }

                    $conn->close(); ?>" type="video/mp4">
                </video>
            </div>
            <!-- Creating the carousel item -->
            <div class="carousel-item" style="width:69.4em;height:30em;" >
                <!--Defining the picture to be shown  -->
                <img class="second-slide" src="../images/<?php
                // Shows the image of the school using the information from the database.
                // Create connection
                $conn = new mysqli("localhost", "root", "root", "language_fluent");
                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                //$nameInstitution = $_POST['keyword'];
                $resultInstitution = "SELECT * FROM Institution WHERE institution_Name LIKE '%Delfin%' ";
                $result = mysqli_query($conn, $resultInstitution);

                if ($result->num_rows > 0) {

                    // output data of each row
                    while($row = $result->fetch_assoc()) {

                        echo $row["institution_Image_Two"];

                    }
                } else {
                    echo "0 results";
                }

                $conn->close(); ?>" alt="second-slide">
            </div>
            <!-- Creating the carousel item -->
            <div class="carousel-item" style="width:69.4em;height:30em;">
                <!--Defining the picture to be shown  -->
                <img class="third-slide w-100" src="../images/<?php
                // Shows the image of the school using the information from the database.
                // Create connection
                $conn = new mysqli("localhost", "root", "root", "language_fluent");
                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                //$nameInstitution = $_POST['keyword'];
                $resultInstitution = "SELECT * FROM Institution WHERE institution_Name LIKE '%Delfin%' ";
                $result = mysqli_query($conn, $resultInstitution);

                if ($result->num_rows > 0) {

                    // output data of each row
                    while($row = $result->fetch_assoc()) {

                        echo $row["institution_Image_Three"];

                    }
                } else {
                    echo "0 results";
                }

                $conn->close(); ?>" alt="third-slide">
            </div>
            <!-- Creating the carousel item -->
            <div class="carousel-item" style="width:69.4em;height:30em;">
                <!--Defining the picture to be shown  -->
                <img class="fourth-slide w-100" src="../images/<?php
                // Shows the image of the school using the information from the database.
                // Create connection
                $conn = new mysqli("localhost", "root", "root", "language_fluent");
                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                //$nameInstitution = $_POST['keyword'];
                $resultInstitution = "SELECT * FROM Institution WHERE institution_Name LIKE '%Delfin%' ";
                $result = mysqli_query($conn, $resultInstitution);

                if ($result->num_rows > 0) {

                    // output data of each row
                    while($row = $result->fetch_assoc()) {

                        echo $row["institution_Image_Four"];

                    }
                } else {
                    echo "0 results";
                }

                $conn->close(); ?>" alt="fourth-slide">
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
                <h4 class="card-title" style="color:#38c93d;"><em>First step</em></h4>
                <!-- Show the initial message to attract the user -->
                <p class="card-text" style="color:#38c93d;">The general english is the first step of all initial student </p>

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
                <h4 class="card-title" style="color:#38c93d;"><em>Second step</em></h4>
                <!-- Show the initial message to attract the user -->
                <p class="card-text" style="color:#38c93d;">Delfin English World is a certified Cambridge Examination Preparation centre.</p>

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
                <h4 class="card-title" style="color:#38c93d;"><em>Third step</em></h4>
                <!-- Show the initial message to attract the user -->
                <p class="card-text" style="color:#38c93d;">Academic /Work & Study is a programme that is offered by Delfin English World for students who wish to achieve a high level of English to WORK or STUDY in an English speaking environment. </p>

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
                <h4 class="card-title" style="color:#38c93d;"><em>Forth step</em></h4>
                <!-- Show the initial message to attract the user -->
                <p class="card-text" style="color:#38c93d;">The Business English course is designed for people who want to develop their Business English skills and acumen. </p>
            </div>
            <!-- Create the container footer of the card, with a link button details, linking to the institution site course-->
            <div class="card-footer">
                <a href="https://www.cew.ie/business-english-2017" class="btn btn-danger ">Course details</a>
            </div>
        </div>
    </div> <!-- class row mx-0 -->

    <!-- Load the page student reviews. -->
    <?php include ('../views/studentReviews.php'); ?>

    <!-- Text and icons aligned at the center of the page -->
    <?php include ('../views/footer.php'); ?>
