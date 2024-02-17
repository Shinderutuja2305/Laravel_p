<body bgcolor="FFEBB1">
	<h1>Result</h1>
<table border="1">
	<tr>
		<th>Rollno</th>
		<th>Subject Code</th>
		<th>Marks</th>
		<th>Exam Time</th>
	</tr>
	<tr>
		<td>{{$data[0]->rollno}}</td>
		<td>{{$data[0]->subcode}}</td>
		<td>{{$data[0]->marks}}</td>
		<td>{{$data[0]->created_at}}</td>
	</tr>
</table>
<a href="display_s"><button>Back</button></a>
</body>

