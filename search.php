<?php include 'head.php'; ?>
<style>


.form-redio input {
    margin-top:15px;
    font-size:12px !important;
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
    <div class="row container">
    <div class="card white my-card z-depth-1 list-container col s12 m8 l8 offset-l2 left">
    <div class="input-field form-redio right myradio" style="margin-left: 20px;">
    

    <div class="col  s12 m8 l4  offset-l2 right">
    <label  class="blue-text"> کلمات </label><br>
    <select class=" " >
    <option value="1"><small> نمایش محتوا</small> </option>
    </select>
    </div>
    <div class="input-field col  s12 m8 l4  offset-l2 right myradio">
    <span style="display:block; " >تطابق: </span>
        <input type="radio" name="tick-a" id="all-1">
        <label for="all-1" class="checkbox-text black-text" style="font-size: 12pt">
        <span>تمام کلمات</span>
        </label>
        <input type="radio" name="tick-a" id="words1">
        <label for="words1" class="checkbox-text black-text" style="font-size: 12pt">
        <span>هر کلمه</span>
        </label>
    </div>
    <div class="input-field col  s12 m8 l4  offset-l2 right myradio">
    <span style="display:block; " > نتايج را پيدا کن در </span>
        <input type="radio" name="tick-s" id="all-2">
        <label for="all-2" class="checkbox-text black-text" style="font-size: 12pt">
        <span> تمام دوره هاي قابل دسترس </span>
        </label>
    </div>
    <div class="input-field col  s12 m8 l4  offset-l2 right myradio">
    <span style="display:block; " > جستجو در </span>
        <input type="radio" name="tick-v" id="all-g">
        <label for="all-g" class="checkbox-text black-text" style="font-size: 12pt">
        <span>همه  </span>
        </label>
        <input type="radio" name="tick-v" id="all-f">
        <label for="all-f" class="checkbox-text black-text" style="font-size: 12pt">
        <span> محتوا </span>
        </label>
        <input type="radio" name="tick-v" id="all-d">
        <label for="all-d" class="checkbox-text black-text" style="font-size: 12pt">
        <span> انجمن ها </span>
        </label>
    </div>
    <div class="input-field col  s12 m8 l4  offset-l2 right myradio">
    <span style="display:block; " > نمایش  </span>
        <input type="radio" name="tick-b" id="all-b">
        <label for="all-b" class="checkbox-text black-text" style="font-size: 12pt">
        <span> به عنوان صفحات محتواي شخصي   </span>
        </label><input type="radio" name="tick-b" id="all-n">
        <label for="all-n" class="checkbox-text black-text" style="font-size: 12pt">
        <span>گروه بندي بر اساس دوره  </span>
        </label><input type="radio" name="tick-b" id="all-m">
        <label for="all-m" class="checkbox-text black-text" style="font-size: 12pt">
        <span>گروه بندي بر اساس دوره </span>
        </label>
    </div>
    <div class="col  s12 m8 l4 right">
    <button class="btn waves-effect waves-light create-btn z-depth-1 light-blue accent-3 left submit-form"
      type="submit">جستجو
    </button>
    </div>
    </div>
    </div>
    </div>
    </div>
    <!--end container-->

<?php include 'footer.php'; ?>
</body>

</html>



