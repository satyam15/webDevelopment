<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>
p{
position:absolute;
top:150%;
}
body
{
background:url(sa1.jpg);no-repeat;
background-size:cover;
font-family:Arial;
color:white;
}
ul{
margin:0px;
padding:0px;
list-style:none;
}
ul li{
float:left;
width:200px;
height:40px;
background-color:black;
opacity:0.8;
line-height:40px;
text-align:centre;
font-size:20px;
margin-right:4px;
}
ul li a{
text.decoration:none;
color:white;
display:block;

}
ul li a:hover
{
background-color:green;

}
ul li ul li{
display:none;
}
ul li:hover ul li{
display:block;
}
.slideshow-container {
  max-width: 1000px;
  position: absolute;
  top:30%;
  left:15%;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
</style>
</head>

<ul>
<li><a href="home.php">Home</a></li>
<li><a>About</a>
<ul>
<li><a href="ourteam.php">Our Team</a></li>
<li><a href="mission.php">Mission &ambition Vision</a></li>
<li><a href="resources.php">Resources</a></li>
</ul>
</li>
<li><a>Things to do</a>
<ul>
<li><a href="activities.php">Activities</a></li>
<li><a href="shops.php">Shops</a></li>
<li><a href="events.php">Events</a></li>
</ul>
</li>
<li><a>Contact</a>
<ul>
<li><a href="direction.php">Directions</a><li>
</ul>
</li>
<li><a href="login.php">Admin Login</a></li>
<li><a>Student</a>
<ul>
<li><a href="login.php">Login</a></li>
<li><a href="signup.php">Registration</a></li>
</ul>
</li>


</ul><marquee direction=right>ONLINE REGISTRATION STARTED HURRY UP!!ONLY FEW SEATS LEFT</marquee>
</ul><marquee direction=left>ONLINE REGISTRATION STARTED HURRY UP!!ONLY FEW SEATS LEFT</marquee>
<body>
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 6</div>
  <img src="2.jpg" style="width:100%">
  <div class="text">Caption One</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 6</div>
  <img src="3.jpg" style="width:100%">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 6</div>
  <img src="4.jpg" style="width:100%">
  <div class="text">Caption Three</div>
</div>
<div class="mySlides fade">
  <div class="numbertext">4 / 6</div>
  <img src="5.jpg" style="width:100%">
  <div class="text">Caption Four</div>
</div>
<div class="mySlides fade">
  <div class="numbertext">5 / 6</div>
  <img src="6.jpg" style="width:100%">
  <div class="text">Caption Five</div>
</div>
<div class="mySlides fade">
  <div class="numbertext">6 / 6</div>
  <img src="7.jpg" style="width:100%">
  <div class="text">Caption Six</div>
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span>
    <span class="dot" onclick="currentSlide(4)"></span>
	  <span class="dot" onclick="currentSlide(5)"></span>
	    <span class="dot" onclick="currentSlide(6)"></span>



</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>


<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<p  style="color:#60f022;">
Maybe you’re a student searching for office hours, a faculty member browsing databases, a fresh-faced prospective undergrad, an athletics fan… the list goes on.<br> If developers haven’t crafted a clearly-organized, navigable, and functioning site for your school, you will find yourself in the web design equivalent of a food fight.<br><br><br><br><br>
Of course, fulfilling all of the content and style demands of an education institution is a fine balance to strike: edge toward a more complicated design and the navigability of your content may suffer as a result (“What if I just want to know how late the bookstore is open!?”).<br> On the other hand, rote and tone-deaf designs, even if they clearly lay out information, leave a bad taste in the mouths of a skeptical prospectives or would-be donating alumni.<br>
<br>Add in seamless transitioning and stunning visuals, and a successful design would seem to approach the impossible. But here are 30 sites that make it look easy.
<br><br><b>Online Learning</b><br><br>Newer online education models do away with stayed elements like physical classrooms and traditional textbooks, offering scaled-back, innovative media in their stead — and much sleeker web design to that end. Because these sites take advantage of their narrower scope and lighter weight, they often surpass their physical institution peers on the navigability and visual fronts. A sign of great things to come!


</p>
</body>
</html>

