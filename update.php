<!DOCTYPE html>
<html>

<head>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
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



            <!--    THE CONTENT SECTION-->
            <section>
                <h2>Update Car Rates</h2>
                <h3>Enter the Vehicle Number</h3>
                <p>Enter either daily or weekly rates, or both.</p>
                <form method="post" action="updatecar.php">

                    <label for="vid">*Car Type</label>
                    <input class="ips" type="text" name="vid" id="vid" required="required" />
                    <label for="dr">Daily Rate</label>
                    <input class="ips" type="number" name="dr" pattern='\d{20}' id="dr" />
                    <label for="wr">Weekly Rate</label>
                    <input class="ips" type="number" name="wr" pattern='\d{20}' id="wr" />


                    <input class="sub" type="submit" value="Submit" id="submit" />

                </form>

            </section>

            <footer>

            </footer>

        </div>

    </div>







</body>

</html>
