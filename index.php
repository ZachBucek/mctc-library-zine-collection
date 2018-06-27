<?php get_header(); ?>

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
    <main>
        <section class="row">
            <div id="imageSlider" class="twelve columns">
                <!--     IMAGE SLIDER GOES HERE         -->
                <?php while ( have_posts() ) : the_post(); ?>

                    <?php get_template_part( 'content' ); ?>

                <?php endwhile ?>
            </div>
        </section>
    </main>
<?php get_footer(); ?>