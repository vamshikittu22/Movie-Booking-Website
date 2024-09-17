<?php  
session_start(); //start a session
$movieTitle = isset($_SESSION['movieTitle']) ? $_SESSION['movieTitle'] : 'Unknown Movie';
?>


<!DOCTYPE html>
<html>
  <head>
  <link rel="stylesheet" href="styles.css">

  <?php
  if (isset($_POST['submitButton'])) {

     //get all the input value from post and store is session
     $_SESSION['adultTotal'] = $_POST['adultTotal'];
     $_SESSION['seniorTotal'] = $_POST['seniorTotal'];
     $_SESSION['childTotal'] = $_POST['childTotal'];
     $_SESSION['date'] = $_POST['date'];
     $_SESSION['time'] = $_POST['time'];
     $_SESSION['totalCount'] = $_POST['totalCount'];

     $totalPrice = $_SESSION['adultTotal'] + $_SESSION['seniorTotal'] + $_SESSION['childTotal'];
    

    if ($_SESSION['totalCount'] > 10) {

       //give error message and directv to enter the ticket value. 
       echo 'Alert!!!: Maximum 10 tickets are allowed. please go back and enter correct number.';
       echo '<a href="bookTicket.php">Button</a>';

    } else {
     

      echo '<fieldset><legend><p>Seating Details:</p>
      </legend>
      <p>You have selected '.$_SESSION['totalCount'].' seats.</p>
      
      <p>Choose the seats as per your choice:</p>
      </fieldset>';

      echo '<textarea id="textarea"></textarea>';

       // textboxes displaying selected seats and their count
       echo '<form action="enterDetails.php" method="POST" >

       <!-- making the textbox hidden to store value of selected seats-->
       <input type="hidden" name="getSeatCount" id="getSeatCount" value="'. $_SESSION['totalCount'] .'" readonly>
       <input type="hidden" name="totalTicketPrice" id="totalTicketPrice" value="'. $totalPrice .'" readonly>

       <p><label>Selected Seats:</label><input type="text" name="selectedSeats" id="selectedSeats" readonly> 
       <label>Total Seats:</label><input type="text" name="totalSeats" id="totalSeats" readonly></p>
       <p><input type="submit" name="seatSubmitButton" id="seatSubmitButton"></p>
       </form>';



       // creating the seating using loops
 echo "<div class='screen'>SCREEN</div><div class='seats-container'>
       <table> <tbody>";

 for ($i = 'A'; $i <= 'H'; $i++) {
   echo '<tr>';

   echo "<th class='row-label'>" . $i . "</th>"; // Display alphabet label within the row

   for ($j = 1; $j <= 11; $j++) {
     echo "<td class='seat' name='seat$i$j' id='$i$j'>$i$j</td>";
   }

   echo '</tr>';
 }
 echo " </tbody> </table> ";
      

      }
    
  } else {

    // if  totalCount is not submitted in $_POST
    echo "Error: Total Tickets not found in form submission. please go back and enter correct number.";
    echo '<a href="bookTicket.php">Button</a>';

  }

?>


  </head>

  
  <style type="text/css">
      body {
        font-family: sans-serif;
        margin: 50px;
        display: flex;
        flex-direction: column;
        align-items: center;
      }

      h1 {
        text-align: center;
        margin-bottom: 20px;
      }

      .screen {
        background-color: #ddd;
        padding: 20px;
        width: 600px; /* Adjust width as needed */
        text-align: center;
        font-weight: bold;
      }

      .seats-container table {
        table-layout: fixed;
      }

      .seats-container td {
        display: table-cell;
        width: 50px; /* Adjust width as needed */
      }

      .seat {
        width: 50px;
        height: 50px;
        margin: 2px;
        border: 1px solid #ccc;
        border-radius: 5px;
        text-align: center;
        display: flex;
        justify-content: center;
        align-items: center;
      }

      .selected {
        background-color: lightgreen;
      }

      .seats-container {
        display: flex;
        justify-content: space-between;
        margin: 20px 0;
      }

      .row-label {
        /* Position the alphabet label to the left */
        margin-left: 10px; /* Adjust margin as needed */
        font-size: 18px;
        margin-bottom: 5px;
      }

      .seat-labels {
        display: flex;
        flex-direction: column;
        align-items: center;
        margin: 20px 0;
      }

      .seat-labels.left {
        margin-right: 20px;
      }

      .seat-labels.right {
        margin-left: 20px;
      }

      .seat-labels span {
        font-size: 18px;
        margin-bottom: 5px;
      }
    </style>

  <body>
    </form>

   
<script type="text/javascript" src="seatSelection.js ">
    
</script>
  
  </body>
</html>

