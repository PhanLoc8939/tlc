<?php	if(!defined('_source')) die("Error");

	$title_bar = _dangky." - ".$title_bar;
			if(!empty($_POST)){
		
		
		
		$tk = addslashes($_POST['emaildk']);
		$passworddk = ($_POST['passworddk']);
		$fullname = addslashes($_POST['fullname']);
		$gender = addslashes($_POST['gender']);
		$ngaysinh = addslashes($_POST['popup-date']);
		$thangsinh = addslashes($_POST['popup-month']);
		$namsinh = addslashes($_POST['popup-year']);
	
	
			
		
		$tk = htmlspecialchars($tk);		
		$passworddk = htmlspecialchars($passworddk);
		$fullname = htmlspecialchars($fullname);
			

		if(strpos($tk,'@'))
		{

			$emaildk=$tk;
			$dienthoai='';
		}
		else
		{
			$dienthoai=$tk;
			$emaildk='';
		}

		if($emaildk!='')
		{
			$d->reset();
			$d->setTable('member');
			$d->setWhere('email', $emaildk);
			$d->select('id');
			if($d->num_rows()>0){
				$error11="Tài khoản của bạn đã có người sử dụng";
				transfer($error11, "dang-ky.html");
			}
					
		}

		if($dienthoai!='')
		{
			$d->reset();
			$d->setTable('member');
			$d->setWhere('dienthoai', $dienthoai);
			$d->select('id');
			if($d->num_rows()>0){
				$error11="Tài khoản của bạn đã có người sử dụng";
				transfer($error11, "dang-ky.html");
			}
		}
			
		
		$data['email'] = $emaildk;
		$data['dienthoai'] = $dienthoai;
		$data['password'] = md5($passworddk);
		$data['ten'] = $fullname;
	
		$data['sex'] = $gender;
		$data['ngaysinh'] ='';
		if($ngaysinh!=0)
		{
			$data['ngaysinh'].=$ngaysinh;
		}
		if($thangsinh!=0)
		{
			$data['ngaysinh'].="/".$thangsinh;
		}
		if($namsinh!=0)
		{
			$data['ngaysinh'].="/".$namsinh;
		}
	

		$data['role'] = 1;
		$data['hienthi'] = 1;
		$data['luot'] = 0;
		


		
		
		
			
			$d->setTable('member');	
			if($d->insert($data)){
				$last_id = $d->insert_id;
					if(isset($_POST['is_subscribed']))
						{


							$d->reset();
							$sql1="select * from #_newsletter where email='".$emaildk."' ";

							$d->query($sql1);
							if($d->num_rows() <1){

							$data1['email']=$emaildk;
							$data1['hienthi']=1;
							$data1['ngaytao']=time();
							$data1['stt']=1;
							$d->setTable('newsletter');
														
							$d->insert($data1);

							}


					}

					$d->reset();
					$sql = "select * from table_member where id='".$last_id."'";
					$d->query($sql);
					$row_user = $d-> fetch_array();
					if($d->num_rows()>0) {
							$_SESSION['login1']['id'] = $row_user['id'];
							$_SESSION['login1']['ten'] = $row_user['ten'];
							$_SESSION['login1']['email'] = $row_user['email'];
							$_SESSION['login1']['dienthoai'] = $row_user['dienthoai'];
							$_SESSION['login1']['pass'] = $row_user['password'];					
							$_SESSION['login1']['hienthi'] = $row_user['hienthi'];
							$_SESSION['login1']['role'] = $row_user['role'];
					}
				transfer("Bạn đã đăng ký thành công!", "thong-tin.html");
		}else
			 transfer("Xin lỗi quý khách.<br>Hệ thống bị lỗi, xin quý khách thử lại sau.", "trang-chu.html");
			




				
			
	}
?>














