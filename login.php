<?php
    // Get the values from the form
    $emailid = $_POST['emailid'];
    $password = $_POST['password'];
    $userType = $_POST['user-type'];

    // Connect to the MySQL database
    include("dbcon.php");

    if ($userType == "admin") {
        // Check the admin credentials
        $query = "SELECT * from details where email = '$emailid' AND password = '$password'";
        $result = mysqli_query($connection, $query);
    } else {
        // Check the user credentials
        $query = "SELECT * from details where email = '$emailid' AND password = '$password'";
        $result = mysqli_query($connection, $query);
    }

    // Check if the query returned a valid result
    if (mysqli_num_rows($result) > 0) {
        // Start a session and set a session variable to indicate that the user is logged in
        session_start();
        $_SESSION['logged_in'] = true;
        $_SESSION['username'] = $username;
        $_SESSION['user_type'] = $userType;

        // Redirect the user to the appropriate page
        if ($userType == "admin") {
            header("Location: admin.php");
        } else {
            header("Location: option.php");
        }
    } else {
        echo "Invalid username or password.";
    }

    // Close the connection
    mysqli_close($connection);
?>

