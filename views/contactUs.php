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
    <!-- Header with a centered image. -->
    <header class="masthead-about col-12">
        <!-- Container to center the image. -->
        <header class="container-about col-12 align-items-center">
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
                            <!-- Wrap for the form. -->
                            <form>
                                <!-- First item for the form, name, with placeholder. -->
                                <form class="form-group">
                                    <label class="label-about" for="name">Name</label>
                                    <input type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter name" required>
                                </form>
                                <!-- Second item for the form, email, with placeholder. -->
                                <form class="form-group pt-4">
                                    <label for="email">Email address</label>
                                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" required>
                                    <!-- Message for the user about the privace of their data. -->
                                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                </form>
                                <form class="form-group">
                                    <!-- Third item for the form, message. -->
                                    <label for="message">Message</label>
                                    <textarea class="form-control" id="message" rows="6" required></textarea>
                                </form>
                                <div class="mx-auto">
                                    <!-- Button to submit the form. -->
                                    <button type="submit" class="btn text-right submit text-white">Submit</button></div>
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
