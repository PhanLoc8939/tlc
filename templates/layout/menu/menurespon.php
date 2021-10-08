
<div class="menu_mobile " >
  <div class="icon_menu">
    <span>&nbsp;</span>
    <span>&nbsp;</span>
    <span>&nbsp;</span>


  </div>

  <div class="divmm">
    <div class="mmContent">
      <div class="mmMenu">
        <div class="space_block_menu" style="    padding: 10px 0;
        font-size: 14px;
        text-transform: uppercase;
        padding-left: 14px; ">MENU</div>
        <div class="menucon">
          <ul>
            <li><a href="">Trang chủ</a></li>
            <li><a href="gioi-thieu.html">Giới thiệu</a></li>
            <li><a href="dich-vu.html">DỊCH VỤ LOGISTICS</a></li>
            <li><a href="bao-gia.html">BÁO GIÁ</a></li>
            <li><a href="ho-tro-thong-tin.html.html">HỖ TRỢ THÔNG TIN</a></li>
            <li><a href="tin-tuc-xnk.html">Tin tức xuất nhập khẩu</a></li>
            <li><a href="tin-tuc.html">Tin tức</a></li>
            <li><a href="san-pham.html">Sản phẩm</a>
              <?php if(count($menu_cat)>0) {?>
                <div class="button-submenu"></div>
                <ul class="sub11">
                  <?php foreach ($menu_cat as $key => $v) {
                   $d->reset();
                   $sql= "select ten_vi,tenkhongdau_vi,id from #_product_cat where hienthi=1 and com='cat1' and id_cat=".$v['id']." order by stt asc, id desc";
                   $d->query($sql);
                   $dmcap2 = $d->result_array();
                   ?>
                   <li>
                    <a href="san-pham/<?=$v['tenkhongdau_vi']?>-<?=$v['id']?>.html"><?=$v['ten_vi']?></a>
                    <?php if(count($dmcap2)>0) {?>
                     <div class="button-submenu"></div>
                     <ul class="sub11">
                      <?php foreach ($dmcap2 as $key => $v1) {?>
                        <li>
                          <a href="san-pham/<?=$v1['tenkhongdau_vi']?>-<?=$v1['id']?>.html"><?=$v1['ten_vi']?></a>
                          <?php 
                          $d->reset();
                          $sql= "select ten_vi,tenkhongdau_vi,id from #_product_cat where hienthi=1 and com='cat2' and id_cat1=".$v1['id']." order by stt asc, id desc";
                          $d->query($sql);
                          $dmcap3 = $d->result_array();
                          ?>
                          <ul class="sub11">
                            <?php foreach ($dmcap3 as $v2) {?>
                              <li><a href="san-pham/<?=$v['tenkhongdau_vi']?>/<?=$v1['tenkhongdau_vi']?>/<?=$v2['tenkhongdau_vi']?>-<?=$v2['id']?>.html"><?=$v2['ten_vi']?></a>
                              </li>
                            <?php }?>
                          </ul>
                        </li>
                      <?php }?>
                    </ul>
                  <?php } ?>
                </li>
              <?php } ?>
            </ul>
          <?php } ?>
        </li>
        <li><a href="lien-he.html">liên hệ</a></li>
        <li><a href="gio-hang.html">Giỏ hàng (<?=get_total()?>)</a></li>

      </ul> 
    </div>
    <div class="space_block_menu">&nbsp;</div>

    <div class="menucon">

     <ul>
      <li><a>Hotline: <?=$company['dienthoai']?></a></li>
    </ul>
  </div>
</div>
<div class="close-mmenu"></div>
</div>
<div class="divmmbg"></div>
</div>
<div class="clear"></div>
</div>



<script type="text/javascript">$(".menu_mobile .icon_menu").click(function(event){$(this).parent().find(".divmm").addClass('show');$('.menu_mobile').addClass("showmenu");$('html').addClass("openmenu");$('body').css({})});$(".menu_mobile .divmm .divmmbg , .menu_mobile .divmm .mmContent .close-mmenu").click(function(event){$(this).parents(".menu_mobile").find(".divmm").removeClass('show');setTimeout(function(){$('.menu_mobile').removeClass("showmenu");$('html').removeClass("openmenu")},500)});$(window).resize(function(){if($(window).innerWidth()>1199){$(".menu_mobile").find(".divmm").removeClass('show');$('.menu_mobile').removeClass("showmenu");$('html').removeClass("openmenu")}});$('.button-submenu').click(function(e){e.preventDefault();if(!$(this).hasClass('showcon1'))
{$(this).addClass('showcon1');$(this).closest("li").children(".sub11").addClass('showcon2')}else{$(this).removeClass('showcon1');$(this).closest("li").children(".sub11").removeClass('showcon2')}});</script>