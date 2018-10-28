<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Owners</title>
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

            <img id="coast" src="images/fer1.jpg" height="300px;" width="100%" />
            <section>
                <h2>Owners and their Cars</h2>



                <?php 
                $connection = mysqli_connect('localhost', 'root', ''); //The Blank string is the password
                mysqli_select_db($connection,'rental _company');

                $query = "SELECT owners.NAME, owners.O_TYPE, cars.MODEL, cars.TYPE FROM owners inner join cars on owners.O_ID=cars.O_ID;"; 
                $result = mysqli_query($connection,$query);
                
                

                echo "<table>"; // start a table tag in the HTML
                echo "    <tr>
                            <th>Owner Name</th>
                            <th>Owner Type</th>
                            <th>Model</th>
                            <th>Type</th>
                          </tr>";
                while($row = mysqli_fetch_array($result))
                {   //Creates a loop to loop through results
                echo "<tr><td>" . $row['NAME'] . "</td><td>" . $row['O_TYPE'] . "</td><td>" . $row['MODEL'] . "</td><td>" . $row['TYPE'] . "</td></tr>";  //$row['index'] the index here is a field name
                }

                echo "</table>"; //Close the table in HTML

                mysqli_close($connection);
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
