<!DOCTYPE html>
<html>

<head>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rent Out</title>
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
                <h2> Make a Rent</h2>
                <h3>Enter the Vehicle Number by referring the previous page</h3>
                <p>Required fields are marked with an asterisk (*)</p>
                <form method="post" action="insert.php">

                    <label for="name">*Name: </label>
                    <input class="ips" type="text" name="name" id="name" required="required" />

                    <label for="res_type">*Reservation Type: </label>
                    <select class="ips" name="res_type" id="res_type">
                      <option value="D_RATE">Daily Rate</option>
                      <option value="W_RATE">Weekly Rate</option>
                    </select>

                    <label for="cus_type">*Customer Type: </label>
                    <select class="ips" name="cus_type" id="cus_type">
                      <option value="Individual">Individual</option>
                      <option value="Company">Company</option>
                    </select>


                    <label for="phone">*Phone: </label>
                    <input class="ips" type="text" name="phone" id="phone" maxlength="12" required="required" />

                    <label for="vid">*Vehicle Number</label>
                    <input class="ips" type="number" name="vid" pattern='\d{20}' id="vid" required="required" />

                    <label for="from">*From Date:</label>
                    <input class="ips" type="date" name="from" id="from" required="required" />

                    <label for="to">*To Date:</label>
                    <input class="ips" type="date" name="to" id="to" required="required" />


                    <input class="sub" type="submit" value="Submit" id="submit" />

                </form>

            </section>

            <footer>

            </footer>

        </div>

    </div>







</body>

</html>
