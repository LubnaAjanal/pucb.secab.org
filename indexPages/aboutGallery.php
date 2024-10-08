<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<style>
    .box-area {
        width: 100%;
        /* height: 100vh; */
        display: flex;
        justify-content: center;
        align-items: center;
        /* background-color: rgb(233, 221, 205); */
    }

    .box {
        width: 80px;
        height: 400px;
        margin-right: 20px;
        overflow: hidden;
        border-radius: 20px;
        position: relative;
        transition: all linear 0.6s;
    }

    .box:last-child {
        margin-right: 0;
    }

    .box::before {
        content: '';
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0;
        left: 0;
        background: rgba(0, 0, 0, 0.3);
    }

    .box img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .box i {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        text-align: center;
        line-height: 40px;
        background: #fff;
        position: absolute;
        bottom: 20px;
        left: 10px;
        font-size: 20px;
    }

    .box:nth-child(1) i {
        color: #ff5200;
    }

    .box:nth-child(2) i {
        color: #ca470a;
    }

    .box:nth-child(3) i {
        color: #00d9ff;
    }

    .box:nth-child(4) i {
        color: #0077ff;
    }

    .box h2 {
        position: absolute;
        bottom: 20px;
        left: 60px;
        font-family: 'Poppins', sans-serif;
        font-size: 25px;
        color: #f6f6f6;
        font-weight: 600;
        opacity: 0;
        transition: all linear 0.3s;
    }
    .box.active h2 {
        opacity: 1;
    }

    .box.active {
        width: 500px;
        transition: all linear 0.6s;
    }

    .city-title{
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
        text-align: center;
        background-color: burlywood;
        padding: 15px;
        width: 25%;
        margin: 0 0 0 38%;
        /* height: 30%; */
    }

</style>
<div class="container" style="margin-top:5%;margin-bottom:5%;">
    <h2 class="city-title mb-5">City Gallery</h2>
    <div class="box-area">
        <div class="box active">
            <img src="../images/aboutPhotos/ibrahimroza.jpg" alt="img">
            <!-- <i class="fa-solid fa-person-walking"></i> -->
            <h2>Ibrahim Roza</h2>
        </div>
        <div class="box">
            <img src="../images/aboutPhotos/about1.jpg" alt="img">
            <!-- <i class="fa-solid fa-snowflake"></i> -->
            <h2>Jamiya Masjid</h2>
        </div>
        <div class="box">
            <img src="../images/aboutPhotos/about2.jpg" alt="img">
            <!-- <i class="fa-solid fa-tree"></i> -->
            <h2>Shri Sidheshwar Temple</h2>
        </div>
        <div class="box">
            <img src="../images/aboutPhotos/about3.jpg" alt="img">
            <!-- <i class="fa-solid fa-droplet"></i> -->
            <h2>Siberia</h2>
        </div>
        <div class="box">
            <img src="../images/aboutPhotos/about4.jpg" alt="img">
            <!-- <i class="fa-solid fa-droplet"></i> -->
            <h2>Shivagiri Temple</h2>
        </div>
        <div class="box">
            <img src="../images/aboutPhotos/about5.jpg" alt="img">
            <!-- <i class="fa-solid fa-droplet"></i> -->
            <h2>Bara Kaman</h2>
        </div>
        <div class="box">
            <img src="../images/aboutPhotos/about6.jpg" alt="img">
            <!-- <i class="fa-solid fa-droplet"></i> -->
            <h2>Asar Mahal</h2>
        </div>
        <div class="box">
            <img src="../images/aboutPhotos/about7.jpg" alt="img">
            <!-- <i class="fa-solid fa-droplet"></i> -->
            <h2>Gagan Mahal</h2>
        </div>
    </div>
</div>

<div class="container" style="margin-top:5%;margin-bottom:5%;">
    <h2 class="city-title mb-5">Prospectors</h2>
    <div class="box-area">
        <div class="box active">
            <img src="../images/aboutPhotos/prop1.jpg" alt="img">
            <!-- <i class="fa-solid fa-person-walking"></i> -->
            <h2>Ibrahim Roza</h2>
        </div>
        <div class="box">
            <img src="../images/aboutPhotos/prop1.jpg" alt="img">
            <!-- <i class="fa-solid fa-snowflake"></i> -->
            <h2>Jamiya Masjid</h2>
        </div>
        <div class="box">
            <img src="../images/aboutPhotos/prop1.jpg" alt="img">
            <!-- <i class="fa-solid fa-tree"></i> -->
            <h2>Shri Sidheshwar Temple</h2>
        </div>
        <div class="box">
            <img src="../images/aboutPhotos/prop1.jpg" alt="img">
            <!-- <i class="fa-solid fa-droplet"></i> -->
            <h2>Siberia</h2>
        </div>
        <div class="box">
            <img src="../images/aboutPhotos/prop1.jpg" alt="img">
            <!-- <i class="fa-solid fa-droplet"></i> -->
            <h2>Shivagiri Temple</h2>
        </div>
        <div class="box">
            <img src="../images/aboutPhotos/prop1.jpg" alt="img">
            <!-- <i class="fa-solid fa-droplet"></i> -->
            <h2>Bara Kaman</h2>
        </div>
        <div class="box">
            <img src="../images/aboutPhotos/prop1.jpg" alt="img">
            <!-- <i class="fa-solid fa-droplet"></i> -->
            <h2>Asar Mahal</h2>
        </div>
        <div class="box">
            <img src="../images/aboutPhotos/prop1.jpg" alt="img">
            <!-- <i class="fa-solid fa-droplet"></i> -->
            <h2>Gagan Mahal</h2>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script>
    $(".box").click(function() {
        $(".box").removeClass("active");
        $(this).addClass("active");
    });
</script>