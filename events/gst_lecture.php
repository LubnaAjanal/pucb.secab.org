<?php
include('../headers/header1.php');
?>
<style>
    .bom-title {
        text-align: center;
        font-size: 20px;
        font-weight: bold;
        background-color: burlywood;
        width: 50%;
        padding: 17px;
        margin: 0 0 5% 28%;
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
                <h2>Guest Lecture by Dr Nikhat Inamdar Dr Sana Baigh</h2>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <ul class="bread-list">
                    <li><a href="index.html">Home<i class="fa fa-angle-right"></i></a></li>
                    <li class="active"><a href="#">Guest Lecture by Dr Nikhat Inamdar Dr Sana Baigh</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--/ End Breadcrumb -->

<!-- Womens Day -->
<section id="international-womens-day" class="mt-5 mb-5">
    <div class="container">
        <h2 class="bom-title">Guest Lecture by Dr Nikhat Inamdar Dr Sana Baigh</h2>
        <div class="row">
            <div class="col-md-8">
                <p>SECAB PU COLLEGE FOR BOYS ORGANIZED guest lecture by Dr Nikhat Inamdar Dr Sana Baigh ,
                    PG Scholars from SECAB Unani Medical College, on Health care and hygiene for girl students
                    to guide them.The students interacted and were benefited abundantly from the same.
                    Arts HOD Ms N A Dakhani. S K kattimani Ms Sana &Ms Umera were Present.
                </p>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-4">
                <div class="image-container">
                    <img src="../images/events/" class="img-fluid rounded shadow-sm mb-4" alt="Image 1">
                </div>
            </div>
            <div class="col-md-4">
                <div class="image-container">
                    <img src="../images/events/" class="img-fluid rounded shadow-sm mb-4" alt="Image 2">
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