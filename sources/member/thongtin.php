<?php	if(!defined('_source')) die("Error");


if($_SESSION['login1']['id']!='') {


$act = (isset($_REQUEST['act'])) ? addslashes($_REQUEST['act']) : "";

	



	$d->reset();

	$sql="select * from #_member  where id=".$_SESSION['login1']['id'];



	$d->query($sql);

	$user=$d->fetch_array();




	



	$d->reset();

	$sql="select * from province   order by id asc";



	$d->query($sql);

	$showtinh=$d->result_array();







	$d->reset();

	$sql="select id,ten_vi from #_product_cat where com='cat' and id in (358,360,406)   order by id asc";

	$d->query($sql);

	$cat_main1=$d->result_array();


$d->reset();

	$sql="select id,ten_vi from #_product_cat where com='cat' and id in (414,413,412)   order by id asc";

	$d->query($sql);

	$cat_main11=$d->result_array();




	$d->reset();

	$sql="select id,ten_vi from #_product_cat where com='cat' and id in (366,361)    order by id asc";

	$d->query($sql);

	$cat_main2=$d->result_array();



	$d->reset();

	$sql="select * from district   order by id asc";



	$d->query($sql);

	$showquan=$d->result_array();

		$d->reset();

	$sql="select * from ward   order by id asc";



	$d->query($sql);

	$showphuong=$d->result_array();





	$d->reset();

	$sql="select id,ten_vi from #_congtrinh   order by id asc";



	$d->query($sql);

	$showduan=$d->result_array();





if($act=='thong-tin')

{





		

}else if($act=='edit-user'){





					$d->reset();

					$sql = "select * from #_member where id=".$_SESSION['login1']['id'];

					$d->query($sql);

					$user=$d->fetch_array();



					$ngaysinh=$user['ngaysinh'];



					$ngaysinh=explode('/', $ngaysinh);

					$ngay=$ngaysinh[0];

					$thang=$ngaysinh[1];

					$nam=$ngaysinh[2];





						if(isset($_POST['luuthongtin'])){





								$emailedit=addslashes($_POST['emailedit']);

								$fullnameedit=addslashes($_POST['fullnamemedit']);

								$dienthoaiedit=addslashes($_POST['dienthoaiedit']);

								$dkinhanmail=addslashes($_POST['is_subscribed']);

								$gioitinhedit=$_POST['genderedit'];

								$ngaysinhedit = addslashes($_POST['popup-dateedit']);

								$thangsinhedit = addslashes($_POST['popup-monthedit']);

								$namsinhedit = addslashes($_POST['popup-yearedit']);

								$emailedit = htmlspecialchars($emailedit);	

								$fullnameedit = htmlspecialchars($fullnameedit);	

								$dienthoaiedit = htmlspecialchars($dienthoaiedit);	







								if($emailedit==''&& $dienthoaiedit=='')

								{

									 transfer("Email ho???c ??i???n tho???i kh??ng ???????c ????? tr???ng ","thong-tin-user.html");	

								}

								if($emailedit!='')

								{

									

										if(check_valid_email($emailedit)!='')

										{

											  transfer("?????a ch??? email kh??ng ph?? h???p","thong-tin-user.html");	

										}

									  

									

								

								}

								if($fullnameedit=='')

								{

									 transfer("H??? t??n kh??ng ???????c ????? tr???ng","thong-tin-user.html");	

								}

								if($dienthoaiedit!='')

								{

									

									if(q_isnumber($dienthoaiedit)==0){



										transfer("S??? ??i???n tho???i kh??ng ph?? h???p","thong-tin-user.html");	



									}



								}	



									$data['luot']=$dkinhanmail;

									$data['email'] = $emailedit;

									$data['dienthoai'] = $dienthoaiedit;

									

									$data['ten'] = $fullnameedit;

								

									$data['sex'] = $gioitinhedit;

									$data['ngaysinh'] ='';

									$data['id_tinh'] =$_POST['id_tinh'];

									$data['id_quan'] =$_POST['id_quan'];

									$data['id_phuong'] =$_POST['id_phuong'];

									$data['diachi'] =$_POST['diachiedit'];

									$data['cmnd'] =$_POST['cmndedit'];

									$data['facebook'] =$_POST['faceedit'];

									$data['zalo'] =$_POST['zaloedit'];

									$data['skype'] =$_POST['skypeedit'];

									$data['viber'] =$_POST['viberedit'];





									if($ngaysinhedit!=0)

									{

										$data['ngaysinh'].=$ngaysinhedit;

									}

									if($thangsinhedit!=0)

									{

										$data['ngaysinh'].="/".$thangsinhedit;

									}

									if($namsinhedit!=0)

									{

										$data['ngaysinh'].="/".$namsinhedit;

									}







									

										$d->setTable('member');

										$d->setWhere('id', $user['id']);

											if($d->update($data))



											{

												



													transfer("Thay ?????i th??ng tin th??nh c??ng!", "thong-tin-user.html");

											}

													

											transfer("Thay ?????i th??ng tin kh??ng th??nh c??ng!", "thong-tin-user.html");		





							









							}





}else if($act=='thay-doi-mat-khau'){



		if(isset($_POST['capnhapmk']))

		{



				$password_cu = md5($_POST['passcuedit']);

				$password_moi = md5($_POST['passmoiedit']);

				$password_re=md5($_POST['repassedit']);

				if($password_cu==$password_moi){

				$error11="M???t kh???u m???i kh??ng ???????c tr??ng v???i m???t kh???u c??.";

				transfer($error11, "thay-doi-mat-khau.html");

				}	



				if($password_moi!=$password_re)

				{

					$error11="M???t kh???u m???i ph???i tr??ng v???i M???t kh???u nh???p l???i";

					transfer($error11, "thay-doi-mat-khau.html");





				}

											

				if(strlen($password_moi)<6 || strlen($password_moi)>32)

				{

					$error11="M???t kh???u m???i ph???i t??? 6 ?????n 32 k?? t???";

					transfer($error11, "thay-doi-mat-khau.html");

				}



				$data['password'] = $password_moi;		



				$d->setTable('member');

				$d->setWhere('id', $_SESSION['login1']['id']);	

				if($d->update($data))

				{

					transfer("Thay ?????i m???t kh???u th??nh c??ng!", "thay-doi-mat-khau.html");

				}	else

				{

					transfer("Thay ?????i m???t kh???u kh??ng th??nh c??ng!", "thay-doi-mat-khau.html");

				}							



		}







}else if($act=='dang-tin-rao-ban-cho-thue'){





		if($_REQUEST['id']>0)

		{



			$d->reset();

			$sql="select * from #_product where id=".$_REQUEST['id'];

			$d->query($sql);

			$item=$d->fetch_array();

			$d->reset();

			$sql="select * from #_product_photo where id_cat=".$_REQUEST['id'];

			$d->query($sql);

			$photo_tin=$d->result_array();


			$chuoihinh=array();
			foreach ($photo_tin as $key => $v) {
				
				$chuoihinh[]=$v['photo'];
			}
			$chuoihinh=implode(',', $chuoihinh);

			$chuoihinh.=',';

		}



		if(!empty($_POST)){





						$file_name=q_tenhinh($_FILES['file']['name']);

						// 

						 $tenduan = addslashes($_POST['txttenduan']);

						 $hinhthuc = addslashes($_POST['id_hinhthuc']);

						 $phanmuc = addslashes($_POST['id_phanmuc']);

						 $id_tinh = addslashes($_POST['id_tinh']);

						 $id_quan = addslashes($_POST['id_quan']);

						 $id_phuong = addslashes($_POST['id_phuong']);

						 $id_duan = addslashes($_POST['id_duan']);

						 $diachi = addslashes($_POST['txtdiachi']);

						 $dientich = addslashes($_POST['txtdientich']);

						$giaban = addslashes($_POST['txtgiaban']);

						$gia1 = addslashes($_POST['txtgia1']);

							$donvi = addslashes($_POST['txtdonvi']);

						$mota = addslashes($_POST['txtmota']);

						$huongnha = addslashes($_POST['huongnha']);

						$huongbancong = addslashes($_POST['huongbancong']);

						$sophongngu = addslashes($_POST['txtsophongngu']);

						$sotoilet = addslashes($_POST['txtsotoilet']);

						$sotang = addslashes($_POST['txtsotang']);

						$mattien = addslashes($_POST['txtmattien']);

						$vitri = addslashes($_POST['txtvitri']);

						$duongvao = addslashes($_POST['txtduongvao']);

						$noithat = addslashes($_POST['txtnoithat']);



						$tenlienhe = addslashes($_POST['txttenlienhe']);

						$diachilienhe = addslashes($_POST['txtdiachilienhe']);

						$dienthoailienhe = addslashes($_POST['txtdienthoailienhe']);

						$emaillienhe = addslashes($_POST['txtemaillienhe']);

					//



						 $tenduan = htmlspecialchars($tenduan);

						 $hinhthuc = htmlspecialchars($hinhthuc);

						 $phanmuc = htmlspecialchars($phanmuc);

						 $id_tinh = htmlspecialchars($id_tinh);

						 $id_quan = htmlspecialchars($id_quan);

						 $id_phuong = htmlspecialchars($id_phuong);

						 $id_duan = htmlspecialchars($id_duan);

						 $diachi = htmlspecialchars($diachi);

						 $dientich = htmlspecialchars($dientich);

						$giaban = htmlspecialchars($giaban);

							$gia1 = htmlspecialchars($gia1);

								$donvi = htmlspecialchars($donvi);

						$mota = htmlspecialchars($mota);

						$huongnha = htmlspecialchars($huongnha);

						$huongbancong = htmlspecialchars($huongbancong);

						$sophongngu = htmlspecialchars($sophongngu);

						$sotoilet = htmlspecialchars($sotoilet);

						$sotang = htmlspecialchars($sotang);

						$mattien = htmlspecialchars($mattien);

						$vitri = htmlspecialchars($vitri);

						$duongvao = htmlspecialchars($duongvao);

						$noithat = htmlspecialchars($noithat);



						$tenlienhe = htmlspecialchars($tenlienhe);

						$diachilienhe = htmlspecialchars($diachilienhe);

						$dienthoailienhe = htmlspecialchars($dienthoailienhe);

						$emaillienhe = htmlspecialchars($emaillienhe);		

						 $listhinh = addslashes($_POST['listhinh']);



					     if($listhinh!='')

					     {

					        $listhinh1=array();

					        $listhinh=explode(',', $listhinh);

					        for ($i=1; $i <count($listhinh) ; $i++) { 

					            $listhinh1[]=$listhinh[$i-1];

					        }
					        // $listhinh1=array_unique($listhinh1);

					        $listhinh1=implode(',', $listhinh1);

					     }

				

					   	$data['ten_vi'] = $tenduan;

					   	$data['id_cat'] = $hinhthuc;

					   	$data['id_cat1'] = $phanmuc;

					   	$data['id_tinh'] = $id_tinh;

					   	$data['id_quan'] = $id_quan;

					   	$data['id_phuong'] = $id_phuong;

					   	$data['id_duan'] = $id_duan;

					   	$data['diachi'] = $diachi;

					   	$data['dientich'] = $dientich;

					   	if($giaban=='Th???a thu???n'){

					   		$data['gia'] =0;

					   	}else

					   	{

					   		$data['gia'] = $giaban;

					   	}

					   	

					   	 $data['gia1'] = $gia1;

					   	 $data['donvi'] = $donvi;

					   	$data['noidung_vi'] = $mota;

					   	$data['huongnha'] = $huongnha;

					   	$data['huongbancong'] = $huongbancong;

					   	$data['sophongngu'] = $sophongngu;

					   	$data['sotoilet'] = $sotoilet;

					   	$data['sotang'] = $sotang;

					   	$data['mattien'] = $mattien;

					   	$data['vitri'] = $vitri;

					   	$data['duongvao'] = $duongvao;

					   	$data['noithat'] = $noithat;

					   	$data['bando'] = $_POST['txtbando'];

					   	$data['tenlienhe'] = $tenlienhe;

					   	$data['diachilienhe'] = $diachilienhe;

					   	$data['dienthoailienhe'] = $dienthoailienhe;

					   	$data['emaillienhe'] = $emaillienhe;

					   	$data['tenkhongdau_vi']=q_bodautv($tenduan);

					    $data['ngaytao'] = time();

					
					    $data['loaitin'] = 1;
					    $data['id_user'] = $_SESSION['login1']['id'];

					   



				        //update 



				      if($_POST['id']>0)

				       	{
				       		 


					     if($anhdaidien = upload_image("file", 'jpg|png|gif|JPG|PNG|GIF|jpeg|JPEG', _upload_sanpham_l,$file_name)){

					                 $data['photo'] = $anhdaidien;
					                 	$d->setTable('product');
										$d->setWhere('id', $_POST['id']);
										$d->select();
										if($d->num_rows()>0){
											$row = $d->fetch_array();
											delete_file(_upload_sanpham.$row['photo']);
								
									}	
					      }



				       		$d->setTable('product');

							$d->setWhere('id', $_REQUEST['id']);




							if($d->update($data)){




									// $d->reset();
									// $sql="select hinhdinhkem from #_product where id=".$_POST['id'];
									// $d->query($sql);
									// $getdinhkem=$d->fetch_array();




									$d->reset();
									$sql="select photo from #_product_photo where id_cat=".$_POST['id'];
									$d->query($sql);
									$showhinhphoto=$d->result_array();

									$listgetdinhkem1=array();
									foreach ($showhinhphoto as $key => $v) {
												$listgetdinhkem1[]=$v['photo'];
									}

									if($_POST['listhinh']!=''){





										    $listdinhkem=explode(',', $_POST['listhinh']);
										    $listdinhkem1=array();

										    for ($i=1; $i <count($listdinhkem) ; $i++) { 
												$listdinhkem1[]=$listdinhkem[$i-1];
											}


											$listhinh123=array();
											for ($i=0; $i <count($listdinhkem1) ; $i++) { 
												if(!in_array($listdinhkem1[$i], $listgetdinhkem1))
													{
																	$listhinh123[]=$listdinhkem1[$i];
													}
												}

									

					     				   $listhinh1234=implode(',', $listhinh123);


					     				   	foreach ($showhinhphoto as $key => $v) {
															if(!in_array($v['photo'], $listdinhkem1))
															{
																$d->reset();
																$sql="delete from table_product_photo where id_cat=".$_POST['id']." and photo='".$v['photo']."'  ";
																$d->query($sql);
															}

											}
					     				 

						

											if(count($listhinh123)>0)
											{

												 if($upnhieuhinh = upload_image_mutil("files", 'jpg|png|gif|JPG|PNG|GIF|jpeg|JPEG', _upload_sanpham_l,$listhinh1234)){  





											
												 		$upnhieuhinh1=explode(',', $upnhieuhinh);
													
												 	// 	echo count($upnhieuhinh1);
														// die();
														for ($i=1; $i <count($upnhieuhinh1) ; $i++) { 
																
																$d->reset();
															    $sql="insert into #_product_photo(photo,id_cat,hienthi) values('".$upnhieuhinh1[$i-1]."','".$_POST['id']."',1)";

															     $d->query($sql);

														}
													





													}
												


												
											}
				

									}







					         		  transfer("C???p nh???p b??i th??nh c??ng ", "quan-ly-rao-ban-cho-thue.html");



							}	else{



								 transfer("H??? th???ng ??ang b???n ", "quan-ly-rao-ban-cho-thue.html");



							}





				       	}else{


				       		$ngay=date('d');
				       		$thang=date('m');

				       		$d->reset();
				       		$sql="select * from #_product order by id asc";
				       		$d->query($sql);
				       		$dshnay=$d->result_array();
				       		$dem=0;
				       		foreach ($dshnay as $key => $v) {
				       			if(date('d',$v['ngaytao'])==$ngay&&date('m',$v['ngaytao'])==$thang)
				       			{
				       				$dem++;
				       			}
				       		}
						   
				       		$macode='';
				       		$yeaer=date('y');
				       		$yeaer1=substr($yeaer,-1);
				       		$macode.=$yeaer1;
				       		$macode.=date('m');
				       		$macode.=date('d');
				       		 $macode.=changethutu($dem+1);

				       		



					    	$data['matin']=$macode;

					     
					       if($anhdaidien = upload_image("file", 'jpg|png|gif|JPG|PNG|GIF|jpeg|JPEG', _upload_sanpham_l,$file_name)){

					                 $data['photo'] = $anhdaidien;

					      }


				  		  if($hinhdinhkem = upload_image_mutil("files", 'jpg|png|gif|JPG|PNG|GIF|jpeg|JPEG', _upload_sanpham_l,$listhinh1)){

				            $data['hinhdinhkem'] = $hinhdinhkem;     


				     	  }
				     

				 

				     	   $data['hienthi'] = 0;
					        $d->setTable('product');

					        if($d->insert($data))

					         {

							         	

									if($_POST['listhinh']!=''){





											   	$id_bds = mysql_insert_id();

								         	$hinhdinhkem1=explode(',', $hinhdinhkem);

								         	for ($i=1; $i <count($hinhdinhkem1) ; $i++) { 

								          		

								          		$d->reset();

								          		$sql="insert into #_product_photo(photo,id_cat,hienthi) values('".$hinhdinhkem1[$i-1]."','$id_bds',1)";

								          		 $d->query($sql);



								   		  		  }



						         

									}









					         





					         		  transfer1("????ng b??i th??nh c??ng ", "dang-tin-rao-ban-cho-thue.html",$macode);



					         }





					        else

					        {

					            transfer("H??? th???ng ??ang b???n ", "dang-tin-rao-ban-cho-thue.html");

					        }

							



					    // end insert

					      }











			}





}else if($act=='quan-ly-rao-ban-cho-thue'){





		$d->reset();

		$sql="select id,ten_vi,photo,tenkhongdau_vi,ngaytao,matin from #_product where id_user='".$_SESSION['login1']['id']."' and id_cat in (360,358) order by stt asc, id desc";

		$d->query($sql);

		$danhsachtin=$d->result_array();

		if($_REQUEST['del']>0){



			if(delete_product($_REQUEST['del'])==0 || delete_product($_REQUEST['del'])==2){





				 transfer("X??a kh??ng th??nh c??ng ", "quan-ly-rao-ban-cho-thue.html");

			}else

			{

					 transfer("X??a tin th??nh c??ng ", "quan-ly-rao-ban-cho-thue.html");

			}



		}

}else if($act=='dang-tin-can-mua-can-thue') {



		// xu ly dang tin c???n mua c???n thu??





		if($_REQUEST['id']>0)

		{



				$d->reset();

				$sql="select * from #_product where id=".$_REQUEST['id'];

				$d->query($sql);

				$item=$d->fetch_array();

				$d->reset();

				$sql="select * from #_product_photo where id_cat=".$_REQUEST['id'];

				$d->query($sql);

				$photo_tin=$d->result_array();


				$chuoihinh=array();
				foreach ($photo_tin as $key => $v) {
					
					$chuoihinh[]=$v['photo'];
				}
				$chuoihinh=implode(',', $chuoihinh);

				$chuoihinh.=',';



		}



		if(!empty($_POST)){





						$file_name=q_tenhinh($_FILES['file']['name']);

						// 

						 $tenduan = addslashes($_POST['txttenduan']);

						 $hinhthuc = addslashes($_POST['id_hinhthuc']);

						 $phanmuc = addslashes($_POST['id_phanmuc']);

						 $id_tinh = addslashes($_POST['id_tinh']);

						 $id_quan = addslashes($_POST['id_quan']);

						 $id_phuong = addslashes($_POST['id_phuong']);

						 $id_duan = addslashes($_POST['id_duan']);

						 $diachi = addslashes($_POST['txtdiachi']);

						 $dientich = addslashes($_POST['txtdientich']);

						$giaban = addslashes($_POST['txtgiaban']);

						$mota = addslashes($_POST['txtmota']);

						$tenlienhe = addslashes($_POST['txttenlienhe']);

						$diachilienhe = addslashes($_POST['txtdiachilienhe']);

						$dienthoailienhe = addslashes($_POST['txtdienthoailienhe']);

						$emaillienhe = addslashes($_POST['txtemaillienhe']);

					//



						 $tenduan = htmlspecialchars($tenduan);

						 $hinhthuc = htmlspecialchars($hinhthuc);

						 $phanmuc = htmlspecialchars($phanmuc);

						 $id_tinh = htmlspecialchars($id_tinh);

						 $id_quan = htmlspecialchars($id_quan);

						 $id_phuong = htmlspecialchars($id_phuong);

						 $id_duan = htmlspecialchars($id_duan);

						 $diachi = htmlspecialchars($diachi);

						 $dientich = htmlspecialchars($dientich);

						$giaban = htmlspecialchars($giaban);

						$mota = htmlspecialchars($mota);

						$tenlienhe = htmlspecialchars($tenlienhe);

						$diachilienhe = htmlspecialchars($diachilienhe);

						$dienthoailienhe = htmlspecialchars($dienthoailienhe);

						$emaillienhe = htmlspecialchars($emaillienhe);		

						 $listhinh = addslashes($_POST['listhinh']);



					     if($listhinh!='')

					     {

					        $listhinh1=array();

					        $listhinh=explode(',', $listhinh);

					        for ($i=1; $i <count($listhinh) ; $i++) { 

					            $listhinh1[]=$listhinh[$i-1];

					        }

					        $listhinh1=implode(',', $listhinh1);

					     }



					   	$data['ten_vi'] = $tenduan;

					   	$data['id_cat'] = $hinhthuc;

					   	$data['id_cat1'] = $phanmuc;

					   	$data['id_tinh'] = $id_tinh;

					   	$data['id_quan'] = $id_quan;

					   	$data['id_phuong'] = $id_phuong;

					   	$data['id_duan'] = $id_duan;

					   	$data['diachi'] = $diachi;

					   	$data['dientich'] = $dientich;

					   	$data['gia'] = $giaban;

					   	$data['noidung_vi'] = $mota;

					   	$data['tenlienhe'] = $tenlienhe;

					   	$data['diachilienhe'] = $diachilienhe;

					   	$data['dienthoailienhe'] = $dienthoailienhe;

					   	$data['emaillienhe'] = $emaillienhe;

					   	$data['tenkhongdau_vi']=q_bodautv($tenduan);

					    $data['ngaytao'] = time();

					    $data['hienthi'] = 0;

	
					    $data['id_user'] = $_SESSION['login1']['id'];

					   

					  












				        //update 



				   		

				      if($_POST['id']>0)

				       	{
				       		    


					     if($anhdaidien = upload_image("file", 'jpg|png|gif|JPG|PNG|GIF|jpeg|JPEG', _upload_sanpham_l,$file_name)){

					                 $data['photo'] = $anhdaidien;
					                 	$d->setTable('product');
										$d->setWhere('id', $_POST['id']);
										$d->select();
										if($d->num_rows()>0){
											$row = $d->fetch_array();
											delete_file(_upload_sanpham.$row['photo']);
								
									}	
					      }



				       		$d->setTable('product');

							$d->setWhere('id', $_REQUEST['id']);




							if($d->update($data)){




									// $d->reset();
									// $sql="select hinhdinhkem from #_product where id=".$_POST['id'];
									// $d->query($sql);
									// $getdinhkem=$d->fetch_array();




									$d->reset();
									$sql="select photo from #_product_photo where id_cat=".$_POST['id'];
									$d->query($sql);
									$showhinhphoto=$d->result_array();

									$listgetdinhkem1=array();
									foreach ($showhinhphoto as $key => $v) {
												$listgetdinhkem1[]=$v['photo'];
									}

									if($_POST['listhinh']!=''){





										    $listdinhkem=explode(',', $_POST['listhinh']);
										    $listdinhkem1=array();

										    for ($i=1; $i <count($listdinhkem) ; $i++) { 
												$listdinhkem1[]=$listdinhkem[$i-1];
											}


											$listhinh123=array();
											for ($i=0; $i <count($listdinhkem1) ; $i++) { 
												if(!in_array($listdinhkem1[$i], $listgetdinhkem1))
													{
																	$listhinh123[]=$listdinhkem1[$i];
													}
												}

									

					     				   $listhinh1234=implode(',', $listhinh123);


					     				   	foreach ($showhinhphoto as $key => $v) {
															if(!in_array($v['photo'], $listdinhkem1))
															{
																$d->reset();
																$sql="delete from table_product_photo where id_cat=".$_POST['id']." and photo='".$v['photo']."'  ";
																$d->query($sql);
															}

											}
					     				 

						

											if(count($listhinh123)>0)
											{

												 if($upnhieuhinh = upload_image_mutil("files", 'jpg|png|gif|JPG|PNG|GIF|jpeg|JPEG', _upload_sanpham_l,$listhinh1234)){  





											
												 		$upnhieuhinh1=explode(',', $upnhieuhinh);
													
												 	// 	echo count($upnhieuhinh1);
														// die();
														for ($i=1; $i <count($upnhieuhinh1) ; $i++) { 
																
																$d->reset();
															    $sql="insert into #_product_photo(photo,id_cat,hienthi) values('".$upnhieuhinh1[$i-1]."','".$_POST['id']."',1)";

															     $d->query($sql);

														}
													





													}
												


												
											}
				

									}







					         		  transfer("C???p nh???p b??i th??nh c??ng ", "quan-ly-tin-can-mua-can-thue.html");



							}	else{



								 transfer("H??? th???ng ??ang b???n ", "quan-ly-tin-can-mua-can-thue.html");



							}





				       	}else{


				       		$ngay=date('d');
				       		$thang=date('m');

				       		$d->reset();
				       		$sql="select * from #_product order by id asc";
				       		$d->query($sql);
				       		$dshnay=$d->result_array();
				       		$dem=0;
				       		foreach ($dshnay as $key => $v) {
				       			if(date('d',$v['ngaytao'])==$ngay&&date('m',$v['ngaytao'])==$thang)
				       			{
				       				$dem++;
				       			}
				       		}
						   
				       		$macode='';
				       		$yeaer=date('y');
				       		$yeaer1=substr($yeaer,-1);
				       		$macode.=$yeaer1;
				       		$macode.=date('m');
				       		$macode.=date('d');
				       		 $macode.=changethutu($dem+1);

				       		



					    	$data['matin']=$macode;

					    	  //   	  echo $listhinh1;

				     	  // die();
					       if($anhdaidien = upload_image("file", 'jpg|png|gif|JPG|PNG|GIF|jpeg|JPEG', _upload_sanpham_l,$file_name)){

					                 $data['photo'] = $anhdaidien;

					      }


				  		  if($hinhdinhkem = upload_image_mutil("files", 'jpg|png|gif|JPG|PNG|GIF|jpeg|JPEG', _upload_sanpham_l,$listhinh1)){

				            $data['hinhdinhkem'] = $hinhdinhkem;     


				     	  }


				 

				     	   $data['hienthi'] = 0;
					        $d->setTable('product');

					        if($d->insert($data))

					         {

							         	

									if($_POST['listhinh']!=''){





											   	$id_bds = mysql_insert_id();

								         	$hinhdinhkem1=explode(',', $hinhdinhkem);

								         	for ($i=1; $i <count($hinhdinhkem1) ; $i++) { 

								          		

								          		$d->reset();

								          		$sql="insert into #_product_photo(photo,id_cat,hienthi) values('".$hinhdinhkem1[$i-1]."','$id_bds',1)";

								          		 $d->query($sql);



								   		  		  }



						         

									}









					         





					         		  transfer1("????ng b??i th??nh c??ng ", "dang-tin-can-mua-can-thue.html",$macode);



					         }





					        else

					        {

					            transfer("H??? th???ng ??ang b???n ", "dang-tin-can-mua-can-thue.html");

					        }

							



					    // end insert

					      }









			}



		// end x??? l?? ????ng tin c???n mua c???n thu??





}else if($act=='quan-ly-tin-can-mua-can-thue'){





	$d->reset();

		$sql="select id,ten_vi,photo,tenkhongdau_vi,ngaytao,matin from #_product where id_user='".$_SESSION['login1']['id']."' and id_cat in (361,366) order by stt asc, id desc";

		$d->query($sql);

		$danhsachtin=$d->result_array();

		if($_REQUEST['del']>0){



			if(delete_product($_REQUEST['del'])==0 || delete_product($_REQUEST['del'])==2){





				 transfer("X??a kh??ng th??nh c??ng ", "quan-ly-tin-can-mua-can-thue.html");

			}else

			{

					 transfer("X??a tin th??nh c??ng ", "quan-ly-tin-can-mua-can-thue.html");

			}



		}







}else if($act=='dang-tin-moi-gioi'){





		if($_REQUEST['id']>0)

		{



			$d->reset();

			$sql="select * from #_product where id=".$_REQUEST['id'];

			$d->query($sql);

			$item=$d->fetch_array();

			$d->reset();

			$sql="select * from #_product_photo where id_cat=".$_REQUEST['id'];

			$d->query($sql);

			$photo_tin=$d->result_array();


			$chuoihinh=array();
			foreach ($photo_tin as $key => $v) {
				
				$chuoihinh[]=$v['photo'];
			}
			$chuoihinh=implode(',', $chuoihinh);

			$chuoihinh.=',';

			}



		if(!empty($_POST)){





						$file_name=q_tenhinh($_FILES['file']['name']);

						// 

						 $tenduan = addslashes($_POST['txttenduan']);

						 $hinhthuc = addslashes($_POST['id_hinhthuc']);

						 $phanmuc = addslashes($_POST['id_phanmuc']);

						 $id_tinh = addslashes($_POST['id_tinh']);

						 $id_quan = addslashes($_POST['id_quan']);

						 $id_phuong = addslashes($_POST['id_phuong']);

						 $id_duan = addslashes($_POST['id_duan']);

						 $diachi = addslashes($_POST['txtdiachi']);

						 $dientich = addslashes($_POST['txtdientich']);

						$giaban = addslashes($_POST['txtgiaban']);

						$gia1 = addslashes($_POST['txtgia1']);

							$donvi = addslashes($_POST['txtdonvi']);

						$mota = addslashes($_POST['txtmota']);

						$huongnha = addslashes($_POST['huongnha']);

						$huongbancong = addslashes($_POST['huongbancong']);

						$sophongngu = addslashes($_POST['txtsophongngu']);

						$sotoilet = addslashes($_POST['txtsotoilet']);

						$sotang = addslashes($_POST['txtsotang']);

						$mattien = addslashes($_POST['txtmattien']);

						$vitri = addslashes($_POST['txtvitri']);

						$duongvao = addslashes($_POST['txtduongvao']);

						$noithat = addslashes($_POST['txtnoithat']);



						$tenlienhe = addslashes($_POST['txttenlienhe']);

						$diachilienhe = addslashes($_POST['txtdiachilienhe']);

						$dienthoailienhe = addslashes($_POST['txtdienthoailienhe']);

						$emaillienhe = addslashes($_POST['txtemaillienhe']);

					//



						 $tenduan = htmlspecialchars($tenduan);

						 $hinhthuc = htmlspecialchars($hinhthuc);

						 $phanmuc = htmlspecialchars($phanmuc);

						 $id_tinh = htmlspecialchars($id_tinh);

						 $id_quan = htmlspecialchars($id_quan);

						 $id_phuong = htmlspecialchars($id_phuong);

						 $id_duan = htmlspecialchars($id_duan);

						 $diachi = htmlspecialchars($diachi);

						 $dientich = htmlspecialchars($dientich);

						$giaban = htmlspecialchars($giaban);

							$gia1 = htmlspecialchars($gia1);

								$donvi = htmlspecialchars($donvi);

						$mota = htmlspecialchars($mota);

						$huongnha = htmlspecialchars($huongnha);

						$huongbancong = htmlspecialchars($huongbancong);

						$sophongngu = htmlspecialchars($sophongngu);

						$sotoilet = htmlspecialchars($sotoilet);

						$sotang = htmlspecialchars($sotang);

						$mattien = htmlspecialchars($mattien);

						$vitri = htmlspecialchars($vitri);

						$duongvao = htmlspecialchars($duongvao);

						$noithat = htmlspecialchars($noithat);



						$tenlienhe = htmlspecialchars($tenlienhe);

						$diachilienhe = htmlspecialchars($diachilienhe);

						$dienthoailienhe = htmlspecialchars($dienthoailienhe);

						$emaillienhe = htmlspecialchars($emaillienhe);		

						 $listhinh = addslashes($_POST['listhinh']);



					     if($listhinh!='')

					     {

					        $listhinh1=array();

					        $listhinh=explode(',', $listhinh);

					        for ($i=1; $i <count($listhinh) ; $i++) { 

					            $listhinh1[]=$listhinh[$i-1];

					        }
					        $listhinh1=array_unique($listhinh1);

					        $listhinh1=implode(',', $listhinh1);

					     }

					     // echo $listhinh1;
					     // exit();

					   	$data['ten_vi'] = $tenduan;

					   	$data['id_cat'] = $hinhthuc;

					   	$data['id_cat1'] = $phanmuc;

					   	$data['id_tinh'] = $id_tinh;

					   	$data['id_quan'] = $id_quan;

					   	$data['id_phuong'] = $id_phuong;

					   	$data['id_duan'] = $id_duan;

					   	$data['diachi'] = $diachi;

					   	$data['dientich'] = $dientich;

					   	if($giaban=='Th???a thu???n'){

					   		$data['gia'] =0;

					   	}else

					   	{

					   		$data['gia'] = $giaban;

					   	}

					   	

					   	 $data['gia1'] = $gia1;

					   	 $data['donvi'] = $donvi;

					   	$data['noidung_vi'] = $mota;

					   	$data['huongnha'] = $huongnha;

					   	$data['huongbancong'] = $huongbancong;

					   	$data['sophongngu'] = $sophongngu;

					   	$data['sotoilet'] = $sotoilet;

					   	$data['sotang'] = $sotang;

					   	$data['mattien'] = $mattien;

					   	$data['vitri'] = $vitri;

					   	$data['duongvao'] = $duongvao;

					   	$data['noithat'] = $noithat;

					   	$data['bando'] = $_POST['txtbando'];

					   	$data['tenlienhe'] = $tenlienhe;

					   	$data['diachilienhe'] = $diachilienhe;

					   	$data['dienthoailienhe'] = $dienthoailienhe;

					   	$data['emaillienhe'] = $emaillienhe;

					   	$data['tenkhongdau_vi']=q_bodautv($tenduan);

					    $data['ngaytao'] = time();

					
					    $data['loaitin'] = 1;
					    $data['id_user'] = $_SESSION['login1']['id'];

					   



				        //update 



				      if($_POST['id']>0)

				       	{
				       	


					     if($anhdaidien = upload_image("file", 'jpg|png|gif|JPG|PNG|GIF|jpeg|JPEG', _upload_sanpham_l,$file_name)){

					                 $data['photo'] = $anhdaidien;
					                 	$d->setTable('product');
										$d->setWhere('id', $_POST['id']);
										$d->select();
										if($d->num_rows()>0){
											$row = $d->fetch_array();
											delete_file(_upload_sanpham.$row['photo']);
								
									}	
					      }



				       		$d->setTable('product');

							$d->setWhere('id', $_REQUEST['id']);




							if($d->update($data)){




									// $d->reset();
									// $sql="select hinhdinhkem from #_product where id=".$_POST['id'];
									// $d->query($sql);
									// $getdinhkem=$d->fetch_array();




									$d->reset();
									$sql="select photo from #_product_photo where id_cat=".$_POST['id'];
									$d->query($sql);
									$showhinhphoto=$d->result_array();

									$listgetdinhkem1=array();
									foreach ($showhinhphoto as $key => $v) {
												$listgetdinhkem1[]=$v['photo'];
									}

									if($_POST['listhinh']!=''){





										    $listdinhkem=explode(',', $_POST['listhinh']);
										    $listdinhkem1=array();

										    for ($i=1; $i <count($listdinhkem) ; $i++) { 
												$listdinhkem1[]=$listdinhkem[$i-1];
											}


											$listhinh123=array();
											for ($i=0; $i <count($listdinhkem1) ; $i++) { 
												if(!in_array($listdinhkem1[$i], $listgetdinhkem1))
													{
																	$listhinh123[]=$listdinhkem1[$i];
													}
												}

									

					     				   $listhinh1234=implode(',', $listhinh123);


					     				   	foreach ($showhinhphoto as $key => $v) {
															if(!in_array($v['photo'], $listdinhkem1))
															{
																$d->reset();
																$sql="delete from table_product_photo where id_cat=".$_POST['id']." and photo='".$v['photo']."'  ";
																$d->query($sql);
															}

											}
					     				 

						

											if(count($listhinh123)>0)
											{

												 if($upnhieuhinh = upload_image_mutil("files", 'jpg|png|gif|JPG|PNG|GIF|jpeg|JPEG', _upload_sanpham_l,$listhinh1234)){  





											
												 		$upnhieuhinh1=explode(',', $upnhieuhinh);
													
												 	// 	echo count($upnhieuhinh1);
														// die();
														for ($i=1; $i <count($upnhieuhinh1) ; $i++) { 
																
																$d->reset();
															    $sql="insert into #_product_photo(photo,id_cat,hienthi) values('".$upnhieuhinh1[$i-1]."','".$_POST['id']."',1)";

															     $d->query($sql);

														}
													





													}
												


												
											}
				

									}







					         		  transfer("C???p nh???p b??i th??nh c??ng ", "quan-ly-tin-moi-gioi.html");



							}	else{



								 transfer("H??? th???ng ??ang b???n ", "quan-ly-tin-moi-gioi.html");



							}





				       	}else{


				       		$ngay=date('d');
				       		$thang=date('m');

				       		$d->reset();
				       		$sql="select * from #_product order by id asc";
				       		$d->query($sql);
				       		$dshnay=$d->result_array();
				       		$dem=0;
				       		foreach ($dshnay as $key => $v) {
				       			if(date('d',$v['ngaytao'])==$ngay&&date('m',$v['ngaytao'])==$thang)
				       			{
				       				$dem++;
				       			}
				       		}
						   
				       		$macode='';
				       		$yeaer=date('y');
				       		$yeaer1=substr($yeaer,-1);
				       		$macode.=$yeaer1;
				       		$macode.=date('m');
				       		$macode.=date('d');
				       		 $macode.=changethutu($dem+1);

				       		



					    	$data['matin']=$macode;

					    	  //   	  echo $listhinh1;

				     	  // die();
					       if($anhdaidien = upload_image("file", 'jpg|png|gif|JPG|PNG|GIF|jpeg|JPEG', _upload_sanpham_l,$file_name)){

					                 $data['photo'] = $anhdaidien;

					      }


				  		  if($hinhdinhkem = upload_image_mutil("files", 'jpg|png|gif|JPG|PNG|GIF|jpeg|JPEG', _upload_sanpham_l,$listhinh1)){

				            $data['hinhdinhkem'] = $hinhdinhkem;     


				     	  }


				 

				     	   $data['hienthi'] = 0;
					        $d->setTable('product');

					        if($d->insert($data))

					         {

							         	

									if($_POST['listhinh']!=''){





											   	$id_bds = mysql_insert_id();

								         	$hinhdinhkem1=explode(',', $hinhdinhkem);

								         	for ($i=1; $i <count($hinhdinhkem1) ; $i++) { 

								          		

								          		$d->reset();

								          		$sql="insert into #_product_photo(photo,id_cat,hienthi) values('".$hinhdinhkem1[$i-1]."','$id_bds',1)";

								          		 $d->query($sql);



								   		  		  }



						         

									}









					         





					         		  transfer1("????ng b??i th??nh c??ng ", "dang-tin-moi-gioi.html",$macode);



					         }





					        else

					        {

					            transfer("H??? th???ng ??ang b???n ", "dang-tin-moi-gioi.html");

					        }

							



					    // end insert

					      }











			}






}else if($act=='quan-ly-tin-moi-gioi') {






		$d->reset();

		$sql="select id,ten_vi,photo,tenkhongdau_vi,ngaytao,matin from #_product where id_user='".$_SESSION['login1']['id']."' and id_cat in (360,358,406) and tinmoigioi=1 order by stt asc, id desc";

		$d->query($sql);

		$danhsachtin=$d->result_array();

		if($_REQUEST['del']>0){



			if(delete_product($_REQUEST['del'])==0 || delete_product($_REQUEST['del'])==2){





				 transfer("X??a kh??ng th??nh c??ng ", "quan-ly-tin-moi-gioi.html");

			}else

			{

					 transfer("X??a tin th??nh c??ng ", "quan-ly-tin-moi-gioi.html");

			}



		}


}






} else {


					 transfer("B???n kh??ng c?? quy???n v??o trang n??y", "trang-chu.html");


}


?>