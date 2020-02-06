
<title>PN Exam</title>
<link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">

<center>
{{ csrf_field() }}
<select>
    Names:
    @foreach($employee as $person)
    <option value="names">{{$person ->employee}} </option>
    @endforeach
</select>
<br><br>

<h1 id="time"></h1>
</center>

<form action="/clockin" method="post" autocomplete="off">
{{ csrf_field() }}
<button type="button" class="btn btn-secondary" onclick="document.getElementById('clockin').value = new Date().toLocaleTimeString(navigator.language, {hour: '2-digit', minute:'2-digit'})">clock in</button>
<input type="text" id="clockin" value="" />
<br><br>

<button type="button" id="first" class="btn btn-primary" onclick="document.getElementById('start').value = new Date().toLocaleTimeString(navigator.language, {hour: '2-digit', minute:'2-digit'})">start</button>
<input type="text" id="start" value="" />
<br>
<br>

<button type="button" class="btn btn-danger" onclick="document.getElementById('end').value = new Date().toLocaleTimeString(navigator.language, {hour: '2-digit', minute:'2-digit'})">end</button>
<input type="text" id="end" value="" />
<br><br>

<button type="button" class="btn btn-secondary" onclick="document.getElementById('clockout').value = new Date().toLocaleTimeString(navigator.language, {hour: '2-digit', minute:'2-digit'})">clock out</button>
<input type="text" id="clockout" value="" />
<br><br>

<h4>Total time worked:</h4>
<h4>Hours left before timeout:</h4>
<h4>Total breaks used:</h4>

<p id="demo"></p>

<script>

//function for getting the time
var today = new Date();
var time = today.getHours() + ":" + today.getMinutes();
document.getElementById('time').innerHTML = time;


</script>   
