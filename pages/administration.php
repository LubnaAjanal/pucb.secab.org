<?php include('../headers/header1.php'); ?>
<style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap");

    .table-container {
        overflow: auto;
        border-radius: .8rem;
        box-shadow: 0 0 0.5rem rgba(39, 38, 38, 0.1);
        display: none;
    }

    @media (min-width: 768px) {
        .table-container {
            display: block;
        }
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    .table-header {
        /* background-color: #f9fafb; */
        border-bottom: 0.125rem solid #edf2f7;
    }

    .table-header-row {
        background-color: #738f73;
        color: black;
        border-bottom: 0.125rem solid #edf2f7;
        text-align: left;

    }

    .key-heading,
    .details-heading,
    .status-heading {
        padding: 0.75rem;
        font-size: 18px;
        font-weight: bold;
        letter-spacing: 0.025em;
        text-align: left;
    }

    .key-heading {
        width: 3.75rem;
    }

    .details-heading,
    .status-heading {
        width: 50%;
    }

    .category-heading {
        width: 3rem;
    }

    tbody {
        border-color: #edf2f7;
        background-color: #212121;
        box-shadow: 0 0.25rem 0.5rem rgba(0, 0, 0, 0.4);

    }

    tr {
        background-color: #ffffff;
    }

    .tr-even {
        text-align: left;
        ;
        background-color: #f0f0ff;
    }

    td {
        padding: 0.75rem;
        font-size: 15px;
        color: #4a5568;
        white-space: nowrap;
    }

    a {
        font-weight: 600;
        color: #212121;
        text-decoration: none;
    }

    a:hover {
        text-decoration: underline;
    }

    .controls {
        margin-bottom: 1em;
        text-align: center;
    }

    .filter-btn {
        margin-right: 1em;
        padding: 0.5em 1em;
        cursor: pointer;
        font-weight: 600;
        color: #212121;
        text-decoration: none;
        border-radius: .5rem;
        box-shadow: 0 0.25rem 0.5rem rgba(0, 0, 0, 0.4);
        border-color: #edf2f7;
        font-family: "Poppins", sans-serif;
    }

    /* Administration css code */
    /* Card styles */
    .card-body ul {
        padding-left: 20px;
    }

    .card-body ul li {
        margin-bottom: 10px;
    }

    
</style>
<!-- Breadcrumb -->
<div class="breadcrumbs overlay" style="background-image:url('../images/headerPhotos/header2.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
                <h2>ADMINISTRATION</h2>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <ul class="bread-list">
                    <li><a href="../index.php">Home<i class="fa fa-angle-right"></i></a></li>
                    <li class="active"><a href="#">Administration</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--/ End Breadcrumb -->

<!-- Administration -->
<section class="section">
    <div class="container">
        <div class="admin-title">
            <h2 class="heading">COURSES</h2>
            <p>The college offers the below mentioned PU Courses. Candidates shall select under Part-I any two of the following languages and a desired combination in Part-II.</p>
        </div>

        <div class="admin-title">
            <div class="controls">
                <button class="filter-btn" data-status="all">All</button>
                <button class="filter-btn" data-status="language">Language</button>
                <button class="filter-btn" data-status="arts">Arts</button>
                <button class="filter-btn" data-status="commerce">Commerce</button>
                <button class="filter-btn" data-status="science">Science</button>
            </div>
            <div class="table-container">
                <table class="table">
                    <thead class="table-header">
                        <tr class="table-header-row">
                            <th class="key-heading">Part</th>
                            <th class="category-heading">Category</th>
                            <th class="details-heading">Details</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Part-I: Language -->
                        <tr class="tr-even" data-category="language">
                            <td rowspan="2">Part-I</td>
                            <td>Language</td>
                            <td>Compulsory: English</td>
                        </tr>
                        <tr class="tr-even" data-category="language">
                            <td>Optional</td>
                            <td>Kannada, Hindi, Urdu, Arabic</td>
                        </tr>
                        <!-- Part-II: Arts -->
                        <tr class="tr-even" data-category="arts">
                            <td rowspan="2">Part-II</td>
                            <td>Arts</td>
                            <td>HEPS: History, Economics, Political Science, Sociology</td>
                        </tr>
                        <tr class="tr-even" data-category="arts">
                            <td>Arts</td>
                            <td>HEPG: History, Economics, Political Science, Geography</td>
                        </tr>
                        <!-- Part-II: Commerce -->
                        <tr class="tr-even" data-category="commerce">
                            <td>Part-II</td>
                            <td>Commerce</td>
                            <td>EGBA: Economics, Geography, Business Studies, Accountancy</td>
                        </tr>
                        <!-- Part-II: Science -->
                        <tr class="tr-even" data-category="science">
                            <td rowspan="2">Part-II</td>
                            <td>Science</td>
                            <td>PCMB: Physics, Chemistry, Mathematics, Biology</td>
                        </tr>
                        <tr class="tr-even" data-category="science">
                            <td>Science</td>
                            <td>PCMS: Physics, Chemistry, Mathematics, Statistics</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

<section class="admissionRules">
    <div class="container">
        <h2 class="heading">Admission Guidelines and Rules</h2>
        <div class="row mt-5">
            <!-- Entry Requirements Card -->
            <div class="col-md-6 mb-5">
                <div class="card bg-light h-100">
                    <div class="card-header">Entry Requirements</div>
                    <div class="card-body">
                        <ul>
                            <li><i class="fa fa-check" style="font-size:20px"></i> An applicant eligible for admission of the above courses should have passed the Karnataka School Leaving Certificate (S.S.L.C / X) or any other examination recognized by the Board as equivalent to Karnataka S.S.L.C. (10th) exams viz., CBSE, ICSE.</li>
                            <li><i class="fa fa-check" style="font-size:20px"></i> At the time of admission, the parents of the selected candidates should accompany their wards and sign in the admission register.</li>
                            <li><i class="fa fa-check" style="font-size:20px"></i> The students have to pay the prescribed fees and obtain the receipt.</li>
                            <li><i class="fa fa-check" style="font-size:20px"></i> The applicant should produce the below mentioned documents at the time of admission:</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Required Documents Card -->
            <div class="col-md-6 mb-5">
                <div class="card bg-light h-100">
                    <div class="card-header">Required Documents</div>
                    <div class="card-body">
                        <ul>
                            <li><i class="fa fa-check" style="font-size:20px"></i> Original L.C. from the school last attended</li>
                            <li><i class="fa fa-check" style="font-size:20px"></i> S.S.L.C / X or equivalent marks card</li>
                            <li><i class="fa fa-check" style="font-size:20px"></i> Caste Certificate & Income Certificate (If applicable)</li>
                            <li><i class="fa fa-check" style="font-size:20px"></i> Conduct Certificate</li>
                            <li><i class="fa fa-check" style="font-size:20px"></i> Six passport size colour photographs</li>
                            <li><i class="fa fa-check" style="font-size:20px"></i> Aadhaar Card</li>
                            <li><i class="fa fa-check" style="font-size:20px"></i> Bank Passbook</li>
                            <li><i class="fa fa-check" style="font-size:20px"></i> Achievement Certificates (if any)</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Application Process Card -->
            <div class="col-md-6 mb-5">
                <div class="card bg-light h-100">
                    <div class="card-header">Admission Rules</div>
                    <div class="card-body">
                        <ul>
                            <li><i class="fa fa-check" style="font-size:20px"></i> Applicants must fill in the application form and submit it within the prescribed date.</li>
                            <li><i class="fa fa-check" style="font-size:20px"></i> List of provisionally selected students will be displayed on the notice board.</li>
                            <li><i class="fa fa-check" style="font-size:20px"></i> Fees once paid will not be refunded.</li>
                            <li><i class="fa fa-check" style="font-size:20px"></i> Copy of the Application form.</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- General Rules Card -->
            <div class="col-md-6 mb-5">
                <div class="card bg-light h-100">
                    <div class="card-header">Discipline Rules</div>
                    <div class="card-body">
                        <ul>
                            <li><i class="fa fa-check" style="font-size:20px"></i> Every student should wear Uniform compulsorily.</li>
                            <li><i class="fa fa-check" style="font-size:20px"></i> Cell phones are strictly prohibited on the campus.</li>
                            <li><i class="fa fa-check" style="font-size:20px"></i> Students are not permitted to ride bikes to the college.</li>
                            <li><i class="fa fa-check" style="font-size:20px"></i> The use of tobacco products is totally banned.</li>
                            <li><i class="fa fa-check" style="font-size:20px"></i> Students should be regular and punctual as per the timetable.</li>
                            <li><i class="fa fa-check" style="font-size:20px"></i> Attendance is compulsory for appearing in annual exams (more than 75%).</li>
                            <li><i class="fa fa-check" style="font-size:20px"></i> Students are forbidden to write on the blackboards, walls of the college building, or mark on the furniture.</li>
                            <li><i class="fa fa-check" style="font-size:20px"></i> Any misconduct by the students will not be tolerated.</li>
                            <li><i class="fa fa-check" style="font-size:20px"></i> Disciplinary action will be taken for students who violate the above rules.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <!-- Copy of the Form Card -->
            <div class="col-md-6 mb-5">
                <div class="card bg-light h-70">
                    <div class="card-header">Download Copy of the Form</div>
                    <div class="card-body d-flex justify-content-center align-items-center mt-0 mb-0">
                        <a href="../docs/IPU_Appln.pdf" target="_blank">
                            <img src="../images/downloadform.jpg" alt="form download"/>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ End Administration -->

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const filterButtons = document.querySelectorAll('.filter-btn');
        const tableRows = document.querySelectorAll('.table tbody tr');

        filterButtons.forEach(button => {
            button.addEventListener('click', () => {
                const status = button.getAttribute('data-status');
                filterRows(status);
            });
        });

        function filterRows(status) {
            tableRows.forEach(row => {
                if (status === 'all') {
                    row.style.display = '';
                } else if (row.getAttribute('data-category') === status) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        }
    });
</script>

<!-- Footer -->
<?php
include('../headers/topFooter.php');
include('../headers/bottomFooter.php');
?>