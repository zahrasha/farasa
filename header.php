<!-- Start Page Loading -->
<div id="loader-wrapper">
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
</div>
<!-- End Page Loading -->

<!-- //////////////////////////////////////////////////////////////////////////// -->

<!-- START HEADER -->
<header>
    <div class="header-bg-holder">
        <div class="row no-pad-marg">
            <div class="col s3 m3 l2 valign-wrapper fixed-height right">
                <a class="valign center right-header-logo-align" href="index.php">
                    <img src="images/f-h-logo.png" class="responsive-img " alt="logo">
                </a>
            </div>
            <div class="col s6 m7 l9 right fixed-height s-align">
                <div class="row header-text-align doubled-border ">
                    <p class="white-text header-text-style ib no-pad-marg ">
                        <span class="single-border"><span class="red-text">F</span>arasa</span>
                        <br>
                        <span class="white-text ">آموزش و سنجش الکترونیک</span>
                    </p>
                    <p class="left white-text ib header-institute-text doubled-border-top">موسسه توسعه دانش پژوهش و فن
                        آوری فرزان</p>
                </div>
            </div>
            <div class="col s3 m2 l1 left valign-wrapper fixed-height">
                <a class="left-header-logo-align valign" href="index.php">
                    <img class="responsive-img " src="images/footer-logo.png" alt="logo">
                </a>
            </div>
        </div>
        <!--=============================== Top Menu===================================-->
        <nav class="white hide-on-med-and-down my-nav">
            <ul id="dropdown1" class="dropdown-content">
                <li><a href="health-dashboard.php">مدیریت مالی</a></li>
            </ul>
            <ul id="dropdown2" class="dropdown-content">
                <li><a href="#">کاربران</a></li>
                <li><a href="#">مالی</a></li>
            </ul>
            <ul id="dropdown3" class="dropdown-content">
                <li><a href="#">مدیریت باشگاه ها</a></li>
                <li><a href="#">ایجاد باشگاه جدید</a></li>
                <li><a href="#">ثبت نام انبوه باشگاه</a></li>
                <li><a href="#">ویرایش اطلاعات باشگاه</a></li>
                <li><a href="#">ویرایش کلاس های باشگاه</a></li>
                <li><a href="#">ارسال انبوه لینک</a></li>
            </ul>
            <ul id="dropdown4" class="dropdown-content">
                <li><a href="#">مدیریت سازمان ها</a></li>
                <li><a href="#">ایجاد سازمان جدید</a></li>
                <li><a href="#">ثبت نام انبوه کاربر</a></li>
                <li><a href="#">ثبت نام انبوه اعتبار</a></li>
            </ul>
            <ul id="dropdown9" class="dropdown-content setting">
                <li><a href="profile.php"> تنظیمات کاربری </a></li>
                <li><a href="password-change.php"> تغییر رمز عبور </a></li>
            </ul>
            <div class="nav-wrapper">
                <ul class="right hide-on-med-and-down">
                    <!-- <li>
                        <a class="dropdown-button black-text waves-effect waves-teal" href="javascript:void(0)"
                           data-activates="dropdown1"
                           data-constrainwidth="false" data-alignment="right" data-hover="true">
                            <i class="mdi-action-account-balance-wallet"></i>
                            <span>مالی</span>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-button black-text waves-effect waves-teal" href="javascript:void(0)" data-activates="dropdown2"
                           data-constrainwidth="false" data-alignment="right" data-hover="true">
                            <i class="mdi-action-assignment"></i>
                            <span>گزارش گیری</span>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-button black-text waves-effect waves-teal" href="javascript:void(0)" data-activates="dropdown3"
                           data-constrainwidth="false" data-alignment="right" data-hover="true">
                            <i class="mdi-action-track-changes"></i>
                            <span>باشگاه ها</span>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-button black-text waves-effect waves-teal" href="javascript:void(0)" data-activates="dropdown4"
                           data-constrainwidth="false" data-alignment="right" data-hover="true">
                            <i class="mdi-social-people"></i>
                            <span>سازمان ها</span>
                        </a>
                    </li> -->
                    <li>
                       <a class="dropdown-button black-text waves-effect waves-teal" href="courses.php" data-activates="dropdown5"
                          data-constrainwidth="false" data-alignment="right" data-hover="true">
                            <i class="mdi-action-class"></i>
                            <span> دوره های من </span>
                        </a>
                    </li>
                    <li>
                       <a class="dropdown-button black-text waves-effect waves-teal" href="profile.php" data-activates="dropdown5"
                          data-constrainwidth="false" data-alignment="right" data-hover="true">
                            <i class="mdi-action-assignment-ind"></i>
                            <span>مشخصات کاربر</span>
                        </a>
                    </li>
                
                    <li>
                       <a class="dropdown-button black-text waves-effect waves-teal" href="payment.php" data-activates="dropdown5"
                          data-constrainwidth="false" data-alignment="right" data-hover="true">
                            <i class="mdi-action-assessment"></i>
                            <span>اعتبار و پرداخت</span>
                        </a>
                    </li>
                    <li class="header-search-wrapper overflow-hidden">
                        <form action="#" method="get" style="height: 45px; width: 130px !important ;">
                            <a onclick="$(this).closest('form').submit();" name="search-btn" class="left" data-hover="false"><i class="mdi-action-search white-text"></i></a>
                            <input type="text" class="light-blue accent-3 border-radius-10 search-council" style="height: 1rem !important;" name="search_text" placeholder="جستجو ...">
                            <input type="hidden" name="a" value="search">
                            <input type="hidden" name="lang" value="fa">
                        </form>
                    </li>

                </ul>

                <!--===================left controls============================-->
                <ul class="left hide-on-med-and-down controls">
<!--                    <li class="myform">-->
<!--                        <form class="form-search ngen-search-form">-->
<!--                            <input id="search-input" type="text" class="form-search-input" name="q" dir="rtl" />-->
<!--                            <a class="black-text form-search-submit" id="search-trigger"><i class="mdi-action-search fa-flip-horizontal"></i></a class="black-text" >-->
<!--                        </form>-->
<!--                    </li>-->
<!---->
<!--                    <li>-->
<!--                        <a class="black-text left-icon tooltip-top" href="notification.html" title="هشدارها و پیام ها">-->
<!--                            <small class="notification-badge">2</small>-->
<!--                            <i class="mdi-social-notifications"></i>-->
<!--                        </a>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <a class="black-text left-icon tooltip-top" href="calender.html" title="تقویم">-->
<!--                            <i class="mdi-editor-insert-invitation"></i>-->
<!--                        </a>-->
<!--                    </li>-->
                    <li>
                        <a class="black-text" style="padding:0 10px !important" href="#">
                            شیما ابن العلم خوش آمدید
                        </a>
                    </li>
                    <li>
                        <a title="صندوق پستی" class="black-text tooltip-top" href="post-box.php">
                            <i class="mdi-content-mail"></i>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-button black-text tooltip-top modal-trigger" href="#help-modal" title="راهنما">
                            <i class="mdi-action-info"></i>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-button black-text tooltip-top" href="javascript:void(0)"
                           data-activates="dropdown9"
                           data-constrainwidth="false" data-alignment="left" data-hover="true" title="تنظیمات">
                            <i class="mdi-action-settings"></i>
                        </a>
                    </li>
                    <li>
                        <a title="خروج" class="red-text tooltip-top" href="#">
                            <i class="fa fa-power-off red-text" style="position: relative;top: 1px;"></i>
                        </a>
                    </li>
                </ul>
                <div class="clear"></div>
            </div>
        </nav>
    </div>
</header>
<div class="clear"></div>

<!-- END HEADER -->


<!-- //////////////////////////////////////////////////////////////////////////// -->


<!-- START LEFT SIDEBAR NAV-->
<nav class="hide-on-large-only mobile-nav">
    <div class="nav-wrapper white">
        <!--        ==================================button menu============================/-->
        <li>
            <a href="#" data-activates="mobile-demo" class="button-collapse right btn btn-floating light-blue accent-3">
                <i class="mdi-navigation-menu"></i>
            </a>
        </li>
        <li class="header-search-wrapper overflow-hidden">
            <form action="#" method="post" style="height: 35px; width: 130px !important ;">
            <a onclick="$(this).closest('form').submit();" name="search-btn" href="" class="left"><i class="mdi-action-search white-text"></i></a>
            <input type="text" class="light-blue accent-3 border-radius-10 search-council" style="height: 1rem !important;" placeholder="جستجو ...">
            </form>
        </li>
        <!--        ==================================mobile menu Sabbaghi============================/-->
        <ul class="side-nav collapsible collapsible-accordion" id="mobile-demo">
            <li class="active"><a href="" class="collapsible-header remove-arrow waves-effect waves-cyan">
                    <i class="mdi-action-home right"></i> صفحه اصلی</a></li>
            <li>
                <div class="divider"></div>
            </li>
            <!--            ===================items===========-->
            <li><a href="courses.php" ><i class="mdi-action-class right"></i>
            دوره های من 
                </a>
                <li><a  href="profile.php" ><i class="mdi-action-assignment-ind right"></i>
            مشخصات کاربر 
                </a>
                <li><a href="payment.php" ><i class="mdi-action-assessment right"></i>
           اعتبار و پرداخت
                </a>
                <li><a  href="post-box.php" > <i class="mdi-content-mail right "> </i>
                صندوق پستی
                </a>
                <li><a href="help.php" ><i class="mdi-action-info right"></i>
          راهنما
                </a> 
              
                <!---------------------
            <li><a  href="" class="collapsible-header waves-effect waves-teal"><i class="mdi-action-dashboard right"></i>
        ...
                </a>
                <div class="collapsible-body">
                    <ul>
                        <li><a href="#">مدیریت مالی</a></li>

                    </ul>
                </div>
            </li>
            <li><a  href="" ><i
                        class="mdi-action-assignment right"></i>
                   گزارش گیری
                </a>
                <div class="collapsible-body">
                    <ul>
                        <li><a href="#">کاربران</a></li>
                        <li><a href="#">مالی</a></li>
                    </ul>
                </div>
            </li>
            <li><a href="page4.php"><i
                        class="mdi-action-track-changes right"></i>
                    باشگاه ها
                </a>

                <div class="collapsible-body">
                    <ul>
                        <li><a href="#">مدیریت باشگاه ها</a></li>
                        <li><a href="#">ایجاد باشگاه جدید</a></li>
                        <li><a href="#">ثبت نام انبوه باشگاه</a></li>
                        <li><a href="#">ارسال انبوه لینک</a></li>
                    </ul>
                </div>
            </li>
            <li><a class="collapsible-header waves-effect waves-teal"><i
                        class="mdi-social-people right"></i> سازمان ها </a>

                <div class="collapsible-body">
                    <ul>
                        <li><a href="images/address.jpg">
آدرس: تهران، میدان توحید، ابتدای خیابان ستارخان، کوچه شهید صیامی، پلاک ۱۷</a></li>
                        <li>صندوق پستی: ۱۶۷۸-۱۳۱۸۵</li>
                        <li>email: info@farzaninstitute.com</li>
                        <li>وب سایت:www.farzaninstitute.com</li>
                    </ul>
                </div>
            </li>
--------->
            <li><a class="collapsible-header waves-effect waves-teal"><i class="mdi-action-settings right"></i>
             تنظیمات </a>

                <div class="collapsible-body">
                    <ul>
                        <li><a href="password-change.php"> تغییر رمز عبور </a></li>
                        <li><a href="email-change.php"> تغییر پست الکترونیک  </a></li>
                        <li><a href="profile-picture.php"> تغییر عکس پروفایل </a></li>
                        <li><a href="profile.php"> ویرایش پروفایل شخصی </a></li>
                        <li><a  href="other-setting.php"> سایر تنظیمات  </a></li>
                    </ul>
                </div>
            </li>
           
            

              <li class=""><a class="collapsible-header waves-effect waves-red">
          <img src="http://farama.net/module/images/logo_fab.png" class="circle salamat-mobile-menu-btn">فراسا</a>
        <div class="collapsible-body" style="display: none;">
          <ul class="salamat-mobile-menu">
                          <li><a href="http://hooma.salemsa.net" title="ارزیابی هوشمند سلامت">هوما</a></li>
                            <li><a href="http://salemsa.net/%D8%A7%D9%BE%D9%84%DB%8C%DA%A9%DB%8C%D8%B4%D9%86-%D9%87%D8%A7%DB%8C-%D8%B3%D9%84%D8%A7%D9%85%D8%AA-%D9%87%D9%88%D8%B4%D9%85%D9%86%D8%AF/" title="اپلیکیشن سلامت هوشمند">اپ</a></li>
                            <li><a href="http://farama.salemsa.net/dashboard/fa" title="مشاوره تلفنی و آنلاین سلامت">فراما</a></li>
                            <!-- <li><a href="http://farasa.salemsa.net" title="آموزش و سنجش الکترونیک سلامت">فراسا</a></li> -->
                            <li><a href="http://faracom.salemsa.net" title="ارتباطات هوشمند سلامت">فراکام</a></li>
                            <li><a href="http://farahoosh.salemsa.net" title="مدیریت هوشمند سلامت">فراهوش</a></li>
                            <li><a href="http://faranet.salemsa.net" title="شبکه اجتماعی سلامت">فرانت</a></li>
                        </ul>
        </div>
      </li>
            <!--            ===================End of items===========-->
         
            <li>
                <div class="divider"></div>
            </li>

            <li><a href="#" class="collapsible-header remove-arrow waves-effect waves-cyan">
                    <i class="fa fa-power-off red-text right"></i> خروج </a>
            </li>

        </ul>

    </div>
</nav>

<!-- END LEFT SIDEBAR NAV-->
<div class="clear"></div>

