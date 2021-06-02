<!DOCTYPE html>

<html lang="da">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">


    <title>Afternoon Tea, bestil bord - Kaffetårn</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="© Copyright 2021. All Rights Reserved">
    <meta name="description" content="Bestil bord til Afternoon Tea på cafe og spisested, Kaffetårn, i Nykøbing F. Så du sikret en hyggelig Afternoon.">

    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/bestilling.css" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Jost&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.typekit.net/alv5vit.css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

<?php include 'includes/nav.php';?>

<main class="bestilling container-fluid bg-danger py-5">
    <div class="bestilling__card bg-dark-gray opacity-90 py-5 px-3 container rounded-2 text-white p-lg-5 h-100">
        <section class="bestilling__content">

            <div class="bestilling__img">
                <img src="img/kager.png" alt="kager">
            </div>

            <div class="bestilling__header__wrapper d-md-flex justify-content-center flex-column p-md-3 mx-lg-3 mx-xxl-0 p-xxl-5">
                <header class="bestilling__header d-flex justify-content-center mt-4 mb-4">
                    <img class="header__icon align-self-center" src="img/kaffekop-ikon-left.svg" alt="kaffekop ikon" style="width:40px;">
                    <h1 class="headline text-white px-2 my-2">BESTIL BORD</h1>
                    <img class="header__icon align-self-center" src="img/kaffekop-ikon-right.svg" alt="kaffekop ikon" style="width:40px;">
                </header>

                <p> Her på siden kan du bestille bord eller booke afternoon tea til dig og dine kære.<br><br>
                    Se mere info om Afternoon Tea nedenfor.
                </p>
            </div>

            <div class="bestilling__header__tea__wrapper d-md-flex justify-content-center flex-column p-md-3 mx-lg-3 mx-xxl-0 p-xxl-5">
            <header class="bestilling__header d-flex justify-content-center mt-4 mb-4">
                <img class="header__icon align-self-center" src="img/kaffekop-ikon-left.svg" alt="kaffekop ikon" style="width:40px;">
                <h1 class="headline text-white px-2 my-2">AFTERNOON TEA</h1>
                <img class="header__icon align-self-center" src="img/kaffekop-ikon-right.svg" alt="kaffekop ikon" style="width:40px;">
            </header>

            <p>Vores afternoon Tea består af 10 lækre delikatesser inkl. fri kaffe/te. I kan blive siddende lige så længe I har lyst, i vores hyggelige omgivelser. <br><br>
                Pris pr. person 180 kr (min. 2 personer) <br><br>
                Afternoon Tea skal bookes mindst 3 dage før her på siden, eller ring på tlf.: <a class="link__text" href="tel:+4593946465">+45 93 94 64 65</a>
            </p>
            </div>
            <form class="bestilling__formular my-4">

                <div class="bestilling__row">
                    <div class="bestilling__form__item mb-4 mb-md-3 px-md-2 mx-lg-3 mx-xxl-0 px-xxl-5">
                    <label for="personer" class="form-label">Antal personer</label>
                    <select class="form-select mb-4">
                        <option selected value="2">2 personer</option>
                        <option value="3">3 personer</option>
                        <option value="4">4 personer</option>
                        <option value="5">5 personer</option>
                        <option value="6">6 personer</option>
                    </select>
                    </div>

                    <div class="bestilling__form__item mb-4 mb-md-3 px-md-2 mx-lg-3 mx-xxl-0 px-xxl-5">
                    <label for="dato" class="form-label">Dato</label>
                    <input type="date" id="dato" class="form-control picker-input mb-4">
                    </div>
                </div>

                <div class="bestilling__row">
                    <div class="bestilling__form__item mb-4 mb-md-3 px-md-2 mx-lg-3 mx-xxl-0 px-xxl-5">
                    <label for="tid" class="form-label">Tidspunkt</label>
                    <input type="text" id="tid" class="form-control timepicker-input mb-4" placeholder="12.00">
                    </div>


                    <div class="bestilling__form__item mb-4 mb-md-3 px-md-2 mx-lg-3 mx-xxl-0 px-xxl-5">
                    <label for="navn" class="form-label">Navn</label>
                    <input type="text" id="navn" class="form-control mb-4">
                    </div>

                </div>

                <div class="bestilling__row">
                    <div class="bestilling__form__item mb-4 mb-md-3 px-md-2 mx-lg-3 mx-xxl-0 px-xxl-5">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" id="email" class="form-control mb-4">
                    </div>

                    <div class="bestilling__form__item mb-4 mb-md-3 px-md-2 mx-lg-3 mx-xxl-0 px-xxl-5">
                    <label for="telefon" class="form-label">Telefon</label>
                    <input type="tel" id="telefon" class="form-control">
                    </div>
                </div>

                <div class="bestilling__row">
                    <div class="bestilling__form__item mb-4 mb-md-3 px-md-2 mx-lg-3 mx-xxl-0 px-xxl-5">
                        <label for="bemærkning" class="form-label">Bemærkning</label>
                        <textarea id="bemærkning" rows="4" class="form-control w-75 mb-3"></textarea>
                    </div>
                </div>

                <a href=""><button class="bg-primary text-black font-weight-500 fs-5 rounded py-2 px-5 border-0 py-xl-3 mx-md-5">BESTIL</button></a>
            </form>
        </section>
    </div>
</main>

<?php include 'includes/footer.php';?>

<script src="https://kit.fontawesome.com/d7a71e7a7e.js" crossorigin="anonymous"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="js/script.js"></script>

</body>
</html>