<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
 <head>
  <meta charset="UTF-8">
  <title>Angelababy</title>
  <link rel="shortcut icon" href="/Angelababy/Public/images/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="/Angelababy/Public/css/meiyan.css" />
 </head>
 <body>
  <!-- header -->
  <div id="header">
    <div>
      <img src="/Angelababy/Public/images/logo1.png" class="lf"/>
      <ul class="lf">
        <li><a href="#">About</a></li>
        <li><a href="#page2">News</a></li>
        <li><a href="#page3">Reviews</a></li>
        <li><a href="#page4">Features</a></li>
        <li class="shang"><a href="#page5"><img src="/Angelababy/Public/images/get-app-btn.png"/></a></li>
      </ul>
      <a href="#" class="rt"><img src="/Angelababy/Public/images/weixin-icon.png"/></a>
      <a href="#" class="rt"><img src="/Angelababy/Public/images/meipai-icon.png"/></a>
    </div>
  </div> 
  <!-- section  -->
  <div id="section">
    <div id="page1">
      <video  preload="" autoplay="" loop=""  poster="/Angelababy/Public/images/video-bg.jpg" src="/Angelababy/Public/images/beauty_camera.mp4">
        <source src="/Angelababy/Public/images/beauty_camera.mp4" type="video/mp4">
      </video>
      <img src="/Angelababy/Public/images/video-slogan.png" title="我好看 世界才好看"/>
      <a href="#">SCROLL <br />.<br />.</a>
    </div>
    <div id="page2">
      <img src="/Angelababy/Public/images/kv-content-img.jpg" class="lf"/>
      <div>
        <div class="rt">
          <img src="/Angelababy/Public/images/kv-logo.png"/> <br />
          <a href="#">了解更多</a><a href="#">立即下载</a>  <br />
          <img src="/Angelababy/Public/images/kv-sign.png"/>
        </div>
      </div>
    </div>
    <div id="page3">
      <div class="page3_top"><span>REVIEWS</span><br /> 双平台一致推荐！</div>
      <div class="page3_middle">
        <div class="page3_middle_1">
          <div class="circle lf">
            <img src="/Angelababy/Public/images/review-ppl-1.jpg"/>
          </div>
          <div class="oblong rt">
            美颜相机真强大 ! 界面又简单~超容易上手 ! <br />  
            <span>- Melody&nbsp;&nbsp;
              <img src="/Angelababy/Public/images/review-point-on.png"/>
              <img src="/Angelababy/Public/images/review-point-on.png"/>
              <img src="/Angelababy/Public/images/review-point-on.png"/>
              <img src="/Angelababy/Public/images/review-point-on.png"/>
              <img src="/Angelababy/Public/images/review-point-on.png"/>
            </span> 
            <b></b>
          </div>
        </div>
        <div class="page3_middle_2">
          <div class="oblong lf">
            美颜相机真强大 ! 界面又简单~超容易上手 ! <br />  
            <span>- Melody&nbsp;&nbsp;
              <img src="/Angelababy/Public/images/review-point-on.png"/>
              <img src="/Angelababy/Public/images/review-point-on.png"/>
              <img src="/Angelababy/Public/images/review-point-on.png"/>
              <img src="/Angelababy/Public/images/review-point-on.png"/>
              <img src="/Angelababy/Public/images/review-point-on.png"/>
            </span> 
            <b></b>
          </div>
          <div class="circle rt">
            <img src="/Angelababy/Public/images/review-ppl-2.jpg"/>
          </div>
        </div>
        <div class="page3_middle_3">
          <div class="circle lf">
            <img src="/Angelababy/Public/images/review-ppl-3.jpg"/>
          </div>
          <div class="oblong rt">
            美颜相机真强大 ! 界面又简单~超容易上手 ! <br />  
            <span>- Melody&nbsp;&nbsp;
              <img src="/Angelababy/Public/images/review-point-on.png"/>
              <img src="/Angelababy/Public/images/review-point-on.png"/>
              <img src="/Angelababy/Public/images/review-point-on.png"/>
              <img src="/Angelababy/Public/images/review-point-on.png"/>
              <img src="/Angelababy/Public/images/review-point-on.png"/>
            </span> 
            <b></b>
          </div>
        </div>
      </div>
    </div>
    <div id="page4">
      <div class="page4_top" id="page4_top">
        <span>FEATURES</span><br />
        <b class="pic1" onclick="pic(this)" id="pic1" style="top:-10px;">
          <i style="animation:pic 2s infinite;" id="pic1+"></i>
          <s style="z-index:1;" id="pic1="></s>
        </b>
        <b class="pic2" onclick="pic(this)" id="pic2">
          <i id="pic2+"></i><s id="pic2="></s>
        </b>
        <b class="pic3" onclick="pic(this)" id="pic3">
          <i id="pic3+"></i><s id="pic3="></s>
        </b>
        <b class="pic4" onclick="pic(this)" id="pic4">
          <i id="pic4+"></i><s id="pic4="></s>
        </b>
      </div>
      <div class="page4_middle" id="page4_middle">
        <div id="pic1_" style="display:block;">
          <img src="/Angelababy/Public/images/feature-ppl01.png" class="lf" id="pic1img1" />
          <img src="/Angelababy/Public/images/feature-phone01.png" class="lf" id="pic1img2" />
          <div class="rt">
            <h1>自拍超完美的小秘密， <br />一秒拥有好气色</h1>
            按下快门瞬间修颜，变身粉嫩美少女，<br />美颜表现力更出色，时刻展现完美的你！
          </div>
        </div>
        <div id="pic2_">
          <img src="/Angelababy/Public/images/feature-ppl02.png" class="lf" id="pic2img1"/>
          <img src="/Angelababy/Public/images/feature-phone02.png" class="lf" id="pic2img2"/>
          <div class="rt">
            <h1>夜拍自动补光，<br />黑暗中照样美美的</h1>
            自动补光调整光线，全面降噪，<br />昏暗环境也能轻松自拍！
          </div>
        </div>
        <div id="pic3_">
          <img src="/Angelababy/Public/images/feature-ppl03.png" class="lf" id="pic3img1"/>
          <img src="/Angelababy/Public/images/feature-phone03.png" class="lf" id="pic3img2"/>
          <div class="rt">
            <h1>专业级修颜效果，<br />满足你对美的极致要求</h1>
            手动调整美白磨皮、淡斑祛痘、消除黑眼圈！满足你最在意的细节，即刻拥有不失真的精致脸庞！
          </div>
        </div>
        <div id="pic4_">
          <img src="/Angelababy/Public/images/feature-ppl04.png" class="lf" id="pic4img1"/>
          <img src="/Angelababy/Public/images/feature-phone04.png" class="lf" id="pic4img2"/>
          <div class="rt">
            <h1>全球领先视频美颜技术，<br />捕捉你的美时美刻！</h1>
            首创视频美颜自拍功能，智能脸部定位，更有梦幻音乐MV效果，让你不再只做平面model！
          </div>
        </div>
      </div>
    </div>
    <div id="page5">
			<div>
				<img src="/Angelababy/Public/images/download-ppl.png" class="lf"/>
				<p>GET APP</p><br />
				<span>选择适合你的手机系统<br />
				立即</span><a href="#">免费下载</a>
			</div>
			<div>
				<img src="/Angelababy/Public/images/get-app-ios.png"/>
				<img src="/Angelababy/Public/images/get-app-android.png"/>
				<b></b><i></i>
			</div>
		</div>
  </div>
	<!-- footer -->
	<div id="footer">
		<div>
			厦门美拍科技有限公司<br /><br />
			厦门火炬高新软件园华讯楼C区BIF-055电话：0592-5320520
		</div>
	</div>
  <script type="text/javascript">
    function pic(b){
      var div=document.getElementById(b.id+"_");
      var i=document.getElementById(b.id+"+");
      var s=document.getElementById(b.id+"=");
      var img1=document.getElementById(b.id+"img1");
      var img2=document.getElementById(b.id+"img2");
      if (div.style.display!="block"){
        //div
        document.querySelector("#page4_middle>div[style]").removeAttribute("style");
        div.style.display="block";
        //b
        document.querySelector("#page4_top>b[style]").removeAttribute("style");
        b.style.top="-10px";
        //i
        document.querySelector("#page4_top>b>i[style]").removeAttribute("style");
        i.style.animation="pic 2s infinite";
        //s
        document.querySelector("#page4_top>b>s[style]").removeAttribute("style");
        s.style.zIndex="1";
      }
    }
  </script>
 </body>
</html>