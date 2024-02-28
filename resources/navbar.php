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
            <li><i class="settings-cog fa-solid fa-gear"></i></li>
        </ul>
    </nav>
    <div class="nav-popup">

    </div>
</html>

<style>
    <?php require 'bourbon&soda.css' ?>

    nav {
        height: 64px;
        width: 100%;
        background-color: var(--background-color);
        border-bottom: 1px solid gray;
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

</style>

<script src="https://kit.fontawesome.com/dba819a3b6.js" crossorigin="anonymous"></script>