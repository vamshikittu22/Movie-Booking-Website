<?php
/***********************************
 * PHP Intermediary class FILE
 ***********************************/
//include the database class file:
include ("inc_databaseClass.php");

//intermediary class
class IntermediaryClass
{
    function InsertBooking($bookingData)
    {
        $dbClass = new DatabaseClass();
        return $dbClass->Insert("Booking", $bookingData);
    }
    function GetLatestBooking() {
        $dbClass = new DatabaseClass();
        $sql = "SELECT * FROM Booking ORDER BY booking_timestamp DESC LIMIT 1";
        return $dbClass->Select($sql);
    }
    function InsertPayment($paymentData)
    {
        $dbClass = new DatabaseClass();
        return $dbClass->Insert("payments", $paymentData);
    }
    function RetrieveBookingDetails($ticketId)
    {
        $dbClass = new DatabaseClass();
        $sql = "SELECT * FROM Booking WHERE booking_id = '$ticketId'";
        $result = $dbClass->Select($sql);

        // Check if there is a result
        if ($result && $result->num_rows > 0) {
            return $result->fetch_assoc(); // Return the booking details
        } else {
            return null; // Return null if no booking details found
        }
    }

    function CancelTicket($ticketId) {
        $dbClass = new DatabaseClass();
        $deleteSql = "DELETE FROM Booking WHERE booking_id = '$ticketId'";
        $result = $dbClass->DeleteRecords($deleteSql);
        return $result;
    }
}

?>