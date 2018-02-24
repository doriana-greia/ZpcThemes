<?php get_header();?>

    <section class="about-us" id="aboutUs">
        <div class="container">
            <div class="row">
                <div class="section-title col-md-12"><h2><?php echo category_description('1'); ?></h2></div>
                <?php if(have_posts()) : query_posts('cat=1&order=ASC');?>
                    <?php while (have_posts()) : the_post(); ?>
                <div class="col-md-7">
                    <p><?php the_content(); ?></p>
                </div>
                    <?php endwhile; endif; wp_reset_query(); ?>
                <div class="col-md-5">
                    <?php echo do_shortcode('[metaslider id=31]'); ?>
                </div>
            </div>

        </div>
    </section><!-- /.about-us -->

<section class="trust" id="trust">
    <div class="container">
        <div class="row">
            <div class="section-title col-md-12"><h2><?php echo category_description('2'); ?></h2></div>

               <?php if(have_posts()) : query_posts('cat=2&order=ASC'); ?>
                   <? while (have_posts()) : the_post(); ?>

            <div class="trust__trig col-md-3 col-sm-6 ">

                <div class="trust__trig_icon">
                    <?php echo get_the_post_thumbnail( $page->ID, 'thumbnail'); ?>
                </div>
                <div class="trust__trig_text">
                    <?php the_content()?>
                </div>
            </div><!-- /.trust__trig -->

                   <?php endwhile; endif; wp_reset_query(); ?>

            </div>
        </div>
    </div>
</section><!-- /.trust <-->

<section class="works" id="works">
    <div class="container">
        <div class="section-title"><h2><?php echo category_description('3'); ?></h2>
            <div class="select_wrapper">
                <!-- наш бокс зі списком -->
                <div id="selectBox" class="selectBox">
                    <img src="<?php echo get_template_directory_uri().'/img/arr-icon.png'; ?>" class="arrow"/>
                    <span class="valueTag" name="select" >Оберіть потрібну категорію*</span>
                    <ul id="selectMenuBox" class="selectMenu">
                        <li data-filter="all" selected="selected" class="filter option">Всі</li>
                        <li data-filter=".category-1"  class="filter option">Землеустрій та кадастр</li>
                        <li data-filter=".category-2" class="filter option">Топографо-геодезичні роботи (інженерно-геодезичні вишукування)</li>
                        <li data-filter=".category-3"  class="filter option">Грунтове обстеження</li>
                        <li data-filter=".category-4" class="filter option">Оцінка земель</li>
                        <li data-filter=".category-5" class="filter option">Консалтингові послуги</li>
                        <li data-filter=".category-6" class="filter option">Купівля-продаж земельних ділянок</li>
                        <li data-filter=".category-7" class="filter option">Юридичні послуги</li>
                    </ul>
                </div> <!-- кiнець бокса -->
            </div>
        </div>

        <div class="row" id="works_category">

<?php if(have_posts()) : query_posts('cat=4'); ?>
    <? while (have_posts()) : the_post(); ?>


            <div class="col-md-4 col-sm-6 col-xs-12 mix category-1">
                <div class="works__item">
                    <div class="works__item_img">

                        <?php echo get_the_post_thumbnail( $page->ID, 'full'); ?>

                    </div>
                    <div class="content">
                        <div class="works__item_titel">
                            <h3><?php the_title() ?></h3>
                        </div>
                        <div class="works__item_price">

                            <div class="line"><div class="price"><?php echo get_post_meta($post->ID,'price', true); echo get_theme_mod('select_money'); ?></div></div>

                            <button value="<?php the_title() ?>" id = "works-category-btn" class="btn_yellow" href="#order_form">Замовити</button>
                        </div>
                    </div>
                </div><!-- /.works__item -->
            </div>

<?php endwhile; ?>
<?php endif; ?>

<?php if(have_posts()) : query_posts('cat=5'); ?>
    <? while (have_posts()) : the_post(); ?>


            <div class="col-md-4 col-sm-6 col-xs-12 mix category-2">
                <div class="works__item">
                    <div class="works__item_img">

                        <?php echo get_the_post_thumbnail( $page->ID, 'full'); ?>

                    </div>
                    <div class="content">
                        <div class="works__item_titel">
                            <h3><?php the_title() ?></h3>
                        </div>
                        <div class="works__item_price">

                            <div class="line"><div class="price"><?php echo get_post_meta($post->ID,'price', true); echo get_theme_mod('select_money'); ?></div></div>

                            <button value="<?php the_title() ?>" id = "works-category-btn" class="btn_yellow" href="#order_form">Замовити</button>
                        </div>
                    </div>
                </div><!-- /.works__item -->
            </div>

<?php endwhile; ?>
<?php endif; ?>


<?php if(have_posts()) : query_posts('cat=6'); ?>
    <? while (have_posts()) : the_post(); ?>


            <div class="col-md-4 col-sm-6 col-xs-12 mix category-3">
                <div class="works__item">
                    <div class="works__item_img">

                        <?php echo get_the_post_thumbnail( $page->ID, 'full'); ?>

                    </div>
                    <div class="content">
                        <div class="works__item_titel">
                            <h3><?php the_title() ?></h3>
                        </div>
                        <div class="works__item_price">

                            <div class="line"><div class="price"><?php echo get_post_meta($post->ID,'price', true); echo get_theme_mod('select_money'); ?></div></div>

                            <button value="<?php the_title() ?>" id = "works-category-btn" class="btn_yellow" href="#order_form">Замовити</button>
                        </div>
                    </div>
                </div><!-- /.works__item -->
            </div>

<?php endwhile; ?>
<?php endif; ?>


<?php if(have_posts()) : query_posts('cat=7'); ?>
    <? while (have_posts()) : the_post(); ?>


            <div class="col-md-4 col-sm-6 col-xs-12 mix category-4">
                <div class="works__item">
                    <div class="works__item_img">

                        <?php echo get_the_post_thumbnail( $page->ID, 'full'); ?>

                    </div>
                    <div class="content">
                        <div class="works__item_titel">
                            <h3><?php the_title() ?></h3>
                        </div>
                        <div class="works__item_price">

                            <div class="line"><div class="price"><?php echo get_post_meta($post->ID,'price', true); echo get_theme_mod('select_money');?></div></div>

                            <button value="<?php the_title() ?>" id = "works-category-btn" class="btn_yellow" href="#order_form">Замовити</button>
                        </div>
                    </div>
                </div><!-- /.works__item -->
            </div>

<?php endwhile; ?>
<?php endif; ?>


<?php if(have_posts()) : query_posts('cat=8'); ?>
    <? while (have_posts()) : the_post(); ?>


            <div class="col-md-4 col-sm-6 col-xs-12 mix category-5">
                <div class="works__item">
                    <div class="works__item_img">

                        <?php echo get_the_post_thumbnail( $page->ID, 'full'); ?>

                    </div>
                    <div class="content">
                        <div class="works__item_titel">
                            <h3><?php the_title() ?></h3>
                        </div>
                        <div class="works__item_price">

                            <div class="line"><div class="price"><?php echo get_post_meta($post->ID,'price', true); echo get_theme_mod('select_money'); ?></div></div>

                            <button value="<?php the_title() ?>" id = "works-category-btn" class="btn_yellow" href="#order_form">Замовити</button>
                        </div>
                    </div>
                </div><!-- /.works__item -->
            </div>

<?php endwhile; ?>
<?php endif; ?>

<?php if(have_posts()) : query_posts('cat=9'); ?>
    <? while (have_posts()) : the_post(); ?>


            <div class="col-md-4 col-sm-6 col-xs-12 mix category-6">
                <div class="works__item">
                    <div class="works__item_img">

                        <?php echo get_the_post_thumbnail( $page->ID, 'full'); ?>

                    </div>
                    <div class="content">
                        <div class="works__item_titel">
                            <h3><?php the_title() ?></h3>
                        </div>
                        <div class="works__item_price">

                            <div class="line"><div class="price"><?php echo get_post_meta($post->ID,'price', true); echo get_theme_mod('select_money'); ?></div></div>

                            <button value="<?php the_title() ?>" id = "works-category-btn" class="btn_yellow" href="#order_form">Замовити</button>
                        </div>
                    </div>
                </div><!-- /.works__item -->
            </div>

<?php endwhile; ?>
<?php endif; ?>

<?php if(have_posts()) : query_posts('cat=10'); ?>
    <? while (have_posts()) : the_post(); ?>


            <div class="col-md-4 col-sm-6 col-xs-12 mix category-7">
                <div class="works__item">
                    <div class="works__item_img">

                        <?php echo get_the_post_thumbnail( $page->ID, 'full'); ?>

                    </div>
                    <div class="content">
                        <div class="works__item_titel">
                            <h3><?php the_title() ?></h3>
                        </div>
                        <div class="works__item_price">

                            <div class="line"><div class="price"><?php echo get_post_meta($post->ID,'price', true); echo get_theme_mod('select_money'); ?></div></div>

                            <button value="<?php the_title() ?>" id = "works-category-btn" class="btn_yellow" href="#order_form">Замовити</button>
                        </div>
                    </div>
                </div><!-- /.works__item -->
            </div>

<?php endwhile; ?>
<?php endif; ?>

        </div><!-- /#works_category -->

    </div>
</section><!-- /.works -->



<section class="useful_links" id="useful_links">
        <div class="container">
            <div class="row">
                <div class="section-title col-md-12"><h2>Корисні посилання</h2></div>

                <div class="useful_links__trig col-md-2 col-md-3 ">
                        <div class="useful_links_trig_icon">
                            <p><a href="http://map.land.gov.ua/kadastrova-karta" target="_blank"><img src="<?php echo get_template_directory_uri().'/img/icon-links-1.png'; ?>" alt="Публічна кадастрова карта України"></a></p>
                        </div>

                </div><!-- /.useful_links_trig-->



                <div class=" col-md-3 col-md-2 ">
                <div class="useful_links_trig">
                    <div class="useful_links__trig_icon">
                         <p><a href="http://land.gov.ua/" target="_blank"><img src="<?php echo get_template_directory_uri().'/img/icon-links-2.png'; ?>" alt="Держгеокадастр"></a></p>
                    </div>
                    
                </div><!-- /useful_links_trig-->
                </div> 



                <div class="col-md-3 col-md-2 ">
                <div class="useful_links_trig">
                    <div class="useful_links__trig_icon">
                        <p><a href="http://mkk.kga.gov.ua/" target="_blank"><img src="<?php echo get_template_directory_uri().'/img/icon-links-3.png'; ?>" alt="Містобудівний Кадастр Києва"></a></p>
                    </div>
                    
                </div><!-- /.useful_links_trig-->
                </div>

            <div class="col-md-2 col-md-3 ">
            <div class="useful_links_trig">
                    <div class="useful_links__trig_icon">
                       <p><a href="http://gisfile.com/map/" target="_blank"><img src="<?php echo get_template_directory_uri().'/img/icon-links-4.png'; ?>" alt="ГЕО-інформаційний сервіс для створення карт"></a></p>
                    </div>
            </div><!-- /.useful_links_trig-->
            </div>

            <div class="col-md-3 col-md-2 ">
            <div class="useful_links_trig">
                    <div class="useful_links__trig_icon">
                         <p><a href="https://kyivcity.gov.ua/content/79_departament-zemelnykh-resursiv.html" target="_blank"><img src="<?php echo get_template_directory_uri().'/img/icon-links-5.png'; ?>" alt="Київська міська державна адміністрація"></a></p>
                    </div>
            </div><!-- /.useful_links_trig-->
            </div>

            <div class="col-md-3 col-md-2 ">
            <div class="useful_links_trig">
                    <div class="useful_links__trig_icon">
                         <p><a href="http://zakon0.rada.gov.ua/laws" target="_blank"><img class="img_icon_links" src="<?php echo get_template_directory_uri().'/img/icon-links-6.png'; ?>" alt="Законодавство України"></a></p>
                    </div>
            </div><!-- /.useful_links_trig-->
            </div>

            </div>
        </div>
    </section><!-- /.useful_links-->


<section class="map" id="contact">

    <div id="google-container"></div>

    <?php get_template_part('form-contact-map'); ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBmKRIs_O5sNwWyldyWMmPl2NZXpgpsA9E"></script>
    
</section><!-- /.map -->

<?php get_footer();?>