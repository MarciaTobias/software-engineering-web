<!-- marcia.tobias student number 2985044 -->
<!-- lucas.virgarinho student number -->

<!-- Is an instruction to the browser about what version of html the page is written in
That declaration must be the very first thing in your HTML document, even before the HTML tag. -->
<!DOCTYPE html>
<!-- That tag specifies the language code english. -->
<html lang="en">
    <!-- Full page image header with vertically centered content -->
    <header class="masthead">
        <div class="container col-12 align-items-center h-100">
            <img src="../images/GettyImages2.jpg" alt="Snow" >
            <div class="centered">
                <h1 class="font-weight-bold">Study English in Ireland</h1>
                <hr>
                <!-- PHP to print the phrase above the title -->
                <?php
                echo 'And check experiences from others students!';
                ?>
            </div>
        </div>
    </header>
<!-- Section with images and links to others pages of the this website -->
<section class="home_page">
    <section class="container">
        <div class="card-deck row-1">
            <div class="card col-md-6 border-white style="colour: #73d658">
                <img class="card-img-top" src="../images/blackboard.png" alt="blackboard">
                <div class="card-body">
                    <button type="button" class="btn btn-lg btn-success">Where to Study</button>
                </div>
            </div>
            <div class="card col-md-6 bg-transparent border-white">
                <img class="card-img-top" src="../images/home.png" alt="home">
                <div class="card-body">
                    <button type="button" class="btn btn-lg btn-secondary">Living in Ireland</button>
                </div>
            </div>
            <div class="card col-md-6 bg-transparent border-white">
                <img class="card-img-top" src="../images/search.png" alt="search">
                <div class="card-body">
                    <button type="button" class="btn btn-lg btn-info">Research</button>
                </div>
            </div>
            <div class="card col-md-6 bg-transparent border-white">
                <img class="card-img-top" src="../images/teamwork.png" alt="team">
                <div class="card-body">
                    <button type="button" class="btn btn-lg btn-warning">About Us</button>
                </div>
            </div>
        </div>
    </section>
</section>
</html>