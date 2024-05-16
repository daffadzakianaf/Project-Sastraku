<?php
$username = $password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $servername = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "project_sastraku";

    $conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM data_user WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "Login berhasil!";
    } else {
        echo "Username atau password salah!";
    }

    $conn->close();
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