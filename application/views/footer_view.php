<!--==================================================-->
<!-- Start Thrown Footer Area -->
<!--==================================================-->
<div class="footer-area">
    <div class="container">
        <div class="row gx-6">
            <div class="col-lg-3 col-md-6">
                <div class="footer-wiget">
                    <div class="footer-wiget-log">
                        <a href="index.php"><img src="<?=base_url('public/')?>assets\images\bp_logo.png" alt=""></a>
                    </div>
                    <div class="footer-wiget-text">
                        <h4>Say Hello!</h4>
                    </div>
                    <!-- <div class="footer-shape-title">
                        <h3>Discover our app</h3>
                    </div>
                    <div class="footer-wiget-shape">
                        <img src="assets/images/footer/Google-Play.png" alt="">
                    </div>
                    <div class="footer-wiget-shape">
                        <img src="assets/images/footer/Play-Store.png" alt="">
                    </div> -->
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer-wiget">
                    <div class="footer-wiget-title">
                        <h4>Links</h4>
                    </div>
                    <div class="footer-wiget-menu">
                        <ul>
                            <li><a href="#"> About us</a></li>
                            <li><a href="#"> Meet our team</a></li>
                            <li><a href="#"> Case stories</a></li>
                            <li><a href="#"> Latest news</a></li>
                            <li><a href="#"> Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer-wiget">
                    <div class="footer-wiget-title">
                        <h4>Other Link</h4>
                    </div>
                    <div class="footer-wiget-menu">
                        <ul>
                            <li><a href="#"> Faq</a></li>
                            <li><a href="#"> Tearm of user</a></li>
                            <li><a href="#"> Disclaimer</a></li>
                            <li><a href="#"> Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 pr-0">
                <div class="foter-box">
                    <div class="footer-wiget-icon">
                        <ul>
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    <div class="footer-widget-contct-menu">
                        <ul>
                            <li><a href="#">( 800 ) 160-616481</a></li>
                            <li class="line"><a href="#">example@gmail.com</a></li>
                            <li><a href="#">175 10h Street, Office 375 Berlin, De 21562</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row align-items-center mt-100">
            <div class="col-lg-6 col-md-12">
                <div class="copyright-text">
                    <p>Copyright © <a href="#">Website_Stock</a> All Rights Reserved.</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="footer-condition">
                    <ul>
                        <li><a href="#">Terms of use</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--==================================================-->
<!-- End Thrown Footer Area -->
<!--==================================================-->

<!--==================================================-->
<!-- Start Search Popup Area -->
<!--==================================================-->
<div class="search-popup">
    <button class="close-search style-two"><span class="flaticon-multiply"><i
                class="far fa-times-circle"></i></span></button>
    <button class="close-search"><i class="fas fa-arrow-up"></i></button>
    <form method="post" action="#">
        <div class="form-group">
            <input type="search" name="search-field" value="" placeholder="Search Here" required="">
            <button type="submit"><i class="fa fa-search"></i></button>
        </div>
    </form>
</div>
<!--==================================================-->
<!-- End Search Popup Area -->
<!--==================================================-->


<!--==================================================-->
<!-- Start Popup Form Area -->
<!--==================================================-->

<!--==================================================-->
<!-- End Popup Form Area -->
<!--==================================================-->


<!--==================================================-->
<!-- Start scrollup section Area -->
<!--==================================================-->
<!-- scrollup section -->
<!-- <div class="scroll-area">
    <div class="top-wrap">
        <div class="go-top-btn-wraper">
            <div class="go-top go-top-button">
                <i class="fas fa-arrow-up"></i>
                <i class="fas fa-arrow-up"></i>
            </div>
        </div>
    </div>
</div> -->

<!--==================================================-->
<!-- End scrollup section Area -->
<!--==================================================-->



<!--==================================================-->
<!-- Start sticky form Area -->
<!--==================================================-->
<button class="open-button" onclick="openForm()">Open Form</button>
<div class="form-popup" id="myForm">
    <form id="send" class="send-form form-container" action="" method="post">
        <div class="form-group">
        <label for="name">
                <i class="fa fa-user"></i>
            </label>
            <input type="text" placeholder="Enter name..." id="name" name="name" required="required">
        </div>
        <div class="form-group">
        <label for="phone">
                <i class="fa fa-phone"></i>
            </label>
            <input type="tel" placeholder="Enter phone..." id="phone" name="phone" required="required">
        </div>
        <div class="form-group">
        <label for="mail">
                <i class="fa fa-envelope"></i>
            </label>
            <input type="email" placeholder="Enter mail..." id="mail" name="mail" required="required">
        </div>
        <div class="form-group">
        <label for="class">
                <i class="fa fa-book"></i>
            </label>
            <input type="text" placeholder="Enter Class..." id="class" name="class" required="required">
        </div>
        <div class="form-group">
            <label for="text" class="txt">
                <i class="fa fa-comment"></i>
            </label>
            <textarea placeholder="Enter message..." name="text" id="text"></textarea>
        </div>
        
        <button type="submit" class="btn main-btn-rect">Send</button>
        <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
    </form>
</div>

<script>
function openForm() {
    document.getElementById("myForm").style.display = "block";
}

function closeForm() {
    document.getElementById("myForm").style.display = "none";
}
</script>
<!--==================================================-->
<!-- End sticky form Area -->
<!--==================================================-->


<!-- jquery js -->
<script src="<?=base_url('public/')?>assets/js/vendor/jquery-3.6.2.min.js"></script>

<script src="<?=base_url('public/')?>assets/js/popper.min.js"></script>

<!-- bootstrap js -->
<script src="<?=base_url('public/')?>assets/js/bootstrap.min.js"></script>

<!-- carousel js -->
<script src="<?=base_url('public/')?>assets/js/owl.carousel.min.js"></script>

<!-- counterup js -->
<script src="<?=base_url('public/')?>assets/js/jquery.counterup.min.js"></script>

<!-- waypoints js -->
<script src="<?=base_url('public/')?>assets/js/waypoints.min.js"></script>

<!-- wow js -->
<script src="<?=base_url('public/')?>assets/js/wow.min.js"></script>

<!-- imagesloaded js -->
<script src="<?=base_url('public/')?>assets/js/imagesloaded.pkgd.min.js"></script>

<!-- venobox js -->
<script src="<?=base_url('public/')?>venobox/venobox.js"></script>

<!--  animated-text js -->
<script src="<?=base_url('public/')?>assets/js/animated-text.js"></script>

<!-- venobox min js -->
<script src="<?=base_url('public/')?>venobox/venobox.min.js"></script>

<!-- isotope js -->
<script src="<?=base_url('public/')?>assets/js/isotope.pkgd.min.js"></script>

<!-- jquery meanmenu js -->
<script src="<?=base_url('public/')?>assets/js/jquery.meanmenu.js"></script>

<!-- jquery scrollup js -->
<script src="<?=base_url('public/')?>assets/js/jquery.scrollUp.js"></script>

<script src="<?=base_url('public/')?>assets/js/jquery.barfiller.js"></script>
<!-- jquery js -->

<!-- theme js -->
<script src="<?=base_url('public/')?>assets/js/theme.js"></script>

<script src="<?=base_url('public/')?>assets/js/index.js"></script>

<!-- aos -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<!-- Lightbox gallery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>

<script>
// image animation start
AOS.init();
//   image animation ends

// portfolio gallery
filterSelection("nature")

function filterSelection(c) {
    var x, i;
    x = document.getElementsByClassName("column");
    if (c == "all") c = "";
    for (i = 0; i < x.length; i++) {
        w3RemoveClass(x[i], "show");
        if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
    }
}

function w3AddClass(element, name) {
    var i, arr1, arr2;
    arr1 = element.className.split(" ");
    arr2 = name.split(" ");
    for (i = 0; i < arr2.length; i++) {
        if (arr1.indexOf(arr2[i]) == -1) {
            element.className += " " + arr2[i];
        }
    }
}

function w3RemoveClass(element, name) {
    var i, arr1, arr2;
    arr1 = element.className.split(" ");
    arr2 = name.split(" ");
    for (i = 0; i < arr2.length; i++) {
        while (arr1.indexOf(arr2[i]) > -1) {
            arr1.splice(arr1.indexOf(arr2[i]), 1);
        }
    }
    element.className = arr1.join(" ");
}

// online class
</script>

<!-- Lightbox gallery -->
<script>
let slideIndex = 1;
showSlide(slideIndex);

function openLightbox() {
    document.getElementById('Lightbox').style.display = 'block';
};

function closeLightbox() {
    document.getElementById('Lightbox').style.display = 'none';
};

function changeSlide(n) {
    showSlide(slideIndex += n);
};

function toSlide(n) {
    showSlide(slideIndex = n);
};

function showSlide(n) {
    const slides = document.getElementsByClassName('slide');
    let modalPreviews = document.getElementsByClassName('modal-preview');

    if (n > slides.length) {
        slideIndex = 1;
    };

    if (n < 1) {
        slideIndex = slides.length;
    };

    for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    };

    for (let i = 0; i < modalPreviews.length; i++) {
        modalPreviews[i].className = modalPreviews[i].className.replace(' active', '');
    };

    slides[slideIndex - 1].style.display = 'block';
    modalPreviews[slideIndex - 1].className += ' active';
};
</script>


<!-- dropdown menu -->

<script>
$(document).ready(function(){
  $('.dropdown-submenu a.test').on("mouseover", function(e){
    $(this).next('ul').toggle();
    e.stopPropagation();
    e.preventDefault();
  });
});
</script>

<!-- dropdown menu -->

</body>

</html>