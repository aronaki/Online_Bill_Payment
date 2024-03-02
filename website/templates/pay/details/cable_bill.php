<!DOCTYPE html>
<html>
<body>
<link rel="stylesheet" href="style_login.css">
<h1 align="center">Card Details</h1>
<div id="conatiner">
<form method="post" action="#">
<label for="card"><b>Cardnumber :</b></label>
<input type="tel" class="button2" placeholder="Card no" name="card" required><br>
<input type="month" name="date" class="button2" placeholder="Month Year">
<input type="password" name="code" placeholder="xxx" maxlength="3" class="button2"><br>

<input type="text" name="name1" class="button2" placeholder="Name on the card">

<input type="number" class="button2" placeholder="amount" name="amount" maxlength="5" required><br>


<div class="lower">

<input type="submit" name="Submit" class="button1" value="Pay">


</div>
<?php

session_start();
include_once "../../dbconnect.php";

extract($_POST);
if(isset($_POST['Submit'])){


$qry = mysql_query("select  *  from mobile order by id DESC LIMIT 1") or die("not taken");

while($row=mysql_fetch_array($qry))
{
$phone=  $row['phone'];
$mdate= $row['date'];
}

$card= $_POST['card'];
$date= $_POST['date'];
$code= $_POST['code'];
$name1= $_POST['name1'];
$amount= $_POST['amount'];

$sql = mysql_query("insert into amount (card,date,code,name,type,mdate,amount) values ('$card', '$date','$code','$name1','$phone','$mdate','$amount')")or die("not inserted");

echo "submitted successfully";
}

?>
</form>
</div>
</body>
</html>