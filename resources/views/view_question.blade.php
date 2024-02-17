<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>View Question</title>
</head>
<body bgcolor="FFEBB1">
<h1>Question</h1>
<table border="1">
	<tr>
		<th>Subject code</th>
		<th>Question no</th>
		<th>Question</th>
		<th>Option a</th>
		<th>Option b</th>
		<th>Option c</th>
		<th>Option d</th>
		<th>Answer</th>
		<th>Action</th>
	</tr>
	@foreach($addquestions as $data)
	<tr>
		<td>{{$data['subcode']}}</td>
		<td>{{$data['qno']}}</td>
		<td>{{$data['question']}}</td>
		<td>{{$data['option1']}}</td>
		<td>{{$data['option2']}}</td>
		<td>{{$data['option3']}}</td>
		<td>{{$data['option4']}}</td>
		<td>{{$data['answer']}}</td>
		<td><a href={{"d_qs/".$data['qno']}}>Delete</a>
		<a href={{"edit_qs/".$data['qno']}}>Edit</a></td>
	</tr>
	@endforeach
</table>
<a href="display_t"><input type="button" value="Back"></a>
</body>
</html>