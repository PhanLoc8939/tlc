<script type="text/javascript">
  $(document).ready(function() {

    $('.chonngonngu li a').click(function(event) {

      var lang = $(this).attr('href');

      $('.chonngonngu li a').removeClass('active');

      $(this).addClass('active');

      $('.lang_hidden').removeClass('active');

      $('.lang_' + lang).addClass('active');

      return false;

    });

  });
</script>





<div class="w-full">

  <!-- Inline Form Start -->

  <div class="boxed no-padding w-full">





    <!-- Title Bar Start -->

    <div class="title-bar">

      <h4 class="header-title pt-20">THÔNG TIN CÔNG TY</h4>

    </div>

    <!-- Title Bar End -->



    <form method="post" name="frm" action="index.php?com=company&act=save_capnhap" enctype="multipart/form-data" class="basic-form inline-form" style="padding:10px;">

      <!-- Tabs Navigation Start -->

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



          <div class="tab-pane <?= $active ?>" id="tab<?= $value ?>">


            <div class="clearfix"></div>
            <br>


            <div class="col-md-2  pt-10"><label>Tên công ty <?= $config["langs"][$value] ?> </label></div>

            <div class="col-md-10"><textarea class="w-full txt-area" name="ten_<?= $value ?>" cols="50" rows="3" id="ten_<?= $value ?>" placeholder="Tên công ty"><?= @$item['ten_' . $value] ?></textarea><br /></div>

            <div class="clearfix"></div>
            <br>

            <div class="col-md-2 pt-10"><label>Tiêu đề Footer <?= $config["langs"][$value] ?> </label></div>

            <div class="col-md-10"><textarea class="w-full txt-area" name="tieude_<?= $value ?>" cols="50" rows="3" id="tieude_<?= $value ?>" placeholder="Tên công ty"><?= @$item['tieude_' . $value] ?></textarea><br /></div>

            <div class="clearfix"></div>
            <br>


            <div class="col-md-2 pt-10"><label>Thông tin footer <?= $config["langs"][$value] ?> </label></div>

            <div class="col-md-10"><textarea class="w-full txt-area" name="mota_<?= $value ?>" cols="50" rows="5" id="mota_<?= $value ?>" placeholder="Thông tin footer"><?= @$item['mota_' . $value] ?></textarea><br /></div>

            <div class="clearfix"></div>
            <br>



            <div class="col-md-2 pt-10"><label>Thông tin liên hệ <?= $config["langs"][$value] ?> </label></div>

            <div class="col-md-10"><textarea class="w-full txt-area" name="noidung_<?= $value ?>" id="noidung_<?= $value ?>" placeholder="Thông tin footer"><?= $item['noidung_' . $value] ?></textarea><br />
            </div>

            <div class="clearfix"></div>
            <br>







            <!-- 
                <div class="col-md-2"><label>Thông tin liên hệ</label></div>

                <div class="col-md-10"><textarea name="h1_vi" id="h1_vi" placeholder="Địa chỉ"><?= $item['h1_vi'] ?></textarea><br /></div>
              -->


            <!-- 

             

                                <div class="col-md-2"><label>h2 <?= $value ?></label></div>

                <div class="col-md-10"><input type="text" name="h2_<?= $value ?>" id="h2_<?= $value ?>" value="<?= $item['h2_' . $value] ?>" placeholder="thẻ h2" /></div>

                                <div class="col-md-2"><label>h3 <?= $value ?></label></div>

                <div class="col-md-10"><input type="text" name="h3_<?= $value ?>" id="h3_<?= $value ?>" value="<?= $item['h3_' . $value] ?>" placeholder="thẻ h3" /></div>

              



              -->

            <div class="col-md-2 pt-10"><label>Title <?= $config["langs"][$value] ?></label></div>

            <div class="col-md-10"><input class="w-full txt-area" type="text" name="title_<?= $value ?>" id="title_<?= $value ?>" value="<?= $item['title_' . $value] ?>" placeholder="Title" /></div>
            <div class="clearfix"></div>
            <br>


            <div class="col-md-2 pt-10"><label>Keywords <?= $config["langs"][$value] ?></label></div>

            <div class="col-md-10"><textarea class="w-full txt-area" name="keywords_<?= $value ?>" cols="50" rows="6" placeholder="Keywords"><?= $item['keywords_' . $value] ?></textarea></div>
            <div class="clearfix"></div>
            <br>
            <div class="col-md-2 pt-10 "><label>Description <?= $config["langs"][$value] ?></label></div>

            <div class="col-md-10"><textarea class="w-full txt-area" name="description_<?= $value ?>" cols="50" rows="6" placeholder="Description"><?= $item['description_' . $value] ?></textarea></div>
            <div class="clearfix"></div>
            <br>






          </div>





          <div class="clearfix"></div>

        <?php } ?>

      </div>


      <!-- 
        <div class="col-md-2 pt-10"><label>Website</label></div>

        <div class="col-md-10 "><input class="w-full txt-area" type="text" name="website" id="website"
            value="<?= $item['website'] ?>" placeholder="website " /></div>
        <div class="clearfix"></div>
        <br> -->
      <div class="col-md-2 pt-10"><label>Copyright</label></div>

      <div class="col-md-10 "><input class="w-full txt-area" type="text" name="copyright" id="copyright" value="<?= $item['copyright'] ?>" placeholder="copyright " /></div>

      <div class="clearfix"></div>
      <br>

      <!--         <div class="col-md-2"><label>Số điện thoại footer</label></div>

        <div class="col-md-10 "><input type="text" name="coppyright" id="copyright" value="<?= $item['copyright'] ?>" placeholder="" /></div> 
 -->
      <!--                 <div class="col-md-2"><label>MST</label></div>

        <div class="col-md-10 "><input type="text" name="mst" id="copyright" value="<?= $item['mst'] ?>" placeholder="" /></div>  -->

      <!--  <div class="col-md-2"><label>Địa chỉ</label></div>

        <div class="col-md-10 "><input type="text" name="h1_vi" id="copyright" value="<?= $item['h1_vi'] ?>" placeholder="" /></div> 
 -->
      <!--                   <div class="col-md-2"><label>VPGD</label></div>

                        <div class="col-md-10 "><input type="text" name="h2_vi" id="copyright" value="<?= $item['h2_vi'] ?>" placeholder="" /></div> 
                      -->

      <div class="col-md-2 pt-10"><label>Điện thoại</label></div>

      <div class="col-md-10 "><input class="w-full txt-area" type="text" name="dienthoai" id="dienthoai" value="<?= $item['dienthoai'] ?>" placeholder="Hotline 1" /></div>
      <div class="clearfix"></div>
      <br>
      <div class="col-md-2 pt-10"><label>Địa chỉ<?= $config["langs"][$value] ?> </label></div>

      <div class="col-md-10"><input class="w-full txt-area" name="diachi_<?= $value ?>" id="diachi_<?= $value ?>" placeholder="Địa chỉ" value="<?= $item['diachi_' . $value] ?>"><br /></div>
      <div class="clearfix"></div>
      <br>
      <!-- <div class="col-md-2 pt-10"><label>Số Zalo</label></div>

        <div class="col-md-10 ">
          <input class="w-full txt-area" type="text" name="hotline" id="hotline" value="<?= $item['hotline'] ?>"
            placeholder="Hotline 1" />
        </div>

        <div class="clearfix"></div>
        <br> -->

      <div class="col-md-2 pt-10"><label>Email</label></div>

      <div class="col-md-10 "><input class="w-full txt-area" type="text" name="email" id="email" value="<?= $item['email'] ?>" placeholder="Email" /></div>
      <div class="clearfix"></div>
      <br>
      <!-- <div class="col-md-2 pt-10"><label>Link fanpage</label></div>

        <div class="col-md-10 "><input class="w-full txt-area" type="text" name="fanface" id="fanpage"
            value="<?= $item['fanface'] ?>" placeholder="Ví dụ: zing.vn" /></div>
        <div class="clearfix"></div>
        <br>
        <div class="col-md-2 pt-10"><label>Link Chatface</label></div>

        <div class="col-md-10 "><input class="w-full txt-area" type="text" name="chatface" id="chatface"
            value="<?= $item['chatface'] ?>" placeholder="Ví dụ: zing.vn" /></div>
        <div class="clearfix"></div>
        <br> -->


      <!-- <div class="col-md-2 pt-10"><label>Map Liên hệ</label></div>

        <div class="col-md-10 "><textarea class="w-full txt-area" cols="50" rows="5" name="diachi"
            id="fanpage"><?= $item['diachi'] ?></textarea> </div>
        <div class="clearfix"></div>
        <br> -->


      <div class="col-md-2"><label>Favioon hiện tại</label></div>

      <div class="col-md-10"><img src="<?= _upload_company . $item['favicon'] ?>" style="max-width:100%" alt="NO PHOTO" /><br /><br /></div>

      <div class="clearfix"></div>
      <br>


      <div class="col-md-2"><label>Favicon</label></div>

      <div class="col-md-10">

        <input type="file" name="file1" />

        <span class="description">Type: .jpg|.gif|.png|.jpeg &nbsp;&nbsp;;&nbsp;&nbsp; Ảnh chuẩn: Width:200px -
          Height:200px </span>

        <br /><br />

      </div>

      <div class="cachfavicon"></div>



      <div class="clearfix"></div>

      <div class="col-md-2"><label>Logo hiện tại</label></div>

      <div class="col-md-10"><img src="<?= _upload_company . $item['logore'] ?>" style="max-width:100%" alt="NO PHOTO" /><br /><br /></div>



      <div class="clearfix"></div>

      <div class="col-md-2"><label>Logo</label></div>

      <div class="col-md-10">

        <input type="file" name="file2" />

        <span class="description">Type: .jpg|.gif|.png|.jpeg &nbsp;&nbsp;;&nbsp;&nbsp; Ảnh chuẩn: Width:325px -
          Height:auto </span>

        <br /><br />

      </div>





      <div class="clearfix"></div>

      <div class="col-md-2"><label>Logo footer hiện tại</label></div>

      <div class="col-md-10"><img src="<?= _upload_company . $item['logofooter'] ?>" style="max-width:100%" alt="NO PHOTO" /><br /><br /></div>





      <div class="clearfix"></div>

      <div class="col-md-2"><label>Logo footer</label></div>

      <div class="col-md-10">

        <input type="file" name="file3" />

        <span class="description">Type: .jpg|.gif|.png|.jpeg &nbsp;&nbsp;;&nbsp;&nbsp; Ảnh chuẩn: Width:325px -
          Height:auto </span>

        <br /><br />

      </div>

      <div class="clearfix"></div>
      <br>

      <!-- <div class="col-md-2"><label>Nền intro hiện tại</label></div>
        <div class="col-md-10"><img src="<?= _upload_company . $item['bgfooter'] ?>" style="max-width:100%"
            alt="NO PHOTO" /><br /><br /></div>
        <div class="clearfix"></div>
        <div class="col-md-2"><label>Nền intro</label></div>
        <div class="col-md-10">
          <input type="file" name="file4" />
          <span class="description">Type: .jpg|.gif|.png|.jpeg &nbsp;&nbsp;;&nbsp;&nbsp; Ảnh chuẩn: Width:1366px -
            Height:1280px </span>
          <br /><br />
        </div> -->



      <!-- <div class="col-md-2 pt-10"><label>Analytics và Google Webmaster</label></div>

      <div class="col-md-10 paging_0px"><textarea class="w-full txt-area" name="script" cols="50" rows="15" placeholder="Dán code Google Analytics và Google Webmaster vào đây ... "><?= $item['script'] ?></textarea>
      </div>
      <div class="clearfix"></div>
      <br>


      <div class="col-md-2 pt-10"><label>Code Vchat</label></div>

      <div class="col-md-10 paging_0px"><textarea class="w-full txt-area" name="vchat" cols="50" rows="15" placeholder="Dán code vchat vào đây ... "><?= $item['vchat'] ?></textarea></div>
      <div class="clearfix"></div>
      <br> -->




      <!--                 <div class="col-md-2"><label>Geo meta</label></div>

                <div class="col-md-10 paging_0px"><textarea name="geo_meta" cols="50" rows="15" placeholder="Dán code geo meta vào đây ... "><?= $item['geo_meta'] ?></textarea></div>                        

                                      
              -->



      <div class="col-md-10 col-md-offset-2 paging_0px">

        <button type="button" onclick="javascript:document.frm.submit()" class="btn btn-success"><i class="fa fa-check"></i> Lưu thông tin</button>

        <button type="button" onclick="javascript:window.location='index.php'" class="btn btn-info"><i class="fa fa-share"></i> Thoát</button>

      </div>






      <input type="hidden" name="id" id="id" value="<?= @$item['id'] ?>" />







      <div class="clearfix"></div>



    </form>



  </div>

</div>

<!-- Inline Form End -->

</div>