<?php 
$d->reset();
$sql= "select id,mota_vi,ten_vi,tenkhongdau_vi,photo from #_tinnho where hienthi=1 and noibat=1 and com='3' order by stt asc, id desc";
$d->query($sql);
$dichvumain = $d->result_array();

$d->reset();
$sql= "select * from #_about where com='0'";
$d->query($sql);
$aboutxnk = $d->fetch_array();

$d->reset();
$sql= "select id,mota_vi,ten_vi,tenkhongdau_vi,photo from #_tinnho where hienthi=1 and com='4' order by stt asc, id desc";
$d->query($sql);
$taisaochon = $d->result_array();


$d->reset();
$sql= "select id,mota_vi,ten_vi,tenkhongdau_vi,photo,ngaytao from #_tinnho where hienthi=1 and com='5' order by stt asc, id desc";
$d->query($sql);
$newsxnk = $d->result_array();

?>