<?php
/*require_once('Untitled-1.php');
$query = "select * from patient1";
$result = mysqli_query($con,$query);
*/

require_once 'Untitled-1.php';
require_once 'function.php';
$result = display_data('admin');
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />

    <title>Admin Panel</title>
</head>

<body>
    <div class="container">
        <div class="sidebar">
            <ul>
                <li>
                    <a href="#">
                        <i class="fa-solid fa-bars"></i>
                        <div class="title">Dashboard</div>
                    </a>
                </li>
                <li>
                    <a href="register1.php">
                        <i class="fas fa-th-large"></i>
                        <div class="title">New Register(Admin)</div>
                    </a>
                </li>
                <li>
                    <a href="newadmin.php">
                        <i class="fas fa-stethoscope"></i>
                        <div class="title">Patient Data</div>
                    </a>
                </li>
                <li>
                    <a href="doctordata.php">
                        <i class="fas fa-user-md"></i>
                        <div class="title">Doctors Data</div>
                    </a>
                </li>
                <li>
                    <a href="admindata.php" id="active-link">
                        <i class="fas fa-puzzle-piece"></i>
                        <div class="title">Admin Data</div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-hand-holding-usd"></i>
                        <div class="title">payments</div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-cog"></i>
                        <div class="title">Settings</div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-question"></i>
                        <div class="title">Help</div>
                    </a>
                </li>
            </ul>
        </div>
        <div class="main">
            <div class="top-bar">
                <div class="search">
                    <input type="text" name="search" placeholder="search here(user id)">
                    <label for="search"><i class="fas fa-search"></i></label>
                </div>
                <i class="fas fa-bell"></i>
                <div class="user">
                    <img src="doctor1.jpg" alt="avatar">
                </div>
            </div>
            <div class="cards">
                <div class="card">
                    <div class="card-content">
                        <div class="number">
                            <?php
                            require_once 'Untitled-1.php';
                            require_once 'function.php';
                            echo getcount('admin');

                            ?>
                        </div>
                        <div class="card-name">Admin</div>
                    </div>
                    <div class="icon-box">
                        <i class="fa-solid fa-person"></i>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="number">
                            <?php
                            require_once 'Untitled-1.php';
                            require_once 'function.php';
                            echo getcount('doctor');

                            ?>
                        </div>
                        <div class="card-name">Doctor</div>
                    </div>
                    <div class="icon-box">
                        <i class="fas fa-user-md"></i>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="number">
                            <?php
                            require_once 'Untitled-1.php';
                            require_once 'function.php';
                            echo getcount('patient1');

                            ?>
                        </div>
                        <div class="card-name">Active Patient</div>
                    </div>
                    <div class="icon-box">
                        <i class="fas fa-diagnoses"></i>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="number">00</div>
                        <div class="card-name">Fund</div>
                    </div>
                    <div class="icon-box">
                        <i class="fas fa-dollar-sign"></i>
                    </div>
                </div>

            </div>
            <div class="heading">
                <h2>Admins List</h2>
                <button class="btn"><a href="#">View All</a></button>
            </div>
            <!--This is for table code-->
            <!-- <div class="tables"> -->
            <!--<div class="tables">-->
                    <div class="last-appoinments">
                        <!-- <div class="heading">
                            <h2>Admin List</h2>
                            <a href="#" class="btn">View All</a>
                        </div> -->
                        <table class="appoinments">
                            <thead>
                                <td>User Id</td>
                                <td>User Name</td>
                                <td>Password</td>
                            </thead>
                            <tbody>
                                <tr>
                                <?php
                                  while($row = $result->fetch_assoc())
                                  {
                                ?>
                                <td><?php echo $row['username'];?> </td>
                                <td><?php echo $row['email'];?> </td>
                                <td><?php echo $row['password'];?> </td>
                                </tr>
                                <?php
                                  }
                                ?>
                            </tbody>
                        </table>
                    </div>   
                <!-- </div> -->
            <!-- </div> -->
        </div>
    </div>
</body>

</html>