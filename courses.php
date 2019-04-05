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
                <a href=" index.php">صفحه اصلی</a> /
                  دوره های من 
                </h5>
            </div>
        </div>
      <div class="row">
        <div class="col s12 l10 offset-l1">
        <?php 
          for ($i = 0; $i <= 10; $i++) {
            echo 
            '<div class="col s12 m6 l4 right">
                <div class="card z-depth-1 my-card hoverable">
                  <div class="row card-content">
                  <div class="col s5 m5 l3" >
                    <a href="course.php"><img src="images/50.jpg"></a> 
                    </div>
                    <div class=" col s7 m7 l9 right">
                    <h3 class="title"><a href="course.php">استانداردهای گزارش پژوهش های بالينی(CONSORT)</a></h3>
                    <p>
                      <small>دسته: <b>پژوهش پزشکی</b></small>
                    </p>
                  </div>
                  </div>
                </div>
            </div>';
        } 
        ?>
        </div>

      </div>
      </div>
    <!--end container-->

<?php include 'footer.php'; ?>

<script>
$(function() {
    Materialize.toast("شما با موفقيت وارد شديد. خوش آمديد!", 3000);
  })
</script>
</body>

</html>




