<!-- <script type="text/javascript" src="media/js/jquery-2.2.1.js"></script> -->
<script src="media/js/jquery-3.5.1.min.js"></script>
<!-- <script src="media/js/jquery-3.2.1.min.js"></script> -->

<script type="text/javascript" src="media/js/bootstrap.min.js"></script>
<script type="text/javascript" src="media/js/jquery-ui.min.js"></script>

<!-- <script src='media/simplyscroll/jquery.simplyscroll.js'></script> -->
<!-- <script src='media/spinner/jquery.spinner.js'></script> -->

<!-- Libraries Stylesheet -->
<link href="media/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
<script src='media/owl/owl.carousel.min.js'></script>
<link href="media/lightbox/css/lightbox.min.css" rel="stylesheet">

<!-- <script src='media/fotorama/fotorama.js'></script>
<script type="text/javascript" src="media/jquery-video-lightning.js"></script> -->
<!-- JavaScript Libraries -->
<!-- <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script> -->


<!-- <script src='media/js/wow.min.js'></script> -->
<!-- 
<script type="text/javascript">
  $(function() {
    $(".video-link").jqueryVideoLightning({
      autoplay: 1,
      backdrop_color: "#ddd",
      backdrop_opacity: 0.6,
      glow: 20,
      glow_color: "#000"
    });
  });
</script> -->

<!-- <script>
  new WOW().init();
</script> -->











<!--Thêm alt cho hình ảnh-->

<script type="text/javascript">
  $('img').each(function(index, element) {

    if (!$(this).attr('alt') || $(this).attr('alt') == '')

    {

      $(this).attr('alt', '<?= $company['ten_vi'] ?>');

    }

  });

  // $('.loading-gif').remove();
</script>

<!--Thêm alt cho hình ảnh-->








<div id="fb-root"></div>
<script>
  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s);
    js.id = id;
    js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.8";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
</script>