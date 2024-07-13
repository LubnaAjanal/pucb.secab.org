<?php
include('../header.php');

?>


<style>
	.bom-title {
		text-align: center;
		font-weight: bold;
		background-color: burlywood;
		width: 50%;
		padding: 17px;
		margin: 0 0 5% 25%;
		border-radius: 4px;
		box-shadow: 0 4px 8px rgba(0, 0, 0, 0.6);
	}

	.secab {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            margin-bottom: 20px;
            padding: 20px;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        .secab-heading {
            color: #4CAF50;
            margin-top: 20px;
            margin-bottom: 10px;
            border-bottom: 2px solid #4CAF50;
            padding-bottom: 5px;
        }
        h3 {
			text-decoration: underline;
            color: #333;
            margin-top: 15px;
            margin-bottom: 5px;
        }
        p {
            margin: 5px 0;
        }
        .contacts {
            margin-top: 20px;
        }
        .contacts p {
            margin: 5px 0;
        }
        a {
            color: #0066cc;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
</style>


<!-- Breadcrumb -->
<div class="breadcrumbs overlay" style="background-image:url('../images/breadcrumb-bg.jpg');margin-top:11%;">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-12">
				<h2>SECAB AT GLANCE</h2>
			</div>
			<div class="col-lg-6 col-md-6 col-12">
				<ul class="bread-list">
					<li><a href="index.html">Home<i class="fa fa-angle-right"></i></a></li>
					<li class="active"><a href="#">Secab at Glance<i class="fa fa-angle-right"></i></a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
<!--/ End Breadcrumb -->

<!-- Secab at Glance -->
<section class="secab">
	<h1 class="bom-title">SECAB GROUP OF INSTITUTIONS</h1>

	<h2 class="secab-heading">Engineering</h2>
	<p>SECAB Institute of Engineering and Technology, Vijaypur.</p>
	<p>SECAB P.G. Department of M.Tech's Vijaypur Malik Sandal Institute of Art and Architecture, Vijaypur.</p>
	<p>Malik Sandal Polytechnic, Vijaypur.</p>

	<h2 class="secab-heading">Medical</h2>
	<p>Luqman Unani Medical College & Hospital (UG/PG) Vijaypur.</p>
	<p>SECAB Institute of Para Medical Sciences, Vijaypur.</p>

	<h2 class="secab-heading">Professional / Degree</h2>
	<p>SECAB Institute of BA, BBA & BCA Vijaypur.</p>
	<p>SECAB P.G. Department of Management Studies (MBA), Vijaypur.</p>
	<p>SECAB ARSI Degree College for Women, Vijaypur.</p>

	<h2 class="secab-heading">Pre-University</h2>
	<p>SECAB P.U. College for Women, Vijaypur.</p>
	<p>SECAB P.U. College for Boys, Vijaypur.</p>
	<p>SECAB P.U. College, Bangalore.</p>

	<h2 class="secab-heading">High Schools</h2>
	<p>SECAB English Medium High School, (Boys) Naubag, Vijaypur.</p>
	<p>SECAB English Medium High School, (Girls) Naubag, Vijaypur.</p>
	<p>SECAB Chand Bibi Urdu High School, Naubag, Vijaypur.</p>
	<p>SECAB Modern Kannada Medium High School, Nauraspur, Vijaypur.</p>
	<p>SECAB Secondary Urdu Medium High School, Naubag, Vijaypur.</p>
	<p>SECAB M.S. High School, Tikota, Dist: Vijaypur.</p>
	<p>SECAB High School, Kadrinhalli, Bangalore.</p>

	<h2 class="secab-heading">Primary Schools</h2>
	<p>SECAB English Medium Primary School, KKGS, Vijaypur.</p>
	<p>SECAB Modern Urdu Primary School, Naubag, Vijaypur.</p>
	<p>SECAB Kannada Primary School, Naubag, Vijaypur.</p>
	<p>SECAB Primary School, Nauraspur, Vijaypur.</p>
	<p>SECAB Primary School, Anand Nagar, Vijaypur.</p>
	<p>SECAB Primary School, Kirti Nagar, Vijaypur.</p>
	<p>SECAB Primary School, Kadrinhalli, Bangalore.</p>

	<div class="contacts">
		<h2 class="secab-heading">Office Contacts</h2>
		<h3>SECAB PU COLLEGE FOR BOYS</h3>
		<p>Behind Taj Boudi, Vijaypur – 586101, Karnataka, India.</p>
		<p>Ph: 08352-254850</p>
		<p>Fax: 08352-222769</p>
		<p>Email: <a href="mailto:secab.boys@gmail.com">secab.boys@gmail.com</a></p>

		<h3>SECAB Association</h3>
		<p>12, Naubag, Vijaypur – 586101, Karnataka, India.</p>
		<p>Ph: 08352-251321, 276930</p>
		<p>Fax: 08352-277353</p>
		<p>Website: <a href="http://www.secab.org" target="_blank">www.secab.org</a></p>
	</div>
</section>
<!--/ End Secab at Glance -->

<!-- Footer -->
<?php
include('../topFooter.php');
include('../bottomFooter.php');
?>