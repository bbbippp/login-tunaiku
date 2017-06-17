<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login Bootstrap</title>
  
  
  <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <style>
	body{
	  	background:#FFFFFF;
	  	font-family: 'Roboto', sans-serif;
	}

	.dark-primary-color    { background: #1976D2; }
	.default-primary-color { background: #2196F3; }
	.light-primary-color   { background: #BBDEFB; }
	.text-primary-color    { color: #FFFFFF; }
	.accent-color          { background: #9E9E9E; }
	.primary-text-color    { color: #212121; }
	.secondary-text-color  { color: #757575; }
	.divider-color         { border-color: #BDBDBD; }

  .login-wrap{
	  width:320px;
	  margin: 0 auto;
	  margin-top:100px;
	  border:1px solid #757575;
	  color:white;
	  padding:15px;
	  border-radius:5px;
	  background: #757575;

	}

.form-group.last { margin-bottom:0px; }
#header{
	min-height: 200px;
	padding-top:50px;
}
.m-10{
margin-top:10px;
}
.p-10{
padding:10px;
}
.btn{
float:left;
}

</style>  
</head>

<body>
  <div class="container-fluid">

  @yield('content')
</div>
  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>
</html>
