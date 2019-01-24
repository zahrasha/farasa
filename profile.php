<?php include 'head.php'; ?>
</head>
<body>
<?php include 'header.php'; ?>
    <!--start container-->
    <div class="container">
    <form method="post" action="/elearning2/users/profile.php" name="form" id="contactform">
<div class="input-form">
	<fieldset class="group_form"><legend class="group_form">اطلاعات مورد نياز</legend>
	<div class="row">
		<h3>اطلاعات مورد نياز</h3>
	</div>


	<div class="row">
		<label for="login">نام كاربري</label><br />
				<span id="login" placeholder="username"></span>
				<input name="member_id" type="hidden" value="890320" />
				<input name="login" type="hidden" value="09361503553" />
	</div>
	<div class="row">
		<div class="required" title="فيلد لازم">*</div><label for="UserEmail">آدرس پست الكترونيك</label><br />
		
		<input name="email" id="UserEmail" value="user2911635342@farasa.net" style="width:200px">
		<input type="checkbox" id="priv" name="private_email" value="1" checked="checked" /><label for="priv" id="privlabel">پست الکترونيک را از ديگران مخفي کن.</label>
        
          <br/>
  		<input type="checkbox" value="1"  id="emailhave"><label for="emailhave">ایمیل ندارم</label>
         
        
		<div style="display: none;" id="UserEmail_error" class="errorBox">
			ادرس ایمیل صحیح نیست
		</div>
			
	</div>
	<div class="row">
		<div class="required" title="فيلد لازم">*</div><label for="first_name">نام</label><br />
		
		<input name="first_name" id="UserFirstName" class="validate_farsi" >
		<div style="display: none;" id="UserFirstName_error" class="errorBox">
			طول نام کمتر از 3 کاراکتر نباشد<br/>
			نام  فقط فارسی باشد
		</div>
			
	</div>

	<div class="row">
		<div class="required" title="فيلد لازم">*</div><label for="UserLastName">نام خانوادگي</label><br />
		<input name="last_name" class="validate_farsi" id="UserLastName" >
		<div style="display: none;" id="UserLastName_error" class="errorBox">
			طول نام خانوادگی کمتر از 3 کاراکتر نباشد<br/>
			نام خانوادگی فقط فارسی باشد
		</div>
			
	</div>
	<div class="row">
		جنسيت<br />
		
				
		<label for="mGender"><input type="radio"	 name="gender" value="m" id="mGender" />مرد</label>	
		<label for="fGender"><input type="radio"	checked="checked" name="gender" value="f" id="mGender" />زن</label>	
		
		<div style="display: none;" id="gender_error" class="errorBox">
			انتخاب جنسیت الزامی است
		</div>
			
	</div>
	
	

	
	<!--
<input type="hidden" value="0" name="accid" />-->
	 
<div class="row">
		
        <div style="display:none;" class="required" title="فيلد لازم">*</div>
		<label for="accid">﻿حساب</label><br />
		<select name="accid" id="accid">
        <option value="0">&#65279;فراسا</option>
											<option value="17">سازمان بهداشت و درمان نفت</option>
																<option value="16">دانشگاه علوم پزشکی کرمانشاه</option>
																<option value="48">شاداب</option>
																<option value="22">دانشگاه علوم پزشکی بقیه الله</option>
																<option value="18">دانشگاه علوم پزشکی جندی شاپور اهواز</option>
																<option value="19">دانشگاه علوم پزشکی خراسان شمالی</option>
																<option value="20">دانشگاه علوم پزشکی مشهد</option>
																<option value="23">دانشگاه علوم پزشکی رفسنجان</option>
																<option value="24">انستیتو پاستور ایران</option>
																<option value="25">دانشگاه علوم پزشکی بیرجند</option>
																<option value="26">شبکه تحقیقات سلامت روان ایران</option>
																<option value="27">دانشگاه علوم پزشکی گناباد</option>
																<option value="28">دانشگاه علوم پزشکی مازندران</option>
																<option value="29">مرکز تحقیقات عفونی اطفال بیماستان مفید</option>
																<option value="30">مرکز آموزش و پژوهش بیماریهای پوست و جذام </option>
																<option value="31">مرکز تحقیقات گوش و حلق و بینی و سرو گردن</option>
																<option value="32">بیمارستان شهید مدرس</option>
																<option value="33">دانشگاه علوم پزشکی همدان</option>
																<option value="34">سازمان بهزیستی کشور</option>
																<option value="35">دانشگاه علوم پزشکی اصفهان</option>
																<option value="40">دانشگاه علوم پزشکی ارتش</option>
																<option value="37">دانشگاه علوم پزشکی بندرعباس</option>
																<option value="38">دانشگاه علوم پزشکی سبزوار</option>
																<option value="39">دانشگاه علوم پزشکی کاشان</option>
																<option value="41">سازمان انتقال خون ایران</option>
																<option value="42">بیمارستان شهید دکتر فیاض بخش</option>
																<option value="49">دانشگاه فردوسی مشهد</option>
																<option value="44">دانشگاه علوم پزشکی شاهرود</option>
																<option value="46">دانشکده پرستاری و مامایی- دانشگاه علوم پزشکی تهران</option>
																<option value="47">پژوهشکده گوارش و کبد تهران</option>
																<option value="50"></option>
																<option value="52">بيمارستان تخصصي و فوق تخصصي خاتم الانبياء(ص)</option>
																<option value="52">بيمارستان خاتم الانبياء(ص)</option>
																<option value="53">دانشگاه علوم پزشکی شهید صدوقی یزد</option>
																<option value="54">دانشگاه شهید بهشتی</option>
																<option value="55">دانشگاه علوم پزشکی شهرکرد</option>
																<option value="56">سازمان غذا و دارو</option>
																<option value="57">وزارت بهداشت، درمان و آموزش پزشکی</option>
																<option value="58">مرکز کنترل بیماریهای غیر واگیر</option>
																<option value="59">بانک مرکزی جمهوری اسلامی ایران</option>
																<option value="60">دوره جامع تربیت پژوهشگر</option>
																<option value="61">خبرگزاری جمهوری اسلامی (ایرنا)</option>
																<option value="62">سازمان پزشکی قانونی تهران</option>
																<option value="63">شرکت ارتباطات زیرساخت</option>
																<option value="64">دانشگاه علم و صنعت</option>
																<option value="65">وزارت راه و شهرسازی</option>
																<option value="66">دانشگاه علوم پزشکی بهبهان</option>
																<option value="67">بیمارستان خاتم الانبیاء شاهرود</option>
																<option value="69">سازمان حج و زیارت</option>
																<option value="70">اداره کل امور مالیاتی استان لرستان</option>
																<option value="71">دانشگاه صنعتی بیرجند</option>
																<option value="72">سازمان شیلات ایران</option>
																<option value="73">شرکت آب و فاضلاب روستایی استان لرستان</option>
																<option value="74">دانشگاه شهید چمران اهواز</option>
																<option value="75">سازمان راهداری و حمل و نقل جاده ای</option>
																<option value="76">مرکز آموزشی درمانی ضیائیان</option>
																<option value="77">اداره کل حمل و نقل پایانه های استان تهران</option>
																<option value="78">دانشگاه آزاد واحد علوم پزشکی تهران</option>
																<option value="79">دادگستری کل استان تهران</option>
																<option value="80">دانشگاه ملایر</option>
																<option value="81">سازمان تامین اجتماعی لرستان</option>
																<option value="82">سازمان پزشکی قانونی کشور</option>
																<option value="84">دانشگاه علوم پزشکی کرمان</option>
																<option value="85">دانشگاه علوم پزشکی بم</option>
																<option value="86"></option>
																<option value="87">دیوان محاسبات کشور</option>
																<option value="88">دانشگاه علوم پزشکی یاسوج</option>
																<option value="89">سازمان ملی زمین و مسکن</option>
																<option value="90">دانشگاه تهران</option>
																<option value="91">آموزش زوجین جوان</option>
																<option value="92">دانشگاه علوم پزشکی و خدمات بهداشتی درمانی البرز</option>
																<option value="93">دانشگاه علوم پزشکی و خدمات بهداشتی درمانی بجنورد</option>
																<option value="94">دانشگاه علوم پزشکی و خدمات بهداشتی درمانی گناباد</option>
																<option value="95">دانشگاه علوم پزشکی و خدمات بهداشتی درمانی لرستان</option>
																<option value="96">دانشگاه علوم پزشکی و خدمات بهداشتی درمانی تربت حیدریه</option>
																<option value="97">دانشگاه علوم پزشکی و خدمات بهداشتی درمانی ساوه</option>
																<option value="98">دانشگاه علوم پزشکی و خدمات بهداشتی درمانی کرمان </option>
																<option value="99">دانشگاه علوم پزشکی و خدمات بهداشتی درمانی دزفول</option>
																<option value="100">دانشگاه علوم پزشکی و خدمات بهداشت درمانی جیرفت</option>
																<option value="101">دانشگاه علوم پزشکی و خدمات بهداشتی درمانی سنندج</option>
																<option value="102">دانشگاه علوم پزشکی و خدمات بهداشتی درمانی اسفراین</option>
																<option value="103">دانشگاه علوم پزشکی و خدمات بهداشتی درمانی گراش</option>
																<option value="104">دانشگاه علوم پزشکی و خدمات بهداشتی درمانی رفسنجان</option>
																<option value="105">دانشگاه علوم پزشکی و خدمات بهداشتی درمانی زنجان</option>
																<option value="106">دانشگاه علوم پزشکی و خدمات بهداشتی درمانی بهبهان</option>
																<option value="107">دانشگاه علوم پزشکی و خدمات بهداشتی درمانی فسا</option>
																<option value="108">دانشگاه علوم پزشکی و خدمات بهداشتی درمانی بم</option>
																<option value="109">دانشگاه علوم پزشکی و خدمات بهداشتی درمانی گیلان</option>
																<option value="110">دانشگاه علوم پزشکی و خدمات بهداشتی درمانی شیراز</option>
																<option value="111">دانشگاه علوم پزشکی و خدمات بهداشتی درمانی لارستان</option>
																<option value="112">دانشگاه علوم پزشکی و خدمات بهداشتی درمانی جهرم</option>
																<option value="113">دانشگاه علوم پزشکی و خدمات بهداشتی درمانی آبادان</option>
																<option value="114">دانشگاه علوم پزشکی و خدمات بهداشتی درمانی بابل</option>
																<option value="115">دانشگاه علوم پزشکی و خدمات بهداشت درمانی تربت جام</option>
																<option value="116">دانشگاه علوم پزشکی و خدمات بهداشت درمانی کرمانشاه</option>
																<option value="139">دانشگاه علوم پزشكي و خدمات بهداشتي و درماني شهركرد</option>
																<option value="118">دانشگاه علوم پزشکی و خدمات بهداشتی درمانی شهید بهشتی</option>
																<option value="119">دانشگاه علوم پزشکی و خدمات بهداشتی درمانی اذربایجان غرب</option>
																<option value="121">دانشگاه علوم پزشکی و خدمات بهداشتی درمانی مشهد</option>
																<option value="122">دانشگاه علوم پزشکی و خدمات بهداشتی درمانی اصفهان</option>
																<option value="123">دانشگاه علوم پزشکی و خدمات بهداشتی درمانی یزد</option>
																<option value="140">شبكه بهداشت و درمان ميناب</option>
																<option value="127">دانشگاه علوم پزشکی و خدمات بهداشتی درمانی سمنان</option>
																<option value="134">دانشگاه علوم پزشكي و خدمات بهداشتي درماني هرمزگان</option>
																<option value="131">دانشگاه علوم پزشکی و خدمات بهداشتی و درمانی کاشان</option>
																<option value="132">دانشگاه علوم پزشکی و خدمات بهداشتی درمانی شوشتر</option>
																<option value="133">دانشگاه علوم پزشکی و خدمات بهداشتی درمانی قم</option>
																<option value="138">دانشگاه علوم پزشكي و خدمات بهداشتي و درماني سبزوار</option>
																<option value="136">دانشگاه علوم پزشكي و خدمات بهداشتي و درماني بوشهر</option>
																<option value="136">دانشگاه علوم پزشكي و خدمات بهداشتي و درماني بوشهر</option>
																<option value="137">دانشكده علوم پزشكي مراغه</option>
																<option value="143">دانشگاه علوم پزشکی و خدمات بهداشتی درمانی نیشابور</option>
																<option value="142">دانشگاه علوم پزشکی و خدمات بهداشتی و درملنی ایلام</option>
																<option value="144">دانشگاه علوم پزشکی و خدمات بهداشتی درمانی جندی شاپور اهواز معاونت</option>
																<option value="145">دانشگاه علوم پزشکی و خدمات بهداشتی و درمانی گلستان </option>
																<option value="147">تست دوره دیابت اصفهان </option>
																<option value="148">معاونت بهداشتی دانشگاه علوم پزشکی و خدمات بهداشتی درمانی بیرجند</option>
																<option value="152">دانشگاه علوم پزشکی و خدمات بهداشتی درمانی اردبیل</option>
																<option value="153">دانشگاه علوم پزشکی و خدمات بهداشتی درمانی شهید بهشتی- واحد قرچک</option>
																<option value="154">شبکه بهداشت و درمان نظرآباد</option>
																<option value="155">مدیریت شبکه بهداشت و درمان دماوند</option>
																<option value="156">شبکه بهداشت و درمان جوین</option>
																<option value="157">دانشگاه علوم پزشکی قزوین</option>
																<option value="158">دانشگاه علوم پزشکی و خدمات بهداشتی درمانی یاسوج</option>
																<option value="159">سازمان حفاظت محیط زیست</option>
																<option value="160">تست ادمین</option>
																<option value="161">دانشگاه شهید مدنی آذربایجان</option>
																<option value="166">دانشکده علوم پزشکی لارستان</option>
																<option value="163">سازمان حفاظت محیط زیست استان ها</option>
																<option value="165">دانشگاه لرستان</option>
																<option value="167">دانشگاه علوم پزشکی کردستان</option>
																<option value="169">تست دوستی</option>
																<option value="170">دانشگاه علوم پزشکی و خدمات بهداشتی درمانی همدان</option>
																<option value="172">دانشگاه علوم پزشکی و خدمات بهداشتی درمانی آذربایجان غربی</option>
																<option value="173">دانشگاه علوم پزشکی و خدمات بهداشتی درمانی جیرفت</option>
																<option value="174">دانشگاه علوم پزشکی و خدمات بهداشتی درمانی کرمانشاه</option>
																<option value="175">دانشگاه علوم پزشکی و خدمات بهداشتی درمانی تربت جام</option>
								
		</select>
	</div>
		</fieldset>
	<fieldset class="group_form" style="display:none;"><legend class="group_form">اطلاعات شخصي</legend>
	<div class="row">
		<h3>اطلاعات شخصي (اختياري)</h3>
	</div>
	<input name="country" type="hidden"   value="ایران" />
	
	

	

	<div class="row">
		<label for="website">وب سايت</label><br />
		<input id="website" name="website" size="40" type="text" value="http://" />
	</div>
	</fieldset>
	<div class="row buttons">
		<input type="submit" name="submit" value=" ذخيره " accesskey="s" />
		<input type="submit" name="cancel" value=" انصراف " />
	</div>
</div>

</form>




    </div>
    <!--end container-->

<?php include 'footer.php'; ?>
</body>

</html>

