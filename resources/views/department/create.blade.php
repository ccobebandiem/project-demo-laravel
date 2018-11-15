<!DOCTYPE html>
<html>
<head>
	<title>Department</title>
</head>
<body>
<form action="{{URL::action('DeparementController@store')}}" method="Post">
	<input type="hidden" name="_token" value="value=”{{ csrf_token() }}">
	<div>
		<label>Name</label>
		<input type="text" name="name">
	</div>
	<div>
		<label>Description</label>
		<input type="text" name="description">
	</div>
	<button type="submit">Submit</button>
</form>
</body>
</html>