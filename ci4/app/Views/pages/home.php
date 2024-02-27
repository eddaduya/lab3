<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elys</title>
    <link rel="stylesheet" href="./css/styles.css">
    <script src="./js/script.js" defer></script>
</head>
<body>
    <section class="hero">
        <div class="svt-pic">
            <p class="fav-word">기억해 언제나 우린 함께라는 걸</p>
        </div>
        <div class="profile">
            <img src="./images/elys.png" alt="elys picture">
        </div>
        <div class="name-container">
            <div>
                <h2 class="my-name jost">Erika Daduya <em>!</em></h2>
                <p class="username inter">@elysdaduya</p>
            </div>
        </div>
    </section>
    <section class="about-me">
        <div class="description">
            <p class="my-name jost">Erika Daduya <em>!</em></p>
            <p class="intro inter">You can call me <b>Elys</b>. I am currently 20 years old.</p>
        </div>
        <div class="card-container">
            <div class="card">
                <h2 class="jost card-title">interest <em>!</em></h2>
                <hr>
                <p class="inter"><b>games:</b> VALORANT</p>
                <p class="inter"><b>music:</b> kpop, alt R&B, pop</p>
                <p class="inter"><b>hobbies:</b> watch YT and reels, play games, read</p>
                <div class="img-row">
                    <p class="footer">* hover images</p>
                    <img src="./images/VALORANT.png" alt="VALORANT">
                    <img src="./images/svt.jpg" alt="seventeen">
                    <img src="./images/niki.jpg" alt="NIKI">
                    <img src="./images/tswift.jpg" alt="taylor swift">
                </div>
            </div>
            <div class="card">
                <h2 class="jost card-title">facts <em>!</em></h2>
                <hr>
                <p class="inter"><b>likes:</b> mint choco, matcha, coffee, skies, pastel colors, cute stuff</p>
                <p class="inter"><b>pets:</b> Trini and Panini</p>
                <div class="img-row">
                    <p class="footer">* hover images</p>
                    <img src="./images/trini.jpg" alt="Trini">
                    <img src="./images/panini.jpg" alt="Panini">
                </div>
            </div>
            <div class="card">
                <h2 class="jost card-title">contacts <em>!</em></h2>
                <hr>
                <p class="inter"><b>email:</b> elysdads@gmail.com</p>
                <p class="inter"><b>contact no.:</b> 09326091141</p>
                <div class="icons">
                    <img src="./images/github.png" alt="github">
                    <img src="./images/instagram.png" alt="instagram">
                    <img src="./images/facebook.png" alt="facebook">
                </div>
            </div>
        </div>
    </section>
    <section class="education">
        <h2 class="jost">education <em>!</em></h2>
        <div>
            <img src="./images/schools.png" alt="schools">
        </div>
    </section>
    <section class="experience">
        <div>
            <h2 class="jost">experience <em>!</em></h2>
            <div class="prog-lang">
                <button onclick="goLeft()">
                    <svg width="38" height="66" viewBox="0 0 38 66" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M33 61L5 33L33 5" stroke="#8AFFB2" stroke-width="10" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
                <div class="carousel">
                    <div class="images">
                        <img src="./images/html.png" alt="html description">
                    </div>
                    <div class="images">
                        <img src="./images/css.png" alt="css description">
                    </div>
                    <div class="images">
                        <img src="./images/js.png" alt="js description">
                    </div>
                    <div class="images">
                        <img src="./images/python.png" alt="python description">
                    </div>
                    <div class="images">
                        <img src="./images/java.png" alt="java description">
                    </div>
                    <div class="images">
                        <img src="./images/php.png" alt="php description">
                    </div>
                </div>
                <button onclick="goRight()">
                    <svg width="38" height="66" viewBox="0 0 38 66" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5 61L33 33L5 5" stroke="#8AFFB2" stroke-width="10" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
            </div>
        </div>
    </section>
</body>
</html>