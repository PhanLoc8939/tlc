<?php if (!defined('_source')) die("Error");

if (isset($_REQUEST['idc'])) {	//Chi tiết
	$id =  intval(trim($_REQUEST['idc']));


	$sql_tintuc = "select title,keywords,description,id,ten_vi,chucvu_vi,mota_vi,noidung_vi,ngaytao,luotxem,photo,tenkhongdau_vi from #_tinnho where hienthi=1 and id='$id' and com=3";
	$d->query($sql_tintuc);
	$news = $d->fetch_array();


	// $title_ttt = '<a href="nhuong-quyen/'.(($news['ten']!='')?q_bodautv($news['ten']):"-").'-'.$news['id'].'.html" title="'.$news['ten'].'" class="transition_03s">'.$news['ten'].'</a>';
	// $luotxem = $news['luotxem']+1;
	// $sql_update = "update #_tinnho SET luotxem=$luotxem where id='$id' and com=3";
	// $d->query($sql_update);

	if ($news['title'] != "")
		$title_bar = $news['title'];
	if ($news['description'] != "")
		$description = $news['description'];
	if ($news['keywords'] != "")
		$keywords = $news['keywords'];

	//Nhượng quyền khác			
	$sql = "select id,ten_vi,mota_vi,thumb,ngaytao,tenkhongdau_vi from #_tinnho where hienthi=1 and id!='$id' and com=3 order by stt asc,id desc limit 0,4";
	$d->query($sql);
	$newskhac = $d->result_array();
} else {	//Danh sách			
	$sql_tintuc = "select title,keywords,description,id,ten_vi,chucvu_vi,mota_vi,noidung_vi,ngaytao,luotxem,photo,tenkhongdau_vi  from #_tinnho where hienthi=1 and com=3 order by stt asc, id desc limit 0,50";
	$d->query($sql_tintuc);
	$news = $d->result_array();

	$count_sp = count($news);

	$curPage = isset($_GET['p']) ? $_GET['p'] : 1;
	$url = "nhuong-quyen.html/";
	$maxR = 4;
	$maxP = 5;
	$paging = paging_home($news, $url, $curPage, $maxR, $maxP);
	$news = $paging['source'];
}
$title_ttt = 'TEAM';
$title_bar = "TEAM - " . $title_bar;
