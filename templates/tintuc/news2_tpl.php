<!-- Page Header Start -->
<div class="page-header container-fluid bg-primary d-flex flex-column align-items-center justify-content-center">
    <h1 class="display-3 text-uppercase mb-3">Projects</h1>
    <div class="d-inline-flex text-white">
        <h6 class="text-uppercase m-0"><a class="text-white" href="">Home</a></h6>
        <h6 class="m-0 px-3">/</h6>
        <h6 class="text-uppercase m-0">Projects</h6>
    </div>
</div>
<!-- Page Header Start -->
<?php
$sql = "select * from #_product_cat where  hienthi=1  and com='cat' order by id asc  ";
$d->query($sql);
$sanphamcap1 = $d->result_array();
?>
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