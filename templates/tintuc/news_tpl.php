    <!-- Page Header Start -->
    <div class="page-header container-fluid bg-primary d-flex flex-column align-items-center justify-content-center">
        <h1 class="display-3 text-uppercase mb-3"><?= $title_ttt ?></h1>
        <div class="d-inline-flex text-white">
            <h6 class="text-uppercase m-0"><a class="text-white" href="">Home</a></h6>
            <h6 class="m-0 px-3">/</h6>
            <h6 class="text-uppercase m-0"><?= $title_ttt ?></h6>
        </div>
    </div>
    <!-- Page Header Start -->


    <!-- Services Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <h1 class="display-4 text-uppercase text-center mb-5">Our Creative Services</h1>
            <div class="row">
                <?php foreach ($news as $v) { ?>
                    <div class="col-lg-3 mb-2">
                        <div class="service-item rounded p-5 mb-4">
                            <img src="<?= _upload_tinnho_l . $v['photo'] ?>" alt="">
                            <h4 class="text-uppercase mb-4"><?= $v['ten_vi'] ?></h4>
                            <p class="m-0"><?= $v['mota_vi'] ?></p>
                        </div>
                    </div>
                <?php } ?>

            </div>
        </div>
    </div>
    <!-- Services End -->