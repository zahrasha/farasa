<?php include 'head.php'; ?>
</head>
<body>
<?php include 'header.php'; ?>
    <!--start container-->
    <div class="container">
        <div class="row margin-bottom-0">
            <!--Top title-->
            <div class="col s12 m12 l12">
                <h5 class="breadcrumbs-title "><i class="mdi-action-home"></i>گزینه ها</h5>
            </div>
        </div>
        <div class="row">
        <div class="col l12 m12 s12">
            <div class="col s12 right">
                <div class=" card z-depth-1 card-content white">
                    <form action="#">
                        <div class="col s12 m6 l3 right">
                            <div class="input-field ">
                                <i class="mdi-maps-local-offer prefix"></i>
                                <input id="gymname" type="text" class="validate">
                                <label for="gymname" class="">نام سازمان</label>
                            </div>
                        </div>
                        <div class="col s12 m6 l3 right">
                            <div class="input-field ">
                                <i class="mdi-social-person prefix"></i>
                                <input id="username" type="text" class="validate">
                                <label for="username" class="">کاربر مسئول</label>
                            </div>
                        </div>
                        <div class="col s12 m6 l3 right">
                            <div class="input-field">
                                <label class="date-picker-lbl" for="date-from"> تاریخ عضویت از </label>
                                <i class="mdi-editor-insert-invitation prefix "></i>
                                <input type="text" id="date-from" class="validate pdate"/>
                            </div>
                        </div>
                        <div class="col s12 m6 l3 right">
                            <div class="input-field">
                                <label class="date-picker-lbl" for="date-to">تاریخ عضویت تا</label>
                                <i class="mdi-editor-insert-invitation prefix"></i>
                                <input type="text" id="date-to" class="validate pdate"/>
                            </div>
                        </div>
                        <div class="clear"></div>
                        <div class="col s12 m6 l3 right">
                            <div class="input-field farzan-select">
                                <i class="mdi-communication-location-on prefix "></i>
                                <label> استان</label>
                                <select title="استان">
                                    <option value="1">گزینه 1</option>
                                    <option value="2">گزینه 2</option>
                                    <option value="3">گزینه 3</option>
                                </select>
                            </div>
                        </div>
                        <div class="col s12 m6 l3 right">
                            <div class="input-field farzan-select">
                                <i class="mdi-communication-location-on prefix "></i>
                                <label>شهر</label>
                                <select title="شهر">
                                    <option value="1">گزینه 1</option>
                                    <option value="2">گزینه 2</option>
                                    <option value="3">گزینه 3</option>
                                </select>
                            </div>
                        </div>

                        <div class="input-field col s12 m4 l3 right mycheckbox">
                            <input type="checkbox" id="barber">
                            <label for="barber" class="checkbox-text margin-bottom-0"> متن اصلی</label>
                        </div>
                        <div class="input-field col s12 m4 l3 right myradio">
                            <input type="radio" name="tick" id="women">
                            <label for="women" class="checkbox-text black-text" style="font-size: 12pt">
                              <span>تست</span>
                            </label>
                        </div>

                        <button class="btn waves-effect waves-light create-btn z-depth-1 light-blue accent-3 left submit-form"
                                type="button">جستجو
                        </button>

                    </form>
                    <div class="clear margin-bottom-10"></div>
                </div>

                  
          
            </div>
        </div>
    </div>
    </div>
    <!--end container-->

<?php include 'footer.php'; ?>
</body>

</html>



