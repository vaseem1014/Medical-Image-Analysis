<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $servername = "127.0.0.1";
    $username = "root";
    $password = "";
    $database = "medimage";

    $conn = mysqli_connect($servername, $username, $password, $database);
    $name = $_POST["name"];
    $email = $_POST["email"]; 
    $phone = $_POST["phone"];
    $password = $_POST["password"];
    $profile_picture = isset($_FILES["profile_picture"]["name"]) ? $_FILES["profile_picture"]["name"] : "default-avatar.png"; // Use default picture if no picture uploaded
    
    $error = [];     
    
    $sql = "SELECT * FROM medimage WHERE phone='$phone' OR email='$email'";
    
    $result = mysqli_query($conn, $sql);
    
    $num = mysqli_num_rows($result); 

    if($num == 0) {
        // Save profile picture to server if uploaded
        if(isset($_FILES["profile_picture"]["name"])) {
            $target_directory = "profile-pictures/";
            $target_file = $target_directory . basename($_FILES["profile_picture"]["name"]);
            move_uploaded_file($_FILES["profile_picture"]["tmp_name"], $target_file);
        }
                
        // Hash the password
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        
        // Insert user data into database
        $sql = "INSERT INTO `medimage` (`name`, `email`, `phone`, `password`, `profile_pic`) VALUES ('$name', '$email', '$phone', '$hashed_password', '$profile_picture')";
    
        $result = mysqli_query($conn, $sql);
    
        if ($result) {
            header('location: login.php');
        }
        else { 
            $Error = "User Already Exist"; 
        }      
    } 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Register</title>
    
    <link rel="shortcut icon" href="preloader.svg" type="image/svg+xml">
    <link rel="stylesheet" href="register.css">
</head>
<body>
    <div class="header"></div>

    <?php
    if(isset($error)){
        foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
        };
    };
    ?>
    <div class="wrapper">
        <div class="form-box register">
            <h2>Register</h2>
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="input-box profile-picture-container">
                    <label for="profile_picture" class="label">
                        Click to upload Image
                    </label>
                    <input type="file" name="profile_picture" id="profile_picture" accept="image/*">
                </div>
                <div class="input-box">
                    <span class="icon"><i class="fa-solid fa-user"></i></span>
                    <input type="text" name="name" id="username" required>
                    <label for="username">Username</label>
                </div>
                <div class="input-box">
                    <span class="icon"><i class="fa-solid fa-envelope"></i></span>
                    <input type="email" name="email" id="email" required>
                    <label for="email">Email</label>
                </div>
                <div class="input-box">
                    <span class="icon"><i class="fa-solid fa-phone"></i></span>
                    <input type="text" name="phone" id="phone" required>
                    <label for="phone">Phone Number</label>
                </div>
                <div class="input-box">
                    <span class="icon"><i class="fa-solid fa-lock"></i></span>
                    <input type="password" name="password" id="password" required>
                    <label for="password">Password</label>
                </div>
                <div class="rember-forgot">
                    <label><input type="checkbox"> I agree terms & conditions</label>
                </div>
                <button type="submit" class="btn">Register</button>
                <div class="login-register">
                    <p>Already have an account? <a href="login.php" class="login-link">Login</a></p>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
