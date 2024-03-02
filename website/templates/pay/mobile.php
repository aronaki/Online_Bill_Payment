<html>
<link rel="stylesheet" type="text/css" href="style_mobile.css">
<head><title>Mobile</title></head>
<body>
<style type="text/css">
<!--
.style1 {font-family: "Times New Roman", Times, serif}
-->
</style>


<div align="center" class="style1">
  <h1>Welcome To Phone Bill Payment </h1>
<h2>Tell us your number and we will figure out rest</h2>
</div>
<form method="post" action="#">
<label for="phone">Enter your phone number:</label>
<input type="tel" id="phone" name="phone" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" required>


<div class="note">
<span class="drop">
<select name="operator">
<option value="jio">JIO</option>
<option value="airtel">airtel</option>
<option value="bsnl">bsnl</option>
<option value="tata">TATA</option>
</select>
</span>
<span class="drop">
<select name="circle">
<option value="tamilnadu">Tamilnadu</option>
<option value="Kerala">Kerala</option>
<option value="Andhra">Andhra</option>
<option value="Karnataka">Karnataka</option>
</select>
</span>
</div>

<input type="submit" name="submit" value="submit">

</form>


</body>
</html>