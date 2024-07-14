<?php
include('../header.php');

?>

<style>
	.student-activities {
		background-color: #f9f9f9;
		padding: 50px 0;
	}

	.activity-container {
		display: flex;
		justify-content: space-around;
		gap: 30px;
		max-width: 1200px;
		margin: 0 auto;
	}

	.activity {
		background-color: #fff;
		padding: 30px;
		border-radius: 10px;
		box-shadow: 0 4px 8px rgba(0, 0, 0, 0.4);
		text-align: center;
		overflow: hidden;
		transition: transform 0.3s ease;
		flex: 1;
	}

	.activity:hover {
		transform: translateY(-5px);
	}

	.activity h2 {
		font-size: 24px;
		margin-bottom: 10px;
		color: #333;
	}

	.activity p {
		font-size: 16px;
		line-height: 1.6;
		color: #666;
	}

	.activity img {
		max-width: 100%;
		border-radius: 8px;
		margin-top: 20px;
	}
</style>
<!-- Breadcrumb -->
<div class="breadcrumbs overlay" style="background-image:url('../images/headerPhotos/activity.jpg');margin-top:11%;">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-12">
				<h2>STUDENT ACTIVITIES</h2>
			</div>
			<div class="col-lg-6 col-md-6 col-12">
				<ul class="bread-list">
					<li><a href="../index.php">Home<i class="fa fa-angle-right"></i></a></li>
					<li class="active"><a href="#">Student Activities<i class="fa fa-angle-right"></i></a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
<!--/ End Breadcrumb -->

<!-- Student Activities -->
<section class="student-activities">
	<div class="container activity-container">
		<div class="activity sports">
			<h2>SPORTS</h2>
			<p>The College has a huge playground with all the sports amenities. Students are encouraged to participate in various indoor and outdoor games and develop their physical fitness. Students can avail the facilities of Badminton, Table Tennis, and other indoor games.</p>
			<img src="../images/students/sports.jpg" alt="Sports Image">
		</div>

		<div class="activity cultural">
			<h2>Cultural & Co-curricular</h2>
			<p>The college cultural committee provides a platform for students to excel in various cultural events like elocution, quiz, debate, singing, mono-acting, essay, etc. Students' talents and creativities are nurtured by conducting various co-curricular activities.</p>
			<img src="../images/students/curricular.jpg" alt="Cultural Image">
		</div>

		<div class="activity learning">
			<h2>Learning outside the classroom</h2>
			<p>Local visits and picnics are arranged to different places like historical monuments, manufacturing units, social welfare organizations, financial institutions, AIR, rainwater harvesting centers, and institutions of higher learning to expose the students for better understanding.</p>
			<img src="../images/students/learning.jpg" alt="Learning Image">
		</div>
	</div>
</section>


<!--/ End Student Activities -->

<!-- Footer -->
<?php
include('../topFooter.php');
include('../bottomFooter.php');
?>