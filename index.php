<?php
    require('./src/head.php');
    require('./src/header.php');
?>
<main>
    <article>
        <p><?php echo $error_msg; ?></p>
        <?php
            if(!url_check('http://nettom.ddnss.de:80')) {
                echo 'Bitte fahre den Server auf dem der Minecraft Server läuft manuell hoch.';
            } else {
                if(is_checked_in()) { 
        ?>
            <!-- Eingeloggte Nutzer -->
            <section class="authorization">
                <h1> Die LAN Party kann beginnen! </h1>
                <!-- Offline Part -->
                <div class="offline" style="display: none;">
                    <p>Der Server ist momentan offline</p>
                    <form method="post">
                        <button type="submit" name="start_server">Server starten</button>
                    </form>
                </div>

                <!-- Online Part -->
                <div id="console" class="online" style="display: none;">
                    <h2>Befehl an den Server senden:</h2>
                    <form method="post">
                        <input type="text" placeholder="Gebe einen Befehl ein..." name="command">
                        <input type="submit" id="sendcommand" value="Senden">
                    </form>
                    <form method="post">
                        <button type="submit" name="stopp_server">Server stoppen</button>
                    </form>
                    <p id="livelog">
                        <span id="livelog"></span>
                    </p>
                </div>
            </section>
            <?php 
                } else { 
            ?>
            <!-- Nicht eingeloggte Nutzer -->
            <section class="public">
                <!-- Offline Part -->
                <div class="offline" style="display: none;">
                    <p>Der Server ist momentan offline.</p>
                </div>
                <!-- Online Part -->
                <div class="online" style="display: none;">
                    <h1> Die LAN Party kann beginnen! </h1>
                    <p id="livelog">
                        <span id="livelog"></span>
                    </p>
                </div>

            </section>
        <?php 
                }
            } 
        ?>
        <!-- NoInfo Part -->
        <div class="noinfo">
            <p>Bitte warten...</p>
            <noscript>Bitte aktiviere JavaScript in deinem Browser um die Seite Funktionsfähig zu machen.</noscript>
        </div>

        <footer>
            <p>&copy;<?php echo date("Y"); ?> Tom Aschmann</p>
        </footer>
    </article>
    <aside>
        <h3 class="address">Serveradresse</h3>
        <p class="address"><?php echo $host; ?></p>
    </aside>
    <aside>
        <h3>Server Status: </h3>
        <div class="online"></div>
        <span id="serverstatus" class="online"></span>
        <div class="offline"></div>
        <p class="offline">Der Server ist momentan Offline</p>
    </aside>
</main>
<?php
    require('./src/footer.php');
?>
