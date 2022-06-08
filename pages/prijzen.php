<!DOCTYPE html>
<html class="main-kleur" lang="nl">
<head>
    <meta charset="UTF-8">
    <title>kleuren</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
<h1>Kleur</h1>
<nav>
    <a href="../Index/Index.php">Home</a>
    <a href="spel-home2.php">Spel</a>
    <a href="prijzen.php">Kleuren</a>
    <a href="../inlog/login.php">Profiel</a>
    <a href="contact.php">Contact</a>
    <div class="animation start-blog"></div>
</nav>
<br>
<form>
    <fieldset>
        <legend>Kleuren voor 1v1</legend>
        <div class="grid-container">
            <div class="grid-item"><p class="groen"></p><p>groen</p>
                <input onclick="groen()" type="button" class="button" name="prijs" value="klik"></div>
            <div class="grid-item"><p class="rood"></p><p>rood</p>
                <input onclick="rood()" type="button" class="button" name="prijs" value="klik"></div>
            <div class="grid-item"><p class="geel"></p><p>geel</p>
                <input onclick="geel()" type="button" class="button" name="prijs" value="klik"></div>
            <div class="grid-item"><p class="roze"></p><p>roze</p>
                <input onclick="roze()" type="button" class="button" name="prijs" value="klik"></div>
            <div class="grid-item"><p class="paars"></p><p>paars</p>
                <input onclick="paars()" type="button" class="button" name="prijs" value="klik"></div>
            <div class="grid-item"><p class="wit"></p><p>wit</p>
                <input onclick="wit()" type="button" class="button" name="prijs" value="klik"></div>
            <div class="grid-item"><p class="brons"></p><p>brons</p>
                <input onclick="brons()" type="button" class="button" name="prijs" value="klik"></div>
            <div class="grid-item"><p class="zilver"></p><p>zilver</p>
                <input onclick="zilver()" type="button" class="button" name="prijs" value="klik"></div>
            <div class="grid-item"><p class="goud"></p><p>goud</p>
                <input onclick="goud()" type="button" class="button" name="prijs" value="klik"></div>
        </div>
    </fieldset>
</form>
<br><br>
<form>
    <fieldset>
        <legend>Figuurtjes voor 1vAI</legend>
        <div class="grid-container">
            <div class="grid-item"><p class="figuur-size">☼☽</p><br><p class="figuur">Ruimte</p>
                <input onclick="maan()" type="button" class="button" name="prijs" value="klik"></div>
            <div class="grid-item"><p class="figuur-size">♛♚</p><br><p class="figuur">Koninklijk</p>
                <input onclick="koninklijk()" type="button" class="button" name="prijs" value="klik"></div>
            <div class="grid-item"><p class="figuur-size">♥♠</p><br><p class="figuur">Kaarten</p>
                <input onclick="kaarten()" type="button" class="button" name="prijs" value="klik"></div>
            <div class="grid-item"><p class="figuur-size">😇😈</p><br><p class="figuur">Emoji's</p>
                <input onclick="emoji()" type="button" class="button" name="prijs" value="klik"></div>
            <div class="grid-item"><p class="figuur-size">⚽🏀</p><br><p class="figuur">Sport</p>
                <input onclick="sport()" type="button" class="button" name="prijs" value="klik"></div>
            <div class="grid-item"><p class="figuur-size">⌨🎮</p><br><p class="figuur">Game</p>
                <input onclick="game()" type="button" class="button" name="prijs" value="klik"></div>
            <div class="grid-item"><p class="figuur-size">🔥🌊</p><br><p class="figuur">Elementen</p>
                <input onclick="element_()" type="button" class="button" name="prijs" value="klik"></div>
            <div class="grid-item"><p class="figuur-size">🎃🎅</p><br><p class="figuur">Feestdagen</p>
                <input onclick="feest()" type="button" class="button" name="prijs" value="klik"></div>
            <div class="grid-item"><p class="figuur-size">♂♀</p><br><p class="figuur">Gender</p>
                <input onclick="gender()" type="button" class="button" name="prijs" value="klik"></div>
        </div>
    </fieldset>
</form>
<br><br><br>
<footer>
<!--    <audio autoplay loop id="audio">-->
<!--        <source src="../Chill-Lo-fi-Hip-Hop-Beats-FREELofi-Hip-Hop-Chillhop-Music-MixGEMN.ogg" type="audio/ogg">-->
<!--        <source src="../Chill%20Lo-fi%20Hip-Hop%20Beats%20FREELofi%20Hip%20Hop%20Chillhop%20Music%20MixGEMN.mp3"-->
<!--                type="audio/mpeg">-->
<!--        Your browser does not support the audio element.-->
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
    function groen(){
        document.location.href = "bke_spel_groen.php";
    }
    function rood(){
        document.location.href = "bke_spel_rood.php";
    }
    function geel(){
        document.location.href = "bke_spel_geel.php";
    }
    function roze(){
        document.location.href = "bke_spel_roze.php";
    }
    function paars(){
        document.location.href = "bke_spel_paars.php";
    }
    function wit(){
        document.location.href = "bke_spel_wit.php";
    }
    function brons(){
        document.location.href = "bke_spel_brons.php";
    }
    function zilver(){
        document.location.href = "bke_spel_zilver.php";
    }
    function goud(){
        document.location.href = "bke_spel_goud.php";
    }
    function maan(){
        document.location.href = "bke_ai_maan.php";
    }
    function koninklijk(){
        document.location.href = "bke_ai_koninklijk.php";
    }
    function kaarten(){
        document.location.href = "bke_ai_kaarten.php";
    }
    function emoji(){
        document.location.href = "bke_ai_emoji.php";
    }
    function sport(){
        document.location.href = "bke_ai_sport.php";
    }
    function game(){
        document.location.href = "bke_ai_game.php";
    }
    function element_(){
        document.location.href = "bke_ai_element.php";
    }
    function feest(){
        document.location.href = "bke_ai_feest.php";
    }
    function gender(){
        document.location.href = "bke_ai_gender.php";
    }
</script>
</footer>
</body>
</html>

