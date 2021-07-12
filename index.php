<html>
<head>
	<title>Municipality of Bilar</title>
	<link rel="stylesheet" type="text/css" href="css/BilarMun_CSS.css" />
</head>

<body style="background-color:#ffffe6">
<style>
	.textCarousel {
		color: #001a00;
		font-family: Gabriola;
		font-size: 20px;
		font-weight: bold;		
		padding: 8px 12px;
		position: absolute;
		bottom: 320px;
		width: 100%;
		text-align: center;
		bottom: 270px;
	}
	.textCarousel2 {
		color: #001a00;
		font-family: Gabriola;
		font-size: 20px;	
		font-weight: bold;
		padding: 8px 12px;
		position: absolute;
		bottom: 320px;
		width: 100%;
		text-align: center;
		bottom: 270px;
	}
	.dropdown-content {
		display: none;
		position: absolute;
		top: 68px;
		background-color: #ffdab3;
		min-width: 160px;
		overflow: auto;
		box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
		z-index: 1;
	}
	.liStyle .aStyle:hover:not(.active) {
		background-color: skyblue;
	}
	.ulStyle{
		font-family: Gabriola;
		font-size: 20px;
		list-style-type: none;
		padding: 0px 0px 8px;
		overflow: hidden;
		background-color: #0d0d0d;
		width: 85%;
		height: 40px;
		left: 203px;
	}
	.liStyle {
		float: left;
	}
	.dropNav {
		display: inline-block;
		color: white;
		text-align: center;
		padding: 11px 30px;
		text-decoration: none;
	}
	.dropdown-content .aStyle {
		color: #001a00;
		padding: 11px 16px;
		text-decoration: none;
		display: block;
		text-align: left;
	}
	.dropdown-content .aStyle:hover {background-color: #f1f1f1}
	.dropdown2:hover .dropdown-content {
		display: block;	
	}
	@keyframes divBackColorAnimation{
        0%   {background-color: #ffdab3}
		25%  {background-color: #ccffdd}
		50%  {background-color: #ccffdd}
		100% {background-color: #ffdab3}
	}
	@keyframes mapBorderAnimation{
        0%   {border-color: #001a00}
		25%  {border-color: #4d0000}
		50%  {border-color: #4d0000}
		100% {border-color: #001a00}
	}
	@keyframes divAnimation{
    0%   {background-color:green; left:60px;}
	25%  {background-color:yellow; left:300px;}
	75%  {background-color:yellow; left:60px;}
    100% {background-color:green; left:300px;}
}

</style>

<header style="background-image: linear-gradient(skyblue, #ffffb3); width:97%; height:25%">
	<img src="images/logos/BeholdBohol.png" style="width:17%; height:15%; top:55px; left:100px; position:absolute">
	<h1 style="z-index:1"> <center> 
		<span style="color:black; font-size:25px; z-index:1">Republic of the Philippines</span> <br /> 
		<span style="color:black; font-size:25px; z-index:1"> Province of Bohol</span> <br/>
		<span style="color:black; font-family:ROG Fonts; font-size:35px;"> Municipality of Bilar</span> <br /> 
	</h1> </center> 
		<img src="images/logos/BilarSeal.png" style="width:10%; height:15%; top:55px; left:1000px; position:absolute">
		<img src="images/logos/BISULogo.png" style="width:10%; height:15%; top:55px; left:1170px; position:absolute">
</header>


<div style="width:99%; height:67%; position:absolute; top:211px; z-index:-1; animation-duration:2s; animation-iteration-count:infinite;">
<img src="images/BilarMunicipality3.png" style="width:80%; height:75%; position:absolute; top:67px; left:80px;">
 </div>
 
 
<iframe id="map" style="display:none; border-style:solid; width:69.5%; height:56%; position:absolute; top:236px; left:210px; frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=bilar+bohol&amp;aq=&amp;sll=37.0625,-95.677068&amp;sspn=41.546728,79.013672&amp;vpsrc=6&amp;ie=UTF8&amp;hq=&amp;hnear=Bilar,+Bohol,+Central+Visayas,+Philippines&amp;ll=9.716667,124.1&amp;spn=0.202698,0.308647&amp;t=h&amp;z=12&amp;output=embed"></iframe><br/>

 
<center><div style="position:absolute; top:600px; width: 100%; height: 40px;">
<ul class="ulStyle">
	<li class="liStyle dropdown2"><a class="aStyle dropNav" style="font-weight: bold; color:#ffffe6">About Bilar</a>
		<div class="dropdown-content">
			<a class="aStyle" href="BilarMunicipality_historicalBackground.php">Historical Background</a>
			<a class="aStyle" href="BilarMunicipality_facts&figures.php">Facts & Figures</a>
		</div>
	</li>
	<li class="liStyle dropdown2"><a class="aStyle dropNav" style="font-weight: bold; color:#ffffe6">The Government</a>
		<div class="dropdown-content">
			<a class="aStyle" href="BilarMunicipality_seal.php">Seal</a>
			<a class="aStyle" href="BilarMunicipality_officials.php">Municipal Officials</a>
		</div>
	</li>
	<li class="liStyle dropdown2"><a class="aStyle dropNav" style="cursor:pointer; font-weight: bold; color:#ffffe6"  onclick="showMap()">Map</a>
	
	</li>
	
	<li class="liStyle dropdown2"><a class="aStyle dropNav" href="#scenicSites" style="font-weight: bold; color:#ffffe6" onclick="showScenicSites()">Scenic Site</a>
	</li>
	<li class="liStyle dropdown2"><a class="aStyle dropNav" href="#bgy" style="font-weight: bold; color:#ffffe6" onclick="showBarangay()">Barangays</a>
		<div class="dropdown-content" onclick="showBarangay()">
			<a class="aStyle" href="#Bonifacio">Bonifacio</a>
			<a class="aStyle" href="#bugN">Bugang Norte</a>
			<a class="aStyle" href="#bugS">Bugang Sur</a>
			<a class="aStyle" href="#Cabacnitan">Cabacnitan(Magsaysay)</a>
			<a class="aStyle" href="#Cambigsi">Cambigsi</a>
			<a class="aStyle" href="#Campagao">Campagao</a>
			<a class="aStyle" href="#Cansumbol">Cansumbol</a>
			<a class="aStyle" href="#Dagohoy">Dagohoy</a>
			<a class="aStyle" href="#Owac">Owac</a>
			<a class="aStyle" href="#Poblacion">Poblacion</a>
			<a class="aStyle" href="#Quezon">Quezon</a>
			<a class="aStyle" href="#Riverside">Riverside</a>
			<a class="aStyle" href="#Rizal">Rizal</a>
			<a class="aStyle" href="#Roxas">Roxas</a>
			<a class="aStyle" href="#Subayon">Subayon</a>
			<a class="aStyle" href="#vilA">Villa Aurora</a>
			<a class="aStyle" href="#vilS">Villa Suerte</a>
			<a class="aStyle" href="#Yanaya">Yanaya</a>
			<a class="aStyle" href="#Zamora">Zamora</a>
		</div>
	</li>
	
	<li class="liStyle dropdown2"><a class="aStyle dropNav" style="font-weight: bold; color:#ffffe6">Help</a>
		<div class="dropdown-content">
			<a class="aStyle" href="BilarMunicipality_contactUs.php">Contact Us</a>
			<a class="aStyle" href="BilarMunicipality_aboutUs.php">About Us</a>
		</div>
	</li>
	
	<li style="float:right">
	<form method="post" action="BilarMunicipality_searchScenicSites.php">
		<p style="font-weight:bold; color:#ffffe6; padding: 12px 2px 0px 0px; margin:0;">Look for:
			<input type="text" name="find_city" size="25" placeholder="scenic site"/>
			<input type="submit" style="cursor:pointer" value="Search" />
		</p>
	</form>.
	</li>
  
</ul>
</div>
</center>

<center>
<?php
  include 'BilarMunicipality_updates.php';
 ?> 
</center>

<center>
<div id="scenicSites" style="display:none; width:60%; height:50%; font-family:Gabriola; position:relative; top:450px;">
<?php
  include 'BilarMunicipality_scenicSite.php';
 ?> 
</div>
</center>

<div id="bgy" style="display:none">
<?php
  include 'BilarMunicipality_barangays.php';
 ?> 
</div>

<script>
	var slideIndex = 0;
	showSlides();
	function showSlides() {
		var i;
		var slides = document.getElementsByClassName("mySlides");
		var dots = document.getElementsByClassName("dot");
		for (i = 0; i < slides.length; i++) {
			slides[i].style.display = "none";  
		}
		slideIndex++;
		if (slideIndex > slides.length) {slideIndex = 1}    
		for (i = 0; i < dots.length; i++) {
			dots[i].className = dots[i].className.replace(" active", "");
		}
		slides[slideIndex-1].style.display = "block";  
		dots[slideIndex-1].className += " active";
		setTimeout(showSlides, 4000); // Change image every 4 seconds
}
</script>

<script>
	var slideIndex = 0;
	showSlides2();
	function showSlides2() {
		var i;
		var slides = document.getElementsByClassName("mySlides2");
		var dots = document.getElementsByClassName("dot2");
		for (i = 0; i < slides.length; i++) {
			slides[i].style.display = "none";  
		}
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides2, 4000); // Change image every 4 seconds
	}
</script>

<script>
function showScenicSites() {
    document.getElementById("scenicSites").style.display = "block";
	document.getElementById("news").style.display = "none";
	document.getElementById("bgy").style.display = "none";
}
</script>

<script>
function showBarangay() {
    document.getElementById("bgy").style.display = "block";
	document.getElementById("news").style.display = "none";
	document.getElementById("scenicSites").style.display = "none";
}
</script>

<script>
function showMap() {
    document.getElementById("map").style.display = "block";
}
</script>

</body>

</html>