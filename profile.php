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
    <div class="container">
        <nav>
            <div class="logo-img">
                <img src="assets/background/logosys.png" alt="">
            </div>
            <ul>
                <li><a href="index.php">Dashboard</a></li>
                <li><a href="avslot.php">Available Park Slot</a></li>
                <li><a href="#">History</a></li>
                <li><a class="active">Profile</a></li>
            </ul>
        </nav>
        <div class="content">
            <div class="dash">
                <center><h3>PROFILE</h3></center>
                <div class="form-area">
                    <h4>Personal Details</h4>
                    <div class="form">
                        <label for="">Firstname</label><br>
                        <input type="text" name="fname" readonly><br>
                        <label for="">Lastname</label><br>
                        <input type="text" name="lname" readonly><br><br><hr><br>
                        <label for="">Address</label><br>
                        <input type="text" name="address" readonly><br>
                        <label for="">Age</label><br>
                        <input type="text" name="age" readonly><br>
                        <label for="">Contact Number</label><br>
                        <input type="text" name="cnum" readonly><br>
                        <label for="">Email</label><br>
                        <input type="text" name="email" readonly><br><br>
                        <input type="submit" name="edit" value="EDIT" class="create"><br>
                        <br><hr><br>
                        <input type="submit" name="logout" value="LOGOUT" class="logout">
                    </div>
                </div>
            </div>
           
        </div>
    </div>
</body>
</html>