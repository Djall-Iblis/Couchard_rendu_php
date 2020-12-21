    <footer>
    <?php
        if (!empty($_SESSION['user'])) {

            echo "<ul>
                        <li><a class='ongletNav' href='mySonds.php'>Mes sondages créés</a></li>
                        <li><a class='ongletNav' href='participate.php'>Mes participations</a></li>
                    </ul>";
        }
        ?>

        <ul>
            <li><a class="ongletNav" href="">Contacts</a></li>
            <li><a class="ongletNav" href="">Qui sommes-nous ?</a></li>
        </ul>
    </footer>
    <script src="../js/login.js"></script>
    <script src="../js/sondage.js"></script>
    <script src="../js/friends.js"></script>
    <script src="../js/search.js"></script>
    <script src="../js/main.js"></script>
</body>
</html>