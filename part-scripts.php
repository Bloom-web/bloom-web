    <!-- End Document ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

    <!-- Loading animation with DOM reflow so it can restart -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var specialLoader = document.getElementById("specialLoader");
            specialLoader.classList.remove("fadeout");
            void specialLoader.offsetWidth;
            specialLoader.classList.add("fadeout");
        });
    </script>

    <!-- Splide slider carousel -->
    <script src="/splide/splide.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var splide = new Splide('.splide');
            splide.mount();
        });
    </script>