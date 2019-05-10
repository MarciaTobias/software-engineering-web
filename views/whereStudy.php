<?php
?>
<!-- marcia-tobias student number 2985044. -->
<!-- lucas-virgarinho student number 2989295. -->

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
<body>
<!-- Include the main menu with logo. -->
<?php include ('../views/header.php'); ?>
<section class="section-where">
<div class="breadcrumb d-flex justify-content-between ">
    <div class="container ">
        <div class="row">
            <div class="col-md-4 col-lg-4 ">
            </div>
        </div>
    </div>
</div>
</section>

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

    <!-- creating the container section to the search defined by the user -->
    <section class="col-md-12 ">
        <!-- Creating the title, defining the number of the search found -->
        <h2 style="color:#38c93d;"> All cities: 85 institutions found </h2>
        <!-- Creating the container to the pagination in case of locate more them possible to show up in one page -->
        <div class="row">
            <div class="col-md-12">
                <ul class="pagination">
                    <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
            </div>
        </div>
        <!-- Creating the container to show up all the institution locate on the search-->
        <div class="row mb-3 ">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <!-- Creating the container for the first institution localized on the search -->
                        <div class="row">
                            <!-- Creating the container where is going to insert the image -->
                            <div class="col-md-3 col-lg-3 ">
                                <img src="../images/Cork%20English%20World.jpg" class="img-thumbnail mt-4" alt="Card image">
                            </div>
                            <!-- Creating the container for the card body of the first part of the first institution localized -->
                            <article class="col-md-6  col-lg-6 card-body ">
                                <div class="list-title ">
                                    <ul class="list-inline list-unstyled">
                                        <li class="list-inline-item "><a href="https://www.cew.ie/"><h4>Cork English World</h4></a></li>
                                        <li class="list-inline-item text-warning"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half"></i></li>
                                        <li class="list-inline-item text-success"><i class="fa fa-thumbs-up"></i></li>
                                    </ul>
                                </div>
                                <!-- Creating the container for specify the address of the first institution and link it to the google maps-->
                                <div class="list-location">
                                    <a href="https://www.google.com/maps/place/Cork+English+World/@51.894949,-8.4794481,15z/data=!4m5!3m4!1s0x0:0xb16f13e4f29b1e47!8m2!3d51.894949!4d-8.4794481"><i class="fa fa-map-marker"></i><small> Address: Crawford Business Park, Bishop St, The Lough, Cork</small> </a>
                                </div>
                                <div class="list-description">
                                    <small style="color: #38c93d ">CEW promotes excellence through lifelong learning by providing a high quality range of English Courses to equip students with accredited skills that have international recognition and that are relevant to the present and future workplace.</small>
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

                                <a href="../views/institutionDetails.php">
                                    <button type="button" class="btn btn-outline-primary  ml-4" >Details</button></a>


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
                                <img src="../images/Delfin.jpg" class="img-thumbnail" alt="Card image">
                            </div>
                            <!-- Creating the container for the card body of the first part of the second institution localized -->
                            <div class="col-md-6  card-body">
                                <div class="list-title">
                                    <ul class="list-inline list-unstyled">
                                        <li class="list-inline-item"><a href="https://www.delfinschool.com/en/"><h4>Delfin English School Dublin</h4></a></li>
                                        <li class="list-inline-item text-success"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half"></i></li>
                                        <li class="list-inline-item text-success"><i class="fa fa-thumbs-up"></i></li>
                                    </ul>
                                </div>
                                <div class="list-location">
                                    <a href="https://www.google.com/maps/place/Delfin+English+School+Dublin/@53.353524,-6.261906,15z/data=!4m5!3m4!1s0x0:0xb08e9110344f19e1!8m2!3d53.353524!4d-6.261906"><i class="fa fa-map-marker"></i><small> Address: 2 Parnell Square E, Rotunda, Dublin</small> </a>
                                </div>
                                <div class="list-descrip">
                                    <small style="color: #38c93d"> Delfin English School Dublin is located in Dublin city centre, within walking distance of sites such as The Spire, The River Liffey and Trinity College Dublin and offers a wide range of English language programmes for any budget. </small>
                                </div>
                            </div>
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
        <!-- Creating the container to show up all the institution locate on the search-->
        <div class="row mb-3">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <!-- Creating the container for the second institution localized on the search -->
                        <div class="row">
                            <!-- Creating the container where is going to insert the image -->
                            <div class="col-md-3">
                                <img src="../images/Griffith%20logo%20.png" class="img-thumbnail mt-5" alt="Card image">
                            </div>
                            <!-- Creating the container for the card body of the first part of the third institution localized -->
                            <div class="col-md-6  card-body">
                                <div class="list-title">
                                    <ul class="list-inline list-unstyled">
                                        <li class="list-inline-item"><a href="#"><h4>Griffith Institute of Language</h4></a></li>
                                        <li class="list-inline-item text-warning"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half"></i></li>
                                        <li class="list-inline-item text-success"><i class="fa fa-thumbs-up"></i></li>
                                    </ul>
                                </div>
                                <div class="list-location">
                                    <a href="#"><i class="fa fa-map-marker"></i><small>Address: S Circular Rd, Merchants Quay, Dublin</small> </a>
                                </div>
                                <div class="list-descrip">
                                    <small style="color: #38c93d">Griffith Institute of Language offers English language learning programmes within fun and safe college environments. </small>
                                </div>
                            </div>

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
        <!-- Creating the container to show up all the institution locate on the search-->
        <div class="row mb-3">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <!-- Creating the container for the second institution localized on the search -->
                        <div class="row">
                            <!-- Creating the container where is going to insert the image -->
                            <div class="col-md-3">
                                <img src="../images/Griffith%20logo%20.png" class="img-thumbnail mt-5" alt="Card image">
                            </div>
                            <!-- Creating the container for the card body of the first part of the third institution localized -->
                            <div class="col-md-6  card-body">
                                <div class="list-title">
                                    <ul class="list-inline list-unstyled">
                                        <li class="list-inline-item"><a href="#"><h4>Griffith Institute of Language</h4></a></li>
                                        <li class="list-inline-item text-warning"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half"></i></li>
                                        <li class="list-inline-item text-success"><i class="fa fa-thumbs-up"></i></li>
                                    </ul>
                                </div>
                                <div class="list-location">
                                    <a href="#"><i class="fa fa-map-marker"></i><small>Address: S Circular Rd, Merchants Quay, Dublin</small> </a>
                                </div>
                                <div class="list-descrip">
                                    <small style="color: #38c93d">Griffith Institute of Language offers English language learning programmes within fun and safe college environments. </small>
                                </div>
                            </div>

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

        <!-- Repeating the title of the page, with the number of the search found -->
        <section class="col-md-12 ">
            <!-- Repeating the title of the page, with the number of the search found -->
            <h2 style="color:#38c93d;"> All cities: 85 institutions found </h2>
            <!-- Creating the container to the pagination in case of locate more them possible to show up in one page -->
            <div class="row">
                <div class="col-md-12">
                    <ul class="pagination">
                        <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                </div>
            </div>
        </section>
</div>

<footer class="footer-where-study">
    <!--Include action to load the footer-->
    <?php include ('../views/footer.php') ?>
</footer>
</body>
</html>
