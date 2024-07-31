<?php
include('../headers/header1.php');
?>
<style>
    .bom-title {
        font-size: 20px;
        text-align: center;
        font-weight: bold;
        background-color: burlywood;
        width: 50%;
        font-size: 20px;
        padding: 17px;
        margin: 0 0 5% 25%;
        border-radius: 4px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.6);
    }

    #international-womens-day p {
        font-size: 18px;
        line-height: 1.6;
    }

    .img-fluid {
        max-width: 100%;
        height: auto;
        transition: transform 0.2s ease-in-out;
    }

    .rounded {
        border-radius: 10px;
    }

    .shadow-sm {
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .image-container {
        position: relative;
        overflow: hidden;
    }

    .image-container:hover .img-fluid {
        transform: scale(1.1);
    }
</style>

<!-- Breadcrumb -->
<div class="breadcrumbs overlay" style="background-image:url('../images/award.webp');">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
                <h2>WOMENS DAY</h2>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <ul class="bread-list">
                    <li><a href="index.html">Home<i class="fa fa-angle-right"></i></a></li>
                    <li class="active"><a href="#">Womens Day<i class="fa fa-angle-right"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--/ End Breadcrumb -->

<!-- Womens Day -->
<section id="international-womens-day" class="mt-5 mb-5">
    <div class="container">
        <!-- <h2 class="bom-title">Got Permission to Establish Atal Tinkering Lab</h2> -->
        <div class="row">
            <div class="col-md-8">
                <p>
                    It is a matter of great pride to SECAB Management, Principal and staff of SECAB PU College for Boys Staff to affirm that Ms.Sana Mujawar of IIPU Science was adjudged as the State Level First Rank holder who has scored 580/600 in II PU Annual exam March 2018, amongst the Urdu medium students, was felicitated with Gold Medal on 24.02.2019 by Anjuman Taraqi -e - Urdu Hind Gulbarga in the presence of Mr. Iqbal Ahmad Saradagi MLC Gulbarga & other dignitaries.
                </p>
                <p>Congratulations, as she has made the measurable achievable realistic & time bound goal for her future which helps in boosting her career options.
                    Best of Luck
                </p>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-4">
                <div class="image-container">
                    <img src="../images/awards/stlvfr.jpeg" class="img-fluid rounded shadow-sm mb-4" alt="Image 1">
                </div>
            </div>
        </div>
    </div>
</section>

<!--/ End Womens Day -->

<!-- Footer -->
<?php
include('../headers/topFooter.php');
include('../headers/bottomFooter.php');
?>