<?php
$username = $password = $confirm_password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];

    if($password != $confirm_password){
        echo "Password tidak sama!";
    } else {
        $servername = "localhost";
        $dbusername = "root";
        $dbpassword = "";
        $dbname = "Project_Sastraku";

        $conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

        if ($conn->connect_error) {
            die("Koneksi gagal: " . $conn->connect_error);
        }

        $sql = "INSERT INTO Data_User (username, password)
        VALUES ('$username', '$password')";

        if ($conn->query($sql) === TRUE) {
            echo "Pendaftaran berhasil!";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    }
}
?>

<!DOCTYPE html>
<html>
<body>

<h2>Halaman Sign Up</h2>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  Username: <input type="text" name="username">
  <br><br>
  Password: <input type="password" name="password">
  <br><br>
  Konfirmasi Password: <input type="password" name="confirm_password">
  <br><br>
  <input type="submit" name="submit" value="Daftar">
</form>

</body>
</html>