<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Margarine&display=swap" rel="stylesheet">
<style>
    /* Adjust the positioning and width */
    aside {
        margin-top: 11%;
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
    }

    aside>div {
        width: calc(30% - 20px);
    }

    #gallerySlider {
        width: calc(70% - 0px);
        /* margin: 30px 0 0 0; */
    }

    .carousel-item img {
        height: 500px;
        width: 100%;
        object-fit: cover;
    }

    /* Adjust carousel controls */
    .carousel-control-prev,
    .carousel-control-next {
        color: black;
    }
</style>


<aside class="courses"> 
    <!-- Gallery Slider -->
    <div id="gallerySlider" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../images/homePhotos/award1.jpg" alt="Gallery Image 1">
            </div>
            <div class="carousel-item">
                <img src="../images/homePhotos/award2.jpg" alt="Gallery Image 2">
            </div>
            <div class="carousel-item">
                <img src="../images/homePhotos/g1.jpg" alt="Gallery Image 3">
            </div>
            <div class="carousel-item">
                <img src="../images/homePhotos/logo2.jpg" alt="Gallery Image 4">
            </div>
            <div class="carousel-item">
                <img src="../images/image1.jpg" alt="Gallery Image 5">
            </div>
            <div class="carousel-item">
                <img src="../images/image2.jpg" alt="Gallery Image 6">
            </div>
        </div>
        <a class="carousel-control-prev" href="#gallerySlider" data-bs-target="#gallerySlider" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </a>
        <a class="carousel-control-next" href="#gallerySlider" data-bs-target="#gallerySlider" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </a>
    </div>

    <!-- End Gallery Slider -->

    <div class="news-events">
        <div class="event-list">
            <div class="event-heading">News & Events</div>
            <marquee direction="down" ONMOUSEOVER="this.stop();" ONMOUSEOUT="this.start();" scrollamount="2" width="100%" height="400px" loop="true">
                <div class="event-item">
                    <i class="bi bi-award-fill"></i>
                    <a href="../awards/at_lab19.php">A matter of great pleasure to share that, in the whole of North Karnataka, SECAB PU College for BOYS, got permission to establish Atal Tinkering Lab ( ATL ) by NITI Ayog New Delhi.</a>
                </div>
                <div class="event-item">
                    <i class="bi bi-award-fill"></i>
                    <a href="../awards/stlvlbdmntcompi.php">Shoukat Ali Magi and Junaid Abbas Kaladagi, got selected in District Sports Shuttle Badminton Competition.</a>
                </div>
                <div class="event-item">
                    <i class="bi bi-award-fill"></i>
                    <a href="../awards/stlvlfstrnk.php">Ms.Sana Mujawar of II PU Science was adjudged as the State Level First Rank Holder.</a>
                </div>
                <div class="event-item">
                    <i class="bi bi-award-fill"></i>
                    <a href="../awards/stlvlfstrnk.php">SECAB Association cordially welcomes you on the occasion of its 'Founder's Day' Celebration on 10th January 2019, at 3:00pm....</a>
                </div>
                <div class="event-item">
                    <i class="bi bi-award-fill"></i>
                    <a href="../awards/stlvlfstrnk.php">SECAB P U COLLEGE FOR BOYS,BIJAPUR Two students got selected at State Level Essay competition in English held at Ron dist Gadag.</a>
                </div>
                <div class="event-item">
                    <i class="bi bi-award-fill"></i>
                    <a href="../awards/stlvlfstrnk.php">State Best Lecturer Award 2018 Dr.Sidhangouda.R.Byakod (M.Sc,M.Phil,Ph.D)</a>
                </div>
                <div class="event-item">
                    <i class="bi bi-award-fill"></i>
                    <a href="../awards/stlvlfstrnk.php">Dr.M.M Jahagirdar, PhD has been conferred the Swami Vivekanand Trust's "Shikshan Ratan Award" In Bangalore.</a>
                </div>
                <div class="event-item">
                    <i class="bi bi-award-fill"></i>
                    <a href="../awards/stlvlfstrnk.php">Mr A.L.NAGUR has been conferred the state's best kannada lecturer award -2017 from honorable Chief &Education Minsters in bangalore</a>
                </div>
                <div class="event-item">
                    <i class="bi bi-award-fill"></i>
                    <a href="../awards/stlvlfstrnk.php">Selection of sportsmen from the new batch students</a>
                </div>
                <div class="event-item">
                    <i class="bi bi-award-fill"></i>
                    <a href="../awards/stlvlfstrnk.php">Inaugural of A Skill Enhancement Programme.</a>
                </div>
                <div class="event-item">
                    <i class="bi bi-award-fill"></i>
                    <a href="../awards/stlvlfstrnk.php">Lecturer Award News</a>
                </div>
                <div class="news-item">
                    <img alt="" src="../images/news.png" width="30" height="20" /> <a href="../events/womensday.php"> International Women's Day Celebration</a>
                </div>
                <div class="news-item">
                    <img alt="" src="../images/news.png" width="30" height="20" /> <a href="../events/NEETtalk.php">A Talk on NEET</a>
                </div>
                <div class="news-item">
                    <img alt="" src="../images/news.png" width="30" height="20" /> <a href="../events/distlevel2k20.php">District Level Collage Competition</a>
                </div>
                <div class="news-item">
                    <img alt="" src="../images/news.png" width="30" height="20" /> <a href="../events/atal.php">Inaugural function of ATAL</a>
                </div>
                <div class="news-item">
                    <img alt="" src="../images/news.png" width="30" height="20" /> <a href="../events/guest_lectures.php">Guest lectures</a>
                </div>
                <div class="news-item">
                    <img alt="" src="../images/news.png" width="30" height="20" /> <a href="../events/girl_sports.php">Sports</a>
                </div>
                <div class="news-item">
                    <img alt="" src="../images/news.png" width="30" height="20" /> <a href="../events/Workshop_atal.php">Workshop Conducted for PU Science Students at "ATAL TINKERING LAB"</a>
                </div>
                <div class="news-item">
                    <img alt="" src="../images/news.png" width="30" height="20" /> <a href="../events/excursion19.php">Excursion was Arranged for the Students</a>
                </div>
                <div class="news-item">
                    <img alt="" src="../images/news.png" width="30" height="20" /> <a href="../events/extspch19.php">Extempore Speech Competition</a>
                </div>
                <div class="news-item">
                    <img alt="" src="../images/news.png" width="30" height="20" /> <a href="../events/education_day.php">National Education Day</a>
                </div>
                <div class="news-item">
                    <img alt="" src="../images/news.png" width="30" height="20" /> <a href="../events/dis_cultural.php">District level cultural competitions</a>
                </div>
                <div class="news-item">
                    <img alt="" src="../images/news.png" width="30" height="20" /> <a href="../events/ele_club.php">Electoral Literacy Club</a>
                </div>
                <div class="news-item">
                    <img alt="" src="../images/news.png" width="30" height="20" /> <a href="../events/dstrct_topper.php">District Topper</a>
                </div>
                <div class="news-item">
                    <img alt="" src="images/news.png" width="30" height="20" /> <a href="../events/super30_movie.php">Super-30 Movie</a>
                </div>
                <div class="news-item">
                    <img alt="" src="images/news.png" width="30" height="20" /> <a href="../events/basketball.php">Basketball District Level Competition</a>
                </div>
                <div class="news-item">
                    <img alt="" src="images/news.png" width="30" height="20" /> <a href="../events/sci_prnt_meet19.php">Parent - Teacher Meet 2019 for Science Department</a>
                </div>
                <div class="news-item">
                    <img alt="" src="images/news.png" width="30" height="20" /> <a href="../events/gst_lecture.php">Guest Lecture by Dr Nikhat Inamdar Dr Sana Baigh</a>
                </div>
                <div class="news-item">
                    <img alt="" src="images/news.png" width="30" height="20" /> <a href="../events/sadbhavana.php">Sadbhavana Diwas</a>
                </div>
                <div class="news-item">
                    <img alt="" src="images/news.png" width="30" height="20" /> <a href="../events/prnt_meet19.php">Parent - Teacher Meet 2019</a>
                </div>
                <div class="news-item">
                    <img alt="" src="images/news.png" width="30" height="20" /> <a href="../events/exhb_health.php">Exhibition on Health Awareness</a>
                </div>
                <div class="news-item">
                    <img alt="" src="../images/news.png" width="30" height="20" /> <a href="../events/sci_club.php">Inauguration of Science Club</a>
                </div>
                <div class="news-item">
                    <img alt="" src="../images/news.png" width="30" height="20" /> <a href="../events/e_morals.php">Organized an Enriching Moral Session </a>
                </div>
                <div class="news-item">
                    <img alt="" src="../images/news.png" width="30" height="20" /> <a href="../events/knowYourself.php">Cultural Team Organized a Talk on "Know Yourself" </a>
                </div>
                <div class="news-item">
                    <img alt="" src="../images/news.png" width="30" height="20" /> <a href="../events/sglance.php">SECAB at Glance </a>
                </div>
                <div class="news-item">
                    <img alt="" src="../images/news.png" width="30" height="20" /> <a href="../events/result19.php">I & II PUC RESULT</a>
                </div>
                <div class="news-item">
                    <img alt="" src="../images/news.png" width="30" height="20" /> <a href="../events/anual19.php">Annual Day Celebration 2019</a>
                </div>
                <div class="news-item">
                    <img alt="" src="../images/news.png" width="30" height="20" /> <a href="../events/moral.php">Programme On "Moral & Human Values"</a>
                </div>
                <div class="news-item">
                    <img alt="" src="../images/news.png" width="30" height="20" /> <a href="../events/felici.php">New DDPUE Felicitation</a>
                </div>
                <div class="news-item">
                    <img alt="" src="../images/news.png" width="30" height="20" /> <a href="../events/prgmAntiToba.php">Programme On "Anti Tobacco Advocacy"</a>
                </div>
                <div class="news-item">
                    <img alt="" src="../images/news.png" width="30" height="20" /> <a href="../events/pgrm.php">Department Of Arts Organized A Program For The Students</a>
                </div>
                <div class="news-item">
                    <img alt="" src="../images/news.png" width="30" height="20" /> <a href="../events/sciClub.php">Inauguration Of The Science Club</a>
                </div>
                <div class="news-item">
                    <img alt="" src="../images/news.png" width="30" height="20" /> <a href="../events/award2.php">Dr.Sidhangouda.R.Byakod M.Sc,M.Phil,Ph.D. has been conferred with the Govt of Karnataka "State Best Lecturer" </a>
                </div>
                <div class="news-item">
                    <img alt="" src="../images/news.png" width="30" height="20" /> <a href="../events/guest_lecture.php">Economics Department Organised A Guest Lecture </a>
                </div>
                <div class="news-item">
                    <img alt="" src="../images/news.png" width="30" height="20" /> <a href="../events/15aug.php" target=_blank>15 August Independence Day </a>
                </div>
                <div class="news-item">
                    <img alt="" src="../images/news.png" width="30" height="20" /> <a href="../events/topper.php" target=_blank>College Toppers banner </a>
                </div>
            </marquee>
        </div>
    </div>
</aside>
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