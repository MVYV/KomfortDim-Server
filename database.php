<?php
$url = parse_url(getenv("mysql://b772cc46f45e5a:b98d3d89@eu-cdbr-west-02.cleardb.net/DATABASE?reconnect=true"));

$host = $url["host"];
$username = $url["user"];
$password = $url["pass"];
$database = substr($url["path"], 1);

'your_heroku_mysql_connection' => array(
    'driver' => 'mysql',
    'host' => $host,
    'database' => $database,
    'username' => $username,
    'password' => $password,
    'charset' => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix' => '',
),

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: PUT, GET, POST, DELETE");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");

define('DB_HOST', 'localhost');
define('DB_USER', 'b772cc46f45e5a');
define('DB_PASS', 'b98d3d89');
define('DB_NAME', 'komfort_dim');

function connect()
{
    $connect = mysqli_connect('eu-cdbr-west-02.cleardb.net' ,'b772cc46f45e5a' ,'b98d3d89' ,'komfort_dim');

    if (mysqli_connect_errno($connect)) {
        die("Failed to connect:" . mysqli_connect_error());
    }

    mysqli_set_charset($connect, "utf8");

    return $connect;
}

$con = connect();