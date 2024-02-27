<?php
error_reporting(0);
  require_once 'Untitled-1.php';
  require_once 'function.php';
  $result = display_data('patient_register');
?> 

<!-- //html code  -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Registration</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #e3f0f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #a2f4e8;
           
        }
        .container:hover{
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }

        h1 {
            font-size: 24px;
            color: #333;
            padding-left: 10px;
        }

        .form-group {
            margin-bottom: 20px;
            padding: 10px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="mobile_no"],
        input[type="date"],
        select {
            width: 100%;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        button {
            background-color: #90bceb;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }
        .home{
            display: flex;
            justify-content: space-between;
            padding-left: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Patient Registration</h1>
        <form action="#" method="POST" onsubmit="return validation()">
            <div class="form-group">
                <label for="name">Full Name</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="mobile no">Mobile no (+91)</label>
                <input type="mobile_no" id="mobile_no" name="mobile_no" required>
            </div>
            <div class="form-group">
                <label for="dob">Date of Birth</label>
                <input type="date" id="dob" name="dob" required>
            </div>
            <div class="form-group">
                <label for="gender">Gender:</label>
                <select id="gender" name="gender" required>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>
            </div>
            <div class="form-group">
                <label for="district">District</label>
                <select id="district" name="district" required>
                    <option value="purba Bardhaman">Purba Bardhaman</option>
                    <option value="Nadia">Nadia</option>
                    <option value="Malda">Malda</option>
                    <option value="Malda">Kolkata</option>
                </select>
            </div>
            <div class="home">
            <button type="submit" name="submit" onclick="validation()" value="Register">Register</button>
            <span><a href="index.html">Back to Home</a></span>
            </div>
        </form>
    </div>
</body>
</html>
<!-- html code end -->

<?php
  if(isset($_POST['submit']))
  {
    $name = $_POST['name'];
    $mobile = $_POST['mobile_no'];
    $dob= $_POST['dob'];
    $gender = $_POST['gender'];
    $district = $_POST['district'];

    $query = "INSERT INTO patient_register values('$name','$mobile','$dob','$gender','$district')";
    $data=mysqli_query($con,$query);

    if($data)
    {
        echo"<script>alert('Successfully Done !') </script>"; 
    }
    else{
        echo"<script>alert('Incorrect Data !') </script>";
    }
  }
  
?>