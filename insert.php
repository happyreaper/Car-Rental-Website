<?php
// validate_input();
function connect(){
$con =mysqli_connect('localhost','root','');
if(!$con)
{
    echo 'Not connected';
}
   
else if(!mysqli_select_db($con,'rental _company'))
{
    echo 'Databse not selected';
}
    else{
        return $con;
}
}
$Name=$_POST['name'];
$RType=$_POST['res_type'];
$CType=$_POST['cus_type'];
$Phone=$_POST['phone'];
$Vid=$_POST['vid'];
$From=$_POST['from'];
$To=$_POST['to'];
//echo $RType;
$t=date_create($To);
$f=date_create($From);
$diff= date_diff($t,$f);

$Days= (int)$diff->format("%a");
//echo "<br />\n";
//echo $Days;
//echo "<br />\n";
$Amount=0;
$rate=0;
$con=connect();
$find="SELECT RES_ID FROM reservations WHERE V_ID=$Vid";
$find2=mysqli_query($con,$find) or die("error1");
$find3=mysqli_fetch_array($find2);
$rdi=$find3['RES_ID'];

if(is_null($rdi)){
    makeres();
}

else
{
    
    $find4="SELECT * FROM reservation_details where RES_ID=$rdi";
    $find5=mysqli_query($con,$find4) or die("error2");
    $find6=mysqli_fetch_array($find5);
    if(!is_null($find3))
    {

        $date =$find6['S_DATE'];
        $date2=$find6['E_DATE'];
        if($From>=$date && $From<=$date2)
        {
            echo "Reservation not possible, choose another date"; echo "<br/>";
            echo "Choose a return date before ".$date." or a start date after ".$date2;
            header("refresh:5; url=reservations.php");
        }
        else{
            makeres();
        }

    }

    else{
        makeres();
    }

    
}


function makeres(){
    
    
    $con=connect();
    $Name=$_POST['name'];
    $RType=$_POST['res_type'];
    $CType=$_POST['cus_type'];
    $Phone=$_POST['phone'];
    $Vid=$_POST['vid'];
    $From=$_POST['from'];
    $To=$_POST['to'];
    //echo $RType;
    $t=date_create($To);
    $f=date_create($From);
    $diff= date_diff($t,$f);

    $Days= (int)$diff->format("%a");
    if($RType=='D_RATE')
    {   
        
        $check3="SELECT D_RATE FROM cars WHERE V_ID=$Vid";
        $res3=mysqli_query($con,$check3) or die("error3");
        $rows3 = mysqli_fetch_array($res3);
        $rate=$rows3['D_RATE'];
        $Amount=$Days*$rate;

    }

    else
    {
        
        $check3="SELECT W_RATE FROM cars WHERE V_ID=$Vid";
        $res3=mysqli_query($con,$check3) or die("error4");
        $rows3 = mysqli_fetch_array($res3);
        $rate=$rows3['W_RATE'];
        $Amount=($Days/7)*$rate;

    }
    //echo "<br />\n";

    $Amount= number_format((float)$Amount, 2, '.', '');
    //echo $Amount;


    $sql="INSERT INTO customers (NAME,PHONE,TYPE) VALUES('$Name','$Phone','$CType');";
    if(!mysqli_query($con,$sql))
    {
        echo 'Not Inserted 1';
    }

    else
    {
        echo 'Inserted 1';
    }

    $check="SELECT MAX(C_ID) FROM customers AS C_ID;";
    $res=mysqli_query($con,$check) or die("error5");
    $rows = mysqli_fetch_array($res);
    $id=$rows['MAX(C_ID)'];


    $sql2="INSERT INTO reservations (R_TYPE, V_ID, C_ID) VALUES('$RType','$Vid','$id');";


    if(!mysqli_query($con,$sql2))
    {
        echo 'Not Interested 2';
    }

    else
    {
        echo 'Inserted 2';
    }

    $check2="SELECT MAX(RES_ID) FROM reservations AS RES_ID;";
    $res2=mysqli_query($con,$check2) or die("error6");
    $rows2 = mysqli_fetch_array($res2);
    $id2=$rows2['MAX(RES_ID)'];


    echo "<br />\n";
    $sql3="INSERT INTO reservation_details (RES_ID, S_DATE, E_DATE, AMOUNT) VALUES('$id2','$From','$To', $Amount);";
    

    if(!mysqli_query($con,$sql3))
    {   echo "<br />\n";
        echo 'Not Interested 3';
    }

    else
    {   echo "<br />\n";
        echo 'Inserted 3';
    }

    
}










//function validate_input(){
//
//    $Name = $Lname = $Email = $Phone = $Nights = "";
//    if ($_SERVER["REQUEST_METHOD"] == "POST") {
//      if (empty($_POST["fname"])) {
//        echo "<script type='text/javascript'>"; 
//        echo "alert('Please enter first name.');"; 
//        echo "</script>";
//        exit();
//      } else {
//        $Name = test_input($_POST["fname"]);
//        // check if name only contains letters
//        if (!preg_match("/^[a-zA-Z]*$/",$Name)) {
//            echo "<script type='text/javascript'>"; 
//            echo "alert('First Name: Only alphabets are allowed.');"; 
//            echo "</script>";
//            exit();
//        }
//      }
//    if (empty($_POST["lname"])) {
//        echo "<script type='text/javascript'>"; 
//        echo "alert('Please enter last name.');"; 
//        echo "</script>";
//        exit();
//      } else {
//        $Lname = test_input($_POST["lname"]);
//        // check if name only contains letters
//        if (!preg_match("/^[a-zA-Z]*$/",$Lname)) {
//            echo "<script type='text/javascript'>"; 
//            echo "alert('Last Name: Only alphabets are allowed.');"; 
//            echo "</script>";
//            exit();
//        }
//      }
//    if (empty($_POST["email"])) {
//        echo "<script type='text/javascript'>"; 
//        echo "alert('Please enter email.');"; 
//        echo "</script>";
//        exit();
//      } else {
//        $Email = test_input($_POST["email"]);
//        // check if email is in valid format
//        if (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
//            echo "<script type='text/javascript'>"; 
//            echo "alert('Invalid email. Format (xyz@abc.com))');"; 
//            echo "</script>";
//            exit();
//        }
//      }
//    if (empty($_POST["phone"])) {
//        
//      } else {
//        $Phone = test_input($_POST["phone"]);
//        // check if phone number is in valid format
//        if (!preg_match("/^[0-9]{10}$/",$Phone)) {
//            echo "<script type='text/javascript'>"; 
//            echo "alert('Phone: Only numbers are allowed. Phone Number (Format: 9999999999)');"; 
//            echo "</script>";
//        }
//      }
//    if (empty($_POST["nights"])) {
//        
//      } else {
//        $Nights = test_input($_POST["nights"]);
//        // check if nights only contains numbers between 1 to 14
//        if (!preg_match("/^[0-9]+$/",$Nights)) {
//            echo "<script type='text/javascript'>"; 
//            echo "alert('Nights: Only numbers are allowed. Range (1 - 14)');"; 
//            echo "</script>";
//            exit();
//        }
//        elseif((int)$Nights < 1 || (int)$Nights > 14){
//            echo "<script type='text/javascript'>"; 
//            echo "alert('Nights: Range (1 - 14)');"; 
//            echo "</script>";
//            exit();
//        }
//      }
//      if (empty($_POST["comments"])) {
//            echo "<script type='text/javascript'>"; 
//            echo "alert('Please enter comments.');"; 
//            echo "</script>";
//            exit();
//        }
//    }
//
//}
//
//function test_input($data) {
//  $data = trim($data);
//  $data = stripslashes($data);
//  $data = htmlspecialchars($data);
//  return $data;
//}


header("refresh:5; url=reservations.php");

?>
