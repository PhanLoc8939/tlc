<?php	if(!defined('_kiemtraweb') || _kiemtraweb!=$check_website) die("Error");

$act = (isset($_REQUEST['act'])) ? magic_quote($_REQUEST['act']) : "";

$chuoi_noi_curpage = ((@$_REQUEST['search']!="")?("&search=".$_REQUEST['search'].""):"").(($_REQUEST['curPage']!='')?'&curPage='.$_REQUEST['curPage']:'');

switch($act){
	//$c là biến lưu vào com để phân biệt tin tức -> là các số từ 0-99, $act là $_REQUEST['act'] của mỗi tin tức;
	//$width: độ rộng ảnh thumb , $height: độ cao ảnh thumb , $truonghop: là các trường hợp 1,2,3 khi tạo ảnh thumb.

	//--TIN TỨC-----------------------------------
	case "man":
		gets();
		$template = "trangtinh/item";
		break;
	case "add":
		$template = "trangtinh/item_add";
		break;
	case "edit":
		get();
		$template = "trangtinh/item_add";
		break;
	case "save":
		save();
		break;
	case "delete":
		delete();
		break;
	

}

#==TIN TỨC==================================
//$c là biến lưu vào com để phân biệt tin tức -> là các số từ 0-99, $act là $_REQUEST['act'] của mỗi tin tức;
//$width: độ rộng ảnh thumb , $height: độ cao ảnh thumb , $truonghop: là các trường hợp 1,2,3 khi tạo ảnh thumb.

function gets(){ 	//$c là biến lưu vào com để phân biệt tin tức, $act là $_REQUEST['act'] của mỗi tin tức;
	global $d, $items, $paging, $chuoi_noi_curpage;


	$sql = "select * from #_trangtinh  ";
	
	if($_REQUEST['search']!=''){
		$ten = magic_quote($_REQUEST['search']);
		$ten = str_replace('%20',' ',$ten);
		$sql.=" and ten like '%$ten%'";
	}
	$sql .= " order by id desc";
	
	$d->query($sql);
	$items = $d->result_array();
	
	
}

function get(){
	global $d, $item, $chuoi_noi_curpage;
	$id = isset($_GET['id']) ? intval($_GET['id']) : "";
	if(!$id)
		transfer("Không nhận được dữ liệu", "index.php?com=trangtinh&act=man".$chuoi_noi_curpage);
	
	$sql = "select * from #_trangtinh where  id='".$id."'";
	$d->query($sql);
	if($d->num_rows()==0) transfer("Dữ liệu không có thực", "index.php?com=trangtinh&act=man".$chuoi_noi_curpage);
	$item = $d->fetch_array();
}

function save(){
	global $d, $chuoi_noi_curpage;


	if(empty($_POST)) transfer("Không nhận được dữ liệu", "index.php?com=trangtinh&act=man".$chuoi_noi_curpage);
	$id = isset($_POST['id']) ? intval($_POST['id']) : "";
		

	
	
$data['ten'] =$_POST['ten'];

$data['tenkhongdau'] =$_POST['tenkhongdau'];
$data['noidung'] =$_POST['noidung'];

$data['ngaytao']=time();

	if($id){		

		$d->setTable('trangtinh');
		$d->setWhere('id', $id);

		if($d->update($data))
				transfer("Cập nhật dữ liệu thành công", "index.php?com=trangtinh&act=man".$chuoi_noi_curpage);
		else
			transfer("Cập nhật dữ liệu bị lỗi", "index.php?com=trangtinh&act=man".$chuoi_noi_curpage);
	}else{		
	
		

		$d->setTable('trangtinh');
		if($d->insert($data))
			redirect("index.php?com=trangtinh&act=man");
		else
			transfer("Lưu dữ liệu bị lỗi", "index.php?com=trangtinh&act=man".$chuoi_noi_curpage);
	}
}

function delete(){
	global $d, $chuoi_noi_curpage;
	
	if(isset($_GET['id'])){
		$id =  intval($_GET['id']);
		
		$d->reset();
		$sql = "select * from #_trangtinh where id=$id ";
		$d->query($sql);
		if($d->num_rows()>0){
			
			$sql = "delete from #_trangtinh where id=$id ";
			$d->query($sql);
		}
		
		if($d->query($sql))
			redirect("index.php?com=trangtinh&act=man".$chuoi_noi_curpage);
		else
			transfer("Xóa dữ liệu bị lỗi", "index.php?com=trangtinh&act=man".$chuoi_noi_curpage);
	}else transfer("Không nhận được dữ liệu", "index.php?com=trangtinh&act=man".$chuoi_noi_curpage);
}

?>