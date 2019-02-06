<?php include 'head.php'; ?>
<style>


@import url('https://fonts.googleapis.com/css?family=Raleway');

.login-page {
  width: 20%;
  min-width: 360px;
  max-widht: 460px;
  padding: 6% 0 0;
  margin: auto;
}

.form {
  position: relative;
  z-index: 1;
  background-image: linear-gradient(to bottom right, #3190d1, #1e5c87);
  max-width: 500px;
  border-radius: 5px;
  margin: 0 auto 100px;
  padding: 30px;
  text-align: centre;
  text-transform: uppercase;
  box-shadow: 0px 10px 50px 0 rgba(0, 0, 0, 1);
}
.form span{
    color:white;
}
.form input,select{
  font-family: "Raleway";
  outline: 0;
  margin: 0px 10px;
  border: 0px;
  border-radius: 10px;
  background: #ffffff;
  width: 100%;
  margin: 0 0 15px;
  color:white;
  padding: 15px;
  box-sizing: border-box;
  font-size: 15px;
  background: #e3fffa;
}
.uzrasiukas {
  margin: 10px 0 30px 0; 
  font-size: 25px;
  display: block;
  text-align: center;
  color: #ffffff;
  text-transform: uppercase;
  letter-spacing: 2px;
}
.form button {
  font-family: "Raleway", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background: #046d61;
  width: 100%;
  border: 0;
  border-radius: 15px;
  padding: 15px;
  color: #ffffff;
  font-size: 16px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
  letter-spacing: 1px;
}
.form button:hover,.form button:active,.form button:focus {
  background: #00a0a0;
}
.form .message {
  margin: 15px 0 0;
  color: #b6feff;
  font-size: 12px;
  letter-spacing: 0.5px;
  text-transform: capitalize;
}
.form .message a {
  color: #00aaac;
  text-decoration: none;
  letter-spacing: 0.5px;
}
.form .register-form {
    display: block;
}
body {
  background: #ffffff;
  font-family: "Raleway", sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;      
}

.five {
  overflow: hidden;
  color: #fff;
  position: relative;
}
.five .layer {
  color: #fff;
  position: absolute;
  top: -70px;
  width: 100%;
  left: 0;
  padding: 15px 0;
  background-color: #F44336;
  transition: all 0.3s ease;
  -webkit-transition: all 0.3s ease;
  -moz-transition: all 0.3s ease;
  -o-transition: all 0.3s ease;
  -ms-transition: all 0.3s ease;
}
.five:hover .layer {
  top: 0;
}
.check{
  color:white;
}
label {
    font-size: 0.9rem;
    color: rgba(240, 234, 241, 0.85);
} 
[type="checkbox"]:checked + label:before {
    border-right: 2px solid #e0efeb !important;
    border-bottom: 2px solid #e0e6e5 !important;
}
[type=checkbox] + label:before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 18px;
    height: 18px;
    z-index: 0;
    border: 2px solid #f5ecec;
    border-radius: 1px;
    margin-top: 2px;
    -webkit-transition: .2s;
    -moz-transition: .2s;
    -o-transition: .2s;
    -ms-transition: .2s;
    transition: .2s;
}
.group{
  margin:50px 0px;
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
                <h5 class="breadcrumbs-title "><i class="mdi-action-home"></i>صفحه اصلی</h5>
            </div>
            <div class="row">
            <div class="col s12 m10 l10">
            <div class="login-page">
  <div class="form">
    <form class="register-form">
    <span> نام كاربري :</span>
      <input type="text" placeholder="name"/>
      <span> · فقط مي‌توامد شامل حروف، ارقام، خط زير، خط فاصله يا نقطه باشد
<br>
· حداكثر 20 كاراكتر± </span><br>
<span> رمز عبور
:</span>
      <input type="password" placeholder="password"/>
      <span>تكرار رمز عبور  </span>
      <input type="text" placeholder="email address"/>  
         <span> نام </span>
      <input type="text" placeholder="email address"/>  
         <span> نام خانوادگي </span>
      <input type="text" placeholder="email address"/>  
      <span>جنسيت </span>
          <select name="gender"  >
				<option  value="male">مرد</option>
				<option value="female">زن</option>
        </select>
      <span>پست الكترونيكي </span>
      <input type="text" placeholder="email address"/>  
         <span></span>
      <input type="text" placeholder="email address"/> 
        <span> حساب </span>
          <select name="gender"  >
				<option  value="male">فراسا</option>
				</select>
        <div class="group">
					<input id="check" type="checkbox" class="check" checked>
          <label for="check"><span class="icon"></span> Keep me Signed in</label>
				</div>

          <button>enter</button> <br><br>  
          <button>cancel</button>
      <p class="message">Already registered? <a href="#">Sign In</a></p>

          </form>
    
  </div>
  </div>
  </div>
        </div>

    </div>
    <!--end container-->

<?php include 'footer.php'; ?>
</body>

</html>



