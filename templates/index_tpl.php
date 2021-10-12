    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 px-0" style="margin-bottom: 90px;">
        <div class="row mx-0 align-items-center">
            <div class="col-lg-6 px-md-5 text-center text-lg-left">
                <h1 class="display-2 text-uppercase mb-3">Best Digital Marketing Agency</h1>
                <p class="text-dark mb-4">Sea ipsum kasd eirmod kasd magna, est sea et diam ipsum est amet sed sit.
                    Ipsum dolor no justo dolor et, lorem ut dolor erat dolore sed ipsum at ipsum nonumy amet. Clita
                    lorem dolore sed stet et est justo dolore.</p>
                <a href="" class="btn btn-dark text-uppercase mt-1 py-3 px-5">Learn More</a>
            </div>
            <div class="col-lg-6 px-0 text-right">
                <img class="img-fluid mt-5 mt-lg-0" src="img/header.png" alt="">
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">

            <div class="row align-items-center">
                <div class="col-lg-6">
                    <img class="img-fluid mb-4 mb-lg-0" src="<?= _upload_tinnho_l . $about['photo'] ?>" alt="<?= $about['ten_vi'] ?>">
                </div>
                <div class="col-lg-6">
                    <h1 class="display-4 text-uppercase mb-4"><?= $about['ten_vi'] ?></h1>
                    <h5 class="text-uppercase text-primary mb-3"><?= $about['mota_vi'] ?></h5>
                    <p class="mb-4"><?= $about['noidung_vi'] ?></p>
                    <a href="about.html" class="btn btn-primary text-uppercase py-3 px-5">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Services Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <h1 class="display-4 text-uppercase text-center mb-5">Our Creative Services</h1>
            <div class="row">
                <?php foreach ($services as $v) { ?>
                    <div class="col-lg-3 mb-2">
                        <a href="services/<?= $v['tenkhongdau_vi'] ?>-<?= $v['id'] ?>.html">
                            <div class="service-item rounded p-5 mb-4">
                                <img src="<?= _upload_tinnho_l . $v['photo'] ?>" alt="<?= $v['ten_vi'] ?>">
                                <h4 class="text-uppercase mb-4"><?= $v['ten_vi'] ?></h4>
                                <p class="m-0"><?= $v['mota_vi'] ?></p>
                            </div>
                        </a>
                    </div>
                <?php  } ?>
            </div>
        </div>
    </div>
    <!-- Services End -->


    <!-- Portfolio Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <h1 class="display-4 text-uppercase text-center mb-5">Visit Our Projects</h1>
            <div class="row">
                <div class="col-12 text-center mb-2">
                    <ul class="list-inline mb-4" id="portfolio-flters">
                        <li class="btn btn-outline-dark text-uppercase py-2 px-4 active" data-filter="*">
                            <i class="fa fa-star text-primary mr-2"></i>All
                        </li>
                        <?php foreach ($sanphamcap1 as $v) { ?>
                            <li class="btn btn-outline-dark text-uppercase py-2 px-4" data-filter=".<?= $v['id'] ?>">
                                <i class="fa fa-laptop-code text-primary mr-2"></i><?= $v['ten_vi'] ?>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
            <div class="row portfolio-container">
                <?php foreach ($sanphamcap1 as $v) {
                    $sql = "select * from #_product where  hienthi=1  and id_cat=" . $v['id'] . " order by id asc  ";
                    $d->query($sql);
                    $sanpham = $d->result_array();
                    foreach ($sanpham as $v1) { ?>
                        <div class="col-lg-4 col-md-6 mb-4 portfolio-item <?= $v['id'] ?>">
                            <div class="position-relative rounded overflow-hidden mb-2">
                                <img class="img-fluid w-100" src="<?= _upload_sanpham_l . $v1['photo'] ?>" alt="">
                                <div class="portfolio-btn d-flex align-items-center justify-content-center">
                                    <a href="<?= _upload_sanpham_l . $v1['photo'] ?>" data-lightbox="portfolio">
                                        <i class="fa fa-4x fa-plus text-primary"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                <?php }
                } ?>
            </div>
        </div>
    </div>
    <!-- Portfolio End -->


    <!-- Pricing Plan Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <h1 class="display-4 text-uppercase text-center mb-5">Competitive Pricing</h1>
            <div class="row">
                <?php foreach ($price as $k => $v) { ?>
                    <?php if ($k == 0) { ?>
                        <div class="col-lg-4 mb-2">
                            <div class="bg-light rounded text-center pt-5 mt-lg-5 mb-4">
                                <h2 class="text-uppercase"><?= $v['ten_vi'] ?></h2>
                                <h6 class="text-uppercase text-body mb-5"><?= $v['chucvu_vi'] ?></h6>
                                <div class="text-center bg-dark rounded-circle p-4 mb-2">
                                    <h1 class="display-4 text-white mb-0">
                                        <small class="align-top" style="font-size: 22px; line-height: 45px;">$</small><?= $v['diachi_vi'] ?><small class="align-bottom" style="font-size: 16px; line-height: 40px;">/Mo</small>
                                    </h1>
                                </div>
                                <div class="text-center py-4">
                                    <?= $v['mota_vi'] ?>
                                    <a href="" class="btn btn-dark text-uppercase py-2 px-4 my-3">Order Now</a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    <?php if ($k == 1) { ?>
                        <div class="col-lg-4 mb-2">
                            <div class="bg-dark rounded text-center pt-5 mb-4">
                                <h2 class="text-uppercase text-white"><?= $v['ten_vi'] ?></h2>
                                <h6 class="text-uppercase text-secondary mb-5"><?= $v['chucvu_vi'] ?></h6>
                                <div class="text-center bg-primary rounded-circle p-4 mb-2">
                                    <h1 class="display-4 mb-0">
                                        <small class="align-top" style="font-size: 22px; line-height: 45px;">$</small><?= $v['diachi_vi'] ?><small class="align-bottom" style="font-size: 16px; line-height: 40px;">/
                                            Mo</small>
                                    </h1>
                                </div>
                                <div class="text-center text-secondary py-4">
                                    <?= $v['mota_vi'] ?>
                                    <a href="" class="btn btn-primary text-uppercase py-2 px-4 my-3">Order Now</a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    <?php if ($k == 2) { ?>
                        <div class="col-lg-4 mb-2">
                            <div class="bg-light rounded text-center pt-5 mt-lg-5 mb-4">
                                <h2 class=" text-uppercase"><?= $v['ten_vi'] ?></h2>
                                <h6 class="text-uppercase text-body mb-5"><?= $v['chucvu_vi'] ?></h6>
                                <div class="text-center bg-dark rounded-circle p-4 mb-2">
                                    <h1 class="display-4 text-white mb-0">
                                        <small class="align-top" style="font-size: 22px; line-height: 45px;">$</small><?= $v['diachi_vi'] ?><small class="align-bottom" style="font-size: 16px; line-height: 40px;">/
                                            Mo</small>
                                    </h1>
                                </div>
                                <div class="text-center py-4">
                                    <?= $v['mota_vi'] ?>
                                    <a href="" class="btn btn-dark text-uppercase py-2 px-4 my-3">Order Now</a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>

                <?php } ?>
            </div>
        </div>
    </div>
    <!-- Pricing Plan End -->


    <!-- Team Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <h1 class="display-4 text-uppercase text-center mb-5">Meet Our Team</h1>
            <div class="owl-carousel team-carousel position-relative" style="padding-left: 30px;">
                <?php foreach ($teams as $v) { ?>
                    <div class="team-item rounded overflow-hidden">
                        <div class="position-relative">
                            <img class="img-fluid w-100" src="<?= _upload_tinnho_l . $v['photo'] ?>" alt="">
                            <div class="team-overlay">
                                <div class="d-flex align-items-center justify-content-start">
                                    <a class="btn btn-lg btn-primary btn-lg-square mx-1" href="#"><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-lg btn-primary btn-lg-square mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-lg btn-primary btn-lg-square mx-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h4 class="text-uppercase"><?= $v['ten_vi'] ?></h4>
                            <p class="m-0"><?= $v['chucvu_vi'] ?></p>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Testimonial Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <h1 class="display-4 text-uppercase text-center mb-5">Our Client's Say</h1>
            <div class="owl-carousel testimonial-carousel">
                <?php foreach ($testimonial as $v) { ?>
                    <div class="testimonial-item position-relative text-center rounded p-4">
                        <img class="img-fluid rounded mx-auto my-4" src="<?= _upload_tinnho_l . $v['photo'] ?>" alt="">
                        <h5 class="text-uppercase"><?= $v['ten_vi'] ?></h5>
                        <p class="text-uppercase"><?= $v['chucvu_vi'] ?></p>
                        <p class="text-secondary"><?= $v['mota_vi'] ?></p>
                    </div>
                <?php } ?>


            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Contact Start -->
    <div class="container-fluid py-5 px-0">
        <div class="row mt-5 mx-0">
            <div class="col-12 px-0" style="height: 500px;">
                <div class="position-relative h-100">
                    <iframe class="position-relative w-100 h-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </div>
        <div class="row mx-0 justify-content-center" style="margin-top: -200px;">
            <div class="col-lg-6 col-md-8 col-sm-10 px-0">
                <div class="contact-form bg-white rounded p-5">
                    <div id="success"></div>
                    <form name="sentMessage" id="contactForm" novalidate="novalidate">
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="control-group">
                                    <input type="text" class="form-control bg-light border-0 p-4" id="name" placeholder="Your Name" required="required" data-validation-required-message="Please enter your name" />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="control-group">
                                    <input type="email" class="form-control bg-light border-0 p-4" id="email" placeholder="Your Email" required="required" data-validation-required-message="Please enter your email" />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                        </div>
                        <div class="control-group">
                            <input type="text" class="form-control bg-light border-0 p-4" id="subject" placeholder="Subject" required="required" data-validation-required-message="Please enter a subject" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <textarea class="form-control bg-light border-0 py-3 px-4" rows="5" id="message" placeholder="Message" required="required" data-validation-required-message="Please enter your message"></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="text-center">
                            <button class="btn btn-primary text-uppercase py-3 px-5" type="submit" id="sendMessageButton">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->