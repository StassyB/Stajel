<?php 
session_start();

    include("connection.php");
    include("function.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stajel Beauty- Home</title>
    <link rel="stylesheet" href="style.css">
</head>

<style>
    /*-----------------HERO----------------*/
.header{
    min-height: 100vh;
    height: 100%;
    position: relative;
}

.header1{
    min-height: 100vh;
    height: 100%;
    background-image: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url("./assets/images/sjb.jpg");
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
    position: relative;
}

nav{
    display: flex;
    padding: 2% 6%;
    justify-content: space-between;
    align-items: center;
}

nav h2{
    font-size: 20px;
}

nav h2 a{
    color: #fff;
}

.navlinks{
    flex: 1;
    text-align: right;
}

.navlinks ul li{
    list-style-type: none;
    display: inline-block;
    padding: 8px 12px;
    position: relative;
}

.navlinks ul li a{
    color: #fff;
    font-size: 18px;
}

.navlinks ul li::after{
    content: '';
    width: 0%;
    height: 2px;
    background: #efefef;
    display: block;
    margin: auto;
    transition: 0.5s;
}

.navlinks ul li:hover::after{
    width: 100%;
}

.text-box{
    width: 70%;
    color: #fff;
    position: absolute;
    text-align: center;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
}

.text-box h1{
    font-size: 55px;
}

.text-box p{
    margin: 10px 5px 40px;
    font-size: 20px;
    color: #fff;
}

.hero-btn{
    display: inline-block;
    text-decoration: none;
    color: #fff;
    border: 1px solid #fff;
    padding: 12px 34px;
    font-size: 13px;
    background: transparent;
    position: relative;
    cursor: pointer;
}

.hero-btn:hover{
    
    color: #222;
    background: #efefef;
    transition: 1s;
}

footer {
    border-top: 1px solid #f1f1f1;
    box-shadow: 0px -2px 3px #f1f1f1;
    text-align: center;
    padding: 2rem;
}
</style>
<body>

    <section class="header header1">
        <!--navbar-->
        <nav>
            <h2><a href="#">Stajel Beauty</a></h2>
            <div class="navlinks">
                <ul>
                    <li><a href="home.php">Home</a></li>
                    <li><a href="gallery.php">Gallery</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                    <li><a href="signup.php">Signup</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </div>
        </nav>

        <!--content-->
        <div class="text-box">
            <p>Hello, <?php echo $user_data['user_name']; ?></p>
            <h1>Welcome to Stajel Beauty</h1>
            <p>It’s important to choose the right beauty products for your face, body and hair to achieve the results you’re looking for.</p>
            <a href="about.php" class="hero-btn">Explore More</a>
        </div>

    </section>
    <footer>&copy;2022 Stajel Beauty.</footer>

  
	
</body>
</html>