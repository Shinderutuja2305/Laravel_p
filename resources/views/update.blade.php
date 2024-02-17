<h1>Update Question</h1>
<form action="/edit_qs" method="POST">
	@csrf
	<input type="hidden" name="qno" value="{{$data[0]->qno}}">
	Question:<input type="text" name="question" value="{{$data[0]->question}}">
	<br><br>
	Option a:<input type="text" name="option1" value="{{$data[0]->option1}}">
	<br><br>
	Option b:<input type="text" name="option2" value="{{$data[0]->option2}}">
	<br><br>
	Option c:<input type="text" name="option3" value="{{$data[0]->option3}}">
	<br><br>
	Option d:<input type="text" name="option4" value="{{$data[0]->option4}}">
	<br><br>
	Answer:<input type="text" name="answer" value="{{$data[0]->answer}}">
	<br><br>
	<input type="submit" name="Submit" value="Update">
	<br><br>
</form>
