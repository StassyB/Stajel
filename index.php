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

			//read from database
			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: home.php");
						die;
					}
				}
			}
			
            echo"<script>alert('Your Username or Password is incorrect!')</script>";
		}else
		{
			echo"<script>alert('Your Username or Password is incorrect!')</script>";
		}
	}

    /*
    if($check_user == 1){
			$_SESSION['user_email'] = $email;

			echo "<script>window.open('home.php', '_self')</script>";
		}else{
			echo"<script>alert('Your Email or Password is incorrect')</script>";
		}
    */

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
    <title>Stajel LogIn Page</title>
    <link rel="stylesheet" type="text/css" href="style1.css">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="style1.css">
</head>


<body>
    <main class="box">
	<img src="stassy.png" height="90" alt="zoom">
        <div class="container">
            <div class="form-container">
                <form method="post">
                    <div style="font-size: 20px;margin: 10px;color:rgba(201, 111, 183, 0.965);"><b>Login</b></div><br>

                    <input id="text" type="text" name="user_name" placeholder="Enter your user name"><br><br>
                    <input id="text" type="password" name="password" placeholder="Enter your password"><br>

                    <input id="button" type="submit" value="Login">

                    <a href="signup.php" class="form-link">Click to Signup</a><br><br>
                </form>
            </div>
        </div>
    </main>
</body>
</html>