<?php include 'head.php'; ?>
<style>
.input-field p{
margin-right:30px;
color:#bbb;
font-size:9px;
display:block;
padding:5px;
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
                <a href="">صفحه اصلی</a> /
               <a href="">مشخصات کاربر</a> /
                تغییر رمز عبور</h5>
            </div>
        </div>
        <div class="row">
        <div class="card z-depth-1  col s12 m6 l4 offset-l4  white">
                    <form action="#">
                        <div class="col s12  card-content right">
                        <div class="input-field ">
                                <i class="mdi-action-lock prefix"></i>
                                <input id="pass" type="password" class="validate">
                                <label for="pass" class=""> رمز عبور قبلی</label>
                            </div>
                            <div class="input-field ">
                                <i class="mdi-action-lock prefix"></i>
                                <input id="re-pass" type="password" class="validate">
                                <label for="re-pass" class=""> رمز عبور</label>
                                <p class="right">از حروف، اعداد و نمادها استفاده كنيد·</p>
                                <br>
                                <br>
                                <p class="right">حداقل 8 کاراکتر، حداكثر 15 كاراكتر.</p>
                            </div>
                            <br>
                            <div class="input-field ">
                                <i class="mdi-action-lock prefix"></i> 
                                <input id="gymname" type="password" class="validate">
                                <label for="gymname" class=""> تکرار رمز عبور: </label>
                            </div>
                            <br>
                            <div class="clear"></div>
                            <button class="btn waves-effect waves-light z-depth-1 light-blue accent-3 left submit-form" type="button">
                            ارسال
                            </button>
                            <button class="btn waves-effect waves-light  z-depth-1 grey darken-2 right" type="button">
                            انصراف
                            </button>
							<div class="clear margin-bottom-10"></div>

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



