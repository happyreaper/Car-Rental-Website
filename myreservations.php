<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservations</title>
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
                <h2> Reservations at RentAll</h2>
                <h3>My Reservations</h3>

                <form method="post" action="myreservations.php">

                    <label for="rid">Reservation ID: </label>

                    <input class="ips" type="number" name="rid" id="rid" size="35" />


                    <input class="sub" type="submit" value="Submit" name="sub" />
                </form>

                <?php
    
                if(isset($_POST['sub']))
                {
        
                include('connect.php');
                $rid=$_POST['rid'];
                
                $query="SELECT * FROM reservations WHERE RES_ID = '$rid'";
                $result=mysqli_query($con,$query) or die("error");
                $row = mysqli_fetch_array($result);
                $cid=$row['C_ID'];
                $vid=$row['V_ID'];
                
                $query2="SELECT S_DATE, E_DATE, AMOUNT from reservation_details where RES_ID='$rid'";
                $result2=mysqli_query($con,$query2) or die("error");
                $row2=mysqli_fetch_array($result2); 
                $amount=$row2['AMOUNT'];    
                $sdate=$row2['S_DATE'];
                $edate=$row2['E_DATE'];
                    
                $query3="SELECT NAME from customers where C_ID='$cid'";
                $result3=mysqli_query($con,$query3) or die("error");
                $row3=mysqli_fetch_array($result3); 
                $name=$row3['NAME'];  
                

                $query4="SELECT MODEL from cars where V_ID='$vid'";
                $result4=mysqli_query($con,$query4) or die("error");
                $row4=mysqli_fetch_array($result4); 
                $car=$row4['MODEL'];                     
                    

                }
    
                ?>
                    <br /><br />

                    <form method="post" action="return.php">

                        <label for="fname">Name: </label>
                        <input class="ips" type="text" name="fname" id="fname" autocomplete="off" readonly />

                        <label for="mod">Model: </label>
                        <input class="ips" type="text" name="mod" id="mod" autocomplete="off" readonly />

                        <label for="sdate">Start Date:</label>
                        <input class="ips" type="date" name="sdate" id="sdate" readonly autocomplete="off" />

                        <label for="edate">End Date:</label>
                        <input class="ips" type="date" name="edate" id="edate" readonly autocomplete="off" />

                        <label for="amnt">Amount Due: </label>
                        <input class="ips" type="number" name="amnt" id="amnt" readonly autocomplete="off" />


                        <input class="ips" type="number" name="r" id="r" readonly autocomplete="off" style="display:none;" />

                        <input class="sub" type="submit" value="Return" name="sub" />

                    </form>




            </section>

            <script type="text/javascript">
                var name = "<?php echo $row3['NAME'];?>";
                var model = "<?php echo $row4['MODEL'];?>";
                var st = "<?php echo $row2['S_DATE'];?>";
                var ed = "<?php echo $row2['E_DATE'];?>";
                var amount = "<?php echo $row2['AMOUNT'];?>";
                var r = "<?php echo $_POST['rid'];?>"

                document.getElementById('fname').value = name;
                document.getElementById('mod').value = model;
                document.getElementById('sdate').value = st;
                document.getElementById('edate').value = ed;
                document.getElementById('amnt').value = amount;
                document.getElementById('r').value = r;

            </script>

            <footer>

            </footer>

        </div>

    </div>







    <!--    FOOTER CONTANING THE ADDRESS, COPYRIGHT & E-MAIL-->



</body>

</html>
