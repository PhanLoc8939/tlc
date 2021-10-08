

  <section class="content_trong width_100">
    
  	<div class="container">

  				<div class="width_100 ngaytao-bv nav-bredcrum "> 
					<a href="" title="Trang chủ"> Trang chủ </a> <i class="fa fa-angle-double-right"></i><span>Giới thiệu</span> 
				</div>
			  	<div class="leftcontent col-md-9 col-sm-12 col-xs-12">
			   
			        <div class="title_detail width_100">
						<h1>Giới thiệu</h1>
					</div>
			        <div class="content_detail width_100 margintop10" >
			            <?=$news['noidung_'.$lang]?>
			        </div>
			     </div>

			     <div class="rightcontent col-md-3 col-sm-12 col-xs-12 hidden-xs hidden-sm">
			     		<div class="khungright width_100">

					            <div class="title_right width_100">

					                
					                <span>Sản phẩm mới</span>
					            </div>

					            <div class="khungspchay width_100">
					               <div class="vernew simply-scroll-container">
								                 <div class="simply-scroll-clip">
								                <ul class="scroller2 simply-scroll-list" style="height: 600px;">

								                      <?php foreach ($spbanchay as $key => $v) {?>

								                        <li>
								                          <div class="item_spbc">
								                              <figure>
								                                  <a href="<?=$v['tenkhongdau_vi']?>-<?=$v['id']?>.htm"><img src="thumb/235x180/2/<?=_upload_sanpham_l.$v['photo']?>"></a>
								                              </figure>
								                              <figcaption>
								                                  <h3><a href="<?=$v['tenkhongdau_vi']?>-<?=$v['id']?>.htm"><?=$v['ten_vi']?></a></h3>
								                              </figcaption>
								                          </div>
								                        </li>

								                        <?php } ?>

								                </ul>

								              </div>
								            </div>
					            </div>

					      </div>
			     </div>

 	</div>
  </section>
