<?php
include('../header1.php');

?>

<style>
	.admin-title h2 {
		text-align: center;
		font-weight: bold;
		background-color: burlywood;
		width: 30%;
		padding: 17px;
		margin: 0 auto;
		border-radius: 4px;
		box-shadow: 0 4px 8px rgba(0, 0, 0, 0.6);
	}

	.admin-title1 {
		text-align: center;
		font-weight: bold;
		background-color: burlywood;
		width: 30%;
		padding: 17px;
		margin: 0 0 2% 35%;
		border-radius: 4px;
		box-shadow: 0 4px 8px rgba(0, 0, 0, 0.6);
	}

	.admin-title p {
		margin: 17px 0 20px;
		font-size: 1.2em;
		text-align: center;
	}

	.image {
		width: 100%;
		border: 2px solid #ddd;
		padding: 6px;
		box-shadow: 0 0 20px rgba(0, 0, 0, 0.6);
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

	.table-container th[colspan="4"],
	.table-container th[colspan="3"] {
		border-bottom: 1px solid black;
		border-right: 1px solid black;
		/* Add right border to top-level th */
	}
</style>
<!-- Breadcrumb -->
<div class="breadcrumbs overlay" style="background-image:url('../images/headerPhotos/header4.jpg');">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-12">
				<h2>RESULTS & RANKING</h2>
			</div>
			<div class="col-lg-6 col-md-6 col-12">
				<ul class="bread-list">
					<li><a href="../index.php">Home<i class="fa fa-angle-right"></i></a></li>
					<li class="active"><a href="#">Results & Ranking<i class="fa fa-angle-right"></i></a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
<!--/ End Breadcrumb -->

<!-- Results & Ranking -->
<section>
	<div class="container" style="margin-top:50px; margin-bottom:50px;">
		<div class="admin-title">
			<h2>Results & Rankings</h2>
			<h5 class="ml-4 mb-2" style="text-decoration:underline;">Achievers:</h5>
			<p>The College has a huge play ground with all the sports amenities.
				Students are encouraged to participate in various indoor and outdoor games and
				develop their physical fitness. Students can avail the facilities of Badminton,
				Table Tennis and other Indoor games.</p>

			<img src="../images/result_ranking.jpg" alt="results image" class="image" />
		</div>
	</div>
</section>

<section>
	<h2 class="admin-title1">Facts & Figures for 2015</h2>
	<div class="container">
		<!-- Facts & Figures Table -->
		<div class="table-container">
			<table>
				<thead>
					<tr>
						<th>Result</th>
						<th>Science</th>
						<th>Arts</th>
						<th>Commerce</th>
						<th>Total</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Distinction</td>
						<td>08</td>
						<td>04</td>
						<td>02</td>
						<td>14</td>
					</tr>
					<tr>
						<td>First Class</td>
						<td>35</td>
						<td>10</td>
						<td>09</td>
						<td>54</td>
					</tr>
					<tr>
						<td>Second Class</td>
						<td>08</td>
						<td>04</td>
						<td>08</td>
						<td>20</td>
					</tr>
					<tr>
						<td>Pass Class</td>
						<td></td>
						<td>05</td>
						<td>05</td>
						<td>10</td>
					</tr>
					<tr>
						<td>Failures</td>
						<td>21</td>
						<td>14</td>
						<td>08</td>
						<td>43</td>
					</tr>
					<tr>
						<td>Total Appeared</td>
						<td>72</td>
						<td>37</td>
						<td>32</td>
						<td>141</td>
					</tr>
					<tr>
						<td>Total Pass</td>
						<td>51</td>
						<td>23</td>
						<td>24</td>
						<td>98</td>
					</tr>
					<tr>
						<td>% of Passing</td>
						<td>70.83%</td>
						<td>62.16%</td>
						<td>75.00%</td>
						<td>70.00%</td>
					</tr>
				</tbody>
			</table>
		</div>
</section>

<section>
	<h2 class="admin-title1 mt-5" style="width:50%;margin-left:25%;">Subject wise pass percentage March 2015</h2>
	<div class="container">
		<div class="table-container">
			<table>
				<thead>
					<tr>
						<th colspan="3">SCIENCE</th>
						<th colspan="3">ARTS & COMMERCE</th>
						<th colspan="3">LANGUAGES</th>
					</tr>
					<tr>
						<th>SL NO.</th>
						<th>SUBJECT</th>
						<th>TOTAL</th>
						<th>SL NO.</th>
						<th>SUBJECT</th>
						<th>TOTAL</th>
						<th>SL NO.</th>
						<th>SUBJECT</th>
						<th>TOTAL</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>1</td>
						<td>PHYSICS</td>
						<td>91%</td>
						<td>1</td>
						<td>HISTORY</td>
						<td>97%</td>
						<td>1</td>
						<td>ENGLISH (Sci.)</td>
						<td>100%</td>
					</tr>
					<tr>
						<td>2</td>
						<td>CHEMISTRY</td>
						<td>89%</td>
						<td>2</td>
						<td>ECONOMICS</td>
						<td>84%</td>
						<td>2</td>
						<td>ENGLISH (A &C)</td>
						<td>99%</td>
					</tr>
					<tr>
						<td>3</td>
						<td>MATHEMATICS</td>
						<td>81%</td>
						<td>3</td>
						<td>GEOGRAPHY</td>
						<td>100%</td>
						<td>3</td>
						<td>KANNADA</td>
						<td>91%</td>
					</tr>
					<tr>
						<td>4</td>
						<td>BIOLOGY</td>
						<td>90%</td>
						<td>4</td>
						<td>SOCIOLOGY</td>
						<td>76%</td>
						<td>4</td>
						<td>HINDI</td>
						<td>95%</td>
					</tr>
					<tr>
						<td>5</td>
						<td>STATISTIC</td>
						<td>100%</td>
						<td>5</td>
						<td>POL.SCI</td>
						<td>84%</td>
						<td>5</td>
						<td>URDU</td>
						<td>100%</td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td>6</td>
						<td>BUS.STUDIES</td>
						<td>97%</td>
						<td></td>
						<td>ARABIC</td>
						<td>100%</td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td>7</td>
						<td>ACCOUNTANCY</td>
						<td>75%</td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</section>

<section>
	<h2 class="admin-title1 mt-5" style="width:40%; margin-left:30%;">Students Placement since 1987</h2>
	<div class="container">
		<!-- Facts & Figures Table -->
		<div class="table-container">
			<table>
				<thead>
					<tr>
						<th>SL NO.</th>
						<th>COURCES</th>
						<th>TOTAL NUMBER OF STUDENTS</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>1</td>
						<td>M.B.B.S</td>
						<td>061</td>
					</tr>
					<tr>
						<td>2</td>
						<td>B.D.S</td>
						<td>040</td>
					</tr>
					<tr>
						<td>3</td>
						<td>ISMH</td>
						<td>030</td>
					</tr>
					<tr>
						<td>4</td>
						<td>B.E. / B.Tech</td>
						<td>656</td>
					</tr>
					<tr>
						<td>5</td>
						<td>B.Arch</td>
						<td>012</td>
					</tr>
					<tr>
						<td>6</td>
						<td>B.Sc.(Agri)</td>
						<td>021</td>
					</tr>
					<tr style="background-color:#b3b3b3;">
						<td></td>
						<td>TOTAL</td>
						<td>819</td>
					</tr>
				</tbody>
			</table>
		</div>
</section>

<section class="mb-5">
	<h2 class="admin-title1 mt-5" style="width:40%; margin-left:30%;">STUDENTS BOARD OF HONOUR</h2>
	<div class="container">
		<!-- Facts & Figures Table -->
		<div class="table-container">
			<table>
				<thead>
					<tr>
						<th>SL NO.</th>
						<th>NAME</th>
						<th>YEAR</th>
						<th>MARKS</th>
						<th>PERCENT</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>1</td>
						<td>Shujauddin.S.Punekar</td>
						<td>1987</td>
						<td>493</td>
						<td>82.2</td>
					</tr>
					<tr>
						<td>2</td>
						<td>K.Mohd. Azam Khan</td>
						<td>1988</td>
						<td>273</td>
						<td>45.5</td>
					</tr>
					<tr>
						<td>3</td>
						<td>Asif Alurkar</td>
						<td>1989</td>
						<td>486</td>
						<td>81.0</td>
					</tr>
					<tr>
						<td>4</td>
						<td>Ashfaq Ahmed Kakkeri</td>
						<td>1990</td>
						<td>486</td>
						<td>81.0</td>
					</tr>
					<tr>
						<td>5</td>
						<td>Sajid.M.Mudhol</td>
						<td>1991</td>
						<td>491</td>
						<td>81.8</td>
					</tr>
					<tr>
						<td>6</td>
						<td>Naushad Ali.N.Malagi</td>
						<td>1992</td>
						<td>412</td>
						<td>68.7</td>
					</tr>
					<tr>
						<td>7</td>
						<td>Mujahid Ahmed.M.Bagwan</td>
						<td>1993</td>
						<td>470</td>
						<td>78.3</td>
					</tr>
					<tr>
						<td>8</td>
						<td>Nazar Husain.F.Golewale</td>
						<td>1994</td>
						<td>495</td>
						<td>82.5</td>
					</tr>
					<tr>
						<td>9</td>
						<td>Ashfak Husain I.Sarwad</td>
						<td>1995</td>
						<td>460</td>
						<td>76.7</td>
					</tr>
					<tr>
						<td>10</td>
						<td>Prakash.S.Lingadalli</td>
						<td>1996</td>
						<td>480</td>
						<td>80.0</td>
					</tr>
					<tr>
						<td>11</td>
						<td>Javed Ahmed.S.Patel</td>
						<td>1997</td>
						<td>513</td>
						<td>85.5</td>
					</tr>
					<tr>
						<td>12</td>
						<td>Raj Mohammad D.Malled</td>
						<td>1998</td>
						<td>461</td>
						<td>76.8</td>
					</tr>
					<tr>
						<td>13</td>
						<td>Tousif.M.Janvekar</td>
						<td>1998</td>
						<td>461</td>
						<td>76.8</td>
					</tr>
					<tr>
						<td>14</td>
						<td>Nazeer Ahmed D.Jeergal</td>
						<td>1999</td>
						<td>501</td>
						<td>83.5</td>
					</tr>
					<tr>
						<td>15</td>
						<td>Vasant.S.Patil</td>
						<td>2000</td>
						<td>479</td>
						<td>79.8</td>
					</tr>
					<tr>
						<td>16</td>
						<td>SayedRehan.S.Inamdar</td>
						<td>2001</td>
						<td>495</td>
						<td>82.5</td>
					</tr>
					<tr>
						<td>17</td>
						<td>Chandrashekhar.S.Devoor</td>
						<td>2002</td>
						<td>498</td>
						<td>83.0</td>
					</tr>
					<tr>
						<td>18</td>
						<td>Sarfaraz.R.Momin</td>
						<td>2003</td>
						<td>553</td>
						<td>92.2</td>
					</tr>
					<tr>
						<td>19</td>
						<td>K.Mohd. Asim Khan</td>
						<td>2004</td>
						<td>531</td>
						<td>88.5</td>
					</tr>
					<tr>
						<td>20</td>
						<td>Tousif.A.Mamdapur</td>
						<td>2005</td>
						<td>555</td>
						<td>92.5</td>
					</tr>
					<tr>
						<td>21</td>
						<td>Mohd. Amir.R.Bagali</td>
						<td>2006</td>
						<td>554</td>
						<td>92.3</td>
					</tr>
					<tr>
						<td>22</td>
						<td>Mohsin.M.Mujawar</td>
						<td>2007</td>
						<td>537</td>
						<td>89.5</td>
					</tr>
					<tr>
						<td>23</td>
						<td>Mujtaba.M.Bagban</td>
						<td>2008</td>
						<td>532</td>
						<td>88.2</td>
					</tr>
					<tr>
						<td>24</td>
						<td>M.Saquib. Patel</td>
						<td>2009</td>
						<td>551</td>
						<td>91.8</td>
					</tr>
					<tr>
						<td>25</td>
						<td>Azharuddin.N.Inamdar</td>
						<td>2010</td>
						<td>559</td>
						<td>93.2</td>
					</tr>
					<tr>
						<td>26</td>
						<td>Abdus Subhan Sohail</td>
						<td>2011</td>
						<td>546</td>
						<td>91.0</td>
					</tr>
					<tr>
						<td>27</td>
						<td>Yusuf Athanikar</td>
						<td>2012</td>
						<td>550</td>
						<td>91.6</td>
					</tr>
					<tr>
						<td>28</td>
						<td>Muzammil.Momin</td>
						<td>2013</td>
						<td>576</td>
						<td>96.0</td>
					</tr>
					<tr>
						<td>29</td>
						<td>Guruprasad.Goudar</td>
						<td>2014</td>
						<td>574</td>
						<td>95.6</td>
					</tr>
					<tr>
						<td>30</td>
						<td>Vinodaraddi.Gogi</td>
						<td>2015</td>
						<td>569</td>
						<td>96.0</td>
					</tr>
				</tbody>
			</table>
		</div>
</section>

<!--/ End Results & Ranking -->

<!-- Footer -->
<?php
include('../topFooter.php');
include('../bottomFooter.php');
?>