<?php include 'head.php'; ?>
<style>
.first-col-shrink tr th:first-child {
    width: 15%;
}
ul li {
    line-height: 2em;
    padding-top: 0px;
    padding-bottom: 5px;
}
ul li.true-answer{
    position: relative;
    padding-right: 20px;
}
ul li.true-answer:before {
    content: "\e625";
    display: block;
    position: absolute;
    font-family: Material-Design-Icons;
    right: 0px;
    color: #66BB6A;
    top: -6px;
    font-size: 23px;
}
ul li label{ 
    color:black;
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
                <h5 class="breadcrumbs-title "><i class="mdi-action-home"></i> 
                <a href="">صفحه اصلی</a> /
                <a href=""> دوره انتخابی</a> /
                <a href=""> آزمون</a> /
                 اماده پاسخ گویی</h5>
            </div>
        </div>
    </div>

<div class="row">
    <div class="col s12 m12 l10 offset-l1 card">
        <p> آزمون نهایی</p>
                <div class="clear"></div>
                <table class="responsive-table striped centered farzan-table  first-col-shrink">
                    <thead class="white-text purple">
                        <tr class="my-table">
                        <th> سوال 1: چند گزینه ای </th>
                        <th class="left">1 بارم 	</th>
                        </tr>
                    </thead>
                    </table>
                    <span >    بر طبق بیانیه CONSORT کدام مورد در قسمت روش ها جایگاهی ندارد ؟
                    </span>
                    <br>
                    <ul style="padding: 0px; margin: 0px; list-style-type: none">
                    <li>
                        <input type="radio" name="answers[278]" value="0" id="choice_278_0" />
                        <label for="choice_278_0">
                            <span>معیار شایستگی برای شرکت کنندگان</span>    
                        </label>
                    </li>

                    <li>
                        <input type="radio" name="answers[278]" value="1" id="choice_278_1" />
                        <label for="choice_278_1">
                            <span>محل و نحوه جمع آوری داده ها</span>
                        </label>
                    </li>

                    <li>
                        <input type="radio" name="answers[278]" value="2" id="choice_278_2" />
                        <label for="choice_278_2">
                            <span>جزئیات دقیق مداخله مورد نظر</span>
                        </label>
                    </li>
                    
                    <li >
                    <input type="radio" name="answers[278]" value="3" id="choice_278_3" />
                    <label for="choice_278_3">
                        <span>فرضیات مطالعه</span>
                    </label>
                    </li>
                    
                    <li >
                        <input type="radio" name="answers[278]" value="-1" id="choice_278'_x" checked="checked" />
                        <label for="choice_278'_x">
                            <span><em>بدون پاسخ</em></span>
                        </label>
                    </li>
                    </ul>
                
                    <div class="clear"></div>
                    <table class="responsive-table striped centered farzan-table  first-col-shrink">
                    <thead class="white-text purple">
                    <tr class="my-table">
                    <th> سوال 1: چند گزینه ای </th>
                    <th class="left">1 بارم 	</th>
                    </tr>
                    </thead>
                </table>
                <span>    بر طبق بیانیه CONSORT کدام مورد در قسمت روش ها جایگاهی ندارد ؟
                </span>
                <br>
                <ul style="padding: 0px; margin: 0px; list-style-type: none">
			    <li>
			    <input type="radio" name="answers[279]" value="0" id="choice_279_0" />
                <label for="choice_279_0"><span>معیار شایستگی برای شرکت کنندگان</span></label>
                </li>
		        <li >
                    <input type="radio" name="answers[279]" value="1" id="choice_279_1" />
                    <label for="choice_279_1"><span>محل و نحوه جمع آوری داده ها</span></label>
                </li>
                <li>
    			    <input type="radio" name="answers[279]" value="2" id="choice_279_2" />
                    <label for="choice_279_2"><span>جزئیات دقیق مداخله مورد نظر</span></label>  
                </li>
			    <li>
                    <input type="radio" name="answers[279]" value="3" id="choice_279_3" />
                    <label for="choice_279_3"><span>فرضیات مطالعه</span></label> 
                </li>
                
                <li >
                    <input type="radio" name="answers[279]" value="-1" id="choice_279'_x" checked="checked" />
                    <label for="choice_279'_x"><span><em>بدون پاسخ</em></span></label> 
	            </li>
                </ul>    
            
              
                <a href="q-answer.php" class="btn waves-effect waves-light create-btn z-depth-1 light-blue accent-3 right submit-form">
                            ارسال
                            </a>
               
                </div>
               
    </div>
    <!--end container-->

<?php include 'footer.php'; ?>
</body>

</html>



