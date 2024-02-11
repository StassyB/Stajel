<?php 
session_start();

	include("connection.php");
	include("function.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

			mysqli_query($con, $query);

			header("Location: index.php");
			die;
		}
		else
		{
			echo "Please enter some valid information!";
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stajel Signup Page</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <main class="box">
	<img src="stassy.png" height="90" alt="zoom">
        <div class="container">
            <div class="form-container">
				
                <form method="post">
                    <div style="font-size: 20px;margin: 10px;color:rgba(201, 111, 183, 0.965);"><b>Signup</b></div><br>
			
                    <input id="text" type="text" name="user_name" placeholder="Enter your user name"><br><br>
                    <input id="text" type="password" name="password" placeholder="Enter your password"><br>

                    <input id="button" type="submit" value="Signup">

                    <a href="index.php" class="form-link">Click to Login</a><br><br>
                </form>
            </div>
        </div>
    </main>
</body>
</html>