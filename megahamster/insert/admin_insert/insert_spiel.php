<!DOCTYPE html>
<html lang="en">
<head>
    <title>Create Game</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!--    <link rel="stylesheet" type="text/css" href="css/autocomplete.css">-->
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <!--===============================================================================================-->
</head>
<body style="background-color: #999999;">
<?php require_once "../../doctrine/orm/bootstrap.php";
session_start(); ?>
<div id="result"></div>
<div class="limiter">
    <div class="container-login100">
        <div class="login100-more" style="background-image: url('images/bg-01.jpg');"></div>

        <div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">
            <!--Make sure the form has the autocomplete function switched off:-->
            <form class="login100-form validate-form" autocomplete="off" method="post">
					<span class="login100-form-title p-b-59">
						Create Golffeld
					</span>

                <div class="wrap-input100" data-validate="Name is required">
                    <span class="label-input100">Golfplatz</span>
                    <div class="autocomplete" style="width:300px;">
                        <input class="input100" id="golfplatz_input" name="platz" type="text" placeholder="Name">
                    </div>
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100" data-validate="Name is required">
                    <span class="label-input100">Golffeld</span>
                    <div class="autocomplete" style="width:300px;">
                        <input class="input100" id="golffeld_input" name="feld" type="text" placeholder="Name">
                    </div>
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Name is required">
                    <span class="label-input100">Hits</span>
                    <input class="input100" id="hits" type="text" name="score" placeholder="PAR-Score...">
                    <span class="focus-input100"></span>
                </div>

                <div class="container-login100-form-btn">
                    <div class="wrap-login100-form-btn">
                        <div class="login100-form-bgbtn"></div>
                        <button class="login100-form-btn" type="button" name="Submit" id="submit" onclick="post()">
                            Create
                        </button>
                    </div>

                    <a href="./insert_golfplatz.php" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
                        create score
                        <i class="fa fa-long-arrow-right m-l-5"></i>
                    </a>
                </div>
            </form>
        </div>
    </div>


    <script>
        function printerg(inp) {
            console.log(inp);
        }

        var tmp = "";

        function storeerg(inp) {
            tmp = inp;
        }


        function post() {
            var platz = $('#golfplatz_input').val();
            var feld = $('#golffeld_input').val();
            var score = $('#hits').val();
            var user = "<?php echo $_SESSION['user'] ?>";

            // console.log(platz);
            // console.log(feld);
            // console.log(score);

            $.post('create_spiel.php', {
                postplatz: platz, postfeld: feld, postscore: score, postUser: user
            }, function (data) {
                $('#result').html(data);
            });

            location.reload();
        }
    </script>

    <!--===============================================================================================-->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/daterangepicker/moment.min.js"></script>
    <script src="vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="js/main.js"></script>

    <script src="js/autocomplete.js"></script>


    <script>
        // var countries = ["Afghanistan", "Albania", "Algeria", "Andorra", "Angola", "Anguilla", "Antigua &amp; Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia &amp; Herzegovina", "Botswana", "Brazil", "British Virgin Islands", "Brunei", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central Arfrican Republic", "Chad", "Chile", "China", "Colombia", "Congo", "Cook Islands", "Costa Rica", "Cote D Ivoire", "Croatia", "Cuba", "Curacao", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands", "Faroe Islands", "Fiji", "Finland", "France", "French Polynesia", "French West Indies", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guam", "Guatemala", "Guernsey", "Guinea", "Guinea Bissau", "Guyana", "Haiti", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran", "Iraq", "Ireland", "Isle of Man", "Israel", "Italy", "Jamaica", "Japan", "Jersey", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Kosovo", "Kuwait", "Kyrgyzstan", "Laos", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Mauritania", "Mauritius", "Mexico", "Micronesia", "Moldova", "Monaco", "Mongolia", "Montenegro", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauro", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "North Korea", "Norway", "Oman", "Pakistan", "Palau", "Palestine", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russia", "Rwanda", "Saint Pierre &amp; Miquelon", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Serbia", "Seychelles", "Sierra Leone", "Singapore", "Slovakia", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Korea", "South Sudan", "Spain", "Sri Lanka", "St Kitts &amp; Nevis", "St Lucia", "St Vincent", "Sudan", "Suriname", "Swaziland", "Sweden", "Switzerland", "Syria", "Taiwan", "Tajikistan", "Tanzania", "Thailand", "Timor L'Este", "Togo", "Tonga", "Trinidad &amp; Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks &amp; Caicos", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States of America", "Uruguay", "Uzbekistan", "Vanuatu", "Vatican City", "Venezuela", "Vietnam", "Virgin Islands (US)", "Yemen", "Zambia", "Zimbabwe"];
        <?php
        //Golfpaltz
        $dql = "SELECT g FROM golfplatz g";

        $query = $entityManager->createQuery($dql);
        $query->setMaxResults(30);
        $golfplatze = $query->getResult();
        $erg_platz = array();

        foreach ($golfplatze as $golfplatz) {
            if ($golfplatz->getName() == " Wien") {
                $name = "Wien";
            } else {
                $name = $golfplatz->getName();
            }
            array_push($erg_platz, $name);
        }
        echo "console.log(" . json_encode($erg_platz) . ");";
        //Golffeld
        $dql = "SELECT g FROM golffeld g";

        $query = $entityManager->createQuery($dql);
        $query->setMaxResults(30);
        $felder = $query->getResult();
        $erg_felder = array();

        foreach ($felder as $feld) {
            $name = $feld->getName();
            array_push($erg_felder, $name);
        }
        echo "console.log(" . json_encode($erg_felder) . ");"

        //        // test
        //        $dql = "SELECT f,p FROM golfplatz p INNER JOIN golffeld f ON f.id = p.fkGolfpltzId";
        //
        //        $query = $entityManager->createQuery($dql);
        //        $query->setMaxResults(30);
        //        $stats = $query->getResult();
        //        $erg_feld = array();
        //
        //        /* @var golfplatz $stat */
        //        /* @var golffeld $stat */
        //        foreach ($stats as $stat) {
        //            $name = $stat->getFkGolfpltzId();
        //            array_push($erg_feld, $name);
        //        }
        //
        //
        //        ?>
        var plaetze = <?php echo json_encode($erg_platz)?>;
        var felder = <?php echo json_encode($erg_felder)?>;
        //console.log(plaetze);
        // console.log(felder);
        autocomplete(document.getElementById("golfplatz_input"), plaetze);
        autocomplete(document.getElementById("golffeld_input"), felder);
    </script>
</body>
</html>