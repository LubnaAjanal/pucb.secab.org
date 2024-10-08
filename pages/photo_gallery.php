<?php
include('../headers/header1.php');

?>
<style>

	/*Carousel Gallery*/
	.carousel-gallery {
		margin: 50px 0;
		padding: 0 30px;
		text-align: center;
	}

	.swiper-slide {
		display: inline-block;
		width: 30%;
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
<div class="breadcrumbs overlay" style="background-image:url('../images/headerPhotos/header5.jpg');">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-12">
				<h2>PHOTO GALLERY</h2>
			</div>
			<div class="col-lg-6 col-md-6 col-12">
				<ul class="bread-list">
					<li><a href="../index.php">Home<i class="fa fa-angle-right"></i></a></li>
					<li class="active"><a href="#">Gallery</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
<!--/ End Breadcrumb -->

<!-- Gallery -->
<section class="section">
<div class="container">
	<h2 class="heading mb-4" style="width:35%;">COLLEGE GALLERY</h2>
	<div class="carousel-gallery">
		<div class="swiper-container">
			<div class="swiper-wrapper">
				<div class="swiper-slide">
					<a href="../images/gallery/gallery1.jpeg" data-fancybox="gallery">
						<div class="image" style="background-image: url(../images/gallery/gallery1.jpeg)">
							<div class="overlay">
								<em class="mdi mdi-magnify-plus"></em>
							</div>
						</div>
					</a>
				</div>
				<div class="swiper-slide">
					<a href="../images/gallery/gallery2.jpeg" data-fancybox="gallery">
						<div class="image" style="background-image: url(../images/gallery/gallery2.jpeg)">
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
					<a href="../images/gallery/gallery4.jpeg" data-fancybox="gallery">
						<div class="image" style="background-image: url(../images/gallery/gallery4.jpeg)">
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
					<a href="../images/gallery/gallery6.jpeg" data-fancybox="gallery">
						<div class="image" style="background-image: url(../images/gallery/gallery6.jpeg)">
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
					<a href="../images/gallery/gallery8.jpeg" data-fancybox="gallery">
						<div class="image" style="background-image: url(../images/gallery/gallery8.jpeg)">
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
					<a href="../images/gallery/gallery11.jpeg" data-fancybox="gallery">
						<div class="image" style="background-image: url(../images/gallery/gallery11.jpeg)">
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
					<a href="../images/gallery/gallery13.jpeg" data-fancybox="gallery">
						<div class="image" style="background-image: url(../images/gallery/gallery13.jpeg)">
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
					<a href="../images/gallery/gallery17.jpeg" data-fancybox="gallery">
						<div class="image" style="background-image: url(../images/gallery/gallery17.jpeg)">
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
					<a href="../images/gallery/gallery20.jpeg" data-fancybox="gallery">
						<div class="image" style="background-image: url(../images/gallery/gallery20.jpeg)">
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
					<a href="../images/gallery/gallery22.jpeg" data-fancybox="gallery">
						<div class="image" style="background-image: url(../images/gallery/gallery22.jpeg)">
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
					<a href="../images/gallery/gallery24.jpeg" data-fancybox="gallery">
						<div class="image" style="background-image: url(../images/gallery/gallery24.jpeg)">
							<div class="overlay">
								<em class="mdi mdi-magnify-plus"></em>
							</div>
						</div>
					</a>
				</div>
				<div class="swiper-slide">
					<a href="../images/gallery/gallery25.jpeg" data-fancybox="gallery">
						<div class="image" style="background-image: url(../images/gallery/gallery25.jpeg)">
							<div class="overlay">
								<em class="mdi mdi-magnify-plus"></em>
							</div>
						</div>
					</a>
				</div>
				<div class="swiper-slide">
					<a href="../images/gallery/gallery26.jpeg" data-fancybox="gallery">
						<div class="image" style="background-image: url(../images/gallery/gallery26.jpeg)">
							<div class="overlay">
								<em class="mdi mdi-magnify-plus"></em>
							</div>
						</div>
					</a>
				</div>
				<div class="swiper-slide">
					<a href="../images/gallery/gallery27.jpeg" data-fancybox="gallery">
						<div class="image" style="background-image: url(../images/gallery/gallery27.jpeg)">
							<div class="overlay">
								<em class="mdi mdi-magnify-plus"></em>
							</div>
						</div>
					</a>
				</div>
				<div class="swiper-slide">
					<a href="../images/gallery/gallery28.jpeg" data-fancybox="gallery">
						<div class="image" style="background-image: url(../images/gallery/gallery28.jpeg)">
							<div class="overlay">
								<em class="mdi mdi-magnify-plus"></em>
							</div>
						</div>
					</a>
				</div>
				<div class="swiper-slide">
					<a href="../images/gallery/gallery29.jpeg" data-fancybox="gallery">
						<div class="image" style="background-image: url(../images/gallery/gallery29.jpeg)">
							<div class="overlay">
								<em class="mdi mdi-magnify-plus"></em>
							</div>
						</div>
					</a>
				</div>
				<div class="swiper-slide">
					<a href="../images/gallery/gallery30.jpg" data-fancybox="gallery">
						<div class="image" style="background-image: url(../images/gallery/gallery30.jpg)">
							<div class="overlay">
								<em class="mdi mdi-magnify-plus"></em>
							</div>
						</div>
					</a>
				</div>
				<div class="swiper-slide">
					<a href="../images/gallery/gallery31.jpeg" data-fancybox="gallery">
						<div class="image" style="background-image: url(../images/gallery/gallery31.jpeg)">
							<div class="overlay">
								<em class="mdi mdi-magnify-plus"></em>
							</div>
						</div>
					</a>
				</div>
				<div class="swiper-slide">
					<a href="../images/gallery/gallery32.jpeg" data-fancybox="gallery">
						<div class="image" style="background-image: url(../images/gallery/gallery32.jpeg)">
							<div class="overlay">
								<em class="mdi mdi-magnify-plus"></em>
							</div>
						</div>
					</a>
				</div>
				<div class="swiper-slide">
					<a href="../images/gallery/gallery33.jpeg" data-fancybox="gallery">
						<div class="image" style="background-image: url(../images/gallery/gallery33.jpeg)">
							<div class="overlay">
								<em class="mdi mdi-magnify-plus"></em>
							</div>
						</div>
					</a>
				</div>
				<div class="swiper-slide">
					<a href="../images/gallery/gallery34.jpeg" data-fancybox="gallery">
						<div class="image" style="background-image: url(../images/gallery/gallery34.jpeg)">
							<div class="overlay">
								<em class="mdi mdi-magnify-plus"></em>
							</div>
						</div>
					</a>
				</div>
				<div class="swiper-slide">
					<a href="../images/gallery/gallery35.jpeg" data-fancybox="gallery">
						<div class="image" style="background-image: url(../images/gallery/gallery35.jpeg)">
							<div class="overlay">
								<em class="mdi mdi-magnify-plus"></em>
							</div>
						</div>
					</a>
				</div>
				<div class="swiper-slide">
					<a href="../images/gallery/gallery36.jpeg" data-fancybox="gallery">
						<div class="image" style="background-image: url(../images/gallery/gallery36.jpeg)">
							<div class="overlay">
								<em class="mdi mdi-magnify-plus"></em>
							</div>
						</div>
					</a>
				</div>
				<div class="swiper-slide">
					<a href="../images/gallery/gallery37.jpeg" data-fancybox="gallery">
						<div class="image" style="background-image: url(../images/gallery/gallery37.jpeg)">
							<div class="overlay">
								<em class="mdi mdi-magnify-plus"></em>
							</div>
						</div>
					</a>
				</div>
				<div class="swiper-slide">
					<a href="../images/gallery/gallery38.jpeg" data-fancybox="gallery">
						<div class="image" style="background-image: url(../images/gallery/gallery38.jpeg)">
							<div class="overlay">
								<em class="mdi mdi-magnify-plus"></em>
							</div>
						</div>
					</a>
				</div>
				<div class="swiper-slide">
					<a href="../images/gallery/gallery39.jpeg" data-fancybox="gallery">
						<div class="image" style="background-image: url(../images/gallery/gallery39.jpeg)">
							<div class="overlay">
								<em class="mdi mdi-magnify-plus"></em>
							</div>
						</div>
					</a>
				</div>
				<div class="swiper-slide">
					<a href="../images/gallery/gallery40.jpeg" data-fancybox="gallery">
						<div class="image" style="background-image: url(../images/gallery/gallery40.jpeg)">
							<div class="overlay">
								<em class="mdi mdi-magnify-plus"></em>
							</div>
						</div>
					</a>
				</div>
				<div class="swiper-slide">
					<a href="../images/gallery/gallery41.jpeg" data-fancybox="gallery">
						<div class="image" style="background-image: url(../images/gallery/gallery41.jpeg)">
							<div class="overlay">
								<em class="mdi mdi-magnify-plus"></em>
							</div>
						</div>
					</a>
				</div>
				<div class="swiper-slide">
					<a href="../images/gallery/gallery42.jpeg" data-fancybox="gallery">
						<div class="image" style="background-image: url(../images/gallery/gallery42.jpeg)">
							<div class="overlay">
								<em class="mdi mdi-magnify-plus"></em>
							</div>
						</div>
					</a>
				</div>
				<div class="swiper-slide">
					<a href="../images/gallery/gallery43.jpeg" data-fancybox="gallery">
						<div class="image" style="background-image: url(../images/gallery/gallery43.jpeg)">
							<div class="overlay">
								<em class="mdi mdi-magnify-plus"></em>
							</div>
						</div>
					</a>
				</div>
				<div class="swiper-slide">
					<a href="../images/gallery/gallery44.jpg" data-fancybox="gallery">
						<div class="image" style="background-image: url(../images/gallery/gallery44.jpg)">
							<div class="overlay">
								<em class="mdi mdi-magnify-plus"></em>
							</div>
						</div>
					</a>
				</div>
				<div class="swiper-slide">
					<a href="../images/gallery/gallery45.jpg" data-fancybox="gallery">
						<div class="image" style="background-image: url(../images/gallery/gallery45.jpg)">
							<div class="overlay">
								<em class="mdi mdi-magnify-plus"></em>
							</div>
						</div>
					</a>
				</div>
				<div class="swiper-slide">
					<a href="../images/gallery/gallery46.jpg" data-fancybox="gallery">
						<div class="image" style="background-image: url(../images/gallery/gallery46.jpg)">
							<div class="overlay">
								<em class="mdi mdi-magnify-plus"></em>
							</div>
						</div>
					</a>
				</div>
				<div class="swiper-slide">
					<a href="../images/gallery/gallery47.jpg" data-fancybox="gallery">
						<div class="image" style="background-image: url(../images/gallery/gallery47.jpg)">
							<div class="overlay">
								<em class="mdi mdi-magnify-plus"></em>
							</div>
						</div>
					</a>
				</div>
				<div class="swiper-slide">
					<a href="../images/gallery/gallery48.jpg" data-fancybox="gallery">
						<div class="image" style="background-image: url(../images/gallery/gallery48.jpg)">
							<div class="overlay">
								<em class="mdi mdi-magnify-plus"></em>
							</div>
						</div>
					</a>
				</div>
				<div class="swiper-slide">
					<a href="../images/gallery/gallery49.jpg" data-fancybox="gallery">
						<div class="image" style="background-image: url(../images/gallery/gallery49.jpg)">
							<div class="overlay">
								<em class="mdi mdi-magnify-plus"></em>
							</div>
						</div>
					</a>
				</div>
				<div class="swiper-slide">
					<a href="../images/gallery/gallery50.jpg" data-fancybox="gallery">
						<div class="image" style="background-image: url(../images/gallery/gallery50.jpg)">
							<div class="overlay">
								<em class="mdi mdi-magnify-plus"></em>
							</div>
						</div>
					</a>
				</div>
				<div class="swiper-slide">
					<a href="../images/gallery/gallery51.jpg" data-fancybox="gallery">
						<div class="image" style="background-image: url(../images/gallery/gallery51.jpg)">
							<div class="overlay">
								<em class="mdi mdi-magnify-plus"></em>
							</div>
						</div>
					</a>
				</div>
				<div class="swiper-slide">
					<a href="../images/gallery/gallery52.jpg" data-fancybox="gallery">
						<div class="image" style="background-image: url(../images/gallery/gallery52.jpg)">
							<div class="overlay">
								<em class="mdi mdi-magnify-plus"></em>
							</div>
						</div>
					</a>
				</div>
				<div class="swiper-slide">
					<a href="../images/gallery/gallery53.jpg" data-fancybox="gallery">
						<div class="image" style="background-image: url(../images/gallery/gallery53.jpg)">
							<div class="overlay">
								<em class="mdi mdi-magnify-plus"></em>
							</div>
						</div>
					</a>
				</div>
				<div class="swiper-slide">
					<a href="../images/gallery/gallery54.jpg" data-fancybox="gallery">
						<div class="image" style="background-image: url(../images/gallery/gallery54.jpg)">
							<div class="overlay">
								<em class="mdi mdi-magnify-plus"></em>
							</div>
						</div>
					</a>
				</div>
				<div class="swiper-slide">
					<a href="../images/gallery/gallery55.jpg" data-fancybox="gallery">
						<div class="image" style="background-image: url(../images/gallery/gallery55.jpg)">
							<div class="overlay">
								<em class="mdi mdi-magnify-plus"></em>
							</div>
						</div>
					</a>
				</div>
				<div class="swiper-slide">
					<a href="../images/gallery/gallery56.jpeg" data-fancybox="gallery">
						<div class="image" style="background-image: url(../images/gallery/gallery56.jpeg)">
							<div class="overlay">
								<em class="mdi mdi-magnify-plus"></em>
							</div>
						</div>
					</a>
				</div>
				<div class="swiper-slide">
					<a href="../images/gallery/gallery57.jpeg" data-fancybox="gallery">
						<div class="image" style="background-image: url(../images/gallery/gallery57.jpeg)">
							<div class="overlay">
								<em class="mdi mdi-magnify-plus"></em>
							</div>
						</div>
					</a>
				</div>
				<div class="swiper-slide">
					<a href="../images/gallery/gallery58.jpeg" data-fancybox="gallery">
						<div class="image" style="background-image: url(../images/gallery/gallery58.jpeg)">
							<div class="overlay">
								<em class="mdi mdi-magnify-plus"></em>
							</div>
						</div>
					</a>
				</div>
				<div class="swiper-slide">
					<a href="../images/gallery/gallery59.jpg" data-fancybox="gallery">
						<div class="image" style="background-image: url(../images/gallery/gallery59.jpg)">
							<div class="overlay">
								<em class="mdi mdi-magnify-plus"></em>
							</div>
						</div>
					</a>
				</div>
				<div class="swiper-slide">
					<a href="../images/gallery/gallery60.jpeg" data-fancybox="gallery">
						<div class="image" style="background-image: url(../images/gallery/gallery60.jpeg)">
							<div class="overlay">
								<em class="mdi mdi-magnify-plus"></em>
							</div>
						</div>
					</a>
				</div>
				<div class="swiper-slide">
					<a href="../images/gallery/gallery61.jpeg" data-fancybox="gallery">
						<div class="image" style="background-image: url(../images/gallery/gallery61.jpeg)">
							<div class="overlay">
								<em class="mdi mdi-magnify-plus"></em>
							</div>
						</div>
					</a>
				</div>
				<div class="swiper-slide">
					<a href="../images/gallery/gallery62.jpg" data-fancybox="gallery">
						<div class="image" style="background-image: url(../images/gallery/gallery62.jpg)">
							<div class="overlay">
								<em class="mdi mdi-magnify-plus"></em>
							</div>
						</div>
					</a>
				</div>
				<div class="swiper-slide">
					<a href="../images/gallery/gallery63.jpg" data-fancybox="gallery">
						<div class="image" style="background-image: url(../images/gallery/gallery63.jpg)">
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
</section>

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
include('../headers/topFooter.php');
include('../headers/bottomFooter.php');
?>