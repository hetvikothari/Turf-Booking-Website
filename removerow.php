<?php

include_once 'dbh.inc.php';// Using database connection file here

$id=$_GET['id'];
 // get id through query string
if($id > 0){

  // Check record exists
	$sql="SELECT booking.booking_id,booking.date1,booking.stime1,booking.user_id FROM booking WHERE booking_id=".$id;
  $checkRecord = mysqli_query($conn,$sql);
  $totalrows = mysqli_num_rows($checkRecord);

  if($totalrows > 0){
  	while($row = $checkRecord->fetch_assoc()){

  		$date=$row['date1'];
  		$time=$row['stime1'];
  		$user=$row['user_id'];
  		echo $user;
  		echo $date;
  		echo $time;
  		$q1="DELETE FROM user_date_time WHERE user='$user' AND date='$date' AND TIME1='$time';";
  		mysqli_query($conn,$q1);}
    // Delete record
    $query = "DELETE FROM booking WHERE booking_id=".$id;
    mysqli_query($conn,$query);
   	header("location:test.php");
  
    exit;
  }
}


echo 0;
exit;
?>