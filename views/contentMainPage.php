<!-- marcia-tobias student number 2985044. -->
<!-- lucas-virgarinho student number 2989295. -->

<!-- Full page image header with vertically centered content. -->
<body class="masthead pt-5 mt-5">
<header class="container col-12">
    <img class="img-ireland" src="../images/GettyImages2.jpg" alt="ireland" >
    <div class="centered">
        <h1 class="font-weight-bold">Study English in Ireland</h1>
        <hr>
        <!-- PHP to print the phrase above the title. -->
        <?php
        echo 'And check experiences from others students!';
        ?>
    </div>
</header>
<!-- Section with icons insight of a fluid container. Buttons to navigate in the page. -->
<section class="container-fluid container">
    <section class="row icons">
        <!-- From small to medium size, cards will use 4 columns, for large and above 3 columns. -->
        <section class="col-sm-6 col-md-6 col-lg-3">
            <!-- Card with border whit and background with the same color of the icon. -->
            <section class="card border-white icon-blackboard">
                <div class="card-body">
                    <img class="card-img-top" src="../images/blackboard.png" alt="icon-blackboard">
                    <div class="card-body">
                        <a href="../views/whereStudy.php">
                            <button type="button" class="btn btn-lg btn-success">Where to Study</button></a>
                    </div>
                </div>
            </section>
        </section>
        <!-- From small to medium size, cards will use 4 columns, for large and above 3 columns. -->
        <div class="col-sm-6 col-md-6 col-lg-3">
            <!-- Card with border whit and background with the same color of the icon. -->
            <div class="card border-white icon-home">
                <div class="card-body">
                    <img class="card-img-top" src="../images/home.png" alt="icon-home">
                    <div class="card-body">
                        <a href="../views/inConstruction.php">
                            <button type="button" class="btn btn-lg btn-secondary">Living in Ireland</button></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- From small to medium size, cards will use 4 columns, for large and above 3 columns. -->
        <div class="col-sm-6 col-md-6 col-lg-3">
            <!-- Card with border whit and background with the same color of the icon. -->
            <div class="card border-white icon-search">
                <div class="card-body">
                    <img class="card-img-top" src="../images/search.png" alt="icon-search">
                    <div class="card-body">
                        <a href="../views/inConstruction.php">
                            <button type="button" class="btn btn-lg btn-info">Research</button></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- From small to medium size, cards will use 4 columns, for large and above 3 columns. -->
        <div class="col-sm-6 col-md-6 col-lg-3">
            <!-- Card with border whit and background with the same color of the icon. -->
            <div class="card border-white icon-team">
                <div class="card-body">
                    <img class="card-img-top" src="../images/teamwork.png" alt="icon-team">
                    <div class="card-body">
                        <a href="../views/aboutUs.php">
                            <button type="button" class="btn btn-lg btn-warning">About Us</button></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>
</body>
