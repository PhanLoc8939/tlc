<?php if (!defined('_kiemtraweb') || _kiemtraweb != $check_website) daysangtranglogin(); ?>



<script>
	$(document).ready(function(e) {
		$("#id_cat").change(function(e) {
			var id = $(this).val();
			$.ajax({
				url: 'ajax/cat.php',
				type: 'get',
				data: 'id=' + id,
				dataType: 'html',
				success: function(data) {
					$("#cat_div").html(data);
					$("#id_cat1").selectbox();

					$("#id_cat1").change(function(e) {
						var id = $(this).val();
						$.ajax({
							url: 'ajax/cat1.php',
							type: 'get',
							data: 'id=' + id,
							dataType: 'html',
							success: function(data) {
								$("#cat1_div").html(data);
								$("#id_cat2").selectbox();


								$("#id_cat2").change(function(e) {
									var id = $(this).val();
									$.ajax({
										url: 'ajax/cat2.php',
										type: 'get',
										data: 'id=' + id,
										dataType: 'html',
										success: function(data) {
											$("#cat2_div").html(data);
											$("#id_cat3").selectbox();
											$("#id_cat3").change(function(e) {
												var id = $(this).val();
												$.ajax({
													url: 'ajax/cat3.php',
													type: 'get',
													data: 'id=' + id,
													dataType: 'html',
													success: function(data) {
														$("#cat3_div").html(data);
														$("#id_cat4").selectbox();
													}
												});
											});
										}
									});
								});
							}
						});
					});

				}
			});
		});
		$("#id_cat1").change(function(e) {
			var id = $(this).val();
			$.ajax({
				url: 'ajax/cat1.php',
				type: 'get',
				data: 'id=' + id,
				dataType: 'html',
				success: function(data) {
					$("#cat1_div").html(data);
					$("#id_cat2").selectbox();
				}
			});
		});
		$("#id_cat2").change(function(e) {
			var id = $(this).val();
			$.ajax({
				url: 'ajax/cat2.php',
				type: 'get',
				data: 'id=' + id,
				dataType: 'html',
				success: function(data) {
					$("#cat2_div").html(data);
					$("#id_cat3").selectbox();

				}
			});
		});

		$("#id_cat3").change(function(e) {
			var id = $(this).val();
			$.ajax({
				url: 'ajax/cat3.php',
				type: 'get',
				data: 'id=' + id,
				dataType: 'html',
				success: function(data) {
					$("#cat3_div").html(data);
					$("#id_cat4").selectbox();
				}
			});
		});



	});
</script>
<!-- <style type="text/css">
	.custom-file-input {
		/* color: transparent;*/
		padding: 0;
		margin-bottom: 20px;
	}

	.custom-file-input::-webkit-file-upload-button {
		visibility: hidden;
	}

	.custom-file-input::before {
		content: 'Ch???n h??nh ';
		color: black;
		display: inline-block;
		background: -webkit-linear-gradient(top, #f9f9f9, #e3e3e3);
		border: 1px solid #999;
		border-radius: 3px;
		padding: 5px 8px;
		outline: none;
		white-space: nowrap;
		-webkit-user-select: none;
		cursor: pointer;
		text-shadow: 1px 1px #fff;
		font-weight: 700;
		font-size: 8pt;
	}

	.custom-file-input:hover::before {
		border-color: black;
	}

	.custom-file-input:active {
		outline: 0;
	}

	.custom-file-input:active::before {
		background: -webkit-linear-gradient(top, #e3e3e3, #f9f9f9);
	}

	[type="radio"]:checked,
	[type="radio"]:not(:checked) {
		position: absolute;
		left: -9999px;
	}

	[type="radio"]:checked+label,
	[type="radio"]:not(:checked)+label {
		position: relative;
		padding-left: 28px;
		cursor: pointer;
		line-height: 20px;
		display: inline-block;
		color: #666;
	}

	[type="radio"]:checked+label:before,
	[type="radio"]:not(:checked)+label:before {
		content: '';
		position: absolute;
		left: 0;
		top: 0;
		width: 18px;
		height: 18px;
		border: 1px solid #ddd;
		border-radius: 100%;
		background: #fff;
	}

	[type="radio"]:checked+label:after,
	[type="radio"]:not(:checked)+label:after {
		content: '';
		width: 12px;
		height: 12px;
		background: #F87DA9;
		position: absolute;
		top: 3px;
		left: 3px;
		border-radius: 100%;
		-webkit-transition: all 0.2s ease;
		transition: all 0.2s ease;
	}

	[type="radio"]:not(:checked)+label:after {
		opacity: 0;
		-webkit-transform: scale(0);
		transform: scale(0);
	}

	[type="radio"]:checked+label:after {
		opacity: 1;
		-webkit-transform: scale(1);
		transform: scale(1);
	}
</style> -->


<!-- Breadcrumbs Start -->
<h4 class="header-title"><a href="index.php?com=product&act=add_cat">S???n Ph???m</a></h4>
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
				$sql = "select * from table_product_cat where com='cat' order by stt asc,id desc";
				$stmt = mysql_query($sql);
				$str = '
        			<select id="id_cat" name="id_cat" class="w-full txt-area">
        			<option value="0">Ch???n danh m???c c???p 1</option>
        			';
				while ($row = @mysql_fetch_array($stmt)) {
					if ($row["id"] == (int)@$a)
						$selected = 'selected';
					else
						$selected = '';
					$str .= '<option value=' . $row["id"] . ' ' . $selected . '>' . $row["ten_vi"] . '</option>';
				}
				$str .= '</select>';
				return $str;
			}

			function get_main_category1($a, $b)
			{
				$sql = "select * from table_product_cat where com='cat1' and id_cat=$a order by stt asc,id desc";
				$stmt = mysql_query($sql);
				$str = '
        			<select id="id_cat1" name="id_cat1">
        			<option value="0">Ch???n danh m???c c???p 2</option>
        			';
				while ($row = @mysql_fetch_array($stmt)) {
					if ($row["id"] == (int)@$b)
						$selected = "selected";
					else
						$selected = "";
					$str .= '<option value=' . $row["id"] . ' ' . $selected . '>' . $row["ten_vi"] . '</option>';
				}
				$str .= '</select>';
				return $str;
			}
			function get_main_category2($a, $b)
			{
				$sql = "select * from table_product_cat where com='cat2' and id_cat1=$a order by stt asc,id desc";
				$stmt = mysql_query($sql);
				$str = '
        			<select id="id_cat2" name="id_cat2">
        			<option value="0">Ch???n danh m???c c???p 3</option>
        			';
				while ($row = @mysql_fetch_array($stmt)) {
					if ($row["id"] == (int)@$b)
						$selected = "selected";
					else
						$selected = "";
					$str .= '<option value=' . $row["id"] . ' ' . $selected . '>' . $row["ten_vi"] . '</option>';
				}
				$str .= '</select>';
				return $str;
			}
			function get_main_category3($a, $b)
			{
				$sql = "select * from table_product_cat where com='cat3' and id_cat2=$a order by stt asc,id desc";
				$stmt = mysql_query($sql);
				$str = '
        			<select id="id_cat3" name="id_cat3">
        			<option value="0">Ch???n danh m???c c???p 4</option>
        			';
				while ($row = @mysql_fetch_array($stmt)) {
					if ($row["id"] == (int)@$b)
						$selected = "selected";
					else
						$selected = "";
					$str .= '<option value=' . $row["id"] . ' ' . $selected . '>' . $row["ten_vi"] . '</option>';
				}
				$str .= '</select>';
				return $str;
			}
			function get_main_category4($a, $b)
			{
				$sql = "select * from table_product_cat where com='cat4' and id_cat3=$a order by stt asc,id desc";
				$stmt = mysql_query($sql);
				$str = '
        			<select id="id_cat4" name="id_cat4">
        			<option value="0">Ch???n danh m???c c???p 5</option>
        			';
				while ($row = @mysql_fetch_array($stmt)) {
					if ($row["id"] == (int)@$b)
						$selected = "selected";
					else
						$selected = "";
					$str .= '<option value=' . $row["id"] . ' ' . $selected . '>' . $row["ten_vi"] . '</option>';
				}
				$str .= '</select>';
				return $str;
			}



			?>
			<form method="post" name="frm" action="index.php?com=product&act=save<?= $chuoi_noi_curpage ?>" enctype="multipart/form-data" class="basic-form inline-form">

				<?php if ($_REQUEST['act'] == 'edit') { ?>
					<div class="col-md-2"><label>H??nh hi???n t???i</label></div>
					<div class="col-md-10"><img src="<?= _upload_sanpham . $item['photo'] ?>" width="274" alt="NO PHOTO" /><br /><br /></div>
				<?php } ?>

				<div class="clearfix"></div>
				<br>
				<div class="col-md-2"><label>H??nh ???nh </label></div>
				<div class="col-md-10">

					<input type="file" name="file" />
					<span class="description">Type: .jpg|.gif|.png|.jpeg &nbsp;&nbsp;;&nbsp;&nbsp; ???nh chu???n: Width:600px - Height:600px.</span>
					<br /><br />
				</div>
				<div class="clearfix"></div>
				<br />

				<!-- <?php if ($_REQUEST['act'] == 'edit') { ?>
					<div class="col-md-2"><label>H??nh (Trang trong) hi???n t???i</label></div>
					<div class="col-md-10"><img src="<?= _upload_sanpham . $item['photo1'] ?>" width="100%" alt="NO PHOTO" /><br /><br /></div>
				<?php } ?>

				<div class="clearfix"></div>
				<div class="col-md-2"><label>H??nh ???nh (Trang trong)</label></div>
				<div class="col-md-10">

					<input type="file" name="file2" />
					<span class="description">Type: .jpg|.gif|.png|.jpeg &nbsp;&nbsp;;&nbsp;&nbsp; ???nh chu???n: Width:1920px - Height:1080px.</span>
					<br /><br />
				</div>

				<div class="clearfix"></div>
				<br /> -->


				<!-- 			<?php if ($_REQUEST['act'] == 'edit') { ?>

        				<div class="col-md-2"><label>Download hi???n t???i</label></div>

        				<div class="col-md-10"><label><?= $item['icon'] ?></label> <br /><br /></div>

        			<?php } ?>

        			<div class="col-md-2"><label>Download</label></div>

        			<div class="col-md-10">

        				<input type="file" name="file1" /> 

        				<span class="description">Type: .jpg|.gif|.png|.jpeg|.doc|.docx|.pdf.xlsx</span>

        				<br /><br />

        			</div> -->


				<!-- 
        			<div class="col-md-2"><label>M??u s???n ph???m </label></div>
        			<div class="col-md-10"><input type="color" style="    -webkit-appearance: square-button;padding:0;width: 120px;height: 40px;background-color: buttonface;border-width: 1px;border-style: solid;border-color: rgb(169, 169, 169);border-image: initial;" name="mausac" id="mausac" value="<?= $item['mausac'] ?>" placeholder="M??u s???c" />
        			</div>

        			<div class="clearfix"></div> -->
				<div class="col-md-2 pt-10"><label>Danh m???c c???p 1 </label></div>
				<div class="col-md-10"><?= get_main_category($item['id_cat']); ?></div>
				<div class="clearfix"></div>
				<br />
				<!-- <div class="col-md-5" id="cat_div"><?= get_main_category1($item['id_cat'], $item['id_cat1']); ?></div> -->

				<!-- <div class="col-md-2"><label>Danh m???c c???p 3 </label></div>
				<div class="col-md-10" id='cat1_div'>
					<?= get_main_category2(@$item["id_cat1"], $item["id_cat2"]); ?></div>
				<div class="clearfix"></div> -->





				<!-- <div class="col-md-2"></div>
				<div class="col-md-1"><input type="checkbox" name="tinhtrang" class="icheck-blue" <?= (!isset($item['tinhtrang']) || $item['tinhtrang'] == 1) ? 'checked="checked"' : '' ?> /> <span class="hienthi_text">C??n h??ng</span></div>

				<div class="col-md-1"><input type="checkbox" name="hienthi" class="icheck-blue" <?= (!isset($item['hienthi']) || $item['hienthi'] == 1) ? 'checked="checked"' : '' ?> /> <span class="hienthi_text">Hi???n th???</span></div> -->

				<!-- PH???N D?????I L?? D??NH CHO N???I DUNG ??A NG??N NG???-->

				<!-- <ul class="nav nav-tabs">

					<?php
					foreach ($config["lang"] as $key => $value) {

						$active = '';
						if ($key == 0) {
							$active = "active";
						}
						echo '<li class="' . $active . '"><a href="#tab' . $value . '" class="clicktab" data-toggle="tab">' . $config["langs"][$value] . '</a></li>';
					}
					?>

				</ul> -->
				<!-- Tabs Navigation End -->
				<!-- Tab panes -->

				<?php
				foreach ($config["lang"] as $key => $value) {

					$active = '';
					$active_block = '';
					if ($key == 0) {

						$active = "active";
						$active_block = "style='display:block;'";
					}
				?>

					<div class="tab-pane <?= $active ?>" id="tab<?= $value ?>">

						<div class="col-md-2"><label>T??n <?= $config["langs"][$value] ?></label></div>
						<div class="col-md-10"><input type="text" class="w-full txt-area" name="ten_<?= $value ?>" id="ten_<?= $value ?>" value="<?= $item['ten_' . $value] ?>" placeholder="T??n" /></div>
						<div class="clearfix"></div>
						<br />

						<div class="col-md-2"><label>S??? th??? t???</label></div>
						<div class="col-md-10"><input type="text" class="w-full txt-area" name="stt" id="stt" value="<?= isset($item['stt']) ? $item['stt'] : 1 ?>" placeholder="S??? th??? t???" /></div>
						<div class="clearfix"></div>
						<br />

						<div class="col-md-2"></div>
						<div class="col-md-10"><input type="checkbox" name="hienthi" class="icheck-blue" <?= (!isset($item['hienthi']) || $item['hienthi'] == 1) ? 'checked="checked"' : '' ?> /> <span class="hienthi_text">Hi???n th???</span></div>
						<div class="clearfix"></div>
						<br>

						<!-- <div class="col-md-2"><label>Link video</label></div>
							<div class="col-md-10"><input type="text" class="w-full txt-area" name="link" id="link" value="<?= $item['link'] ?>" placeholder="Link video" /></div>
							<div class="clearfix"></div>
							<br /> -->


						<div class="col-md-2"><label>M?? t??? <?= $config["langs"][$value] ?></label></div>
						<div class="col-md-10"><textarea class="w-full txt-area" name="mota_<?= $value ?>" cols="50" rows="6" placeholder="M?? t???"><?= $item['mota_' . $value] ?></textarea></div>
						<div class="clearfix"></div>
						<br />
						<script type="text/javascript">
							var mota_<?= $value ?> = CKEDITOR.replace('mota_<?= $value ?>');
						</script>
						<div class="clearfix"></div>
						<br />

						<div class="col-md-2"><label>N???i dung <?= $config["langs"][$value] ?></label></div>
						<div class="col-md-10"><textarea class="w-full txt-area" name="noidung_<?= $value ?>" cols="50" rows="6" placeholder="N???i dung"><?= $item['noidung_' . $value] ?></textarea></div>
						<script type="text/javascript">
							var noidung_<?= $value ?> = CKEDITOR.replace('noidung_<?= $value ?>');
						</script>
						<div class="clearfix"></div>
						<br />


						<div class="col-md-2"><label>h2 <?= $value ?></label></div>
						<div class="col-md-10"><input type="text" class="w-full txt-area" name="h2_<?= $value ?>" id="h2_<?= $value ?>" value="<?= $item['h2_' . $value] ?>" placeholder="th??? h2" /></div>
						<div class="clearfix"></div>
						<br />
						<div class="col-md-2"><label>h3 <?= $value ?></label></div>
						<div class="col-md-10"><input type="text" class="w-full txt-area" name="h3_<?= $value ?>" id="h3_<?= $value ?>" value="<?= $item['h3_' . $value] ?>" placeholder="th??? h3" /></div>
						<div class="clearfix"></div>
						<br />
						<div class="col-md-2"><label>Title <?= $config["langs"][$value] ?></label></div>
						<div class="col-md-10"><input type="text" class="w-full txt-area" name="title_<?= $value ?>" id="title_<?= $value ?>" value="<?= $item['title_' . $value] ?>" placeholder="Title" /></div>
						<div class="clearfix"></div>
						<br />

						<div class="col-md-2"><label>Keywords <?= $config["langs"][$value] ?></label></div>
						<div class="col-md-10"><textarea class="w-full txt-area" name="keywords_<?= $value ?>" cols="50" rows="6" placeholder="Keywords"><?= $item['keywords_' . $value] ?></textarea></div>
						<div class="clearfix"></div>
						<br />

						<div class="col-md-2"><label>Description <?= $config["langs"][$value] ?></label></div>
						<div class="col-md-10"><textarea class="w-full txt-area" name="description_<?= $value ?>" cols="50" rows="6" placeholder="Description"><?= $item['description_' . $value] ?></textarea></div>
						<div class="clearfix"></div>
						<br />
					</div>


					<div class="clearfix"></div>
				<?php } ?>


				<!--END N???I DUNG ??A NG??N NG??? -->



				<input type="hidden" name="id" id="id" value="<?= @$item['id'] ?>" />

				<div class="col-md-10 col-md-offset-2">
					<button type="button" onclick="javascript:document.frm.submit()" class="btn btn-success"><i class="fa fa-check"></i> L??u</button>
					<button type="button" onclick="javascript:window.location='index.php?com=product&act=man<?= $chuoi_noi_curpage ?>'" class="btn btn-info"><i class="fa fa-share"></i> Tho??t</button>
				</div>

				<div class="clearfix"></div>

			</form>

		</div>
	</div>
	<!-- Inline Form End -->
</div>



<script type="text/javascript">
	$('#ten_vi').keyup(function() {

		var tenkhongdau = $(this).val();





		$.ajax({
			type: "POST",
			url: "ajax/tenkhongdau.php",
			data: {
				'tenkhongdau': tenkhongdau
			},

			success: function(data) {



				$('#tenkhongdau_vi').val(data);

			}
		});


	})


	$('.cat2div').click(function() {




		var listcat1 = '';
		$("input:checkbox[name='mucloc1[]']:checked").each(function() {

			listcat1 = listcat1 + $(this).attr('data-id') + ',';

		});
		var idsp = $('#id').val();

		$.ajax({
			type: "POST",
			url: "ajax/laycat3.php",
			data: {
				'listcat1': listcat1,
				'idsp': idsp
			},

			success: function(data) {



				$('#cat1_div').html(data);

			}
		});
	})
</script>