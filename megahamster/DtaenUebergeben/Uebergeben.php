<?php
//URL öffnen:
//http://chrisvenator.hd/megahamster/DtaenUebergeben/Uebergeben.php2
//http://chrisvenator.hd/megahamster/DtaenUebergeben/Uebergeben.php?format=json

namespace HTL3R\JSONDemo;

require_once "src/Wetterinfo.php";

$wetter[] = new Wetterinfo(5, "bewölkt", "Wien");
$wetter[] = new Wetterinfo(4, "regnerisch", "Graz");
$wetter[] = new Wetterinfo(30, "sonnig", "Ibiza Stadt");


if (isset($_GET['format']) && $_GET['format'] == "json") {
//    $JSONOutput = <<<JSONOUTPUT
//{
//    "Grad" : 7,
//    "witterung" : "Regen",
//    "schoeneswetter" : true,
//    "einarray" : [
//        "blah","zonk","narf"
//    ],
//    "leitung":null,
//    "unterobjekt": {
//        "some" : 1,
//        "property" : 2
//    }
//}
//JSONOUTPUT;

    header("content-type:application/json");
//    echo $JSONOutput;
} else {
    echo "hello World";
}


?>

