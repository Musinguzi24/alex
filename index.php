<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>lakevictoriahotel.co.ug</title>
<style type="text/css">
<!--
.style2 {font-family: "Times New Roman", Times, serif}
-->
</style>
</head>
<html>
<head>
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
}

li {
    float: left;
}

a:link, a:visited {
    display: block;
    width: 120px;
    font-weight: bold;
    color: #FFFFFF;
    background-color: #CC0000;
    text-align: center;
    padding: 4px;
    text-decoration: none;
    text-transform: uppercase;
}

a:hover, a:active {
    background-color:#070709;
}
.style1 {
	font-family: Mistral;
	font-weight: bold;
}
.style3 {font-size: 14px}
</style>
</head>
<body>



<body background="home.jpg">
<script>

function setCookie(cname,cvalue,exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires=" + d.toGMTString();
    document.cookie = cname+"="+cvalue+"; "+expires;
}

function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i=0; i<ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1);
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

function checkCookie() {
    var user=getCookie("username");
    if (user != "") {
        alert("Welcome again " + user);
    } else {
       user = prompt("Please enter your name:","");
       if (user != "" && user != null) {
           setCookie("username", user, 30);
       }
    }
}

</script>
</head>
<body onload="checkCookie()">
<center><table width="887"  bgcolor="" border="0">
  <tr>
    <td height="106" colspan="3" >      
      
      <div align="right"></div></td>
    </tr>
  <tr>
  
    <td width="159">&nbsp;</td>
    <td width="547"  height="90" background="" bgcolor="">
     <CENTER>
       <table width="300" border="0">
         <tr>
 <th scope="col"><a href="index.php" class="style3">HOME </a></th>
           <th scope="col"><a href="ROOMS.php" class="style3">ROOMS </a></th>
           <th scope="col"><a href="FACILITIES.php" class="style3">FACILITIES </a></th>
           <th scope="col"><a href="GALLARY.php" class="style3">GALLARY </a></th>
           <th scope="col"><a href="map.php" class="style3">MAP</a></th>
         </tr>
       </table>
     </CENTER>
<script>
function myFunction() {
    alert("go pro buy App on itunes store!");
}
</script>
	
	<center></center>
	</center>	</td>
  </tr>
  <tr>
    <td colspan="3">
	
	<style type="text/css">
body {
text-align: center;
margin: 0;
padding: 0;
}
 
#imageContainer { 
}
 
a  {
text-decoration: none;
padding: 5px;
color: ;
}
</style>
 
<script type="text/javascript">
 
var imgSlide;
var pic = 0;
window.onload = function ()
{
 
imgSlide = document.getElementById('img');
 
// preload images
images = new Array();
images[0] = new Image();
images[0].src = "G2.jpg";
images[1] = new Image();
images[1].src = "G3.jpg";
images[2] = new Image();
images[2].src = "G4.jpg";
images[3] = new Image();
images[3].src = "G5.jpg";


}
 
function slide()
{
imgSlide.src = images[pic].src;
if(pic < 3) // images.length - 1 can be used here
{
pic++;
}
else
{
pic = 0
 
}
timer = setTimeout(slide, 5000);
}
 
function prev()
{
if(timer)
stopSlide();
 
if(pic == 0)
{
 
pic = 3;
 
imgSlide.src = images[pic].src;
}
else
{
pic--;
imgSlide.src = images[pic].src;
}
}
 
function next()
{
if(timer)
stopSlide();
 
if(pic == 4)
{
 
pic = 0;
imgSlide.src = images[pic].src;
}
else
{
pic++;
imgSlide.src = images[pic].src;
}
 
 
}
 
function stopSlide()
{
clearTimeout(timer);
}
 
 
</script>
</head>
 
<center><body>
<div id="imageContainer"><img id="img" src="G2.jpg" alt="image" title="image"/></div>
<a href="JavaScript:slide()" title="Start">CLICK HERE </a><a href="JavaScript:next()" title="Next">Next</a><a href="JavaScript:prev()" title="Previous">Previous</a>
</center>	</td>
    <td></td>
  </tr>
</table>
</center>

<img src="BUTTOM.JPG" width="973" height="284" />
</body>
</html>