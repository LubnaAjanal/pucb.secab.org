<?php
include('../header1.php');
?>
<style>
	/* About the college Styling */
	#image-title {
		border-radius: 10px;
		text-align: center;
		margin-top: 10px;
		box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
		background-color: white;
		padding: 15px;
		width: 38%;
		margin: 70% 0 0 35%;
		height: 19%;
	}

	.image {
		width: 100%;
		border: 2px solid #ddd;
		border-radius: 4px;
		padding: 5px;
		float: left;
		margin: 0 0 20px 20px;
		box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
	}

	.profileImage img {
		border: 2px solid #ddd;
		border-radius: 4px;
		padding: 5px;
		float: left;
		width: 100%;
		margin: 50px 0 0 0;
		box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
	}

	.aboutcontent {
		margin: 0 0 0 20px;
		border: 1px solid white;
		background-color: white;
		box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
		border-radius: 8px;
		z-index: 1;
		position: relative;
		height: 20%;
		width: 100%;
	}

	.about-title {
		margin: 0 0 0 20px;
		overflow: hidden;
		white-space: nowrap;
	}

	/* Styling for Vision & Mission */
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
	}
</style>
<!-- Breadcrumb -->
<div class="breadcrumbs overlay" style="background-image:url('../images/headerPhotos/profile.webp');margin-top:19%;">
	<div class="container ">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-12">
				<h2>COLLEGE PROFILE</h2>
			</div>
			<div class="col-lg-6 col-md-6 col-12">
				<ul class="bread-list">
					<li><a href="../index.php">Home<i class="fa fa-angle-right"></i></a></li>
					<!-- <li><a href="#">Events<i class="fa fa-angle-right"></i></a></li> -->
					<li class="active"><a href="#">Profile</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
<!--/ End Breadcrumb -->

<!-- Profile -->
<section class="profileClass" style="margin-top:5%;margin-bottom:5%">
	<div class="container">
		<div class="row">
			<div class="col-sm ">
				<img src="../images/profile1.jpg" alt="profile image" class="image" />
				<div class="image-title" id="image-title" style="background-color:rgb(233, 221, 205);">
					<h5 class="mb-0">Mr.N.S.Bhusnur</h5>
					<p class="mb-0"> Principal</p>
				</div>
			</div>
			<div class="col-sm aboutcontent">
				<h3 class="about-title mb-3 pt-3">About The College</h3>
				<p class="aboutContent pb-3">
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
	</div>
</section>


<div class="container">
	<h3 class="mainHeading text-center mt-5 mb-4">VISION & MISSION</h3>
	<section style="margin-top:50px;">
		<div class="row">
			<div class="col-md-6">
				<div class="profileImage">
					<img src="../images/profile2.jpg" alt="Vision Image">
				</div>
			</div>
			<div class="col-md-6">
				<div class="cardBox">
					<div class="card card-custom vision">
						<h2>VISION</h2>
						<!-- <span>Hover Me</span> -->
						<div class="content">
							<p>To make students competent, committed, compassionate and conscientious.</p>
						</div>
					</div>
				</div>
				<div class="cardBox mt-5" style="margin-bottom:14%;">
					<div class="card card-custom mission">
						<h2>MISSION</h2>
						<!-- <span>Hover Me</span> -->
						<div class="content">
							<p>Is to form intellectually competent, professionally skilled, morally responsible, socially just and culturally sensitive global citizens.</p>
						</div>
					</div>
				</div>
			</div>
	</section>
</div>
</div>
<!--/ End Profile -->


<!-- Footer -->
<?php
include('../topFooter.php');
include('../bottomFooter.php');
?>