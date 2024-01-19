<!--==================================================-->
<!-- Start Banner Area -->
<!--==================================================-->
<!-- <div class="breatcome-area1" id="banner_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">

            </div>
        </div>
    </div>
</div> -->

<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-lg-12">
            <div class="section-title text-center">
                <div class="section-sub-title">
                    <h3>Result</h3>
                </div>
                <div class="section-main-title mb-5">
                    <p>Bansal Patshala results reflect the passion, hard work and efforts of our students, so
                        far, we have acquired remarkable selection ratios in competitive exams.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="gl-row row">
        <?php foreach($result as $row):  ?>
            <div class="col-md-4 mb-50">
                <img src="<?php echo base_url('admin/uploads/results/').$row->result_banner; ?>"
                    onclick="openLightbox();toSlide(1)" class="hover-shadow" alt="Toy car on the road." />
            </div>
        <?php endforeach ?>
        <!-- <div class="col">
            <img src="<?=base_url('public/')?>assets\images\gallery\2.jpg"
                onclick="openLightbox();toSlide(2)" class="hover-shadow preview" alt="Toy car exploring offroad." />
        </div>
        <div class="col">
            <img src="<?=base_url('public/')?>assets\images\gallery\3.jpg"
                onclick="openLightbox();toSlide(3)" class="hover-shadow preview" alt="Toy car in the city" />
        </div> -->
    </div>
</div>
<!-- 
<div id="Lightbox" class="modal ">

    <span class="close pointer" onclick="closeLightbox()">&times;</span>
    <div class="modal-content">
        <div class="slide">
            <img src="<?=base_url('public/')?>assets\images\gallery\1.jpg" class="image-slide"
                alt="Toy car on the road." />
        </div>
        <div class="slide">
            <img src="<?=base_url('public/')?>assets\images\gallery\2.jpg" class="image-slide"
                alt="Toy car exploring offroad." />
        </div>
        <div class="slide">
            <img src="<?=base_url('public/')?>assets\images\gallery\3.jpg" class="image-slide"
                alt="Toy car in the city." />
        </div>
        <div class="slide">
            <img src="<?=base_url('public/')?>assets\images\gallery\3.jpg" class="image-slide"
                alt="Toy car in the city." />
        </div>
        <div class="slide">
            <img src="<?=base_url('public/')?>assets\images\gallery\2.jpg" class="image-slide"
                alt="Toy car in the city." />
        </div>
        <div class="slide">
            <img src="<?=base_url('public/')?>assets\images\gallery\1.jpg" class="image-slide"
                alt="Toy car in the city." />
        </div>

        <a class="previous" onclick="changeSlide(-1)">&#10094;</a>
        <a class="next" onclick="changeSlide(1)">&#10095;</a>

    </div>
</div> -->

<!--==================================================-->
<!-- End Gallery Area -->
<!--==================================================-->