<!DOCTYPE html>

<head>
    <title>Codle</title>
    <link rel="stylesheet" href="resources/styling/codle.css">
    <?php require 'resources/navbar.php' ?>
</head>

<html lang="en-US">
    <style>
        .board {
            display: grid;
            grid-template-columns: repeat(10, 30px);
            grid-template-rows: repeat(1, 30px);
            gap: 1px;
            border: 1px solid #000;
        }

        .peg {
            width: 30px; 
            height: 30px; 
            background-color: #ccc; 
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
        <div class="board">

    </div>
    </body>
</html>

<script src="/resources/scripts/popup.js"></script>
<script>
    <?php require 'resources/scripts/codle.js' ?>

    window.onload = function() {
        document.getElementById("pop-up").style.display = "block";
    }

    triggerDisplay("pop-up", "pop-up", "none", false);
    triggerDisplay("pop-up-close", "pop-up", "none", true);
</script>