<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="/images/logo_auto_ecole.svg" type="image/x-icon">
    <title>Silver Gold Immobillier</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/css/app.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.9.0/css/all.css">

</head>

<body>
    <!-- Nav bar -->
    <?php
    include_once('pages/nav.php')
    ?>
    <!-- Banniere -->
    <div class="cover-accueil ">
        <img src="/images/cover-accueil.jpeg" class="img-fluid" alt="Image banniere">
    </div>
    <!-- Jumbotron -->

    <!--- Section Location & vente appartement/maison --->
    <div class="bg-app-mai">
        <div class="container">
            <div class="row d-flex align-items-center">
                <h2 class="mt-5 text-center pb-5">Location & vente appartement/maison</h2>
                <div class="col-md-6">
                    <img src="/images/appartement/2.jpeg" class="img-fluid " width="100%" style="height: 350px;" alt="Image Location & vente appartement/maison">
                </div>
                <div class="col-md-6">
                    <p>
                        SILVER & GOLD IMMO vous propose une large gamme de produits immobiliers se trouvant au Sénégal et accessibles financièrement à tous.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!--- Section Location matériels de construction --->
    <div class="loc-mat">
        <div class="container">
            <div class="row d-flex align-items-center">
                <h2 class="mt-5 text-center pb-5">Location matériels de construction</h2>
                <div class="col-md-6">
                    <p class="text-justify">
                        SILVER & GOLD IMMOBILIER vous propose Une gamme complète de matériels récents et de grandes marques,Le conseil et l’assistance de professionnels confirmés La souplesse des formules de location, de 1 jour à 2 ans et plus,L’entretien et le contrôle systématique des matériels avant chaque location,La mise en main des matériels et la formation de vos équipes,Une garantie de service et des procédures certifiées
                    </p>
                </div>
                <div class="col-md-6">
                    <img src="/images/contruction.jpeg" class="img-fluid " width="100%" alt="Image Location & vente appartement/maison">
                </div>
            </div>
        </div>
    </div>
    <!--- Section Location Gérance --->
    <div class="gerance">
        <div class="container">
            <div class="row d-flex align-items-center">
                <h2 class="mt-5 text-center pb-5">Gérance</h2>
                <div class="col-md-6">
                    <img src="/images/gerance1.jpeg" class="img-fluid " width="100%" alt="Image Location & vente appartement/maison">
                </div>
                <div class="col-md-6">
                    <p class="text-justify">
                        SILVER & GOLD IMMOBILIER Administre un ou plusieurs sites immobiliers et met en oeuvre les moyens techniques, administratifs, financiers et comptables de conservation ou d’amélioration du patrimoine immobilier selon la réglementation. Notre gestion consiste à: <br>
                    </p>
                    <ul class="mt-5">
                        <li>
                            <i class="fas fa-chevron-circle-right"></i>
                            Définir une stratégie de gestion du patrimoine immobilier
                        </li>

                        <li>
                            <i class="fas fa-chevron-circle-right"></i>
                            Planifier des travaux de rénovation, de réhabilitation de patrimoine immobilier
                        </li>
                        <li>
                            <i class="fas fa-chevron-circle-right"></i>
                            Définir les besoins en rénovation du patrimoine immobilier
                        </li>
                        <li>
                            <i class="fas fa-chevron-circle-right"></i>
                            Étudier la faisabilité technique, juridique et financière d’un projet
                        </li>
                        <li>
                            <i class="fas fa-chevron-circle-right"></i>
                            Sélectionner des fournisseurs, sous-traitants, prestataires
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
    <!--- Section Location Recouvrement --->
    <div class="recouvrement">
        <div class="container">
            <div class="row d-flex align-items-center">
                <h2 class="mt-5 text-center pb-5">Recouvrement</h2>
                <div class="col-md-6">
                    <img src="/images/recouvrement1.jpeg" class="img-fluid " width="100%" alt="Image Recouvrement">
                </div>
                <div class="col-md-6">
                    <p>
                        Qu’est-ce que le recouvrement des créances ? On appelle recouvrement de créances une activité réglementée permettant d’utiliser tous les moyens légaux à l’amiable ou judiciaires
                    </p>

                </div>
            </div>
        </div>
    </div>
    <!--- Section Location Syndic --->
    <div class="syndic">
        <div class="container">
            <div class="row d-flex align-items-center">
                <h2 class="mt-5 text-center mb-5">Syndic</h2>
                <div class="col-md-6">
                    <p>
                        Un syndic est une personne désignée dans un immeuble par l’assemblée générale des copropriétaires pour prendre en charge la gestion des ‘parties communes’. Il est en quelque sorte l’organe exécutif de l’Association des Copropriétaires.
                    </p>

                </div>

                <div class="col-md-6">
                    <img src="/images/syndic1.jpeg" class="img-fluid " width="100%" alt="Image Syndic">
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <?php include_once('pages/footer.php')  ?>
    <!-- Bootstrap core JS-->
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Animation --->
    <!-- GSAP -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.2/TweenMax.min.js"></script>

    <!-- ScrollMagic -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.6/ScrollMagic.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.6/plugins/debug.addIndicators.js"></script>

    <!--GSAP animation plugin should be placed after ScrollMagic! -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.6/plugins/animation.gsap.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
    <!-- Third party plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="/js/app.js"></script>
</body>

</html>