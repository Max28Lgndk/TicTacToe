// Function called whenever user tab on any box
function myfunc() {

    // Setting DOM to all boxes or input field
    var b1 = document.getElementById("geel1").value;
    var b2 = document.getElementById("geel2").value;
    var b3 = document.getElementById("geel3").value;
    var b4 = document.getElementById("geel4").value;
    var b5 = document.getElementById("geel5").value;
    var b6 = document.getElementById("geel6").value;
    var b7 = document.getElementById("geel7").value;
    var b8 = document.getElementById("geel8").value;
    var b9 = document.getElementById("geel9").value;

    // Checking if Player X won or not and after
    // that disabled all the other fields
    if ((b1 == 'x' || b1 == 'X') && (b2 == 'x' ||
        b2 == 'X') && (b3 == 'x' || b3 == 'X')) {
        document.getElementById('print')
            .innerHTML = "Player X won";
        document.getElementById("geel4").disabled = true;
        document.getElementById("geel5").disabled = true;
        document.getElementById("geel6").disabled = true;
        document.getElementById("geel7").disabled = true;
        document.getElementById("geel8").disabled = true;
        document.getElementById("geel9").disabled = true;
        window.alert('Player X won');
    }
    else if ((b1 == 'x' || b1 == 'X') && (b4 == 'x' ||
        b4 == 'X') && (b7 == 'x' || b7 == 'X')) {
        document.getElementById('print')
            .innerHTML = "Player X won";
        document.getElementById("geel2").disabled = true;
        document.getElementById("geel3").disabled = true;
        document.getElementById("geel5").disabled = true;
        document.getElementById("geel6").disabled = true;
        document.getElementById("geel8").disabled = true;
        document.getElementById("geel9").disabled = true;

        window.alert('Player X won');
    }
    else if ((b7 == 'x' || b7 == 'X') && (b8 == 'x' ||
        b8 == 'X') && (b9 == 'x' || b9 == 'X')) {
        document.getElementById('print')
            .innerHTML = "Player X won";
        document.getElementById("geel1").disabled = true;
        document.getElementById("geel2").disabled = true;
        document.getElementById("geel3").disabled = true;
        document.getElementById("geel4").disabled = true;
        document.getElementById("geel5").disabled = true;
        document.getElementById("geel6").disabled = true;
        window.alert('Player X won');
    }
    else if ((b3 == 'x' || b3 == 'X') && (b6 == 'x' ||
        b6 == 'X') && (b9 == 'x' || b9 == 'X')) {
        document.getElementById('print')
            .innerHTML = "Player X won";
        document.getElementById("geel1").disabled = true;
        document.getElementById("geel2").disabled = true;
        document.getElementById("geel4").disabled = true;
        document.getElementById("geel5").disabled = true;
        document.getElementById("geel7").disabled = true;
        document.getElementById("geel8").disabled = true;
        window.alert('Player X won');
    }
    else if ((b1 == 'x' || b1 == 'X') && (b5 == 'x' ||
        b5 == 'X') && (b9 == 'x' || b9 == 'X')) {
        document.getElementById('print')
            .innerHTML = "Player X won";
        document.getElementById("geel2").disabled = true;
        document.getElementById("geel3").disabled = true;
        document.getElementById("geel4").disabled = true;
        document.getElementById("geel6").disabled = true;
        document.getElementById("geel7").disabled = true;
        document.getElementById("geel8").disabled = true;
        window.alert('Player X won');
    }
    else if ((b3 == 'x' || b3 == 'X') && (b5 == 'x' ||
        b5 == 'X') && (b7 == 'x' || b7 == 'X')) {
        document.getElementById('print')
            .innerHTML = "Player X won";
        document.getElementById("geel1").disabled = true;
        document.getElementById("geel2").disabled = true;
        document.getElementById("geel4").disabled = true;
        document.getElementById("geel6").disabled = true;
        document.getElementById("geel8").disabled = true;
        document.getElementById("geel9").disabled = true;
        window.alert('Player X won');
    }
    else if ((b2 == 'x' || b2 == 'X') && (b5 == 'x' ||
        b5 == 'X') && (b8 == 'x' || b8 == 'X')) {
        document.getElementById('print')
            .innerHTML = "Player X won";
        document.getElementById("geel1").disabled = true;
        document.getElementById("geel3").disabled = true;
        document.getElementById("geel4").disabled = true;
        document.getElementById("geel6").disabled = true;
        document.getElementById("geel7").disabled = true;
        document.getElementById("geel9").disabled = true;
        window.alert('Player X won');
    }
    else if ((b4 == 'x' || b4 == 'X') && (b5 == 'x' ||
        b5 == 'X') && (b6 == 'x' || b6 == 'X')) {
        document.getElementById('print')
            .innerHTML = "Player X won";
        document.getElementById("geel1").disabled = true;
        document.getElementById("geel2").disabled = true;
        document.getElementById("geel3").disabled = true;
        document.getElementById("geel7").disabled = true;
        document.getElementById("geel8").disabled = true;
        document.getElementById("geel9").disabled = true;
        window.alert('Player X won');
    }

        // Checking of Player X finsh
        // Checking for Player 0 starts, Is player 0 won or
    // not and after that disabled all the other fields
    else if ((b1 == '0' || b1 == '0') && (b2 == '0' ||
        b2 == '0') && (b3 == '0' || b3 == '0')) {
        document.getElementById('print')
            .innerHTML = "Player 0 won";
        document.getElementById("geel4").disabled = true;
        document.getElementById("geel5").disabled = true;
        document.getElementById("geel6").disabled = true;
        document.getElementById("geel7").disabled = true;
        document.getElementById("geel8").disabled = true;
        document.getElementById("geel9").disabled = true;
        window.alert('Player 0 won');
    }
    else if ((b1 == '0' || b1 == '0') && (b4 == '0' ||
        b4 == '0') && (b7 == '0' || b7 == '0')) {
        document.getElementById('print')
            .innerHTML = "Player 0 won";
        document.getElementById("geel2").disabled = true;
        document.getElementById("geel3").disabled = true;
        document.getElementById("geel5").disabled = true;
        document.getElementById("geel6").disabled = true;
        document.getElementById("geel8").disabled = true;
        document.getElementById("geel9").disabled = true;
        window.alert('Player 0 won');
    }
    else if ((b7 == '0' || b7 == '0') && (b8 == '0' ||
        b8 == '0') && (b9 == '0' || b9 == '0')) {
        document.getElementById('print')
            .innerHTML = "Player 0 won";
        document.getElementById("geel1").disabled = true;
        document.getElementById("geel2").disabled = true;
        document.getElementById("geel3").disabled = true;
        document.getElementById("geel4").disabled = true;
        document.getElementById("geel5").disabled = true;
        document.getElementById("geel6").disabled = true;
        window.alert('Player 0 won');
    }
    else if ((b3 == '0' || b3 == '0') && (b6 == '0' ||
        b6 == '0') && (b9 == '0' || b9 == '0')) {
        document.getElementById('print')
            .innerHTML = "Player 0 won";
        document.getElementById("geel1").disabled = true;
        document.getElementById("geel2").disabled = true;
        document.getElementById("geel4").disabled = true;
        document.getElementById("geel5").disabled = true;
        document.getElementById("geel7").disabled = true;
        document.getElementById("geel8").disabled = true;
        window.alert('Player 0 won');
    }
    else if ((b1 == '0' || b1 == '0') && (b5 == '0' ||
        b5 == '0') && (b9 == '0' || b9 == '0')) {
        document.getElementById('print')
            .innerHTML = "Player 0 won";
        document.getElementById("geel2").disabled = true;
        document.getElementById("geel3").disabled = true;
        document.getElementById("geel4").disabled = true;
        document.getElementById("geel6").disabled = true;
        document.getElementById("geel7").disabled = true;
        document.getElementById("geel8").disabled = true;
        window.alert('Player 0 won');
    }
    else if ((b3 == '0' || b3 == '0') && (b5 == '0' ||
        b5 == '0') && (b7 == '0' || b7 == '0')) {
        document.getElementById('print')
            .innerHTML = "Player 0 won";
        document.getElementById("geel1").disabled = true;
        document.getElementById("geel2").disabled = true;
        document.getElementById("geel4").disabled = true;
        document.getElementById("geel6").disabled = true;
        document.getElementById("geel8").disabled = true;
        document.getElementById("geel9").disabled = true;
        window.alert('Player 0 won');
    }
    else if ((b2 == '0' || b2 == '0') && (b5 == '0' ||
        b5 == '0') && (b8 == '0' || b8 == '0')) {
        document.getElementById('print')
            .innerHTML = "Player 0 won";
        document.getElementById("geel1").disabled = true;
        document.getElementById("geel3").disabled = true;
        document.getElementById("geel4").disabled = true;
        document.getElementById("geel6").disabled = true;
        document.getElementById("geel7").disabled = true;
        document.getElementById("geel9").disabled = true;
        window.alert('Player 0 won');
    }
    else if ((b4 == '0' || b4 == '0') && (b5 == '0' ||
        b5 == '0') && (b6 == '0' || b6 == '0')) {
        document.getElementById('print')
            .innerHTML = "Player 0 won";
        document.getElementById("geel1").disabled = true;
        document.getElementById("geel2").disabled = true;
        document.getElementById("geel3").disabled = true;
        document.getElementById("geel7").disabled = true;
        document.getElementById("geel8").disabled = true;
        document.getElementById("geel9").disabled = true;
        window.alert('Player 0 won');
    }

        // Checking of Player 0 finsh
    // Here, Checking about Tie
    else if ((b1 == 'X' || b1 == '0') && (b2 == 'X'
        || b2 == '0') && (b3 == 'X' || b3 == '0') &&
        (b4 == 'X' || b4 == '0') && (b5 == 'X' ||
            b5 == '0') && (b6 == 'X' || b6 == '0') &&
        (b7 == 'X' || b7 == '0') && (b8 == 'X' ||
            b8 == '0') && (b9 == 'X' || b9 == '0')) {
        document.getElementById('print')
            .innerHTML = "Match Tie";
        window.alert('Match Tie');
    }
    else {

        // Here, Printing Result
        if (flag == 1) {
            document.getElementById('print')
                .innerHTML = "Player X Turn";
        }
        else {
            document.getElementById('print')
                .innerHTML = "Player 0 Turn";
        }
    }
}

// Function to reset game
function myfunc_2() {
    location.reload();
    document.getElementById('geel1').value = '';
    document.getElementById("geel2").value = '';
    document.getElementById("geel3").value = '';
    document.getElementById("geel4").value = '';
    document.getElementById("geel5").value = '';
    document.getElementById("geel6").value = '';
    document.getElementById("geel7").value = '';
    document.getElementById("geel8").value = '';
    document.getElementById("geel9").value = '';

}

// Here onwards, functions check turn of the player
// and put accordingly value X or 0
flag = 1;
function myfunc_3() {
    if (flag == 1) {
        document.getElementById("geel1").value = "X";
        document.getElementById("geel1").disabled = true;
        flag = 0;
    }
    else {
        document.getElementById("geel1").value = "0";
        document.getElementById("geel1").disabled = true;
        flag = 1;
    }
}

function myfunc_4() {
    if (flag == 1) {
        document.getElementById("geel2").value = "X";
        document.getElementById("geel2").disabled = true;
        flag = 0;
    }
    else {
        document.getElementById("geel2").value = "0";
        document.getElementById("geel2").disabled = true;
        flag = 1;
    }
}

function myfunc_5() {
    if (flag == 1) {
        document.getElementById("geel3").value = "X";
        document.getElementById("geel3").disabled = true;
        flag = 0;
    }
    else {
        document.getElementById("geel3").value = "0";
        document.getElementById("geel3").disabled = true;
        flag = 1;
    }
}

function myfunc_6() {
    if (flag == 1) {
        document.getElementById("geel4").value = "X";
        document.getElementById("geel4").disabled = true;
        flag = 0;
    }
    else {
        document.getElementById("geel4").value = "0";
        document.getElementById("geel4").disabled = true;
        flag = 1;
    }
}

function myfunc_7() {
    if (flag == 1) {
        document.getElementById("geel5").value = "X";
        document.getElementById("geel5").disabled = true;
        flag = 0;
    }
    else {
        document.getElementById("geel5").value = "0";
        document.getElementById("geel5").disabled = true;
        flag = 1;
    }
}

function myfunc_8() {
    if (flag == 1) {
        document.getElementById("geel6").value = "X";
        document.getElementById("geel6").disabled = true;
        flag = 0;
    }
    else {
        document.getElementById("geel6").value = "0";
        document.getElementById("geel6").disabled = true;
        flag = 1;
    }
}

function myfunc_9() {
    if (flag == 1) {
        document.getElementById("geel7").value = "X";
        document.getElementById("geel7").disabled = true;
        flag = 0;
    }
    else {
        document.getElementById("geel7").value = "0";
        document.getElementById("geel7").disabled = true;
        flag = 1;
    }
}

function myfunc_10() {
    if (flag == 1) {
        document.getElementById("geel8").value = "X";
        document.getElementById("geel8").disabled = true;
        flag = 0;
    }
    else {
        document.getElementById("geel8").value = "0";
        document.getElementById("geel8").disabled = true;
        flag = 1;
    }
}

function myfunc_11() {
    if (flag == 1) {
        document.getElementById("geel9").value = "X";
        document.getElementById("geel9").disabled = true;
        flag = 0;
    } else {
        document.getElementById("geel9").value = "0";
        document.getElementById("geel9").disabled = true;
        flag = 1;
    }
}