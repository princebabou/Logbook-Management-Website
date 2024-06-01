<?php 
   session_start();

   include("./conn.php");
   if(!isset($_SESSION['valid'])){
    header("Location:signup.php");
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Home</title>
    <style>
        <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 20px;
            color: #333;
        }

        .nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #4CAF50; 
            padding: 10px 20px;
            margin-bottom: 20px;
        }

        .nav .logo a {
            color: white;
            text-decoration: none;
            font-size: 24px;
            font-weight: bold;
        }

        .right-links a {
            color: white;
            text-decoration: none;
            margin-right: 10px;
            padding: 5px 10px;
            border-radius: 5px;
            background-color: #55a94f; 
        }

        .right-links .btn {
            background-color: #55a94f; 
            border: none;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin-left: 10px;
            cursor: pointer;
            border-radius: 5px;
        }

        section {
            text-align: center;
        }

        section h1 {
            color: #4CAF50; 
            margin-bottom: 20px;
        }

        section a {
            display: block;
            width: 200px;
            margin: 0 auto 10px;
            padding: 10px;
            background-color: #4CAF50; 
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        section a:hover {
            background-color: #55a94f; 
        }
    </style>
    </style>
</head>
<body>
    <div class="nav">
        <div class="logo">
            <p><a href="home.php">RCA</a> </p>
        </div>

        <div class="right-links">

            <?php 
            
            $id = $_SESSION['id'];
            $query = mysqli_query($con,"SELECT*FROM user_student WHERE Id=$id");
        if ($query) {
            while($result = mysqli_fetch_assoc($query)){
                $res_Uname = $result['Username'];
                $res_Email = $result['Email'];
                $res_id = $result['Id'];
            }
        
                
            echo "<a href='edit.php?Id=$res_id'>Change Profile</a>";
        }
            ?>

            <a href="./logout.php"> <button class="btn">Log Out</button> </a>
        
        </div>
    </div>
    <section>
        <h1>Welcome to RCA Logbook Management</h1>

        <a href="./crud/create.php"> Create A new Log</a>
        <a href="./crud/index.php"> See Logs</a>
    </section>
</body>
</html>