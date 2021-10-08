    <?php
    $d->reset();
    $sql = "select * from #_photo where com='slideshow2' and hienthi=1 order by stt asc,id desc";
    $d->query($sql);
    $slide_show2 = $d->result_array();   
    ?>

    <div class="slider-xnk2">
       <div id='coin-slider'>
        <div class="sec-tc" id="slideshow">
            <?php foreach ($slide_show2 as $v) {?>
                <a href="<?=$v['link']?>" target="_blank" title="">
                    <img src="thumb/1366x640/2/<?=_upload_hinhanh_l.$v['photo']?>" data-thumb="<?=_upload_hinhanh_l.$v['photo']?>" alt=""/>
                    <span class="motaslideshow">
                       <h1><?=$v['ten_vi']?></h1>
                       <p class="content-slidershow">
                         <?=$v['mota_vi']?>
                       </p>
                   </span>
               </a>   
           <?php } ?>
       </div>
   </div>
</div>
<script type="text/javascript" src="media/coinslider/coin-slider.min.js"></script>
<link rel="stylesheet" href="media/coinslider/coin-slider-styles.css" type="text/css" />
<script type="text/javascript">
 $(document).ready(function() {
    $('#coin-slider').coinslider({ width: 1366,height:640, navigation: true, delay: 5000 });
    $('#coin-slider').css('background-size', 'cover');
});
</script>


    <div class="slider-xnk1">
        <div id="slider">
            <div class="sec-tc" id="slideshow">
                <div class="box-slide">
                    <div class="slider-wrapper theme-default">
                        <div id="slider-main" class="nivoSlider">   
                            <?php foreach ($slide_show2 as $v) {?>
                                <a href="<?=$v['link']?>" target="_blank" title="">
                                    <img src="thumb/968x457/1/<?=_upload_hinhanh_l.$v['photo']?>" data-thumb="<?=_upload_hinhanh_l.$v['photo']?>" alt=""/>
                                </a>   
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Begin Slider -->
<script type="text/javascript" src="media/nivoslider/jquery.nivo.slider.js"></script>
    <!-- Begin Slider -->
<link rel="stylesheet" href="media/nivoslider/default.css" type="text/css" media="screen" />
<link rel="stylesheet" href="media/nivoslider/nivo-slider.css" type="text/css" media="screen" />
<!-- End Slider -->

    <script type="text/javascript">
        $(document).ready(function(){
            $('#slider-main').nivoSlider({
                effect: 'random',
                slices: 15,
                boxCols: 8,
                boxRows: 4,
                animSpeed: 1000,
                pauseTime: 3500,
                startSlide: 0,
                directionNav: true,
                controlNav: false,
                controlNavThumbs: false,
                pauseOnHover: true,
                manualAdvance: false,
                prevText: 'Prev',
                nextText: 'Next',
                randomStart: false,
                beforeChange: function(){},
                afterChange: function(){},
                slideshowEnd: function(){},
                lastSlide: function(){},
                afterLoad: function(){}
            });
        });
    </script>
    <!-- End Slider -->
