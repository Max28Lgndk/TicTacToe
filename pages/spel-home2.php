<!doctype html>
<html class="game-main" lang="en">
<head>
    <meta name="viewport" content=
    "width=device-width, initial-scale=1.0">
    <link rel="stylesheet"
          type="text/css" href="../css/styles.css">
    <script src="../js/javascript.js"></script>
    <title>Boter,Kaas en Eieren</title>
</head>
<!-- nav bar -->
<body>
<h1 class="game--title">Boter, Kaas & Eieren</h1>
<nav>
    <a href="../Index/Index.php">Home</a>
    <a href="spel-home2.php">Spel</a>
    <a href="prijzen.php">Kleuren</a>
    <a href="../inlog/login.php">Profiel</a>
    <a href="contact.php">Contact</a>
    <div class="animation start-spel"></div>
</nav>
<br>
<!--<table>-->
<!--    <tr>-->
<!--        <th class="table_header">1 v 1-->
<!--            <hr>-->
<!--        </th>-->
<!--        <th class="table_header">1 v 1 online-->
<!--            <hr>-->
<!--        </th>-->
<!--        <th class="table_header">1 v AI-->
<!--            <hr>-->
<!--        </th>-->
<!--    </tr>-->
<!--    <tr>-->
<!--        <td><br> Boter-kaas-en-eieren wordt gespeeld op 3 bij 3 velden.-->
<!--            <br>Bij het begin zijn alle velden leeg.-->
<!--            <br>-->
<!--            De ene speler zet een 'kruis' en de andere speler een 'rondje'.-->
<!--            <br>-->
<!--            Degene die drie van zijn eigen tekens op een rij heeft,-->
<!--            dat mag diagonaal,-->
<!--            verticaal of horizontaal zijn,-->
<!--            heeft gewonnen.-->
<!--            <br>< <button class="test" onclick="document.location='bke_spel.php'">Klik</button> -->
<!--        <td>Speel Classic Boter, Kaas en Eieren 1 v 1 maar dan tegen een vriend online-->
<!--            <br>-->
<!--            Degene die drie van zijn eigen tekens op een rij heeft,-->
<!--            dat mag diagonaal,-->
<!--            verticaal of horizontaal zijn,-->
<!--            heeft gewonnen.-->
<!--            <br></td>-->
<!--        <td> Speel Classic Boter, Kaas en Eieren 1 v 1 maar dan tegen de computer-->
<!--            <br>Degene die drie van zijn eigen tekens op een rij heeft,-->
<!--            dat mag diagonaal,-->
<!--            verticaal of horizontaal zijn,-->
<!--            heeft gewonnen.-->
<!--            <br></td>-->
<!--    </tr>-->
<!--    <div class="vertical_L1"></div>-->
<!--    <div class="vertical_L2"></div>-->
<!--</table>-->
<table>
<div class="game_menu">
    <div class="game_mode"><h1> 1v1 </h1><hr><br><p> Boter-kaas-en-eieren wordt gespeeld op 3 bij 3 velden.
                        <br>Bij het begin zijn alle velden leeg.
                        <br>
                        De ene speler zet een 'kruis' en de andere speler een 'rondje'.
                        <br>
                        Degene die drie van zijn eigen tekens op een rij heeft,
                        dat mag diagonaal,
                        verticaal of horizontaal zijn,
                        heeft gewonnen.</p></div>
                <div class="game_mode"><h1> 1vAI</h1><hr><br>
                        <p> Speel Classic Boter, Kaas en Eieren 1 v 1 maar dan tegen de computer
                        <br>Degene die drie van zijn eigen tekens op een rij heeft,
                            dat mag diagonaal,
                            verticaal of horizontaal zijn,
                            heeft gewonnen. </p></div>
                        <img class="img_1v1" src="../images/tictactoe.png" onclick="bke_spel_1v1()" alt="">
                        <!--<img class="img_1v1_online" src="../images/bke_online.jpg" onclick="bke_online_1v1()" alt="">-->
<img class="img_1v1_ai" src="../images/ai_img.jpg" onclick="bke_ai()" alt="">
</table>
<br><br><br><br><br><br>
<!--    <audio autoplay loop id="audio">-->
<!--        <source src="../Chill-Lo-fi-Hip-Hop-Beats-FREELofi-Hip-Hop-Chillhop-Music-MixGEMN.ogg" type="audio/ogg">-->
<!--        <source src="../Chill%20Lo-fi%20Hip-Hop%20Beats%20FREELofi%20Hip%20Hop%20Chillhop%20Music%20MixGEMN.mp3"-->
<!--                type="audio/mpeg">-->
<!--    </audio>-->
<!--    <button class="button" onclick="enableMute()" type="button">Unmute</button>-->
<!--    <button class="button" onclick="disableMute()" type="button">Mute</button>-->
    <script>
        var audio = document.getElementById("audio");

        function disableMute() {
            audio.muted = true;
        }

        function enableMute() {
            audio.muted = false;
        }

        function bke_spel_1v1() {
            document.location.href = "../pages/bke_spel.php";
        }

        function bke_online_1v1() {
            document.location.href = "../pages/bke_spel.php";
        }

        function bke_ai() {
            document.location.href = "../pages/bke_v_Ai.php";
        }
    </script>
</body>
</html>