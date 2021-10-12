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


<!-- Pricing Plan Start -->
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

            <h2 class="t11 ani ani-scroll">SERVICES MORE</h2>
            <ul style="margin: 0px; padding: 0px;">

                <?php foreach ($newskhac as $key => $v) { ?>
                    <div class="box_newskhac">
                        <h2> <a class="ani ani-scroll" href="price/<?= $v['tenkhongdau_vi'] ?>-<?= $v['id'] ?>.html">+ <?= $v['ten_vi'] ?></a></h2>
                    </div>
                <?php } ?>
            </ul>
        </div>
    </div>

<?php } else { ?>
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <h1 class="display-4 text-uppercase text-center mb-5 ani ani-scroll">Competitive Pricing</h1>
            <div class="row">
                <?php foreach ($news as $k => $v) { ?>
                    <?php if ($k == 0) { ?>
                        <div class="col-lg-4 mb-2 ani ani-scroll">
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
                                    <a href="price/<?= $v['tenkhongdau_vi'] ?>-<?= $v['id'] ?>.html" class="btn btn-dark text-uppercase py-2 px-4 my-3">Order Now</a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    <?php if ($k == 1) { ?>
                        <div class="col-lg-4 mb-2 ani ani-scroll">
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
                                    <a href="price/<?= $v['tenkhongdau_vi'] ?>-<?= $v['id'] ?>.html" class="btn btn-primary text-uppercase py-2 px-4 my-3">Order Now</a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    <?php if ($k == 2) { ?>
                        <div class="col-lg-4 mb-2 ani ani-scroll">
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
                                    <a href="price/<?= $v['tenkhongdau_vi'] ?>-<?= $v['id'] ?>.html" class="btn btn-dark text-uppercase py-2 px-4 my-3">Order Now</a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>

                <?php } ?>
            </div>
        </div>
    </div>
<?php } ?>
<!-- Pricing Plan End -->