<?

$dbserver = 'us-cdbr-iron-east-03.cleardb.net';
$dbuser = 'b3d2925c74c520';
$dbpassword = '4932b4ac';
$dbname = 'heroku_5c1f36090b6e6ae';

$ssl_cliente_key='/app/b3d2925c74c520-key.pem';
$ssl_cliente_cert='/app/b3d2925c74c520-key.pem';
$ssl_cliente_ca='/app/cleardb-ca.pem';



$connect=mysqli_init();
if (!$connect)
  {
  die("mysqli_init failed");
  }

$connect->ssl_set($ssl_cliente_key, $ssl_cliente_cert, $ssl_cliente_ca, null, null);
$connect->real_connect($dbserver, $dbuser, $dbpassword, $dbname);

echo "SE CONECTO CORRECTAMENTE"; 


mysqli_close($connect);



?>
