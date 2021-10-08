<section class="width_100" id="doitac">

		<div class="container container2">

				<div class="title_dt width_100">
					<span><?=_khachhangcuachungtoi?></span>
				</div>
				<div class="noidungdoitac width_100">

						<div class="owl-carousel" id="owl-doitac">
							<?php foreach ($doitac1 as $key => $v) {?>
								<div class="item_dt">
										<a href="<?=$v['link']?>"><img style="width: auto;max-width: 100%" src="thumb/155x150/1/<?=_upload_hinhanh_l.$v['photo']?>"></a>
								</div>
							<?php } ?>
						</div>

				</div>
		</div>
	
</section>