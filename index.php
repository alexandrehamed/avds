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

        <div class="row">
            <div class="col-12">
                <div class="col-md-3  ml-auto col-xs-12 ">
                    <button type="button" id="section1button" class="btn btn-secondary">Tous nos véhicules</button>
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
                    <p style="text-align: justify">Quapropter a natura mihi videtur potius quam ab indigentia orta
                        amicitia, applicatione magis animi cum quodam sensu amandi quam cogitatione quantum illa res
                        utilitatis esset habitura. Quod quidem quale sit, etiam in bestiis quibusdam animadverti potest,
                        quae ex se natos ita amant ad quoddam tempus et ab eis ita amantur ut facile earum sensus
                        appareat. Quod in homine multo est evidentius, primum ex ea caritate quae est inter natos et
                        parentes, quae dirimi nisi detestabili scelere non potest; </p>
                </div>

            </div>
        </div>

        <h3 class="center" id="garantie">Nous vous garantisons :</h3>

        <div class="row">
            <div class="col-12">
                <div id="container_icone">
                    <div class="row center">

                        <div class="col-md-2 col-2 offset-md-2 offset-sm-1"><img
                                    src="<?php echo get_template_directory_uri(); ?>/images/icone1.png" alt=""><br>
                            <p>Sécurité</p></div>
                        <div class="col-md-2 col-2 offset-md-1 offset-sm-2"><img
                                    src="<?php echo get_template_directory_uri(); ?>/images/icone2.png" class="" alt=""><br>
                            <p>Professionnalisme</p></div>
                        <div class="col-md-2 col-2  offset-md-1 offset-sm-2"><img
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
                    <img src="<?php echo get_template_directory_uri(); ?>/images/ford_voiture_16.png" class="img-fluid">
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


<section class="vehicules">

    <div class="container">
        <div class="row">
            <div class="col-12 center">
                <button type="button" class="btn btn-secondary btn_vehicule">Véhicules d'occasion &nbsp &nbsp<img src="<?php echo get_template_directory_uri();?>/images/arrows.png" class="img-fluid"></button>
            </div>
        </div>

        <div class="row">
            <div class="col-12 center">
                <button type="button" class="btn btn-secondary btn_vehicule">Véhicules d'occasion &nbsp &nbsp<img src="<?php echo get_template_directory_uri();?>/images/arrows.png" class="img-fluid"></button>
            </div>
        </div>
    </div>
</section>


<section id="cars">
    <div class="container">
        <div class="row center">
            <div class="col-md-2 offset-md-10 col-12" id="btn_cars">
                    <button type="button" class="btn btn-success " id="">Plus de véhicules &nbsp;<img src="<?php echo get_template_directory_uri();?>/images/arrows.png"></button>
        </div>
    </div>
    </div>
    <h2 class="center">Véhicules d'occasions</h2>
    <br>
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container">
                    <div class="row center">
                        <div class="col-md-5 offset-1">
                            <div class="row">
                                <div class="col-12">
                                    <div class="rond-gris">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/ford_voiture_16.png" class="img-fluid">
                                        <h3>Les sous-traitants</h3>
                                    </div>

                                    <div class="row" style="text-align: justify">
                                        <div class="col-10 offset-2 info">
                                            <p><strong>Année </strong>: 2015</p>
                                            <p><strong> Kilométrage </strong>: 86 987km</p>
                                            <p><strong> Prix </strong>: 10 000 €</p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 offset-">
                            <div class="row">
                                <div class="col-12">
                                    <div class="rond-gris">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/ford_voiture_16.png" class="img-fluid">
                                        <h3>Les sous-traitants</h3>
                                    </div>

                                    <div class="row" style="text-align: justify">
                                        <div class="col-10 offset-2 info">
                                            <p><strong>Année </strong>: 2015</p>
                                            <p><strong> Kilométrage </strong>: 86 987km</p>
                                            <p><strong> Prix </strong>: 10 000 €</p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row center">
                        <div class="col-md-5 offset-1">
                            <div class="row">
                                <div class="col-12">
                                    <div class="rond-gris">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/ford_voiture_16.png" class="img-fluid">
                                        <h3>Les sous-traitants</h3>
                                    </div>

                                    <div class="row" style="text-align: justify">
                                        <div class="col-10 offset-2 info">
                                            <p><strong>Année </strong>: 2015</p>
                                            <p><strong> Kilométrage </strong>: 86 987km</p>
                                            <p><strong> Prix </strong>: 10 000 €</p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 offset-">
                            <div class="row">
                                <div class="col-12">
                                    <div class="rond-gris">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/ford_voiture_16.png" class="img-fluid">
                                        <h3>Les sous-traitants</h3>
                                    </div>

                                    <div class="row" style="text-align: justify">
                                        <div class="col-10 offset-2 info">
                                            <p><strong>Année </strong>: 2015</p>
                                            <p><strong> Kilométrage </strong>: 86 987km</p>
                                            <p><strong> Prix </strong>: 10 000 €</p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row center">
                        <div class="col-md-5 offset-1">
                            <div class="row">
                                <div class="col-12">
                                    <div class="rond-gris">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/ford_voiture_16.png" class="img-fluid">
                                        <h3>Les sous-traitants</h3>
                                    </div>

                                    <div class="row" style="text-align: justify">
                                        <div class="col-10 offset-2 info">
                                            <p><strong>Année </strong>: 2015</p>
                                            <p><strong> Kilométrage </strong>: 86 987km</p>
                                            <p><strong> Prix </strong>: 10 000 €</p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 offset-">
                            <div class="row">
                                <div class="col-12">
                                    <div class="rond-gris">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/ford_voiture_16.png" class="img-fluid">
                                        <h3>Les sous-traitants</h3>
                                    </div>

                                    <div class="row" style="text-align: justify">
                                        <div class="col-10 offset-2 info">
                                            <p><strong>Année </strong>: 2015</p>
                                            <p><strong> Kilométrage </strong>: 86 987km</p>
                                            <p><strong> Prix </strong>: 10 000 €</p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true" style="color: black"><img src="<?php echo get_template_directory_uri()?>/images/arrows_left.png" class="arrow_slider"> </span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"><img src="<?php echo get_template_directory_uri()?>/images/arrows.png" class="arrow_slider"></span>
            <span class="sr-only">Next</span>
        </a>
    </div></section>

<!-- ************** VEHICULES PROPRES **************** -->

<section id="vpropresec">
    <div class="container-fluid">
        <div class="row">
            <div class="col-2 ml-auto">
                <button> Acheter un véhicule</button>
            </div>
        </div>
    </div>
    <div class="container">

        <div class="row">
            <div class="col-6 mx-auto" id="vproprediv">
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

<section id="contactform">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2618.5767039179786!2d2.170982215592226!3d48.980581679299625!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e660e01fc47415%3A0x4472d885dfa7bdc!2s1+Rue+Jean+Lefebvre%2C+95530+La+Frette-sur-Seine!5e0!3m2!1sfr!2sfr!4v1516207627602"
                        width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12 offset-lg-2" id="form1">
                <h1>Nous contacter</h1>
                <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nom</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                               placeholder="Votre nom">

                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Prénom</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                               placeholder="Votre prénom">

                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Adresse mail</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                               placeholder="Votre adresse mail">
                        <small id="emailHelp" class="form-text text-muted">Nous ne partagerons jamais votre adresse
                            mail.
                        </small>
                    </div>

                    <div class="form-group">
                        <label for="exampleTextarea">Message</label>
                        <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
                    </div>
                    <div id="centerbutton">
                        <button type="submit" class="btn btnsubmit">Envoyer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<?php get_footer();?>


