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


    <!-- Testimonial Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <h1 class="display-4 text-uppercase text-center mb-5">Our Client's Say</h1>
            <div class="owl-carousel testimonial-carousel">
                <?php foreach($news as $v) {?>
                    <div class="testimonial-item position-relative text-center rounded p-4">
                    <img class="img-fluid rounded mx-auto my-4" src="<?=_upload_tinnho_l.$v['photo']?>" alt="">
                    <h5 class="text-uppercase"><?=$v['ten_vi']?></h5>
                    <p class="text-uppercase"><?=$v['chucvu_vi']?></p>
                    <p class="text-secondary"><?=$v['mota_vi']?></p>
                </div>
                <?php }?>
               
           
            </div>
        </div>
    </div>
    <!-- Testimonial End -->