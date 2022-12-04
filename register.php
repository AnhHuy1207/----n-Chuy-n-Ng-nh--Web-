<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Figure World - Sign In</title>

	<!-- Google Fonts -->
	<!-- <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700|Lato:400,100,300,700,900' rel='stylesheet' type='text/css'> -->

	<link rel="stylesheet" href="css/animate.css">
	<!-- Custom Stylesheet -->
	<link rel="stylesheet" href="css/style_login.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
</head>

<body>
	
	<div class="container">
		<div class="login-box animated fadeInUp">
			<form id="form_reg" action="reg.php" method="post"></form>
			<div class="box-header">
				<h2>Đăng Ký</h2>
			</div>
			<label for="fullname">Họ tên</label>
			<br/>
			<input type="text" name="fullname" id="fullname">
			<br/>
			<label for="username">Tên đăng nhập</label>
			<br/>
			<input type="text" name="username" id="username">
			<br/>
			<label for="email">Email</label>
			<br/>
			<input type="text" name="email" id="email">
			<br/>
			<label for="password">Mật khẩu</label>
			<br/>
			<input type="password" id="password">
			<br/>

			<button type="submit" name="btn-reg">Đăng ký</button>
			<br/>
		</div>
	</div>
</body>

<script>
	$(document).ready(function () {
    	$('#logo').addClass('animated fadeInDown');
    	$("input:text:visible:first").focus();
	});
	$('#username').focus(function() {
		$('label[for="username"]').addClass('selected');
	});
	$('#username').blur(function() {
		$('label[for="username"]').removeClass('selected');
	});
	$('#password').focus(function() {
		$('label[for="password"]').addClass('selected');
	});
	$('#password').blur(function() {
		$('label[for="password"]').removeClass('selected');
	});
</script>

</html>