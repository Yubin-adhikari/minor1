


<?php
include 'db_conn.php';


// Get user data from the form
$uname = $_POST['name'];
$passwd = $_POST['passwd'];// Hash the password

$age = $_POST['age'];
$number = $_POST['number'];
$location = $_POST['location'];

// Check if the email is already taken


    // Use prepared statement to prevent SQL injection
    $sql = "INSERT INTO `userinfo`(`name`, `passwd`, `age`, `contact`, `location`) VALUES (?, ?, ?,  ?, ?)";
    $stmt = mysqli_prepare($conn, $sql);

    // Bind parameters
mysqli_stmt_bind_param($stmt, "sssss", $uname, $passwd, $age, $number, $location, /* Add appropriate value here*/);

    // Execute the statement
    $result = mysqli_stmt_execute($stmt);

    // Check the result
    if ($result) {
        // Registration successful, set session variables
       
        echo "Form submitted successfully. <br>";
        echo '<button onclick="location.href=\'home.php\'">Go to Home</button>';
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    // Close the statement
    mysqli_stmt_close($stmt);


// Close the connection
mysqli_close($conn);