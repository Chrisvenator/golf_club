<!DOCTYPE html>
<html>
<head>
    <Title>User eintragen</Title>
    <link rel="stylesheet" href="https://unpkg.com/sakura.css/css/sakura.css" type="text/css">
    <style>
        /*body {*/
        /*    !*background-color: #000000;*!*/
        /*    background-image: url("../../../quitz/wallpaper5.jpg");*/
        /*    background-repeat: no-repeat;*/
        /*    background-size: 100%;*/
        /*    color: #FFFFFF;*/
        /*    text-shadow: 0px 0px 10px black;*/
        /*    text-align: center;*/
        /*}*/

        /*a {*/
        /*    color: white;*/
        /*    text-shadow: 0px 0px 10px black;*/
        /*    background-color: transparent;*/
        /*    border: 5px double white;*/
        /*    border-radius: 10px;*/
        /*    font-size: 40px;*/
        /*    margin: 20px;*/
        /*    margin-top: 10px;*/
        /*}*/


        /*.container2 {*/
        /*    text-align: right;*/
        /*    margin-right: 44%;*/
        /*}*/

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
//
if (isset($_POST['Submit'])) {
//    $sql = "INSERT INTO user (ID, name, ort) VALUES (':eins' ,':zwei', ':drei');";
//    $alt = array(":eins", ":zwei", ':drei');
//    $neu = array($_POST["ID"], $_POST["name"], $_POST["ort"]);
//
//    $sql = str_replace($alt, $neu, $sql);
//    $db->exec($sql);
//
//    echo "Diese Person wurde hinzugefügt (:";
//}

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

    $queryBuilder = $conn->createQueryBuilder();

    $username = $_POST['name'];
    $ort = $_POST['ort'];

    $tmp = $queryBuilder
        ->insert('user')
        ->values(
            array(
                'name' => '?',
                'ort' => '?'
            )
        )
        ->setParameter(0, $username)
        ->setParameter(1, $ort);


    try {
        $stmt = $tmp->execute();
    } catch (\Doctrine\DBAL\DBALException $e) {
        echo "Statement Falsch: <br>";
        echo $e;
    }
}
?>


<body>
<h1> Neue Personen erstellen: </h1>
<div class="container">
    <form method="post">
        <div class="container2">
            <span>Username:</span> <input type="text" name="name"/> <br/>
            <span>Ort:</span> <input type="text" name="ort"/> <br/>
        </div>
        <input type="submit" name="Submit" value="Person eintragen"/><br><br>
    </form>
</div>


</body>
</html>