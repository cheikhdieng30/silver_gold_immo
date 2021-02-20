<?php
    function getCarousel($image1, $image2, $image3)
    {
        echo "
            <div id=\"carouselExampleControls\" class=\"carousel slide\" data-ride=\"carousel\">
                <div class=\"carousel-inner\">
                    <div class=\"carousel-item active\">
                        <img class=\"d-block w-100\" style=\"height:300px\" src=\"$image1\" class=\"img-fluid\" alt=\"First slide\">
                    </div>
                    <div class=\"carousel-item\">
                        <img class=\"d-block w-100\" style=\"height:300px\" src=\"$image2\" class=\"img-fluid\" alt=\"Second slide\">
                    </div>
                    <div class=\"carousel-item\">
                        <img class=\"d-block w-100\" style=\"height:300px\" src=\"$image3 \" class=\"img-fluid\" alt=\"Third slide\">
                    </div>
                </div>
                <a class=\"carousel-control-prev\" href=\"#carouselExampleControls\" role=\"button\" data-slide=\"prev\">
                    <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                    <span class=\"sr-only\">Previous</span>
                </a>
                <a class=\"carousel-control-next\" href=\"#carouselExampleControls\" role=\"button\" data-slide=\"next\">
                    <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                    <span class=\"sr-only\">Next</span>
                </a>
            </div>
        ";
    }

