<?php include 'head.php'; ?>
<style>
.my-list li{
    line-height:2.5em;
    margin-right:20px;
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
                <a href="index.php">صفحه اصلی</a> /
                <a href="course.php"> دوره انتخابی</a> /
                <a href="test.php"> آزمون</a> /
                اماده پاسخ گویی </h5>
            </div>
        </div> 
    </div>
    <div class="row ">
    <div class="card col l5 m8 s8 offset-l4">
    <div class="row">
    <ul class="my-list  right " >
        <li>سؤالات:</li>
        <li>بیشترین نمره:</li>
        <li>تعداد ارسال مجاز:</li>
        <li>تاريخ شروع:</li>
        <li>تاريخ اتمام:</li> 
    </ul>
   <ul class="my-list  right ">
    <li>8</li>
    <li>8</li>
    <li>0 / 2</li>
    <li>08:00  1390-01-01</li>
    <li>23:00 1400-12-29</li>
   </ul>
   <ul class="my-list right ">
   <li>مدت زمان آزمون: </li>
   <li>ناشناس: </li>
   <li> نمایش:</li> 
   <li> دستورالعمل ها:</li>
   </ul>
   <ul class="my-list right  ">
   <li>8  دقیقه</li>
   <li>خیر</li>
   <li>نمايش تمامي سوالات </li>
   <li>---</li>
   </ul>
   </div>
  <a href="questionnaire.php"> <button class="btn waves-effect waves-light create-btn z-depth-1 light-blue accent-3 right submit-form"
    type="button">
       شروع آزمون                 
    </button></a>
    <button class="btn waves-effect waves-light create-btn z-depth-1  grey darken-2 accent-3 right submit-form"
    type="button">
    انصراف               
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



