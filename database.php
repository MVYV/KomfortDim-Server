<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: PUT, GET, POST, DELETE");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");

define('DB_HOST', 'eu-cdbr-west-02.cleardb.net');
define('DB_USER', 'b772cc46f45e5a');
define('DB_PASS', 'b98d3d89');
define('DB_NAME', 'heroku_925a66408b21b09');

function connect()
{
    $connect = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    if (mysqli_connect_errno()) {
        die("Failed to connect: " . mysqli_connect_error());
    }

    mysqli_set_charset($connect, "utf8");

    return $connect;
}

$con = connect();