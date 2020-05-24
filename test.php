<?php
session_start();
$name=$_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com -->
  <title>BOOKING</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="http://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css" rel="Stylesheet" type="text/css" />
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
    <script type="text/javascript" src="https://jonthornton.github.io/jquery-timepicker/jquery.timepicker.js"></script>
<link rel="stylesheet" type="text/css" href="https://jonthornton.github.io/jquery-timepicker/jquery.timepicker.css">
<script type="text/javascript" src="https://jonthornton.github.io/jquery-timepicker/lib/bootstrap-datepicker.js"></script>
<link rel="stylesheet" type="text/css" href="https://jonthornton.github.io/jquery-timepicker/lib/bootstrap-datepicker.css">

    <script language="javascript">
        $(document).ready(function () {
            $("#txtdate").datepicker({
                 dateFormat: 'yy-mm-dd',
                minDate: 0,
                 maxDate: 7
            });
        });
    </script>
      <script type="text/javascript">
  $(function() {
  $('#StartTime').timepicker({
    'timeFormat': 'h:i A',
    'minTime': '7:00am',
  'maxTime': '5:30pm',
  'step': '60'
  
  }
    );

});
  </script>
    </script>
  <script type="text/javascript">
      $(function() {
  $('#EndTime').timepicker({
    'timeFormat': 'h:i A',
    'minTime': '8:00am',
  'maxTime': '6:00pm',
  'step': '60'
  
  }
    );

});

  </script>
  <style>
    body {
    font: 400 15px Lato, sans-serif;
    line-height: 1.8;
    color: #818181;
  }
  h2 {
    font-size: 24px;
    text-transform: uppercase;
    color: #303030;
    font-weight: 600;
    margin-bottom: 30px;
  }
  h4 {
    font-size: 19px;
    line-height: 1.375em;
    color: #303030;
    font-weight: 400;
    margin-bottom: 30px;
  }
  p{
    text-align: center;
    font-family: ARIAL;
    text-emphasis: bold;
    } 
  td{
      text-align: center;
    }
  th
    {
      text-align: center;
    }
  li{
    color: black;
  } 

  .jumbotron {
    background-color: #f4511e;
    color: #fff;
    padding: 100px 25px;
    font-family: Montserrat, sans-serif;
  }
  .container-fluid {
    padding: 60px 50px;
  }
  .bg-grey {
    background-color: #f6f6f6;
  }
  .logo-small {
    color: #f4511e;
    font-size: 50px;
  }
  .logo {
    color: #f4511e;
    font-size: 200px;
  }
  .thumbnail {
    padding: 0 0 15px 0;
    border: none;
    border-radius: 0;
  }
  .thumbnail img {
    width: 100%;
    height: 100%;
    margin-bottom: 10px;
  }
  .carousel-control.right, .carousel-control.left {
    background-image: none;
    color: #f4511e;
  }
  .carousel-indicators li {
    border-color: #f4511e;
  }
  .carousel-indicators li.active {
    background-color: #f4511e;
  }
  .item h4 {
    font-size: 19px;
    line-height: 1.375em;
    font-weight: 400;
    font-style: italic;
    margin: 70px 0;
  }
  .item span {
    font-style: normal;
  }
  .panel {
    border: 1px solid #f4511e; 
    border-radius:0 !important;
    transition: box-shadow 0.5s;
  }
  .panel:hover {
    box-shadow: 5px 0px 40px rgba(0,0,0, .2);
  }
  .panel-footer .btn:hover {
    border: 1px solid #f4511e;
    background-color: #fff !important;
    color: #f4511e;
  }
  .panel-heading {
    color: #fff !important;
    background-color: #f4511e !important;
    padding: 25px;
    border-bottom: 1px solid transparent;
    border-top-left-radius: 0px;
    border-top-right-radius: 0px;
    border-bottom-left-radius: 0px;
    border-bottom-right-radius: 0px;
  }
  .panel-footer {
    background-color: white !important;
  }
  .panel-footer h3 {
    font-size: 32px;
  }
  .panel-footer h4 {
    color: #aaa;
    font-size: 14px;
  }
  .panel-footer .btn {
    margin: 15px 0;
    background-color: #f4511e;
    color: #fff;
  }
  .navbar {
    margin-bottom: 0;
    background-color: #f4511e;
    z-index: 9999;
    border: 0;
    font-size: 12px !important;
    line-height: 1.42857143 !important;
    letter-spacing: 4px;
    border-radius: 0;
    font-family: Montserrat, sans-serif;
  }
  .navbar li a, .navbar .navbar-brand {
    color: #fff !important;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
    color: #f4511e !important;
    background-color: #fff !important;
  }
  .navbar-default .navbar-toggle {
    border-color: transparent;
    color: #fff !important;
  }
  footer .glyphicon {
    font-size: 20px;
    margin-bottom: 20px;
    color: #f4511e;
  }
  .slideanim {visibility:hidden;}
  .slide {
    animation-name: slide;
    -webkit-animation-name: slide;
    animation-duration: 1s;
    -webkit-animation-duration: 1s;
    visibility: visible;
  }
  @keyframes slide {
    0% {
      opacity: 0;
      transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      transform: translateY(0%);
    }
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
    .btn-lg {
      width: 100%;
      margin-bottom: 35px;
    }
  }
  @media screen and (max-width: 480px) {
    .logo {
      font-size: 150px;
    }
  }
    .button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 8px;
  cursor: pointer;
}
.button2 {
  background-color: red;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 4px;
 
}
     </style>

</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage">HOME</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#gallery">GALLERY</a></li>
        <li><a href="#booking">BOOKING</a></li>
        <li><a href="#mybookings">MY BOOKINGS</a></li>
        <li><a href="#instructions">INSTRUCTIONS</a></li>
        <li><a href="#contact">CONTACT</a></li>
        <li><a href="#logout">LOG OUT</a></li>
      </ul>
    </div>
  </div>
</nav>


<div class="jumbotron text-center">
  <h1>COURT AND TURF BOOKING</h1> 

</div>


<!-- gallery  -->
<div id="gallery" class="container-fluid">
  <div class="row">
    
 <div class="jumbotron">
  <div class="container text-center">
    <h2>GALLERY</h2>      
    <p>Some Grounds are shown here..!!</p>
  </div>
</div>
  
<div class="container-fluid bg-3 text-center">    
  <div class="row">
    <div class="col-sm-3">
      
      
      <a href="booking.php" target="_blank"><img src="img/tennis.png" alt="tennis court image" class="img-responsive" style="width:100%;height: 210px"></a>
      <p>Lawn Tennis<br>Location: SIMSR<br>Maximum Capacity: 6</p>
    </div>
    <div class="col-sm-3"> 
      <a href="booking.php" target="_blank"><img src="img/basketball.PNG" alt="basketball court image" class="img-responsive"  style="width:100%;height: 210px" ></a>
          <p>Basketball<br>Location: S.K. Somaiya<br>Maximum Capacity: 20</p>
    </div>
    <div class="col-sm-3"> 
    <a href="booking.php" target="_blank"><img src="img/badminton1.jpg" alt="badminton court image" class="img-responsive" style="width: 100%;height:210px"></a>
        <p>Badminton<br>Location: KJSCE<br>Maximum Capacity: 6</p>

    </div>
    <div class="col-sm-3">
      <a href="booking.php" target="_blank" ><img src="img/cricket.png" alt="cricket court image" class="img-responsive" style="width: 100%;height:210px"></a>
        <p>Cricket<br>Location: KJSCE<br>Maximum Capacity: 30</p>
    </div>
  </div>
</div><br>

<div class="container bg-3 text-center">    
  <div class="row">
    <div class="col-sm-4">
          <a href="booking.php" target="_blank"><img src="img/football.jpg" alt="football court image" class="img-responsive"  style="width: 100%;height:210px" ></a>
               <p>Football<br>Location: Athletics Track<br>Maximum Capacity: 30</p>
    </div>
    <div class="col-sm-4"> 
       <a href="booking.php" target="_blank"><img src="img/multipurpose court.jpg" alt="football court image" style="width: 100%;height:210px"></a>
      <p>Throwball/Volleyball<br>Location: Athletics Track<br>Maximum Capacity: 20</p>
    </div>
    <div class="col-sm-4"> 
  <a href="booking.php" target="_blank"><img src="img/squash.PNG" alt="football court image" class="img-responsive"  style="width: 100%;height:210px" ></a>
                         <p>Squash<br>Location: SIMSR<br>Maximum Capacity: 5</p>
    </div>
  
  </div>
</div><br><br>
      </div>
    </div>

<!-- Container (Services Section) -->
<div id="booking" class="container-fluid text-center">
  <br><br>
  <p align="center">SELECT SLOT TIMING TO BOOK</p>

    <form action = " " method = "POST">
    <br>
    <div align="center">
      <label>ENTER START TIME</label>
      <input type="text" name="TIME1" id="StartTime" >
    </div>
    <br>
      <div align="center">
      <label>ENTER END TIME</label>
      <input type="text" name="TIME2" id="EndTime">
    </div>
    <br>
      <div align="center">
      <label>NUMBER OF PLAYERS:</label>
      <input type="number" name="NOP" value="4">
    </div>
    <br>
    <div align="center">
      <label>DATE:</label>
      <input type="text" name="date" id="txtdate" >

      
    </div>
    <!--<script type="text/javascript">
      $(function(){
        $("#selectdate").datepicker({
          minDate=new Date()
        });
      });
    </script>-->
    <br>

        <div align="center">
          <label>SELECT COURT</label>
  <select name="court">

    <option>FOOTBALL</option>
    <option>BASKETBALL</option>
    <option>BADMINTON</option>
    <option>LAWN TENNIS</option>
    <option>CRICKET</option>
    <option>SQUASH</option>
    <option>MULTIPURPOSE</option>



  </select>
  <br>
      
    </div>

      <br>
    <div align="center">
 <input  class="button" type="submit" value="Submit" name="submit" >
 </div>
<br>
  </form>
  <br>
<?php
include_once 'dbh.inc.php';
if(isset($_POST['submit']))
{
$stime=$_POST['TIME1'];
$endtime=$_POST['TIME2'];
$no_of_p=$_POST['NOP'];
$date=$_POST['date'];
$court=$_POST['court'];
$CID=0;
switch($court){
  case 'FOOTBALL':
  $CID=1;
  BREAK;
  case 'BASTEKBALL':
  $CID=2;
  BREAK;
  case 'BADMINTON':
  $CID=3;
  BREAK;
  case 'LAWN TENNIS':
  $CID=4;
  BREAK;
  case 'CRICKET':
  $CID=5;
  BREAK;
  case 'SQUASH':
  $CID=6;
  BREAK;
  case 'MULTIPURPOSE':
  $CID=7;
  BREAK;
}

if ($stime!=$endtime)
{

$q1="SELECT max_player FROM sports WHERE id=$CID";
$r1=$conn->query($q1);
$row=$r1->fetch_assoc();


if($no_of_p<=$row['max_player'])
{
$sql1="INSERT INTO user_date_time VALUES('$endtime','$name','$date','$stime');";
if($conn->query($sql1)===TRUE)
{

$sql="INSERT INTO booking ( `court_id`, `date1`, `user_id`, `stime1`, `etime`, `NOP`) VALUES ('$CID','$date','$name','$stime','$endtime',
'$no_of_p');";

//mysqli_query($conn,$sql);
if($conn->query($sql)===TRUE)
{
  
     echo '<script language="javascript">';
echo 'alert("BOOKING SUCESSFULL !!")';
echo '</script>';

}
else{
  $stime1 = explode(" ",$stime);
  $etime1= explode(" ", $endtime);
  $sql2="DELETE FROM user_date_time WHERE user='$name' AND date='$date' AND TIME1='$stime1[0]' AND TIME2='$etime1[0]';";
  if(mysqli_query($conn,$sql2)==TRUE)
  {
   echo '<script language="javascript">';
echo 'alert("SOMEONE ELSE HAS ALREADY BOOKED THIS COURT.PLEASE SELECT DIFFERENT TIME SLOT/DIFFERENT DAY/DIFFERENT COURT TO PLAY !!")';
echo '</script>';
}

}
}
else
{
   echo '<script language="javascript">';
echo 'alert("YOU ALREADY HAVE A BOOKING ON THIS DATE AT THIS TIME !!")';
echo '</script>';
}
}
else
{   echo '<script language="javascript">';
echo 'alert("NUMBER OF PLAYERS SELECTED ARE MORE THAN MAXIMUM CAPACITY !!")';
echo '</script>';

}
}
else

  {
   echo '<script language="javascript">';
echo 'alert("START AND END TIME CANNOT BE SAME.PLEASE SELECT CORRECT TIMINGS !!")';
echo '</script>';
}


}
?>
</div>
<br><br><br>
<!--my booking-->
<div id="mybookings" class="container-fluid text-center bg-grey">
<table align="center" border="1px" style="width: 800px;line-height: 40px" id="tbUser">
<tr>
  <th colspan="6"><h2>MY BOOKINGS</h2></th>
</tr>
<tr>
  <th>DATE</th>
  <th>START TIME</th>
  <th>END TIME</th>
  <th>COURT</th>
  <th>NUMBER OF PLAYER</th>
  <th>CANCELLATION</th>
</tr>
<?php

$sql1="Select booking.booking_id,booking.date1,booking.stime1,sports.cname,booking.etime,booking.NOP,booking.court_id from booking INNER JOIN sports ON booking.court_id=sports.id 
where user_id='$name' order by booking.date1,booking.stime1;";
$result=mysqli_query($conn,$sql1);
if(mysqli_num_rows($result)>0)
{
  while($row = $result->fetch_assoc())
    {
      $id=$row['booking_id'];
      ?>
    
      <tr id="number">
        <td><?php echo $row['date1'];?></td>
        <td><?php echo $row['stime1'];?></td>
        <td><?php echo $row['etime'];?></td>
        <td><?php echo $row['cname'];?></td>
        <td><?php echo $row['NOP'];?></td>
        <td><button id="number" name='delete' class="btnDelete" onclick="confirm1()" >DELETE</button></td>
      </tr>
  <?php
  //echo "<tr><td>".$row["date1"]."</td><td>".$row["stime1"]." ".$row["court_id"]."</td></tr><br>";
}
}
?>

</table>
  </div>
<script type="text/javascript">
  function confirm1(){
    var txt;
  var r=confirm("Are you sure you want to cancel this booking??");
  if (r == true) {
    window.location.href="removerow.php?id=<?php echo $id; ?>";
    txt = "BOOKING CANCELLED SUCESSFULLY !!";
  }
}

</script>
  <br><br><br>

<!-- Container (Portfolio Section) -->
<div id="instructions" class="container-fluid text-center bg-grey">
  <ul style="text-align: center; list-style-position: inside;">
    <li>PLEASE MAKE SURE ONLY ONE MEMBER OF THE TEAM DOES THE BOOKING.</li>
    <li>CANCELLATION HAVE TO BE DONE BEFORE AN HOUR OR ELSE FINE WILL BE TAKEN.</li>
    <li>MINIMUM SLOT IS OF ONE HOUR AND DO NOT BOOK FOR MORE THAN 2 HOURS.</li>
    <li>PLEASE BRING YOUR OWN EQUIPMENTS TO PLAY.</li>
    <li>BOOKING ONCE CANCELLED CANNOT BE RESTORED BACK.</li>

  </ul>
  <br>
  <br><br>
  <h2>What our students say</h2>
    <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <h4>"This is one the easiest way to book turfs and courts inside the campus. "<br><span>Himali Saini, Student, KJSCE</span></h4>
      </div>
      <div class="item">
        <h4>"Great way to book courts inside campus.All courts and turfs are well maintained."<br><span>Urvi Bheda, Ex-Student, K.J. Somaiya College of Science and Commerce</span></h4>
      </div>
      <div class="item">
        <h4>"Best courts are avialable free to play for somaiya students.Please make sure to check them out."<br><span>Charmi Kothari, Student, S.K Somaiya College</span></h4>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
 
<!-- Container (Pricing Section) -->
<div id="contact" class="container-fluid">

  
  <h2 class="text-center">CONTACT</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Contact me and I'll get back to you within 24 hours.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Mumbai, INDIA</p>
      <p><span class="glyphicon glyphicon-phone"></span> +91 9699242473</p>
      <p><span class="glyphicon glyphicon-envelope"></span> hetvi.kothari@somaiya.edu.</p>
    </div>
    <div class="col-sm-7 slideanim">
      <div class="row">
        <div class="col-sm-6 form-group">
          <form action = " " method = "POST">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit" name="submit2">Send</button>
        </div>
      </div>
    </form>

    </div>
  </div>
</div>
<br><br><br><br>
<!--<script type="text/javascript">
  function f1()
  {
    location.replace("test.php#contact");
  }
</script>-->

<?php
include_once 'dbh.inc.php';
if(isset($_POST['submit2']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mess=$_POST['comments'];
    $sql="Insert into message values('$name','$email','$mess');";
    if($conn->query($sql)===TRUE)
{
 echo '<script language="javascript">';
echo 'alert("MESSAGE SENT SUCESSFULLY !!")';
echo '</script>';


}
}
?>
</div>
</div>

<!-- Container (Contact Section) -->
<div id="logout" class="container-fluid bg-grey">
  <div class="text-center">
    <br><br>
    <p><b><big>Are you sure you want to logout</big></b></p>
    <button class="button" onclick="f1()">YES</button>
    <button class="button2" onclick="f2()">NO</button>
    </div>
</div>
<script type="text/javascript">
  function f1()
  {
    location.replace("index.php");
  }
  function f2(){
    location.replace("test.php#logout");
  }
</script>
</div>


<!-- Image of location/map -->


<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <p><p>Copyright &copy;2020,Hetvi Kothari</p></p>
</footer>

<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>

</body>
</html>