<?php if(!defined('_kiemtraweb') || _kiemtraweb!=$check_website) daysangtranglogin(); ?>
<script>
  $(document).ready(function(e) {
        $("#id_cat").change(function(e) {
            var id=$(this).val();
      $.ajax({
        url:'ajax/cat.php',
        type:'get',
        data:'id='+id,
        dataType:'html',
        success:function(data){
          $("#cat1_div").html(data);
       
          
          $("#id_cat1").change(function(e) {
            var id=$(this).val();
            $.ajax({
              url:'ajax/cat1.php',
              type:'get',
              data:'id='+id,
              dataType:'html',
              success:function(data){
                $("#cat2_div").html(data);  
            

              }
            });
          });
          
        }
      });
        });
    $("#id_cat1").change(function(e) {
            var id=$(this).val();
      $.ajax({
        url:'ajax/cat1.php',
        type:'get',
        data:'id='+id,
        dataType:'html',
        success:function(data){
          $("#cat1_div").html(data);  
          $("#id_cat2").selectbox();  
        }
      });
        });
                  $("#id_cat2").change(function(e) {
                      var id=$(this).val();
                      $.ajax({
                        url:'ajax/cat2.php',
                        type:'get',
                        data:'id='+id,
                        dataType:'html',
                        success:function(data){
                          $("#cat2_div").html(data);  
                          $("#id_cat3").selectbox();  
                        
                        }
                      });
                    });

                    $("#id_cat3").change(function(e) {
                              var id=$(this).val();
                              $.ajax({
                                url:'ajax/cat3.php',
                                type:'get',
                                data:'id='+id,
                                dataType:'html',
                                success:function(data){
                                  $("#cat3_div").html(data);  
                                  $("#id_cat4").selectbox();  
                                }
                              });
                      });


        
    });
</script>
<style type="text/css">
  

.sx {
    display: block;
    position: relative;
    padding-left: 35px;
    margin-bottom: 12px;
    cursor: pointer;
    font-size: 22px;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    margin-bottom: 20px!important;
}

/* Hide the browser's default radio button */
.sx input {
    position: absolute;
    opacity: 0;
    cursor: pointer;
}

/* Create a custom radio button */
.checkmark {
    position: absolute;
    top: -1px;
    left: 0;
    height: 20px;
    width: 20px;
    background-color: #eee;
    border-radius: 50%;
}

/* On mouse-over, add a grey background color */
.sx:hover input ~ .checkmark {
    background-color: #ccc;
}

/* When the radio button is checked, add a blue background */
.sx input:checked ~ .checkmark {
    background-color: #2196F3;
}

/* Create the indicator (the dot/circle - hidden when not checked) */
.checkmark:after {
    content: "";
    position: absolute;
    display: none;
}

/* Show the indicator (dot/circle) when checked */
.sx input:checked ~ .checkmark:after {
    display: block;
}

/* Style the indicator (dot/circle) */
.sx .checkmark:after {
  top: 6px;
  left: 6px;
  width: 8px;
  height: 8px;
  border-radius: 50%;
  background: white;
}




#addpromotion .modal-dialog {
    width: 870px;
}
.modal-header {
    background: rgb(248, 103, 47);
    border-radius: 5px 5px 0px 0px;
}
.modal-header h4 {
    font-size: 14px;
    color: #FFF;
    font-weight: 600;
}
.search_bar_input_select {
    position: relative;
}
.product_add_promotion .search_bar_input_select .box {
    margin-bottom: 10px;
    float: left;
    width: 22%;
    box-shadow: none;
    padding-right: 10px;
}
.product_add_promotion .search_bar_input_select .box > span {
    margin-bottom: 10px;
    display: block;
}
.form-control {
    border-radius: 3px;
    background-clip: padding-box;
    border-color: #ddd;
    border-width: 1px;
    box-shadow: none;
    font-size: 13px;
    height: 33px;
}
.search_promotion.btn.btn-danger {
    margin-top: 0px!important;
}
.btn.btn-danger {
    background: #ff795f;
    color: #FFF;
    font-size: 13px;
    border: 0;
    border-top: 2px #ff502e solid;
}
.product_add_promotion .list_item {
    max-height: 300px;
    overflow-y: scroll;
}
.product_add_promotion .table {
    border: 1px solid #ddd;
}
.checkbox-nice
{
  text-align: center;
}
.checkbox-nice input[type=checkbox] {
    visibility: hidden;
    opacity: 0;
    position: absolute;
    top: 0;
    left: 0;
}
.checkbox-nice label {
    padding-top: 3px;
    cursor: pointer;
    position: relative;
    padding-left: 28px;
    line-height: 26px;
}
 .checkbox-nice label:before {
        cursor: pointer;
        position: absolute;
        width: 20px;
        height: 20px;
        left: 1px;
        top: 6px;
        background: #ffffff;
        content: "";
        border: 1px solid #c7c7c7;
        border-radius: 3px;
        background-clip: padding-box;
    }

    .checkbox-nice label:after {
        opacity: 0;
        content: '';
        position: absolute;
        width: 12px;
        height: 7px;
        background: transparent;
        top: 11px;
        left: 6px;
        border: 3px solid #f4786e;
        border-top: none;
        border-right: none;
        transform: rotate(-45deg);
        -webkit-transform: rotate(-45deg);
    }

    .checkbox-nice label:hover::after {
        opacity: 0.3;
    }

    .checkbox-nice input[type=checkbox]:checked + label:after {
        opacity: 1;
    }
    .listproinpromotion .table {
    border: 1px solid #ddd;
    margin-top: 10px;
}
.listproinpromotion .grid_data .table>thead>tr>th {
    vertical-align: middle;
}
.table tbody tr:nth-child(even) {
    background-color: #EDF3F3;
}
/*    table tbody tr.bggrey {
    background: #eee;
}*/

#showsanphamdathem tr td
{
  vertical-align: middle;
}
</style>


<!-- Breadcrumbs Start -->
  <div class="row breadcrumbs">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
      <ul class="breadcrumbs">
        <li><a href="index.php"><i class="fa fa-home"></i></a></li>
        <li><a href="index.php?com=khuyenmai&act=man" title="Email ????ng k??">T???o khuy???n m??i m???i</a></li>
      </ul>
    </div>
  </div>
  <!-- Breadcrumbs End -->
        
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    	<!--<div class="inner" style="margin-bottom:10px;">
            <div class="message-box info">
              <i class="fa fa-exclamation-circle"></i>
              <p>L??u ??: Ch??? n??n c?? t???i ??a 4-5 b???n ?????, t??n b???n ????? kh??ng n??n ?????t d??i qu??, n??n ?????t s??? th??? t??? ch??nh x??c ????? d??? qu???n l??!</p>
            </div>
        </div>-->
    
    
		<!-- Inline Form Start -->
          <div class="boxed no-padding col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="inner">

              <!-- Title Bar Start -->
        
              <!-- Title Bar End -->
			              
              <form method="post" name="frm" id="frmKM" action="index.php?com=khuyenmai&act=save<?=$chuoi_noi_curpage?>" enctype="multipart/form-data" class="basic-form inline-form">                             
                


                  <?php if ($_REQUEST['act']=='edit'){?>
                <div class="col-md-2"><label>H??nh hi???n t???i</label></div>
                <div class="col-md-10"><img src="<?=_upload_khuyenmai.$item['photo']?>"  width="274" alt="NO PHOTO" /><br /><br /></div>
                <?php }?>

                 <div class="clearfix"></div>
                <div class="col-md-2"><label>H??nh ???nh ch??nh</label></div>
                <div class="col-md-10">
        
                  <input type="file"  name="file"  /> 
                    <span class="description">Type: .jpg|.gif|.png|.jpeg &nbsp;&nbsp;;&nbsp;&nbsp; ???nh chu???n:  Width:300px - Height:300px.</span>
                    <br /><br />
                </div>
                <div class="col-md-2"><label>T??n ch????ng tr??nh</label></div>
                <div class="col-md-10"><input type="text" id="tieude" name="tieude" value="<?=$item['tieude']?>"  /></div>


                 <div class="col-md-2"><label></label></div>
                <div class="col-md-10">
                  
                   

                        <label class="sx">Gi???m gi?? theo %
                        <input style="width: auto;" type="radio"   <?=($item['loaigiam']==1)?'checked="checked"':''?> value="1" name="loaigiam">
                        <span class="checkmark"></span>
                      </label>
                      <label class="sx">Gi???m gi?? theo s??? ti???n
                        <input style="width: auto;"  type="radio" value="0"  <?=($item['loaigiam']==0)?'checked="checked"':''?> name="loaigiam">
                        <span class="checkmark"></span>
                      </label>
            



                </div>
                

                  <div class="col-md-2"><label>Gi?? tr??? </label></div>
                  <div class="col-md-10"><input  type="number" min="0"  name="giatri" id="giatri"  value="<?=$item['giatri']?>"  /></div>
                  <div class="clearfix"></div>
                 <div class="col-md-2"><label>Th???i gian b???t ?????u </label></div>
                 <div class="col-md-10"><input  type="date" min="0"  name="thoigianbatdau" id="thoigianbatdau" value="<?=$item['thoigianbatdau']?>"  /></div>
                   <div class="col-md-2"><label>Th???i gian k???t th??c </label></div>
                 <div class="col-md-10"><input  type="date" min="0"  name="thoigianketthuc" id="thoigianketthuc" value="<?=$item['thoigianketthuc']?>"  /></div>

                


                
               <div class="listproinpromotion">

                  <div class="title-bar"> 

                      <div class="col-md-8" style="padding-left:0px; padding-top:7px; padding-bottom:7px;">                 
                  
                        <a id="themsanpham" class="btn btn-success" data-toggle="modal" data-target="#addpromotion"><i class="fa fa-check"></i> Th??m s???n ph???m</a> 
                      </div>      
                  </div>

                  <div class="grid_data" style="width: 100%;float: left;">


                      <div class="table-responsive">
                          <table class="table">
                                <thead>
                                    <tr>
                                       <th width="3%">STT</th>
                                        <th width="10%">S???n ph???m</th>
                                        <th width="12%">M?? s???n ph???m</th>
                                        <th width="30%">T??n s???n ph???m</th>
                                        <th width="12%">Gi?? b??n</th>
                                      
                                        <th width="13%">Gi?? khuy???n m??i</th>
                                        <th width="6%">Gi???m(%)</th>
                                        <th width="5%">&nbsp;</th>
                                    </tr>
                                  </thead>
                                  <tbody id="showsanphamdathem">
                                          <?php

                                            $listid= $item['listsp'];
                                          
                                            $mangidkm=explode(',', $item['listsp']);
                                        



                                            if($listid!='') 
                                            {

                                              $sql="select * from #_product where hienthi=1 and id in ($listid)";
                                              $d->query($sql);
                                              $product=$d->result_array();
                                            }
                                            $d->reset();



                                              $giatri=$item['giatri'];
                                              $loaigiam=$item['loaigiam'];
                                            
                                          ?>
                                          <?php 


                                            if(count($product)>0) {
                                              foreach ($product as $k=>$v) {
                                            


                                            ?>

                                              <tr class="<?=($k%2==0)?'bggrey':''?>">
                                                     <td style="vertical-align:middle;text-align: center;" ><?=$k+1?></td>
                                                    <td class="c_align has-relative">
                                                        <img style="width: 55px"  src="../upload/sanpham/<?=$v['photo']?>">
                                                        <span class="icon-inevent">
                                                         
                                                        </span>
                                                    </td>
                                                    <td ><?=$v['masp']?></td>
                                                    <td><strong ><?=$v['ten_vi']?></strong></td>
                                                    
                                                    <td>



                                                    <?php if($giatri!='') {?>


                                                      <?php if ($loaigiam==0) {  

                                                        $khuyenmai= round((100 - ($v['gia']-$giatri)/$v['gia']*100),0);

                                                        ?>
                                                      
                                                      <span ><?=number_format($v['gia'],0, ',', ',')." ??"?></span>
                                                     
                                                          <div class="has-warning"><span class="help-block">Gi?? Flash Deal: <strong><?=number_format($v['gia']-$giatri,0, ',', ',')." ??"?></strong></span></div>
                                                      </td>
                                                         <td>
                                                        
                                                          <div>
                                                              <span class="red"  ><?=number_format($v['gia']-$giatri,0, ',', ',')." ??"?></span>
                                                          </div>
                                                     
                                                          <span class="red" ></span>
                                                    
                                                      </td>
                                                      <td>
                                                          <span ><?=$khuyenmai?> %</span>
                                                      </td>

                                                      <?php } else {

                                                        $giakhuyenmai=round((100-$giatri)*$v['gia']/100,-3);

                                                        ?>


                                                      <span ><?=number_format($v['gia'],0, ',', ',')." ??"?></span>
                                                     
                                                          <div class="has-warning"><span class="help-block">Gi?? Flash Deal: <strong><?=number_format($giakhuyenmai,0, ',', ',')." ??"?></strong></span></div>
                                                      </td>
                                                  <td>
                                                        
                                                          <div>
                                                              <span class="red"  ><?=number_format($giakhuyenmai,0, ',', ',')." ??"?></span>
                                                          </div>
                                                     
                                                          <span class="red" ></span>
                                                    
                                                      </td>
                                                      <td>
                                                          <span ><?=$giatri?> %</span>
                                                      </td>

                                                      <?php } ?>




                                                    <?php } else {?>


                                                        <span ><?=number_format($v['gia'],0, ',', ',')." ??"?></span>
                                                   
                                                        
                                                        </td>
                                                    <td>
                                                          
                                                            <div>
                                                                <span class="red"  ><?=number_format($v['gia'],0, ',', ',')." ??"?></span>
                                                            </div>
                                                       
                                                            <span class="red" ></span>
                                                      
                                                        </td>
                                                        <td>
                                                            <span >0 %</span>
                                                        </td>


                                                    <?php }  ?>








                                                    <td class="c_align">
                                                        <img src="media/images/delicon.gif" class="xoa1" data-del="<?=$v['id']?>" width="14" height="17" style="cursor:pointer">
                                                    </td>
                                                </tr>


                                            <?php } } ?>


                                  </tbody>
                          </table>
                      </div>





                  </div>


                </div>





                



                  <input type="hidden" name="id" id="id" value="<?=@$item['id']?>" />
                  <input type="hidden" name="listsp" id="listsp" value="<?=@$item['listsp']?>" />
                <div class="col-md-10 col-md-offset-2" style="text-align: right;">                  
                       <button type="button" id="btnluukhuyenmai"  class="btn btn-success"><i class="fa fa-check"></i> L??u</button>
               
                  <button type="button" onclick="javascript:window.location='index.php?com=khuyenmai&act=man<?=$chuoi_noi_curpage?>'" class="btn btn-info"><i class="fa fa-share"></i> Tho??t</button>
                </div>
                               
                <div class="clearfix"></div>


              </form>

            </div>
          </div>

        
          <!-- Inline Form End -->
	</div>




<!-- modal -->


<?php

$d>reset();
$sql="select * from #_product_cat where com='cat' order by stt asc, id desc";
$d->query($sql);
$cat=$d->result_array();
  function get_main_category($a)
          {
            $sql="select * from table_product_cat where com='cat' order by stt asc,id desc";
            $stmt=mysql_query($sql);
            $str='
              <select id="id_cat" name="id_cat">
               <option value="0">Ch???n danh m???c c???p 1</option>
              ';
            while ($row=@mysql_fetch_array($stmt)) 
            {
              if($row["id"]==(int)@$a)
                $selected="selected";
              else 
                $selected="";
              $str.='<option value='.$row["id"].' '.$selected.'>'.$row["ten_vi"].'</option>';     
            }
            $str.='</select>';
            return $str;
          }
          function get_main_category1($a,$b)
          {
            $sql="select * from table_product_cat where com='cat1' and id_cat=$a order by stt asc,id desc";
            $stmt=mysql_query($sql);
            $str='
              <select id="id_cat1" name="id_cat1">
               <option value="0">Ch???n danh m???c c???p 2</option>
              ';
            while ($row=@mysql_fetch_array($stmt)) 
            {
              if($row["id"]==(int)@$b)
                $selected="selected";
              else 
                $selected="";
              $str.='<option value='.$row["id"].' '.$selected.'>'.$row["ten_vi"].'</option>';     
            }
            $str.='</select>';
            return $str;
          }
          function get_main_category2($a,$b)
          {
            $sql="select * from table_product_cat where com='cat2' and id_cat1=$a order by stt asc,id desc";
            $stmt=mysql_query($sql);
            $str='
              <select id="id_cat2" name="id_cat2">
               <option value="0">Ch???n danh m???c c???p 3</option>
              ';
            while ($row=@mysql_fetch_array($stmt)) 
            {
              if($row["id"]==(int)@$b)
                $selected="selected";
              else 
                $selected="";
              $str.='<option value='.$row["id"].' '.$selected.'>'.$row["ten_vi"].'</option>';     
            }
            $str.='</select>';
            return $str;
          }
?>
<div class="col-xs-12">



  <!-- Modal -->
  <div id="addpromotion" class="modal fade"  role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Th??m s???n ph???m</h4>
        </div>
        <div class="modal-body">
              <!--noidung-->

                  <div class="product_add_promotion">

                       <div class="search_bar_input_select clearfix">
                              <div class="box">
                                
                                  <input type="text" name="textfield2" id="textfield2" class="fourper form-control"  placeholder="T??n s???n ph???m">
                               </div>
                              <div class="box" id="cat_div" >
                             
                                  <select id="id_cat"  class="form-control">
                                      <option value="">Danh m???c s???n ph???m</option>

                                      <?php foreach ($cat as $v) {?>
                                      <option value="<?=$v['id']?>"><?=$v['ten_vi']?></option>
                                      <?php } ?>
                                  </select>
                              </div>
                              <div class="box" id="cat1_div">
                                
                                      <select id="id_cat1"  class="form-control">
                                      <option value="">Danh m???c s???n ph???m</option>
                                   
                                      </select>
                              </div>
                              <div class="box" id="cat2_div">
                            
                                  <select id="id_cat2"  class="form-control">
                                      <option value="">Danh m???c s???n ph???m</option>
                                     
                                      </select>
                              </div>
                              <a class="search_promotion btn btn-danger" id="timkiemsp1" >T??m ki???m</a>
                        </div>

                        <div class="list_item">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th valign="middle">
                                                <div class="checkbox-nice">
                                                    <input type="checkbox" id="checkbox-23" >
                                                    <label for="checkbox-23">&nbsp;</label>
                                                </div>
                                            </th>


                                            <th valign="middle">S???n ph???m</th>
                                            <th valign="middle">M?? s???n ph???m</th>
                                            <th valign="middle">T??n s???n ph???m</th>
                                            <th valign="middle">Gi?? b??n</th>
                                            <th valign="middle">Tr???ng th??i</th>
                                            <th valign="middle">T??nh tr???ng</th>
                                        </tr>
                                    </thead>
                                    <tbody id="showsanpham">



                                            <?php

                                                $d->reset();
                                                $sql="select * from #_product where hienthi=1 ";
                                                $d->query($sql);
                                                $product1=$d->result_array();

                                             ?>
                                            <?php foreach ($product1 as $k=> $v) {?>




                                             <tr class="<?=($k%2==0)?'bggrey':''?>">

                                                  <?php if(in_array($v['id'], $mangidkm)) {?>
                                                    <td align="center">

                                                        <div class="checkbox-nice">
                                                            <input type="checkbox" checked="checked" name="themsp" data-id="<?=$v['id']?>" id="<?=$v['id']?>" >
                                                            <label for="<?=$v['id']?>">&nbsp;</label>
                                                        </div>
                                                    </td>


                                                    <?php } else {?>

                                                       <td align="center">

                                                        <div class="checkbox-nice">
                                                            <input type="checkbox" name="themsp" data-id="<?=$v['id']?>" id="<?=$v['id']?>" >
                                                            <label for="<?=$v['id']?>">&nbsp;</label>
                                                        </div>
                                                      </td>


                                                    <?php } ?>
                                                    <td class="c_align">
                                                        <img style="width: 55px" src="../upload/sanpham/<?=$v['photo']?>">
                                                    </td>
                                                    <td ><?=$v['masp']?></td>
                                                    <td ><?=$v['ten_vi']?> </td>
                                                    <td>
                                                        
                                                           <!--  <del class="text-muted" >179,000??</del> -->
                                                            <b class="center-block text-danger"><?=number_format($v['gia'],0, ',', ',')." ??"?></b>
                                                      
                                                    </td>
                                                    <td>
                                                        <div class="statusproduct">
                                                        
                                                            <span class="daduyet">
                                                                ???? duy???t
                                                            </span>
                                                      
                                                        </div>
                                                    </td>
                                               
                                                    <td align="center">C??n h??ng</td>
                                              
                                                </tr>
                                          <?php } ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                  </div>

              <!-- end noidung -->
        </div>
        <div class="modal-footer">
        <button class="btn dongy_noicon btn btn-danger btn-sm" id="dongy_noicon" data-dismiss="modal" aria-hidden="true">?????ng ??</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>


<!-- modal-->













<script type="text/javascript">
  


    $('#btnluukhuyenmai').click(function(){



      var frm = $('#frmKM');
      var tieude = frm.find('#tieude').val();   
      var giatri = frm.find('#giatri').val();
      var thoigianbatdau = frm.find('#thoigianbatdau').val();
      var thoigianketthuc = frm.find('#thoigianketthuc').val();
      if(tieude=='')
      {
        alert('B???n ch??a nh???p t??n ch????ng tr??nh khuy???n m??i');
        return false;
      }
        if(giatri=='')
      {
        alert('B???n ch??a nh???p gi?? tr??? khuy???n m??i');
        return false;
      }

        if(thoigianbatdau=='')
      {
        alert('B???n ch??a nh???p th???i gian b???t ?????u khuy???n m??i');
        return false;
      }
       if(thoigianketthuc=='')
      {
        alert('B???n ch??a nh???p th???i gian k???t th??c khuy???n m??i');
        return false;
      }
       frm.submit();
            return false;
    });


$('.xoa1').click(function(){
      if(confirm('B???n c?? mu???n x??a s???n ph???m n??y?')){
  var id=$(this).attr('data-del');

  var idkm='<?=$_GET['id']?>';





       $.ajax({
                        url:'ajax/xoasanpham.php',
                        type:'post',
                        data: {'id':id,'idkm':idkm},
                      
                        success:function(data){
                      
                        

                                 window.location.href = "<?=q_getCurrentPageURL1()?>";
                        }
           });



      }

});








  $('#timkiemsp1').click(function(){




        var value=$('#textfield2').val();
        var cap1=$('#id_cat').val();
        var cap2=$('#id_cat1').val();
        var cap3=$('#id_cat2').val();

         $.ajax({
                        url:'ajax/locsp.php',
                        type:'post',
                        data: {'value':value,'cap1':cap1,'cap2':cap2,'cap3':cap3},
                      
                        success:function(data){
                      
                            $('#showsanpham').html(data);

                        }
           });




    });



$('#dongy_noicon').click(function(){

      var id_quantam='';
            jQuery("input:checkbox[name=themsp]:checked").each(function()
                              {
                                  id_quantam=id_quantam +jQuery(this).attr('data-id')+',';
            });

      

        var listid=id_quantam.substring(0, id_quantam.length - 1);
      var idloaigiam=$('input:radio[name=loaigiam]:checked').val();
      var giatri= $('#giatri').val();

         $.ajax({
                        url:'ajax/themsanpham.php',
                        type:'post',
                        data: {'loaigiam':idloaigiam,'listid':id_quantam,'giatri':giatri},
                      
                        success:function(data){
                      
                            $('#showsanphamdathem').html(data);

                             $('#listsp').val(listid);
                        }
           });
          
});


           

 
//      $("#thoigianbatdau").on('change', function(){
         
//          var date = Date.parse($(this).val());
      
//          var today = new Date();
//          var dd = today.getDate();
//     var mm = today.getMonth()+1; 
//     var yyyy = today.getFullYear();

//     if(dd<10){
//          dd='0'+dd;
//     } 
//     if(mm<10){
//             mm='0'+mm;
//     } 
//     var today1 = yyyy+'-'+mm+'-'+dd;

    
//          if (date < Date.parse(today1)){
//              alert('Vui l??ng nh???p ng??y h???p l???');
//              $(this).val('');
//          }
         
   
// });


//       $("#thoigianketthuc").on('change', function(){
         
//          var date = Date.parse($(this).val());
//        var date1= Date.parse($('#thoigianbatdau').val());
//          var today = new Date();
//          var dd = today.getDate();
//     var mm = today.getMonth()+1; 
//     var yyyy = today.getFullYear();

//     if(dd<10){
//          dd='0'+dd;
//     } 
//     if(mm<10){
//             mm='0'+mm;
//     } 
//     var today1 = yyyy+'-'+mm+'-'+dd;


//          if (date < Date.parse(today1)||date < date1){
//              alert('Th???i gian k???t th??c ph???i l???n h??n ho???c b???ng Th???i gian hi???n t???i');
//              $(this).val('');
//          }
      


         
   
// });
</script>