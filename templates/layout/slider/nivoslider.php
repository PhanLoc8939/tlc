    <!-- Header Start -->
    <div class="container-fluid w-full px-0 p-re z-2">
        <div class="mv-slide">
            <?php foreach ($slideshow as $v) { ?>
                <div class=" w-full">
                    <a href="<?= $v['link'] ?>" target="_blank" class=" w-full">
                        <img class="img-fluid mt-5 mt-lg-0" src="<?= _upload_hinhanh_l . $v['photo'] ?>" alt="">
                    </a>
                </div>
            <?php } ?>
        </div>

    </div>
    <!-- Header End -->