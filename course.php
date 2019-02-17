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
              <h5 class="breadcrumbs-title "><i class="mdi-action-home"></i>صفحه اصلی / دوره انتخابی</h5>
            </div>
        </div>
        <div class="row">
            <div class="col s12 m4 l3 right">
              <div class="white my-card z-depth-1 list-container">
                <h4 class="heading">مرور مطالب</h4>
                <ul class="tree">
                <li>  <a href="course.php">صفحه اصلی دوره</a></li>
                  <li><a href="content.php">پیش گفتار</a></li>
                  <li><a href="#">پیش گفتار</a>
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
            <div class="col s12 m12 l12 right">
            <div class="white my-card z-depth-1  list-container">
            <i class="mdi-action-credit-card prefix "></i>
            <label  class="blue-text"> جستجو </label>
            <select >
            <option value="1"> نمایش محتوا </option>
            </select>
            <span style="display:block; " >تطابق: </span>
            <input id="radio-4" name="radio" type="radio" checked>
            <label for="radio-4" class="blue-text radio-label">تمام کلمات</label>
            <input id="radio-5" name="radio" type="radio">
            <label  for="radio-5" class="blue-text  radio-label">هر کلمه ای</label>
            <button style="margin-top:20px;" class="btn blue"><a class=" white-text" href="search.php"> جستجو </a></button>
                    
            </div>
            </div>
            </div>
            <div class="col s12 m8 l9 right" id="MainLinks">
              <div class="col s6 m4 l2 right">
                <a href="#">
                  <div class="white center my-card bordered-card">
                      <img src="./images/farasa/forum.png" alt="">
                      <h4 class="link">انجمن ها</h4>
                    </div>
                  </a>
              </div>

              <div class="col s6 m4 l2 right">
                <a href="#">
                  <div class="white center my-card bordered-card">
                      <img src="./images/farasa/keywords.png" alt="">
                      <h4 class="link">واژگان کلیدی</h4>
                    </div>
                  </a>
              </div>

              <div class="col s6 m4 l2 right">
                <a href="#">
                  <div class="white center my-card bordered-card">
                      <img src="./images/farasa/database.png" alt="">
                      <h4 class="link">ذخیره سازی فایل</h4>
                    </div>
                  </a>
              </div>

              <div class="col s6 m4 l2 right">
                <a href="#">
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
                <a href="#">
                  <div class="white center my-card bordered-card">
                      <img src="./images/farasa/exam.png" alt="">
                      <h4 class="link">آزمون ها</h4>
                    </div>
                  </a>
              </div>

              <div class="col s6 m4 l2 right">
                <a href="#">
                  <div class="white center my-card bordered-card">
                      <img src="./images/farasa/eye.png" alt="">
                      <h4 class="link">بازدید ها</h4>
                    </div>
                  </a>
              </div>

              <div class="col s6 m4 l2 right">
                <a href="#">
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
                <a href="#">
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



