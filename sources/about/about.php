<?php  if(!defined('_kiemtraweb') || _kiemtraweb!=$check_website) die('Eror');

		$d->reset();

    $sql_tintuc = "select ten_$lang,title_$lang,keywords_$lang,description_$lang,noidung_$lang,mota_$lang,photo from #_about where com=0 limit 0,1";

    $d->query($sql_tintuc);

    $about = $d->fetch_array();


    if($news['title_$lang']!="")

      $title_bar = $news['title_$lang'];

    if($news['description_$lang']!="")

      $description = $news['description_$lang'];

    if($news['keywords_$lang']!="")

      $keywords = $news['keywords_$lang'];	  

    
      $title_ttt = 'About';	
      $title_bar = "About - ".$title_bar;
   



?>