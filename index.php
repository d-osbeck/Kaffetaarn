<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">

    <title>Kaffetårn - café og spisested, Nykøbing F</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="© Copyright 2021. All Rights Reserved">
    <meta name="description" content="Café og spisested midt i Nykøbing F. Caféen ligger i det gamle vandtårn i Nykøbing F, og er en hyggelige lille cafe og spisested, med massere af charme.">

    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Restaurant",
            "@id": "http://www.farligzebra.dk/kaffetaarn",
            "name": "KAFFETÅR'N",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "Hollands Gaard 30",
                "addressLocality": "Nykøbing Falster",
                "postalCode": "4800"
            },
            "url": "http://farligzebra.dk/kaffetaarn/index.php",
            "telephone": "+4593946454",
            "openingHoursSpecification": [
                {
                    "@type": "OpeningHoursSpecification",
                    "dayOfWeek": [
                        "Mandag",
                        "Tirsdag",
                        "Onsdag",
                        "Torsdag"
                    ],
                    "opens": "11:00",
                    "closes": "14:00"
                },
                {
                    "@type": "OpeningHoursSpecification",
                    "dayOfWeek": [
                        "Fredag"
                    ],
                    "opens": "11:00",
                    "closes": "15:00"
                },
                {
                    "@type": "OpeningHoursSpecification",
                    "dayOfWeek": [
                        "Lørdag"
                    ],
                    "opens": "10:00",
                    "closes": "15:00"
                },
                {
                    "@type": "OpeningHoursSpecification",
                    "dayOfWeek": [
                        "Søndag"
                    ],
                    "opens": "16:00",
                    "closes": "22:00"
                }
            ]
        }
    </script>

    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Jost&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.typekit.net/alv5vit.css">
    <link rel="preload" as="font" href="https://fonts.googleapis.com/css2?family=Jost&display=swap">
    <link rel="preload" as="style" href="css/styles.css">
    <link rel="preload" as="style" href="css/bootstrap.css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body class="bg-background">


<?php include 'includes/nav.php';?>

<section class="top">
    <header>
        <img class="top__logo__tagline align-self-center mb-4" src="img/logo-tagline.svg" alt="logo-tagline">
        <div class="top__btn__wrapper d-flex justify-content-center">
            <a href="#menu" class="mx-1 mx-md-2 mx-xl-3"><div class="button bg-primary text-black fs-4 font-weight-500 rounded py-2 px-4 border-0 py-xl-3 px-xl-5">MENU</div></a>
            <a href="bestilling.php" class="mx-1 mx-md-2 mx-xl-3"><div class="button bg-primary text-black fs-4 font-weight-500 rounded py-2 px-4 border-0 py-xl-3 px-xl-5">BESTIL BORD</div></a>
        </div>
        <div class="arrow bounce">
            <a class="fa fa-arrow-down fa-2x text-white my-5" href="#velkommen"></a>
        </div>
    </header>
    <div class="top__bg__container d-xl-flex">
        <div class="top__bg__img"></div>
        <div class="top__bg__texture"></div>
    </div>
</section>

<section class="velkommen container p-0 mt-5" id="velkommen">
    <div class="velkommen__box__wrapper container bg-white p-5 mb-5 mb-md-0">
        <header class="d-flex justify-content-center mb-4">
            <img class="kaffe-icon align-self-center" src="img/kaffekop-ikon-left.svg" alt="kaffekop ikon" style="width:40px;">
            <h1 class="headline px-2 my-2 text-center">EN UNIK OPLEVELSE</h1>
            <img class="kaffe-icon align-self-center" src="img/kaffekop-ikon-right.svg" alt="kaffekop ikon" style="width:40px;">
        </header>
        <p class="">I hjertet af Nykøbing F. ses det smukke gule vandtårn over byens tage.
            <br><br>
            Sæt dig tilrette i de hyggelige sofaer, nyd en friskbrygget kop kaffe, en lækker kage eller en sandwich, fortrinsvis lavet med lokale og økologiske råvarer.
            <br><br>
            Der er kælet for de hyggelige detaljer,
            hvor end du kigger hen.</p>
    </div>

    <div class="velkommen__img__first mb-2 mb-md-0"></div>

    <div class="velkommen__img__second mb-5 mb-md-0"></div>
</section>

<section class="menu container-fluid py-5" id="menu">
    <div class="menu__container mx-auto bg-dark-gray opacity-90 text-white m-2 py-5 px-3 px-md-5 h-100">
        <img class="menu__logo__tagline align-self-center mb-5" src="img/logo-tagline.svg" alt="logo-tagline">
            <header class="d-flex justify-content-center mb-4">
                <img class="kaffe-icon align-self-center" src="img/kaffekop-ikon-left.svg" alt="kaffekop ikon">
                <h1 class="text-white text-center pt-4 mx-4 display-4">MENU</h1>
                <img class="kaffe-icon align-self-center" src="img/kaffekop-ikon-right.svg" alt="kaffekop ikon">
            </header>

        <div class="container line bg-primary my-4"></div>

        <div class="menu__item__container container px-0 py-4">
            <div class="menu__left__col">

                <h2 class="menu__title__text text-center font-weight-500 fs-1 mb-3">FROKOST</h2>
                <div class="menu__item__wrapper row">
                    <div class="menu__item__left__col col-8">
                        <p class="menu__main__text font-weight-500">Kyllingesandwich</p>
                        <p class="menu__sub__text fst-italic text-off-gray">Økologisk Dalbakkegaard kylling med bacon og soltørrede tomater</p>
                    </div>
                    <div class="menu__item__right__col col text-end pt-md-0">
                        <p class="menu__main__text font-weight-500">65 dkk</p>
                    </div>
                </div>

                <div class="line bg-primary my-4"></div>

                <div class="menu__item__wrapper row">
                    <div class="menu__left__col col-8">
                        <p class="menu__main__text font-weight-500">Pulled-pork sandwich</p>
                        <p class="menu__sub__text fst-italic text-off-gray">Lollandsgris med syltede rødløg</p>
                    </div>
                    <div class="menu__right__col col text-end pt-md-0">
                        <p class="menu__main__text font-weight-500">65 dkk</p>
                    </div>
                </div>

                <div class="line bg-primary my-4"></div>

                <div class="menu__item__wrapper row">
                    <div class="menu__left__col col-8">
                        <p class="menu__main__text font-weight-500">Laksesandwich</p>
                        <p class="menu__sub__text fst-italic text-off-gray">Laks og æble-peberrodssalat</p>
                    </div>
                    <div class="menu__right__col col text-end pt-md-0">
                        <p class="menu__main__text font-weight-500">65 dkk</p>
                    </div>
                </div>

                <div class="line bg-primary my-4"></div>

                <div class="menu__item__wrapper row">
                    <div class="menu__left__col col-8">
                        <p class="menu__main__text font-weight-500">Tunsalatsandwich</p>
                        <p class="menu__sub__text fst-italic text-off-gray">Tun, majs, peberfrugt og kapers</p>
                    </div>
                    <div class="menu__right__col col text-end pt-md-0">
                        <p class="menu__main__text font-weight-500">65 dkk</p>
                    </div>
                </div>

                <div class="line bg-primary my-4"></div>

                <div class="menu__item__wrapper row">
                    <div class="menu__left__col col-8">
                        <p class="menu__main__text font-weight-500">Hummussandwich</p>
                        <p class="menu__sub__text fst-italic text-off-gray">Avocado og soltørrede tomater</p>
                    </div>
                    <div class="menu__right__col col text-end pt-md-0">
                        <p class="menu__main__text font-weight-500">65 dkk</p>
                    </div>
                </div>

                <div class="line bg-primary my-4"></div>

                <div class="menu__item__wrapper row">
                    <div class="menu__left__col col-8">
                        <p class="menu__main__text font-weight-500">Skinkesandwich</p>
                        <p class="menu__sub__text fst-italic text-off-gray">Landskinke og ost</p>
                    </div>
                    <div class="menu__right__col col text-end pt-md-0">
                        <p class="menu__main__text font-weight-500">65 dkk</p>
                    </div>
                </div>

                <div class="line bg-primary my-4"></div>

                <div class="menu__item__wrapper row">
                    <div class="menu__left__col col-8">
                        <p class="menu__main__text font-weight-500">Pølsehorn</p>
                    </div>
                    <div class="menu__right__col col text-end pt-md-0">
                        <p class="menu__main__text font-weight-500">20 dkk</p>
                    </div>
                </div>

                <div class="line bg-primary my-4"></div>

                <div class="menu__item__wrapper row">
                    <div class="menu__left__col col-8">
                        <p class="menu__main__text font-weight-500">Pizzasnegl</p>
                    </div>
                    <div class="menu__right__col col text-end pt-md-0">
                        <p class="menu__main__text font-weight-500">20 dkk</p>
                    </div>
                </div>

                <div class="line bg-primary my-4"></div>

                <h2 class="menu__title__text text-center font-weight-500 fs-1 mt-5 mb-3">SALATER</h2>
                <div class="menu__item__wrapper row">
                    <div class="menu__left__col col-8">
                        <p class="menu__main__text font-weight-500">Lollands quinoa</p>
                        <p class="menu__sub__text fst-italic text-off-gray">Bønner, kål, gulerod, ristede kikærter og mandler</p>
                    </div>
                    <div class="menu__right__col col text-end pt-md-0">
                        <p class="menu__main__text font-weight-500">65 dkk</p>
                    </div>
                </div>

                <div class="line bg-primary my-4"></div>

                <div class="menu__item__wrapper row">
                    <div class="menu__left__col col-8">
                        <p class="menu__main__text font-weight-500">Buddha bowl</p>
                        <p class="menu__sub__text fst-italic text-off-gray">Quinoa og forskelligt grønt</p>
                    </div>
                    <div class="menu__right__col col text-end pt-md-0">
                        <p class="menu__main__text font-weight-500">75 dkk</p>
                    </div>
                </div>

                <div class="line bg-primary my-4"></div>

                <h2 class="menu__title__text text-center font-weight-500 fs-1 mt-5 mb-3">KAGER</h2>
                <div class="menu__item__wrapper row">
                    <div class="menu__left__col col-8">
                        <p class="menu__main__text font-weight-500">Lemon merengue pie</p>
                    </div>
                    <div class="menu__right__col col text-end pt-md-0">
                        <p class="menu__main__text font-weight-500">20 dkk</p>
                    </div>
                </div>

                <div class="line bg-primary my-4"></div>

                <div class="menu__item__wrapper row">
                    <div class="menu__left__col col-8">
                        <p class="menu__main__text font-weight-500">Amerikanske chokolade cookies</p>
                    </div>
                    <div class="menu__right__col col text-end pt-md-0">
                        <p class="menu__main__text font-weight-500">20 dkk</p>
                    </div>
                </div>

                <div class="line bg-primary my-4 "></div>
            </div>


            <div class="menu__right__col p-0">

                <h2 class="menu__title__text text-center font-weight-500 fs-1 mb-3 mt-5 mt-md-0">GLUTENFRI KAGER</h2>
                <div class="menu__item__wrapper row">
                    <div class="menu__left__col col-8">
                        <p class="menu__main__text font-weight-500">Sara Bernard</p>
                    </div>
                    <div class="menu__right__col col text-end pt-md-0">
                        <p class="menu__main__text font-weight-500">15 dkk</p>
                    </div>
                </div>

                <div class="line bg-primary my-4"></div>

                <div class="menu__item__wrapper row">
                    <div class="menu__left__col col-8">
                        <p class="menu__main__text font-weight-500">Florentiner</p>
                    </div>
                    <div class="menu__right__col col text-end pt-md-0">
                        <p class="menu__main__text font-weight-500">20 dkk</p>
                    </div>
                </div>

                <div class="line bg-primary my-4"></div>

                <div class="menu__item__wrapper row">
                    <div class="menu__left__col col-8">
                        <p class="menu__main__text font-weight-500">Fragilité</p>
                    </div>
                    <div class="menu__right__col col text-end pt-md-0">
                        <p class="menu__main__text font-weight-500">15 dkk</p>
                    </div>
                </div>

                <div class="line bg-primary my-4"></div>

                <div class="menu__item__wrapper row">
                    <div class="menu__left__col col-8">
                        <p class="menu__main__text font-weight-500">Hindbærdrøm</p>
                    </div>
                    <div class="menu__right__col col text-end pt-md-0">
                        <p class="menu__main__text font-weight-500">30 dkk</p>
                    </div>
                </div>

                <div class="line bg-primary my-4"></div>

                <div class="menu__item__wrapper row">
                    <div class="menu__left__col col-8">
                        <p class="menu__main__text font-weight-500">Citron fromage</p>
                    </div>
                    <div class="menu__right__col col text-end pt-md-0">
                        <p class="menu__main__text font-weight-500">30 dkk</p>
                    </div>
                </div>

                <div class="line bg-primary my-4"></div>

                <h2 class="menu__title__text text-center font-weight-500 fs-1 mt-5 mb-3">DRIKKE</h2>
                <div class="menu__item__wrapper row">
                    <div class="menu__left__col col-8">
                        <p class="menu__main__text font-weight-500">Økologisk kaffe</p>
                        <p class="menu__sub__text fst-italic text-off-gray">Chai Latte, Espresso, Caffe Latte, Latte Macchiato Cappucino, Café Au Lait, Irish Coffee, Is Kaffe</p>
                    </div>
                    <div class="menu__right__col col text-end pt-md-0">
                        <p class="menu__main__text font-weight-500">35 dkk</p>
                    </div>
                </div>

                <div class="line bg-primary my-4"></div>

                <div class="menu__item__wrapper row">
                    <div class="menu__left__col col-8">
                        <p class="menu__main__text font-weight-500">The</p>
                    </div>
                    <div class="menu__right__col col text-end pt-md-0">
                        <p class="menu__main__text font-weight-500">45 dkk</p>
                    </div>
                </div>

                <div class="line bg-primary my-4"></div>

                <div class="menu__item__wrapper row">
                    <div class="menu__left__col col-8">
                        <p class="menu__main__text font-weight-500">Varm cacao</p>
                    </div>
                    <div class="menu__right__col col text-end pt-md-0">
                        <p class="menu__main__text font-weight-500">45 dkk</p>
                    </div>
                </div>

                <div class="line bg-primary my-4"></div>

                <div class="menu__item__wrapper row">
                    <div class="menu__left__col col-8">
                        <p class="menu__main__text font-weight-500">Sodavand 0,5 L.</p>
                    </div>
                    <div class="menu__right__col col text-end pt-md-0">
                        <p class="menu__main__text font-weight-500">25 dkk</p>
                    </div>
                </div>

                <div class="line bg-primary my-4"></div>

                <div class="menu__item__wrapper row">
                    <div class="menu__left__col col-8">
                        <p class="menu__main__text font-weight-500">Vand 0,5 L.</p>
                    </div>
                    <div class="menu__right__col col text-end pt-md-0">
                        <p class="menu__main__text font-weight-500">20 dkk</p>
                    </div>
                </div>

                <div class="line bg-primary my-4 text-end "></div>

                <div class="menu__item__wrapper row py-5 px-2 px-xl-5 my-5 mx-1 border border-3 border-primary">
                    <div class="menu__left__col col-7">
                        <p class="menu__main__text font-weight-500">Afternoon Tea</p>
                        <p class="menu__sub__text fst-italic text-off-gray">10 delikatesser med fri kaffe/the</p>
                    </div>
                    <div class="menu__right__col col text-end pt-md-0">
                        <p class="menu__main__text font-weight-500">180 dkk</p>
                    </div>
                    <div class="menu__link__wrapper d-flex justify-content-center">
                        <a href="bestilling.php" class="text-white h2 text-decoration-underline pt-4">SE MERE & BESTIL</a>
                    </div>
                </div>

                <p class="text-center fs-4 mt-5">Med jævne mellemrum kommer der nye ting på menuen, følg os på de sociale medier for at vide mere.
                    <br><br>Kontakt os for information om indhold af allergene ingredienser i vores retter.</p>

                <div class="menu__social__wrapper social__icons text-center pt-4">
                    <a href="https://www.facebook.com/kaffetaarn" target="_blank" class="fa-stack fa-2x mx-2"><i class="fas fa-circle fa-stack-2x text-black-50"></i><i class="fab fa-facebook-f fa-stack-1x text-white"></i></a>
                    <a href="https://www.instagram.com/kaffetaarn" target="_blank" class="fa-stack fa-2x mx-2"><i class="fas fa-circle fa-stack-2x text-black-50"></i><i class="fab fa-instagram fa-stack-1x text-white"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="anbefalinger container py-5 px-0">
    <header class="d-flex justify-content-center mx-3">
        <img class="kaffe-icon align-self-center" src="img/kaffekop-ikon-left.svg" alt="kaffekop ikon">
        <h1 class="headline px-4 my-2 text-center">HVAD SIGER KUNDERNE OM OS</h1>
        <img class="kaffe-icon align-self-center" src="img/kaffekop-ikon-right.svg" alt="kaffekop ikon">
    </header>

    <div class="anbefalinger__boxes__container container py-5 d-md-flex">
        <div class="anbefalinger__box__wrapper mb-5 mx-md-3 mx-xl-5">
            <img src="img/anbefaler.svg" alt="anbefaler" class="mb-2">
            <p>"Min veninde og jeg fik den skønneste afternoon tea igår med lækre småretter og masser af te🎉. Det mindede fuldstændig om at være i London igen🎉.
                Vi kommer helt sikkert igen til en hyggestund🌸"</p>
            <div class="line bg-primary my-4"></div>
            <cite>- Jane anbefaler</cite>
        </div>

        <div class="anbefalinger__box__wrapper mb-5 mx-md-3 mx-xl-5">
            <img src="img/anbefaler.svg" alt="anbefaler" class="mb-2">
            <p>Jeg kommer tilbage! I dag besøgte jeg caféen og købte en salat og en sodavand fra Møn 😋 Skøn velsmagende, mættende og nærende salat. Sød, elskværdig og personlig betjening. Stamkunde kunne jeg sagtens blive 👍</p>
            <div class="line bg-primary my-4"></div>
            <cite>- Lise anbefaler</cite>
        </div>

        <div class="anbefalinger__box__wrapper mb-5 mx-md-3 mx-xl-5">
            <img src="img/anbefaler.svg" alt="anbefaler" class="mb-2">
            <p>Fik lækre vegetar sandwich og virkelig god betjening. dejlig med et spisested der lige gør det ekstra, der gør jeg helt sikkert vil komme igen.
                Tak for rigtig god frokost  😍</p>
            <div class="line bg-primary my-4"></div>
            <cite>- Tessa anbefaler</cite>
        </div>
    </div>
    <div class="anbefalinger__link__wrapper d-flex justify-content-center">
    <a href="https://www.facebook.com/kaffetaarn/reviews/?ref=page_internal" target="_blank" class="text-black h2 text-decoration-underline">FLERE ANBEFALINGER</a>
    </div>
</section>

<?php include 'includes/footer.php';?>

<script src="https://kit.fontawesome.com/d7a71e7a7e.js" crossorigin="anonymous"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="js/script.js"></script>

</body>
</html>