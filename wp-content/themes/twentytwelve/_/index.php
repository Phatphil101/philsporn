<!DOCTYPE html>
<html lang="en"><!-- use class="debug" here if you develope a template and want to check-->
<?php
$url = $_SERVER["SCRIPT_NAME"];
$break = Explode('/', $url);
$file = $break[count($break) - 1];
$cachefile = 'cached-'.substr_replace($file ,"",-4).'.html';
$cachetime = 180000;

// Serve from the cache if it is younger than $cachetime
if (file_exists($cachefile) && time() - $cachetime < filemtime($cachefile)) {
    echo "<!-- Cached copy, generated ".date('H:i', filemtime($cachefile))." -->\n";
    include($cachefile);
    exit;
}
ob_start(); // Start the output buffer
?>

<head>
<meta name="viewport" content="width=device-width" />

	<style type="text/css">
	html{
		height:100%;
	}
	body{
		height:100%;
		color: #000;
		font-family: Trebuchet MS, Lucida Sans Unicode, Arial, sans-serif;
		margin:0px;
		padding:0px;
	}
	.zoomingText{
		font-family: Trebuchet MS, Lucida Sans Unicode, Arial, sans-serif;
		color: #317082;
	}
	#zoomingTextContainer{
		width:100%;
		height:100%;
		background-color: #FFFFFF;
		position:absolute;
		left:0px;
		top:0px;
		text-align:center;
	}
	.skipIntro{
		position:absolute;
		bottom:10px;
		right:10px;
		color:#000000;	
	}
	.skipIntro a{
		color:#000000;
		font-size:18px;
		text-decoration:none;
	}

	</style>
	<script type="text/javascript">
	/*
	(C) www.dhtmlgoodies.com, September 2005
	
	You are free to use this script as long as the copyright message is kept intact
	
	
	Alf Magne Kalleland
	
	*/	
	var textArray = ['Welcome','To','Willis' ,'Photography'];
	
	var maxFontSize = 50;	// Maximum font size in pixels
	var zoomSpeed = 5; // Lower = Faster
	var fontIncrementBy = 2; // Step of font size incrementation ( Higher = faster)
	var delayBetweenWords = 300;	// Microseconds between each word
	var delayAtEnd = 500;	// Microseconds delay after last word
	
	var textIndex = 0;	// Don't change this value
	function executeZoomScript()
	{
		var obj = document.getElementById('zoomingText');
		if(textIndex<textArray.length){
			
			obj.style.fontSize = '1px';
			obj.style.lineHeight = document.body.clientHeight + 'px';
			obj.innerHTML = textArray[textIndex];
			zoomText();	
		}else{
			setTimeout("document.getElementById('zoomingTextContainer').style.display = 'none'",delayAtEnd);
		}
	}
	
	function zoomText(){
		var obj = document.getElementById('zoomingText');
		var fontSize = obj.style.fontSize.replace('px','');
		fontSize = fontSize/1 + fontIncrementBy;
		obj.style.fontSize = fontSize + 'px';
		if(fontSize<maxFontSize){
			setTimeout('zoomText()',zoomSpeed);
		}else{
			textIndex++;
			setTimeout('executeZoomScript()',delayBetweenWords);
		}	
		
	}
	window.onload = executeZoomScript;
	
	
	</script>
	<meta charset="UTF-8" />
		<!-- creative-shots, photography, photographer, grove city, 43123"--> 
    <meta name="description" content="Creative-Shots Photography Of Grove City. Welcome to our website" />
    <meta name="keywords" content="photographer, photography, grove city 43123" />
    <meta name="revisit-after" content="2 days" />
    <meta name="robots" content="index,follow" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">

	<link rel="apple-touch-icon" href="touch-icon-iphone.png">
	<link rel="apple-touch-icon" sizes="72x72" href="../images/touch-icon-ipad.png">
	<link rel="apple-touch-icon" sizes="114x114" href="../images/touch-icon-iphone4.png">
	<link rel="apple-touch-icon" sizes="144x144" href="../images/touch-icon-ipad2.png">

	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">



<!-- CHANGE THIS TITLE TAG -->
<title>Willis Photography</title>

<!-- media-queries.js -->
<!--[if lt IE 9]>
	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->
<!-- html5.js -->
<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
   
    <script type="text/javascript">

var addToHomeConfig = {
		touchIcon:true,
    message: 'Would you like to add our icon to your <strong> %device </strong>? Tap %icon and add to homescreen.'
};

</script>
<![endif]-->


<link href="font/stylesheet.css" rel="stylesheet" type="text/css" />	
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />
<link href="css/styles.css" rel="stylesheet" type="text/css" />
<link href="css/media-queries.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="fancybox/jquery.fancybox-1.3.4.css" media="screen" />	
<link rel="stylesheet" href="css/add2home.css">
	<script type="application/javascript" src="js/add2home.js" charset="utf-8"></script>

<meta name="viewport" content="width=device-width" />
 
<link rel="shortcut icon" href="img/touch-icon-ipad2.png" type="image/x-icon">

<link href='http://fonts.googleapis.com/css?family=Exo:400,800' rel='stylesheet' type='text/css'>
<link href="background.css" rel="stylesheet" type="text/css">
<style type="text/css">
/* BeginOAWidget_Instance_2535022: #cssButton */


.button {
	-moz-border-radius: 8px;
	-webkit-border-radius: 8px;
	border-radius: 8px;
	
	-moz-box-shadow: inset 0px -1px 3px rgba(255,255,255,.5), 3px 3px 2px rgba(0,0,0,.2);
	-webkit-box-shadow: inset 0px -1px 3px rgba(255,255,255,.5), 3px 3px 2px rgba(0,0,0,.2);
	box-shadow: inset 0px -1px 3px rgba(255,255,255,.5), 3px 3px 2px rgba(0,0,0,.2);
	
	border: 1px solid;
	padding: 8px 12px;
	
	color: #fff;
	font-family: "Myriad Pro", Arial, Tahoma, sans-serif;
	font-size: 1.4em;
	font-weight: bold;
	text-shadow: -1px -1px rgba(0,0,0,0.1), 0 0 15px rgba(255,255,255,0.75);
	white-space: nowrap;
	
	background: #777;
	border-color: #777;
	
	text-decoration: none;
	font-style: normal;
	text-transform: none;
	
	position: relative;
}

.button:hover,
.button:focus {
	background: #999;
	border-color: #999; /* Default color */
}

.button:active {
	top: 1px;
}

		
		
		/* Font Info */
		
		#cssButton .button {
			font-family: Verdana, Geneva, sans-serif;
			font-size:1.5em; 
			font-weight:bold;
			color : #d9eef7;
		}		
		
		/* Colors custom class */

		#cssButton .custom {
			background: #0095cd;
			border-color: #0076a3;
			border-width: 2px;
		}
		
		#cssButton .custom:hover,
		#cssButton .custom:focus {
			background: #007ead;
			border-color: #0076a3;
			color: #d9eef7;
			bottom: 0px;
		}
		
		#cssButton .custom:active {
			background: #0089bc;
			border-color: #0076a3;
			color: #a8d8ec;
			top: 1px;
		}

		/* Shape */
		
		#cssButton .custom {
			-moz-border-radius: 12px;
			-webkit-border-radius: 12px;
			border-radius: 12px;
		}
		
		/* Layer */
		
		.backGroundLayer {
			margin: 5px;
			border: thin solid #666;
			padding: 5px;
		}
		<script type="text/javascript">
	/*
	(C) www.dhtmlgoodies.com, September 2005
	
	You are free to use this script as long as the copyright message is kept intact
	
	
	Alf Magne Kalleland
	
	*/	
	var textArray = ['Welcome','To','Willis','Photos'];
	
	var maxFontSize = 50;	// Maximum font size in pixels
	var zoomSpeed = 5; // Lower = Faster
	var fontIncrementBy = 2; // Step of font size incrementation ( Higher = faster)
	var delayBetweenWords = 400;	// Microseconds between each word
	var delayAtEnd = 300;	// Microseconds delay after last word
	
	var textIndex = 0;	// Don't change this value
	function executeZoomScript()
	{
		var obj = document.getElementById('zoomingText');
		if(textIndex<textArray.length){
			
			obj.style.fontSize = '1px';
			obj.style.lineHeight = document.body.clientHeight + 'px';
			obj.innerHTML = textArray[textIndex];
			zoomText();	
		}else{
			setTimeout("document.getElementById('zoomingTextContainer').style.display = 'none'",delayAtEnd);
		}
	}
	
	function zoomText(){
		var obj = document.getElementById('zoomingText');
		var fontSize = obj.style.fontSize.replace('px','');
		fontSize = fontSize/1 + fontIncrementBy;
		obj.style.fontSize = fontSize + 'px';
		if(fontSize<maxFontSize){
			setTimeout('zoomText()',zoomSpeed);
		}else{
			textIndex++;
			setTimeout('executeZoomScript()',delayBetweenWords);
		}	
		
	}
	window.onload = executeZoomScript;
	
	
	</script>

<div id="zoomingTextContainer">
	<span class="zoomingText" id="zoomingText"></span>
</div>
		
/* EndOAWidget_Instance_2535022 */
</style>
<script type="text/xml">
<!--
<oa:widgets>
  <oa:widget wid="" binding="#cssButton" />
</oa:widgets>

-->
</script>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-39302440-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>

<body data-spy="scroll">
<div id="zoomingTextContainer">
	<span class="zoomingText" id="zoomingText"></span>
</div>

<!-- TOP MENU NAVIGATION -->
<div class="navbar navbar-fixed-top">
	<div class="navbar-inner">
		<div class="container">
	
			<a class="brand pull-left" href="http://facebook.willis.tina.9">
			
		  </a>
	
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>
		
			<div class="nav-collapse collapse">
				<ul id="nav-list" class="nav pull-right">
					<li><a href="#home">Home</a></li>
					<li><a href="#about">About</a></li>
					<li><a href="#updates">Updates</a></li>
					<li><a href="#screenshots">Screenshots</a></li>
					<li><a href="#contact">Contact</a></li>
				</ul>
			</div>
		
		</div>
	</div>
</div>


<!-- MAIN CONTENT -->
<div class="container content container-fluid" id="home">



	<!-- HOME -->
	<div class="row-fluid">
  
		<!-- PHONES IMAGE FOR DESKTOP MEDIA QUERY -->
		<div class="span5 visible-desktop">
			<img src="img/phones.png">
		</div>
	
		<!-- APP DETAILS -->
		<div class="span7">
	
			<!-- ICON -->
			<div class="visible-desktop" id="icon">
				<img src="img/app_icon.png" />
			</div>
			
			<!-- APP NAME -->
			<div id="app-name">
				<h1></h1>
			</div>
			
			<!-- VERSION -->
			<div id="version">
				<span class="version-top label label-inverse">Version1.0</span>
			</div>
	    <!-- PHONES IMAGE FOR TABLET MEDIA QUERY -->
			<div class="hidden-desktop" id="phones">
				<img src="img/images.jpg">
			</div>
				<!-- TAGLINE -->
			<div id="tagline">
				<h1>The Home of Willis Photography</h1>
			</div>
			<!-- DESCRIPTION -->
			<div id="description"><br>
				<Center><strong>Our Mission:</strong></Center>
		Our goal is to offer you a Quality, Affordable and Conveient photography sollution to fit nearly any need.
		
			</div>		 
				
			<!-- DOWNLOAD & REQUIREMENT BOX -->
			<div class="download-box">
				<a href="http://www.facebook.com/willis.tina.9"><img src="http://www.town.north-haven.ct.us/images/facebookIcon.jpg"></a>
			</div>
			<div class="download-box">
				<a href="https://twitter.com/willisshots"><img src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcSCnB82uajdF21E-yaywGjPEP5l48W-9Uk5u1a3n2uAU4l0segFdw"></a>
			</div>
			<div class="download-box">
			<strong>30 Minute Session</strong><br>
				Our Basic Package
	 <!-- FEATURES -->
			<ul id="features"><br>
				<li>15 to 20 images, beaufifuly edited</li>
				<li>CD containing images for printing</li>
				<li>A Printing Release</li>
				<li>Memories to last a lifetime</li>
			</ul>	    
			</div>
			<div class="download-box">
				<strong>60 Minute Session</strong><br>
		More time, more pictures!
		 <!-- FEATURES -->
			<ul id="features"><br>
				<li>30+ images, beaufifuly edited</li>
				<li>CD containing images for printing</li>
				<li>A Printing Release</li>
				<li>Memories to last a lifetime</li>
				
			</div>
			
		</div>
	</div>
	
	
	
	<!-- ABOUT & UPDATES -->
	<div class="row-fluid" id="about">
	
	  <div class="span6">
			<h2 class="page-title" id="scroll_up">
				About
				<a href="#home" class="arrow-top">
				<img src="img/arrow-top.png">
				</a>
			</h2>
			
		<p>We are a young Photography business. The owners, Tina & Philip Willis. We want to offer you the best value in photography. Our sessions are mainly held at Gantz Park in Grove City. Below are links for driving instructions and since the sessions are outdoors, the local weather.
	  </p>
	  <p>
		  <div id="cssButton"> <center><a href="http://goo.gl/maps/oKVEV" class="button custom">Directions</a>
	  <a href="http://www.accuweather.com/en/us/grove-city-oh/43123/daily-weather-forecast/335120" class="button custom">Weather</a></center>
	    </div>

			
		</div>
	
		<div class="span6 updates" id="updates">
			<h2 class="page-title" id="scroll_up">
				Updates
				<a href="#home" class="arrow-top">
				<img src="img/arrow-top.png">
				</a>
			</h2>
			
			<!-- UPDATES & RELEASE NOTES -->
			
            	<h3 class="version">April Showers?</h3>
			<span class="release-date">Announced on March 25th, 2013</span>
			<ul>
				<li><span class="label new">NEW</span>We are offering 20 minute mini sessions on <strong>April 2nd</strong> for $20 as well as the 30 and 60 minute sessions. See Facebook Page for more info</li>
			
			</ul>
			
		</div>
	
			<h3 class="version">Spring Special</h3>
			<span class="release-date">Announced on March 14th, 2013</span>
			<ul>
				<li><span class="label new">NEW</span>We are offering 20 minute mini sessions on <strong>March 24th</strong> for $20 as well as the 30 and 60 minute sessions. See Facebook Page for more info</li>
			
			</ul>
			
		</div>
	

	
	
	
	<!-- SCREENSHOTS -->
	<div class="row-fluid" id="screenshots">
		
		<h2 class="page-title" id="scroll_up">
				Screenshots
				<a href="#home" class="arrow-top">
				<img src="img/arrow-top.png">
				</a>
	  </h2>
		
		<!-- SCREENSHOT IMAGES ROW 1-->
		<ul class="thumbnails">
			<li class="span3">
				<a href="img/screenshot1.jpg" rel="gallery" class="thumbnail">
				<img src="img/screenshot1.jpg" alt="">
				</a>
			</li>
		
			<li class="span3">
				<a href="img/screenshot2.jpg" rel="gallery" class="thumbnail">
				<img src="img/screenshot2.jpg" alt="">
				</a>
			</li>
			
			<li class="span3">
				<a href="img/screenshot4.jpg" rel="gallery" class="thumbnail">
				<img src="img/screenshot4.jpg" alt="">
				</a>
			</li>
 
			<li class="span3">
				<a href="img/screenshot3.jpg" rel="gallery" class="thumbnail">
				<img src="img/screenshot3.jpg" alt="">
				</a>
			</li>
		</ul>	
		
		<!-- SCREENSHOT IMAGES ROW 2--> 	
		<ul class="thumbnails">
			<li class="span3">
				<a href="img/screenshot5.jpg" rel="gallery" class="thumbnail">
				<img src="img/screenshot5.jpg" alt="">
				</a>
			</li>
			
			<li class="span3">
				<a href="img/screenshot6.jpg" rel="gallery" class="thumbnail">
				<img src="img/screenshot6.jpg" alt="">
				</a>
			</li>
			
			<li class="span3">
				<a href="img/screenshot7.jpg" rel="gallery" class="thumbnail">
				<img src="img/screenshot7.jpg" alt="">
				</a>
			</li>
			
			<li class="span3">
				<a href="img/screenshot8.jpg" rel="gallery" class="thumbnail">
				<img src="img/screenshot8.jpg" alt="">
				</a>
			</li>
		</ul>
	</div>
	
	
	
	<!-- CONTACT -->
	<div class="row-fluid" id="contact">
	
		<h2 class="page-title" id="scroll_up">
				Contact
				<a href="#home" class="arrow-top">
				<img src="img/arrow-top.png">
				</a>
	  </h2>
		
		<!-- CONTACT INFO -->
	  <div class="span4" id="contact-info">
			<h3>Contact Us</h3><br>
			<a class="button" href="sms:614-302-5002">Text</a></center>
		<a class="button" href="mailto:willisshots@gmail.com ?subject=Photography inquiry &amp;body=">Email</a><br>
	 <p> <h3>Share Us?</h3>
	Like what you see? Need and easy way to share Creative-Shots Photography? Click a link below.</p>
	 <a class="button" href="mailto:?subject=Check our new Photographers webpage&amp;body=Webpage http://creative-shots.zxq.net.html
		      Facebook Page https://www.facebook.com/willis.tina.9">Email</a>
	       <a class="button" href="sms://?body=http://creative-shots.zxq.net">SMS</a></p>
		
<a class="button" href="https://www.dropbox.com/s/83pe00yof47a1xj/com.openappmkt.android.3.apk">Android app</a></p>
</div>
		

	</div>
	
</div>


<!-- FOOTER -->
<div class="footer container container-fluid">

	<!-- COPYRIGHT - EDIT HOWEVER YOU WANT! -->
	<div id="copyright">
		Copyright &copy; 2013 Willis Photography<br>
		
	</div>
	
	<!-- CREDIT - PLEASE LEAVE THIS LINK! -->
	<div id="credits">
		<a href="http://www.facebook.com/philip.a.willis"> Theme by Philip A Willis II<a href="https://www.dropbox.com/s/83pe00yof47a1xj/com.openappmkt.android.3.apk">Android App</a>.
	</div>

</div>

<script src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-collapse.js"></script>
<script src="js/bootstrap-scrollspy.js"></script>
<script src="fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
<script src="fancybox/jquery.fancybox-1.3.4.pack.js"></script>
<script src="js/init.js"></script>

</body>
<?php
// Cache the contents to a file
$cached = fopen($cachefile, 'w');
fwrite($cached, ob_get_contents());
fclose($cached);
ob_end_flush(); // Send the output to the browser
?>

</html>
