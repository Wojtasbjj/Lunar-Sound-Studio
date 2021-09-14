<!DOCTYPE html>
<html lang="en">
<head>
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
                <img id="nav-cta" class="open-nav-btn" src="https://www.lunarsoundstudio.pl/wp-content/themes/lunartheme/assets/menu.svg" alt="Open navigation">
            </div>
            <nav id="navigation">
                <div class="exit-nav-btn">
                <img id="exit-nav" src="https://www.lunarsoundstudio.pl/wp-content/themes/lunartheme/assets/exit.svg" alt="exit navigation">
                </div>
                <ul class="left-nav">
                    <li><a href="https://www.lunarsoundstudio.pl/#about-us" id="mobile-cta">O nas</a></li>
                    <li><a href="https://www.lunarsoundstudio.pl/#services" id="mobile-cta">Usługi</a></li>
                    <li><a href="https://www.lunarsoundstudio.pl/#prices" id="mobile-cta">Cennik</a></li>
                </ul>
                <a href="#"><img id="logo" class="hide-logo" src="https://www.lunarsoundstudio.pl/wp-content/themes/lunartheme/assets/logo.png" alt="Logo Lunar Sound Studio"></a>
                <ul class="right-nav">
                    <li><a href="https://www.lunarsoundstudio.pl/sprzet/#post" id="mobile-cta">Sprzęt</a></li>
                    <li><a href="https://www.lunarsoundstudio.pl/galeria/#post" id="mobile-cta">Galeria</a></li>
                    <li><a href="https://www.lunarsoundstudio.pl/#contact" id="mobile-cta">Kontakt</a></li>
                </ul>
                <div class="socials">
                    <a href="https://www.instagram.com/lunarsoundstudio/" target="_blank"><img src="https://www.lunarsoundstudio.pl/wp-content/themes/lunartheme/assets/socials//ig.svg" alt="Instagram logo"></a>
                    <a href="https://www.facebook.com/LunarSoundStudio" target="_blank"><img src="https://www.lunarsoundstudio.pl/wp-content/themes/lunartheme/assets/socials/fb.svg" alt="Facebook logo"></a>
                    <a href="https://www.youtube.com/channel/UCH8egjdR7AbEesijCaAcpCw" target="_blank"><img src="https://www.lunarsoundstudio.pl/wp-content/themes/lunartheme/assets/socials//youtube.svg" alt="Youtube logo"></a>
                </div>
            </nav>
        </div>
    </section>

    <section class="hero">
        <div class="container">
            <a href="#"><img id="hero-logo" class="hero-logo" src="https://www.lunarsoundstudio.pl/wp-content/themes/lunartheme/assets/logo.png" alt="Logo Lunar Sound Studio"></a>
        </div>
    </section>

    <section class="post" id="post">
		<?php if(have_posts()) : ?>
		<?php while(have_posts()) : the_post(); ?> 
		<?php the_content(); ?>
		<?php endwhile; ?>
		<?php endif; ?> 
	</section>

    <section class="footer">
        <div class="container">
            <div class="copy-socials">
                <div class="copy">
                    <p>© 2021 All rights Reserved. Michał Kornaga</p>
                </div>
                <!-- <div class="socials">
                    <a href="#"><img src="https://www.lunarsoundstudio.pl/wp-content/themes/lunartheme/assets/socials//ig.svg" alt="Instagram logo"></a>
                    <a href="#"><img src="https://www.lunarsoundstudio.pl/wp-content/themes/lunartheme/assets/socials/fb.svg" alt="Facebook logo"></a>
                    <a href="#"><img src="https://www.lunarsoundstudio.pl/wp-content/themes/lunartheme/assets/socials//youtube.svg" alt="Youtube logo"></a>
                </div> -->
            </div>
            <div class="by">
                <a href="https://wojciechgajda.pl/" target="_blank">Made by: Wojciech Gajda</a>
            </div>
        </div>
    </section>
    
    <!-- <script src="js/main.js"></script> -->
    <script type="text/javascript" src="https://www.lunarsoundstudio.pl/wp-content/themes/lunartheme/js/main.js"></script>
    <?php wp_footer(); ?>
</body>
</html>