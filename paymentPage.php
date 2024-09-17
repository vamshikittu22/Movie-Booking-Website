<?php 
session_start();



if(isset($_POST['submitDetailsButton'])) {
    $_SESSION['nameTextBox'] = $_POST['nameTextBox'];
    $_SESSION['ageTextBox'] = $_POST['ageTextBox'];
    $_SESSION['genderRadio'] = $_POST['genderRadio'];
    $_SESSION['emailTextBox'] = $_POST['emailTextBox'];
    $_SESSION['mobileTextBox'] = $_POST['mobileTextBox'];

    
if (isset($_POST['submitDetailsButton'])){

    if (!$_POST["nameTextBox"]==NULL) {

        if (!$_POST["ageTextBox"]==NULL || is_numeric($_POST["ageTextBox"])) {
    
            if (isset($_POST["genderRadio"])) {
    
                if ($_POST["emailTextBox"]==NULL || filter_var($_POST["emailTextBox"], FILTER_VALIDATE_EMAIL)) {
    
                    paymentinput();
    
                } else {
    
                    echo'please enter email address ';
                }
            } else { 
    
                echo 'Please select gender';
    
            }
        } else {
    
            echo'Age field cannot be empty';
        }
    } else{
        
       echo' Name field cannot be empty'; 
    }

} else {
    echo 'enter details first';
}

} else {
    echo 'go back';
}


include ("inc_intermediaryClass.php"); ?>

<!DOCTYPE html>
<html lang>
<head>
    <meta charset="UTF-8">
    <title>Payment Page</title>
    <link rel="stylesheet" href="styles.css">
</head>
    <body>

<?php 
function paymentinput() {
    echo '<h1>Payment Details</h1>
        <form method="POST" action="confirmTicket.php" >
            <fieldset>
                <legend>Add a Credit or Debit card</legend>
                <p>
                    <label>Card Number:</label>
                    <input type="number" name="cardNumber" placeholder="Enter 16 digit Card Number" required>
                </p>
                <p>
                    <label>Name on Card:</label>
                    <input type="textbox" name="cardName" placeholder="Enter Name" required>
                </p>
                <p>
                    <label>Expiration date:</label>
                    <select name="expiryMonth" required>
                        <option>01</option>
                        <option>02</option>
                        <option>03</option>
                        <option>04</option>
                        <option>05</option>
                        <option>06</option>
                        <option>07</option>
                        <option>08</option>
                        <option>09</option>
                        <option>10</option>
                        <option>11</option>
                        <option>12</option>
                    </select>
                    <select name="expiryYear" required>
                        <option>2024</option>
                        <option>2025</option>
                        <option>2026</option>
                        <option>2027</option>
                        <option>2028</option>
                        <option>2029</option>
                        <option>2030</option>
                        <option>2031</option>
                        <option>2032</option>
                        <option>2033</option>
                        <option>2034</option>
                        <option>2035</option>
                    </select>
                </p>
                <p>
                    <label>Enter CVV Number:</label>
                    <input type="textbox" name="cvvNum" placeholder="CVV" size="3" required>
                </p>
                <p>
                    <input type="submit" name="paymentButton" value="Submit">
                </p>
        </fieldset>
    </form>';
}
    ?>
</body>
</html>


