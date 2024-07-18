<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>



<div class="modal in" id="enquirey" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display:block; text-align: center;padding: 0!important;">
    <div class="modal-dialog-scrollable modal-dialog ">
        <div class="modal-content">

            <div class="modal-header modal-lg" style='background-color:#809980;'>
                <div class="row">
                    <div class='col-lg-11' style='text-align:center;'>
                        <center> <span style="font-size:15pt;text-decoration: underline;font-family:Cambria;color:white;text-align:center;">SECAB P.U. COLLEGE FOR BOYS, VIJAYPUR.</span> </center>
                        <p style="text-decoration: underline;font-size:16pt;font-weight:bold;font-family:Cambria;color:white"> ENQUIRY FORM </p>
                    </div>
                    <div class='col-lg-1'>
                        <button type="button" class="close cls ml-5" data-dismiss="modal" aria-hidden="true" aria-label="Close">&times;</button>
                    </div>
                </div>
            </div>

            <div class="modal-body" style="max-height: calc(100vh - 210px); overflow-y: auto;">
                <div class="row">
                    <div class="col-md-5" style="text-align:left">
                        <label for="exampleInputEmail1">Name of the student</label>
                    </div>
                    <div class="col-md-7" style="text-align:left">
                        <input type="text" class="form-control" name="sname" id="sname" placeholder="Enter student name" required="">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-5" style="text-align:left">
                        <label for="exampleInputEmail1">Father’s Name</label>
                    </div>
                    <div class="col-md-7" style="text-align:left">
                        <input type="text" class="form-control" name="fname" id="fname" placeholder="Enter Father's name" required="">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-5" style="text-align:left">
                        <label for="exampleInputEmail1">Mother’s Name</label>
                    </div>
                    <div class="col-md-7" style="text-align:left">
                        <input type="text" class="form-control" name="mname" id="mname" placeholder="Enter Mother's name" required="">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-5" style="text-align:left">
                        <label for="exampleInputEmail1">Educational Qualification</label>
                    </div>
                    <div class="col-md-7" style="text-align:left">
                        <input type="text" class="form-control" name="fquali" id="fquali" placeholder="Enter Father's Qualification" required="">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-5" style="text-align:left"> </div>
                    <div class="col-md-7" style="text-align:left">
                        <input type="text" class="form-control" name="mquali" id="mquali" placeholder="Enter Mother's Qualification" required="">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-5" style="text-align:left">
                        <label for="exampleInputEmail1">Profession of parents</label>
                    </div>
                    <div class="col-md-7" style="text-align:left">
                        <input type="text" class="form-control" name="fprof" id="fprof" placeholder="Enter Father's Profession" required="">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-5" style="text-align:left"> </div>
                    <div class="col-md-7" style="text-align:left">
                        <input type="text" class="form-control" name="mprof" id="mprof" placeholder="Enter Mother's Profession" required="">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-5" style="text-align:left">
                        <label for="exampleInputEmail1">Gender</label>
                    </div>
                    <div class="col-md-3" style="text-align:left">
                        <label><input type="radio" name="gender" id="male">Male</label>
                    </div>
                    <div class="col-md-4" style="text-align:left">
                        <label><input type="radio" name="gender" id="female">Female</label>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-5" style="text-align:left">
                        <label for="exampleInputEmail1">Medium of instruction</label>
                    </div>
                    <div class="col-md-7" style="text-align:left">
                        <input type="text" class="form-control" name="minst" id="minst" placeholder="Enter Medium of instruction" required="">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-5" style="text-align:left">
                        <label for="exampleInputEmail1">Institution last attended</label>
                    </div>
                    <div class="col-md-7" style="text-align:left">
                        <input type="text" class="form-control" name="linst" id="linst" placeholder="Enter Institution last attended" required="">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-5" style="text-align:left">
                        <label for="exampleInputEmail1">Course wished to join</label>
                    </div>
                    <div class="col-md-7">
                        <select class="form-control" name="course" id='course' required width="100%">
                            <option value="">Select Course</option>
                            <option value="Arts">Arts</option>
                            <option value="Science">Science</option>
                            <option value="Comm">Comm</option>
                        </select>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-5" style="text-align:left">
                        <label for="exampleInputEmail1">Postal Address</label>
                    </div>
                    <div class="col-md-7" style="text-align:left">
                        <!-- <textarea   class="form-control" id="address" name="address" rows="2" cols="32" placeholder="Enter Postal Address............">  </textarea>-->
                        <textarea class="form-control" id="address" name="address" rows="2" cols="32" placeholder="Enter Postal Address............"></textarea>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-5" style="text-align:left">
                        <label for="exampleInputEmail1">Email</label>
                    </div>
                    <div class="col-md-7">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-5" style="text-align:left">
                        <label for="exampleInputEmail1">Mobile No</label>
                    </div>
                    <div class="col-md-7">
                        <input type="number" class="form-control" name="mob" id="mob" placeholder="Enter your MobileNo">
                    </div>
                </div>
            </div>

            <div class="modal-footer" style='background-color:#809980;text-align:center;'>
                <br>
                <center><span><button type="submit" name="esubmit" id="esubmit" class="btn btn-primary" style='margin-left:-450px;'> Submit </button></span></center>
            </div>
        </div>
    </div>
</div>
<!-- jQuery -->
<!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script> -->

<!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script> -->
<!-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script> -->
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> -->

<script>
    $(document).ready(function() {
        $('.close').click(function() {
            $('#enquirey').modal('hide');
            $('#enquirey').remove();
        });
    });
</script>