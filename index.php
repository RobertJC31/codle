<!DOCTYPE html>

<head>
    <title>Codle</title>
    <link rel="stylesheet" href="resources/styling/codle.css">
    <?php require 'resources/navbar.php' ?>
</head>

<html lang="en-US">
    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 100vh; 
        }
        .board {
            display: grid;
            grid-template-columns: repeat(5, 70px);
            grid-template-rows: repeat(2, 70px);
            gap: 5px;
            border: 1px solid #000;
        }
        .board-container {
            flex-grow: 1; 
            display: flex;
            justify-content: center;
            align-items: flex-end; 
        }
        .peg {
            width: 70px; 
            height: 70px; 
            background-color: grey; 
            border-radius: 20%;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            font-size: 40px;
            font-weight: bold;
        }
    </style>
    <body>
        <div id="pop-up" class="pop-up">
            <div class="pop-up-content">
            <span id="pop-up-close" class="pop-up-close">&times;</span>
            <p>Welcome to Codle!</p>
            <p>To play Codle you have to guess the 4-digit code in 5 guesses.</p>
        </div>
        </div>
        <div class="board-container">
        <div class="board">
        <button class="peg">0</button>
        <button class="peg">1</button>
        <button class="peg">2</button>
        <button class="peg">3</button>
        <button class="peg">4</button>
        <button class="peg">5</button>
        <button class="peg">6</button>
        <button class="peg">7</button>
        <button class="peg">8</button>
        <button class="peg">9</button>
    </div>
    </div>

    </body>
</html>

<script src="/resources/scripts/popup.js"></script>
<script>
    <?php require 'resources/scripts/codegenerator.js' ?>
    <?php require 'resources/scripts/cookie.js' ?>
    let code;

    window.onload = function() {
        document.getElementById("pop-up").style.display = "block";
        generateNewCode();
    }

    function generateNewCode() {
        code = generateCode(userSettings.allowAlphas, userSettings.allow5Digits);
    }

    triggerDisplay("pop-up", "pop-up", "none", false);
    triggerDisplay("pop-up-close", "pop-up", "none", true);
</script>