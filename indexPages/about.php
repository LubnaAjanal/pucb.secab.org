<style>

    .image {
        float: left;
        width: 100%;
        margin: 0 0 20px 20px;
        border: 2px solid #ddd;
		box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
        border-radius: 4px;
        padding: 5px;
    }

    #image-title {
        text-align: center;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
        background-color: burlywood;
        padding: 10px;
        width: 40%;
        margin: 65% 0 0 35%;
    }
    .aboutcontent {
        background-color: rgb(233, 221, 205);
        border-radius: 10px;
		box-shadow: 0 4px 8px rgba(0, 0, 0, 0.6);
        z-index: 1;
        position: relative;
        top: 20px;
        right: 80px;
        height: 20%;
        width: 100%;
    }

    .about-title {
        margin: 0 0 0 20px;
        overflow: hidden;
        border-right: .17em solid orange;
        white-space: nowrap;
        animation: typing 3.5s steps(40, end) infinite, blink-caret .75s step-end 1 normal forwards;
    }

    @keyframes typing {
        from {
            width: 0;
        }

        to {
            width: 100%;
        }
    }

    @keyframes blink-caret {

        from,
        to {
            border-color: transparent;
        }

        50% {
            border-color: green;
        }
    }
</style>

<!-- About Association -->
<div class="container mt-5">
    <div class="row">
        <div class="col-sm ">
            <img src="images/aboutPhotos/about.jpg" alt="profile image" class="image" /><br>
            <div class="image-title" id="image-title">
                <h5 class="mb-0">Mr.S.A.Punekar</h5>
                <p class="mb-0">Founder & President</p>
            </div>
        </div>
        <div class="col-sm aboutcontent">
            <h3 class="about-title mb-3 pt-3">About Association</h3>
            <p class="p-1">
                SECAB Association is a premier Educational Society,
                founded in the year 1969, by the exuberant visionary
                Mr. S.A. Punekar, who aspires to scale new heights
                in the Educational field. This Association is known
                for its outstanding contribution to reform Education
                in Vijaypur. Since its inception, the progress has been
                remarkable and it has been successful in running
                24 institutions right from Kindergarten,
                Primary and High Schools in English, Kannada and Urdu Medium,
                P.U. Colleges for Boys and Girls, Degree College for Women,
                B.B.A., B.C.A., Polytechnic, Architecture, Engineering,
                Para Medical, Unani Medicine, MD (U), M.B.A. & M.Tech.
            </p>
        </div>
    </div>
</div>

<!--/ End About Association -->