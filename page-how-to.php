<?php get_header('static'); ?>

    <!--NAV-->
    <nav class="main-nav row">
        <ul>
            <li><a href="/zines/">ZINES</a></li>
            <li><a href="/events/">EVENTS</a></li>
            <li><a href="/about/">ABOUT</a></li>
            <li><a href="/how-to/" class="selected">HOW-TO</a></li>
            <li><a href="/search/">SEARCH</a></li>
        </ul>
    </nav>

<!--MAIN-->
    <main>
        <section class="row">
            <div class="static-page eight columns">

                <?php get_template_part( 'content' ); ?>

                <!--DESKTOP-TABLET(LANDSCAPE)-->
                <img alt="How-to page illustration" class="desktop-image" src="<?php echo get_template_directory_uri(); ?>/images/how_to_image_5.svg">

                <!--TABLET(PORTRAIT)-MOBILE-->
                <img alt="How-to page illustration" class="mobile-image" src="<?php echo get_template_directory_uri(); ?>/images/how_to_mobile_5.svg">

                <article>

                    <!--PAGE DESCRIPTION -->
                    <div class="page-section">
                        <h2>How do I make a zine?</h2>
                        <p>There are many different kinds of zines with different page lengths and binding methods. The templates below are presented for reference and represent only a small example of how to make a zine. Zines can consist of printed text from many sources, including photocopiers, offset printing, inkjet printers, and letterpress. They can contain photos, comics, handwritten text, collage, silkscreen, and other printmaking methods.</p>
                        <p>Many zine-making conventions have emerged from necessity, in which the cost, speed, and access of the materials and methods are determined by a need to produce content quickly and cheaply. In this way, the technique of a particular zine’s production is inseparable from its content. This content can be anything you want, from the personal and political to the absurd and mundane.</p>

                        <dl class="dropdowns">

                        <!--TEMPLATES-->
                        <h2>Single-sheet zine templates</h2>
                            <!--ONE-->
                            <dt>
                                <button aria-expanded="false" aria-controls="tab1-description" aria-label="8 page zine with 1 cut">8-page (1 cut)</button>
                            </dt>
                            <dd>
                                <div id="tab1-description" class="description">
                                <div class="templates">
                                    <?php get_template_part('images/inline', '8-page-scroll.svg') ?>
                                    </div>
                                </div>
                            </dd>

                            <!--TWO-->
                            <dt>
                                <button aria-expanded="false" aria-controls="tab2-description" aria-label="8 page zine with 2 cuts">8-page (2 cut)</button>
                            </dt>
                            <dd>
                                <div id="tab2-description" class="description">
                                    <div class="templates">
                                        <?php get_template_part('images/inline', '8-page-2cut-scroll.svg') ?>
                                    </div>
                                </div>
                            </dd>

                            <!--THREE-->
                            <dt>
                                <button aria-expanded="false" aria-controls="tab3-description" aria-label="12 page zine with 4 cuts">12-page (4 cut)</button>
                            </dt>
                            <dd>
                                <div id="tab3-description" class="description">
                                    <div class="templates">
                                        <?php get_template_part('images/inline', '12-page-scroll.svg') ?>
                                    </div>
                                </div>
                            </dd>

                            <!--FOUR-->
                            <dt>
                                <button aria-expanded="false" aria-controls="tab4-description" aria-label="16 page zine with 3 cuts">16-page (3 cut)</button>
                            </dt>
                            <dd>
                                <div id="tab4-description" class="description">
                                    <div class="templates">
                                        <?php get_template_part('images/inline', '16-page-scroll.svg') ?>
                                    </div>
                                </div>
                            </dd>

                        </dl><!--END DROP-DOWN-->

                    </div><!--END PAGE SECTION-->

                    <div class="page-section">
                        <h2>Zines at School: Studying and Teaching Zines</h2>
                        <p>Check out the info below to learn more about incorporating zines into your research or the classroom.</p>

                        <dl class="dropdowns">

                            <!--RESEARCH-->
                            <!--FIVE-->
                            <dt>
                                <button aria-expanded="false" aria-controls="tab5-description">Zines in Research</button>
                            </dt>
                            <dd>
                                <div id="tab5-description" class="description">
                                    <p>Zines at the MCTC Library are not archived or circulated. This collection is open to the public to read or browse on site. We welcome zinesters, historians, researchers, academics, students, archivists, librarians or anyone interested in doing research. A great place to start is with simple searches of the publicly available <a target="_blank" href="/search/">Zine Catalog</a>. More advanced research questions can be directed to the <a target="_blank" href="http://library.minneapolis.edu/page/ask_a_librarian.html">Research Help Desk</a>.</p>
                                </div>
                            </dd>

                            <!--CLASS-->
                            <!--SIX-->
                            <dt>
                                <button aria-expanded="false" aria-controls="tab6-description">Zines in the Classroom</button>
                            </dt>
                            <dd>
                                <div id="tab6-description" class="description">
                                    <p>Zines are an excellent addition to the classroom. Faculty at MCTC have incorporated zine production in Creative Writing, Graphic Design, Women Studies, Cultural Studies and Information Studies courses. Faculty who are new to zines can contact the <a target="_blank" href="http://library.minneapolis.edu/page/contact_us.html">Zine Librarian</a> or their <a target="_blank" href="http://minneapolis.libguides.com/faculty">Library Liaison</a> to discuss the how zines can be incorporated into the classroom. In the past librarians have given tours of the zine collection, delivered zine presentations to classes, helped students conduct research in the zine collection and collaborated on developing zine assignments. Faculty can check out zines and other support materials from the MCTC Library. Specially designed Zine Course Packets for classroom use are on reserve at the Circulation Desk.
                                    </p>
                                </div>
                            </dd>

                        </dl><!--END DROP-DOWN-->

                    </div><!--END PAGE SECTION-->

                </article>
            </div><!--END EIGHT COLUMNS-->
<!--SIDEBAR-->
            <?php get_sidebar(); ?>
        </section>

    </main>
<!--FOOTER-->
<?php get_footer('static'); ?>