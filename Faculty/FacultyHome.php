<?php
    session_start();
    if(isset($_SESSION['Username']))
    {

        if(isset($_POST['btnProfile']))
        {
            header('location:FProfile.php');
        }
        if(isset($_POST['btnTimeLine']))
        {
            header('location:FTimeLine.php');
        }
        if(isset($_POST['btnChat']))
        {
            header('location:FChat.php');
        }
        if(isset($_POST['btnLogout']))
        {
            header('location:Logout.php');
        }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="App.css">
    <link rel="stylesheet" href="Admin.css">
    <title>Home</title>
</head>
<body class="body-margin">
    <form action="#" method="POST">
    <table border="0" width="100%">
        <tr class="Profile-Header">
            <td width=25%>
                <center>
                    <h3><?=$_SESSION['Username'] ?></h3>
                </center>
            </td>
            <td>
                <center>
                    <button class="profile-HeaderButton">Home</button>
                    
                    <button class="profile-HeaderButton" name="btnProfile">Profile</button>
                    <button class="profile-HeaderButton" name="btnTimeLine">TimeLine</button>
                    <button class="profile-HeaderButton" name="btnChat">Chat</button>
                    <button class="profile-HeaderButton" name="btnLogout">Logout</button>
                    </center>
                    
            </td>
            <td width=25%>
                <input type="search" class="searchBox" name="txtsearch" placeholder="Search...">
            </td>
        </tr>
        <tr>
            <td colspan="3">
                <center>
                    <button class="btnPost" name="btnAllPost">All Post</button>
                    <button class="btnPost" name="btnFacultyPost">FacultyPost</button>
                    <button class="btnPost" name="btnAlumniPost">AlumniPost</button>
                    <button class="btnPost" name="btnStudentPost">StudentPost</button>
                </center>
            </td>
        </tr>

    </table>
    </form>
<?php
    }
    else
    {
        header('location:Login.php');
    }
    if(isset($_POST['btnFacultyPost']))  //Faculty Post
    {
?>

    <center>
        <table border="0" width="50%">
            <tr>
                <td>
                    <center>
                        <h3>Faculty Posts</h3>
                        <hr>
                    </center>
                </td>
            </tr>
            <tr>
                <td>
                    <h3>MD Al Amin</h3>
                    <i>1st Nov.19</i>
                    <p>
                        Good<br>
                        Job<br>
                        
                    </p>
                    <center>
                        <button class="profile-HeaderButton">1 Likes</button>
                    </center>
                </td>
            </tr>
            <tr>
                <td>
                    <hr>
                </td>
            </tr>

            <tr>
                <td>
                    <h3>Niloy</h3>
                    <i>1st Nov. 19</i>
                    <p>
                        <img src="NiloySir.png" height="300px" width="80%">
                    </p>
                    <center>
                        <button class="profile-HeaderButton">30 Likes</button>
                    </center>
                </td>
            </tr>
            <tr>
                <td>
                    <hr>
                </td>
            </tr>

            <tr>
                <td>
                    <h3>Mushfiqur</h3>
                    <i>1st Nov. 19</i>
                    <p>
                        <img src="c1.png" height="300px" width="80%">
                    </p>
                    <center>
                        <button class="profile-HeaderButton">20 Likes</button>
                    </center>
                </td>
            </tr>
            <tr>
                <td>
                    <hr>
                </td>
            </tr>

            <tr>
                <td>
                    <h3>Niloy</h3>
                    <i>31th Oct. 19</i>
                    <p>
                       aaaa<br>
                        aaaav<br>
                        aaaaaaaaaaaa<br>
                        
                    </p>
                    <center>
                        <button class="profile-HeaderButton">60 Likes</button>
                    </center>
                </td>
            </tr>
            <tr>
                <td>
                    <hr>
                </td>
            </tr>

        
            <tr>
                <td>
                    <h3>Mushfiqur</h3>
                    <i>30th Oct. 19</i><br>
                        <video controls>
                            <source src="m.mp4" type="video/mp4">
                        </video>
                    <center>
                        <button class="profile-HeaderButton">35 Likes</button>
                    </center>
                </td>
            </tr>
            <tr>
                <td>
                    <hr>
                </td>
            </tr>
        </table>
    </center>
<?php
    }
    elseif(isset($_POST['btnAlumniPost']))  //Alumni Post
    {
?>
<html>
    <body>
    <center>
        <table border="0" width="50%">
            <tr>
                <td>
                    <center>
                        <h3>Alumni Posts</h3>
                        <hr>
                    </center>
                </td>
            </tr>
            <tr>
                <td>
                    <h3>Hasib Ahmed</h3>
                    <i>1st Nov. 19</i> <br>
                    <video controls>
                        <source src="m.mp4" type="video/mp4">
                    </video>
                    <center>
                        <button class="profile-HeaderButton">2000 Likes</button>
                    </center>
                </td>
            </tr>
            <tr>
                <td>
                    <hr>
                </td>
            </tr>

            <tr>
                <td>
                    <h3>Mushfiqur</h3>
                    <i>1st Nov. 19</i>
                    <p>
                        <img src="p1.jpg" height="300px" width="80%">
                    </p>
                    <center>
                        <button class="profile-HeaderButton">111 Likes</button>
                    </center>
                </td>
            </tr>
            <tr>
                <td>
                    <hr>
                </td>
            </tr>

            <tr>
                <td>
                    <h3>Mushfiqur</h3>
                    <i>1st Nov. 19</i>
                    <p>
                        <img src="c1.png" height="300px" width="80%">
                    </p>
                    <center>
                        <button class="profile-HeaderButton">222 Likes</button>
                    </center>
                </td>
            </tr>
            <tr>
                <td>
                    <hr>
                </td>
            </tr>

            <tr>
                <td>
                    <h3>Nazib Mahfuz</h3>
                    <i>31th Oct. 19</i>
                    <p>
                        bbbbv<br>
                        jbbbbbv<br>
                        bbbbbbbbbbbbbbb<br>
                        
                    </p>
                    <center>
                        <button class="profile-HeaderButton">255 Likes</button>
                    </center>
                </td>
            </tr>
            <tr>
                <td>
                    <hr>
                </td>
            </tr>

        
            <tr>
                <td>
                    <h3>Mithu</h3>
                    <i>30th Oct. 19</i><br>
                        <video controls>
                            <source src="v.mp4" type="video/mp4">
                        </video>
                    <center>
                        <button class="profile-HeaderButton">1111 Likes</button>
                    </center>
                </td>
            </tr>
            <tr>
                <td>
                    <hr>
                </td>
            </tr>
        </table>
    </center>
    </body>
</html>

<?php
    }
    elseif(isset($_POST['btnStudentPost']))  //student Post
    {

?>
<html>
    <body>
    <center>
        <table border="0" width="50%">
            <tr>
                <td>
                    <center>
                        <h3>Student Posts</h3>
                        <hr>
                    </center>
                </td>
            </tr>
            <tr>
                <td>
                    <h3>Hasib Ahmed</h3>
                    <i>1st Nov. 19</i>
                    <p>
                        <img src="me.png" height="300px" width="70%">
                    </p>
                    <center>
                        <button class="profile-HeaderButton">1 Likes</button>
                    </center>
                </td>
            </tr>
            <tr>
                <td>
                    <hr>
                </td>
            </tr>

            <tr>
                <td>
                    <h3>Nazib Mahfuz</h3>
                    <i>1st Nov. 19</i>
                    <p>
                        <img src="e.png" height="300px" width="70%">
                    </p>
                    <center>
                        <button class="profile-HeaderButton">1 Likes</button>
                    </center>
                </td>
            </tr>
            <tr>
                <td>
                    <hr>
                </td>
            </tr>

            <tr>
                <td>
                    <h3>Mithu</h3>
                    <i>1st Nov. 19</i>
                    <p>
                        <img src="p3.png" height="300px" width="100%">
                    </p>
                    <center>
                        <button class="profile-HeaderButton">1 Likes</button>
                    </center>
                </td>
            </tr>
            <tr>
                <td>
                    <hr>
                </td>
            </tr>

            <tr>
                <td>
                    <h3>Nazib Mahfuz</h3>
                    <i>31th Oct. 19</i>
                    <p>
                       A<br>
                        B<br>
                        C<br>
                        
                    </p>
                    <center>
                        <button class="profile-HeaderButton">25 Likes</button>
                    </center>
                </td>
            </tr>
            <tr>
                <td>
                    <hr>
                </td>
            </tr>

        
            <tr>
                <td>
                    <h3>Hasib </h3>
                    <i>30th Oct. 19</i><br>
                        <video controls>
                            <source src="m.mp4" type="video/mp4">
                        </video>
                    <center>
                        <button class="profile-HeaderButton">36 Likes</button>
                    </center>
                </td>
            </tr>
            <tr>
                <td>
                    <hr>
                </td>
            </tr>
        </table>
    </center>
    </body>
</html>

<?php
    }
    else  //All Post
    {
?>

<html>
    <body>
    <center>
        <table border="0" width="50%">
            <tr>
                <td>
                    <center>
                        <h3>All Posts</h3>
                        <hr>
                    </center>
                </td>
            </tr>
            <tr>
                <td>
                    <h3>Hasib Ahmed</h3>
                    <i>1st Nov. 19</i>
                    <p>
                        Thank<br>
                        You<br>
                        so<br>
                        Much<br>
                        
                    </p>
                    <center>
                        <button class="profile-HeaderButton">1 Likes</button>
                    </center>
                </td>
            </tr>
            <tr>
                <td>
                    <hr>
                </td>
            </tr>

            <tr>
                <td>
                    <h3>Mushfiqur</h3>
                    <i>1st Nov. 19</i>
                    <p>
                        <img src="p1.jpg" height="300px" width="80%">
                    </p>
                    <center>
                        <button class="profile-HeaderButton">500 Likes</button>
                    </center>
                </td>
            </tr>
            <tr>
                <td>
                    <hr>
                </td>
            </tr>

            <tr>
                <td>
                    <h3>Mushfiqur</h3>
                    <i>1st Nov. 19</i>
                    <p>
                        <img src="c1.png" height="300px" width="80%">
                    </p>
                    <center>
                        <button class="profile-HeaderButton">1 Likes</button>
                    </center>
                </td>
            </tr>
            <tr>
                <td>
                    <hr>
                </td>
            </tr>

            <tr>
                <td>
                    <h3>Nazib Mahfuz</h3>
                    <i>31th Oct. 19</i>
                    <p>
                        A<br>
                        B<br>
                       C<br>
                      
                    </p>
                    <center>
                        <button class="profile-HeaderButton">25 Likes</button>
                    </center>
                </td>
            </tr>
            <tr>
                <td>
                    <hr>
                </td>
            </tr>

        
            <tr>
                <td>
                    <h3>Mushfiqur</h3>
                    <i>30th Oct. 19</i><br>
                        <video controls>
                            <source src="videoplayback.mp4" type="video/mp4">
                        </video>
                    <center>
                        <button class="profile-HeaderButton">350 Likes</button>
                    </center>
                </td>
            </tr>
            <tr>
                <td>
                    <hr>
                </td>
            </tr>
        </table>
    </center>
    </body>
</html>

<?php
    }
?>
        
        <table width="100%">
        <tr>
            <td class="fotter">
                <center>
                    
                </center>
            </td>
        </tr>
        </table>
</body>
</html>