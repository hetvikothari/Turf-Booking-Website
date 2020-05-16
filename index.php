<!DOCTYPE html>
<html>
<head>
	<title>COURT AND TURF BOOKING</title>
	<link rel="stylesheet" type="text/css" href="page1.css">
	<style >
		body{
			   background-color: skyblue;
		}
		p{
    text-align: center;
    font-family: ARIAL;
    text-emphasis: bold;
}
h1{
    text-align: center;
}
div{
    text-align: center;
    background-color: teal;
    }
	</style>
</head>
<body >
	<p ><img src="img/somaiya.jpg" width="100" height="100"></p>
	<br>
	<h1>WELCOME TO SOMAIYA TURF AND SLOT BOOKING </h1> 
		<hr size="5" color="yellow">
			<br><br>
<div ><br>
<p ><b>Enter username and password to LOGIN:</b></p>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">
			<label ><b>USER-NAME</b></label>
			<input type="text" name="username" placeholder="Enter User name">
			<br><br>
			<label><b>PASSWORD</b></label>
			<input type="password" name="password" placeholder="Enter password">
			<br><br>
 <input  type="submit" value="Submit" name="submit">
 <br><br>
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
			{
				echo '<p><b>Invalid Email or Password</b></p>';
			}
					}
		
/*if($name=="hetvi.kothari" && $password=="123456789")
	{echo "LOGIN SUCCESSFULL";
		$login='successful';
	
	}
else if($name=='hetvi.kothari' && $password!="123456789")
	echo "PASSWORD INVALID";
else if($name!='hetvi.kothari')
	echo "USERNAME INVALID";

}
if($login=='successful')
{
		header("Location:info.html");
}
$sql="select * from login";
$r1=$conn->query($sql);

//$result=mysqli_query($conn,$sql);
$resultcheck=mysqli_num_rows($r1);
$f=1;
if($resultcheck>0)
{
	while($row=mysqli_fetch_assoc($r1))
	{
		if($row['username']==isset($_POST['username']) && $row['password']==isset($_POST['password']))
		{
			$f=0;
			session_start();
			$_SESSION['username']=$_POST['username'];
			$username=$_SESSION['username'];
			header("Location:temppage2.html");
		}
	}
}*/

?>
<br>
</div>
</body>
</html>
