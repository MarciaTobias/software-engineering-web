<!-- marcia-tobias student number 2985044. -->
<!-- lucas-vigarinho student number 2989295. -->

<!-- Creating a container to insert the necessary boxes of containers -->
<div class="row mx-0 py-3">
    <!-- Create a container of the container list-group class, to involve the boxes -->
    <div id="list-example" class="list-group col-3">
        <!-- Creating the first block as a disable button, to name the boxes as a Reviews -->
        <button class="list-group-item text-danger" disabled><em>Reviews</em></button>
        <!-- defining the 5 stars blocks, one by one below, linking to the correspondent block of reviews -->
        <a class="list-group-item list-group-item-action list-group-item-warning d-flex justify-content-between align-items-center" href="#list-item-1">5 stars <span class="badge badge-danger badge-pill">2</span></a>
        <a class="list-group-item list-group-item-action list-group-item-warning d-flex justify-content-between align-items-center" href="#list-item-2">4 stars <span class="badge badge-danger badge-pill">2</span></a>
        <a class="list-group-item list-group-item-action list-group-item-warning d-flex justify-content-between align-items-center" href="#list-item-3">3 stars <span class="badge badge-danger badge-pill">2</span></a>
        <a class="list-group-item list-group-item-action list-group-item-warning d-flex justify-content-between align-items-center" href="#list-item-4">2 stars <span class="badge badge-danger badge-pill">2</span></a>
        <a class="list-group-item list-group-item-action list-group-item-warning d-flex justify-content-between align-items-center" href="#list-item-5">1 stars <span class="badge badge-danger badge-pill">2</span></a>
    </div>
    <!-- Creating the evolution of the reviews view method, keeping the page in a certain size, specified in here, as 19em of height  -->
    <div data-spy="scroll" data-target="#list-example" data-offset="0" class="scrollspy-example col-9" style="position: relative; height: 19em; overflow: auto;">

        <!-- Naming the first item of the list, starting with the 5 stars reviews. -->
        <h5 id="list-item-1"  class="text-danger"><em>Reviews - </em> 5 stars</h5>
        <!-- Creating a container to define the limits of the box list, for the 5 stars reviews -->
        <div class="container">
            <!-- create a container class row to give the possibility of expand if necessary in the future -->
            <div class="row">
                <!-- Creating the container defining the columns for each display size -->
                <div class="col-lg-12 col-md-12 col-sm12">
                    <!-- Making a mark of the trace, dividing title and reviews -->
                    <hr/>
                    <!-- Creating the container of the first review, utilizing the review-block class -->
                    <div class="review-block">
                        <!-- Creating a container for the first side, the right side of the review block -->
                        <div class="row">
                            <!-- Creating the container of the right side of the review block and its content, defining size for all display sizes -->
                            <div class="col-sm-3 col-md-3 col-lg-3">
                                <img src="../images/elvis.png" class="img-rounded" alt="img_user1">
                                <div class="review-block-name"><a href="#">Elvis</a></div>
                                <div class="review-block-date">January 29, 2016<br/>1 day ago</div>
                            </div>
                            <!-- Creating the container of the left side of the review block and its content, defining size for all display sizes -->
                            <div class="col-lg-9 col-md-9 col-sm-9">
                                <!-- Creating the container to insert in the ranking review, utilizing buttons of  -->
                                <div class="review-block-rate">
                                    <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                    </button>
                                    <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                    </button>
                                    <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                    </button>
                                    <button type="button" class="btn btn-warning  btn-xs " aria-label="Left Align">
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                    </button>
                                    <button type="button" class="btn btn-warning btn-xs " aria-label="Left Align">
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                    </button>
                                </div>
                                <!-- Creating a container to show the info describe by the user in a text field -->
                                <div class="review-block-title" style="color:#262626;">this was nice in buy</div>
                                <div class="review-block-description" style="color:#262626;">this was nice in buy. this was nice in buy. this was nice in buy. this was nice in buy this was nice in buy this was nice in buy this was nice in buy this was nice in buy</div>
                            </div>
                        </div>
                        <hr/>
                        <!-- Creating a container for the first side, the right side of the review block -->
                        <div class="row">
                            <!-- Creating the container of the right side of the review block and its content, defining size for all display sizes -->
                            <div class="col-sm-3 col-md-3 col-lg-3">
                                <img src="../images/taylor.png" class="img-rounded" alt="img_user2">
                                <div class="review-block-name"><a href="#">Juan</a></div>
                                <div class="review-block-date">January 29, 2016<br/>1 day ago</div>
                            </div>
                            <!-- Creating the container of the left side of the review block and its content, defining size for all display sizes -->
                            <div class="col-lg-9 col-md-9 col-sm-9">
                                <!-- Creating the container to insert in the ranking review, utilizing buttons of  -->
                                <div class="review-block-rate">
                                    <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                    </button>
                                    <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                    </button>
                                    <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                    </button>
                                    <button type="button" class="btn btn-warning  btn-xs " aria-label="Left Align">
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                    </button>
                                    <button type="button" class="btn btn-warning btn-xs " aria-label="Left Align">
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                    </button>
                                </div>
                                <!-- Creating a container to show the info describe by the user in a text field -->
                                <div class="review-block-title" style="color:#262626;">this was nice in buy</div>
                                <div class="review-block-description" style="color:#262626;">this was nice in buy. this was nice in buy. this was nice in buy. this was nice in buy this was nice in buy this was nice in buy this was nice in buy this was nice in buy</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div> <!-- /container -->

        <!-- Naming the first item of the list, starting with the 4 stars reviews. -->
        <h5 id="list-item-2" class="text-danger"><em>Reviews - </em> 4 stars</h5>
        <!-- Creating a container to define the limits of the box list, for the 4 stars reviews -->
        <div class="container">
            <!-- create a container class row to give the possibility of expand if necessary in the future -->
            <div class="row">
                <!-- Creating the container defining the columns for each display size -->
                <div class="col-lg-12 col-md-12 col-sm12">
                    <hr/>
                    <!-- Creating the container of the first review, utilizing the review-block class -->
                    <div class="review-block">
                        <!-- Creating a container for the first side, the right side of the review block -->
                        <div class="row">
                            <!-- Creating the container of the right side of the review block and its content, defining size for all display sizes -->
                            <div class="col-sm-3 col-md-3 col-lg-3">
                                <img src="../images/taylor.png" class="img-rounded" alt="img_user3">
                                <div class="review-block-name"><a href="#">Taylor</a></div>
                                <div class="review-block-date">January 29, 2016<br/>1 day ago</div>
                            </div>
                            <!-- Creating the container of the left side of the review block and its content, defining size for all display sizes -->
                            <div class="col-lg-9 col-md-9 col-sm-9">
                                <!-- Creating the container to insert in the ranking review, utilizing buttons of  -->
                                <div class="review-block-rate">
                                    <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                    </button>
                                    <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                    </button>
                                    <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                    </button>
                                    <button type="button" class="btn btn-warning  btn-xs " aria-label="Left Align">
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                    </button>
                                    <button type="button" class="btn btn-secondary btn-xs  " aria-label="Left Align" disabled>
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                    </button>
                                </div>
                                <!-- Creating a container to show the info describe by the user in a text field -->
                                <div class="review-block-title" style="color:#262626;">this was nice in buy</div>
                                <div class="review-block-description" style="color:#262626;">this was nice in buy. this was nice in buy. this was nice in buy. this was nice in buy this was nice in buy this was nice in buy this was nice in buy this was nice in buy</div>
                            </div>
                        </div>
                        <hr/>
                        <!-- Creating a container for the first side, the right side of the review block -->
                        <div class="row">
                            <!-- Creating the container of the right side of the review block and its content, defining size for all display sizes -->
                            <div class="col-sm-3 col-md-3 col-lg-3">
                                <img src="../images/carmem.png" class="img-rounded" alt="img_user4">
                                <div class="review-block-name"><a href="#">Carmem</a></div>
                                <div class="review-block-date">January 29, 2016<br/>1 day ago</div>
                            </div>
                            <!-- Creating the container of the left side of the review block and its content, defining size for all display sizes -->
                            <div class="col-lg-9 col-md-9 col-sm-9">
                                <!-- Creating the container to insert in the ranking review, utilizing buttons of  -->
                                <div class="review-block-rate">
                                    <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                    </button>
                                    <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                    </button>
                                    <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                    </button>
                                    <button type="button" class="btn btn-warning  btn-xs " aria-label="Left Align">
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                    </button>
                                    <button type="button" class="btn btn-secondary btn-xs " aria-label="Left Align" disabled>
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                    </button>
                                </div>
                                <!-- Creating a container to show the info describe by the user in a text field -->
                                <div class="review-block-title" style="color:#262626;">this was nice in buy</div>
                                <div class="review-block-description" style="color:#262626;">this was nice in buy. this was nice in buy. this was nice in buy. this was nice in buy this was nice in buy this was nice in buy this was nice in buy this was nice in buy</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div> <!-- /container -->
        <!-- Naming the first item of the list, starting with the 3 stars reviews. -->
        <h5 id="list-item-3" class="text-danger"><em>Reviews - </em> 3 stars</h5>
        <!-- Creating a container to define the limits of the box list, for the 3 stars reviews -->
        <div class="container">
            <!-- create a container class row to give the possibility of expand if necessary in the future -->
            <div class="row">
                <!-- Creating the container defining the columns for each display size -->
                <div class="col-lg-12 col-md-12 col-sm12">
                    <hr/>
                    <!-- Creating the container of the first review, utilizing the review-block class -->
                    <div class="review-block">
                        <!-- Creating a container for the first side, the right side of the review block -->
                        <div class="row">
                            <!-- Creating the container of the right side of the review block and its content, defining size for all display sizes -->
                            <div class="col-sm-3 col-md-3 col-lg-3">
                                <img src="../images/wood.png" class="img-rounded" alt="img_user5">
                                <div class="review-block-name"><a href="#">Wood</a></div>
                                <div class="review-block-date">January 29, 2016<br/>1 day ago</div>
                            </div>
                            <!-- Creating the container of the left side of the review block and its content, defining size for all display sizes -->
                            <div class="col-lg-9 col-md-9 col-sm-9">
                                <!-- Creating the container to insert in the ranking review, utilizing buttons of  -->
                                <div class="review-block-rate">
                                    <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                    </button>
                                    <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                    </button>
                                    <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                    </button>
                                    <button type="button" class="btn btn-secondary  btn-xs " aria-label="Left Align" disabled>
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                    </button>
                                    <button type="button" class="btn btn-secondary btn-xs " aria-label="Left Align" disabled>
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                    </button>
                                </div>
                                <!-- Creating a container to show the info describe by the user in a text field -->
                                <div class="review-block-title" style="color:#262626;">this was nice in buy</div>
                                <div class="review-block-description" style="color:#262626;">this was nice in buy. this was nice in buy. this was nice in buy. this was nice in buy this was nice in buy this was nice in buy this was nice in buy this was nice in buy</div>
                            </div>
                        </div>
                        <hr/>
                        <!-- Creating a container for the first side, the right side of the review block -->
                        <div class="row">
                            <!-- Creating the container of the right side of the review block and its content, defining size for all display sizes -->
                            <div class="col-sm-3 col-md-3 col-lg-3">
                                <img src="../images/freja.png" class="img-rounded" alt="img_user6">
                                <div class="review-block-name"><a href="#">Freja</a></div>
                                <div class="review-block-date">January 29, 2016<br/>1 day ago</div>
                            </div>
                            <!-- Creating the container of the left side of the review block and its content, defining size for all display sizes -->
                            <div class="col-lg-9 col-md-9 col-sm-9">
                                <!-- Creating the container to insert in the ranking review, utilizing buttons of  -->
                                <div class="review-block-rate">
                                    <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                    </button>
                                    <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                    </button>
                                    <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                    </button>
                                    <button type="button" class="btn btn-secondary  btn-xs " aria-label="Left Align" disabled>
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                    </button>
                                    <button type="button" class="btn btn-secondary btn-xs " aria-label="Left Align" disabled>
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                    </button>
                                </div>
                                <!-- Creating a container to show the info describe by the user in a text field -->
                                <div class="review-block-title" style="color:#262626;">this was nice in buy</div>
                                <div class="review-block-description" style="color:#262626;">this was nice in buy. this was nice in buy. this was nice in buy. this was nice in buy this was nice in buy this was nice in buy this was nice in buy this was nice in buy</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div> <!-- /container -->
        <!-- Naming the first item of the list, starting with the 2 stars reviews. -->
        <h5 id="list-item-4" class="text-danger"><em>Reviews - </em> 2 stars</h5>
        <!-- Creating a container to define the limits of the box list, for the 2 stars reviews -->
        <div class="container">
            <!-- create a container class row to give the possibility of expand if necessary in the future -->
            <div class="row">
                <!-- Creating the container defining the columns for each display size -->
                <div class="col-lg-12 col-md-12 col-sm12">
                    <hr/>
                    <!-- Creating the container of the first review, utilizing the review-block class -->
                    <div class="review-block">
                        <!-- Creating a container for the first side, the right side of the review block -->
                        <div class="row">
                            <!-- Creating the container of the right side of the review block and its content, defining size for all display sizes -->
                            <div class="col-sm-3 col-md-3 col-lg-3">
                                <img src="../images/joSoares.png" class="img-rounded" alt="img_user7">
                                <div class="review-block-name"><a href="#">JoSoares</a></div>
                                <div class="review-block-date">January 29, 2016<br/>1 day ago</div>
                            </div>
                            <!-- Creating the container of the left side of the review block and its content, defining size for all display sizes -->
                            <div class="col-lg-9 col-md-9 col-sm-9">
                                <!-- Creating the container to insert in the ranking review, utilizing buttons of  -->
                                <div class="review-block-rate">
                                    <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                    </button>
                                    <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                    </button>
                                    <button type="button" class="btn btn-secondary btn-xs" aria-label="Left Align" disabled>
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                    </button>
                                    <button type="button" class="btn btn-secondary  btn-xs " aria-label="Left Align" disabled>
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                    </button>
                                    <button type="button" class="btn btn-secondary btn-xs " aria-label="Left Align" disabled>
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                    </button>
                                </div>
                                <!-- Creating a container to show the info describe by the user in a text field -->
                                <div class="review-block-title" style="color:#262626;">this was nice in buy</div>
                                <div class="review-block-description" style="color:#262626;">this was nice in buy. this was nice in buy. this was nice in buy. this was nice in buy this was nice in buy this was nice in buy this was nice in buy this was nice in buy</div>
                            </div>
                        </div>
                        <hr/>
                        <!-- Creating a container for the first side, the right side of the review block -->
                        <div class="row">
                            <!-- Creating the container of the right side of the review block and its content, defining size for all display sizes -->
                            <div class="col-sm-3 col-md-3 col-lg-3">
                                <img src="../images/eric.png" class="img-rounded" alt="img_user8">
                                <div class="review-block-name"><a href="#">Eric</a></div>
                                <div class="review-block-date">January 29, 2016<br/>1 day ago</div>
                            </div>
                            <!-- Creating the container of the left side of the review block and its content, defining size for all display sizes -->
                            <div class="col-lg-9 col-md-9 col-sm-9">
                                <!-- Creating the container to insert in the ranking review, utilizing buttons of  -->
                                <div class="review-block-rate">
                                    <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                    </button>
                                    <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                    </button>
                                    <button type="button" class="btn btn-secondary btn-xs" aria-label="Left Align" disabled>
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                    </button>
                                    <button type="button" class="btn btn-secondary  btn-xs " aria-label="Left Align" disabled>
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                    </button>
                                    <button type="button" class="btn btn-secondary btn-xs " aria-label="Left Align" disabled>
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                    </button>
                                </div>
                                <!-- Creating a container to show the info describe by the user in a text field -->
                                <div class="review-block-title" style="color:#262626;">this was nice in buy</div>
                                <div class="review-block-description" style="color:#262626;">this was nice in buy. this was nice in buy. this was nice in buy. this was nice in buy this was nice in buy this was nice in buy this was nice in buy this was nice in buy</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div> <!-- /container -->
        <!-- Naming the first item of the list, starting with the 1 stars reviews. -->
        <h5 id="list-item-5" class="text-danger"><em>Reviews - </em> 1 stars</h5>
        <!-- Creating a container to define the limits of the box list, for the 1 stars reviews -->
        <div class="container">
            <!-- create a container class row to give the possibility of expand if necessary in the future -->
            <div class="row">
                <!-- Creating the container defining the columns for each display size -->
                <div class="col-lg-12 col-md-12 col-sm12">
                    <hr/>
                    <!-- Creating the container of the first review, utilizing the review-block class -->
                    <div class="review-block">
                        <!-- Creating a container for the first side, the right side of the review block -->
                        <div class="row">
                            <!-- Creating the container of the right side of the review block and its content, defining size for all display sizes -->
                            <div class="col-sm-3 col-md-3 col-lg-3">
                                <img src="../images/joelma.png" class="img-rounded" alt="img_user9">
                                <div class="review-block-name"><a href="#">Joelma</a></div>
                                <div class="review-block-date">January 29, 2016<br/>1 day ago</div>
                            </div>
                            <!-- Creating the container of the left side of the review block and its content, defining size for all display sizes -->
                            <div class="col-lg-9 col-md-9 col-sm-9">
                                <!-- Creating the container to insert in the ranking review, utilizing buttons of  -->
                                <div class="review-block-rate">
                                    <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                    </button>
                                    <button type="button" class="btn btn-secondary btn-xs" aria-label="Left Align" disabled>
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                    </button>
                                    <button type="button" class="btn btn-secondary btn-xs" aria-label="Left Align" disabled>
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                    </button>
                                    <button type="button" class="btn btn-secondary  btn-xs " aria-label="Left Align" disabled>
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                    </button>
                                    <button type="button" class="btn btn-secondary btn-xs " aria-label="Left Align" disabled>
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                    </button>
                                </div>
                                <!-- Creating a container to show the info describe by the user in a text field -->
                                <div class="review-block-title" style="color:#262626;">this was nice in buy</div>
                                <div class="review-block-description" style="color:#262626;">this was nice in buy. this was nice in buy. this was nice in buy. this was nice in buy this was nice in buy this was nice in buy this was nice in buy this was nice in buy</div>
                            </div>
                        </div>
                        <hr/>
                        <!-- Creating a container for the first side, the right side of the review block -->
                        <div class="row">
                            <!-- Creating the container of the right side of the review block and its content, defining size for all display sizes -->
                            <div class="col-sm-3 col-md-3 col-lg-3">
                                <img src="../images/nelson.png" class="img-rounded" alt="img_user10">
                                <div class="review-block-name"><a href="#">Nelson</a></div>
                                <div class="review-block-date">January 29, 2016<br/>1 day ago</div>
                            </div>
                            <!-- Creating the container of the left side of the review block and its content, defining size for all display sizes -->
                            <div class="col-lg-9 col-md-9 col-sm-9">
                                <!-- Creating the container to insert in the ranking review, utilizing buttons of  -->
                                <div class="review-block-rate">
                                    <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                    </button>
                                    <button type="button" class="btn btn-secondary btn-xs" aria-label="Left Align" disabled>
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                    </button>
                                    <button type="button" class="btn btn-secondary btn-xs" aria-label="Left Align" disabled>
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                    </button>
                                    <button type="button" class="btn btn-secondary  btn-xs " aria-label="Left Align" disabled>
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                    </button>
                                    <button type="button" class="btn btn-secondary btn-xs " aria-label="Left Align" disabled>
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                    </button>
                                </div>
                                <!-- Creating a container to show the info describe by the user in a text field -->
                                <div class="review-block-title" style="color:#262626;">this was nice in buy</div>
                                <div class="review-block-description" style="color:#262626;">this was nice in buy. this was nice in buy. this was nice in buy. this was nice in buy this was nice in buy this was nice in buy this was nice in buy this was nice in buy</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div> <!-- /container -->

    </div>
</div> <!-- class row mx-0 -->