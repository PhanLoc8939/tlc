      <section class="content_trong width_100">
      	<div class="frame-news width_100">
      		<div class="margin1200">
      			<div class="content_detail width_100" >
      				<?php if($_REQUEST['idc']=='') {?>
      					<div class="width_100 ngaytao-bv nav-bredcrum "> 
      						<li><a href="" title="Trang chủ"> Trang chủ </a><i class="fa fa-angle-double-right"></i></li>
      						<li><a href="dich-vu.html" title="<?=$title_ttt?>"><?=$title_ttt?> </a>         
      						</li> 
      					</div>
      					<div class="title-product2 width_100">
      						<h1 style="text-align: center;"><?=$title_ttt?></h1>
      					</div>
      					<div class="grid-3tinlq">
      						<?php foreach ($news as $v) {?>
      							<div class="items-nxnk">
      								<div class="images-xnk width_100">
      									<a href="tin-tuc-xnk/<?=$v['tenkhongdau_vi']?>-<?=$v['id']?>.html"><img src="thumb/336x201/1/<?=_upload_tinnho_l.$v['photo']?>"></a>
      								</div>
      								<div class="conten-nxnk width_100">
      									<div class="name-nxnk">
      										<a href="tin-tuc-xnk/<?=$v['tenkhongdau_vi']?>-<?=$v['id']?>.html"><?=$v['ten_vi']?></a>
      									</div>
      									<div class="ngaydang width_100">
      										<span><i class="fa fa-clock-o"></i></span> <?=date('d/m/Y',$v['ngaytao'])?>    
      									</div>
      									<div class="til-nxnk">
      										<?=$v['mota_vi']?>
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
      						<li><a href="dich-vu.html" title="Tin tức"> Tin tức </a><i class="fa fa-angle-double-right"></i></li>
      						<li><a href="dich-vu/<?=$news['tenkhongdau_vi']?>-<?=$news['id']?>.html" title="<?=$title_ttt?>"><?=$title_ttt?> </a>         
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
      							<h3><a>Tin tức liên quan</a></h3>
      						</div>
      						<div class="grid-3tinlq">
      							<?php foreach ($newskhac as $v) {?>
      								<div class="items-nxnk">
      									<div class="images-xnk width_100">
      										<a href="tin-tuc-xnk/<?=$v['tenkhongdau_vi']?>-<?=$v['id']?>.html"><img src="thumb/336x201/1/<?=_upload_tinnho_l.$v['photo']?>"></a>
      									</div>
      									<div class="conten-nxnk width_100">
      										<div class="name-nxnk">
      											<a href="tin-tuc-xnk/<?=$v['tenkhongdau_vi']?>-<?=$v['id']?>.html"><?=$v['ten_vi']?></a>
      										</div>
      										<div class="ngaydang width_100">
      											<span><i class="fa fa-clock-o"></i></span> <?=date('d/m/Y',$v['ngaytao'])?>    
      										</div>
      										<div class="til-nxnk">
      											<?=$v['mota_vi']?>
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