<?php
    session_start();

    require "../Autoloader.php";
    Autoloader::register();
 
    require "header.php";

    use App\Sondage;
    $sondages = new Sondage();
?>

    <main>
        <div id="troisieme">
            <div class="block2" style="background-image: url(../img/Worlds-lol-illustration.jpg);">
                <div id="question" class="text">
                    Bravo, vous avez fini le questionnaire !
                </div>
            </div>
            <div id="reponses">
                
            </div>

        </div>
    </main>

<?php
require "footer.php";