<footer class="row">
    <hr id="footer-rule">
    <div class="twelve columns">
        <div class="footer-main">

            <!--MCTC-->
            <div class="footer-links">
                <h2>MCTC</h2>
                <p><a target="_blank" href="https://www.minneapolis.edu">MCTC Homepage</a></p>
                <p><a target="_blank" href="https://minneapolis.learn.minnstate.edu">D2L</a></p>
                <p><a target="_blank" href="http://www.outlook.com/go.minneapolis.edu">Email</a></p>
            </div>

            <!--LIBRARY-->
            <div class="footer-links">
                <h2>LIBRARY</h2>
                <p><a target="_blank" href="http://library.minneapolis.edu">Library Homepage</a></p>
                <p><a target="_blank" href="http://library.minneapolis.edu/page/hours.html">Hours</a></p>
                <p><a target="_blank" href="http://library.minneapolis.edu/page/find_resources.html">Find Resources</a></p>
                <p><a target="_blank" href="http://library.minneapolis.edu/page/ask_a_librarian.html">Ask a Librarian</a></p>
            </div>

            <!--CONTACT-->
            <div class="footer-links">
                <h2>CONTACT</h2>
                <p><a target="_blank" href="http://library.minneapolis.edu/page/contact_us.html">Questions</a></p>
                <p><a target="_blank" href="tel:612-659-6290">612-659-6290</a></p>
                <p><a target="_blank" href="mailto:circdesk@minneapolis.edu">Email</a></p>
            </div>

        </div>
        <!--END OF FOOTER LINKS-->

        <hr id="footer-rule-mobile">

        <!--ADDRESS & COPYRIGHT-->
        <div id="address-copyright">
            <a href="https://goo.gl/maps/zRkP6WbbnZE2" target="_blank"><p id="address">1501 Hennepin Ave<br>Minneapolis, MN 55403<br>612-659-6000</p></a>
            <p id="copyright">&copy;<?php echo date("Y"); ?> Minneapolis Community<br>& Technical College</p>
        </div>

        <!--BACK-TO-TOP-->
        <div>
            <a href="#top" class="back-to-top">^</a>
        </div>

    </div>
<!--END OF TWELVE COLUMNS-->

</footer>
</div>
<!--END CONTAINER-->

<!--INLINE STYLES-->
<!--PAGINATION-->
<style>
    div.page-numbers {
        margin-left: 60px;
    }

    .page-numbers {
        clear: both;
        font: 18px Lekton, sans-serif;
    }

    .page-numbers.current {
        text-decoration: underline;
    }

    .page-numbers a {
        color: #A214CC;
    }

    .page-numbers a:hover {
        background-color: black;
        color: white;
    }

    .screen-reader-text {
        display: none;
    }
</style>

<!--BACK TO TOP-->
<style>
    .back-to-top {
        position: fixed;
        color: black;
        text-decoration: none;
        display: none;
        background-color: gainsboro;
    }

    .back-to-top:hover {
        background-color: #ffb200;
        color: white;
    }

    .back-to-top a:visited {
        background-color: gainsboro;
        color: black;
    }

    .back-to-top p {
        margin: 0;
        padding: 0;
    }

    .back-to-top {
        bottom: 0;
        right: .5em;
        font-size: 28px;
        padding: 0 8px 0 8px;
    }
</style>

<!--FOOTER-->
<style>
    footer {
        font-family: Abel, sans-serif;
        clear: both;
        width: 100%;
        display: block;
        margin-bottom: 60px;
        padding: 0;
    }

    footer a {
        color: #A214CC;
    }

    footer a:hover {
        text-decoration: underline;
        color: #A214CC;
    }

    #footer-rule {
        border: solid 2px #ffb200;
    }

    footer p {
        margin-bottom: 1.5rem;
        font-size: 18px;
    }

    footer h2 {
        font-size: 21px;
        color: black;
    }

    #footer-rule-mobile {
        display: none;
    }
</style>

<?php wp_footer(); ?>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-117683369-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-117683369-1');
</script>
</body>
</html>