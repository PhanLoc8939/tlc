<?php if(!defined('_kiemtraweb') || _kiemtraweb!=$check_website) daysangtranglogin(); ?>

<script type="text/javascript">
	tinyMCE.init({
		// General options
		mode : "exact",
        elements : "noidung,mota_vi",
		theme : "advanced",
		convert_urls : false,
		plugins : "autolink,lists,pagebreak,style,layer,table,save,advhr,advimage,imagemanager,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,wordcount,advlist,autosave,visualblocks",
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
	$(document).ready(function(e) {
        $("#id_cat").change(function(e) {
            var id=$(this).val();
			$.ajax({
				url:'ajax/cat_hethong.php',
				type:'get',
				data:'id='+id,
				dataType:'html',
				success:function(data){
					$("#cat_div").html(data);
					$("#id_cat1").selectbox();  	
					
					$("#id_cat1").change(function(e) {
						var id=$(this).val();
						$.ajax({
							url:'ajax/cat1_hethong.php',
							type:'get',
							data:'id='+id,
							dataType:'html',
							success:function(data){
								$("#cat1_div").html(data);	
								$("#id_cat2").selectbox();  
							}
						});
					});
					
				}
			});
        });
		$("#id_cat1").change(function(e) {
            var id=$(this).val();
			$.ajax({
				url:'ajax/cat1_hethong.php',
				type:'get',
				data:'id='+id,
				dataType:'html',
				success:function(data){
					$("#cat1_div").html(data);	
					$("#id_cat2").selectbox();  
				}
			});
        });
				
    });
</script>

<!-- Breadcrumbs Start -->
  <div class="row breadcrumbs">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
      <ul class="breadcrumbs">
        <li><a href="index.php"><i class="fa fa-home"></i></a></li>
        <li><a href="index.php?com=hethong&act=man">Trung t??m</a></li>
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
              <div class="title-bar">
                <h4><button type="button" onclick="javascript:document.frm.submit()" class="btn btn-success"><i class="fa fa-check"></i> L??u</button></h4>
              </div>
              <!-- Title Bar End -->
			
              <?php
				function get_main_category($a)
					{
						$sql="select * from table_hethong_cat where com='cat' order by stt asc,id desc";
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
							$str.='<option  value='.$row["id"].' '.$selected.'>'.$row["ten_vi"].'</option>';			
						}
						$str.='</select>';
						return $str;
					}
					function get_main_category1($a,$b)
					{
						$sql="select * from table_hethong_cat where com='cat1' and id_cat=$a order by stt asc,id desc";
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
						$sql="select * from table_hethong_cat where com='cat2' and id_cat1=$a order by stt asc,id desc";
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
              <form method="post" name="frm" action="index.php?com=hethong&act=save<?=$chuoi_noi_curpage?>" enctype="multipart/form-data" class="basic-form inline-form">
             <!--  	<?php if ($_REQUEST['act']=='edit'){?>
                <div class="col-md-2"><label>H??nh hi???n t???i</label></div>
                <div class="col-md-10"><img src="<?=_upload_hethong.$item['photo']?>"  width="200px" alt="NO PHOTO" /><br /><br /></div>
                <?php }?>

                <div class="clearfix"></div>

                <div class="col-md-2"><label>H??nh ???nh</label></div>
                <div class="col-md-10">
                	<input type="file" name="file" /> 
                    <span class="description">Type: .jpg|.gif|.png|.jpeg &nbsp;&nbsp;;&nbsp;&nbsp; ???nh chu???n: Width:1366px - Height:397px</span>
                    <br /><br />
                </div>
        -->
                <div class="col-md-2"><label>Danh m???c c???p 1 </label></div>
                <div class="col-md-10" ><?=get_main_category($item['id_cat']);?></div>
	
                <!--
                <div class="col-md-2"><label>Danh m???c c???p 2 </label></div>
                <div class="col-md-10" id='cat_div'><?=get_main_category1(@$item["id_cat"],$item["id_cat1"]);?></div>
                <div class="col-md-2"><label>Danh m???c c???p 3 </label></div>
                <div class="col-md-10" id='cat1_div'><?=get_main_category2(@$item["id_cat1"],$item["id_cat2"]);?></div>
                -->
                
                <div class="col-md-2"><label>T??n</label></div>
                <div class="col-md-10"><input type="text" name="ten_vi" id="ten_vi" value="<?=$item['ten_vi']?>" placeholder="T??n "   /></div>
          <!--       
              
                <div class="col-md-2"><label>M?? t???</label></div>
                <div class="col-md-10"><textarea name="mota_vi" id="mota" cols="50" rows="6"><?=$item['mota_vi']?></textarea><br /></div>
            
				
                <div class="col-md-2"><label>N???i dung</label></div>
                <div class="col-md-10"><textarea name="noidung_vi" id="noidung" cols="50" rows="6"><?=$item['noidung_vi']?></textarea><br /></div> 
                          -->       
				   <div class="col-md-2"><label>?????a ch???</label></div>
                <div class="col-md-10"><input type="text" name="diachi" id="title" value="<?=$item['diachi']?>" placeholder="?????a ch???" /></div>
                   <div class="col-md-2"><label>??i???n tho???i</label></div>
                <div class="col-md-10"><input type="text" name="dienthoai" id="title" value="<?=$item['dienthoai']?>" placeholder="??i???n tho???i" /></div>
                <div class="col-md-2"><label>Link</label></div>
                <div class="col-md-10"><input type="text" name="title" id="title" value="<?=$item['title']?>" placeholder="V?? d???: 24h.com.vn" /></div>
				<!--
                <div class="col-md-2"><label>Keywords</label></div>
                <div class="col-md-10"><textarea name="keywords" cols="50" rows="6" placeholder="Keywords"><?=$item['keywords']?></textarea></div>
                <div class="col-md-2"><label>Description</label></div>
                <div class="col-md-10"><textarea name="description" cols="50" rows="6" placeholder="Description"><?=$item['description']?></textarea></div>   
                -->
                <div class="col-md-2"><label>S??? th??? t???</label></div>
                <div class="col-md-10"><input type="text" name="stt" id="stt" value="<?=isset($item['stt'])?$item['stt']:1?>" placeholder="S??? th??? t???" /></div>
                <div class="col-md-2"></div>
                <div class="col-md-10"><input type="checkbox" name="hienthi" class="icheck-blue" <?=(!isset($item['hienthi']) || $item['hienthi']==1)?'checked="checked"':''?> /> <span class="hienthi_text">Hi???n th???</span></div>
                
                
				<input type="hidden" name="id" id="id" value="<?=@$item['id']?>" />
                
                <div class="col-md-10 col-md-offset-2">                  
                  <button type="button" onclick="javascript:document.frm.submit()" class="btn btn-success"><i class="fa fa-check"></i> L??u</button>
                  <button type="button" onclick="javascript:window.location='index.php?com=hethong&act=man<?=$chuoi_noi_curpage?>'" class="btn btn-info"><i class="fa fa-share"></i> Tho??t</button>
                </div>

                <div class="clearfix"></div>

              </form>

            </div>
          </div>
          <!-- Inline Form End -->
	</div>