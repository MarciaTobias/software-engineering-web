<!-- marcia-tobias student number 2985044. -->
<!-- lucas-vigarinho student number 2989295. -->

<!-- Include action to load header. -->
<?php include ('../views/header.php'); ?>

<div class="mt-4"></div>
<div class="breadcrumb d-flex justify-content-between ">
    <div class="container ">
        <div class="row">
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
<div class="container pt-3">
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
                    <option value="">homestay</option>
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

    <!-- creating the container section to the search defined by the user -->
    <section class="col-md-12 ">
        <!-- Creating the title, defining the number of the search found -->
        <h2> All cities:
            <?php
            // Shows how many schools at the database.
            // Create connection
            $conn = new mysqli("localhost", "root", "root", "language_fluent");
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Query to check all many schools in the database.
            $resultCount = "SELECT COUNT(Institution_Name) FROM Institution ";

            $result = mysqli_query($conn, $resultCount);
            $data=mysqli_fetch_array($result);

            if ($result->num_rows > 0) {
                $totalCount = array_shift($data);
                echo $totalCount;

            } else {
                echo "0 results";
            }

            $conn->close();
            ?>
            institutions found </h2>
        <!-- Creating the container to the pagination in case of locate more them possible to show up in one page -->
        <div class="row">
            <div class="col-md-12">
                <ul class="pagination">
                    <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item disabled"><a class="page-link" href="#">2</a></li>
                    <li class="page-item disabled"><a class="page-link" href="#">3</a></li>
                    <li class="page-item disabled"><a class="page-link" href="#">Next</a></li>
                </ul>
            </div>
        </div>
        <!-- Creating the container to show up all the institution locate on the search-->
        <div class="row mb-3">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <!-- Creating the container for the first institution localized on the search -->
                        <div class="row">
                            <!-- Creating the container where is going to insert the image -->
                            <div class="col-md-3 col-lg-3">
                                <img src="../images/<?php
                                // Shows the image of the school using the information from the database.
                                // Create connection
                                $conn = new mysqli("localhost", "root", "root", "language_fluent");
                                // Check connection
                                if ($conn->connect_error) {
                                    die("Connection failed: " . $conn->connect_error);
                                }

                                $resultInstitution = "SELECT * FROM Institution WHERE institution_Name LIKE '%Cork%' ";
                                $result = mysqli_query($conn, $resultInstitution);

                                if ($result->num_rows > 0) {

                                    // output data of each row
                                    while($row = $result->fetch_assoc()) {

                                        echo $row["institution_Image_one"];

                                    }
                                } else {
                                    echo "0 results";
                                }

                                $conn->close(); ?>" class="img-thumbnail mt-4" alt="Card image">
                            </div>
                            <!-- Creating the container for the card body of the first part of the first institution localized -->
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

                                                    $resultInstitution = "SELECT * FROM Institution WHERE institution_Name LIKE '%Cork%' ";
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
                                <!-- Creating the container for specify the address of the first institution and link it to the google maps-->
                                <div class="list-location">
                                    <a href="https://www.google.com/maps/place/Cork+English+World/@51.894949,-8.4794481,15z/data=!4m5!3m4!1s0x0:0xb16f13e4f29b1e47!8m2!3d51.894949!4d-8.4794481"><i class="fa fa-map-marker"></i><small style="color: black; font-style: italic;"> Address:
                                            <?php
                                            // Shows the address of the school using the information from the database.
                                            // Create connection
                                            $conn = new mysqli("localhost", "root", "root", "language_fluent");
                                            // Check connection
                                            if ($conn->connect_error) {
                                                die("Connection failed: " . $conn->connect_error);
                                            }

                                            $resultInstitution = "SELECT * FROM Institution WHERE institution_Name LIKE '%Cork%' ";
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
                                <div class="list-description mt-3">
                                    
                                        <?php
                                        // Shows the description of the school using the information from the database.
                                        // Create connection
                                        $conn = new mysqli("localhost", "root", "root", "language_fluent");
                                        // Check connection
                                        if ($conn->connect_error) {
                                            die("Connection failed: " . $conn->connect_error);
                                        }

                                        $resultInstitution = "SELECT * FROM Institution WHERE institution_Name LIKE '%Cork%' ";
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
                                    <li class="text-secondary"><small>10 Reviews</small></li>
                                </ul>
                                <a class="nav-link" href="detailsCork.php"><button type="button" class="btn btn-outline-primary  ml-4" >Details</button></a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Creating the container to show up all the institution locate on the search-->
        <div class="row mb-3">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <!-- Creating the container for the second institution localized on the search -->
                        <div class="row">
                            <!-- Creating the container where is going to insert the image -->
                            <div class="col-md-3">
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

                                $conn->close(); ?>" class="img-thumbnail" alt="Card image">
                            </div>
                            <!-- Creating the container for the card body of the first part of the second institution localized -->
                            <div class="col-md-6  card-body">
                                <div class="list-title">
                                    <ul class="list-inline list-unstyled">
                                        <li class="list-inline-item"><a href="https://www.delfinschool.com/en/"><h4>
                                                    <?php
                                                    // Shows the name of the school using the information from the database.
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

                                                            echo $row["institution_Name"];

                                                        }
                                                    } else {
                                                        echo "0 results";
                                                    }

                                                    $conn->close(); ?>
                                                </h4></a></li>
                                        <li class="list-inline-item text-success"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half"></i></li>
                                        <li class="list-inline-item text-success"><i class="fa fa-thumbs-up"></i></li>
                                    </ul>
                                </div>
                                <div class="list-location">
                                    <a href="https://www.google.com/maps/place/Delfin+English+School+Dublin/@53.353524,-6.261906,15z/data=!4m5!3m4!1s0x0:0xb08e9110344f19e1!8m2!3d53.353524!4d-6.261906"><i class="fa fa-map-marker"></i><small style="color: black; font-style: italic;"> Address:
                                            <?php
                                            // Shows the address of the school using the information from the database.
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

                                                    echo $row["institution_Address"];

                                                }
                                            } else {
                                                echo "0 results";
                                            }

                                            $conn->close(); ?>
                                        </small></a>
                                </div>
                                <div class="list-descrip mt-3">         
                                        <?php
                                        // Shows the address of the school using the information from the database.
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

                                                echo $row["institution_Description"];

                                            }
                                        } else {
                                            echo "0 results";
                                        }

                                        $conn->close();
                                        ?>
                                </div>
                            </div>
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
                                <a class="nav-link" href="detailsDelfin.php"><button type="button" class="btn btn-outline-primary  ml-4" >Details</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Creating the container to show up all the institution locate on the search-->
        <div class="row mb-3">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <!-- Creating the container for the second institution localized on the search -->
                        <div class="row">
                            <!-- Creating the container where is going to insert the image -->
                            <div class="col-md-3">
                                <img src="../images/<?php
                                // Shows the image of the school using the information from the database.
                                // Create connection
                                $conn = new mysqli("localhost", "root", "root", "language_fluent");
                                // Check connection
                                if ($conn->connect_error) {
                                    die("Connection failed: " . $conn->connect_error);
                                }

                                //$nameInstitution = $_POST['keyword'];
                                $resultInstitution = "SELECT * FROM Institution WHERE institution_Name LIKE '%Gri%D%' ";
                                $result = mysqli_query($conn, $resultInstitution);

                                if ($result->num_rows > 0) {

                                    // output data of each row
                                    while($row = $result->fetch_assoc()) {

                                        echo $row["institution_Image_one"];

                                    }
                                } else {
                                    echo "0 results";
                                }

                                $conn->close(); ?>" class="img-thumbnail mt-5" alt="Card image">
                            </div>
                            <!-- Creating the container for the card body of the first part of the third institution localized -->
                            <div class="col-md-6  card-body">
                                <div class="list-title">
                                    <ul class="list-inline list-unstyled">
                                        <li class="list-inline-item"><a href="https://www.griffith.ie/faculties/griffith-institute-language">
                                                <h4>
                                                    <?php
                                                    // Shows the name of the school using the information from the database.
                                                    // Create connection
                                                    $conn = new mysqli("localhost", "root", "root", "language_fluent");
                                                    // Check connection
                                                    if ($conn->connect_error) {
                                                        die("Connection failed: " . $conn->connect_error);
                                                    }

                                                    $resultInstitution = "SELECT * FROM Institution WHERE institution_Name LIKE '%Gri%D%' ";
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
                                <div class="list-location">
                                    <a href="#"><i class="fa fa-map-marker"></i><small style="color: black; font-style: italic;">Address:
                                            <?php
                                            // Shows the address of the school using the information from the database.
                                            // Create connection
                                            $conn = new mysqli("localhost", "root", "root", "language_fluent");
                                            // Check connection
                                            if ($conn->connect_error) {
                                                die("Connection failed: " . $conn->connect_error);
                                            }

                                            $resultInstitution = "SELECT * FROM Institution WHERE institution_Name LIKE '%Gri%D%' ";
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
                                <div class="list-descrip mt-3">
                                        <?php
                                        // Shows the description of the school using the information from the database.
                                        // Create connection
                                        $conn = new mysqli("localhost", "root", "root", "language_fluent");
                                        // Check connection
                                        if ($conn->connect_error) {
                                            die("Connection failed: " . $conn->connect_error);
                                        }

                                        $resultInstitution = "SELECT * FROM Institution WHERE institution_Name LIKE '%Gri%D%' ";
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
                                </div>
                            </div>

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
                                <a class="nav-link" href="../views/detailsGriffithDublin.php"><button type="button"  class="btn btn-outline-primary  ml-4" >Details</button></a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Creating the container to show up all the institution locate on the search-->
        <div class="row mb-3">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <!-- Creating the container for the second institution localized on the search -->
                        <div class="row">
                            <!-- Creating the container where is going to insert the image -->
                            <div class="col-md-3">
                                <img src="../images/<?php
                                // Shows the image of the school using the information from the database.
                                // Create connection
                                $conn = new mysqli("localhost", "root", "root", "language_fluent");
                                // Check connection
                                if ($conn->connect_error) {
                                    die("Connection failed: " . $conn->connect_error);
                                }

                                //$nameInstitution = $_POST['keyword'];
                                $resultInstitution = "SELECT * FROM Institution WHERE institution_Name LIKE '%Gri%D%' ";
                                $result = mysqli_query($conn, $resultInstitution);

                                if ($result->num_rows > 0) {

                                    // output data of each row
                                    while($row = $result->fetch_assoc()) {

                                        echo $row["institution_Image_one"];

                                    }
                                } else {
                                    echo "0 results";
                                }

                                $conn->close(); ?>" class="img-thumbnail mt-5" alt="Card image">
                            </div>
                            <!-- Creating the container for the card body of the first part of the third institution localized -->
                            <div class="col-md-6  card-body">
                                <div class="list-title">
                                    <ul class="list-inline list-unstyled">
                                        <li class="list-inline-item"><a href="https://www.griffith.ie/locations/limerick">
                                                <h4>
                                                    <?php
                                                    // Shows the name of the school using the information from the database.
                                                    // Create connection
                                                    $conn = new mysqli("localhost", "root", "root", "language_fluent");
                                                    // Check connection
                                                    if ($conn->connect_error) {
                                                        die("Connection failed: " . $conn->connect_error);
                                                    }

                                                    $resultInstitution = "SELECT * FROM Institution WHERE institution_Name LIKE '%Gri%Limerick' ";
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
                                                </h4>
                                            </a></li>
                                        <li class="list-inline-item text-warning"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half"></i></li>
                                        <li class="list-inline-item text-success"><i class="fa fa-thumbs-up"></i></li>
                                    </ul>
                                </div>
                                <div class="list-location">
                                    <a href="#"><i class="fa fa-map-marker"></i><small style="color: black; font-style: italic;">Address:
                                            <?php
                                            // Shows the address of the school using the information from the database.
                                            // Create connection
                                            $conn = new mysqli("localhost", "root", "root", "language_fluent");
                                            // Check connection
                                            if ($conn->connect_error) {
                                                die("Connection failed: " . $conn->connect_error);
                                            }

                                            $resultInstitution = "SELECT * FROM Institution WHERE institution_Name LIKE '%Gri%Limerick' ";
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
                                <div class="list-descrip">
                                    <small>
                                        <?php
                                        // Shows the description of the school using the information from the database.
                                        // Create connection
                                        $conn = new mysqli("localhost", "root", "root", "language_fluent");
                                        // Check connection
                                        if ($conn->connect_error) {
                                            die("Connection failed: " . $conn->connect_error);
                                        }

                                        $resultInstitution = "SELECT * FROM Institution WHERE institution_Name LIKE '%Gri%Limerick' ";
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
                            </div>

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
                                <a class="nav-link" href="../views/detailsGriffithLimerick.php"><button type="button"  class="btn btn-outline-primary  ml-4" >Details</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Repeating the title of the page, with the number of the search found -->
        <section class="col-md-12 ">
            <!-- Repeating the title of the page, with the number of the search found -->
            <h2> All cities:
                <?php
                // Shows how many schools at the database.
                // Create connection
                $conn = new mysqli("localhost", "root", "root", "language_fluent");
                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                // Query to check all many schools in the database.
                $resultCount = "SELECT COUNT(Institution_Name) FROM Institution ";

                $result = mysqli_query($conn, $resultCount);
                $data=mysqli_fetch_array($result);

                if ($result->num_rows > 0) {
                    $totalCount = array_shift($data);
                    echo $totalCount;

                } else {
                    echo "0 results";
                }

                $conn->close();
                ?>
                institutions found </h2>
            <!-- Creating the container to the pagination in case of locate more them possible to show up in one page -->
            <div class="row">
                <div class="col-md-12">
                    <ul class="pagination">
                        <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item disabled"><a class="page-link" href="#">2</a></li>
                        <li class="page-item disabled"><a class="page-link" href="#">3</a></li>
                        <li class="page-item disabled"><a class="page-link" href="#">Next</a></li>
                    </ul>
                </div>
            </div>
        </section>
</div>
<!-- Include action to load the footer. -->
<?php include ('../views/footer.php'); ?>
