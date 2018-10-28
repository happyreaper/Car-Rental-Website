<!DOCTYPE html>
<html>

<head>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Car</title>
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
                <h2> Add a Car</h2>
                <h3>Fill out Car Details</h3>
                <p>Required fields are marked with an asterisk (*)</p>
                <form method="post" action="caradd.php">

                    <label for="model">*Model: </label>
                    <input class="ips" type="text" name="model" id="model" required="required" />

                    <label for="type">*Type: </label>
                    <input class="ips" type="text" name="type" id="type" required="required" />

                    <label for="drate">*Daily Rate</label>
                    <input class="ips" type="number" name="drate" id="drate" required="required" />

                    <label for="wrate">*Weekly Rate</label>
                    <input class="ips" type="number" name="wrate" id="wrate" required="required" />

                    <label for="year">*Year</label>
                    <input class="ips" type="number" name="year" id="year" required="required" />

                    <label for="rad">*New Owner?</label>
                    <input type="radio" name="rad" id="yes" value="yes" onClick="yesFunction()" />Yes
                    <input type="radio" name="rad" id="no" value="no" onClick="noFunction()" />No
                    <br /><br />
                    <label class="ipshidden" for="owner">*Owner Name: </label>
                    <input class="ipshidden" type="text" name="owner" id="owner" />
                    <label class="ipshidden" for="otype">*Owner Type: </label>
                    <input class="ipshidden" type="text" name="otype" id="otype" />
                    <label class="ipshidden" for="ophone">*Phone: </label>
                    <input class="ipshidden" type="text" name="ophone" id="ophone" />


                    <label class="ipshidden2" for="oid">*OID</label>
                    <input class="ipshidden2" type="number" name="oid" id="oid" />


                    <br /><br />
                    <input class="sub" type="submit" value="Submit" id="submit" />

                </form>

            </section>

            <footer>

            </footer>

        </div>

    </div>





    <script type="text/javascript">
        function yesFunction() {
            var x = document.getElementsByClassName('ipshidden');
            var y = document.getElementsByClassName('ipshidden2');
            for (var i = 0; i < 2; i++) {
                y[i].style.display = "none";
            }

            for (var i = 0; i < 6; i++) {
                if (x[i].style.display == "none") {
                    x[i].style.display = "block";
                    //                                } else {
                    //                                    x[i].style.display = "none";
                    //                                }

                }
            }

        }

        function noFunction() {
            var y = document.getElementsByClassName('ipshidden2');
            var x = document.getElementsByClassName('ipshidden');
            for (var i = 0; i < 6; i++) {
                x[i].style.display = "none";
            }

            for (var i = 0; i < 2; i++) {

                if (y[i].style.display == "none") {
                    y[i].style.display = "block";
                    // } else { // y[i].style.display = "none"; // }

                }
            }

        }

    </script>

</body>

</html>
