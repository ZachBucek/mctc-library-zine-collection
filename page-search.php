<?php get_header('search'); ?>

    <!--NAV-->
    <nav class="main-nav row">
        <ul>
            <li><a href="/zines/">ZINES</a></li>
            <li><a href="/events/">EVENTS</a></li>
            <li><a href="/about/">ABOUT</a></li>
            <li><a href="/how-to/">HOW-TO</a></li>
            <li><a href="/search/" class="selected">SEARCH</a></li>
        </ul>
    </nav>

<!--MAIN-->
    <main>
        <section class="row">
            <div class="static-page-search eight columns">

                <?php get_template_part( 'content' ); ?>

                <!--DESKTOP-TABLET(LANDSCAPE) IMG-->
                <img alt="Search page illustration" class="desktop-image" src="<?php echo get_template_directory_uri(); ?>/images/search_image.png">

                <!--TABLET(PORTRAIT)-MOBILE IMG-->
                <img alt="Search page illustration" class="mobile-image" src="<?php echo get_template_directory_uri(); ?>/images/search_image-mobile.png">

                <article>

                    <div class="page-section">

                        <div class="container search-form">
                            <div class="row">
                                <div class="col-6 page-header">
                                    <h2>All titles in the collection are searchable below.</h2>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <select id="fieldT" name="field" class="form-control">
                                            <option value="Title">Title</option>
                                            <option value="Creator">Creator</option>
                                            <option value="Subject">Subject</option>
                                            <option value="Place of Publication">Place of Publication</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input id="searchT" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <button type="submit" class="btn" id="defaultButton" onClick="initialize()">Search</button>
                                </div>
                            </div>
                            <div class="row" style="margin-top:30px;">
                                <div class="col-6">
                                    <div class="overflow" id="dynamic"></div>
                                </div>
                                <div class="col-4">
                                    <div class="overflow panel panel-default" id="zine_container">
                                        <div class="panel-heading">Zine Details</div>
                                        <div id="zine" class="panel-body"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--DROP-DOWN-->
                        <dl class="dropdowns">

                            <!--SEARCH GUIDE-->
                            <dt>
                                <button aria-expanded="false" aria-controls="tab1-description">Search Guide</button>
                            </dt>
                            <dd>
                                <div id="tab1-description" class="description">
                                    <h3>TITLE</h3>
                                    <ul>
                                        <li class="subject-list">Do not include articles such as A, AN, or THE</li>
                                    </ul>

                                    <h3>SUBJECT</h3>
                                    <ul class="subject-list">
                                        <li>Accounting: search for <i>Economics; Money</i>.</li>
                                        <li>Addiction Counseling: search for <i>Addiction; Mental Health; Drugs</i>.</li>
                                        <li>American Indian Studies: search for <i>Indigenous Peoples</i>.</li>
                                        <li>Apparel Technologies: search for <i>Fashion</i>.</li>
                                        <li>Biology: search for <i>Nature; Environmental Sustainability; Biotechnology; Biodiversity</i>.</li>
                                        <li>Child Development: search for <i>Children; Teenagers; Education</i>.</li>
                                        <li>Cinema: search for <i>Film; Television</i>.</li>
                                        <li>Computer Science: search for <i>Computers; Internet; Technology</i>.</li>
                                        <li>Education: search for <i>Education</i>.</li>
                                        <li>Graphic Design: search for <i>Photography; Drawing; Art</i>.</li>
                                        <li>Library Information Technology: search for <i>Libraries</i>.</li>
                                        <li>Nursing or Allied Health: search for <i>Health Care; Illness; Medical System; Alternative Medicine; Herbal Remedies</i>.</li>
                                        <li>Photography and Digital Imaging: search for <i>Photography</i>.</li>
                                        <li>Law Enforcement or Criminal Justice: search for <i>Police; Legal Rights; Prisons</i>.</li>
                                        <li>Sound Arts: search for <i>Music; Recording</i>.</li>
                                        <li>Theater Arts: search for <i>Theater; Performing Arts</i>.</li>
                                        <li>Visual Arts: search for <i>Art; Painting; Portraits</i>.</li>
                                        <li>Women’s Studies: search for <i>Women; Feminism; Riot Grrrl; Lesbians; Pornography</i>.</li>
                                    </ul>

                                    <br>

                                    <h3>PLACE OF PUBLICATION</h3>
                                    <ul class="subject-list">
                                        <li>Try the state name (Minnesota), the city name (Minneapolis), and country name (United States).</li>
                                        <li>We also have zines from all over the world searchable by country name.</li>
                                    </ul>
                                </div>
                            </dd>

                            <!--GENRES-->
                            <dt>
                                <button aria-expanded="false" aria-controls="tab2-description">Zine Genres</button>
                            </dt>
                            <dd>
                                <div id="tab2-description" class="description">
                                    <ul class="genre-list">
                                        <li>24-hr zine</li>
                                        <li>Art zine</li>
                                        <li>Compilation zine</li>
                                        <li>DIY zine</li>
                                        <li>Fanzine</li>
                                        <li>Literary zine</li>
                                        <li>Mamazine</li>
                                        <li>Metazine</li>
                                        <li>Minicomics</li>
                                        <li>One-page-folding zine</li>
                                        <li>Personal zine</li>
                                        <li>Political zine</li>
                                        <li>Program zine</li>
                                        <li>School zine</li>
                                        <li>Split zine</li>
                                    </ul>
                                </div>
                            </dd>

                        </dl><!--END DROP-DOWN-->

                    </div><!--END PAGE SECTION-->

                </article>
            </div><!--END EIGHT COLUMNS-->
            <?php get_sidebar(); ?>

        </section><!--END ROW-->
    </main>

<!--FOOTER-->
<?php get_footer('search'); ?>