<?php
include('../header.php');
?>
<style>
    .bom-title {
        text-align: center;
        font-weight: bold;
        background-color: burlywood;
        font-size: 20px;
        width: 30%;
        padding: 17px;
        margin: 0 0 5% 35%;
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
<div class="breadcrumbs overlay" style="background-image:url('../images/breadcrumb-bg.jpg');margin-top:11%;">
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
        <h2 class="bom-title">A Talk on NEET</h2>
        <div class="row">
            <div class="col-md-8">
                <p>A talk on NEET ,was effectively presented by Dr Md Afzal, Principal,Secab Women's degree college. 
                    The students of Secab PU College for Boys were abundantly benefited. 
                    Hearfelt gratitude to Dr Md Afzal was ushered by Mr Saddam Mallick , 
                    student of 2nd PU Science., on behalf of Principal, HOD & staff of Boys college.</p>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-4">
                <div class="image-container">
                    <img src="../images/events/neettalk1.jpeg" class="img-fluid rounded shadow-sm mb-4" alt="Image 1">
                </div>
            </div>
            <div class="col-md-4">
                <div class="image-container">
                    <img src="../images/events/neettalk2.jpeg" class="img-fluid rounded shadow-sm mb-4" alt="Image 2">
                </div>
            </div>
            <div class="col-md-4">
                <div class="image-container">
                    <img src="../images/events/neettalk3.jpeg" class="img-fluid rounded shadow-sm mb-4" alt="Image 3">
                </div>
            </div>
        </div>
    </div>
</section>

<!--/ End Womens Day -->

<!-- Footer -->
<?php
include('../topFooter.php');
include('../bottomFooter.php');
?>