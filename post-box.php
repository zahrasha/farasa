<?php include 'head.php'; ?>
<style>
.prefix-icon
{
  font-size:25px; 
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
                <h5 class="breadcrumbs-title "><i class="mdi-action-home"></i> صفحه اصلی / صندوق پستی</h5>
            </div>
            </div>
  <div class="row">
        <div class="col s12 m4 l3 right">
            <?php include 'sidebar.php'; ?>
            </div>
            <table class="col s12 m7 l9 responsive-table striped centered farzan-table first-col-shrink">
                <thead class="white-text purple">
                  <tr class="my-table">
                  <th>ردیف</th>
                  <th>	از</th>
                  <th>موضوع</th>
                  <th>	تاريخ</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                   <td>1</td>
                   <td>چيزي پيدا نشد.</td>
                   <td></td>
                   <td></td>
                </tr>
                </tbody>
                <tbody>
                <tr>
                <td></td>
                <td> <button class="btn waves-effect waves-light create-btn z-depth-1 light-blue accent-3 right submit-form"
                                type="button">حذف
                        </button></td>
                <td></td>
                
                <td><a href=""> <i class="mdi-editor-insert-invitation prefix prefix-icon"></i></a></td>
                </tr>
                </tbody>
                </table>
               
                </div>    
    </div>
    <!--end container-->

<?php include 'footer.php'; ?>
</body>

</html>



