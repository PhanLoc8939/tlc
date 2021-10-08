<?php  if(!defined('_source')) die("Error");
@$id = intval(trim($_GET['id']));


if($id){

	addtodaxem($id);
	$d->reset();	
	$sql_detail = "select * from #_product where hienthi=1 and id=$id";			
	$d->query($sql_detail);
	$product_detail = $d->fetch_array();	


	$idc = $product_detail['id_cat'];	
	$stt = 	$product_detail['stt'];	

	$d->reset();	
	$sql = "select * from #_product_cat where id=$idc and com='cat'";			
	$d->query($sql);
	$procat = $d->fetch_array();

	$anh_sp = _upload_sanpham_l.$product_detail['photo'];
	if($product_detail['mota_'.$lang]!=''){
		$mota_sp = $product_detail['mota_'.$lang];
	}
	$title_ttt = '<a href="san-pham/'.(($product_detail['ten_'.$lang]!="")?q_bodautv($product_detail['ten_'.$lang]):"-").'-'.$id.'.htm" title="'.$product_detail['ten_'.$lang].'">'.$product_detail['ten_'.$lang].'</a>';

	$luotxem = $product_detail['luotxem']+1;
	$sql_update = "update #_product SET luotxem=$luotxem where id='$id'";
	$d->query($sql_update);

//chia se fb

	$share_facebook = '
	<meta property="fb:app_id" content="521020208233528" />
	<meta property="og:url" content="'.getCurrentPageURL().'" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="'.$product_detail['ten_'.$lang].'" />
	<meta property="og:description" content="'.strip_tags($product_detail['description_'.$lang]).'" />
	<meta property="og:locale" content="vi" />
	<meta property="og:image" content="http://'.$config_url.'/'._upload_sanpham_l.$product_detail['thumb'].'" />
	<meta itemprop="name" content="'.$product_detail['title_'.$lang].'">
	<meta itemprop="description" content="'.strip_tags($product_detail['description_'.$lang]).'">
	<meta itemprop="image" content="http://'.$config_url.'/'._upload_sanpham_l.$product_detail['thumb'].'">
	<meta property="og:image:width" content="250" />
	<meta property="og:image:height" content="250" />
	<meta name="twitter:card" content="product">
	<meta name="twitter:site" content="'.$product_detail['ten_'.$lang].'">
	<meta name="twitter:title" content="'.$product_detail['title_'.$lang].'">
	<meta name="twitter:description" content="'.strip_tags($product_detail['description_'.$lang]).'">
	<meta name="twitter:creator" content="'.$product_detail['title_'.$lang].'">
	<meta name="twitter:image" content="http://'.$config_url.'/'._upload_sanpham_l.$product_detail['thumb'].'">
	<script type="application/ld+json">
	{
		"@context": "http://schema.org/",
		"@type": "Product",
		"name": "'.$company['ten_'.$lang].'",
		"author": "'.$company['ten_'.$lang].'",
		"image": "http://'.$config_url.'/'._upload_sanpham_l.$product_detail['photo'].'",
		"description": "'.strip_tags($product_detail['description_'.$lang]).'",
		"aggregateRating": {
			"@type": "Product",
			"ratingValue": "4.5",
			"reviewCount": "'.$product_detail['luotxem'].'",
			"bestRating": "5",
			"worstRating": "1"
		}
	}
	</script>';
//




	if($product_detail['title_'.$lang]!="")
		$title_bar = $product_detail['title_'.$lang];
	if($product_detail['description_'.$lang]!="")
		$description = $product_detail['description_'.$lang];
	if($product_detail['keywords_'.$lang]!="")
		$keywords = $product_detail['keywords_'.$lang];


	$d->reset();												
	$sql = "select * from #_product_photo where id_cat=$id and hienthi=1 order by stt asc,id desc";
	$d->query($sql);
	$photo_sp = $d->result_array();

	$d->reset();
	$sql = "select * from #_product where hienthi=1 and id!='$id'";
	
	if($product_detail['id_cat2']!=0)
		$sql .= " and id_cat2='".$product_detail['id_cat2']."'";
	else  if($product_detail['id_cat1']!=0)
		$sql .= " and id_cat1='".$product_detail['id_cat1']."'";
	else if($product_detail['id_cat']!=0)
		$sql .= " and id_cat='".$product_detail['id_cat']."'";							
	else{
	}
	$sql.=" order by stt asc,id desc";
	$d->query($sql);
	$product_khac = $d->result_array();



	





	if($product_detail['id_cat']!=0){
		$sql = "select * from #_product_cat where hienthi=1 and com='cat' and id='".intval($product_detail['id_cat'])."'";
		$d->query($sql);
		$cat_ttt = $d->fetch_array();
	}

	if($product_detail['id_cat1']!=0){
		$sql = "select * from #_product_cat where hienthi=1 and com='cat1' and id='".intval($product_detail['id_cat1'])."'";
		$d->query($sql);
		$cat_ttt1 = $d->fetch_array();
	}
	if($product_detail['id_cat2']!=0){
		$sql = "select * from #_product_cat where hienthi=1 and com='cat2' and id='".intval($product_detail['id_cat2'])."'";
		$d->query($sql);
		$cat_ttt2 = $d->fetch_array();
	}
	if($product_detail['id_cat3']!=0){
		$sql = "select * from #_product_cat where hienthi=1 and com='cat3' and id='".intval($product_detail['id_cat3'])."'";
		$d->query($sql);
		$cat_ttt3 = $d->fetch_array();
	}
	if($product_detail['id_cat4']!=0){
		$sql = "select * from #_product_cat where hienthi=1 and com='cat4' and id='".intval($product_detail['id_cat4'])."'";
		$d->query($sql);
		$cat_ttt4 = $d->fetch_array();
	}



	$d->reset();												
	$sql = "select id,ten_vi,tenkhongdau_vi from #_tinnho where hienthi=1 and com='6' order by stt asc,id desc";
	$d->query($sql);
	$chinhsachbh = $d->result_array();

	
}

?>