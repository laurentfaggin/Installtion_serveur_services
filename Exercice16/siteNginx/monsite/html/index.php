<h1>je te teste!</h1>
<h4>Tenetativee de connection depuis PHP...</h4>
<?php
$host = 'mariadb';
$user = 'root';
$pass = 'rootpassword';
$conn = new mysqli($host, $user, $pass);

if ($conn->connect_error) {
    die("La connection a echoue: ".$conn->connect_error);
}
echo "Connection reussie a MariaDB!";
?>
