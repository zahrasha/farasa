<?php include 'head.php'; ?>
</head>
<style>
.first-col-shrink tr th:first-child {
    width: 15%;
}
</style>
<body>
<?php include 'header.php'; ?>
    <!--start container-->
    <div class="container">
        <div class="row margin-bottom-0">
            <!--Top title-->
            <div class="col s12 m12 l12">
                <h5 class="breadcrumbs-title "><i class="mdi-action-home"></i>صفحه اصلی / دوره انتخابی / آزمون </h5>
            </div>
        </div>
        <div class="row">
            <div class="col s12 m4 l3 right">
                <?php include 'sidebar.php'; ?>
            </div>
            <div class="col s12 m8 l9 ">
            
                <table class="responsive-table striped centered farzan-table  first-col-shrink">
                <thead class="white-text purple">
                <tr class="my-table">
                    <th>ردیف</th>
                    <th>         عنوان	</th>
                    <th> 	     وضعيت</th>
                    <th>		 تاريخ شروع</th>
                    <th>	    تاريخ اتمام</th>
                    <th>	    تعداد ارسال مجاز</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>     آزمون نهایی</td>
                    <td><a href="azmon.php">	آماده پاسخ‌گويي</a></td>
                    <td>     ۱۳۹۰-۰۱-۰۱ ۰۸:۰۰ </td>
                    <td>     ۱۴۰۰-۱۲-۲۹ ۲۳:۰۰</td>
                    <td> 	2/2</td>
                   
                </tr>
                </tbody>
                </table>
                <div class="row margin-0">
                <div class="table-option-holder">
                <p>ارسالهاي شما</p>
                </div>
                <div class="clear"></div>
                <table class="responsive-table striped centered farzan-table  first-col-shrink">
                <thead class="white-text purple">
                <tr class="my-table">
                    <th>ردیف</th>
                    <th>         عنوان	</th>
                    <th> 	    	تاريخ آزمون</th>
                    <th>		 مدت زمان حضور در آزمون</th>
                    <th>	    نمره</th>
                    <th>	   	ارسال</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>     آزمون نهایی</td>
                    <td>	۱۳۹۷-۱۱-۲۲ ۲۳:۴۹</td>
                    <td> 	55ثانيه</td>
                    <td>	4/8</td>
                    <td><a href="">	مرور نتايج</a></td>
                   
                </tr>
                <tr>
                    <td>1</td>
                    <td>     آزمون نهایی</td>
                    <td>	۱۳۹۷-۱۱-۲۲ ۲۳:۴۹</td>
                    <td> 	55ثانيه</td>
                    <td>	4/8</td>
                    <td> 	<a href="">	مرور نتايج</a></td>
                   
                </tr>
                </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
    <div class="clear"></div>

    <!--end container-->

<?php include 'footer.php'; ?>
</body>

</html>
