<?php
include('../header.php');
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
        <h2 class="bom-title">Got Permission to Establish Atal Tinkering Lab</h2>
        <div class="row">
            <div class="col-md-8">
                <p>
                    A matter of great pleasure to share that, in the whole of North Karnataka, SECAB PU College for BOYS, got permission to establish Atal Tinkering Lab (ATL) by NITI Ayog New Delhi . In this regard , Ms Neha Fakih Director student Alliance Robokart Mumbai, addressed the science faculty which threw light on aiding the students from 6th to 12th standard , to develop the creativity, scientific temperament and promote innovators of the Nation.
                </p>
                <p>On this occasion, Mr.Salhauddin Ayubi Director, Secab Association guided the Science staff to avail the benefits of the same. Mr N S .Bhusnur Principal, Dr S R Byakod b co-ordinator, Mr Arif Makandar, Ms Naziya Sangalikar and Science staff were present.</p>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-4">
                <div class="image-container">
                    <img src="../images/awards/atl191.jpeg" class="img-fluid rounded shadow-sm mb-4" alt="Image 1">
                </div>
            </div>
            <div class="col-md-4">
                <div class="image-container">
                    <img src="../images/awards/atl192.jpeg" class="img-fluid rounded shadow-sm mb-4" alt="Image 1">
                </div>
            </div>
            <div class="col-md-4">
                <div class="image-container">
                    <img src="../images/awards/atl193.jpeg" class="img-fluid rounded shadow-sm mb-4" alt="Image 1">
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