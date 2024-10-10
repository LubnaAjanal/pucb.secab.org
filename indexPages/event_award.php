<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Margarine&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<style>
    /* Adjust the positioning and width */
    .main-container {
        height: 50%;
        margin: 0;
    }

    .gallery-slider .carousel {
        max-width: 1000px;
        max-height: 300px;
    }

    .carousel-inner {
        height: 100%;
        max-width: 100%;
        object-fit: cover;
    }

    .carousel-item img {
        height: 100%;
        width: 100%;
        object-fit: cover;
    }

    /* Adjust carousel controls */
    .carousel-control-prev,
    .carousel-control-next {
        color: black;
    }
</style>

<div class="main-container">
    <!-- Gallery Slider -->
    <div class="row">
        <div class="col-md-9">
            <div class="gallery-slider">
                <div id="gallerySlider" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="../images/homePhotos/00.jpg" alt="Gallery Image 1">
                        </div>
                        <div class="carousel-item">
                            <img src="../images/homePhotos/1.jpg" alt="Gallery Image 2">
                        </div>
                        <div class="carousel-item">
                            <img src="../images/homePhotos/3.jpg" alt="Gallery Image 4">
                        </div>
                        <div class="carousel-item">
                            <img src="../images/homePhotos/4.jpg" alt="Gallery Image 5">
                        </div>
                        <div class="carousel-item">
                            <img src="../images/homePhotos/5.jpeg" alt="Gallery Image 6">
                        </div>
                        <div class="carousel-item">
                            <img src="../images/homePhotos/18.jpg" alt="Gallery Image 6">
                        </div>
                        <div class="carousel-item">
                            <img src="../images/homePhotos/22.jpg" alt="Gallery Image 6">
                        </div>
                        <div class="carousel-item">
                            <img src="../images/homePhotos/33.jpg" alt="Gallery Image 6">
                        </div>
                        <div class="carousel-item">
                            <img src="../images/homePhotos/34.jpg" alt="Gallery Image 6">
                        </div>
                        <div class="carousel-item">
                            <img src="../images/homePhotos/35.jpg" alt="Gallery Image 6">
                        </div>
                        <div class="carousel-item">
                            <img src="../images/homePhotos/36.jpg" alt="Gallery Image 6">
                        </div>
                        <div class="carousel-item">
                            <img src="../images/homePhotos/37.jpeg" alt="Gallery Image 6">
                        </div>
                        <div class="carousel-item">
                            <img src="../images/homePhotos/58.jpeg" alt="Gallery Image 6">
                        </div>
                        <div class="carousel-item">
                            <img src="../images/homePhotos/85.jpg" alt="Gallery Image 6">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#gallerySlider" data-bs-target="#gallerySlider" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    </a>
                    <a class="carousel-control-next" href="#gallerySlider" data-bs-target="#gallerySlider" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    </a>
                </div>
            </div>
            <!-- End Gallery Slider -->
        </div>
        <div class="col-md-3">
            <!-- News and Events -->
            <div class="news-events">
                <div class="event-list">
                    <div class="event-heading">News & Events</div>
                    <marquee direction="down" ONMOUSEOVER="this.stop();" ONMOUSEOUT="this.start();" scrollamount="2" width="100%" height="400px" loop="true">

                        <div class="news-item">
                            <i class="bi bi-balloon-fill text-success"></i>
                            <!-- <img alt="" src="../images/news.png" width="30" height="20" /> -->
                            <a href="../images/events/78th Independence Day.pdf" target="_blank">78th Independence Day</a>
                        </div>
                        <div class="news-item">
                            <i class="bi bi-balloon-fill text-success"></i>
                            <!-- <img alt="" src="../images/news.png" width="30" height="20" /> -->
                            <a href="../images/events/Educator Award 2024.pdf" target="_blank">Educators Award</a>
                        </div>
                        <div class="news-item">
                            <i class="bi bi-balloon-fill text-success"></i>
                            <!-- <img alt="" src="../images/news.png" width="30" height="20" /> -->
                            <a href="../images/events/Alumnus Newly Appointed Civil Judge.pdf" target="_blank">Alumnus Newly Appointed Civil Judge</a>
                        </div>
                        <div class="news-item">
                            <i class="bi bi-balloon-fill text-success"></i>
                            <!-- <img alt="" src="../images/news.png" width="30" height="20" /> -->
                            <a href="../images/events/Gandi Jayanthi.pdf" target="_blank">Gandi Jayanthi</a>
                        </div>
                        <div class="news-item">
                            <i class="bi bi-balloon-fill text-success"></i>
                            <!-- <img alt="" src="../images/news.png" width="30" height="20" /> -->
                            <a href="../images/events/Guest lectures in Sister Institutions.pdf" target="_blank">Guest lectures in Sister Institutions</a>
                        </div>
                        <div class="news-item">
                            <i class="bi bi-balloon-fill text-success"></i>
                            <!-- <img alt="" src="../images/news.png" width="30" height="20" /> -->
                            <a href="../images/events/Health and Hygiene  Awareness  Program.pdf" target="_blank">Health and Hygiene Awareness Program</a>
                        </div>
                        <div class="news-item">
                            <i class="bi bi-balloon-fill text-success"></i>
                            <!-- <img alt="" src="../images/news.png" width="30" height="20" /> -->
                            <a href="../images/events/INAUGURAL FUNCTION OF SCIENCE CLUB.pdf" target="_blank">INAUGURAL FUNCTION OF SCIENCE CLUB</a>
                        </div>
                        <div class="news-item">
                            <i class="bi bi-balloon-fill text-success"></i>
                            <!-- <img alt="" src="../images/news.png" width="30" height="20" /> -->
                            <a href="../images/events/INAUGURAL PROGRAM OF NSS.pdf" target="_blank">INAUGURAL PROGRAM OF NSS</a>
                        </div>
                        <div class="news-item">
                            <i class="bi bi-balloon-fill text-success"></i>
                            <!-- <img alt="" src="../images/news.png" width="30" height="20" /> -->
                            <a href="../images/events/Inspection.pdf" target="_blank">Inspection</a>
                        </div>
                        <div class="news-item">
                            <i class="bi bi-balloon-fill text-success"></i>
                            <!-- <img alt="" src="../images/news.png" width="30" height="20" /> -->
                            <a href="../images/events/International Yoga Day.pdf" target="_blank">International Yoga Day</a>
                        </div>
                        <div class="news-item">
                            <i class="bi bi-balloon-fill text-success"></i>
                            <!-- <img alt="" src="../images/news.png" width="30" height="20" /> -->
                            <a href="../images/events/MOTIVATIONAL TALK 2.pdf" target="_blank">MOTIVATIONAL TALK 2</a>
                        </div>
                        <div class="news-item">
                            <i class="bi bi-balloon-fill text-success"></i>
                            <!-- <img alt="" src="../images/news.png" width="30" height="20" /> -->
                            <a href="../images/events/Motivational Talk.pdf" target="_blank">Motivational Talk</a>
                        </div>
                        <div class="news-item">
                            <i class="bi bi-balloon-fill text-success"></i>
                            <!-- <img alt="" src="../images/news.png" width="30" height="20" /> -->
                            <a href="../images/events/National Junior T20 Tennis.pdf" target="_blank">National Junior T20 Tennis</a>
                        </div>
                        <div class="news-item">
                            <i class="bi bi-balloon-fill text-success"></i>
                            <!-- <img alt="" src="../images/news.png" width="30" height="20" /> -->
                            <a href="../images/events/NEET AWARENESS  PROGRAM.pdf" target="_blank">NEET AWARENESS PROGRAM</a>
                        </div>
                        <div class="news-item">
                            <i class="bi bi-balloon-fill text-success"></i>
                            <!-- <img alt="" src="../images/news.png" width="30" height="20" /> -->
                            <a href="../images/events/NEET CLASS.pdf" target="_blank">NEET CLASS</a>
                        </div>
                        <div class="news-item">
                            <i class="bi bi-balloon-fill text-success"></i>
                            <!-- <img alt="" src="../images/news.png" width="30" height="20" /> -->
                            <a href="../images/events/Ranger & Rover Camp.pdf" target="_blank">Ranger & Rover Camp</a>
                        </div>
                        <div class="news-item">
                            <i class="bi bi-balloon-fill text-success"></i>
                            <!-- <img alt="" src="../images/news.png" width="30" height="20" /> -->
                            <a href="../images/events/SNAP CLASSES.pdf" target="_blank">SNAP CLASSES</a>
                        </div>
                        <div class="news-item">
                            <i class="bi bi-balloon-fill text-success"></i>
                            <!-- <img alt="" src="../images/news.png" width="30" height="20" /> -->
                            <a href="../images/events/Students Union Election.pdf" target="_blank">Students Union Election</a>
                        </div>
                        <div class="news-item">
                            <i class="bi bi-balloon-fill text-success"></i>
                            <!-- <img alt="" src="../images/news.png" width="30" height="20" /> -->
                            <a href="../images/events/Teacher's Day.pdf" target="_blank">Teacher's Day</a>
                        </div>
                        <div class="news-item">
                            <i class="bi bi-balloon-fill text-success"></i>
                            <!-- <img alt="" src="../images/news.png" width="30" height="20" /> -->
                            <a href="../images/events/WELCOME FUNCTION OF I PU.pdf" target="_blank">WELCOME FUNCTION OF I PU</a>
                        </div>
                        <div class="news-item">
                            <i class="bi bi-balloon-fill text-success"></i>
                            <!-- <img alt="" src="../images/news.png" width="30" height="20" /> -->
                            <a href="../images/events/WORKSHOP.pdf" target="_blank">WORKSHOP</a>
                        </div>
                    </marquee>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JavaScript Bundle with Popper -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

<script>
    $(document).ready(function() {
        // Activate the carousel with interval and pause on hover
        $('#gallerySlider').carousel({
            interval: 3000,
            pause: 'hover'
        });
    });
</script>