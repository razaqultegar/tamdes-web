<?php
$db = new mysqli("localhost", "root", "", "db_tamdesapp");
@session_start();

if (@$_SESSION['admin']) {
  header("location:/baru/admin");
}else {
?>

<!DOCTYPE html>
<html>
<head>
	<title>Masuk - TamuDesa</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="vendor/login/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/login/vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/login/vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/login/vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/login/css/util.css">
	<link rel="stylesheet" type="text/css" href="vendor/login/css/main.css">
</head>
<body>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="vendor/login/images/img-01.png" alt="IMG">
				</div>
				<form action="" method="post" class="login100-form validate-form">
					<span class="login100-form-title">
						Member Login
					</span>
					<div class="wrap-input100">
						<input class="input100" type="text" name="username" placeholder="Username">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>
					<div class="wrap-input100">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					<div class="container-login100-form-btn">
						<input type="submit" name="login" value="Login" class="login100-form-btn">
					</div>
					<div class="text-center p-t-180">
						<a class="txt2" href="#">
							<i class="fa fa-copyright m-l-5" aria-hidden="true"></i>
							2017 - PrinceCode Dev
						</a>
					</div>
				</form>
				<?php
				if (@$_POST['login']) {
	        $username = @$_POST['username'];
	        $password = @$_POST['password'];
	        if ($username == '' || $password == '') {
	          ?>
						<script type="text/javascript">alert("Username dan Password Tidak Boleh Kosong!");</script>
	          <?php
	        }else {
	          $log = $db->prepare("SELECT * FROM tb_login where username = ? and password = md5(?)") or die ($db->error);
	          $log->bind_param('ss', $username, $password);
	          $log->execute();
	          $log->store_result();
	          $check = $log->num_rows;
	          $log->bind_result($id, $username, $password, $nama);
	          $log->fetch();
	          if ($check > 0) {
	            @$_SESSION['admin'] = $id;
	            header("location:/baru/admin");
	          }else {
	            ?>
	            <script type="text/javascript">alert("Login Gagal, Silahkan coba lagi!");</script>
	            <?php
	          }
	        }
	      }
	      ?>
			</div>
		</div>
	</div>

	<script src="vendor/login/vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/login/vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/login/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/login/vendor/select2/select2.min.js"></script>
	<script src="vendor/login/vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
	<script src="vendor/login/js/main.js"></script>
</body>
</html>
<?php
}
?>
