<?php
session_start();
include_once '../../dbconnect.php';
$i=1;
?>
<!DOCTYPE html>
<html>
<title>User details</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style type="text/css">
<!--
.style1 {
font-size: 24px;
font-weight: bold;
}
.style2 {font-size: 24px; font-weight: bold; color: #990033; }
-->
</style>


<body>
<form method="post" action="#">
<div class="w3-container">
  <h2>Sessions</h2>
  <p>Click on particular session to view bill details.</p>
</div>

<div class="w3-bar w3-black">
  <button class="w3-bar-item w3-button" onClick="openCity('Mobile')">Mobile</button>
  <button class="w3-bar-item w3-button" onClick="openCity('Cable')">Cable</button>
  <button class="w3-bar-item w3-button" onClick="openCity('Gas')">Gas</button>
<button class="w3-bar-item w3-button" onClick="openCity('EB')">EB</button>
<button class="w3-bar-item w3-button" onClick="openCity('Water')">Water</button>
<button class="w3-bar-item w3-button" onClick="openCity('DTH')">DTH</button>

</div>

<div id="Mobile" class="w3-container city">
  <h2>Mobile</h2>
  <p><input type="tel" id="phone" name="phone" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" required>
<input type="submit" name="submit" value="submit">
</p>
<table width="80%" border="1" align="center">
<tr>
<th height="30" scope="col">Sl.No</th>
<th scope="col"> Name </th>

<th scope="col">Phone number</th>

<th scope="col">Card No</th>
<th scope="col">Amount </th>

<th scope="col">Date </th>
</tr>

<?php
if(isset($_POST['submit'])){
$phone= $_POST['phone'];
$qry = mysql_query("select  *  from amount where type=$phone") or die("not taken");

while($row=mysql_fetch_array($qry))
{

?>
<tr>
<td><div align="center"><?php echo $i;?></div></td>
<td><div align="center"><?php echo $row['name'];?></div></td>
<td><div align="center"><?php echo $row['type'];?></div></td>

<td><div align="center"><?php echo $row['card'];?></div></td>
<td><div align="center"><?php echo $row['amount'];?></div></td>
<td><div align="center"><?php echo $row['mdate'];?></div></td>

</tr>
<?php
$i++;

}
}
?>
</table>
</div>

<div id="Cable" class="w3-container city" style="display:none">
  <h2>Cable</h2>
  <p>Paris is the capital of France.</p>
   
</div>

<div id="Gas" class="w3-container city" style="display:none">
  <h2>Gas</h2>
  <p>Tokyo is the capital of Japan.</p>
</div>

<div id="EB" class="w3-container city" style="display:none">
  <h2>EB</h2>
  <p>Tokyo is the capital of Japan.</p>
</div>

<div id="Water" class="w3-container city" style="display:none">
  <h2>Water</h2>
  <p>Tokyo is the capital of Japan.</p>
</div>

<div id="DTH" class="w3-container city" style="display:none">
  <h2>Dth</h2>
  <p>Tokyo is the capital of Japan.</p>
</div>

<script>
function openCity(cityName) {
  var i;
  var x = document.getElementsByClassName("city");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  document.getElementById(cityName).style.display = "block";  
}
</script>
</form>
</body>
</html>
