<?php if(!defined('_kiemtraweb') || _kiemtraweb!=$check_website) daysangtranglogin(); ?>

<script type="text/javascript">
	tinyMCE.init({
		// General options
		mode : "exact",
        elements : "noidung",
		theme : "advanced",
		convert_urls : false,
		plugins : "autolink,lists,pagebreak,style,layer,table,advhr,advimage,imagemanager,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,wordcount,advlist,autosave,visualblocks",
height:"500px",
    width:"100%",
	remove_script_host : false,

		// Theme options
		theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,styleselect,formatselect,fontselect,fontsizeselect",
		theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
		theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",		
		theme_advanced_toolbar_location : "top",
		theme_advanced_toolbar_align : "left",
		theme_advanced_statusbar_location : "bottom",
		theme_advanced_resizing : true,

		// Example content CSS (should be your site CSS)
		content_css : "css/content.css",

		// Drop lists for link/image/media/template dialogs
		template_external_list_url : "lists/template_list.js",
		external_link_list_url : "lists/link_list.js",
		external_image_list_url : "lists/image_list.js",
		media_external_list_url : "lists/media_list.js",

		// Style formats
		style_formats : [
			{title : 'Bold text', inline : 'b'},
			{title : 'Red text', inline : 'span', styles : {color : '#ff0000'}},
			{title : 'Red header', block : 'h1', styles : {color : '#ff0000'}},
			{title : 'Example 1', inline : 'span', classes : 'example1'},
			{title : 'Example 2', inline : 'span', classes : 'example2'},
			{title : 'Table styles'},
			{title : 'Table row 1', selector : 'tr', classes : 'tablerow1'}
		],

		// Replace values for the template plugin
		template_replace_values : {
			username : "Some User",
			staffid : "991234"
		}
	});
</script>

<script>
$(document).ready(function() {
$("#chonhet").click(function(){
	var status=this.checked;
	$("input[name='chon']").each(function(){this.checked=status;})
});

$("#send").click(function(){
	var listid="";
	$("input[name='chon']").each(function(){
		if (this.checked) listid = listid+","+this.value;
    	})
	listid=listid.substr(1);	 //alert(listid);
	if (listid=="") { alert("B???n ch??a ch???n m???c n??o"); return false;}
	hoi= confirm("X??c nh???n mu???n g???i th?? ??i?");
	if (hoi==true){ document.frm.listid.value=listid; document.frm.submit();}
});
});
</script>

<style type="text/css">
  input[type='number']::-webkit-inner-spin-button, 
input[type='number']::-webkit-outer-spin-button { 
    display: none;
}
</style>
<!-- Breadcrumbs Start -->
  <div class="row breadcrumbs">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
      <ul class="breadcrumbs">
        <li><a href="index.php"><i class="fa fa-home"></i></a></li>
        <li><a href="index.php?com=khuyenmai&act=man" title="Email ????ng k??">Khuy???n m??i</a></li>
      </ul>
    </div>
  </div>
  <!-- Breadcrumbs End -->
        
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
  	  	<!--<div class="inner" style="margin-bottom:10px;">
            <div class="message-box info">
              <i class="fa fa-exclamation-circle"></i>
              <p>L??u ??: Ch??? n??n c?? t???i ??a 4-5 b???n ?????, t??n b???n ????? kh??ng n??n ?????t d??i qu??!</p>
            </div>
        </div>-->
        
      <!-- Inline Form Start -->      	      
        <div class="boxed no-padding col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="inner">
          	            
            <!-- Title Bar Start -->
            <div class="title-bar">               
              <div class="col-md-8" style="padding-left:0px; padding-top:7px; padding-bottom:7px;">                 
          
                <a href="index.php?com=khuyenmai&act=add<?=$chuoi_noi_curpage?>" class="btn btn-success"><i class="fa fa-check"></i> Th??m khuy???n m??i</a> 
       <!--           <a href="index.php?com=khuyenmai&act=add<?=$chuoi_noi_curpage?>" class="btn btn-success"><i class="fa fa-check"></i> K??ch ho???t m?? ???? t???o</a> -->

          <!--         <a href="#" class="btn btn-danger" id="xoahet"><i class="fa fa-times"></i> X??a m?? ch??a k??ch ho???t</a>  -->
          
              </div>
         <!--      <div class="col-md-4 paging_0px">  
              	<form action="index.php?com=khuyenmai&act=man<?=$chuoi_noi_curpage?>" method="post" class="inline-form">
                	<div id="timkiem_khung">
                    	<input type="text" name="search" id='search' value="<?=@$_REQUEST['search']?>" placeholder="Nh???p email c???n t??m ..." class='timkiem_input' />
                        <input type="image" name="btnSearch" src="media/images/search-focus.png" value="T??m ki???m" id='nut_timkiem' />
                    </div>                    
                </form>
              </div> -->
              <div class="clear"></div>     
            </div>
            <!-- Title Bar End -->                                  
            
            <form name="frm" method="post" action="index.php?com=khuyenmai&act=send" enctype="multipart/form-data">		    
				<input type="hidden" name="listid">
            <!-- Table Holder Start -->
            <div class="table-holder">

              <table class="stripe-rows" cellspacing="0" cellpadding="0" width="100%" border="1">            
                <thead>
                  <th style="width:5%;"><input type="checkbox" name="chonhet" id="chonhet" /></th>
                  <th>??u ti??n</th>
                    <th>H??nh</th>
                  <th>Ch????ng tr??nh khuy???n m??i</th>
                  <th>Th???i gian</th> 
                   <th>N???i dung</th> 
                    <th>Tr???ng th??i</th>  
                    <th style="width:5%;">X??a</th>
                  <th style="width:5%;">S???a</th>
       
                </thead>
                <tbody>
                  <?php 
				  	if(count($items)!=0){
						foreach($items as $k=>$v){

                $listid=explode(',', $v['listsp']);
              

				  ?>
                  <tr>
                    <td style="width:5%;"><input type="checkbox" name="chon" id="chon" value="<?=$v['id']?>" class="chon" /></td>    
                     <td><input type="number" min="1" style="    width: 40px; text-align: center;" data-id="<?=$v['id']?>" class="uutien" value="<?=$v['uutien']?>"></td>
                  <td><a href="index.php?com=khuyenmai&act=edit&id=<?=$v['id']?><?=$chuoi_noi_curpage?>" style="text-decoration:none;"><img src="<?=_upload_khuyenmai.$v['photo']?>" width="150px"/></a></td>
                    <td><a href="index.php?com=khuyenmai&act=edit&id=<?=$v['id']?><?=$chuoi_noi_curpage?>"><b><?=$v['tieude']?></b></a></td>                
                    <td><?=$v['thoigianbatdau']?> ?????n <?=$v['thoigianketthuc']?></td>
                     <td>Gi???m <b><?=($v['loaigiam']==1)? $v['giatri'].'%': $v['giatri'].'??'  ?></b>  cho <b><?=count($listid)?></b> s???n ph???m</td>
                  
                

                    <td style="width:5%;"><a <?=($v['tinhtrang']==0)?'< href="index.php?com=khuyenmai&act=man&tinhtrang='.$v['id'].''.$chuoi_noi_curpage.'"':'' ?>   ><img src="<?=($v['tinhtrang']==1)?'media/images/active_1.png':'media/images/active_0.png'?>" border="0" /></a></td>

              

                         <td style="width:5%;"><a href="index.php?com=khuyenmai&act=delete&id=<?=$v['id']?><?=$chuoi_noi_curpage?>" onClick="if(!confirm('X??c nh???n x??a')) return false;"><img src="media/images/delete.png" border="0" title="X??a" /></a></td>
                      <td style="width:5%;"><a href="index.php?com=khuyenmai&act=edit&id=<?=$v['id']?><?=$chuoi_noi_curpage?>" ><img src="media/images/edit.png" border="0" title="Xem" /></a></td>

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

            <div class="clearfix"></div>
           
            </form>

          </div>
        </div>
        <!-- Inline Form End -->
  </div>


  <script type="text/javascript">
    
      $('.uutien').blur(function(){

          var value=$(this).val();
           var id=$(this).attr('data-id');

              $.ajax({
                            url:'ajax/thaydoiuutien.php',
                            type:'post',
                            data: {'id':id,'value':value},
                          
                            success:function(data){
                          
                                 $('#showsanphamdathem').html(data);

                                  $('#listsp').val(chuoiid);
                            }
               });

      });

  </script>