<!DOCTYPE html>
<html>
<head>
	<title>Bienvenido</title>
</head>
<body>
<h1>Notes</h1>
<ul>
	@foreach($notes as $note)
	<li>{{$note->note}}</li>
	@endforeach
</ul>
</body>
</html>