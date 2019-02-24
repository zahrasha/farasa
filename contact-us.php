<?php include 'head.php'; ?>
</head>
<body>
<?php include 'header.php'; ?>
    <!--start container-->
    <div class="container">
        <div class="row margin-bottom-0">
            <!--Top title-->
            <div class="col s12 m12 l12">
                <h5 class="breadcrumbs-title "><i class="mdi-editor-mode-comment"></i>تماس با پشتيباني</h5>
            </div>
        </div>
        <div class="row">
        <div class="col l12 m12 s12">
            <div class="col s12 right">
                <div class=" card z-depth-1  card-content col s12 l10 offset-l1 white">
                    <form action="#">
        <div class="col s12 m6 l4 right">
            <div class="input-field ">
                <i class="mdi-social-person prefix"></i>
                <input id="username-cu" type="text" class="validate">
                <label for="username-cu" class="">نام و نام خانوادگی</label>
            </div>
        </div>
        <div class="col s12 m6 l4 right">
            <div class=" input-field ">
                <i class="mdi-content-mail prefix"></i>
                <input id="username-az" type="text" class="validate">
                <label for="username-az" class="">آدرس پست الكترونيكي</label>
            </div>
        </div>
        <div class="col s12 m6 l4 right">
            <div class="input-field ">
                <i class="mdi-action-view-agenda prefix"></i>
                <input id="username-sw" type="text" class="validate">
                <label for="username-sw" class="">موضوع</label>
            </div>
        </div>
        <div class="col s12 m12 l12 right">
            <div class="input-field">
                <i class="mdi-editor-mode-comment prefix"></i>
                <textarea id="icon_prefix2" class="materialize-textarea"></textarea>
                <label for="icon_prefix2">بدنه</label>
            </div>
        </div>
        
        <div class="clear"></div>
        <button class="btn waves-effect waves-light create-btn z-depth-1 light-blue accent-3 left submit-form"
          type="button">جستجو
        </button>
        <div class="clear"></div>
        </form>
        </div>     
        </div>     
        </div>     
        </div>
        
        </div>
    </div>
    <!--end container-->

<?php include 'footer.php'; ?>
</body>

</html>