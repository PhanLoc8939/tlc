
<!-- <section class="content login-page">

  <div class="login-page-container">

    <div class="boxed animated flipInY">
      <div class="inner1" style="background-image: url('media/images/backgroundduoi.png');background-color:none">
        <form action="index.php?com=user&act=login" method="post" class="nhaplieu" id="login">
          <div class="login-title text-center" style="text-align:center;  padding-top: 20px;">
            <h4 style="color:#fff" class="dangnhaptt">Đăng nhập quản trị Website</h4>
          </div>

          <div class="input-group" style="text-align:center;width:100%;padding-top: 15px;">
          <h5 style="text-align:center;width:100%;color:#fff;font-family:'UTMCaviar'" >Design by <a style="color:#fff;font-family:'UTMCaviar'" href="http://vietit.vn/" target="_blank" title="CÔNG TY TNHH THƯƠNG MẠI DỊCH VỤ VIETIT">Vietit.vn</a></h5>
        </div>

        <div class="input-group">
          <span class="input-group-addon" style="background-color:#FFB400;margin-bottom:40px!important"><img src="media/images/user.png" width="100%"/></span>
          <input type="text" name="username" id='username' style="font-family: 'UTMCaviar';color: #000;font-weight: bold;background-color: #fff;" class="form-control" placeholder="Username" required />
        </div>

        <div class="input-group">
          <span class="input-group-addon" style="background-color:#7BD900"><img src="media/images/key.png" width="100%"/></span>
          <input type="password" name="password" style="font-family: 'UTMCaviar';color: #000;font-weight: bold;background-color: #fff;" id='password' class="form-control" placeholder="Password" required />
        </div>

        <input style="text-align:center;font-family:'UTMCaviar'" type="submit" class="btn btn-lg btn-success" value="LOGIN" name="submit" id="submit" />

        <p class="footer" style="margin-bottom:0px;color:#fff;font-family:'UTMCaviar'">Vui lòng nhập Username và Password.</p>

        <p class="footer" style="border-bottom:1px dotted #fff;margin-bottom:17px;width:150px;margin:auto"><i class="fa fa-volume-up"></i></p>
        
        <p class="footer" style="margin-bottom:17px;width:150px;margin:auto;height:30px"><i class="fa fa-volume-up"></i></p>

      </form>
    </div>
  </div>

</div>

</section> -->

    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- login area start -->
    <div class="login-area login-s2">
        <div class="container">
            <div class="login-box ptb--100">
            <form action="index.php?com=user&act=login" method="post" class="nhaplieu" id="login">
                    <div class="login-form-head">
                        <h4>Sign In</h4>
                        <!-- <p>Hello there, Sign in and start managing your Admin Template</p> -->
                    </div>
                    <div class="login-form-body">
                        <div class="form-gp">
                            <label for="exampleInputEmail1">Username</label>
                            <input type="text" name="username" id='username'>
                            <i class="ti-email"></i>
                            <div class="text-danger"></div>
                        </div>
                        <div class="form-gp">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" id='password' name="password">
                            <i class="ti-lock"></i>
                            <div class="text-danger"></div>
                        </div>
                      
                        <div class="submit-btn-area">
                            <button id="form_submit" type="submit">Submit <i class="ti-arrow-right"></i></button>
                        </div>
                     
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- login area end -->
