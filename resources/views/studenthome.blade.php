<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title> Home page </title>
<link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>
<body bgcolor="FFEBB1">
<div class="menu-bar">
<h1 align="left"> Welcome {{ session()->get('user')}}...</h1>

<ul>
<li class="active"><a href ="display_s">Home</a></li>
<li><a href="start_quiz">Give Quiz</a></li>
<li><a href="print">View Result</a></li>
<li><a href="logout_s">Logout</a></li>
</ul>
</div>
<!--<h1>{{session()->get('no')}}</h1>-->

</body>
</html>      