<?php
// validate_input();
$con =mysqli_connect('localhost','root','');
if(!$con)
{
    echo 'Not connected';
}
   
if(!mysqli_select_db($con,'rental _company'))
{
    echo 'Databse not selected';
}

$oname=$_POST['owner'];
$ophone=$_POST['ophone'];
$otype=$_POST['otype'];
$oid=$_POST['oid'];
$model=$_POST['model'];
$type=$_POST['type'];
$drate=$_POST['drate'];
$wrate=$_POST['wrate'];
$year=$_POST['year'];

if($oid==''){
    
    $sql="INSERT INTO owners(NAME, PHONE, O_TYPE) VALUES('$oname', '$ophone', '$otype')";
    
    if(!mysqli_query($con,$sql))
    {
        echo "<br />\n";
        echo 'Owners Not Inserted';
    }

    else
    {
        echo "<br />\n";
        echo 'Owners Inserted';
    }
    
    $sql2="SELECT MAX(O_ID) FROM owners;";
    $result=mysqli_query($con,$sql2) or die("error");
    $row = mysqli_fetch_array($result);
    $newid=$row['MAX(O_ID)'];
    $sql3="INSERT INTO cars(MODEL, TYPE, D_RATE, W_RATE, O_ID, YEAR) VALUES('$model','$type','$drate','$wrate','$newid','$year')";
    if(!mysqli_query($con,$sql3))
    {
        echo "<br />\n";
        echo 'Cars(new owner) Not Inserted';
    }

    else
    {
        echo "<br />\n";
        echo 'Cars Inserted ';
    }
}



else{
    
     $sql4="INSERT INTO cars(MODEL, TYPE, D_RATE, W_RATE, O_ID, YEAR) VALUES('$model','$type','$drate','$wrate','$oid','$year')";
    
    if(!mysqli_query($con,$sql4))
    {
        echo "<br />\n";
        echo 'Cars(old owner) Not Inserted ';
    }

    else
    {
        echo "<br />\n";
        echo 'Cars Inserted ';
    }
    
    
}
header("refresh:2; url=add.php");
//echo $oname; echo "<br />\n";
//echo $ophone;
//echo "<br />\n";
//echo $otype;
//echo "<br />\n";
//echo $oid;
//echo "<br />\n";
//echo $model;
//echo "<br />\n";
//echo $type;
//echo "<br />\n";
//echo $drate;
//echo "<br />\n";
//echo $wrate;
//echo "<br />\n";
//echo $year;
//echo "<br />\n";
