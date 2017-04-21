<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Đăng kí</h1>
	{{Form::open(['url'=>'trademark_sign_up'])}}
	TradeMark Name:{{ Form::text('name') }}
	Industry:{{ Form::select('industry_id',$industry_pluck)}}
	Password:{{Form::password('password')}}
	Password-config:{{Form::password('password_config')}}
	{{Form::submit('Đăng kí')}}
	{{Form::close()}}
	<h1>Đăng nhập</h1>
	{{Form::open(['url'=>'trademark_sign_in'])}}
	TradeMark Name:{{ Form::text('name') }}
	Password:{{ Form::password('password')}}
	{{Form::submit('Đăng nhập')}}
	{{Form::close()}}
</body>
</html>