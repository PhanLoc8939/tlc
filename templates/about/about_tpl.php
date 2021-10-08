    <!-- Page Header Start -->
    <div class="page-header container-fluid bg-primary d-flex flex-column align-items-center justify-content-center">
        <h1 class="display-3 text-uppercase mb-3"><?=$title_ttt?></h1>
        <div class="d-inline-flex text-white">
            <h6 class="text-uppercase m-0"><a class="text-white" href="">Home</a></h6>
            <h6 class="m-0 px-3">/</h6>
            <h6 class="text-uppercase m-0"><?=$title_ttt?></h6>
        </div>
    </div>
    <!-- Page Header Start -->

   <!-- About Start -->
   <div class="container-fluid pt-5">
        <div class="container pt-5">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <img class="img-fluid mb-4 mb-lg-0" src="<?=_upload_tinnho_l.$about['photo']?>" alt="">
                </div>
                <div class="col-lg-6">
                    <h1 class="display-4 text-uppercase mb-4"><?=$about['ten_vi']?></h1>
                    <h5 class="text-uppercase text-primary mb-3"><?=$about['mota_vi']?></h5>
                    <p class="mb-4"><?=$about['noidung_vi']?></p>
                    <a href="" class="btn btn-primary text-uppercase py-3 px-5">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- About Info Start -->
    <div class="container-fluid py-5">
        <div class="container pb-3">
            <div class="row">
                <div class="col-lg-4 mb-2">
                    <div class="d-flex align-items-center bg-light rounded mb-4 px-5" style="height: 150px;">
                        <i class="fa fa-3x fa-map-marker-alt text-primary mr-3"></i>
                        <div class="d-flex flex-column">
                            <h5 class="text-uppercase">Our Office</h5>
                            <p class="m-0"><?=$company['diachi_vi']?></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-2">
                    <div class="d-flex align-items-center bg-light rounded mb-4 px-5" style="height: 150px;">
                        <i class="fa fa-3x fa-envelope-open text-primary mr-3"></i>
                        <div class="d-flex flex-column">
                            <h5 class="text-uppercase">Email Us</h5>
                            <p class="m-0"><?=$company['email']?></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-2">
                    <div class="d-flex align-items-center bg-light rounded mb-4 px-5" style="height: 150px;">
                        <i class="fas fa-3x fa-phone-alt text-primary mr-3"></i>
                        <div class="d-flex flex-column">
                            <h5 class="text-uppercase">Call Us</h5>
                            <p class="m-0"><?=$company['dienthoai']?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Info End -->