<h1>Je te teste1</h1>
<h4>Tentative de connexion MariaDB depuis PHP...</h4>
<?php
$host = 'mariadb';
$user = 'root';
$pass = 'rootpassword';
$conn = new mysqli ($host, $user, $pass);

if ($conn->connect_error){
	die("La connexion a echouee: ".$conn->connect_error);
}
echo "Connexion reussie a MariaDB!";
?>
