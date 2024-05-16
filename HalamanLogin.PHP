<?php
$username = $password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if($username == 'admin' && $password == 'password'){
        echo "Login berhasil!";
    } else {
        echo "Username atau password salah!";
    }
}
?>

<!DOCTYPE html>
<html>
<body>

<h2>Halaman Login</h2>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  Username: <input type="text" name="username">
  <br><br>
  Password: <input type="password" name="password">
  <br><br>
  <input type="submit" name="submit" value="Login">
</form>

<p>Belum memiliki akun? Silahkan mendaftar terlebih dahulu</p>
<a href="http://localhost/project-sastraku/halamansignup.php"><button>Sign-up</button></a>

</body>
</html>