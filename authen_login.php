<?php  
 require('db_connect.php');

if (isset($_POST['user_id']) and isset($_POST['user_pass'])){
	
$username = $_POST['user_id'];
$password = $_POST['user_pass'];

$query = "SELECT * FROM `user_login` where username='$username' and  password='$password'";
 
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);

if ($count == 1){

echo "<script type='text/javascript'>alert('login confirmed')</script>";

}else{
echo "<script type='text/javascript'>alert('invalid login')</script>";
}
}
?>