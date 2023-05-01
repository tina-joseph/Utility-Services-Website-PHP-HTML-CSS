
<?php
session_start();
if ($_SESSION["VenID"] == '') {
    $html = "<html><body>Please login.</body></html>";
    echo $html;
} else {
    include 'dbconnection.php';

    if (isset($_POST['datetime'])) {
        $datetimes = $_POST['datetime'];
        $VenID = $_SESSION["VenID"];
        $existing_slots = array();

        // Check which slots already exist in the database
        foreach ($datetimes as $datetime) {
            $query = "SELECT * FROM VendorAvailability WHERE VenID='$VenID' AND Date='$datetime'";
            $result = mysqli_query($conn, $query);
            if (mysqli_num_rows($result) > 0) {
                $existing_slots[] = $datetime;
            }
        }

        // Insert only the slots that do not already exist in the database
        $new_slots = array_diff($datetimes, $existing_slots);
        foreach ($new_slots as $datetime) {
            if ($datetime <= date('Y-m-d H:i:s')) {
                echo "<script>alert('Please select a slot with future date.');
                window.location.href = 'slotcreate.php';</script>";
                exit();
            } else {
                $query = "INSERT INTO VendorAvailability (VenID, Date, is_available) VALUES ('$VenID', '$datetime', 1)";
                if (mysqli_query($conn, $query)) {
                    // Success alert
                    echo "<script>alert('Slot inserted successfully.');
                            window.location.href = 'slotcreate.php';</script>";
                } else {
                    // Error alert
                    echo "<script>alert('Error: " . mysqli_error($conn) . "')</script>";
                }
            }
        }

        // Alert if all selected slots already exist in the database
        if (count($new_slots) == 0 && count($existing_slots) == count($datetimes)) {
            echo "<script>alert('All selected slots already exist. Please select another slot.');
                        window.location.href = 'slotcreate.php';</script>";
            exit();
        }
    }
}
