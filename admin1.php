<?php   
session_start();  
if(!isset($_SESSION['username'])){  
    header("location:login.php");  
} else {  
 $user=$_SESSION['username'];
}
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #000077;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}
.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #f1f1f1;
  display: block;
  transition: 0.3s;
}
.sidenav a:hover {
  color: #f1f111;
  text-decoration:underline;
}
ul.topbar {	
  padding: 10px 16px;	
  list-style: none;	
  background-color: #f1f1a1;	
}
.topctr {
  overflow: hidden;
  background-color: #6DE8EC;
  padding: 20px 10px;
}
.topctr a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px;
  font-color : #FFFFFF ;
  line-height: 25px;
  border-radius: 4px;
}
.topctr a.logo {
  font-size: 25px;
   font-color : #FFFFFF ;
  font-weight: bold;
}
.topctr a:hover {
  background-color: #ddd;
  color: black;
}
.topctr a.active {
  background-color: #FFFFFF;
  color: white;
}
.header-right {
  float: right;
}
main{
  font-family: cursive;
 transition: margin-left .5s; 
 padding: 2px;
}
body
{
 background-image : url('calculate-calculator-class-5775.jpg');
    -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
 .menuic { 
 display: inline-block; 
 cursor: pointer;
}
.bar1, .bar2, .bar3 { 
 width: 35px; height: 5px; 
 background-color: #333; margin: 6px 1px;
 border-radius : 5px ;
 transition: 0.3s;
}
.change .bar1 { 
transform: rotate(-45deg) translate(-12px, -2px) scale(0.4,0.7); 
background-color: rgb(51, 51, 51);
}
.change .bar2 {
 transform: scale(0.8,0.7);
}
.change .bar3 { 
 transform: rotate(45deg) translate(-12px,2px) scale(0.4,0.7); 
 background-color: rgb(51, 51, 51);
}
cap{
  font-size:25px;
}
.mySlides {display:none;}

</style>
</head>
<body>
<main id="mainn">
  <div id="mySidenav" class="sidenav">                       
  <a href="admin1.php">Home</a>
  <a href="planner.php">Planner</a>
  <a href="https://ssccust1.spreadsheethosting.com/tmp3/35/af804fbea9041c/MANAGER/MANAGER.htm">Manager</a>
  <a href="class1.php">Class</a>
  <a href="event.php">Events</a>
  <a href="about.php">About</a>
  <a href="logout1.php">Logout</a>     
    </div>     
     <div id ="main" class="menuic" onclick="myFunction(this)"> 
     <div class="bar1"></div> 
     <div class="bar2"></div> 
     <div class="bar3"></div>
     </div>     

<div class="topctr">
<a href="admin1.php" class="logo">HOME</a>
  <div class="header-right">
    <a href="logout1.php">Logout</a>
  </div>
</div>

<ul class="topbar">
<li><?php
 echo "Welcome $user..!  ";
?>
</li>
</ul><center>
welcome to<br>
<img src="logo.png" height=100px width=100px><br>
<cap>BMS College of Engineering</cap></center>

<div class="w3-content w3-section" style="max-width:500px">
    <img class="mySlides" src="download (6).jfif" style="width:100%">
  <img class="mySlides" src="download (4).jfif" style="width:100%">
  <img class="mySlides" src="download (5).jfif" style="width:100%">
  <img class="mySlides" src="download (3).jfif" style="width:100%">
    <img class="mySlides" src="hostel 3.jfif" style="width:100%">
</div>


<script>
var myIndex = 0;
carousel();
function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
  function myFunction(x) { 
 if (x.classList.contains("menuic"))
 openNav();
 if(x.classList.contains("change"))
 closeNav();
 x.classList.toggle("change");
}
   function openNav() {
 document.getElementById("mySidenav").style.width = "250px";        
 document.getElementById("mainn").style.marginLeft = "250px";
 document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
 
}        
function closeNav() {
document.getElementById("mySidenav").style.width = "0";
document.getElementById("mainn").style.marginLeft = "0"; 
document.body.style.backgroundColor = "white";     
}   
 
</script>
   
</main>
   
</body>
</html> 
