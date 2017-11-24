<?php

$host='localhost';
$user='root';
$pass='';
$db='Datime';

$con=mysqli_connect($host,$user,$pass,$db);
if ($con)
	echo 'connected successfully to Datime database';

$sql="insert into Clubs (username,Day,Time) values ('kiwanis','fridays','3pmto4pm')" ;
$query=mysqli_query($con,$sql);
if ($query)
	echo 'data inserted successfully';

$sql="insert into Clubs (username,Day,Time) values ('habitat for humanity','thursdays','6pm to 7pm')" ;
$query=mysqli_query($con,$sql);
if ($query)
	echo 'data inserted successfully';

$sql="insert into Clubs (username,Day,Time) values ('css','weds','1pm to 2pm')" ;
$query=mysqli_query($con,$sql);
if ($query)
	echo 'data inserted successfully';

$sql="insert into Clubs (username,Day,Time) values ('shecodes','tues','7pmto8pm')" ;
$query=mysqli_query($con,$sql);
if ($query)
	echo 'data inserted successfully';

$sql="insert into Clubs (username,Day,Time) values ('enginneringsociety','tues','12pmto1pm')" ;
$query=mysqli_query($con,$sql);
if ($query)
	echo 'data inserted successfully';

$sql="insert into Clubs (username,Day,Time) values ('finance society','mondays','8pmto9pm')" ;
$query=mysqli_query($con,$sql);
if ($query)
	echo 'data inserted successfully';

$sql="insert into Clubs (username,Day,Time) values ('intramural tennis','tues and thurs','6pm to 8pm')" ;
$query=mysqli_query($con,$sql);
if ($query)
	echo 'data inserted successfully';

$sql="insert into Clubs (username,Day,Time) values ('intramural basketball','mon and weds','5pm to 7pm')" ;
$query=mysqli_query($con,$sql);
if ($query)
	echo 'data inserted successfully';

$sql="insert into Clubs (username,Day,Time) values ('intramural soccer','fridays and sundays','10am to 12pm')" ;
$query=mysqli_query($con,$sql);
if ($query)
	echo 'data inserted successfully';

$sql="insert into Clubs (username,Day,Time) values ('intramural volleyball',' thursdays and saturdays','8 am to 10 am')" ;
$query=mysqli_query($con,$sql);
if ($query)
	echo 'data inserted successfully';
?>
