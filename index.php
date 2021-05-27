<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">

    <title>Sigende titel</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond&family=Oswald:wght@300;400;500&display=swap" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>


<?php include 'nav.php';?>

<section class="top">
    <header>
        <h1 class="top__header text-white py-2 px-md-5">KAFFETÅR'N</h1>
        <div class="top__btn__wrapper text-center">
            <a href=""><button class="bg-primary text-dark font-weight-500 rounded py-2 px-4 mx-1 border-0 py-xl-3 px-xl-5 mx-xl-3">MENU</button></a>
            <a href=""><button class="bg-primary text-dark font-weight-500 rounded py-2 px-4 mx-1 border-0 py-xl-3 px-xl-5 mx-xl-3">BESTIL BORD</button></a>
        </div>
    </header>
    <div class="top__bg__container d-xl-flex">
        <div class="top__bg__img bg-danger"></div>
        <div class="top__bg__texture"></div>
    </div>
</section>

<section class="velkommen container-fluid p-0">
    <div class="velkommen__box__wrapper container bg-white p-5 mb-5">
        <header class="d-flex justify-content-center">
            <img src="" alt="?">
            <h1 class="px-2 mb-4 text-center font-weight-500">EN UNIK OPLEVELSE</h1>
            <img src="" alt="?">
        </header>
        <p class="">I hjertet af Nykøbing F. tårner det gule vandtårn sig op over byens tage.
            <br><br>
            Sæt dig tilrette i de hyggelige sofaer, nyd en friskbrygget kop kaffe, en lækker kage eller en sandwich, fortrinsvis lavet med lokale og økologiske råvarer.
            <br><br>
            Der er kælet for de hyggelige detaljer,
            hvor end du kigger hen.</p>
    </div>

    <div class="velkommen__img__wrapper container-fluid p-0 mb-5">
        <div class="velkommen__img__first w-100 bg-dark mb-2"></div>
        <div class="velkommen__img__second w-100 bg-danger mb-5"></div>
    </div>
</section>

<section class="menu container-fluid bg-danger h-auto p-3">
    <div class="menu__container bg-white m-2 py-5 px-3 h-100">
        <h1 class="text-center">MENU</h1>
        <div class="title__line my-4"></div>

        <div class="menu__item__container">

            <h2 class="text-center fw-normal mb-3">FROKOST</h2>
            <div class="menu__item__wrapper row">
                <div class="menu__left__col col-8">
                    <p class="fw-bold fs-5">Kyllingesandwich</p>
                    <p class="fst-italic">Økologisk Dalbakkegaard kylling med bacon og soltørrede tomater</p>
                </div>
                <div class="menu__right__col col text-end">
                    <p class="fw-bold fs-5">65 dkk</p>
                </div>
            </div>

            <div class="line my-4"></div>

            <div class="menu__item__wrapper row">
                <div class="menu__left__col col-8">
                    <p class="fw-bold fs-5">Pulled-pork sandwich</p>
                    <p class="fst-italic">Lollandsgris med syltede rødløg</p>
                </div>
                <div class="menu__right__col col text-end">
                    <p class="fw-bold fs-5">65 dkk</p>
                </div>
            </div>

            <div class="line my-4"></div>

            <div class="menu__item__wrapper row">
                <div class="menu__left__col col-8">
                    <p class="fw-bold fs-5">Laksesandwich</p>
                    <p class="fst-italic">Med æble-peberrodssalat</p>
                </div>
                <div class="menu__right__col col text-end">
                    <p class="fw-bold fs-5">65 dkk</p>
                </div>
            </div>

            <div class="line my-4"></div>

            <div class="menu__item__wrapper row">
                <div class="menu__left__col col-8">
                    <p class="fw-bold fs-5">Tunsalatsandwich</p>
                    <p class="fst-italic">Med majs, peberfrugt og kapers</p>
                </div>
                <div class="menu__right__col col text-end">
                    <p class="fw-bold fs-5">65 dkk</p>
                </div>
            </div>

            <div class="line my-4"></div>

            <div class="menu__item__wrapper row">
                <div class="menu__left__col col-8">
                    <p class="fw-bold fs-5">Hummussandwich</p>
                    <p class="fst-italic">Med avocado og soltørrede tomater</p>
                </div>
                <div class="menu__right__col col text-end">
                    <p class="fw-bold fs-5">65 dkk</p>
                </div>
            </div>

            <div class="line my-4"></div>

            <div class="menu__item__wrapper row">
                <div class="menu__left__col col-8">
                    <p class="fw-bold fs-5">Skinkesandwich</p>
                    <p class="fst-italic">Med landskinke og ost</p>
                </div>
                <div class="menu__right__col col text-end">
                    <p class="fw-bold fs-5">65 dkk</p>
                </div>
            </div>

            <h2 class="text-center fw-normal mt-5 mb-3">KAGER</h2>
            <div class="menu__item__wrapper row">
                <div class="menu__left__col col-8">
                    <p class="fw-bold fs-5">Lemon merengue pie</p>
                </div>
                <div class="menu__right__col col text-end">
                    <p class="fw-bold fs-5">20 dkk</p>
                </div>
            </div>

            <div class="line my-4"></div>

            <div class="menu__item__wrapper row">
                <div class="menu__left__col col-8">
                    <p class="fw-bold fs-5">Amerikanske chokolade cookies</p>
                </div>
                <div class="menu__right__col col text-end">
                    <p class="fw-bold fs-5">20 dkk</p>
                </div>
            </div>

            <div class="line my-4"></div>

            <div class="menu__item__wrapper row">
                <div class="menu__left__col col-8">
                    <p class="fw-bold fs-5">Sara Bernard</p>
                    <p class="fst-italic">Glutenfri</p>
                </div>
                <div class="menu__right__col col text-end">
                    <p class="fw-bold fs-5">15 dkk</p>
                </div>
            </div>

            <div class="line my-4"></div>

            <div class="menu__item__wrapper row">
                <div class="menu__left__col col-8">
                    <p class="fw-bold fs-5">Florentiner</p>
                    <p class="fst-italic">Glutenfri</p>
                </div>
                <div class="menu__right__col col text-end">
                    <p class="fw-bold fs-5">20 dkk</p>
                </div>
            </div>

            <div class="line my-4"></div>

            <div class="menu__item__wrapper row">
                <div class="menu__left__col col-8">
                    <p class="fw-bold fs-5">Fragilite</p>
                    <p class="fst-italic">Glutenfri</p>
                </div>
                <div class="menu__right__col col text-end">
                    <p class="fw-bold fs-5">15 dkk</p>
                </div>
            </div>

            <div class="line my-4"></div>

            <div class="menu__item__wrapper row">
                <div class="menu__left__col col-8">
                    <p class="fw-bold fs-5">Hindbærdrøm</p>
                    <p class="fst-italic">Glutenfri</p>
                </div>
                <div class="menu__right__col col text-end">
                    <p class="fw-bold fs-5">30 dkk</p>
                </div>
            </div>

            <div class="line my-4"></div>

            <div class="menu__item__wrapper row">
                <div class="menu__left__col col-8">
                    <p class="fw-bold fs-5">Citron fromage</p>
                    <p class="fst-italic">Glutenfri</p>
                </div>
                <div class="menu__right__col col text-end">
                    <p class="fw-bold fs-5">30 dkk</p>
                </div>
            </div>

            <h2 class="text-center fw-normal mt-5 mb-3">DRIKKE</h2>
            <div class="menu__item__wrapper row">
                <div class="menu__left__col col-8">
                    <p class="fw-bold fs-5">Kaffe</p>
                    <p class="fst-italic">Diverse kaffe</p>
                </div>
                <div class="menu__right__col col text-end">
                    <p class="fw-bold fs-5">35 dkk</p>
                </div>
            </div>

            <div class="line my-4"></div>

            <div class="menu__item__wrapper row">
                <div class="menu__left__col col-8">
                    <p class="fw-bold fs-5">The</p>
                </div>
                <div class="menu__right__col col text-end">
                    <p class="fw-bold fs-5">45 dkk</p>
                </div>
            </div>

            <div class="line my-4"></div>

            <div class="menu__item__wrapper row">
                <div class="menu__left__col col-8">
                    <p class="fw-bold fs-5">Varm cacao</p>
                </div>
                <div class="menu__right__col col text-end">
                    <p class="fw-bold fs-5">45 dkk</p>
                </div>
            </div>

            <div class="line my-4"></div>

            <div class="menu__item__wrapper row">
                <div class="menu__left__col col-8">
                    <p class="fw-bold fs-5">Sodavand</p>
                </div>
                <div class="menu__right__col col text-end">
                    <p class="fw-bold fs-5">25 dkk</p>
                </div>
            </div>

            <div class="line my-4"></div>

            <div class="menu__item__wrapper row">
                <div class="menu__left__col col-8">
                    <p class="fw-bold fs-5">Vand</p>
                </div>
                <div class="menu__right__col col text-end">
                    <p class="fw-bold fs-5">20 dkk</p>
                </div>
            </div>
        </div>

        <a href="#"><h2 class="text-center text-decoration-underline mt-5 text-dark fw-normal">SE MERE</h2></a>
    </div>

</section>

<section class="anbefalinger container py-5">
    <header class="d-flex justify-content-center">
        <img src="" alt="?">
        <h1 class="text-center">HVAD VORES KUNDER SIGER OM OS!</h1>
        <img src="" alt="?">
    </header>

    <div class="anbefalinger__boxes__container py-5">
        <div class="anbefalinger__box__wrapper mb-5">
            <img src="img/anbefaler.svg" alt="anbefaler" class="mb-2">
            <p>"Min veninde og jeg fik den skønneste afternoon tea igår med lækre småretter og masser af te🎉. Det mindede fuldstændig om at være i London igen🎉.
                Vi kommer helt sikkert igen til en hyggestund🌸"</p>
            <div class="line my-4"></div>
            <cite>- Jane anbefaler</cite>
        </div>

        <div class="anbefalinger__box__wrapper mb-5">
            <img src="img/anbefaler.svg" alt="anbefaler" class="mb-2">
            <p>Jeg kommer tilbage! I dag besøgte jeg caféen og købte en salat og en sodavand fra Møn 😋 Skøn velsmagende, mættende og nærende salat. Sød, elskværdig og personlig betjening. Stamkunde kunne jeg sagtens blive 👍</p>
            <div class="line my-4"></div>
            <cite>- Lise anbefaler</cite>
        </div>

        <div class="anbefalinger__box__wrapper mb-5">
            <img src="img/anbefaler.svg" alt="anbefaler" class="mb-2">
            <p>Fik lækre vegetar sandwich og virkelig god betjening. dejlig med et spisested der lige gør det ekstra, der gør jeg helt sikkert vil komme igen.
                Tak for rigtig god frokost  😍</p>
            <div class="line my-4"></div>
            <cite>- Tessa anbefaler</cite>
        </div>
    </div>
</section>

<?php include 'footer.php';?>

<script src="https://kit.fontawesome.com/d7a71e7a7e.js" crossorigin="anonymous"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="script.js"></script>

</body>
</html>