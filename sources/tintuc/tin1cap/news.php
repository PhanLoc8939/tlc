<?php  if(!defined('_kiemtraweb') || _kiemtraweb!=$check_website) die('Eror');						

		

        

        $point_list = 1;	

		

		if(isset($_REQUEST['id'])){	//Chi tiết

            $point_list = 0;

            $id =  intval(trim($_REQUEST['id']));

        													

			$sql_tintuc = "select * from #_congtrinh where hienthi=1 and id='$id'";

			$d->query($sql_tintuc);

			$news = $d->fetch_array();

            

            $sql_tintuc = "select * from #_congtrinh_photo where hienthi=1 and id_cat=$id order by stt asc, id desc";					

			$d->query($sql_tintuc);

			$news_photo = $d->result_array();

			

			$title_ttt = '<a href="dich-vu/'.(($news['ten']!='')?q_bodautv($news['ten']):"-").'-'.$news['id'].'.htm" title="'.$news['ten'].'" class="transition_03s">'.$news['ten'].'</a>';

			$title_ttt1 = '<a href="dich-vu.html" title="Dịch vụ liên quan" class="transition_03s">Dịch vụ liên quan</a>';

			

			

			$luotxem = $news['luotxem']+1;

			$sql_update = "update #_congtrinh SET luotxem=$luotxem where id='$id'";

			$d->query($sql_update);

			

			

			if($news['title']!='')

				$title_bar = $news['title'];

			if($news['description']!='')

				$description = $news['description'];

			if($news['keywords']!='')

				$keywords = $news['keywords'];

			

			//Dịch vụ khác			

			$sql = "select * from #_congtrinh where hienthi=1 and id!='$id'";

            if($news['id_cat'] > 0) {

                $sql .= " and id_cat=" . $news['id_cat'];

            }

            $sql .= " order by stt asc,id";

			$d->query($sql);

			$newskhac = $d->result_array();		

		}	

        else if(isset($_REQUEST['idc'])){	//Chi tiết            

            $id =  intval(trim($_REQUEST['idc']));

            

            $sql_tintuc = "select * from #_congtrinh_cat where hienthi=1 and id=$id";					

			$d->query($sql_tintuc);

			$news_cat = $d->fetch_array();

			$title_ttt =$news_cat['ten_vi'];





			 if($news_cat['title']!='')

				$title_bar = $news_cat['title'];

			if($news_cat['description']!='')

				$description = $news_cat['description'];

			if($news_cat['keywords']!='')

				$keywords = $news_cat['keywords'];	

            

			$sql_tintuc = "select * from #_congtrinh where hienthi=1 and id_cat=$id order by stt asc, id desc";					

			$d->query($sql_tintuc);

			$news = $d->result_array();

				

			$count_sp = count($news); 

			

			$curPage = isset($_GET['p']) ? $_GET['p'] : 1;

			$url='dich-vu/'.(($news_cat['ten']!='')?q_bodautv($news_cat['ten']):"-").'-'.$news_cat['id'].'.html/';

			$maxR=16;

			$maxP=5;

			$paging=paging_home($news, $url, $curPage, $maxR, $maxP);

			$news=$paging['source'];        	

		}	



		  else if(isset($_REQUEST['idi'])){	//Chi tiết            

            $id =  intval(trim($_REQUEST['idi']));

            

            $sql_tintuc = "select * from #_congtrinh_cat where hienthi=1 and id=$id";					

			$d->query($sql_tintuc);

			$news_cat = $d->fetch_array();

				$title_ttt =$news_cat['ten_vi'];

            

            if($news_cat['title']!='')

				$title_bar = $news_cat['title'];

			if($news_cat['description']!='')

				$description = $news_cat['description'];

			if($news_cat['keywords']!='')

				$keywords = $news_cat['keywords'];	

            

			$sql_tintuc = "select * from #_congtrinh where hienthi=1 and id_cat1=$id order by stt asc, id desc";					

			$d->query($sql_tintuc);

			$news = $d->result_array();

				

			$count_sp = count($news); 

			

			$curPage = isset($_GET['p']) ? $_GET['p'] : 1;

			$url='dich-vu/2/'.(($news_cat['ten']!='')?q_bodautv($news_cat['ten']):"-").'-'.$news_cat['id'].'.html/';

			$maxR=16;

			$maxP=5;

			$paging=paging_home($news, $url, $curPage, $maxR, $maxP);

			$news=$paging['source'];        	

		}		

		else{	//Danh sách		



			$d->reset();	

			$sql_tintuc = "select * from #_congtrinh where hienthi=1 order by stt asc, id desc";					

			$d->query($sql_tintuc);

			$news = $d->result_array();

			$d->reset();	

			$sql_tintuc = "select photo,ten_vi,mota_vi,tenkhongdau,id  from #_congtrinh where hienthi=1 and noibat=1 order by stt asc, id desc limit 0,5";					

			$d->query($sql_tintuc);

			$newsnb = $d->result_array();



			$d->reset();	

			$sql_tintuc = "select photo,ten_vi,mota_vi,tenkhongdau,diachi,gia,id,id_tinh_duan,id_quan_duan from #_congtrinh where hienthi=1 and noibat=1 order by id desc limit 0,6";					

			$d->query($sql_tintuc);

			$newscn = $d->result_array();



			$d->reset();	

			$sql_tintuc = "select tenkhongdau,id,ten_vi from #_congtrinh_cat where hienthi=1 and com='cat' order by stt asc, id desc";					

			$d->query($sql_tintuc);

			$news_cat = $d->result_array();

			$title_ttt = 'Tin tức';


			
				$d->reset();

				$sql= "select photo,link from #_photo where hienthi=1 and id=409 ";

				$d->query($sql);

				$bannermuc = $d->fetch_array();
					

			$count_sp = count($news); 

			

			$curPage = isset($_GET['p']) ? $_GET['p'] : 1;

			$url="du-an.html/";

			$maxR=16;

			$maxP=5;

			$paging=paging_home($news, $url, $curPage, $maxR, $maxP);

			$news=$paging['source'];			

		}	

		

		$title_bar = _linhvuchoatdong." - ".$title_bar;

?>