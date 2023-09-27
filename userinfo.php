<?php
error_reporting(0);

$con = mysqli_connect('localhost','root');

if($con){
    echo "Connection succesfull";
}
else{
    echo "No connection";
}

mysqli_select_db($con ,'web_user_data');

$user =$_POST['user'];
$email =$_POST['email'];
$mobile =$_POST['mobile'];
$comments =$_POST['comments'];


$query = "insert into userdata (user,email,mobile,comments) values('$user ','$email','$mobile','$comments')";

echo $query ;

mysqli_query($con, $query);

header('location:index.php');


?>