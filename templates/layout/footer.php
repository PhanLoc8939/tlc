   <!-- Footer Start -->
   <div class="container-fluid bg-dark text-white-50 py-5 px-sm-3 px-md-5" style="margin-top: 90px;">
       <div class="row pt-5">
           <div class="col-lg-3 col-md-6 mb-5 ani ani-scroll">
               <a href="index.html" class="navbar-brand">
                   <h1 class="m-0 mt-n2 text-white display-4"><img src="<?= _upload_company_l . $company['logofooter'] ?>" alt=""></h1>
               </a>
               <p><?= $company['mota_vi'] ?></p>
               <h6 class="text-uppercase text-white py-2">Follow Us</h6>
               <div class="d-flex justify-content-start">
                   <a class="btn btn-lg btn-primary btn-lg-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                   <a class="btn btn-lg btn-primary btn-lg-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                   <a class="btn btn-lg btn-primary btn-lg-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                   <a class="btn btn-lg btn-primary btn-lg-square" href="#"><i class="fab fa-instagram"></i></a>
               </div>
           </div>
           <div class="col-lg-3 col-md-6 mb-5 ani ani-scroll">
               <h4 class="text-uppercase text-white mb-4">Get In Touch</h4>
               <p>Volup amet magna clita tempor. Tempor sea eos vero ipsum. Lorem lorem sit sed elitr sed kasd et</p>
               <p><i class="fa fa-map-marker-alt text-white mr-2"></i><?= $company['diachi_vi'] ?></p>
               <p><i class="fa fa-phone-alt text-white mr-2"></i><?= $company['dienthoai'] ?></p>
               <p><i class="fa fa-envelope text-white mr-2"></i><?= $company['email'] ?></p>
           </div>
           <div class="col-lg-3 col-md-6 mb-5 ani ani-scroll">
               <h4 class="text-uppercase text-white mb-4">Quick Links</h4>
               <div class="d-flex flex-column justify-content-start">
                   <a class="text-white-50 mb-2" href=""><i class="fa fa-angle-right text-white mr-2"></i>Home</a>
                   <a class="text-white-50 mb-2" href="about.html"><i class="fa fa-angle-right text-white mr-2"></i>About Us</a>
                   <a class="text-white-50 mb-2" href="services.html"><i class="fa fa-angle-right text-white mr-2"></i>Our Services</a>
                   <a class="text-white-50 mb-2" href="prices.html"><i class="fa fa-angle-right text-white mr-2"></i>Pricing Plan</a>
                   <a class="text-white-50 mb-2" href="team.html"><i class="fa fa-angle-right text-white mr-2"></i>Meet The Team</a>
                   <a class="text-white-50" href="contact.html"><i class="fa fa-angle-right text-white mr-2"></i>Contact Us</a>
               </div>
           </div>
           <div class="col-lg-3 col-md-6 mb-5 ani ani-scroll">
               <h4 class="text-uppercase text-white mb-4">Newsletter</h4>
               <p class="mb-4"><?= $company['noidung_vi'] ?></p>
               <div class="w-100 mb-3">
                   <form method="post" name="frm_order" action="dang-ky-nhan-tin.html" enctype="multipart/form-data" onsubmit="return check(); ">
                       <div class=" input-group">
                           <input type="text" name="txtemail" class="form-control border-light" style="padding: 25px;" placeholder="Your Email">
                           <div class="input-group-append">
                               <button type="submit" class="btn btn-primary text-uppercase px-3">Sign Up</button>
                           </div>
                       </div>
                   </form>


               </div>
               <i>Lorem sit sed elitr sed kasd et</i>
           </div>
       </div>
   </div>

   <div class="container-fluid py-4 px-sm-3 px-md-5" style="background-color: #111111;">
       <p class="mb-2 text-center text-white-50">&copy; <a href="#"><?= $company['copyright'] ?></a></p>

   </div>

   <!-- Footer End -->