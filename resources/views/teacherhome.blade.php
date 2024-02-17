<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title> Home page </title>
<link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>
<body bgcolor="FFEBB1">
<div class="menu-bar">
<ul>
<li class="active"><a href ="display_t">Home</a></li>
<li><a href="subject">Add Subject</a></li>
<li><a href="view_sub">Delete Subject</a></li>
<li><a href="add_qs">Add Quiz</a></li>
<li><a href="viewqs">View Quiz</a></li>
<li><a href="check">View Student Result</a></li>
<li><a href="logout">Logout</a></li>
</ul>
</div>
<h1> Welcome {{ session()->get('user')}}...</h1>
<!--<h2>tno{{session()->get('no')}}</h2>-->
</body>
</html>      
