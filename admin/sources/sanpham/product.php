<?php	if(!defined('_kiemtraweb') || _kiemtraweb!=$check_website) daysangtranglogin();

$act = (isset($_REQUEST['act'])) ? addslashes($_REQUEST['act']) : "";

#=========SẢN PHẨM==================================================
$chuoi_noi = ((@$_REQUEST['id_cat']!="")?("&id_cat=".$_REQUEST['id_cat'].""):"");
$chuoi_noi_curpage = ((@$_REQUEST['search']!="")?("&search=".$_REQUEST['search'].""):"").$chuoi_noi.((@$_REQUEST['curPage']!="")?("&curPage=".$_REQUEST['curPage'].""):"");





#=========DANH MỤC CẤP 1 ================================	
$chuoi_noi_curpage1 = ((@$_REQUEST['curPage']!="")?("&curPage=".$_REQUEST['curPage'].""):"");
#======DANH MỤC CẤP 2====================================
$chuoi_noi2 = ((@$_REQUEST['id_cat']!="")?("&id_cat=".$_REQUEST['id_cat'].""):"");
$chuoi_noi_curpage2 = ((@$_REQUEST['search']!="")?("&search=".$_REQUEST['search'].""):"").$chuoi_noi2.((@$_REQUEST['curPage']!="")?("&curPage=".$_REQUEST['curPage'].""):"");


#==========DANH MỤC CẤP 3================================	
$chuoi_noi3 = ((@$_REQUEST['id_cat']!="")?("&id_cat=".$_REQUEST['id_cat'].""):"").((@$_REQUEST['id_cat1']!="")?("&id_cat1=".$_REQUEST['id_cat1'].""):"");
$chuoi_noi_curpage3 = ((@$_REQUEST['search']!="")?("&search=".$_REQUEST['search'].""):"").$chuoi_noi3.((@$_REQUEST['curPage']!="")?("&curPage=".$_REQUEST['curPage'].""):"");

#==========DANH MỤC CẤP 4================================	
$chuoi_noi4 = ((@$_REQUEST['id_cat']!="")?("&id_cat=".$_REQUEST['id_cat'].""):"").((@$_REQUEST['id_cat1']!="")?("&id_cat1=".$_REQUEST['id_cat1'].""):"").((@$_REQUEST['id_cat2']!="")?("&id_cat2=".$_REQUEST['id_cat2'].""):"");
$chuoi_noi_curpage4 = ((@$_REQUEST['search']!="")?("&search=".$_REQUEST['search'].""):"").$chuoi_noi4.((@$_REQUEST['curPage']!="")?("&curPage=".$_REQUEST['curPage'].""):"");


#==========DANH MỤC CẤP 5================================	
$chuoi_noi5 = ((@$_REQUEST['id_cat']!="")?("&id_cat=".$_REQUEST['id_cat'].""):"").((@$_REQUEST['id_cat1']!="")?("&id_cat1=".$_REQUEST['id_cat1'].""):"").((@$_REQUEST['id_cat2']!="")?("&id_cat2=".$_REQUEST['id_cat2'].""):"").((@$_REQUEST['id_cat3']!="")?("&id_cat3=".$_REQUEST['id_cat3'].""):"");
$chuoi_noi_curpage5 = ((@$_REQUEST['search']!="")?("&search=".$_REQUEST['search'].""):"").$chuoi_noi5.((@$_REQUEST['curPage']!="")?("&curPage=".$_REQUEST['curPage'].""):"");



#==== chuoi photo ===#


$chuoi_noiphoto = ((@$_REQUEST['id_cat']!="")?("&id_cat=".$_REQUEST['id_cat'].""):"").((@$_REQUEST['type']!="")?("&type=".$_REQUEST['type'].""):"");
$chuoi_noi_curpagephoto = ((@$_REQUEST['search']!="")?("&search=".$_REQUEST['search'].""):"").$chuoi_noiphoto.((@$_REQUEST['curPage']!="")?("&curPage=".$_REQUEST['curPage'].""):"");

#==========HÌNH ẢNH SẢN PHẨM=============================================	

switch($act){
	#=========SẢN PHẨM==================================================
	case "man":
	get_items();		
	$template = "sanpham/product/items";
	break;
	case "add":		
	$template = "sanpham/product/item_add";
	break;
	case "edit":		
	get_item();
	$template = "sanpham/product/item_add";
	break;
	case "save":
	save_item();
	break;
	case "delete":
	delete_item();
	break;
	

	#=========DANH MỤC CẤP 1 ================================	
	case "man_cat":
	get_cats();		
	$template = "sanpham/product/cats";
	break;
	case "add_cat":		
	$template = "sanpham/product/cat_add";
	break;
	case "edit_cat":		
	get_cat();
	$template = "sanpham/product/cat_add";
	break;
	case "save_cat":
	save_cat();
	break;
	case "delete_cat":
	delete_cat();
	break;
	#==========DANH MỤC CẤP 2================================	
	case "man_cat1":
	get_cat1s();
	$template = "sanpham/product/cat1";
	break;
	case "add_cat1":		
	$template = "sanpham/product/cat1_add";
	break;
	case "edit_cat1":		
	get_cat1();
	$template = "sanpham/product/cat1_add";
	break;
	case "save_cat1":
	save_cat1();
	break;
	case "delete_cat1":
	delete_cat1();
	break;
	#==========DANH MỤC CẤP 3================================	
	case "man_cat2":
	get_cat2s();
	$template = "sanpham/product/cat2";
	break;
	case "add_cat2":		
	$template = "sanpham/product/cat2_add";
	break;
	case "edit_cat2":		
	get_cat2();
	$template = "sanpham/product/cat2_add";
	break;
	case "save_cat2":
	save_cat2();
	break;
	case "delete_cat2":
	delete_cat2();
	break;
	
	#==========DANH MỤC CẤP 4================================	
	case "man_cat3":
	get_cat3s();
	$template = "sanpham/product/cat3";
	break;
	case "add_cat3":		
	$template = "sanpham/product/cat3_add";
	break;
	case "edit_cat3":		
	get_cat3();
	$template = "sanpham/product/cat3_add";
	break;
	case "save_cat3":
	save_cat3();
	break;
	case "delete_cat3":
	delete_cat3();
	break;


	#==========DANH MỤC CẤP 4================================	
	case "man_cat4":
	get_cat4s();
	$template = "sanpham/product/cat4";
	break;
	case "add_cat4":		
	$template = "sanpham/product/cat4_add";
	break;
	case "edit_cat4":		
	get_cat4();
	$template = "sanpham/product/cat4_add";
	break;
	case "save_cat4":
	save_cat4();
	break;
	case "delete_cat4":
	delete_cat4();
	break;

	
	#==========HÌNH ẢNH SẢN PHẨM=============================================	
	case "man_photo":
	get_photos();
	$template = "sanpham/product/photo";
	break;
	case "add_photo":		
	$template = "sanpham/product/photo_add";
	break;
	case "edit_photo":		
	get_photo();
	$template = "sanpham/product/photo_edit";
	break;
	case "save_photo":
	save_photo();
	break;
	case "delete_photo":
	delete_photo();
	break;		

		#==========CẤU HÌNH SẢN PHẨM=============================================	
	case "man_photocauhinh":
	get_photocauhinhs();
	$template = "sanpham/product/photocauhinh";
	break;
	case "add_photocauhinh":		
	$template = "sanpham/product/photocauhinh_add";
	break;
	case "edit_photocauhinh":		
	get_photocauhinh();
	$template = "sanpham/product/photocauhinh_add";
	break;
	case "save_photocauhinh":
	save_photocauhinh();
	break;
	case "delete_photocauhinh":
	delete_photocauhinh();
	break;		
	

	default:
	$template = "index";
}

#SẢN PHẨM====================================

function get_items(){
	global $d, $items, $paging, $chuoi_noi_curpage, $total, $pageSize, $sort;
	
	thaydoi_hienthi('noibat','table_product','product','man',$chuoi_noi_curpage);
	thaydoi_hienthi('spbanchay','table_product','product','man',$chuoi_noi_curpage);
	thaydoi_hienthi('spmoi','table_product','product','man',$chuoi_noi_curpage);
	thaydoi_hienthi('hot','table_product','product','man',$chuoi_noi_curpage);
	thaydoi_hienthi('sale','table_product','product','man',$chuoi_noi_curpage);
	thaydoi_hienthi('hienthi','table_product','product','man',$chuoi_noi_curpage);		

	#-------------------------------------------------------------------------------
	$sql = "select * from #_product where id!=0 ";
	
	if((int)$_REQUEST['id_cat']!=''&&(int)$_REQUEST['id_cat']!=0)	
		$sql.=" and id_cat=".(int)$_REQUEST['id_cat']."";
	if((int)$_REQUEST['id_cat1']!=''&&(int)$_REQUEST['id_cat1']!=0)
		$sql.=" and id_cat1=".(int)$_REQUEST['id_cat1']."";
	if((int)$_REQUEST['id_cat2']!=''&&(int)$_REQUEST['id_cat2']!=0)	
		$sql.=" and id_cat2=".(int)$_REQUEST['id_cat2']."";		
	
	if($_REQUEST['search']!=''){
		$ten = magic_quote($_REQUEST['search']);
		$ten = str_replace('%20',' ',$ten);
		$sql.=" and ten_vi like '%$ten%' or tenkhongdau_vi like '%$ten%' ";
	}

	$sort = isset($_GET['sort']) ? $_GET['sort'] : '';
	switch ($sort) {
		case 'gia_asc':
		$sql.=" order by gia asc";
		break;
		case 'gia_desc':
		$sql.=" order by gia desc";
		break;
		case 'ten_asc':
		$sql.=" order by ten_vi asc";
		break;
		case 'ten_desc':
		$sql.=" order by ten_vi desc";
		break;
		default:
		$sql.=" order by id desc";
		break;
	}
	
	$d->query($sql);
	$items = $d->result_array();
	
	$curPage = isset($_GET['curPage']) ? $_GET['curPage'] : 1;
	$url="index.php?com=product&act=man";
	if(isset($_REQUEST['search']))
		$url .= "&search=".$_REQUEST['search'];	
	
	if(isset($_REQUEST['id_cat']))
		$url .= "&id_cat=".$_REQUEST['id_cat'];
	if(isset($_REQUEST['id_cat1']))
		$url .= "&id_cat1=".$_REQUEST['id_cat1'];
	if(isset($_REQUEST['id_cat2']))
		$url .= "&id_cat2=".$_REQUEST['id_cat2'];
	if(isset($_REQUEST['pageSize']))
		$url .= "&pageSize=".$_REQUEST['pageSize'];
	if(isset($_REQUEST['sort']))
		$url .= "&sort=".$_REQUEST['sort'];

	$pageSize = isset($_GET['pageSize']) ? $_GET['pageSize'] : 20;

	$maxP=10;
	$total = count($items);
	$paging=paging($items, $url, $curPage, $pageSize, $maxP);
	$items=$paging['source'];
}

function get_item(){
	global $d, $item, $chuoi_noi_curpage;
	$id = isset($_GET['id']) ? intval($_GET['id']) : "";
	if(!$id)
		transfer("Không nhận được dữ liệu", "index.php?com=product&act=man".$chuoi_noi_curpage);
	
	$sql = "select * from #_product where id=$id";
	$d->query($sql);
	if($d->num_rows()==0) transfer("Dữ liệu không có thực", "index.php?com=product&act=man".$chuoi_noi_curpage);
	$item = $d->fetch_array();
}

function save_item(){
	global $d, $name, $chuoi_noi, $chuoi_noi_curpage,$config;
	
	$file_name=q_tenhinh($_FILES['file']['name']);	
	$file_name1 =q_tenhinh($_FILES['file1']['name']);	
	$file_name2 =q_tenhinh($_FILES['file2']['name']);	
	if(empty($_POST)) transfer("Không nhận được dữ liệu", "index.php?com=product&act=man".$chuoi_noi_curpage);
	$id = isset($_POST['id']) ? intval($_POST['id']) : "";
	
	//Dữ liệu chung
	$data['id_cat'] = (int)$_POST['id_cat'];
	// $data['id_cat1'] = (int)$_POST['id_cat1'];
	// $data['id_cat2'] = (int)$_POST['id_cat2'];		
	$data['id_cat3'] = (int)$_POST['id_cat3'];	
	$data['id_cat4'] = (int)$_POST['id_cat4'];	


	$data['id_cat1'] = (int)$_POST['id_cat1'];
	
	$data['id_cat2'] = $id_cat2;




	$data['id_duan'] = (int)$_POST['id_duan'];	
	


	foreach ($config["lang"] as $key => $value)  {

		$data['ten_'.$value] = magic_quote($_POST['ten_'.$value]);
		$data['h1_'.$value] = magic_quote($_POST['h1_'.$value]);
		$data['h2_'.$value] = magic_quote($_POST['h2_'.$value]);
		$data['h3_'.$value] = magic_quote($_POST['h3_'.$value]);
		$data['title_'.$value] = magic_quote($_POST['title_'.$value]);
		$data['keywords_'.$value] = magic_quote($_POST['keywords_'.$value]);
		$data['description_'.$value] = magic_quote($_POST['description_'.$value]);

		$data['mota_'.$value] = magic_quote($_POST['mota_'.$value]);
		$data['noidung_'.$value] = magic_quote($_POST['noidung_'.$value]);
		$data['loaimau_'.$value] = magic_quote($_POST['loaimau_'.$value]);

		// $data['ungdung_'.$value] = magic_quote($_POST['ungdung_'.$value]);
		// $data['tinhchat_'.$value] = magic_quote($_POST['tinhchat_'.$value]);
		// $data['doben_'.$value] = magic_quote($_POST['doben_'.$value]);
		// $data['chiutai_'.$value] = magic_quote($_POST['chiutai_'.$value]);

		// $data['donggoi_'.$value] = magic_quote($_POST['donggoi_'.$value]);

		$data['tenkhongdau_'.$value] =q_bodautv($_POST['ten_'.$value]);

	}

	$data['mattien'] = magic_quote($_POST['mattien']);	

	$data['sotoilet'] = magic_quote($_POST['sotoilet']);	
	$data['vitri'] = magic_quote($_POST['vitri']);	


	$data['mausac'] = $_POST['mausac'];

	$gia = magic_quote($_POST['gia']);
	$data['gia'] = str_replace(".","",$gia);

	$giacu = magic_quote($_POST['giacu']);
	$data['giacu'] = str_replace(".","",$giacu);

	$data['phantramgia']=100- round(($gia/$giacu)*100,0);

	$data['id_xuatxu'] = magic_quote($_POST['id_xuatxu']);	

	$data['diachi'] = magic_quote($_POST['diachi']);	
	$data['masp'] = magic_quote($_POST['masp']);
	$data['bando'] = magic_quote($_POST['bando']);
	$data['tenlienhe'] = magic_quote($_POST['tenlienhe']);
	$data['diachilienhe'] = magic_quote($_POST['diachilienhe']);
	$data['dienthoailienhe'] = magic_quote($_POST['dienthoailienhe']);
	$data['didonglienhe'] = magic_quote($_POST['didonglienhe']);
	$data['emaillienhe'] = magic_quote($_POST['emaillienhe']);

	$data['id_tinh'] = magic_quote($_POST['id_tinh']);
	$data['id_quan'] = magic_quote($_POST['id_quan']);
	$data['id_phuong'] = magic_quote($_POST['id_phuong']);
	$data['hienthi'] = isset($_POST['hienthi']) ? 1 : 0;	
	$data['tinhtrang'] = isset($_POST['tinhtrang']) ? 1:0;	
	if($id){	


		
			//Sửa	
		if($photo = upload_image("file", 'jpg|png|gif|JPG|PNG|GIF|jpeg|JPEG', _upload_sanpham,$file_name)){
			$data['photo'] = $photo;
			// dongdauanh($data['photo'],_upload_sanpham);	

			$data['thumbchitiet'] = create_thumb($data['photo'], 400, 349, _upload_sanpham,$file_name,2);
			
			$d->setTable('product');
			$d->setWhere('id', $id);
			$d->select();
			if($d->num_rows()>0){
				$row = $d->fetch_array();
				delete_file(_upload_sanpham.$row['photo']);

				delete_file(_upload_sanpham.$row['thumbchitiet']);
			}			
		}
		
		if($photo1 = upload_image("file2", 'jpg|png|gif|JPG|PNG|GIF|jpeg|JPEG', _upload_sanpham,$file_name2)){
			$data['photo1'] = $photo1;
			 // dongdauanh($data['photo'],_upload_sanpham);	


			
			$d->setTable('product');
			$d->setWhere('id', $id);
			$d->select();
			if($d->num_rows()>0){
				$row = $d->fetch_array();
				delete_file(_upload_sanpham.$row['photo1']);


			}			
		}
		if($photo2 = upload_image("file3", 'jpg|png|gif|JPG|PNG|GIF|jpeg|JPEG', _upload_sanpham,$file_name3)){
			$data['photo2'] = $photo2;
			// dongdauanh($data['photo'],_upload_sanpham);	


			
			$d->setTable('product');
			$d->setWhere('id', $id);
			$d->select();
			if($d->num_rows()>0){
				$row = $d->fetch_array();
				delete_file(_upload_sanpham.$row['photo2']);


			}			
		}
		if($icon = upload_image("file1", 'jpg|gif|png|jpeg|doc|docx||pdf|xlsx', _upload_sanpham,$file_name1)){
			$data['icon'] = $icon;	
			
			$d->setTable('product');
			$d->setWhere('id', $id);
			$d->select();
			if($d->num_rows()>0){
				$row = $d->fetch_array();
				delete_file(_upload_sanpham.$row['icon']);
				
			}			
		}
		//Riêng						
		$data['id_xuatxu'] = magic_quote($_POST['id_xuatxu']);	
		
		$data['ngaysua'] = time();
		$data['ngaytao'] = time();
		$data['stt'] = magic_quote($_POST['stt']);

		$d->setTable('product');
		$d->setWhere('id', $id);
		if($d->update($data)){		




			transfer("Cập nhật dữ liệu thành công", "index.php?com=product&act=man".$chuoi_noi_curpage);
		}else
		transfer("Cập nhật dữ liệu bị lỗi", "index.php?com=product&act=man".$chuoi_noi_curpage);
	}else{		
		if($photo = upload_image("file", 'jpg|png|gif|JPG|PNG|GIF|jpeg|JPEG', _upload_sanpham,$file_name)){
			$data['photo'] = $photo;
			 // dongdauanh($data['photo'],_upload_sanpham);	
			$data['thumb'] = create_thumb($data['photo'], 200, 200, _upload_sanpham,$file_name,2);
			$data['thumbchitiet'] = create_thumb($data['photo'], 400, 349, _upload_sanpham,$file_name,2);
		}
		
		if($icon = upload_image("file1", 'jpg|gif|png|jpeg|doc|docx||pdf|xlsx', _upload_sanpham,$file_name1)){
			$data['icon'] = $icon;
		}



		// }
		if($photo1 = upload_image("file2", 'jpg|png|gif|JPG|PNG|GIF|jpeg|JPEG', _upload_sanpham,$file_name2)){
			$data['photo1'] = $photo1;
			
			
			
		}if($photo2 = upload_image("file3", 'jpg|png|gif|JPG|PNG|GIF|jpeg|JPEG', _upload_sanpham,$file_name3)){
			$data['photo2'] = $photo2;
			
			
			
		}

		$data['stt'] = magic_quote($_POST['stt']);
		$data['phantramgia']=100- round(($gia/$giacu)*100,0);

		$data['mausac'] = $_POST['mausac'];
		//Riêng				
		$data['ngaytao'] = time();
		$data['tinhtrang'] = 0;	
		
		$d->setTable('product');
		if($d->insert($data)){

			transfer("Thêm sản phẩm thành công", "index.php?com=product&act=man".$chuoi_noi);
		}else
		transfer("Lưu dữ liệu bị lỗi", "index.php?com=product&act=man".$chuoi_noi_curpage);
	}
}

function delete_product($id){
	global $d;	
	$d->reset();	
	
	if($id!=0 && $id!=''){
		//Xóa ảnh con của nó
		$sql = "select photo,thumb from #_product_photo where id_cat=$id";
		$d->query($sql);
		if($d->num_rows()>0){
			while($row = $d->fetch_array()){
				delete_file(_upload_sanpham.$row['photo']);
				delete_file(_upload_sanpham.$row['thumb']);

			}
		}
		$sql = "delete from #_product_photo where id_cat=$id";
		$d->query($sql);

		//Xóa ảnh của nó
		$sql = "select photo,thumb,thumbchitiet from #_product where id=$id";
		$d->query($sql);
		if($d->num_rows()>0){
			while($row = $d->fetch_array()){
				delete_file(_upload_sanpham.$row['photo']);
				delete_file(_upload_sanpham.$row['thumb']);
				delete_file(_upload_sanpham.$row['thumbchitiet']);
			}			
		}	
		$sql = "delete from #_product where id=$id";
		if($d->query($sql))
			return 1;
		return 0;
	}
	return 2;
}

function delete_item(){
	global $d,$chuoi_noi_curpage;	
	
	if(isset($_GET['id'])){
		$id =  intval($_GET['id']);	
		
		if(delete_product($id)==0 || delete_product($id)==2)
			transfer("Xóa dữ liệu bị lỗi", "index.php?com=product&act=man".$chuoi_noi_curpage);
		redirect("index.php?com=product&act=man".$chuoi_noi_curpage);
	}else if (isset($_GET['listid'])==true){
		$listid = explode(",",$_GET['listid']); 
		for ($i=0 ; $i<count($listid) ; $i++){
			$idTin=$listid[$i]; 
			$id =  intval($idTin);	
			if(delete_product($id)==0)
				transfer("Xóa dữ liệu bị lỗi", "index.php?com=product&act=man".$chuoi_noi_curpage);
		}
		transfer("Xóa dữ liệu thành công", "index.php?com=product&act=man".$chuoi_noi_curpage);
	}
	else transfer("Không nhận được dữ liệu", "index.php?com=product&act=man".$chuoi_noi_curpage);
}


#DANH MỤC CẤP 1====================================

function get_cats(){
	global $d, $items, $paging,$chuoi_noi_curpage1;
	
	thaydoi_hienthi('hienthi','table_product_cat','product','man_cat',$chuoi_noi_curpage1);
	thaydoi_hienthi('hot','table_product_cat','product','man_cat',$chuoi_noi_curpage1);
	thaydoi_hienthi('noibat','table_product_cat','product','man_cat',$chuoi_noi_curpage1);

	$sql = "select * from #_product_cat where com='cat' ";
	if($_REQUEST['search']!=''){
		$ten = magic_quote($_REQUEST['search']);
		$ten = str_replace('%20',' ',$ten);
		$sql.=" and ten_vi like '%$ten%'";
	}
	$sql .= " order by stt asc,id desc";
	
	$d->query($sql);
	$items = $d->result_array();
	
	$curPage = isset($_GET['curPage']) ? $_GET['curPage'] : 1;
	$url="index.php?com=product&act=man_cat";
	if(isset($_REQUEST['search']))
		$url .= "&search=".$_REQUEST['search'];	
	$maxR=20;
	$maxP=10;
	$paging=paging($items, $url, $curPage, $maxR, $maxP);
	$items=$paging['source'];
}

function get_cat(){
	global $d, $item,$chuoi_noi_curpage1;
	$id = isset($_GET['id']) ? intval($_GET['id']) : "";
	if(!$id)
		transfer("Không nhận được dữ liệu", "index.php?com=product&act=man_cat".$chuoi_noi_curpage1);
	
	$sql = "select * from #_product_cat where id=$id";
	$d->query($sql);
	if($d->num_rows()==0) transfer("Dữ liệu không có thực", "index.php?com=product&act=man_cat".$chuoi_noi_curpage1);
	$item = $d->fetch_array();	
}

function save_cat(){
	global $d,$chuoi_noi_curpage1,$config;		
	$file_name=q_tenhinh($_FILES['file']['name']);
	$file_name1=q_tenhinh($_FILES['file1']['name']);
	$file_name2=q_tenhinh($_FILES['file2']['name']);
	if(empty($_POST)) transfer("Không nhận được dữ liệu", "index.php?com=product&act=man_cat".$chuoi_noi_curpage1);
	$id = isset($_POST['id']) ? intval($_POST['id']) : "";
	
	//Dữ liệu chung
	$data['com'] = 'cat';
	
	

	
	
	foreach ($config["lang"] as $key => $value)  {

		$data['ten_'.$value] = magic_quote($_POST['ten_'.$value]);
		$data['h1_'.$value] = magic_quote($_POST['h1_'.$value]);
		$data['h2_'.$value] = magic_quote($_POST['h2_'.$value]);
		$data['h3_'.$value] = magic_quote($_POST['h3_'.$value]);
		$data['title_'.$value] = magic_quote($_POST['title_'.$value]);

		$data['keywords_'.$value] = magic_quote($_POST['keywords_'.$value]);
		$data['description_'.$value] = magic_quote($_POST['description_'.$value]);
		$data['mota_'.$value] = magic_quote($_POST['mota_'.$value]);
            // $data['noidung_'.$value] = magic_quote($_POST['noidung_'.$value]);
            //   $data['diachi_'.$value] = magic_quote($_POST['diachi_'.$value]);
		$data['tenkhongdau_'.$value] = q_bodautv($_POST['ten_'.$value]);
	}
	
	$data['stt'] = magic_quote($_POST['stt']);
	$data['mausac'] = magic_quote($_POST['mausac']);
	$data['hienthi'] = isset($_POST['hienthi']) ? 1 : 0;
	
	if($id){
		if($photo = upload_image("file", 'jpg|jpeg|png|gif|JPG|JPEG|PNG|GIF', _upload_sanpham,$file_name)){
			$data['photo'] = $photo;

			$d->setTable('product_cat');
			$d->setWhere('id', $id);
			$d->select();
			if($d->num_rows()>0){
				$row = $d->fetch_array();
				delete_file(_upload_sanpham.$row['photo']);				
			}
		}									
		
		
		if($hinhnho = upload_image("file1", 'jpg|jpeg|png|gif|JPG|JPEG|PNG|GIF', _upload_sanpham,$file_name1)){
			$data['hinhnho'] = $hinhnho;			
			$d->setTable('product_cat');
			$d->setWhere('id', $id);
			$d->select();
			if($d->num_rows()>0){
				$row = $d->fetch_array();
				delete_file(_upload_sanpham.$row['hinhnho']);				
			}
		}	
		
		if($bannertrong = upload_image("file2", 'jpg|jpeg|png|gif|JPG|JPEG|PNG|GIF', _upload_sanpham,$file_name2)){
			$data['bannertrong'] = $bannertrong;			
			$d->setTable('product_cat');
			$d->setWhere('id', $id);
			$d->select();
			if($d->num_rows()>0){
				$row = $d->fetch_array();
				delete_file(_upload_sanpham.$row['bannertrong']);				
			}
		}	

		
		$d->setTable('product_cat');
		$d->setWhere('id', $id);
		if($d->update($data))
			redirect("index.php?com=product&act=man_cat".$chuoi_noi_curpage1);
		else
			transfer("Cập nhật dữ liệu bị lỗi", "index.php?com=product&act=man_cat".$chuoi_noi_curpage1);
	}else{
		if($photo = upload_image("file", 'jpg|jpeg|png|gif|JPG|JPEG|PNG|GIF', _upload_sanpham,$file_name)){
			$data['photo'] = $photo;
		}

		if($hinhnho = upload_image("file1", 'jpg|jpeg|png|gif|JPG|JPEG|PNG|GIF', _upload_sanpham,$file_name1)){
			$data['hinhnho'] = $hinhnho;						
		}
		if($bannertrong = upload_image("file2", 'jpg|jpeg|png|gif|JPG|JPEG|PNG|GIF', _upload_sanpham,$file_name2)){
			$data['bannertrong'] = $bannertrong;						
		}
		
		$d->setTable('product_cat');
		if($d->insert($data))
			redirect("index.php?com=product&act=man_cat");
		else
			transfer("Lưu dữ liệu bị lỗi", "index.php?com=product&act=man_cat".$chuoi_noi_curpage1);
	}
}

function delete_cat(){
	global $d, $chuoi_noi_curpage1;
	if(isset($_GET['id'])){
		$id =  intval($_GET['id']);
		$d->reset();	
		
		//Xóa ảnh con của sản phẩm con
		$sql = "select id from #_product where id_cat=$id";
		$d->query($sql);
		$row1 = $d->fetch_array();
		
		if(delete_product($row1['id'])==0)
			transfer("Xóa dữ liệu bị lỗi", "index.php?com=product&act=man_cat".$chuoi_noi_curpage1);
		
		//Xóa danh mục cấp 2 (danh mục cấp 2)							
		$sql = "delete from #_product_cat where com='cat1' and id_cat=$id";
		$d->query($sql);
		//Xóa danh mục cấp 3 (danh mục cấp 3)							
		$sql = "delete from #_product_cat where com='cat2' and id_cat=$id";
		$d->query($sql);
		
		//Xóa chính nó	(danh mục cấp 1)	
		$sql = "select photo from #_product_cat where id='".$row['id']."'";
		$d->query($sql);
		if($d->num_rows()>0){
			while($row = $d->fetch_array()){
				delete_file(_upload_sanpham.$row['photo']);
			}
		}

		$sql = "delete from #_product_cat where id=$id";
		if($d->query($sql))
			redirect("index.php?com=product&act=man_cat".$chuoi_noi_curpage1);
		else
			transfer("Xóa dữ liệu bị lỗi", "index.php?com=product&act=man_cat".$chuoi_noi_curpage1);
	}else transfer("Không nhận được dữ liệu", "index.php?com=product&act=man_cat".$chuoi_noi_curpage1);
}

#======DANH MỤC CẤP 2====================================

function get_cat1s(){
	global $d, $items, $paging, $chuoi_noi_curpage2;
	
	thaydoi_hienthi('hienthi','table_product_cat','product','man_cat1',$chuoi_noi_curpage2);
	thaydoi_hienthi('noibat','table_product_cat','product','man_cat1',$chuoi_noi_curpage2);
	
	
	$sql = "select * from #_product_cat where com='cat1'";

	if((int)$_REQUEST['id_cat']!='')
		$sql.=" and id_cat=".$_REQUEST['id_cat']."";
	
	if($_REQUEST['search']!=''){
		$ten = magic_quote($_REQUEST['search']);
		$ten = str_replace('%20',' ',$ten);
		$sql.=" and ten_vi like '%$ten%'";
	}
	
	$sql.=" order by stt asc,id desc";
	
	$d->query($sql);
	$items = $d->result_array();
	
	$curPage = isset($_GET['curPage']) ? $_GET['curPage'] : 1;
	$url="index.php?com=product&act=man_cat1";
	if(isset($_REQUEST['id_cat']))
		$url .= "&id_cat=".$_REQUEST['id_cat'];		
	if(isset($_REQUEST['search']))
		$url .= "&search=".$_REQUEST['search'];		
	$maxR=20;
	$maxP=10;
	$paging=paging($items, $url, $curPage, $maxR, $maxP);
	$items=$paging['source'];
}

function get_cat1(){
	global $d, $item, $chuoi_noi_curpage2;
	$id = isset($_GET['id']) ? intval($_GET['id']) : "";
	if(!$id)
		transfer("Không nhận được dữ liệu", "index.php?com=product&act=man_cat1".$chuoi_noi_curpage2);
	
	$sql = "select * from #_product_cat where id=$id";
	$d->query($sql);
	if($d->num_rows()==0) transfer("Dữ liệu không có thực", "index.php?com=product&act=man_cat1".$chuoi_noi_curpage2);
	$item = $d->fetch_array();	
}

function save_cat1(){
	global $d, $chuoi_noi_curpage2, $chuoi_noi2,$config;
	$file_name=q_tenhinh($_FILES['file']['name']);	

	$file_name1=q_tenhinh($_FILES['file1']['name']);
	if(empty($_POST)) transfer("Không nhận được dữ liệu", "index.php?com=product&act=man_cat1".$chuoi_noi_curpage2);
	$id = isset($_POST['id']) ? intval($_POST['id']) : "";
	//Dùng chung
	$data['com'] = 'cat1';
	$data['id_cat'] = intval($_POST['id_cat']);

	$mucloc = $_POST['mucloc'];
	//Nối thành 1 chuỗi
	$mucloc = implode(",", $mucloc);
	
	
	$data['mucloc'] = $mucloc;

	foreach ($config["lang"] as $key => $value)  {

		$data['ten_'.$value] = magic_quote($_POST['ten_'.$value]);
		$data['h1_'.$value] = magic_quote($_POST['h1_'.$value]);
		$data['h2_'.$value] = magic_quote($_POST['h2_'.$value]);
		$data['h3_'.$value] = magic_quote($_POST['h3_'.$value]);
		$data['title_'.$value] = magic_quote($_POST['title_'.$value]);

		$data['keywords_'.$value] = magic_quote($_POST['keywords_'.$value]);
		$data['description_'.$value] = magic_quote($_POST['description_'.$value]);
		$data['mota_'.$value] = magic_quote($_POST['mota_'.$value]);
            // $data['noidung_'.$value] = magic_quote($_POST['noidung_'.$value]);
            //   $data['diachi_'.$value] = magic_quote($_POST['diachi_'.$value]);
		$data['tenkhongdau_'.$value] = q_bodautv($_POST['ten_'.$value]);
	}
	
	$data['mau'] = magic_quote($_POST['mau']);
	$data['stt'] = magic_quote($_POST['stt']);
	$data['hienthi'] = isset($_POST['hienthi']) ? 1 : 0;
	
	if($id){	
		
		if($photo = upload_image("file", 'jpg|jpeg|png|gif|JPG|JPEG|PNG|GIF', _upload_sanpham,$file_name)){
			$data['photo'] = $photo;			
			$d->setTable('product_cat');
			$d->setWhere('id', $id);
			$d->select();
			if($d->num_rows()>0){
				$row = $d->fetch_array();
				delete_file(_upload_sanpham.$row['photo']);				
			}
		}		
		if($hinhnho = upload_image("file1", 'jpg|jpeg|png|gif|JPG|JPEG|PNG|GIF', _upload_sanpham,$file_name1)){
			$data['hinhnho'] = $hinhnho;			
			$d->setTable('product_cat');
			$d->setWhere('id', $id);
			$d->select();
			if($d->num_rows()>0){
				$row = $d->fetch_array();
				delete_file(_upload_sanpham.$row['hinhnho']);				
			}
		}	
		
		
		$d->setTable('product_cat');
		$d->setWhere('id', $id);
		if($d->update($data))
			redirect("index.php?com=product&act=man_cat1".$chuoi_noi_curpage2);
		else
			transfer("Cập nhật dữ liệu bị lỗi", "index.php?com=product&act=man_cat1".$chuoi_noi_curpage2);
	}else{	
		if($photo = upload_image("file", 'jpg|jpeg|png|gif|JPG|JPEG|PNG|GIF', _upload_sanpham,$file_name)){
			$data['photo'] = $photo;						
		}
		if($hinhnho = upload_image("file1", 'jpg|jpeg|png|gif|JPG|JPEG|PNG|GIF', _upload_sanpham,$file_name1)){
			$data['hinhnho'] = $hinhnho;						
		}
		
		$d->setTable('product_cat');
		if($d->insert($data))
			redirect("index.php?com=product&act=man_cat1".$chuoi_noi2);
		else
			transfer("Lưu dữ liệu bị lỗi", "index.php?com=product&act=man_cat1".$chuoi_noi_curpage2);
	}
}

function delete_cat1(){
	global $d, $chuoi_noi_curpage2;
	if(isset($_GET['id'])){
		$id =  intval($_GET['id']);
		$d->reset();
		
		//Xóa ảnh con của nó
		$sql = "select id from #_product where id_cat1=$id";
		$d->query($sql);
		$row = $d->fetch_array();
		if(delete_product($row['id'])==0)
			transfer("Xóa dữ liệu bị lỗi", "index.php?com=product&act=man_cat1".$chuoi_noi_curpage2);
		
		//Xóa danh mục cấp 3 (danh mục cấp 3)							
		$sql = "delete from #_product_cat where com='cat2' and id_cat1=$id";
		$d->query($sql);
		
		//Xóa chính nó (danh mục cấp 2)			
		$sql = "delete from #_product_cat where id=$id";
		if($d->query($sql))
			redirect("index.php?com=product&act=man_cat1".$chuoi_noi_curpage2);
		else
			transfer("Xóa dữ liệu bị lỗi", "index.php?com=product&act=man_cat1".$chuoi_noi_curpage2);
	}else transfer("Không nhận được dữ liệu", "index.php?com=product&act=man_cat1".$chuoi_noi_curpage2);
}

#====================================


#======DANH MỤC CẤP 3====================================
function get_cat2s(){
	global $d, $items, $paging,$chuoi_noi_curpage3;
	
	thaydoi_hienthi('hienthi','table_product_cat','product','man_cat2',$chuoi_noi_curpage3);
	thaydoi_hienthi('noibat','table_product_cat','product','man_cat2',$chuoi_noi_curpage3);	
	
	$sql = "select * from #_product_cat where com='cat2'";

	if((int)$_REQUEST['id_cat']!='')
		$sql.=" and id_cat=".$_REQUEST['id_cat']."";
	if((int)$_REQUEST['id_cat1']!='')
		$sql.=" and id_cat1=".$_REQUEST['id_cat1']."";
	
	if($_REQUEST['search']!=''){
		$ten = magic_quote($_REQUEST['search']);
		$ten = str_replace('%20',' ',$ten);
		$sql.=" and ten_vi like '%$ten%'";
	}

	$sql.=" order by stt asc,id desc";
	
	$d->query($sql);
	$items = $d->result_array();
	
	$curPage = isset($_GET['curPage']) ? $_GET['curPage'] : 1;
	$url="index.php?com=product&act=man_cat2";
	if(isset($_REQUEST['search']))
		$url .= "&search=".$_REQUEST['search'];	

	if(isset($_REQUEST['id_cat']))
		$url .= "&id_cat=".$_REQUEST['id_cat'];
	if(isset($_REQUEST['id_cat1']))
		$url .= "&id_cat1=".$_REQUEST['id_cat1'];
	$maxR=20;
	$maxP=10;
	$paging=paging($items, $url, $curPage, $maxR, $maxP);
	$items=$paging['source'];
}

function get_cat2(){
	global $d, $item,$chuoi_noi_curpage3;
	$id = isset($_GET['id']) ? intval($_GET['id']) : "";
	if(!$id)
		transfer("Không nhận được dữ liệu", "index.php?com=product&act=man_cat2".$chuoi_noi_curpage3);
	
	$sql = "select * from #_product_cat where id=$id";
	$d->query($sql);
	if($d->num_rows()==0) transfer("Dữ liệu không có thực", "index.php?com=product&act=man_cat2".$chuoi_noi_curpage3);
	$item = $d->fetch_array();	
}

function save_cat2(){
	global $d,$chuoi_noi3,$chuoi_noi_curpage3,$config;

	$file_name1=q_tenhinh($_FILES['file1']['name']);
	if(empty($_POST)) transfer("Không nhận được dữ liệu", "index.php?com=product&act=man_cat2".$chuoi_noi_curpage3);
	$id = isset($_POST['id']) ? intval($_POST['id']) : "";
	//Dùng chung
	$data['com'] = 'cat2';
	$data['id_cat'] = intval($_POST['id_cat']);
	$data['id_cat1'] = intval($_POST['id_cat1']);
	foreach ($config["lang"] as $key => $value)  {

		$data['ten_'.$value] = magic_quote($_POST['ten_'.$value]);
		$data['h1_'.$value] = magic_quote($_POST['h1_'.$value]);
		$data['h2_'.$value] = magic_quote($_POST['h2_'.$value]);
		$data['h3_'.$value] = magic_quote($_POST['h3_'.$value]);
		$data['title_'.$value] = magic_quote($_POST['title_'.$value]);

		$data['keywords_'.$value] = magic_quote($_POST['keywords_'.$value]);
		$data['description_'.$value] = magic_quote($_POST['description_'.$value]);
		$data['mota_'.$value] = magic_quote($_POST['mota_'.$value]);
            // $data['noidung_'.$value] = magic_quote($_POST['noidung_'.$value]);
            //   $data['diachi_'.$value] = magic_quote($_POST['diachi_'.$value]);
		$data['tenkhongdau_'.$value] = q_bodautv($_POST['ten_'.$value]);
	}
	
	$data['stt'] = magic_quote($_POST['stt']);
	$data['hienthi'] = isset($_POST['hienthi']) ? 1 : 0;
	
	if($id){					


		if($hinhnho = upload_image("file1", 'jpg|jpeg|png|gif|JPG|JPEG|PNG|GIF', _upload_sanpham,$file_name1)){
			$data['hinhnho'] = $hinhnho;			
			$d->setTable('product_cat');
			$d->setWhere('id', $id);
			$d->select();
			if($d->num_rows()>0){
				$row = $d->fetch_array();
				delete_file(_upload_sanpham.$row['hinhnho']);				
			}
		}	

		$d->setTable('product_cat');
		$d->setWhere('id', $id);
		if($d->update($data))
			redirect("index.php?com=product&act=man_cat2".$chuoi_noi_curpage3);
		else
			transfer("Cập nhật dữ liệu bị lỗi", "index.php?com=product&act=man_cat2".$chuoi_noi_curpage3);
	}else{		


		if($hinhnho = upload_image("file1", 'jpg|jpeg|png|gif|JPG|JPEG|PNG|GIF', _upload_sanpham,$file_name1)){
			$data['hinhnho'] = $hinhnho;						
		}
		$d->setTable('product_cat');
		if($d->insert($data))
			redirect("index.php?com=product&act=man_cat2".$chuoi_noi3);
		else
			transfer("Lưu dữ liệu bị lỗi", "index.php?com=product&act=man_cat2".$chuoi_noi_curpage3);
	}
}

function delete_cat2(){
	global $d,$chuoi_noi_curpage3;
	if(isset($_GET['id'])){
		$id =  intval($_GET['id']);
		$d->reset();
		
		//Xóa ảnh con của nó
		$sql = "select id from #_product where id_cat2=$id";
		$d->query($sql);
		$row = $d->fetch_array();
		if(delete_product($row['id'])==0)
			transfer("Xóa dữ liệu bị lỗi", "index.php?com=product&act=man".$chuoi_noi_curpage3);

		//Xóa chính nó (danh mục cấp 2)			
		$sql = "delete from #_product_cat where id=$id";
		if($d->query($sql))
			redirect("index.php?com=product&act=man_cat2".$chuoi_noi_curpage3);
		else
			transfer("Xóa dữ liệu bị lỗi", "index.php?com=product&act=man_cat2".$chuoi_noi_curpage3);
	}else transfer("Không nhận được dữ liệu", "index.php?com=product&act=man_cat2".$chuoi_noi_curpage3);
}

#====================================



#======DANH MỤC CẤP 4====================================
function get_cat3s(){
	global $d, $items, $paging,$chuoi_noi_curpage4;
	
	thaydoi_hienthi('hienthi','table_product_cat','product','man_cat3',$chuoi_noi_curpage3);
	thaydoi_hienthi('noibat','table_product_cat','product','man_cat3',$chuoi_noi_curpage3);	
	
	$sql = "select * from #_product_cat where com='cat3'";

	if((int)$_REQUEST['id_cat']!='')
		$sql.=" and id_cat=".$_REQUEST['id_cat']."";
	if((int)$_REQUEST['id_cat1']!='')
		$sql.=" and id_cat1=".$_REQUEST['id_cat1']."";
	if((int)$_REQUEST['id_cat2']!='')
		$sql.=" and id_cat2=".$_REQUEST['id_cat2']."";
	if($_REQUEST['search']!=''){
		$ten = magic_quote($_REQUEST['search']);
		$ten = str_replace('%20',' ',$ten);
		$sql.=" and ten_vi like '%$ten%'";
	}

	$sql.=" order by stt asc,id desc";
	
	$d->query($sql);
	$items = $d->result_array();
	
	$curPage = isset($_GET['curPage']) ? $_GET['curPage'] : 1;
	$url="index.php?com=product&act=man_cat3";
	if(isset($_REQUEST['search']))
		$url .= "&search=".$_REQUEST['search'];	

	if(isset($_REQUEST['id_cat']))
		$url .= "&id_cat=".$_REQUEST['id_cat'];
	if(isset($_REQUEST['id_cat1']))
		$url .= "&id_cat1=".$_REQUEST['id_cat1'];
	if(isset($_REQUEST['id_cat2']))
		$url .= "&id_cat2=".$_REQUEST['id_cat2'];

	$maxR=20;
	$maxP=10;
	$paging=paging($items, $url, $curPage, $maxR, $maxP);
	$items=$paging['source'];
}

function get_cat3(){
	global $d, $item,$chuoi_noi_curpage4;
	$id = isset($_GET['id']) ? intval($_GET['id']) : "";
	if(!$id)
		transfer("Không nhận được dữ liệu", "index.php?com=product&act=man_cat3".$chuoi_noi_curpage4);
	
	$sql = "select * from #_product_cat where id=$id";
	$d->query($sql);
	if($d->num_rows()==0) transfer("Dữ liệu không có thực", "index.php?com=product&act=man_cat3".$chuoi_noi_curpage4);
	$item = $d->fetch_array();	
}

function save_cat3(){
	global $d,$chuoi_noi4,$chuoi_noi_curpage4,$config;

	$file_name1=q_tenhinh($_FILES['file1']['name']);
	if(empty($_POST)) transfer("Không nhận được dữ liệu", "index.php?com=product&act=man_cat4".$chuoi_noi_curpage4);
	$id = isset($_POST['id']) ? intval($_POST['id']) : "";
	//Dùng chung
	$data['com'] = 'cat3';
	$data['id_cat'] = intval($_POST['id_cat']);
	$data['id_cat1'] = intval($_POST['id_cat1']);
	$data['id_cat2'] = intval($_POST['id_cat2']);
	foreach ($config["lang"] as $key => $value)  {

		$data['ten_'.$value] = magic_quote($_POST['ten_'.$value]);
		$data['h1_'.$value] = magic_quote($_POST['h1_'.$value]);
		$data['h2_'.$value] = magic_quote($_POST['h2_'.$value]);
		$data['h3_'.$value] = magic_quote($_POST['h3_'.$value]);
		$data['title_'.$value] = magic_quote($_POST['title_'.$value]);

		$data['keywords_'.$value] = magic_quote($_POST['keywords_'.$value]);
		$data['description_'.$value] = magic_quote($_POST['description_'.$value]);
		$data['mota_'.$value] = magic_quote($_POST['mota_'.$value]);
            // $data['noidung_'.$value] = magic_quote($_POST['noidung_'.$value]);
            //   $data['diachi_'.$value] = magic_quote($_POST['diachi_'.$value]);
		$data['tenkhongdau_'.$value] = q_bodautv($_POST['ten_'.$value]);
	}
	
	$data['stt'] = magic_quote($_POST['stt']);
	$data['hienthi'] = isset($_POST['hienthi']) ? 1 : 0;
	
	if($id){		


		if($hinhnho = upload_image("file1", 'jpg|jpeg|png|gif|JPG|JPEG|PNG|GIF', _upload_sanpham,$file_name1)){
			$data['hinhnho'] = $hinhnho;			
			$d->setTable('product_cat');
			$d->setWhere('id', $id);
			$d->select();
			if($d->num_rows()>0){
				$row = $d->fetch_array();
				delete_file(_upload_sanpham.$row['hinhnho']);				
			}
		}				
		$d->setTable('product_cat');
		$d->setWhere('id', $id);
		if($d->update($data))
			redirect("index.php?com=product&act=man_cat3".$chuoi_noi_curpage4);
		else
			transfer("Cập nhật dữ liệu bị lỗi", "index.php?com=product&act=man_cat3".$chuoi_noi_curpage4);
	}else{		


		if($hinhnho = upload_image("file1", 'jpg|jpeg|png|gif|JPG|JPEG|PNG|GIF', _upload_sanpham,$file_name1)){
			$data['hinhnho'] = $hinhnho;						
		}
		$d->setTable('product_cat');
		if($d->insert($data))
			redirect("index.php?com=product&act=man_cat3".$chuoi_noi4);
		else
			transfer("Lưu dữ liệu bị lỗi", "index.php?com=product&act=man_cat3".$chuoi_noi_curpage4);
	}
}

function delete_cat3(){
	global $d,$chuoi_noi_curpage4;
	if(isset($_GET['id'])){
		$id =  intval($_GET['id']);
		$d->reset();
		
		//Xóa ảnh con của nó
		$sql = "select id from #_product where id_cat3=$id";
		$d->query($sql);
		$row = $d->fetch_array();
		if(delete_product($row['id'])==0)
			transfer("Xóa dữ liệu bị lỗi", "index.php?com=product&act=man".$chuoi_noi_curpage4);

		//Xóa chính nó (danh mục cấp 2)			
		$sql = "delete from #_product_cat where id=$id";
		if($d->query($sql))
			redirect("index.php?com=product&act=man_cat3".$chuoi_noi_curpage4);
		else
			transfer("Xóa dữ liệu bị lỗi", "index.php?com=product&act=man_cat3".$chuoi_noi_curpage4);
	}else transfer("Không nhận được dữ liệu", "index.php?com=product&act=man_cat3".$chuoi_noi_curpage4);
}

#====================================


#======DANH MỤC CẤP 5====================================
function get_cat4s(){
	global $d, $items, $paging,$chuoi_noi_curpage5;
	
	thaydoi_hienthi('hienthi','table_product_cat','product','man_cat4',$chuoi_noi_curpage5);
	thaydoi_hienthi('noibat','table_product_cat','product','man_cat4',$chuoi_noi_curpage5);	
	
	$sql = "select * from #_product_cat where com='cat4'";

	if((int)$_REQUEST['id_cat']!='')
		$sql.=" and id_cat=".$_REQUEST['id_cat']."";
	if((int)$_REQUEST['id_cat1']!='')
		$sql.=" and id_cat1=".$_REQUEST['id_cat1']."";
	if((int)$_REQUEST['id_cat2']!='')
		$sql.=" and id_cat2=".$_REQUEST['id_cat2']."";
	if((int)$_REQUEST['id_cat3']!='')
		$sql.=" and id_cat3=".$_REQUEST['id_cat3']."";



	if($_REQUEST['search']!=''){
		$ten = magic_quote($_REQUEST['search']);
		$ten = str_replace('%20',' ',$ten);
		$sql.=" and ten_vi like '%$ten%'";
	}

	$sql.=" order by stt asc,id desc";
	
	$d->query($sql);
	$items = $d->result_array();
	
	$curPage = isset($_GET['curPage']) ? $_GET['curPage'] : 1;
	$url="index.php?com=product&act=man_cat4";
	if(isset($_REQUEST['search']))
		$url .= "&search=".$_REQUEST['search'];	

	if(isset($_REQUEST['id_cat']))
		$url .= "&id_cat=".$_REQUEST['id_cat'];
	if(isset($_REQUEST['id_cat1']))
		$url .= "&id_cat1=".$_REQUEST['id_cat1'];
	if(isset($_REQUEST['id_cat2']))
		$url .= "&id_cat2=".$_REQUEST['id_cat2'];
	if(isset($_REQUEST['id_cat3']))
		$url .= "&id_cat3=".$_REQUEST['id_cat3'];
	$maxR=20;
	$maxP=10;
	$paging=paging($items, $url, $curPage, $maxR, $maxP);
	$items=$paging['source'];
}

function get_cat4(){
	global $d, $item,$chuoi_noi_curpage5;
	$id = isset($_GET['id']) ? intval($_GET['id']) : "";
	if(!$id)
		transfer("Không nhận được dữ liệu", "index.php?com=product&act=man_cat4".$chuoi_noi_curpage5);
	
	$sql = "select * from #_product_cat where id=$id";
	$d->query($sql);
	if($d->num_rows()==0) transfer("Dữ liệu không có thực", "index.php?com=product&act=man_cat4".$chuoi_noi_curpage5);
	$item = $d->fetch_array();	
}

function save_cat4(){
	global $d,$chuoi_noi5,$chuoi_noi_curpage5,$config;

	if(empty($_POST)) transfer("Không nhận được dữ liệu", "index.php?com=product&act=man_cat4".$chuoi_noi_curpage5);
	$id = isset($_POST['id']) ? intval($_POST['id']) : "";
	//Dùng chung
	$data['com'] = 'cat4';
	$data['id_cat'] = intval($_POST['id_cat']);
	$data['id_cat1'] = intval($_POST['id_cat1']);
	$data['id_cat2'] = intval($_POST['id_cat2']);
	$data['id_cat3'] = intval($_POST['id_cat3']);
	foreach ($config["lang"] as $key => $value)  {

		$data['ten_'.$value] = magic_quote($_POST['ten_'.$value]);
		$data['h1_'.$value] = magic_quote($_POST['h1_'.$value]);
		$data['h2_'.$value] = magic_quote($_POST['h2_'.$value]);
		$data['h3_'.$value] = magic_quote($_POST['h3_'.$value]);
		$data['title_'.$value] = magic_quote($_POST['title_'.$value]);

		$data['keywords_'.$value] = magic_quote($_POST['keywords_'.$value]);
		$data['description_'.$value] = magic_quote($_POST['description_'.$value]);
		$data['mota_'.$value] = magic_quote($_POST['mota_'.$value]);
            // $data['noidung_'.$value] = magic_quote($_POST['noidung_'.$value]);
            //   $data['diachi_'.$value] = magic_quote($_POST['diachi_'.$value]);
		$data['tenkhongdau_'.$value] = q_bodautv($_POST['ten_'.$value]);
	}
	
	$data['stt'] = magic_quote($_POST['stt']);
	$data['hienthi'] = isset($_POST['hienthi']) ? 1 : 0;
	
	if($id){					
		$d->setTable('product_cat');
		$d->setWhere('id', $id);
		if($d->update($data))
			redirect("index.php?com=product&act=man_cat4".$chuoi_noi_curpage5);
		else
			transfer("Cập nhật dữ liệu bị lỗi", "index.php?com=product&act=man_cat4".$chuoi_noi_curpage5);
	}else{		
		$d->setTable('product_cat');
		if($d->insert($data))
			redirect("index.php?com=product&act=man_cat4".$chuoi_noi5);
		else
			transfer("Lưu dữ liệu bị lỗi", "index.php?com=product&act=man_cat4".$chuoi_noi_curpage5);
	}
}

function delete_cat4(){
	global $d,$chuoi_noi_curpage5;
	if(isset($_GET['id'])){
		$id =  intval($_GET['id']);
		$d->reset();
		
		//Xóa ảnh con của nó
		$sql = "select id from #_product where id_cat4=$id";
		$d->query($sql);
		$row = $d->fetch_array();
		if(delete_product($row['id'])==0)
			transfer("Xóa dữ liệu bị lỗi", "index.php?com=product&act=man".$chuoi_noi_curpage5);

		//Xóa chính nó (danh mục cấp 2)			
		$sql = "delete from #_product_cat where id=$id";
		if($d->query($sql))
			redirect("index.php?com=product&act=man_cat4".$chuoi_noi_curpage5);
		else
			transfer("Xóa dữ liệu bị lỗi", "index.php?com=product&act=man_cat4".$chuoi_noi_curpage5);
	}else transfer("Không nhận được dữ liệu", "index.php?com=product&act=man_cat4".$chuoi_noi_curpage5);
}

#====================================
#ẢNH PRODUCT========================================================
function get_photos(){
	global $d, $items, $paging, $chuoi_noi_curpagephoto;
	
	thaydoi_hienthi('hienthi','table_product_photo','product','man_photo',$chuoi_noi_curpagephoto);

	#-------------------------------------------------------------------------------
	$sql = "select * from #_product_photo";	

	$sql.=" where com='".$_REQUEST['type']."'";	

	if(isset($_REQUEST['id_cat']))
		$sql.=" and id_cat=".$_REQUEST['id_cat'];		
	$sql.=" order by id desc";

	$d->query($sql);
	$items = $d->result_array();
	
	
	$curPage = isset($_GET['curPage']) ? $_GET['curPage'] : 1;
	$url="index.php?com=product&act=man_photo";
	$maxR=20;
	$maxP=10;
	$paging=paging($items, $url, $curPage, $maxR, $maxP);
	$items=$paging['source'];
}

function get_photo(){
	global $d, $item, $chuoi_noi_curpagephoto;
	$id = isset($_GET['id']) ? intval($_GET['id']) : "";
	if(!$id)
		transfer("Không nhận được dữ liệu", "index.php?com=product&act=man_photo".$chuoi_noi_curpagephoto);
	
	$sql = "select * from #_product_photo where id=$id";
	$d->query($sql);
	if($d->num_rows()==0) transfer("Dữ liệu không có thực", "index.php?com=product&act=man_photo".$chuoi_noi_curpagephoto);
	$item = $d->fetch_array();
}

function save_photo(){
	global $d, $chuoi_noi_curpagephoto, $chuoi_noiphoto;			
	
	if(empty($_POST)) transfer("Không nhận được dữ liệu", "index.php?com=product&act=man_photo".$chuoi_noi_curpagephoto);
	$id = isset($_POST['id']) ? intval($_POST['id']) : "";

	if($id){		

		$filename1=q_tenhinh($_FILES['download']['name']);
		$file_name=q_tenhinh($_FILES['file']['name']);
		if($photo = upload_image("file", 'jpg|png|gif|jpeg|JPEG|JPG|PNG|GIF',_upload_sanpham,$file_name)){
			$data['photo'] = $photo;

			$d->setTable('product_photo');
			$d->setWhere('id', $id);
			$d->select();
			if($d->num_rows()>0){
				$row = $d->fetch_array();
				delete_file(_upload_sanpham.$row['photo']);

			}
		}		




		
		$data['id_cat'] = $_REQUEST['id_cat'];
		$data['com'] = $_REQUEST['type'];
		$data['ten'] = $_POST['ten'];
		
		$data['stt'] = $_POST['stt'];
		$data['hienthi'] = isset($_POST['hienthi']) ? 1 : 0;
		$d->setTable('product_photo');
		$d->setWhere('id', $id);
		if($d->update($data))
			redirect("index.php?com=product&act=man_photo".$chuoi_noi_curpagephoto);
		else
			transfer("Cập nhật dữ liệu bị lỗi", "index.php?com=product&act=man_photo".$chuoi_noi_curpagephoto);
	}else{		
		
		$data['id_cat'] = $_REQUEST['id_cat'];	
		$data['com'] = $_REQUEST['type'];


		for($i=0; $i<5; $i++){			
			$filename=q_tenhinh($_FILES['file'.$i]['name']);
			$filename1=q_tenhinh($_FILES['download'.$i]['name']);
			
			if($photo = upload_image("file".$i, 'jpg|png|gif|JPG|PNG|GIF|jpeg|JPEG', _upload_sanpham,$filename.$i)){
				$data['photo'] = $photo;
				$data['thumb'] = create_thumb($data['photo'], 400, 349, _upload_sanpham,$filename,2);

				$data['ten'] = $_POST['ten'.$i];

				$data['stt'] = $_POST['stt'.$i];
				$data['hienthi'] = isset($_POST['hienthi'.$i]) ? 1 : 0;
				$download = upload_image("download".$i, 'jpg|png|gif|JPG|PNG|GIF|jpeg|JPEG|pdf|PDF', _upload_sanpham,$filename1.$i);
				$data['download'] = $download;
				$d->setTable('product_photo');
				if(!$d->insert($data)) transfer("Lưu dữ liệu bị lỗi", "index.php?com=product&act=man_photo".$chuoi_noi_curpagephoto);
			}
			
			
			
			
			
			
		}


		redirect("index.php?com=product&act=man_photo".$chuoi_noi_curpagephoto);
	}
}

function delete_photo(){
	global $d,$chuoi_noi_curpagephoto;

	if(isset($_GET['id'])){
		$id =  intval($_GET['id']);
		$d->reset();
		$sql = "select id, photo,thumb from #_product_photo where id=$id";
		$d->query($sql);
		if($d->num_rows()>0){
			while($row = $d->fetch_array()){
				delete_file(_upload_sanpham.$row['photo']);
				delete_file(_upload_sanpham.$row['thumb']);
			}
			$sql = "delete from #_product_photo where id=$id";
			$d->query($sql);
		}
		if($d->query($sql))
			redirect("index.php?com=product&act=man_photo".$chuoi_noi_curpagephoto);
		else
			transfer("Xóa dữ liệu bị lỗi", "index.php?com=product&act=man_photo".$chuoi_noi_curpagephoto);
	}else transfer("Không nhận được dữ liệu", "index.php?com=product&act=man_photo".$chuoi_noi_curpagephoto);
}












/// CẤU HÌNNH

function get_photocauhinhs(){
	global $d, $items, $paging, $chuoi_noi_curpagephoto;
	
	thaydoi_hienthi('hienthi','table_product_cauhinh','product','man_photo',$chuoi_noi_curpagephoto);

	#-------------------------------------------------------------------------------
	$sql = "select * from #_product_cauhinh";	

	$sql.=" where com='".$_REQUEST['type']."'";	

	if(isset($_REQUEST['id_cat']))
		$sql.=" and id_cat=".$_REQUEST['id_cat'];		
	$sql.=" order by id desc";

	$d->query($sql);
	$items = $d->result_array();
	
	
	$curPage = isset($_GET['curPage']) ? $_GET['curPage'] : 1;
	$url="index.php?com=product&act=man_photocauhinh";
	$maxR=20;
	$maxP=10;
	$paging=paging($items, $url, $curPage, $maxR, $maxP);
	$items=$paging['source'];
}

function get_photocauhinh(){
	global $d, $item, $chuoi_noi_curpagephoto;
	$id = isset($_GET['id']) ? intval($_GET['id']) : "";
	if(!$id)
		transfer("Không nhận được dữ liệu", "index.php?com=product&act=man_photocauhinh".$chuoi_noi_curpagephoto);
	
	$sql = "select * from #_product_cauhinh where id=$id";
	$d->query($sql);
	if($d->num_rows()==0) transfer("Dữ liệu không có thực", "index.php?com=product&act=man_photocauhinh".$chuoi_noi_curpagephoto);
	$item = $d->fetch_array();
}

function save_photocauhinh(){
	global $d, $chuoi_noi_curpagephoto, $chuoi_noiphoto;			
	
	if(empty($_POST)) transfer("Không nhận được dữ liệu", "index.php?com=product&act=man_photocauhinh".$chuoi_noi_curpagephoto);
	$id = isset($_POST['id']) ? intval($_POST['id']) : "";

	if($id){		





		$gia = magic_quote($_POST['gia']);
		$data['gia'] = str_replace(".","",$gia);

		$giacu = magic_quote($_POST['giacu']);
		$data['giacu'] = str_replace(".","",$giacu);
		
		$data['id_cat'] = $_REQUEST['id_cat'];
		$data['com'] = $_REQUEST['type'];
		$data['ten'] = $_POST['ten'];
		$data['mota'] = magic_quote($_POST['mota']);
		$data['noidung'] = magic_quote($_POST['noidung']);
		$data['quatang'] = magic_quote($_POST['quatang']);

		$data['stt'] = $_POST['stt'];
		$data['hienthi'] = isset($_POST['hienthi']) ? 1 : 0;
		$data['cauhinh'] = magic_quote($_POST['cauhinh']);
		$d->setTable('product_cauhinh');
		$d->setWhere('id', $id);
		if($d->update($data))
			redirect("index.php?com=product&act=man_photocauhinh".$chuoi_noi_curpagephoto);
		else
			transfer("Cập nhật dữ liệu bị lỗi", "index.php?com=product&act=man_photocauhinh".$chuoi_noi_curpagephoto);
	}else{		
		
		$gia = magic_quote($_POST['gia']);
		$data['gia'] = str_replace(".","",$gia);

		$giacu = magic_quote($_POST['giacu']);
		$data['giacu'] = str_replace(".","",$giacu);
		$data['id_cat'] = $_REQUEST['id_cat'];	
		$data['com'] = $_REQUEST['type'];
		$data['ten'] = $_POST['ten'];
		$data['mota'] = magic_quote($_POST['mota']);
		$data['noidung'] = magic_quote($_POST['noidung']);
		$data['quatang'] = magic_quote($_POST['quatang']);
		$data['cauhinh'] = magic_quote($_POST['cauhinh']);
		$data['stt'] = $_POST['stt'];
		$data['hienthi'] = isset($_POST['hienthi']) ? 1 : 0;
		$d->setTable('product_cauhinh');
		if($d->insert($data))
			redirect("index.php?com=product&act=man_photocauhinh".$chuoi_noi_curpagephoto);
		else
			transfer("Cập nhật dữ liệu bị lỗi", "index.php?com=product&act=man_photocauhinh".$chuoi_noi_curpagephoto);
	}
}

function delete_photocauhinh(){
	global $d,$chuoi_noi_curpagephoto;

	if(isset($_GET['id'])){
		$id =  intval($_GET['id']);
		$d->reset();
		$sql = "select id, photo,thumb from #_product_cauhinh where id=$id";
		$d->query($sql);
		if($d->num_rows()>0){
			while($row = $d->fetch_array()){
				delete_file(_upload_sanpham.$row['photo']);
				delete_file(_upload_sanpham.$row['thumb']);
			}
			$sql = "delete from #_product_cauhinh where id=$id";
			$d->query($sql);
		}
		if($d->query($sql))
			redirect("index.php?com=product&act=man_photo".$chuoi_noi_curpagephoto);
		else
			transfer("Xóa dữ liệu bị lỗi", "index.php?com=product&act=man_photo".$chuoi_noi_curpagephoto);
	}else transfer("Không nhận được dữ liệu", "index.php?com=product&act=man_photo".$chuoi_noi_curpagephoto);
}
// END CẤU HÌNH
