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
        <header class="masthead-about">
        <!-- Container to center the image. -->
        <header class="container-about col-sm-12 align-items-center">
            <img class="img-about" src="../images/student-hero.jpg" alt="students">
            <header class="card border-0 mx-5 px-2 pt-3">
                <!-- Card text to include the text below the picture. -->
                <header class="card-body">
                    <h4 class="card-title text-dark text-left about">About Us</h4>
                    <p class="card-text text-dark text-left">We are focused on opening a channel among people who study at
                    institutions or have studied, with people who have the interest to study and for this are seeking
                    more information.<br> Everyone has the right to answer the questionnaire about the
                    any institution in Ireland.</p>
                </header>
            </header>
        </header>
    </body>
<footer class="footer-about">
    <!--Include action to load the footer-->
    <?php include ('../views/footer.php'); ?>
</footer>
</html>
