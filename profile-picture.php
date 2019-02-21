<?php include 'head.php'; ?>
</head>
<body>
<?php include 'header.php'; ?>
    <!--start container-->
    <div class="container">
        <div class="row margin-bottom-0">
            <!--Top title-->
            <div class="col s12 m12 l12">
                <h5 class="breadcrumbs-title "><i class="mdi-action-home"></i> صفحه اصلی/ مشخصات کاربر/ عکس </h5>
            </div>
        </div>
    <div class="row ">
    <div class="col s12 m4 l3 right">
            <?php include 'sidebar.php'; ?>
    </div>
    <div class="col s8 l6 offset-l2 card left">
    <span>بارگذاري عكس جديد</span>
    <button class="btn waves-effect waves-light create-btn z-depth-1 light-blue accent-3 left submit-form" type="button">
        <a class="white-text" href=""> choose file    </a>             
    </button>
    <p for="btn">no file chosen  <br>
        (gif, jpg, png)    </p>
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
</body>

</html>



