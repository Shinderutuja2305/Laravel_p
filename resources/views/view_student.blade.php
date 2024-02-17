<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>View Student</title>
</head>
<body bgcolor="FFEBB1">
<h1>Student Data</h1>
<table border="1">
	<tr>
		<th>RollNo</th>
		<th>Full name</th>
		<th>Email</th>
		<th>Birth Date</th>
		<th>Contact</th>
		<th>Action</th>
	</tr>
	@foreach($addstudents as $data)
	<tr>
		<td>{{$data['rollno']}}</td>
		<td>{{$data['fullname']}}</td>
		<td>{{$data['email']}}</td>
		<td>{{$data['birthdate']}}</td>
		<td>{{$data['contact']}}</td>
		<td><a href={{"remove_stud/".$data['rollno']}}>Delete</a></td>
	</tr>
	@endforeach
</table>
<br><br>
<a href="display"><input type="button" value="Back"></a>
</body>
</html>