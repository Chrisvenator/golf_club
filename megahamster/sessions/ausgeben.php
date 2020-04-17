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
if (isset($_SESSION['user'])) {
    $user = $_SESSION['user'];

    echo "<p> Eingeloggt als: " . $user . "</p>";
    ?>
    <div class="container">
        <form method="post">
            <input type="submit" name="Submit" value="Abmelden"/><br><br>
        </form>
    </div>
    <?php

    if (isset($_POST['Submit'])) {
        session_destroy();
        ?>
        <meta http-equiv="refresh" content="0;url=http://localhost/megahamster/sessions/login.php"/>
        <?php
    }

} else {
    echo "Sie müssen sich anmelden";
}
?>
<br>
<br>
<a href="login.php">zurück</a>
</body>
</html>
