@extends('staff.staffMaster')

<!DOCTYPE html>
<html>
<head>
<title>E-PRINT</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}

body, html {
  height: 100%;
  line-height: 1.8;
}

/* Full height image header */
.bgimg-1 {
  background-position: center;
  background-size: cover;
  background-image: url("mac.jpg");
  min-height: 100%;
}

.w3-bar .w3-button {
  padding: 16px;
}




.dropdwn {
    float: right;
    overflow: hidden;
    display: inline-block;
}

.dropdwn .dropbtn {
    border: none;
    outline: none;
    color: black;
    padding: 16px 16px;
    background-color: inherit;
    margin: 0;
}

.navbar a:hover, .dropdwn:hover .dropbtn{
    background-color: #0e5d64;
}


.navbar a.active {
    background-color: #666;
    color: white;
}

.dropdwn-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdwn-content a {
    float: none;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdwn-content a:hover {
    background-color: #ddd;
}

.dropdwn:hover .dropdwn-content {
    display: block;
}

.header .btn-book-a-table,
.header .btn-book-a-table:focus {
  font-size: 14px;
  color: rgb(255, 255, 255);
  background:  rgba(206, 18, 18, 0.8);
  padding: 8px 20px;
  margin-left: 30px;
  border-radius: 50px;
  transition: 0.3s;
}

.button {
  background-color: #4CAF50; /* Green */
  border: none;
  border-radius: 8px;
  color: white;
  padding: 10px; 
  float: right;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}



</style>
</head>
<body>

<!-- Navbar (sit on top) -->

	
</div>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->

    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>

<main id="main">

<!-- ======= Menu Section ======= -->
<a class="button" href="">Add Product</a>



<section id="menu" class="menu">
<div class="container" data-aos="fade-up">


 <div class="tab-content" data-aos="fade-up" data-aos-delay="300">

   <div class="tab-pane fade active show" id="menu-starters">

 <div class="tab-header text-center">
       <h3 style="margin-top: 25px">Our Products</h3>
 </div>

<div class="w3-container" style="padding:-50px 16px" text-align="left" color="black">

<div class="w3-row-padding " style="margin-top:64px">

<div class="w3-col l3 m6 w3-margin-bottom">
<div class="w3-card">
<a href="#">
 <img src="{{asset('frontend/assets/img/product/sticker.png')}}" alt="John" style="width:100%">
 <div class="w3-container">
   <h4><b>Sticker</b></h4>
   <p class="w3-opacity">STARTING AT</p>
   <p>RM15.96</p>
 </div>
</div>
</div>

<div class="w3-col l3 m6 w3-margin-bottom">
<div class="w3-card">
<a href="#">
<img src="{{asset('frontend/assets/img/product/businesscard.png')}}" alt="Jane" style="width:100%">
 <div class="w3-container">
 <h4><b>Business Card</b></h4>
   <p class="w3-opacity">STARTING AT</p>
   <p>RM15.96</p>
 </div>
</div>
</div>
<div class="w3-col l3 m6 w3-margin-bottom">
<div class="w3-card">
<a href="#">
<img src="{{asset('frontend/assets/img/product/flyers.png')}}" alt="Mike" style="width:100%">
 <div class="w3-container">
   <h4><b>Flyers</b></h4>
   <p class="w3-opacity">STARTING AT</p>
   <p>RM16</p>
 </div>
</div>
</div>
<div class="w3-col l3 m6 w3-margin-bottom">
<div class="w3-card">
<a href="#">
<img src="{{asset('frontend/assets/img/product/rollup.png')}}" alt="Dan" style="width:100%">
 <div class="w3-container">
   <h4><b>Banting</b></h4>
   <p class="w3-opacity">STARTING AT</p>
   <p>RM16</p>
 </div>

</div>
</div>
</div>
</div>



 
<script>
// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}


// Toggle between showing and hiding the sidebar when clicking the menu icon
var mySidebar = document.getElementById("mySidebar");

function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
  } else {
    mySidebar.style.display = 'block';
  }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
}


</script>

</body>
</html>
