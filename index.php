<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="/image/png" href="images/favicon.ico">
    <title>WP Info 8D Portfolio</title>
    <link rel="stylesheet" href="https://www.bernhardbmx.net/styles/style.css">
    <link rel="stylesheet" href="style.css">
    <script src="/scripts/drag_and_drop.js" defer>
        dragAndDrop('cookie-popup-extra');
    </script>
    <script src="https:///scripts/cookies.js"></script>
    <script src="/scripts/script.js"></script>
</head>

<body>
    <div id="body-overlay" class="visieble"></div>
    <div class="popup-container">
        <div id="cookie-popup" class="draggable visieble">
            <!--  -->
            <img src="/images/cookie.png" alt="Ein Cookie Bild" draggable="false" height="80px" width="80px">
            <p>Willst du die leckeren cookies haben?</p>
            <button type="submit" id="agreeBtn" class="btn">Haben!</button>
            <button type="submit" id="disagreeBtn" class="btn" onclick="hideCookiePopup();">Mag ich nicht!</button>
            <br><br>
            <a href="/cookieinfo.php">Mehr Infos</a>
        </div>
        <div id="navigator-popup" class="draggable">
            <div id="navigator_header" class="popup_header">
                <img src="/images/bernhardbmx_t.png" alt="" draggable="false" width="150px">
            </div>
            <div id="navigator_main" class="popup_main">
                <p>Navigator Menu</p>
                <button type="button" class="large_btn"
                    onclick="hideNavigatorPopup(); window.location.href='#'">Leer</button>
                <br>&nbsp;<br>
                <button type="submit" class="btn" onclick="hideNavigatorPopup()">Close</button>
            </div>
        </div>
        <div id="mini-popup" class="draggable">
            <div id="mini_header" class="popup_header">
                <img src="/images/bernhardbmx_t.png" alt="" draggable="false" width="150px">
            </div>
            <div id="mini_main" class="popup_main">
                <p>Mini Menu</p>
                <button type="button" class="large_btn"
                    onclick="hideNavigatorPopup(); window.location.href='#'">Leer</button>
                &nbsp;<br>
                <button type="submit" class="btn" onclick="hideMiniPopup()">Close</button>
            </div>
        </div>
    </div>
    <header>
        <div id="header-menu-bar">
            <button type="menu" id="navigator_btn" class="btn" onclick="showNavigatorPopup()">Navigator</button>
            <img src="/images/BB.png" alt="" id="mini-logo">
            
            <div id="user-menu">
                <div id='user-manu-div'>
                    <a href='user-dashboard.php'>
                        <img src='/images/account_circle_off-icon.svg' alt='' draggable='false'>
                    </a>
                    <div id='user-menu-a-div'>
                        <a href='' onclick='' style='color: gray;'>Anmelden</a>
                        <a href='' onclick='' style='color: gray; font-size: 7px;'>Registrieren</a>
                    </div>
                </div> <a id="menu_a" onclick="showMiniPopup()">
                    <img src='images/menu-icon.svg' alt='' draggable='false'>
                </a>
            </div>
        </div>
        <!--
        <img id="logo" src="/images/bernhardbmx_t.png" alt="BernhardBMX" width="100%" draggable="false">
            -->
    </header>
    <br><br><br><br>
    <main>
        <section id="about-us">
            <h2>System Administrator</h2>
            <p>
                Leer Leer Leer
            </p>
        </section>
        <br>
    </main>
    <footer>
        <iframe src="/footer.html" id="footer" frameborder="0"></iframe>
    </footer>
</body>

</html>