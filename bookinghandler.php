<?php
include 'db_conn.php';

if (isset($_POST['search'])) {
    $depart = $_POST['department'];
    $date = $_POST['appointment_date'];
    $time = $_POST['appointment_time'];
}

$sql = "SELECT * FROM `avialable` WHERE specialization = '$depart' and date = '$date' and time = '$time'";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0) {
    echo "<h2>Available Doctors for $depart:</h2>";
    echo "<ul>";
    while($row = mysqli_fetch_assoc($result)) {
        // Display doctor details
        echo "<li>{$row['name']} - {$row['specialization']}</li>";
    }
    echo "</ul>";
} else {
    echo "<p>No doctors available for $depart at the moment.</p>";
}