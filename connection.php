<?php
error_reporting(0);
$conn = mysql_connect("localhost","root","");
$db = mysql_select_db("hotelreservation",$conn);  
?>
<?php


$clientname=$_POST['clientname'];
$company=$_POST['company'];
$session=$_POST['session'];
$booking_number=$_POST['booking_number'];
$branch_name=$_POST['branch_name'];
$class=$_POST['class'];
$adults=$_POST['adults'];
$kids=$_POST['kids'];
$email_address=$_POST['email_address'];





$sql="INSERT into bookingrecords values('$ID','$clientname','$company','$session','$$booking_number','$branch_name','$class','$adults','$kids','$email_address')";





if(!$qury)

echo mysql_error();
else 
echo "Successful <a href='bookings.php'>Book Again</a>";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>lakevictoriahotel.com</title>
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

	
	<center></center>
	</center>	</td>
  </tr>
  <tr>
    <td colspan="3">
	
	
 
<form action="connection.php" method="post">
</head><table width="714" border="0" align="center" bgcolor="#FFFFFF">
  <tr>
    <td width="198">CLIENT NAME</td>
    <td width="330">
      <label>
        <input type="text" name="clientname" id="textfield" />
      </label>
  </td>
  </tr>
  <tr>
    <td>COMPANY</td>
    <td>
      <label>
        <input type="text" name="company" id="textfield2" />
      </label>
   </td>
  </tr>
  <tr>
    <td>SESSION</td>
    <td align="left"><span class="style6">
      <label> </label>
      </span>
  
          <select name="session">
            <option>Select Session</option>
          </select>
    </td>
  </tr>
  <tr>
    <td>BOOKING NO</td>
    <td>
      <label>
        <input type="text" name="booking_number" id="textfield3" />
      </label>
   </td>
  </tr>
  <tr>
    <td>BRANCH</td>
    <td>
      <select name="branch_name" >
        <option>Muyunyoyo</option>
           <option>speak resort</option>

      </select>
   </td>
  </tr>
  <tr>
    <td>CLASS </td>
    <td>
      <p>
        <select name="class">
          <option> vip</option>  
           <option>executive</option>
           <option>presidential suite</option>
        </select>
      </p>
   </td>
  </tr>
  <tr>
    <td>TYPE OF ROOM</td>
    <td>
      <select name="typeofroom">
        <option>Single Room</option>
            <option>Double Room</option>
      </select>
   </td>
  </tr>
  <tr>
    <td>NO OF ADULTS / KIDS</td>
    <td>
      <select name="adults" >
        <option>NO OF ADULTS/KIDS</option>
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
        <option>6</option>
        <option>7</option>
        <option>8</option>
        <option>9</option>
        <option>10</option>
        <option>11</option>
        <option>12</option>
        <option>14</option>
        <option>15</option>
        <option>16</option>
        <option>17</option>
        <option>18</option>
        <option>19</option>
        <option>20</option>
        <option>21</option>
        <option>22</option>
        <option>23</option>
        <option>24</option>
        <option>25</option>
        <option>27</option>
        <option>28</option>
        <option>29</option>
        <option>30</option>
        <option>31</option>
      </select>
      <select name="kids">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
        <option>6</option>
        <option>7</option>
        <option>8</option>
        <option>9</option>
        <option>10</option>
        <option>11</option>
        <option>12</option>
      </select>
     
    </td>
  </tr>
  <tr>
    <td>EMAIL ADRESS</td>
    <td>
      <label>
        <input type="text" name="email_address" id="textfield8" />
      </label>
    </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>
      <label>
        <input type="submit" name="submit" id="button" value="Book Now" />
      </label>
</form>
  </td>
  </tr>
  <tr>
    <td colspan="3"></td>
  </tr>
</table><center><body>



<CENTER><img src="BUTTOM.JPG" width="973" height="284" /></CENTER>
</body>
</html>