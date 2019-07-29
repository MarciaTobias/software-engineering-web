<!-- marcia-tobias student number 2985044. -->
<!-- lucas-vigarinho student number 2989295. -->

<?php
//Include the main menu with logo.
include ('../views/header.php');
?>

<body>
<div class="container"><!-- container class is used to centered  the body of the browser with some decent width-->
    <div class="row"><!-- row class is used for grid system in Bootstrap-->
        <div class="col-lg-3 col-md-2 "></div>
        <div class="col-sm-12 col-lg-6 col-md-6 col-md-offset-4"><!--col-md-4 is used to create the no of colums in the grid also use for medimum and large devices-->
            <div class="login-panel panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Registration</h3>
                </div>
                <div class="panel-body">
                    <form role="form" method="post" action="registration.php">
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="Username" name="name" type="text" autofocus>
                            </div>

                            <div class="form-group">
                                <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
                            </div>

                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="pass" type="password" value="">
                            </div>

                            <input class="btn btn-lg btn-success btn-block"  type="submit" value="register" name="register">
                        </fieldset>
                    </form>
                    <b>Already registered ?</b> <br></b><a href="login.php">Login here</a><!--for centered text-->
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>

<?php include ('../views/footer.php');

// Connection with database.
include('../files/connect.php');

if($_SERVER['REQUEST_METHOD'] === 'POST')

{
    $username=$_POST['name'];//here getting result from the post array after submitting the form.
    $password=$_POST['pass'];//same
    $email=$_POST['email'];//same

    if($username=='')
    {
        // User cannot create an account without name.
        echo"<script>alert('Please enter the name')</script>";
        exit();//this use if first is not work then other will not show
    }

    // User cannot create an account without password.
    if($password=='')
    {
        echo"<script>alert('Please enter the password')</script>";
        exit();
    }

    // User cannot create an account without email.
    if($email=='')
    {
        echo"<script>alert('Please enter the email')</script>";
        exit();
    }

    //here query check weather if user already registered so can't register again.
    $check_email_query="SELECT * FROM Users WHERE email='$email'";
    $run_query=mysqli_query($mysqli,$check_email_query);

    if(mysqli_num_rows($run_query)>0)
    {
        echo "<script>alert('Email $email has already an account, Please try another one!')</script>";
        exit();
    }

    //insert the user into the database.
    $insert_user="INSERT INTO Users (username,password,email) VALUES ('$username','$password','$email')";
    if(mysqli_query($mysqli,$insert_user))
    {
        echo"<script>window.open('../views/login.php','_self')</script>";
    }
}
?>
