<?php include 'head.php'; ?>
</head>
<body>
<?php include 'header.php'; ?>
    <!--start container-->
    <div class="container">
        <div class="row margin-bottom-0">
            <!--Top title-->
            <div class="col s12 m12 l12">
                <h5 class="breadcrumbs-title "><i class="mdi-action-home"></i> <a href="">صفحه اصلی</a>/
                 سیری در دوره ها
                </h5>
            </div>
             <div class="row">
                <div class="col s12  left">
                <div class=" card z-depth-1 card-content white">
                <div class="clear"></div>
                    <form action="#">
                        <div class="col s12 m6 l3 right">
                            <div class="input-field farzan-select">
                                <i class="mdi-action-visibility prefix "></i>
                                <label>دسترسی</label>
                                <select title="شهر">
                                    <option value="1">با پرداخت</option>
                                    <option value="2">آزاد</option>
                                    <option value="3">با عضویت</option>
                                    <option value="4">همه</option>
                                </select>
                            </div>
                        </div>
                        <div class="col s12 m6 l3 right">
                            <div class="input-field farzan-select">
                                <i class="mdi-action-view-agenda prefix "></i>
                                <label>دسته</label>
                                <select title="شهر">
                                    <option value="1">تمام دسته ها</option>
                                    <option value="2">دسته بندی نشده</option>
                                    <option value="3">ICDL</option>
                                    <option value="4">بدو خدمت کارکنان</option>
                                </select>
                            </div>
                        </div>
                          <div class="col s12 m6 l3 right">
                          <div class="input-field">
                            <i class="mdi-action-search prefix"></i>
                                <input id="gymname" type="text" class="validate">
                                <label for="gymname" class="">جستجو (عنوان, توضيح)</label>
                                </div> 
                                <input type="radio" name="tick1" id="all">
                                <label for="all" class="checkbox-text black-text" style="font-size: 12pt">
                                <span>تمام کلمات</span>
                                </label>
                                <input type="radio" name="tick1" id="words">
                                <label for="words" class="checkbox-text black-text" style="font-size: 12pt">
                                <span>هر کلمه</span>
                                </label>
                        </div>  
                        <div class=" col s12 m6 l3">
                        <button class="btn  waves-effect waves-light create-btn z-depth-1 light-blue accent-3  submit-form left"
                                type="button" style="margin-top: 2.5rem;">فيلتر کردن
                        </button>
                        <button class="btn waves-effect waves-light create-btn z-depth-1 light-blue accent-3  submit-form left"
                                type="button" style="margin-top: 2.5rem;" >برگرداندن فیلتر
                        </button>
                        </div>
                        </form>
                        <div class="clear">
                </div>
                </div>
                </div>
                </div>
             <p class="margin-top-5">نتايج پيدا شده: 211</p>
            <div class="input-field col s12 m12 l12 right mycheckbox">
                  <input type="checkbox" id="checkAll">
                  <label for="checkAll" style="font-weight:bold;" class="checkbox-text margin-bottom-0">لطفا دوره / دوره های مورد نظر خود را انتخاب کنید.  </label>
             </div>

           <div class="clear"></div>
           <div class="col s12 center">
            <button class="btn col s1 m2 l1 offset-l1  waves-effect waves-light create-btn z-depth-1 light-blue accent-3 submit-form"
              type="button"> ثبت دروس انتخاب شده
            </button>
      </div> 
     <div class="row">
     <div class="col s12 l10 offset-l1">
            <div class="col s12 m4 l4 right">
                <div class="card z-depth-1 my-card hoverable">
                  <div class="card-content">
                         <div class="center">
                         <a href="course.php"><img src="images/50.jpg"></a> 
                         </div>
                        <div class="mycheckbox center">
                            <input type="checkbox" id="course1">
                            <label for="course1" class="checkbox-text  black-text">
                              IS18-اصول بایگانی علمی و مدیریت اسناد
                            </label>
                          </div>
                          <div class="clear margin-top-10"></div>
                          <p>
                            <small>هزینه: <b>300,000 ريال</b></small>
                          </p>
                          <p>
                            <small>نام حساب: <b>فراسا</b></small>
                          </p> 
                          <p>
                            <small>دسترسی: <b>آزاد</b></small>
                          </p>
                          <p>
                            <small>عنوان: <b>متن</b></small>
                          </p>
                         
                  </div>
                </div>
            </div>  
            <div class="col s12 m4 l4 right">
                <div class="card z-depth-1 my-card hoverable">
                  <div class="card-content">
                         <div class="center">
                         <a href="course.php"><img src="images/50.jpg"></a> 
                         </div>
                        <div class="mycheckbox center">
                            <input type="checkbox" id="course2">
                            <label for="course2" class="checkbox-text  black-text">
                              IS18-اصول بایگانی علمی و مدیریت اسناد
                            </label>
                          </div>
                          <div class="clear margin-top-10"></div>
                          <p>
                            <small>هزینه: <b>300,000 ريال</b></small>
                          </p>
                          <p>
                            <small>نام حساب: <b>فراسا</b></small>
                          </p> 
                          <p>
                            <small>دسترسی: <b>آزاد</b></small>
                          </p>
                          <p>
                            <small>عنوان: <b>متن</b></small>
                          </p>
                  </div>
                </div>
            </div>
            <div class="col s12 m4 l4 right">
                <div class="card z-depth-1 my-card hoverable">
                  <div class="card-content">
                         <div class="center">
                         <a href="course.php"><img src="images/50.jpg"></a> 
                         </div>
                        <div class="mycheckbox center">
                            <input type="checkbox" id="course3">
                            <label for="course3" class="checkbox-text  black-text">
                              IS18-اصول بایگانی علمی و مدیریت اسناد
                            </label>
                          </div>
                          <div class="clear margin-top-10"></div>
                          <p>
                            <small>هزینه: <b>300,000 ريال</b></small>
                          </p>
                          <p>
                            <small>نام حساب: <b>فراسا</b></small>
                          </p> 
                          <p>
                            <small>دسترسی: <b>آزاد</b></small>
                          </p>
                          <p>
                            <small>عنوان: <b>متن</b></small>
                          </p>
                  </div>
                </div>
            </div>  
            <div class="col s12 m4 l4 right">
                <div class="card z-depth-1 my-card hoverable">
                  <div class="card-content">
                         <div class="center">
                         <a href="course.php"><img src="images/50.jpg"></a> 
                         </div>
                        <div class="mycheckbox center">
                            <input type="checkbox" id="course4">
                            <label for="course4" class="checkbox-text  black-text">
                              IS18-اصول بایگانی علمی و مدیریت اسناد
                            </label>
                          </div>
                          <div class="clear margin-top-10"></div>
                          <p>
                            <small>هزینه: <b>300,000 ريال</b></small>
                          </p>
                          <p>
                            <small>نام حساب: <b>فراسا</b></small>
                          </p> 
                          <p>
                            <small>دسترسی: <b>آزاد</b></small>
                          </p>
                          <p>
                            <small>عنوان: <b>متن</b></small>
                          </p>
                  </div>
                </div>
            </div>                                         
      </div>  
   <!--end container-->
<script>

</script>
<?php include 'footer.php'; ?>
<script>
    $("#checkAll").on("change",function(){
      if($(this).is(':checked')){
          $(".my-card .mycheckbox input").prop("checked",true)
      }else{
        $(".my-card .mycheckbox input").prop("checked",false)
      }
    })
</script>
</body>

</html>



