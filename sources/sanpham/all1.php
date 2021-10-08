<?php  if(!defined('_source')) die("Error");



	

	@$id = addslashes($_GET['id']);

	@$tenkhongdau=addslashes($_GET['tenkhongdau']);

	@$search=addslashes($_GET['search']);



		$d->reset();



		$sqlsp="select ten_$lang,tenkhongdau_$lang,id,photo,gia,giacu,hot from #_product where hienthi=1 ";





		$sqlduan="select photo,ten_vi,tenkhongdau,id,mota_vi from #_congtrinh where hienthi=1 ";

		

		$sqltintuc="select id,ten_vi,tenkhongdau,mota_vi,photo,ngaytao from #_tin3cap where hienthi=1 ";

	// phần sản phảm

	// kiêm tra id cấp 1 sản phẩm



	$d->reset();

	$sql="select ten_vi,id,tenkhongdau_$lang,mota_vi,title_vi,description_vi,keywords_vi from #_product_cat where com='cat' and id=$id and tenkhongdau_$lang='".$tenkhongdau."' " ;



	$d->query($sql);

	if($d->num_rows()>0){

		

		$template = 'sanpham/product';



			$comcat='comcat';

			$cat_ttt = $d->fetch_array();	



		// xử lý chi tiết
				$id_cat=$cat_ttt['id'];

		
				$title_ttt = $cat_ttt['ten_'.$lang];

				$mota_ttt=	$cat_ttt['mota_vi'];

				$sqlsp.=" and id_cat=".$id_cat." order by ngaytao desc";

				$d->query($sqlsp);

				$product=$d->result_array();

				

				if($cat_ttt['title_'.$lang]!="")

					$title_bar = $cat_ttt['title_'.$lang];

				if($cat_ttt['description_'.$lang]!="")

					$description = $cat_ttt['description_'.$lang];

				if($cat_ttt['keywords_'.$lang]!="")

					$keywords = $cat_ttt['keywords_'.$lang];

				

				





							

			$count_sp = count($product);

			

			$curPage = isset($_GET['p']) ? $_GET['p'] : '1';			

			$url = q_getCurrentPageURL();									

			$maxR=10;

			$maxP=10;

			$paging=paging_home1($product, $url, $curPage, $maxR, $maxP);

			$product=$paging['source'];









		// end xử lý chi tiết sản phẩm











	return false;

}


// kiêm tra id cấp 2 sản phẩm

	$d->reset();
	$sql="select ten_vi,id,tenkhongdau_vi,id_cat,mota_vi,title_vi,description_vi,keywords_vi from #_product_cat where com='cat1' and id=$id and tenkhongdau_$lang='".$tenkhongdau."' " ;

	$d->query($sql);
	if($d->num_rows()>0){
		
		$template = 'sanpham/product';


		$cat_ttt = $d->fetch_array();	
					$comcat1='comcat1';
		// xử lý 

				$id_cat1=$cat_ttt['id'];
				$title_ttt = $cat_ttt['ten_'.$lang];
						$mota_ttt=	$cat_ttt['mota_vi'];
				$d->reset();
				$sql="select ten_vi,id,tenkhongdau_$lang,id_cat from #_product_cat where com='cat' and id=".$cat_ttt['id_cat'];

				$d->query($sql);
				$cap1=$d->fetch_array();



				$id_cat=$cap1['id'];



				$sqlsp.=" and id_cat1=".$id_cat1." order by stt asc, id desc";
				$d->query($sqlsp);
				$product=$d->result_array();
				
				if($cat_ttt['title_'.$lang]!="")
					$title_bar = $cat_ttt['title_'.$lang];
				if($cat_ttt['description_'.$lang]!="")
					$description = $cat_ttt['description_'.$lang];
				if($cat_ttt['keywords_'.$lang]!="")
					$keywords = $cat_ttt['keywords_'.$lang];
				
				




		// end xử lý chi tiết sản phẩm





	return false;
}



// kiêm tra id cấp 3 sản phẩm

	$d->reset();
	$sql="select ten_vi,id,tenkhongdau_$lang,id_cat,mota_vi,title_vi,description_vi,keywords_vi from #_product_cat where com='cat2' and id=$id and tenkhongdau_$lang='".$tenkhongdau."' " ;

	$d->query($sql);
	if($d->num_rows()>0){
		
		$template = 'sanpham/product';


		$cat_ttt = $d->fetch_array();	

		// xử lý 

				$id_cat2=$cat_ttt['id'];
				$title_ttt = $cat_ttt['ten_'.$lang];
						$mota_ttt=	$cat_ttt['mota_'.$lang];
				$d->reset();
				$sql="select ten_vi,id,tenkhongdau_$lang,id_cat from #_product_cat where com='cat' and id=".$cat_ttt['id_cat'];

				$d->query($sql);
				$cap1=$d->fetch_array();


				$id_cat=$cap1['id'];



				$sqlsp.=" and id_cat1=".$id_cat2." order by stt asc, id desc";
				$d->query($sqlsp);
				$product=$d->result_array();
				
				if($cat_ttt['title_'.$lang]!="")
					$title_bar = $cat_ttt['title_'.$lang];
				if($cat_ttt['description_'.$lang]!="")
					$description = $cat_ttt['description_'.$lang];
				if($cat_ttt['keywords_'.$lang]!="")
					$keywords = $cat_ttt['keywords_'.$lang];
				
				




		// end xử lý chi tiết sản phẩm





	return false;
}







//dự án cấp 1





// kiêm tra id cấp 1 tin tức



	$d->reset();

	$sql="select ten_vi,id,tenkhongdau,title_vi,description_vi,keywords_vi from #_congtrinh_cat where com='cat' and id=$id and tenkhongdau='".$tenkhongdau."' " ;



	$d->query($sql);

	if($d->num_rows()>0){

		

		$template = 'tintuc/tin1cap/news';





			$cat_ttt = $d->fetch_array();	



		// xử lý 



				$id_cat=$cat_ttt['id'];

				$title_ttt = $cat_ttt['ten_vi'];

			





				$sqlduan.=" and id_cat=".$id_cat." order by stt asc, id desc";

				$d->query($sqlduan);

				$news=$d->result_array();

				

				if($cat_ttt['title_'.$lang]!="")

					$title_bar = $cat_ttt['title_'.$lang];

				if($cat_ttt['description_'.$lang]!="")

					$description = $cat_ttt['description_'.$lang];

				if($cat_ttt['keywords_'.$lang]!="")

					$keywords = $cat_ttt['keywords_'.$lang];

				

				

	
				$d->reset();

				$sql= "select photo,link from #_photo where hienthi=1 and id=409 ";

				$d->query($sql);

				$bannermuc = $d->fetch_array();
					







		// end xử lý chi tiết sản phẩm











	return false;

}







//Bài viết tin tức cấp 1





// kiêm tra id cấp 1 tin tức



	$d->reset();

	$sql="select ten_vi,id,tenkhongdau,title_vi,description_vi,keywords_vi from #_tin3cap_cat where com='cat' and id=$id and tenkhongdau='".$tenkhongdau."' " ;



	$d->query($sql);

	if($d->num_rows()>0){

		

		$template = 'tintuc/tin1cap/news1';





			$cat_ttt = $d->fetch_array();	



		// xử lý 



				$id_cat=$cat_ttt['id'];

				$title_ttt = $cat_ttt['ten_vi'];

			

				



				$sqltintuc.=" and id_cat=".$id_cat." order by stt asc, id desc";

				$d->query($sqltintuc);

				$news=$d->result_array();

				

				$d->reset();

				$sql= "select photo,link from #_photo where hienthi=1 and id=408 ";

				$d->query($sql);

				$bannermuc = $d->fetch_array();
				

				if($cat_ttt['title_'.$lang]!="")

					$title_bar = $cat_ttt['title_'.$lang];

				if($cat_ttt['description_'.$lang]!="")

					$description = $cat_ttt['description_'.$lang];

				if($cat_ttt['keywords_'.$lang]!="")

					$keywords = $cat_ttt['keywords_'.$lang];

				

				









		// end xử lý chi tiết tin tức











	return false;

}



// kiêm tra id cấp 2 tin tức



	$d->reset();

	$sql="select ten_vi,id,id_cat,tenkhongdau,title_vi,description_vi,keywords_vi from #_tin3cap_cat where com='cat1' and id=$id and tenkhongdau='".$tenkhongdau."' " ;



	$d->query($sql);

	if($d->num_rows()>0){

		

		$template = 'tintuc/tin1cap/news1';





			$cat_ttt = $d->fetch_array();	



		// xử lý 



				$id_cat1=$cat_ttt['id'];

				$title_ttt = $cat_ttt['ten_vi'];



				$d->reset();

				$sql="select ten_vi,id,tenkhongdau,id_cat from #_tin3cap_cat where com='cat' and id=".$cat_ttt['id_cat'];

				$d->query($sql);

				$cap1=$d->fetch_array();





				$tencat1=$cap1['ten_vi'];

				$tenkhongdaucat1=$cap1['tenkhongdau'];

			//	$id_cat=$cap1['id'];







				$sqltintuc.=" and id_cat1=".$id_cat1." order by ngaytao desc";

				$d->query($sqltintuc);

				$news=$d->result_array();

				

				if($cat_ttt['title']!="")

					$title_bar = $cat_ttt['title'];

				if($cat_ttt['description']!="")

					$description = $cat_ttt['description'];

				if($cat_ttt['keywords']!="")

					$keywords = $cat_ttt['keywords'];

				

				









		// end xử lý chi tiết tin tức











	return false;

}




// phân tin tức





	$d->reset();

	$sql="select * from #_tinnho where com=6 and id=$id and tenkhongdau_vi='".$tenkhongdau."' " ;



	$d->query($sql);

	if($d->num_rows()>0){



			$template = 'tintuc/news6';
			 $comall="tintucall";
			

			

			$sql_tintuc = "select * from #_tinnho where com=6 and hienthi=1 and id='$id'";

			$d->query($sql_tintuc);

			$news = $d->fetch_array();

          $d->reset();	
			$sql_tintuc1 = "select id,tenkhongdau_vi,mota_vi,ten_vi,photo,ngaytao from #_tinnho where hienthi=1 and com=6 order by  luotxem desc limit 0,8";					

			$d->query($sql_tintuc1);

			$newsnhieu = $d->result_array();

			

			$luotxem = $news['luotxem']+1;

			$sql_update = "update #_tinnho SET luotxem=$luotxem where com=6 and id='$id'";

			$d->query($sql_update);

			

			

			if($news['title_'.$lang]!='')

				$title_bar = $news['title_'.$lang];

			if($news['description_'.$lang]!='')

				$description = $news['description_'.$lang];

			if($news['keywords_'.$lang]!='')

				$keywords = $news['keywords_'.$lang];



			//tin tức khác			

			$sql = "select * from #_tinnho where com=6 and hienthi=1 and id!='$id'";

            $sql .= " order by stt asc,id desc";

			$d->query($sql);

			$newskhac = $d->result_array();		







return false;



}




// phân chính sách





	$d->reset();

	$sql="select * from #_tinnho where com=11 and id=$id and tenkhongdau_vi='".$tenkhongdau."' " ;



	$d->query($sql);

	if($d->num_rows()>0){



			$template = 'tintuc/news11';

				 $comall="chinhsachall";

			

			$sql_tintuc = "select * from #_tinnho where com=11 and hienthi=1 and id='$id'";

			$d->query($sql_tintuc);

			$news = $d->fetch_array();

          

			

			$luotxem = $news['luotxem']+1;

			$sql_update = "update #_tinnho SET luotxem=$luotxem where com=11 and id='$id'";

			$d->query($sql_update);

			

			

			if($news['title_'.$lang]!='')

				$title_bar = $news['title_'.$lang];

			if($news['description_'.$lang]!='')

				$description = $news['description_'.$lang];

			if($news['keywords_'.$lang]!='')

				$keywords = $news['keywords_'.$lang];



			//tin tức khác			

			$sql = "select * from #_tinnho where com=11 and hienthi=1 and id!='$id'";

            $sql .= " order by stt asc,id";

			$d->query($sql);

			$newskhac = $d->result_array();		







return false;



}

// phân giới thiệu





	$d->reset();

	$sql="select * from #_tinnho where com=1 and id=$id and tenkhongdau_vi='".$tenkhongdau."' " ;



	$d->query($sql);

	if($d->num_rows()>0){



			$template = 'tintuc/news1';

				 $comall="gioithieuall";

			

			$sql_tintuc = "select * from #_tinnho where com=1 and hienthi=1 and id='$id'";

			$d->query($sql_tintuc);

			$news = $d->fetch_array();

          

			

			$luotxem = $news['luotxem']+1;

			$sql_update = "update #_tinnho SET luotxem=$luotxem where com=1 and id='$id'";

			$d->query($sql_update);

			

			

			if($news['title_'.$lang]!='')

				$title_bar = $news['title_'.$lang];

			if($news['description_'.$lang]!='')

				$description = $news['description_'.$lang];

			if($news['keywords_'.$lang]!='')

				$keywords = $news['keywords_'.$lang];



			//tin tức khác			

			$sql = "select * from #_tinnho where com=1 and hienthi=1 and id!='$id'";

            $sql .= " order by stt asc,id";

			$d->query($sql);

			$newskhac = $d->result_array();		







return false;



}




// phân bảng giá





	$d->reset();

	$sql="select * from #_tinnho where com=7 and id=$id and tenkhongdau_vi='".$tenkhongdau."' " ;



	$d->query($sql);

	if($d->num_rows()>0){



			$template = 'tintuc/news7';

				 $comall="banggiaall";

			

			$sql_tintuc = "select * from #_tinnho where com=7 and hienthi=1 and id='$id'";

			$d->query($sql_tintuc);

			$news = $d->fetch_array();

          

			

			$luotxem = $news['luotxem']+1;

			$sql_update = "update #_tinnho SET luotxem=$luotxem where com=7 and id='$id'";

			$d->query($sql_update);

			

			

			if($news['title_'.$lang]!='')

				$title_bar = $news['title_'.$lang];

			if($news['description_'.$lang]!='')

				$description = $news['description_'.$lang];

			if($news['keywords_'.$lang]!='')

				$keywords = $news['keywords_'.$lang];



			//tin tức khác			

			$sql = "select * from #_tinnho where com=7 and hienthi=1 and id!='$id'";

            $sql .= " order by stt asc,id";

			$d->query($sql);

			$newskhac = $d->result_array();		







return false;



}


?>