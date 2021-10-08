<?php

	$d->reset();

	$sql = "select photo,mota_vi,ten_vi,link from #_photo where com='slideshow' and hienthi=1 order by stt asc,id desc";

	$d->query($sql);

	$slide_show = $d->result_array();	

?>





<div id="mucslider" class="width_100">

	











						<div id="owl_slider" class="owl-carousel owl-theme">





									<?php foreach ($slide_show as $v) {?>



											               <div class="item">

                                                <a href="<?=$v['link']?>" target="_blank" title=""><img style="width: 100%"  src="thumb/1366x515/1/<?=_upload_hinhanh_l.$v['photo']?>"  alt=""/>









                                                </a>

                                                

                                            </div>

                                        

                                      <?php } ?>

						</div>






	



</div>




