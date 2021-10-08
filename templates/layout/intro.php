<style type="text/css">
	#introweb{background: url(<?=_upload_company_l.$company['bgfooter']?>) no-repeat center;background-size: 100% 100%;min-height: 650px;position: relative;}
</style>
<section id="introweb" class="width_100">
	<div class="container container_intro">
		<div class="title_intro width_100">
			<h1><?=$company['ten_vi']?></h1>
		</div>
		<div class="logointro width_100">
			<img src="<?=_upload_company_l.$company['logore']?>">
		</div>
		<div class="khungnganhhd width_100">
			<?php foreach ($hinhct as $k => $v) {?>
				<div class="item_khung">
					<div class="hinhdd width_100">
						<a href="<?=($k == '0') ? 'xuat-nhap-khau.html' : 'van-phong-pham.html';?>"><img src="thumb/358x358/1/<?=_upload_hinhanh_l.$v['photo']?>"></a>
					</div>
					<div class="tendd width_100">
						<span><a href="<?=($stt == '0') ? 'xuat-nhap-khau.html' : 'van-phong-pham.html';?>"><?=$v['ten_vi']?></a></span>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
</section>