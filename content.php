<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <?php if (is_single() || is_page()){ ?>

        <h1 id="postTitle-single">
            <?php the_title(); ?>
        </h1>
        <div class="categories">
            <?php echo get_the_category_list (__(' | ', 'zines')); ?>
        </div>

        <?php the_content(); ?>
        <?php get_post_meta('','','', TRUE); ?>

    <?php } elseif (is_home() || is_archive() || is_events()) { ?>

        <h1 id="postTitle">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h1>

        <div class="categories">
            <?php echo get_the_category_list (__(' | ', 'zines')); ?>
        </div>
        <?php the_content(); ?>
        <!-- get featured image and custom fields-->
        <a href="<?php the_permalink(); ?>">
        <?php
        if (has_post_thumbnail()) {
            the_post_thumbnail();
            get_post_meta('','','', TRUE);
        }
        ?>
        </a>
    <?php } ?>
</article>