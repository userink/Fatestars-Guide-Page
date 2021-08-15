<?php
// +----------------------------------------------------------------------
// | Personal quotes [ 大海终将波涛汹涌，世界定会因我动荡！]
// +----------------------------------------------------------------------
// | By: 命运星辰  <1594800175@qq.com>
// +----------------------------------------------------------------------
// | Date: 2021年8月1日
// +----------------------------------------------------------------------

//禁用错误报告
error_reporting(0);
$t=htmlspecialchars($_GET["t"]);
$q=htmlspecialchars($_POST["q"]);
if (empty($q)) {
}else{
  if ($t=="b"){
    echo'<script>window.open("https://www.google.com.hk/search?hl=zh&q='.$q.'");</script>';
  }else{
    //默认谷歌
    echo'<script>window.open("//www.baidu.com/s?ie=utf-8&word='.$q.'");</script>';
  }
};
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="Cache-Control" content="no-siteapp">
  <meta name="referrer" content="no-referrer" />
  <meta name="theme-color" content="#ffffff">
  <link rel="icon" href="assets/main/icon/fatestars.png?v=1.0.1" sizes="280x280" />
  <link rel="apple-touch-icon-precomposed" href="assets/main/icon/fatestars.png?v=1.0.1" />
  <meta name="msapplication-TileImage" content="assets/main/icon/fatestars.png?v=1.0.1" />
  <link rel="shortcut icon" href="assets/main/icon/fatestars.png?v=1.0.1"/>
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-touch-fullscreen" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <meta name="full-screen" content="yes"><!--UC强制全屏-->
  <meta name="browsermode" content="application"><!--UC应用模式-->
  <meta name="x5-fullscreen" content="true"><!--QQ强制全屏-->
  <meta name="x5-page-mode" content="app"><!--QQ应用模式-->
  <title>命运星辰——全球首屈一指的引导页</title>
  <meta name="description" content="命运星辰官方网络站点，命运星辰免费php加密，命运星辰授权站点，命运星辰商城程序，国内首屈一指的技术网站!" />
  <meta name="keywords" content="命运星辰商城系统,命运星辰商城,fatestars系统,命运星辰授权系统,商城系统,代刷网,代刷网源码,程序,命运星辰,命运星辰官网,命运星辰网络,命运星辰网络科技,fatestars,命运星辰工作室,免费php加密,php加密,sg11加密,sg11,xend加密,xend" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="author" content="前端爱好者命运星辰" /> 
  <link href="assets/main/css/style.css?t=<?php echo date("ymdhi"); ?>" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.3.1/dist/jquery.min.js"></script>
  <script src="//at.alicdn.com/t/font_400990_j21lstb4wx.js"></script>
  <script src="assets/main/js/sou.js?t=<?php echo date("ymdhi"); ?>"></script>
  <link href="assets/main/css/style-back.css" rel="stylesheet" /> 
  <link href="assets/main/css/font-awesome.min.css" rel="stylesheet" />
  <style>footer #footer-container .swiper-scrollbar{display: none;}</style>
  <style id="smooth-scrollbar-style">
[data-scrollbar] {
  display: block;
  position: relative;
}

.scroll-content {
  -webkit-transform: translate3d(0, 0, 0);
          transform: translate3d(0, 0, 0);
}

.scrollbar-track {
  position: absolute;
  opacity: 0;
  z-index: 1;
  background: rgba(222, 222, 222, .75);
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
  -webkit-transition: opacity 0.5s 0.5s ease-out;
          transition: opacity 0.5s 0.5s ease-out;
}
.scrollbar-track.show,
.scrollbar-track:hover {
  opacity: 1;
  -webkit-transition-delay: 0s;
          transition-delay: 0s;
}

.scrollbar-track-x {
  bottom: 0;
  left: 0;
  width: 100%;
  height: 8px;
}
.scrollbar-track-y {
  top: 0;
  right: 0;
  width: 8px;
  height: 100%;
}
.scrollbar-thumb {
  position: absolute;
  top: 0;
  left: 0;
  width: 8px;
  height: 8px;
  background: rgba(0, 0, 0, .5);
  border-radius: 4px;
}
</style>
</head> 
<body class="hidden hidden-ball smooth-scroll">
<main> 
<!-- Loading --> 
<div class="preloader-wrap"> 
<div class="outer"> 
<div class="inner"> 
<div class="percentage" id="precent"></div> 
<div class="trackbar"> 
<div class="loadbar"></div> 
</div> 
<div class="headphones"></div> 
<div class="headphones-text">
命运星辰网络科技
</div> 
</div> 
</div> 
</div>
<div class="cd-index cd-main-content"> 
<div id="page-content" class="light-content"> 
<header class="fullscreen-menu" style="background-color: transparent;"> 
<div id="header-container" style="opacity: 1; transform: translate3d(0px, 0px, 0px);"> 
<!-- 菜单导航 --> 
<nav style="background-color: rgb(17, 17, 17);"> 
<div class="nav-height"> 
<div class="outer"> 
<div class="inner"> 
<ul data-breakpoint="10025" class="flexnav">
<li class="link menu-timeline">
<a href="/"><span data-hover="返回首页">返回首页</span></a></li>

<li class="link menu-timeline"><a class="ajax-link" href=""><span data-hover="Contact">旗下站点</span></a>
<ul>
<li><a class="ajax-link" href="http://php.fatestars.com/">免费php加密</a></li>
<li><a class="ajax-link" href="http://blog.fatestars.com">命运星辰博客</a></li>
</ul>
</li> 

<li class="link menu-timeline"><a class="ajax-link" href=""><span data-hover="Contact">旗下项目</span></a>
<ul>
<li><a class="ajax-link" href="https://github.com/userink/Fatestars-Authorization-System">命运星辰授权系统</a></li>
</ul>
</li>
<li class="link menu-timeline">
<a href="https://github.com/userink/Fatestars-Guide-Page"><span data-hover="本项目地址">本项目地址</span></a></li>

<li class="link menu-timeline"><a class="ajax-link" href="#">
<span data-hover="Contact">关于我</span></a></li>
</ul>

<p style="text-align: center;position: fixed !important;top: calc(100vh - 100px);font-size: 14px;line-height: 30px;font-weight: 500;margin: 0 auto;display: table !important;left: calc(50% - 150px);pointer-events: initial;">Copyright (©) 2021 | <a target="_blank" href="https://www.fatestars.com" style="color: #fff;">命运星辰网络</a></p>
</div>
</div> 
</div> 
</nav>

<div id="burger-wrapper" class="parallax-wrap" style="transform: matrix(1, 0, 0, 1, 0, 0);"> 
<div id="menu-burger" class="parallax-element" style="transform: matrix(1, 0, 0, 1, 0, 0);"> 
<span></span> 
<span></span> 
</div> 
<span class="touch-button" style="transform: matrix(1, 0, 0, 1, 0, 0);"><i class="navicon">▼</i></span>
</div> 
</div> 
</header>
<div id="content-scroll"> 
</div> 
<!-- 页面内容 --> 
<div id="main"> 
<div id="main-content">
<style>.showcase-pagination-wrap span .showcase-counter:last-child{display: block !important;}</style>
<div id="showcase-holder"> 
<div id="showcase-tilt-wrap"> 
<div id="showcase-tilt"> 
<div id="showcase-slider" class="swiper-container"> 
<div class="swiper-wrapper"> 
    
<!-- 首张输出 --> 
<div class="swiper-slide bg-video" data-title=" " data-subtitle=" " data-number="1"> 
<div class="img-mask"> 
<div class="section-image" data-src="https://tva1.sinaimg.cn/large/007GwGf6gy1gdt2td0up1j31hc0u011c.jpg"> 
<div class="hero-video-wrapper"> 
<video loop="" muted="" class="bgvid"> 
<source src="" type="video/mp4">
</video> 
</div> 
</div> 
</div> 
</div>
<!-- 视频演示 --> 
<div class="swiper-slide bg-video" data-title="命运星辰" data-subtitle="演示" data-number="2"> 
<div class="img-mask"> 
<div class="section-image" data-src=""> 
<div class="hero-video-wrapper"> 
<video loop="" muted="" class="bgvid"> 
<source src="assets/main/mv/video1.mp4" type="video/mp4">
</video> 
</div> 
</div> 
</div> 
</div>
<div class="swiper-slide bg-video" data-title="命运星辰" data-subtitle="演示" data-number="3"> 
<div class="img-mask"> 
<div class="section-image" data-src="https://tva2.sinaimg.cn/large/007GwGf6gy1gdt2tjbc04j31g00u07if.jpg"> 
<div class="hero-video-wrapper"> 
<video loop="" muted="" class="bgvid"> 
<source src="" type="video/mp4">
</video> 
</div> 
</div> 
</div> 
</div>
<!-- 命运星辰--> 
<div class="swiper-slide bg-video" data-title="命运星辰" data-subtitle="演示" data-number="4"> 
<div class="img-mask"> 
<div class="section-image" data-src="https://tva3.sinaimg.cn/large/007GwGf6gy1gdt2tojk43j31hc0u0awp.jpg"> 
<div class="hero-video-wrapper"> 
<video loop="" muted="" class="bgvid"> 
<source src="" type="video/mp4">
</video> 
</div> 
</div> 
</div> 
</div>
<!-- 视频演示 --> 
<div class="swiper-slide bg-video" data-title="命运星辰" data-subtitle="演示" data-number="5"> 
<div class="img-mask"> 
<div class="section-image" data-src=""> 
<div class="hero-video-wrapper"> 
<video loop="" muted="" class="bgvid"> 
<source src="assets/main/mv/video1.mp4" type="video/mp4">
</video> 
</div> 
</div> 
</div> 
</div>
</div> 
</div> 
</div> 
</div>
    
<div class="showcase-pagination-wrap">
<span>
<div class="showcase-counter" data-total="1" style="display: none;"></div>
<div class="showcase-counter" data-total="2" style="display: none;"></div>
<div class="showcase-counter" data-total="3" style="display: none;"></div>
<div class="showcase-counter" data-total="4" style="display: none;"></div>
<div class="showcase-counter" data-total="5" style="display: none;"></div>
</span>
<div class="showcase-pagination"></div> 
<div class="caption-border left"></div> 
<div class="caption-border right"></div> 
<div class="arrows-wrap"> 
<div class="prev-wrap parallax-wrap">
<div class="swiper-button-prev swiper-button-white parallax-element"></div>
</div> 
<div class="next-wrap parallax-wrap">
<div class="swiper-button-next swiper-button-white parallax-element"></div>
</div> 
</div> 
</div> 
</div> 
</div> 
</div>
<div id="content">
        <div class="con">
            <div class="shlogo" style="background: url(assets/main/icon/logo.png) no-repeat center/cover;background-size:60% ; "></div>
            <div class="sou"> 
                <form action="" method="post" target="_self">  
                   <?php 
                   if ($t=="b"){
                     echo'<div class="lg" style="background: url(assets/main/icon/g.svg) no-repeat center/cover;" onclick="window.location.href=\'?t=b\';"></div>';
                   }else{
                     echo'<div class="lg" style="background: url(assets/main/icon/baidu.svg) no-repeat center/cover;" onclick="window.location.href=\'?t=\';" ></div>';
                   }
                    ?>
                    <!--input class="t" type="text" value="" name="t" hidden-->
                    <input class="wd" type="text" placeholder="请输入搜索内容" name="q" x-webkit-speech lang="zh-CN" autocomplete="off">
                    <button><svg class="icon" style=" width: 21px; height: 21px; opacity: 0.5;" aria-hidden="true"><use xlink:href="#icon-sousuo"></use></svg></button>
                </form>
                <div id="word"></div>
            </div>
        </div>
   </div>
 
<!--底部内容-->
<footer class="fixed"> 
<div id="footer-container"> 

<div class="button-wrap left"> 
<div class="icon-wrap parallax-wrap"> 
<div class="button-icon parallax-element"> 
<div class="bars"> 
<div class="bar"></div>
<div class="bar"></div>
<div class="bar"></div>
<div class="bar"></div>
<div class="bar"></div> 
</div> 
</div> 
</div> 
<div class="button-text">
<span data-on="Sound On" data-off="Sound Off">Sound On</span>
</div> 
</div> 
<div class="swiper-scrollbar"></div> 
<div class="socials-wrap"> 
<div class="socials-icon">
<i class="fa fa-share-alt" aria-hidden="true"></i>
</div> 
<!--右下角联系我-->
<div class="socials-text">
contact me
</div> 
<ul class="socials"> 
<li>
<span class="parallax-wrap">
<a class="parallax-element" href="#" target="_blank">
<i class="fa fa-qq" aria-hidden="true"></i></a></span>
</li> 
<li>
<span class="parallax-wrap"><a class="parallax-element" href="#" target="_blank">
<i class="fa fa-weixin" aria-hidden="true"></i></a></span>
</li> 
<li>
<span class="parallax-wrap"><a class="parallax-element" href="#" target="_blank">
<i class="fa fa-renren" aria-hidden="true"></i></a></span>
</li> 
<li>
<span class="parallax-wrap"><a class="parallax-element" href="#" target="_blank">
<i class="fa fa-weibo" aria-hidden="true"></i></a></span>
</li> 
<li>
<span class="parallax-wrap"><a class="parallax-element" href="#">
<i class="fa fa-tencent-weibo" aria-hidden="true"></i></a></span>
</li> 
</ul> 
</div> 
</div>
</footer>
</div> 
</div> 
</main> 
<div class="cd-cover-layer"></div> 
<div id="magic-cursor"> 
<div id="ball"> 
<div id="hold-event"></div> 
<div id="ball-loader"></div> 
</div> 
</div> 
<div id="clone-image"></div> 
<div id="rotate-device"></div> 
<!--音乐控件-->  

<audio autoplay="autoplay" loop="" volume="0" id="audio" src="https://api.qqsuu.cn/api/rand.music?sort=热歌榜" onended="this.load();">
</audio>  
<script type="text/javascript">
    window.onload = function(){
             setInterval("toggleSound()",100);
        }

    function toggleSound() {
                var music = document.getElementById("audio");//获取ID  
                    
                if (music.paused) { //判读是否播放  
                    music.paused=false;
                    music.play(); //没有就播放 
                }    
        }
</script>
<script src="assets/main/js/jquery.min.js"></script> 
<script src="assets/main/js/scrollmagic.min.js"></script> 
<script src="assets/main/js/debug.addindicators.min.js"></script> 
<script src="assets/main/js/animation.gsap.min.js"></script>
<script src="assets/main/js/plugins.js"></script> 
<script src="assets/main/js/scripts.js"></script>
<!--天气-->
 <div class="mywth" style="width: 150px;">
      <div id="he-plugin-simple"></div>
<script>
WIDGET = {
  "CONFIG": {
    "modules": "01234",
    "background": "1",
    "tmpColor": "FFFFFF",
    "tmpSize": "16",
    "cityColor": "FFFFFF",
    "citySize": "16",
    "aqiColor": "FFFFFF",
    "aqiSize": "16",
    "weatherIconSize": "24",
    "alertIconSize": "18",
    "padding": "10px 10px 10px 10px",
    "shadow": "0",
    "language": "auto",
    "borderRadius": "8",
    "fixed": "false",
    "vertical": "top",
    "horizontal": "left",
    "key": "50b796388d7346acb3bde528a56b4190"
  }
}
</script>
<script src="https://widget.qweather.net/simple/static/js/he-simple-common.js?v=2.0"></script>

 </div>  
 
</body>
</html>