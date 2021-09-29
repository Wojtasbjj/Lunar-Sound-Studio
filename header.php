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
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/style.css">
    <?php wp_head(); ?>
</head>
<body>
    <section class="navigation">
        <div class="container">
            <div class="open-navi">
            <img id="nav-cta" class="open-nav-btn" alt="Open mobile navigation" src="<?php echo get_template_directory_uri().'/assets/menu.svg'; ?>">
                
            </div>
            <nav id="navigation">
                <div class="exit-nav-btn">
                <img id="exit-nav" alt="close mobile navigation" src="<?php echo get_template_directory_uri().'/assets/exit.svg'; ?>">
                </div>
                <ul class="left-nav">
                    <li><a href="/#about-us" id="mobile-cta">O nas</a></li>
                    <li><a href="/#services" id="mobile-cta">Usługi</a></li>
                    <li><a href="/#prices" id="mobile-cta">Cennik</a></li>
                </ul>
                <a href="/"><img id="logo" class="hide-logo" alt="Logo Lunar Sound Studio" src="<?php echo get_template_directory_uri().'/assets/logo.png'; ?>"></a>
                <ul class="right-nav">
                    <li><a href="/sprzet" id="mobile-cta">Sprzęt</a></li>
                    <li><a href="/galeria" id="mobile-cta">Galeria</a></li>
                    <li><a href="/#contact" id="mobile-cta">Kontakt</a></li>
                </ul>
                <div class="socials">
                    <a href="https://www.instagram.com/lunarsoundstudio/" target="_blank"><img src="<?php echo get_template_directory_uri().'/assets/socials/ig.svg'; ?>"></a>
                    <a href="https://www.facebook.com/LunarSoundStudio" target="_blank"><img src="<?php echo get_template_directory_uri().'/assets/socials/fb.svg'; ?>"></a>
                    <a href="https://www.youtube.com/channel/UCH8egjdR7AbEesijCaAcpCw" target="_blank"><img src="<?php echo get_template_directory_uri().'/assets/socials/youtube.svg'; ?>"></a>

                </div>
            </nav>
        </div>
    </section>

    <section class="hero">
        <div class="container">
            <a href="/"><img id="hero-logo" class="hero-logo" alt="Logo Lunar Sound Studio" src="<?php echo get_template_directory_uri().'/assets/logo.png'; ?>"></a>
        </div>
    </section>