<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stajel Beauty  - about</title>
    <link rel="stylesheet" href="style.css">
</head>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
    /*-----------------HERO----------------*/
.header{
    min-height: 100vh;
    height: 100%;
    background-image: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url("images/about-img.png");
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

.contact-wrap {
  	padding-bottom: 1%;
	width: 80%;
	height: auto;
	margin: auto;
	display: flex;
	flex-wrap: wrap;
}

.contact-in {
	padding: 40px 30px;
}

.contact-in:nth-child(1) {
	flex: 15%;
	border: 5px solid white;
	color: #fff;
}

.contact-in:nth-child(2) {
	flex: 20%;
	border: 5px solid white;
}

.contact-in:nth-child(3) {
	flex: 45%;
	padding: 0;
	border: 5px solid white;
}

.contact-in h1 {
	font-size: 24px;
	color: #fff;
	text-transform: uppercase;
	font-weight: bolder;
	margin-bottom: 20px;
}

.contact-in h2 {
	font-size: 20px;
	font-weight: 400;
	margin-bottom: 15px;
}

.contact-in h2 i {
	font-size: 16px;
	width: 40px;
	height: 40px;
	margin-right: 10px;
	background: #f5f5f5;
	color: #000;
	border-radius: 50px;
	line-height: 40px;
	text-align: center;
}


.contact-in p {
	font-size: 14px;
	font-weight: bolder;
	margin-bottom: 20px;
}

.contact-in ul {
	padding: 0;
	margin: 0;
}

.contact-in ul li {
	list-style: none;
	display: inline-block;
	margin-right: 5px;
	margin-top: 5px;
}

.contact-in ul li a {
	display: block;
	width: 30px;
	height: 30px;
	text-align: center;
	background: #fff;
	border-radius: 50px;
}

.contact-in ul li a i {
	font-size: 14px;
	line-height: 30px;
	color: #000;
}

.contact-in form {
	width: 100%;
	height: auto;
}

.contact-in-input {
	width: 100%;
	height: 40px;
	margin-bottom: 20px;
	border: 2px solid white;
	outline: none;
	padding-left: 5px;
	background: transparent;
	color: #fff;
	font-size: 12px;
	font-weight: 300;
	font-family: 'Poppins', sans-serif;
}

.contact-in-input::placeholder {
	color: #fff;
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
.contact-in-btn {
	width: 100%;
	height: 40px;
	border: 1px solid #fff;
	outline: none;
	background: black;
	color: #fff;
	font-size: 12px;
	font-weight: 300;
	font-family: 'Poppins', sans-serif;
	cursor: pointer;
}

.contact-in-btn:hover{
	color: green;
}

.contact-in iframe {
	width: 100%;
	height: 100%;
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
      <!-- site metas -->

      <!-- header section end -->
      <div class="contact-wrap">
      <div class="contact-in">
            <div >
               <div >
                  <div class="col-md-6">
                     <div class="about_taital_main">
                        <h1 class="about_taital">About Our beauty store</h1><br><br>
                        <p class="about_text">Taking care of yourself is essential for your well-being. It’s important to choose the right beauty products for your face, body and hair to achieve the results you’re looking for. From skin care products that leave your face hydrated and wrinkle-free, hair care products for gorgeous locks, to specially curated bath & body products for the entire family, you can find all beauty products you need at our Stajel Beauty store.</p>
                        <div class="text-box">
                        <a href="gallery.php" class="hero-btn">VIEW OUR PRODUCTS</a>
                     </div>
</div>
                  </div>
               </div>
            
            </div>
         </div>
      </div>
      <footer>&copy;2022 Stajel Beauty</footer>

      <!-- about section end -->
      <!-- footer section start -->
    
   </body>
</html>