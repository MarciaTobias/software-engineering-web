<?php

// allow to store variables to be used in all page.
session_start();

// finishes the section.
session_destroy();

// redirection the user for the main page.
header("Location: ../public/index.php");
