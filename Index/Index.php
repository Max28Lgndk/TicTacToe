<!DOCTYPE html>
<html lang="en">
<head>
    <title>Index</title>
    <link href="../css/styles.css" rel="stylesheet"/>
    <script src="../js/javascript.js"> </script>
    <div class="background"></div>
</head>
<body class="home">
<h1>Spelletjes</h1>
<!--nav bar-->
<nav>
    <a href="Index.php">Home</a>
    <a href="../pages/spel-home2.php">Spel</a>
    <a href="../pages/prijzen.php">Kleuren</a>
    <a href="../inlog/login.php">Profiel</a>
    <a href="../pages/contact.php">Contact</a>
    <div class="animation start-home"></div>
</nav>

<main>
    <div class="front-text"><h2>Welkom op onze website!</h2></div>
    <p class="plezier">Veel game plezier!</p>
    <img class="gif" src="../images/nyan-cat-trans.gif" alt="nyan">

</main>
<br><br><br><br>
</body>
<footer>
    <!--audio met $session maken-->
    <audio autoplay loop id="audio">
        <source src="../Chill-Lo-fi-Hip-Hop-Beats-FREELofi-Hip-Hop-Chillhop-Music-MixGEMN.ogg" type="audio/ogg">
        <source src="../Chill%20Lo-fi%20Hip-Hop%20Beats%20FREELofi%20Hip%20Hop%20Chillhop%20Music%20MixGEMN.mp3" type="audio/mpeg">
    </audio>
    <button class="button" onclick="enableMute()" type="button">Unmute</button>
    <button class="button" onclick="disableMute()" type="button">Mute</button>
</footer>
<script>
    var audio = document.getElementById("audio");

    function disableMute() {
        audio.muted = true;
    }

    function enableMute() {
        audio.muted = false;
    }
</script>
</html>


