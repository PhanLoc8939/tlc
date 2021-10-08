<!-- Breadcrumbs Start -->

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

<h4 class="header-title "><a href="index.php?com=about&act=capnhap">About</a></h4>

</div>

<!-- Breadcrumbs End -->



<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

    	<!--<div class="inner" style="margin-bottom:10px;">

            <div class="message-box info">

              <i class="fa fa-exclamation-circle"></i>

              <p>Lưu ý: Chỉ nên có tối đa 4-5 bản đồ, tên bản đồ không nên đặt dài quá, nên đặt số thứ tự chính xác để dễ quản lý!</p>

            </div>

          </div>-->





          <!-- Inline Form Start -->

          <div class="boxed no-padding w-full">

            <div class="inner">



              <!-- Title Bar Start -->

              <div class="title-bar">

                <h4><button type="button" onclick="javascript:document.frm.submit()" class="btn btn-success"><i class="fa fa-check"></i> Lưu</button></h4>

              </div>

              <!-- Title Bar End -->



              <form method="post" name="frm" action="index.php?com=about&act=save" enctype="multipart/form-data" class="basic-form inline-form">                              


               <?php if ($_REQUEST['act']=='capnhap'){?>

                <div class="col-md-2 pt-10"><label>Hình Ảnh</label></div>

                <div class="col-md-10"><img src="<?=_upload_tinnho.$item['photo']?>"  width="295" alt="NO PHOTO" /><br /><br /></div>

              <?php }?>



              <div class="clearfix"></div>

              <div class="col-md-2 pt-10"><label>Hình ảnh </label></div>

              <div class="col-md-10">

                <input type="file" name="file" /> 

                <span class="description">Type: .jpg|.gif|.png|.jpeg &nbsp;&nbsp;;&nbsp;&nbsp; Ảnh chuẩn: Width:295px - Height:173px</span>

                <br /><br />

              </div>

<!-- 
              <?php if ($_REQUEST['act']=='capnhap'){?>

                <div class="col-md-2 pt-10"><label>Hình ảnh (Trang trong)</label></div>

                <div class="col-md-10"><img src="<?=_upload_tinnho.$item['photo1']?>"  width="295" alt="NO PHOTO" /><br /><br /></div>

              <?php }?> -->



              <!-- <div class="clearfix"></div>

              <div class="col-md-2 pt-10"><label>Hình ảnh (Trang trong)</label></div>

              <div class="col-md-10">

                <input type="file" name="file1" /> 

                <span class="description">Type: .jpg|.gif|.png|.jpeg &nbsp;&nbsp;;&nbsp;&nbsp; Ảnh chuẩn: Width:295px - Height:173px</span>

                <br /><br />

              </div> -->




<!-- 

      

             




            

                <?php if ($_REQUEST['act']=='capnhap3'){?>

                <div class="col-md-2 pt-10"><label>Banner hiện tại</label></div>

                <div class="col-md-10"><img src="<?=_upload_tinnho.$item['photo2']?>"  width="400" alt="NO PHOTO" /><br /><br /></div>

                <?php }?>

                

                <div class="clearfix"></div>

                <div class="col-md-2 pt-10"><label>Banner lớn</label></div>

                <div class="col-md-10">

                  <input type="file" name="file2" /> 

                    <span class="description">Type: .jpg|.gif|.png|.jpeg &nbsp;&nbsp;;&nbsp;&nbsp; Ảnh chuẩn: Width:295px - Height:173px</span>

                    <br /><br />

                </div>

              -->





              

              <ul class="nav nav-tabs">

                <!--   <li class="active"><a href="#home" class="clicktab" data-toggle="tab">THÔNG TIN CÔNG TY</a></li>

                -->





                <!-- <?php

                foreach ($config["lang"] as $key => $value) {

                            # code...

                  $active = '';

                  if ($key == 0) {

                    $active = "active";

                  }



                  echo '<li class="' . $active . '"><a href="#tab' . $value . '" class="clicktab" data-toggle="tab">' . $config["langs"][$value] . '</a></li>';

                }

                ?>

                
 -->


              </ul>

              <!-- Tabs Navigation End -->



              <!-- Tab panes -->

              <div class="tab-content">

                <?php

                foreach ($config["lang"] as $key => $value) {

                        # code...

                  $active = '';

                  $active_block = '';

                  if ($key == 0) {



                    $active = "active";

                    $active_block = "style='display:block;'";

                  }

                  ?> 



                  <div class="tab-pane <?=$active?>" id="tab<?= $value ?>">

                    <div class="col-md-2 pt-10"><label>Tên  <?= $config["langs"][$value]?> </label></div>
                    <div class="col-md-10"><input class="w-full txt-area" name="ten_<?= $value ?>" id="ten_<?= $value ?>" placeholder="Tên " value="<?=$item['ten_'.$value]?>"><br /></div>
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



                    <!-- <div class="col-md-2 pt-10"><label>Link Youtube</label></div>
                    <div class="col-md-10"><input type="text" name="link" id="link" value="<?=$item['link']?>" placeholder="Link youtube" /></div>
                    <div class="clearfix"></div>
                <br> -->


                    <div class="col-md-2 pt-10"><label>h1 <?=$value?></label></div>

                    <div class="col-md-10"><input type="text" class="w-full txt-area" name="h1_<?= $value ?>" id="h1_<?= $value ?>" value="<?=$item['h1_'.$value]?>" placeholder="thẻ h1" /></div>

                    <div class="clearfix"></div>
                <br>

                    <div class="col-md-2 pt-10"><label>h1 <?=$value?></label></div>

                    <div class="col-md-10"><input type="text" class="w-full txt-area" name="h2_<?= $value ?>" id="h2_<?= $value ?>" value="<?=$item['h2_'.$value]?>" placeholder="thẻ h2" /></div>
                    <div class="clearfix"></div>
                <br>
                    <div class="col-md-2 pt-10"><label>h1 <?=$value?></label></div>

                    <div class="col-md-10"><input type="text" class="w-full txt-area" name="h3_<?= $value ?>" id="h3_<?= $value ?>" value="<?=$item['h3_'.$value]?>" placeholder="thẻ h3" /></div>

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







                  </div>





                     <div class="clearfix"></div>
                <br>

                <?php }?>

              </div>               

              <input type="hidden" name="id" id="id" value="<?=@$item['id']?>" />



              <div class="col-md-10 col-md-offset-2">                  

                <button type="button" onclick="javascript:document.frm.submit()" class="btn btn-success"><i class="fa fa-check"></i> Lưu</button>

                <button type="button" onclick="javascript:window.location='index.php?com=about&act=capnhap'" class="btn btn-info"><i class="fa fa-share"></i> Thoát</button>

              </div>



              <div class="clearfix"></div>



            </form>



          </div>

        </div>

          <!-- Inline Form End 

	</div>