<style>
    .vm {
        width: 100%;
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

    .card-custom {
        border-radius: 18px;
        /* border: 1px solid white; */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .cardBox {
        width: 100%;
        height: auto;
        position: relative;
        display: grid;
        place-items: center;
        overflow: hidden;
        border-radius: 7px;
        box-shadow: rgba(0, 0, 0, 0.4) 0px 2px 10px 0px, rgba(0, 0, 0, 0.5) 0px 2px 25px 0px;
        margin-bottom: 30px;
    }

    .card {
        position: relative;
        width: 100%;
        height: auto;
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
        box-shadow: rgba(0, 0, 0, 0.4) 0px 30px 60px -12px inset, rgba(0, 0, 0, 0.5) 0px 18px 36px -18px inset;
    }

    .card h2
     {
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

    /* span {
        top: 65%;
    } */

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
        position: relative;
        width: 100%;
        height: 100%;
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
        margin: 0 auto 20px auto;
        height: auto;
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

<div class="container vm">
    <h3 class="mainHeading text-center mt-5 mb-4">VISION & MISSION</h3>
    <!-- <section style="margin-top:50px;"> -->
    <div class="row">
        <div class="col-md-6">
            <div class="profileImage">
                <img src="../images/profile2.jpg" alt="Vision Image">
            </div>
        </div>
        <div class="col-md-6" style="margin-top:75px;">
            <div class="cardBox">
                <div class="card card-custom vision">
                    <h2>VISION</h2>
                    <!-- <span>Hover Me</span> -->
                    <div class="content">
                        <p>To make students competent, committed, compassionate and conscientious.</p>
                    </div>
                </div>
            </div>
            <div class="cardBox mt-5">
                <div class="card card-custom mission">
                    <h2>MISSION</h2>
                    <!-- <span>Hover Me</span> -->
                    <div class="content">
                        <p>Is to form intellectually competent, professionally skilled, morally responsible, socially just and culturally sensitive global citizens.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- </section> -->
    </div>
</div>