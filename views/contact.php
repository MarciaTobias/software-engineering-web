<!-- Include the header of the main page at about us page-->
<?php include ('../views/header.php'); ?>
<!-- Full page image header with vertically centered content -->
<section class="jumbotron text-center">
    <div class="col-md-12">
        <div class="jumbotron bg-cover text-white"
             style="background-image: linear-gradient(to bottom, rgba(255,255,255,0.6) 0%,rgba(255,255,255,0.9) 100%), url('../images/letter.png')">
            <div class="container">
                <br>
                <h1 class="display-4 text-success">Contact Us</h1>
<!--                <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>-->
<!--                <hr class="my-4">-->
<!--                <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>-->

            </div>
        </div>

    </div>
</section>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header bg-primary text-white">Email
                </div>
                <div class="card-body">
                    <form>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" required>
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea class="form-control" id="message" rows="6" required></textarea>
                        </div>
                        <div class="mx-auto">
                            <button type="submit" class="btn btn-primary text-right">Submit</button></div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-4">
            <div class="card bg-light mb-3">
                <div class="card-header bg-success text-white text-uppercase"><i class="fa fa-home"></i> Address</div>
                <div class="card-body">
                    <p>3 Kildare Street</p>
                    <p>Dublin 2</p>
                    <p>Ireland</p>
                    <p>Email: info@languagfluent.ie</p>
                    <p>Tel. +353 20 913 0469</p>
                    <p>Lucas Mudou</p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include ('../views/footer.php'); ?>


<!-- Include the header of the main page at about us page-->
<?php //include ('../views/header.php'); ?>
<!--<div class="row">-->
<!--    <div class="col-md-12">-->
<!--        <h2>Darken</h2>-->
<!--        <div class="jumbotron bg-cover text-white" style="background-image: linear-gradient(to bottom, rgba(0,0,0,0.6) 0%,rgba(0,0,0,0.6) 100%), url(https://placeimg.com/1000/480/nature)">-->
<!--            <div class="container">-->
<!--                <h1 class="display-4">Hello, world!</h1>-->
<!--                <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>-->
<!--                <hr class="my-4">-->
<!--                <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>-->
<!--                <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>-->
<!--            </div>-->
<!--            <!-- /.container   -->-->
<!--        </div>-->
<!---->
<!--    </div>-->


