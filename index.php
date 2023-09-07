<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="https://www.bernhardbmx.net/image/png" href="images/favicon.ico">
    <title>WP Info 8D Portfolio</title>
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
        <section id="systemadmins">
            <h2>Systemadmins</h2>
            <p>
                Systemadmins konfigurieren, installieren und warten Hardwere und Systeme.
                
                <h4>Von der quelle kopiert:</h4>
                Systemadmins planen, installieren, konfigurieren und warten IT-Systeme und -Netzwerke in Unternehmen. 
                Sie werden in allen Unternehmen und Organisationen gebraucht, die mit IT-Systemen arbeiten.
                <br><br>
                <h5>Beschreibung des Berufs und Tätigkeitsgebiete:</h5>
                Ein Systemadministrator ist verantwortlich für die Planung, Implementierung, Wartung und Sicherung von Informationssystemen in Unternehmen oder Organisationen. Ihre Hauptaufgaben umfassen die Verwaltung von Servern, Netzwerken, Datenbanken und anderen IT-Infrastrukturen. Sie lösen technische Probleme, stellen sicher, dass Systeme reibungslos funktionieren, und schützen diese vor Sicherheitsrisiken. Systemadministratoren sind auch für die Unterstützung der Endbenutzer bei IT-Problemen verantwortlich.

                <h4>Ausbildung oder (duales) Studium zur Erlangen der Qualifikation:<h4>
                Die Qualifikation eines Systemadministrators kann auf verschiedene Weisen erreicht werden:

                Ausbildung: Eine klassische Ausbildung zum Fachinformatiker für Systemintegration ist eine gebräuchliche Option. Diese Ausbildung dauert in der Regel drei Jahre und beinhaltet eine Kombination aus Berufsschulunterricht und praktischer Arbeit in einem Unternehmen.

                Duales Studium: Ein duales Studium in Informatik oder einem verwandten Bereich, das parallel zur praktischen Arbeit in einem Unternehmen stattfindet, kann ebenfalls zur Qualifikation führen.

                Studium: Ein direktes Studium in Informatik, Informationstechnologie oder einem verwandten Fach kann ebenfalls den Weg zum Systemadministrator ebnen.

                <h4>Inhalte der Ausbildung bzw. des (dualen) Studiums:</h4>
                Die Ausbildung oder das Studium zum Systemadministrator kann folgende Inhalte umfassen:

                Grundlagen der Informatik und Informationstechnologie
                Betriebssysteme (z.B. Windows, Linux)
                Netzwerktechnik und -administration
                Datenbankmanagement
                IT-Sicherheit und Datenschutz
                Systemdesign und -implementierung
                Problemlösung und Fehlerbehebung
                Projektmanagement und Dokumentation
                Voraussetzungen:
                Die Voraussetzungen können je nach Ausbildung oder Studium variieren, aber typischerweise werden die folgenden Qualitäten und Fähigkeiten von Systemadministratoren erwartet:

                Gutes technisches Verständnis und Interesse an Informationstechnologie.
                Problemlösungsfähigkeiten und Geduld bei der Fehlerbehebung.
                Kommunikationsfähigkeiten, um mit Benutzern und Kollegen zu interagieren.
                Teamarbeit und die Fähigkeit, in einem Team zu arbeiten.
                Bereitschaft zur Weiterbildung, da sich die IT-Landschaft ständig verändert.
                Bezahlung während der Ausbildung:
                Die Bezahlung während der Ausbildung kann je nach Land, Region und Unternehmen variieren. In der Regel erhalten Auszubildende eine angemessene Vergütung, die oft an Tarifverträgen oder gesetzlichen Mindestlöhnen ausgerichtet ist.

                <h4>Bezahlung im Job:</h4>
                Die Bezahlung eines Systemadministrators im Job hängt von verschiedenen Faktoren ab, einschließlich Erfahrung, Qualifikationen, Unternehmensgröße und Standort. In der Regel verdienen erfahrene Systemadministratoren ein wettbewerbsfähiges Gehalt, das über dem Durchschnitt liegt, da IT-Fachleute sehr gefragt sind. Gehälter können stark variieren, aber sie können attraktiv sein, insbesondere in großen Unternehmen oder in spezialisierten IT-Bereichen wie Cybersecurity.

            </p>
        </section>
        <br>
        <section>
            <h2>Alan Turing</h2>
            <p>
                Kurze biografische Übersicht: Alan Turing war ein britischer Mathematiker, Logiker und Informatiker. Er wurde 1912 in London geboren. Während des Zweiten Weltkriegs spielte er eine entscheidende Rolle bei der Entschlüsselung der deutschen Enigma-Verschlüsselung, was zur Aufklärung von feindlichen Militärnachrichten beitrug. Turing war offen homosexuell, was in dieser Zeit kriminalisiert war. 1952 wurde er wegen "Unzucht" verurteilt, was schwerwiegende persönliche und berufliche Konsequenzen hatte. Er verstarb tragischerweise im Jahr 1954 durch Suizid.

                Bedeutung für die Informatik: Turing wird oft als einer der Gründerväter der Informatik angesehen. Er entwickelte das Konzept der Turing-Maschine, eine abstrakte mathematische Vorstellung von einem Universalcomputer. Dieses Konzept legte die Grundlage für moderne Computer und deren Funktionsweise. Das von ihm entwickelte Turing-Test-Konzept hat auch die Künstliche Intelligenz und das Verständnis menschenähnlicher Maschinen beeinflusst. Alan Turing's Arbeit und sein Beitrag zur Entschlüsselung der Enigma-Maschine sind von enormer historischer Bedeutung für die Informatik.

                Weibliche Person: Grace Hopper (1906-1992)

                Kurze biografische Übersicht: Grace Hopper war eine US-amerikanische Informatikerin und Pionierin der Computerwissenschaft. Sie wurde 1906 in New York City geboren. Hopper hatte eine beeindruckende akademische Laufbahn und erhielt einen Doktortitel in Mathematik an der Yale University. Sie trat der US Navy bei und wurde während des Zweiten Weltkriegs zur Programmierung des Mark I-Computers abgestellt. Später arbeitete sie maßgeblich an der Entwicklung des COBOL-Programmierlanguages.

                Bedeutung für die Informatik: Grace Hopper wird oft als "Queen of Code" bezeichnet und ist eine der wichtigsten Figuren in der Geschichte der Informatik. Sie war maßgeblich an der Entwicklung des ersten maschinenunabhängigen Programmierlanguages, COBOL, beteiligt. Dies trug zur Standardisierung von Programmiersprachen bei und ermöglichte es, Software auf verschiedenen Computern auszuführen. Ihr Erbe erstreckt sich auch auf die Idee von Fehlern oder "Bugs" in Software, da sie einmal einen echten Käfer (eine Motte) in einem Computer fand, der Probleme verursachte. Grace Hopper's Arbeit und Engagement in der Informatik haben dazu beigetragen, die moderne Softwareentwicklung zu gestalten und sind bis heute von großer Bedeutung.
            </p>
        </section>
    </main>
    <footer>
        <iframe src="https://www.bernhardbmx.net/footer.html" id="footer" frameborder="0"></iframe>
    </footer>
</body>

</html>