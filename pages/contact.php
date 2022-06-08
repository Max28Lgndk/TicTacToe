<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>contact</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body class="contact">
<h1>Contact</h1>
<nav>
    <a href="../Index/Index.php">Home</a>
    <a href="spel-home2.php">Spel</a>
    <a href="prijzen.php">Kleuren</a>
    <a href="../inlog/login.php">Profiel</a>
    <a href="contact.php">Contact</a>
    <div class="animation start-contact"></div>
</nav>

<main
    <br><br><br><br><br><br>
<div class="wrapper">
    <div class="contact_form">
        <div class="input_fields">
            <form>
                <label>
                    <input type="text" class="input" placeholder="Voornaam">
                </label>
                <label>
                    <input type="text" class="input" placeholder="Achternaam">
                </label>
                <label>
                    <input type="text" class="input" placeholder="Email">
                </label>
                <label>
                    <input type="number" class="input" placeholder="Telefoonnummer">
                </label>
        </div>
        <div class="bericht">
            <label>
                <textarea placeholder="Zet hier uw vraag of aanmerking"></textarea>
            </label>
            <a href="contact.php" class="contact_button">Send</a>
            <a href="contact.php" class="contact_button">reset</a>
        </div>
    </div>
</div>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</body>
<footer>
<!--    <audio autoplay loop id="audio">-->
<!--        <source src="../Chill-Lo-fi-Hip-Hop-Beats-FREELofi-Hip-Hop-Chillhop-Music-MixGEMN.ogg" type="audio/ogg">-->
<!--        <source src="../Chill%20Lo-fi%20Hip-Hop%20Beats%20FREELofi%20Hip%20Hop%20Chillhop%20Music%20MixGEMN.mp3" type="audio/mpeg">-->
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

    </script>
</footer>
</html>