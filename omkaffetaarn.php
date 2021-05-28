<!DOCTYPE html>
<html lang="da">
<head>

    <meta charset="utf-8">

    <title>Dea og Kaffetårn - fra vandtårn til cafe</title>
    <meta name="description" content="I midten af Nykøbing Falster, I bunden af det store gule vandtårn, ligger den lille hyggelige café - KAFFETÅR'N.">

    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Restaurant",
            "image": [
                "https://example.com/photos/1x1/photo.jpg",
                "https://example.com/photos/4x3/photo.jpg",
                "https://example.com/photos/16x9/photo.jpg"
            ],
            "@id": "http://www.example.com/forside",
            "name": "KAFFETÅR'N",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "Hollands Gaard 30",
                "addressLocality": "Nykøbing Falster",
                "postalCode": "4800"
            },
            "url": "http://www.example.com/findvej",
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

    <meta name="robots" content="All">
    <meta name="author" content="Camilla, Sandra, David & Søren.">
    <meta name="copyright" content="Information om copyright">

    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/omkaffetaarn.css" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond&family=Oswald:wght@300;400;500&display=swap" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

<?php include 'nav.php';?>

<main class="omkaffetaarn px-3 py-5 d-flex text-white">

    <div class="omkaffetaarn__card py-3 px-3 container rounded-2 text-white p-lg-5 d-flex flex-column">

        <section class="content d-md-flex flex-md-row mt-3 mb-md-5">

            <div class="col-md-6">
                <img class="image" src="img/Dea.png" alt="">
            </div>

            <div class="time d-flex flex-column col-md-6 align-self-md-center ps-md-3 ps-lg-5">
                <header class="d-flex justify-content-center mt-4 mb-4 mt-md-0">
                    <img class="header__icon align-self-center" src="img/kaffekop-ikon-left.svg" alt="kaffekop ikon">
                    <h1 class="header__text px-2 my-2 text-center">DEA OG KAFFETÅRN</h1>
                    <img class="header__icon align-self-center" src="img/kaffekop-ikon-right.svg" alt="kaffekop ikon">
                </header>

                <p class="text-center mb-4">
                    I midten af Nykøbing Falster, I bunden af det store gule vandtårn, ligger den lille hyggelige café - KAFFETÅR'N.
                    <br><br>
                    Dea Guttman, der har en baggrund indenfor arkæologi og fodpleje, overtog i 2020 caféen og nyder at byde sine gæster velkommen på sit spisested i de hyggelige, rustikke omgivelser.
                    <br><br>
                    Hun var ikke et sekund i tvivl, da hun fik chancen for at overtage caféen.
                    <br><br>
                    “Skal vi ikke tage en kop kaffe?”; det kan betyde en masse siger Dea og smiler stort - Det er det samme smil kunderne bliver mødt af, når de træder ind i caféen. Dea går meget op i det personlige, det rummelige og hjertevarmen.
                    <br><br>
                    Caféen der, med sin runde form, favner gæsterne og med mormorduge, engelske tekopper og de romantiske sofaer og andre genbrugsfund, danner rammen om mange hyggelige snakke og velsmagende retter.
                </p>
            </div>

        </section>

        <div class="text-center">
            <a href="#" class="btn btn-primary me-3">MENU</a>
            <a href="#" class="btn btn-primary ms-3">FIND VEJ</a>
        </div>

    </div>

</main>

<section class="history bg-white px-3 py-5 d-flex">

    <div class="">

    </div>

</section>

<?php include 'footer.php';?>

<script src="script.js"></script>
<script src="https://kit.fontawesome.com/d7a71e7a7e.js" crossorigin="anonymous"></script>

</body>
</html>