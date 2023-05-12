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
                    </h3>
                    <h4 class="contactHeader">Openingstijden voor bezoekers</h4>
                    <p>maandag t/m zaterdag: op afspraak<br>zondag: gesloten</p>
                </article>
            </section>
        </main>
        <footer>
            <section id="footerTop">
                <section id="gridPartner">
                    <div class="partnerImg">
                        <img src="images/dierenartsenpraktijk-bommelerwaard.jpg" height="40">
                    </div>
                    <div class="partnerImg">
                        <img src="images/slimkeukens.jpg">
                    </div>
                    <div class="partnerImg">
                        <img src="images/anoniem.jpg">
                    </div>
                </section>
                <section id="gridGoud">
                    <div class="goudImg">
                        <img src="images/avans.png">
                    </div>
                    <div class="goudImg">
                        <img src="images/johnnyjake.jpg">
                    </div>
                </section>
                <section id="gridZilver">
                    <div class="zilverImg">
                        <img src="images/drpet-online.jpg">
                    </div>
                    <div class="zilverImg">
                        <img src="images/linkit.jpg">
                    </div>
                </section>
                <section id="gridBrons">
                    <div class="partnerImg">
                        <img src="images/vepa.png">
                    </div>
                    <div class="partnerImg">
                        <img src="images/owk.jpg">
                    </div>
                    <div class="partnerImg">
                        <img src="images/kroonland.png">
                    </div>
                    <div class="partnerImg">
                        <img src="images/cedos.png">
                    </div>
                </section>
            </section>
            <section id="bottomFooter">
                <div id="left">
                    Volg ons op social media!
                    <
                </div>
                <div id="middle">

                </div>
                <div id="right">
                    
                </div>
            </section>
        </footer>
    </body>
</html>