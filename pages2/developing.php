<?php
include('../header.php');

?>

<style>
	.features-section {
		padding: 40px;
		background-color: #f8f9fa;
	}

	.features-section h2 {
		text-align: center;
		margin-bottom: 30px;
		color: #343a40;
	}

	.features-section ul {
		list-style-type: none;
		padding: 0;
	}

	.features-section ul li {
		background: #fff;
		margin: 10px 0;
		padding: 15px;
		border-radius: 5px;
		box-shadow: 0 0 10px rgba(0, 0, 0, 0.4);
		font-size: 18px;
		color: #495057;
	}

	.features-section ul li:before {
		content: '✔';
		color: #007bff;
		margin-right: 10px;
	}

	.programme-section {
		padding: 40px;
		background-color: #f8f9fa;
	}

	.programme-section h2 {
		text-align: center;
		margin-bottom: 30px;
		color: #343a40;
	}

	.programme {
		margin-bottom: 40px;
	}

	.programme img {
		max-width: 100%;
		border-radius: 5px;
	}

	.programme-content {
		background: #fff;
		padding: 20px;
		font-size: 18px;
		border-radius: 5px;
		box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
		color: #495057;
	}
</style>
<!-- Breadcrumb -->
<div class="breadcrumbs overlay" style="background-image:url('../images/breadcrumb-bg.jpg');margin-top:11%;">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-12">
				<h2>DEVELOPING POTENTIALITIES</h2>
			</div>
			<div class="col-lg-6 col-md-6 col-12">
				<ul class="bread-list">
					<li><a href="../index.php">Home<i class="fa fa-angle-right"></i></a></li>
					<li class="active"><a href="#">Developing Potentialities<i class="fa fa-angle-right"></i></a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
<!--/ End Breadcrumb -->

<!-- Developing Potentialities -->
<section class="features-section">
	<div class="container">
		<h2>Salient Features of the College</h2>
		<ul>
			<li>An environment conducive to learning.</li>
			<li>Qualified, devoted and competent staff.</li>
			<li>Individual attention to the students.</li>
			<li>Bridge course in all subjects.</li>
			<li>Special intensive coaching to the meritorious students.</li>
			<li>Emphasis on spoken English.</li>
			<li>Remedial classes for the students.</li>
			<li>Parent – Teacher meet.</li>
		</ul>
	</div>
</section>

<section class="programme-section">
	<div class="container">
		<h2>CET Coaching Programme</h2>
		<div class="programme row align-items-center">
			<div class="col-md-6">
				<img src="../images/developing/image1.jpg" alt="CET Coaching">
			</div>
			<div class="col-md-6">
				<div class="programme-content">
					<p>The intensive coaching has been designed to nurture the capabilities and develop confidence to march on fearlessly on the path of success to become achievers. The CET coaching classes in Physics, Chemistry, Mathematics and Biology are conducted, which have helped students to secure seats in professional courses like MBBS, BDS, BAMS, BUMS, BHMS, B.VSc, BE, Architecture &others.</p>
				</div>
			</div>
		</div>

		<h2>Skill Enhancement Programme</h2>
		<div class="programme row align-items-center">
			<div class="col-md-6 order-md-2">
				<img src="../images/developing/image2.jpg" alt="Skill Enhancement">
			</div>
			<div class="col-md-6 order-md-1">
				<div class="programme-content">
					<p>To focus on the students personality development and enhance their knowledge and skills, a well-defined syllabi for Arts students is designed to keep them abreast with current developments in the various fields like communicative English, Personality Development, Value Education, Health Hygiene &Sports.</p>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="programme-section">
    <div class="container">
        <h2>College Programmes</h2>

        <div class="programme">
            <h3>Test and Examinations</h3>
            <div class="programme-content">
                <p>Unit / Monthly Tests and Examinations are conducted to make the students strive for better and achieve success as there will be continuous assessment of the students’ performance.</p>
            </div>
        </div>

        <div class="programme">
            <h3>Preparatory Exam Series</h3>
            <div class="programme-content">
                <p>Preparatory series exams are conducted effectively every year for the students to instill confidence and fearlessly face the annual exams to get good results.</p>
            </div>
        </div>

        <div class="programme row align-items-center">
            <div class="col-md-6">
                <img src="../images/developing/image3.jpg" alt="Sky Watch Programme">
            </div>
            <div class="col-md-6">
                <div class="programme-content">
                    <h3>Sky Watch Programme</h3>
                    <p>The sky watch programme is organized for the students in the months of December and January to give pleasurable and enriching observations of heavenly bodies by the departments of Physics and Geography.</p>
                </div>
            </div>
        </div>

        <div class="programme">
            <h3>Science Club</h3>
            <div class="programme-content">
                <p>To create awareness and inculcate scientific temperament in the students, the Science club conducts various events.</p>
            </div>
        </div>

        <div class="programme row align-items-center">
            <div class="col-md-6 order-md-2">
                <img src="../images/developing/image4.jpg" alt="Wall Magazine">
            </div>
            <div class="col-md-6 order-md-1">
                <div class="programme-content">
                    <h3>Wall Magazine</h3>
                    <p>The articles of the students, sketches, and newspaper cuttings are posted on wall magazines.</p>
                </div>
            </div>
        </div>

        <div class="programme">
            <h3>Alumni</h3>
            <div class="programme-content">
                <p>The college alumni ELITE has maintained the contact with staff and friends. Alumni can join ELITE and share their experiences through email at <a href="mailto:secab.boys@gmail.com">secab.boys@gmail.com</a>.</p>
            </div>
        </div>
    </div>
</section>

<!--/ End Developing Potentialities -->

<!-- Footer -->
<?php
include('../topFooter.php');
include('../bottomFooter.php');
?>