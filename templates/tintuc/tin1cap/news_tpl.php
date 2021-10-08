

<section class="width_100 content_detail">
  

    <div class="container container1">

        <div class="width_100 ngaytao-bv nav-bredcrum "> <a href="" title="Trang chủ">
         <?=_trangchu?>            </a> <i class="fa fa-angle-double-right"></i><span>
         <?=_linhvuchoatdong?>         </span> 
       </div>
      <div class="title-page-dt width_100">
       <h1>  <?=_linhvuchoatdong?></h1>
                                      
      </div>
       <div class="content_trong width_100">

            <div class="row">
            <?php foreach ($news as $key => $v) {?>
              <div class="col-md-4 col-sm-6 col-xs-12 linhvuc1">

                <div class="item_linhvuctc item_linhvuctc1 width_100">
                    <div class="title_linhvuctc width_100">
                      <h3><a href="<?=$v['tenkhongdau']?>-<?=$v['id']?>.htm"><?=$v['ten_'.$lang]?></a></h3>
                    </div>
                    <div class="hinhlinhvuctc width_100">
                        <a href="<?=$v['tenkhongdau']?>-<?=$v['id']?>.htm"><img src="thumb/525x330/1/<?=_upload_congtrinh_l.$v['photo']?>"></a>
                    </div>
                </div>

              </div>
          <?php } ?>
          </div>
        </div>
   

    </div>

</section>