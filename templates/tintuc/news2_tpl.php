<!-- Page Header Start -->
<div class="page-header container-fluid bg-primary d-flex flex-column align-items-center justify-content-center ani ani-scroll">
    <h1 class="display-3 text-uppercase mb-3 ani ani-scroll"><?= $title_ttt ?></h1>
    <div class="d-inline-flex text-white ani ani-scroll">
        <h6 class="text-uppercase m-0"><a class="text-white" href="">Home</a></h6>
        <h6 class="m-0 px-3">/</h6>
        <h6 class="text-uppercase m-0"><?= $title_ttt ?></h6>
    </div>
</div>
<!-- Page Header Start -->

<?php
$sql = "select * from #_product_cat where  hienthi=1  and com='cat' order by id asc  ";
$d->query($sql);
$sanphamcap1 = $d->result_array();
?>

<!-- Portfolio Start -->
<?php if ($id != '') { ?>
    <div class="container-fluid ">
        <div class="container pt-5 pb-3">
            <h1 class="display-4 text-uppercase text-center mb-5 ani ani-scroll"><?= $news['ten_vi'] ?></h1>
        </div>
        <div class="w-full ani ani-scroll">
            <?php if ($news['noidung_vi'] != '') { ?>
                <?= $news['noidung_vi'] ?>
            <?php } else { ?>
                <p class="m-0 text-center">Content is updating...</p>
            <?php } ?>
        </div>

        <div class="othernews pt-5">

            <h2 class="t11 ani ani-scroll">PROJECTS MORE</h2>
            <div class="row portfolio-container ani ani-scroll">
                <?php foreach ($newskhac as $key => $v) { ?>
                    <div class="col-lg-4 col-md-6 mb-4 portfolio-item <?= $v['id'] ?>">
                        <div class="position-relative rounded overflow-hidden mb-2">
                            <img class="img-fluid w-100" src="<?= _upload_sanpham_l . $v['photo'] ?>" alt="">
                            <div class="portfolio-btn d-flex align-items-center justify-content-center">
                                <a href="project/<?= $v['tenkhongdau_vi'] ?>-<?= $v['id'] ?>.html">
                                    <i class="fa fa-4x fa-plus text-primary"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>

<?php } else { ?>
    <!-- Portfolio Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <h1 class="display-4 text-uppercase text-center mb-5 ani ani-scroll">Visit Our Projects</h1>
            <div class="row">
                <div class="col-12 text-center mb-2">
                    <ul class="list-inline mb-4 ani ani-scroll" id="portfolio-flters">
                        <li class="btn btn-outline-dark text-uppercase py-2 px-4 active " data-filter="*">
                            <i class="fa fa-star text-primary mr-2"></i>All
                        </li>
                        <?php foreach ($sanphamcap1 as $v) { ?>
                            <li class="btn btn-outline-dark text-uppercase py-2 px-4 " data-filter=".<?= $v['id'] ?>">
                                <i class="fa fa-laptop-code text-primary mr-2"></i><?= $v['ten_vi'] ?>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
            <div class="row portfolio-container ani ani-scroll">
                <?php foreach ($sanphamcap1 as $v) {
                    $sql = "select * from #_product where  hienthi=1  and id_cat=" . $v['id'] . " order by id asc  ";
                    $d->query($sql);
                    $sanpham = $d->result_array();
                    foreach ($sanpham as $v1) { ?>
                        <div class="col-lg-4 col-md-6 mb-4 portfolio-item <?= $v['id'] ?> ">
                            <div class="position-relative rounded overflow-hidden mb-2">
                                <img class="img-fluid w-100" src="<?= _upload_sanpham_l . $v1['photo'] ?>" alt="">
                                <div class="portfolio-btn d-flex align-items-center justify-content-center">
                                    <a href="project/<?= $v['tenkhongdau_vi'] ?>-<?= $v['id'] ?>.html">
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
<?php } ?>
<!-- Portfolio End -->
<!-- <a href="<?= _upload_sanpham_l . $v1['photo'] ?>" data-lightbox="portfolio"> -->