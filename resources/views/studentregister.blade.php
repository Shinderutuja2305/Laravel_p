<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Student Register</title>
<!--<link rel="stylesheet" href="{{ asset('css/loginpage.css') }}">-->
<link rel="stylesheet" href="{{ asset('css/register1.css') }}">
</head>
<body bgcolor="FFEBB1">
<div class="register1">
<form action="student" method="POST">
@csrf
<h2>Register</h2>
<p>Enter Roll No</p>
<input type="number" name="rollno" id="name" placeholder="Enter rollno" required>
<p>Enter Full name</p>
<input type="text" name="fullname" id="name" placeholder="Enter full name" required>
<p>Enter Username</p>
<input type="text" name="username" id="name" placeholder="Enter username" required>
<p>Enter Password</p>
<input type="password" name="password" maxlength="8" minlength="4" id="name" placeholder="**********" required>
<p>Enter Email</p>
<input type="email" name="email"  id="name" placeholder="Enter Email" required>
<p>Enter Birth Date</p>
<input type="date" name="birthdate"  id="name" placeholder="Enter Birth Date"  required>
<p>Enter Contact number</p>
<input type="number" name="contact" id="name" placeholder="Enter Contact number" required>
<br>
<br>
<input type="submit" id="submit" value="Submit">
&nbsp;
&nbsp;
<a href="/"><input type="button" id="back" value="Back"></a>
<br>
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
<a href="login_s">Already Register</a>
</form>
</div>
</body>
</html>