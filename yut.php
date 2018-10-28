<?php
 
$con =mysqli_connect('localhost','root','');
if(!$con)
{
    echo 'Not connected';
}


   
if(!mysqli_select_db($con,'pacific'))
{
    echo 'Databse not selected';
}

$query="SELECT * FROM yurts";
$result=mysqli_query($con,$query) or die("error");
$row = mysqli_fetch_array($result);

?>
