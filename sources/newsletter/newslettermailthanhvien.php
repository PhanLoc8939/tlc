<?php
@define('_lib', './admin/lib/');
@define('_template', './templates/');
include_once _lib . "config.php";
include_once _lib . "functions.php";
include_once _lib . "q_functions.php";	//Các hàm bổ sung
include_once _lib . "class.database.php";
$d = new database($config['database']);


if ($_POST['txtname'])
	$name = htmlspecialchars(addslashes(trim(@$_POST['txtname'])));

if ($_POST['txtemail'])
	$email = htmlspecialchars(addslashes(trim(@$_POST['txtemail'])));

if ($_POST['txtsubject'])
	$subject = htmlspecialchars(addslashes(trim(@$_POST['txtsubject'])));

// if ($_POST['dienthoai'])
// 	$dienthoai = htmlspecialchars(addslashes(trim(@$_POST['dienthoai'])));

if ($_POST['txtmessage'])
	$message = htmlspecialchars(addslashes(trim(@$_POST['txtmessage'])));


if ($email == "") {
	transfer("Email không được để trống", "trang-chu.html");
}
if (q_ckemail1($email) == 0) {
	transfer("Email không đúng định dạng", "trang-chu.html");
}

if ($name == "") {
	transfer("Họ tên không được để trống", "trang-chu.html");
}
$ngaytao = time();
// if ($subject == "") {
// 	transfer("Địa chỉ không được để trống", "trang-chu.html");
// }
// if ($dienthoai == "") {
// 	transfer("Điện thoại không được để trống", "trang-chu.html");
// }
// if ($noidung == "") {
// 	transfer("Nội dung không được để trống", "trang-chu.html");
// }

$sql = "select id from #_newsletter_mailthanhvien where hoten='$name' and  email='$email' and  tinnhan='$subject' and noidung='$message'";
$d->query($sql);
if ($d->num_rows() > 0) {
	transfer("Email này đã đăng ký", "index.html");
	return;
}
$d->reset();
$sql = "insert into #_newsletter_mailthanhvien (hoten,email,tinnhan,noidung,ngaytao,stt,hienthi) value('$name','$email','$subject','$message','$ngaytao',1,1)";
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
