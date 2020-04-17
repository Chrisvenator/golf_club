<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <Title>Login-Formular</Title>

    <style>
        body {
            text-align: center;
            background-image: url('../../wallpaper3.png');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-color: #3b6d95;
            background-size: 100%;
            color: white;
            text-shadow: 0px 0px 10px black;
            font-size: 40px;
        }

        select {
            background-color: transparent;
            color: white;
            text-shadow: 0px 0px 10px black;
            border: 4px dotted white;
            font-size: 40px;
        }

        option {
            /*background-color: transparent !important;*/
            /*border: 1px solid #e4e4e4;*/
            color: #000;
            font-size: 40px;
            border: 4px dotted white;
        }

        input {
            color: white;
            text-shadow: 0px 0px 10px black;
            background-color: transparent;
            border: 5px double white;
            border-radius: 10px;
            font-size: 40px;
        }

        .submitButton, a {
            padding: 5px;
            margin-top: 30px;
            color: white;
            text-shadow: 0px 0px 10px black;
            background-color: transparent;
            border: 5px double white;
            border-radius: 10px;
            font-size: 40px;
            margin-right: 100px;
        }

    </style>

</head>
<body>
<?php
session_start();
?>
<h1>Login: </h1>
<div class="container">
    <form method="post">
        <div class="container2">
            <span>Username*</span> <input type="text" name="UName"/> <br/>
            <span>E-Mail</span> <input type="text" name="Email"/> <br/>
            <span>Passwort</span> <input type="text" name="Passwort"/> <br/>
        </div>
        <?php
        if (!isset($_SESSION['user'])) echo '<input type="submit" name="Submit" value="Registrieren"/><br><br>';
        ?>
    </form>
</div>
<?php

if (isset($_SESSION['user'])) {
    $user = $_SESSION['user'];
    echo "<p> angemeldet als: " . $user . "</p>";
}
if (isset($_POST['Submit'])) {
    $_SESSION['user'] = $_POST['UName'];
    ?>
    <meta http-equiv="refresh" content="0;url=http://localhost/megahamster/sessions/ausgeben.php"/>
    <?php
}

?>

<a href="ausgeben.php">vor</a>
</body>
</html>

