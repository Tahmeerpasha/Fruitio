<!DOCTYPE html>
<html>
<head>
	<title>Fruitio-Login</title>
	<!-- <link rel="stylesheet" type="text/css" href="signin2.css"> -->
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>
<body>
<?php
include("dbcon.php");
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	session_start();
	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$password1 = $_POST['password1'];
	$password2 = $_POST['password2'];
	$role = $_POST['role'];	
	$gender = $_POST['gender'];
	if ($password1 == $password2) {
		$sql = "INSERT INTO `details` (`Name`, `Email`, `Phone`, `Password`, `Role`, `Gender`) VALUES ('$name', '$_SESSION[email]', '$phone', '$password2', '$role', '$gender')";
		$con1 = mysqli_query($connection, $sql);
		if (!$con1)
		echo "<br>Table creation unsuccessful" . mysqli_error($connection);
	}else{
		$error = 'incorrect email or password!';
		echo '<span class="error-msg">'.$error.'</span>';
	}

}
?>
<style>
	body{
	margin: 0;
	padding: 0;
	display: flex;
	justify-content: center;
	align-items: center;
	min-height: 100vh;
	font-family: 'Jost', sans-serif;
	background: linear-gradient(135deg, #71b7e6, #9b59b6);
    /* background-image: url(https://api.unsplash.com/search/photos?query=movies); */
	background-color:  linear-gradient(135deg, #71b7e6, #9b59b6);
    border-radius: 10px;
	box-shadow: 5px 20px 50px #000;
}

main{
	width: 350px;
	height: 500px;
	background: #71b7e6;
	overflow: visible;
	background: url("1.jpg") no-repeat center/ cover;
	border-radius: 10px;
	box-shadow: 5px 20px 50px #000;
	
}
	form {
    width: 300px;
	height: 300px;
    margin: 0 auto;
	align-content: center;
	border-radius: 10px;
}

label {
    font-size: 16px;
    display:block;
    margin-top: 20px;
}

input[type="text"], input[type="password"] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 1px solid #ccc;
    border-radius: 4px;
}

input[type="submit"] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;

}

input[type="submit"]:hover {
    background-color: #45a049;
}

label > input[type="radio"]{
    margin-right: 8px;
}
h1{
	text-align: center;
}
.Heading{
  font-size: 25px;
  font-weight: 500;
  position: relative;
}

</style>
<form action="login.php" method="post">
<div class="main">
	<h1 class="Heading">SIGN IN</h1>

    <label for="username">Email id</label>
    <input type="text" id="username" placeholder="Enter your email ID" name="emailid">
    <label for="password">Password</label>
    <input type="password" id="password" placeholder="Enter your password" name="password">
    <label>Select user type:</label>
    <label>
        <input type="radio" name="user-type" value="admin">
        Admin
    </label>
    <label>
        <input type="radio" name="user-type" value="user">
        User
    </label>
    <input type="submit" value="Login">
</div>
</form>


<!-- 
<?php
    // Get the values from the form
    $emailid = $_POST['emailid'];
    $password = $_POST['password'];
    $userType = $_POST['user-type'];

    if ($userType == "admin") {
        // Check the admin credentials
        $query = "SELECT * FROM details WHERE Email='$emailid' AND Password='$password' ";
        $result = mysqli_query($connection, $query);
    } else {
        // Check the user credentials
        $query = "SELECT * FROM users WHERE Email='$emailid' AND Password='$password'";
        $result = mysqli_query($connection, $query);
    }

    // Check if the query returned a valid result
    if (mysqli_num_rows($result) > 0) {
        // Start a session and set a session variable to indicate that the user is logged in
        session_start();
        $_SESSION['logged_in'] = true;
        $_SESSION['emailid'] = $emailid;
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
?> -->




</body>
</html>