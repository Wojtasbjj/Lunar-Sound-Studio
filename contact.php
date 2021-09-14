<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-198794466-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-198794466-1');
</script>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lunar Sound Studio</title>
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/style.css">
    <?php wp_head(); ?>
</head>
<body>
    <section class="navigation">
        <div class="container">
            <div class="open-navi">
                <img id="nav-cta" class="open-nav-btn" src="wp-content/themes/lunartheme/assets/menu.svg" alt="Open navigation">
            </div>
            <nav id="navigation">
                <div class="exit-nav-btn">
                <img id="exit-nav" src="wp-content/themes/lunartheme/assets/exit.svg" alt="exit navigation">
                </div>
                <ul class="left-nav">
                    <li><a href="#about-us" id="mobile-cta">O nas</a></li>
                    <li><a href="#services" id="mobile-cta">Usługi</a></li>
                    <li><a href="#prices" id="mobile-cta">Cennik</a></li>
                </ul>
                <a href="#"><img id="logo" class="hide-logo" src="wp-content/themes/lunartheme/assets/logo.png" alt="Logo Lunar Sound Studio"></a>
                <ul class="right-nav">
                    <li><a href="https://www.lunarsoundstudio.pl/sprzet/#post" id="mobile-cta">Sprzęt</a></li>
                    <li><a href="https://www.lunarsoundstudio.pl/galeria/#post" id="mobile-cta">Galeria</a></li>
                    <li><a href="#contact" id="mobile-cta">Kontakt</a></li>
                </ul>
                <div class="socials">
                    <a href="https://www.instagram.com/lunarsoundstudio/" target="_blank"><img src="wp-content/themes/lunartheme/assets/socials//ig.svg" alt="Instagram logo"></a>
                    <a href="https://www.facebook.com/LunarSoundStudio" target="_blank"><img src="wp-content/themes/lunartheme/assets/socials/fb.svg" alt="Facebook logo"></a>
                    <a href="https://www.youtube.com/channel/UCH8egjdR7AbEesijCaAcpCw" target="_blank"><img src="wp-content/themes/lunartheme/assets/socials//youtube.svg" alt="Youtube logo"></a>
                </div>
            </nav>
        </div>
    </section>

    <section class="hero">
        <div class="container">
            <a href="#"><img id="hero-logo" class="hero-logo" src="wp-content/themes/lunartheme/assets/logo.png" alt="Logo Lunar Sound Studio"></a>
        </div>
    </section>

    <section id="about-us" class="description">
        <div class="container">
            <h1>Studio nagraniowe</h1>
            <h1 class="name">Lunar Sound Studio</h1>
            <p>
            Lunar Sound Studio to miejsce stworzone z myślą o zawodowych twórcach jak i pasjonatach muzyki. 
            Dbamy o to, aby każdy materiał, który od nas wychodzi, był niepowtarzalny i dopieszczony do ostatniego dźwięku.  
            </p>
            <p>
            Właściciel studia - Michał, podkreśla, jak bardzo zależy mu na tym, 
            aby każda współpraca dawała satysfakcję zarówno jemu jak i jego klientom. 
            </p>
            <p class="quote">
            - Od zawsze chciałem stworzyć studio nagraniowe, w którym będę mógł realizować muzyczne marzenia i pomysły twórców, a przy okazji swoją największą pasję. Mam nadzieję, że spotkamy się w LSS i będziemy mogli stworzyć wspólnie spektakularny projekt, dbając przy tym o każdy szczegół. 
            Zapraszam serdecznie wszystkich, którzy chcą przelać swoje emocje razem z dźwiękiem na dowolny nośnik. 
            </p>
            <p class="michal">
            - Michał Kornaga
            </p>
        </div>
    </section>

    <section class="breaker"></section>

    <section class="breaker"></section>
    
    <!-- <script src="js/main.js"></script> -->
    <script type="text/javascript" src="wp-content/themes/lunartheme/js/main.js"></script>
    <?php wp_footer(); ?>
</body>
</html>