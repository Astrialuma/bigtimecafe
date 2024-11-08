<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Big Time Café</title>

    <?php include("./public/patterns/imports.php") ?>

    <link rel="stylesheet" href="/public/css/index.css" />
    <link rel="stylesheet" href="/public/css/homepage.css" />
    <script src="/public/js/homepage.js"></script>

</head>
<body>
    <?php include("./public/patterns/header.php") ?>

    <main>
        
    <!--
        <section class="main_news">
            <div class="content">
                <div>
                    <h1>Wichtige Info!</h1>

                    <p>

                            Hallo liebe Gäste,
                            <br><br>

                            seit zwei Monaten hat das Café Big Time geöffnet, und wir freuen uns sehr, immer mehr Fans zu gewinnen. Das bestätigt uns, dass wir auf dem richtigen Weg sind.
                            <br><br>

                            Leider müssen wir euch mitteilen, dass wir aufgrund von Betriebsferien schließen werden.
                            <br><br>

                            Vom 8. Oktober bis zum 29. Oktober bleibt das Café geschlossen. 
                            <br><br>

                            Am 16. Oktober machen wir allerdings eine Ausnahme, denn Fenija, die Zöliakie hat, möchte ihren Geburtstag bei uns feiern und nimmt dafür eine lange Reise auf sich. Wir feiern natürlich mit! Wenn ihr Lust habt, seid ihr herzlich eingeladen, an diesem Tag vorbeizuschauen.
                            <br><br>

                            Ab dem 29. Oktober sind wir wieder wie gewohnt für euch da und freuen uns sehr, euch begrüßen zu dürfen!
                            <br><br>

                            Während unserer Reise durch Frankreich werden wir versuchen, uns von unseren Kollegen inspirieren zu lassen, um neue Ideen für unsere Crêpes zu sammeln. Freut euch schon auf die französischen Wochen im Big Time Café!
                            <br><br>

                            Vielen Dank für eure großartigen Rückmeldungen - sie bedeuten uns viel und helfen uns, uns stetig zu verbessern. Wir freuen uns auf ein baldiges Wiedersehen im Big Time Café!
                            <br><br>

                            Herzliche Grüße,<br>
                            Euer Team vom Big Time Café
                            <br><br>


                            Ab dem 29.10 unsere Öffnungszeiten:
                            <br><br>

                            Dienstag bis Samstag <br>
                            12:00 - 18:30
                    </p>
                    
                </div>
                <div>
                    <img src="/public/images/wichtig.jpg" alt="">

                </div>
            </div>
        </section>
-->

        <section class="welcome">
            <div class="content">
                <div class="text">
                    <h1>Big Time Café</h1>
                    <p>Willkommen im Big Time Café! Hier erwarten Sie köstliche, handgemachte Speisen und eine entspannte Atmosphäre. Genießen Sie unsere ausgewählten Kaffeevariationen, glutenfreien Crêpes und vieles mehr. Lassen Sie sich verwöhnen und machen Sie Ihren Besuch bei uns zu einer genussvollen Auszeit.</p>
                    <button onclick="move();window.location.replace('/speisekarte')">Speisekarte anzeigen</button>
                </div>
                <div>
                    <img src="/public/images/innenraum.png" alt="">
                </div>
            </div>
        </section>
        
        <section class="coffee">
            <div class="content">
                <img src="/public/images/coffee.jpg" alt="">
                <div class="text">
                    <h1>Kaffee</h1>
                    <p>Im Big Time Café legen wir großen Wert auf Qualität und Geschmack. Unser Kaffee wird aus sorgfältig ausgewählten Bohnen frisch für Sie zubereitet, um das volle Aroma und die perfekte Balance von Stärke und Milde zu erreichen. Egal, ob Sie einen kräftigen Espresso oder einen samtigen Latte Macchiato genießen möchten – bei uns wird jeder Schluck zu einem besonderen Genuss.</p>
                </div>
            </div>
        </section>
        
        <section class="crepes">
            <div class="content">
                <img src="/public/images/crepe1.png" alt="">
                <div class="text">
                    <div class="crepestext">
                        <h3>Von Madagaskar bis Athen</h3>
                        <h1>Glutenfreie Crêpes</h1>
                        <p>Unsere Crêpes sind dünn, zart und immer frisch zubereitet. Ob süß mit Schokolade und Früchten oder herzhaft mit Käse und Gemüse – jede Crêpe wird mit Liebe und Sorgfalt handgemacht und ist dabei glutenfrei. Entdecken Sie den puren Genuss in jeder Biss!</p>
                        <!-- <button onclick="move();window.location.replace('/galerie')">Galerie ansehen</button> -->
                    </div>
                </div>

            </div>
            
        </section>

        <section class="coffee">
            <div class="content">
                <div class="kj">
                    <h1>Öffnungszeiten & Anfahrt</h1>
                    <p>Öffnungszeiten: Di-Sa 12:00-18:30</p>    
                    <p>Sie finden uns direkt gegenüber der Kreuzeskirche am Weberplatz.</p>
                    <p>
                        I. Weberstraße 12 <br>
                        45127 Essen
                    </p>
                    <button style="color: black; background: rgba(0,0,0,0.02)" onclick="move();window.location.replace('https://www.google.com/maps/place/BigTime+Cafe/@51.4590893,7.0083829,17z/data=!3m1!4b1!4m6!3m5!1s0x47b8c36ac9133c13:0xedd0cee0d33f57d4!8m2!3d51.459086!4d7.0109632!16s%2Fg%2F11w4477dxk?entry=ttu')">Wegbeschreibung</button>
                </div>
                <div>
                    <img style="cursor: pointer" src="/public/images/maps.png" alt="" onclick="move();window.location.replace('https://www.google.com/maps/place/BigTime+Cafe/@51.4590893,7.0083829,17z/data=!3m1!4b1!4m6!3m5!1s0x47b8c36ac9133c13:0xedd0cee0d33f57d4!8m2!3d51.459086!4d7.0109632!16s%2Fg%2F11w4477dxk?entry=ttu')">
                </div>
            </div>
        </section>

    </main>

    <?php include("./public/patterns/footer.php") ?>
</body>
</html>
