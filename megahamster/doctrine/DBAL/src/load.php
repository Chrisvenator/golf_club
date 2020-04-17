<!DOCTYPE html>
<html>
<head>
    <Title>User eintragen</Title>
    <!--    <meta http-equiv="refresh" content="0;url=http://chrisvenator.hd/Uebung/anmelden.php"/>-->
    <style>
        body {
            /*background-color: #000000;*/
            background-image: url("../../../../quitz/wallpaper4.jpg");
            background-repeat: repeat;
            background-size: 100%;
            color: #FFFFFF;
            text-shadow: 0px 0px 10px black;
            text-align: center;
            font-size: 30px;
            background-attachment: fixed;
        }

        a {
            color: white;
            text-shadow: 0px 0px 10px black;
            background-color: transparent;
            border: 5px double white;
            border-radius: 10px;
            font-size: 40px;
            margin: 20px;
            margin-top: 10px;
        }

        a:link, a:visited {
            background-color: grey;
            color: white;
            padding: 14px 25px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
        }

        a:hover, a:active {
            background-color: grey;
        }

        .container2 {
            text-align: right;
            margin-right: 44%;
        }

    </style>
</head>

<?php


require_once "../vendor/autoload.php";

use Doctrine\DBAL\DriverManager;

//$user = 'root';
//$pass = '';
//$db = new PDO('mysql:host=localhost;dbname=webt_test_db', $user, $pass);
//$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//
//$sql = "SELECT * FROM user";
//echo "<ul>";
//foreach ($db->query($sql) as $row) {
//    echo "<li>id: " . $row['ID'] . ": <br>";
//    echo "name: " . $row['name'] . "<br>";
//    echo "ort: " . $row['ort'] . "</li><br>";
//}
//echo "</ul>";

$connectionParams = array(
    'dbname' => 'webt_test_db',
    'user' => 'root',
    'password' => '',
    'host' => 'localhost',
    'driver' => 'pdo_mysql',
);
try {
    $conn = \Doctrine\DBAL\DriverManager::getConnection($connectionParams);
} catch (\Doctrine\DBAL\DBALException $e) {
    echo $e;
}


//letzte Stunde:

$queryBuilder = $conn->createQueryBuilder();

$tmp = $queryBuilder
    ->select('id', 'name', 'ort')
    ->from('user');


try {
    $stmt = $conn->query($tmp);
} catch (\Doctrine\DBAL\DBALException $e) {
    echo $e;
}
while ($row = $stmt->fetch()) {
    echo "ID: " . $row['id'] . "<br>";
    echo "Name: " . htmlspecialchars($row['name']) . "<br>";
    echo "Erstellt in: " . htmlspecialchars($row['ort']) . "<br> <br>";
}

//https://www.doctrine-project.org/projects/doctrine-dbal/en/2.10/reference/query-builder.html#sql-query-builder