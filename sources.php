<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="https://www.bernhardbmx.net/image/png" href="images/favicon.ico">
    <title>WP Info 8D Portfolio Quellen</title>
    <link rel="stylesheet" href="https://www.bernhardbmx.net/styles/style.css">
    <link rel="stylesheet" href="styles/style.css">
    <script src="https://www.bernhardbmx.net/scripts/drag_and_drop.js" defer>
        dragAndDrop('cookie-popup-extra');
    </script>
    <script src="https://www.bernhardbmx.net/scripts/cookies.js"></script>
    <script src="https://www.bernhardbmx.net/scripts/script.js"></script>
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
            <img src="https://www.bernhardbmx.net/images/BB.png" alt="" id="mini-logo">
            
            <div id="user-menu">
                <div id='user-manu-div'>
                    <a href='user-dashboard.php'>
                        <img src='https://www.bernhardbmx.net/images/account_circle_off-icon.svg' alt='' draggable='false'>
                    </a>
                    <div id='user-menu-a-div'>
                        <a href='' onclick='' style='color: gray;'>Anmelden</a>
                        <a href='' onclick='' style='color: gray; font-size: 7px;'>Registrieren</a>
                    </div>
                </div> <a id="menu_a" onclick="showMiniPopup()">
                    <img src='https://www.bernhardbmx.netimages/menu-icon.svg' alt='' draggable='false'>
                </a>
            </div>
        </div>
        <!--
        <img id="logo" src="https://www.bernhardbmx.net/images/bernhardbmx_t.png" alt="BernhardBMX" width="100%" draggable="false">
            -->
    </header>
    <br><br><br><br>
    <main>
        <section id="quellen">
            <h2>Quellen</h2>
            <p>
                <ul>
                    <il><a href="https://www.brunel.net/de-de/karriere-lexikon/it-systemadministrator#:~:text=IT%2DSystemadmins%20planen%2C%20installieren%2C,die%20mit%20IT%2DSystemen%20arbeiten.">Systemadmin</a></il>
                    <il><a href="https://chat.openai.com/c/0cfb1bc5-a6f2-4f8a-819e-e0c49d58a623">System Admin (ChatGBT)</a></il>
                    <il><a href="https://chat.openai.com/c/0cfb1bc5-a6f2-4f8a-819e-e0c49d58a623">Alen Turing (ChatGBT)</a></il>
                </ul>
            </p>
        </section>
        <br>
    </main>
    <footer>
        <iframe src="https://www.bernhardbmx.net/footer.html" id="footer" frameborder="0"></iframe>
    </footer>
</body>
</html>