
$servername = "localhost";
$username = "id6331595_snimconsulting";
$password = "masguapo";
$database = "id6331595_cotizaciones";
$charset ='utf8';

$enlace = new mysqli('p:'.$servername, $username, $password, $database);

if (!$enlace) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    exit;
}



mysqli_close($enlace);
