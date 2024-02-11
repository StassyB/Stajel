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
    <title>Stajel Beauty - Gallery</title>
    <link rel="stylesheet" href="style.css">
</head>

<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
body{
    font-family: 'Poppins', sans-serif;
}
    /*-----------------HERO----------------*/
.header{
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

img{
    width: 100%;
    object-fit: center;
}

.sub-heading, .heading{
    text-align: center;
    color: #efefef;
}

#menu .box-container {
	display: grid;
	grid-template-columns: repeat(auto-fit, minmax(25rem, 1fr));
    padding: 2rem;
	grid-gap: 1.5rem;
}

#menu .box-container .box {
	background: #efefef;
	border: 0.1rem solid rgba(0, 0, 0, 0.2);
	border-radius: 0.5rem;
	box-shadow: 0 0.5rem 1.5rem rgba(0, 0, 0, 0.1);
}

#menu .box-container .box .image {
	padding: 1.5rem;
	width: 100%;
	height: 25rem;
	overflow: hidden;
	position: relative;
}

#menu .box-container .box .image img {
	width: 100%;
	height: 100%;
	border-radius: 0.5rem;
}

#menu .box-container .box .content {
	padding: 2rem;
	padding-top: 0;
    text-align: center;
}

#menu .box-container .box .content h3 {
	color: #222;
	font-size: 1.2rem;
}

#menu .box-container .box .content .price {
	font-size: 1rem;
	margin-left: 1.5rem;
	color: green;
}

.btn{
    display: block;
    background-color: #222;
    color: #fff;
    padding: 10px;
    border-radius: 5px;
    cursor: pointer;
    transition: .3s;
    margin-top: 10px;
}

.btn{
    display: block;
    background-color: #222;
    color: #fff;
    padding: 10px;
    border-radius: 5px;
    cursor: pointer;
    transition: .3s;
}

.btn:hover{
    background-color: #429c3fd0;
    color: #222;
}

footer {
    border-top: 1px solid #f1f1f1;
    box-shadow: 0px -2px 3px #f1f1f1;
    text-align: center;
    padding: 2rem;
}
</style>
<body>

    <section class="header">
        <!--navbar-->
        <nav>
            <h2><a href="#">Stajel Beauty </a></h2>
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
        <div class="menu" id="menu">
			
			<h3 class="sub-heading">Our Products</h3>
			

			<div class="box-container">
				<div class="box">
					<div class="image">
					<img src="images/img-1.png" class="image_1">
									</div>
					<div class="content">
						<h3>Beauty Burshs</h3>
						<p class="lorem_text">Update your brushes today </p>
                        <span class="price">Ksh.3,000</span>
						<a href="#" class="btn">Add to Cart</a>
					</div>
				</div>

				<div class="box">
					<div class="image">
					<img src="images/img-2.png" class="image_1">					</div>
					<div class="content">
						<h3>Powder Bursh</h3>
						<p class="lorem_text">Great quality</p>

                        <span class="price">Ksh.3,000</span>
						<a href="#" class="btn">Add to Cart</a>
					</div>
				</div>

				<div class="box">
					<div class="image">
						<img src="images/img-11.png" class="image_1">

					</div>
					<div class="content">
						<h3>Lip Stick</h3>
						<p class="lorem_text">Quality moistorising ingridients.</p>
                        <span class="price"> Ksh. 800</span>
						<a href="#" class="btn">Add to Cart</a>
					</div>
				</div>

				<div class="box">
					<div class="image">
					<img src="images/img-12.png" class="image_1">
					</div>
					<div class="content">
						<h3>>Maskara</h3>
						<p class="lorem_text">great quality with alovera</p>

                        <span class="price">Ksh.500</span>
						<a href="#" class="btn">Add to Cart</a>
					</div>
				</div>

				<div class="box">
					<div class="image">
					<img src="images/img-5.png" class="image_1">
					</div>
					<div class="content">
						<h3>Skin Care</h3>
						<p class="lorem_text">Beauty face and body serum </p>

                        <span class="price">Ksh.2,000</span>
						<a href="#" class="btn">Add to Cart</a>
					</div>
				</div>

				<div class="box">
					<div class="image">
					<img src="images/img-3.png" class="image_1">
					</div>
					<div class="content">
						<h3>Eye Makeup Bursh</h3>
						<p class="lorem_text">great, moistorising ingredients </p>

                        <span class="price"> Ksh.1,000</span>
						<a href="#" class="btn">Add to Cart</a>
					</div>
				</div>

				<div class="box">
					<div class="image">
					<img src="images/img-6.png" class="image_1">
					</div>
					<div class="content">
						<h3>Red Lip Stick</h3>
						<p class="lorem_text">lasts for 24hrs </p>

                        <span class="price">Ksh.1,000</span>
						<a href="#" class="btn">Add to Cart</a>
					</div>
				</div>

				<div class="box">
					<div class="image">
					<img src="images/img-7.png" class="image_1">
					</div>
					<div class="content">
						<h3>setting powder</h3>
						<p class="lorem_text">sets its all</p>

                        <span class="price">Ksh.1,000</span>
						<a href="#" class="btn">Add to Cart</a>
					</div>
				</div>

				<div class="box">
					<div class="image">
					<img src="images/img-10.png" class="image_1">
					</div>
					<div class="content">
						<h3>makeup set</h3>
						<p class="lorem_text">for heathy glowing skin </p>

                        <span class="price"> Ksh.2,000</span>
						<a href="#" class="btn">Add to Cart</a>
					</div>
				</div>
				<div class="box">
					<div class="image">
					<img src="images/img-8.png" class="image_1">
					</div>
					<div class="content">
						<h3> Bio powder</h3>
                        <p class="lorem_text">Blends in wellwith the skin</p>

                        <span class="price">  Ksh. 600</span>
						<a href="#" class="btn">Add to Cart</a>
					</div>
</div>
			</div>
    
    </div>

    </section>
	

    <footer>&copy;2022 Stajel Beauty</footer>
	
</body>
</html>