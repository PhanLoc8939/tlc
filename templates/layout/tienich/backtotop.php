<style>

	#top{color:#fff;font-weight:500;text-align:center;width:45px;height:45px;position:fixed;bottom:30px;right:15px; z-index:9999; display:none;cursor:pointer;background-color: #0a519f;border-radius:50%;-moz-border-radius:50%;-ms-border-radius:50%;-o-border-radius:50%;-webkit-border-radius:50%;-moz-transition: background-color 0.2s ease-in-out;-ms-transition: background-color 0.2s ease-in-out;-o-transition: background-color 0.2s ease-in-out;-webkit-transition: background-color 0.2s ease-in-out;transition: background-color 0.2s ease-in-out;box-shadow: 0px 0px 3px #333;}

	#top:hover{background-color:#4998ee;color: #fff}
#top span
{
	  width: 100%;
    float: left;
    font-weight: 700;
    margin-top: -16px;
}
</style>

<script type="text/javascript">

	$(document).ready(function() {

		

		$('body').append('<div id="top" title="Back to Top"><i style="font-size:24px" class="fa fa-angle-up"></i><span>TOP</span></div>');

		$(window).scroll(function() {

			if($(window).scrollTop() > 100) {

				$('#top').fadeIn();

			} else {

				$('#top').fadeOut();

			}

	   	});

	   	$('#top').click(function() {

			$('html, body').animate({scrollTop:0},500);

	   	});	   	   	

		

	});

</script>