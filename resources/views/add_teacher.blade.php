<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Add Teacher</title>
<!--<link rel="stylesheet" href="{{ asset('css/loginpage.css') }}">-->
<link rel="stylesheet" href="{{ asset('css/register.css') }}">

</head>
<body bgcolor="FFEBB1">
<div class="register">
<form action="add_teach" method="POST">
@csrf
<img src=" {{ 'image/user.png' }}" height="70px" width="50px" align="left">
<br>
<h1>&nbsp;&nbsp;Add Teacher </h1>
<h3><p>Add Teacher id</p></h3>
<input type="number" name="tno" id="name" placeholder="Enter tid" required>
<h3><p>Add Full name</p></h3>
<input type="text" name="fullname" id="name" placeholder="Enter full name" required>
<h3><p>Add Username</p></h3>
<input type="text" name="username" id="name" placeholder="Enter username" required>
<h3><p>Add Password</p></h3>
<input type="password" name="password" maxlength="8" minlength="4" id="name" placeholder="**********" required>
<h3><p>Add Contact number</p></h3>
<input type="number" name="contact"  id="name" placeholder="Enter Contact number" required>
<br>
<br>
&nbsp;&nbsp;
&nbsp;&nbsp;
&nbsp;&nbsp;

&nbsp;&nbsp;
<input type="submit" value="Submit" id="submit">
&nbsp;&nbsp;

<a href="display"><input type="button" id="back" value="Back"></a>
</form>
</div>
</body>
</html>