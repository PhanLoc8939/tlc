<?php if (!defined('_kiemtraweb') || _kiemtraweb != $check_website) die('Eror');

$sql = "select * from #_photo where  hienthi=1  and com='slideshow' order by id asc  ";
$d->query($sql);
$slideshow = $d->result_array();

$d->reset();
$sql_tintuc = "select ten_$lang,mota_$lang,noidung_$lang,photo from #_about where com=0 limit 0,1";
$d->query($sql_tintuc);
$about = $d->fetch_array();

$d->reset();
$sql = "select  id,photo,ten_$lang,tenkhongdau_vi,mota_$lang  from #_tinnho where hienthi=1 and com=0 order by stt asc, id desc";
$d->query($sql);
$services = $d->result_array();

$d->reset();
$sql = "select  id,photo,ten_$lang,mota_$lang,chucvu_vi,diachi_vi  from #_tinnho where hienthi=1 and com=1 order by stt asc, id desc";
$d->query($sql);
$price = $d->result_array();

$d->reset();
$sql = "select  id,photo,ten_$lang,mota_$lang,chucvu_vi  from #_tinnho where hienthi=1 and com=3 order by stt asc, id desc";
$d->query($sql);
$teams = $d->result_array();

$d->reset();
$sql = "select  id,photo,ten_$lang,mota_$lang,chucvu_vi  from #_tinnho where hienthi=1 and com=4 order by stt asc, id desc";
$d->query($sql);
$testimonial = $d->result_array();

$sql = "select * from #_product_cat where  hienthi=1  and com='cat' order by id asc  ";
$d->query($sql);
$sanphamcap1 = $d->result_array();

$sql = "select * from #_product_cat where  hienthi=1  and com='cat' order by id asc  ";
$d->query($sql);
$sanphamcap1 = $d->result_array();
