<?php
if(!defined('_kiemtraweb') || _kiemtraweb!=$check_website) die('Eror');
$com = (isset($_REQUEST['com'])) ? addslashes($_REQUEST['com']) : "";
$act = (isset($_REQUEST['act'])) ? addslashes($_REQUEST['act']) : "";
$d = new database($config['database']);
$trangchu_index = 0;

switch($com){

	case 'about':		
	$source = "about/about";
	$template = "about/about";
	break;


	case 'service':		
	$source = "tintuc/news";
	$template = "tintuc/news";
	break;	

	case 'price':		
	$source = "tintuc/news1";
	$template = "tintuc/news1";
	break;	

	case 'project':		
	$source = "tintuc/news2";
	$template = "tintuc/news2";
	break;	

	case 'team':		
	$source = "tintuc/news3";
	$template = "tintuc/news3";
	break;
	
	case 'testimonial':		
	$source = "tintuc/news4";
	$template = "tintuc/news4";
	break;


	case 'contact':		
	$source = "contact/contact";
	$template = "contact/contact";
	break;	



	// case 'product':
	// $source = isset($_GET['id']) ?"sanpham/productnangcaodetail":"sanpham/productnangcao";
	// $template = isset($_GET['id']) ? "sanpham/product_detail1" : "sanpham/product";	
	// break;		


	// case 'gio-hang':
	// $trangchu_index = 2;
	// $source = "sanpham/giohang";
	// $template = "sanpham/giohang";
	// break;	


	// case 'thanh-toan':
	// $trangchu_index = 2;
	// $source = "sanpham/thanhtoan";
	// $template = "sanpham/thanhtoan2";
	// break;


	// case 'gui-don-hang':
	// $trangchu_index = 2;
	// $source = "sanpham/thanhtoan2";
	// break;

	// case 'hoan-thanh':
	// $trangchu_index = 2;
	// $source = "sanpham/thanhtoan";
	// $template = "sanpham/hoantatthanhtoan";
	// break;

	// case 'hinh-anh':
	// $trangchu_index = 2;
	// $source = "hinhanh/hinhanh";
	// $template = "hinhanh/hinhanh";
	// break;

		//USER
	// case 'dang-ky':
	// $source = "member/register";
	// $template = "member/register";
	// break;

	// case 'thong-tin':
	// $source = "member/thongtin";
	// $template = "member/thongtin";
	// break;

	// case 'dang-nhap':
	// $source = "member/login1";
	// $template = "member/login1";			
	// break;

	// case 'quen-mat-khau':
	// $source = "member/quenmatkhau";
	// $template = "member/quenmatkhau";			
	// break;

	// case 'xac-nhan-mat-khau':
	// $source = "member/xacnhanmatkhau";
	// break;

	// case 'logout':
	// $source = "member/logout";
	// break;

	// case 'activation':
	// $source = "member/activation";
	// $template = "index";
	// break;

		//ĐĂNG KÝ NHẬN TIN

	case 'dang-ky-nhan-tin':
	$source = "newsletter/newsletter";
	break;

	// case 'thong-bao-khi-co-hang':
	// $source = "newsletter/thongbaocohang";
	// break;

	// case 'dang-ky-nhan-tin111':
	// $source = "newsletter/newslettermailthanhvien";
	// break;

	// case 'dang-nhap1':
	// $template = "index";
	// break;

	// case 'trang-tinh':	
	// $source = "about/trangtinh";
	// $template = "about/trang-tinh";
	// break;

	case '':	
	$trangchu_index = 1;
	$source = "index";
	$template = "index";
	break;




}

	//CODE SÀI CHUNG CHO WEBSITE	


$d->reset();
$sql= "select photo,link from #_photo where hienthi=1 and com='chiase' order by stt asc, id desc";
$d->query($sql);
$mxhmain = $d->result_array();	


	//Thông tin Website



$sql = "select * from #_company where com='toado' limit 0,1";

$d->query($sql);

$maps = $d->fetch_array();	

$sql = "select * from #_company where com='company' limit 0,1";

$d->query($sql);

$company = $d->fetch_array();			



$title_bar = $company['title_'.$lang];

$description = $company['description_'.$lang];

$keywords = $company['keywords_'.$lang];

$image="http://".$config_url."/"._upload_company_l.$company["logore"]."";

if($source!="") include _source.$source.".php";		



?>