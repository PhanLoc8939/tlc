<?php if($_SESSION['login1']['id']) {

   $ten=explode(' ', $_SESSION['login1']['ten']);

   

   ?>

<?php

   function edit_phanmuc($a,$b)

   {

   $sql="select * from table_product_cat where com='cat1' and id_cat=$a order by stt asc,id desc";

   $stmt=mysql_query($sql);

   $str='

   

      <option value="0">Phân mục</option>

     ';

   while ($row=@mysql_fetch_array($stmt)) 

   {

     if($row["id"]==(int)@$b)

       $selected="selected";

     else 

       $selected="";

     $str.='<option value='.$row["id"].' '.$selected.'>'.$row["ten_vi"].'</option>';     

   }

   

   return $str;

   }

   

   function edit_quan($a,$b)

   {

   $sql="select * from district where  province_id=$a order by id asc";

   $stmt=mysql_query($sql);

   $str='

   

      <option value="0">Chọn Quận/Huyện</option>

     ';

   while ($row=@mysql_fetch_array($stmt)) 

   {

     if($row["id"]==(int)@$b)

       $selected="selected";

     else 

       $selected="";

     $str.='<option value='.$row["id"].' '.$selected.'>'.$row["name"].'</option>';     

   }

   

   return $str;

   }

   

     function edit_phuong($a,$b)

   {

   $sql="select * from ward where district_id=$a order by id asc";

   $stmt=mysql_query($sql);

   $str='

   

      <option value="0">Chọn Phường/Xã</option>

     ';

   while ($row=@mysql_fetch_array($stmt)) 

   {

     if($row["id"]==(int)@$b)

       $selected="selected";

     else 

       $selected="";

     $str.='<option value='.$row["id"].' '.$selected.'>'.$row["name"].'</option>';     

   }

   

   return $str;

   }

   function edit_duan($a,$b)

   {

   $sql="select ten_vi,id from table_congtrinh where id_tinh_duan=$a order by id asc,stt desc";

   $stmt=mysql_query($sql);

   $str='

   

      <option value="0">Chọn Dự án</option>

     ';

   while ($row=@mysql_fetch_array($stmt)) 

   {

     if($row["id"]==(int)@$b)

       $selected="selected";

     else 

       $selected="";

     $str.='<option value='.$row["id"].' '.$selected.'>'.$row["ten_vi"].'</option>';     

   }

   

   return $str;

   }

   

   

   ?>

<div id="profile_page" class="row">

   <div class="col-lg-3 col-md-3  col-sm-3 thongtinleft white-background-new">

      <div class="box-header">

         TRANG CÁ NHÂN 

      </div>

      <div class="block_menu_profile space_bottom_20">

         <div class="block_info_profile">

            <div class="avata_profile">

               <img src="img/account-full.svg" alt="">

            </div>

            <div class="name_profile txt_color_1"><strong>Chào <?=$ten[count($ten)-1]?></strong></div>

            <a href="thong-tin-user.html" style="color: #333;font-size: 13px;">Chỉnh sửa tài khoản</a>

         </div>

         <div class="title">Quản lý thông tin cá nhân</div>

         <ul class="item">

            <li class="row-content <?=($_REQUEST['act']=='edit-user')?'active':'';?>">

               <a href="thong-tin-user.html" title="Thay đổi thông tin cá nhân">

               Thay đổi thông tin cá nhân</a>

            </li>

            <li class="row-content <?=($_REQUEST['act']=='doi-mat-khau')?'active':'';?>">

               <a href="thay-doi-mat-khau.html" title="Thay đổi mật khẩu">

               Thay đổi mật khẩu</a>

            </li>

         </ul>

         <div class="title">Quản lý tin rao </div>

         <ul class="item">

            <li class="row-content <?=($_REQUEST['act']=='quan-ly-rao-ban-cho-thue')?'active':'';?>">

               <a href="quan-ly-rao-ban-cho-thue.html" >

               Quản lý tin rao bán/cho thuê</a>

            </li>

            <li class="row-content <?=($_REQUEST['act']=='dang-tin-rao-ban-cho-thue')?'active':'';?>">

               <a href="dang-tin-rao-ban-cho-thue.html">

               Đăng tin rao bán/cho thuê</a>

            </li>

            <li class="row-content <?=($_REQUEST['act']=='quan-ly-tin-can-mua-can-thue')?'active':'';?>">

               <a href="quan-ly-tin-can-mua-can-thue.html" >

               Quản lý tin cần mua/cần thuê</a>

            </li>

            <li class="row-content <?=($_REQUEST['act']=='dang-tin-can-mua-can-thue')?'active':'';?>">

               <a href="dang-tin-can-mua-can-thue.html" >

               Đăng tin cần mua/cần thuê</a>

            </li>

            <li class="row-content <?=($_REQUEST['act']=='quan-ly-tin-moi-gioi')?'active':'';?>">

               <a href="quan-ly-tin-moi-gioi.html" >

               Quản lý tin môi giới</a>

            </li>

            <li class="row-content <?=($_REQUEST['act']=='dang-tin-moi-gioi')?'active':'';?>">

               <a href="dang-tin-moi-gioi.html" >

               Đăng tin môi giới</a>

            </li>

         </ul>

      </div>

   </div>

   <?php if($act=='edit-user') {?>

   <div class="col-md-9 col-sm-9 col-xs-12 thongtinright">

      <div class="box-header">

         THAY ĐỔI THÔNG TIN CÁ NHÂN

      </div>

      <div id="input_info_account" class="width_common space_bottom_20">

         <div class="blueborline " style="margin-top: 20px;">

            <span id="MainContent__userPage_ctl00_lblContactInfo">Thông tin cá nhân</span>

         </div>

         <div class="col-lg-12" style="padding: 0;">

            <div id="lg_register">

               <div class="main_content_sub_res">

                  <form action="thong-tin-user.html" method="post" id="capnhapthongtin" name="capnhapthongtin">

                     <div class="form-group">

                        <div class="relative">

                           <input name="emailedit" value="<?=$user['email']?>" id="emailedit" type="text" placeholder="Email (*)" class="form-control" >

                           <i aria-hidden="true" class="fa fa-envelope-o"></i>

                        </div>

                     </div>

                     <div class="form-group">

                        <div class="relative">

                           <input id="fullnamemedit" name="fullnamemedit" value="<?=$user['ten']?>" autocomplete="off" type="text" placeholder="Họ tên (*)" class="form-control" >

                           <i aria-hidden="true" class="fa fa-user"></i>

                        </div>

                     </div>

                     <div class="form-group">

                        <div class="relative">

                           <input id="dienthoaiedit" name="dienthoaiedit" type="text" value="<?=$user['dienthoai']?>" placeholder="Điện thoại (*)" class="form-control">

                           <i class="fa fa-mobile" aria-hidden="true"></i>

                        </div>

                     </div>

                     <div class="form-group">

                        <div class="relative">

                           <input name="cmndedit" value="<?=$user['cmnd']?>" id="cmndedit" type="text" placeholder="Mã số thuế/CMND" class="form-control" >

                           <i class="fa fa-barcode" aria-hidden="true"></i>

                        </div>

                     </div>

                     <div class="form-group row">

                        <div class="col-lg-2">

                           <label class="radio-inline"><input name="genderedit" <?=($user['sex']==1)?'checked="checked"':''?>   value="1" type="radio"> Nam </label>

                        </div>

                        <div class="col-lg-2">

                           <label class="radio-inline"><input name="genderedit" <?=($user['sex']==2)?'checked="checked"':''?>  value="2" type="radio"> Nữ </label>

                        </div>

                     </div>

                     <div class="row">

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">

                           <div class="form-group">

                              <select class="form-control" name="popup-dateedit">

                                 <option value="0">Ngày Sinh</option>

                                 <?=selectdate($ngay)?>

                              </select>

                           </div>

                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">

                           <div class="form-group">

                              <select class="form-control" name="popup-monthedit">

                                 <option value="">Tháng Sinh</option>

                                 <?=selectmonth($thang)?>

                              </select>

                           </div>

                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">

                           <div class="form-group">

                              <select class="form-control" name="popup-yearedit">

                                 <option value="">Năm Sinh</option>

                                 <?=selectyear($nam)?>

                              </select>

                           </div>

                        </div>

                     </div>

                     <div class="form-group row">

                        <div class="col-md-4 col-sm-4 col-xs-12">

                           <select class="form-control" name="id_tinh" id="id_tinh">

                              <option value="0">Chọn Tỉnh/Thành Phố (*)</option>

                              <?php foreach ($showtinh as $key => $v) {?>

                              <option <?=($v['id']==$user['id_tinh'])?'selected':''?>  value="<?=$v['id']?>"><?=$v['name']?></option>

                              <?php } ?>

                           </select>

                        </div>

                        <div class="col-md-4 col-sm-4 col-xs-12">

                           <select class="form-control" name="id_quan" id="id_quan">

                              <option value="0">Chọn Quận/Huyện (*)</option>

                              <?php foreach ($showquan as $key => $v) {?>

                              <option <?=($v['id']==$user['id_quan'])?'selected':''?> value="<?=$v['id']?>"><?=$v['name']?></option>

                              <?php } ?>  

                           </select>

                        </div>

                        <div class="col-md-4 col-sm-4 col-xs-12">

                           <select class="form-control" name="id_phuong" id="id_phuong">

                              <option <?=($v['id']==$user['id_quan'])?'selected':''?> value="0">Chọn Phường/Xã</option>

                              <?php foreach ($showphuong as $key => $v) {?>

                              <option <?=($v['id']==$user['id_phuong'])?'selected':''?> value="<?=$v['id']?>"><?=$v['name']?></option>

                              <?php } ?>

                           </select>

                        </div>

                     </div>

                     <div class="form-group">

                        <div class="relative">

                           <input name="diachiedit" value="<?=$user['diachi']?>" id="emailedit" type="text" placeholder="Số nhà + Đường" class="form-control" >

                           <i class="fa fa-map-marker" aria-hidden="true"></i>

                        </div>

                     </div>

                     <div class="form-group row">

                        <div class="col-md-6 col-sm-6 col-xs-12">

                           <div class="relative">

                              <input name="faceedit" value="<?=$user['facebook']?>" id="faceedit" type="text" placeholder="Facebook" class="form-control" >

                           </div>

                        </div>

                        <div class="col-md-6 col-sm-6 col-xs-12">

                           <div class="relative">

                              <input name="skypeedit" value="<?=$user['skype']?>" id="skypeedit" type="text" placeholder="Skype IM" class="form-control" >

                           </div>

                        </div>

                     </div>

                     <div class="form-group row">

                        <div class="col-md-6 col-sm-6 col-xs-12">

                           <div class="relative">

                              <input name="zaloedit" value="<?=$user['zalo']?>" id="zaloedit" type="text" placeholder="Số điện thoại đăng ký Zalo" class="form-control" >

                           </div>

                        </div>

                        <div class="col-md-6 col-sm-6 col-xs-12">

                           <div class="relative">

                              <input name="viberedit" value="<?=$user['viber']?>" id="viberedit" type="text" placeholder="Số điện thoại đăng ký Viber" class="form-control" >

                           </div>

                        </div>

                     </div>

                     <button id="luuthongtin" name="luuthongtin" type="submit" class="btn2 btn_site_1" style="    width: 100%;

                        float: left;

                        padding: 8px 0;

                        font-size: 15px;background: #ff6b00">Cập nhập</button>

                  </form>

               </div>

            </div>

         </div>

      </div>

   </div>

</div>

</div>

<?php } elseif($act=='thay-doi-mat-khau') {?>

<div class="col-md-9 col-sm-9 col-xs-12 thongtinright">

   <div class="box-header">

      THAY ĐỔI MẬT KHẨU

   </div>

   <form action="thay-doi-mat-khau.html" method="post" id="capnhapthongtin" name="capnhapthongtin">

      <div class="block_nhapmatkhau " style="margin-top: 20px;">

         <div class="form-group">

            <input class="form-control" type="password" name="passcuedit" required="required" placeholder="Nhập mật khẩu cũ">

         </div>

         <div class="form-group">

            <input class="form-control" type="password" name="passmoiedit" required="required" placeholder="Nhập mật khẩu mới">

         </div>

         <div class="form-group">

            <input class="form-control" type="password" name="repassedit" required="required" placeholder="Nhập lại mật khẩu mới">

         </div>

      </div>

      <button id="capnhapmk" name="capnhapmk" type="submit" class="btn2 btn_site_1" style="    width: 100%;

         float: left;

         padding: 8px 0;

         font-size: 15px;background: #ff6b00">Cập nhập</button>

   </form>

</div>

<?php } else if($act=='dang-tin-rao-ban-cho-thue'){?>

<div class="col-md-9 col-sm-9 col-xs-12 thongtinright post-product">

   <div class="post-bg-Title mgt10">

      <h1>Đăng tin rao bán, cho thuê nhà đất</h1>

      <div>

         (Qúy khách nên đăng nhập/đăng ký thành viên để quản lý tin đăng dễ dàng hơn)

      </div>

   </div>
    <p class="pp">Vui lòng chọn đúng mục phù hợp để tin được duyệt và dễ dàng tiếp cận đúng khách hàng mục tiêu</p>
   <div class="dang-tin-rao-tab">

         <a class="<?=($act=='dang-tin-rao-ban-cho-thue')?'active':''?> fl" href="dang-tin-rao-ban-cho-thue.html" title="Cần bán/Cho thuê">Cần bán/Cho thuê</a>

      <a class="<?=($act=='dang-tin-can-mua-can-thue')?'active':''?> fl" href="dang-tin-can-mua-can-thue.html" title="Cần mua/Cần thuê">Cần mua/Cần thuê</a>
       <a class="<?=($act=='dang-tin-moi-gioi')?'active':''?> fl" href="dang-tin-moi-gioi.html" title="Tin mối giới">Tin môi giới</a>


   </div>

   <form action="dang-tin-rao-ban-cho-thue.html" method="post" id="frm_dangtin" enctype="multipart/form-data" >

      <div class="col-lg-12" style="padding: 0;">

         <!-- thong tin co bản -->

         <div class="box-header" style="text-align: left;padding: 12px 15px;line-height: normal;text-transform: uppercase;">

            Thông tin cơ bản

         </div>

         <div class="mucdangtin">

            <div class="main_content_sub_res">

               <!-- nhập thông tin đăng dự án -->

               <div class="form-group row">

                  <input type="hidden" name="id" id="ktid" value="<?=$_REQUEST['id']?>">

                  <div class="col-xs-12">

                     <label>Tiêu đề (*) </label>

                     <input name="txttenduan" value="<?=$item['ten_vi']?>" id="txttenduan" type="text" placeholder="Tiêu đề dự án" class="form-control" >

                  </div>

               </div>

               <div class="form-group row">

                  <div class="col-md-6 col-sm-6 col-xs-12">

                     <label>Hình thức  (*)</label>

                     <select class="form-control" name="id_hinhthuc" id="id_hinhthuc">

                        <option value="0">Hình thức</option>

                        <?php foreach ($cat_main1 as $key => $v) {?>

                        <option <?=($v['id']==$item['id_cat'])?'selected':''?>  value="<?=$v['id']?>"><?=$v['ten_vi']?></option>

                        <?php } ?>

                     </select>

                  </div>

                  <div class="col-md-6 col-sm-6 col-xs-12">

                     <label>Loại  (*)</label>

                     <select class="form-control" name="id_phanmuc" id="id_phanmuc">

                     <?=edit_phanmuc($item['id_cat'],$item['id_cat1'])?>

                     </select>

                  </div>

               </div>

               <div class="form-group row">

                  <div class="col-md-6 col-sm-6 col-xs-12">

                     <label>Tỉnh/Thành phố  (*)</label>

                     <select class="form-control" name="id_tinh" id="id_tinh">

                        <option value="0">Tỉnh/Thành phố</option>

                        <?php foreach ($showtinh as $key => $v) {?>

                        <option <?=($v['id']==$item['id_tinh'])?'selected':''?>  value="<?=$v['id']?>"><?=$v['name']?></option>

                        <?php } ?>

                     </select>

                  </div>

                  <div class="col-md-6 col-sm-6 col-xs-12">

                     <label>Quận/Huyện  (*)</label>

                     <select class="form-control" name="id_quan" id="id_quan">

                     <?=edit_quan($item['id_tinh'],$item['id_quan'])?>

                     </select>

                  </div>

               </div>

               <div class="form-group row">

                  <div class="col-md-6 col-sm-6 col-xs-12">

                     <label>Phường/Xã</label>

                     <select class="form-control" name="id_phuong" id="id_phuong">

                     <?=edit_phuong($item['id_quan'],$item['id_tinh'])?>

                     </select>

                  </div>

                  <div class="col-md-6 col-sm-6 col-xs-12">

                     <label>Địa chỉ BĐS (*)</label>

                     <input name="txtdiachi" value="<?=$item['diachi']?>" id="txtdiachi" type="text" placeholder="Số nhà + Đường" class="form-control" >

                  </div>

               </div>

               <div class="form-group row">

                  <div class="col-md-6 col-sm-6 col-xs-12">

                     <label>Dự án</label>

                     <select class="form-control" name="id_duan" id="id_duan">

                     <?=edit_duan($item['id_tinh'],$item['id_duan'])?>

                     </select>

                  </div>

                  <div class="col-md-6 col-sm-6 col-xs-12">

                     <label>Diện tích (m2)</label>

                     <input name="txtdientich" value="<?=$item['dientich']?>" id="txtdientich1" type="number" placeholder="Diện tích" class="form-control" >

                  </div>

               </div>

               <div class="form-group row">

                  <div class="col-md-6 col-sm-6 col-xs-12">

                     <label>Giá bán</label>

                     <input name="txtgia1" value="<?=$item['gia1']?>" id="txtgia1" type="text" placeholder="Giá bán" class="form-control" >

                  </div>

                  <div class="col-md-6 col-sm-6 col-xs-12">

                     <label>Đơn vị</label>

                     <select name="txtdonvi" id="txtdonvi1" class="form-control">

                        <option  <?=($item['donvi']=='0')?'selected':''?> value="0">Thỏa thuận</option>

                        <option  <?=($item['donvi']=='1')?'selected':''?> value="1">Triệu</option>

                        <option  <?=($item['donvi']=='2')?'selected':''?> value="2">Tỷ</option>

                        <option  <?=($item['donvi']=='3')?'selected':''?> value="3">Trăm nghìn/m2</option>

                        <option  <?=($item['donvi']=='4')?'selected':''?> value="4">Triệu/m2</option>

                     </select>

                  </div>

               </div>

               <div class="form-group row">

                  <div class=" col-xs-12">

                     <label>Tổng giá</label>

                     <input style="background: none;color: #f00;border: none;outline: none;box-shadow: none;" readonly="readonly" value="<?=jam_read_num_forvietnamese($item['gia'])?>" id="txtgiaban1" type="text" placeholder="" class="form-control" >

                     <input type="hidden" name="txtgiaban" id="txtgiaban2" value="<?=$item['gia']?> ">

                  </div>

               </div>

            </div>

            <!-- end thong tin-->

         </div>

    

      <!-- end thông tin cơ bản-->

      <!--thông tin mô tả-->

      <div class="box-header box-next" style="text-align: left;padding: 12px 15px;line-height: normal;text-transform: uppercase;">

         Thông tin mô tả

      </div>

      <div class="mucdangtin">

         <div class="main_content_sub_res">

            <!-- nhập thông tin đăng dự án -->

            <div class="form-group row">

               <div class="col-xs-12">

                  <label style="width: 100%;">(*)Tối đa chỉ 3000 ký tự</label>

                  <textarea name="txtmota" id="txtmota" placeholder="Quý khách nên mô tả đầy đủ thông tin BĐS. Bao gồm và không giới hạn các nội dung: (1) Đặc điểm Bất động sản, vị trí địa lý; (2) Tình trạng/hiện trạng BĐS; (3) Pháp lý; (4) Khoảng cách BĐS kết nối tới các cơ quan, trường học, bệnh viện, chợ, công viên, khu vui chơi giải trí cho trẻ em; (5) Tình trạng dân cư khu vực (sầm uất, yên tĩnh, buôn bán)…
Thời gian xem BĐS, thời gian liên hệ (vui lòng liên hệ số ….. từ …h đến …..h. Giá có thỏa thuận không…..
" class="form-control" rows="50" cols="100" style="height: 170px;"><?=$item['noidung_vi']?></textarea>

               </div>

            </div>

            <!-- end thong tin-->

         </div>

      </div>

      <!-- end thông tin mô tả -->

      <!--thông tin khác-->

      <div class="box-header box-next" style="text-align: left;padding: 12px 15px;line-height: normal;text-transform: uppercase;">

         Thông tin khác

      </div>

      <div class="mucdangtin">

         <div class="main_content_sub_res">

            <!-- nhập thông tin đăng dự án -->

            <div class="form-group row">

               <div class="col-md-6 col-sm-6 col-xs-12">

                  <label>Hướng nhà</label>

                  <select class="form-control" name="huongnha" id="huongnha">

                     <option <?=($item['huongnha']=='KXĐ')?'selected':''?> value="KXĐ">KXĐ</option>

                     <option <?=($item['huongnha']=='Đông')?'selected':''?> value="Đông">Đông</option>

                     <option <?=($item['huongnha']=='Tây')?'selected':''?> value="Tây">Tây</option>

                     <option <?=($item['huongnha']=='Nam')?'selected':''?> value="Nam">Nam</option>

                     <option <?=($item['huongnha']=='Bắc')?'selected':''?> value="Bắc">Bắc</option>

                     <option <?=($item['huongnha']=='Đông-Bắc')?'selected':''?> value="Đông-Bắc">Đông - Bắc</option>

                     <option <?=($item['huongnha']=='Tây-Bắc')?'selected':''?> value="Tây-Bắc">Tây - Bắc</option>

                     <option <?=($item['huongnha']=='Tây-Nam')?'selected':''?> value="Tây-Nam">Tây - Nam</option>

                     <option <?=($item['huongnha']=='Đông-Nam')?'selected':''?> value="Đông-Nam">Đông - Nam</option>

                  </select>

               </div>

               <div class="col-md-6 col-sm-6 col-xs-12">

                  <label>Hiện Trạng</label>

                  <select class="form-control" name="huongbancong" id="huongbancong">

                     <option <?=($item['huongbancong']=='KXĐ')?'selected':''?> value="KXĐ">KXĐ</option>

                     <option <?=($item['huongbancong']=='Nhà nát')?'selected':''?> value="Nhà nát">Nhà nát</option>

                     <option <?=($item['Đang ở']=='Đang ở')?'selected':''?> value="Đang ở">Đang ở</option>

                     <option <?=($item['huongbancong']=='Nhà mới')?'selected':''?> value="Nhà mới">Nhà mới</option>

                  </select>

               </div>

            </div>

            <div class="form-group row">

               <div class="col-md-6 col-sm-6 col-xs-12">

                  <label>Số phòng ngủ</label>

                  <input name="txtsophongngu" value="<?=$item['sophongngu']?>" id="txtsophongngu" type="number" placeholder="Số phòng ngủ" class="form-control" >

               </div>

               <div class="col-md-6 col-sm-6 col-xs-12">

                  <label>Số toilet</label>

                  <input name="txtsotoilet" value="<?=$item['sotoilet']?>" id="txtsotoilet" type="number" placeholder="Số toilet" class="form-control" >

               </div>

            </div>

            <div class="form-group row">

               <div class="col-md-6 col-sm-6 col-xs-12">

                  <label>Số tầng</label>

                  <input name="txtsotang" value="<?=$item['sotang']?>" id="txtsotang" type="number" placeholder="Số tầng" class="form-control" >

               </div>

               <div class="col-md-6 col-sm-6 col-xs-12">

                  <label>Vị trí</label>

                  <select name="txtvitri" class="form-control">

                     <option <?=($item['vitri']=='KXĐ')?'selected':''?> value="KXĐ">KXĐ</option>

                     <option <?=($item['vitri']=='Mặt tiền')?'selected':''?> value="Mặt tiền">Mặt tiền</option>

                     <option <?=($item['vitri']=='Mặt tiền NB')?'selected':''?> value="Mặt tiền NB">Mặt tiền NB</option>

                     <option <?=($item['vitri']=='Hẻm >4m')?'selected':''?> value="Hẻm >4m">Hẻm >4m</option>

                     <option <?=($item['vitri']=='Hẻm <4m')?'selected':''?> value="Hẻm <4m">Hẻm <4m</option>

                  </select>

               </div>

            </div>

            <div class="form-group row">

               <div class="col-xs-12">

                  <label style="width: 100%;">Nội thất</label>

                  <textarea name="txtnoithat" class="form-control" placeholder="Quý khách nên mô tả các loại nội thất đi kèm nhà, tình trạng, chất lượng…..hệ thống điện, cấp nước, thoát nước." rows="50" cols="100" style="height: 150px;"><?=$item['noithat']?></textarea>

               </div>

            </div>

            <div class="form-group row">

               <div class="col-xs-12">

                  <label style="width: 100%;">Bản đồ ( Nhập iframe )</label>

                  <textarea name="txtbando" class="form-control" rows="50" cols="100" style="height: 150px;" placeholder="Truy cập https://www.google.com/maps. => B1: Xác định vị trí trên bản đồ (C1: click chuột (1 cái) vào vị trí BĐS, 1 bảng địa chỉ sẽ hiện ra phía dưới bản đồ, click vào địa chỉ sẽ tự động nhập vào ô “Search google maps”. Bạn có thể sửa lại địa chỉ cho chính xác; C2: nhập trực tiếp địa chỉ vào ô “Search google maps”)
=> B2: Click vào nút share (chia sẻ) xuất hiện bảng mới. => B3: Chuyển sang thẻ thứ 2 “Embed a map” hay “Nhúng bản đồ”. => B4: Click nút “Copy HTML” và paste vào ô.
"><?=$item['bando']?></textarea>

               </div>

            </div>

            <!-- end thong tin-->

         </div>

      </div>

      <!-- end thông tin khác-->

      <!--hinh ảnh-->

      <div class="box-header box-next" style="text-align: left;padding: 12px 15px;line-height: normal;text-transform: uppercase;">

         Hình ảnh

      </div>

      <div class="mucdangtin">

         <div class="main_content_sub_res">

            <div class="form-group row">

               <div class="col-xs-12">

                  <p style="    font-size: 13px;">

                    Tối thiểu 3 ảnh và tối đa 8 ảnh, mỗi ảnh tối đa 2MB. Đối với tin đăng chính chủ ghi pháp lý đầy đủ, phải có ảnh chụp sổ/hợp đồng để tin đăng được duyệt nhanh hơn. Nếu không đầy đủ, tin đăng sẽ được chuyển sang mục TIN MÔI GIỚI. Ảnh nên chụp gồm tổng quan đường/hẻm trước BĐS, chính diện cổng có bảng số nhà, và chi tiết bên trong BĐS.

                  </p >

               </div>

               <?php if($_REQUEST['id']!=''){?>

               <div class="col-md-6 col-sm-6 col-xs-12">

                  <label>Ảnh hiện tại</label>

                  <div style="margin: 10px 0;">

                     <img style="width: 164px" src="<?=_upload_sanpham_l.$item['photo']?>">

                  </div>

               </div>

               <?php } else {?>

               <div class="col-md-6 col-sm-6 col-xs-12">

                  <label>Ảnh Xem trước</label>

                  <div style="margin: 10px 0;">

                     <img  style="width: 164px" id="blah" src="#"  />

                  </div>

               </div>

               <?php } ?>

               <div class="col-md-12 col-sm-12 col-xs-12">

                  <label>Chọn ảnh đại diện</label>

                  <div class="spanButtonPlaceholder block-upload-item" id="upload-drop-zone" style="position: relative; overflow: hidden; direction: ltr;">

                     <p>(Click để tải ảnh)</p>

                     <input  type="file" name="file" id="imgInp" style="position: absolute; right: 0px; top: 0px; font-family: Arial; font-size: 118px; margin: 0px; padding: 0px; cursor: pointer; opacity: 0;">

                  </div>





               </div>

            </div>

            <div class="form-group">

               <label for="inputName">Chọn ảnh đính kèm</label>

               <input type="file" class="form-control"  id="files"  name="files[]" multiple="multiple">

               <span class="description" style="color: #333;padding-top: 10px;

                  padding-bottom: 10px;

                  float: left;

                  width: 100%;">Type: .jpg|.gif|.png|.jpeg &nbsp;&nbsp;;&nbsp;&nbsp; Ảnh chuẩn:  Width:600px - Height:600px.</span>

               <div id="selectedFiles">
                  

                        <?php if($_REQUEST['id']!=''){?>
                           <?php foreach ($photo_tin as $key => $v) {?>
                                 <div class="col-md-3 col-sm-4 col-xs-12">

                                       <img src="<?=_upload_sanpham_l.$v['photo']?>" class="selFile" data-file="<?=$v['photo']?>" title="Click to remove">

                                 </div>


                            <?php } ?>

                        <?php } ?>



               </div>

            </div>

            <div class="form-group">

               <input type="hidden" name="listhinh" id="listhinh" value="<?=$chuoihinh?>">

            </div>

         </div>

      </div>

      <!-- end hình ảnh -->

      <!-- lien he-->

      <div class="box-header box-next" style="text-align: left;padding: 12px 15px;line-height: normal;text-transform: uppercase;">

         Liên hệ

      </div>

      <div class="mucdangtin">

         <div class="main_content_sub_res">

            <div class="form-group row">

               <div class="col-md-6 col-sm-6 col-xs-12">

                  <label class="label1">Tên liên hệ</label>

                  <input  name="txttenlienhe" value="<?=$user['ten']?>" id="txttenlienhe" type="text" placeholder="Tên liên hệ" class="form-control input1" >

               </div>

               <div class="col-md-6 col-sm-6 col-xs-12">

                  <label class="label2">Địa chỉ</label>
                     <?php if($_REQUEST['id']!=''){?>

                        <input name="txtdiachilienhe" value="<?=$item['diachilienhe']?>" id="txtdiachilienhe" type="text" placeholder="Địa chỉ" class="form-control input2" >

                     <?php } else {?>
                  <input name="txtdiachilienhe" value="<?=$user['diachi']?><?=(get_phuong($user['id_phuong'])!=1)?', '.get_phuong($user['id_phuong']):''?><?=(get_quan($user['id_quan'])!=1)?', '.get_quan($user['id_quan']):''?><?=(get_tinh($user['id_tinh'])!=1)?', '.get_tinh($user['id_tinh']):''?>" id="txtdiachilienhe" type="text" placeholder="Địa chỉ" class="form-control input2" >
                    <?php } ?>
               </div>

            </div>

            <div class="form-group row">

               <div class="col-md-6 col-sm-6 col-xs-12">

                  <label class="label1">Điện thoại (*)</label>

                <?php if($_REQUEST['id']!=''){?>
                  <input name="txtdienthoailienhe" value="<?=$item['dienthoailienhe']?>" id="txtdienthoailienhe" type="text" placeholder="Điện thoại" class="form-control input1" >
               <?php } else {?>
                           <input name="txtdienthoailienhe" value="<?=$user['dienthoai']?>" id="txtdienthoailienhe" type="text" placeholder="Điện thoại" class="form-control input1" >

               <?php } ?>
               </div>

               <div class="col-md-6 col-sm-6 col-xs-12">

                  <label class="label2">Email</label>

                  <input name="txtemaillienhe" value="<?=$user['email']?>" id="txtemaillienhe" type="text" placeholder="Email" class="form-control input2" >

               </div>

            </div>

         </div>

      </div>

      <!-- end liên hệ-->

      <!-- gui tin -->

      <button id="guitin" name="guitin" type="button" class="btn2 btn_site_1" style="    width: 100%;

         float: left;

         padding: 8px 0;

         font-size: 15px;margin-top: 20px;background: #ff6b00">Đăng tin</button>

      <!-- end gui tin-->

</div>

</form>

</div>

<?php } else if($act=='quan-ly-rao-ban-cho-thue') {?>

<div class="col-md-9 col-sm-9 col-xs-12 thongtinright ">

   <div class="box-header">

      QUẢN LÝ TIN RAO BÁN, CHO THUÊ

   </div>

   <div class="col-xs-12 " style="padding: 0">

      <div class="mucdangtin">

         <div class="main_content_sub_res">

            <!--show danh sách tin-->

            <table class="table table-striped table_tin_desk">

               <thead class="tbl_head">

                  <tr>

                     <th scope="col">#</th>

                     <th scope="col">Mã tin</th>

                     <th scope="col">Photo</th>

                     <th scope="col">Tiêu đề</th>

                     <th scope="col">Ngày đăng</th>

                     <th scope="col">Sửa</th>

                     <th scope="col">Xóa</th>

                  </tr>

               </thead>

               <tbody class="tbl_body">

                  <?php foreach ($danhsachtin as $key => $v) {?>

                  <tr>

                     <th scope="row"><?=$key++?></th>

                     <td><?=$v['matin']?></td>

                     <td><img style="width: 70px" src="<?=_upload_sanpham_l.$v['photo']?>"></td>

                     <td><?=$v['ten_vi']?></td>

                     <td><?=date('d/m/Y',$v['ngaytao'])?></td>

                     <td><a href="dang-tin-rao-ban-cho-thue-<?=$v['id']?>.html"><img src="img/edit.png"></a></td>

                     <td><a href="xoa-tin-<?=$v['id']?>.html" onClick="if(!confirm('Xác nhận xóa')) return false;"><img src="img/delete.png"></a></td>

                  </tr>

                  <?php } ?>

               </tbody>

            </table>

            <table class="table table-striped table_tin_mobi">

               <tbody class="tbl_body">

                  <?php foreach ($danhsachtin as $key => $v) {?>

                  <tr style="<?=($key%2==0)?'background:#f9f9f9':'background: #333;color:#fff'?>">

                     <td>#</td>

                     <td><?=$key+1?></td>

                  </tr>

                  <tr style="<?=($key%2==0)?'background:#f9f9f9':'background: #333;color:#fff'?>">

                     <td>Mã tin</td>

                     <td><?=$v['matin']?></td>

                  </tr>

                  <tr style="<?=($key%2==0)?'background:#f9f9f9':'background:  #333;color:#fff'?>">

                     <td>Photo</td>

                     <td><img style="width: 70px" src="<?=_upload_sanpham_l.$v['photo']?>"></td>

                  </tr>

                  <tr style="<?=($key%2==0)?'background:#f9f9f9':'background:  #333;color:#fff'?>">

                     <td>Tiêu đề</td>

                     <td><?=$v['ten_vi']?>

                        <a href="dang-tin-rao-ban-cho-thue-<?=$v['id']?>.html"><img src="img/edit.png"></a>

                        <a href="xoa-tin-<?=$v['id']?>.html" onClick="if(!confirm('Xác nhận xóa')) return false;"><img src="img/delete.png"></a>

                     </td>

                  </tr>

                  <tr style="<?=($key%2==0)?'background:#f9f9f9':'background: #333;color:#fff'?>">

                     <td>Ngày đăng</td>

                     <td><?=date('d/m/Y',$v['ngaytao'])?></td>

                  </tr>

                  <?php } ?>

               </tbody>

               </tbody>

            </table>

            <!-- end danh sach tin-->

         </div>

      </div>

   </div>

</div>

<?php } else if($act=='dang-tin-can-mua-can-thue'){?>

<div class="col-md-9 col-sm-9 col-xs-12 thongtinright post-product">

   <div class="post-bg-Title mgt10">

      <h1>Đăng tin cần bán, cần thuê nhà đất</h1>

      <div>

         (Qúy khách nên đăng nhập/đăng ký thành viên để quản lý tin đăng dễ dàng hơn)

      </div>

   </div>
 <p class="pp">Vui lòng chọn đúng mục phù hợp để tin được duyệt và dễ dàng tiếp cận đúng khách hàng mục tiêu</p>
   <div class="dang-tin-rao-tab">

       <a class="<?=($act=='dang-tin-rao-ban-cho-thue')?'active':''?> fl" href="dang-tin-rao-ban-cho-thue.html" title="Cần bán/Cho thuê">Cần bán/Cho thuê</a>

      <a class="<?=($act=='dang-tin-can-mua-can-thue')?'active':''?> fl" href="dang-tin-can-mua-can-thue.html" title="Cần mua/Cần thuê">Cần mua/Cần thuê</a>
       <a class="<?=($act=='dang-tin-moi-gioi')?'active':''?> fl" href="dang-tin-moi-gioi.html" title="Tin mối giới">Tin môi giới</a>


   </div>

   <form action="dang-tin-can-mua-can-thue.html" method="post" id="frm_dangtin" enctype="multipart/form-data" >

      <div class="col-lg-12" style="padding: 0;">

         <div class="box-header" style="text-align: left;padding: 12px 15px;line-height: normal;text-transform: uppercase;">

            Thông tin mô tả

         </div>

         <div class="mucdangtin">

            <div class="main_content_sub_res">

               <div class="form-group row">

                  <input type="hidden" name="id" id="ktid" value="<?=$_REQUEST['id']?>">

                  <div class="col-xs-12">

                     <label>Tiêu đề (*) </label>

                     <input name="txttenduan" value="<?=$item['ten_vi']?>" id="txttenduan" type="text" placeholder="Tiêu đề dự án" class="form-control" >

                  </div>

               </div>

               <div class="form-group row">

                  <div class="col-xs-12">

                     <label style="width: 100%;">(*) Mô tả tối đa chỉ 3000 ký tự</label>

                     <textarea name="txtmota" id="txtmota" placeholder="Quý khách nên mô tả đầy đủ thông tin BĐS. Bao gồm và không giới hạn các nội dung: (1) Đặc điểm Bất động sản, vị trí địa lý; (2) Tình trạng/hiện trạng BĐS; (3) Pháp lý; (4) Khoảng cách BĐS kết nối tới các cơ quan, trường học, bệnh viện, chợ, công viên, khu vui chơi giải trí cho trẻ em; (5) Tình trạng dân cư khu vực (sầm uất, yên tĩnh, buôn bán)…" class="form-control" rows="50" cols="100" style="height: 170px;"><?=$item['noidung_vi']?></textarea>

                  </div>

               </div>

               <div class="form-group row">

                  <div class="col-xs-12">

                     <p style="    font-size: 13px;">

                        Tối thiểu 3 ảnh và tối đa 8 ảnh. Mỗi ảnh tối đa 2MB. Trường hợp đăng tin chính chủ phải có ảnh hồ sơ pháp lý và địa chỉ bất động sản rõ ràng. Trường hợp đăng không hợp lệ tin đăng sẽ không được duyệt.

                     </p >

                  </div>

                  <?php if($_REQUEST['id']!=''){?>

                  <div class="col-md-6 col-sm-6 col-xs-12">

                     <label>Ảnh hiện tại</label>

                     <div style="margin: 10px 0;">

                        <img style="width: 164px" src="<?=_upload_sanpham_l.$item['photo']?>">

                     </div>

                  </div>

                  <?php } else {?>

                  <div class="col-md-6 col-sm-6 col-xs-12">

                     <label>Ảnh Xem trước</label>

                     <div style="margin: 10px 0;">

                        <img  style="width: 164px" id="blah" src="#"  />

                     </div>

                  </div>

                  <?php } ?>

                  <div class="col-md-12 col-sm-12 col-xs-12">

                     <label>Chọn ảnh đại diện</label>

                     <div class="spanButtonPlaceholder block-upload-item" id="upload-drop-zone" style="position: relative; overflow: hidden; direction: ltr;">

                        <p>(Click để tải ảnh)</p>

                        <input  type="file" name="file" id="imgInp" style="position: absolute; right: 0px; top: 0px; font-family: Arial; font-size: 118px; margin: 0px; padding: 0px; cursor: pointer; opacity: 0;">

                     </div>

                  </div>

               </div>

               <div class="form-group">

                  <label for="inputName">Chọn ảnh đính kèm</label>

                  <input type="file" class="form-control"  id="files"  name="files[]" multiple="multiple">

                  <span class="description" style="color: #f00;padding-top: 10px;

                     padding-bottom: 10px;

                     float: left;

                     width: 100%;">Type: .jpg|.gif|.png|.jpeg &nbsp;&nbsp;;&nbsp;&nbsp; Ảnh chuẩn:  Width:600px - Height:600px.</span>

                      <div id="selectedFiles">
                  

                        <?php if($_REQUEST['id']!=''){?>
                           <?php foreach ($photo_tin as $key => $v) {?>
                                 <div class="col-md-3 col-sm-4 col-xs-12">

                                       <img src="<?=_upload_sanpham_l.$v['photo']?>" class="selFile" data-file="<?=$v['photo']?>" title="Click to remove">

                                 </div>


                            <?php } ?>

                        <?php } ?>



                     </div>

               </div>

               <div class="form-group">

                  <input type="hidden" name="listhinh" id="listhinh" value="<?=$chuoihinh?>">

               </div>

            </div>

         </div>

         <div class="box-header box-next" style="text-align: left;padding: 12px 15px;line-height: normal;text-transform: uppercase;">

            Thông tin cơ bản

         </div>

         <!-- thông tin cơ bản-->

         <div class="mucdangtin">

            <div class="main_content_sub_res">

               <div class="form-group row">

                  <div class="col-md-6 col-sm-6 col-xs-12">

                     <label>Hình thức  (*)</label>

                     <select class="form-control" name="id_hinhthuc" id="id_hinhthuc">

                        <option value="0">Hình thức</option>

                        <?php foreach ($cat_main2 as $key => $v) {?>

                        <option <?=($v['id']==$item['id_cat'])?'selected':''?>  value="<?=$v['id']?>"><?=$v['ten_vi']?></option>

                        <?php } ?>

                     </select>

                  </div>

                  <div class="col-md-6 col-sm-6 col-xs-12">

                     <label>Loại  (*)</label>

                     <select class="form-control" name="id_phanmuc" id="id_phanmuc">

                     <?=edit_phanmuc($item['id_cat'],$item['id_cat1'])?>

                     </select>

                  </div>

               </div>

               <div class="form-group row">

                  <div class="col-md-6 col-sm-6 col-xs-12">

                     <label>Tỉnh/Thành phố  (*)</label>

                     <select class="form-control" name="id_tinh" id="id_tinh">

                        <option value="0">Tỉnh/Thành phố</option>

                        <?php foreach ($showtinh as $key => $v) {?>

                        <option <?=($v['id']==$item['id_tinh'])?'selected':''?>  value="<?=$v['id']?>"><?=$v['name']?></option>

                        <?php } ?>

                     </select>

                  </div>

                  <div class="col-md-6 col-sm-6 col-xs-12">

                     <label>Quận/Huyện  (*)</label>

                     <select class="form-control" name="id_quan" id="id_quan">

                     <?=edit_quan($item['id_tinh'],$item['id_quan'])?>

                     </select>

                  </div>

               </div>

               <div class="form-group row">

                  <div class="col-md-6 col-sm-6 col-xs-12">

                     <label>Phường/Xã</label>

                     <select class="form-control" name="id_phuong" id="id_phuong">

                     <?=edit_phuong($item['id_quan'],$item['id_tinh'])?>

                     </select>

                  </div>

                  <div class="col-md-6 col-sm-6 col-xs-12">

                     <label>Địa chỉ BĐS (*)</label>

                     <input name="txtdiachi" value="<?=$item['diachi']?>" id="txtdiachi" type="text" placeholder="Số nhà + Đường" class="form-control" >

                  </div>

               </div>

               <div class="form-group row">

                  <div class="col-md-6 col-sm-6 col-xs-12">

                     <label>Dự án</label>

                     <select class="form-control" name="id_duan" id="id_duan">

                     <?=edit_duan($item['id_tinh'],$item['id_duan'])?>

                     </select>

                  </div>

                  <div class="col-md-6 col-sm-6 col-xs-12">

                     <label>Diện tích</label>

                     <select class="form-control" name="txtdientich" id="txtdientich">

                        <option <?=($item['dientich']=='0')?'selected':''?> value="0">Chưa xác định</option>

                        <option <?=($item['dientich']=='30 - 50 m')?'selected':''?> value="30 - 50 m">30 - 50 m2</option>

                        <option <?=($item['dientich']=='50 - 80 m2')?'selected':''?> value="50 - 80 m2">50 - 80 m2</option>

                        <option <?=($item['dientich']=='80 - 100 m2')?'selected':''?> value="80 - 100 m2">80 - 100 m2</option>

                        <option <?=($item['dientich']=='100 - 150 m2')?'selected':''?> value="100 - 150 m2">100 - 150 m2</option>

                        <option <?=($item['dientich']=='150 - 200 m2')?'selected':''?> value="150 - 200 m2">150 - 200 m2</option>

                        <option <?=($item['dientich']=='200 - 250 m2')?'selected':''?> value="200 - 250 m2">200 - 250 m2</option>

                        <option <?=($item['dientich']=='250 - 300 m2')?'selected':''?> value="250 - 300 m2">250 - 300 m2</option>

                        <option <?=($item['dientich']=='300 - 500 m2')?'selected':''?> value="300 - 500 m2">300 - 500 m2</option>

                        <option <?=($item['dientich']=='>= 500 m2')?'selected':''?> value=">= 500 m2"> >= 500 m2</option>

                     </select>

                  </div>

               </div>

               <div class="form-group row">

                  <div class="col-xs-12">

                     <label>Giá bán</label>

                     <input name="txtgiaban" value="<?=$item['gia']?>" id="txtgiaban" type="text" placeholder="Giá bán" class="form-control" >

                  </div>

               </div>

            </div>

         </div>

         <!--end thông tin cơ bản -->

         <!-- lien he-->

         <div class="box-header box-next" style="text-align: left;padding: 12px 15px;line-height: normal;text-transform: uppercase;">

            Liên hệ

         </div>

         <div class="mucdangtin">

            <div class="main_content_sub_res">

               <div class="form-group row">

                  <div class="col-md-6 col-sm-6 col-xs-12">

                     <label class="label1">Tên liên hệ</label>

                     <input name="txttenlienhe" value="<?=$user['ten']?>" id="txttenlienhe" type="text" placeholder="Tên liên hệ" class="form-control input1" >

                  </div>

                   <div class="col-md-6 col-sm-6 col-xs-12">

                        <label class="label2">Địa chỉ</label>
                           <?php if($_REQUEST['id']!=''){?>

                              <input name="txtdiachilienhe" value="<?=$item['diachilienhe']?>" id="txtdiachilienhe" type="text" placeholder="Địa chỉ" class="form-control input2" >

                           <?php } else {?>
                        <input name="txtdiachilienhe" value="<?=$user['diachi']?><?=(get_phuong($user['id_phuong'])!=1)?', '.get_phuong($user['id_phuong']):''?><?=(get_quan($user['id_quan'])!=1)?', '.get_quan($user['id_quan']):''?><?=(get_tinh($user['id_tinh'])!=1)?', '.get_tinh($user['id_tinh']):''?>" id="txtdiachilienhe" type="text" placeholder="Địa chỉ" class="form-control input2" >
                          <?php } ?>
                     </div>

               </div>

               <div class="form-group row">

                  <div class="col-md-6 col-sm-6 col-xs-12">

                     <label class="label1">Điện thoại (*)</label>
                           <?php if($_REQUEST['id']!=''){?>

                                 <input name="txtdienthoailienhe" value="<?=$item['dienthoailienhe']?>" id="txtdienthoailienhe" type="text" placeholder="Điện thoại" class="form-control input1" >
                           <?php } else {?>
                               <input name="txtdienthoailienhe" value="<?=$user['dienthoai']?>" id="txtdienthoailienhe" type="text" placeholder="Điện thoại" class="form-control input1" >
                           <?php } ?>
                  </div>

                  <div class="col-md-6 col-sm-6 col-xs-12">

                     <label class="label2">Email</label>

                     <input name="txtemaillienhe" value="<?=$user['email']?>" id="txtemaillienhe" type="text" placeholder="Email" class="form-control input2" >

                  </div>

               </div>

            </div>

         </div>

         <!-- end liên hệ-->

         <!-- gui tin -->

         <button id="guitin" name="guitin" type="button" class="btn2 btn_site_1" style="    width: 100%;

            float: left;

            padding: 8px 0;

            font-size: 15px;margin-top: 20px;background: #ff6b00">Đăng tin</button>

         <!-- end gui tin-->

      </div>

   </form>

</div>

<?php } else if($act=='quan-ly-tin-can-mua-can-thue'){?>

<div class="col-md-9 col-sm-9 col-xs-12 thongtinright ">

   <div class="box-header">

      QUẢN LÝ TIN RAO BÁN, CHO THUÊ

   </div>

   <div class="col-xs-12 " style="padding: 0">

      <div class="mucdangtin">

         <div class="main_content_sub_res">

            <!--show danh sách tin-->

            <table class="table table-striped table_tin_desk">

               <thead class="tbl_head">

                  <tr>

                     <th scope="col">#</th>

                     <th scope="col">Mã tin</th>

                     <th scope="col">Photo</th>

                     <th scope="col">Tiêu đề</th>

                     <th scope="col">Ngày đăng</th>

                     <th scope="col">Sửa</th>

                     <th scope="col">Xóa</th>

                  </tr>

               </thead>

               <tbody class="tbl_body">

                  <?php foreach ($danhsachtin as $key => $v) {?>

                  <tr>

                     <th scope="row"><?=$key++?></th>

                     <td><?=$v['matin']?></td>

                     <td><img style="width: 70px" src="<?=_upload_sanpham_l.$v['photo']?>"></td>

                     <td><?=$v['ten_vi']?></td>

                     <td><?=date('d/m/Y',$v['ngaytao'])?></td>

                     <td><a href="dang-tin-can-mua-can-thue-<?=$v['id']?>.html"><img src="img/edit.png"></a></td>

                     <td><a href="xoa-tin1-<?=$v['id']?>.html" onClick="if(!confirm('Xác nhận xóa')) return false;"><img src="img/delete.png"></a></td>

                  </tr>

                  <?php } ?>

               </tbody>

            </table>

            <table class="table table-striped table_tin_mobi">

               <tbody class="tbl_body">

                  <?php foreach ($danhsachtin as $key => $v) {?>

                  <tr style="<?=($key%2==0)?'background:#f9f9f9':'background: #333;color:#fff'?>">

                     <td>#</td>

                     <td><?=$key+1?></td>

                  </tr>

                  <tr style="<?=($key%2==0)?'background:#f9f9f9':'background: #333;color:#fff'?>">

                     <td>Mã tin</td>

                     <td><?=$v['matin']?></td>

                  </tr>

                  <tr style="<?=($key%2==0)?'background:#f9f9f9':'background:  #333;color:#fff'?>">

                     <td>Photo</td>

                     <td><img style="width: 70px" src="<?=_upload_sanpham_l.$v['photo']?>"></td>

                  </tr>

                  <tr style="<?=($key%2==0)?'background:#f9f9f9':'background:  #333;color:#fff'?>">

                     <td>Tiêu đề</td>

                     <td><?=$v['ten_vi']?>

                        <a href="dang-tin-can-mua-can-thue-<?=$v['id']?>.html"><img src="img/edit.png"></a>

                        <a href="xoa-tin-<?=$v['id']?>.html" onClick="if(!confirm('Xác nhận xóa')) return false;"><img src="img/delete.png"></a>

                     </td>

                  </tr>

                  <tr style="<?=($key%2==0)?'background:#f9f9f9':'background: #333;color:#fff'?>">

                     <td>Ngày đăng</td>

                     <td><?=date('d/m/Y',$v['ngaytao'])?></td>

                  </tr>

                  <?php } ?>

               </tbody>

               </tbody>

            </table>

            <!-- end danh sach tin-->

         </div>

      </div>

   </div>

</div>

<?php } else if($act=='dang-tin-moi-gioi'){?>


   <div class="col-md-9 col-sm-9 col-xs-12 thongtinright post-product">

   <div class="post-bg-Title mgt10">

      <h1>Đăng tin rao bán, cho thuê nhà đất</h1>

      <div>

         (Qúy khách nên đăng nhập/đăng ký thành viên để quản lý tin đăng dễ dàng hơn)

      </div>

   </div>
    <p class="pp">Vui lòng chọn đúng mục phù hợp để tin được duyệt và dễ dàng tiếp cận đúng khách hàng mục tiêu</p>
   <div class="dang-tin-rao-tab">

      <a class="<?=($act=='dang-tin-rao-ban-cho-thue')?'active':''?> fl" href="dang-tin-rao-ban-cho-thue.html" title="Cần bán/Cho thuê">Cần bán/Cho thuê</a>

      <a class="<?=($act=='dang-tin-can-mua-can-thue')?'active':''?> fl" href="dang-tin-can-mua-can-thue.html" title="Cần mua/Cần thuê">Cần mua/Cần thuê</a>
       <a class="<?=($act=='dang-tin-moi-gioi')?'active':''?> fl" href="dang-tin-moi-gioi.html" title="Tin mối giới">Tin môi giới</a>

   </div>

   <form action="dang-tin-moi-gioi.html" method="post" id="frm_dangtin" enctype="multipart/form-data" >

      <div class="col-lg-12" style="padding: 0;">

         <!-- thong tin co bản -->

         <div class="box-header" style="text-align: left;padding: 12px 15px;line-height: normal;text-transform: uppercase;">

            Thông tin cơ bản

         </div>

         <div class="mucdangtin">

            <div class="main_content_sub_res">

               <!-- nhập thông tin đăng dự án -->

               <div class="form-group row">

                  <input type="hidden" name="id" id="ktid" value="<?=$_REQUEST['id']?>">

                  <div class="col-xs-12">

                     <label>Tiêu đề (*) </label>

                     <input name="txttenduan" value="<?=$item['ten_vi']?>" id="txttenduan" type="text" placeholder="Tiêu đề dự án" class="form-control" >

                  </div>

               </div>

               <div class="form-group row">

                  <div class="col-md-6 col-sm-6 col-xs-12">

                     <label>Hình thức  (*)</label>

                     <select class="form-control" name="id_hinhthuc" id="id_hinhthuc">

                        <option value="0">Hình thức</option>

                        <?php foreach ($cat_main11 as $key => $v) {?>

                        <option <?=($v['id']==$item['id_cat'])?'selected':''?>  value="<?=$v['id']?>"><?=$v['ten_vi']?></option>

                        <?php } ?>

                     </select>

                  </div>

                  <div class="col-md-6 col-sm-6 col-xs-12">

                     <label>Loại  (*)</label>

                     <select class="form-control" name="id_phanmuc" id="id_phanmuc">

                     <?=edit_phanmuc($item['id_cat'],$item['id_cat1'])?>

                     </select>

                  </div>

               </div>

               <div class="form-group row">

                  <div class="col-md-6 col-sm-6 col-xs-12">

                     <label>Tỉnh/Thành phố  (*)</label>

                     <select class="form-control" name="id_tinh" id="id_tinh">

                        <option value="0">Tỉnh/Thành phố</option>

                        <?php foreach ($showtinh as $key => $v) {?>

                        <option <?=($v['id']==$item['id_tinh'])?'selected':''?>  value="<?=$v['id']?>"><?=$v['name']?></option>

                        <?php } ?>

                     </select>

                  </div>

                  <div class="col-md-6 col-sm-6 col-xs-12">

                     <label>Quận/Huyện  (*)</label>

                     <select class="form-control" name="id_quan" id="id_quan">

                     <?=edit_quan($item['id_tinh'],$item['id_quan'])?>

                     </select>

                  </div>

               </div>

               <div class="form-group row">

                  <div class="col-md-6 col-sm-6 col-xs-12">

                     <label>Phường/Xã</label>

                     <select class="form-control" name="id_phuong" id="id_phuong">

                     <?=edit_phuong($item['id_quan'],$item['id_tinh'])?>

                     </select>

                  </div>

                  <div class="col-md-6 col-sm-6 col-xs-12">

                     <label>Địa chỉ BĐS (*)</label>

                     <input name="txtdiachi" value="<?=$item['diachi']?>" id="txtdiachi" type="text" placeholder="Số nhà + Đường" class="form-control" >

                  </div>

               </div>

               <div class="form-group row">

                  <div class="col-md-6 col-sm-6 col-xs-12">

                     <label>Dự án</label>

                     <select class="form-control" name="id_duan" id="id_duan">

                     <?=edit_duan($item['id_tinh'],$item['id_duan'])?>

                     </select>

                  </div>

                  <div class="col-md-6 col-sm-6 col-xs-12">

                     <label>Diện tích (m2)</label>

                     <input name="txtdientich" value="<?=$item['dientich']?>" id="txtdientich1" type="number" placeholder="Diện tích" class="form-control" >

                  </div>

               </div>

               <div class="form-group row">

                  <div class="col-md-6 col-sm-6 col-xs-12">

                     <label>Giá bán</label>

                     <input name="txtgia1" value="<?=$item['gia1']?>" id="txtgia1" type="text" placeholder="Giá bán" class="form-control" >

                  </div>

                  <div class="col-md-6 col-sm-6 col-xs-12">

                     <label>Đơn vị</label>

                     <select name="txtdonvi" id="txtdonvi1" class="form-control">

                        <option  <?=($item['donvi']=='0')?'selected':''?> value="0">Thỏa thuận</option>

                        <option  <?=($item['donvi']=='1')?'selected':''?> value="1">Triệu</option>

                        <option  <?=($item['donvi']=='2')?'selected':''?> value="2">Tỷ</option>

                        <option  <?=($item['donvi']=='3')?'selected':''?> value="3">Trăm nghìn/m2</option>

                        <option  <?=($item['donvi']=='4')?'selected':''?> value="4">Triệu/m2</option>

                     </select>

                  </div>

               </div>

               <div class="form-group row">

                  <div class=" col-xs-12">

                     <label>Tổng giá</label>

                     <input style="background: none;color: #f00;border: none;outline: none;box-shadow: none;" readonly="readonly" value="<?=jam_read_num_forvietnamese($item['gia'])?>" id="txtgiaban1" type="text" placeholder="" class="form-control" >

                     <input type="hidden" name="txtgiaban" id="txtgiaban2" value="<?=$item['gia']?> ">

                  </div>

               </div>

            </div>

            <!-- end thong tin-->

         </div>

    

      <!-- end thông tin cơ bản-->

      <!--thông tin mô tả-->

      <div class="box-header box-next" style="text-align: left;padding: 12px 15px;line-height: normal;text-transform: uppercase;">

         Thông tin mô tả

      </div>

      <div class="mucdangtin">

         <div class="main_content_sub_res">

            <!-- nhập thông tin đăng dự án -->

            <div class="form-group row">

               <div class="col-xs-12">

                  <label style="width: 100%;">(*)Tối đa chỉ 3000 ký tự</label>

                  <textarea name="txtmota" placeholder="
Quý khách nên mô tả đầy đủ thông tin BĐS. Bao gồm và không giới hạn các nội dung: (1) Đặc điểm Bất động sản, vị trí địa lý; (2) Tình trạng/hiện trạng BĐS; (3) Pháp lý; (4) Khoảng cách BĐS kết nối tới các cơ quan, trường học, bệnh viện, chợ, công viên, khu vui chơi giải trí cho trẻ em; (5) Tình trạng dân cư khu vực (sầm uất, yên tĩnh, buôn bán)…
Thời gian xem BĐS, thời gian liên hệ (vui lòng liên hệ số ….. từ …h đến …..h. Giá có thỏa thuận không…..
" id="txtmota" class="form-control" rows="50" cols="100" style="height: 170px;"><?=$item['noidung_vi']?></textarea>

               </div>

            </div>

            <!-- end thong tin-->

         </div>

      </div>

      <!-- end thông tin mô tả -->

      <!--thông tin khác-->

      <div class="box-header box-next" style="text-align: left;padding: 12px 15px;line-height: normal;text-transform: uppercase;">

         Thông tin khác

      </div>

      <div class="mucdangtin">

         <div class="main_content_sub_res">

            <!-- nhập thông tin đăng dự án -->

            <div class="form-group row">

               <div class="col-md-6 col-sm-6 col-xs-12">

                  <label>Hướng nhà</label>

                  <select class="form-control" name="huongnha" id="huongnha">

                     <option <?=($item['huongnha']=='KXĐ')?'selected':''?> value="KXĐ">KXĐ</option>

                     <option <?=($item['huongnha']=='Đông')?'selected':''?> value="Đông">Đông</option>

                     <option <?=($item['huongnha']=='Tây')?'selected':''?> value="Tây">Tây</option>

                     <option <?=($item['huongnha']=='Nam')?'selected':''?> value="Nam">Nam</option>

                     <option <?=($item['huongnha']=='Bắc')?'selected':''?> value="Bắc">Bắc</option>

                     <option <?=($item['huongnha']=='Đông-Bắc')?'selected':''?> value="Đông-Bắc">Đông - Bắc</option>

                     <option <?=($item['huongnha']=='Tây-Bắc')?'selected':''?> value="Tây-Bắc">Tây - Bắc</option>

                     <option <?=($item['huongnha']=='Tây-Nam')?'selected':''?> value="Tây-Nam">Tây - Nam</option>

                     <option <?=($item['huongnha']=='Đông-Nam')?'selected':''?> value="Đông-Nam">Đông - Nam</option>

                  </select>

               </div>

               <div class="col-md-6 col-sm-6 col-xs-12">

                  <label>Hiện Trạng</label>

                  <select class="form-control" name="huongbancong" id="huongbancong">

                     <option <?=($item['huongbancong']=='KXĐ')?'selected':''?> value="KXĐ">KXĐ</option>

                     <option <?=($item['huongbancong']=='Nhà nát')?'selected':''?> value="Nhà nát">Nhà nát</option>

                     <option <?=($item['Đang ở']=='Đang ở')?'selected':''?> value="Đang ở">Đang ở</option>

                     <option <?=($item['huongbancong']=='Nhà mới')?'selected':''?> value="Nhà mới">Nhà mới</option>

                  </select>

               </div>

            </div>

            <div class="form-group row">

               <div class="col-md-6 col-sm-6 col-xs-12">

                  <label>Số phòng ngủ</label>

                  <input name="txtsophongngu" value="<?=$item['sophongngu']?>" id="txtsophongngu" type="number" placeholder="Số phòng ngủ" class="form-control" >

               </div>

               <div class="col-md-6 col-sm-6 col-xs-12">

                  <label>Số toilet</label>

                  <input name="txtsotoilet" value="<?=$item['sotoilet']?>" id="txtsotoilet" type="number" placeholder="Số toilet" class="form-control" >

               </div>

            </div>

            <div class="form-group row">

               <div class="col-md-6 col-sm-6 col-xs-12">

                  <label>Số tầng</label>

                  <input name="txtsotang" value="<?=$item['sotang']?>" id="txtsotang" type="number" placeholder="Số tầng" class="form-control" >

               </div>

               <div class="col-md-6 col-sm-6 col-xs-12">

                  <label>Vị trí</label>

                  <select name="txtvitri" class="form-control">

                     <option <?=($item['vitri']=='KXĐ')?'selected':''?> value="KXĐ">KXĐ</option>

                     <option <?=($item['vitri']=='Mặt tiền')?'selected':''?> value="Mặt tiền">Mặt tiền</option>

                     <option <?=($item['vitri']=='Mặt tiền NB')?'selected':''?> value="Mặt tiền NB">Mặt tiền NB</option>

                     <option <?=($item['vitri']=='Hẻm >4m')?'selected':''?> value="Hẻm >4m">Hẻm >4m</option>

                     <option <?=($item['vitri']=='Hẻm <4m')?'selected':''?> value="Hẻm <4m">Hẻm <4m</option>

                  </select>

               </div>

            </div>

            <div class="form-group row">

               <div class="col-xs-12">

                  <label style="width: 100%;">Nội thất</label>

                  <textarea name="txtnoithat" placeholder="Quý khách nên mô tả các loại nội thất đi kèm nhà, tình trạng, chất lượng…..hệ thống điện, cấp nước, thoát nước." class="form-control" rows="50" cols="100" style="height: 120px;"><?=$item['noithat']?></textarea>

               </div>

            </div>

            <div class="form-group row">

               <div class="col-xs-12">

                  <label style="width: 100%;">Bản đồ ( Nhập iframe )</label>

                  <textarea name="txtbando" class="form-control" rows="50" cols="100" style="height: 120px;" placeholder="Quý khách nên mô tả các loại nội thất đi kèm nhà, tình trạng, chất lượng…..hệ thống điện, cấp nước, thoát nước."><?=$item['bando']?></textarea>

               </div>

            </div>

            <!-- end thong tin-->

         </div>

      </div>

      <!-- end thông tin khác-->

      <!--hinh ảnh-->

      <div class="box-header box-next" style="text-align: left;padding: 12px 15px;line-height: normal;text-transform: uppercase;">

         Hình ảnh

      </div>

      <div class="mucdangtin">

         <div class="main_content_sub_res">

            <div class="form-group row">

               <div class="col-xs-12">

                  <p style="    font-size: 13px;">

               Tối thiểu 3 ảnh và tối đa 8 ảnh, mỗi ảnh tối đa 2MB. Đối với tin đăng chính chủ ghi pháp lý đầy đủ, phải có ảnh chụp sổ/hợp đồng để tin đăng được duyệt nhanh hơn. Nếu không đầy đủ, tin đăng sẽ được chuyển sang mục TIN MÔI GIỚI. Ảnh nên chụp gồm tổng quan đường/hẻm trước BĐS, chính diện cổng có bảng số nhà, và chi tiết bên trong BĐS.

                  </p >

               </div>

               <?php if($_REQUEST['id']!=''){?>

               <div class="col-md-6 col-sm-6 col-xs-12">

                  <label>Ảnh hiện tại</label>

                  <div style="margin: 10px 0;">

                     <img style="width: 164px" src="<?=_upload_sanpham_l.$item['photo']?>">

                  </div>

               </div>

               <?php } else {?>

               <div class="col-md-6 col-sm-6 col-xs-12">

                  <label>Ảnh Xem trước</label>

                  <div style="margin: 10px 0;">

                     <img  style="width: 164px" id="blah" src="#"  />

                  </div>

               </div>

               <?php } ?>

               <div class="col-md-12 col-sm-12 col-xs-12">

                  <label>Chọn ảnh đại diện</label>

                  <div class="spanButtonPlaceholder block-upload-item" id="upload-drop-zone" style="position: relative; overflow: hidden; direction: ltr;">

                     <p>(Click để tải ảnh)</p>

                     <input  type="file" name="file" id="imgInp" style="position: absolute; right: 0px; top: 0px; font-family: Arial; font-size: 118px; margin: 0px; padding: 0px; cursor: pointer; opacity: 0;">

                  </div>





               </div>

            </div>

            <div class="form-group">

               <label for="inputName">Chọn ảnh đính kèm</label>

               <input type="file" class="form-control"  id="files"  name="files[]" multiple="multiple">

               <span class="description" style="color: #333;padding-top: 10px;

                  padding-bottom: 10px;

                  float: left;

                  width: 100%;">Type: .jpg|.gif|.png|.jpeg &nbsp;&nbsp;;&nbsp;&nbsp; Ảnh chuẩn:  Width:600px - Height:600px.</span>

               <div id="selectedFiles">
                  

                        <?php if($_REQUEST['id']!=''){?>
                           <?php foreach ($photo_tin as $key => $v) {?>
                                 <div class="col-md-3 col-sm-4 col-xs-12">

                                       <img src="<?=_upload_sanpham_l.$v['photo']?>" class="selFile" data-file="<?=$v['photo']?>" title="Click to remove">

                                 </div>


                            <?php } ?>

                        <?php } ?>



               </div>

            </div>

            <div class="form-group">

               <input type="hidden" name="listhinh" id="listhinh" value="<?=$chuoihinh?>">

            </div>

         </div>

      </div>

      <!-- end hình ảnh -->

      <!-- lien he-->

      <div class="box-header box-next" style="text-align: left;padding: 12px 15px;line-height: normal;text-transform: uppercase;">

         Liên hệ

      </div>

      <div class="mucdangtin">

         <div class="main_content_sub_res">

            <div class="form-group row">

               <div class="col-md-6 col-sm-6 col-xs-12">

                  <label class="label1">Tên liên hệ</label>

                  <input  name="txttenlienhe" value="<?=$user['ten']?>" id="txttenlienhe" type="text" placeholder="Tên liên hệ" class="form-control input1" >

               </div>

               <div class="col-md-6 col-sm-6 col-xs-12">

                  <label class="label2">Địa chỉ</label>
                     <?php if($_REQUEST['id']!=''){?>

                        <input name="txtdiachilienhe" value="<?=$item['diachilienhe']?>" id="txtdiachilienhe" type="text" placeholder="Địa chỉ" class="form-control input2" >

                     <?php } else {?>
                  <input name="txtdiachilienhe" value="<?=$user['diachi']?><?=(get_phuong($user['id_phuong'])!=1)?', '.get_phuong($user['id_phuong']):''?><?=(get_quan($user['id_quan'])!=1)?', '.get_quan($user['id_quan']):''?><?=(get_tinh($user['id_tinh'])!=1)?', '.get_tinh($user['id_tinh']):''?>" id="txtdiachilienhe" type="text" placeholder="Địa chỉ" class="form-control input2" >
                    <?php } ?>
               </div>

            </div>

            <div class="form-group row">

               <div class="col-md-6 col-sm-6 col-xs-12">

                  <label class="label1">Điện thoại (*)</label>

                <?php if($_REQUEST['id']!=''){?>
                  <input name="txtdienthoailienhe" value="<?=$item['dienthoailienhe']?>" id="txtdienthoailienhe" type="text" placeholder="Điện thoại" class="form-control input1" >
               <?php } else {?>
                           <input name="txtdienthoailienhe" value="<?=$user['dienthoai']?>" id="txtdienthoailienhe" type="text" placeholder="Điện thoại" class="form-control input1" >

               <?php } ?>
               </div>

               <div class="col-md-6 col-sm-6 col-xs-12">

                  <label class="label2">Email</label>

                  <input name="txtemaillienhe" value="<?=$user['email']?>" id="txtemaillienhe" type="text" placeholder="Email" class="form-control input2" >

               </div>

            </div>

         </div>

      </div>

      <!-- end liên hệ-->

      <!-- gui tin -->

      <button id="guitin" name="guitin" type="button" class="btn2 btn_site_1" style="    width: 100%;

         float: left;

         padding: 8px 0;

         font-size: 15px;margin-top: 20px;background: #ff6b00">Đăng tin</button>

      <!-- end gui tin-->

</div>

</form>

</div>


<?php } else if($act=='quan-ly-tin-moi-gioi'){?>


      <div class="col-md-9 col-sm-9 col-xs-12 thongtinright ">

   <div class="box-header">

      QUẢN LÝ TIN MÔI GIỚI

   </div>

   <div class="col-xs-12 " style="padding: 0">

      <div class="mucdangtin">

         <div class="main_content_sub_res">

            <!--show danh sách tin-->

            <table class="table table-striped table_tin_desk">

               <thead class="tbl_head">

                  <tr>

                     <th scope="col">#</th>

                     <th scope="col">Mã tin</th>

                     <th scope="col">Photo</th>

                     <th scope="col">Tiêu đề</th>

                     <th scope="col">Ngày đăng</th>

                     <th scope="col">Sửa</th>

                     <th scope="col">Xóa</th>

                  </tr>

               </thead>

               <tbody class="tbl_body">

                  <?php foreach ($danhsachtin as $key => $v) {?>

                  <tr>

                     <th scope="row"><?=$key++?></th>

                     <td><?=$v['matin']?></td>

                     <td><img style="width: 70px" src="<?=_upload_sanpham_l.$v['photo']?>"></td>

                     <td><?=$v['ten_vi']?></td>

                     <td><?=date('d/m/Y',$v['ngaytao'])?></td>

                     <td><a href="dang-tin-moi-gioi-<?=$v['id']?>.html"><img src="img/edit.png"></a></td>

                     <td><a href="xoa-tin2-<?=$v['id']?>.html" onClick="if(!confirm('Xác nhận xóa')) return false;"><img src="img/delete.png"></a></td>

                  </tr>

                  <?php } ?>

               </tbody>

            </table>

            <table class="table table-striped table_tin_mobi">

               <tbody class="tbl_body">

                  <?php foreach ($danhsachtin as $key => $v) {?>

                  <tr style="<?=($key%2==0)?'background:#f9f9f9':'background: #333;color:#fff'?>">

                     <td>#</td>

                     <td><?=$key+1?></td>

                  </tr>

                  <tr style="<?=($key%2==0)?'background:#f9f9f9':'background: #333;color:#fff'?>">

                     <td>Mã tin</td>

                     <td><?=$v['matin']?></td>

                  </tr>

                  <tr style="<?=($key%2==0)?'background:#f9f9f9':'background:  #333;color:#fff'?>">

                     <td>Photo</td>

                     <td><img style="width: 70px" src="<?=_upload_sanpham_l.$v['photo']?>"></td>

                  </tr>

                  <tr style="<?=($key%2==0)?'background:#f9f9f9':'background:  #333;color:#fff'?>">

                     <td>Tiêu đề</td>

                     <td><?=$v['ten_vi']?>

                        <a href="dang-tin-rao-ban-cho-thue-<?=$v['id']?>.html"><img src="img/edit.png"></a>

                        <a href="xoa-tin-<?=$v['id']?>.html" onClick="if(!confirm('Xác nhận xóa')) return false;"><img src="img/delete.png"></a>

                     </td>

                  </tr>

                  <tr style="<?=($key%2==0)?'background:#f9f9f9':'background: #333;color:#fff'?>">

                     <td>Ngày đăng</td>

                     <td><?=date('d/m/Y',$v['ngaytao'])?></td>

                  </tr>

                  <?php } ?>

               </tbody>

               </tbody>

            </table>

            <!-- end danh sach tin-->

         </div>

      </div>

   </div>

</div>

<?php } ?>

</div>

<script type="text/javascript">

   //xem trươc 1 hình

   

   function readURL(input) {

   if (input.files && input.files[0]) {

     var reader = new FileReader();

     

     reader.onload = function(e) {

       $('#blah').attr('src', e.target.result);

     }

     

     reader.readAsDataURL(input.files[0]);

   }

   }

   

   $("#imgInp").change(function() {

   readURL(this);

   });

   

   

   

   

   

   //xem trươc nhiều hinh

     var selDiv = "";
      var ktid=$('#ktid').val();
    var storedFiles = [];
      var formData = new FormData();
     $("#files").on("change", handleFileSelect);

       selDiv = $("#selectedFiles"); 

     $("body").on("click", ".selFile", removeFile);

   

   

       function handleFileSelect(e) {



      var chuoicu=$('#listhinh').val();
       var files = e.target.files;

      var filesArr = Array.prototype.slice.call(files);

      filesArr.forEach(function(f) {      

   

       if(!f.type.match("image.*")) {

         return;

       }

       storedFiles.push(f);
    
      // for(var i=0, len=storedFiles.length; i<len; i++) {

      //  formData.append('files[]',storedFiles[i]); 

      // }




      console.log(storedFiles);

       var reader = new FileReader();

       reader.onload = function (e) {

         var html = "<div class='col-md-3 col-sm-4 col-xs-6'><img src=\"" + e.target.result + "\" data-file='"+f.name+"' class='selFile' title='Click to remove'>" + f.name + "<br clear=\"left\"/></div>";

         selDiv.append(html);

         

       }

       reader.readAsDataURL(f); 
 


       var chuoi='';

        for(var i=0;i<storedFiles.length;i++) {

         chuoi=chuoi+storedFiles[i].name+',';

          }

         if(ktid!=''){

            if(chuoicu!=''){

                      chuoi=chuoicu+chuoi;
                     // chuoi=chuoi.split(",");
                     //  chuoi.splice(chuoi.length-1,1);
                     //  array_unique(chuoi);
                     //  chuoi=chuoi.toString();
                     //  chuoi=chuoi+',';

            }


         }

         $('#listhinh').val(chuoi);
           


     });

     

   }

     

   function handleForm(e) {

     e.preventDefault();

     var data = new FormData();

     

     for(var i=0, len=storedFiles.length; i<len; i++) {

       data.append('files', storedFiles[i]); 

     }

     

     var xhr = new XMLHttpRequest();

     xhr.open('POST', 'handler.cfm', true);

     

     xhr.onload = function(e) {

       if(this.status == 200) {

         console.log(e.currentTarget.responseText);  

         alert(e.currentTarget.responseText + ' items uploaded.');

       }

     }

     

     xhr.send(data);

   }

     

   function removeFile(e) {

     var chuoi='';

     var file = $(this).data("file");


     if(ktid!='')
     {

          var mangurl=$('#listhinh').val();

           mangurl=mangurl.split(",");
            mangurl.splice(mangurl.length-1,1);

           for(var i=0;i<mangurl.length;i++) {

             if(mangurl[i] === file) {

                  mangurl.splice(i,1);

               break;

             }

           }

           mangurl=mangurl.toString();

   

             $(this).parent().remove();



         chuoi=chuoi+mangurl+',';


     }
     else
     {
          for(var i=0;i<storedFiles.length;i++) {
         if(storedFiles[i].name === file) {
              storedFiles.splice(i,1);
             break;
            }
          }



          $(this).parent().remove();

           for(var i=0;i<storedFiles.length;i++) {

              chuoi=chuoi+storedFiles[i].name+',';

          }

     }
 




     

      

   

   

     $('#listhinh').val(chuoi);

   }

   

</script>

<script type="text/javascript">

   $(document).ready(function(){

            $('#isChangePass').click(function(){

                if($(this).prop('checked') == true){

                    $('.block_nhapmatkhau').removeClass('hide');

                }else{

                    $('.block_nhapmatkhau').addClass('hide');

                }

            });

   

   

                $('#id_tinh').change(function(){

                        var id = $(this).val();

                        $.ajax({

                          type: "POST",

                          url: "ajax/ajax_quan.php",

                          data: "id="+id,

                          success: function(result){

                              $('#id_quan').html(result);

                                $('#id_phuong').html('   <option value="0">Phường/Xã</option>');

                               $('#id_quan').change(function(){

                                    var id = $(this).val();

                                    $.ajax({

                                      type: "POST",

                                      url: "ajax/ajax_phuong.php",

                                      data: "id="+id,

                                      success: function(result){

                                        $('#id_phuong').html(result);

                                       

                                      }

                                    });

                              })

                          }

                        });

                      $.ajax({

                                      type: "POST",

                                      url: "ajax/ajax_duan.php",

                                      data: "id="+id,

                                      success: function(result){

                                        $('#id_duan').html(result);

                                       

                                    }

                     });

   

                  })

   

   

   

             $('#id_quan').change(function(){

                                    var id = $(this).val();

                                    $.ajax({

                                      type: "POST",

                                      url: "ajax/ajax_phuong.php",

                                      data: "id="+id,

                                      success: function(result){

                                        $('#id_phuong').html(result);

                                       

                                      }

                                    });

             })

   

   

              $('#id_hinhthuc').change(function(){

                                    var id = $(this).val();

                                    $.ajax({

                                      type: "POST",

                                      url: "ajax/ajax_hinhthuc.php",

                                      data: "id="+id,

                                      success: function(result){

                                        $('#id_phanmuc').html(result);

                                       

                                      }

                                    });

             })

   

              $('#txtgia1').blur(function(){

   

   

                  var gia=$(this).val();

                  var donvi=$('#txtdonvi1').val();

                  var dientich=$('#txtdientich1').val();

               

                   $.ajax({

                          type: "POST",

                          url: "ajax/laygia.php",

                                 data: {'gia':gia,'donvi':donvi,'dientich':dientich},

                           dataType: 'json',

                          success: function(result){

                    

                              $('#txtgiaban1').attr('value',result.data1);

                                 $('#txtgiaban2').attr('value',result.data2);         

                          } 

                    });

   

   

   

              })

   

              $('#txtdonvi1').change(function(){

   

                   var gia=$('#txtgia1').val();

                  var donvi=$(this).val();

                  var dientich=$('#txtdientich1').val();

               

                   $.ajax({

                          type: "POST",

                          url: "ajax/laygia.php",

                          data: {'gia':gia,'donvi':donvi,'dientich':dientich},

                           dataType: 'json',

                          success: function(result){

                    

                            $('#txtgiaban1').attr('value',result.data1);

                                 $('#txtgiaban2').attr('value',result.data2);

                                      

                          } 

                    });

   

              })

                $('#txtdientich1').change(function(){

   

                   var gia=$('#txtgia1').val();

                  var donvi=$('#txtdonvi1').val();

                  var dientich=$(this).val();

               

                   $.ajax({

                          type: "POST",

                          url: "ajax/laygia.php",

                          data: {'gia':gia,'donvi':donvi,'dientich':dientich},

                           dataType: 'json',

                          success: function(result){

                    

                              $('#txtgiaban1').attr('value',result.data1);

                                 $('#txtgiaban2').attr('value',result.data2);

                                      

                          } 

                    });

   

              })

   });

   

</script>

<?php } else { ?>

<p>Trang không tồn tại !!!</p>

<?php } ?>