<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ URL::asset('fonts/font.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('css/font-awesome/css/font-awesome.min.css') }}">

</head>
<body>
<header>
        <div class="logining" id="loginf">
                <form action="/" method="post" class="loginform formanimate">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="closelogin">
            <span onclick="document.getElementById('loginf').style.display='none'" class="closebutton" title="Close logining">
            <i class="fa fa-close"></i></span>
                        </div>
                        <div class="logincontain">
                                <label><b>نام کاربری:</b></label>
                                <input type="text" name="user" required="" placeholder="نام کاربری" oninvalid="this.setCustomValidity('نام کاربری را وارد کنید')" >
                                <label><b>رمز عبور:</b></label>
                                <input type="text" name="password" required="" placeholder="رمز عبور" oninvalid="this.setCustomValidity('رمز عبور را وارد کنید')"  >
                                <button type="submit">ورود</button>
                                <label>
                                        <input type="checkbox" name="remember me" checked="checked">مرا بخاطر بسپار
                                </label>
                        </div>
                        <div class="cancelcontain">
                                <button type="button" onclick="document.getElementById('loginf').style.display='none'" class="cancelbtn">لغو</button>
                                <span class="psw"><a href="#">فراموشی رمز</a></span>
                        </div>
                </form>
        </div>
        <div class="header">
                <div class="empty50px"></div>
                <div class="logcont col-12">
                        <div class="logcontainer">
                                <div class="logincont col-12 col-g6">
                                        <div class="login"><a href="#" onclick="document.getElementById('loginf').style.display='block'">
                                                        <i class="fa fa-lock"></i><span> وارد شوید</span>
                                                </a></div>
                                        <div class="login"><a href="#">
                                                        <i class="fa fa-pencil-square-o"></i><span>ثبت نام</span>
                                                </a></div>
                                        <div class="login"><a href="#">
                                                        <i class="fa fa-th-list"></i><span>لیست آرزو</span>
                                                </a></div>
                                        <div class="login"><a href="#"><span></span></a></div>
                                </div>
                                <div class="loginfo col-g6">
                                        <div><a href="#">
                                                        <i class="fa fa-phone"></i><span>07733548011</span>
                                                </a></div>
                                        <div><a href="#">
                                                        <i class="fa fa-truck"></i><span>اطلاعات ارسال</span>
                                                </a></div>
                                        <div><a href="#">
                                                        <i class="fa fa-reply-all"></i><span>برگشت محصول</span>
                                                </a></div>
                                        <div><a href="#">
                                                        <i class="fa fa-phone"></i><span>07733548011</span>
                                                </a></div>
                                </div>
                        </div>
                </div>
                <div class="headercont">
                        <div class="logo col-g3">
                                <a href="index.html"><img src="imgs/logo.jpg"/></a>
                        </div>
                        <div class="sabadcat col-12 col-g3">
                                <div class="sabadcont">
                                        <i class="fa fa-shopping-bag sabadmoshkel"></i><span>سبد</span>
                                </div>
                                <div class="sabadcont smallsearch col-g12" onclick="pulldown('searchdown')">
                                        <i class="fa fa-search"></i><span>جستجو</span>
                                </div>
                                <div class="midlogo">نام سایت</div>
                                <div class="catcont col-3 ">
                                        <div class="sidenavback" id="mysidenavback" onclick="closeNav()"></div>
                                        <div class="navbutton" id="navbutton" onclick="openNav()"><a href="#">
                                                        <i class="fa fa-bars"></i><span>منو</span></a>
                                        </div>
                                        <div id="mySidenav" class="sidenav">
                                                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">
                                                        <i class="fa fa-close"></i></a>
                                                <div class="sidenavediv" style="border-right: 10px solid #c9430a; border-top: none;">
                                                        <div class="sidenavrow" onclick="showdiv('zirsidenav1');">
                                                                <a href="#">
                                                                        <span>کامپیوتر</span>
                                                                </a>
                                                                <div class="sidenavarrow"></div>
                                                        </div>
                                                        <div class="zirsidenav" id="zirsidenav1">
                                                                <div class="sidenavediv">
                                                                        <div class="zirsidenavrow">
                                                                                <a href="#">
                                                                                        <span>گرافیک</span>
                                                                                </a>
                                                                                <div class="sidenavarrow"></div>
                                                                        </div>
                                                                </div>
                                                                <div class="sidenavediv">
                                                                        <div class="zirsidenavrow">
                                                                                <a href="#">
                                                                                        <span>کیس</span>
                                                                                </a>
                                                                                <div class="sidenavarrow"></div>
                                                                        </div>
                                                                </div>
                                                                <div class="sidenavediv">
                                                                        <div class="zirsidenavrow">
                                                                                <a href="#">
                                                                                        <span>مانیتور</span>
                                                                                </a>
                                                                                <div class="sidenavarrow"></div>
                                                                        </div>
                                                                </div>
                                                                <div class="sidenavediv">
                                                                        <div class="zirsidenavrow">
                                                                                <a href="#">
                                                                                        <span>هارد</span>
                                                                                </a>
                                                                                <div class="sidenavarrow"></div>
                                                                        </div>
                                                                </div>
                                                        </div>
                                                </div>
                                                <div class="sidenavediv" style="border-right: 10px solid #5fe1e3;">
                                                        <div class="sidenavrow" onclick="showdiv('zirsidenav2')">
                                                                <a href="#">
                                                                        <span>موبایل</span>
                                                                </a>
                                                                <div class="sidenavarrow"></div>
                                                        </div>
                                                        <div class="zirsidenav" id="zirsidenav2">
                                                                <div class="sidenavediv">
                                                                        <div class="zirsidenavrow">
                                                                                <a href="#">
                                                                                        <span>سامسونگ</span>
                                                                                </a>
                                                                                <div class="sidenavarrow"></div>
                                                                        </div>
                                                                </div>
                                                                <div class="sidenavediv">
                                                                        <div class="zirsidenavrow">
                                                                                <a href="#">
                                                                                        <span>اپل</span>
                                                                                </a>
                                                                                <div class="sidenavarrow"></div>
                                                                        </div>
                                                                </div>
                                                                <div class="sidenavediv">
                                                                        <div class="zirsidenavrow">
                                                                                <a href="#">
                                                                                        <span>هووای</span>
                                                                                </a>
                                                                                <div class="sidenavarrow"></div>
                                                                        </div>
                                                                </div>
                                                                <div class="sidenavediv">
                                                                        <div class="zirsidenavrow">
                                                                                <a href="#">
                                                                                        <span>سونی</span>
                                                                                </a>
                                                                                <div class="sidenavarrow"></div>
                                                                        </div>
                                                                </div>
                                                        </div>
                                                </div>
                                                <div class="sidenavediv" style="border-right: 10px solid #af06e3;">
                                                        <div class="sidenavrow" onclick="showdiv('zirsidenav3')">
                                                                <a href="#">
                                                                        <span>کتاب</span>
                                                                </a>
                                                                <div class="sidenavarrow"></div>
                                                        </div>
                                                        <div class="zirsidenav" id="zirsidenav3">
                                                                <div class="sidenavediv">
                                                                        <div class="zirsidenavrow">
                                                                                <a href="#">
                                                                                        <span>رمان</span>
                                                                                </a>
                                                                                <div class="sidenavarrow"></div>
                                                                        </div>
                                                                </div>
                                                                <div class="sidenavediv">
                                                                        <div class="zirsidenavrow">
                                                                                <a href="#">
                                                                                        <span>روانشناسی</span>
                                                                                </a>
                                                                                <div class="sidenavarrow"></div>
                                                                        </div>
                                                                </div>
                                                                <div class="sidenavediv">
                                                                        <div class="zirsidenavrow">
                                                                                <a href="#">
                                                                                        <span>افسانه ای</span>
                                                                                </a>
                                                                                <div class="sidenavarrow"></div>
                                                                        </div>
                                                                </div>
                                                                <div class="sidenavediv">
                                                                        <div class="zirsidenavrow">
                                                                                <a href="#">
                                                                                        <span>اقتصاد</span>
                                                                                </a>
                                                                                <div class="sidenavarrow"></div>
                                                                        </div>
                                                                </div>
                                                        </div>
                                                </div>
                                                <div class="sidenavediv" style="border-right: 10px solid #097a19;">
                                                        <div class="sidenavrow" onclick="showdiv('zirsidenav4')">
                                                                <a href="#">
                                                                        <span>لباس</span>
                                                                </a>
                                                                <div class="sidenavarrow"></div>
                                                        </div>
                                                        <div class="zirsidenav" id="zirsidenav4">
                                                                <div class="sidenavediv">
                                                                        <div class="zirsidenavrow">
                                                                                <a href="#">
                                                                                        <span>زنانه</span>
                                                                                </a>
                                                                                <div class="sidenavarrow"></div>
                                                                        </div>
                                                                </div>
                                                                <div class="sidenavediv">
                                                                        <div class="zirsidenavrow">
                                                                                <a href="#">
                                                                                        <span>مردانه</span>
                                                                                </a>
                                                                                <div class="sidenavarrow"></div>
                                                                        </div>
                                                                </div>
                                                                <div class="sidenavediv">
                                                                        <div class="zirsidenavrow">
                                                                                <a href="#">
                                                                                        <span>پسرانه</span>
                                                                                </a>
                                                                                <div class="sidenavarrow"></div>
                                                                        </div>
                                                                </div>
                                                                <div class="sidenavediv">
                                                                        <div class="zirsidenavrow">
                                                                                <a href="#">
                                                                                        <span>دخترانه</span>
                                                                                </a>
                                                                                <div class="sidenavarrow"></div>
                                                                        </div>
                                                                </div>
                                                        </div>
                                                </div>
                                                <div class="sidenavediv" style="border-right: 10px solid #00c7ae;">
                                                        <div class="sidenavrow" onclick="showdiv('zirsidenav5')">
                                                                <a href="#">
                                                                        <span>آشپزخانه</span>
                                                                </a>
                                                                <div class="sidenavarrow"></div>
                                                        </div>
                                                        <div class="zirsidenav" id="zirsidenav5">
                                                                <div class="sidenavediv">
                                                                        <div class="zirsidenavrow">
                                                                                <a href="#">
                                                                                        <span>ظرفشویی</span>
                                                                                </a>
                                                                                <div class="sidenavarrow"></div>
                                                                        </div>
                                                                </div>
                                                                <div class="sidenavediv">
                                                                        <div class="zirsidenavrow">
                                                                                <a href="#">
                                                                                        <span>لباسشویی</span>
                                                                                </a>
                                                                                <div class="sidenavarrow"></div>
                                                                        </div>
                                                                </div>
                                                                <div class="sidenavediv">
                                                                        <div class="zirsidenavrow">
                                                                                <a href="#">
                                                                                        <span>یخچال</span>
                                                                                </a>
                                                                                <div class="sidenavarrow"></div>
                                                                        </div>
                                                                </div>
                                                                <div class="sidenavediv">
                                                                        <div class="zirsidenavrow">
                                                                                <a href="#">
                                                                                        <span>فریزر</span>
                                                                                </a>
                                                                                <div class="sidenavarrow"></div>
                                                                        </div>
                                                                </div>
                                                        </div>
                                                </div>
                                                <div class="empty50px" style="height: 40px;"></div>
                                                <div class="sidenavediv"><div class="sidenava">
                                                                <a href=""><i class="fa fa-home"></i>
                                                                        <span>خانه</span></a>
                                                        </div></div>
                                                <div class="sidenavediv"><div class="sidenava">
                                                                <a href="#" onclick="document.getElementById('loginf').style.display='block'"><i class="fa fa-lock"></i>
                                                                        <span>وارد شوید</span></a>
                                                        </div></div>
                                                <div class="sidenavediv"><div class="sidenava">
                                                                <a href=""><i class="fa fa-pencil-square-o"></i>
                                                                        <span>ثبت نام کنید</span></a>
                                                        </div></div>
                                                <div class="sidenavediv"><div class="sidenava">
                                                                <a href=""><i class="fa fa-th-list"></i>
                                                                        <span>لیست آرزوها</span></a>
                                                        </div></div>
                                                <div class="sidenavediv"><div class="sidenava">
                                                                <a href=""><i class="fa fa-phone"></i>
                                                                        <span>تماس با ما</span></a>
                                                        </div></div>
                                        </div>
                                </div>
                        </div>
                        <div class="search col-12 col-g6" id="searchdown">
                                <div class="searchbox">
                                        <input class="searchinput" type="search" name="sitesearch" placeholder="جستجو.....">
                                        <button class="searchbtn" ><i class="fa fa-search"></i></button>
                                </div>
                        </div>
                </div>
                <nav class="category col-12 invisible">
                        <div class="categorycontainer">
                                <div class="categorycont">
                                        <div class="home"><i class="fa fa-home"></i></div>
                                        <div class="home">کالا</div>
                                        <div class="home">دیجیتال</div>
                                        <div class="home">فرهنگ</div>
                                        <div class="home">ساعت</div>
                                </div>
                                <div class="categoryicon">
                                        <div class=""><i class="fa fa-facebook"></i></div>
                                        <div class=""><i class="fa fa-twitter"></i></div>
                                        <div class=""><i class="fa fa-google-plus-square"></i></div>
                                        <div class=""><i class="fa fa-envelope"></i></div>
                                </div>
                        </div>
                </nav>
        </div>
</header>
<div class="main1">
        <aside class="baside">
                <div class="specialoff">
                        <div class="spofhead">
                                پیشنهادهای ویژه
                        </div>
                        <div class="spofcontent">پوشاک<i class="fa fa-play"></i>
                                <div class="spofdetail">
                                        <div class="spof">
                                                <div class="spofcont">
                                                        <img class="spofimg" src="imgs/camera.jpg"/>
                                                        <p class="spofname col-12">Canon EOS 5D</p>
                                                        <hr>
                                                        <p class="spofprice col-12">$750.75</p>
                                                        <hr>
                                                        <div class="spoficon">
                                                                <i class="fa fa-shopping-cart"></i>
                                                                <i class="fa fa-th-list"></i>
                                                                <i class="fa fa-reply"></i>
                                                        </div>
                                                </div>
                                        </div>
                                        <div class="spof">
                                                <div class="spofcont">
                                                        <img class="spofimg" src="imgs/camera.jpg"/>
                                                        <p class="spofname col-12">Canon EOS 5D</p>
                                                        <hr>
                                                        <p class="spofprice col-12">$750.75</p>
                                                        <hr>
                                                        <div class="spoficon">
                                                                <i class="fa fa-shopping-cart"></i>
                                                                <i class="fa fa-th-list"></i>
                                                                <i class="fa fa-reply"></i>
                                                        </div>
                                                </div>
                                        </div>
                                        <div class="spof">
                                                <div class="spofcont">
                                                        <img class="spofimg" src="imgs/camera.jpg"/>
                                                        <p class="spofname col-12">Canon EOS 5D</p>
                                                        <hr>
                                                        <p class="spofprice col-12">$750.75</p>
                                                        <hr>
                                                        <div class="spoficon">
                                                                <i class="fa fa-shopping-cart"></i>
                                                                <i class="fa fa-th-list"></i>
                                                                <i class="fa fa-reply"></i>
                                                        </div>
                                                </div>
                                        </div>
                                        <div class="spof">
                                                <div class="spofcont">
                                                        <img class="spofimg" src="imgs/camera.jpg"/>
                                                        <p class="spofname col-12">Canon EOS 5D</p>
                                                        <hr>
                                                        <p class="spofprice col-12">$750.75</p>
                                                        <hr>
                                                        <div class="spoficon">
                                                                <i class="fa fa-shopping-cart"></i>
                                                                <i class="fa fa-th-list"></i>
                                                                <i class="fa fa-reply"></i>
                                                        </div>
                                                </div>
                                        </div>
                                </div>
                        </div>
                        <div class="spofcontent">دیجیتال<i class="fa fa-play"></i>
                                <div class="spofdetail">
                                        <div class="spof">
                                                <div class="spofcont">
                                                        <img class="spofimg" src="imgs/camera.jpg"/>
                                                        <p class="spofname col-12">Canon EOS 5D</p>
                                                        <hr>
                                                        <p class="spofprice col-12">$750.75</p>
                                                        <hr>
                                                        <div class="spoficon">
                                                                <i class="fa fa-shopping-cart"></i>
                                                                <i class="fa fa-th-list"></i>
                                                                <i class="fa fa-reply"></i>
                                                        </div>
                                                </div>
                                        </div>
                                        <div class="spof">
                                                <div class="spofcont">
                                                        <img class="spofimg" src="imgs/camera.jpg"/>
                                                        <p class="spofname col-12">Canon EOS 5D</p>
                                                        <hr>
                                                        <p class="spofprice col-12">$750.75</p>
                                                        <hr>
                                                        <div class="spoficon">
                                                                <i class="fa fa-shopping-cart"></i>
                                                                <i class="fa fa-th-list"></i>
                                                                <i class="fa fa-reply"></i>
                                                        </div>
                                                </div>
                                        </div>
                                        <div class="spof">
                                                <div class="spofcont">
                                                        <img class="spofimg" src="imgs/camera.jpg"/>
                                                        <p class="spofname col-12">Canon EOS 5D</p>
                                                        <hr>
                                                        <p class="spofprice col-12">$750.75</p>
                                                        <hr>
                                                        <div class="spoficon">
                                                                <i class="fa fa-shopping-cart"></i>
                                                                <i class="fa fa-th-list"></i>
                                                                <i class="fa fa-reply"></i>
                                                        </div>
                                                </div>
                                        </div>
                                        <div class="spof">
                                                <div class="spofcont">
                                                        <img class="spofimg" src="imgs/camera.jpg"/>
                                                        <p class="spofname col-12">Canon EOS 5D</p>
                                                        <hr>
                                                        <p class="spofprice col-12">$750.75</p>
                                                        <hr>
                                                        <div class="spoficon">
                                                                <i class="fa fa-shopping-cart"></i>
                                                                <i class="fa fa-th-list"></i>
                                                                <i class="fa fa-reply"></i>
                                                        </div>
                                                </div>
                                        </div>
                                        <div class="spof">
                                                <div class="spofcont">
                                                        <img class="spofimg" src="imgs/camera.jpg"/>
                                                        <p class="spofname col-12">Canon EOS 5D</p>
                                                        <hr>
                                                        <p class="spofprice col-12">$750.75</p>
                                                        <hr>
                                                        <div class="spoficon">
                                                                <i class="fa fa-shopping-cart"></i>
                                                                <i class="fa fa-th-list"></i>
                                                                <i class="fa fa-reply"></i>
                                                        </div>
                                                </div>
                                        </div>
                                </div>
                        </div>
                        <div class="spofcontent">کتاب<i class="fa fa-play"></i>

                        </div>
                        <div class="spofcontent">آشپزخانه<i class="fa fa-play"></i>
                        </div>
                </div>
                <div class="empty10px"></div>
                <div class="smslidecont col-12">
                        <div class="smslideheader">
                                <div class="smslidetitle">کالاهای پرطرفردار</div>
                                <div class="smslidebut">
                                        <a class="smslidenext" onclick="plusleftslide(-1)"><i class="fa fa-arrow-circle-right"></i></a>
                                        <a class="smslideprev" onclick="plusleftslide(1)"><i class="fa fa-arrow-circle-left"></i></a>
                                </div>
                        </div>
                        <div class="smslidebox">
                                <div class="smslidewide" id="wideslide">
                                        <div class="smslidecontent">
                                                <img src="imgs/vaio.jpg"/>
                                                <p class="spofname col-12">11111Sony se Vaio laptop</p>
                                                <hr>
                                                <p class="spofprice col-12">$750.75</p>
                                                <hr>
                                                <div class="spoficon">
                                                        <i class="fa fa-shopping-cart"></i> اضافه به سبد
                                                </div>
                                        </div>
                                        <div class="smslidecontent">
                                                <img src="imgs/vaio.jpg"/>
                                                <p class="spofname col-12">2222Sony se Vaio laptop</p>
                                                <hr>
                                                <p class="spofprice col-12">$750.75</p>
                                                <hr>
                                                <div class="spoficon">
                                                        <i class="fa fa-shopping-cart"></i> اضافه به سبد
                                                </div>
                                        </div>
                                        <div class="smslidecontent">
                                                <img src="imgs/vaio.jpg"/>
                                                <p class="spofname col-12">3333Sony se Vaio laptop</p>
                                                <hr>
                                                <p class="spofprice col-12">$750.75</p>
                                                <hr>
                                                <div class="spoficon">
                                                        <i class="fa fa-shopping-cart"></i> اضافه به سبد
                                                </div>
                                        </div>
                                        <div class="smslidecontent">
                                                <img src="imgs/vaio.jpg"/>
                                                <p class="spofname col-12">444444Sony se Vaio laptop</p>
                                                <hr>
                                                <p class="spofprice col-12">$750.75</p>
                                                <hr>
                                                <div class="spoficon">
                                                        <i class="fa fa-shopping-cart"></i> اضافه به سبد
                                                </div>
                                        </div>
                                        <div class="smslidecontent">
                                                <img src="imgs/vaio.jpg"/>
                                                <p class="spofname col-12">Sony se Vaio laptop</p>
                                                <hr>
                                                <p class="spofprice col-12">$750.75</p>
                                                <hr>
                                                <div class="spoficon">
                                                        <i class="fa fa-shopping-cart"></i> اضافه به سبد
                                                </div><script src="js/js.js"></script>
                                        </div>
                                </div>
                        </div>
                </div>
                <div class="empty10px"></div>
                <div class="brandcont">
                        <div class="lastnews">
                                <div class="brandcontimg"><img class="brandimg col-6" src="imgs/lenovo.png"/></div>
                                <div class="brandcontimg"><img class="brandimg col-6" src="imgs/asus.jpg"/></div>
                                <div class="brandcontimg"><img class="brandimg col-6" src="imgs/asus.png"/></div>
                                <div class="brandcontimg"><img class="brandimg col-6" src="imgs/lg.png"/></div>
                                <div class="brandcontimg"><img class="brandimg col-6" src="imgs/lenovo.png"/></div>
                                <div class="brandcontimg"><img class="brandimg col-6" src="imgs/asus.jpg"/></div>
                                <div class="brandcontimg"><img class="brandimg col-6" src="imgs/asus.png"/></div>
                                <div class="brandcontimg"><img class="brandimg col-6" src="imgs/lg.png"/></div>
                        </div>
                </div>

        </aside>
        <section class="col-12 col-g8 row1">
                <div class="slideshow-container col-12">
                        <div class="mySlides fade">
                                <img src="imgs/img_nature_wide.jpg">
                        </div>

                        <div class="mySlides fade">
                                <img src="imgs/img_fjords_wide.jpg">
                        </div>

                        <div class="mySlides fade">
                                <img src="imgs/img_mountains_wide.jpg">
                        </div>

                        <div class="mySlides fade">
                                <img src="imgs/img_nature_wide.jpg">
                        </div>

                        <div class="mySlides fade">
                                <img src="imgs/img_fjords_wide.jpg">
                        </div>

                        <div class="mySlides fade">
                                <div class="numbertext"></div>
                                <img src="imgs/img_mountains_wide.jpg">
                                <div class="text"></div>
                        </div>

                        <a class="prev" onclick="plusSlides(-1)">❮</a>
                        <a class="next" onclick="plusSlides(1)">❯</a>
                        <div class="dotcontain col-12">
                                <div class="dotcont" style="text-align:center">
                                        <span class="dot" onclick="currentSlide(1)"></span>
                                        <span class="dot" onclick="currentSlide(2)"></span>
                                        <span class="dot" onclick="currentSlide(3)"></span>
                                        <span class="dot" onclick="currentSlide(1)"></span>
                                        <span class="dot" onclick="currentSlide(2)"></span>
                                        <span class="dot" onclick="currentSlide(3)"></span>
                                </div>
                        </div>
                        <script src="js/js.js"></script>
                </div>

                <div class="gallerycont">
                        <div class="gallery">
                                <div class="col-12 gallerycol">
                                        <div class="gallerypr col-4 invisible">
                                                <span class="gallerytitle">عکس بامبی</span>
                                                <img src="imgs/bambi.jpg"/>
                                        </div>
                                        <div class="galleryprbig col-12 col-g8">
                                                <img src="imgs/doorbin.jpg"/>
                                        </div>
                                        <div class="gallerypr col-4 invisible">
                                                <span class="gallerytitle">عکس بامبی</span>
                                                <img src="imgs/bambi.jpg"/>
                                        </div>
                                        <div class="gallerypr col-6 col-g4">
                                                <span class="gallerytitle">عکس بامبی</span>
                                                <img src="imgs/bambi.jpg"/>
                                        </div>
                                        <div class="gallerypr col-6 col-g4">
                                                <span class="gallerytitle">عکس بامبی</span>
                                                <img src="imgs/bambi.jpg"/>
                                        </div>
                                </div>
                        </div>
                </div>
        </section>
        <aside class="col-3 col-g4 nextside">
                <div class="etelaat col-g12">
                        <div class="etela col-g12">
                                <i class="fa fa-truck etela1"></i>
                                <div class="etelatext">ارسال رایگان به تمامی نقاط کشور</div>
                        </div>
                        <div class="etela col-g12">
                                <i class="fa fa-shopping-basket etela2"></i>
                                <div class="etelatext">تضمین بازگشت کالا به صورت رایگان</div>
                        </div>
                        <div class="etela col-g12">
                                <i class="fa fa-truck etela3"></i>
                                <div class="etelatext">تضمین سالم بودن کالا</div>
                        </div>
                        <div class="etela col-g12">
                                <i class="fa fa-shopping-basket etela4"></i>
                                <div class="etelatext">تضمین برترین کیفیت</div>
                        </div>
                </div>
                <div class="productsidecont">
                        <div class="productside">
                                <div class="prsideheader">محصولات چپ </div>
                                <div class="prsidecont">
                                        <img src="imgs/bambi.jpg">
                                        <p class="prsidename"> عکس بامبی</p>
                                        <p class="prsideprice">17.68 $</p>
                                </div>
                                <div class="prsidecont">
                                        <img src="imgs/bambi.jpg">
                                        <p class="prsidename"> عکس بامبی</p>
                                        <p class="prsideprice">17.68 $</p>
                                </div>
                                <div class="prsidecont">
                                        <img src="imgs/bambi.jpg">
                                        <p class="prsidename"> عکس بامبی</p>
                                        <p class="prsideprice">17.68 $</p>
                                </div>
                                <div class="prsidecont prsidecontlast" style="border-bottom: none;">
                                        <img src="imgs/bambi.jpg">
                                        <p class="prsidename"> عکس بامبی</p>
                                        <p class="prsideprice">17.68 $</p>
                                </div>
                        </div>
                </div>
        </aside>
</div>
<div class="main2 clearfix">
        <div class="showclothcont">
                <div class="showclothheader">
                        <div class="showclothtitle" onclick=""><span>جانبی</span>
                        </div>
                        <div class="showclothtitle"><span>زیبایی</span>
                        </div>
                        <div class="showclothtitle"><span>کفش</span>
                        </div>
                        <div class="showclothtitle"><span>برترین</span>
                        </div>
                        <div class="showclothtitle"><span>انتخابی</span>
                        </div>
                </div>
                <div class="showclothdet" style="display: block;">
                        <div class="showclothimgs">
                                <div class="showclothimg">
                                        <img class="spofimg" src="imgs/camera.jpg"/>
                                        <p class="showclothname col-12">Canon EOS 5D</p>
                                        <hr>
                                        <p class="showclothprice col-12">$750.75</p>
                                        <hr>
                                        <div class="showclothicon">
                                                <i class="fa fa-shopping-cart"></i>
                                                <i class="fa fa-th-list"></i>
                                                <i class="fa fa-reply"></i>
                                        </div>
                                </div>
                        </div>
                        <div class="showclothimgs">
                                <div class="showclothimg">
                                        <img class="spofimg" src="imgs/camera.jpg"/>
                                        <p class="showclothname col-12">Canon EOS 5D</p>
                                        <hr>
                                        <p class="showclothprice col-12">$750.75</p>
                                        <hr>
                                        <div class="showclothicon">
                                                <i class="fa fa-shopping-cart"></i>
                                                <i class="fa fa-th-list"></i>
                                                <i class="fa fa-reply"></i>
                                        </div>
                                </div>
                        </div>
                        <div class="showclothimgs">
                                <div class="showclothimg">
                                        <img class="spofimg" src="imgs/camera.jpg"/>
                                        <p class="showclothname col-12">Canon EOS 5D</p>
                                        <hr>
                                        <p class="showclothprice col-12">$750.75</p>
                                        <hr>
                                        <div class="showclothicon">
                                                <i class="fa fa-shopping-cart"></i>
                                                <i class="fa fa-th-list"></i>
                                                <i class="fa fa-reply"></i>
                                        </div>
                                </div>
                        </div>
                        <div class="showclothimgs">
                                <div class="showclothimg">
                                        <img class="spofimg" src="imgs/camera.jpg"/>
                                        <p class="showclothname col-12">Canon EOS 5D</p>
                                        <hr>
                                        <p class="showclothprice col-12">$750.75</p>
                                        <hr>
                                        <div class="showclothicon">
                                                <i class="fa fa-shopping-cart"></i>
                                                <i class="fa fa-th-list"></i>
                                                <i class="fa fa-reply"></i>
                                        </div>
                                </div>
                        </div>
                        <div class="showclothimgs showclothimgslast">
                                <div class="showclothimg">
                                        <img class="spofimg" src="imgs/camera.jpg"/>
                                        <p class="showclothname col-12">Canon EOS 5D</p>
                                        <hr>
                                        <p class="showclothprice col-12">$750.75</p>
                                        <hr>
                                        <div class="showclothicon">
                                                <i class="fa fa-shopping-cart"></i>
                                                <i class="fa fa-th-list"></i>
                                                <i class="fa fa-reply"></i>
                                        </div>
                                </div>
                        </div>
                        <div class="showclothimgs showclothimgslast">
                                <div class="showclothimg">
                                        <img class="spofimg" src="imgs/camera.jpg"/>
                                        <p class="showclothname col-12">Canon EOS 5D</p>
                                        <hr>
                                        <p class="showclothprice col-12">$750.75</p>
                                        <hr>
                                        <div class="showclothicon">
                                                <i class="fa fa-shopping-cart"></i>
                                                <i class="fa fa-th-list"></i>
                                                <i class="fa fa-reply"></i>
                                        </div>
                                </div>
                        </div>
                </div>
        </div>
</div>
<footer>
        <div class="main3">
                <div class="aboutus col-6 col-g3">
                        <div class="abouttitle">درباره ما</div>
                        <hr>
                        <div class="aboutuscontent">
                                <span> با رعایت این سه اصل، هرسال، حوزه‌های تازه‌ای را در فروش کالا و خدمات، </span>
                        </div>
                </div>
                <div class="aboutus col-6 col-g3">
                        <div class="abouttitle">درباره ما</div>
                        <hr>
                        <div class="aboutuscontent">
                                <span> با رعایت این سه اصل، هرسال، حوزه‌های تازه‌ای را در فروش کالا و خدمات،</span>
                        </div>
                </div>
                <div class="aboutus col-6 col-g3">
                        <div class="abouttitle">درباره ما</div>
                        <hr>
                        <div class="aboutuscontent">
                                <span> با رعایت این سه اصل، هرسال، حوزه‌های تازه‌ای را در فروش کالا و خدمات </span>
                        </div>
                </div>
                <div class="aboutus col-6 col-g3">
                        <div class="abouttitle">درباره ما</div>
                        <hr>
                        <div class="aboutuscontent">
                                <span> با رعایت این سه اصل، هرسال، حوزه‌های تازه‌ای را در فروش کالا و خدمات،</span>
                        </div>
                </div>
                <div class="contact">
                        <hr class="main3hr">
                        <div class="contacticon col-12 col-g5">
                                <a href="#"><i class="fa fa-phone"></i>
                                        <span class="tooltiptext">تماس با ما</span>
                                </a>
                                <a href="#"><i class="fa fa-facebook"></i>
                                        <span class="tooltiptext">Facebook</span>
                                </a>
                                <a href="#"><i class="fa fa-twitter"></i>
                                        <span class="tooltiptext">Twitter</span>
                                </a>
                                <a href="#"><i class="fa fa-google-plus-square"></i>
                                        <span class="tooltiptext">Gmail</span>
                                </a>
                                <a href="#"><i class="fa fa-youtube"></i>
                                        <span class="tooltiptext">Youtube</span>
                                </a>
                                <a href="#"><i class="fa fa-skype"></i>
                                        <span class="tooltiptext">Skype</span>
                                </a>
                        </div>
                        <div class="contacticon coniconleft col-12 col-g6">
                                <a href="#"><i class="fa fa-phone"></i><div>123 Fashion Ave. NY, 10010</div></a>
                                <a href="#"><i class="fa fa-phone"></i><div>123 Fashion Ave. NY, 10010</div></a>
                        </div>
                </div>
        </div>
        <div class="copyright">استفاده از مطالب فروشگاه اینترنتی دیجی کالا فقط برای مقاصد غیر تجاری و با ذکر منبع بلامانع است. کليه حقوق اين سايت متعلق به شرکت نوآوران فن آوازه (فروشگاه آنلاین دیجی‌کالا) می‌باشد.</div>
</footer>

<script type="text/javascript" src="{{ URL::asset('/js/js.js') }}"></script>
</body>
</html>