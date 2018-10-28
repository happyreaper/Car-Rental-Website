<?php


$con =mysqli_connect('localhost','root','');
if(!$con)
{
    echo 'Not connected';
}
   
if(!mysqli_select_db($con,'rental _company'))
{
    echo 'Databse not selected';
}

$rd=$_POST['r'];

$sql3="SELECT C_ID FROM reservations WHERE RES_ID='$rd'";
$res3=mysqli_query($con,$sql3) or die("error");
$ro=mysqli_fetch_array($res3);
$cd=$ro['C_ID'];

$sql="DELETE FROM reservation_details WHERE RES_ID='$rd'";
$sql2="DELETE  FROM reservations WHERE RES_ID='$rd'";
$sql4="DELETE  FROM customers WHERE C_ID='$cd'";
mysqli_query($con,$sql) or die("error");
mysqli_query($con,$sql2) or die("error");
mysqli_query($con,$sql4) or die("error");
?>

    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>
        <link rel="stylesheet" href="css/pacific.css">
    </head>

    <body id="wrapper">
        <header>
            <h1>RentAll</h1>
        </header>


        <div class="row">
            <div class="column-left">

                <nav>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="cars.php">Cars</a></li>
                        <li><a href="owners.php">Owners</a></li>

                        <li><a href="add.php">Add a Car</a></li>
                        <li><a href="reservations.php">Rent out</a></li>
                        <li><a href="myreservations.php">Check Reservations</a></li>
                        <li><a href="update.php">Update Car</a></li>


                    </ul>
                </nav>

            </div>

            <div class="column-right">

                <img id="coast" src="images/fer.jpg" height="350px;" width="100%" />
                <!--    THE CONTENT SECTION-->
                <section>
                    <h2>Car Rental Solutions</h2>

                    <h3>Your car has been returned!</h3>

                    <address>
                <p> <span class="name">RentAll Services</span> <br /> 12010 CA Road <br /> Zephyr, CA 95555 <br /><br /> <tel>888-555-5555</tel> <br /></p>
        </address>
                </section>

                <footer>

                </footer>

            </div>

        </div>



        <!--    FOOTER CONTANING THE ADDRESS, COPYRIGHT & E-MAIL-->



    </body>

    </html>
