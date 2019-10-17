<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "practice";
$data=json_decode(file_get_contents("php://input"));
$name=$data->name;
$subject=$data->subject;
$marks1=$data->m1;
$marks2=$data->m2;
$marks3=$data->m3;
$con=mysqli_connect($servername,$username,$password,$db);
$sql="INSERT INTO details(Name,Subject,Test1,Test2,Test3) VALUES ('$name','$subject','$marks1','$marks2','$marks3')"; 
mysqli_query($con,$sql);
mysqli_close($con);

?>