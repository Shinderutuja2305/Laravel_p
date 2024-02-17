<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Check Subject Code</title>
</head>
<body bgcolor="FFEBB1">
<form action="check" method="POST">
@csrf
<h3><p>Enter subject code</p></h3>
<input type="number" name="subcode" placeholder="Enter Subject Code" required>
<br><br>
<input type="submit" name="Submit" value="Submit">
<br>
<br>
<a href="display_t"><input type="button" name="Back" value="Back"></a>
</form>
</body>
</html>