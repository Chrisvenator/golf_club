<?php
namespace venator\Megahamster\Living;

use venator\Megahamster\Living as Living;


require("class/Flat.php");
require("class/Pit.php");
require("class/Room.php");

include 'vendor/autoload.php';


$view = new \TYPO3Fluid\Fluid\View\TemplateView();
$paths = $view->getTemplatePaths();
$paths->setTemplatePathAndFilename('./index2.html');

if (isset($_GET['format']) && $_GET['format'] == "json") {
    //http://chrisvenator.hd/megahamster/index.php?format=json

    $arr['The Pit'] = new Living\Pit("Pit", 69, 20, ["Boxer-Handschuhe"]);
    $arr['The Living Room'] = new Living\Room("Room", 49, 400, ["Baum", "Schuessel"]);
    $arr['The Flat'] = new Living\Flat("Flat", 149, 9600, ["Schuesseln", "Glas"]);

    header("content-type:application/json");
    echo json_encode($arr);
} else {
    /*
    ?>

        <!DOCTYPE html>
    <html lang="en">
    <head>
        <style type="text/css" id="block_eduvidual_style_org">span.logo img {
            }

        </style>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <meta charset="UTF-8">
        <title>Alle Megahamster Räume</title>
        <style>
            table, th, td {
                border: 1px solid black;
                border-collapse: collapse;
            }

            th, td {
                padding: 5px;
                text-align: left;
            }
        </style>
        <link rel="stylesheet" href="https://www.eduvidual.org/blocks/eduvidual/style/theme_boost.css">
    </head>
    <body class="theme-boost_campus">
    <?php
    */
    $pit = new Living\Pit("Pit", 69, 20, ["Boxer-Handschuhe"]);
    $room = new Living\Room("Room", 49, 400, ["Baum", "Schuessel"]);
    $flat = new Living\Flat("Flat", 149, 9600, ["Schuesseln", "Glas"]);

    $arr = [$pit, $room, $flat];

    $values ['room'] [] = new Living\Pit("Pit", 69, 20, ["Boxer-Handschuhe"]);
    $values ['room'] [] = new Living\Room("Room", 49, 400, ["Baum", "Schuessel"]);
    $values ['room'] [] = new Living\Flat("Flat", 149, 9600, ["Schuesseln", "Glas"]);

//    $values['user'][] = new teacher("WSF", "Coden");
//    $values['user'][] = new teacher("STF", "tanzen");
//    $values['user'][] = new teacher("KSP", "coden");
    $view->assignMultiple($values);

    echo $view->render();

//    toHTML($arr);
    /*
        echo "<table>
    <tr>
    <th>Name</th>
    <th>Preis</th>
    <th>Grundfläche</th>
    <th>Seitenlänge</th>
    <th>Zusatztaussctattung</th>
    </tr>";
        foreach ($arr as $tmp) {
            echo "<tr>
    <td>" . $tmp->getBezeichnung() . "</td>
    <td>" . $tmp->getPreis() . "€ </td>
    <td>" . round($tmp->berechneFlaeche(80, 50, 50)) . " cm²</td>
    <td>" . $tmp->getSeitenlaengen() . "</td>
    <td>" . $tmp->getZusatzausstattung() . "</td>
    </tr>";
        }
        echo "</table>";*/
}

function toHTML(array $arr) {
//echo "<table>
//<tr>
//<th>Name</th>
//<th>Preis</th>
//<th>Grundfläche</th>
//<th>Seitenlänge</th>
//<th>Zusatztaussctattung</th>
//</tr>" .
//    "<tr>
//<td>" . $room->getBezeichnung() . "</td>
//<td>" . $room->getPreis() . " </td>
//<td>" . $room->berechneFlaeche(80, 50, 50) . "</td>
//<td>" . $room->getSeitenlaengen() . "</td>
//<td>" . $room->getZusatzausstattung() . "</td>
//</tr>" .
//    "<tr>
//<td>" . $flat->getBezeichnung() . "</td>
//<td>" . $flat->getPreis() . " </td>
//<td>" . $flat->berechneFlaeche(120, 80, 80) . "</td>
//<td>" . $flat->getSeitenlaengen() . "</td>
//<td>" . $flat->getZusatzausstattung() . "</td>
//</tr>" .
//    "<tr>
//<td>" . $pit->getBezeichnung() . "</td>
//<td>" . $pit->getPreis() . " </td>
//<td>" . $pit->berechneFlaeche(20) . "</td>
//<td>" . $pit->getSeitenlaengen() . "</td>
//<td>" . $pit->getZusatzausstattung() . "</td>
//</tr>
//</table>";?>
    <!--    </body>-->
    <!--    </html>--><?php
}

?>
