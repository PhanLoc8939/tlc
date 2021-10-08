<div class="content-m">
	<div class="top-content width_100">
		<div class="margin1200">
			<div class="service-main">
				<div class="frame-service">
					<div class="owl-service owl-carousel width_100">
						<?php foreach ($dichvumain as $v) {?>
							<div class="items-service width_100">
								<div class="images-sv width_100">
									<a href="dich-vu/<?=$v['tenkhongdau_vi']?>-<?=$v['id']?>.html"><img src="<?=_upload_tinnho_l.$v['photo']?>"></a>
								</div>
								<div class="content-sv width_100">
									<div class="name-sv">
										<a href="dich-vu/<?=$v['tenkhongdau_vi']?>-<?=$v['id']?>.html"><?=$v['ten_vi']?></a>
									</div>
									<div class="title-sv"><?=$v['mota_vi']?></div>
									<div class="read-sv"><a href="dich-vu/<?=$v['tenkhongdau_vi']?>-<?=$v['id']?>.html">Xem thêm</a></div>
								</div>
							</div>
						<?php }?>

					</div>
				</div>
			</div>
			<div class="about-xnk width_100">
				<div class="images-about">
					<a href="gioi-thieu.html"><img src="thumb/370x262/2/<?=_upload_tinnho_l.$aboutxnk['photo']?>"></a>
				</div>
				<div class="content-about">
					<div class="name-about width_100">
						<h3><a href="gioi-thieu.html"><?=$aboutxnk['ten_vi']?></a></h3>
					</div>
					<div class="title-about width_100">
						<?=$aboutxnk['mota_vi']?>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="whychoose width_100">
		<div class="margin1200">
			<div class="frame-whychoose width_100">
				<div class="title-choose width_100">
					<h3><a href="">TẠI SAO BẠN NÊN CHỌN <?=$aboutxnk['ten_vi']?></a></h3>
				</div>
				<div class="content-choose width_100">
					<div class="grid-2choose">
						<?php foreach ($taisaochon as $v) {?>
							<div class="items-chooses width_100">
								<div class="images-choose">
									<a><img src="<?=_upload_tinnho_l.$v['photo']?>"></a>
								</div>
								<div class="conten-cs">
									<div class="name-cs"><a><?=$v['ten_vi']?></a></div>
									<div class="til-cs">
										<?=$v['mota_vi']?>
									</div>
								</div>
							</div>
						<?php }?>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="news-xnk">
		<div class="margin1200">
			<div class="content-choose">
				<div class="title-choose">
					<h3><a href="tin-tuc-xnk.html">Tin Tức</a></h3>
				</div>
				<div class="content-nxnk">
					<div class="owl-newsxnk owl-carousel width_100">
						<?php foreach ($newsxnk as $v) {?>
							<div class="items-nxnk">
								<div class="images-xnk width_100">
									<a href="tin-tuc-xnk/<?=$v['tenkhongdau_vi']?>-<?=$v['id']?>.html"><img src="thumb/336x201/1/<?=_upload_tinnho_l.$v['photo']?>"></a>
								</div>
								<div class="conten-nxnk width_100">
									<div class="name-nxnk">
										<a href="tin-tuc-xnk/<?=$v['tenkhongdau_vi']?>-<?=$v['id']?>.html"><?=$v['ten_vi']?></a>
									</div>
									<div class="til-nxnk">
										<?=$v['mota_vi']?>
									</div>
									<div class="ngaydang width_100">
										<span><i class="fa fa-clock-o"></i></span> <?=date('d/m/Y',$v['ngaytao'])?>    
									</div>
								</div>
							</div>
						<?php }?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	$(".owl-service").owlCarousel({
		items : 4,
		margin:0,
		loop:false,
		slideSpeed : 2000,
		margin:30,
		dots:true,
		nav: false,
		autoplay: true,
		navText: ["<img src='img/nutprev.png'>","<img src='img/nutnext.png'>"],
		responsive:{
			0:{items:1,nav:false,loop:false},
			600:{items:2,nav:false,loop:false},
			1000:{items:4,nav:false,loop:false}
		}
	});

	$(".owl-newsxnk").owlCarousel({
		items : 3,
		margin:0,
		loop:false,
		slideSpeed : 2000,
		margin:45,
		dots:false,
		nav: false,
		autoplay: true,
		navText: ["<img src='img/nutprev.png'>","<img src='img/nutnext.png'>"],
		responsive:{
			0:{items:1,nav:false,loop:false},
			600:{items:2,nav:false,loop:false},
			1000:{items:3,nav:false,loop:false}
		}
	});
</script>