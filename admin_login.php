<?php
// Establish database connection (update credentials)
// $servername = "localhost";
// $username = "your_username";
// $password = "your_password";
// $dbname = "user_authentication";
$conn = mysqli_connect("localhost:3307","root","","patient");

// $conn = new mysqli($servername, $username, $password, $dbname);

// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in</title>
    <link rel="stylesheet" href="loginstyle.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="wrapper">
        <form action="" method="POST">
            <h1>Admin Login</h1>
            <div class="input-box">
                <input type="text" name="username" required>
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input type="password" name="password" required>
                <i class='bx bx-lock'></i>
            </div>

            <div class="remember_forgot">
                <label> <input type="checkbox">
                Remember me</label>
                <a href="#"> Forgot password?</a>
            </div>

            <button type="submit" class="btn" name="submit">Login</button>
            <!-- <div class="register_link">
                <p>Don't have an account? <a href="#">Register</a></p>
            </div> -->
        </form>
    </div>
</body>
</html>

<?php

if(isset($_POST['submit'])){
// Retrieve user input
$username = $_POST['username'];
$password = $_POST['password'];

// Check user credentials
$sql = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
$result = mysqli_query($conn,$sql);
$total= mysqli_num_rows($result);
echo $total;

if ($total == 1) {
    echo "<script>alert('Successfully Done !') </script>";
    header('location:newadmin.php');
    // Redirect to a dashboard or another page
} else {
    echo "<script>alert('Login failed! check your id and password!!') </script>";
}
}

$conn->close();
?>