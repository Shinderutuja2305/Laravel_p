<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Add Question</title>
	<link rel="stylesheet" href="{{ asset('css/add.css') }}">
</head>
<body bgcolor="FFEBB1">
	<div class="register">
<form action="add_qs" method="POST">
@csrf
	<h1>Add Question</h1>
	<h3><p>Enter Subject Code</p></h3>
	<input type="number" name="subcode" id ="name" placeholder="Enter Subject Code" required>
	<!--<p>Enter Question number</p>
	<input type="number" name="qno" placeholder="Enter Question number" required>-->
	<h3><p>Enter Question</p></h3>
		<input type="text" name="question" id="name" placeholder="Enter Question" required>
	<h3><p>Option a</p></h3>
	<input type="text" name="option1"  id="name" placeholder="Enter Option a" required>
	<h3><p>Option b</p></h3>
	<input type="text" name="option2" id="name" placeholder="Enter Option b" required>
	<h3><p>Option c</p></h3>
	<input type="text" name="option3" id="name" placeholder="Enter Option c" required>
	<h3><p>Option d</p></h3>
	<input type="text" name="option4" id="name"  placeholder="Enter Option d" required>
	<h3><p>Answer</p></h3>
	<input type="text" name="answer" id="name" placeholder="Enter Answer" required>
	<br>
	<br>
	<input type="submit" value="Submit" id="submit"  name="Submit">
	&nbsp;&nbsp;&nbsp;&nbsp;
	<a href="display_t"><input type="button" id="back" value="Back" ></a></form>
</div>
</body>
</html>