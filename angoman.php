<?php include 'head.php'; ?>
<link rel="stylesheet" href="./css/plugins/sweetalert2.min.css">

<style>
.table thead {
  background:#0e92ef;
  color:#ebf8f9;
} 
.membership-icon{
    color: #0e92ef;
    font-size: 21px;
    position: relative;
    top: 4px;
    cursor: pointer;
}
</style>
</head>
<body>  
<?php include 'header.php'; ?>
    <!--start container-->
    <div class="container">
        <div class="row margin-bottom-0">
            <!--Top title-->
             <h5 class="breadcrumbs-title "><i class="mdi-social-people"></i><a href="index.php">صفحه اصلی</a> /
              انجمن ها </h5>
            </div>
           </div>
            <div class="row">
            <div class="col s12 m4 l3 right">
            <?php include 'sidebar.php'; ?>
            </div>

            
            <div class="col s12 m8 l9 right">

            <table class="table responsive-table striped centered farzan-table z-depth-1">
                <thead class="white-text ">
                <tr class="my-table">
                    <th>انجمن</th>
                    <th style="max-width: 200px;width: 400px;">توضیحات</th>
                    <th>تعداد موضوعات</th>
                    <th>تعداد ارسال</th>
                    <th>آخرين ارسال</th>
                   
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td> <i class="membership-icon mdi-content-add-circle add tooltip-right" title="عضویت"></i> <a href="#">انجمن CONSORT در ایران </a></td>
                    <td style="font-size: 12px !important;line-height: 25px !important;">
                    پژوهشگران ممکن است به رویداد هایی برخورد کنند که قضاوت در مورد جدی بودن آنها آسان نباشد. در این انجمن شما می توانید نظرات و تجربیات خود را در باره AE ها و نحوه قضاوت در مورد جدی بودن آنها برای گزارش دهی به اشتراک بگذارید.
                    </td>
                    <td> 0 </td>
                    <td> 0 </td>
                    <td>1388/12/24</td>
                </tr>
                <tr>
                    <td><i class="membership-icon mdi-content-remove-circle remove tooltip-right" title="لغو عضویت"></i> <a href="#">انجمن CONSORT در ایران </a></td>
                    <td style="font-size: 12px !important;line-height: 25px !important;">
                    پژوهشگران ممکن است به رویداد هایی برخورد کنند که قضاوت در مورد جدی بودن آنها آسان نباشد. در این انجمن شما می توانید نظرات و تجربیات خود را در باره AE ها و نحوه قضاوت در مورد جدی بودن آنها برای گزارش دهی به اشتراک بگذارید.
                    </td>
                    <td> 0 </td>
                    <td> 0 </td>
                    <td>1388/12/24</td>
                </tr>
                </tbody>
            </table>
             
            </div>
    </div>
          


        </div>

    </div>
    <!--end container-->

<?php include 'footer.php'; ?>

<script src="js/plugins/sweetalert2.min.js"></script>

<script>
    $(".membership-icon").on("click",function(e){
        var self = $(this);
        if($(this).hasClass("add")){
            swal({
                title: 'آیا شما از این کار مطمئن هستید؟',
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#00b0ff',
                cancelButtonColor: '#d33',
                confirmButtonText: 'تایید',
                cancelButtonText:'لغو'
            }).then((result) => {
                if (result.value) {
                    swal(
                        'عضویت شما با موفقیت انجام شد!',
                        'شما با موفقيت به عضويت انجمن گزارش بی خطری در آمده ايد. پيامهاي ارسال شده به اين انجمن به پست الکترونيکي شما ارسال خواهد شد. براي ويرايش آدرس پست الکترونيکي خود، مشخصات خود را مشاهده نماييد.',
                        'success',
                    )
                }
            }).then(function(){
                self.toggleClass("mdi-content-remove-circle mdi-content-add-circle add remove");
                self.tooltipster("destroy");
                self.attr("title","لغو عضویت").tooltipster();
            })
        }else{
            swal({
                title: 'آیا شما از این کار مطمئن هستید؟',
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#00b0ff',
                cancelButtonColor: '#d33',
                confirmButtonText: 'تایید',
                cancelButtonText:'لغو'
            }).then((result) => {
                if (result.value) {
                    swal(
                        'لغوعضویت شما با موفقیت انجام شد!',
                        '',
                        'success',
                    )
                }
            }).then(function(){
                self.toggleClass("mdi-content-remove-circle mdi-content-add-circle add remove");
                self.tooltipster("destroy");
                self.attr("title","عضویت").tooltipster();
            })
        }
    })
</script>
</body>

</html>



