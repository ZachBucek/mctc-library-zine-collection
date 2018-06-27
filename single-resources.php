<?php get_header('resources'); ?>

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
            <article class="archive-posts resources eight columns">

                <?php while ( have_posts() ) : the_post();

                    get_post_format();

                    get_template_part('content');

                    the_meta();

                endwhile; ?>

            </article>

            <?php get_sidebar(); ?>
        </section>
    </main>
<?php get_footer(); ?>