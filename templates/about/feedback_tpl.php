<?php 
		$d->reset();

	$sql_noibat = "select photo,link from #_photo where  hienthi=1 and com='slideshow1' order by  stt asc, id desc  ";

	$d->query($sql_noibat);

	$feedback = $d->result_array();	

?>

<section id="feedback" class="width_100">
	
		<div class="baofeed">


			<?php foreach ($feedback as $key => $v) {?>
			<div class="item_feed">


				<figure>
						<img src="thumb/300x300/1/<?=_upload_hinhanh_l.$v['photo']?>">
				</figure>

			</div>
			<?php } ?>
		</div>

</section>