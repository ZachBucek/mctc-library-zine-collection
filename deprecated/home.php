<?php get_header('posts'); ?>

    <!--NAV-->
    <nav class="main-nav row">
        <ul>
            <li><a href="/zines/" class="selected">ZINES</a></li>
            <li><a href="/events/">EVENTS</a></li>
            <li><a href="/about/">ABOUT</a></li>
            <li><a href="/how-to/">HOW-TO</a></li>
            <li><a href="/search/">SEARCH</a></li>
        </ul>
    </nav>

    <!--MAIN-->
    <main>
        <section class="row">
            <article class="archive-posts eight columns">

                <?php while ( have_posts() ) : the_post();

                get_template_part( 'content' );

                the_meta();

                endwhile; ?>

                <!--PAGINATION-->
                <div class="page-numbers" aria-label="page numbers">
                <?php
                the_posts_pagination( array(
                'mid_size'  => 2,
                'prev_text' => __( 'previous', 'textdomain' ),
                'next_text' => __( 'next', 'textdomain' ),
                ) );
                ?>
                </div>

            </article>

            <?php get_sidebar(); ?>
        </section>
    </main>
<?php get_footer(); ?>