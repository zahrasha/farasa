<?php include 'head.php'; ?>
<style>


.radio-button{
    padding-top: 25px !important;
    padding-right: 15px ;

}

.radio { display:inline;
  margin: 0.5rem;}
  input[type="radio"] {
    position: absolute;
    opacity: 0;}
    + .radio-label {}

      &:before {
        content: '';
        background: $color1;
        border-radius: 100%;
        border: 1px solid darken($color1, 25%);
        display: inline-block;
        width: 1.4em;
        height: 1.4em;
        position: relative;
        top: -0.2em;
        margin-right: 1em; 
        vertical-align: top;
        cursor: pointer;
        text-align: center;
        transition: all 250ms ease;
      }
    }
    &:checked {}
      + .radio-label {}
        &:before {
          background-color: $color2;
          box-shadow: inset 0 0 0 4px $color1;
        }
      }
    }
    &:focus {}
      + .radio-label {}
        &:before {
          outline: none;
          border-color: $color2;
        }
      }
    }
    &:disabled {}
        &:before {
          box-shadow: inset 0 0 0 4px $color1;
          border-color: darken($color1, 25%);
          background: darken($color1, 25%);
        }
      }
    }
    + .radio-label {
          margin-right: 0;
        }
      }
    }
  }
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
                <h5 class="breadcrumbs-title "><i class="mdi-action-home"></i> صفحه اصلی / سیری در دوره ها
                </h5>
            </div>
 

            <div class="row ">
            <div class="col s12 right input-field myradio">
                <div class=" card z-depth-1 card-content white">
                <span>  فیلتر کردن </span>
                <br><br>

                  <span > نتايج پيدا شده: 211 </span> 
                  <br><br> 

                    <form action="#">   <form action="#"> 
                    <div class="clear"></div>
                  <div class="radio-button  col s12 m6 l3  right">
                  <div class="radio">
                  <span>دسترسی:</span>
                  <br>
                  <input id="radio-1" name="radio" type="radio" checked>
                  <label for="radio-1" class="radio-label">با پرداخت</label>
                  </div>

                  <div class="radio">
                  <input id="radio-2" name="radio" type="radio">
                  <label  for="radio-2" class="radio-label">با عضويت</label>
                  </div>

                  <div class="radio">
                  <input id="radio-3" name="radio" type="radio" >
                  <label for="radio-3" class="radio-label">آزاد</label>
                  </div>
                  <div class="radio">
                  <input id="radio-4" name="radio" type="radio" >
                  <label for="radio-4" class="radio-label">همه</label>
                  </div>
                        </div>
                        </form>
                        <div class="clear"></div>
                        <div class="col s12 m6 l3 right">
                            <div class="input-field ">
                                <i class="mdi-action-view-agenda prefix"></i>
                                 <select name="" id="">
                                 <option value="">تمام دسته ها </option>
                                 <option value="">دسته بندی نشده </option>
                                 <option value=""> ICDL </option>
                                 <option value=""> بدو خدمت کارکنان</option>
                                 </select> <br>
                                 <label >دسته</label>
                            </div>

                        </div>
                        
                        <div class="clear"></div>
                        <div class="col s12 m6 l3 right">
                            <div class="input-field ">
                                <i class="mdi-action-lock prefix"></i>
                                <input id="code" type="text">
                                <label for="code" class="">جستجو (عنوان, توضيح)</label>
                            </div>
                        </div>
                        <div class="clear"></div>
                  <div class="radio-button  col s12 m6 l3  right">
                  <input id="radio-5" name="radio" type="radio" checked>
                  <label for="radio-5" class="radio-label">تمام کلمات</label>
                  <input id="radio-6" name="radio" type="radio">
                  <label  for="radio-6" class="radio-label">هر کلمه ای</label>
                  </div> 
                  <div class="clear"></div>
                  <div class="clear margin-bottom-10"></div>
                  <div class="clear margin-bottom-10"></div>
                  <div class="conteiner">
                  <button class="btn blue"><a class=" white-text" href=""> فيلتر کردن </a></button>
                  <button class="btn blue"><a class=" white-text" href=""> برگرداندن فیلتر </a></button>
                  </div>
                   </form>
                    <div class="clear margin-bottom-10"></div>
                </div>
            </div>
    </div>     
   
<div class="input-field col s12 m12 l12 right mycheckbox">
       <input type="checkbox" id="barber">
       <label for="barber" class="checkbox-text margin-bottom-0">لطفا دوره / دوره های مورد نظر خود را انتخاب کنید.  </label>
</div>
<div class="row">
<button class="btn col s1 m2 l2 offset-l5 waves-effect waves-light create-btn z-depth-1 light-blue accent-3 submit-form"
    type="button"> ثبت دروس انتخاب شده
  </button>
  
        <div class="col s12 l10 offset-l1">
        <?php 
          for ($i = 0; $i <= 10; $i++) {
            echo 
            '<div class="col s12 m4 l4 right">
                <div class="card z-depth-1 my-card hoverable">
                  <div class="card-content">
                  <div class="center">
                    <a href="course.php"><img src="images/50.jpg"></a> 
                  </div>
                    <h3 class="title"><a href="course.php">استانداردهای گزارش پژوهش های بالينی(CONSORT)</a></h3>
                    <p>
                      <small>دسته: <b>پژوهش پزشکی</b></small>
                    </p>
                  </div>
                </div>
            </div>';
        } 
        ?>
        </div>
    <!--end container-->
<script>

</script>
<?php include 'footer.php'; ?>
</body>

</html>



