<!--==================================================-->
<!-- Start custom carousal -->
<!--==================================================-->
<div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <?php foreach($slider as $row):  ?>
            <div class="carousel-item active">
                <img src="<?php echo base_url('admin/uploads/slider/').$row->banner; ?>" class="d-block w-100" alt="...">
            </div>
        <?php endforeach ?>
        <!-- <div class="carousel-item">
            <img src="<?=base_url('public/')?>assets\images\slider\bansal_slider_image.webp
            " class="d-block w-100" alt="...">
        </div> -->
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<div class="mt-5 mb-5">
    <div class="container">
        <div class="row section-title text-center">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <div class="section-sub-title">
                            <h3>Scholarship</h3>
                        </div>
                        <div class="section-main-title">
                            <p>Bansal Patshala results reflect the passion, hard work and efforts of our students, so
                                far, we have acquired remarkable selection ratios in competitive exams.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div data-aos="fade-up">
                    <img src="<?=base_url('public/')?>assets\images\result_banner_r.png" alt="">
                </div>
            </div>
            <div class="row mt-5">
                 <div class="col-4"></div>
                <div class="col-4">
                    <!-- <div class="text-center">
                        <button class="scl-btn w-100">Practice Quiz</button>
                    </div> -->
                    <a href="<?php echo base_url().'scholarship_registration';?>"><button type="button" class="btn scl-btn">Practice Quiz</button></a>
                </div>
                <div class="col-4"></div>
            </div>
        </div>
        <!-- <div class="btn-container">
            
        </div> -->
    </div>
</div>

<div class="scholarship_banner">
    <a href="#" target="_blank">
        <figure class=""><img src="<?=base_url('public/')?>assets\images\banner\banner3.png" alt=""></figure>
    </a>
</div>

<div class="testimonial-area style-three">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center">
                    <div class="section-sub-title">
                        <h3>Meet Our Winners</h3>
                    </div>
                    <div class="section-main-title">
                        <p>Bansal Patshala results reflect the passion, hard work and efforts of our students, so
                            far, we have acquired remarkable selection ratios in competitive exams.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="courses_crausel owl-carousel ">
            <?php foreach($winner as $row):  ?>
                <div class="col-sm-12">
                    <div class="winner-crausel">
                        <div class="vendor">
                            <figure class="group_1599">
                                <a href="#" tabindex="0">
                                    <img src="<?php echo base_url('admin/uploads/winners/').$row->winners_img; ?>" alt="">
                                </a>
                            </figure>
                            <div class="worldwide_flex">
                                <div class="Worldwide_text perfor_booster_text">
                                    <h5 class="vendor_h"><?= $row->title?></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach ?>
            </div>
        </div>
    </div>
</div>

<div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center">
                    <div class="section-sub-title">
                        <h3>Courses(JEE/NEET)</h3>
                    </div>
                    <div class="section-main-title">
                        <p>Bansal Patshala results reflect the passion, hard work and efforts of our students, so
                            far, we have acquired remarkable selection ratios in competitive exams.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main">
        <div id="myBtnContainer">
            <button class="btn btn-portfolio active-btn" onclick="filterSelection('nature')"> JEE</button>
            <button class="btn btn-portfolio" onclick="filterSelection('cars')"> NEET</button>
            <button class="btn btn-portfolio" onclick="filterSelection('people')"> Foundation</button>
        </div>
       
        <div class="row">
            <div class="column nature">
                <div class="content">
                    <img src="<?=base_url('public/')?>assets/images/portfolio/1.jpg" alt="Mountains" style="width:100%">
                    <h5>JEE Early Nurture Batch</h5>
                    <ul>
                        <li>Class 11th Students</li>
                        <li>Batch Ongoing - 1 Dec 2023</li>
                        <li>Target Year - 2026</li>
                    </ul>
                </div>
            </div>
            <div class="column nature">
                <div class="content">
                    <img src="<?=base_url('public/')?>assets\images\portfolio\2.jpg" alt="Lights" style="width:100%">
                    <h5>JEE Enthuse Batch</h5>
                    <ul>
                        <li>Class 12th Students</li>
                        <li>Batch Date - 3 Jan 2024</li>
                        <li>Target Year - 2025</li>
                    </ul>
                </div>
            </div>
            <div class="column nature">
                <div class="content">
                    <img src="<?=base_url('public/')?>assets\images\portfolio\3.jpg" alt="Nature" style="width:100%">
                    <h5>JEE Early Dropper Batch</h5>
                    <ul>
                        <li>Class 12th Pass Out</li>
                        <li>Batch Ongoing - 1 Dec 2023</li>
                        <li>Target Year - 2025</li>
                    </ul>
                </div>
            </div>

            <div class="column cars">
                <div class="content">
                    <img src="<?=base_url('public/')?>assets\images\portfolio\4.jpg" alt="Car" style="width:100%">
                    <h5>JEE Early Dropper Batch</h5>
                    <ul>
                        <li>Class 12th Pass Out</li>
                        <li>Batch Ongoing - 1 Dec 2023</li>
                        <li>Target Year - 2025</li>
                    </ul>
                </div>
            </div>
            <div class="column cars">
                <div class="content">
                    <img src="<?=base_url('public/')?>assets\images\portfolio\5.jpg" alt="Car" style="width:100%">
                    <h5>JEE Early Dropper Batch</h5>
                    <ul>
                        <li>Class 12th Pass Out</li>
                        <li>Batch Ongoing - 1 Dec 2023</li>
                        <li>Target Year - 2025</li>
                    </ul>
                </div>
            </div>
            <div class="column cars">
                <div class="content">
                    <img src="<?=base_url('public/')?>assets\images\portfolio\6.jpg" alt="Car" style="width:100%">
                    <h5>JEE Early Dropper Batch</h5>
                    <ul>
                        <li>Class 12th Pass Out</li>
                        <li>Batch Ongoing - 1 Dec 2023</li>
                        <li>Target Year - 2025</li>
                    </ul>
                </div>
            </div>

            <div class="column people">
                <div class="content">
                    <img src="<?=base_url('public/')?>assets\images\portfolio\1.jpg" alt="Car" style="width:100%">
                    <h5>JEE Early Dropper Batch</h5>
                    <ul>
                        <li>Class 12th Pass Out</li>
                        <li>Batch Ongoing - 1 Dec 2023</li>
                        <li>Target Year - 2025</li>
                    </ul>
                </div>
            </div>
            <div class="column people">
                <div class="content">
                    <img src="<?=base_url('public/')?>assets\images\portfolio\2.jpg" alt="Car" style="width:100%">
                    <h5>JEE Early Dropper Batch</h5>
                    <ul>
                        <li>Class 12th Pass Out</li>
                        <li>Batch Ongoing - 1 Dec 2023</li>
                        <li>Target Year - 2025</li>
                    </ul>
                </div>
            </div>
            <div class="column people">
                <div class="content">
                    <img src="<?=base_url('public/')?>assets\images\portfolio\3.jpg" alt="Car" style="width:100%">
                    <h5>JEE Early Dropper Batch</h5>
                    <ul>
                        <li>Class 12th Pass Out</li>
                        <li>Batch Ongoing - 1 Dec 2023</li>
                        <li>Target Year - 2025</li>
                    </ul>
                </div>
            </div>
            <!-- END GRID -->
        </div>
    </div>
</div>

<div class="testimonial-area style-three">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center">
                    <div class="section-sub-title">
                        <h3>Announcement</h3>
                    </div>
                    <div class="section-main-title">
                        <p>Bansal Patshala results reflect the passion, hard work and efforts of our students, so
                            far, we have acquired remarkable selection ratios in competitive exams.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="courses_crausel owl-carousel ">
            <?php foreach($announce as $row):  ?>
                <div class="col-sm-12">
                    <div class="main-img">
                        <div class="vendor">
                            <figure class="group_1599">
                                <a href="#0" tabindex="0">
                                    <img src="<?php echo base_url('admin/uploads/announcement/').$row->announcement_img; ?>"
                                        alt="">
                                </a>
                            </figure>
                            <div class="worldwide_flex">
                                <div class="Worldwide_text perfor_booster_text">
                                    
                                    <h5 class="vendor_h"><?= $row->title?></h5>
                                    
                                </div>
                                <!-- <div class="arrow-left">
                                    <a href="#0" target="_blank" tabindex="0">
                                        <span class="right_arrow">
                                            <i class="fas fa-arrow-right"></i>
                                        </span>
                                    </a>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach ?>
            </div>
        </div>
    </div>
</div>

<div class="scholarship_banner mb-5 mt-5">
    <a href="#" target="_blank">
        <figure class=""><img src="<?=base_url('public/')?>assets\images\banner\banner3.png" alt=""></figure>
    </a>
    <!-- Apply Now</a> -->
</div>

<div class="row">
    <div class="row">
        <div class="col-lg-12">
            <div class="section-title text-center">
                <div class="section-sub-title">
                    <h3>Student Testimonial</h3>
                </div>
                <div class="section-main-title">
                    <p>Bansal Patshala results reflect the passion, hard work and efforts of our students, so
                        far, we have acquired remarkable selection ratios in competitive exams.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-8">
        <div class="testimonial-area style-three">
            <div class="container">
                <div class="row">
                    <div class="Alumni_portal owl-carousel">
                        <div class="col-lg-12">
                            <div class="testi-items-three">
                                <div class="testi-three-thumb">
                                    <img src="<?=base_url('public/')?>assets/images/team/team-4.jpg" alt="">
                                </div>
                                <div class="testi-three-title">
                                    <h4>Nathan Joe</h4>
                                    <span>CEO, Datasoft</span>
                                </div>
                                <div class="testi-three-content">
                                    <h4>“Thrown specialize in custom-tailored software solutions & computer technology.”
                                    </h4>
                                    <p>Et nec tantas accusamus salutatus, sit commodo veritus te, erat fabulas has ut.
                                        Rebum
                                        cum laudem cum ea, accusamus salutatus, sit commodo veritus te,erat legere
                                        fabulas
                                        has cum laudem .</p>
                                </div>
                                <div class="testi-three-rating">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="testi-items-three">
                                <div class="testi-three-thumb">
                                    <img src="<?=base_url('public/')?>assets/images/team/team-3.jpg" alt="">
                                </div>
                                <div class="testi-three-title">
                                    <h4>Afiya Ashrafi</h4>
                                    <span>CEO,Datasoft Systems</span>
                                </div>
                                <div class="testi-three-content">
                                    <h4>“Thrown specialize in custom-tailored software solutions & computer technology.”
                                    </h4>
                                    <p>Et nec tantas accusamus salutatus, sit commodo veritus te, erat fabulas has ut.
                                        Rebum
                                        cum laudem cum ea, accusamus salutatus, sit commodo veritus te,erat legere
                                        fabulas
                                        has cum laudem .</p>
                                </div>
                                <div class="testi-three-rating">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="testi-items-three">
                                <div class="testi-three-thumb">
                                    <img src="<?=base_url('public/')?>assets/images/team/team-2.jpg" alt="">
                                </div>
                                <div class="testi-three-title">
                                    <h4>Nathan Joe</h4>
                                    <span>CEO, Datasoft</span>
                                </div>
                                <div class="testi-three-content">
                                    <h4>“Thrown specialize in custom-tailored software solutions & computer technology.”
                                    </h4>
                                    <p>Et nec tantas accusamus salutatus, sit commodo veritus te, erat fabulas has ut.
                                        Rebum
                                        cum laudem cum ea, accusamus salutatus, sit commodo veritus te,erat legere
                                        fabulas
                                        has cum laudem .</p>
                                </div>
                                <div class="testi-three-rating">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="testi-items-three">
                                <div class="testi-three-thumb">
                                    <img src="<?=base_url('public/')?>assets/images/team/team-1.jpg" alt="">
                                </div>
                                <div class="testi-three-title">
                                    <h4>Afiya Ashrafi</h4>
                                    <span>CEO,Datasoft Systems</span>
                                </div>
                                <div class="testi-three-content">
                                    <h4>“Thrown specialize in custom-tailored software solutions & computer technology.”
                                    </h4>
                                    <p>Et nec tantas accusamus salutatus, sit commodo veritus te, erat fabulas has ut.
                                        Rebum
                                        cum laudem cum ea, accusamus salutatus, sit commodo veritus te,erat legere
                                        fabulas
                                        has cum laudem .</p>
                                </div>
                                <div class="testi-three-rating">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="testi-items-three">
                                <div class="testi-three-thumb">
                                    <img src="<?=base_url('public/')?>assets/images/team/team-4.jpg" alt="">
                                </div>
                                <div class="testi-three-title">
                                    <h4>Nathan Joe</h4>
                                    <span>CEO, Datasoft</span>
                                </div>
                                <div class="testi-three-content">
                                    <h4>“Thrown specialize in custom-tailored software solutions & computer technology.”
                                    </h4>
                                    <p>Et nec tantas accusamus salutatus, sit commodo veritus te, erat fabulas has ut.
                                        Rebum
                                        cum laudem cum ea, accusamus salutatus, sit commodo veritus te,erat legere
                                        fabulas
                                        has cum laudem .</p>
                                </div>
                                <div class="testi-three-rating">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="testi-items-three">
                                <div class="testi-three-thumb">
                                    <img src="<?=base_url('public/')?>assets/images/team/team-3.jpg" alt="">
                                </div>
                                <div class="testi-three-title">
                                    <h4>Afiya Ashrafi</h4>
                                    <span>CEO,Datasoft Systems</span>
                                </div>
                                <div class="testi-three-content">
                                    <h4>“Thrown specialize in custom-tailored software solutions & computer technology.”
                                    </h4>
                                    <p>Et nec tantas accusamus salutatus, sit commodo veritus te, erat fabulas has ut.
                                        Rebum
                                        cum laudem cum ea, accusamus salutatus, sit commodo veritus te,erat legere
                                        fabulas
                                        has cum laudem .</p>
                                </div>
                                <div class="testi-three-rating">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="testi-items-three">
                                <div class="testi-three-thumb">
                                    <img src="<?=base_url('public/')?>assets/images/team/team-2.jpg" alt="">
                                </div>
                                <div class="testi-three-title">
                                    <h4>Nathan Joe</h4>
                                    <span>CEO, Datasoft</span>
                                </div>
                                <div class="testi-three-content">
                                    <h4>“Thrown specialize in custom-tailored software solutions & computer technology.”
                                    </h4>
                                    <p>Et nec tantas accusamus salutatus, sit commodo veritus te, erat fabulas has ut.
                                        Rebum
                                        cum laudem cum ea, accusamus salutatus, sit commodo veritus te,erat legere
                                        fabulas
                                        has cum laudem .</p>
                                </div>
                                <div class="testi-three-rating">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="testi-items-three">
                                <div class="testi-three-thumb">
                                    <img src="<?=base_url('public/')?>assets/images/team/team-1.jpg" alt="">
                                </div>
                                <div class="testi-three-title">
                                    <h4>Afiya Ashrafi</h4>
                                    <span>CEO,Datasoft Systems</span>
                                </div>
                                <div class="testi-three-content">
                                    <h4>“Thrown specialize in custom-tailored software solutions & computer technology.”
                                    </h4>
                                    <p>Et nec tantas accusamus salutatus, sit commodo veritus te, erat fabulas has ut.
                                        Rebum
                                        cum laudem cum ea, accusamus salutatus, sit commodo veritus te,erat legere
                                        fabulas
                                        has cum laudem .</p>
                                </div>
                                <div class="testi-three-rating">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 ">
        <div class="al_video">
            <iframe width="440" height="290" src="https://www.youtube.com/embed/-8pyI7v7RtE?si=1J5bfGndwPqa_2-Y"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen>
            </iframe>
        </div>
    </div>
</div>
<!--==================================================-->
<!-- End Alumni Section  -->
<!--==================================================-->

<!--==================================================-->
<!-- Start Thrown Testimonial Area -->
<!--==================================================-->
<div class="testimonial-area style-three">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center">
                    <div class="section-sub-title">
                        <h3>TESTIMONIALS</h3>
                    </div>
                    <div class="section-main-title">
                        <p>Bansal Patshala results reflect the passion, hard work and efforts of our students, so
                            far, we have acquired remarkable selection ratios in competitive exams.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="testi_list owl-carousel">
            <?php foreach($testimonial as $row):  ?>
                <div class="col-lg-12">
                    <div class="testi-items-three">
                        <div class="testi-three-thumb">
                            <img src="<?php echo base_url('admin/uploads/testimonial/').$row->scholarship_image; ?>" alt="" />
                        </div>
                        <div class="testi-three-title">
                            <h4><?= $row->name?></h4>
                            <!-- <span>CEO, Datasoft</span> -->
                        </div>
                        <div class="testi-three-content">
                            <!-- <h4>
                                “Thrown specialize in custom-tailored software solutions &
                                computer technology.”
                            </h4> -->
                            <p>“<?= $row->description?>” </p>
                        </div>
                        <!-- <div class="testi-three-rating">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </div> -->

                    </div>
                </div>
            <?php endforeach ?>
            </div>
        </div>
    </div>
</div>
<!--==================================================-->
<!-- End Thrown Testimonial Area -->
<!--==================================================-->

<!--==================================================-->
<!-- Start Thrown Blog Area -->
<!--==================================================-->
<div class="blog-area ">
    <div class="container mb-5">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center">
                    <div class="section-sub-title">
                        <h3>Blogs</h3>
                    </div>
                    <div class="section-main-title">
                        <p>Bansal Patshala results reflect the passion, hard work and efforts of our students, so
                            far, we have acquired remarkable selection ratios in competitive exams.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
               
                <div class="blog-single-box">
                    <div class="blog-content">
                        <div class="blog-title">
                            <h4><a href="blog-details.html">Digital Privacy Changes And
                                    The Impact On Advertising</a></h4>
                        </div>
                        <div class="blog-meta">
                            <span><i class="bi bi-calendar4-week"></i> 15 Nov, 2023</span>
                           
                        </div>
                        <div class="blog-discription">
                            <p>Dolor sed maecenas quis faucibus justo nibh ultricies praesent justo dolorIf you are
                                going to use </p>
                        </div>
                        <div class="blog-bottom-shape">
                            <img src="<?=base_url('public/')?>assets\images\blog\blog-icon.png" alt="">
                        </div>
                        <div class="blog-bottom-title">
                            <h4>Admin</h4>
                        </div>
                        
                    </div>
                </div>
                
            </div>
            <div class="col-lg-4 col-md-6">
                
                <div class="blog-single-box">
                    <div class="blog-content">
                        <div class="blog-title">
                            <h4><a href="blog-details.html">How to Onboard New Clients the Right Way</a></h4>
                        </div>
                        <div class="blog-meta">
                            <span><i class="bi bi-calendar4-week"></i> 15 Nov, 2023</span>
                            
                        </div>
                        <div class="blog-discription">
                            <p>Dolor sed maecenas quis faucibus justo nibh ultricies praesent justo dolorIf you are
                                going to use </p>
                        </div>
                        <div class="blog-bottom-shape">
                            <img src="<?=base_url('public/')?>assets\images\blog\blog-icon.png" alt="">
                        </div>
                        <div class="blog-bottom-title">
                            <h4>Admin</h4>
                        </div>
                        
                    </div>
                </div>
                
            </div>
            <div class="col-lg-4 col-md-6">
                
                <div class="blog-single-box">
                    <div class="blog-content">
                        <div class="blog-title">
                            <h4><a href="blog-details.html">How Marketing Compliance Your Marketing Strategy</a>
                            </h4>
                        </div>
                        <div class="blog-meta">
                            <span><i class="bi bi-calendar4-week"></i> 15 Nov, 2023</span>
                            
                        </div>
                        <div class="blog-discription">
                            <p>Dolor sed maecenas quis faucibus justo nibh ultricies praesent justo dolorIf you are
                                going to use </p>
                        </div>
                        <div class="blog-bottom-shape">
                            <img src="<?=base_url('public/')?>assets\images\blog\blog-icon.png" alt="">
                        </div>
                        <div class="blog-bottom-title">
                            <h4>Admin</h4>
                        </div>
                       
                    </div>
                </div>
                
            </div>
        </div>
        
    </div>
</div>
<!--==================================================-->
<!-- End Thrown Blog Area -->
<!--==================================================-->

<!--==================================================-->
<!-- Start Thrown Sidebar Area -->
<!--==================================================-->
<div class="sidebar-group info-group">
    <div class="sidebar-widget">
        <div class="sidebar-widget-container">
            <div class="widget-heading">
                <a href="#" class="close-side-widget">
                    <i class="bi bi-x-lg"></i>
                </a>
            </div>
            <div class="sidebar-textwidget">
                <div class="sidebar-info-contents">
                    <div class="content-inner">
                        <div class="sidebar-logo">
                            <a href="index.html"><img src="<?=base_url('public/')?>assets/images/logo.png" alt="logo"></a>
                        </div>
                        <div class="sidebar-widget-menu">
                            <ul>
                                <li class="dropdown"><a href="#" data-toggle="dropdown">Home</a>

                                </li>
                                <li class="dropdown"><a href="about.html" data-toggle="dropdown">About</a></li>
                                <li class="dropdown"><a href="#" data-toggle="dropdown">Classroom<i
                                            class="icon-arrow"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="service-details.html">IITJEE</a></li>
                                        <li><a href="service-details.html">NEET</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#" data-toggle="dropdown">Courses<i
                                            class="icon-arrow"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="team.html">IITJEE</a></li>
                                        <li><a href="team-details.html">NEET</a></li>

                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#" data-toggle="dropdown">Result <i
                                            class="icon-arrow"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="blog.html">IITJEE</a></li>
                                        <li><a href="blog-two-grid.html">NEET</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="contact-us.html" data-toggle="dropdown">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                        <div class="contact-info">
                            <h2>Contact Info</h2>
                            <ul class="list-style-one">
                                <li><i class="bi bi-geo-alt-fill"></i>6391 Elgin St. Celina, Delaware</li>
                                <li><i class="bi bi-telephone-fill"></i>(+001) 123-456-789</li>
                                <li><i class="bi bi-envelope"></i> info@example.com</li>
                                <li><i class="bi bi-alarm-fill"></i> Week Days: 08.00 to 10.00
                                </li>
                            </ul>
                        </div>
                        <ul class="social-box">
                            <li class="facebook"><a href="#" class="fab fa-facebook-f"></a></li>
                            <li class="twitter"><a href="#" class="fab fa-instagram"></a></li>
                            <li class="linkedin"><a href="#" class="fab fa-twitter"></a></li>
                            <li class="instagram"><a href="#" class="fab fa-pinterest-p"></a></li>
                            <li class="youtube"><a href="#" class="fab fa-linkedin-in"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--==================================================-->
<!-- End Thrown Sidebar Area -->
<!--==================================================-->