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
 
.container{ background:#f5f5f5;
  max-width:500 !important;
  margin:auto;
  margin-top:4%;
  font-family:sans-serif;
  letter-spacing:0.5px;
}
img{
 max-width:100%;
}
.max-header{
  border:1px solid #ccc;
  width:100%;
  height:10%;
  border-bottom:none;
  display:inline-block;
  background-color:#007bff;
}



.chats-page{
  padding:0 0 50px 0;
}
.smg-inbox{
  border:1px solid #ccc;
  overflow:hidden;
  padding-bottom:30px;
}
.chats{
  padding:30px 15px 0 25px;
}
.msg-page{
  height:516px;
  overflow-y:auto;
}
.received-chats-img{
  display:inline-block;
  width:20px;
  float:left;
}
.received-msg{
  display:inline-block;
padding:0 0 0 10px;
vertical-align:top;
width:92%;
}
.received-msg-inbox{
width;57%;
}
.received-msg-inbox p{
  background:#efefef none repeat scroll 0 0;
  border-radius:10px;
  color: #646464;
  font-size:14px;
  margin:0;
  padding:14px 10px 5px 12px;
  width:100%;
}
.time{
  color:#777;
  display:block;
  font-size:12px;
  margin:8px 0 0;
}
.outgoing-chats{
overflow:hidden;
margin:26px 20px;
}
.outgoing-chats-msg p{
background:#007bff none repeat scroll 0 0;
color:#fff;
border-radius:10px;
font-size:14px;
margin:0;
color:#fff;
padding:5px 10px 5px 12px;
width:100%;
}
.outgoing-chats-msg{
  float:left;
  width:46%;
  margin-left:45%;

}
.outgoing-chats-img {
  display:block;
  width:20px;
  float:right;
}






.container{ 
  max-width:500 !important;
  margin:auto;
  margin-top:4%;
  font-family:sans-serif;
  letter-spacing:0.5px;
}
img{
 max-width:100%;
 border-radius:50%;
}
.msg-header{
  border:1px solid #ccc;
  width:100%;
  height:10%;
  border-bottom:none;
  display:inline-block;
  background-color:#007bff;
}
.msg-header-img{
  border-radius:50%;
  width:40px;
  margin-left:5%;
  margin-top:12px;
  float:left;

}
.active{
  width:120px;
  float:left;
  margin-top:10px;
}
.active h4{
  font-size:20px;
  margin-left:10px;
  color:#fff;
}
.active h6{
  font-size:10px;
  margin-left:10px;
  line-height:2px;
  color:#fff;
}
.chats-page{
  padding:0 0 50px 0;
}
.smg-inbox{
  border:1px solid #ccc;
  overflow:hidden;
  padding-bottom:30px;
}
.chats{
  padding:30px 15px 0 25px;
}
.msg-page{
overflow-y:auto;
}
.received-chats-img{
  display:inline-block;
  width:35px;
  float:left;
}

.received-chats-msg{
  display:inline-block;
padding:0 0 0 10px;
vertical-align:top;
 float:left;
}
.received-chats-msg-inbox{
width:57%;
}
.received-chats-msg-inbox p{
  background:#efefef none repeat scroll 0 0;
  border-radius:10px;
  color: #646464;
  font-size:14px;
  padding:5px 10px 5px 12px;
  width:100%;
}

.time{
  color:#777;
  display:block;
  font-size:12px;
  margin:8px 0 0;
}



.outgoing-chats{
overflow:hidden;
margin:26px 20px;
}
.outgoing-chats img{
  margin-bottom:10px;
}
.outgoing-chats-msg p{
background:#007bff none repeat scroll 0 0;
color:#fff;
border-radius:10px;
font-size:14px;
margin:0;
color:#fff;
padding:5px 10px 5px 12px;
width:100%;
}
.outgoing-chats-msg{
  float:left;
  width:46%;
  margin-left:45%;
    margin-right: 0px;
}
.outgoing-chats-img {
  display:inline-block;
  width:35px;
  float:right;
}
.msg-bottom{
  position:relative;
  height:10%;
  background-color:#007bff;
}
.input-group{
  float:right;
  margin-top:13px;
  margin-right:20px;
  outline:none!important;
  border-radius:20px;
  width:61% !important;
  background-color:#fff;
}
.form-control{
  border:none !important;
  border-radius:20px  !important;

}
.input-group-text{
  background:transparent !important;
  border:none !important;
}
.input-group.fa{
  color:#007bff;
  float:right;
}
.bottom-icons{
  float:left;
  margin-top:17px;
  width:30%  !important;
  margin-left:22px;
}
.bottom-icons .fa{color:#fff;
padding:5px;
}
.form-color:focus{
  border-color:none !important;
  box-shadow:none !important;
  border-radius:20px;
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




            <div class="container ">
            <div class="msg-header">
            <div class="msg-header-img">
            <img src="./images/user.png" alt="">
            </div>
            <div class="active">
            <h4>name </h4>
            <h6> </h6>
            </div>
            </div>
            <div class="chats-page">
            <div class="msg-inbox">
            <div class="chats">
            <div class="msg-page">
           <div class="received-chats">
           
           <div class="received-chats-img">
            <img src="./images/user.png" alt="">
            </div>
            <div class="received-chats-msg">
            <div class="received-chats-msg-inbox">
            <p>hi !!!!</p>
            <span class="time">11:01 pm</span>
            </div>
            </div>
            </div>                  

           
            <div class="outgoing-chats">
            <div class="outgoing-chats-msg">
            <p>hi !!!!</p>
            <span class="time">11:01 pm</span>
            </div>
            <div class="outgoing-chats-img">
            <img src="./images/user.png" alt="">
            </div>
            </div>   
            </div> <div class="received-chats-img">
            <img src="./images/user.png" alt="">
            </div>
            <div class="received-chats-msg">
            <div class="received-chats-msg-inbox">
            <p>hi !!!!</p>
            <span class="time">11:01 pm</span>
            </div>
            </div>
            </div>                  

           
            <div class="outgoing-chats">
            <div class="outgoing-chats-msg">
            <p>hi !!!!</p>
            <span class="time">11:01 pm</span>
            </div>
            <div class="outgoing-chats-img">
            <img src="./images/user.png" alt="">
            </div>
            </div>   
            </div> <div class="received-chats-img">
            <img src="./images/user.png" alt="">
            </div>
            <div class="received-chats-msg">
            <div class="received-chats-msg-inbox">
            <p>hi !!!!</p>
            <span class="time">11:01 pm</span>
            </div>
            </div>
            </div>                  

           
            <div class="outgoing-chats">
            <div class="outgoing-chats-msg">
            <p>hi !!!!</p>
            <span class="time">11:01 pm</span>
            </div>
            <div class="outgoing-chats-img">
            <img src="./images/user.png" alt="">
            </div>
            </div>   
            </div>
            </div>
            </div>  
            </div>
            <div class="msg-bottom">
            <div class="bottom-icon">
            <i></i>
            <i></i>
            <i></i>
            </div>
            <div class="input-group">
            <input type="text" class="form-control" placeholder="write message...">
            <div class="input-group-append">
            <span class="input-group-text">
            <i></i>
            </span>
            </div> 
            </div>
            </div> 
            </div> 
            </div>
           


            
<!--end container-->

<?php include 'footer.php'; ?>
</body>
</html>