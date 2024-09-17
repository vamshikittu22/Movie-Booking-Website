<?php 
session_start();
?>

<!DOCTYPE html>
<html>
    <head>

    <link rel="stylesheet" href="styles.css">

    </head>
  <body>
    <?php include 'header.php' ?>
    
       
            <?php

            if(isset($_POST['movieTitle'])) {

                $_SESSION['movieTitle'] = $_POST['movieTitle'];

                echo "<p>You have selected to book tickets for movie: <strong>".$_SESSION['movieTitle']."</strong></p>";
                chooseTickets();

            } else {
                echo "<p>No movie selected</p>";
            }
            ?>


<?php  
function chooseTickets() {
    echo '<div class="container">
            <form action="seatSelection.php" method="POST" id="bookingForm">
                <p>
                    <fieldset class="outerFieldset">
                        <h2>Select Number of Tickets</h2>

                        <table class="ticket-details">
                            <thead>
                                <tr>
                                    <th>Ticket</th>
                                    <th>$ per head</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Adult</td>
                                    <td>$20</td>
                                    <td>
                                        <input type="number" name="adultQuantity" id="adultQty" value="0" min="0" max="5">
                                    </td>
                                    <td>
                                        <input type="number" name="adultTotal" id="adultTotal" value="0" readonly>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Senior</td>
                                    <td>$15</td>
                                    <td>
                                        <input type="number" name="seniorQuantity" id="seniorQty" value="0" min="0" max="5" >
                                    </td>
                                    <td>
                                        <input type="number" name="seniorTotal" id="seniorTotal" value="0" readonly>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Child</td>
                                    <td>$10</td>
                                    <td>
                                        <input type="number" name="childQuantity" id="childQty" value="0" min="0" max="5">
                                    </td>
                                    <td>
                                        <input type="number" name="childTotal" id="childTotal" value="0" readonly>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <p><h6>*You can select a maximum of 10 seats..!!</h6></p>
                            <p><label for="date">Select Date:</label>
                            <input type="date" id="date" name="date" min="'.date('Y-m-d').'" required></p>

                        <div><label>Select Time: </label>
                            <select id="time" name="time" required>
                                <option value="12:00 PM">12:00 PM</option>
                                <option value="1:00 PM">1:00 PM</option>
                                <option value="6:00 PM">6:00 PM</option>
                                <option value="9:00 PM">9:00 PM</option>
                            </select>
                        </div>

                        <div>
                            <p><label>Total Seats:</label>
                            <input type="number" name="totalCount" id="totalCount" readonly></p>
                        </div>
                        </p>

                        <p>
                            <input type="submit" name="submitButton" id="submitButton" value="Click to select Seats">
                        </p>

                    </fieldset>
                </p>
            </form>
        </div>';
}

    ?>
        <?php include 'footer.php'; ?>
    </body>
    
    <script type="text/javascript"  src='bookTicket.js'>
    </script>
    

</html>

