<?php get_header(); ?>


<!--Slide 2 Qui sommes nous ? -->
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


<section id="about">
    <div class="container">
        <div class="row">

            <div >
            <div class="col-lg-5 col-md-8 mx-auto" id="about_texte">
                <h3 class="center"><strong>Qui sommes nous ?</strong></h3>
                <br>
                <p style="text-align: justify">Quapropter a natura mihi videtur potius quam ab indigentia orta amicitia, applicatione magis animi cum quodam sensu amandi quam cogitatione quantum illa res utilitatis esset habitura. Quod quidem quale sit, etiam in bestiis quibusdam animadverti potest, quae ex se natos ita amant ad quoddam tempus et ab eis ita amantur ut facile earum sensus appareat. Quod in homine multo est evidentius, primum ex ea caritate quae est inter natos et parentes, quae dirimi nisi detestabili scelere non potest; </p>
            </div>

            </div>
        </div>

        <h3 class="center" id="garantie">Nous vous garantisons :</h3>

        <div class="row">
            <div class="col-12">
                <div id="container_icone">
                    <div class="row center">

                        <div class="col-md-2 col-2 offset-md-2 offset-sm-1"><img src="<?php echo get_template_directory_uri();?>/images/icone1.png"  alt=""><br><p>Sécurité</p></div>
                        <div class="col-md-2 col-2 offset-md-1 offset-sm-2"><img src="<?php echo get_template_directory_uri();?>/images/icone2.png" class="" alt=""><br><p>Professionnalisme</p></div>
                        <div class="col-md-2 col-2  offset-md-1 offset-sm-2"><img src="<?php echo get_template_directory_uri();?>/images/icone3.png" class="" alt=""><br><p>Qualité</p></div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



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
                       <strong> <p class="description_partenaire">- Préparation mécanique ( points de contrôles sécurité systématiques et remise en état )
                            <br>
                            - Préparation Esthètique ( intérieur, extérieur )
                        </p></strong>
                    </div>

                </div>
            </div>
            <div class=" col-md-5 col-sm-12 offset-md-2 rond-gris">
                <div class="rond-gris" >
                    <img src="<?php echo get_template_directory_uri(); ?>/images/ford_voiture_16.png" class="img-fluid">
                    <h3>Société Viaxel</h3>
                </div>

                <div class="row">
                    <div class="col-8 mx-auto">
                      <strong>  <p class="description_partenaire">
                              Société de crédit avec laquelle on peut établir un dossier de financement adapté aux besoins
                              du client .
                        </p>
                      </strong>
                    </div>

                </div>

            </div>

        </div>
    </div>

</section>

<?php get_footer();?>

