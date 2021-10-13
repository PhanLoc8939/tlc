   <!-- Navbar Start -->
   <div class="container-fluid position-relative z-9">
       <nav class="navbar navbar-expand-lg navbar-light py-3 py-lg-0 ani ani-scroll">
           <a href="" class="navbar-brand text-secondary">
               <h1 class="display-4 text-uppercase"><img src="<?= _upload_company_l . $company['logore'] ?>" alt=""></h1>
           </a>
           <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
               <span class="navbar-toggler-icon"></span>
           </button>
           <div class="collapse navbar-collapse" id="navbarCollapse">
               <div class="navbar-nav ml-auto py-0 pr-3 border-right">
                   <a href="" class="nav-item nav-link active">Home</a>
                   <a href="about.html" class="nav-item nav-link">About</a>
                   <a href="service.html" class="nav-item nav-link">Services</a>
                   <a href="price.html" class="nav-item nav-link">Prices</a>
                   <a href="project.html" class="nav-item nav-link">Projects</a>
                   <div class="nav-item">
                       <a href="#" class="nav-link btn-down">Pages</a>
                       <div class="dropdown-menu rounded-0 m-0">
                           <p><a href="team.html">Meat The Team</a></p>
                           <p><a href="testimonial.html">Testimonial</a></p>
                       </div>
                   </div>
                   <a href="contact.html" class="nav-item nav-link">Contact</a>
               </div>
               <div class="d-none d-lg-flex align-items-center pl-4">
                   <i class="fa fa-2x fa-mobile-alt text-primary mr-3"></i>
                   <div>
                       <h6 class="text-body text-uppercase mb-1"><small>Call Anytime</small></h6>
                       <h6 class="m-0"><?= $company['dienthoai'] ?></h6>
                   </div>
               </div>
           </div>
       </nav>
   </div>
   <!-- Navbar End -->