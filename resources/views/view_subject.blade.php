<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>View Subject</title>
</head>
<body bgcolor="FFEBB1">
	<h1>Subject Data</h1>
<table border="1">

	<tr>
		<th>Subject code</th>
		<th>Subject name</th>
		<th>Action</th>
	</tr>
	@foreach($addsubjects as $data)
	<tr>
		<td>{{$data['subcode']}}</td>
		<td>{{$data['subname']}}</td>
		<td><a href={{"d_sub/".$data['subcode']}}>Delete</a></td>
	</tr>
	@endforeach
</table>
<br><br>
<a href="display_t"><input type="button" value="Back"></a>
</body>
</html>