<?php include 'head.php'; ?>
<style>
   ul.tree, ul.tree ul {
     list-style-type: none;
     background: url(images/vline.png) repeat-y;
     margin: 0;
     padding: 0;
     background-position: right top;
       }
   
   ul.tree ul {
     margin-left: 10px;
   }

   ul.tree li {
     margin: 0;
     padding: 0 12px;
     background: url(images/node.png) no-repeat;
     background-position: right top;   
    }  
   ul.tree li:last-child {
    background: #fff url(images/lastnode.png) no-repeat;
    background-position: right top;
     }
</style>
</head>
<body>
<?php include 'header.php'; ?>
    <!--start container-->
    <div class="container">
        <div class="row margin-bottom-0">
            <!--Top title-->
            <div class="col s12 m12 l12">
              <h5 class="breadcrumbs-title "><i class="mdi-action-home"></i> 
                <a href="">صفحه اصلی</a> /
                <a href="">دوره اتنخابی </a>
                </h5>
            </div>
        </div>
        <div class="row">
            <div class="col s12 m4 l3 right">
            <?php include 'sidebar.php'; ?>
            </div>
            <div class="col s12 m8 l9 right" id="MainLinks">
              <div class="col s6 m4 l2 right">
                <a href="angoman.php">
                  <div class="white center my-card bordered-card">
                      <img src="./images/farasa/forum.png" alt="">
                      <h4 class="link">انجمن ها</h4>
                    </div>
                  </a>
              </div>

              <div class="col s6 m4 l2 right">
                <a href="keywords.php">
                  <div class="white center my-card bordered-card">
                      <img src="./images/farasa/keywords.png" alt="">
                      <h4 class="link">واژگان کلیدی</h4>
                    </div>
                  </a>
              </div>

              <div class="col s6 m4 l2 right">
                <a href="upload-file.php">
                  <div class="white center my-card bordered-card">
                      <img src="./images/farasa/database.png" alt="">
                      <h4 class="link">ذخیره سازی فایل</h4>
                    </div>
                  </a>
              </div>

              <div class="col s6 m4 l2 right">
                <a href="online-chat.php">
                  <div class="white center my-card bordered-card">
                      <img src="./images/farasa/chat.png" alt="">
                      <h4 class="link">گفتگوی آنلاین</h4>
                    </div>
                  </a>
              </div>

              <div class="col s6 m4 l2 right">
                <a href="#">
                  <div class="white center my-card bordered-card">
                      <img src="./images/farasa/link.png" alt="">
                      <h4 class="link">لینک ها</h4>
                    </div>
                  </a>
              </div>

              <div class="col s6 m4 l2 right">
                <a href="test.php">
                  <div class="white center my-card bordered-card">
                      <img src="./images/farasa/exam.png" alt="">
                      <h4 class="link">آزمون ها</h4>
                    </div>
                  </a>
              </div>

              <div class="col s6 m4 l2 right">
                <a href="visit.php">
                  <div class="white center my-card bordered-card">
                      <img src="./images/farasa/eye.png" alt="">
                      <h4 class="link">بازدید ها</h4>
                    </div>
                  </a>
              </div>

              <div class="col s6 m4 l2 right">
                <a href="index-govahi.php">
                  <div class="white center my-card bordered-card">
                      <img src="./images/farasa/license.png" alt="">
                      <h4 class="link">گواهی</h4>
                    </div>
                  </a>
              </div>

              <div class="col s6 m4 l2 right">
                <a href="#">
                  <div class="white center my-card bordered-card">
                      <img src="./images/farasa/meeting.png" alt="">
                      <h4 class="link">نشستی با استاد</h4>
                    </div>
                  </a>
              </div>

              <div class="col s6 m4 l2 right">
                <a href="payment.php">
                  <div class="white center my-card bordered-card">
                      <img src="./images/farasa/payment.png" alt="">
                      <h4 class="link">پرداخت و اعتبار</h4>
                    </div>
                  </a>
              </div>

              <div class="col s6 m4 l2 right">
                <a href="#">
                  <div class="white center my-card bordered-card">
                        <img src="./images/farasa/book.png" alt="">
                      <h4 class="link">منابع آموزشی</h4>
                    </div>
                  </a>
              </div>
            </div>

        </div>

    </div>
    <!--end container-->

<?php include 'footer.php'; ?>

<script>
  $(".list-container ul li a").on("click",function(e){
    e.preventDefault();
    $(this).siblings("ul").slideToggle();
  })
</script>
</body>

</html>



