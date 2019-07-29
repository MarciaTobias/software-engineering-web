<!-- marcia-tobias student number 2985044. -->
<!-- lucas-vigarinho student number 2989295. -->

<!-- Script to run the alert button, when user click the submit button. -->
<script>
    function show_alert() {
        alert("Thanks! See you soon!");
    }
</script>

<!-- Include the main menu with logo. -->
<?php include ('../views/header.php'); ?>
<!-- Header with a centered image. -->
<header class="masthead-about col-12">
    <!-- Container to center the image. -->
    <header class="container-about align-items-center">
        <img class="img-contact" src="../images/students-computer.jpg" alt="students-at-computer">
    </header>
    <!-- Container with a form and details about the company (address, telephone, email).-->
    <div class="container mt-3">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header text-white email">Email
                    </div>
                    <div class="card-body">
                        <!-- Wrap for the form with php action. -->
                        <!-- All labels has validation.-->
                        <form method="post" action="../files/contactForm.php">
                            <!-- First item for the form, name, with placeholder. -->
                            <label class="formName" for="name">Name</label>
                            <input type="text" class="form-control" name="name" aria-describedby="emailHelp"
                                   placeholder="Enter name" required>
                            <!-- Second item for the form, email, with placeholder. -->
                            <label class="formEmail pt-3" for="email">Email address</label>
                            <input type="email" class="form-control" name="email" aria-describedby="emailHelp"
                                   placeholder="Enter email" required>
                            <!-- Message for the user about the privace of their data. -->
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email
                                with anyone else.</small>
                            <!-- Third item for the form, message. -->
                            <label class="formMessage pt-5" for="message">Message</label>
                            <textarea class="form-control" name="message" rows="6" required></textarea>
                            <!-- Button to submit the form with pop alert. -->
                            <input class="btn text-right text-white submit" type="submit" type="submit"
                                   onclick="show_alert()" name="button" value="Submit">
                        </form>
                    </div>
                </div>
            </div>
            <!-- Second box with details to contact the company and how will display at different size of media. -->
            <div class="col-12 col-md-4">
                <div class="card bg-white mb-3">
                    <div class="card-header text-white address"></i> Address</div>
                    <div class="card-body text-secondary text-left">
                        <p>3 Kildare Street</p>
                        <p>Dublin 2</p>
                        <p>Ireland</p>
                        <p>Email: info@languagfluent.ie</p>
                        <p>Tel. +353 20 913 0469</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!--Include action to load the footer-->
<footer class="footer-contact">
    <?php include ('../views/footer.php'); ?>
</footer>
</body>
</html>
