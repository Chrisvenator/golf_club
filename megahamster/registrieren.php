<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrieren</title>
    <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link rel="icon" href="../Golf_Club_Arnold_Palmer/images/favicon.png"/>
    <link href="../Golf_Club_Arnold_Palmer/css/style.css" rel="stylesheet">
    <link href="../Golf_Club_Arnold_Palmer/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="content">
<?php

require_once "./doctrine/orm/bootstrap.php";
if (isset($_SESSION['user'])) {
    ?>
    <div class="angemeldet">
        <h5 style="text-align: right">Angemeldet als: <u><?php echo $_SESSION['user'] ?></u></h5>
    </div>
    <script>
        alert("you are already logged in as: <?php echo $_SESSION['user'] ?> ");
    </script>
    <meta http-equiv="refresh" content="0;url=http://chrisvenator.hd/Golf_Club_Arnold_Palmer/Remember/index.html"/>
    <?php
}
if (isset($_POST['Submit'])) {

    $uName = $_POST['uname'];
    $vName = $_POST['VName'];
    $nName = $_POST['NName'];
    $addresse = $_POST['Addresse'];
    $gebDate = $_POST['GebDate'];
    $pw = $_POST['password'];

    $user = new User();
    $user->setUserName($uName);
    $user->setVorName($vName);
    $user->setNachName($nName);
    $user->setAddresse($addresse);
    $user->setGeburtsdatum($gebDate);
    $user->setPassword($pw);

    $entityManager->persist($user);
    $entityManager->flush();
    echo "User eingetragen";

    $_SESSION['user'] = $uName;
    ?>
    <meta http-equiv="refresh" content="0;url=http://chrisvenator.hd/Golf_Club_Arnold_Palmer/Remember/index.html"/><?php
}
?>

<header>
    <div class="logo text-center">
        <!--        <h2>Login</h2>-->
    </div>
</header>
<div class="container">
    <div class="row">
        <div class="col-md-offset-4 col-md-4 col-sm-offset-3 col-sm-6 col-xs-offset-3 col-xs-6 width-100">
            <form action="#" method="post">
                <div class="loginpage">
                    <input class="form-control placeholder-fix" type="text" placeholder="Username" name="uname"
                           required="">
                    <input class="form-control placeholder-fix" type="text" placeholder="Vorname" name="VName"
                           required="">
                    <input class="form-control placeholder-fix" type="text" placeholder="Nachname" name="NName"
                           required="">
                    <input class="form-control placeholder-fix" type="text" placeholder="Addresse" name="Addresse"
                           required="">
                    <input class="form-control placeholder-fix" type="text" placeholder="Geburtsdatum" name="GebDate"
                           required="">
                    <input class="form-control placeholder-fix" type="password" placeholder="Password" name="password"
                           required="">
                </div>
                <div class="action-button">
                    <button class="btn-block" type="submit" name="Submit">Registrieren</button>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        <ul class="page-links">
            <!--            <li><a href="#">Forgot Password?</a></li>-->
            <li><a href="./einloggen.php">Login</a></li>
        </ul>
        <div class="social-button">
            <a href="https://en-gb.facebook.com/login/"><img src="../Golf_Club_Arnold_Palmer/images/facebook.png"
                                                             alt="fb">Facebook</a>
            <a href="https://accounts.google.com/signin/v2/identifier?passive=1209600&continue=https%3A%2F%2Faboutme.google.com%2Fu%2F0%2F%3Freferer%3Dgplus&followup=https%3A%2F%2Faboutme.google.com%2Fu%2F0%2F%3Freferer%3Dgplus&flowName=GlifWebSignIn&flowEntry=ServiceLogin"><img
                        src="../Golf_Club_Arnold_Palmer/images/google.png" alt="google">Google</a>
        </div>
        <div class="copyright-box">
            <div class="copyright">
                &copy; 2020 All right reserved. Designed by <strong>Christopher Scherling.</strong></a>
            </div>
        </div>
    </div>
</div>
</body>
</html>