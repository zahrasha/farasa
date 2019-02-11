<?php include 'head.php'; ?>
</head>
<body>
<?php include 'header.php'; ?>
    <!--start container-->
    <div class="container">
        <div class="row margin-bottom-0">
            <!--Top title-->
            <div class="col s12 m12 l12">
                <h5 class="breadcrumbs-title "><i class="mdi-action-class"></i>استانداردهای گزارش پژوهش های بالينی(CONSORT)</h5>
            </div>
        </div>
        <div class="row">
            <div class="col s12 m4 l3 right">
              <div class="white my-card z-depth-1 list-container">
                <h4 class="heading">مرور مطالب</h4>
                <ul>
                <li><a href="course.php">صفحه اصلی دوره</a></li>
                  <li><a href="content.php">پیش گفتار</a></li>
                  <li>
                  <a href="#">پیش گفتار</a>
                    <ul>
                      <li><a href="content.php">صفحه اصلی دوره</a></li>
                      <li><a href="content.php">پیش گفتار</a></li>
                      <li>
                      <a href="#">پیش گفتار</a>
                        <ul>
                          <li><a href="content.php">صفحه اصلی دوره</a></li>
                          <li><a href="content.php">پیش گفتار</a></li>
                          <li><a href="content.php">پیش گفتار</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li><a href="content.php">لینک آخر</a></li>

                </ul>
              </div>
            </div>
            <div class="col s12 m8 l9 right" id="MainLinks">
              <div class="col s6 m4 l2 right">
                  <div class="white center my-card bordered-card">
                    <a href="#">
                      <img src="./images/farasa/forum.png" alt="">
                      <h4 class="link">انجمن ها</h4>
                    </a>
                  </div>
              </div>

              <div class="col s6 m4 l2 right">
                  <div class="white center my-card bordered-card">
                    <a href="#">
                      <img src="./images/farasa/keywords.png" alt="">
                      <h4 class="link">واژگان کلیدی</h4>
                    </a>
                  </div>
              </div>

              <div class="col s6 m4 l2 right">
                  <div class="white center my-card bordered-card">
                    <a href="#">
                      <img src="./images/farasa/database.png" alt="">
                      <h4 class="link">ذخیره سازی فایل</h4>
                    </a>
                  </div>
              </div>

              <div class="col s6 m4 l2 right">
                  <div class="white center my-card bordered-card">
                    <a href="#">
                      <img src="./images/farasa/chat.png" alt="">
                      <h4 class="link">گفتگوی آنلاین</h4>
                    </a>
                  </div>
              </div>

              <div class="col s6 m4 l2 right">
                  <div class="white center my-card bordered-card">
                    <a href="#">
                      <img src="./images/farasa/link.png" alt="">
                      <h4 class="link">لینک ها</h4>
                    </a>
                  </div>
              </div>

              <div class="col s6 m4 l2 right">
                  <div class="white center my-card bordered-card">
                    <a href="#">
                      <img src="./images/farasa/exam.png" alt="">
                      <h4 class="link">آزمون ها</h4>
                    </a>
                  </div>
              </div>

              <div class="col s6 m4 l2 right">
                  <div class="white center my-card bordered-card">
                    <a href="#">
                      <img src="./images/farasa/eye.png" alt="">
                      <h4 class="link">بازدید ها</h4>
                    </a>
                  </div>
              </div>

              <div class="col s6 m4 l2 right">
                  <div class="white center my-card bordered-card">
                    <a href="#">
                      <img src="./images/farasa/license.png" alt="">
                      <h4 class="link">گواهی</h4>
                    </a>
                  </div>
              </div>

              <div class="col s6 m4 l2 right">
                  <div class="white center my-card bordered-card">
                    <a href="#">
                      <img src="./images/farasa/meeting.png" alt="">
                      <h4 class="link">نشستی با استاد</h4>
                    </a>
                  </div>
              </div>

              <div class="col s6 m4 l2 right">
                  <div class="white center my-card bordered-card">
                    <a href="#">
                      <img src="./images/farasa/payment.png" alt="">
                      <h4 class="link">پرداخت و اعتبار</h4>
                    </a>
                  </div>
              </div>

              <div class="col s6 m4 l2 right">
                  <div class="white center my-card bordered-card">
                    <a href="#">
                      <img src="./images/farasa/book.png" alt="">
                      <h4 class="link">منابع آموزشی</h4>
                    </a>
                  </div>
              </div>
            </div>

        </div>

    </div>
    <!--end container-->

<?php include 'footer.php'; ?>

<script>
  $(".list-container ul li a").on("click",function(e){
    $(this).siblings("ul").slideToggle();
  })
</script>
</body>

</html>



