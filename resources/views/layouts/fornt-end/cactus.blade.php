<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sua A-Aom Tree Shop</title>

    <meta charset="utf-8">

    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link
        href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic'
        rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,500,600,800,900,200,100' rel='stylesheet'
        type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Noticia+Text:400,400italic,700,700italic' rel='stylesheet'
        type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:500,600,700,400,200,300' rel='stylesheet'
        type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700,900,400italic,700italic,900italic'
        rel='stylesheet' type='text/css'>


    <link rel="stylesheet" type="text/css" href="{{ asset('fornt-end/css/bootstrap.css') }}" media="screen">

    <!-- REVOLUTION BANNER CSS SETTINGS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('fornt-end/css/fullwidth.css') }}" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{ asset('fornt-end/css/settings.css') }}" media="screen" />

    <link rel="stylesheet" type="text/css" href="{{ asset('fornt-end/css/font-awesome.css') }}" media="screen">
    <link rel="stylesheet" type="text/css" href="{{ asset('fornt-end/css/jquery.bxslider.css') }}" media="screen">
    <link rel="stylesheet" type="text/css" href="{{ asset('fornt-end/css/style.css') }}" media="screen">
    <link rel="stylesheet" type="text/css" href="{{ asset('fornt-end/css/responsive.css') }}" media="screen">

    <link rel="shortcut icon" href="{{ asset('fornt-end/images/favicon.png') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('fornt-end/images/favicon.png') }}" type="image/x-icon">



</head>

<body>

    <!-- Preloader -->
    <div id="preloader">
        <div id="status">&nbsp;</div>
    </div>

    <!-- Container -->
    <div id="container">
        <!-- Header
  ================================================== -->
        <header class="clearfix">

            <div class="top-line">
                <div class="container">
                    <div class="left-line">

                        <div class="mobile-a">
                            <a href="#login-box" class="login-window"><i class="fa fa-user"></i></a>
                            <a href="#"><i class="fa fa-heart"></i></a>
                        </div>
                    </div>
                    <div class="right-line clearfix">
                        <ul>
                            <li><a href="{{ route('login') }}" class="login-window">Login</a></li>
                            <li><a href="{{ route('register') }}" class="login-window">Register</a></li>
                        </ul>
                        <div class="mobile-version">
                            <div class="cart-icon">
                                <a href="#"><img src="{{ asset('fornt-end/images/cart-white.png')}}" alt="">
                                    <span>8 Items</span></a>
                            </div>
                        </div>

                        <div id="login-box" class="login-popup">
                            <a href="#" class="close"><img src="{{ asset('fornt-end/images/delete.png')}}" class="btn_close"
                                    title="Close Window" alt="Close" /></a>
                            <form method="post" class="signin" action="#">
                                <fieldset class="textbox">
                                    <h4 class="login-title">LOGIN </h4>

                                    <input placeholder="Email*">
                                    <input placeholder="Password*">

                                    <input type="checkbox" name="signed" value="Stayin"> <span class="signed">Remember Me</span>

                                    <button class="submit button" type="button">Login</button>
                                    <p>
                                        <a class="recover" href="#">Sign up</a>
                                        <a href="#" class="forgot2">Forgot password?</a>
                                    </p>
                                    <div class="clear"></div>

                                    <div class="log-socials">
                                        <h6>LOGIN WITH</h6>
                                        <ul>
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        </ul>

                                        <div class="clear"></div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>

                    </div>
                    <div class="clear"></div>
                </div>
            </div>
            <!-- end topline -->

            <div class="upper-header">
                <div class="grid-item2">

                    <div class="search-input">
                        <form action="#">
                            <input type="text" placeholder="Type and Search">
                            <input type="submit" value="">
                        </form>
                    </div>

                    <div class="logo">
                        <a href="index.php"><img src="{{ asset('fornt-end/images/logo-1.png')}}" alt=""></a>
                    </div>


                    <div class="clear"></div>

                </div>
                <!-- End container -->
            </div>
            <!-- End Upper-header -->

            <div class="nav-border"></div>
            <div class="grid-item2">
                <!-- Navigation -->
                <nav id="nav">
                    <ul id="navlist" class="sf-menu clearfix">
                        <li class="current"><a href="{{ url('/')}}">Home</a>

                        </li>
                        <li><a href="#">Menu</a>
                            <ul class="sub-menu">
                                <li><a href="{{ url('/flowering-plant')}}"><span>--</span>ไม้ดอก</a></li>
                                <li><a href="{{url('/foliage-plant')}}"><span>--</span>ไม้ใบ</a></li>
                                <li><a href="{{url('/purify-the-air')}}"><span>--</span>ไม้ฟอกอากาศ</a></li>
                                <li><a href="{{url('/cactus')}}"><span>--</span>แคคตัส</a></li>
                            </ul>
                        </li>

                        </li>
                        <li><a href="#">Member</a>
                            <ul class="sub-menu">
                                <li><a href="{{url('/member')}}"><span>--</span>ประวัติผู้จัดทำ</a></li>
                            </ul>
                        </li>
                        <li><a href="{{url('/location')}}">Location</a></li>
                    </ul>
                </nav>
                <!-- Navigation -->
            </div>


        </header>
        <!-- End Header -->

        <!-- Slider -->
        <div class="slider heightski">
            <div class="fullwidthbanner-container">
                <div class="fullwidthbanner" id="intro">
                    <ul>
                        <!-- First SLIDE -->
                        <li data-transition="random" data-slotamount="10" data-masterspeed="300">
                        <!-- THE MAIN IMAGE IN THE FIRST SLIDE -->
                        <img src="{{ asset('fornt-end/upload/revolution//B1.png')}}" data-fullwidthcentering="on" alt="slide">
                        <!-- THE CAPTIONS IN THIS SLDIE -->
                        <div class="caption small_text lft" 
                        data-x="center" 
                        data-y="230" 
                        data-speed="300" 
                        data-start="1200" 
                        data-easing="easeOutExpo" 
                        data-end="7000" 
                        data-endspeed="300" 
                        data-endeasing="easeInSine">
                        Welcome 
                        </div>
    
                        <div class="caption lfl" 
                        data-x="center" 
                        data-y="280" 
                        data-speed="400" 
                        data-start="1800" 
                        data-easing="easeOutExpo" 
                        data-end="7200" 
                        data-endspeed="300" 
                        data-endeasing="easeInSine">
                            <img src="{{ asset('fornt-end/upload/revolution/s-border.png')}}" alt="Image 1">
                        </div>
    
                        <div class="caption big_white lfb stt" 
                        data-x="center" 
                        data-y="350" 
                        data-speed="500" 
                        data-start="1800" 
                        data-easing="easeOutExpo" 
                        data-end="7100" 
                        data-endspeed="300" 
                        data-endeasing="easeInSine">
                        Sua A-Aom Tree Shopn
                        </div>
    
                        
    
                        
                        </li>
                        <!-- second SLIDE -->
                        <li data-transition="random" data-slotamount="10" data-masterspeed="300">
                        <!-- THE MAIN IMAGE IN THE FIRST SLIDE -->
                        <img src="{{ asset('fornt-end/upload/revolution/B2.png')}}" data-fullwidthcentering="on" alt="slide">
                        <!-- THE CAPTIONS IN THIS SLDIE -->
                        <div class="caption small_text lft" 
                        data-x="center" 
                        data-y="230" 
                        data-speed="300" 
                        data-start="1200" 
                        data-easing="easeOutExpo" 
                        data-end="7000" 
                        data-endspeed="300" 
                        data-endeasing="easeInSine">
                            ยินดีต้อนรับ
                        </div>
    
                        <div class="caption lfl" 
                        data-x="center" 
                        data-y="280" 
                        data-speed="400" 
                        data-start="1800" 
                        data-easing="easeOutExpo" 
                        data-end="7200" 
                        data-endspeed="300" 
                        data-endeasing="easeInSine">
                            <img src="{{ asset('fornt-end/upload/revolution/s-border.png')}}" alt="Image 1">
                        </div>
    
                        <div class="caption big_white lfb stt" 
                        data-x="center" 
                        data-y="350" 
                        data-speed="500" 
                        data-start="1800" 
                        data-easing="easeOutExpo" 
                        data-end="7100" 
                        data-endspeed="300" 
                        data-endeasing="easeInSine">
                            สวนเอ-อ้อม
                        </div>
    
                        
                        
                        </li>
    
                        <!-- third SLIDE -->
                        <li data-transition="random" data-slotamount="10" data-masterspeed="300">
                        <!-- THE MAIN IMAGE IN THE FIRST SLIDE -->
                        <img src="{{ asset('fornt-end/upload/revolution/B3.png')}}" data-fullwidthcentering="on" alt="slide">
                        <!-- THE CAPTIONS IN THIS SLDIE -->
                        <div class="caption big_white lfb stt" 
                        data-x="center" 
                        data-y="290" 
                        data-speed="500" 
                        data-start="1800" 
                        data-easing="easeOutExpo" 
                        data-end="7100" 
                        data-endspeed="300" 
                        data-endeasing="easeInSine">
                        Sua A-Aom Tree Shopn
                        </div>
        
    
                        <div class="caption lfb stt" 
                        data-x="650" 
                        data-y="400" 
                        data-speed="500" 
                        data-start="1800" 
                        data-easing="easeOutExpo" 
                        data-end="7100" 
                        data-endspeed="300" 
                        data-endeasing="easeInSine">
                        <img src="{{ asset('fornt-end/upload/revolution/upload/gogo.png')}}" alt="">
                        </div>
    
                        <div class="caption lfl" 
                        data-x="730" 
                        data-y="460" 
                        data-speed="400" 
                        data-start="1800" 
                        data-easing="easeOutExpo" 
                        data-end="7200" 
                        data-endspeed="300" 
                        data-endeasing="easeInSine">
                            <img src="{{ asset('fornt-end/upload/revolution/s-border2.png')}}" alt="Image 1">
                        </div>
    
                        
    
                        
                        </li>
                        
                    </ul>
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End SLider -->

<!-- content -->
<div id="content">

    <div class="shop-main container-fluid" id="menu-container">
            <div class="row">
    
                <div class="col-md-12">
                    <div class="shop-content">
                        
                    <div class="filter clearfix">
                        <div class="holder">
                            <ul style="display: block;">
                                <li><a href="{{url('/flowering-plant')}}" data-filter=".class1" data-filter="*">ไม้ดอก</a></li>
                                <li><a href="{{url('/foliage-plant')}}" data-filter=".class2"><i class=""></i> ไม้ใบ</a></li>
                                <li><a href="{{url('/purify-the-air')}}" data-filter=".class3"><i class=""></i> ไม้ฟอกอากาศ</a></li>
                                <li><a href="{{url('/cactus')}}" class="active"><i class=""></i> แคคตัส<i class=""></i></a></li>
                            </ul>
                            <div class="holder-border"></div>
                        </div>
                    </div>

                        <div class="shop-list">

                            <div class="grid-item2 ">

                                <div class="row">

                                    <div class="arrival-overlay col-md-4">
                                        <img src="{{ asset('fornt-end/upload/ยิม1.jpg')}}" alt="">
                                    </div>

                                    <div class="col-md-8">
                                        <div class="list-content">

                                            <h1>ยิมโน</h1>
                                            <span class="flower-price">฿320</span>

                                            <h3><b class="list-desc"> วิธีการดูแลต้นไม้</b></h3>

                                            <h4><b> พวกนี้เลี้ยงง่าย ตายยาก ชอบแดด  ยิมโนต้นที่มีสีจะราคาแพง คือพวกหัวสี หรือเรียกกันว่า ยิมโนสี ราคามีตั้งแต่หลักร้อยถึงแสนก็มี ยิ่งเป็นคริสตาต้า (Cristata) ยิ่งแพง เพราะหายากและโตช้า</b></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="grid-item2 grid-item2__alternate">
                                <div class="row">

                                        <div class="arrival-overlay col-md-4">
                                                <img src="{{ asset('fornt-end/upload/ถังทอง.jfif')}}" alt="">
                                        </div>

                                    <div class="col-md-8">
                                              <div class="list-content">

                                                <h1>ถังทอง</h1>
                                                <span class="flower-price">฿60</span>
                                                <h3><b class="list-desc"> วิธีการดูแลต้นไม้</b></h3>

                                                <h4><b> หากต้องการปลูกเลี้ยงกลางแจ้ง ควรระวังเนื่องจากผิวของถังทองค่อนข้างบาง อาจไหม้แดดได้ง่ายหากถูกแดดจัด โดยทำการปรับตัวให้เข้ากับแสงแดดมากขี้นทีละน้อยๆ เช่น อาจพรางแสงในช่วงแรกๆก่อน หมั่นสังเกตว่า ผิวเหี่ยวน้อยลงหรือไม่เกิดแผลไหม้จึงค่อยๆ ลดการพรางแสงลง แต่ก็ต้องดูอีกด้วยว่า หนามยังมีขนาดปกติ ไม่หดเล็กลงด้วย</b></h4>

                                            </div>
                                    </div>

                                </div>

                            </div>

                            <div class="grid-item2">

                                <div class="row">

                                        <div class="arrival-overlay col-md-4">
                                                <img src="{{ asset('fornt-end/upload/กุหลาบหิน1.jpg')}}" alt="">
                                        </div>

                                    <div class="col-md-8">
                                              <div class="list-content">

                                                <h1>กุหลาบหิน </h1>
                                                <span class="flower-price">฿60</span>

                                                <h3><b class="list-desc"> วิธีการดูแลต้นไม้</b></h3>

                                                <h4><b> กุหลาบหินเป็นพืชที่ปลูกง่ายทนทาน นิยมปลูกไว้กลางแจ้ง เพราะชอบแดดจัด แต่ถ้านำมาปลูกภายในอาคารก็สามารถปลูกได้ แต่ใบจะมีสีเขียวเข้มและ มักจะไม่ออกดอก จึงควรตั้งไว้ในที่มีแสงอย่างเพียงพอหรือแสงแดดส่องถึง ให้น้ำสัปดาห์ 1-2 ครั้ง ก็เพียงพอ ใช้ปุ๋ยหมักหรือปุ๋ยคอก ละลายน้ำรดในช่วงที่กำลังออกดอก</b></h4>

                                            </div>
                                    </div>

                                </div>

                            </div>
                        </div>


                        
                    </div>
                </div>
            </div>
        </div>
        <!-- End Product Single -->



    </div>
    <!-- End content -->
    <!-- footer
   ================================================== -->
   <footer>
    <div class="inner-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    
                </div>
                <div class="col-md-6">
                    <div class="infos">
                        <div class="mb-6">
                            <iframe style="border:0; width: 100%; height: 400px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3869.065945381975!2d100.95441001744385!3d14.132219400000011!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x311d99512de4ab17%3A0xff48fbf5ac2a6ede!2z4Liq4Lin4LiZIOC5gOC4rSDguK3guYnguK3guKEg4Lij4LmJ4Liy4LiZ4LiC4Liy4Lii4LiV4LmJ4LiZ4LmE4Lih4LmJ4LiX4Li14LmI4Liq4Lin4Lii4LiX4Li14LmI4Liq4Li44LiU4LmD4LiZ4LiE4Lil4Lit4LiHIDE1!5e0!3m2!1sth!2sth!4v1659682317400!5m2!1sth!2sth" frameborder="0" allowfullscreen></iframe>
                            </div>
                    </div>
                </div>
               
                <div class="col-md-6">
                    <div class="gettouch">
                        <h1>Contact</h1>
                        <p><img src="{{ asset('fornt-end/upload/icon/map.png')}}" width= "20" height="20"></i>139 หมู่ 11  คลอง 15 ตำบล บางปลากด อำเภอองค์รักษ์ นครนายก 26120</p>
                        <p><img src="{{ asset('fornt-end/upload/icon/phone-call.png')}}" width= "20" height="20"></i> +66 81 156 4329</p>
                        <p><img src="{{ asset('fornt-end/upload/icon/gmail.png')}}" width= "20" height="20">  </i> anna.aom.aom@gmail.com</p>
                        <h1>FIND US ON</h1>
                        <ul class="footer-socials">
                            <li><a href="https://www.facebook.com/pages/%E0%B8%AA%E0%B8%A7%E0%B8%99%E0%B9%80%E0%B8%AD%E0%B8%AD%E0%B9%89%E0%B8%AD%E0%B8%A1%20A%20Om%20Garden/1697665177205960/"><img src="{{ asset('fornt-end/upload/icon/facebook.png')}}"width= "30" height="30"></i></a></li>
                            <li><a href="https://www.instagram.com/"><img src="{{ asset('fornt-end/upload/icon/instagram.png')}}"width= "35" height="35"></i></a></li>
                            <li><a href=""><img src="{{ asset('fornt-end/upload/icon/line.png')}}"width= "35" height="35"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end contanir & inner-footer -->
    
</footer>
    <!-- End footer -->


    <script type="text/javascript" src="{{ asset('fornt-end/js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('fornt-end/js/jquery.superfish.js') }}"></script>
    <script type="text/javascript" src="{{ asset('fornt-end/js/jquery.bxslider.js') }}"></script>
    <script type="text/javascript" src="{{ asset('fornt-end/js/bootstrap.js') }}"></script>
    <script type="text/javascript" src="{{ asset('fornt-end/js/jquery.nicescroll.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('fornt-end/js/jquery.isotope.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('fornt-end/js/jquery.imagesloaded.min.js') }}"></script>
    <!-- jQuery KenBurn Slider  -->
    <script type="text/javascript" src="{{ asset('fornt-end/js/jquery.themepunch.revolution.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('fornt-end/js/script.js') }}"></script>


    <!--
 ##############################
 - ACTIVATE THE BANNER HERE -
 ##############################
 -->
    <script type="text/javascript">

		var tpj=jQuery;
		tpj.noConflict();

		tpj(document).ready(function() {

		if (tpj.fn.cssOriginal!=undefined)
			tpj.fn.css = tpj.fn.cssOriginal;

			var api = tpj('.fullwidthbanner').revolution(
				{
					delay:8000,
					startwidth:1170,
					startheight:625,

					onHoverStop:"off",						// Stop Banner Timet at Hover on Slide on/off

					thumbWidth:100,							// Thumb With and Height and Amount (only if navigation Tyope set to thumb !)
					thumbHeight:50,
					thumbAmount:3,

					hideThumbs:0,
					navigationType:"bullet",				// bullet, thumb, none
					navigationArrows:"solo",				// nexttobullets, solo (old name verticalcentered), none

					navigationStyle:"round",				// round,square,navbar,round-old,square-old,navbar-old, or any from the list in the docu (choose between 50+ different item), custom


					navigationHAlign:"center",				// Vertical Align top,center,bottom
					navigationVAlign:"bottom",					// Horizontal Align left,center,right
					navigationHOffset:30,
					navigationVOffset: 40,

					soloArrowLeftHalign:"left",
					soloArrowLeftValign:"center",
					soloArrowLeftHOffset:40,
					soloArrowLeftVOffset:0,

					soloArrowRightHalign:"right",
					soloArrowRightValign:"center",
					soloArrowRightHOffset:40,
					soloArrowRightVOffset:0,

					touchenabled:"on",						// Enable Swipe Function : on/off


					stopAtSlide:-1,							// Stop Timer if Slide "x" has been Reached. If stopAfterLoops set to 0, then it stops already in the first Loop at slide X which defined. -1 means do not stop at any slide. stopAfterLoops has no sinn in this case.
					stopAfterLoops:-1,						// Stop Timer if All slides has been played "x" times. IT will stop at THe slide which is defined via stopAtSlide:x, if set to -1 slide never stop automatic

					hideCaptionAtLimit:0,					// It Defines if a caption should be shown under a Screen Resolution ( Basod on The Width of Browser)
					hideAllCaptionAtLilmit:0,				// Hide all The Captions if Width of Browser is less then this value
					hideSliderAtLimit:0,					// Hide the whole slider, and stop also functions if Width of Browser is less than this value


					fullWidth:"on",

					shadow:1								//0 = no Shadow, 1,2,3 = 3 Different Art of Shadows -  (No Shadow in Fullwidth Version !)

				});


				// TO HIDE THE ARROWS SEPERATLY FROM THE BULLETS, SOME TRICK HERE:
				// YOU CAN REMOVE IT FROM HERE TILL THE END OF THIS SECTION IF YOU DONT NEED THIS !
					api.bind("revolution.slide.onloaded",function (e) {


						jQuery('.tparrows').each(function() {
							var arrows=jQuery(this);

							var timer = setInterval(function() {

								if (arrows.css('opacity') == 1 && !jQuery('.tp-simpleresponsive').hasClass("mouseisover"))
								  arrows.fadeOut(300);
							},3000);
						})

						jQuery('.tp-simpleresponsive, .tparrows').hover(function() {
							jQuery('.tp-simpleresponsive').addClass("mouseisover");
							jQuery('body').find('.tparrows').each(function() {
								jQuery(this).fadeIn(300);
							});
						}, function() {
							if (!jQuery(this).hasClass("tparrows"))
								jQuery('.tp-simpleresponsive').removeClass("mouseisover");
						})
					});
				// END OF THE SECTION, HIDE MY ARROWS SEPERATLY FROM THE BULLETS
			});
	</script>


</body>

</html>
