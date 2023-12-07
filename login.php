<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PSU Park Reservation using QR Code</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    <div class="wrapper">
        <div class="login-container">
            <div class="logo">
                <img src="assets/background/logosys.png" alt="PSU-logo">
            </div>
            <div class="form">
                <center><h3>Login Account</h3></center>
                <form action="" method="POST">
                    <label>Email</label><br>
                    <input type="email" name="email"><br>
                    <label>Password</label><br>
                    <input type="text" name="password"><br><br>
                    <input type="submit" name="login" class="login-btn" value="LOGIN">
                </form><br><hr><br>
                <a href="register.php">
                    <input type="submit"class="create" value="REGISTER ACCOUNT">
                </a>
            </div>
        </div>
    </div>
</body>
</html>

<?php
    if(isset($_POST['login'])) {
        $email = $_POST['email'];
        $password = md5($_POST['password']);

        echo $password;

        require 'config.php';

        $sql = "select * from account where email='$email' and password='$password'";
        $result = mysqli_query($connect, $sql);

        if(session_status() == PHP_SESSION_NONE) {
            session_start();

            if($result->num_rows == 1) {
                $user = $result->fetch_assoc();
                if($email == $user['email'] && $password == $user['password'] && $user['type'] == 'owner') {
                    $_SESSION['uname'] = $email;
                    $_SESSION['passw'] = $password;
                    header('Location: admin/dashboard.php');
                }
                else if($email == $user['email'] && $password == $user['password'] && $user['type'] == 'staff') {
                    $_SESSION['uname'] = $email;
                    $_SESSION['passw'] = $password;
                    header('Location: staff/dashboard.php');
                }
                else if($email == $user['email'] && $password == $user['password'] && $user['type'] == 'user') {
                    $_SESSION['uname'] = $email;
                    $_SESSION['passw'] = $password;
                    header('Location: index.php');
                }
            }

        }
        mysqli_free_result($result);
        mysqli_close($connect);
    }
?>