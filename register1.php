<?php
  require_once 'Untitled-1.php';
  require_once 'function.php';
  $result = display_data('admin');
?>  


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration page</title>
    <link rel="stylesheet" href="./Style_2.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</head>
<body>
    <div class="container">
        <div class="form-box">
            <form action="" name="Formfill" onsubmit="return validation()" action="#" method="post">
                <h2>Register</h2>
                <p id="result"></p>
                <div class="input-box">
                    <i class='bx bxs-user'></i>
                    <input type="text" name="Username" placeholder="Username">
                </div>
                <div class="input-box">
                    <i class='bx bxs-envelope'></i>
                    <input type="Email" name="Email" placeholder="Email">
                </div>
                <div class="input-box">
                    <i class='bx bxs-lock'></i>
                    <input type="Password" name="Password" placeholder="Password">
                </div>
                <div class="input-box">
                    <i class='bx bxs-lock'></i>
                    <input type="Password" name="CPassword" placeholder="Confirm password">
                </div>
                <div class="button">
                    <input type="submit" class="btn" onclick="validation()" value="Register" name="submit">
                </div>
                <div class="group">
                    <span><a href="#">Forgot Password?</a></span>
                    <span><a href="newadmin.php">Admin Page</a></span>
                </div>
            </form>
        </div>
        <!-- <div class="popup" id="popup">
            <ion-icon name="checkmark-circle-outline"></ion-icon>
            <h2>Thank You</h2>
            <p>Your Registration was succsesfully done!</p>
            <a href="newadmin.php"><button onclick="CloseSlide()">OK</button></a>
        </div> -->
    </div>
<script src="./index.js"></script>
</body>
</html>

<?php

  if($_POST['submit'])
  {
    $name = $_POST['Username'];
    $email = $_POST['Email'];
    $password = $_POST['Password'];

    $query = "INSERT INTO admin values('$name','$email','$password')";
    $data=mysqli_query($con,$query);

    // if($data)
    // {
    // }
    echo"<script>alert('Successfully Done !') </script>";
  }
//   else{
//     echo"<script>alert('Incorrect Data !') </script>";
//   }
?>