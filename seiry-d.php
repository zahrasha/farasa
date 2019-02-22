<?php include 'head.php'; ?>
</head>
<body>
<?php include 'header.php'; ?>
    <!--start container-->
    <div class="container">
        <div class="row margin-bottom-0">
            <!--Top title-->
            <div class="col s12 m12 l12">
                <h5 class="breadcrumbs-title "><i class="mdi-action-home"></i> صفحه اصلی / سیری در دوره ها
                </h5>
            </div>
             <div class="row">
        <div class="col l12 m12 s12">
            <div class="col s12 right">
                <div class=" card z-depth-1 card-content white">
                <span>نتايج پيدا شده: 211</span>
                    <form action="#">
                        <div class="input-field "> 
                        <div class="col s12 m6 l3 right"> 
                        <span>دسترسي</span><br>
                        <input type="radio" name="tick" id="tick2">
                            <label for="tick2" class="checkbox-text black-text" style="font-size: 12pt">
                              <span>با پرداخت</span>
                            </label>
                            <input type="radio" name="tick" id="tick3">
                            <label for="tick3" class="checkbox-text black-text" style="font-size: 12pt">
                              <span>با عضويت</span>
                            </label>
                            <input type="radio" name="tick" id="tick4">
                            <label for="tick4" class="checkbox-text black-text" style="font-size: 12pt">
                              <span>آزاد</span>
                            </label>
                            <input type="radio" name="tick" id="tick5">
                            <label for="tick5" class="checkbox-text black-text" style="font-size: 12pt">
                              <span>همه</span>
                            </label>
                           
                        </div>
                        </div>
                        <div class="col s12 m6 l3 right">
                        <div class="input-field ">
                                <i class="mdi-action-view-agenda prefix"></i>
                                 <select name="" id="">
                                 <option value="">تمام دسته ها </option>
                                 <option value="">دسته بندی نشده </option>
                                 <option value=""> ICDL </option>
                                 <option value=""> بدو خدمت کارکنان</option>
                                 </select> <br>
                                 <label >دسته</label>
                                 </div>   
                              </div>
                          <div class="col s12 m6 l3 right">
                          <div class="input-field">
                            <i class="mdi-action-search prefix"></i>
                                  <input id="gymname" type="text" class="validate">
                                  <label for="gymname" class="">جستجو (عنوان, توضيح)</label>
                               </div>
                        </div>
                        <div class="col s12 m6 l3 right">
                        <div class="input-field right myradio">
                                <input type="radio" name="tick1" id="all">
                                <label for="all" class="checkbox-text black-text" style="font-size: 12pt">
                                <span>تمام کلمات</span>
                                </label>
                                <input type="radio" name="tick1" id="words">
                                <label for="words" class="checkbox-text black-text" style="font-size: 12pt">
                                <span>هر کلمه</span>
                                </label>
                                </div>    
                                </div>
                        <button class="btn waves-effect waves-light create-btn z-depth-1 light-blue accent-3 left submit-form"
                                type="button">فیلتر کردن
                        </button>
                        <button class="btn waves-effect waves-light create-btn z-depth-1 light-blue accent-3 left submit-form"
                                type="button">برگرداندن فیلتر
                        </button>

                    </form>
                    <div class="clear margin-bottom-10"></div>
                </div>

                  
          
      
                </div>
                </div>
                </div>
                </div>
            <div class="input-field col s12 m12 l12 right mycheckbox">
                  <input type="checkbox" id="barber">
                  <label for="barber" class="checkbox-text margin-bottom-0">لطفا دوره / دوره های مورد نظر خود را انتخاب کنید.  </label>
             </div>
           <div class="row">
           <button class="btn col s1 m2 l2 offset-l5 waves-effect waves-light create-btn z-depth-1 light-blue accent-3 submit-form"
             type="button"> ثبت دروس انتخاب شده
          </button>
  
        <div class="col s12 l10 offset-l1">
        <?php 
          for ($i = 0; $i <= 10; $i++) {
            echo 
            '<div class="col s12 m4 l4 right">
                <div class="card z-depth-1 my-card hoverable">
                  <div class="card-content">
                  <div class="center">
                    <a href="course.php"><img src="images/50.jpg"></a> 
                  </div>
                    <h3 class="title"><a href="course.php">استانداردهای گزارش پژوهش های بالينی(CONSORT)</a></h3>
                    <p>
                      <small>دسته: <b>پژوهش پزشکی</b></small>
                    </p>
                  </div>
                </div>
            </div>';
        } 
       ?>                     
      </div>
    <!--end container-->
<script>

</script>
<?php include 'footer.php'; ?>
</body>

</html>



