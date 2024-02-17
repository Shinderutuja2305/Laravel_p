<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Student Error page</title>
<link rel="stylesheet" href="{{ asset('css/loginpage.css') }}">
</head>
<body bgcolor="FFEBB1">
<div class="loginbar">
<img src=" {{ 'image/user.png' }}" height="100px" width="100px">
<h2>Student</h2>
<form action="login_s" method="POST">
@csrf
<h3><p>Username</p></h3>
<input type="text" name="username" id="name" placeholder="Enter username" required>
<h3><p>Password</p></h3>
<input type="password" name="password" id="name" placeholder="**********" required>
<br>
<br>
<input type="submit" id="submit" value="Sign in">&nbsp;&nbsp;
<a href="/"><input type="button" id="back" value="Back"></a>
</form>
<h3>Please enter valid credentials.</h3>
</div>
<!--
<h1>Enter valid credentails....</h1>
<a href="admin"><input type="button" name="" value="Proceed further"></a><br>
<br><br><a href="/"><input type="button" value="Back">
-->
</body>
</html>