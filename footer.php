<footer class="stopka">
        <div class="footer-text">
            <p>
                ul. Rzemieślnicza 5, 81-855 Sopot
            </p>
            <p>
                mail : sekretariat@ol-art.pl
            </p>
            <p>
                telefon:  58 555 83 63 / 506 474 190
            </p>
        </div>
        <div class="footer-logo">
            <a href="http://www.ssw-sopot.pl/">
            <img src="/wp-content/uploads/2018/03/logossw.png" alt="Sopocka Szkoła Wyższa" height="60">
            </a>
        </div>

        </footer>

<?php wp_footer(); ?>

</div>

<!-- Skrypt menu hamburger -->
    <script>$( document ).ready(function() {
        if (window.matchMedia("(max-width: 1050px)").matches) {

        $( ".cross" ).hide();
        $( ".menu" ).hide();
        $( ".hamburger" ).click(function() {
            $( ".menu" ).slideToggle( "slow", function() {
                $( ".hamburger" ).hide();
                $( ".cross" ).show();
            });
        });

        $( ".cross" ).click(function() {
        $( ".menu" ).slideToggle( "slow", function() {
            $( ".cross" ).hide();
            $( ".hamburger" ).show();
        });
        });
        }
        else {}

        });
    </script>

    <script>
        $(document).ready(function(){
            $('.slider').bxSlider({
                auto: true,
                speed: 600,
                autoControls: false,
                stopAutoOnClick: true,
                pager: false
            });
        });
    </script>

</body>
</html>
