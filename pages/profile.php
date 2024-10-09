<?php
include('../headers/header1.php');
?>
<style>
	/* Styling for Vision & Mission
	.profileImage img {
		border: 2px solid #ddd;
		border-radius: 4px;
		padding: 5px;
		float: left;
		width: 100%;
		margin: 50px 0 0 0;
		box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
	}

	.card-custom {
		border-radius: 18px;
		border: 1px solid white;
		box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
	}

	.cardBox {
		width: 550px;
		height: 200px;
		position: relative;
		display: grid;
		place-items: center;
		overflow: hidden;
		border-radius: 7px;
		box-shadow: rgba(0, 0, 0, 0.4) 0px 2px 10px 0px,
			rgba(0, 0, 0, 0.5) 0px 2px 25px 0px;
	}

	.card {
		position: absolute;
		width: 98%;
		height: 95%;
		background: rgb(233, 221, 205);
		border-radius: 3px;
		z-index: 5;
		display: flex;
		justify-content: center;
		align-items: center;
		flex-direction: column;
		text-align: center;
		color: black;
		overflow: hidden;
		padding: 20px;
		cursor: pointer;
		box-shadow: rgba(0, 0, 0, 0.4) 0px 30px 60px -12px inset,
			rgba(0, 0, 0, 0.5) 0px 18px 36px -18px inset;
	}

	.card h2,
	span {
		margin-top: 28px;
		position: absolute;
		left: 50%;
		transform: translate(-50%, -50%);
		font-size: 30px;
		font-weight: bold;
		pointer-events: none;
		opacity: 0.7;
		font-family: serif;
	}

	span {
		top: 65%;
	}

	.card .content h3 {
		font-size: 3rem;
		padding-bottom: 10px;
	}

	.card .content p {
		font-size: 1.6rem;
		line-height: 25px;
		font-family: serif;
	}

	.card .content {
		transform: translateY(100%);
		opacity: 0;
		transition: 0.3s ease-in-out;
	}

	.card:hover .content {
		transform: translateY(0);
		opacity: 1;
	}

	.card:hover h2,
	.card:hover span {
		opacity: 0;
	}

	.cardBox::before {
		content: "";
		position: absolute;
		width: 40%;
		height: 150%;
		background: #40E0D0;
		background: -webkit-linear-gradient(to right, #FF0080, #FF8C00, #40E0D0);
		background: linear-gradient(to right, #FF0080, #FF8C00, #40E0D0);
		animation: glowing01 5s linear infinite;
		transform-origin: center;
		animation: glowing 5s linear infinite;
	}

	.mainHeading {
		box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
		text-align: center;
		background-color: burlywood;
		padding: 15px;
		width: 30%;
		margin: 0 0 0 35%;
		height: 30%;
	}

	@keyframes glowing {
		0% {
			transform: rotate(0);
		}

		100% {
			transform: rotate(360deg);
		}
	} */
</style>
<!-- Breadcrumb -->
<div class="breadcrumbs overlay" style="background-image:url('../images/headerPhotos/header1.avif');">
	<div class="container ">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-12">
				<h2>COLLEGE PROFILE</h2>
			</div>
			<div class="col-lg-6 col-md-6 col-12">
				<ul class="bread-list">
					<li><a href="../index.php">Home<i class="fa fa-angle-right"></i></a></li>
					<li class="active"><a href="#">Profile</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
<!--/ End Breadcrumb -->

<!-- Profile -->
<section class="section">
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				<img src="../images/profile1.jpg" alt="profile image" class="img-fluid image" />
				<div class="image-title" id="image-title" style="background-color:burlywood;">
					<h5 class="mb-0">Mr.N.S.Bhusnur</h5>
					<p class="mb-0">Dean</p>
				</div>
			</div>
			<div class="col-sm aboutcollege">
				<h3 class="mb-3 pt-3">About The College</h3>
				<p class="pb-3">
					SECAB PU College for Boys,is situated in the heart of Vijaypur city,
					near central bus stand. It was established in 1984.
					The college has been recognized and aided by Government of Karnataka and
					Department of Pre University Education, Bangalore.
					It conducts Pre University Level (+2) courses in Arts,
					Science and Commerce. The college campus covers a vast area of 6 acres,
					comprising of infrastructure facilities like spacious class rooms,
					laboratories, library, administrative unit and a huge playground.
					The college has been assessed and accredited with ‘A’ grade by the Dept.
					of Pre University Education, Bangalore for imparting quality education,
					academic excellence and infrastructure.
				</p>
			</div>
		</div>

		<div class="row mt-5">
			<div class="col-sm-6">
				<img src="../images/principal.jpg" alt="profile image" class="img-fluid image" />
				<div class="image-title" id="image-title" style="background-color:burlywood;">
					<h5 class="mb-0">Ms S.K Kattimani</h5>
					<p class="mb-0">Principal</p>
				</div>
			</div>
			<div class="col-sm aboutcollege" style="margin-top:20%;">
				<h3 class="mb-3 pt-3">About The Principal</h3>
				<p class="pb-3">
					Ms Sujatha K Kattimani, MA,
					is the newly appointed Principal of the college.
					She is positive & adopts various new methods to bring the best from the students. She motivates the Staff to ace for the best..
				</p>
			</div>
		</div>
	</div>
</section>
<?php
include('../indexPages/aboutCity.php');
include('../indexPages/aboutGallery.php');
include('../pages/prospactus.php');
include('../pages2/secab_at_glance.php');
?>

<!--/ End Profile -->


<!-- Footer -->
<?php
include('../headers/topFooter.php');
include('../headers/bottomFooter.php');
?>