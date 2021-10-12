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
  <?php if ($id != '') { ?>
      <div class="container-fluid ">
          <div class="container pt-5 pb-3">
              <h1 class="display-4 text-uppercase text-center mb-5"><?= $news['ten_vi'] ?></h1>
          </div>
          <div class="w-full">
              <?php if ($news['noidung_vi'] != '') { ?>
                  <?= $news['noidung_vi'] ?>
              <?php } else { ?>
                  <p class="m-0 text-center">Content is updating...</p>
              <?php } ?>
          </div>

          <div class="othernews pt-5">

              <h2 class="t11">SERVICES MORE</h2>
              <ul style="margin: 0px; padding: 0px;">
                  <?php foreach ($newskhac as $key => $v) { ?>
                      <div class="box_newskhac">
                          <h2> <a href="testimonial/<?= $v['tenkhongdau_vi'] ?>-<?= $v['id'] ?>.html">+ <?= $v['ten_vi'] ?></a></h2>
                      </div>
                  <?php } ?>
              </ul>
          </div>
      </div>

  <?php } else { ?>

      <!-- Testimonial Start -->
      <div class="container-fluid py-5">
          <div class="container py-5">
              <h1 class="display-4 text-uppercase text-center mb-5">Our Client's Say</h1>
              <div class="owl-carousel testimonial-carousel">
                  <?php foreach ($news as $v) { ?>
                      <div class="testimonial-item position-relative text-center rounded p-4">
                          <a href="testimonial/<?= $v['tenkhongdau_vi'] ?>-<?= $v['id'] ?>.html">
                              <img class="img-fluid rounded mx-auto my-4" src="<?= _upload_tinnho_l . $v['photo'] ?>" alt="">
                              <h5 class="text-uppercase"><?= $v['ten_vi'] ?></h5>
                              <p class="text-uppercase"><?= $v['chucvu_vi'] ?></p>
                              <p class="text-secondary"><?= $v['mota_vi'] ?></p>
                          </a>
                      </div>
                  <?php } ?>


              </div>
          </div>
      </div>

  <?php } ?>
  <!-- Testimonial End -->