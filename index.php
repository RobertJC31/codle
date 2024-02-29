<!DOCTYPE html>

<head>
    <title>Codle</title>
    <link rel="stylesheet" href="resources/styling/codle.css">
    <?php require 'resources/navbar.php' ?>
</head>

<html lang="en-US">
    <body>
        <div id="pop-up" class="pop-up">
            <div class="pop-up-content">
            <span id="pop-up-close" class="pop-up-close">&times;</span>
            <p>Welcome to Codle!</p>
            <p>To play Codle you have to guess the 4-digit code in 5 guesses.</p>
        </div>
        </div>
    </body>
</html>

<script src="/resources/scripts/popup.js"></script>
<script>
    <?php require 'resources/scripts/codle.js' ?>

    window.onload = function() {
        document.getElementById("pop-up").style.display = "block";
    }

    addListenerToTriggerDisplay("pop-up", "pop-up", "none", false);
    addListenerToTriggerDisplay("pop-up-close", "pop-up", "none", true);
</script>