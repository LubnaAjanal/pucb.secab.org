<?php
include('../headers/header1.php');
?>

<style>
    .library-section {
        padding: 30px 0 0 0;
        background-color: #f8f9fa;
    }

    .library-section h2 {
        font-size: 2.5rem;
        font-weight: bold;
        margin-bottom: 20px;
    }

    .library-section p {
        font-size: 1.1rem;
        line-height: 1.6;
    }

    .library-section img {
        border-radius: 8px;
        box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.5);
    }

    .image-section {
        padding: 60px 0;
        background-color: #ededff;
    }

    .image-box {
        position: relative;
        overflow: hidden;
        margin-bottom: 20px;
        border-radius: 6px;
        box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.7);
    }

    .image-box img {
        width: 100%;
        display: block;
        transition: transform 0.3s ease;

    }

    .image-box:hover img {
        transform: scale(1.1);
    }

    .image-caption {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        background-color: rgba(0, 0, 0, 0.7);
        color: #fff;
        padding: 10px;
        text-align: center;
        font-size: 1rem;
        transition: opacity 0.3s ease;
        opacity: 0;
    }

    .image-box:hover .image-caption {
        opacity: 1;
    }
</style>


<!-- Breadcrumb -->
<div class="breadcrumbs overlay" style="background-image:url('../images/headerPhotos/header6.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
                <h2>FACILITIES</h2>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <ul class="bread-list">
                    <li><a href="../index.php">Home<i class="fa fa-angle-right"></i></a></li>
                    <li class="active"><a href="#">facilities</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--/ End Breadcrumb -->

<!-- facilities -->
<section class="library-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2 class="admin-title1">Library</h2>
                <p>
                    The library is well stocked with the latest books in various fields which expose the students to the exciting, interesting, and wonderful world of books. It caters to the academic needs of the students by subscribing to subject-wise journals, magazines, encyclopedias, general knowledge books, reference books, books on personality development, competitive exams, etc. It also has a very spacious reading room. The library offers a computerized index for all texts for easy reference i.e., E-Granthalaya.
                </p>
                <p>
                    <strong>Book Bank Scheme:</strong> This unique book bank scheme provides students with access to a minimum of four library books for their studies and references throughout the year.
                </p>
            </div>
            <div class="col-md-6">
                <img src="../images/facilities/library.jpg" class="img-fluid mt-4" alt="Library Image">
            </div>
        </div>
    </div>
</section>


<section class="image-section">
    <div class="container">
        <div class="carousel-gallery">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide m-4">
                        <a href="../images/facilities/physics.jpg" data-fancybox="gallery">
                            <div class="image" style="background-image: url(../images/facilities/physics.jpg)">
                                <div class="overlay">
                                    <em class="mdi mdi-magnify-plus"></em>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide m-4">
                        <a href="../images/facilities/biology.jpg" data-fancybox="gallery">
                            <div class="image" style="background-image: url(../images/facilities/biology.jpg)">
                                <div class="overlay">
                                    <em class="mdi mdi-magnify-plus"></em>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide m-4">
                        <a href="../images/facilities/chemistry.jpg" data-fancybox="gallery">
                            <div class="image" style="background-image: url(../images/facilities/chemistry.jpg)">
                                <div class="overlay">
                                    <em class="mdi mdi-magnify-plus"></em>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide m-4">
                        <a href="../images/facilities/computer.jpg" data-fancybox="gallery">
                            <div class="image" style="background-image: url(../images/facilities/computer.jpg)">
                                <div class="overlay">
                                    <em class="mdi mdi-magnify-plus"></em>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-12">
                <h2 class="admin-title1">Laboratory</h2>
                <p>
                    The college has well equipped laboratories in Physics, Chemistry, Biology, and Computer Science. <br>
                    The aspirations of the students grow by leaps and bounds with:
                </p>
                <ul>
                    <li><i class="fa fa-long-arrow-right" style="font-size:22px; color:green"></i> Individual attention given to each student</li>
                    <li><i class="fa fa-long-arrow-right" style="font-size:22px; color:green"></i> Periodic lab tests administered to evaluate progress</li>
                    <li><i class="fa fa-long-arrow-right" style="font-size:22px; color:green"></i> Ample scope provided for students to learn independently</li>
                </ul>
            </div>
        </div>
    </div>
</section>

    <div class="container library-section">
        <div class="row">
            <div class="col-md-6">
                <h2 class="admin-title1">Smart Classes</h2>
                <p>
                    The students are exposed to technology enabled class rooms where special emphasis is given on
                    communicative and interactive skills with the support of Internet connected smart boards.
                </p>
            </div>
            <div class="col-md-6">
                <img src="../images/facilities/smart_class.jpg" class="img-fluid mt-3 mb-0" alt="Library Image" style="height: 80%;">
            </div>
        </div>
    </div>


<div class="container mb-5">
    <div class="programme-section">
        <div class="programme">
            <h3>Internet Facility</h3>
            <div class="programme-content">
                <p><i class="bi bi-caret-right-fill"></i> An internet facility is provided to the students in the labs and class rooms to enhance the 
                    learning skills.</p>
            </div>
        </div>
        <div class="programme">
            <h3>CCTV</h3>
            <div class="programme-content">
                <p><i class="bi bi-caret-right-fill"></i> The CCTV cameras are installed in the college campus for the safety & security of the students & 
                    affirmation of discipline in the campus.</p>
            </div>
        </div>
        <div class="programme">
            <h3>Canteen</h3>
            <div class="programme-content">
                <p><i class="bi bi-caret-right-fill"></i> College canteen provides nutritious and delicious food items.</p>
            </div>
        </div>
        <div class="programme">
            <h3>Drinking Water</h3>
            <div class="programme-content">
                <p><i class="bi bi-caret-right-fill"></i> The well maintained, cool and clean drinking water units are provided for the students and staff.</p>
            </div>
        </div>
        <div class="programme">
            <h3>Fire Extinguisher</h3>
            <div class="programme-content">
                <p><i class="bi bi-caret-right-fill"></i> To ensure the safety of the students, fire extinguishers are installed in the campus.</p>
            </div>
        </div>
        <div class="programme">
            <h3>Parking Facility</h3>
            <div class="programme-content">
                <p><i class="bi bi-caret-right-fill"></i> The college provides a vast parking facility.</p>
            </div>
        </div>
    </div>
</div>
<!--/ End facilities -->

<!-- Footer -->
<?php
include('../headers/topFooter.php');
include('../headers/bottomFooter.php');
?>