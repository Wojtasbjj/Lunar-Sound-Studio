<section class="footer">
        <div class="container">
            <div class="copy-socials">
                <div class="copy">
                    <p>© 2021 All rights Reserved. Michał Kornaga</p>
                </div>
            </div>
            <div class="by">
                <a href="https://wojciechgajda.pl/" target="_blank">Made by: Wojciech Gajda</a>
            </div>
        </div>
    </section>
    
    <!-- <script src="js/main.js"></script> -->
    <script>
        const openBtn = document.getElementById("nav-cta");
const navi = document.getElementById("navigation");
const exitNav = document.getElementById("exit-nav");
const logo = document.getElementById('logo');
const heroLogo = document.getElementById('hero-logo');
const mobileNav = document.querySelectorAll('#mobile-cta')
let y = window.scrollY;

for (var i = 0; i < mobileNav.length; i++) {
    mobileNav[i].addEventListener("click", () => {
        navi.classList.remove("show-nav");
        openBtn.classList.remove("hide-btn");
    })
}


openBtn.addEventListener("click", () => {
    navi.classList.add("show-nav");
    openBtn.classList.add("hide-btn")
})

exitNav.addEventListener("click", () => {
    navi.classList.remove("show-nav");
    openBtn.classList.remove("hide-btn");
})

document.addEventListener("scroll", () => {
    if(window.scrollY > 20) {
        heroLogo.classList.remove("hero-logo");
        heroLogo.classList.add("hide-logo");

        logo.classList.remove('hide-logo');
        logo.classList.add('logo');

        navi.classList.add("black-nav");
    }

    if(window.scrollY < 20) {
        heroLogo.classList.remove('hide-logo')
        heroLogo.classList.add('hero-logo')

        logo.classList.remove('logo')
        logo.classList.add('hide-logo')

        navi.classList.remove("black-nav")
    }

})
    </script>
    <?php wp_footer(); ?>
</body>
</html>