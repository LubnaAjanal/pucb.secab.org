<style>
    #propslider {
        margin: 0 auto;
        max-width: 800px;
    }

    .slide_viewer {
        height: 550px;
        object-fit: cover;
        /* overflow: hidden; */
        position: relative;
    }

    .slide_group {
        height: 100%;
        position: relative;
        width: 100%;
    }

    .slide {
        display: none;
        height: 100%;
        position: absolute;
        width: 100%;

    }

    .slide img {
        object-fit: cover;
        width: 100%;
        /* height: 100%; */

    }

    .slide:first-child {
        display: block;
    }



    /* .slide_buttons {
        left: 0;
        position: absolute;
        right: 0;
        text-align: center;
    }

    a.slide_btn {
        color: #474544;
        font-size: 42px;
        margin: 0 0.175em;
        -webkit-transition: all 0.4s ease-in-out;
        -moz-transition: all 0.4s ease-in-out;
        -ms-transition: all 0.4s ease-in-out;
        -o-transition: all 0.4s ease-in-out;
        transition: all 0.4s ease-in-out;
    }

    .slide_btn.active,
    .slide_btn:hover {
        color: #428CC6;
        cursor: pointer;
    } */

    .directional_nav {
        height: 100px;
        margin: 0;
        max-width: 940px;
        position: relative;
        top: -340px;
    }

    .previous_btn {
        bottom: 0;
        left: 100px;
        margin: auto;
        position: absolute;
        top: 0;
    }

    .next_btn {
        bottom: 0;
        margin: auto;
        position: absolute;
        right: 100px;
        top: 0;
    }

    .previous_btn,
    .next_btn {
        cursor: pointer;
        height: 65px;
        opacity: 1;
        -webkit-transition: opacity 0.4s ease-in-out;
        -moz-transition: opacity 0.4s ease-in-out;
        -ms-transition: opacity 0.4s ease-in-out;
        -o-transition: opacity 0.4s ease-in-out;
        transition: opacity 0.4s ease-in-out;
        width: 65px;
    }

    .previous_btn:hover,
    .next_btn:hover {
        opacity: 1;
    }

    @media only screen and (max-width: 767px) {
        .previous_btn {
            left: 50px;
        }

        .next_btn {
            right: 50px;
        }
    }
</style>

<h2 class="city-title mb-5 text-uppercase"><b>Prospactus</b></h2>
<div class="slider" id="propslider">
    <div class="slide_viewer">
        <div class="slide_group">
            <div class="slide">
                <img src="../images/aboutPhotos/p1.jpg" alt="img">
            </div>
            <div class="slide">
                <img src="../images/aboutPhotos/p2.jpg" alt="img">
            </div>
            <div class="slide">
                <img src="../images/aboutPhotos/p3.jpg" alt="img">

            </div>
            <div class="slide">
                <img src="../images/aboutPhotos/p4.jpg" alt="img">

            </div>
            <div class="slide">
                <img src="../images/aboutPhotos/p5.jpg" alt="img">

            </div>
            <div class="slide">
                <img src="../images/aboutPhotos/p6.jpg" alt="img">

            </div>
            <div class="slide">
                <img src="../images/aboutPhotos/p7.jpg" alt="img">

            </div>
            <div class="slide">
                <img src="../images/aboutPhotos/p8.jpg" alt="img">

            </div>
            <div class="slide">
                <img src="../images/aboutPhotos/p9.jpg" alt="img">

            </div>
            <div class="slide">
                <img src="../images/aboutPhotos/p10.jpg" alt="img">

            </div>
            <div class="slide">
                <img src="../images/aboutPhotos/p11.jpg" alt="img">

            </div>
            <div class="slide">
                <img src="../images/aboutPhotos/p12.jpg" alt="img">

            </div>
            <div class="slide">
                <img src="../images/aboutPhotos/p13.jpg" alt="img">

            </div>
            <div class="slide">
                <img src="../images/aboutPhotos/p14.jpg" alt="img">

            </div>
            <div class="slide">
                <img src="../images/aboutPhotos/p15.jpg" alt="img">

            </div>
            <div class="slide">
                <img src="../images/aboutPhotos/p16.jpg" alt="img">

            </div>
            <div class="slide">
                <img src="../images/aboutPhotos/p17.jpg" alt="img">

            </div>
            <div class="slide">
                <img src="../images/aboutPhotos/p18.jpg" alt="img">

            </div>
            <div class="slide">
                <img src="../images/aboutPhotos/p19.jpg" alt="img">

            </div>
            <div class="slide">
                <img src="../images/aboutPhotos/p20.jpg" alt="img">

            </div>
            <div class="slide">
                <img src="../images/aboutPhotos/p21.jpg" alt="img">

            </div>
            <div class="slide">
                <img src="../images/aboutPhotos/p22.jpg" alt="img">

            </div>
            <div class="slide">
                <img src="../images/aboutPhotos/p23.jpg" alt="img">

            </div>
            <div class="slide">
                <img src="../images/aboutPhotos/p24.jpg" alt="img">

            </div>
            <div class="slide">
                <img src="../images/aboutPhotos/p25.jpg" alt="img">

            </div>
            <div class="slide">
                <img src="../images/aboutPhotos/p26.jpg" alt="img">

            </div>
            <div class="slide">
                <img src="../images/aboutPhotos/p27.jpg" alt="img">

            </div>
            <div class="slide">
                <img src="../images/aboutPhotos/p28.jpg" alt="img">
            </div>
        </div>
    </div><!-- End // .slider -->

    <div class="slide_buttons">
    </div>

    <div class="directional_nav">
        <div class="previous_btn" title="Previous">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="65px" height="65px" viewBox="-11 -11.5 65 66">
                <g>
                    <g>
                        <path fill="#474544" d="M-10.5,22.118C-10.5,4.132,4.133-10.5,22.118-10.5S54.736,4.132,54.736,22.118
			c0,17.985-14.633,32.618-32.618,32.618S-10.5,40.103-10.5,22.118z M-8.288,22.118c0,16.766,13.639,30.406,30.406,30.406 c16.765,0,30.405-13.641,30.405-30.406c0-16.766-13.641-30.406-30.405-30.406C5.35-8.288-8.288,5.352-8.288,22.118z" />
                        <path fill="#474544" d="M25.43,33.243L14.628,22.429c-0.433-0.432-0.433-1.132,0-1.564L25.43,10.051c0.432-0.432,1.132-0.432,1.563,0	c0.431,0.431,0.431,1.132,0,1.564L16.972,21.647l10.021,10.035c0.432,0.433,0.432,1.134,0,1.564	c-0.215,0.218-0.498,0.323-0.78,0.323C25.929,33.569,25.646,33.464,25.43,33.243z" />
                    </g>
                </g>
            </svg>
        </div>
        <div class="next_btn" title="Next">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="65px" height="65px" viewBox="-11 -11.5 65 66">
                <g>
                    <g>
                        <path fill="#474544" d="M22.118,54.736C4.132,54.736-10.5,40.103-10.5,22.118C-10.5,4.132,4.132-10.5,22.118-10.5	c17.985,0,32.618,14.632,32.618,32.618C54.736,40.103,40.103,54.736,22.118,54.736z M22.118-8.288	c-16.765,0-30.406,13.64-30.406,30.406c0,16.766,13.641,30.406,30.406,30.406c16.768,0,30.406-13.641,30.406-30.406 C52.524,5.352,38.885-8.288,22.118-8.288z" />
                        <path fill="#474544" d="M18.022,33.569c 0.282,0-0.566-0.105-0.781-0.323c-0.432-0.431-0.432-1.132,0-1.564l10.022-10.035 			L17.241,11.615c 0.431-0.432-0.431-1.133,0-1.564c0.432-0.432,1.132-0.432,1.564,0l10.803,10.814c0.433,0.432,0.433,1.132,0,1.564 L18.805,33.243C18.59,33.464,18.306,33.569,18.022,33.569z" />
                    </g>
                </g>
            </svg>
        </div>
    </div><!-- End // .directional_nav -->
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<script>
    $('.slider').each(function() {
        var $this = $(this);
        var $group = $this.find('.slide_group');
        var $slides = $this.find('.slide');
        var bulletArray = [];
        var currentIndex = 0;
        var timeout;

        function move(newIndex) {
            var animateLeft, slideLeft;

            advance();

            if ($group.is(':animated') || currentIndex === newIndex) {
                return;
            }

            bulletArray[currentIndex].removeClass('active');
            bulletArray[newIndex].addClass('active');

            if (newIndex > currentIndex) {
                slideLeft = '100%';
                animateLeft = '-100%';
            } else {
                slideLeft = '-100%';
                animateLeft = '100%';
            }

            $slides.eq(newIndex).css({
                display: 'block',
                left: slideLeft
            });
            $group.animate({
                left: animateLeft
            }, function() {
                $slides.eq(currentIndex).css({
                    display: 'none'
                });
                $slides.eq(newIndex).css({
                    left: 0
                });
                $group.css({
                    left: 0
                });
                currentIndex = newIndex;
            });
        }

        function advance() {
            clearTimeout(timeout);
            timeout = setTimeout(function() {
                if (currentIndex < ($slides.length - 1)) {
                    move(currentIndex + 1);
                } else {
                    move(0);
                }
            }, 4000);
        }

        $('.next_btn').on('click', function() {
            if (currentIndex < ($slides.length - 1)) {
                move(currentIndex + 1);
            } else {
                move(0);
            }
        });

        $('.previous_btn').on('click', function() {
            if (currentIndex !== 0) {
                move(currentIndex - 1);
            } else {
                move(28);
            }
        });

        $.each($slides, function(index) {
            var $button = $('<a class="slide_btn">&bull;</a>');

            if (index === currentIndex) {
                $button.addClass('active');
            }
            $button.on('click', function() {
                move(index);
            }).appendTo('.slide_buttons');
            bulletArray.push($button);
        });

        advance();
    });
</script>