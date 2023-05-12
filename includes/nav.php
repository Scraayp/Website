<nav>
    <a href="/Praktijk/Thema4/Opdracht/Website/index.php">
        <img src="/Praktijk/Thema4/Opdracht/Website/images/nav-logo.svg"id="navLogo">
    </a>
    <button id="doneerKnop">
        Doneer
    </button>
    <section id="navmenu">
        <ul class="nav-links">
            <li><a href="#">Over Ons</a></li>
            <li><a href="#">Dier gevonden</a></li>
            <li><a href="#">Onze dieren</a></li>
            <li><a href="#">Afstand doen</a></li>
            <li><a href="#">Steun ons</a></li>
            <li><a href="#">Vrijwilligerswerk</a></li>
            <li><a href="#">Hodenpension & Opvang</a></li>
            <?php
                if(alreadyLogin()){
                     echo '<li><a href="/Praktijk/Thema4/Opdracht/Website/pages/info.php">Medewerkers</a></li>';
                }else {
                    echo '<li><a href="/Praktijk/Thema4/Opdracht/Website/pages/login.php">Login</a></li>';
                }
            ?>
        </ul>
    </section>
</nav>