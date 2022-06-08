<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>playerVSai</title>
    <link href="../css/styles.css" rel="stylesheet">
</head>
<body class="aiSpel">
<div class="title">1 vs AI</div>
<button class="butmaan"></button>
<button class="butmaan"></button>
<button class="butmaan"></button>
<button class="butmaan"></button>
<button class="butmaan"></button>
<button class="butmaan"></button>
<button class="butmaan"></button>
<button class="butmaan"></button>
<button class="butmaan"></button>
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
            <p>   Speel Classic Boter, Kaas en Eieren 1 v 1 maar dan tegen de computer
                <br>Degene die drie van zijn eigen tekens op een rij heeft,
                dat mag diagonaal,
                verticaal of horizontaal zijn,
                heeft gewonnen.</p>
        </div>
    </div>
</div>

<footer class="posMute">
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
        btn.onclick = function() {
            modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target === modal) {
                modal.style.display = "none";
            }
        }
        function myfunc_2() {
            location.reload();
            document.getElementById('t1').value = '';
            document.getElementById("t2").value = '';
            document.getElementById("t3").value = '';
            document.getElementById("t4").value = '';
            document.getElementById("t5").value = '';
            document.getElementById("t6").value = '';
            document.getElementById("t7").value = '';
            document.getElementById("t8").value = '';
            document.getElementById("t9").value = '';
        }
        class Tic {
            constructor() {
                this.storage   = [];
                this.pattern   = [];
                this.button    = document.querySelectorAll('.butmaan');
                this.play      = 1;
                this.winPlay   = null;
            }

            buildPattern() {
                this.pattern.push(
                    [0, 1, 2],
                    [3, 4, 5],
                    [6, 7, 8],
                    [0, 3, 6],
                    [1, 4, 7],
                    [2, 5, 8],
                    [0, 4, 8],
                    [2, 4, 6]
                );
            }

            buildStorage() {
                this.storage = [0, 0, 0, 0, 0, 0, 0, 0, 0];
            }

            getWin(getPlay, getPattern) {
                var count = 0;

                for (var i in getPattern) {
                    if (this.storage[getPattern[i]] === getPlay) {
                        count++;
                    }
                }

                if (count === 3) {
                    this.winPlay = getPlay;
                }
            }

            confirmPattern(getPlay, aiValidate) {
                var returnValue = false;

                for (var i in this.pattern) {
                    var matchCount = 0;

                    for (var j in this.pattern[i]) {
                        var matchIndex = this.pattern[i][j];

                        if (this.storage[matchIndex] === getPlay) {
                            matchCount++;
                        }
                        else if (this.storage[matchIndex] > 0) {
                            matchCount--;
                        }
                    }

                    if (matchCount > 1 && aiValidate) {
                        returnValue = this.pattern[i];

                        break;
                    }
                    else if (matchCount > 2 && !aiValidate) {
                        returnValue = this.pattern[i];

                        break;
                    }
                }

                return returnValue;
            }

            computerMove() {
                var patternResult = this.confirmPattern(1, true);

                if (!patternResult) {
                    var isNext = true;

                    while (isNext) {
                        var random = Math.floor(Math.random() * 9);

                        if (this.storage[random] === 0) {
                            this.storage[random] = this.play;

                            isNext = false;

                            this.buildTable();
                            this.play = 1;
                        }
                        else {
                            for (var i in this.storage) {
                                isNext = false;

                                if (this.storage[i] === 0) {
                                    isNext = true;

                                    break;
                                }
                            }
                        }
                    }
                }
                else {
                    for (var i in patternResult) {
                        if (this.storage[patternResult[i]] === 0) {
                            this.storage[patternResult[i]] = this.play;

                            this.buildTable();
                            this.play = 1;
                        }
                    }
                }
            }

            buildTable() {
                var tic          = this;
                var countStorage = 0;

                for (var i in this.storage) {
                    if (this.storage[i] == 0) {
                        countStorage++;
                    }
                }

                Array.prototype.forEach.call(this.button, function(btn, i) {
                    btn.classList.remove('blue');
                    btn.classList.remove('red');

                    switch(tic.storage[i]) {
                        case 1:
                            btn.classList.add('blue');

                            break;
                        case 2:
                            btn.classList.add('red');

                            break;
                    }
                });

                if (this.play === 0) {
                    this.play = 1;
                }
                else if (this.play === 1) {
                    this.play = 2;

                    tic.computerMove();
                }

                tic.getWin(1, tic.confirmPattern(1, false));
                tic.getWin(2, tic.confirmPattern(2, false));

                if (!!this.winPlay) {
                    if (confirm('PLAYER ' + this.winPlay + ' WINS! Play again?')) {
                        this.buildStorage();
                        this.reset();
                    }
                }
                else if (countStorage == 0) {
                    if (confirm('It\'s a draw! Do you like to try again?')) {
                        this.reset();
                    }
                }
            }

            main() {
                this.buildPattern();
                this.buildStorage();
            }

            reset() {
                this.play    = 0;
                this.winPlay = null;

                this.buildStorage();
                this.buildTable();
            }
        }

        var tic = new Tic();

        tic.main();

        Array.prototype.forEach.call(tic.button, function(btn, i) {
            btn.addEventListener('click', function() {
                if (tic.play === 1) {
                    if (tic.storage[i] === 0) {
                        tic.storage[i] = tic.play;

                        tic.buildTable();
                    }
                }
            });
        });

        document.querySelector('#reset').addEventListener('click', function() {
            if (confirm('Are you sure you want to reset the game?')) {
                tic.reset();
            }
        });
        function terugNaarMenu(){
            document.location.href="prijzen.php"
        }
    </script>
</footer>
</body>
</html>

