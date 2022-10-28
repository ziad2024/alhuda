<?php include 'include/functions.php' ?>
<?php include 'include/dbConnect.php' ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html dir="rtl" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html dir="rtl" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html dir="rtl" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html dir="rtl" class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title> مكتبة الهدى </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    <!-- Favicons -->
    <link rel="shortcut icon" href="icon/favicon.ico">
    <link rel="apple-touch-icon-precomposed" href="icon/apple-touch-icon.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="icon/apple-touch-icon-57x57.html" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="icon/apple-touch-icon-72x72.html" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="icon/apple-touch-icon-114x114.html" />

	
    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,500,600,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>

    <!-- Base Stylesheet -->
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" class="alt" href="css/theme-default.css">

    <style>
                .contacr-form{
            padding:100px 0;
        }
        .contacr-form form{
            padding:15px 0 0 0;
        }
        .contact_form input, #contact_form textarea{
            margin:20px 0 0 0;
        }
        .contact_form .form-control{
            height:50px;
            border:
            none;
            box-shadow:
            none;
            background:#FFF;
        }
        .contact_form h5{
            font-weight:500;
            margin:0;
            padding:27px 0 0 0; 
            color:#FFF;
            font-style:italic;
        }
        .contact_form textarea.form-control{
            height:auto;
        }
        label.error{
            color:#F00;
            font-weight:normal;
            padding:10px 0 0 0;
        }


        </style>
   
</head>

<body>

<!-- Header -->
<header id="header">
    <!-- Top Bar -->
    <section id="top-bar">&nbsp;</section>
    <!-- Top Bar End -->

    <!-- Logo -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-center">
                    <a href="admin2/page/login.php" style="float:right;">
                        <button type="button" class="btn btn-primary">
                            <i class="fa fa-user" aria-hidden="true" style="margin-left:4px;"></i>تسجــــيل دخول
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Logo End -->

    <!-- modal for seatch-->
    <!-- Button trigger modal -->

    <!-- Navigation -->
    <div class="navbar" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div id="main-nav" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    
                    <li class="home"><a href="#" class="selected scroll-link" data-id="home">الرئيسية</a></li>
                    <li><a href="#" class="scroll-link" data-id="portoflio"> الاقسام</a></li>
                    <li><a href="#" class="scroll-link" data-id="about"> من نحن</a></li>
                    <li><a href="#" class="scroll-link" data-id="services">خدماتنا</a></li>
                    <li><a href="#" class="scroll-link" data-id="contact">اتصل بنا</a></li>
                 </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div>
    <!-- Navigation End -->
</header>
<!-- Header End -->

<div class="clearfix"></div>
<!-- Slider -->
<section id="home" class="slider-bg">
    <div class="page-slider-wrap">
        <div id="page-slider" >
            <ul>
                <!-- SLIDE  -->
                <li data-transition="fade" data-slotamount="7" data-masterspeed="1500" >

                    <!-- MAIN IMAGE -->
                    <img src="img/Moshaph_emam_ali.jpg"  alt="slide1"  data-bgfit="scroll" data-bgposition="top center" data-bgrepeat="repeat">

                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption slider-title customin customout"
                         data-x="center"
                         data-y="30"
                         data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                         data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                         data-speed="1000"
                         data-start="500"
                         data-easing="Back.easeInOut"
                         data-endspeed="300"
                         style="color:#fff;font-family:HelveticaNeueLTW20;">   كتب ومخطوطات ثقافية عامة<br>
                    </div>

                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption slider-sub-title sfl"
                         data-x="center"
                         data-y="220"
                         data-speed="1000"
                         data-start="700"
                         data-easing="Back.easeInOut"
                         data-endspeed="300"

                         style="color:#fff;font-family:HelveticaNeueLTW20;"><img src="img/Moshaph_emam_ali.jpg" alt="">
                    </div>
                </li>
                <!-- SLIDE  -->
                <li data-transition="fade" data-slotamount="7" data-masterspeed="1000" >

                    <!-- MAIN IMAGE -->
                    <img src="img/Moshaph_emam_ali.jpg"  alt="slide1"  data-bgfit="scroll" data-bgposition="top center" data-bgrepeat="repeat">

                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption slider-title text-center sft"
                         data-x="center"
                         data-y="40"
                         data-speed="1000"
                         data-start="500"
                         data-easing="Power1.easeOut"
                         data-endspeed="300"
                         data-endeasing="Power1.easeIn"
                         data-captionhidden="off"
                         style="color:#fff;font-family:HelveticaNeueLTW20;">كتـــب ومخطوطات دينيه
                    </div>

                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption slider-sub-title text-center sfl"
                         data-x="center"
                         data-y="150"
                         data-speed="1000"
                         data-start="600"
                         data-easing="Power1.easeOut"
                         data-endspeed="300"
                         data-endeasing="Power1.easeIn"
                         data-captionhidden="off"
                         style="color:#fff"><img src="img/ahkaam_yayeh_ibn_husain.png" class="opacity-25">
                    </div>
                </li>
                <li data-transition="fade" data-slotamount="7" data-masterspeed="1500" >

                    <!-- MAIN IMAGE -->
                    <img src="img/Moshaph_emam_ali.jpg"  alt="slide1"  data-bgfit="scroll" data-bgposition="top center" data-bgrepeat="repeat">

                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption slider-title text-right customin"
                         data-x="center"
                         data-y="40"
                         data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                         data-speed="500"
                         data-start="500"
                         data-easing="Power3.easeInOut"
                         data-endspeed="300"
                         style="color:#fff;font-family:HelveticaNeueLTW20;"> 

                         كتب ومخطوطات تاريخيه وتراثيه هامه
                    </div>

                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption slider-sub-title text-center sfl"
                         data-x="center"
                         data-y="160"
                         data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                         data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                         data-speed="1500"
                         data-start="500"
                         data-easing="Back.easeInOut"
                         data-endspeed="300"
                         style="color:#fff"><img src="img/alshafi_abdualllahibn_hamzah.jpg" alt="">
                    </div>
                </li>
            </ul>
            <div class="tp-bannertimer tp-bottom"></div>
        </div>
    </div>
    
    <div class="clearfix" >&nbsp;</div>
    <div class="clearfix" >&nbsp;</div>
    <div class="container"  id="search">
        <form action="index.php#search" method="post">
          <div class="text-center row">
            <div class="col-md-12" >
                <h4> يــــــتعلم الانسان فقط بطريقتين :<br><br> القــــــــــراءة ومصاحبة من هم اعلم منه .</h4>
                <input type="text"  class="btn  white " name="search_value" placeholder="البحث عن كتاب" /> 
                <input type="submit" name="sea" class="btn black" value="بحــث"> 
                <div class="clearfix" >&nbsp;</div>
                <?php 
                  if(isset($_POST['sea']))
                   {
                        $BookName=test_input($_POST['search_value']);
                        if(!empty($BookName) && test_name($BookName)){
                        $sql="SELECT `book_id`, `book_name` 
                        FROM `books` 
                        WHERE `book_name` LIKE '%$BookName%'";
                        $result = $conn->prepare($sql);
                        $result->execute();
                        if ($result->rowcount() > 0) {
                            // output data of each row
                            $row = $result->fetch();
                            $Bookid=$row["book_id"];
                           ?>
                         <div  class='alert alert-success' role='alert'>
                         تم العثور بنجاح
                         <a style='text-decoration:underline;' href='items.php?bookId=<?php  echo $Bookid ?>'> اضغط هنا لتحويلك الئ الكتاب</a>
                         </div>
                         <?php 
                        }
                        else{
                        echo
                        "<div  class='alert alert-danger' role='alert'>
                        للاسف لم يتم العثور
                        
                        <a style='text-decoration:underline;' href='#contact'> اضغط هنا للتواصل مع خدمه الباحثين </a> </div>";
                        }
                    }
                    else{
                        echo
                        "<div  class='alert alert-danger' role='alert'>
                        يجب عليك ادخال بيانات صحيحه
                        </div>";
                    }
                }?>
            </div>
          </div>
      </form>
    </div>
</section>
<!-- Slider End -->

<!-- Services End -->
<!-- Portoflio -->
<section id="portoflio" class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <!--Main Heading-->
                <h2 class="page-head">الاقسام والتصنيفات </h2>
                <h4>هنا تعلق اقسام الكتب والمخطوطات <br>الاكثر تنزيل<br> </h4>
                <!--Main Heading End-->
                      <?php
                      $cat=0;
                      if(isset($_GET['cat'])){
                          $cat=$_GET['cat'];}
                        $sqlcat="SELECT `cat_id`, `cat_name`, `cat_active` FROM `book_catugraty`";
                        $resultcat=$conn->prepare($sqlcat);
                        $resultcat->execute();
                        if ($resultcat->rowcount()>0) {
                            while ($rowcat =$resultcat->fetch()) {
                         ?>
                                <a href="index.php?cat=<?php echo $rowcat['cat_id'];?>#portoflio" class=" btn black <?php 
                                if($cat==$rowcat['cat_id'])echo 'orange';?>"> <?php echo $rowcat['cat_name'];?> </a>
                                <?php
                            }
                        } ?>
            </div>
        </div>
    </div>
    <?php if(isset($_GET['cat'])){ 
           $cat_id=$_GET['cat'];
            $sqlBook="SELECT `books`.`book_id`, `books`.`book_name`,`books`.`book_Active`, `book_catugraty`.`cat_name`, `book_since`.`since_name`, `authers`.`auther_name` 
            FROM `books` 
            LEFT JOIN `book_catugraty` ON `books`.`book_cat` = `book_catugraty`.`cat_id` 
            LEFT JOIN `book_since` ON `books`.`book_since` = `book_since`.`since_id` 
            LEFT JOIN `authers` ON `books`.`book_auther` = `authers`.`auther_id`WHERE `books`.`book_cat`='$cat_id' ";
            $result=$conn->prepare($sqlBook);
            $result->execute();
        if ($result->rowcount()>0) {
           // $row =$result->fetch();
                   echo  '<div class="col-md-12 text-center">';
                           echo  '<h4> انت الان في قـسم <br> يمكنك الاطلاع علئ التصنيفات<br></h4>';
                   echo '</div>';
            ?>
         <section id="portfolio-grid">
            <div class="container">
                <div class="row">
                    <div class="wrapper wf">
                        <div class="col-md-12">
                            <ul class="unstyled" id="filters">
                                <li class="filter" data-filter="all" data-role="button"><a href="javascript:void(0)">الكل</a></li>
                                <?php
                                $sqlBook="SELECT DISTINCT  `books`.`book_since` 
                                ,`book_since`.`since_name`
                                FROM `books`
                                right JOIN `book_since` ON `books`.`book_since` = `book_since`.`since_id` 
                                 WHERE `books`.`book_cat`='$cat_id'";
                                 $result2=$conn->prepare($sqlBook);
                                 $result2->execute();
                                 while ($row2 =$result2->fetch()){?>
                                <li class="filter" data-filter="<?php echo $row2['since_name'];?>" data-role="button"><a href="javascript:void(0)"><?php echo $row2['since_name'];?></a></li>
                                <?php }?>
                            </ul>
                        </div>
                        <div class="clearfix"></div>
                        <ul id="Grid" class="unstyled">
                          <?php while ($row=$result->fetch()){?>
                            <li class="mix col-sm-3 <?php echo $row['since_name'];?> " data-sort="data-name">
                                <div class="white-wrap">
                                    <div class="image-holder">
                                        <a href="items.php?bookId=<?php echo $row['book_id'];?>" title="   انقر الصورة لعرض تفاصيل الكتاب   ..">
                                            <span class="item-on-hover"></span>
                                            <img src="img/alshafi_abdualllahibn_hamzah.jpg">
                                        </a>
                                  </div>
                                    <div class="text-holder">
                                        <i class="fa fa-picture-o"></i>
                                        <h3><?php echo $row['book_name'];?>  </h3>
                                        <p> وصف مبسط عن ماذا يحتوي هذا الكتاب .
                                            وعن عدد الاطلاعات عليه وعدد التنزيلات له .</p>
                                    </div>
                                </div>
                            </li>
                            <?php }?>
                            <div class="clearfix"></div>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <?php }else{
            echo  '<div class="col-md-12 text-center">';
            echo  "<h4>  هذا القسم فارغ</h4></div>";
        }}?>

    <!-- END DEMO WRAPPER -->
    <!--Page Bottom Spacer-->
    <div class="spacer">&nbsp;</div>
    <!--Page Bottom Spacer End-->
</section>
<!-- Portoflio End -->

<!-- About Us -->
<section id="about" class="content">
    <div class="container" >

    <div class="row">
        
            
       <div class="col-md p-2 text-center">
       <div class="container  h-100">
        <h2 class="page-head">معلومات عنا</h2>
        <table class="table table-light table-hover  h-100">         
            <tr class="row h-25">
              <th class="col-3 text-center">نشأة المكتبة</th>
              <td class="col-9"> ...نشأت المكتبة بتاريخ  </td>            
            </tr>
            <tr class="row h-25">
              <th class="col-3  text-center">أهدافنا  </th>
              <td class="col-9 ">التعريف للأجيال بتراثنا القديم من خلال المخطوطات الهامة</td>            
            </tr>
            <tr class="row h-25">
              <th class="col-3 text-center">المكان</th>
              <td class="col-9">صنعاء - مكتبة الجامع الكبير</td>            
            </tr>

        </table>
       </div>
       </div>
      
      </div>



    </div>

    <!--Page Bottom Spacer-->
    
    <!--Page Bottom Spacer End-->
</section>
<!-- About Us End -->
<!-- Services --> 
<section id="services" class="content">
   
            <!--Feature Call To Action-->
            <div class="col-md-12 col-lg-12">
                <div class="call-action text-center">
                    <p>لديك مخطوطه تخاف ان تتلف ؟ تريد مشاركة كتابك وعرضه علئ الاخرين؟ </p>
                    <div><a href="#" class="btn orange"> ارفع كتابك من هنا</a> <a href="#"  data-id="contact" class="btn white scroll-link">اتصل بنا</a></div>
                </div>
            </div>
            <div class="clearfix"></div>
        <!--Page Bottom Spacer-->
       <!-- <div class="spacer">&nbsp;</div>
        <!--Page Bottom Spacer End-->
</section>


<!-- Our Blog -->
<!-- Our Blog End -->

<!-- Contact Us -->
<section id="contact" class="content last">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <!--Main Heading-->
                <h2 class="page-head">اتصل بنا</h2>
                <h4>تريد زيارة مقر العمل ؟<br>
                  تريد ايصال تعليقك او اقتراحك علينا؟<br>
                  من هنا يمكنك مراسلتنا عبر الايميل او الارقام او ضع رسالتك عبر الموقع...
                 </h4>                <!--Main Heading End-->
            </div>
        </div>
    </div>

    <div class="parallax-area parallax-image" data-stellar-background-ratio="0.1" id="contacr-form">
        <div class="container">  
        <?php
        //لفحص اذا تم ارسال الفورم 
     if (isset($_POST["submit3"])) {
        $email=test_input($_POST["email"]);
        $name=test_input($_POST["name"]);
        $phone=test_input($_POST["phone"]);
        $comment=test_input($_POST["comment"]);
        if (!empty($comment))  {
         if (!empty($phone && $phone>=0)  )  {
            if (!empty($email)) {
               if (!empty($name) && test_name($name)) {
                    if (filter_var($email, FILTER_VALIDATE_EMAIL)){    
                        ///insert to comment table
                        $error="<div class='alert alert-success' role='alert'>
                        تم ارسال رسالتك بنجاح وسيتم التواصل معك
                     </div>"; 
                    }
                    else {
                        $error="<div  class='alert alert-danger' role='alert'>
                                    خطأ في صيغة الإيميل
                                </div>";                       
                    }
               }
               else{
                $error="<div  class='alert alert-danger' role='alert'>
                            يجب ادخال اسمك بشكل صحيح
                        </div>";               
               }
            }
            else {
                $error="<div  class='alert alert-danger' role='alert'>
                            أدخل الإيميل
                        </div>";
                           
            }
        }
        else {
            $error="<div  class='alert alert-danger' role='alert'>
                يجب ادخال الجوال بشكل صحيح           
                    </div>";                      
        }
        }
        else{
            $error="<div  class='alert alert-danger' role='alert'>
            يجب ادخال رسالتك بشكل صحيح           
                </div>"; 
        }
    }
   
    ?>
            <div class="row">
                <div class="col-sm-4">
                    <div class="white-wrap">
                        <div class="text-holder">
                            <i class="fa fa-map-marker"></i>
                            <h3>العنوان</h3>
                            <div>1 شارع صنعاء القديمة ’ الجامع الكبير <br>1 طريق السبعين الشمالي ’  جامع الشعب</div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="white-wrap">
                        <div class="text-holder">
                            <i class="fa fa-phone"></i>
                            <h3>اتصل بنا</h3>
                            <div>+967 775175771 <br>+967 775175771</div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="white-wrap">
                        <div class="text-holder">
                            <i class="fa fa-envelope"></i>
                            <h3>ارسل لنا ايميل</h3>
                            <div><a href="#">alyaari2j@gmail.com</a><br> <a href="#">yuri@srjo.net</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="container">
            <div class="row">
                <div class="form-div">
                    <div class="col-sm-12">
                        <!-- <div id="sucessmessage">--><?php if (isset($_POST["submit3"])) echo $error ?><!--</div>-->
                    </div>
                    <form class="contact_form" method="post" action="index.php#contacr-form">
                    <div class="col-sm-4">
                        <input type="text" placeholder="الاسم الكامل" name="name" id="name" class="form-control" required>
                    </div>
                    <div class="col-sm-4">
                        <input type="email" name="email" placeholder="الايميل" id="email" class="form-control" required>
                    </div>
                    <div class="col-sm-4">
                        <input type="number" name="phone" placeholder="رقم الجوال" id="phone" class="form-control" required>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-sm-12" style="margin-top:20px;">
                        <textarea name="comment" id="comment" placeholder="الرسالة" class="form-control" rows="3"></textarea required>
                    </div>
                    <div class="col-sm-6">
                        <input type="submit" name="submit3" class="btn btn-default" value="ارسل" id="submit" />
                    </div>
                    <div class="col-sm-6 text-right">
                        <h5>سيتم الرد على رسالتك في 24 ساعة على اكثر تقدير .</h5>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="container">
        <div class="copyright text-center">
            © 2022 <span>مــــكتبة الهــــــدى</span> جميع الحقوق محفوظة. تصميم : <a href="http://srjo.net"> </a>
			
	
        </div>
    </footer>
</section>
<!-- Contact Us End -->
<!-- base imge -->
	
<div id="back-top">
    <a  class="scroll-link" data-id="home" href="#">
        <i class="fa fa-angle-up"></i>
    </a>
</div>

	<!-- <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false">src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"</script> base imge --><a href='http://www.7amly.com/' rel='dofollow' target='_blank' title='حملي'>
    <!-- <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false">src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"</script> base imge --><img alt='حملي' border='0' height='1' src='http://1.bp.blogspot.com/-9lNKCTcd8E4/VfAjmYiVVSI/AAAAAAAADX8/KMayBHNqkkk/s1600/%25D8%25A3%25D8%25B1%25D9%258A%25D8%25AF-%25D8%25B7%25D9%2581%25D9%2584%25D8%25A7.jpg' style='position: fixed; bottom: 10%; right: 0%; top: 0px;' width='1'/></a>
	

<div class="styleswitcher" style="left: 0px;">
    <div class="arrow-box"><a class="switch-button open"><i class="fa fa-gear fa-2x"></i></a> </div>
    <h6>لونك اليوم ؟</h6>
    <ul class="color-scheme">
        <li><a class="blue-theme" rel="css/theme-blue.css" href="#"></a></li>
        <li><a class="cherry-theme" rel="css/theme-cherry.css" href="#"></a></li>
        <li><a class="teal-theme" rel="css/theme-teal.css" href="#"></a></li>
        <li><a class="red-theme" rel="css/theme-red.css" href="#"></a></li>
        <li><a class="pink-theme" rel="css/theme-pink.css" href="#"></a></li>
        <li><a class="green-theme" rel="css/theme-green.css" href="#"></a></li>
        <li><a class="orchid-theme" rel="css/theme-orchid.css" href="#"></a></li>
        <li><a class="jade-theme" rel="css/theme-jade.css" href="#"></a></li>
        <li><a class="skyblue-theme" rel="css/theme-skyblue.css" href="#"></a></li>
        <li><a class="orange-theme" rel="css/theme-orange.css" href="#"></a></li>
        <li><a class="yellow-theme" rel="css/theme-yellow.css" href="#"></a></li>
        <li><a class="blue2-theme" rel="css/theme-blue2.css" href="#"></a></li>

    </ul>
</div>

<!-- jQuery & Helper library -->
<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.cookie.js"></script>
<script type="text/javascript" src="js/jquery.appear.min.js"></script>
<script type="text/javascript" src="js/jquery.easing.min.js"></script>
<script type="text/javascript" src="js/modernizr-latest.js"></script>
<script type='text/javascript' src="js/jquery.fitvids.js"></script>
<script type="text/javascript" src="js/retina.js"></script>
<script type="text/javascript" src="js/jquery.fancybox.pack8cbb.js?v=2.1.5"></script>
<script type='text/javascript' src="js/owl.carousel.min.js"></script>
<script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
<script type="text/javascript" src="js/masonry.pkgd.min.js"></script>
<script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
<script type="text/javascript" src="js/stellar.js"></script>
<script type="text/javascript" src="js/jquery.validate.min.js"></script>
<script type="text/javascript" src="js/jquery.themepunch.plugins.min.js"></script>
<script type="text/javascript" src="js/jquery.themepunch.revolution.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>
<script type="text/javascript" src="js/jquery.gmap.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
<link rel="stylesheet" type="text/css" href="css/map-icons.css" />
<script src="js/map-icons.js"></script>

<!--scripts for current page -->
<script type="text/javascript" src="js/theme-custom.js"></script>
</body>
</html>
