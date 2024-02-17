<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Add Subject</title>
<link rel="stylesheet" href="{{ asset('css/register2.css') }}">
</head>
<body bgcolor="FFEBB1">
<div class="register2">
<form action="subject" method="POST">
@csrf
<h1>Add Subject </h1>
<br><br>
<h3><p>Add Subject Code</p></h3>
<input type="number" name="subcode" id="name" placeholder="Enter Subject Code" required>
<h3><p>Add Subject Name</p></h3>
<input type="text" name="subname" id="name" placeholder="Enter Subject name" required>
<br>
<br>
<br><br>
&nbsp;&nbsp;
&nbsp;&nbsp;
<input type="submit"  id="submit" value="Submit">
&nbsp;&nbsp;
<a href="display_t"><input type="button" id="back" value="Back"></a>
</form>
</div>
</body>
</html>