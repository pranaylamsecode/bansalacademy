<link rel="stylesheet" type="text/css" href="<?=base_url('public/')?>assets/css/prasad_enquiry.css">
<!-- <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;600&display=swap" rel="stylesheet"> -->
<script src="<?=base_url('public/')?>assets/js/prasad.js"></script>

<!-- <div class="breatcome-area1" id="banner_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
            </div>
        </div>
    </div>
</div> -->



<div class="container1 mt-5">
<h2 class="headingenq">Enquiry Form</h2>
<p class="p1"></p>
    <form action="<?php echo base_url().'index.php/Scholarship_registration/store'?>" method="post">

        <!-- Section 1 -->
        <div class="form-section" id="section1">
            <p class="p2">All fields are mandatory *</p>
        </div>

        <!-- Section 2 -->
        <div class="form-section" id="section2">
            <label for="fullName">Enter Full Name</label>
            <input type="text" id="fullName" name="fullName" value="<?php echo !empty($image['fullName'])?$image['fullName']:''; ?>"  placeholder="Type your name">
            <?=form_error('fullName');?>
            <br><br>

            <label for="fullName">Gender</label>
            <input type="radio" name="gender" value="male" checked> Male
            <input type="radio" name="gender" value="female"> Female
            <?=form_error('gender');?>
            <br><br>
            <label for="email">Enter Your Email</label>
            <input type="email" id="email" name="email"  placeholder="Type your E-mail" value="<?php echo !empty($image['email'])?$image['email']:''; ?>">
            <?=form_error('email');?>

            <label for="mobileNumber">Enter Mobile Number</label>
            <input type="tel" id="mobileNumber" name="mobileNumber" value="<?php echo !empty($image['mobileNumber'])?$image['mobileNumber']:''; ?>"  placeholder="Type your no.">
            <?=form_error('mobileNumber');?>
        </div>

        <!-- Section 3 -->
        <div class="form-section" id="section3">
            <label for="class">Please Select Class</label>
            <select id="class" name="class" >
                <option value="" disabled selected>Select Class</option>
                <?php foreach($classes as $cs): 
                    // print_r($classes);
                    // exit;
                    ?>
                    <option value="<?= $cs->name; ?>"><?= $cs->name; ?></option>
                <?php endforeach; ?>
            </select>
            <?=form_error('class');?>
            <!-- <label for="stream">Please Select Stream</label>
            <select id="stream" name="stream" >
                <option value="" disabled selected>Select Stream</option>
            </select> -->
        </div>

            <button type="submit">SUBMIT</button>
        </div>
    </form>
</div>