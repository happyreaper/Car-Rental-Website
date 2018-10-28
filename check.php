<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Earnings</title>
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
                <h2> Check Earnings</h2>
                <h3>Enter Start and End Date to see weekly earnings</h3>

                <form method="post" action="checkdate.php">

                    <label for="sdate">Start Date:</label>
                    <input class="ips" type="date" name="sdate" id="sdate" autocomplete="off" />

                    <label for="edate">End Date:</label>
                    <input class="ips" type="date" name="edate" id="edate" autocomplete="off" />


                    <input class="sub" type="submit" value="Submit" name="sub" />
                </form>





            </section>



            <footer>

            </footer>

        </div>

    </div>







    <!--    FOOTER CONTANING THE ADDRESS, COPYRIGHT & E-MAIL-->



</body>

</html>
