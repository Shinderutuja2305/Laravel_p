<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Teacher login</title>
<link rel="stylesheet" href="{{ asset('css/loginpage.css') }}">
</head>
<body bgcolor="FFEBB1">
<div class="loginbar">
<img src=" {{ 'image/user.png' }}" height="100px" width="100px">
<h2>Teacher</h2>
<form action="teacher" method="POST">
@csrf
<h3><p>Username</p></h3>
<input type="text" name="username" id="name" placeholder="Enter username" required>
<h3><p>Password</p></h3>
<input type="password" name="password" id="name" placeholder="**********" required>
<br>
<br>
<br>
<input type="submit" id="submit" value="Sign in">
&nbsp;&nbsp;
<a href="/"><input type="button" id="back" value="Back"></a>
</form>
</div>
</body>
</html>
