<!DOCTYPE html>
<html>
<head>
    <Title>Anmeldung</Title>
    <!--    <meta http-equiv="refresh" content="0;url=http://chrisvenator.hd/Uebung/viedoverleih/main.php"/>-->
    <style>
        body {
            background-color: #000000;
            background-image: url("/wallpaper3.png");
            background-repeat: no-repeat;
            background-size: 100%;
            color: #FFFFFF;
            text-shadow: 0px 0px 10px black;
            text-align: center;
            font-size: 20px;
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

        /*a:link, a:visited {*/
        /*background-color: grey;*/
        /*color: white;*/
        /*padding: 14px 25px;*/
        /*text-align: center;*/
        /*text-decoration: none;*/
        /*display: inline-block;*/
        /*}*/

        /*a:hover, a:active {*/
        /*background-color: grey;*/
        /*}*/

    </style>
</head>
<body>
<!--// Hier kein --><?php //nötig/erlaubt

$hallo = "Hallo";
$welt = 'Welt';

$kurzerGruss = "Kurze Begrüßung: $hallo $welt!\n";

// Heredoc: Variable werden interpoliert
$langerGruss = <<<ENDE

Sehr geehrte $welt!
Wir begrüßen Dich mit den Worten:
$hallo {$welt}xyz!

ENDE;

// Nowdoc: Variable werden nicht interpoliert
$misslungenerGruss = <<<'FINITO'

Sehr geehrte $welt!
Wir begrüßen Dich mit den Worten:
$hallo {$welt}!

FINITO;

echo $kurzerGruss;
echo $langerGruss;
echo $misslungenerGruss;
?>

<!--ARRAYS-->

<!--// Hier kein --><?php //nötig/erlaubt

// Als Array erzeugen
$a = [1, 'zwei', TRUE, 42.0];
var_dump($a);

// Als assoziatives Array (Map) erzeugen
$b = ['erstes' => 1, 2 => 'zwei', 3 => TRUE, 'antwort' => 42.0];
var_dump($b);

// Schlüssel: was nicht passt, wird passend gemacht
$c = [3.14 => 1, NULL => 'zwei', TRUE => TRUE, FALSE => 42.0];
var_dump($c);
?>
<!--// Hier kein --><?php //nötig/erlaubt

// Defaultwert von Variablen hängt vom Verwendungskontext ab
var_dump($a);
var_dump((int)$a);
var_dump((float)$a);
var_dump((string)$a);
var_dump((bool)$a);
var_dump((array)$a);
?>
<!--// Hier kein --><?php //nötig / erlaubt

// Blöcke begrenzen den Geltungsbereich nicht
if (TRUE) {
    $x = 'Nicht nur im Block sichtbar';
}

var_dump($x);

// Keine impliziten Closures
function aussen()
{
    $a = 'In innen() nicht sichtbar';

    function innen()
    {
//    var_dump($a);
    }

    innen();
}

aussen();
?>
<!--// Hier kein --><?php //nötig / erlaubt

// Mit einer Variablen arbeiten, deren Namen man erst zur Laufzeit kennt
$a = 42;
$x = 'a';
var_dump($x, $$x);

$$x = 77;
var_dump($x, $$x);

// "Normaler" Funktionsaufruf
function hallo()
{
    echo "Hallo Welt!\n";
}

hallo();

// Eine Funktion aufrufen, deren Namen man erst zur Laufzeit kennt
$h = 'hallo';
$h();
?>
<!--// Hier kein --><?php //nötig / erlaubt

// $b verweist auf *denselben* Wert wie $a
$a = 42;
$b = &$a;
var_dump($a, $b);

$b = 13;
var_dump($a, $b);

$a = 77;
var_dump($a, $b);
?>


</body>
</html>