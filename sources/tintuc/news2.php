<?php if (!defined('_source')) die("Error");

if (isset($_REQUEST['idc'])) {	//Chi tiết
	$id =  intval(trim($_REQUEST['idc']));


	$sql_tintuc = "select * from #_product where hienthi=1 and id='$id' ";
	$d->query($sql_tintuc);
	$news = $d->fetch_array();

	$title_ttt = $news['ten_' . $lang];
	$title_ttt = $news['ten_' . $lang];
	$luotxem = $news['luotxem'] + 1;
	$sql_update = "update #_product SET luotxem=$luotxem where id='$id' ";
	$d->query($sql_update);

	if ($news['title'] != "")
		$title_bar = $news['title'];
	if ($news['description'] != "")
		$description = $news['description'];
	if ($news['keywords'] != "")
		$keywords = $news['keywords'];

	//Thông tin khác			
	$sql = "select * from #_product where hienthi=1 and id!='$id'  order by stt asc,id desc";
	$d->query($sql);
	$newskhac = $d->result_array();
} else {	//Danh sách			
	$sql_tintuc = "select * from #_product where hienthi=1  order by stt asc, id desc limit 0,50";
	$d->query($sql_tintuc);
	$news = $d->result_array();

	$count_sp = count($news);

	$curPage = isset($_GET['p']) ? $_GET['p'] : 1;
	$url = "huong-dan.html/";
	$maxR = 16;
	$maxP = 5;
	$paging = paging_home($news, $url, $curPage, $maxR, $maxP);
	$news = $paging['source'];
}
$title_ttt = 'PROJECTS';
$title_bar = "PROJECTS - " . $title_bar;
