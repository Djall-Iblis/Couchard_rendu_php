<?php
    session_start();

    require "../Autoloader.php";
    Autoloader::register();
 
    require "header.php";

    use App\Sondage;
    $sondages = new Sondage();
?>
<main>
    <section class="all-sondages">
        <h2>Sondages en Cours</h2>
        <?php
            $actSond = $sondages->getActiveSonds();
            foreach ($actSond as $key) {
                echo " <article class='link-container'>
                            <a href='sondPage.php?id=$key->sondage_id'>$key->sondage_title</a>
                            <p>Date de création : $key->creation_date</p>
                        </article>";
            }
        ?>

        <h2>Sondages terminés</h2>

        <?php
            $unSond = $sondages->getInactiveSonds();
            foreach ($unSond as $key) {
                echo " <article class='link-container'>
                            <a href='sondPage.php?id=$key->sondage_id'>$key->sondage_title</a>
                            <p>Date de création : $key->creation_date</p>
                        </article>" ;
            }
        ?>
    </section>

    <section>
        <div id="principal">
                <div class="block" style="background-image: url(../img/Worlds-lol-illustration.jpg);">
                    <a href="pageSondage.php">
                        <div class="text" >
                            Qui gagnera les Worlds League of Legends ?
                        </div>
                    </a>
                </div>
            <div class="block" style="background-image: url(../img/U.S.-Presidential-Election-2020.jpg);">
                <a href="pageSondage.php">
                    <div class="text">
                        Qui sera le nouveau président des Etats-Unis ?
                    </div>
                </a>
            </div>
            <div class="block" style="background-image: url(../img/coronavirus-4957673_1280.webp);">
                <a href="pageSondage.php">
                    <div class="text">
                        Qui gagnera entre le Coronavirus ou l'Humanité ?
                    </div>
                </a>
            </div>
            <div class="block" style="background-image: url(../img/Diablo-IV-image-new-696x344.png);">
                <a href="pageSondage.php">
                    <div class="text">
                        En quelle année sortira Diablo IV ?
                    </div>
                </a>
            </div>
        </div>

    </section>
</main>
    

<?php
require "footer.php";