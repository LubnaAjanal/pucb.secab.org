<?php
include('../headers/header1.php');
?>
<style>
    .bom-title {
        text-align: center;
        font-weight: bold;
        background-color: burlywood;
        width: 30%;
        font-size: 20px;
        padding: 17px;
        margin: 0 0 5% 30%;
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
                <h2>National Education Day</h2>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <ul class="bread-list">
                    <li><a href="index.html">Home<i class="fa fa-angle-right"></i></a></li>
                    <li class="active"><a href="#">National Education Day</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--/ End Breadcrumb -->

<!-- Womens Day -->
<section id="international-womens-day" class="mt-5 mb-5">
    <div class="container">
        <h2 class="bom-title">National Education Day</h2>
        <div class="row">
            <div class="col-md-8">
                <p>SECAB PU COLLEGE FOR BOYS,Vijaypur, observed today, National Education Day,
                    to commemorate the birth anniversary of Bharat Ratan Maulana Abul Kalam Azad ,
                    the great freedom fighter, writer,Social reformer, orator,
                    journalist & first Education Minister of free India . On this occasion,
                    a motivational session to the students was arranged to make the students to realise
                    the neccessity of the need of Education in their lives.The resource person
                    Ms. Mohsina Parveen Inamdar, Maharashtra, a fantastic Motivational Speaker and
                    corporate soft skills and personality development trainer,
                    wonderfully explained about the importance of education.
                    Students were benefited with her inspiring session. Principal NS.Bhusnur Presided over the
                    function & threw light on Moulana's contribution to the Nation as well.Dr MM.Jahagirdar
                    & Mr.AL.Nagur organised the event.
                </p>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-4">
                <div class="image-container">
                    <img src="../images/events/N_Educ_Dy2.jpeg" class="img-fluid rounded shadow-sm mb-4" alt="Image 1">
                </div>
            </div>
            <div class="col-md-4">
                <div class="image-container">
                    <img src="../images/events/N_Educ_Dy1.jpeg" class="img-fluid rounded shadow-sm mb-4" alt="Image 2">
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