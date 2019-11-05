<!--CSS Code for empty Username or Password-->


<?php
    session_start();
    $errUsername = null;
    $errPassword = null;
    $errInvalid = null;
    if(isset($_POST['submit']))
    {
        $uname = $_POST['Username'];
        $pass = $_POST['Password'];
       
        if(empty($uname) == true)
        {
            
           $errUsername =   "<div class=\"errMsg\">Empty Username </div>";
           
        }
        else
        {
            if(empty($pass) == true)
            {
                $errPassword =   "<div class=\"errMsg\">Empty Password </div>";
            }
            else
            {
                if($uname == "Nazib" && $pass == "002")  //For Admin Login
                {
                    $_SESSION['Username'] = $uname;
                    $_SESSION['Password'] == $pass;
                    header('location:Admin.php');
                }
                if($uname == $pass)  //For Students Login
                {
                    $_SESSION['Username'] = $uname;
                    $_SESSION['Password'] = $pass;
                    header('location:Home.php');
                }

                if($uname == "Faculty" && $pass == "123") //For Faculty Login
                {
                    $_SESSION['Username'] = $uname;
                    $_SESSION['Password'] = $pass;
                    header('location:FacultyHome.php');
                }

                if($uname == "Alumni" && $pass == "333") //For Alumni
                {
                    $_SESSION['Username'] = $uname;
                    $_SESSION['Password'] = $pass;
                    header('location:AlumniHome.php');
                }
                else
                {
                    $errInvalid = "<div class=\"invalid_User_Pass\">Invalid Username or Password</div>";
                }
            }
        }
        
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="Stylesheet" href="App.css">
    <title>Login</title>
    <!--Background Image CSS-->
    <style type="text/css">
        body
        {
            background-image: url(bg.jpg);
            background-size: cover;
        }
    </style>
</head>
<body>
    <table border="0" class="table" width="320px" height="400px">
        <form method="POST" action="#">
        <tr>
            <td>
                <center>
                    <h3><u>USER LOGIN</u></h3>
                </center>
            </td>
        </tr>
        <tr>  
            <td>
                <input type="text" class="login-input" placeholder="Username" name="Username"> <?php echo $errUsername ?>
            </td>
            
        </tr>
        <tr>
            <td>
                <input type="password" class="login-input" placeholder="Password" name="Password" > <?php echo $errPassword ?>
            </td>
        </tr>
        <tr>
            <td>
                <input type="submit" value="Login" class="login-button" name="submit">
            </td>
        </tr>
        <tr>
            <td>
                <center>
                    <?php echo $errInvalid ?>
                </center>
            </td>
        </tr>
        <tr>
            <td>
                <center>
                    <a href="#" class="login-link">Forgot Password?</a>
                </center>
            </td>
        </tr>
        <tr>
            <td>
                <center>
                    <a href="Registration.php" class="login-link">Create Account</a>
                </center>
            </td>
        </tr>
        
    </form>
    </table>
</body>
</html>