<?php
if(isset($_POST["btn"]))
{
	$n=$_POST["name"];
	$e=$_POST["email"];
	$p=$_POST["password"];
	$conn=mysqli_connect("localhost","root","","pro_db");
	$r = "insert into user value( '".$n." ' , '".$e."','".$p."' )";
	$check = mysqli_query( $conn , $r );
	if($check!=0)
	echo "Registered Successfully:";
	else
	echo "Not Registered:";
}
?>