<!--
    Auteur: Michal Kolasa
    Aanmaakdatum: 26/04/2023 18:27

    Omschrijving: De hoofdpagina van dierentehuis Den Bosch.
-->
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="nl">
    <head>
        <title>
            Home - Dierentehuis Den Bosch
        </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Koppeling CSS -->
        <link rel="stylesheet" href="styles/stylesheet.css">
    </head>
    <body>
    <?php
    include('/inetpub/wwwroot/Praktijk/Thema4/Opdracht/Website/functions/functions.php');
    include("/inetpub/wwwroot/Praktijk/Thema4/Opdracht/Website/includes/nav.php")
    ?>
        <main>
            <header>
                <img src="./images/header.jpg" alt="Header" width="1140px" height="407px" id="headerImg">
            </header>
            <section id="menuButtons">
                <div class="row">
                    <button class="menuBtn">
                        <img src="./images/kat.jpg" alt="Adopteer een kat" class="menuImg circleImg">
                        Adopteer een kat
                    </button>
                    <button class="menuBtn">
                        <img src="./images/hond.jpg" alt="Adopteer een hond" class="menuImg circleImg">
                        Adopteer een hond
                    </button>
                    <button class="menuBtn">
                        <img src="./images/dier_gevonden.jpg" alt="Dier gevonden" class="menuImg circleImg">
                        Dier gevonden
                    </button>
                </div>
                <div class="row">
                    <button class="menuBtn">
                        <img src="./images/steun.svg" alt="Steun ons" class="menuImg">
                        Steun ons
                    </button>
                    <button class="menuBtn">
                        <img src="./images/afstand.svg" alt="Afstand doen huisdier" class="menuImg">
                        Afstand doen huisdier
                    </button>
                    <button class="menuBtn">
                        <img src="./images/vrijwilliger.svg" alt="Vrijwilliger worden" class="menuImg">
                        Vrijwiliger worden
                    </button>
                </div>
            </section>
            <section id="articles">
                <article class="actActl">
                    <h3>Laatste Nieuws</h3>
                    <ul>
                        <li>
                            <a href="https://dierentehuisdenbosch.nl/dinsdag-2-mei-wegwerkzaamheden-maastrichtseweg/">
                                Dinsdag 2 mei: wegwerkzaamheden Maastrichtseweg
                            </a>
                            <br>
                            <span>25-04-2023</span>
                        </li>
                        <li>
                            <a href="https://dierentehuisdenbosch.nl/dierenlot-en-cbf-erkenning/">
                                DierenLot en CBF erkenning
                            </a>
                            <br>
                            <span>16-02-2023</span>
                        </li>
                    </ul>
                </article>
                <article class="actActl">
                    <h3>Spotlight</h3>
                    <h4>Hondenpension</h4>
                    <p>Ons hondenpension is voor de zomer van 2023 vanaf week 29 t/m week 34 volgeboekt. Excuses voor het ongemak!</p>
                </article>
                <article class="actActl">
                    <h3>Contact</h3>
                    <h4 class="contactHeader">Adres</h4>
                    <p>Oosterplasweg 41<br>5215 HT ’s-Hertogenbosch<br>info@dierentehuisdenbosch.nl</p>
                    <h4 class="contactHeader">Telefonisch Bereikbaar</h4>
                    <p>
                        Maandag t/m vrijdag:<br>10:00 – 12:00<br>13:00 – 16:00<br><br>Zaterdag:<br>9:00 – 12:00
                    </p>
                    <h2 class="phoneNum">
                        073 641 24 17
                    </h2>
                    <h4 class="contactHeader">Openingstijden voor bezoekers</h4>
                    <p>maandag t/m zaterdag: op afspraak<br>zondag: gesloten</p>
                </article>
            </section>
        </main>
        <footer>
            <section id="footerTop">
                <h1 id="mainSponsoren">Sponsoren</h1>
                <h2 id="partnerText">Partner</h2>
                <section id="gridPartner">
                    <img src="images/dierenartsenpraktijk-bommelerwaard.jpg" class="partnerImg">
                    <img src="images/slimkeukens.jpg" class="partnerImg">
                    <img src="images/anoniem.jpg" class="partnerImg">
                </section>
                <h2 id="goudText">Goud</h2>
                <section id="gridGoud">
                    <img src="images/avans.png" class="partnerImg">
                    <img src="images/johnnyjake.jpg" class="partnerImg">
                </section>
                <h2 id="zilverText">Zilver</h2>
                <section id="gridZilver">
                        <img src="images/drpet-online.jpg" class="partnerImg">
                        <img src="images/linkit.jpg" class="partnerImg">
                </section>
                <h2 id="bronsText">Brons</h2>
                <section id="gridBrons">
                        <img src="images/vepa.png" class="partnerImg">
                        <img src="images/owk.jpg" class="partnerImg">
                        <img src="images/kroonland.png" class="partnerImg">
                        <img src="images/cedos.jpg" class="partnerImg">
                </section>
            </section>
            <section id="bottomFooter">
                <div id="bottomFooterLeft">
                    <p>Volg ons op social media</p>
                </div>
                <div id="bottomFooterMiddle">

                </div>
                <div id="bottomFooterRight">
                    
                </div>
            </section>
        </footer>
    </body>
</html>