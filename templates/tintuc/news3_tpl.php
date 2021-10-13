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
<?php if ($id != '') { ?>
    <div class="container-fluid ">
        <div class="container pt-5 pb-3">
            <h1 class="display-4 text-uppercase text-center mb-5  ani ani-scroll"><?= $news['ten_vi'] ?></h1>
        </div>
        <div class="w-full  ani ani-scroll">
            <?php if ($news['noidung_vi'] != '') { ?>
                <?= $news['noidung_vi'] ?>
            <?php } else { ?>
                <p class="m-0 text-center">Content is updating...</p>
            <?php } ?>
        </div>

        <div class="othernews pt-5">

            <h2 class="t11 ani ani-scroll">MEMBER MORE</h2>
            <ul style="margin: 0px; padding: 0px;">
                <?php foreach ($newskhac as $key => $v) { ?>
                    <div class="box_newskhac ani ani-scroll">
                        <h2> <a href="team/<?= $v['tenkhongdau_vi'] ?>-<?= $v['id'] ?>.html">+ <?= $v['ten_vi'] ?></a></h2>
                    </div>
                <?php } ?>
            </ul>
        </div>
    </div>

<?php } else { ?>

    <!-- Team Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <h1 class="display-4 text-uppercase text-center mb-5  ani ani-scroll">Meet Our Team</h1>
            <div class="owl-carousel team-carousel position-relative  ani ani-scroll" style="padding-left: 30px;">
                <?php foreach ($news as $v) { ?>
                    <div class="team-item rounded overflow-hidden">
                        <div class="position-relative">
                            <img class="img-fluid w-100" src="<?= _upload_tinnho_l . $v['photo'] ?>" alt="">
                            <a class=" mx-1" href="team/<?= $v['tenkhongdau_vi'] ?>-<?= $v['id'] ?>.html">
                                <div class="team-overlay">
                                    <div class="d-flex align-items-center justify-content-start">
                                        <i class="fa fa-4x fa-plus text-primary"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h4 class="text-uppercase"><a href="team/<?= $v['tenkhongdau_vi'] ?>-<?= $v['id'] ?>.html"><?= $v['ten_vi'] ?></a></h4>
                            <p class="m-0"><?= $v['chucvu_vi'] ?></p>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <!-- Team End -->
<?php } ?>