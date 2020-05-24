<html>

<head>
  <link rel="stylesheet" href="css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="index.css">
  <title>Sign in</title>
  
</head>

<body>
  <br>
  <p align="center"><img src="img/somaiya.jpg" width="100" height="100" style="background-color: white;"></p>
    <br>
  <h1 style="color: white;text-align: center;">WELCOME TO SOMAIYA TURF AND SLOT BOOKING </h1> 
    <hr size="5" color="yellow">
  <div class="main">
   
    <p class="sign" align="center">Sign in</p>
    <form class="form1" method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">
      <input class="un " type="text" align="center" placeholder="Username" name="username">
      <input class="pass" type="password" align="center" placeholder="Password" name="password"><br>
      <input  type="submit" class="submit" align="center" name="submit">
      </form>             
    
<?php
include_once 'dbh.inc.php';
//$login='unsuccessful';
if(isset($_POST['submit']))
{
$name=$_POST['username'];
$password=$_POST['password'];
$sql = "select username,password from login where username = '$name'  and password = '$password'";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result) > 0)
            {
              session_start();
                    $_SESSION['username']=$_POST['username'];
              $username=$_SESSION['username'];

            header("Location: test.php"); 
          }
    else
      { echo '<script language="javascript">';
        echo 'alert("Invalid Email or Password. Please try again !!")';
        echo '</script';
      }
          }
?>
     </div>
</body>

</html>
