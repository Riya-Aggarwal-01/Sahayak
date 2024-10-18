<?php
include('include/header.php');
?>

<div class="row">
            <div class="col-sm-12 section-title text-center mb-5">
                <!-- <h6>What I can do for you ?</h6> -->
                <h3 class="mt-4" style="text-transform: uppercase;"> Find doctors, hospitals, and medical services near you, anytime, anywhere
</h3>
            </div>
        </div>

 

<section id="home" class="swiper_wrapper p-0">
    <div class="swiper myswiper">

        <div class="swiper-wrapper">

            <div class="swiper-slide" style="background-image: url(Public/images/hospital3.jpg);">
                <div class="slide-caption text-center">
                    <div>
                        <h1 style="font-weight: 350;">Welcome to Sahayak - Your Trusted Healthcare Companion
</h1>
                        <p> Imagine having access to quality healthcare at your fingertips. At Sahayak, we make it possible. Our user-friendly platform connects you with specialized doctors, hospitals, and medical services in your area. Search, book, and manage your healthcare needs with ease.
 </p>
                    </div>
                </div>
            </div>
            <div class="swiper-slide" style="background-image: url(Public/images/hospital2.jpg);">
                <div class="slide-caption text-center">
                    <div>
                        <h1 style="font-weight: 350;">Welcome to Sahayak - Your Trusted Healthcare Companion
</h1>
                        <p> Imagine having access to quality healthcare at your fingertips. At Sahayak, we make it possible. Our user-friendly platform connects you with specialized doctors, hospitals, and medical services in your area. Search, book, and manage your healthcare needs with ease.
 </p>
                    </div>
                </div>
            </div>
            <div class="swiper-slide" style="background-image: url(Public/images/hospital.jpg);">

                <div class="slide-caption text-center">
                    <div>
                        <h1 style="font-weight: 350;">Welcome to Sahayak - Your Trusted Healthcare Companion</h1>
<
                        <p> Imagine having access to quality healthcare at your fingertips. At Sahayak, we make it possible. Our user-friendly platform connects you with specialized doctors, hospitals, and medical services in your area. Search, book, and manage your healthcare needs with ease.</p>

                    </div>
                </div>
            </div>


        </div>

        <div class="swiper-pagination"></div>
    </div>
    <div class="container booking_area">
        <form action="" class="row">
            <div class="col-lg mb-3 mb-lg-0">
                <select name="" id="" class="form-select">
                    <option selected>Location</option>
                    <option value="1">Jaipur</option>
                    <option value="2">Churu</option>
                    <option value="3">Hanumangarh</option>
                    <option value="4">Kota</option>
                    <option value="5">ShriGanganagar</option>
                    <option value="1">Jhunjhunu</option>
                    <option value="2">Ajmer</option>
                    <option value="3">Tonk</option>
                    <option value="4">BHilwara</option>
                    <option value="5">Nagaur</option>

                </select>
            </div>
            <div class="col-lg mb-3 mb-lg-0">
                <select name="" id="" class="form-select">
                    <option selected>Hospital</option>
                    <option value="1"> SMS Hospital (Sawai Man Singh Hospital)ses</option>
                    <option value="3">Fortis Escorts Hospital</option>
                    <option value="4">CK Birla Hospitals (Rukmani Birla Hospital)</option>
                    <option value="5"> Medipulse Hospital</option>
                    <option value="6"> Mahatma Gandhi Hospital</option>
                    <option value="7"> Geetanjali Hospital</option>
                    <option value="8"> Narayana Multispeciality Hospital</option>
                    <option value="9"> Mewar Hospital</option>
                    <option value="10">Aravali Hospital</option>
                   

                </select>
            </div>
            <div class="col-lg mb-3 mb-lg-0">
                <select name="" id="" class="form-select">
                    <option selected>Diseases</option>
                   <option value="1"> Infectious Diseases</option>
                    <option value="2">Cardiovascular Diseases</option>
                    <option value="3">Respiratory Diseases</option>
                    <option value="4">Endocrine and Metabolic Disorders</option>
                    <option value="5"> Neurological Disorders</option>
                    <option value="6"> Gastrointestinal Diseases</option>
                    <option value="7"> Cancers</option>
                    <option value="8"> Musculoskeletal Disorders</option>
                    <option value="9"> Kidney and Urinary System Disorders</option>
                    <option value="10"> Blood Disorders</option>
                    <option value="11">  Mental Health Conditions</option>
                    <option value="12"> Reproductive and Sexual Health Conditions</option>

                </select>
            </div>
            
            <div class="col-lg mb-3 mb-lg-0">
                <!-- <button type="" class="main-btn ">Check Availability</button> -->
                <a href="location.php" class="main-btn rounded-2 px-lg-3">Check Availability</a>
            </div>
        </form>
    </div>
  <!--   <script type="text/javascript">
        function showAlert() {
            alert("Yes! The doctors are availabe");
        }
    </script> -->
     
</section>

<!-- ABOUT  -->
<section id="about" class="about_wrapper mt-3">
    <div class="container">
        <div class="row flex-lg-row flex-column-reverse">
            <div class="col-lg-6 text-center text-lg-start">
                <h3>Welcome to
                    <span style="color:#f32a2a;">OUR SAHAYAK</span> 
                </h3>
                <p>At Sahayak, we bridge the gap between you and quality healthcare. Our user-friendly platform connects you with specialized doctors, hospitals, and medical services in your area. With Sahayak, you can search, book, and manage your healthcare needs with ease. Whether it's an emergency or routine care, our comprehensive directory and telemedicine services ensure you receive the best possible care, whenever and wherever you need it.</p>
                <a href="book_appoint.php" class="main-btn mt-4">Check Availability</a>
            </div>
            <div class="col-lg-6 mb-4 mb-lg-0 ps-lg-4 text-center">
                <img src="Public/images/down.jpg" alt="" class="img-fluid rounded-5" style="height:350px;">
            </div>
        </div>

    </div>
</section>
<section id="services" class="service_wrapper">

    <div class="counter mt-5">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-3 mb-lg-0 mb-md-0 mb-5">
                    <h1>
                        <span id="count1"></span>+
                    </h1>
                    <p>Beds Provide</p>
                </div>
                <div class="col-md-3 mb-lg-0 mb-md-0 mb-5">
                    <h1>
                        <span id="count2"></span>+
                    </h1>
                    <p>Saved Lives</p>
                </div>
                <div class="col-md-3 mb-lg-0 mb-md-0 mb-5">
                    <h1>
                        <span id="count3"></span>+
                    </h1>
                    <p> Ratings</p>
                </div>
                <div class="col-md-3 mb-lg-0 mb-md-0 mb-5">
                    <h1>
                        <span id="count4"></span>+
                    </h1>
                    <p>On-time Reached</p>
                </div>
            </div>
        </div>
    </div>
</section>

       <!-- Rooms -->
<section id="rooms" class="rooms_wrapper">
    <div class="container-fluid">
       <!--  <div class="row">
            <div class="col-sm-12 section-title text-center mb-5">
                <h6>What I can do for you ?</h6>
                <h3>Our Favourite Rooms</h3>
            </div>
        </div> -->
        <div class="row m-0">
            <div class="col-lg-4 mb-4 ">
                <div class="room-items">
                    <img src="Public/images/doctor for card.jpg" class="img-fluid" style="height: 500px; ">
                    <div class="room-item-wrap">
                        <div class="room-content">
                            <h5 class="text-white mb-lg-5 text-decoration-underline" style="text-align: center;">Are You a Doctor?</h5>
                           
                            <p class="text-white fw-bold mt-lg-4">"Welcome to your professional dashboard" </p>
                            <a href="doctor.php" class="main-btn border-white text-white mt-lg-5"  >Register</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mb-4 ">
                <div class="room-items">
                    <img src="Public/images/hospital for Card.jpg" alt="" class="img-fluid" style="height: 500px;">
                    <div class="room-item-wrap">
                        <div class="room-content">
                            <h5 class="text-white mb-lg-5 text-decoration-underline">Hospital ?</h5>
                            
                            <p class="text-white fw-bold mt-lg-4"> Upload your latest details</p>
                            <a href="Book-Now.php" class="main-btn border-white text-white mt-lg-5">Login</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4 ">
                <div class="room-items">
                    <img src="Public/images/patient for card.jpg" alt="" class="img-fluid" style="height: 500px; ">
                    <div class="room-item-wrap">
                        <div class="room-content">
                            <h5 class="text-white mb-lg-5 text-decoration-underline" style="text-align:center;">Are you a Patient?</h5>
                            
                            <p class="text-white fw-bold mt-lg-4"> Get your treatment by nearest doctor</p>
                            <a href="Book-Now.php" class="main-btn border-white text-white mt-lg-5">Login</a>
                        </div>
                    </div>
                </div>
            </div>

           
           
          </div>
         


        </div>
    </div>
</section> 


<!-- SERVICES SECTION  -->

 <!--    <div class="container">
        <div class="row">
            <div class="col-sm-12 section-title text-center mb-5">
                <h6>We are here for you..!!</h6>
                <h3>Our Awesome Services</h3>
            </div>
        </div>
        <div class="row align-items-center service-item-wrap">
            <div class="col-lg-7 p-lg-0">
                <div class="tab-content slide" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="resturant" role="tabpanel">
                        <img src="Public/images/Service1.jpg" class="rounded-5" alt="">
                    </div>
                    <div class="tab-pane fade slide" id="swimming" role="tabpanel">
                        <img src="Public/images/Service2.jpg" class="rounded-5" alt="">
                    </div>
                    <div class="tab-pane fade slide" id="spa">
                        <img src="Public/images/service3.jpg" class="rounded-5" alt="">
                    </div>
                    <div class="tab-pane fade slide" id="conference">
                    <div class="tab-pane fade slide" id="gym">
                        <img src="Public/images/service5.jpg" class="rounded-5" alt="">

                    </div>
                </div>

            </div>
            <div class="col-lg-5 position-relative">
                <div class="service-menu-area">
                    <ul class="nav">
                        <li>
                            <a data-bs-toggle="tab" href="#resturant" class="active">
                                <span class="service-icon">
                                    <img src="Public/images/service-icon2.webp" alt="">
                                </span>
                                <h5>Restaurant</h5>
                                <p><span>Restaurant</span> lup provide grro tatem quia voluptas sit aspernatur aut
                                odit aut fugit, </p>
                            </a>
                        </li>
                        <li>
                            <a data-bs-toggle="tab" href="#spa">
                                <span class="service-icon">
                                    <img src="Public/images/service-icon1.webp" alt="">
                                </span>
                                <h5>Spa, beauty & Health</h5>
                                <p><span>Spa and beauty </span>luptatem quia voluptas sit aspernatur aut odit aut
                                fugit, sed quia </p>
                            </a>
                        </li>

                        <li>
                            <a data-bs-toggle="tab" href="#swimming">
                                <span class="service-icon">
                                    <img src="Public/images/service-icon3.webp" alt="">
                                </span>
                                <h5>Swimming Pool</h5>
                                <p><span>Swimming</span> pool luptatem quia voluptas sit aspernatur aut odit aut
                                fugit, sed quia </p>
                            </a>
                        </li>
                        <li>
                            <a data-bs-toggle="tab" href="#conference">
                                <span class="service-icon">
                                    <img src="Public/images/service-icon4.webp" alt="">
                                </span>
                                <h5>Conference Hall</h5>
                                <p><span>Conference</span> luptatem quia voluptas sit aspernatur aut odit aut fugit,
                                sed quia </p>
                            </a>
                        </li>
                        <li>
                            <a data-bs-toggle="tab" href="#gym">
                                <span class="service-icon">
                                    <img src="Public/images/sevice5.png" alt="">
                                </span>
                                <h5>Fitness Hall</h5>
                                <p><span>GYM</span> luptatem quia voluptas sit aspernatur aut odit aut fugit,
                                sed quia </p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div> -->

<!-- TEAM -->
<!-- <section id="team" class="team_wrapper">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 section-title text-center mb-5">
                <h6>What I can do for you</h6>
                <h3>Our Special Staff</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card p-0 rounded-3">
                    <img src="Public/images/manager.jpg" alt="" class="img-fluid rounded-3">
                    <div class="tem-info">
                        <h5>Ronald Lee</h5>
                        <p>Manager</p>
                        <ul class="social-network">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>

                            <li><a href="#"><i class="fab fa-vimeo-v"></i></a></li>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card p-0 rounded-3">
                    <img src="Public/images/reception.jpg" alt="" class="img-fluid rounded-3">
                    <div class="tem-info">
                        <h5>Shirley Sanchez</h5>
                        <p>Chief Reception Officer</p>
                        <ul class="social-network">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                            <li><a href="#"><i class="fab fa-vimeo-v"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card p-0 rounded-3">
                    <img src="Public/images/cook.jpg" alt="" class="img-fluid rounded-3">
                    <div class="tem-info">
                        <h5>Ashley Chaa</h5>
                        <p>Master Chef </p>
                        <ul class="social-network">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                            <li><a href="#"><i class="fab fa-vimeo-v"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card p-0 rounded-3">
                    <img src="Public/images/housekeeper.jpg" alt="" class="img-fluid rounded-3">
                    <div class="tem-info">
                        <h5>Allisa Watson</h5>
                        <p>Housekeeping Head</p>
                        <ul class="social-network">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                            <li><a href="#"><i class="fab fa-vimeo-v"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- GALLERY SECTION  -->
<!-- 
<section id="gallery" class="gallery_wrapper">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 section-title text-center mb-5">
                <h6>Best Pictures Of Our Hotel</h6>
                <h3>Our Gallery</h3>
            </div>
        </div>
        <div class="row g-0">
            <div class="col-lg-3 col-md-6 gallery-item">
                <img src="Public/images/gallery1.jpg" class="img-fluid w-100">
                <div class="gallery-item-content"></div>
            </div>
            <div class="col-lg-3 col-md-6 gallery-item">
                <img src="Public/images/galler2.jpg" class="img-fluid w-100">
                <div class="gallery-item-content"></div>
            </div>
            <div class="col-lg-3 col-md-6 gallery-item">
                <img src="Public/images/galler3.jpg" class="img-fluid w-100">
                <div class="gallery-item-content"></div>
            </div>
            <div class="col-lg-3 col-md-6 gallery-item">
                <img src="Public/images/galler5.jpg" class="img-fluid w-100 ">
                <div class="gallery-item-content"></div>
            </div>
            <div class="col-lg-0 col-md-0">
                <video controls class="container-fluid">
                    <source src="Public/images/Video.mp4" type="video/mp4">
                    </video>
                    <div class="gallery-item-content"></div>
                </div>

                <div class="col-lg-3 col-md-6  gallery-item">
                    <img src="Public/images/galler7.jpg" class="img-fluid w-100">
                    <div class="gallery-item-content"> </div>
                </div>
                <div class="col-lg-3 col-md-6  gallery-item">
                    <img src="Public/images/galler6.jpg" class="img-fluid w-100">
                    <div class="gallery-item-content"> </div>
                </div>
                <div class="col-lg-3 col-md-6  gallery-item ">
                    <img src="Public/images/gallery4.jpg" class="img-fluid w-100 ">
                    <div class="gallery-item-content"> </div>
                </div>
                <div class="col-lg-3 col-md-6  gallery-item">
                    <img src="Public/images/galler8.jpg" class="img-fluid w-100 ">
                    <div class="gallery-item-content"> </div>
                </div>
            </div>
        </div>

    </section>
 
    <section id="price" class="price_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 section-title text-center mb-5">
                    <h6>Best & Affordable price for you</h6>
                    <h3>Our Pricing</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card p-4 text-center rounded-3">
                        <h5 class="text-decoration-underline mb-4">Royal Package</h5>
                        <ul class="list-unstyled">
                            <li>
                                <p>Flight Ticket(3)</p>
                            </li>
                            <li>
                                <p>Music Concert (50% Off)</p>
                            </li>
                            <li>
                                <p>Restaurant (Brunch)</p>
                            </li>
                            <li>
                                <p>Face Make(Yes)</p>
                            </li>
                        </ul>
                        <hr />
                        <h3>INR 45000<sub class="fs-6 fw-normal">/NIGHT</sub></h3>
                        <a href="#" class="main-btn">Sign Up</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card p-4 text-center rounded-3">
                        <h5 class="text-decoration-underline mb-4">Premium Package</h5>
                        <ul class="list-unstyled">
                            <li>
                                <p>Flight Ticket(2)</p>
                            </li>
                            <li>
                                <p>Music Concert (40% Off)</p>
                            </li>
                            <li>
                                <p>Restaurant (Brunch)</p>
                            </li>
                            <li>
                                <p>Face Make(Yes)</p>
                            </li>
                        </ul>
                        <hr />
                        <h3>INR 40000<sub class="fs-6 fw-normal">/NIGHT</sub></h3>
                        <a href="#" class="main-btn">Sign Up</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card p-4 text-center rounded-3">
                        <h5 class="text-decoration-underline mb-4">Executive Package</h5>
                        <ul class="list-unstyled">
                            <li>
                                <p>Flight Ticket(2)</p>
                            </li>
                            <li>
                                <p>Music Concert (30% Off)</p>
                            </li>
                            <li>
                                <p>Restaurant (Snacks)</p>
                            </li>
                            <li>
                                <p>Face Make(No)</p>
                            </li>
                        </ul>
                        <hr />
                        <h3>INR 30000<sub class="fs-6 fw-normal">/NIGHT</sub></h3>
                        <a href="#" class="main-btn">Sign Up</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card p-4 text-center rounded-3">
                        <h5 class="text-decoration-underline mb-4">Economic</h5>
                        <ul class="list-unstyled">
                            <li>
                                <p>Flight Ticket(1)</p>
                            </li>
                            <li>
                                <p>Music Concert (15% Off)</p>
                            </li>
                            <li>
                                <p>Restaurant (Snacks)</p>
                            </li>
                            <li>
                                <p>Face Make(No)</p>
                            </li>
                        </ul>
                        <hr />
                        <h3>INR 25000<sub class="fs-6 fw-normal">/NIGHT</sub></h3>
                        <a href="#" class="main-btn">Sign Up</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


  <section id="blog" class="blog_wrapper pb-0">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 section-title text-center mb-5">
                    <h6>Say Hello TO Our Visiters</h6>
                    <h3>Our Blog</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card p-0 border-0 rounded-0">
                        <img src="Public/images/blog1.jpg" alt="">
                        <div class="blog-content  p-4">
                            <h5 class="text-decoration-underline mb-4">Relax Zone</h5>
                            <h6>By Admin - July 18, 2024</h6>
                            <p class="mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, nostrum.
                            </p>
                            <a href="#" class="main-btn mt-2">Read More</a>

                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card p-0 border-0 rounded-0">
                        <img src="Public/images/blog2.jpg" alt="">
                        <div class="blog-content p-4">
                            <h5 class="text-decoration-underline mb-4">Relax Zone</h5>
                            <h6>By Admin - July 18, 2024</h6>
                            <p class="mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, nostrum.
                            </p>
                            <a href="#" class="main-btn mt-2">Read More</a>

                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card p-0 border-0 rounded-0">
                        <img src="Public/images/blog3.jpg" alt="">
                        <div class="blog-content  p-4">
                            <h5 class="text-decoration-underline mb-4">Relax Zone</h5>
                            <h6>By Admin - July 18, 2024</h6>
                            <p class="mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, nostrum.
                            </p>
                            <a href="#" class="main-btn mt-2">Read More</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="our-partner-slider mt-5">
            <div class="container swiper our-partner">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><a href="https://www.casmara.com/en/?srsltid=AfmBOorpnncdk8nQm-Q0MZHKGuVpxQQowyx0YatVu6HCWITDqUwROXh7"><img src="Public/images/prt1-removebg-preview.png"></a></div>


                    <div class="swiper-slide"><a href="https://www.melia.com/es/hoteles/espana/marbella/melia-marbella-banus?esl-k=sem-google%7Cng%7Cc693773468639%7Cmb%7Ckhotel%20marbella%20puerto%20banus%7Cp%7Ct%7Cdc%7Ca124122345060%7Cg13448751301&&gad_source=1&gclid=CjwKCAjw0t63BhAUEiwA5xP54QtB9g27M7RKouOJki_EVT-uh4ffxj0C0Z30nTBhszCzx_QTTWg2ehoCM2sQAvD_BwE&gclsrc=aw.ds"><img src="Public/images/prt2-removebg-preview.png"></a></div>


                    <div class="swiper-slide"><a href="https://www.mantiscollection.com/"><img src="Public/images/prt3-removebg-preview.png"></a></div>


                     <div class="swiper-slide"><a href="https://www.hotelcapucines.fr/en/"><img src="Public/images/prt4-removebg-preview.png"></a></div>


                    <div class="swiper-slide"><a href="https://vaden.com.tr/"><img src="Public/images/prt5-removebg-preview.png"></a></div>

                    <div class="swiper-slide"><a href="https://www.gyros.farm/?srsltid=AfmBOor8WqUH8Qf92vkV7bFbajVENhNlkrzY0NGQ2BNA1nT94WqJnIko"><img src="Public/images/prt6-removebg-preview.png"></a></div>


                    <div class="swiper-slide"><a href="https://www.beneficioweb.com.ar/"><img src="Public/images/prt7-removebg-preview (1).png"></a></div>


                    <div class="swiper-slide"><a href="https://www.soulbuddylook.com/en?srsltid=AfmBOopyXqCW8nHEUw5kx4PZ2WCSDb_esxObCRbnrEBZBC3GZuN9FdGE"><img src="Public/images/prt8-removebg-preview.png"></a></div>
                    <div class="swiper-slide"><img src="images"></div> 
                </div>
            </div>
        </div>
    </section> -->
 

    <?php
    include('include/footer.php');
    ?>
