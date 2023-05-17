<footer>
    <section id="footerTop">
        <h1 id="mainSponsoren">Sponsoren</h1>
        <h2 id="partnerText">Partner</h2>
        <section id="gridPartner">
            <img src="../images/dierenartsenpraktijk-bommelerwaard.jpg" class="partnerImg">
            <img src="../images/slimkeukens.jpg" class="partnerImg">
            <img src="../images/anoniem.jpg" class="partnerImg">
        </section>
        <h2 id="goudText">Goud</h2>
        <section id="gridGoud">
            <img src="../images/avans.png" class="partnerImg">
            <img src="../images/johnnyjake.jpg" class="partnerImg">
        </section>
        <h2 id="zilverText">Zilver</h2>
        <section id="gridZilver">
            <img src="../images/drpet-online.jpg" class="partnerImg">
            <img src="../images/linkit.jpg" class="partnerImg">
        </section>
        <h2 id="bronsText">Brons</h2>
        <section id="gridBrons">
            <img src="../images/vepa.png" class="partnerImg">
            <img src="../images/owk.jpg" class="partnerImg">
            <img src="../images/kroonland.png" class="partnerImg">
            <img src="../images/cedos.jpg" class="partnerImg">
        </section>
    </section>
    <section id="bottomFooter">
        <div id="bottomFooterLeft">
            <p>Volg ons op social media</p>
            <img src="../images/youtube.png" class="socialMedia">
            <img src="../images/instagram.png" class="socialMedia">
            <img src="../images/facebook.png" class="socialMedia">
        </div>
        <div id="bottomFooterMiddle">
            <img src="../images/dierenlot.jpg">
            <img src="../images/cbf.png">
            <img src="../images/anbi.svg">
            <?php
            if(alreadyLogin() == true)
            {
                echo '<p>Ingelogd als: ' . strtolower($_SESSION["user"]) . '</p>';
                echo '<a id="uitLogBut" href="../index.php?logout=true">Log Uit</a>';
            }
            else if(alreadyLogin() == false)
            {
                echo '<p>Niet ingelogd!</p>';
            }
            else
            {
                echo '<p>Inlog onbekend</p>';
            }
            ?>
        </div>
        <div id="bottomFooterRight">
            <a href="#">Contact</a>
            <br>
            <a href="#">Cookiebeleid (EU)</a>
        </div>
    </section>
</footer>