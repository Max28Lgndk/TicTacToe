<!doctype html>
<html lang="en">
<head>
    <meta name="viewport" content=
    "width=device-width, initial-scale=1.0">
    <link rel="stylesheet"
          type="text/css" href="../css/styles.css">
    <script src="../js/javascript_roze.js"></script>
    <title>Boter,Kaas en Eieren</title>
</head>

<body>
<div class="instructions">
    <!-- Game Instructions -->
    <p>Eerste speler start met
        <b>Player X</b><br>En<br>Tweede speler start als<b>Player 0</b>
    </p>
</div>
<br><br>
<!-- 3*3 grid of Boxes -->
<label for="b1"></label><input type="text" id="roze1" onclick=
"myfunc_3(); myfunc();" readonly>

<label for="b2"></label><input type="text" id="roze2" onclick=
"myfunc_4(); myfunc();" readonly>

<label for="b3"></label><input type="text" id="roze3" onclick=
"myfunc_5(); myfunc();" readonly>
<br><br>

<label for="b4"></label><input type="text" id="roze4" onclick=
"myfunc_6(); myfunc();" readonly>

<label for="b5"></label><input type="text" id="roze5" onclick=
"myfunc_7(); myfunc();" readonly>

<label for="b6"></label><input type="text" id="roze6" onclick=
"myfunc_8(); myfunc();" readonly>
<br><br>

<label for="b7"></label><input type="text" id="roze7" onclick=
"myfunc_9(); myfunc();" readonly>

<label for="b8"></label><input type="text" id="roze8" onclick=
"myfunc_10();myfunc();" readonly>

<label for="b9"></label><input type="text" id="roze9" onclick=
"myfunc_11();myfunc();" readonly>

<br><br>
<!-- Space to show player turn -->
<p class="print" id="print"></p>
<br>
<!-- knoppen -->
<div class="posButtons">
    <button class="button" onclick="myfunc_2()">Reset</button>
    <button class="button" onclick="terugNaarMenu()">terug naar menu</button>
    <button class="contact_button" id="myBtn">Spelregels</button>
    <div id="myModal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <span class="close">&times;</span>
                <h2>Spelregels</h2>
                <br>
            </div>
            <div class="modal-body">
                <p> Boter-kaas-en-eieren wordt gespeeld op 3 bij 3 velden.
                    Bij het begin zijn alle velden leeg.
                    De ene speler zet een 'kruis' en de andere speler een 'rondje'.</p>
                <br>
                <p>Degene die drie van zijn eigen tekens op een rij heeft,
                    dat mag diagonaal,
                    verticaal of horizontaal zijn,
                    heeft gewonnen.</p>
            </div>
        </div>
    </div>
</div>
<br><br><br><br><br><br>
</body>
<footer>
    <audio autoplay loop id="audio">
        <source src="../Chill-Lo-fi-Hip-Hop-Beats-FREELofi-Hip-Hop-Chillhop-Music-MixGEMN.ogg" type="audio/ogg">
        <source src="../Chill%20Lo-fi%20Hip-Hop%20Beats%20FREELofi%20Hip%20Hop%20Chillhop%20Music%20MixGEMN.mp3"
                type="audio/mpeg">
        Your browser does not support the audio element.
    </audio>
    <button class="button" onclick="enableMute()" type="button">Unmute</button>
    <button class="button" onclick="disableMute()" type="button">Mute</button>
    <script>
        var audio = document.getElementById("audio");

        function disableMute() {
            audio.muted = true;
        }

        function enableMute() {
            audio.muted = false;
        }

        // Get the modal
        var modal = document.getElementById("myModal");

        // Get the button that opens the modal
        var btn = document.getElementById("myBtn");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks the button, open the modal
        btn.onclick = function () {
            modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function () {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function (event) {
            if (event.target === modal) {
                modal.style.display = "none";
            }
        }
        function terugNaarMenu() {
            document.location.href = "prijzen.php";
        }
    </script>
</footer>

</html>
