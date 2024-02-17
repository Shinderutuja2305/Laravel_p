<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Student Result</title>
</head>
<body bgcolor="FFEBB1">
<h1>Results</h1>
<table border="1">
    <tr>
        <th>RollNo</th>
        <th>Suject Code</th>
        <th>Marks</th>
        <th>Quiz Time</th>
    </tr>
    @foreach($results as $data)
    <tr>
        <!--<td>{{$data['id']}}</td>-->
        <td>{{$data['rollno']}}</td>
        <td>{{$data['subcode']}}</td>
        <td>{{$data['marks']}}</td>
        <td>{{$data['created_at']}}</td>
    </tr>
    @endforeach        
</table>
<br><br>
<a href="display_t"><input type="button" value="Back"></a>
</body>
</html>