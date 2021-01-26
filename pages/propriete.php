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
    <div class="cover-propriete">
        <img src="/images/plans-house.jpg" class="img-fluid" alt="Image banniere">
    </div>
    <div class="container-fluid">
        <div class="row mt-5 mx-auto " id="animate4">
            <h1 class="text-center pb-4">Appartement meublés</h1>
            <div class="col-md-4 my-2">
                <img src="/images/appartement/4.jpeg" class="img-fluid am-js" alt="Image banniere" style="width:100%; height:100%">
            </div>
            <div class="col-md-4 my-2">
                <img src="/images/appartement/5.jpeg" class="img-fluid am-js" alt="Image banniere" style="width:100%; height:100%">
            </div>
            <div class="col-md-4 my-2">
                <img src="/images/appartement/2.jpeg" class="img-fluid am-js" alt="Image banniere" style="width:100%; height:100%">
            </div>
        </div>

        <div class="row mt-5 mx-auto " id="animate5">
            <h1 class="text-center pb-4">Appartement non meublés</h1>
            <div class="col-md-4 my-2">
                <img src="/images/appartement/1.jpeg" class="img-fluid anm-js" alt="Image banniere" style="width:100%; height:100%">
            </div>
            <div class="col-md-4 my-2">
                <img src="/images/appartement/6.jpeg" class="img-fluid anm-js" alt="Image banniere" style="width:100%; height:100%">
            </div>
            <div class="col-md-4 my-2">
                <img src="/images/appartement/7.jpeg" class="img-fluid anm-js" alt="Image banniere" style="width:100%; height:100%">
            </div>
        </div>

        <div class="row mt-5 mx-auto " id="animate4">
            <h1 class="text-center pb-4">Maison</h1>
            <div class="col-md-4 my-2">
                <img src="/images/maison/maison3.jpeg" class="img-fluid am-js" alt="Image banniere" style="width:100%; height:100%">
            </div>
            <div class="col-md-4 my-2">
                <img src="/images/maison/maison1.jpeg" class="img-fluid am-js" alt="Image banniere" style="width:100%; height:100%">
            </div>
            <div class="col-md-4 my-2">
                <img src="/images/maison/maison2.jpeg" class="img-fluid am-js" alt="Image banniere" style="width:100%; height:100%">
            </div>
        </div>
        <div class="row mt-5 mx-auto " id="animate5">
            <h1 class="text-center pb-4">Matériels de construction</h1>
            <div class="col-md-4 my-2">
                <img src="/images/construction/4.jpeg" class="img-fluid anm-js" alt="Image banniere" style="width:100%; height:100%">
            </div>
            <div class="col-md-4 my-2">
                <img src="/images/construction/5.jpeg" class="img-fluid anm-js" alt="Image banniere" style="width:100%; height:100%">
            </div>
            <div class="col-md-4 my-2">
                <img src="/images/construction/2.jpeg" class="img-fluid anm-js" alt="Image banniere" style="width:100%; height:100%">
            </div>
        </div>
        <div class="row mt-5 mx-auto " id="animate5">
            <h1 class="text-center pb-4">Vente de terrain</h1>
            <div class="col-md-4 my-2">
                <img src="/images/terrain/1.jpeg" class="img-fluid anm-js" alt="Image banniere" style="width:100%; height:100%">
            </div>
            <div class="col-md-4 my-2">
                <img src="/images/terrain/2.jpeg" class="img-fluid anm-js" alt="Image banniere" style="width:100%; height:100%">
            </div>
            <div class="col-md-4 my-2">
                <img src="/images/terrain/3.jpeg" class="img-fluid anm-js" alt="Image banniere" style="width:100%; height:100%">
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