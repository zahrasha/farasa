<?php include 'head.php'; ?>
</head>
<body>
<?php include 'header.php'; ?>
    <!--start container-->
    <div class="container">
        <div class="row margin-bottom-0">
            <!--Top title-->
            <div class="col s12 m12 l12">
              <h5 class="breadcrumbs-title "><i class="mdi-action-class"></i>دوره های من</h5>
            </div>
        </div>
      <div class="row">
        <?php 
          for ($i = 0; $i <= 10; $i++) {
            echo 
            '<div class="col s12 m4 l3 right">
                <div class="card z-depth-1 my-card hoverable">
                  <div class="card-content">
                  <div class="center">
                    <a href="course.php"><img src="images/50.jpg"></a> 
                    <img src="images/ISBN-978-600-6135-00-7.jpg">
                  </div>
                    <h3 class="title"><a href="course.php">استانداردهای گزارش پژوهش های بالينی(CONSORT)</a></h3>
                    <p>
                      <small>دسته: <b>پژوهش پزشکی</b></small>
                      <small> / موسسه فرزان</small>
                    </p>
                  </div>
                </div>
            </div>';
        } 
        ?>

      </div>
      </div>
    <!--end container-->

<?php include 'footer.php'; ?>

<script>
  Materialize.toast("شما با موفقيت وارد شديد. خوش آمديد!", 3000);
</script>
</body>

</html>




