<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_login.css"
</head>
<body>
<div class="container">
    <div class="box form-box">
            <?php
                include("config.php");
                session_start();

                if(isset($_POST['submit'])){
                    $email = isset($_POST['email']) ? mysqli_real_escape_string($conn, $_POST['email']) : '';
                    $password = mysqli_real_escape_string($conn, $_POST['password']);

                    $result = mysqli_query($conn, "SELECT * FROM users WHERE email='$email' AND password='$password' ") or die("Select Error");
                    $row = mysqli_fetch_assoc($result);

                    if (!empty($row)) {
                        $_SESSION['email'] = $row['email'];
                        // Avoid storing passwords in sessions
                        header("Location: indexR.php");
                        exit();
                    } else {
                        echo "<div class='message'>
                            <p>Wrong Email or Password</p>
                            </div> <br>";
                        echo "<a href='index.php'><button class='btn'>Go Back</button></a>";
                    }
                }
            ?>    
            <header>Login</header>
            <form action="" method="post">
                <div class="field input">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" required>
                </div>

                <div class="field input">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" required>
                </div>

                <div class="field">
                    <input type="submit" class="btn" name="submit" value="Login" required>
                </div>

                <div class="link">
                    Don't have an account? <a href="register.php">Sign Up Now</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>