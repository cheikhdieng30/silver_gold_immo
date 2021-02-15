<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="/images/logo_auto_ecole.svg" type="image/x-icon">
    <title>Contact</title>
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
    include_once('nav.php')
    ?>
    <!-- Banniere qui sommes nous --->
    <div class="cover-contact">
        <img src="/images/contact.jpg" class="img-fluid" alt="Image banniere">
    </div>
    <!-- Contact -->

    <section class="mt-5 mb-5 page contact" id="contact">

        <div class="contenu-page text-center">
            <h3 class="pt-3 pb-3"><strong>Silver Gold Immobillier</strong>, partenaire incontournable de l'immobillier au senegal</h3>

        </div>
        <div class="container ">
            <div class="row mt-5">
                <div class="col-md-8">
                    <?php
                    include_once('carousel.php');
                    $image1 = "/images/bureau/1.jpeg";
                    $image2 = "/images/bureau/2.jpeg";
                    $image3 = "/images/bureau/3.jpeg";
                    getCarousel($image1, $image2, $image3);
                    ?>
                </div>
                <div class="col-md-4 mx-auto" id="animate1" style="background-color: #f6f6f6;">
                    <div class="row text-center d-flex align-items-center ">
                        <div class="col-md-12 my-2 bloc-contact">
                            <div class="info-contact">
                                <i class="mt-5 fas fa-map-marker-alt"></i>
                                <p>Sacré coeur 2 Lot N 8319H <br> Dakar Sénégal Dakar</p>
                            </div>
                        </div>
                        <div class="col-md-12 my-2 bloc-contact">
                            <div class="info-contact">
                                <i class="mt-5 fas fa-mobile-alt"></i>
                                <p>+221 33 827 87 27 <br> +221 33 77 115 47 20</p>
                            </div>
                        </div>
                        <div class="col-md-12 my-2 bloc-contact">
                            <div class="info-contact">
                                <i class="mt-5 far fa-envelope"></i>
                                <p>silverimmo@hotmail.com <br> silverimmo@silverimmo.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid contact-info">
            <div class="container ">
                <div class=" bloc-form-contact text-center pt-5">
                    <h2 class="mt-5">Contactez nous !</h2>
                    <p>
                        Si vous avez des questions sur les services que nous fournissons, utilisez simplement le formulaire ci-dessous. Nous essayons de répondre à toutes les questions et commentaires dans les 24 heures.

                    </p>
                    <div class="res-form mx-1"></div>
                </div>
                <form id="contactForm" class="pt-3 pb-5" name="sentMessage" novalidate="novalidate" method="post" action="/pages/contact.php">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input type="prenom" name="prenom" placeholder="Entrez votre prenom" class="form-control rounded-0" id="inputprenom">
                        </div>
                        <div class="form-group col-md-6">
                            <input type="nom" name="nom" placeholder="Entrez votre nom" class="form-control rounded-0" id="inputnom">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input type="email" name="email" placeholder="Entrez votre email" class="form-control rounded-0" id="inputemail">
                        </div>
                        <div class="form-group col-md-6">
                            <input type="telephone" name="telephone" placeholder="Entrez votre numéro telephone" class="form-control rounded-0" id="inputtelephone">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <input type="sujet" name="sujet" placeholder="Entrez votre sujet" class="form-control rounded-0" id="inputsujet">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <textarea class="form-control rounded-0" name="message" placeholder="Entrez votre message ici ..." id="exampleFormControlTextarea1" rows="2"></textarea>
                            </div>
                        </div>
                    </div>
                    <button type="submit" id="btn-form" class="btn btn-primary btn-lg rounded-0">Envoyer votre message</button>
                </form>
            </div>
        </div>
        <!--- Google Maps --->
        <div class="elementor-custom-embed"><iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=silver%20gold%2C%20SACRE-COEUR%202%20LOT%20N%208619H%2C%20Dakar%2C%20S%C3%A9n%C3%A9gal&amp;t=m&amp;z=14&amp;output=embed&amp;iwloc=near" title="silver gold, SACRE-COEUR 2 LOT N 8619H, Dakar, Sénégal" aria-label="silver gold, SACRE-COEUR 2 LOT N 8619H, Dakar, Sénégal"></iframe></div>
        </div>
    </section>

    <!-- Footer -->
    <?php include_once('footer.php')  ?>
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