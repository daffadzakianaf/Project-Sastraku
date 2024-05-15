<?php
// Inisialisasi variabel
$username = $password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Cek username dan password (Ini hanya contoh, sebaiknya gunakan database)
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

</body>
</html>