<?php
require("connection.php");
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $db_password = $row["passwords"];
        $role = $row["role"];

        // verify password (plain text version)
        if ($password == $db_password) {
            $_SESSION["user_id"] = $row["id"];
            $_SESSION["username"] = $row["username"];
            $_SESSION["role"] = $role;

            if ($role == "Admin" || $role == "Manager") {
                header(header: "Location: admindashboard.php");
            } elseif ($role == "Cashier") {
                header(header: "Location: cashierdashboard.php");
            } elseif ($role == "Barista" || $role == "Staff") {
                header(header: "Location: staffdashboard.php");
            } else {
                echo "<p style='color:red;'>Unknown role. Contact system admin.</p>";
            }
            exit();
        } else {
            echo "<p style='color:red;'>Incorrect password!</p>";
        }
    } else {
        echo "<p style='color:red;'>No account found with that username.</p>";
    }
}
?>
