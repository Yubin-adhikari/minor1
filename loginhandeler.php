<?php
include 'db_conn.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $passwd = $_POST['passwd'];

    $query = "SELECT * FROM userinfo WHERE name = '$name' AND passwd = '$passwd'";
    $data = mysqli_query($conn, $query);

    $total = mysqli_num_rows($data);

    if ($total === 1) {
        // Valid credentials
        $_SESSION["email"] = $email;
        $_SESSION["location"] = $location;

        header("Location: home.php");
        exit();
    } else {
        echo "Incorrect email address or password";
    }
} else {
    echo "Chill ma hai";
}