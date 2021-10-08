<?php

session_start();

date_default_timezone_set('Asia/Ho_Chi_Minh');

error_reporting(E_ALL & ~E_NOTICE & ~8192);

@define ( '_template' , './templates/');

@define ( '_source' , './sources/');

@define ( '_lib' , './lib/'); 

include_once _lib."config.php";

    @define ( '_kiemtraweb' , $check_website);  //Một đoạn mã dành riêng cho 1 website.

    include_once _lib."constant.php";

    include_once _lib."functions.php";

    include_once _lib."q_functions.php";

    include_once _lib."library.php";

    include_once _lib."class.database.php";

    $com = (isset($_REQUEST['com'])) ? addslashes($_REQUEST['com']) : "";

    $act = (isset($_REQUEST['act'])) ? addslashes($_REQUEST['act']) : "";	

    $d = new database($config['database']);

    include_once _lib."new.php";

	//Kiểm tra tính hợp lệ

    if((!isset($_SESSION[$login_name]) || $_SESSION[$login_name]==false) && $act!="login"){

    	$_SESSION[$login_name] = false;

    	unset($_SESSION['login']);

    	redirect("index.php?com=user&act=login");		

    }

    if(isset($_SESSION['login'])){

    	$username = htmlspecialchars(strip_tags(addslashes(trim($_SESSION['login']['username']))));

    	$username = magic_quote($username);

    	$password = taomatkhau($_SESSION['login']['password']);

    	$sql = "select ten from #_user where username='$username' and password='$password' ";

    	$d->query($sql);

    	if($d->num_rows() == 0){

    		$_SESSION[$login_name] = false;

    		unset($_SESSION['login']);

    		redirect("index.php?com=user&act=login");

    	}

    }

    if($_SESSION['login']['role']==1 && $_GET['com']!='' && $_GET['act']!='logout' && $_GET['act']!='login'){

    	if(phanquyen_tv($_GET['com'],$_SESSION['login']['quyen'],$_GET['act'])==0){

    		$_SESSION['edit']['quyen'] = 'false';

    		transfer("Bạn Không có quyền vào đây !","index.php");

    	} else {

    		$_SESSION['edit']['quyen'] = 'true';

    	}

    }

    $active_menu = '';

    switch($com){

		//Quản lý thành viên

    	case 'user':

    	$source = "user";

    	break;	

    	case 'member':
    	$source = "member";
    	break;	

    	case 'quanlytin':
    	$source = "quanlytin";
    	break;		

    	case 'newsletter':
    	$source = "newsletter";
    	break;	

    	case 'thongbaocohang':
    	$source = "thongbaocohang";
    	break;	

    	case 'ykien':
    	$source = "ykien";
    	break;	

    	case 'newsletter_mailthanhvien':
    	$source = "newsletter_mailthanhvien";
    	break;

		//TIN 1 NỘI DUNG

    	case 'mucmedia':
    	$source = "mucmedia";

    	case 'trangtinh':
    	$source = "trangtinh";
    	break;

    	case 'media':
    	$source = "media";
    	break;

    	case 'about':
    	$active_menu = 'about';
    	$source = "about";
    	break;

    	case 'phanquyen':
    	$source = "phanquyen";
    	break;	

    	case 'com1':
    	$source = "com";
    	break;	



		//Dạng tin tức		

    	case 'tinnho':
    	$source = "tintuc/tinnho";
    	break;

    	case 'tracking':
    	$source = "tintuc/tracking";
    	break;				

		//TIN 3 CẤP

    	case 'tin3cap':
    	$source = "tintuc/tin3cap";
    	break;

    	case 'congtrinh':
    	$source = "tintuc/congtrinh";
    	break;

    	case 'hethong':
    	$source = "hethong/hethong";
    	break;

    	case 'binhluan':
    	$source = "binhluan";
    	break;

    	case 'danhgia':
    	$source = "danhgia";
    	break;

    	case 'cauhoi':
    	$source = "cauhoi";
    	break;

    	case 'magiamgia':
    	$source = "magiamgia";
    	break;

    	case 'khuyenmai':
    	$source = "khuyenmai";
    	break;

    	case 'traloi':
    	$source = "traloi";
    	break;

		//THông tin công ty		

    	case 'company':
    	$active_menu = 'company';
    	$source = "company";
    	break;					

		//LIÊN QUAN ĐẾN ẢNH	

    	case 'photo':
    	$active_menu = 'photo';
    	$source = "photo";
    	break;			

    	case 'images':
    	$source = "hinhanh/images";
    	break;	

		//DOWNLOAD

    	case 'download':
    	$source = "download";
    	break;			

		//LIÊN QUAN ĐẾN SẢN PHẨM

    	case 'product':
    	$source = "sanpham/product";
    	break;		

    	case 'product1':
    	$source = "sanpham/product1";
    	break;		

    	case 'donhang':
    	$source = "sanpham/donhang";
    	break;

    	default: 
    	$source = "index";
    	$template = "index";
    	break;
    }

    if($source!="") include _source.$source.".php";
    ?>

<!doctype html>

<html>

<head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="author" content="" />

    <meta name="copyright" content="" />

    <title>Administrator</title>

    <link href="" rel="shortcut icon" type="image/x-icon" />



    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="./assets/css/themify-icons.css">
    <link rel="stylesheet" href="./assets/css/metisMenu.css">
    <link rel="stylesheet" href="./assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="./assets/css/slicknav.min.css">
    <!-- amcharts css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css"
        media="all" />
    <!-- Start datatable css -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.jqueryui.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="./assets/css/typography.css">
    <link rel="stylesheet" href="./assets/css/default-css.css">
    <link rel="stylesheet" href="./assets/css/styles.css">
    <link rel="stylesheet" href="./assets/css/responsive.css">
    <!-- modernizr css -->
    <script src="./assets/js/vendor/modernizr-2.8.3.min.js"></script>






    <?php if($act!="login"){	//Nếu không ở trong trang đăng nhập ?>

    <link rel='stylesheet' type='text/css' href='media/assets/jquery-ui/ui-lightness/jquery-ui-1.10.3.custom.css' />

    <link rel='stylesheet' type='text/css' href='media/assets/icheck/flat/_all.css' />
    <!--nút check-->

    <?php if($template=="index"){ ?>


    <?php } ?>


    <?php }else{ //Nếu là trang đăng nhập ?>

    <style>
        html {
            overflow: hidden !important;
        }
    </style>

    <?php } ?>

    <?php if($act!="login"){	//Nếu không ở trong trang đăng nhập ?>

    <link rel="stylesheet" type="text/css" href="media/assets/bootstrap/css/bootstrap.css">

    <link rel="stylesheet" type="text/css" href="media/assets/font-awesome/css/font-awesome.min.css">

    <!-- 
        <link href="media/js/selectbox/css/jquery.selectbox.css" type="text/css" rel="stylesheet" />

        <script type="text/javascript" src="media/js/selectbox/js/jquery.selectbox-0.2.min.js"></script>  
 -->
    <!-- <link href="media/css/style.css" rel="stylesheet"> -->

    <!-- <script src="media/assets/icheck/icheck.js"></script>

<script src="media/_demo/icheck/icheck.js"></script> -->

    <!-- <script src="media/_demo/all-pages.js"></script>
 -->
    <!-- Ckfinder -->
    <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
    <script type="text/javascript">
        CKEDITOR.editorConfig = function (config) {
            /* Config General */
            config.language = 'vi';
            config.skin = 'moono-lisa';
            config.width = 'auto';
            config.height = 500;

            /* Config CSS */
            config.contentsCss = [
                '<?=$config_url_http?>admin/ckeditor/plugins/fontawesome/font-awesome/css/font-awesome.min.css',
                '<?=$config_url_http?>admin/ckeditor/contents.css'
            ];

            /* All Plugins */
            config.extraPlugins =
                'yaqr,texttransform,eqneditor,copyformatting,html5video,html5audio,flash,youtube,wordcount,tableresize,image2,widget,lineutils,fontawesome,clipboard,dialog,dialogui,widgetselection,lineheight,video,videodetector';

            /* Config Lineheight */
            config.line_height = '1;1.1;1.2;1.3;1.4;1.5;2;2.5;3;3.5;4;4.5;5';

            /* Config FontAwesome */
            config.allowedContent = true;
            config.fontAwesome_version = '4.6';
            config.fontAwesome_html_tag = 'i';
            config.fontAwesome_size = 'class';
            CKEDITOR.dtd.$removeEmpty['span'] = false;
            CKEDITOR.dtd.$removeEmpty['i'] = false;
            config.fontAwesome_unicode = false;

            config.pasteFromWordRemoveFontStyles = false;
            config.pasteFromWordRemoveStyles = false;

            /* Config CKFinder */
            config.filebrowserBrowseUrl = 'ckfinder/ckfinder.html';
            config.filebrowserImageBrowseUrl = 'ckfinder/ckfinder.html?type=Images';
            config.filebrowserFlashBrowseUrl = 'ckfinder/ckfinder.html?type=Flash';
            config.filebrowserUploadUrl =
            'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files';
            config.filebrowserImageUploadUrl =
                'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images';
            config.filebrowserFlashUploadUrl =
                'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash';

            /* Config ToolBar */
            config.toolbar = [{
                    name: 'document',
                    items: ['Source', '-', 'Save', 'NewPage', 'Preview', 'Print', '-', 'Templates']
                },
                {
                    name: 'clipboard',
                    items: ['Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', 'PasteFromExcel', '-', 'Undo',
                        'Redo'
                    ]
                },
                {
                    name: 'editing',
                    items: ['Find', 'Replace', '-', 'SelectAll', '-', 'Scayt']
                },
                {
                    name: 'forms',
                    items: ['Form', 'Checkbox', 'Radio', 'TextField', 'Textarea', 'Select', 'Button',
                        'ImageButton', 'HiddenField'
                    ]
                },
                '/',
                {
                    name: 'basicstyles',
                    items: ['Bold', 'Italic', 'Underline', 'Strike', 'Subscript', 'Superscript', '-',
                        'CopyFormatting', 'RemoveFormat'
                    ]
                },
                {
                    name: 'texttransform',
                    items: ['TransformTextToUppercase', 'TransformTextToLowercase', 'TransformTextCapitalize',
                        'TransformTextSwitcher'
                    ]
                },
                {
                    name: 'paragraph',
                    items: ['NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote',
                        'CreateDiv', '-', 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock',
                        '-', 'BidiLtr', 'BidiRtl', 'Language'
                    ]
                },
                {
                    name: 'links',
                    items: ['Link', 'Unlink', 'Anchor']
                },
                {
                    name: 'insert',
                    items: ['FontAwesome', 'Image', 'Flash', 'Yaqr', 'Youtube', 'VideoDetector', 'Html5video',
                        'Video', 'Html5audio', 'Iframe', 'Table', 'HorizontalRule', 'Smiley', 'SpecialChar',
                        'EqnEditor', 'PageBreak'
                    ]
                },
                '/',
                {
                    name: 'styles',
                    items: ['Styles', 'Format', 'Font', 'FontSize', 'lineheight']
                },
                {
                    name: 'colors',
                    items: ['TextColor', 'BGColor']
                },
                {
                    name: 'tools',
                    items: ['Maximize', 'ShowBlocks']
                },
                {
                    name: 'about',
                    items: ['About']
                }
            ];

            /* Config StylesSet */
            config.stylesSet = [{
                    name: 'Font Seguoe Regular',
                    element: 'span',
                    attributes: {
                        'class': 'segui'
                    }
                },
                {
                    name: 'Font Seguoe Semibold',
                    element: 'span',
                    attributes: {
                        'class': 'seguisb'
                    }
                },
                {
                    name: 'Italic title',
                    element: 'span',
                    styles: {
                        'font-style': 'italic'
                    }
                },
                {
                    name: 'Special Container',
                    element: 'div',
                    styles: {
                        'background': '#eee',
                        'border': '1px solid #ccc',
                        'padding': '5px 10px'
                    }
                },
                {
                    name: 'Big',
                    element: 'big'
                },
                {
                    name: 'Small',
                    element: 'small'
                },
                {
                    name: 'Inline ',
                    element: 'q'
                },
                {
                    name: 'marker',
                    element: 'span',
                    attributes: {
                        'class': 'marker'
                    }
                }
            ];

            /* Config Wordcount */
            config.wordcount = {
                // Whether or not you want to show the Paragraphs Count
                showParagraphs: true,
                // Whether or not you want to show the Word Count
                showWordCount: true,
                // Whether or not you want to show the Char Count
                showCharCount: true,
                // Whether or not you want to count Spaces as Chars
                countSpacesAsChars: false,
                // Whether or not to include Html chars in the Char Count
                countHTML: false,
                // Maximum allowed Word Count, -1 is default for unlimited
                // maxWordCount: 2000000000,
                // Maximum allowed Char Count, -1 is default for unlimited
                // maxCharCount: 2000000000,
                // Add filter to add or remove element before counting (see CKEDITOR.htmlParser.filter), Default value : null (no filter)
                filter: new CKEDITOR.htmlParser.filter({
                    elements: {
                        div: function (element) {
                            if (element.attributes.class == 'mediaembed') {
                                return false;
                            }
                        }
                    }
                })
            };
        };
    </script>
    <script type="text/javascript" src="ckfinder/ckfinder.js"></script>

    <!--END JQUERY THÊM VÀO 1-->
    <!--  <script type="text/javascript">

      $(document).ready(function(e) {    

         $('#colorpickerField1').ColorPicker({

            onSubmit: function(hsb, hex, rgb, el) {

               $(el).val(hex);

               $(el).ColorPickerHide();

           },

           onBeforeShow: function () {

               $(this).ColorPickerSetColor(this.value);

           }

       }).bind('keyup', function(){

        $(this).ColorPickerSetColor(this.value);

    });

   });
</script> -->
    <!--END JQUERY THÊM VÀO 1-->
    <?php } ?>
</head>



<body <?=($act=="login" && $com=='user')?' class="login-page"':''?>>

    <?php if(($act=="login" && $com=='user') || !isset($_SESSION['login']) || $_SESSION[$login_name]==false){
		include _template.$template."_tpl.php";
	}else{

       ?>
    <div class="page-container">

        <!-- preloader area start -->
        <div id="preloader">
            <div class="loader"></div>
        </div>
        <!-- preloader area end -->
        <div class="sidebar-menu">
            <!-- Sidebar Start -->

            <?php include _template."menu_tpl.php";?>

        </div>
        <div class="main-content">

            <!-- Header Bar Start -->
            <div class="header-area">
                <?php include _template."header_tpl.php"?>
            </div>
            <!-- Header Bar End -->
            <!-- Row Start -->
            
                      <?php include _template.$template."_tpl.php";?>
                  
            <!-- Row End -->
        </div>


    </div>


    <!-- Footer Line Start -->
    <div class="footer-line">
        <?php include _template."footer_tpl.php";?>
    </div>
    <?php }?>

    <div class="clearfix"></div>



    <?php if($act!="login"){	//Nếu không ở trong trang đăng nhập ?>



    <?php if($template=="index"){ ?>


    <!-- CountTo -->
    <?php } ?>

    <!--JQUERY THÊM VÀO 2-->

    <!--PHẦN CODE SELECT BOX-->

    <script type="text/javascript">
        $(document).ready(function (e) {

            //Mặc định SELECTBOX

            $("select").selectbox();

        });
    </script>

    <!--END JQUERY THÊM VÀO 2-->

    <?php }else{ //Nếu là trang đăng nhập ?>

    <script type="text/javascript">
        $(document).ready(function (e) {

            function canhgiua() {

                var min_height = $(window).height();

                $('div.login-page-container').css('height', min_height);

                if (min_height > 280)

                    $(".boxed").css('margin-top', '-140px');

            }

            canhgiua();



            //Load khi	   

            window.onload = canhgiua();

            window.onresize = canhgiua();



            $("#login").submit(function (e) {

                if ($("#username").val() == '') {

                    alert("Quý khách vui lòng nhập Username!");

                    $("#username").focus();

                    return false;

                }

                if ($("#password").val() == '') {

                    alert("Quý khách vui lòng nhập Password!");

                    $("#password").focus();

                    return false;

                }

                $(this).submit();

            });
        });
    </script>

    <?php } ?>
    <!-- offset area end -->
    <!-- jquery latest version -->
    <script src="./assets/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <script src="./assets/js/owl.carousel.min.js"></script>
    <script src="./assets/js/metisMenu.min.js"></script>
    <script src="./assets/js/jquery.slimscroll.min.js"></script>
    <script src="./assets/js/jquery.slicknav.min.js"></script>

    <!-- Start datatable js -->
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>
    <!-- others plugins -->
    <script src="./assets/js/plugins.js"></script>
    <script src="./assets/js/scripts.js"></script>

    <!--  <link href="media/js/selectbox/css/jquery.selectbox.css" type="text/css" rel="stylesheet" />

  <script type="text/javascript" src="media/js/selectbox/js/jquery.selectbox-0.2.min.js"></script>  


 -->
    <!-- <script type="text/javascript">

  $(document).ready(function(e) {

    //Mặc định SELECTBOX

    $("select").selectbox();                                    

});

</script>
 -->
    <script>
        $(document).ready(function (e) {



            $(".clickhienthi").click(function (e) {

                var thaydoiloai = $(this).attr('thaydoiloai');

                var thaydoitable = $(this).attr('thaydoitable');



                var thaydoiid = $(this).attr('thaydoiid');

                var idcss = $(this).attr('id');;







                $.ajax({

                    url: 'ajax/thaydoi.php',

                    type: 'POST',

                    dataType: "html",

                    data: {
                        thaydoiloai: thaydoiloai,
                        thaydoitable: thaydoitable,
                        thaydoiid: thaydoiid
                    },

                    success: function (data) {

                        $("#" + idcss).html(data);

                    }

                });





            });







            $(".clickchange").click(function (e) {

                var thaydoiloai = $(this).attr('thaydoiloai');

                var thaydoitable = $(this).attr('thaydoitable');



                var thaydoiid = $(this).attr('thaydoiid');

                var idcss = $(this).attr('id');;







                $.ajax({

                    url: 'ajax/change.php',

                    type: 'POST',

                    dataType: "html",

                    data: {
                        thaydoiloai: thaydoiloai,
                        thaydoitable: thaydoitable,
                        thaydoiid: thaydoiid
                    },

                    success: function (data) {

                        $("#" + idcss).html(data);

                    }

                });





            });



            // $("input[name='tinhtrang']").on("change",function(){

            //    if($(this).is(":checked"))

            //       $(this).val("1");

            //     else

            //       $(this).val("0");

            // });



        });
    </script>





</body>

</html>