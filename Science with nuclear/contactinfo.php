<!-- starting of header -->
<?php
include('header.php')
?>
<!-- ending of header -->
<!-- stating of main section -->
<div class="container-fluid" id="contactformmain">
    <div class="container" id="contactcontainer">
        <div class="container-fluid" id="contactform">
            <div class="sendmemessage">
                <h6>SEND ME MESSAGE IN WHICH CHAPTER I MAKE VIDEOS AND UPLOAD FOR YOU</h6>
                <!-- <span>Text me on <b> 6202772004</b> by WhatsApp </span> -->
            </div>
            <form action="" class="">
                <tbody>
                    <tr>
                        <th><label for="" class="form-label ">Name:-</label></th> <br>
                        <th><input type="text" class="form-control disable" placeholder="enter your name"></th> <br>
                    </tr>
                    <tr>
                        <th><label for="exampleDataList" class="form-label">Choose Your Class:</label></th> <br>
                        <th>
                            <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="select class">
                            <datalist id="datalistOptions">
                                <option value="Class 10th">
                                <option value="Class 9th">
                                <option value="Class 8th">
                                <option value="Class 7th">
                                <option value="Class 6th">
                            </datalist>
                        </th>
                    </tr><br>
                    <tr>
                        <th><label for="" class="form-label">Phone No:-</label></th><br>
                        <th><input type="tel" class="form-control" name="phone" id="" placeholder="enter phone no."></th><br>
                    </tr>
                    <tr>
                        <th><label for="" class="form-label">Text Here:-</label></th><br>
                        <th><textarea class="form-control" name="textarea" id="" cols="10" rows="2" placeholder="type your best topic here"></textarea></th> <br>
                    </tr>
                    <div class="row">
                        <div class="col-6"><input class="btn bg-light" type="submit" value="send"></div>
                        <div class="col-6"><input class="btn bg-light" type="reset" value="reset"></div>
                    </div>
                </tbody>
            </form>
        </div>
    </div>
</div>

<!-- ending of main section -->
<!-- stating of footer -->
<?php
include('footer.php');
?>
<!-- ending of footer -->