<?php include 'head.php'; ?>
</head>
<body>
<?php include 'header.php'; ?>
    <!--start container-->
    <div class="container">
        <div class="row margin-bottom-0">
            <!--Top title-->
            <div class="col s12 m12 l12">
                <h5 class="breadcrumbs-title "><i class="mdi-action-home"></i>آزمون ها </h5>
            </div>
        </div>


        <div>
        <form method="get" action="/elearning2/tools/my_tests.php" enctype="multipart/form-data" >
<table class="data static" summary="" rules="cols">
<thead>
<tr>
	<th >&nbsp;</th>	
    <th>عنوان</th>
	<th>وضعيت</th>
	<th>تاريخ شروع</th>
	<th>تاريخ اتمام</th>
	<th>تعداد ارسال مجاز</th>
</tr>
</thead>
<tbody>
<tr><td>&nbsp;</td><td>
    <strong>
    <a href="tools/test_intro.php?tid=28">آزمون نهایی</a>
    </strong>
    </td><td>
    <em><strong>آماده پاسخ‌گويي</strong></em></td>
    <td>&#1777;&#1779;&#1785;&#1776;&#1776;&#1777;&#1776;&#1777;
    &#1776;&#1784;&#1776;&#1776;</td><td>&#1777;&#1780;&#1776;&#1776;
    &#1777;&#1778;&#1778;&#1785; &#1778;&#1779;:&#1776;&#1776;</td><td>
    0/2</td></tr>
    </tbody>
     </table>
    </form>
    </div>
    <br>
    <br>
    <span>ارسالهاي شما:</span>
    <br>
    <br>
    <form method="get" action="/elearning2/tools/my_tests.php"
     enctype="multipart/form-data" >
<table class="data static collection" 
summary="" rules="cols">
    <thead>
<tr class="collection  ">
	<th >&nbsp;</th>	
    <th >عنوان</th>
	<th >تاريخ آزمون</th>
	<th >مدت زمان حضور در آزمون</th>
	<th >نمره</th>
	<th >ارسال </th>
</tr>
</thead>

<tbody>
<tr><td colspan="5">چيزي پيدا نشد.</td></tr></tbody>
</table>
    </form>
    </div> 
   
    <!--end container-->

<?php include 'footer.php'; ?>
</body>

</html>
