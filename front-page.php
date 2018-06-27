<?php get_header('front'); ?>

    <!--NAV-->
    <nav class="main-nav row">
        <ul>
            <li><a href="/zines/">ZINES</a></li>
            <li><a href="/events/">EVENTS</a></li>
            <li><a href="/about/">ABOUT</a></li>
            <li><a href="/how-to/">HOW-TO</a></li>
            <li><a href="/search/">SEARCH</a></li>
        </ul>
    </nav>

        <!--MAIN-->
        <main id="imageSlider" >
            <section class="row">
                <div class="twelve columns">
                    <!--     IMAGE SLIDER GOES HERE         -->
                    <?php while ( have_posts() ) : the_post(); ?>

                        <?php get_template_part( 'content' ); ?>

                    <?php endwhile ?>
                </div>
            </section>
        </main>
<?php get_footer(); ?>