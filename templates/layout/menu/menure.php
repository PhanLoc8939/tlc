   
<?php 


    $d->reset();
  $sql= "select * from #_photo where hienthi=1 and com='banner' order by id asc limit 0,1";
  $d->query($sql);
  $banner = $d->result_array();
    $d->reset();
  $sql= "select * from #_tinnho where hienthi=1 and com=0 order by stt asc,id desc ";
  $d->query($sql);
  $gioithieu = $d->result_array();
    $d->reset();
  $sql= "select * from #_tinnho where hienthi=1 and com=1 order by stt asc,id desc ";
  $d->query($sql);
  $tintuc = $d->result_array();
  $d->reset();
  $sql= "select * from #_tinnho where hienthi=1 and com=2 order by stt asc,id desc ";
  $d->query($sql);
  $hotro = $d->result_array();
  $d->reset();
  $sql= "select * from #_tin3cap_cat where hienthi=1 and com='cat' order by stt asc,id desc ";
  $d->query($sql);
  $tailieu = $d->result_array();
     $d->reset();
    $sql2 = "select * from #_product_cat where com='cat'";
  $d->query($sql2);
  $dm = $d->result_array();

?>

   <div id="menu_responsive">
 <link rel="stylesheet" type="text/css" href="css/slimmenu.css">

   <ul class="slimmenu" style="display:block;">
      
        <li><a href="">trang chủ</a></li>
                        <li><a >giới thiệu</a>

                            <?php if(count($gioithieu)>0) { ?>
                              <ul style="display: none;padding-left:0">
                                <?php   foreach ($gioithieu as $v) {?>


                                  <li><a href="gioi-thieu/<?=$v['tenkhongdau_vi']?>-<?=$v['id']?>.html"><?=$v['ten_vi']?></a></li>


                                <?php }  ?>

                              </ul>
                                 <span class="sub-collapser"><i>▼</i></span>
                            <?php } ?>

                        </li>


                          <li><a href="san-pham.html"><?=_sanpham?></a>
            <ul style="display: none;padding-left:0">
                <?php foreach ($dm as $v) {?>
                      <li><a style="color:#000!important" href="san-pham/<?=$v['tenkhongdau_vi']?>-<?=$v['id']?>.html"><?=$v['ten_vi']?></a>

                              <?php

                    $d->reset();
                    $sql = "select * from #_product_cat where com='cat1' and id_cat=".$v['id']." order by stt asc";
                    $d->query($sql);
                    $dmcap2=$d->result_array();
                    ?>
                      <?php if(count($dmcap2)>0) {?>
                        <ul style="display: none;padding-left:0">
                          <?php foreach ($dmcap2 as $v1) {?>
                          <li><a href="san-pham/<?=$v['tenkhongdau_vi']?>/<?=$v1['tenkhongdau_vi']?>-<?=$v1['id']?>.html"><?=$v1['ten_'.$lang]?></a>
                             
                          <?php } ?>
                        </ul>
                                 <span class="sub-collapser"><i>▼</i></span>
                      <?php } ?>


                      </li>
                    <?php } ?>
                  </ul>
                <span class="sub-collapser"><i>▼</i></span>
            </li>



                        <li><a >tài liệu</a>



                            <?php if(count($tailieu)>0) { ?>
                              <ul style="display: none;padding-left:0">
                                <?php   foreach ($tailieu as $v) {?>


                                  <li><a href="tai-lieu/<?=$v['tenkhongdau']?>-<?=$v['id']?>.html"><?=$v['ten_vi']?></a></li>


                                <?php }  ?>

                              </ul>
                                 <span class="sub-collapser"><i>▼</i></span>
                            <?php } ?>


                        </li>
                        <li><a href="tin-tuc.html">tin tức</a>


                            <?php if(count($tintuc)>0) { ?>
                             <ul style="display: none;padding-left:0">
                                <?php   foreach ($tintuc as $v) {?>


                                  <li><a href="tin-tuc/<?=$v['tenkhongdau_vi']?>-<?=$v['id']?>.html"><?=$v['ten_vi']?></a></li>


                                <?php }  ?>

                              </ul>
                               <span class="sub-collapser"><i>▼</i></span>

                            <?php } ?>


                        </li>
                      
                        
                        <li><a href="ho-tro.html">hỗ trợ</a>



                            <?php if(count($hotro)>0) { ?>
                            <ul style="display: none;padding-left:0">
                                <?php   foreach ($hotro as $v) {?>


                                  <li><a href="ho-tro/<?=$v['tenkhongdau_vi']?>-<?=$v['id']?>.html"><?=$v['ten_vi']?></a></li>


                                <?php }  ?>

                              </ul>
                               <span class="sub-collapser"><i>▼</i></span>
                            <?php } ?>

                        </li>


                   <li><a href="gio-hang.html"><i class="fa fa-shopping-cart" aria-hidden="true"></i>(<?=get_total();?>) SP</a></li>
   
    
     
   </ul>
   <script src="js/jquery.slimmenu.js"></script>
   <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
   <script>
      $('ul.slimmenu').slimmenu(
      {
          resizeWidth: '1024',
          collapserTitle: 'MENU',
          easingEffect:'easeInOutQuint',
          animSpeed:'medium',
          indentChildren: true,
          childrenIndenter: '&raquo;'
      });
   </script>      
</div>
   <script type="text/javascript" src="js/stellarnav.min.js"></script>
   <script type="text/javascript">
      jQuery(document).ready(function($) {
         jQuery('.stellarnav').stellarNav({
            theme: 'light'
         });
      });
   </script>