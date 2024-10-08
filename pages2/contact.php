<?php
include('../headers/header1.php');
?>

<style>
    .contact .card {
        border: 1px solid #e3e3e3;
        border-radius: 10px;
        width:60%;
        margin: 0 0 0 20%;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.4);
    }
    .contact .card-body {
        padding: 20px;
    }
    .contact .secab-heading {
        text-align: center;
		font-weight: bold;
		background-color: burlywood;
		width: 40%;
		padding: 17px;
		margin: 0 0 20px 33%;
		border-radius: 4px;
		box-shadow: 0 4px 8px rgba(0, 0, 0, 0.6);
    }
    .contact .card-subtitle {
        font-size: 1.4rem;
        color: #343a40;
        margin-top: 15px;
    }
    .contact .card-text {
        font-size: 1rem;
        color: #6c757d;
    }
    .contact .card-text a {
        color: #007bff;
        text-decoration: none;
    }
    .contact .card-text a:hover {
        text-decoration: underline;
    }
</style>

<section class="contact mb-5 mt-5"> 
    <div class="container">
        <h2 class="card-title secab-heading">OFFICE CONTACTS</h2>
        <div class="card">
            <div class="card-body">
                <h3 class="card-subtitle mb-2 text-center">SECAB PU COLLEGE FOR BOYS</h3>
                <p class="card-text">Behind Taj Boudi, Vijaypur – 586101, Karnataka, India.</p>
                <p class="card-text">Ph: 08352-254850</p>
                <p class="card-text">Toll Free: +919164941969</p>
                <p class="card-text">Email: <a href="mailto:secab.boys@gmail.com">secab.boys@gmail.com</a></p>
                
                <h3 class="card-subtitle mt-4 mb-2 text-center">SECAB Association</h3>
                <p class="card-text">12, Naubag, Vijaypur – 586101, Karnataka, India.</p>
                <p class="card-text">Ph: 08352-251321, 276930</p>
                <p class="card-text">Toll Free: 08352-277353</p>
                <p class="card-text">Website: <a href="http://www.secab.org" target="_blank">www.secab.org</a></p>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<?php
include('../headers/topFooter.php');
include('../headers/bottomFooter.php');
?>
