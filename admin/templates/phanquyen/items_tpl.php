<?php if(!defined('_kiemtraweb') || _kiemtraweb!=$check_website) daysangtranglogin(); ?>

<!-- Breadcrumbs Start -->
  <div class="row breadcrumbs">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
      <ul class="breadcrumbs">
        <li><a href="index.php"><i class="fa fa-home"></i></a></li>
        <li><a href="index.php?com=phanquyen&act=man">Phân quyền</a></li>
      </ul>
    </div>
  </div>
  <!-- Breadcrumbs End -->
        
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
  	  	<div class="inner" style="margin-bottom:10px;">
            <div class="message-box info">
              <i class="fa fa-exclamation-circle"></i>
             <!-- <p>Lưu ý: Nổi bật là tin sẽ hiển thị khi click vào Hỗ trợ trên MENU TOP!</p>-->
            </div>
        </div>
        
      <!-- Inline Form Start -->      	      
        <div class="boxed no-padding col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="inner">
          	            
            <!-- Title Bar Start -->
            <div class="title-bar"> 
              <div class="col-md-8" style="padding-left:0px; padding-top:7px; padding-bottom:7px;">                 
              	<h4><a href="index.php?com=phanquyen&act=add<?=$chuoi_noi_curpage?>" class="btn btn-success"><i class="fa fa-check"></i> Thêm phân quyền</a></h4>      
              </div>
              <div class="col-md-4 paging_0px">  
              	<form action="index.php?com=phanquyen&act=man<?=$chuoi_noi_curpage?>" method="post" class="inline-form">
                	<div id="timkiem_khung">
                    	<input type="text" name="search" id='search' value="<?=@$_REQUEST['search']?>" placeholder="Nhập tên cần tìm ..." class='timkiem_input' />
                        <input type="image" name="btnSearch" src="media/images/search-focus.png" value="Tìm kiếm" id='nut_timkiem' />
                    </div>                    
                </form>
              </div>
              <div class="clear"></div>      
            </div>
            <!-- Title Bar End -->                                  
            
            <!-- Table Holder Start -->
            <div class="table-holder">

              <table class="stripe-rows" cellspacing="0" cellpadding="0" width="100%" border="1">            
                <thead>
                  <th style="width:5%;">STT</th>                                                    
                  <th>Quyền</th>
                  <th>Màu sắc</th>
                
			
                  <th style="width:5%;">Hiển thị</th>
                  <th style="width:5%;">Sửa</th>
                 <th style="width:5%;">Xóa</th>
                </thead>
                <tbody>
                  <?php 
				  	if(count($items)!=0){
						foreach($items as $k=>$v){
				  ?>
                  <tr>
                    <td style="width:5%;"><?=$v['stt']?></td>                    
                    <td><a href="index.php?com=phanquyen&act=edit&id=<?=$v['id']?><?=$chuoi_noi_curpage?>" style="text-decoration:none;"><?=$v['ten']?></a></td>
				              <td><a href="index.php?com=phanquyen&act=edit&id=<?=$v['id']?><?=$chuoi_noi_curpage?>" style="text-decoration:none;"><input type="color" name="mausac" style="    -webkit-appearance: square-button;
    padding: 0;
    width: 44px;
    height: 23px;
    background-color: buttonface;
    border-width: 1px;
    border-style: solid;
    border-color: rgb(169, 169, 169);
    border-image: initial;" value="<?=$v['mausac']?>"  /></a></td>
       
        

        
                    <td style="width:5%;"><a href="index.php?com=phanquyen&act=man&hienthi=<?=$v['id']?><?=$chuoi_noi_curpage?>"><img src="<?=($v['hienthi']==1)?'media/images/active_1.png':'media/images/active_0.png'?>" border="0" /></a></td>
                    <td style="width:5%;"><a href="index.php?com=phanquyen&act=edit&id=<?=$v['id']?><?=$chuoi_noi_curpage?>"><img src="media/images/edit.png" border="0" title="Sửa" /></a></td>
                   <td style="width:5%;"><a href="index.php?com=phanquyen&act=delete&id=<?=$v['id']?><?=$chuoi_noi_curpage?>" onClick="if(!confirm('Xác nhận xóa')) return false;"><img src="media/images/delete.png" border="0" title="Xóa" /></a></td>
                  </tr>
                  <?php	
						}
					}
				  ?>
                                                      
                </tbody>
              </table>
              <div class="clear"></div>

            </div>
            <!-- Table Holder End -->
            
			<div class="col-md-12 margin_bottom_10px">
                <div class="col-md-4 paging_0px">                  
                  <a href="index.php?com=phanquyen&act=add<?=$chuoi_noi_curpage?>" class="btn btn-success"><i class="fa fa-check"></i> Thêm phân quyền</a>
                  <a href="index.php?com=phanquyen&act=man" class="btn btn-info"><i class="fa fa-share"></i> Thoát</a> 
                </div>
                <div class="col-md-8 paging_0px">    
                  <div class="paging"><?=$paging['paging']?></div>
                </div>
    
                <div class="clearfix"></div>
			</div>
            <div class="clearfix"></div>

          </div>
        </div>
        <!-- Inline Form End -->
  </div>