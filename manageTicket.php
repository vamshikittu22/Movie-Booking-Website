<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Details</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<form action="manageTicket.php" method="POST">
    <p><h2>Manage your Ticket Bookings</h2></p>
    <p><label>Enter Ticket ID:</label><input type="number" name="ticketId" id="ticketId" value='<?php isset($_POST["ticketId"])? print($_POST["ticketId"]): '' ; ?>' placeholder="ticketId"></p>
    <p><input type="submit" name="ticketSubmit" id="ticketSubmit"></p>

    <!--<button  name='cancelTicket' id='cancelTicket'>Cancel Ticket</button> -->


<?php

include_once "inc_IntermediaryClass.php"; // Include the intermediary class

if (isset($_POST['ticketSubmit'])) {
    $ticketId = $_POST['ticketId'];
    $intermediaryClass = new IntermediaryClass();
    $bookingDetails = $intermediaryClass->RetrieveBookingDetails($ticketId);

    echo "<p>
    <button name='printTicket' id='printTicket'>Print Ticket</button>
    <p><input type='submit'  name='cancelTicket' id='cancelTicket' value='Cancel Ticket'></p>
             <a href='home.php'>Go to Movies page</a>
          </p></form>";
        
          
}

if(isset($_POST['cancelTicket'])) {
    $ticketId = $_POST['ticketId'];
    $intermediaryClass = new IntermediaryClass();
    $bookingDetails = $intermediaryClass->CancelTicket($ticketId);

}  


?>

<?php include 'footer.php'?>

</body>
<script>

 document.getElementById('printTicket').addEventListener('click', printTicket, false);

    function printTicket() {

        window.print(); //print the page
}
</script>
</html>
