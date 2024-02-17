<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Delete Teacher</title>
</head>
<body bgcolor="FFEBB1">
<h1>Teacher data:</h1>
<table border="1">
	<tr>
		<th>Teacher id</th>
		<th>Full Name</th>
		<th>Username</th>
		<th>Contact</th>
		<th>Action</th>
	</tr>
	@foreach($addteachers as $data)
	<tr>
		<td>{{$data['tno']}}</td>
		<td>{{$data['fullname']}}</td>
		<td>{{$data['username']}}</td>
		<td>{{$data['contact']}}</td>
		<td><a href={{"delete_t/".$data['tno']}}>Delete</a></td>
	</tr>
	@endforeach
</table>
<br><br>
<a href="display"><input type="button" value="Back"></a>
</body>
</html>