<?php
session_start();

$connection=mysqli_connect('localhost','root','shivakesh2');
//$connection=mysqli_connect('localhost','root','write your password here')

mysqli_select_db($connection,'loginandregistrationform');

$email=$_POST['emailid'];
$password=$_POST['password'];

$select="select * from register_table where email_id='$email' && password='$password'";
$result=mysqli_query($connection,$select);
$num=mysqli_num_rows($result);
if($num==1)
{
   header('location:loginandregister.php');
}
else
{
    header('location:app.php');
}
?>
