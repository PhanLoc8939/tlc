<?php  if(!defined('_kiemtraweb') || _kiemtraweb!=$check_website) die('Eror');				







		$d->reset();
	$sql_noibat = "select photo,ten_$lang,link from #_photo where  hienthi=1 and com='slideshow1'  order by  stt asc, id desc limit 0,2";

	$d->query($sql_noibat);

	$hinhct = $d->result_array();	

	
?>