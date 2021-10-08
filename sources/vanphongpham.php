<?php 
$d->reset();
$sql= "select * from #_tinnho where hienthi=1 and noibat=1 and tinmoi= 1 and com='1'";
$d->query($sql);
$newsnb = $d->fetch_array();

$d->reset();
$sql= "select id,mota_vi,ten_vi,tenkhongdau_vi,photo from #_tinnho where hienthi=1 and noibat=1 and tinmoi= 0 and com='1' order by stt asc, id desc";
$d->query($sql);
$newsnbs = $d->result_array();

$d->reset();
$sql= "select id,mota_vi from #_tinnho where hienthi=1 and noibat=1 and tinmoi=0 and com='2'";
$d->query($sql);
$videomain = $d->fetch_array();

$d->reset();
$sql= "select id,mota_vi,photo from #_tinnho where hienthi=1 and noibat=1 and tinmoi=0 and com='2' order by stt asc, id desc";
$d->query($sql);
$videos = $d->result_array();




?>