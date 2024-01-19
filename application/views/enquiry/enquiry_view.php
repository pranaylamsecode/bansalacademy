<link rel="stylesheet" type="text/css" href="<?=base_url('public/')?>assets/css/prasad_enquiry.css">
<!-- <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;600&display=swap" rel="stylesheet"> -->
<script src="<?=base_url('public/')?>assets/js/prasad.js"></script>

<div class="breatcome-area1" id="banner_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">

            </div>
        </div>
    </div>
</div>

<h2 class="headingenq">Enquiry Form</h2>
<p class="p1">Lorem ipsum dolor sit amet consectetur, adipisicing elit. </p>

<div class="container1">
    <form id="inquiryForm">

        <!-- Section 1 -->
        <div class="form-section" id="section1">
            <p class="p2">All fields are mandatory *</p>

            <label for="session">SESSION</label>
            <select id="session" name="session" required>
                <option value="" disabled selected>Select Session</option>
                <option value="session1">Session 1</option>
                <option value="session2">Session 2</option>
                <!-- Add more options as needed -->
            </select>
        </div>

        <!-- Section 2 -->
        <div class="form-section" id="section2">
            <label for="fullName">Enter Full Name</label>
            <input type="text" id="fullName" name="fullName" required placeholder="Type your Name">

            <label for="email">Enter Your Email</label>
            <input type="email" id="email" name="email" required placeholder="Type your E-mail">

            <label for="mobileNumber">Enter Mobile Number</label>
            <input type="tel" id="mobileNumber" name="mobileNumber" required placeholder="Type your no.">
        </div>

        <!-- Section 3 -->
        <div class="form-section" id="section3">
            <label for="class">Please Select Class</label>
            <select id="class" name="class" required>
                <option value="" disabled selected>Select Class</option>
                <option value="class1">Class 1</option>
                <option value="class2">Class 2</option>
                <!-- Add more options as needed -->
            </select>

            <label for="stream">Please Select Stream</label>
            <select id="stream" name="stream" required>
                <option value="" disabled selected>Select Stream</option>
                <!-- Options for streams will be dynamically updated based on the selected class -->
            </select>

            <!-- <label for="studyCenter">Select Study Center Location</label>
            <select id="studyCenter" name="studyCenter" required>
                <option value="" disabled selected>Select Location</option>
            </select>

            <label for="state">Select State</label>
            <select id="state" name="state" required>
                <option value="" disabled selected>Select State</option>

            </select>

            <label for="district">Please Enter District</label>
            <select id="district" name="district" required>
                <option value="" disabled selected>Select District</option>

            </select>

            <label for="city">Enter City</label>
            <select id="city" name="city" required>
                <option value="" disabled selected>Select City</option>
            </select> -->

        </div>

        <!-- Section 4 -->
        <div class="form-section" id="section4">
            <label for="query">Your Query</label>
            <textarea id="query" name="query" rows="4" required placeholder="Type your query here"></textarea>

            <label for="callTime">Select Preferred Call Time</label>
            <select id="callTime" name="callTime" required>
                <option value="" disabled selected>Select Time</option>
                <option value="morning">Morning</option>
                <option value="afternoon">Afternoon</option>
                <option value="evening">Evening</option>
                <!-- Add more options as needed -->
            </select>

            <label for="hearAbout">How Did You Hear About Us?</label>
            <select id="hearAbout" name="hearAbout" required>
                <option value="" disabled selected>Select Option</option>
                <option value="website">Website</option>
                <option value="friend">Friend</option>
                <option value="advertisement">Advertisement</option>
                <!-- Add more options as needed -->
            </select>

            <button type="submit">SUBMIT</button>
        </div>
    </form>
</div>
