<?php 
session_start();
$movieTitle = isset($_SESSION['movieTitle']) ? $_SESSION['movieTitle'] : 'Unknown Movie';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enter Details</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<?php 
include 'header.php'; 

if (!isset($_POST['seatSubmitButton'])) {
    echo '<h1>Error: Go Back!!</h1>';
    echo '<a href="seatSelection.php">Back</a>';
} else {
    $_SESSION['selectedSeats'] = $_POST['selectedSeats'];
    $_SESSION['totalSeats'] = $_POST['totalSeats'];
    $_SESSION['totalTicketPrice'] = $_POST['totalTicketPrice'];
    
    echo '<h1>Enter Details</h1>';
    echo '<form method="post" action="paymentPage.php">';
    echo '<fieldset>';
    echo '<legend>Personal Information</legend>';
    echo '<p><label for="nameTextBox">Name:</label><input type="text" name="nameTextBox" id="nameTextBox" required></p>';
    echo '<p><label for="ageTextBox">Age:</label><input type="number" name="ageTextBox" id="ageTextBox" min="0" required></p>';
    echo '<p>';
    echo '<label>Gender:</label>';
    echo '<label for="maleRadio">Male</label><input type="radio" name="genderRadio" id="maleRadio" value="Male" required>';
    echo '<label for="femaleRadio">Female</label><input type="radio" name="genderRadio" id="femaleRadio" value="Female" required>';
    echo '</p>';
    echo '<p><label for="emailTextBox">Email:</label><input type="email" name="emailTextBox" id="emailTextBox" required></p>';
    echo '<p><label for="mobileTextBox">Mobile:</label><input type="tel" id="mobileTextBox" name="mobileTextBox" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="123-456-7890" required></p>';
    echo '</fieldset>';

    echo '<fieldset>';
    echo '<legend>Booking Information</legend>';
    echo '<p><label for="movieTitle">Movie:</label><input type="text" id="movieTitle" name="movieTitle"  value="' . $movieTitle . '" readonly></p>';
    echo '<p><label for="dateButton">Date:</label><input type="text" id="dateTextBox" name="dateTextBox"  value="' . $_SESSION['date'] . '" readonly></p>';
    echo '<p><label for="showTime">Showtime:</label><input type="text" id="timeTextBox" name="timeTextBox" value="' . $_SESSION['time'] . '" readonly ></p>';
    echo '<p><label for="totalSeats">Total Seats:</label><input type="number" id="numberTextBox" name="numberTextBox" value="' . $_SESSION['totalSeats'] . '" readonly></p>';
    echo '<p><label for="seatTextBox">Seats Selected:</label><input type="text" name="seatTextBox" id="seatTextBox" value="' . $_SESSION['selectedSeats'] . '" readonly ></p>';
    echo '<p><label for="priceTextBox">Total Price:</label><input type="text" name="priceTextBox" id="priceTextBox" value="' . $_SESSION['totalTicketPrice'] . '$" readonly ></p>';
    echo '</fieldset>';

    echo '<button type="submit" name="submitDetailsButton" id="submitDetailsButton">Confirm Booking</button>';
    echo '</form>';
}
?>
</body>
</html>
