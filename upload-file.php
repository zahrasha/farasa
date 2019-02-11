<?php include 'head.php'; ?>
<style>
  .file-icon{
    border-radius: 0;
    width: 20px;
    height: 20px;
    margin: 0;
  }
</style>
</head>
<body>
<?php include 'header.php'; ?>
    <!--start  container-->
    <div class="container">
        <div class="row margin-bottom-0">
            <!--Top title-->
            <div class="col s12 m12 l12">
                <h5 class="breadcrumbs-title "><i class="mdi-device-storage"></i>ذخيره سازي فايل</h5>
            </div>
        
        </div>
<<<<<<< HEAD
        <div class="row">
    <div class="col s6  offset-s6" >
<span>فضای کاری</span>
<div><form  action="">
<select name="" id="">
<option value="">فایل دوره ها</option>
<option value="">فایل های من</option>
</select>
<button class="btn blue waves-effect 
waves-light" 
type="submit" name="action">برو!
<i class="">
   </i>
  </button>
</form><br><br>
<span >مسير فلدر جاري:</span>
<a href="#">صفحه اصلی دوره</a>
</div><br><br><br></div></div>
<div class="row">
<div class="col l8 offset-l2">

<form action="">
        <table class="responsive-table striped centered farzan-table  first-col-shrink">
                <thead class="white-text purple">
                <tr class="my-table">

                <th>فايل
                <div class="">
					      <input id="check" type="checkbox" class=" check" checked>
                <label for="check"><span class="  icon"></span>
                </label>

			        	</div>
                </th>

                    <th>مؤلف</th>
                    <th>بازنگري ها</th>
                    <th>توضيحات	</th>
                    <th>اندازه</th>
                    <th>تاريخ	</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><a href="">آزمون نهایی	</a></td>
                    <td>آماده پاسخ‌گويي	</td>
                    <td>01/1/1391 8:00</td>
                    <td>29/12/1400 </td>
                    <td>0/2</td>
                    
                </tr>
                </tbody>
                </table>
                </form>
<button  class="btn  blue  waves-effect 
waves-light" 
type="submit" name="action">دانلود
<i class="">
   </i>
  </button>
=======

        
    <div class="row margin-0">
            <div class="table-option-holder">
                <p>مسير فلدر جاري:	صفحه اصلي دوره</p>
                <ul class="table-options">
                    <li>
                        <a class="btn-floating btn-flat waves-effect waves-light teal darken-3 white-text disabled tooltip-top "
                           title="ذخیره"
                        >
                            <i class="mdi-content-save"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="clear"></div>
            <table class="responsive-table striped centered farzan-table first-col-shrink" id="pay-table">
                <thead class="white-text purple">
                <tr class="my-table">
                    <th>ردیف</th>
                    <th>    
                      <div class="mycheckbox">
                            <input type="checkbox" id="checkAll">
                            <label for="checkAll" class="checkbox-text margin-0"> </label>
                      </div>
                    </th>
                    <th>فایل</th>
                    <th>مولف</th>
                    <th>بازنگری ها</th>
                    <th>توضیحات</th>
                    <th>اندازه</th>
                    <th>تاریخ</th>
                </tr>
                </thead>
                <tbody>
                <tr data-username="نام کاربر" data-gym-name="نام باشگاه" data-activity-type="نوع غعالیت" data-gym-price="سهم باشگاه">
                    <td>1</td>
                    <td>
                        <div class="mycheckbox">
                            <input type="checkbox" id="check1">
                            <label for="check1" class="checkbox-text margin-0"> </label>
                        </div>
                    </td>
                    <td><img src="images/word.png" class="file-icon" width="20px"> Assignment.doc</td>
                    <td>موسسه فرزان</td>
                    <td>-</td>
                    <td><a href="#">0 توضیحات</a></td>
                    <td>24.5 KB</td>
                    <td>1390-12-22 10:15</td>
                </tr>
                <tr data-username="نام کاربر" data-gym-name="نام باشگاه" data-activity-type="نوع غعالیت" data-gym-price="سهم باشگاه">
                    <td>2</td>
                    <td>
                        <div class="mycheckbox">
                            <input type="checkbox" id="check2">
                            <label for="check2" class="checkbox-text margin-0"> </label>
                        </div>
                    </td>
                    <td><img src="images/excel.png" class="file-icon" width="20px"> Assignment.xl</td>
                    <td>موسسه فرزان</td>
                    <td>-</td>
                    <td><a href="#">0 توضیحات</a></td>
                    <td>24.5 KB</td>
                    <td>1390-12-22 10:15</td>
                </tr>
                <tr data-username="نام کاربر" data-gym-name="نام باشگاه" data-activity-type="نوع غعالیت" data-gym-price="سهم باشگاه">
                    <td>3</td>
                    <td>
                        <div class="mycheckbox">
                            <input type="checkbox" id="check3">
                            <label for="check3" class="checkbox-text margin-0"> </label>
                        </div>
                    </td>
                    <td><img src="images/pdf.png" class="file-icon" width="20px"> Assignment.pdf</td>
                    <td>موسسه فرزان</td>
                    <td>-</td>
                    <td><a href="#">0 توضیحات</a></td>
                    <td>24.5 KB</td>
                    <td>1390-12-22 10:15</td>
                </tr>
                
                </tbody>
            </table>
            <div class="clear"></div>
            <ul class="pagination center">
                <li class="disabled waves-effect padding-0"><a href="#">ابتدا</a></li>
                <li class="disabled waves-effect padding-0"><a href="#"><i class="mdi-navigation-chevron-right"></i></a>
                </li>
                <li class="active"><a href="#">1</a></li>
                <li class="waves-effect"><a href="#">2</a></li>
                <li class="waves-effect"><a href="#">3</a></li>
                <li class="waves-effect"><a href="#">4</a></li>
                <li class="waves-effect"><a href="#">5</a></li>
                <li class="waves-effect padding-0"><a href="#"><i class="mdi-navigation-chevron-left"></i></a></li>
                <li class="waves-effect padding-0"><a href="#">انتها</a></li>
                <li class="left">صفحه <span class="page-count">1</span> از <span class="total-page">5</span></li>
            </ul>
            <div class="clear"></div>
    </div>

>>>>>>> 10de6977c890d9dc1788a5a88cca55a862261c28

    </div>
      <!--end container-->

<?php include 'footer.php'; ?>
<script>
    $("#checkAll").on("change",function(){
      if($(this).is(':checked')){
          $("td .mycheckbox input").prop("checked",true)
      }else{
        $("td .mycheckbox input").prop("checked",false)
      }
    })
</script>
</body>

</html>




