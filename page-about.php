<?php get_header('static'); ?>

<!--NAV-->
    <nav class="main-nav row">
        <ul>
            <li><a href="/zines/">ZINES</a></li>
            <li><a href="/events/">EVENTS</a></li>
            <li><a href="/about/" class="selected">ABOUT</a></li>
            <li><a href="/how-to/">HOW-TO</a></li>
            <li><a href="/search/">SEARCH</a></li>
        </ul>
    </nav>

<!--MAIN-->
    <main>
        <section class="row">
            <div class="static-page eight columns">

                <?php get_template_part( 'content' ); ?>

                <!--TABLET(PORTRAIT)-MOBILE-->
                <img alt="About page illustration" class="mobile-image" src="<?php echo get_template_directory_uri(); ?>/images/about-image-mobile2.svg">

                <!--DESKTOP-TABLET(LANDSCAPE)-->
                <img alt="About page illustration" class="desktop-image-about" src="<?php echo get_template_directory_uri(); ?>/images/aboutImage_4.svg">

                <article>

                    <!--PAGE DESCRIPTION-->
                    <div class="page-section">
                        <h2>What can I find on this website?</h2>
                        <p>This site highlights selections from the MCTC Zine Collection which include images and information pertaining to featured zines.
                        </p>
                        <p>If you are interested in doing a general search of the entire Zine Collection, search the <a target="_blank" href="/search/">MCTC Zine Collection Database</a>.
                        </p>


                    <!--DROP-DOWNS-->
                        <dl class="dropdowns">

                            <!--WHAT IS A ZINE-->
                            <dt>
                                <button aria-expanded="false" aria-controls="tab1-description">What is a Zine?</button>
                            </dt>
                            <dd>
                                <div id="tab1-description" class="description">
                                    <p>“A zine is a self-publication, motivated by a desire for self-expression, not for profit.” - Jenna Freedman, Barnard College</p>
                                    <p>The means of zine (pronounced <i>ZEEN</i>) making are modest: ink on paper and manually bound. Within these parameters fall a wide array of methods and techniques. They are independently distributed through specialty bookshops, zine distributors, zine fairs and on the street. In addition to being sold, they are often bartered among makers and enthusiasts eager to promote the community and themselves.</p>
                                    <p>Because zines are independently made and distributed, their content gives voice to underrepresented perspectives and consists of subject matter neglected by mainstream commercial publications. These subjects include the political, the personal, the absurd, the vulgar, and many more.</p>
                                    <p>Zines are at their core Do-It-Yourself. Although zine-makers often collaborate with commercial printers and print-making artisans, the scope of production is driven by an urgency and directness that would be limited by more traditional publication methods.</p>
                                </div>
                            </dd>

                            <!--About the Collection-->
                            <dt>
                                <button aria-expanded="false" aria-controls="tab2-description">About the Collection</button>
                            </dt>
                            <dd>
                                <div id="tab2-description" class="description">
                                    <p>The Minneapolis Community & Technical College [MCTC] Library is committed to developing a substantial collection of alternative materials to support the needs of our college community. As part of that commitment, the MCTC Library maintains a Zine Collection.</p>
                                    <p>The MCTC Zine Collection has over 6,500 zines.  This collection spans 3 decades and all manner of genre or subject are represented.  The initial seed for this collection was donated by Chris Dodge of Utne Press in 1999.  Another important expansion to the collection was the acquisition of Lacey Prpic Hedtke’s Zine Apothecary in 2011. </p>
                                    <p>Our collection is open to the public during normal library hours of operation.  This collection does not circulate, but we have comfortable chairs for anyone browsing zines.  For specific questions about tours or academic research, please <a target="_blank" href="http://library.minneapolis.edu/page/contact_us.html">contact the Zine Librarian</a>.
                                    </p>
                                </div>
                            </dd>

                            <!--Timeline-->
                            <dt>
                                <button aria-expanded="false" aria-controls="tab3-description">Collection Timeline</button>
                            </dt>
                            <dd>
                                <div id="tab3-description" class="description">
                                    <h3>1999:</h3>
                                        <p>MCTC librarian TOM ELAND partners with CHRIS DODGE, who donates 1000 zines from his personal collection to the MCTC LIBRARY ZINE COLLECTION.</p>
                                        <p>DODGE edits the MINNESOTA SOCIAL RESPONSIBILITY NEWSLETTER, where he writes about and reviews zines, gradually building his collection while working at Hennepin County Library & then with the UTNE READER’s special collection.</p>
                                        <p>ELAND adapts Alternative Press Index for cataloguing zines and develops curriculum for information science courses relating to the ALTERNATIVE MEDIA COLLECTION.</p>
                                    <br>
                                    <h3>2002 - 2004:</h3>
                                        <p>ELAND writes and speaks about the importance of alternative publications in libraries. As awareness of the collection grows, so does the collection, as zine makers from the Twin Cities & beyond donate their zines.</p>
                                    <br>
                                    <h3>2011:</h3>
                                        <p>JENNY SIPPEL receives an MLA mini-grant to promote the collection and upgrade the zine display. Local zinester LACEY PERPIC HEDKE is commissioned to make a zine about the collection. FLYAWAY ZINE MOBILE pays a visit. MCTC begins tabling at the TWIN CITIES ZINE FEST. LZC is moved to a new space in the library, integrating the display and access with the ALTERNATIVE MEDIA COLLECTION.</p>
                                    <br>
                                    <h3>2012:</h3>
                                        <p>MCTC librarian ELISSAH BECKNELL & web master JOHN DANIELS adopt new approach for the LZC catalog & create a searchable web interface. ANCHOR ARCHIVE SUBJECT THESAURUS (A.A.S.T.) is used as the subject authority and xZINECOREx standards are implemented. A full inventory of the LZC is achieved.</p>
                                    <br>
                                    <h3>2013 - 2014:</h3>
                                        <p>Intern LINDA NGUYEN helps to put together “Publishing to the People” event about DIY publishing, makerspaces, and zines. Her “ZINE MAKER KIT” now is used in all LZC events. BECKNELL joins the ZINE UNION CATALOG group and begins exploring the creation of a national zine union catalog.</p>
                                    <br>
                                    <h3>2017 - 2018:</h3>
                                        <p>Intern ELIZABETH BASTYR implements OPEN REFINE software to convert all subject headings in the LZC to A.A.S.T. headings. Student worker ZACH BUCEK partners with BECKNELL & DANIELS to launch this website featuring and promoting the LZC. </p>
                                    <br>

                                </div>
                            </dd>

                            <!--DONATE YOUR ZINES-->
                            <dt>
                                <button aria-expanded="false" aria-controls="tab4-description">Donate Your Zines</button>
                            </dt>
                            <dd>
                                <div id="tab4-description" class="description">
                                    <p>We welcome all donations, though we reserve the right to add Zines to the Zine Collection based on our collection development policies. You can drop zines off at the MCTC Library Circulation Desk during normal hours of operation.</p>
                                    <p>You can also mail zines to us at:</p>
                                    <p id="donate-address">MCTC Library (Zine Collection)<br>1501 Hennepin Ave<br>Minneapolis, MN 55403</p>
                                </div>
                            </dd>

                        </dl><!--END DROPDOWNS-->

                    </div><!--END PAGE SECTION-->

                </article>
                </div><!--END EIGHT COLUMNS-->

<!--SIDEBAR-->
            <?php get_sidebar(); ?>
        </section><!--END ROW-->

    </main>
<!--FOOTER-->
<?php get_footer('static'); ?>