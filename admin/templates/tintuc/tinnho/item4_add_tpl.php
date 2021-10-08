<?php if(!defined('_kiemtraweb') || _kiemtraweb!=$check_website) daysangtranglogin(); ?>


<!-- Breadcrumbs Start -->



    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

    <h4 class="header-title "><a href="index.php?com=tinnho&act=man4">TESTIMONIAL</a></h4>

    </div>

 


          <div class=" w-full>

            <div class="inner">
       


              <!-- Title Bar Start -->

              <!-- <div class="title-bar col-md-12">
           
                <h4><button type="button" onclick="javascript:document.frm.submit()" class="btn btn-success"><i class="fa fa-check"></i> Lưu</button></h4>
                <br>
              </div> -->

              <!-- Title Bar End -->

			              

              <form method="post" name="frm" action="index.php?com=tinnho&act=save4<?=$chuoi_noi_curpage?>" enctype="multipart/form-data" class="basic-form inline-form  pt-20 "">              

                <input type="hidden" name="id" id="id" value="<?=@$item['id']?>" />

                

                <div class="col-md-12 pt-10">                  

                  <button type="button" onclick="javascript:document.frm.submit()" class="btn btn-success"><i class="fa fa-check"></i> Lưu</button>

                  <button type="button" onclick="javascript:window.location='index.php?com=tinnho&act=man4<?=$chuoi_noi_curpage?>'" class="btn btn-info"><i class="fa fa-share"></i> Thoát</button>

                </div>

                               

                <div class="clearfix"></div>

              <?php if ($_REQUEST['act']=='edit'){?>

                <div class="col-md-2 pt-20"><label>Hình hiện tại</label></div>

                <div class="col-md-10 pt-20"><img src="<?=_upload_tinnho.$item['photo']?>"  width="250" alt="NO PHOTO" /><br /><br /></div>

                <?php }?>

                <div class="col-md-2 pt-10"><label>Hình ảnh</label></div>

                <div class="col-md-10">

                  <input type="file" name="file" /> 

                    <span class="description">Type: .jpg|.gif|.png|.jpeg &nbsp;&nbsp;;&nbsp;&nbsp; Ảnh chuẩn: Width:23px - Height:23px</span>

                    <br /><br />

                </div>
                <br>
        

      
               <div class="col-md-2 pt-10"><label>Số thứ tự</label></div>

                <div class="col-md-10"><input type="text" name="stt" id="stt" class="w-full txt-area" value="<?=isset($item['stt'])?$item['stt']:1?>" placeholder="Số thứ tự" /></div>

                <div class="clearfix"></div> 
                
        <!-- 

               <?php if ($_REQUEST['act']=='edit'){?>

                      <div class="col-md-2"><label>Download hiện tại</label></div>

                      <div class="col-md-10"><label><?=$item['download']?></label> <br /><br /></div>

                      <?php }?>

                      <div class="col-md-2"><label>Download</label></div>

                      <div class="col-md-10">

                        <input type="file" name="file1" /> 

                          <span class="description">Type: .jpg|.gif|.png|.jpeg|.doc|.docx|.pdf.xlsx</span>

                          <br /><br />

                      </div> -->

                   
                <!-- <div class="col-md-2 pt-10"></div>

                <div class="col-md-10"><input type="checkbox" name="hienthi" class="icheck-blue " <?=(!isset($item['hienthi']) || $item['hienthi']==1)?'checked="checked"':''?> /> <span class="hienthi_text">Hiển thị</span></div>

                <div class="clearfix"></div> 
                <br>-->
                <br> 
                  

                <?php if($item['maptext']!='') { ?>

                  <div class="col-md-2"><label>Mã code</label></div>

                

                <div class="col-md-10"><input type="text" name="maptext" id="maptext" value="<?=$item['maptext']?>" placeholder="Code" /></div>

                <?php } ?>

           <!-- PHẦN DƯỚI LÀ DÀNH CHO NỘI DUNG ĐA NGÔN NGỮ-->

                     

                         

                <!-- Tabs Navigation End -->

                <!-- Tab panes -->

                <div class="tab-content">

                    <?php foreach ($config["lang"] as $key => $value) {
                        $active = '';
                        $active_block = '';
                        if ($key == 0) {
                            $active = "active";
                            // $active_block = "style='display:block;'";
                        }
                        ?> 



                <div class="tab-pane <?=$active?>" id="tab<?= $value ?>">

                      

                <div class="col-md-2 pt-10"><label>Tên <?= $config["langs"][$value]?></label></div>
                <div class="col-md-10"><input type="text" class="w-full txt-area" name="ten_<?= $value ?>" id="ten_<?= $value ?>" value="<?=$item['ten_'.$value]?>" placeholder="Tên " /></div>
                <div class="clearfix"></div> 
                <br>

                <div class="col-md-2 pt-10"><label>Chức vụ <?= $config["langs"][$value]?></label></div>
                <div class="col-md-10"><input type="text" class="w-full txt-area" name="chucvu_<?= $value ?>" id="chucvu_<?= $value ?>" value="<?=$item['chucvu_'.$value]?>" placeholder="Chức vụ" /></div>
                <div class="clearfix"></div> 
                <br>
                <div class="col-md-2"></div>
                <div class="col-md-10"><input type="checkbox" name="hienthi" class="icheck-blue" <?=(!isset($item['hienthi']) || $item['hienthi']==1)?'checked="checked"':''?> /> <span class="hienthi_text">Hiển thị</span></div>
                <div class="clearfix"></div>
                <br>
                <div class="col-md-2 pt-10"><label>Mô tả <?= $config["langs"][$value]?></label></div>
                <div class="col-md-10"><textarea name="mota_<?= $value ?>" cols="50" rows="6" placeholder="Mô tả"><?=$item['mota_'.$value]?></textarea></div>  
                <script type="text/javascript">
                  var mota_<?=$value?> = CKEDITOR.replace('mota_<?=$value?>');
                </script>
                <div class="clearfix"></div>
                <br>
                <div class="col-md-2 pt-10"><label>Nội dung  <?= $config["langs"][$value]?></label></div>
                <div class="col-md-10"><textarea name="noidung_<?= $value ?>" cols="50" rows="6" placeholder="Nội dung"><?=$item['noidung_'.$value]?></textarea></div>  
                <script type="text/javascript">
                  var noidung_<?=$value?> = CKEDITOR.replace('noidung_<?=$value?>');
                </script>
                <div class="clearfix"></div>
                 <br>       
                <div class="col-md-2 pt-10"><label>h1 <?=$value?></label></div>
                <div class="col-md-10"><input type="text" class="w-full txt-area" name="h1_<?= $value ?>" id="h1_<?= $value ?>" value="<?=$item['h1_'.$value]?>" placeholder="Thẻ h1" /></div>
                <div class="clearfix"></div>
                <br>
                <div class="col-md-2 pt-10"><label>h2 <?=$value?></label></div>
                <div class="col-md-10"><input type="text" class="w-full txt-area" name="h2_<?= $value ?>" id="h2_<?= $value ?>" value="<?=$item['h2_'.$value]?>" placeholder="Thẻ h2" /></div>
                <div class="clearfix"></div> 
                <br>
                <div class="col-md-2 pt-10"><label>h3 <?=$value?></label></div>
                <div class="col-md-10"><input type="text" class="w-full txt-area" name="h3_<?= $value ?>" id="h3_<?= $value ?>" value="<?=$item['h3_'.$value]?>" placeholder="Thẻ h3" /></div>
                <div class="clearfix"></div>
                <br>
                <div class="col-md-2 pt-10"><label>Title <?=$config["langs"][$value]?></label></div>
                <div class="col-md-10"><input type="text" class="w-full txt-area" name="title_<?= $value ?>" id="title_<?= $value ?>" value="<?=$item['title_'.$value]?>" placeholder="Title" /></div>
                <div class="clearfix"></div>
                <br>
                <div class="col-md-2 pt-10"><label>Keywords <?=$config["langs"][$value]?></label></div>
                <div class="col-md-10"><textarea class="w-full txt-area" name="keywords_<?= $value ?>" cols="50" rows="6" placeholder="Keywords"><?=$item['keywords_'.$value]?></textarea></div>
                <div class="clearfix"></div>
                <br>
                <div class="col-md-2 pt-10"><label>Description <?=$config["langs"][$value]?></label></div>
                <div class="col-md-10"><textarea class="w-full txt-area" name="description_<?= $value ?>" cols="50" rows="6" placeholder="Description"><?=$item['description_'.$value]?></textarea></div>   




                    <div class="clearfix"></div>

                  <?php }?>

                </div> 
                        <br>


    <!--END NỘI DUNG ĐA NGÔN NGỮ -->



                
                      <input type="hidden" name="id" id="id" value="<?=@$item['id']?>" />

                                  

                  <div class="col-md-10 col-md-offset-2 pt-10">                  

                    <button type="button" onclick="javascript:document.frm.submit()" class="btn btn-success"><i class="fa fa-check"></i> Lưu</button>

                    <button type="button" onclick="javascript:window.location='index.php?com=tinnho&act=man4<?=$chuoi_noi_curpage?>'" class="btn btn-info"><i class="fa fa-share"></i> Thoát</button>

                  </div>

                                

                  <div class="clearfix"></div>
                                  



              </form>



            </div>

          </div>

          <!-- Inline Form End -->

	</div>