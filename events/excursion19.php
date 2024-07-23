<?php
include('../header1.php');
?>
<style>
    .bom-title {
        text-align: center;
        font-weight: bold;
        background-color: burlywood;
        width: 45%;
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
<div class="breadcrumbs overlay" style="background-image:url('../images/eventb.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
                <h2>An excursion was arranged for the students</h2>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <ul class="bread-list">
                    <li><a href="index.html">Home<i class="fa fa-angle-right"></i></a></li>
                    <li class="active"><a href="#">An excursion was arranged for the students</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--/ End Breadcrumb -->

<!-- Womens Day -->
<section id="international-womens-day" class="mt-5 mb-5">
    <div class="container">
        <h2 class="bom-title">An excursion was arranged for the students</h2>
        <div class="row">
            <div class="col-md-8">
                <p>An excursion was arranged for the students of SECAB PU college for BOYS to Mantur,Bagalkot.
                    The students had a great fun & were also exposed to the rich historical,
                    mythological stories presented in the form of statues . It was a treat to watch.
                    The staff of science Arts and commerce accompanied. The students enjoyed immensely.
                    Organizer Dr.MM.Jahagirdar,leads the program.
                </p>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-4">
                <div class="image-container">
                    <img src="../images/events/excdy191.jpeg" class="img-fluid rounded shadow-sm mb-4" alt="Image 1">
                </div>
            </div>
            <div class="col-md-4">
                <div class="image-container">
                    <img src="../images/events/excdy192.jpeg" class="img-fluid rounded shadow-sm mb-4" alt="Image 2">
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