<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="/images/logo_auto_ecole.svg" type="image/x-icon">
    <title>Proprites</title>
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
    <div class="cover-accueil">
        <img src="/images/cover-accueil.jpeg" class="img-fluid" alt="Image banniere">
    </div>
    <div class="content-prop">
        <div class="container mt-5">
            <div class="row  mt-5 mb-5">
                <h2 class="text-center">
                    Appartements meublés
                </h2>
                <div class="col-md-6 col-lg-4 bloc-card-app">
                    <div class="card shadow" style="width: 22rem; height:auto;">
                        <!--<i class="mt-5 fas fa-home"></i>-->
                        <?php
                        include_once('carousel.php');
                        $image1 = "/images/appartement/1.jpeg";
                        $image2 = "/images/appartement/2.jpeg";
                        $image3 = "/images/appartement/3.jpeg";
                        getCarousel($image1, $image2, $image3);
                        ?>
                        <h3 class="text-left"> <i class="fas fa-map-marker-alt"></i> librete 6 exten pres de l'école david diop</h3>
                        <div class="d-flex justify-content-between">
                            <p>2 chambres - salon</p>
                            <p>3 chambres - salon</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 bloc-card-app">
                    <div class="card shadow" style="width: 22rem; height:auto;">
                        <!--<i class="mt-5 fas fa-home"></i>-->
                        <?php
                        include_once('carousel.php');
                        $image1 = "/images/appartement/4.jpeg";
                        $image2 = "/images/appartement/5.jpeg";
                        $image3 = "/images/appartement/6.jpeg";
                        getCarousel($image1, $image2, $image3);
                        ?>
                        <h3 class="text-left"> <i class="fas fa-map-marker-alt"></i> route de l'aeroport</h3>
                        <div class="d-flex justify-content-between">
                            <p>2 chambres - salon</p>
                            <p>3 chambres - salon</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 bloc-card-app">
                    <div class="card shadow" style="width: 22rem; height:auto;">
                        <!--<i class="mt-5 fas fa-home"></i>-->
                        <?php
                            include_once('carousel.php');
                            $image1 = "/images/appartement/7.jpeg";
                            $image2 = "/images/appartement/8.jpeg";
                            $image3 = "/images/appartement/9.jpeg";
                            getCarousel($image1, $image2, $image3);
                        ?>
                        <h3 class="text-left"> <i class="fas fa-map-marker-alt"></i> Corniche Ouest</h3>
                        <div class="d-flex justify-content-between">
                            <p>2 chambres - salon</p>
                            <p>3 chambres - salon</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-5 mb-5">
                <h2 class="text-center">
                    Appartements non meublés
                </h2>
                <div class="col-md-6 col-lg-4 bloc-card-appn">
                    <div class="card shadow" style="width: 22rem; height:auto;">
                        <!--<i class="mt-5 fas fa-home"></i>-->
                        <?php
                        include_once('carousel.php');
                        $image1 = "/images/bureau/1.jpeg";
                        $image2 = "/images/bureau/2.jpeg";
                        $image3 = "/images/bureau/3.jpeg";
                        getCarousel($image1, $image2, $image3);
                        ?>
                        <h3 class="text-left"> <i class="fas fa-map-marker-alt"></i> librete 6 exten pres de l'école david diop</h3>
                        <div class="d-flex justify-content-between">
                            <p>2 chambres - salon</p>
                            <p>3 chambres - salon</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 bloc-card-appn">
                    <div class="card shadow" style="width: 22rem; height:auto;">
                        <!--<i class="mt-5 fas fa-home"></i>-->
                        <?php
                        include_once('carousel.php');
                        $image1 = "/images/bureau/1.jpeg";
                        $image2 = "/images/bureau/2.jpeg";
                        $image3 = "/images/bureau/3.jpeg";
                        getCarousel($image1, $image2, $image3);
                        ?>
                        <h3 class="text-left"> <i class="fas fa-map-marker-alt"></i> Location & Vente Appartement</h3>
                        <div class="d-flex justify-content-between">
                            <p>2 chambres - salon</p>
                            <p>3 chambres - salon</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 bloc-card-appn">
                    <div class="card shadow" style="width: 22rem; height:auto;">
                        <!--<i class="mt-5 fas fa-home"></i>-->
                        <?php
                        include_once('carousel.php');
                        $image1 = "/images/bureau/1.jpeg";
                        $image2 = "/images/bureau/2.jpeg";
                        $image3 = "/images/bureau/3.jpeg";
                        getCarousel($image1, $image2, $image3);
                        ?>
                        <h3 class="text-left"> <i class="fas fa-map-marker-alt"></i> Location & Vente Appartement</h3>
                        <div class="d-flex justify-content-between">
                            <p>2 chambres - salon</p>
                            <p>3 chambres - salon</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row  mt-5 mb-5">
                <h2 class="text-center">
                    Maison
                </h2>
                <div class="col-md-6 col-lg-4 bloc-card-mai">
                    <div class="card shadow" style="width: 22rem; height:auto;">
                        <!--<i class="mt-5 fas fa-home"></i>-->
                        <video width="100%" height="100%" autoplay muted>
                            <source src="/videos/1.mp4" type="video/mp4">
                        </video>
                        <h3 class="text-left"> <i class="fas fa-map-marker-alt"></i> librete 6 exten pres de l'école david diop</h3>
                        <div class="d-flex justify-content-between">
                            <p>2 chambres - salon</p>
                            <p>3 chambres - salon</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 bloc-card-mai">
                    <div class="card shadow" style="width: 22rem; height:auto;">
                        <!--<i class="mt-5 fas fa-home"></i>-->
                        <?php
                        include_once('carousel.php');
                        $image1 = "/images/bureau/1.jpeg";
                        $image2 = "/images/bureau/2.jpeg";
                        $image3 = "/images/bureau/3.jpeg";
                        getCarousel($image1, $image2, $image3);
                        ?>
                        <h3 class="text-left"> <i class="fas fa-map-marker-alt"></i> librete 6 exten pres de l'école david diop</h3>
                        <div class="d-flex justify-content-between">
                            <p>2 chambres - salon</p>
                            <p>3 chambres - salon</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 bloc-card-mai">
                    <div class="card shadow" style="width: 22rem; height:auto;">
                        <!--<i class="mt-5 fas fa-home"></i>-->
                        <?php
                        include_once('carousel.php');
                        $image1 = "/images/bureau/1.jpeg";
                        $image2 = "/images/bureau/2.jpeg";
                        $image3 = "/images/bureau/3.jpeg";
                        getCarousel($image1, $image2, $image3);
                        ?>
                        <h3 class="text-left"> <i class="fas fa-map-marker-alt"></i> librete 6 exten pres de l'école david diop</h3>
                        <div class="d-flex justify-content-between">
                            <p>2 chambres - salon</p>
                            <p>3 chambres - salon</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
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