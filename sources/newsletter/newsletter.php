<?php

@define('_lib', './admin/lib/');
@define('_template', './templates/');
include_once _lib . "config.php";
include_once _lib . "functions.php";
include_once _lib . "q_functions.php";	//Các hàm bổ sung
include_once _lib . "class.database.php";
$d = new database($config['database']);

// if ($_POST['txthoten'])
// 	$hoten = htmlspecialchars(addslashes(trim(@$_POST['txthoten'])));
// if ($_POST['txtsdt'])

// 	$dienthoai = htmlspecialchars(addslashes(trim(@$_POST['txtsdt'])));
// if ($_POST['txtemail'])
$email = htmlspecialchars(addslashes(trim(@$_POST['txtemail'])));

$ngaytao = time();

// $sql = "select id from #_newsletter where dienthoai='$dienthoai'";
// $d->query($sql);
// if ($d->num_rows() > 0) {
// 	transfer("Số điện thoại này đã đăng ký", "trang-chu.html");
// 	return;
// }
$sql = "select id from #_newsletter where email='$email'";
$d->query($sql);
if ($d->num_rows() > 0) {
	transfer("Email này đã đăng ký", "index.html");
	return;
}
$d->reset();
$sql = "insert into #_newsletter (email,ngaytao,stt,hienthi) value('$email','$ngaytao',1,1)";
if ($d->query($sql)) {
	$_SESSION['email_dk'] = '1';
	$data['ten'] = 'Khách hàng có email <b>' . $_POST['txtemail'] . '</b> vừa đăng ký NHẬN TIN từ website.';
	$data['ngaytao'] = time();
	$d->setTable('thongbao');
	$d->insert($data);

	transfer("Bạn đã đăng ký thành công !", "index.html");
} else {
	transfer("Hệ thống đang bận, xin quý khách vui lòng thử lại sau", "index.html");
}
