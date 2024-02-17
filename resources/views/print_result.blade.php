<!-- print page logic-->
<body  bgcolor="FFEBB1">
<h1>Result</h1>
<!DOCTYPE html>

<table>
	<tr>
		<th><h3>RollNo</h3></th>
		<td><h3>{{session()->get('no')}}</h3></td>
	</tr>
	<tr>
		<th><h3>Fullname</h3></th>
		<td><h3>{{$data[0]->fullname}}</h3></td>
	</tr>
	<tr>
		<th><h3>Email</h3></th>
		<td><h3>{{$data[0]->email}}</h3></td>
	</tr>
	<tr>
		<th><h3>Birth Date</h3></th>
		<td><h3>{{$data[0]->birthdate}}</h3></td>
	</tr>
	<tr>
		<th><h3>Contact</h3></th>
		<td><h3>{{$data[0]->contact}}</h3></td>
	</tr>	
	<tr>
		<th><h3>Subject Code</h3></th>
		<td><h3>{{$data[0]->subcode}}</h3></td>
	</tr>
	<tr>
		<th><h3>Subject Name</h3></th>
		<td><h3>{{$data[0]->subname}}</h3></td>
	</tr>
	<tr>
		<th><h3>Marks</h3></th>
		<td><h3>{{$data[0]->marks}}</h3></td>
	</tr>
	<tr>
		<th><h3>Exam Time</h3></th>
		<td><h3>{{$data[0]->created_at}}</h3></td>
	</tr>
</h1>
</table>
<br>
<button onclick="display()">Click to print Result..</button>
<script>
function display(){
window.print();
}
</script>
<br><br>
<a href="display_s"><input type="button" name="Back" value="Back"></a>
</body>