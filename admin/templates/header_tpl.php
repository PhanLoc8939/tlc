<?php
$d->reset();
$sql = "select * from #_newsletter where  hienthi=1 order by id asc  ";
$d->query($sql);
$newsletter = $d->result_array();

$d->reset();
$sql = "select * from #_newsletter_mailthanhvien where  hienthi=1 order by id asc  ";
$d->query($sql);
$newsletter_tv = $d->result_array();
?>
<!-- header area start -->
<div class="header-area">
    <div class="row align-items-center">
        <!-- nav and search button -->
        <div class="col-md-6 col-sm-8 clearfix">
            <div class="nav-btn pull-left">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <!-- <div class="search-box pull-left">
                            <form action="#">
                                <input type="text" name="search" placeholder="Search..." required>
                                <i class="ti-search"></i>
                            </form>
                        </div> -->
        </div>
        <!-- profile info & task notification -->
        <div class="col-md-6 col-sm-4 clearfix">
            <ul class="notification-area pull-right">
                <!-- <li id="full-view"><i class="ti-fullscreen"></i></li>
                            <li id="full-view-exit"><i class="ti-zoom-out"></i></li> -->
                <li><a href="../index.php" class="p-index" target="_blank"><i class="ti-zoom-in"></i></a></li>
                <li class="dropdown">
                    <a href="index.php?com=newsletter&act=man">
                        <i class="ti-bell">
                            <!--class=" dropdown-toggle" data-toggle="dropdown" -->
                            <span><?= count($newsletter) ?></span>
                        </i>
                    </a>

                    <!-- <div class="dropdown-menu bell-notify-box notify-box">
                        <span class="notify-title">You have 3 new notifications <a href="#">view all</a></span>
                        <div class="nofity-list">
                            <a href="#" class="notify-item">
                                <div class="notify-thumb"><i class="ti-key btn-danger"></i></div>
                                <div class="notify-text">
                                    <p>You have Changed Your Password</p>
                                    <span>Just Now</span>
                                </div>
                            </a>
                        </div>
                    </div> -->
                </li>
                <li class="dropdown">
                    <a href="index.php?com=newsletter_mailthanhvien&act=man"><i class="fa fa-envelope-o"><span><?= count($newsletter_tv) ?></span></i></a>
                    <!-- <div class="dropdown-menu notify-box nt-enveloper-box">
                        <span class="notify-title">You have 3 new notifications <a href="#">view all</a></span>
                        <div class="nofity-list">
                            <a href="#" class="notify-item">
                                <div class="notify-thumb">
                                    <img src="assets/images/author/author-img1.jpg" alt="image">
                                </div>
                                <div class="notify-text">
                                    <p>Aglae Mayer</p>
                                    <span class="msg">Hey I am waiting for you...</span>
                                    <span>3:15 PM</span>
                                </div>
                            </a>
                            <a href="#" class="notify-item">
                                <div class="notify-thumb">
                                    <img src="assets/images/author/author-img2.jpg" alt="image">
                                </div>
                                <div class="notify-text">
                                    <p>Aglae Mayer</p>
                                    <span class="msg">When you can connect with me...</span>
                                    <span>3:15 PM</span>
                                </div>
                            </a>
                            <a href="#" class="notify-item">
                                <div class="notify-thumb">
                                    <img src="assets/images/author/author-img3.jpg" alt="image">
                                </div>
                                <div class="notify-text">
                                    <p>Aglae Mayer</p>
                                    <span class="msg">I missed you so much...</span>
                                    <span>3:15 PM</span>
                                </div>
                            </a>
                            <a href="#" class="notify-item">
                                <div class="notify-thumb">
                                    <img src="assets/images/author/author-img4.jpg" alt="image">
                                </div>
                                <div class="notify-text">
                                    <p>Aglae Mayer</p>
                                    <span class="msg">Your product is completely Ready...</span>
                                    <span>3:15 PM</span>
                                </div>
                            </a>
                            <a href="#" class="notify-item">
                                <div class="notify-thumb">
                                    <img src="assets/images/author/author-img2.jpg" alt="image">
                                </div>
                                <div class="notify-text">
                                    <p>Aglae Mayer</p>
                                    <span class="msg">Hey I am waiting for you...</span>
                                    <span>3:15 PM</span>
                                </div>
                            </a>
                            <a href="#" class="notify-item">
                                <div class="notify-thumb">
                                    <img src="assets/images/author/author-img1.jpg" alt="image">
                                </div>
                                <div class="notify-text">
                                    <p>Aglae Mayer</p>
                                    <span class="msg">Hey I am waiting for you...</span>
                                    <span>3:15 PM</span>
                                </div>
                            </a>
                            <a href="#" class="notify-item">
                                <div class="notify-thumb">
                                    <img src="assets/images/author/author-img3.jpg" alt="image">
                                </div>
                                <div class="notify-text">
                                    <p>Aglae Mayer</p>
                                    <span class="msg">Hey I am waiting for you...</span>
                                    <span>3:15 PM</span>
                                </div>
                            </a>
                        </div>
                    </div> -->
                </li>
                <li class="dropdown-toggle">

                    <i class="ti-settings dropdown-toggle" data-toggle="dropdown"></i>
                    <div class="dropdown-menu notify-box nt-enveloper-box">

                        <div class="nofity-list">
                            <a href="index.php?com=user&act=admin_edit" class="notify-item">
                                <p>Manager Account</p>
                            </a>
                            <a href="index.php?com=user&act=logout" class="notify-item">
                                <p>Log Out</p>
                            </a>
                        </div>
                    </div>

                </li>
            </ul>
        </div>
    </div>
</div>