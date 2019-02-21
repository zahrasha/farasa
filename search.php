<?php include 'head.php'; ?>
<style>

.form-redio span {
    margin-top:15px;
    font-size:12px;
}
.form-redio input {
    margin-top:15px;
    font-size:12px !important;
}
.form-redio label {
    margin-top:15px;
    font-size:13px !important;
 
    
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
                <h5 class="breadcrumbs-title "><i class="mdi-action-home"></i> صفحه اصلی / جستجو  </h5>
            </div>
        </div>
    </div>
    <div class="row">
    <div class="col s12 m4 l3 right">
            <?php include 'sidebar.php'; ?>
            </div>
    <div class="row container">
    <div class="card white my-card z-depth-1 list-container col s12 m6 l7 offset-l1 left">
    <label  class="blue-text"> کلمات </label>
    <select class=" " >
    <option value="1"> نمایش محتوا </option>
    </select>
    <div class="input-field form-redio right myradio" style="margin-left: 20px;">
    <span style="display:block; " >تطابق: </span>
    <input id="radio-5" name="radio-5" type="radio" checked>
    <label for="radio-5" class="checkbox-text black-text blue-text radio-label">تمام کلمات</label>
    <input id="radio-6" name="radio-5" type="radio">
    <label  for="radio-6" class="blue-text  radio-label">هر کلمه ای</label>
    <span style="display:block; " > نتايج را پيدا کن در </span>
    <input id="radio-7" name="radio-7" type="radio">
    <label for="radio-7" class="blue-text radio-label"> تمام دوره هاي قابل دسترس </label>
    <span style="display:block; " > جستجو در </span>
    <input id="radio-8" name="radio-8" type="radio">
    <label for="radio-8" class="blue-text radio-label"> همه  </label>
    <input id="radio-9" name="radio-8" type="radio">
    <label for="radio-9" class="blue-text radio-label"> محتوا </label>
    <input id="radio-0" name="radio-8" type="radio">
    <label for="radio-0" class="blue-text radio-label">انجمن ها  </label>
    <span style="display:block;" > نمایش </span>
    <input  id="radio-a" name="radio-a" type="radio">
    <label style="display:block;" for="radio-a" class="blue-text radio-label"> به عنوان صفحات محتواي شخصي  </label>
    <input  id="radio-b" name="radio-a" type="radio">
    <label style="display:block;" for="radio-b" class="blue-text radio-label">گروه بندي بر اساس دوره  </label>
    <input  id="radio-c" name="radio-a" type="radio">
    <label style="display:block;"  for="radio-c" class="blue-text radio-label">گروه بندي بر اساس دوره </label>
    <button style="margin-top:20px; margin-bottom:30px;" class="btn blue"><a class=" white-text" href="search.php"> جستجو </a></button>
   
    </div>
    </div>
    </div>
    <!--end container-->

<?php include 'footer.php'; ?>
</body>

</html>



