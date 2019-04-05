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
                <h5 class="breadcrumbs-title "><i class="mdi-device-storage"></i><a href="">صفحه اصلی</a> /
                <a href=""> دوره انتخابی</a> /
                ذخیره سازی فایل</h5>
            </div>
        </div>
        <div class="row">
        <div class="col s12 m4 l3 right">
            <?php include 'sidebar.php'; ?>
            </div>
            <div class="col s12 m6 l2 right">
                    <div class="input-field farzan-select">
                        <i class="mdi-action-track-changes prefix "></i>
                        <label>فضاي کاري</label>
                        <select title="فضاي کاري">
                            <option value="1">گزینه 1</option>
                            <option value="2">گزینه 2</option>
                            <option value="3">گزینه 3</option>
                        </select>
                    </div>
                </div>
                <div class="col s12 m6 l3 right">
                    <button class="btn waves-effect waves-light create-btn z-depth-1 light-blue accent-3 right submit-form" style="margin-top: 20px;" type="button">
                        برو!
                    </button>
                </div>
       
            <div class="col s12 m8 l9">
            <div class="table-option-holder">
                    <p>مسير فلدر جاري:	صفحه اصلي دوره</p>
                    <ul class="table-options">
                        <li>
                            <a class="btn-floating btn-flat waves-effect waves-light teal darken-3 white-text disabled tooltip-top "
                            id="saveFile"
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
                    <tr data-filename="Assignment.docx" >
                        <td>1</td>
                        <td>
                            <div class="mycheckbox">
                                <input type="checkbox" id="check1">
                                <label for="check1" class="checkbox-text margin-0"> </label>
                            </div>
                        </td>
                        <td><img src="images/word.png" class="file-icon" width="20px">Assignment.docx</td>
                        <td>موسسه فرزان</td>
                        <td>-</td>
                        <td><a href="#">0 توضیحات</a></td>
                        <td>24.5 KB</td>
                        <td>1390-12-22 10:15</td>
                    </tr>
                    <tr data-filename="Assignment.xlsx" >
                        <td>2</td>
                        <td>
                            <div class="mycheckbox">
                                <input type="checkbox" id="check2">
                                <label for="check2" class="checkbox-text margin-0"> </label>
                            </div>
                        </td>
                        <td><img src="images/excel.png" class="file-icon" width="20px">Assignment.xlsx</td>
                        <td>موسسه فرزان</td>
                        <td>-</td>
                        <td><a href="#">0 توضیحات</a></td>
                        <td>24.5 KB</td>
                        <td>1390-12-22 10:15</td>
                    </tr>
                    <tr data-filename="Assignment.pdf" >
                        <td>3</td>
                        <td>
                            <div class="mycheckbox">
                                <input type="checkbox" id="check3">
                                <label for="check3" class="checkbox-text margin-0"> </label>
                            </div>
                        </td>
                        <td><img src="images/pdf.png" class="file-icon" width="20px">Assignment.pdf</td>
                        <td>موسسه فرزان</td>
                        <td>-</td>
                        <td><a href="#">0 توضیحات</a></td>
                        <td>24.5 KB</td>
                        <td>1390-12-22 10:15</td>
                    </tr>
                    
                    </tbody>
                </table>
                </div>
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
        </div>

    
      <!--end container-->

<?php include 'footer.php'; ?>
<script>
$("#saveFile").on('click',function(e){
    e.preventDefault();
    var files = [];
    $("#pay-table td input[type='checkbox']").each(function(e){
        if($(this).is(":checked"))
        {
            var file = $(this).parents("tr").attr("data-filename")
            files.push(file);
        }
    })
    console.log(files)

})
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




