<?php include 'head.php';?>
</head>
<body>
<?php include 'header.php';?>
    <!--start container-->
    <div class="container">
        <div class="row margin-bottom-0">
            <!--Top title-->
            <div class="col s12 m12 l12">
                <h5 class="breadcrumbs-title "><i class="mdi-action-assignment-ind"></i>صفحه اصلی/ مشخصات کاربر</h5>
            </div>
        </div>
        <div class="row">
        <div class="col s12 m4 l3 right">
            <?php include 'sidebar.php'; ?>
            </div>
            <div class="col s12 m8 l9 " id="MainLinks">
					<div class=" card z-depth-1 card-content white" style="padding: 15px;">
							<form action="#">
                            <div class="col s12">
								<h4 class="heading">اطلاعات مورد نياز</h4>
							</div>
						    <div class="col s12 m6 l4 right">
                                <div class="input-field ">
                                    <i class="mdi-social-person prefix"></i>
                                <input id="username" type="text" class="validate" value="09361503553" disabled >
                                <label for="username" class="">نام كاربري</label>
                            </div>
							</div>
							<div class="col s12 m6 l4 right ">
                  		            <div class="input-field emailsection">
                      		            <i class="mdi-communication-email prefix"></i>
                                        <input id="email" type="text" class="validate" value="user7853132148@farasa.net">
										<label for="email" class="">آدرس پست الكترونيك</label>
										<!-- <span class="helper-text" data-error="wrong" data-success="right">Helper text</span> -->
										<div class="right mycheckbox">
                                        <input type="checkbox" id="barber">
                                        <label for="barber" class="checkbox-text margin-bottom-0">پست الکترونيک را از ديگران مخفي کن</label>
                        	            </div>
							        </div>
							</div>
									<div class="input-field col s12 m6 l4 right mycheckbox">
                                        <input type="checkbox" id="no-email">
                                        <label for="no-email" class="checkbox-text margin-bottom-0">ایمیل ندارم</label>
                                    </div>
							<div class="clear margin-10"></div>

												<div class="col s12 m6 l4 right">
                            <div class="input-field ">
                                <i class="mdi-action-account-box prefix"></i>
                                <input id="firstname" type="text" class="validate farsi" value="شیما">
                                <label for="firstname" class="">نام</label>
                            </div>
												</div>
                        <div class="col s12 m6 l4 right">
                            <div class="input-field ">
                                <i class="mdi-action-account-box prefix"></i>
                                <input id="lastname" type="text" class="validate english" value="ابن العلم">
                                <label for="lastname" class="">نام خانوادگی مسئول باشگاه</label>
                            </div>
                        </div>
                        <div class="col s12 m6 l1 right">
                            <small class="black-text">جنسیت</small>
                        </div>
                        <div class="input-field col s6 m4 l1 right myradio">
                            <input type="radio" name="gender" id="men">
                            <label for="men" class="checkbox-text black-text" style="font-size: 12pt">
                              <span>مرد</span>
                            </label>
                        </div>
                        <div class="input-field col s6 m4 l1 right myradio">
                            <input type="radio" name="gender" id="women" checked> 
                            <label for="women" class="checkbox-text black-text" style="font-size: 12pt">
                              <span>زن</span>
                            </label>
                        </div>
                        <div class="clear"></div>
                        <div class="col s12 m6 l4 right">
                            <div class="input-field farzan-select">
                                <i class="mdi-action-credit-card prefix "></i>
                                <label> حساب</label>
                                <select title="استان">
                                    <option value="1">گزینه 1</option>
                                    <option value="2">گزینه 2</option>
                                    <option value="3">گزینه 3</option>
                                </select>
                            </div>
                        </div>
                            <div class="clear"></div>
                            <button class="btn waves-effect waves-light create-btn z-depth-1 light-blue accent-3 left submit-form" type="button">
                                ذخیره
                            </button>
                            <button class="btn waves-effect waves-light create-btn z-depth-1 grey darken-2 left" type="button">

                                انصراف
                            </button>
							<div class="clear"></div>

                            </form>
						</div>
          </div>

        </div>

    </div>
    <!--end container-->

<?php include 'footer.php';?>

<script>
  $(".list-container ul li a").on("click",function(e){
    $(this).siblings("ul").slideToggle();
  })
    $("#no-email").on("change",function(){
        $(".emailsection").toggle()
    })
</script>
</body>

</html>



