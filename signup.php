<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Register</title>
    <style>
        
      * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, sans-serif;
}

body {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background-color: #f0f0f0;
}

.container {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
}

.box {
    background: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    width: 300px;
}

header {
    font-size: 24px;
    font-weight: bold;
    margin-bottom: 20px;
    text-align: center;
    color: #333;
}

.field {
    margin-bottom: 15px;
}

.field label {
    display: block;
    font-size: 14px;
    margin-bottom: 5px;
    color: #333;
}

.field input {
    width: 100%;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 3px;
    font-size: 14px;
}

.field input:focus {
    border-color: #4CAF50;
    outline: none;
}

.btn {
    width: 100%;
    padding: 10px;
    background: #4CAF50;
    border: none;
    border-radius: 3px;
    font-size: 16px;
    color: #fff;
    cursor: pointer;
}

.btn:hover {
    background: #45a049;
}

.links {
    text-align: center;
    font-size: 14px;
    margin-top: 15px;
}

.links a {
    color: #4CAF50;
    text-decoration: none;
}

.links a:hover {
    text-decoration: underline;
}

.message {
    text-align: center;
    background: #f8d7da;
    color: #721c24;
    padding: 10px;
    border: 1px solid #f5c6cb;
    border-radius: 3px;
    margin-bottom: 15px;
}

    </style>
</head>
<body>
    <div class="container">
        <div class="box form-box">
            <?php 
                include("./conn.php");
                if(isset($_POST['submit'])){
                    $username = $_POST['username'];
                    $email = $_POST['email'];
                    $password = $_POST['password'];

                    // verifying the unique email
                    $verify_query = mysqli_query($con, "SELECT Email FROM user_student WHERE Email='$email'");

                    if ($verify_query) {
                        if (mysqli_num_rows($verify_query) != 0) {
                            echo "<div class='message'>
                                    <p>This email is used, Try another One Please!</p>
                                  </div> <br>";
                            echo "<a href='javascript:self.history.back()'><button class='btn'>Go Back</button>";
                        } else {
                            $insert_query = mysqli_query($con, "INSERT INTO user_student (Username, email, Password) VALUES ('$username', '$email', '$password')");

                            if ($insert_query) {
                                echo "<div class='message'>
                                        <p>Registration successful!</p>
                                      </div> <br>";
                                echo "<a href='login.php'><button class='btn'>Login Now</button>";
                            } else {
                                echo "<div class='message'>
                                        <p>Error occurred during registration: " . mysqli_error($con) . "</p>
                                      </div> <br>";
                                echo "<a href='javascript:self.history.back()'><button class='btn'>Go Back</button>";
                            }
                        }
                    } else {
                        echo "<div class='message'>
                                <p>Error occurred during email verification: " . mysqli_error($con) . "</p>
                              </div> <br>";
                        echo "<a href='javascript:self.history.back()'><button class='btn'>Go Back</button>";
                    }
                } else {
            ?>
            <header>Sign Up</header>
            <form action="" method="POST">
                <div class="field input">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" autocomplete="off" required>
                </div>
                <div class="field input">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" autocomplete="off" required>
                </div>
                <div class="field input">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" autocomplete="off" required>
                </div>
                <div class="field">
                    <input type="submit" class="btn" name="submit" value="Register" required>
                </div>
                <div class="links">
                    Already a member? <a href="login.php">Sign In</a>
                </div>
            </form>
        </div>
        <?php } ?>
    </div>
</body>
</html>
