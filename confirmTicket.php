<?php
session_start();


include_once "inc_IntermediaryClass.php";


if (isset($_POST['paymentButton'])) {
    # code...
    $cardNumber = $_POST['cardNumber'];
    if(is_numeric($cardNumber) && (strlen($cardNumber)==16)){
        #valid card number
        $cardName = trim($_POST['cardName']);
        if(strlen($cardName)>0 && !is_numeric($cardName)){
            #valid name

            
            if(isset($_POST['expiryMonth']) && isset($_POST['expiryYear'])){
                
            $cardExpiryMonth = $_POST['expiryMonth'];
            $cardExpiryYear = $_POST['expiryYear'];

                #expiry date entered
                $cvvEntered = $_POST['cvvNum'];

                if ((is_numeric($cvvEntered)) && (strlen($cvvEntered) == 3)) {
                    # valid cvv...

                    
                    insertPayment(); //call a function to insert the details into database
                   

                } else {
                    # code...
                    echo "Enter valid CVV Number";
                }
                
            } else{
                echo "Please select valid expiry date";
            }
        } else{
            echo "Please enter your name on card";
        }
    } else{
        echo "Please enter valid Card Number";
    }
}

   function  insertPayment() {
        // Retrieve form data
        $cardNumber = $_POST['cardNumber'];
        $cardName = trim($_POST['cardName']);
        $cardExpiryYear = $_POST['expiryYear'];
        $cardExpiryMonth = $_POST['expiryMonth'];
        $cvvEntered = $_POST['cvvNum'];

        // Create an associative array with the payment data
        $paymentData = array(
            "card_number" => $cardNumber,
            "expiry_month" => $cardExpiryMonth,
            "expiry_year" => $cardExpiryYear,
            "cvv" => $cvvEntered,
            "cardholder_name" => $cardName
        );

        // Create an instance of the intermediary class
        $intermediaryClass = new IntermediaryClass();

        // Call the InsertPayment method of the intermediary class
        $result = $intermediaryClass->InsertPayment($paymentData);

        // Check if the insertion was successful
        
        if ($result === true) {
            echo "<script>alert('Payment is successful.');</script>";
            confirmTicketInput();
            
        } else {
            echo "Error: Failed to process payment.";

        } 
    }
    ?>



<?php 
/*
*/
function confirmTicketInput() {


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $booking_id = mt_rand(10000, 59999);
    /*
    $name = isset($_POST["nameTextBox"]) ? $_POST["nameTextBox"] : "";
    $age = isset($_POST["ageTextBox"]) ? $_POST["ageTextBox"] : "";
    $gender = isset($_POST["genderRadio"]) ? $_POST["genderRadio"] : "";
    $email = isset($_POST["emailTextBox"]) ? $_POST["emailTextBox"] : "";
    $mobile = isset($_POST["mobileTextBox"]) ? $_POST["mobileTextBox"] : "";
    $date = isset($_POST["dateTextBox"]) ? $_POST["dateTextBox"] : "";
    $movieTitle = isset($_POST["movieTitle"]) ? $_POST["movieTitle"] : "";
    $showtime = isset($_POST["timeTextBox"]) ? $_POST["timeTextBox"] : "";
    $price = isset($_POST["priceTextBox"]) ? $_POST["priceTextBox"] : "";
    $seats_selected = isset($_POST["seatTextBox"]) ? $_POST["seatTextBox"] : ""; */
     // String of selected seats

    // Convert the string of selected seats into an array
    // $seats_selected_array = explode(", ", $seats_selected);

    // Create an associative array with the booking data
    $bookingData = array(
        "booking_id" => $booking_id,
        "name" => $_SESSION['nameTextBox'],
        "age" => $_SESSION['ageTextBox'],
        "gender" => $_SESSION['genderRadio'],
        "email" => $_SESSION['emailTextBox'],
        "mobile" => $_SESSION['mobileTextBox'],
        "date" => $_SESSION['date'],
        "movieTitle" => $_SESSION['movieTitle'],
        "showtime" => $_SESSION['time'],
        "seats_selected" => $_SESSION['selectedSeats'],
        "price" => $_SESSION['totalTicketPrice']
    );

    // Create an instance of the intermediary class
    $intermediaryClass = new IntermediaryClass();

    // Call the InsertBooking method of the intermediary class
    $result = $intermediaryClass->InsertBooking($bookingData);

    // Check if the insertion was successful
    if ($result === true) {
        echo "<script>alert('Ticket confirmed.');</script>";
        echo "<script>window.setTimeout(function() { window.location.href = 'viewDetails.php'; }, 1000);</script>";

        // Redirect to payment page using a form submission
        
       /*
        echo '<form id="redirectForm" action="paymentPage.php" method="post">';
        echo '<input type="hidden" name="booking_id" value="' . $booking_id . '">';
        echo '</form>';
        echo '<script type="text/javascript">';
        echo 'document.getElementById("redirectForm").submit();';
        echo '</script>';
        exit(); // Stop execution after redirection  */

    } else {
        echo "Error: " . $result; // Display the error message
    }
}
}
?>





