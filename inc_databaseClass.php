<?php
/***********************************
 * DATA CLASS FILE
 ***********************************/

include ("inc_dbConfig.php");

class DatabaseClass {
    static $connection; //This is a property

    /************* Connect Function  **********/
    public function connect() {
        global $host, $username, $password, $dbname;

        // Try and connect to the database
        if (!isset(self::$connection)) {
            self::$connection = new mysqli($host, $username, $password, $dbname);
        }

        // If connection was not successful, handle the error
        if (self::$connection->connect_error) {
            // Handle error - notify admin, log to a file, show an error screen, etc.,
            return false;
        }

        return self::$connection;
    }

    /* ************ Query Function *********/
    public function Select($query) {
        // Connect to the database
        $connection = $this->connect();

        //Query the database
        $result = $connection->query($query);

        if ($result->num_rows > 0) {
            // Output data of each row
            while ($row = $result->fetch_assoc()) {
                echo "<p>Booking ID: " . $row["booking_id"] . "</p>";
                echo "<p>Name: " . $row["name"] . "</p>";
                echo "<p>Age: " . $row["age"] . "</p>";
                echo "<p>Gender: " . $row["gender"] . "</p>";
                echo "<p>Email: " . $row["email"] . "</p>";
                echo "<p>Mobile: " . $row["mobile"] . "</p>";
                echo "<p>Date: " . $row["date"] . "</p>";
                echo "<p>Showtime: " . $row["showtime"] . "</p>";
                echo "<p>Seats Selected: " . $row["seats_selected"] . "</p>";
                echo "<p>Price: " . $row["price"] . "</p>";
            }
        } else {
            echo "No booking details found.";
        }
    
        if (!$result) {
            return $connection->error;
        } else {
            return $result;
        }
    }

    public function CloseConnection() {
        self::$connection->close();
    }

    /* ************ Insert Function *********/
    public function Insert($tableName, $data) {
        $connection = $this->connect();
        $columns = implode(", ", array_keys($data));
        $values = "'" . implode("', '", array_values($data)) . "'";
        $sql = "INSERT INTO $tableName ($columns) VALUES ($values)";

        if ($connection->query($sql) === TRUE) {
            return true;
        } else {
            return $connection->error;
        }
    }

    public function DeleteRecords($deleteSql) {
        //connect to database
    $connection=$this->connect();
    $result=null; //stores the result of query 
    try {
        if(($result=$connection->query($deleteSql)))
        {
            
            if ($result > 0) {
                
                print '<p> Your Ticket is Cancelled...  </P> ';
            } else {
                print '<p>Ticket not Found with that ID.</p>';
            }
        }
        else
        {
            #if not succesful throw exception
            throw new Exception("Delete query failed".$connection->error);
        }//end if/else
    }
    catch(Exception $e)
    {
        die("ERROR:" .$e->getMessage());//error handling
    }//end try catch
    finally
    {
        $this->CloseConnection();
    }
    }
}
?>
