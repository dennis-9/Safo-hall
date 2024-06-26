<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-site-verification" content="VN65Iad3M5anfCE6RksWLRcqqN6xsMJ21gfaNvEyeMs" />
    <link rel="shortcut icon" href="assets/images/safo web logo.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script defer src="js/script.js"></script>
    <script defer src="js/email.js"></script>
    <script type="text/javascript"
    src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js">
    </script>
    <script type="text/javascript">
   (function(){
      emailjs.init({
        publicKey: "R_QGTO1g1EEz-V9sK",
      });
   })();
</script></div>
    <title>Safo Hall</title>
</head>
<body class="min-vh-100 position-relative">
    <?php require_once("includes/header_nav.php") ?>
    
    <div>
        <main>
            <section class="hero-container">
                <img class="img-fluid" src="assets/images/safo web image.jpg" alt="">
                <div class="position-relative">
                    <div class="hero_text_container px-2 px-md-5 position-absolute py-sm-0 py-4">
                        <div class="text-light mb-2">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Harum delectus ex nobis hic inventore alias quos sint iure illo commodi, animi amet dicta odio. Perspiciatis dolorem cum quidem nihil dignissimos?
                        </div>
                        <div class="text-center text-sm-start">
                            <a href="" class="btn btn-light me-3 my-2">READ MORE</a>
                            <a href="register.php" class="btn btn-light my-2 d-none d-md-inline-block">CLICK HERE REGISTER AND BOOK ACCOMODATION</a>
                            <a href="register.php" class="btn btn-light my-2 d-md-none">REGISTER AND BOOK ACCOMODATION</a>
                        </div>
                    </div>
                </div>
            </section>
            <div class="horizontal_seperator mx-2 my-3"></div>
            <section class="about-section container-fluid px-0 py-5 text-center">
                <div class="row">
                    <div class="col-12 col-md-4 px-0 px-md-4">
                        <h4>OUR VISION</h4>
                        <p>To create a welcoming and inclusive environment where students can thrive academically and personally. We strive to provide a home away from home for our residents, fostering a sense of community and promoting personal growth.</p>
                    </div>
                    <div class="col-12 col-md-4 px-0 px-md-4">
                        <h4>OUR CORE VALUES</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat quo quod quas porro optio nisi voluptas veniam id dignissimos corporis. Odio, tenetur reiciendis eos amet minima modi ratione molestiae cumque.</p>
                    </div>
                    <div class="col-12 col-md-4 px-0 px-md-4">
                        <h4>OUR MISSION</h4>
                        <p>To support and empower our residents by providing a safe and comfortable living space, offering resources and opportunities for personal and academic development, and facilitating connections with the broader university and Alumni communities.</p>
                    </div>
                </div>
            </section>
            <div class="swiper mySwiper_desktop d-none d-md-block">
                <div class="swiper-wrapper">
                  <div class="swiper-slide"><img src="assets/images/Safo1.jpg" alt=""></div>
                  <div class="swiper-slide"><img src="assets/images/Safo2.jpg" alt=""></div>
                  <div class="swiper-slide"><img src="assets/images/Safo3.jpg" alt=""></div>
                  <div class="swiper-slide"><img src="assets/images/safoimg.jpeg" alt=""></div>
                  <div class="swiper-slide"><img src="assets/images/safoimg1.jpeg" alt=""></div>
                  <div class="swiper-slide"><img src="assets/images/executives.jpg" alt=""></div>
                  <div class="swiper-slide"><img src="assets/images/emblem.jpeg" alt=""></div>
                  <div class="swiper-slide"><img src="assets/images/organizer1.jpg" alt=""></div>
                  <div class="swiper-slide"><img src="assets/images/president.jpg" alt=""></div>
                </div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
            <div class="swiper mySwiper d-md-none">
                <div class="swiper-wrapper">
                  <div class="swiper-slide"><img src="assets/images/Safo1.jpg" alt=""></div>
                  <div class="swiper-slide"><img src="assets/images/Safo2.jpg" alt=""></div>
                  <div class="swiper-slide"><img src="assets/images/Safo3.jpg" alt=""></div>
                  <div class="swiper-slide"><img src="assets/images/safoimg.jpeg" alt=""></div>
                  <div class="swiper-slide"><img src="assets/images/safoimg1.jpeg" alt=""></div>
                  <div class="swiper-slide"><img src="assets/images/executives.jpg" alt=""></div>
                  <div class="swiper-slide"><img src="assets/images/emblem.jpeg" alt=""></div>
                  <div class="swiper-slide"><img src="assets/images/organizer1.jpg" alt=""></div>
                  <div class="swiper-slide"><img src="assets/images/president.jpg" alt=""></div>
                </div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
            <section class="w-100 my-5 py-5">
                <h2 class="text-center executives_header">SAFO HALL EXECUTIVES FOR 2023/2024 ACADEMIC YEAR</h2>
                <div class="container-fluid px-0" >
                    <div class="row" id="profileContainer">
                        <div class="col-md-2 col-6 px-1">
                            <div class="card myCard">
                                <img src="assets/images/RevArthur.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <h5 class="card-title">Hall Tutor</h5>
                                  <p class="card-text">
                                    <h6 class="">
                                        Rev. Augustine Arthur Norman
                                    </h6> 
                                  </p>
                                  <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                            </div>
                            </div>
                        </div>
                        <div class="col-md-2 col-6 px-1">
                            <div class="card myCard">
                                <img src="assets/images/president.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <h5 class="card-title">President</h5>
                                  <p class="card-text">
                                    <h6 class="">
                                        Ransford Koranteng
                                    </h6> 
                                   
                                  </p>
                                  <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                            </div>
                            </div>
                        </div>
                        <div class="col-md-2 col-6 px-1">
                            <div class="card myCard">
                                <img src="assets/images/Vice_president.jpeg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Vice President</h5>
                                    <p class="card-text text-center">
                                        <h6 class="">
                                            Michael Kafui Yao Tsatsu
                                        </h6> 
                                       
                                    </p>
                                  <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 col-6 px-1">
                            <div class="card myCard">
                                <img src="assets/images/fc.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <h5 class="card-title">Financial Controller</h5>
                                  <p class="card-text">
                                    <h6 class="">
                                        Kusi Danquah Stephen
                                    </h6> 
                                    
                                  </p>
                                  <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                            </div>
                            </div>
                        </div>
                        <div class="col-md-2 col-6 px-1">
                            <div class="card myCard">
                                <img src="assets/images/Secretary.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <h5 class="card-title">Secretary</h5>
                                  <p class="card-text">
                                    <h6 class="">
                                        Asare Ebenezer Addo
                                    </h6> 
                                   
                                  </p>
                                  <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                            </div>
                            </div>
                        </div>
                        <div class="col-md-2 col-6 px-1">
                            <div class="card myCard">
                                <img src="assets/images/organizer2.jpg" class="card-img-top" alt="...">
                                <div class="card-body pb-5">
                                  <h5 class="card-title">Organizer</h5>
                                  <p class="card-text">
                                    <h6 class="">
                                        Ebenezer Ofosu
                                    </h6> 
                                  
                                  </p>
                                  <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <div class="px-sm-5">
                    <img class="img-fluid" src="assets/images/executives.jpg" alt="">
                </div>
            </section>
            <div class="text-center mt-5">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores atque magni ut quasi, rerum dolorum quibusdam dolorem rem eveniet soluta id praesentium, facere tenetur vel in voluptates? Aspernatur, error omnis?
                <div class="text-center m-3">
                    <a href="assets/COMPUTER NETWORKING COURSE OUTLINE.docx" class="btn downloadConstitution rounded-3" download>DOWNLOAD HALL CONSTITUTION</a>
                </div>
            </div>
        </main>
        <?php require_once("includes/safo_footer.php") ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        var swiper = new Swiper(".mySwiper", {
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            pagination: {
                clickable: true,
                el: ".swiper-pagination",
                dynamicBullets: true,
            },
            loop: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
        });
        var swiper = new Swiper(".mySwiper_desktop", {
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            slidesPerView: 2,
            spaceBetween: 30,
            pagination: {
                clickable: true,
                el: ".swiper-pagination",
                dynamicBullets: true,
            },
            loop: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
        });
</script>
</body>
</html>