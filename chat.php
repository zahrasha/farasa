<?php include 'head.php'; ?>
<style>





  
.body {
  background:#f5f5f5;
    margin: 10px;
    max-width: 800px;

  }
  .row{
    margin-left:30px;
  }
  
  .container {
   padding:0px 10px;
   background-color: #f1f1f1;
    border-radius:50px;
    border-bottom-right-radius:   0px;
   text-align:center;
    color:white;
    margin:40px 0px;
  
  }
  
  .container-1 {
   
    background-color: #f1f1f1;
    border-radius:50px;
    border-bottom-left-radius:0px;
    text-align:center;
    color:black;
   
    margin-left:30px;
  }
  
  
  
  .container::after {
    
    content: "";
    clear: both;
    display: table;
  }
  .container p{
 padding-top:35px;
 font-size: 9pt;
  

  } 
  .container img {
    float:left;
    max-width: 43px;
    width: 100%;
    margin: -20px;
    margin-top: 20px;
    margin-left: 29px;
    border-radius: 50%;
}
  .container-1 img {
    float: left;
    max-width: 43px;
    width: 100%;
    margin: -20px;
    margin-top: 20px;
    margin-right: 29px;
    border-radius: 50%;
}
  
  .container img.right {
    float: right;
   
  }
  
  .time-right {
    float: right;
  
  }
  
  .time-left {
    float: left;
  
  }
  .border{
  margin-left:50px;
  padding:20px;
  border-radius:5px;
  } 
  .materialize-textarea {
    resize: horizontal; 
color:black;
  }

.send{margin-top:30px;
margin-right:24px;
color:#1e88e5;
font-size:20px;

}


textarea.materialize-textarea {
    background-color: transparent;
    border: none;
    
    border-radius: 0;
    outline: 0;
    
    width: 100%;
    font-size: 1rem;
 
   margin-bottom:25px;
    box-shadow: none;
    -webkit-box-sizing: content-box;
    -moz-box-sizing: content-box;
    box-sizing: content-box;
    transition: all .3s;
}
.main-info{
  border-radius:5px;
  margin-right:50px;
}


</style>

 

</head>
<body>
<div class="row">

    <h5 class="breadcrumbs-title "><i class="mdi-action-home"></i> پيام ها</h5>
  </div> 
  </div> 
  <div class="row">

  <div class=" card main-info col s10 m4 l4  right">
  <img src="./images/user.png" alt="">
<label for=""> ليست کاربران و گزارش</label>
<p> 09361503553 (شما)</p>
<label for=""> ليست کاربران و گزارش</label><br>
<a href="#">ویرایش علایق </a><br>
<a href="#"> خروج از گفت گوی انلاین</a>
<p>
<label for="">
كليدهاي ميانبر</label><br>
Alt + C: جهش به ايجاد پيام<br>
Enter: ارسال پِيام کامل شده<br>
Alt + R : بازبيني پيامها<br>
Alt + M : جهش به پيامها<br>
Alt + Q : خروج از گفتگوي آنلاين<br>

</p>
</div>
            <div  class="card col s12 m6 l6  border">
<div class="container  blue darken-1">
  <img src="./images/user.png" alt="@" style="width:100%;">
  <p>Lorem ipsum dolor sit amet consectetur.</p>
  <span class="time-right">00:00</span>
</div>

<div class="container  container-1 grey lighten-3">
  <img src="./images/user.png" alt="@" class="right" style="width:100%;">
  <p>Lorem ipsum dolor sit amet consectetur.</p>
  <span class="time-left">00:01</span>
</div>

<div class="container  blue darken-1">
  <img src="./images/user.png" alt="@" style="width:100%;">
  <p>Lorem ipsum dolor sit amet consectetur.</p>
  <span class="time-right">00:02</span>
</div>

<div class="container container-1 grey lighten-3">
  <img src="./images/user.png" alt="@" class="right" style="width:100%;">
  <p>Lorem ipsum dolor sit amet consectetur.</p>
  <span class="time-left">00:05</span>
</div>


<form class="container  col s12 right text"  action="">
<textarea id="textarea2" class="materialize-textarea col s9 " data-length="120"></textarea>
         
<a class="send right bottom" href="">send</a>
</form>

</div>


</div>



</body>
</html>

