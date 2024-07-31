<?php
include('../headers/header1.php');
?>
<style>
    .bom-title {
        font-size: 20px;
        text-align: center;
        font-weight: bold;
        background-color: burlywood;
        width: 25%;
        font-size: 20px;
        padding: 17px;
        margin: 0 0 5% 34%;
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
<div class="breadcrumbs overlay" style="background-image:url('../images/eventb.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
                <h2>Moral And Human Values</h2>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <ul class="bread-list">
                    <li><a href="index.html">Home<i class="fa fa-angle-right"></i></a></li>
                    <li class="active"><a href="#">Moral And Human Values</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--/ End Breadcrumb -->

<!-- Womens Day -->
<section id="international-womens-day" class="mt-5 mb-5">
    <div class="container">
        <h2 class="bom-title">Moral And Human Values</h2>
        <div class="row">
            <div class="col-md-8">
                <p>Annual Day was celebrated on Saturday 05th Jan 2019 wherein the corporation Commissioner of VijaypurDr.AudramKAS was a chief guest. He described student life as a golden period of human life Mr.S.A.Punekar President of SECAB Association presided our the function and suggested the Corporation Commissioner to plan to protect and Maintain the grand monuments of the city.</p>
                <ol class="ml-3">
                    <li>Meritorious students were felicitated.</li>
                    <li>Cultural and sports prizes were distributed</li>
                    <li>Outstanding lecturers were honoured for their academic excellency</li>
                </ol>
                <p>The General Secretary of the College ushered the vote of thanks</p>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-4">
                <div class="image-container">
                    <img src="../images/events/" class="img-fluid rounded shadow-sm mb-4" alt="Image 1">
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