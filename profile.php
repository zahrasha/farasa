<?php include 'head.php'; ?>
</head>
<body>
<?php include 'header.php'; ?>
    <!--start container-->
    <div class="container">
    <form method="post" action="/elearning2/users/profile.php" name="form" id="contactform">

		<h5>اطلاعات مورد نياز</h5>
	</div>


	<div >
		<label for="login">نام كاربري</label><br />
				<br><input name="member_id" type="text"  placeholder="username">
				<br><label for="login">آدرس پست الكترونيك</label><br />
				<br><input name="member_id" type="text"  placeholder="email">
				<br><label for="login">نام</label><br />
				<br><input name="member_id" type="text"  placeholder="name">
				<br><label for="login"> نام خانوادگي</label><br />
				<br><input name="member_id" type="text"  placeholder="family">
				<br><label for="login">جنسیت</label><br />
				<br><select name="gender"  >
				<option  value="male">مرد</option>
				<option value="female">زن</option>
				</select>
				<br><label for="login">حساب</label><br />
				<select name="#"  >
				<option  value="farasa">فراسا</option>
				</select>
	</div>

	<br>
	<br>
	<br>
	<div class=button>
	<button>save</button>
	<button>cancle</button>
	</div>

	<br>
	<br>
	<br>	
	<br>
	<br>	
	<br>
    <!--end container-->

<?php include 'footer.php'; ?>
</body>

</html>

