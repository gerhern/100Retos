var scoreP1 = 0;
var scoreP2 = 0;

function playGame(player) {
    var rival = getRival();

    switch (player) {
        case "rock":
            if (rival == "rock") {
                return tie(player, rival);
            } else if (rival == "paper") {
                return lose(player, rival);
            } else if (rival == "scissors") {
                return win(player, rival);
            }
            break;

        case "paper":
            if (rival == "paper") {
                return tie(player, rival);
            } else if (rival == "scissors") {
                return lose(player, rival);
            } else if (rival == "rock") {
                return win(player, rival);
            }
            break;

        case "scissors":
            if (rival == "scissors") {
                return tie(player, rival);
            } else if (rival == "rock") {
                return lose(player, rival);
            } else if (rival == "paper") {
                return win(player, rival);
            }
            break;
    }
}

function getRival() {
    var number = Math.random();
    console.log(number);

    if (number >= 0 && number <= 0.333) {
        return "rock";
    } else if (number > 0.333 && number <= 0.666) {
        return "paper";
    } else if (number > 0.666 && number <= 1) {
        return "scissors";
    }
}

function getImage(player, rival) {
    var playerImg = document.getElementById("versusImagePlayer");
    playerImg.src = "./" + player + ".png";

    var rivalImg = document.getElementById("versusImageRival");
    rivalImg.src = "./" + rival + ".png";
}

function tie(player, rival) {
    getImage(player, rival);

    document.getElementById("resultGame").innerHTML =
        "<h2>El resultado es un Empate</h2>";
    console.log("Tie");
}

function win(player, rival) {
    getImage(player, rival);

    document.getElementById("resultGame").innerHTML =
        "<h2>El ganador es el Jugador 1</h2>";

    this.scoreP1++;
    document.getElementById("scoreP1").innerHTML =
        "<span>" + this.scoreP1 + "</span>";

    this.twoThree();
    console.log("You Win");
}

function lose(player, rival) {
    getImage(player, rival);

    document.getElementById("resultGame").innerHTML =
        "<h2>El ganador es el Jugador 2</h2>";

    this.scoreP2++;
    document.getElementById("scoreP2").innerHTML =
        "<span>" + this.scoreP2 + "</span>";

    this.twoThree();
    console.log("You Lose");
}

function twoThree() {
    if (this.scoreP1 >= 2 && this.scoreP1 > this.scoreP2) {
        document.getElementById("resultGame").innerHTML ="<span class= \"text-red-500\">El Jugador 1 Gana la partida</span>";

        console.log("1 Gana!!");
        this.scoreP1 = 0;
        this.scoreP2 = 0;

        document.getElementById("scoreP2").innerHTML = "<span> 0 </span>";

        document.getElementById("scoreP1").innerHTML = "<span> 0 </span>";

    } else if (this.scoreP2 >= 2 && this.scoreP2 > this.scoreP1) {
        document.getElementById("resultGame").innerHTML =
            "<span class= \"text-red-500\">El Jugador 2 Gana la partida</span>";

        console.log("2 Gana!!");
        this.scoreP1 = 0;
        this.scoreP2 = 0;

        document.getElementById("scoreP2").innerHTML = "<span> 0 </span>";

        document.getElementById("scoreP1").innerHTML = "<span> 0 </span>";
    }
}
