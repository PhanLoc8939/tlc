<?php if(!defined('_kiemtraweb') || _kiemtraweb!=$check_website) daysangtranglogin(); ?>



<script type="text/javascript">

  tinyMCE.init({

    // General options

    mode : "exact",

        elements : "noidung_vi,noidung_en,noidung_cn,noidung_hq",

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





<?php



  $d->reset();

  $sql="select * from #_tinnho where com=2";

  $d->query($sql);

  $tongtin=$d->result_array();

  $count=count($tongtin);



?>

<!-- Breadcrumbs Start -->

  <div class="row breadcrumbs">

    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

      <ul class="breadcrumbs">

        <li><a href="index.php"><i class="fa fa-home"></i></a></li>

        <li><a href="index.php?com=tinnho&act=man5">Tin t???c xu???t nh???p kh???u</a></li>

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

                    

              <form method="post" name="frm" action="index.php?com=tinnho&act=save5<?=$chuoi_noi_curpage?>" enctype="multipart/form-data" class="basic-form inline-form">              

       



      

    
        

      

              <?php if ($_REQUEST['act']=='edit5'){?>

                <div class="col-md-2"><label>H??nh hi???n t???i</label></div>

                <div class="col-md-10"><img src="<?=_upload_tinnho.$item['photo']?>"  width="295" alt="NO PHOTO" /><br /><br /></div>

                <?php }?>

                <div class="col-md-2"><label>H??nh ???nh</label></div>

                <div class="col-md-10">

                  <input type="file" name="file" /> 

                    <span class="description">Type: .jpg|.gif|.png|.jpeg &nbsp;&nbsp;;&nbsp;&nbsp; ???nh chu???n: Width:295px - Height:173px</span>

                    <br /><br />

                </div>

        
    <div class="col-md-2"><label>S??? th??? t???</label></div>

                <div class="col-md-10"><input type="text" name="stt" id="stt" value="<?=isset($item['stt'])?$item['stt']:1?>" placeholder="S??? th??? t???" /></div>

      

      

        <!-- 

               <?php if ($_REQUEST['act']=='edit3'){?>

                      <div class="col-md-2"><label>Download hi???n t???i</label></div>

                      <div class="col-md-10"><label><?=$item['download']?></label> <br /><br /></div>

                      <?php }?>

                      <div class="col-md-2"><label>Download</label></div>

                      <div class="col-md-10">

                        <input type="file" name="file1" /> 

                          <span class="description">Type: .jpg|.gif|.png|.jpeg|.doc|.docx|.pdf.xlsx</span>

                          <br /><br />

                      </div> -->

                <div class="col-md-2"></div>

                <div class="col-md-10"><input type="checkbox" name="hienthi" class="icheck-blue" <?=(!isset($item['hienthi']) || $item['hienthi']==1)?'checked="checked"':''?> /> <span class="hienthi_text">Hi???n th???</span></div>

                      

                      



           <!-- PH???N D?????I L?? D??NH CHO N???I DUNG ??A NG??N NG???-->

                

                         <ul class="nav nav-tabs">

      





                     <?php

                        foreach ($config["lang"] as $key => $value) {

                            # code...

                            $active = '';

                            if ($key == 0) {

                                $active = "active";

                            }



                            echo '<li class="' . $active . '"><a href="#tab' . $value . '" class="clicktab" data-toggle="tab">' . $config["langs"][$value] . '</a></li>';

                        }

                        ?>

                



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

                      

                       <div class="col-md-2"><label>T??n <?= $config["langs"][$value]?></label></div>

                       <div class="col-md-10"><input type="text" name="ten_<?= $value ?>" id="ten_<?= $value ?>" value="<?=$item['ten_'.$value]?>" placeholder="T??n" /></div>



                       <div class="col-md-2"><label>Ch???c v??? <?= $config["langs"][$value]?></label></div>

                       <div class="col-md-10"><input type="text" name="chucvu_<?= $value ?>" id="chucvu_<?= $value ?>" value="<?=$item['chucvu_'.$value]?>" placeholder="Ch???c v???" /></div>
         

                      <div class="col-md-2"><label>M?? t??? <?= $config["langs"][$value]?> </label></div>

                      <div class="col-md-10"><textarea name="mota_<?=$value?>" cols="50" rows="5" id="mota_<?=$value?>" placeholder="M?? t???"><?=@$item['mota_'.$value]?></textarea><br /></div>

                    

                

                      <div class="col-md-2"><label>N???i dung <?=$config["langs"][$value]?> </label></div>

                      <div class="col-md-10"><textarea name="noidung_<?= $value ?>" id="noidung_<?= $value ?>" placeholder="N???i dung"><?=$item['noidung_'.$value]?></textarea><br /></div>

                



                <div class="col-md-2"><label>h1 <?=$value?></label></div>

                <div class="col-md-10"><input type="text" name="h1_<?= $value ?>" id="h1_<?= $value ?>" value="<?=$item['h1_'.$value]?>" placeholder="th??? h1" /></div>

                

                                <div class="col-md-2"><label>h2 <?=$value?></label></div>

                <div class="col-md-10"><input type="text" name="h2_<?= $value ?>" id="h2_<?= $value ?>" value="<?=$item['h2_'.$value]?>" placeholder="th??? h2" /></div>

                                <div class="col-md-2"><label>h3 <?=$value?></label></div>

                <div class="col-md-10"><input type="text" name="h3_<?= $value ?>" id="h3_<?= $value ?>" value="<?=$item['h3_'.$value]?>" placeholder="th??? h3" /></div>

                 <div class="col-md-2"><label>Title <?=$config["langs"][$value]?></label></div>

                <div class="col-md-10"><input type="text" name="title_<?= $value ?>" id="title_<?= $value ?>" value="<?=$item['title_'.$value]?>" placeholder="Title" /></div>

      

                <div class="col-md-2"><label>Keywords <?=$config["langs"][$value]?></label></div>

                <div class="col-md-10"><textarea name="keywords_<?= $value ?>" cols="50" rows="6" placeholder="Keywords"><?=$item['keywords_'.$value]?></textarea></div>

                <div class="col-md-2"><label>Description <?=$config["langs"][$value]?></label></div>

                <div class="col-md-10"><textarea name="description_<?= $value ?>" cols="50" rows="6" placeholder="Description"><?=$item['description_'.$value]?></textarea></div>   

                  





                  </div>

                  



                    <div class="clearfix"></div>

                  <?php }?>

                </div> 



    <!--END N???I DUNG ??A NG??N NG??? -->



                

        <input type="hidden" name="id" id="id" value="<?=@$item['id']?>" />

                

                <div class="col-md-10 col-md-offset-2">                  

                  <button type="button" onclick="javascript:document.frm.submit()" class="btn btn-success"><i class="fa fa-check"></i> L??u</button>

                  <button type="button" onclick="javascript:window.location='index.php?com=tinnho&act=man5<?=$chuoi_noi_curpage?>'" class="btn btn-info"><i class="fa fa-share"></i> Tho??t</button>

                </div>

                               

                <div class="clearfix"></div>



              </form>



            </div>

          </div>

          <!-- Inline Form End -->

  </div>