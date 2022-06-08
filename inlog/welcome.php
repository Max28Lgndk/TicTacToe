<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html class="welcome-main" lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="../css/styles.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:200" rel="stylesheet">

</head>
<body>
<div class="page-header">
    <h1>Welkom, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>.</h1>
</div>
<nav>
<a href="../Index/Index.php">Home</a>
    <a href="../pages/spel-home2.php">Spel</a>
    <a href="../pages/contact.php">contact</a>
    <a href="reset-wachtwoord.php">gegevens</a>
    <a href="logout.php">logout</a>
    <div class="animation start-profiel"></div>
</nav>
<br><br><br><br><br>
<div onclick="message()" class="gradient-border" id="box"><p class="message"><br> Klik hier <br> voor een verrassing</p></div>
<!--<div class="welcome_gif">
<img src="../images/welcome.gif" alt="" onclick="message()">
</div>
<br><br>
<hr>
<p class="text_gif"> KLIK OP DE GIF</p>
<br><br><br><br><br><br><br><br><br><br>-->
<br><br>
<hr>
<br><br><br><br><br><br><br><br><br>
<!--<footer>-->
<!-- audio met $session maken-->
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
        function message(){
            alert("Hallo, <?php echo htmlspecialchars($_SESSION["username"]); ?>. \n Welkom op onze spelletjes website" +
            " op deze pagina kunt u uw wachtwoord wijzigen en uitloggen wanneer u wilt.")
        }
    </script>
</body>
</html>