<?php
include('../headers/header1.php');

?>

<style>
	.bom-title {
		text-align: center;
		font-weight: bold;
		background-color: burlywood;
		width: 40%;
		padding: 17px;
		margin: 0 0 5% 30%;
		border-radius: 4px;
		box-shadow: 0 4px 8px rgba(0, 0, 0, 0.6);

	}

	table {
		width: 100%;
		margin-bottom: 20px;
		border-collapse: collapse;
		box-shadow: 0 0 20px rgba(0, 0, 0, 0.6);
		background-color: #fff;
		border-radius: 10px;
	}

	table th,
	table td {
		padding: 12px 15px;
		text-align: left;
		border-bottom: 1px solid #ddd;
	}

	table th {
		background-color: #738f73;
		color: black;
		font-weight: bold;
	}

	table tr:hover {
		background-color: #e0e0e0;
	}
</style>
<!-- Breadcrumb -->
<div class="breadcrumbs overlay" style="background-image:url('../images/headerPhotos/header9.jpg');">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-12">
				<h2>STUDENT COUNCIL</h2>
			</div>
			<div class="col-lg-6 col-md-6 col-12">
				<ul class="bread-list">
					<li><a href="../index.php">Home<i class="fa fa-angle-right"></i></a></li>
					<li class="active"><a href="#">Student Council</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
<!--/ End Breadcrumb -->

<!-- Student Council -->
<section class="mt-5 mb-5">
	<div class="container">
		<h1 class="bom-title">STUDENT COUNCIL</h1>
		<h3 class="mb-3">Representatives of the college</h3>
		<div class="table-container">
			<table>
				<tr>
					<th>Name</th>
					<th>Designation</th>
					<th>Class</th>
				</tr>
				<tr>
					<td>Md Ali Punekar</td>
					<td>General Secretary</td>
					<td>II PU</td>
				</tr>
				<tr>
					<td>Salmankhan Alizai</td>
					<td>Cultural Secretary</td>
					<td>II PU</td>
				</tr>
				<tr>
					<td>Abhishekh Talawar</td>
					<td>Sports Secretary</td>
					<td>II PU</td>
				</tr>
				<tr>
					<td>Nahida Afroz Jamkhane</td>
					<td>Girls Representative</td>
					<td>II PU</td>
				</tr>
			</table>
		</div>
</section>

<section>
	<div class="container">
		<h3 class="mt-5 mb-3">Class – Representatives</h3>
		<table>
			<tr>
				<th>Class/Faculty</th>
				<th>Name of Class Representative</th>
			</tr>
			<tr>
				<td>I PUC ARTS EM</td>
				<td>1) Umair Ahmed Mantri<br>2) Sohail Shaikh<br>3) Muskan Banu Mulla</td>
			</tr>
			<tr>
				<td>I PUC ARTS KM</td>
				<td>1) Jagadeesh Badiger<br>2) Akeel Ahmed Mulla</td>
			</tr>
			<tr>
				<td>II PUC ARTS</td>
				<td>1) Nitin Dahinde Bhairodgi<br>2) Ameer M.<br>3) Javeriya Jahagirdar</td>
			</tr>
			<tr>
				<td>I PUC SCIENCE GIRLS</td>
				<td>1) Athiya Nikhath<br>2) Anam Zeba Patvegar</td>
			</tr>
			<tr>
				<td>I PUC SCIENCE BOYS</td>
				<td>1) Inayat Mulla<br>2) Ateef Bagalkot</td>
			</tr>
			<tr>
				<td>II PUC SCIENCE BOYS</td>
				<td>1) Nikhil Hadli<br>2) Mohammed Muzaffer Ali Girani</td>
			</tr>
			<tr>
				<td>II PUC SCIENCE GIRLS</td>
				<td>1) Nazia Kaladgi<br>2) Afsheennaaz Ahmed Lappy</td>
			</tr>
			<tr>
				<td>II PUC SCIENCE (STATISTICS GROUP)</td>
				<td>1) Salman Khan Alzai<br>2) Narayana Kalaburgi</td>
			</tr>
			<tr>
				<td>I PUC COMMERCE</td>
				<td>1) Shahjan Athanikar<br>2) Sayed Abdul Hasib Kazi</td>
			</tr>
			<tr>
				<td>II PUC COMMERCE</td>
				<td>1) Sayyed Gouse Quadri<br>2) Zuber Y. Qureshi</td>
			</tr>
		</table>
	</div>
	</div>
</section>
<!--/ End Student Council -->

<!-- Footer -->
<?php
include('../headers/topFooter.php');
include('../headers/bottomFooter.php');
?>