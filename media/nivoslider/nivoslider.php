

<?php
    $d->reset();
    $sql = "select * from #_photo where com='slideshow' order by stt asc,id desc";
    $d->query($sql);
    $slide_show = $d->result_array();   	
?>

<div id="slideshow">

  
    <div class="box-slide">
        <div class="slider-wrapper theme-default">
            				<div id="slider-main" class="nivoSlider">
            				<?php foreach ($slide_show as $v) {?>
                                    <a href="<?=$v['link']?>" target="_blank" title=""><img src="<?php echo _upload_hinhanh_l.$v['photo_'.$lang]; ?>" data-thumb="<?=_upload_hinhanh_l.$v['photo']?>" alt=""/>




                                    </a>
                            
                             <?php } ?>
                             </div>
        </div>
    </div>
</div>



 <!-- Begin Slider -->
    <script type="text/javascript" src="media/nivoslider/jquery.nivo.slider.js"></script>
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