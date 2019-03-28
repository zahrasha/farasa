<?php include 'head.php'; ?>
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
               <a href="">اعتبار و پرداخت</a> /
                تغییر پست الکترونیک</h5>
            </div>
        </div>
        <div class="row">
        <div class="card z-depth-1  col s12 m6 l4 offset-l4  white">
                    <form action="#">
                        <div class="col s12  card-content right">
                        <div class="input-field ">
                                <i class="mdi-action-lock prefix"></i> 
                                <input id="gymname" type="password" class="validate">
                                <label for="gymname" class=""> رمز عبور</label>
                            </div>
                            <div class="input-field ">
                                <i class="mdi-content-mail prefix"></i>
                                <input id="gymname" value="user2911635342@farasa.net" type="text" class="validate">
                                <label for="gymname" class=""> آدرس پست الکترونیک  </label>
                            </div>

                            <br>
                            <div class="clear"></div>
                            <button class="btn waves-effect waves-light create-btn z-depth-1 grey darken-2 left" type="button">
                            انصراف
                            </button>
                            <button class="btn waves-effect waves-light create-btn z-depth-1 light-blue accent-3 left submit-form" type="button">
                            ارسال
                            </button>
							<div class="clear"></div>

                            </div>
                            </div>
                            </form>
        </div>
        </div>
    </div>
    <!--end container-->

<?php include 'footer.php'; ?>
</body>

</html>
