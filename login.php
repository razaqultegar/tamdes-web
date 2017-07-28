<?php
$db = new mysqli("localhost", "root", "", "db_tamdes");
@session_start();

if (@$_SESSION['admin']) {
  header("location:/tamdes/admin");
}else {
?>

<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Login - TamuDesa</title>
    <!-- CSS -->
    <link rel="stylesheet" href="src/css/login.min.css">
    <link rel="stylesheet" href="src/css/login.css">
  </head>

  <body>
    <section>
      <span></span>
      <h1>Admin Login</h1>
      <form action="" method="post">
        <input name="username" placeholder='User Name' type='text'>
        <input name="password" placeholder='Password' type='password'>
        <input type="submit" name="login" value="Login" class="button">
      </form>
      <?php
      if (@$_POST['login']) {
        $username = @$_POST['username'];
        $password = @$_POST['password'];
        if ($username == '' || $password == '') {
          ?>
          <script type="text/javascript">alert("Username / Password tidak boleh kosong!");</script>
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
            header("location:/tamdes/admin");
          }else {
            ?>
            <script type="text/javascript">alert("Login Gagal, Silahkan coba lagi!");</script>
            <?php
          }
        }
      }
      ?>
      <h2>
        <p>&copy; 2017 - RazDev</p>
      </h2>
    </section>
  </body>
</html>
<?php
}
?>
