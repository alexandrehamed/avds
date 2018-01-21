<?php get_header(); ?>


<!-- ************** ACCUEIL **************** -->
<section id="section1">
    <div class="container-fluid">
        <div class="row">
            <div class="col-8 mx-auto" id="section1h1h3">

                <h1 class="center">Automobile Val de Seine</h1>
                <br>
                <h3>Achat et vente de véhicules d'occasion</h3>

            </div>
        </div>

        <div class="container" style="margin-top: 200px">
            <div class="row center">
                <div class="col-lg-2 offset-lg-10 col-12" id="btn_cars">
                    <a href="http://pros.lacentrale.fr/C043313/cat-AUTO/" target="_blank">
                    <button type="button" class="btn" id="">Plus de véhicules &nbsp;<img
                            src="<?php echo get_template_directory_uri(); ?>/images/arrows.png"></button>
                    </a>
                </div>
            </div>
        </div>
    </div>

</section>

<!-- ************** ABOUT  **************** -->

<section id="about">
    <div class="container">
        <div class="row">

            <div>
                <div class="col-lg-5 col-md-8 mx-auto" id="about_texte">
                    <h3 class="center"><strong>Qui sommes nous ?</strong></h3>
                    <br>
                    <p style="text-align: justify">Automobile du Val de Seine vous propose des véhicules d'occasions dont une
                        gamme de véhicule propres. Toutes marques, ils sont également révisés et dotés
                        d'une garantie européenne de 6 à 24 mois. Nous assurons l'achat et la reprise de
                        votre ancien véhicule aux conditions Argus.</p>
                </div>

            </div>
        </div>

        <h3 class="center" id="garantie">Nous vous garantisons :</h3>

        <div class="row">
            <div class="col-12">
                <div id="container_icone">
                    <div class="row center">

                        <div class="col-md-2 col-12 offset-md-2 offset-sm-1"><img
                                    src="<?php echo get_template_directory_uri(); ?>/images/icone1.png" alt=""><br>
                            <p>Sécurité</p></div>
                        <div class="col-md-2 col-12 offset-md-1 offset-sm-2"><img
                                    src="<?php echo get_template_directory_uri(); ?>/images/icone2.png" class="" alt=""><br>
                            <p>Professionnalisme</p></div>
                        <div class="col-md-2 col-12  offset-md-1 offset-sm-2"><img
                                    src="<?php echo get_template_directory_uri(); ?>/images/icone3.png" class="" alt=""><br>
                            <p>Qualité</p></div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ************** PARTENAIRES **************** -->

<section id="partenaires">
    <div class="container">
        <div class="row">
            <div class="col-12 ">
                <h2 class="center">Les partenaires</h2>
            </div>
        </div>


        <div class="row center">
            <div class=" col-md-5 col-sm-12   ">
                <div class="rond-gris">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/ford_voiture_16.png" class="img-fluid">
                    <h3>Les sous-traitants</h3>
                </div>

                <div class="row" style="text-align: justify">
                    <div class="col-8 mx-auto">
                        <strong><p class="description_partenaire">- Préparation mécanique ( points de contrôles sécurité
                                systématiques et remise en état )
                                <br>
                                - Préparation Esthètique ( intérieur, extérieur )
                            </p></strong>
                    </div>

                </div>
            </div>
            <div class=" col-md-5 col-sm-12 offset-md-2 rond-gris">
                <div class="rond-gris">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/viaxel.png" class="img-fluid">
                    <h3>Société Viaxel</h3>
                </div>

                <div class="row">
                    <div class="col-8 mx-auto">
                        <strong><p class="description_partenaire">
                                Société de crédit avec laquelle on peut établir un dossier de financement adapté aux
                                besoins
                                du client .
                            </p>
                        </strong>
                    </div>

                </div>

            </div>

        </div>
    </div>

</section>

<section id="vehicules">

    <div class="container">
        <div class="row">
            <div class="col-12 center">
                <a href="http://pros.lacentrale.fr/C043313/cat-AUTO/" target="_blank">

                <button type="button" class="btn  btn_vehicule occas">Véhicules d'occasion &nbsp &nbsp<img
                            src="<?php echo get_template_directory_uri(); ?>/images/arrows.png" class="img-fluid">
                </button>
                </a>
            </div>
        </div>

        <div class="row">
            <div class="col-12 center">
                <a href="http://pros.lacentrale.fr/C043313/cat-AUTO/" target="_blank">
                <button type="button" class="btn btn_vehicule propre">Véhicules propre &nbsp &nbsp<img
                            src="<?php echo get_template_directory_uri(); ?>/images/arrows.png" class="img-fluid">
                </button>
                </a>
            </div>
        </div>
    </div>
</section>


<section id="cars">
    <div class="container">
        <div class="row center">
            <div class="col-lg-2 offset-lg-10 col-12" id="btn_cars">
                <a href="http://pros.lacentrale.fr/C043313/cat-AUTO/" target="_blank">

                <button type="button" class="btn " id="">Plus de véhicules &nbsp;<img
                            src="<?php echo get_template_directory_uri(); ?>/images/arrows.png"></button>
                </a>
            </div>
        </div>
    </div>
    <h2 class="center">Véhicules d'occasions</h2>
    <br>
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <?php
            $active = 0;
            $query  = new WP_Query(array('post_type' => 'voitures', 'post_per_page' => 2,));
            if ($query->have_posts()) : ?>
                <?php while ($query->have_posts()) : $query->the_post(); ?>

                    <div class="carousel-item <?php if ($active == 0) {
                        echo "active";
                        $active = 1;
                    } ?>">
                        <div class="container">
                            <div class="row center">
                                <div class="col-md-10 offset-md-1">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <?php
                                            $image = get_field('image_du_vehicule', get_the_ID());
                                            ?>
                                            <div class="img_voiture">
                                                <img src="<?php echo $image["url"] ?>" class="">
                                            </div>
                                            <h3><?php the_title() ?></h3>
                                        </div>
                                        <div class="col-lg-6" style="text-align: justify">
                                            <div class="col-10 offset-md-2 info">
                                                <p>
                                                    <strong>Année </strong>: <?php the_field('annee_du_vehicule', get_the_ID()) ?>
                                                </p>
                                                <p><strong>
                                                        Kilométrage </strong>: <?php the_field('kilometrage', get_the_ID()) ?>
                                                </p>
                                                <p><strong> Prix </strong>: <?php the_field('prix', get_the_ID()) ?></p>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                <?php endwhile;
                wp_reset_postdata(); ?>
                <!-- show pagination here -->
            <?php else : ?>
                <!-- show 404 error here -->
            <?php endif; ?>

        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true" style="color: black"><img
                        src="<?php echo get_template_directory_uri() ?>/images/arrows_left.png"
                        class="arrow_slider"> </span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"><img
                        src="<?php echo get_template_directory_uri() ?>/images/arrows.png" class="arrow_slider"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>
<!-- ************** VEHICULES PROPRES **************** -->

<section id="vpropresec">
    <div class="container">
        <div class="row center">
            <div class="col-lg-2 offset-lg-10 col-12" id="btn_cars">
                <a href="http://pros.lacentrale.fr/C043313/cat-AUTO/" target="_blank">

                <button type="button" class="btn" id="">Plus de véhicules &nbsp;<img
                        src="<?php echo get_template_directory_uri(); ?>/images/arrows.png"></button>
                </a>
            </div>
        </div>
    </div>
    <div class="container">

        <div class="row">
            <div class="col-lg-7 col-md-8 mx-auto" id="vproprediv">
                <div class="col-12">
                    <h2>Véhicules propres</h2>
                    <p>Faites un geste pour l’environnement et
                        passez au vert ! <br><br>
                        Nous proposons une gamme complète de
                        voitures propres. Hybrides ou électriques,
                        profitez d’un large choix de véhicule avec
                        faible émissions de co2, particules et
                        bénéficiez des conseils de nos experts. <br><br>
                        N’oubliez pas que d’ici une dizaine d’années
                        il y a de grandes chances de ne voir plus que
                        ce type de voiture</p>
                </div>
            </div>
        </div>
    </div>

</section>

<!-- ************** CONTACT FORM **************** -->

<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12 " id="googlemapdiv">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2618.5767039179786!2d2.170982215592226!3d48.980581679299625!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e660e01fc47415%3A0x4472d885dfa7bdc!2s1+Rue+Jean+Lefebvre%2C+95530+La+Frette-sur-Seine!5e0!3m2!1sfr!2sfr!4v1516207627602"
                        id="googlemap" frameborder="0" style="border:0" allowfullscreen></iframe>

                <div id="googlemapdiv2">
                    <a href="https://www.google.com/maps/place/1+Rue+Jean+Lefebvre,+95530+La+Frette-sur-Seine/@48.9802533,2.1726046,16.21z/data=!4m5!3m4!1s0x47e660e01ff534c3:0xd718022d7fe9b36a!8m2!3d48.9806328!4d2.1730618?hl=fr-FR">Cliquez ici pour voir le plan sur Google Maps</a>
                </div>
            </div>
            <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12 offset-lg-2" id="form1">
                <h1>Nous contacter</h1>
                <?php
                echo do_shortcode('[contact-form-7 id="3" title="Contact form 1"]'); ?>


            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>



