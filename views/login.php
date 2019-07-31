<?php
session_start();//session starts here
//Include the main menu with logo.
include ('../views/header.php');
?>

<html>
<body>
<div class="container ">
    <div class="row">
        <div class="col-lg-3 col-md-2 "></div>
        <div class="col-md-4 col-lg-6 col-md-offset-4">
            <div class="login-panel panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Log In</h3>
                </div>
                <div class="panel-body">
                    <form role="form" method="post" action="login.php">
                        <fieldset>
                            <div class="form-group"  >
                                <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="pass" type="password" value="">
                            </div>
                            <input class="btn btn-lg btn-success btn-block" type="submit" value="login" name="login">
                            <!-- Change this to a button or input when using this as a form -->
                            <!--  <a href="index.html" class="btn btn-lg btn-success btn-block">Login</a> -->
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>

<div style="padding-top: 250px;">
<?php include ('../views/footer.php');?>
</div>

<?php
// Connection with database.
include('../files/connect.php');

if(isset($_POST['login']))
{
    $email=$_POST['email'];
    $password=$_POST['pass'];

    $check_user="select * from Users WHERE email='$email'AND password='$password'";

    $run=mysqli_query($mysqli,$check_user);

    if(mysqli_num_rows($run))
    {
        echo "<script>window.open('../public/index.php','_self')</script>";

        $_SESSION['email']=$email;//here session is used and value of $user_email store in $_SESSION.

    }
    else
    {
        echo "<script>alert('Email or password is incorrect!')</script>";
    }
}
?>
