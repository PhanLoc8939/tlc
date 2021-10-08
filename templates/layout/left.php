     <div class="module_left">

                <div class="danhmucleft width_100">
                    <div class="title_left width_100">
                        <h3>Danh Mục Sản Phẩm</h3>

                    </div>
                    <div class="noidung_left">
                           <?php if(count($cat_main)>0) {?>
                                    <ul >
                                      <?php foreach ($cat_main as $key => $v) {?>
                                        <li class="<?=($v['id']==$idc)?'active':''?>"><a href="<?=$v['tenkhongdau_vi']?>-<?=$v['id']?>.html"><?=$v['ten_vi']?></a></li>
                                      <?php } ?>
                                    </ul>
                         <?php } ?>
                    </div>
                     <div class="title_left width_100">
                          <h3>Tin Tức</h3>

                      </div>
                      <div class="noidung_left">
                             <?php if(count($tinright)>0) {?>
                                 
                                        <?php foreach ($tinright as $key => $v) {?>
                                           <div class="item_right">
                                             <div class="hinhright">
                                                <a href="<?=$v['tenkhongdau_vi']?>-<?=$v['id']?>.html"><img src="thumb/85x65/1/<?=_upload_tinnho_l.$v['photo']?>" alt=""></a>
                                             </div>
                                             <div class="motaright">
                                                <h3><a class="tintucright" href="<?=$v['tenkhongdau_vi']?>-<?=$v['id']?>.html"><?=$v['ten_vi']?></a></h3>
                                             </div>
                                          </div>
                                        <?php } ?>
                                  
                           <?php } ?>
                      </div>


                </div>
            </div>