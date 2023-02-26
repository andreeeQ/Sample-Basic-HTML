<!DOCTYPE html>
<html lang="en">
<head>
<title>Sample Web Resto</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<link rel="stylesheet" type="text/css" href="style.cc">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"
    />
	<link rel="stylesheet" href="css/style.css">
	
<style>	
body, html {
  height: 100%;
  margin: 0;
   background-color: pink;
}

* {
  box-sizing: border-box;
  font-family: Arial, Helvetica, sans-serif;
  
}
.about{
font-family: "Gill Sans Extrabold";
  padding: 250px;
  text-align: center;
  background-image:url("zxc.jpg");
  background-position: center;
  background-color:#800000;  
  color: black;
  background-repeat:no-repeat;
  background-size: cover;
}
.swiper {
        width: 70%;
        height: 70%;
      }
	  
 .swiper-slide {
        text-align: center;
        font-size: 18px;
        background: #fff;

        /* Center slide text vertically */
        display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
      }

      .swiper-slide img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
      }	  
	  
	  
footer{
position:relative;
width:100%;
height:auto;
padding:20px 30px;
background:#330000;
}


footer .container1{
width:100%;
display:grid;
grid-template-columns: 2fr 1fr 2fr 2fr;
grid-gap:40px;
}

footer .container1 .sec h3
{
position:relative;
color:#fff;
font-weight: 500;
margin-bottom:15px;

}
footer .container1 .sec h3::before
{
content: '';
position: absolute;
bottom: -5px;
left: 0;
width: 50px;
height: 2px;
background: #ffeb3b
}

footer .container1 .sec p4
{
color:#fff;
}

.sci{
margin-top: 20px;
display:grid;
grid-template-columns:repeat(4, 50px);
}
.sci li
{
list-style:none;

}
.sci li a
{
display: inline-block;
width:48px;
height:48px;
background: #000000;
display:grid;
align-content: center;
justify-content:center;
text-decoration:none;
border-radius:4px;
}

.sci li a:hover
{
background:#6380fe;
}

.sci li a.fa {
color:#fff;
font-size:20px;
}

.quicklinks
{
position:relative;
}

.quicklinks li{
list-style:none;

}
.quicklinks li a
{
color:#f7f7f7;
text-decoration:none;
margin-bottom: 10px;
display:inline-block;
}
.quicklinks li a:hover
{
color:#ffeb3b;
}

.info{
position:relative;

}
.info li {
display:grid;
grid-template-columns:30px 1fr;
margin-bottom: 16px;

}

.info li span:nth-child(1)
{
color: #fff;
font-size:20px;

}
.info li span
{
color:#fff;
}

.info a
{
color: #f7f7f7;
text-decoration:none;
}
.info a:hover
{
color:#ffeb3b;

}

.copyrightText
{
width:100%;
background:#1f33889;
padding:8px 100px;
color:#fff;
}	


	
#myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: black;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px;
}
#myBtn:hover {
  background-color: #555;
}
.topnav a {
  float: right;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}


.topnav a:hover {
  background-color: red;
  color: black;
}

.about-section {
  border: 25px groove #800000;
  font-family: "Gill Sans Extrabold";
  padding: 400px;
  text-align: center;
  background-image:url("b.png");
  background-position: center;
  background-color:#800000;  
  color: black;
  }


.content {

  /* Full height */
  height: 200%; 
  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

.table, th,td { 
  text-align: center;
  border: 3px solid black;
}
.table, tr:nth-child(odd) {
  background-color:#FF5733 ;
}

.topcontent h1 {
    color: white;
    text-align: center;
}

.button {
  border: solid 5px;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: black;
  background-color: #FF0000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  text-decoration:none;
}

.button:hover {
  background-color: #555;
}
.overlay {
  height: 0%;
  width: 100%;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: rgb(0,0,0);
  background-color: rgba(0,0,0, 0.9);
  overflow-y: hidden;
  transition: 0.5s;
}

.overlay-content {
  position: relative;
  top: 25%;
  width: 100%;
  text-align: center;
  margin-top: 30px;
}

.overlay a {
  padding: 8px;
  text-decoration: none;
  font-size: 36px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.overlay a:hover, .overlay a:focus {
  color: #f1f1f1;
}

.overlay .closebtn {
  position: absolute;
  top: 20px;
  right: 45px;
  font-size: 60px;
}

@media screen and (max-height: 450px) {
  .overlay {overflow-y: auto;}
  .overlay a {font-size: 20px}
  .overlay .closebtn {
  font-size: 40px;
  top: 15px;
  right: 35px;
  }
}

video { 
    position: fixed;
    top: 50%;
    left: 50%;
    min-width: 100%;
    min-height: 100%;
    width: auto;
    height: auto;
    z-index: -100;
    transform: translateX(-50%) translateY(-50%);
  background-size: cover;
  transition: 1s opacity;
}
.stopfade { 
   opacity: .5;
}

#about { 
  font-family: Agenda-Light, Agenda Light, Agenda, Arial Narrow, sans-serif;
  font-weight:100; 
  background: rgba(0,0,0,0.3);
  color: white;
  padding: 2rem;
  width: 100%;
  margin:2rem;
  font-size: 1.2rem;
  position:relative;
  right:2%;
}
h1 {
  font-size: 3rem;
  text-transform: uppercase;
  margin-top: 0;
  letter-spacing: .3rem;
}
#about button { 
  display: block;
  width: 80%;
  padding: .4rem;
  border: none; 
  margin: 1rem auto; 
  font-size: 1.3rem;
  background: rgba(255,255,255,0.23);
  color: #fff;
  border-radius: 3px; 
  cursor: pointer;
  transition: .3s background;
}
#about button:hover { 
   background: rgba(0,0,0,0.5);
}

a {
  display: inline-block;
  color: #fff;
  text-decoration: none;
  background:rgba(0,0,0,0.5);
  padding: .5rem;
  transition: .6s background; 
}
a:hover{
  background:rgba(0,0,0,0.9);
}
@media screen and (max-width: 500px) { 
  div{width:70%;} 
}
@media screen and (max-device-width: 500px) {
  html { background: url(https://thenewcode.com/assets/images/about.jpg) #000 no-repeat center center fixed; }
  #bgvid { display: none; }
}

.container {
    box-sizing: border-box;
    margin: 0;
    padding: 5px;
    justify-content: space-between;
      position: relative;
  max-width: 100%;
  margin: 0 auto;
}

p1{
text-align:center;
font-family: Brush Script MT, cursive;
font-size:40px;
color: white;
}

p{
font-family: Brush Script MT, cursive;
    line-height: 50px;
    font-size: 40px;
    color: white;
	
}
h2{
font-family: Brush Script MT, cursive;
    line-height: 50px;
    font-size:60px;
    color: #050404;
}

h1{
	font-family: 'Tangerine', serif;
  font-size: 70px;
  text-shadow: 4px 4px 4px #aaa;
}
img {
  display: block;
  margin-left: auto;
  margin-right: auto;
  border: 1px solid #ddd;
  border-radius: 4px;
  padding: 5px;
  width: 100%;
  border-color:black;
  position:relative;
}

input[type=text], select, textarea{
width: 100%;
padding: 12px;
border: 1px solid #ccc;
border-radius: 4px;
box-sizing: border-box;
margin-top: 6px;
margin-bottom: 16px;
resize: vertical;
background-color: darkgray;
}

input[type=submit]{
bacground-color: black;
color: black;
padding: 12px 20px;
border: none;
border-radius: 4px;
cursor: pointer;
}

input[type=submit]:hover {
background-color: #45a049;
}

</style>
</head>
<body>
<center><span style="font-size:40px;cursor:pointer" onclick="openNav()">&#9776;</span></center>
<div id="myNav" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="overlay-content">
    <a href="#about">About</a>
    <a href="contacts1.php">Contact Us</a>
  </div>
</div>

<div class="topcontent">
  <div class="about-section" id="section1">
  <h1> Regines-Business</h1>
  <p1>"Burgers made for Greatness"</p1>
  <br>
  <br>
  
  <img src="lugo.jpg" style="width:30%">
</div>


</div>
<br>
<br>
<br>
<br>
<br>
 <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide"><img src="b1.jpg"></div>
        <div class="swiper-slide"><img src="b2.jpg"></div>
        <div class="swiper-slide"><img src="b3.jpg"></div>
        <div class="swiper-slide"><img src="b4.jpg"></div>
        <div class="swiper-slide"><img src="b5.jpg"></div>
        <div class="swiper-slide"><img src="b6.jpg"></div>
        <div class="swiper-slide"><img src="b7.jpg"></div>
        <div class="swiper-slide"><img src="b8.jpg"></div>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div>
    </div>
	<br>
	<br>
	<br>
	<br>
<div class="content">
<center>
        <table style="width:50%">
		<tr>
		<th><h1> BURGER  MENU </h1></th>
		</tr>
		
		<tr>
		<td>		
		<p>Regular Burger $0.35</p>
		</td>
		</tr>
		
		<tr>
		<td><p>CheeseBurger $0.45</p></td>
		</tr>
		
		<tr>
			<td><p>	American Burger $1.34</p></td>
		</tr>
		
		<tr>
		<td><p>Egg Burger $0.28</p></td>
		</tr>
		
		<tr>
		<td><p>Hungarian Sandwich $1.50  </p></td>
		</tr>
		
		<tr>
		<td><p>Kingcrab Burger $25.34</p></td>
		</tr>
		
		
		<tr>
		<td><p>Shrimp Burger $20.34 </p></td>
		</tr>
		
		
		<tr>
		<td>
		<p>Burger Overload $30.34 </p> 
		</td>
		</tr>
		
		</table>
		<br>
		<br>
		<a href="contacts1.php"><button class="button">Buy Now!!</button></a>
   
</div>

<button onclick="topFunction()" id="myBtn" title="Go to top"><i class='fas fa-arrow-up'></i></button>
</center>
<video poster id="bgvid" playsinline autoplay muted loop>
 
<source src="hhh.mp4" type="video/mp4">

</video>
<div id="about">
<h1>About Us</h1>
<p>Welcome To Regine's Burger
<p>Regine's Burger is a Professional restaurant Platform. Here we will provide you only interesting content, which you will like very much. We're dedicated to providing you the best of restaurant, with a focus on dependability and Burger. We're working to turn our passion for restaurant into a booming online website. We hope you enjoy our restaurant as much as we enjoy offering them to you.</p>
<p>I will keep posting more important posts on my Website for all of you. Please give your support and love.</p>
<button>Pause</button>
</div>	
<footer>	
<div class="container1">
<div class="sec aboutus">
<h3>About US</h3>
<p4>Welcome To Regine's Burger
<p4>Regine's Burger is a Professional restaurant Platform. Here we will provide you only interesting content, which you will like very much. We're dedicated to providing you the best of restaurant, with a focus on dependability and Burger. We're working to turn our passion for restaurant into a booming online website. We hope you enjoy our restaurant as much as we enjoy offering them to you.</p4>
<p4>I will keep posting more important posts on my Website for all of you. Please give your support and love.</p4>
<ul class="sci">
<li><a href="https://www.facebook.com/" class="fa fa-facebook"></a></li>
<li><a href="https://twitter.com/" class="fa fa-twitter"></a></li>
<li><a href="https://www.instagram.com/" class="fa fa-instagram"></a></a></li> 
</ul>
</div>


<div class="sec quicklinks">
<h3>Quick Links</h3>
<ul>
<li><a href="#about">About</a></li>
<li><a href="contacts1.php">Contacts</a></li>
</ul>
</div>


<div class=" sec contact">
<h3>Contact Us</h3>
<ul class="info">
<li>
<span><i class="fa fa-map-marker" aria-hidden="true"></i></span>
<span><p4> BGC,<br>	
Tanauan.<br></PH:D></p4>
</li>
<li>
<span><i class="fa fa-phone" aria-hidden="true"></i></span>
<p4><a href="tel:+09451234567">+63  945 123 4567</a><br></p4>
</li>
<li>
<span><i class="fa fa-envelope" aria-hidden="true"></i></span>
<p2><a href="mailto:burgeran@gmail.com">burgeran@gmail.com</a></p2>
</li>
</ul>


  
 
</div>
 
<div class=" sec img">
<h3>Regine's - Burger</h3>
<ul class="img">
<img src="cxz.jpg" style="width:100%">

</ul>
</div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<script>
var vid = document.getElementById("bgvid");
var pauseButton = document.querySelector("#about button");

if (window.matchMedia('(prefers-reduced-motion)').matches) {
    vid.removeAttribute("autoplay");
    vid.pause();
    pauseButton.innerHTML = "Paused";
}

function vidFade() {
  vid.classList.add("stopfade");
}

vid.addEventListener('ended', function()
{
// only functional if "loop" is removed 
vid.pause();
// to capture IE10
vidFade();
}); 

pauseButton.addEventListener("click", function() {
  vid.classList.toggle("stopfade");
  if (vid.paused) {
    vid.play();
    pauseButton.innerHTML = "Pause";
  } else {
    vid.pause();
    pauseButton.innerHTML = "Paused";
  }
})
</script>
 <script>
      var swiper = new Swiper(".mySwiper", {
        cssMode: true,
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
        pagination: {
          el: ".swiper-pagination",
        },
        mousewheel: true,
        keyboard: true,
      });
    </script>
<script>
// Get the button
let mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {

  document.documentElement.style.scrollBehavior = "smooth";
  document.documentElement.scrollTop = 0;
}
</script>
<script>
function openNav() {
  document.getElementById("myNav").style.height = "100%";
}

/* Close */
function closeNav() {
  document.getElementById("myNav").style.height = "0%";
}
</script>

</body>

</html>

