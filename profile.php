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
				   اطلاعات مورد نياز    </h5>
            </div>
        </div>
    <form  method="post" action="/elearning2/users/profile.php" name="form" id="contactform">

	
	  
      <div class="row"> 
	  
	  <div class="input-field col s6 offset-s6">
          <i class="material-icons prefix"></i>
          <input type="text" id="autocomplete-input"  class="autocomplete">
          <label for="autocomplete-input">نام كاربری</label>
        </div>
      </div>
	  
	  <div class="row">
	  <div class="input-field col s6 offset-s6">
          <i class="material-icons prefix"></i>
          <input type="text" id="autocomplete-input"  class="autocomplete">
          <label for="autocomplete-input">آدرس پست الکترونیک</label>
        </div>
      </div>

	  <div class="row">
	  <div class="input-field col s6 offset-s6">
          <i class="material-icons prefix"></i>
          <input type="text" id="autocomplete-input"  class="autocomplete">
          <label for="autocomplete-input">نام</label>
        </div>
      </div>

	  <div class="row">
	  <div class="input-field col s6 offset-s6">
          <i class="material-icons prefix"></i>
          <input type="text" id="autocomplete-input"  class="autocomplete">
          <label for="autocomplete-input">نام خانوادگی</label>
        </div>
      </div>

	  <div class="row">
	  <div class="input-field col s6 offset-s6">
          <i class="material-icons prefix"></i>
          <select name="gender"  >
				<option  value="male">مرد</option>
				<option value="female">زن</option>
				</select>
          <label for="autocomplete-input">جنسیت</label>
        </div>
      </div>
	  <div class="row">
	  <div class="input-field col s6  offset-s6">
          <i class="material-icons prefix"></i>
          <select name="gender"  >
				<option  value="male">فراسا</option>
				</select>
          <label for="autocomplete-input">حساب</label>
        </div>
      </div> 

	  <div class="row">
	  <div class="col s6 offset-s6">
	  <div class="input-field ">
	  <i class="material-icons prefix"></i><a href="#">
	  <input class="btn blue col s3" type="submit" value="cancel" name="" id=""></a>
	  <i class="material-icons prefix"></i> <a href="#">
	  <input class="btn blue col s3" type="submit"  value="enter"name="" id=""></a>
	  </div>
      </div>
      </div>
	  </div>
	<br>
	<br>
	<br>	
	<br>
	<br>	
	<br>
	  <div class="row" >
	  <div class="col s6 offset-s6" >

	            <br><label for="login"> نام کاربری</label><br />
				<br><input class="autocomplete" name="member_id" type="text"  placeholder="username">
				<br><label for="login">آدرس پست الكترونيك</label><br />
				<br><input name="member_id" type="text"  placeholder="email">
				<br><label for="login">نام</label><br />
				<br><input name="member_id" type="text"  placeholder="name">
				<br><label for="login"> نام خانوادگي</label><br />
				<br><input name="member_id" type="text"  placeholder="family">
				<br><label for="login">جنسیت</label><br />
				<br>
				<select name="gender"  >
				<option  value="male">مرد</option>
				<option value="female">زن</option>
				</select>
				<br><label for="login">حساب</label><br />
				<select name="#"  >
				<option  value="farasa">فراسا</option>
				</select>
				</div>
				</div>
				<div class="row">
	  <div class="col s6 offset-s6">
	  <div class="input-field ">
	  <i class="material-icons prefix"></i><a href="#">
	  <input class="btn blue col s3" type="submit" value="cancel" name="" id=""></a>
	  <i class="material-icons prefix"></i> <a href="#">
	  <input class="btn blue col s3" type="submit"  value="enter"name="" id=""></a>
	  </div>
		</div>
		</div>

		
	
    <!--end container-->

<?php include 'footer.php'; ?>
</body>

</html>

