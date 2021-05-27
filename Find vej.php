<!DOCTYPE html>
<html lang="da">
<head>

    <meta charset="utf-8">

    <title>Find vej til Kaffetårn - café og spisested, Nykøbing F</title>
    <meta name="description" content="Find vej til Kaffetårn - Hollands Gaard 30, 4800 Nykøbing Falster - Café og spisested.">

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
    <link href="css/findvej.css" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond&family=Oswald:wght@300;400;500&display=swap" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

<?php include 'nav.php';?>

<main class="findvej px-3 py-5 d-flex">

    <div class="pt-3 px-3 container bg-dark rounded-2 text-white p-lg-5">

        <header class="d-flex justify-content-center mb-4">
            <img src="" alt="?">
            <h1 class="px-2 my-2 ">FIND VEJ</h1>
            <img src="" alt="?">
        </header>

        <section class="content d-md-flex flex-md-row mt-3 mb-md-5">

        <div class="map-responsive col-md-7">

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2301.7490425142987!2d11.866003316316903!3d54.76679898030121!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47ad31a0aa869615%3A0x3fccca125a3597fc!2sKaffet%C3%A5r&#39;N!5e0!3m2!1sen!2sdk!4v1622056415202!5m2!1sen!2sdk"></iframe>

        </div>

        <div class="contact d-flex flex-column col-md-5 align-self-md-center ps-md-3 ps-lg-5">
            <header class="d-flex justify-content-center mt-4 mb-2">
                <img src="" alt="?">
                <h1 class="px-2 my-2 ">ADRESSE</h1>
                <img src="" alt="?">
            </header>

            <p class="text-center mb-4">
                Hollands Gaard 30,
                <br>
                4800 Nykøbing F.
            </p>

            <header class="d-flex justify-content-center my-2">
                <img src="" alt="?">
                <h1 class="px-2 my-2 ">KONTAKT</h1>
                <img src="" alt="?">
            </header>

            <p class="text-center mb-4">
                Email:
                <br>
                kaffetaarn@gmail.com
                <br>
                Telefon: 93 94 64 65
            </p>
        </div>

        </section>

        <section class="d-md-flex flex-md-row my-3 mt-lg-3 mb-lg-0">

        <div class="col-md-7">
            <img class="image" src="img/texture-bg.jpg" alt="">
        </div>

        <div class="time d-flex flex-column col-md-5 align-self-md-center ps-md-3 ps-lg-5">
            <header class="d-flex justify-content-center mt-4 mb-2">
                <img src="" alt="?">
                <h1 class="px-2 my-2 ">ÅBNINGSTIDER</h1>
                <img src="" alt="?">
            </header>

            <p class="text-center mb-4">
                Mandag: 11.00-14.00
                <br>
                Tirsdag: 11.00-14.00
                <br>
                Onsdag: 11.00-14.00
                <br>
                Torsdag: 11.00-14.00
                <br>
                Fredag: 11.00-15.30
                <br>
                Lørdag: 10.00-15.00
                <br>
                Søndag: LUKKET
            </p>
        </div>

        </section>

    </div>

</main>

<?php include 'footer.php';?>

<script src="script.js"></script>
<script src="https://kit.fontawesome.com/d7a71e7a7e.js" crossorigin="anonymous"></script>

</body>
</html>
