<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Start Quiz</title>
</head>
<body bgcolor="FFEBB1">
<h1> Start Quiz</h1>
<h2 align="center">&nbsp;&nbsp;Timer</h2>
<div id="clockdiv" align="center"></div>
<script type="text/javascript">
var time_in_minutes =5;
var current_time = Date.parse(new Date());
var deadline = new Date(current_time + time_in_minutes*60*1000);

function time_remaining(endtime){
	var t = Date.parse(endtime) - Date.parse(new Date());
	var seconds = Math.floor( (t/1000) % 60 );
	var minutes = Math.floor( (t/1000/60) % 60 );
	var hours = Math.floor( (t/(1000*60*60)) % 24 );
	var days = Math.floor( t/(1000*60*60*24) );
	return {'total':t, 'days':days, 'hours':hours, 'minutes':minutes, 'seconds':seconds};
}
function run_clock(id,endtime){
	var clock = document.getElementById(id);
	function update_clock(){
		var t = time_remaining(endtime);
		clock.innerHTML = '<h3>minutes: '+t.minutes+' seconds: '+t.seconds+'</h3>';
		if(t.total<=0){ clearInterval(timeinterval); }
	}
	update_clock();
	var timeinterval = setInterval(update_clock,1000);
}
run_clock('clockdiv',deadline);
</script>
<form action="submit_ans" method="POST">	
	@csrf
<table border="1">
	<tr>
		<th>Question no</th>
		<th>Question</th>
		<th>Option a</th>
		<th>Option b</th>
		<th>Option c</th>
		<th>Option d</th>
	</tr>
	@foreach($addquestions as $data)
	<!--$key={{$data['qno']}}-->	
	<tr>
		<input type="hidden" name="subcode" value="{{$data['subcode']}}">
		<td>{{$data['qno']}}</td>
		<td>{{$data['question']}}</td>
		<td><input type="radio" name="answer{{$data['qno']}}" value="{{$data['option1']}}">{{$data['option1']}}</td>
		<td><input type="radio" name="answer{{$data['qno']}}" value="{{$data['option2']}}">{{$data['option2']}}</td>
		<td><input type="radio" name="answer{{$data['qno']}}" value="{{$data['option3']}}">{{$data['option3']}}</td>
		<td><input type="radio" name="answer{{$data['qno']}}" value="{{$data['option4']}}">{{$data['option4']}}</td>
	</tr>
	@endforeach
	<tr>
</table>
<br>
<input type="submit" name="Submit" value="Submit"></a>
<br><br>
</form>
</body>
</html>