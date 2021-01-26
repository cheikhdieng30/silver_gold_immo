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
    <div class="cover-acceuil">
        <img src="/images/covetr-accueil.jpeg" class="img-fluid" alt="Image banniere">
    </div>
    <!-- Jumbotron -->
    <section class="jumbotron jumbotron-fluid ">
        <div class="container">
            <div class="row d-flex text-center align-items-center mt-4">
                <div class="col-xs-12 col-sm-12 col-md-4 qui-sommes-nous">
                    <img src="/images/logo.png " class="mt-3 mb-3 img-fluid" alt="image jumbotron" style="width:300px; height:300px">
                </div>
                <div class="col-xs-12 col-sm-12 col-md-8 qui-sommes-nous-text">
                    <p class="text-muted text-justify">
                        Crée en 2013, SILVER IMMOBLIER devient un partenaire incontournable dans la location d'immeuble de dernière génération. En 2018, en vue de dynamiser son éventail d’action; le groupe SILVER IMMO prend son envol sur le marché de l’immobilier au Sénégal. SILVER & GOLD est né. Avec un service à la carte qui vous accompagne dans toutes vos démarches; notre équipe vise les meilleurs standards de qualité. Nous comptons dans nos compétences la location d 'appartements haut de gamme, la location d'appartements meublés, la décoration intérieure, ainsi que les finitions. De plus, pour plus de quietude, SIVER & GOLD reste votre partenaire privilégié dans la gestion de vos biens immobiliers. Loyauté, engagement, et performance font notre force. Faire affaire avec l’équipe SILVER & GOLD c'est choisir l'expertise au service de l'immobilier. AVEC SILVER & GOLD, VIVEZ L’IMMOBILIER CONFORTABLEMENT !
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!--- Section Location & vente appartement/maison --->
    <section class="contenu-appartement mt-5">
        <div class="container">
            <div class="text-center">
                <h1 class="pt-3 pb-3">Location & vente appartement / maison</h1>
                <p>
                    SILVER & GOLD IMMOBILIER vous propose une large gamme de produits immobiliers se trouvant au Sénégal et accessibles financièrement à tous.
                </p>
            </div>
            <div class="    ">
                <div class="row">
                    <div class="col-md-12 col-lg-6">
                        <div class="bloc-appartement">
                            <img src="/images/appartement/8.jpeg" width="100%" alt="">
                            <h4>Appartement</h4>

                        </div>
                    </div>
                    <div class="col-md-12 col-lg-6">
                        <div class="bloc-maison">
                            <img src="/images/maison/maison4.jpeg" width="100%" alt="">
                            <h4>Maison</h4>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--- Section Location matériels de construction --->
    <section class="contenu-materiels mt-5">
        <div class="container">
            <div class="text-center">
                <h1 class="pt-3 pb-3">Location matériels de construction</h1>
                <p>
                    SILVER & GOLD IMMOBILIER vous propose Une gamme complète de matériels récents et de grandes marques,Le conseil et l’assistance de professionnels confirmés La souplesse des formules de location, de 1 jour à 2 ans et plus,L’entretien et le contrôle systématique des matériels avant chaque location,La mise en main des matériels et la formation de vos équipes,Une garantie de service et des procédures certifiées
                </p>
                <div class="row pt-4">
                    <div class="col-md-10 mx-auto">
                        <?php
                        include_once('pages/carousel.php');
                        $image1 = "/images/construction/1.jpeg";
                        $image2 = "/images/construction/2.jpeg";
                        $image3 = "/images/construction/3.jpeg";
                        getCarousel($image1, $image2, $image3);
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--- Section Location Gérance --->
    <section class="contenu-gerance mt-5">
        <div class="container">
            <div class="text-center">
                <h1 class="pt-3 pb-3">Gérance</h1>
                <p>
                    SILVER & GOLD IMMOBILIER Administre un ou plusieurs sites immobiliers et met en oeuvre les moyens techniques, administratifs, financiers et comptables de conservation ou d’amélioration du patrimoine immobilier selon la réglementation.
                    Notre gestion consiste à:
                </p>

            </div>
            <div class="text-justify pt-3 bloc-gerance">
                <div class="row align-items-center">
                    <div class="my-3 col-md-6">
                        <div class="">
                            <img src="/images/gerance.jpeg" class="img-fluid" alt="Image banniere" style="width:100%; height:100%">
                        </div>
                    </div>
                    <div class="my-3 col-md-6">
                        <p>
                            <i class="fas fa-chevron-circle-right"></i>
                            Définir une stratégie de gestion du patrimoine immobilier
                        </p>

                        <p>
                            <i class="fas fa-chevron-circle-right"></i>
                            Planifier des travaux de rénovation, de réhabilitation de patrimoine immobilier
                        </p>
                        <p>
                            <i class="fas fa-chevron-circle-right"></i>
                            Définir les besoins en rénovation du patrimoine immobilier
                        </p>
                        <p>
                            <i class="fas fa-chevron-circle-right"></i>
                            Étudier la faisabilité technique, juridique et financière d’un projet
                        </p>
                        <p>
                            <i class="fas fa-chevron-circle-right"></i>
                            Sélectionner des fournisseurs, sous-traitants, prestataires
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--- Section Location Recouvrement --->
    <section class="contenu-recouvrement mt-5">
        <div class="container">
            <div class="text-center">
                <h1 class="pt-3 pb-3">Recouvrement</h1>
                <p>
                    Qu’est-ce que le recouvrement des créances ? On appelle recouvrement de créances une activité réglementée permettant d’utiliser tous les moyens légaux à l’amiable ou judiciaires
                </p>
            </div>
            <div class="row pt-4 bloc-recouvrement align-items-center">
                <div class="my-3 col-md-6">
                    <div class="">
                        <img src="/images/recouvrement.jpeg" class="img-fluid" alt="Image banniere" style="width:100%; height:100%">
                    </div>
                </div>
                <div class="my-3 col-md-6">
                    <p>Il existe deux techniques principales de recouvrement de créances :</p>
                    <ul class="text-justify" style="list-style: none">
                        <li>
                            <strong><i class="fas fa-caret-right"></i> recouvrement amiable : la première phase de relance client</strong> <br>
                            <small>
                                Le recouvrement amiable est la première phase du recouvrement : il est appliqué quand un impayé est constaté. Cette technique de recouvrement consiste à relancer le client débiteur par téléphone ou bien par courrier. Il est important de préciser que les politiques de recouvrement diffèrent selon les entreprises.
                                Plus une entreprise est grande, plus sa stratégie face aux impayés sera importante. Dans un premier temps, rien ne sert de s’alarmer, le mieux est de contacter le débiteur et comprendre les raisons de ce retard de paiement pour trouver ensemble une solution amiable adéquate.
                            </small>
                        </li>
                        <li>
                            <strong><i class="fas fa-caret-right"></i> recouvrement judiciaire ou contentieux</strong> <br>
                            <small>
                                Comme expliqué précédemment les procédures diffèrent selon les entreprises. Certaines entreprises se montreront fermes lors de leur échange avec le débiteur, là où d’autres entament directement une procédure de recouvrement judiciaire.
                                Ce type de recouvrement est plus onéreux pour le créancier puisqu’il sous-entend des actions en justice. Un recouvrement judiciaire peut se présenter sous la forme d’une injonction de payer déposée auprès du tribunal compétant pour obtenir un titre exécutoire. Ce titre permet à un huissier mandaté de déclencher une opération de saisie matérielle ou financière du mauvais payeur.
                            </small>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--- Section Location Syndic --->
    <section class="contenu-syndic mt-5">
        <div class="container">
            <div class="text-center">
                <h1 class="pt-3 pb-3">Syndic</h1>
                <p>
                    Un syndic est une personne désignée dans un immeuble par l’assemblée générale des copropriétaires pour prendre en charge la gestion des ‘parties communes’. Il est en quelque sorte l’organe exécutif de l’Association des Copropriétaires.
                </p>
            </div>
            <div class="row pt-4 bloc-syndic align-items-center">
                <div class="my-3 col-md-6">
                    <p class="text-justify">
                        Le syndic de copropriété établit et tient à jour la liste de tous les copropriétaires ainsi que les lots leur appartenant.

                        Le syndic doit convoquer une assemblée générale de copropriété au moins une fois pas an. À cette occasion, il établit l'ordre du jour de l'assemblée générale, avec la collaboration du conseil syndical. À la fin de l'assemblée, c'est également le syndic qui rédige le compte rendu de la réunion et envoi le procès-verbal aux copropriétaires.

                        Le syndic est ensuite chargé d'exécuter les délibérations de l'assemblée. La loi ne fixe aucun délai pour l'exécution des décisions: il est donc utile de le préciser dans la résolution.
                    </p>
                </div>
                <div class="my-3 col-md-6">
                    <div class="">
                        <img src="/images/syndic.jpeg" class="img-fluid" alt="Image banniere" style="width:100%; height:100%">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer -->
    <?php include_once('pages/footer.php')  ?>
    <!-- Bootstrap core JS-->
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
    <!-- Third party plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="/js/app.js"></script>
</body>

</html>