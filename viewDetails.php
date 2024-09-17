<?php
include_once "inc_IntermediaryClass.php";
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Booking Details</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    
    <h2>Booking Details</h2>

    <?php
    $intermediaryClass = new IntermediaryClass();
    $result = $intermediaryClass->GetLatestBooking();
    ?>

    <button onclick="printTicket()">Print Ticket</button>
    <a href="home.php">Back to Home</a>

    <script>
    function printTicket() {
        window.print();
    }
    </script>
</body>
<?php include 'footer.php'?>
</html>

