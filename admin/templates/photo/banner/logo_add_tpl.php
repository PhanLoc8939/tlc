<?php if(!defined('_kiemtraweb') || _kiemtraweb!=$check_website) daysangtranglogin(); ?>



<!-- Breadcrumbs Start -->

  <div class="row breadcrumbs">

    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

      <ul class="breadcrumbs">

        <li><a href="index.php"><i class="fa fa-home"></i></a></li>

        <li><a href="index.php?com=photo&act=capnhap_banner">Cập nhập File PDF</a></li>

      </ul>

    </div>

  </div>

  <!-- Breadcrumbs End -->

        

	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

   <!--  	<div class="inner" style="margin-bottom:10px;">

            <div class="message-box info">

              <i class="fa fa-exclamation-circle"></i>

              <p>Lưu ý: Thông thường trên SmartPhone không hỗ trợ FLASH nên cần nhập BANNER Trên SmartPhone là 1 file hình ảnh!</p>

            </div>

        </div>

     -->

    

		<!-- Inline Form Start -->

          <div class="boxed no-padding col-lg-12 col-md-12 col-sm-12 col-xs-12">

            <div class="inner">



              <!-- Title Bar Start -->

              <div class="title-bar">

                <h4> <button type="button" onclick="javascript:document.frm.submit()" class="btn btn-success"><i class="fa fa-check"></i> Lưu</button></h4>

				

              </div>

              <!-- Title Bar End -->

			              

              <form method="post" name="frm" action="index.php?com=photo&act=save_banner" enctype="multipart/form-data" class="basic-form inline-form">                              

                               



                <div class="col-md-12">


                      <div class="col-md-2"><label>Download hiện tại</label></div>

                      <div class="col-md-10"><label><?=$item['photo']?></label> <br /><br /></div>

                

                      <div class="col-md-2"><label>Download</label></div>

                      <div class="col-md-10">

                        <input type="file" name="file" /> 

                          <span class="description">Type: .jpg|.gif|.png|.jpeg|.doc|.docx|.pdf.xlsx</span>

                          <br /><br />

                        </div>
                </div>

                 

                <div class="col-md-10 col-md-offset-2">                  

                  <button type="button" onclick="javascript:document.frm.submit()" class="btn btn-success"><i class="fa fa-check"></i> Lưu</button>

                  <button type="button" onclick="javascript:window.location='index.php?com=photo&act=capnhap_banner'" class="btn btn-info"><i class="fa fa-share"></i> Thoát</button>

                </div>



                <div class="clearfix"></div>



              </form>



            </div>

          </div>

          <!-- Inline Form End -->

	</div>