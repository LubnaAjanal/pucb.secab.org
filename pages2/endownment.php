<?php
include('../header.php');

?>

<style>
	.endowments-section {
		padding: 40px;
		background-color: #f8f9fa;
	}

	.endowments-section h2 {
		text-align: center;
		margin-bottom: 30px;
		color: #343a40;
	}

	.endowments {
		margin-bottom: 40px;
	}

	.endowments img {
		max-width: 100%;
		border-radius: 5px;
		margin-bottom: 20px;
	}

	.endowments-content {
		background: #fff;
		padding: 20px;
		border-radius: 5px;
		box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
		color: #495057;
	}

	.bi-check-all {
		font-size: 22px;
		color: green;
		/* margin-right: 5px; */
	}
</style>

<!-- Breadcrumb -->
<div class="breadcrumbs overlay" style="background-image:url('../images/breadcrumb-bg.jpg');margin-top:11%;">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-12">
				<h2>STUDENT ENDOWMENTS</h2>
			</div>
			<div class="col-lg-6 col-md-6 col-12">
				<ul class="bread-list">
					<li><a href="index.html">Home<i class="fa fa-angle-right"></i></a></li>
					<li class="active"><a href="#">Student Endownment<i class="fa fa-angle-right"></i></a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
<!--/ End Breadcrumb -->

<!-- Student Endownment -->
<section class="endowments-section">
	<div class="container">
		<h2>Student Endowments and Scholarships</h2>
		<div class="endowments row align-items-center">
			<div class="col-md-6">
				<div class="endowments-content">
					<h3>Scholarships</h3>
					<ul>
						<li><i class="bi bi-check-all"></i> Merit Scholarship.</li>
						<li><i class="bi bi-check-all"></i> MOMA Scholarship.</li>
						<li><i class="bi bi-check-all"></i> B.C.M. Scholarship.</li>
						<li><i class="bi bi-check-all"></i> SC/ST Scholarship.</li>
						<li><i class="bi bi-check-all"></i> Defence Scholarship.</li>
						<li><i class="bi bi-check-all"></i> Physically Handicapped Scholarship.</li>
						<li><i class="bi bi-check-all"></i> Protsahadhana Scholarship.</li>
						<li><i class="bi bi-check-all"></i> MAEF Girls Scholarship.</li>
						<li><i class="bi bi-check-all"></i> Vidya Shri Scholarship.</li>
					</ul>
				</div>
			</div>
			<div class="col-md-6">
				<img src="../images/developing/scholarship.jpg" alt="Scholarships" class="mt-4">
			</div>
		</div>

		<div class="endowments row align-items-center">
			<div class="col-md-6">
				<img src="../images/developing/nss.jpg" alt="NSS Image">
			</div>
			<div class="col-md-6">
				<div class="endowments-content">
					<h3>Inspiring Social Responsibilities</h3>
					<p>NSS (National Service Scheme): The College NSS unit organizes medical check-ups, cleanliness programmes, special camps, protection of historical monuments, and tree planting initiatives.</p>
				</div>
			</div>
		</div>
	</div>
</section>


<!--/ End Student Endownment -->

<!-- Footer -->
<?php
include('../topFooter.php');
include('../bottomFooter.php');
?>