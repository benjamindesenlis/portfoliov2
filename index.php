<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Benjamin Desenlis - Développeur web et web mobile - Merignac Gironde</title>
    <link rel="stylesheet" href="assets\style\style.css">
    <link rel="stylesheet" href="assets\style\navigation.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Lato:wght@300&family=Righteous&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Lato:wght@300&family=Righteous&family=Roboto+Mono:ital,wght@1,300&display=swap" rel="stylesheet">

</head>

<body>
    <?php include 'php\include\navigation.php' ?>


    <div class="fullscreen-container">
        <div id="all-pages">
            <section class="page">

                <div class="text-container">
                    <div class="img-container"> <img src="assets\img\dear.jpg" alt=""></div>
                    <div class="content-container">
                        <div class="info-container">
                            <h1>Benjamin Desenlis</h1>
                            <a>Développeur web et web mobile</a> <br>
                            <div class="reseaux">
                                <ul>
                                    <li><img src="assets\img\github.png" alt=""></li>
                                    <li><img src="assets\img\linkedin.png" alt=""></li>
                                    <li><img src="assets\img\twitter.png" alt=""></li>
                                </ul>
                            </div>
                        </div>

                    </div>

                </div>
            </section>
            <section class="page">
                <div class="text-container">
                    <div class="img-container"> <img src="assets\img\coq.jpg" alt=""> </div>
                    <div class="content-container">
                        <div class="info-projet">
                            <h2>Réalisations et projets</h2>
                            <a>Pour voir tous mes projets web</a>
                            <div class="caroudiv">
                                <ul class="carousel">
                                    <li>
                                        <h4>Slide 1</h4>
                                    </li>
                                    <li>
                                        <h4>Slide 2</h4>
                                    </li>
                                    <li>
                                        <h4>Slide 3</h4>
                                    </li>
                                    <li>
                                        <h4>Slide 4</h4>
                                    </li>
                                    <li>
                                        <h4>Slide 5</h4>
                                    </li>
                                    <li>
                                        <h4>Slide 6</h4>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- Slider main container -->


                    </div>
                </div>
            </section>
            <section class="page">
                <div class="text-container">
                    <div class="img-container"> <img src="assets\img\panda.jpg" alt=""> </div>
                    <div class="content-container">
                        <h2>Services</h2>
                        <div class="service-container">
                            <div class="servicedev">
                                <h3>Développement web</h3>
                                <ul class="serv">
                                    <li>Travaux d'intégration</li>
                                    <li>Site vitrine</li>
                                    <li>Site marchand</li>
                                    <li>Portfolio</li>
                                    <li>Campagne de communication numérique</li>
                                </ul>
                            </div>
                            <div class="servicegraphisme">
                                <h3>Design web</h3>
                                <ul class="serv">
                                    <li>Réalisation de maquette et prototype</li>
                                    <li>Création de carte de visite, flyers etc.</li>
                                    <li>Création de clip vidéos/montages</li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
            <section class="page">
                <div class="text-container">
                    <img src="assets\img\ecureil.jpg" alt="">
                </div>
            </section>
        </div>
    </div>



    <?php include 'php\include\scriptscroll.php' ?>

    <?php include 'php\include\scriptnav.php' ?>

    <?php include 'php\include\scriptslide.php' ?>

</body>


</html>