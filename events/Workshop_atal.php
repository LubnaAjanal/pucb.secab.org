<?php
include('../headers/header1.php');
?>
<style>
    .bom-title {
        text-align: center;
        font-weight: bold;
        background-color: burlywood;
        width: 65%;
        font-size: 20px;
        padding: 17px;
        margin: 0 0 5% 20%;
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
                <h2>Workshop Conducted for PU Science Students at "ATAL TINKERING LAB"</h2>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <ul class="bread-list">
                    <li><a href="index.html">Home<i class="fa fa-angle-right"></i></a></li>
                    <li class="active"><a href="#">Workshop Conducted for PU Science Students at "ATAL TINKERING LAB"<i class="fa fa-angle-right"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--/ End Breadcrumb -->

<!-- Womens Day -->
<section id="international-womens-day" class="mt-5 mb-5">
    <div class="container">
        <h2 class="bom-title">Workshop Conducted for PU Science Students at "ATAL TINKERING LAB"</h2>
        <div class="row">
            <div class="col-md-8">
                <p>Students of SECAB PU College for Boys, were given one day training in workshop Conducted for
                    PU Science Students at ATAL TINKERING LAB..where in 15 boys and 10 girls
                    enthusiastically participated in the program as it boosted their inquisitiveness
                    and scientific temperment.The resource persons Mr Rashid shaikh & Mr Sayed Hasan Qadari
                    guided the students who did the experiments like voice Controlled LED, Robot ,
                    blinking LED & wired Robot. The Staff accompanied & encouraged the participants to
                    bring out the best of their abilities.</p>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-4">
                <div class="image-container">
                    <img src="../images/events/watal1.jpg" class="img-fluid rounded shadow-sm mb-4" alt="Image 1">
                </div>
            </div>
            <div class="col-md-4">
                <div class="image-container">
                    <img src="../images/events/watal2.jpg" class="img-fluid rounded shadow-sm mb-4" alt="Image 2">
                </div>
            </div>
            <div class="col-md-4">
                <div class="image-container">
                    <img src="../images/events/watal3.jpg" class="img-fluid rounded shadow-sm mb-4" alt="Image 3">
                </div>
            </div>
            <div class="col-md-4">
                <div class="image-container">
                    <img src="../images/events/watal4.jpg" class="img-fluid rounded shadow-sm mb-4" alt="Image 3">
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