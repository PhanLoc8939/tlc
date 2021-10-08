<section class="width_100 content_detail">
  

    <div class="container container1">

        <div class="width_100 ngaytao-bv nav-bredcrum "> <a href="" title="Trang chủ">
         <?=_trangchu?>            </a> <i class="fa fa-angle-double-right"></i> <a href="#" > <?=_banggia?> </a> <i class="fa fa-angle-double-right"></i> <span>
         <?=$news['ten_'.$lang]?>             </span> 
       </div>
      <div class="title-page-dt width_100">
                            <h1>     <?=$news['ten_vi']?></h1>
                                      
      </div>
       <div class="content_trong width_100">

            <?=$news['noidung_'.$lang]?>
        </div>
        <div class="news_related width_100">
           <div class="news_title_related">
              <h2><?=_baivietlienquan?></h2>
           </div>
           <ul>
                  <?php foreach ($newskhac as $key => $v) {?>
                             <li>
                                <a href="<?=$v['tenkhongdau_vi']?>-<?=$v['id']?>.html" title="<?=$v['ten_vi']?>">
                                     <?=$v['ten_'.$lang]?> 
                                </a>
                             </li>
                           <?php } ?>
           </ul>
        </div>

    </div>

</section>