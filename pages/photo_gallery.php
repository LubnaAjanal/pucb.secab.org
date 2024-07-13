<?php
include('../header.php');

?>
<style>
	.bom-title {
		text-align: center;
		font-weight: bold;
		background-color: burlywood;
		width: 40%;
		padding: 17px;
		margin: 5% 0 5% 30%;
		border-radius: 4px;
		box-shadow: 0 4px 8px rgba(0, 0, 0, 0.6);

	}

	/*Carousel Gallery*/
	.carousel-gallery {
		margin: 50px 0;
		padding: 0 30px;
		text-align: center;
	}

	.swiper-slide {
		display: inline-block;
		width: 20%;
		margin-right: 10px;
	}

	.swiper-slide a {
		display: block;
		width: 100%;
		height: 200px;
		border-radius: 4px;
		overflow: hidden;
		position: relative;
		box-shadow: 3px 2px 20px 0px rgba(0, 0, 0, .2);
		transition: transform 0.2s ease-in-out;
	}

	.swiper-slide a:hover {
		transform: scale(1.1);
	}

	.swiper-slide .image {
		width: 100%;
		height: 100%;
		background-size: cover;
		background-position: center center;
		position: relative;
	}

	.swiper-slide .overlay {
		position: absolute;
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
		background-color: rgba(20, 20, 20, .8);
		text-align: center;
		opacity: 0;
		transition: all .2s linear;
	}

	.swiper-slide:hover .overlay {
		opacity: 0.4;
	}

	.swiper-slide .overlay em {
		color: #fff;
		font-size: 26px;
		position: absolute;
		top: 50%;
		left: 50%;
		transform: translate(-50%, -50%);
		display: inline-block;
	}

	.swiper-pagination {
		position: relative;
		bottom: auto;
		text-align: center;
		margin-top: 25px;
	}

	.swiper-pagination .swiper-pagination-bullet {
		transition: all .2s linear;
	}

	.swiper-pagination .swiper-pagination-bullet:hover {
		opacity: .7;
	}

	.swiper-pagination .swiper-pagination-bullet-active {
		background-color: #d63031;
		transform: scale(1.1, 1.1);
	}

	/*# Carousel Gallery*/
</style>
<!-- Breadcrumb -->
<div class="breadcrumbs overlay" style="background-image:url('../images/breadcrumb-bg.jpg');margin-top:11%;">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-12">
				<h2>PHOTO GALLERY</h2>
			</div>
			<div class="col-lg-6 col-md-6 col-12">
				<ul class="bread-list">
					<li><a href="index.html">Home<i class="fa fa-angle-right"></i></a></li>
					<li class="active"><a href="#">Gallery<i class="fa fa-angle-right"></i></a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
<!--/ End Breadcrumb -->

<!-- Gallery -->
<!-- <section class="gallery"> -->
<div class="container">
	<h2 class="bom-title">COLLEGE GALLERY</h2>
	<div class="carousel-gallery">
		<div class="swiper-container">
			<div class="swiper-wrapper">
				<div class="swiper-slide">
					<a href="../images/gallery/gallery1.jpg" data-fancybox="gallery">
						<div class="image" style="background-image: url(../images/gallery/gallery1.jpg)">
							<div class="overlay">
								<em class="mdi mdi-magnify-plus"></em>
							</div>
						</div>
					</a>
				</div>
				<div class="swiper-slide">
					<a href="../images/gallery/gallery2.jpg" data-fancybox="gallery">
						<div class="image" style="background-image: url(../images/gallery/gallery2.jpg)">
							<div class="overlay">
								<em class="mdi mdi-magnify-plus"></em>
							</div>
						</div>
					</a>
				</div>
				<div class="swiper-slide">
					<a href="../images/gallery/gallery3.jpg" data-fancybox="gallery">
						<div class="image" style="background-image: url(../images/gallery/gallery3.jpg)">
							<div class="overlay">
								<em class="mdi mdi-magnify-plus"></em>
							</div>
						</div>
					</a>
				</div>
				<div class="swiper-slide">
					<a href="../images/gallery/gallery4.jpg" data-fancybox="gallery">
						<div class="image" style="background-image: url(../images/gallery/gallery4.jpg)">
							<div class="overlay">
								<em class="mdi mdi-magnify-plus"></em>
							</div>
						</div>
					</a>
				</div>
				<div class="swiper-slide">
					<a href="../images/gallery/gallery5.jpg" data-fancybox="gallery">
						<div class="image" style="background-image: url(../images/gallery/gallery5.jpg)">
							<div class="overlay">
								<em class="mdi mdi-magnify-plus"></em>
							</div>
						</div>
					</a>
				</div>
				<div class="swiper-slide">
					<a href="../images/gallery/gallery6.jpg" data-fancybox="gallery">
						<div class="image" style="background-image: url(../images/gallery/gallery6.jpg)">
							<div class="overlay">
								<em class="mdi mdi-magnify-plus"></em>
							</div>
						</div>
					</a>
				</div>
				<div class="swiper-slide">
					<a href="../images/gallery/gallery7.jpg" data-fancybox="gallery">
						<div class="image" style="background-image: url(../images/gallery/gallery7.jpg)">
							<div class="overlay">
								<em class="mdi mdi-magnify-plus"></em>
							</div>
						</div>
					</a>
				</div>
				<div class="swiper-slide">
					<a href="../images/gallery/gallery8.jpg" data-fancybox="gallery">
						<div class="image" style="background-image: url(../images/gallery/gallery8.jpg)">
							<div class="overlay">
								<em class="mdi mdi-magnify-plus"></em>
							</div>
						</div>
					</a>
				</div>
				<div class="swiper-slide">
					<a href="../images/gallery/gallery9.jpg" data-fancybox="gallery">
						<div class="image" style="background-image: url(../images/gallery/gallery9.jpg)">
							<div class="overlay">
								<em class="mdi mdi-magnify-plus"></em>
							</div>
						</div>
					</a>
				</div>
				<div class="swiper-slide">
					<a href="../images/gallery/gallery10.jpg" data-fancybox="gallery">
						<div class="image" style="background-image: url(../images/gallery/gallery10.jpg)">
							<div class="overlay">
								<em class="mdi mdi-magnify-plus"></em>
							</div>
						</div>
					</a>
				</div>
				<div class="swiper-slide">
					<a href="../images/gallery/gallery11.jpg" data-fancybox="gallery">
						<div class="image" style="background-image: url(../images/gallery/gallery11.jpg)">
							<div class="overlay">
								<em class="mdi mdi-magnify-plus"></em>
							</div>
						</div>
					</a>
				</div>
				<div class="swiper-slide">
					<a href="../images/gallery/gallery12.jpg" data-fancybox="gallery">
						<div class="image" style="background-image: url(../images/gallery/gallery12.jpg)">
							<div class="overlay">
								<em class="mdi mdi-magnify-plus"></em>
							</div>
						</div>
					</a>
				</div>
				<div class="swiper-slide">
					<a href="../images/gallery/gallery13.jpg" data-fancybox="gallery">
						<div class="image" style="background-image: url(../images/gallery/gallery13.jpg)">
							<div class="overlay">
								<em class="mdi mdi-magnify-plus"></em>
							</div>
						</div>
					</a>
				</div>
				<div class="swiper-slide">
					<a href="../images/gallery/gallery14.jpg" data-fancybox="gallery">
						<div class="image" style="background-image: url(../images/gallery/gallery14.jpg)">
							<div class="overlay">
								<em class="mdi mdi-magnify-plus"></em>
							</div>
						</div>
					</a>
				</div>
				<div class="swiper-slide">
					<a href="../images/gallery/gallery15.jpg" data-fancybox="gallery">
						<div class="image" style="background-image: url(../images/gallery/gallery15.jpg)">
							<div class="overlay">
								<em class="mdi mdi-magnify-plus"></em>
							</div>
						</div>
					</a>
				</div>
				<div class="swiper-slide">
					<a href="../images/gallery/gallery16.jpg" data-fancybox="gallery">
						<div class="image" style="background-image: url(../images/gallery/gallery16.jpg)">
							<div class="overlay">
								<em class="mdi mdi-magnify-plus"></em>
							</div>
						</div>
					</a>
				</div>
				<div class="swiper-slide">
					<a href="../images/gallery/gallery17.jpg" data-fancybox="gallery">
						<div class="image" style="background-image: url(../images/gallery/gallery17.jpg)">
							<div class="overlay">
								<em class="mdi mdi-magnify-plus"></em>
							</div>
						</div>
					</a>
				</div>
				<div class="swiper-slide">
					<a href="../images/gallery/gallery18.jpg" data-fancybox="gallery">
						<div class="image" style="background-image: url(../images/gallery/gallery18.jpg)">
							<div class="overlay">
								<em class="mdi mdi-magnify-plus"></em>
							</div>
						</div>
					</a>
				</div>
				<div class="swiper-slide">
					<a href="../images/gallery/gallery19.jpg" data-fancybox="gallery">
						<div class="image" style="background-image: url(../images/gallery/gallery19.jpg)">
							<div class="overlay">
								<em class="mdi mdi-magnify-plus"></em>
							</div>
						</div>
					</a>
				</div>
				<div class="swiper-slide">
					<a href="../images/gallery/gallery20.jpg" data-fancybox="gallery">
						<div class="image" style="background-image: url(../images/gallery/gallery20.jpg)">
							<div class="overlay">
								<em class="mdi mdi-magnify-plus"></em>
							</div>
						</div>
					</a>
				</div>
				<div class="swiper-slide">
					<a href="../images/gallery/gallery21.jpg" data-fancybox="gallery">
						<div class="image" style="background-image: url(../images/gallery/gallery21.jpg)">
							<div class="overlay">
								<em class="mdi mdi-magnify-plus"></em>
							</div>
						</div>
					</a>
				</div>
				<div class="swiper-slide">
					<a href="../images/gallery/gallery22.jpg" data-fancybox="gallery">
						<div class="image" style="background-image: url(../images/gallery/gallery22.jpg)">
							<div class="overlay">
								<em class="mdi mdi-magnify-plus"></em>
							</div>
						</div>
					</a>
				</div>
				<div class="swiper-slide">
					<a href="../images/gallery/gallery23.jpg" data-fancybox="gallery">
						<div class="image" style="background-image: url(../images/gallery/gallery23.jpg)">
							<div class="overlay">
								<em class="mdi mdi-magnify-plus"></em>
							</div>
						</div>
					</a>
				</div>
				<div class="swiper-slide">
					<a href="../images/gallery/gallery24.jpg" data-fancybox="gallery">
						<div class="image" style="background-image: url(../images/gallery/gallery24.jpg)">
							<div class="overlay">
								<em class="mdi mdi-magnify-plus"></em>
							</div>
						</div>
					</a>
				</div>
				<div class="swiper-slide">
					<a href="../images/gallery/gallery25.jpg" data-fancybox="gallery">
						<div class="image" style="background-image: url(../images/gallery/gallery25.jpg)">
							<div class="overlay">
								<em class="mdi mdi-magnify-plus"></em>
							</div>
						</div>
					</a>
				</div>
				<div class="swiper-slide">
					<a href="../images/gallery/gallery26.jpg" data-fancybox="gallery">
						<div class="image" style="background-image: url(../images/gallery/gallery26.jpg)">
							<div class="overlay">
								<em class="mdi mdi-magnify-plus"></em>
							</div>
						</div>
					</a>
				</div>
				<div class="swiper-slide">
					<a href="../images/gallery/gallery27.jpg" data-fancybox="gallery">
						<div class="image" style="background-image: url(../images/gallery/gallery27.jpg)">
							<div class="overlay">
								<em class="mdi mdi-magnify-plus"></em>
							</div>
						</div>
					</a>
				</div>
				<div class="swiper-slide">
					<a href="../images/gallery/gallery28.jpg" data-fancybox="gallery">
						<div class="image" style="background-image: url(../images/gallery/gallery28.jpg)">
							<div class="overlay">
								<em class="mdi mdi-magnify-plus"></em>
							</div>
						</div>
					</a>
				</div>
				<div class="swiper-slide">
					<a href="../images/gallery/gallery29.jpg" data-fancybox="gallery">
						<div class="image" style="background-image: url(../images/gallery/gallery29.jpg)">
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
</div>
<!-- </section> -->

<script>
	$(function() {

		var swiper = new Swiper('.carousel-gallery .swiper-container', {
			effect: 'slide',
			speed: 900,
			slidesPerView: auto,
			spaceBetween: 20,
			simulateTouch: true,
			autoplay: {
				delay: 5000,
				stopOnLastSlide: false,
				disableOnInteraction: false
			},
			pagination: {
				el: '.carousel-gallery .swiper-pagination',
				clickable: true
			},
			breakpoints: {
				// when window width is <= 320px
				320: {
					slidesPerView: 1,
					spaceBetween: 5
				},
				// when window width is <= 480px
				425: {
					slidesPerView: 2,
					spaceBetween: 10
				},
				// when window width is <= 640px
				768: {
					slidesPerView: 3,
					spaceBetween: 20
				}
			}
		}); /*http://idangero.us/swiper/api/*/



	});
</script>
<!--/ End Gallery -->

<!-- Footer -->
<?php
include('../topFooter.php');
include('../bottomFooter.php');
?>