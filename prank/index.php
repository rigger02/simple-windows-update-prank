
<!DOCTYPE html>

<html>
<head>
<title>PRANK: Update Screen</title>
<meta name="robots" content="index, follow">
<meta name="googlebot" content="index, follow">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="google" content="notranslate" />
<meta property="og:image" content="http://fakeupdate.net/assets/img/win10u.png">
<meta property="og:image:type" content="image/png">
<meta property="og:image:width" content="200">
<meta property="og:image:height" content="113">
<meta name="classification" content="Novelty">
<meta property="og:title" content="fakeupdate.net - Updating Windows 10">
<meta property="og:url" content="http://fakeupdate.net">
<meta name="apple-mobile-web-app-capable" content="yes">
<script src="https://code.jquery.com/jquery-latest.js"></script>
<script src="../assets/js/lang.js"></script>
<script>
window.onload = function() {

var str1 = "http"
var myString = location.search.split('?')[1].replace(/%20/g, ' ');
var str2 = myString.substring(0, 4); 



$('body').css('background', "#" + myString);


}



</script>
<SCRIPT TYPE="text/javascript"> 

var message="Sorry, right-click has been disabled"; 
function clickIE() {if (document.all) {(message);return false;}} 
function clickNS(e) {if 
(document.layers||(document.getElementById&&!document.all)) { 
if (e.which==2||e.which==3) {(message);return false;}}} 
if (document.layers) 
{document.captureEvents(Event.MOUSEDOWN);document.onmousedown=clickNS;} 
else{document.onmouseup=clickNS;document.oncontextmenu=clickIE;} 
document.oncontextmenu=new Function("return false") 
// --> 
</SCRIPT>
<script>
$(function() {
  $(document).keyup(function(e) {
    switch(e.keyCode) {
    case 13 : open('bsod.html','_self'); break;
    case 8 : open('bsod.html','_self'); break;
    }
  });
});
</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-45751574-5', 'auto');
  ga('send', 'pageview');

</script>
<script>  


var count=0;
var stage=1;
var stage2=3;
var counter=setInterval(timer, 14830); //1000 will  run it every 1 second
var ref="Configuring updates";

function timer()
{
  count=count+1;
  if (count <= 0)
  {
     clearInterval(counter);
     return;
  }

 document.getElementById("timer").innerHTML=count +'%';
 
 
 
   if (count > 99)
  {
     stage=stage+1;
	  document.getElementById("stage").innerHTML=stage +'';
	 count=0;
	  return;
  }
  
     if (stage > 3)
  {
     stage2=68;
     ref="Installing Updates";
	  document.getElementById("ref").innerHTML=ref +'';
	  document.getElementById("stage2").innerHTML=stage2 +'';
	  return;
  }
  
}




</script>
<style>

body {

	background:#006dae; 
user-select:none;-moz-user-select:none;-webkit-user-select:none;-ms-user-select:none;
	-webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
	background-size: cover;
vertical-align:middle; 
text-align:center;
z-index: -1;
margin:0;
padding:0;

}

.CT {

vertical-align:middle;
position: absolute;
top: 50%;
height: 70px;
margin-left:auto;
margin-right:auto;
display:block;
width:500px;
margin-top: -5%;
font-family:Segoe UI Light, Segoe UI, Arial;
font-size:23px;
color:#fff;
font-weight:normal;
text-align:center;
user-select:none;-moz-user-select:none;-webkit-user-select:none;-ms-user-select:none;
}

.image_block {


position: absolute;
bottom: 17px;
left: 50%;
width: 50%;
margin: -5% 0 0 -25%;
		

}
p {

display:block;
float:middle;
text-align:center;
width:100%;


}

.centeragain {

width:500px;
margin:0px auto;
text-align:left;


}
.messageBox {  
display:block;
color:#67A2E6;
font-family:Segoe UI Light, Segoe UI, Arial;
font-size:20px;
margin-left:auto;
margin-right:auto;
text-align:center;
user-select:none;-moz-user-select:none;-webkit-user-select:none;-ms-user-select:none;
z-index:999;  }  


.loader {
  position: relative;
  padding-top: 100px;
  width: 50px;
  margin: auto;
}
.loader .circle {
  position: absolute;
  width: 48px;
  height: 48px;
  opacity: 0;
  transform: rotate(225deg);
  animation-iteration-count: infinite;
  animation-name: orbit;
  animation-duration: 5.5s;
}
.loader .circle:after {
  content: '';
  position: absolute;
  width: 6px;
  height: 6px;
  border-radius: 5px;
  background: #fff;
  /* Pick a color */
}
.loader .circle:nth-child(2) {
  animation-delay: 240ms;
}
.loader .circle:nth-child(3) {
  animation-delay: 480ms;
}
.loader .circle:nth-child(4) {
  animation-delay: 720ms;
}
.loader .circle:nth-child(5) {
  animation-delay: 960ms;
}
@keyframes orbit {
  0% {
    transform: rotate(225deg);
    opacity: 1;
    animation-timing-function: ease-out;
  }
  7% {
    transform: rotate(345deg);
    animation-timing-function: linear;
  }
  30% {
    transform: rotate(455deg);
    animation-timing-function: ease-in-out;
  }
  39% {
    transform: rotate(690deg);
    animation-timing-function: linear;
  }
  70% {
    transform: rotate(815deg);
    opacity: 1;
    animation-timing-function: ease-out;
  }
  75% {
    transform: rotate(945deg);
    animation-timing-function: ease-out;
  }
  76% {
    transform: rotate(945deg);
    opacity: 0;
  }
  100% {
    transform: rotate(945deg);
    opacity: 0;
  }
}


#bottom {
    position: fixed;
    bottom: 10%;
    width: 100%;
	left:0;
	text-align:center;
}
</style>
</head>
<body>
<div style="display:block;position:absolute;min-width:100%; min-height:100%;margin:0;padding:0;">
<div class="centeragain">
<div class="CT">
<div class="FONT">
<div class="loader" style="vertical-align:middle;padding-top:2px;">
<div class="circle"></div>
<div class="circle"></div>
<div class="circle"></div>
<div class="circle"></div>
<div class="circle"></div>
</div>
<br><br>
<a id="ref" data-translate="_win10workingonupdates">Working on updates </a> &nbsp;<a id="timer">0%</a> <span data-translate="_win7percent">complete.</span><br/><span data-translate="_win10donotturnoff">Don't turn off your PC. This will take a while.</span>
</div>
<div id="bottom" data-translate="_win10willrestart">Your PC will restart several times</div>
</div>
</div>
</div>
</div>
<video mute loop style="z-index:-1;opacity:0.1;width:1px;height:1px;position:fixed;left:1px;bottom:1px;">
<source src="../assets/pixel.mp4" type="video/mp4">
</video>
</body>
</html>