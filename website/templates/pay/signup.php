<!DOCTYPE html>
<html>
<body>
<link rel="stylesheet" href="style_signup.css">
<script language="javascript" src="test.js"></script>

<h1>Already have an account</h1>
<a href='details/login.php'>
<input type="submit" class="button1" value="Login">
</a>
<div id="conatiner">
<form method="post" onSubmit="return validateconfirmpassword();">
<label for="uname"><b>Username :</b></label>
<input type="text" class="button2" placeholder="Enter user name" name="uname" required><br>

<label for="gender"><b>Gender:</b></label>
<input type="radio" class="r1" name="gender" value="male" required>Male<br><input type="radio" class="r2" name="gender" value="female" required>Female<br>

<label for="email"><b>E-mail:</b></label>
<input type="email" class="button2" placeholder="Email" name="email" required><br>

<label for="phone"><b>Phone:</b></label>
<input type="number" class="button2" placeholder="phone" name="phone" required><br>
<label for="pword"><b>Password :</b></label>
<input type="password" class="button2" placeholder="Enter Password" name="pword" onKeyUp="validateconfirmpassword" onBlur="validateconfirmpassword" required><br>
<label for="cpword"><b>Confirm Password :</b></label>
<input type="password" class="button2" placeholder="Confirm Password" name="cpword" onKeyUp="validateconfirmpassword" onBlur="validateconfirmpassword" required><br>

<div class="lower">

<input type="submit" name="submit" class="button1" value="sign up" onClick="validateconfirmpassword()">


</div>

</form>
</div>
</body>
</html>