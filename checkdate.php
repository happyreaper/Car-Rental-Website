<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Yurts</title>
    <link rel="stylesheet" href="css/pacific.css">

</head>

<body id="wrapper">
    <header>
        <h1>RentAll </h1>
    </header>

    <div class="row">

        <div class="column-left">

            <nav>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="cars.php">Cars</a></li>
                    <li><a href="owners.php">Owners</a></li>
                    <li><a href="current.php">Current Rentals</a></li>
                    <li><a href="add.php">Add a Car</a></li>
                    <li><a href="reservations.php">Rent out</a></li>
                    <li><a href="myreservations.php">Check Reservations</a></li>
                    <li><a href="update.php">Update Car</a></li>
                    <li><a href="check.php">Check Earnings</a></li>




                </ul>
            </nav>

        </div>

        <div class="column-right">

            <img id="coast" src="images/money.jpg" height="300px;" width="100%" />
            <section>
                <h2>Earnings by car type between
                    <?php echo $_POST['sdate']." and ".$_POST['edate']; ?>
                </h2>



                <?php 
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


$sd=$_POST['sdate'];
$ed=$_POST['edate'];



$sql="SELECT owners.NAME, cars.TYPE, SUM(reservation_details.AMOUNT) AS EARNINGS from cars INNER JOIN reservations on cars.V_ID=reservations.V_ID INNER join reservation_details on reservation_details.RES_ID=reservations.RES_ID INNER JOIN owners ON cars.O_ID=owners.O_ID WHERE reservation_details.E_DATE BETWEEN '$sd' AND '$ed' GROUP BY cars.TYPE ";

$c=connect();
$res=mysqli_query($c, $sql);
                    
                                    echo "<table>"; // start a table tag in the HTML
                echo "    <tr>
                            <th>OWNER</th>
                            <th>TYPE</th>
                            <th>EARNINGS</th>

                          </tr>";

while($row = mysqli_fetch_array($res))
{   //Creates a loop to loop through results
echo "<tr><td>" . $row['NAME'] . "</td><td>" . $row['TYPE'] . "</td><td>" . "$".number_format((float)$row['EARNINGS'], 2, '.', '') . "</td></tr>";}
                
                




                echo "</table>"; //Close the table in HTML

                mysqli_close($c);
                ?>

            </section>
            <br /><br />
            <footer>
                <br />

            </footer>

        </div>

    </div>



    <!--The Footer-->

</body>

</html>
