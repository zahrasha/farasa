<?php include 'head.php'; ?>
<link href="js/plugins/dropify/css/dropify.min.css" type="text/css" rel="stylesheet" media="screen,projection">

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
                <a href=""> دوره انتخابی</a> / 
                عکس </h5>
            </div>
        </div>
    <div class="row ">
    <div class="col s12 m4 l3 right">
            <?php include 'sidebar.php'; ?>
    </div>
    <div class="col s8 l6 offset-l2 card left">  
        <div class="col s12 m8 l6 margin-upload-btn right margin-top-10">
            <label for="input-file-max-fs">بارگذاري عكس جديد</label>
            <input type="file" id="input-file-max-fs" class="dropify-fa narrow" data-max-file-size="200K"/>
        </div>
        <div class="clear"></div>
        <button class="btn waves-effect waves-light create-btn z-depth-1 light-blue accent-3 left submit-form" type="button">
          ذخیره
        </button>
        <button class="btn waves-effect waves-light create-btn z-depth-1 grey darken-2 left" type="button">
           انصراف
        </button>

    </div>
    </div>
    <!--end container-->

<?php include 'footer.php'; ?>
<script type="text/javascript" src="js/plugins/dropify/js/dropify.min.js"></script>
<script>
    // Basic
    $('.dropify').dropify();

    // Translated
    $('.dropify-fa').dropify({
        messages: {
            default: 'یک فایل بر روی صفحه بکشید یا کلیک کنید',
            replace: 'تغییر فایل',
            remove: 'حذف کردن',
            error: 'متاسفانه حجم فایل بیشتر از 200 کیلو بایت است.'
        }
    });


</script>

</body>

</html>



