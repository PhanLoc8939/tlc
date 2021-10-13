<?php if (!defined('_kiemtraweb') || _kiemtraweb != $check_website) daysangtranglogin(); ?>



<!-- <div class="profile clearfix">
  <div class="profile_pic">
    <img src="images/img.jpg" alt="..." class="img-circle profile_img">
  </div>
  <div class="profile_info">
    <span>Welcome,</span>
    <h2>John Doe</h2>
  </div>
</div>

<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
  <div class="menu_section">
    <h3>General</h3>
    <ul class="nav side-menu">

      <li><a href="index.php"><i class="fa fa-home"></i> HOME </a></li>
      <li><a><i class="fa fa-home"></i> MODULE SẢN PHẨM<span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="index.php?com=product&act=man_cat">Danh mục cấp 1</a></li>
          <li><a href="index.php?com=product&act=man_cat1">Danh mục cấp 2</a></li>
          <li><a href="index.php?com=product&act=man_cat2">Danh mục cấp 3</a></li>
          <li><a href="index.php?com=product&act=man">Sản Phẩm</a></li>
          <li><a href="index.php?com=donhang&act=man">Đơn Hàng</a></li>
        </ul>
      </li>

      <li><a><i class="fa fa-edit"></i> MODULE 1 BÀI VIẾT <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="index.php?com=about&act=capnhap">Giới thiệu </a></li>
          <li><a href="index.php?com=about&act=capnhap1">Về chúng tôi </a></li>
          <li><a href="index.php?com=about&act=capnhap2">Giới thiệu 1 </a></li>
          <li><a href="index.php?com=about&act=capnhap3">Giới thiệu 2 </a></li>
          <li><a href="index.php?com=about&act=capnhap4">Giới thiệu 3 </a></li>
        </ul>
      </li>

      <li><a><i class="fa fa-desktop"></i> MODULE BÀI VIẾT <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="index.php?com=tinnho&act=man">Tin tức</a></li>
          <li><a href="index.php?com=tinnho&act=man1">Dịch vụ</a></li>
          <li><a href="index.php?com=tinnho&act=man2">Khách hàng</a></li>
          <li><a href="index.php?com=tinnho&act=man3">Business</a></li>

        </ul>
      </li>

      <li><a><i class="fa fa-table"></i> MODULE KHÁC <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="index.php?com=photo&act=man">Quản lý SlideShow</a></li>
          <li><a href="index.php?com=photo&act=man2">Quản lý Hình Ảnh</a></li>
          <li><a href="index.php?com=photo&act=man1">Quản lý Mạng Xã Hội</a></li>
          <li><a href="index.php?com=photo&act=man_hotline">Quản lý Banner</a></li>
          <li><a href="index.php?com=photo&act=man_video">Quản lý Đối tác</a></li>
          <li><a href="index.php?com=photo&act=man1_video">Video</a></li>
        </ul>
      </li>

      <li><a><i class="fa fa-bar-chart-o"></i> Data Presentation <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
        </ul>
      </li>

      <li><a><i class="fa fa-clone"></i>MODULE CÔNG TY <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="index.php?com=company&act=capnhap">Thông Tin Công Ty</a></li>
          <lI><a href="index.php?com=company&act=man1">Bản đồ</a></li>
        </ul>
      </li>
    </ul>
  </div>
  <div class="menu_section">
    <h3>Live On</h3>
    <ul class="nav side-menu">
      <li><a><i class="fa fa-bug"></i> Additional Pages <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="e_commerce.html">E-commerce</a></li>
        </ul>
      </li>
      <li><a><i class="fa fa-windows"></i> Extras <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="page_403.html">403 Error</a></li>
        </ul>
      </li>
      <li><a><i class="fa fa-sitemap"></i> Multilevel Menu <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="#level1_1">Level One</a>
          <li><a>Level One<span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li class="sub_menu"><a href="level2.html">Level Two</a></li>
              <li><a href="#level2_1">Level Two</a></li>
              <li><a href="#level2_2">Level Two</a></li>
            </ul>
          </li>
          <li><a href="#level1_2">Level One</a>
          </li>
        </ul>
      </li>
      <li><a href="javascript:void(0)"><i class="fa fa-laptop"></i> Landing Page <span class="label label-success pull-right">Coming Soon</span></a></li>
    </ul>
  </div>
</div>


<div class="sidebar-footer hidden-small">
  <a data-toggle="tooltip" data-placement="top" title="Settings">
    <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
  </a>
  <a data-toggle="tooltip" data-placement="top" title="FullScreen">
    <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
  </a>
  <a data-toggle="tooltip" data-placement="top" title="Lock">
    <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
  </a>
  <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
    <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
  </a>
</div>

</div> -->

<!-- sidebar menu area start -->
<div class="sidebar-menu">
  <div class="sidebar-header">
    <div class="logo">
      <a href="index.php"><img src="assets/images/icon/logo.png" alt="logo"></a>
    </div>
  </div>
  <div class="main-menu">
    <div class="menu-inner">
      <nav>
        <ul class="metismenu" id="menu">


          <li>
            <a href="javascript:void(0)" aria-expanded="true"><i class="ti-dashboard"></i><span>About</span></a>
            <ul class="collapse">
              <li><a href="index.php?com=about&act=capnhap">About</a></li>
            </ul>
          </li>

          <li>
            <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-align-left"></i> <span>Projects</span></a>
            <ul class="collapse">
              <li><a href="index.php?com=product&act=man_cat">Projects Level 01</a></li>
              <!-- <li><a href="#" aria-expanded="true">Item level (1)</a>
                <ul class="collapse">
                  <li><a href="#">Item level (2)</a></li>
                  <li><a href="#">Item level (2)</a></li>
                  <li><a href="#">Item level (2)</a></li>
                </ul>
              </li> -->
              <li><a href="index.php?com=product&act=man">Projects Main</a></li>
            </ul>
          </li>


          <!-- <li>
            <a href="javascript:void(0)" aria-expanded="true"><i class="ti-pie-chart"></i><span>Charts</span></a>
            <ul class="collapse">
              <li><a href="barchart.html">bar chart</a></li>
              <li><a href="linechart.html">line Chart</a></li>
              <li><a href="piechart.html">pie chart</a></li>
            </ul>
          </li> -->

          <li>
            <a href="javascript:void(0)" aria-expanded="true"><i class="ti-palette"></i><span>NEWS</span></a>
            <ul class="collapse">
              <li><a href="index.php?com=tinnho&act=man">SERVICE</a></li>
              <li><a href="index.php?com=tinnho&act=man1">PRICE</a></li>
              <!-- <li><a href="index.php?com=tinnho&act=man2">PROJECT</a></li> -->
              <li><a href="index.php?com=tinnho&act=man3">TEAM</a></li>
              <li><a href="index.php?com=tinnho&act=man4">TESTIMONIAL</a></li>
            </ul>
          </li>

          <li>
            <a href="javascript:void(0)" aria-expanded="true"><i class="ti-layout-sidebar-left"></i><span>SlideShow</span></a>
            <ul class="collapse">
              <li><a href="index.php?com=photo&act=man">SlideShow Main</a></li>
              <!-- <li><a href="index3-horizontalmenu.html">Horizontal Sidebar</a></li> -->
            </ul>
          </li>
          <!-- <li>
            <a href="javascript:void(0)" aria-expanded="true"><i class="ti-slice"></i><span>icons</span></a>
            <ul class="collapse">
              <li><a href="fontawesome.html">fontawesome icons</a></li>
              <li><a href="themify.html">themify icons</a></li>
            </ul>
          </li>
          <li>
            <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-table"></i>
              <span>Tables</span></a>
            <ul class="collapse">
              <li><a href="table-basic.html">basic table</a></li>

            </ul>
          </li>
          <li><a href="maps.html"><i class="ti-map-alt"></i> <span>maps</span></a></li>
          <li><a href="invoice.html"><i class="ti-receipt"></i> <span>Invoice Summary</span></a></li>
          <li>
            <a href="javascript:void(0)" aria-expanded="true"><i class="ti-layers-alt"></i> <span>Pages</span></a>
            <ul class="collapse">
              <li><a href="login.html">Login</a></li>

            </ul>
          </li> -->
          <li>
            <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-exclamation-triangle"></i><span>THÔNG TIN CÔNG TY</span></a>
            <ul class="collapse">
              <li><a href="index.php?com=company&act=capnhap">SlideShow Main</a></li>
              <lI><a href="index.php?com=company&act=man1">Bản đồ</a></li>
            </ul>
          </li>

        </ul>
      </nav>
    </div>
  </div>
</div>
<!-- sidebar menu area end -->