      <section class="content_trong width_100">
        <div class="frame-news width_100">
          <div class="margin1200">
            <div class="content_detail width_100" >
              <?php if($_REQUEST['idc']=='') {?>
                <div class="width_100 ngaytao-bv nav-bredcrum "> 
                  <li><a href="" title="Trang chủ"> Trang chủ </a><i class="fa fa-angle-double-right"></i></li>
                  <li><a href="ho-tro-thong-tin.html" title="<?=$title_ttt?>"><?=$title_ttt?> </a>         
                  </li> 
                </div>
                <div class="title-product2 width_100">
                  <h1 style="text-align: center;"><?=$title_ttt?></h1>
                </div>
                <div class="grid-2tinlq">
                  <?php foreach ($news as $v) {?>
                    <div class="items-tt">
                      <div class="img-tt">
                        <a href="ho-tro-thong-tin/<?=$v['tenkhongdau_vi']?>-<?=$v['id']?>.html"><img src="thumb/280x210/1/<?=_upload_tinnho_l.$v['photo']?>"></a>
                      </div>
                      <div class="content-tt">
                        <div class="name-tt">
                          <a href="ho-tro-thong-tin/<?=$v['tenkhongdau_vi']?>-<?=$v['id']?>.html"><?=$v['ten_vi']?></a>
                        </div>
                        <div class="ngaydang width_100">
                          <span><i class="fa fa-clock-o"></i></span> <?=date('d/m/Y',$v['ngaytao'])?>    
                        </div>
                        <div class="mota-tt">
                          <?=$v['mota_vi']?>
                        </div>
                        <div class="read-more-news">
                          <a href="ho-tro-thong-tin/<?=$v['tenkhongdau_vi']?>-<?=$v['id']?>.html">Xem thêm</a>
                        </div>
                      </div>              
                    </div>
                  <?php }?>
                </div>
                <?php if($count_sp>$maxR){?>
                  <div class="clear"></div>
                  <div align="center"><div class="paging"><?=$paging['paging']?></div></div>
                <?php }?>
              <?php }else{?>
                <div class="width_100 ngaytao-bv nav-bredcrum "> 
                  <li><a href="" title="Trang chủ"> Trang chủ </a><i class="fa fa-angle-double-right"></i></li>
                  <li><a href="ho-tro-thong-tin.html" title="Thông tin hỗ trợ"> Thông tin hỗ trợ </a> <i class="fa fa-angle-double-right"></i></li>
                  <li><a href="ho-tro-thong-tin/<?=$news['tenkhongdau_vi']?>-<?=$news['id']?>.html" title="<?=$title_ttt?>"><?=$title_ttt?> </a>         
                  </li> 
                </div>
                <div class="title-product2 width_100">
                  <h1 style="text-align: center;"><?=$title_ttt?></h1>
                </div>
                <div class="content-details2">
                  <?=$news['noidung_vi']?>
                </div>
                <div class="tin-lienquan width_100">
                  <div class="title-tinlq">
                    <h3><a>Thông tin liên quan</a></h3>
                  </div>
                  <div class="grid-2tinlq">
                    <?php foreach ($newskhac as $v) {?>
                      <div class="items-tt">
                        <div class="img-tt">
                          <a href="ho-tro-thong-tin/<?=$v['tenkhongdau_vi']?>-<?=$v['id']?>.html"><img src="thumb/280x210/1/<?=_upload_tinnho_l.$v['photo']?>"></a>
                        </div>
                        <div class="content-tt">
                          <div class="name-tt">
                            <a href="ho-tro-thong-tin/<?=$v['tenkhongdau_vi']?>-<?=$v['id']?>.html"><?=$v['ten_vi']?></a>
                          </div>
                          <div class="ngaydang width_100">
                            <span><i class="fa fa-clock-o"></i></span> <?=date('d/m/Y',$v['ngaytao'])?>    
                          </div>
                          <div class="mota-tt">
                            <?=$v['mota_vi']?>
                          </div>
                          <div class="read-more-news">
                            <a href="ho-tro-thong-tin/<?=$v['tenkhongdau_vi']?>-<?=$v['id']?>.html">Xem thêm</a>
                          </div>
                        </div>              
                      </div>
                    <?php }?>
                  </div>
                </div>
              <?php }?>
            </div>
          </div>
        </div>
      </section>