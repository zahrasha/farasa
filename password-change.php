<?php include 'head.php'; ?>
</head>
<body>
<?php include 'header.php'; ?>
    <!--start container-->
    <div class="container">
        <div class="row margin-bottom-0">
            <!--Top title-->
            <div class="col s12 m12 l12">
                <h5 class="breadcrumbs-title "><i class="mdi-action-home"></i>صفحه اصلی / مشخصات کاربر / تغییر رمز عبور</h5>
            </div>
        </div>
        <div class="row">
        <div class="card z-depth-1  col s12 m6 l4 offset-l4  white">
                    <form action="#">
                        <div class="col s12  card-content right">
                        <div class="input-field ">
                                <i class="mdi-maps-local-offer prefix"></i>
                                <input id="gymname" type="text" class="validate">
                                <label for="gymname" class=""> رمز عبور قبلی : </label>
                            </div>
                            <div class="input-field ">
                                <i class="mdi-maps-local-offer prefix"></i>
                                <input id="gymname" type="text" class="validate">
                                <label for="gymname" class=""> رمز عبور: </label>
                           <p class="right">· ﻿از حروف ، اعداد و نمادها استفاده كنيد</p>
                            <p class="right">· ﻿حداقل 8 کاراکتر، حداكثر 15 كاراكتر</p>
                            </div>
                            <br><br>
                            <div class="input-field ">
                                <i class="mdi-maps-local-offer prefix"></i>
                                <input id="gymname" type="text" class="validate">
                                <label for="gymname" class=""> تکرار رمز عبور: </label>
                            </div>

                            <button class="btn waves-effect waves-light create-btn z-depth-1 light-blue accent-3 left submit-form"
                                type="button">ارسال
                        </button>
                        <button class="btn waves-effect waves-light create-btn z-depth-1 light-blue accent-3 left submit-form"
                                type="button">انصراف 
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



