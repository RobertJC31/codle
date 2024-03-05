<!DOCTYPE html>
<head>
    <title>Codle</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<html lang="en-US">
    <nav class="no-highlight">
        <ul>
            <li class="nav-icon-padding"><i class="fa-solid fa-bars"></i></li>
        </ul>
        <logo>CODLE</logo>
        <ul>
            <li id="nav-popup-stats-open"><i class="fa-solid fa-chart-simple"></i></li>
            <li id="nav-popup-settings-open"><i class="settings-cog fa-solid fa-gear"></i></li>
        </ul>
    </nav>
    <div id="nav-settings-popup" class="nav-popup no-highlight">
        <div class="nav-popup-modal">
            <div class="nav-popup-modal-top">
                <div class="nav-popup-modal-top-spacer"></div>
                <span class="nav-modal-title">GAME SETTINGS</span>
                <span id="nav-modal-settings-close" class="nav-modal-close"><i class="fa-solid fa-xmark"></i></span>
            </div>
            <div class="nav-modal-setting">
                <div class="nav-modal-setting-text">
                    <span class="nav-modal-setting-title left-float">Hard Mode</span>
                    <span class="nav-modal-setting-description left-float">Any revealed hints must be used in subsequent guesses</span>
                </div>
                <div class="nav-modal-switch-container right-float">
                    <label class="nav-modal-switch right-float">
                        <input id="game-setting-hard-mode" type="checkbox">
                        <span class="nav-modal-switch-slider round"></span>
                    </label>
                </div>
            </div>
            <div class="nav-modal-setting">
                <div class="nav-modal-setting-text">
                    <span class="nav-modal-setting-title left-float">Allow Letters</span>
                    <span class="nav-modal-setting-description left-float">Allows letters to be included in code</span>
                </div>
                <div class="nav-modal-switch-container right-float">
                    <label class="nav-modal-switch right-float">
                        <input id="game-setting-allow-alpha" type="checkbox">
                        <span class="nav-modal-switch-slider round"></span>
                    </label>
                </div>
            </div>
            <div class="nav-modal-setting">
                <div class="nav-modal-setting-text">
                    <span class="nav-modal-setting-title left-float">5 Digit Codes</span>
                </div>
                <div class="nav-modal-switch-container right-float">
                    <label class="nav-modal-switch right-float">
                        <input id="game-setting-allow-5-digits" type="checkbox">
                        <span class="nav-modal-switch-slider round"></span>
                    </label>
                </div>
            </div>
            <div class="nav-modal-setting">
                <div class="nav-modal-setting-text">
                    <span class="nav-modal-setting-title left-float">Dark Theme</span>
                </div>
                <div class="nav-modal-switch-container right-float">
                    <label class="nav-modal-switch right-float">
                        <input id="game-setting-dark-theme" type="checkbox">
                        <span class="nav-modal-switch-slider round"></span>
                    </label>
                </div>
            </div>
            <div class="nav-modal-setting">
                <div class="nav-modal-setting-text">
                    <span class="nav-modal-setting-title left-float">Onscreen Keyboard Input Only</span>
                    <span class="nav-modal-setting-description left-float">Ignore key input except from the onscreen keyboard. Most helpful for users using speech recognition or other assistive devices</span>
                </div>
                <div class="nav-modal-switch-container right-float">
                    <label class="nav-modal-switch right-float">
                        <input id="game-setting-allow-on-screen-keyboard-only" type="checkbox">
                        <span class="nav-modal-switch-slider round"></span>
                    </label>
                </div>
            </div>
            <div class="nav-modal-setting">
                <span class="nav-modal-setting-title left-float">Feedback</span>
                <span class="nav-modal-setting-link right-float"><a href="mailto:admin@robertjc.com">EMAIL</a></span>
            </div>
            <div class="nav-modal-setting">
                <span class="nav-modal-setting-title left-float">Report a Bug</span>
                <span class="nav-modal-setting-link right-float"><a href="mailto:admin@robertjc.com">EMAIL</a></span>
            </div>
            <div class="nav-modal-setting">
                <span class="nav-modal-setting-title left-float">Question</span>
                <span class="nav-modal-setting-link right-float"><a href="/faq">FAQ</a></span>
            </div>
            <div class="nav-modal-copyright">
                <span class="nav-modal-copyright-info left-float">© <?php echo date("Y"); ?> Robert Ceriani & Bowen Carnell</span>
                <span class="nav-modal-copyright-game right-float">#Penis-Fucker</span>
            </div>
        </div>
    </div>
    <div id="nav-stats-popup" class="nav-popup no-highlight">
        <div class="nav-popup-modal">
            <div class="nav-popup-modal-top">
                <div class="nav-popup-modal-top-spacer"></div>
                <span class="nav-modal-title">STATISTICS</span>
                <span id="nav-modal-stats-close" class="nav-modal-close"><i class="fa-solid fa-xmark"></i></span>
            </div>
            <div class="nav-modal-stats-summary">
                <div class="nav-modal-stats-summary-container">
                    <span id="nav-modal-stats-summary-stat-total-games" class="nav-modal-stats-summary-stat"></span>
                    <span class="nav-modal-stats-summary-stat-title">Games Played</span>
                </div>
                <div class="nav-modal-stats-summary-container">
                    <span id="nav-modal-stats-summary-stat-win-percent" class="nav-modal-stats-summary-stat"></span>
                    <span class="nav-modal-stats-summary-stat-title">Win %</span>
                </div>
                <div class="nav-modal-stats-summary-container">
                    <span id="nav-modal-stats-summary-stat-current-streak" class="nav-modal-stats-summary-stat"></span>
                    <span class="nav-modal-stats-summary-stat-title">Current Streak</span>
                </div>
                <div class="nav-modal-stats-summary-container">
                    <span id="nav-modal-stats-summary-stat-longest-streak" class="nav-modal-stats-summary-stat"></span>
                    <span class="nav-modal-stats-summary-stat-title">Longest Streak</span>
                </div>
            </div>
            <span class="nav-modal-title nav-modal-distribution-title">GUESS DISTRIBUTION</span>
            <div class="nav-modal-distribution-container">
                <div class="nav-modal-distribution-graph-container">
                    <div class="nav-modal-distribution-graph-guess">1</div>
                    <div id="nav-modal-distribution-graph-one-guess" class="nav-modal-distribution-bar"></div>
                </div>
                <div class="nav-modal-distribution-graph-container nav-modal-distribution-graph-not-first">
                    <div class="nav-modal-distribution-graph-guess">2</div>
                    <div id="nav-modal-distribution-graph-two-guess" class="nav-modal-distribution-bar">0</div>
                </div>
                <div class="nav-modal-distribution-graph-container nav-modal-distribution-graph-not-first">
                    <div class="nav-modal-distribution-graph-guess">3</div>
                    <div id="nav-modal-distribution-graph-three-guess" class="nav-modal-distribution-bar">0</div>
                </div>
                <div class="nav-modal-distribution-graph-container nav-modal-distribution-graph-not-first">
                    <div class="nav-modal-distribution-graph-guess">4</div>
                    <div id="nav-modal-distribution-graph-four-guess" class="nav-modal-distribution-bar">0</div>
                </div>
                <div class="nav-modal-distribution-graph-container nav-modal-distribution-graph-not-first">
                    <div class="nav-modal-distribution-graph-guess">5</div>
                    <div id="nav-modal-distribution-graph-five-guess" class="nav-modal-distribution-bar">0</div>
                </div>
            </div>
        </div>
    </div>
</html>

<style>
    <?php require 'bourbon&soda.css' ?>

    :root {
        --navbar-height: 64px;
        --navbar-border-width: 1px;
    }

    nav {
        height: var(--navbar-height);
        width: 100%;
        background-color: var(--background-color);
        border-bottom: var(--navbar-border-width) solid var(--color-tone-border);
        display: flex;
        justify-content: space-around;
        align-items: center;
    }

    nav :where(logo) {
        color: var(--main-text-color-tone);
        font-family: JetBrains, serif;
        font-size: 38px;
        letter-spacing: 3px;
        font-weight: 900;
    }

    nav: where(ul) ul {
        list-style: none;
        display: flex;
    }

    nav :where(ul) li {
        display: inline-block;
        padding: 10px;
        cursor: pointer;
    }

    nav :where(ul) li i {
        color: var(--nav-modal-icons);
        font-size: 22px;
        transition: cubic-bezier(0.4, 0, 0.6, 1) .25s;
    }

    nav :where(ul) li:hover > i {
        color: var(--nav-modal-hover-icons);
    }

    nav :where(ul) li:hover .settings-cog {
        transform: rotate(-90deg);
        transition: .25s;
    }

    .nav-icon-padding {
        margin-right: 48px;
    }

    .nav-popup {
        position: fixed;
        width: 100%;
        height: 100%;
        display: none;
        top: 0;
        left: 0;
        justify-content: center;
        align-items: center;
        background-color: var(--popup-background);
    }

    .nav-popup-modal {
        margin-top: -25px;
        width: var(--popup-width);
        max-width: 525px;
        max-height: 625px;
        background-color: var(--background-color);
        border-radius: 25px;
        padding: 15px;
        display: flex;
        flex-direction: column;
        box-shadow: 0 4px 23px 0 rgba(0, 0, 0, .2);
    }

    .nav-popup-modal-top {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
    }

    .nav-modal-title {
        font-family: JetBrains, serif;
        text-transform: uppercase;
        font-size: 15px;
        color: var(--main-text-color-tone);
        margin: auto;
    }

    .nav-modal-close {
        font-family: JetBrains, serif;
        text-transform: uppercase;
        font-size: 25px;
        color: var(--nav-modal-icons);
        text-align: right;
        margin-left: -15px;
        padding: 10px;
        cursor: pointer;
        transition: cubic-bezier(0.4, 0, 0.6, 1) .25s;
    }

    .nav-modal-close:hover {
        color: var(--nav-modal-hover-icons);
    }

    .nav-popup-modal-top-spacer {
        width: 24px;
        height: 100%;
    }

    .nav-modal-setting {
        display: inline-flex;
        justify-content: space-between;
        align-items: center;
        width: 100%;
        padding: 16px 0;
        border-bottom: 1px solid var(--color-tone-border);
    }

    .nav-modal-setting-text {
        display: inline-flex;
        flex-direction: column;
        width: 80%;
    }

    .nav-modal-setting-title {
        font-family: JetBrains, serif;
        font-weight: 900;
        font-size: 17px;
        color: var(--main-text-color-tone)
    }

    .nav-modal-setting-description {
        font-family: JetBrains, serif;
        font-weight: 700;
        font-size: calc(0.618 * 17px);
        color: var(--sub-text-color-tone);
    }

    .nav-modal-copyright {
        padding: 16px 0;
    }

    .nav-modal-copyright-info, .nav-modal-copyright-game {
        font-size: 12px;
        font-family: "Clear Sans", serif;
        font-weight: 500;
        color: var(--supp-text-color-tone);
    }

    .nav-modal-switch-container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100%;
    }

    .nav-modal-switch {
        width: 32px;
        height: 19px;
        position: relative;
    }

    .nav-modal-switch input {
        opacity: 0;
        width: 0;
        height: 0;
    }

    .nav-modal-switch-slider {
        position: absolute;
        cursor: pointer;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: var(--setting-slider-background);
        -webkit-transition: .4s;
        transition: .4s;
    }

    .nav-modal-switch-slider:before {
        position: absolute;
        content: "";
        height: 13.866px;
        width: 13.866px;
        left: 2.133px;
        bottom: 2.133px;
        background-color: white;
        -webkit-transition: .4s;
        transition: .4s;
    }

    input:checked + .nav-modal-switch-slider {
        background-color: #538D4E;
    }

    input:focus + .nav-modal-switch-slider {
        box-shadow: 0 0 1px #538D4E;
    }

    input:checked + .nav-modal-switch-slider:before {
        -webkit-transform: translateX(13.866px);
        -ms-transform: translateX(13.866px);
        transform: translateX(13.866px);
    }

    .nav-modal-switch-slider.round {
        border-radius: 34px;
    }

    .nav-modal-switch-slider.round:before {
        border-radius: 50%;
    }

    .nav-modal-setting-link a {
        font-family: JetBrains, serif;
        font-weight: 700;
        font-size: 15px;
        color: #F8F8F8;
    }

    .nav-settings-cog-active > i {
        color: var(--nav-modal-hover-icons);
        transform: rotate(-90deg);
    }

    .nav-stats-active > i {
        color: var(--nav-modal-hover-icons);
    }

    .nav-modal-stats-summary {
        width: 100%;
        margin-top: 20px;
        display: flex;
        justify-content: space-between;
    }

    .nav-modal-stats-summary-container {
        display: flex;
        flex-direction: column;
        text-align: center;
        color: var(--main-text-color-tone);
        width: 20%;
    }

    .nav-modal-stats-summary-stat {
        font-family: JetBrains, serif;
        font-size: 35px;
    }

    .nav-modal-stats-summary-stat-title {
        font-family: JetBrains, serif;
        font-size: 13px;
    }

    .nav-modal-distribution-title {
        margin-top: 25px;
        margin-bottom: 25px;
    }

    .nav-modal-distribution-container {
        width: 85%;
        margin: auto;
        margin-bottom: 10px;
    }


    .nav-modal-distribution-graph-container {
        display: flex;
        flex-direction: row;
    }

    .nav-modal-distribution-graph-guess, .nav-modal-distribution-bar {
        color: white;
        font-family: JetBrains, serif;
        font-size: 14px;
        min-width: 10px;
        height: 20px;
        line-height: 20px;
        justify-items: center;
        align-items: center;
    }

    .nav-modal-distribution-graph-guess {
        margin-right: 5px;
        color: var(--main-text-color-tone);
    }

    .nav-modal-distribution-bar {
        background-color: var(--color-tone-border);
        padding-right: 5px;
        padding-left: 4px;
        text-align: right;
    }

    .nav-modal-distribution-graph-not-first {
        margin-top: 8px;
    }

    .left-float {
        float: left;
    }

    .right-float {
        float: right;
    }

</style>

<script src="https://kit.fontawesome.com/dba819a3b6.js" crossorigin="anonymous"></script>
<script src="/resources/scripts/popup.js"></script>
<script src="/resources/scripts/userstats.js"></script>
<script>
    <?php require 'resources/scripts/cookie.js' ?>
    let hardModeToggle = document.getElementById("game-setting-hard-mode");
    let allowAlphasToggle = document.getElementById("game-setting-allow-alpha");
    let allow5DigitsToggle = document.getElementById("game-setting-allow-5-digits");
    let darkThemeToggle = document.getElementById("game-setting-dark-theme");
    let onScreenKeyboardOnlyToggle = document.getElementById("game-setting-allow-on-screen-keyboard-only");
    let distributionGraphOneGuessBar = document.getElementById("nav-modal-distribution-graph-one-guess");
    let distributionGraphTwoGuessBar = document.getElementById("nav-modal-distribution-graph-two-guess");
    let distributionGraphThreeGuessBar = document.getElementById("nav-modal-distribution-graph-three-guess");
    let distributionGraphFourGuessBar = document.getElementById("nav-modal-distribution-graph-four-guess");
    let distributionGraphFiveGuessBar = document.getElementById("nav-modal-distribution-graph-five-guess");
    let cssRoot = document.querySelector(':root');
    let userSettings;

    triggerDisplayAndTrigger("nav-popup-settings-open", "nav-settings-popup", "flex", true, "nav-settings-cog-active", "nav-popup-settings-open");
    triggerDisplayAndTrigger("nav-settings-popup", "nav-settings-popup", "none", false, "nav-settings-cog-active", "nav-popup-settings-open");
    triggerDisplayAndTrigger("nav-modal-settings-close", "nav-settings-popup", "none", true, "nav-settings-cog-active", "nav-popup-settings-open");
    triggerDisplayAndTrigger("nav-popup-stats-open", "nav-stats-popup", "flex", true, "nav-stats-active", "nav-popup-stats-open");
    triggerDisplayAndTrigger("nav-stats-popup", "nav-stats-popup", "none", false, "nav-stats-active", "nav-popup-stats-open");
    triggerDisplayAndTrigger("nav-modal-stats-close", "nav-stats-popup", "none", true, "nav-stats-active", "nav-popup-stats-open");
    hardModeToggle.addEventListener('change', updateUserSettings);
    allowAlphasToggle.addEventListener('change', updateUserSettings);
    allow5DigitsToggle.addEventListener('change', updateUserSettings);
    darkThemeToggle.addEventListener('change', updateUserSettings);
    onScreenKeyboardOnlyToggle.addEventListener('change', updateUserSettings);

    getUserSettings();
    getUserStats();

    let winPercent = Math.round((userStats.gamesWon / userStats.gamesPlayed) * 100);
    if (isNaN(winPercent)) {
        winPercent = 0;
    }

    let distributionGuesses = [
        (100 * (userStats.guessDistribution.oneGuess / userStats.gamesWon)),
        (100 * (userStats.guessDistribution.twoGuesses / userStats.gamesWon)),
        (100 * (userStats.guessDistribution.threeGuesses / userStats.gamesWon)),
        (100 * (userStats.guessDistribution.fourGuesses / userStats.gamesWon)),
        (100 * (userStats.guessDistribution.fiveGuesses / userStats.gamesWon))];

    document.getElementById("nav-modal-stats-summary-stat-total-games").innerHTML = (userStats.gamesPlayed).toString();
    document.getElementById("nav-modal-stats-summary-stat-win-percent").innerHTML = winPercent.toString();
    document.getElementById("nav-modal-stats-summary-stat-current-streak").innerHTML = (userStats.winStreak).toString();
    document.getElementById("nav-modal-stats-summary-stat-longest-streak").innerHTML = (userStats.longestStreak).toString();
    distributionGraphOneGuessBar.innerHTML = userStats.guessDistribution.oneGuess;
    distributionGraphOneGuessBar.style.width = distributionGuesses[0] + '%';
    distributionGraphTwoGuessBar.innerHTML = userStats.guessDistribution.twoGuesses;
    distributionGraphTwoGuessBar.style.width = distributionGuesses[1] + '%';
    distributionGraphThreeGuessBar.innerHTML = userStats.guessDistribution.threeGuesses;
    distributionGraphThreeGuessBar.style.width = distributionGuesses[2] + '%';
    distributionGraphFourGuessBar.innerHTML = userStats.guessDistribution.fourGuesses;
    distributionGraphFourGuessBar.style.width = distributionGuesses[3] + '%';
    distributionGraphFiveGuessBar.innerHTML = userStats.guessDistribution.fiveGuesses;
    distributionGraphFiveGuessBar.style.width = distributionGuesses[4] + '%';

    function getUserSettings() {
        if (!(checkCookie("userSettings"))) {
            let defaultSettings = JSON.stringify({
                hardMode: false,
                allowAlphas: false,
                allow5Digits: false,
                darkTheme: true,
                onScreenKeyboardOnly: false
            });
            setCookie("userSettings", defaultSettings, 365);
            userSettings = JSON.parse(defaultSettings);
        } else {
            userSettings = JSON.parse(getCookie("userSettings"));
        }

        setDisplayMode();

        // Hard Mode Setting
        hardModeToggle.checked = userSettings.hardMode === true;

        // Allow Alpha Characters Setting
        allowAlphasToggle.checked = userSettings.allowAlphas === true;

        // Allow 5 Digits Setting
        allow5DigitsToggle.checked = userSettings.allow5Digits === true;

        // Dark Theme Setting
        darkThemeToggle.checked = userSettings.darkTheme === true;

        // Onscreen Keyboard Only Setting
        onScreenKeyboardOnlyToggle.checked = userSettings.onScreenKeyboardOnly === true;
    }

    function updateUserSettings(event) {
        if (event.target === hardModeToggle) {
            userSettings.hardMode = !!event.target.checked;
        }
        if (event.target === allowAlphasToggle) {
            userSettings.allowAlphas = !!event.target.checked;
        }
        if (event.target === allow5DigitsToggle) {
            userSettings.allow5Digits = !!event.target.checked;
        }
        if (event.target === darkThemeToggle) {
            userSettings.darkTheme = !!event.target.checked;
            setDisplayMode();
        }
        if (event.target === onScreenKeyboardOnlyToggle) {
            userSettings.onScreenKeyboardOnly = !!event.target.checked;
        }
        setCookie("userSettings", JSON.stringify(userSettings), 365);
    }

    function setDisplayMode() {
        if (userSettings.darkTheme === true) {
            cssRoot.style.setProperty('--background-color', 'var(--background-color-dark)');
            cssRoot.style.setProperty('--color-tone-border', 'var(--color-tone-border-dark)');
            cssRoot.style.setProperty('--main-text-color-tone', 'var(--main-text-color-tone-dark)');
            cssRoot.style.setProperty('--sub-text-color-tone', 'var(--sub-text-color-tone-dark)');
            cssRoot.style.setProperty('--setting-slider-background', 'var(--setting-slider-background-dark)');
            cssRoot.style.setProperty('--nav-modal-icons', 'var(--nav-modal-icons-dark)');
            cssRoot.style.setProperty('--nav-modal-hover-icons', 'var(--nav-modal-hover-icons-dark)');
            cssRoot.style.setProperty('--supp-text-color-tone', 'var(--supp-text-color-tone-dark)');
        } else {
            cssRoot.style.setProperty('--background-color', 'var(--background-color-light)');
            cssRoot.style.setProperty('--color-tone-border', 'var(--color-tone-border-light)');
            cssRoot.style.setProperty('--main-text-color-tone', 'var(--main-text-color-tone-light)');
            cssRoot.style.setProperty('--sub-text-color-tone', 'var(--sub-text-color-tone-light)');
            cssRoot.style.setProperty('--setting-slider-background', 'var(--setting-slider-background-light)');
            cssRoot.style.setProperty('--nav-modal-icons', 'var(--nav-modal-icons-light)');
            cssRoot.style.setProperty('--nav-modal-hover-icons', 'var(--nav-modal-hover-icons-light)');
            cssRoot.style.setProperty('--supp-text-color-tone', 'var(--supp-text-color-tone-light)');
        }
    }

</script>