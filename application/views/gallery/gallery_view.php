<!--==================================================-->
<!-- Start Banner Area -->
<!--==================================================-->
<div class="breatcome-area1" id="banner_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">

            </div>
        </div>
    </div>
</div>
<!--==================================================-->
<!-- End Banner Area -->
<!--==================================================-->

<!--==================================================-->
<!-- Start Gallery Area -->
<!--==================================================-->

<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-lg-12">
            <div class="section-title text-center">
                <div class="section-sub-title">
                    <h3>Gallery</h3>
                </div>
                <div class="section-main-title mb-5">
                    <p>Bansal Patshala results reflect the passion, hard work and efforts of our students, so
                        far, we have acquired remarkable selection ratios in competitive exams.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="gl-row ">
        <div class="col">
            <img src="<?=base_url('public/')?>assets\images\gallery\1.jpg"
                onclick="openLightbox();toSlide(1)" class="hover-shadow preview" alt="Toy car on the road." />
        </div>
        <div class="col">
            <img src="<?=base_url('public/')?>assets\images\gallery\2.jpg"
                onclick="openLightbox();toSlide(2)" class="hover-shadow preview" alt="Toy car exploring offroad." />
        </div>
        <div class="col">
            <img src="<?=base_url('public/')?>assets\images\gallery\3.jpg"
                onclick="openLightbox();toSlide(3)" class="hover-shadow preview" alt="Toy car in the city" />
        </div>
    </div>
    <div class="gl-row mt-5">
        <div class="col">
            <img src="<?=base_url('public/')?>assets\images\gallery\3.jpg"
                onclick="openLightbox();toSlide(1)" class="hover-shadow preview" alt="Toy car on the road." />
        </div>
        <div class="col">
            <img src="<?=base_url('public/')?>assets\images\gallery\2.jpg"
                onclick="openLightbox();toSlide(2)" class="hover-shadow preview" alt="Toy car exploring offroad." />
        </div>
        <div class="col">
            <img src="<?=base_url('public/')?>assets\images\gallery\1.jpg"
                onclick="openLightbox();toSlide(3)" class="hover-shadow preview" alt="Toy car in the city" />
        </div>
    </div>
</div>

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

        <!-- <div class="dots">
            <div class="col">
                <img src="https://static.pexels.com/photos/385997/pexels-photo-385997.jpeg"
                    class="modal-preview hover-shadow" onclick="toSlide(1)" alt="Toy car on the road." />
            </div>
            <div class="col">
                <img src="https://static.pexels.com/photos/574521/pexels-photo-574521.jpeg"
                    class="modal-preview hover-shadow" onclick="toSlide(2)" alt="Toy car exploring offroad." />
            </div>
            <div class="col">
                <img src="https://static.pexels.com/photos/386009/pexels-photo-386009.jpeg"
                    class="modal-preview hover-shadow" onclick="toSlide(3)" alt="Toy car in the city" />
            </div>
        </div> -->
    </div>
</div>

<!--==================================================-->
<!-- End Gallery Area -->
<!--==================================================-->