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
            <li><i class="fa-solid fa-chart-simple"></i></li>
            <li id="nav-popup-settings-open"><i id="nav-popup-settings-open-cog" class="settings-cog fa-solid fa-gear"></i></li>
        </ul>
    </nav>
    <div id="nav-popup" class="nav-popup no-highlight">
        <div class="nav-popup-modal">
            <span class="nav-modal-title">GAME SETTINGS</span>
            <div class="nav-modal-setting">
                <div class="nav-modal-setting-text">
                    <span class="nav-modal-setting-title left-float">Hard Mode</span>
                    <span class="nav-modal-setting-description left-float">Any revealed hints must be used in subsequent guesses</span>
                </div>
                <div class="nav-modal-switch-container right-float">
                    <label class="nav-modal-switch right-float">
                        <input type="checkbox">
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
                        <input type="checkbox">
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
                        <input type="checkbox">
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
                        <input type="checkbox">
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
                        <input type="checkbox">
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
        border-bottom: var(--navbar-border-width) solid gray;
        display: flex;
        justify-content: space-around;
        align-items: center;
    }

    nav :where(logo) {
        color: white;
        font-family: JetBrains, serif;
        font-size: 38px;
        letter-spacing: 3px;
        font-weight: 900;
        padding-left: 3px;
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
        color: gray;
        font-size: 22px;
        transition: cubic-bezier(0.4, 0, 0.6, 1) .25s;
    }

    nav :where(ul) li:hover > i {
        color: white;
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
        background-color: rgba(0, 0, 0, 0.5);

    }

    .nav-popup-modal {
        margin-top: -65px;
        width: 510px;
        max-width: 525px;
        max-height: 625px;
        background-color: var(--background-color);
        border-radius: 25px;
        padding: 15px;
        display: flex;
        flex-direction: column;
        box-shadow: 0 4px 23px 0 rgba(0, 0, 0, .2);
    }

    .nav-modal-title {
             font-family: JetBrains, serif;
             text-transform: uppercase;
             font-size: 15px;
             color: white;
             text-align: center;
             margin-bottom: 10px;
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
        color: #F8F8F8;
    }

    .nav-modal-setting-description {
        font-family: JetBrains, serif;
        font-weight: 700;
        font-size: calc(0.618 * 17px);
        color: #DFDFDF;
    }

    .nav-modal-copyright {
        padding: 16px 0;
    }

    .nav-modal-copyright-info, .nav-modal-copyright-game {
        font-size: 12px;
        font-family: "Clear Sans", serif;
        font-weight: 500;
        color: #DFDFDF;
    }

    .nav-modal-switch-container {
        display: flex; /* Ensure it's a flex container */
        justify-content: center; /* Center horizontally */
        align-items: center; /* Center vertically */
        height: 100%; /* Ensure the container takes full height */
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
        background-color: #767676;
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

    .left-float {
        float: left;
    }

    .right-float {
        float: right;
    }

</style>

<script src="https://kit.fontawesome.com/dba819a3b6.js" crossorigin="anonymous"></script>
<script src="/resources/scripts/popup.js"></script>
<script>
    addListenerToTriggerDisplay("nav-popup-settings-open", "nav-popup", "flex");
    addListenerToTriggerDisplay("nav-popup-settings-open-cog", "nav-popup", "flex");
    addListenerToTriggerDisplay("nav-popup", "nav-popup", "none");
</script>