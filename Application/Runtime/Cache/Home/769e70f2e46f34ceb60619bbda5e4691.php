<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
<meta name="keywords" content="微橙 投放平台">
<meta name="description" content="WiOrange微橙移动广告平台是橙子互动旗下的广告投放平台" />
<meta http-equiv="Cache-Control" content="no-transform">
<meta http-equiv="Cache-Control" content="no-siteapp">
<link rel="icon" href="/Public/common/images/fav.ico" type="image/x-icon">
<title>微橙</title>	
<link href="/Public/Home/css/Index/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
<link href="/Public/Home/css/common/main.css" type="text/css" rel="stylesheet" media="screen,projection"/>



<script>
		var _hmt = _hmt || [];
		(function() {
		  var hm = document.createElement("script");
		  hm.src = "//hm.baidu.com/hm.js?6c4c0dc217299643e9b6984421d5a7a2";
		  var s = document.getElementsByTagName("script")[0];
		  s.parentNode.insertBefore(hm, s);
		})();
</script>

	</head>
	<body>
		<!--头部-->
		<!--导航条-->
<header>
	<nav role="navigation">
		<div class="nav-wrapper container">
			<a href="<?php echo U('Index/index');?>" class="logo">
				<img src="/Public/Home/images/home/WiOrange_logo.png" / >
			</a>
			<span class="login"></span>
			<span class="login"></span>
			<ul class="right hide-on-med-and-down" id="nav-links">
				<li><a  class="<?php if($flagindex == ACTION_NAME): ?>active<?php endif; ?>"  href="<?php echo U('Index/index');?>">首页</a></li>
				<li><a  class="<?php if($flagproduct == ACTION_NAME): ?>active<?php endif; ?>" href="<?php echo U('Index/product');?>">产品介绍</a></li>
				<li><a  class="<?php if($flagabout == ACTION_NAME): ?>active<?php endif; ?>" href="<?php echo U('Index/about');?>">关于我们</a></li>
				<li><a  class="<?php if($flagcasees == ACTION_NAME): ?>active<?php endif; ?>" href="<?php echo U('Index/casees');?>">合作案例</a></li>
				<li><a  class="<?php if($flagcontact == ACTION_NAME): ?>active<?php endif; ?>" href="<?php echo U('Index/contact');?>">联系我们</a></li>				
			</ul>
			<ul id="nav-mobile" class="side-nav">
				<li><a href="<?php echo U('Index/index');?>">首页</a></li>
				<li><a href="<?php echo U('Index/product');?>">产品介绍</a></li>
				<li><a href="<?php echo U('Index/about');?>">关于我们</a></li>＼
				<li><a href="<?php echo U('Index/casees');?>">合作案例</a></li>
				<li><a href="<?php echo U('Index/contact');?>">联系我们</a></li>	
			</ul>
			<a href="#" data-activates="nav-mobile" class="button-collapse hide-on-large-only">
				<img class="menu" src="/Public/Home/images/home/menu-gray.svg"/>
			</a>
		</div>
	</nav>
</header>
		<!--/头部-->

		<!--主体-->
		
	<section id="hero">
		<div class="row"></div>
	</section>
	<div class="wrapper">
			<!--优势服务-->
			<div class="membership">
				<div class="row">
					<div class="top_section col s12">
						<h3>优势服务</h3>
						<p><img src="/Public/Home/images/home/youshi.png" /></p>						
					</div>
				</div>
			</div>

			<div class="divider"></div>
			
			<!--投放案例-->
			<div class="membership">
				<div class="row">
					<div class="top_section col s12">
						<h3>投放案例</h3>
						<p><img src="/Public/Home/images/home/anli.png" /></p>						
					</div>
				</div>
			</div>
	
			<!--合作伙伴-->
			<div class="membership">
				<div class="row">
					<div class="top_section col s12">
						<h3>合作伙伴</h3>
						<p><img src="/Public/Home/images/home/huoban.png" /></p>						
					</div>
				</div>
			</div>
	
			<div class="divider"></div>

			<div class="divider hide-on-med-and-up"></div>
	
			<section id="testimonial">
				<h3>合作案例</h3>
				<div class="row">
					<div class="col s12 m4 l4 ">
						<img src="img/img_three.png" />
					</div>
					<div class="hide-on-small-only col s12 m4 l4 ">
						<img src="img/img_two.png" />
					</div>
					<div class="hide-on-small-only col s12 m4 l4 ">
						<img src="img/img_one.png" />
					</div>
					<p>提高消费者体验的同时</br>让线下商户真实感受到移动支付的强大优势</p>
				</div>
				<div class="row">
					<div class="hide-on-small-only col s12 m4 l4 ">
						<img src="img/img_four.png" />
					</div>
					<div class="col s12 m4 l4 ">
						<img src="img/img_five.png" />
					</div>
					<div class="hide-on-small-only col s12 m4 l4 ">
						<img src="img/img_six.png" />
					</div>
					<p>将官方活动与电影元素相结合</br>为商户打造独一无二的主题营销活动</p>
				</div>
			</section>
			<section id="payment" class="hide-on-small-only"></section>	
			<div class="divider"></div>
			<div class="mobile-tab">
				<a href="#" class="download-now hide-on-med-and-up">下载客户端</a>
				<a href="#" target="_blank" class="apply-now hide-on-med-and-up">商户申请</a>			
			</div>
	</div>


		<!--/主体-->

		<!--底部-->
		<section id="mobile-footer" class="hide-on-med-and-up">
	<div class="info-section">
		<p>想要了解更多，马上致电</p>
		<a href="tel:400-360-800">4000-360-280</a>
		<p>联系地址</p>
		<h5>北京市朝阳区望京SOHO T3 A座17层</h5>
		<p>扫描二维码关注“钱方好近商户” 公众号</p>
		<img src="img/qrc.jpg" />
	</div>
	<div class="m-footer">
		<p>2012-2015 © Shenzhen Orange Interactive Co., Ltd. 深圳橙子互动股份有限公司 　</p>
		<p>增值电信业务经营许可证：粤B2-20160039</p>
		<p>粤ICP备13016340号-1 网络文化经营许可证：粤网文【2015】2109-452</p>
	</div>
</section>	
<footer class="page-footer hide-on-small-only">
	<div class="container">
		<div class="row">
			<div class="col l6 m6 s12">
				<a href="<?php echo U('Index/index');?>"><img src="/Public/Home/images/home/WiOrange_logo.png"/ ></a>
				<p>2012-2015 © Shenzhen Orange Interactive Co., Ltd. 深圳橙子互动股份有限公司
					<a href="#" target="_blank" style="color: black">粤ICP备13016340号-1</a><span> / </span>
          			<a href="#" target="_blank" style="color: black">网络文化经营许可证：粤网文【2015】2109-452　增值电信业务经营许可证：粤B2-20160039</a>
        		</p>
			</div>
		</div>
	</div>
</footer>
<div class="sidebar hide-on-small-only">
	<h3>扫描二维码关注微橙商户公众号</h3>
	<img src="img/qrc.jpg" />
	<p>电话：4000-360-280</p>
<!-- 	<a class="modal-trigger add_three hide-on-small-only" href="#modal1">下载钱方好近商户</a> -->
    <a class="add_two" href="#" target="_blank">城市合伙人申请</a>
	<a class="add" href="#" target="_blank">广告合作</a>
</div>	
<!-- <div id="modal1" class="modal">
	<div class="modal-content">
		<p>扫描二维码下载钱方好近商户客户端</p>
		<img src="img/merchant-qr.jpg"/>
	</div>
</div> -->


	<script src="/Public/Home/js/common/jquery-1.11.3.min.js"></script>
<script src="/Public/Home/js/common/dynamics.min.js"></script>
<script src="/Public/Home/js/Index/main.js"></script>
<script src="/Public/Home/js/common/materialize.min.js"></script>


<script>
$('.button-collapse').sideNav();
$('.modal-trigger').leanModal();	
</script>

<!--加载隐藏元素-->
<div class="hidden">
   
</div>
		<!--/底部-->

	</body>
</html>