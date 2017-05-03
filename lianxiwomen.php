<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>规范模板</title>
	<style>
		*{
			margin: 0px;padding: 0px;list-style: none;font-family: microsoft yahei,Tahoma,Helvetica,arial,sans-serif;
		}
		#header{
			min-height: 360px;
			width: 100%;
		}
		#header #logo_box{
			width: 100%;
			min-height: 107px;
			border-bottom: 1px solid #c6d2d8;
		}
		#header #logo{
			width: 1000px;
			min-height: 107px;
			margin: auto;
		}
		#header #logo input{

		}
		#header #logo img{
			float: left;
		}
		#header #logo div{
			float: right;
			width: 400px;
			height: 30px;
			text-align: right;
			color: #747474;
			margin-top:16px;
			font-size: 14px;
			margin-bottom: 4px;
		}
		#header #logo form{
			float: right;
			width: 292px;
			height: 32px;
		}
		#header #logo #input1{
			width: 230px;
			height: 30px;
			border:1px solid #0fa9eb;
			float: left;
		}
		#header #logo #input2{
			background: #0fa9eb;
			color: #fff;
			width: 60px;
			height: 32px;
			border:none;
			font-size: 18px;
			float: left;
		}
		#header #nav{
			width: 1000px;
			height: 50px;
			margin:auto;
		}
		#header #nav ul li{
			width: 142px;
			height: 50px;
			float: left;
			list-style: none;
			line-height: 50px;
			text-align: center;
		}
		#header #nav ul li a{
			text-decoration: none;
			font-size: 18px;
			color: #333333
		}
		#header #nav ul li:hover{
			background: #0FA9EB;
		}
		#header #ad{
			width: 100%;
			height: 202px;
		}
		#main{
			width: 1000px;
			min-height: 800px;
			margin: auto;
		}
		#main #left{
			width: 190px;
			min-height: 500px;
			float: left;
		}
		#main #left #head{
			width: 170px;
			height: 51px;
			background: #6fcbf3;
			padding-left: 20px;
			padding-top: 10px;
		}
		#main #left #head div{
			width: 98px;
			height: 39px;
			font-size: 24px;
			line-height: 40px;
			border-bottom: 1px solid #fff;
			color: #fff;
		}
		#main #left #d2{
			width: 170px;
			height: 36px;
			padding-left: 20px;
			line-height: 36px;
			background: #0fa9eb;
			display: block;
			text-decoration: none;
			color: #fff;
		}
		#main #left #d3{
			width: 170px;
			height: 36px;
			padding-left: 20px;
			line-height: 36px;
			background: #eeeeee;
			display: block;
			text-decoration: none;
			color: #000;
		}
		#main #left #d2 a{			
			text-decoration: none;
			color: #fff;
		}
		#main #left #d3 a{
			text-decoration: none;
			color: #000;
		}
		#main #left #d2:hover{
			color: #fff;
		}
		#main #left #d3:hover{
			background: #0FA9EB;
		}
		#main #right{
			width: 780px;
			min-height: 500px;
			float: right;
		}
		#main #right #head{
			width: 100%;
			height: 29px;
			border-bottom: 1px solid #A0A0A0;
			padding-top: 16px;
		}
		#main #right #head #title{
			width: 74px;
			height: 28px;
			font-size: 18px;
			color: #0fa9eb;
			border-bottom: 3px solid #0fa9eb;
		}
		#main #right #content{
			font-size: 14px;
			line-height: 36px;
			margin-top:35px;
			margin-bottom: 35px;
		}
		#main #right #content #img1{
			margin-bottom: 32px;
		}
		#footer{
			width: 100%;
			height: 128px;
			background: #0FA9EB;
			line-height: 42px;
			font-size: 14px;
			color: #fff;
			text-align: center;
			clear:both;
		}
		#footer a{
			text-decoration: none;
			color: #fff;
		}
	</style>
</head>
<body>
	<div id="header">
		<div id="logo_box">
			<div id="logo">
				<img  src="./images/lianxiwomentou.png" />
				<div>设为首页丨加入收藏</div>
				<form action="#" method="get">
					<input id="input1" type="text" name="keywords" placeholder="请输入关键词..." />
					<input  id="input2" type="submit" name="search" value="搜索" />
				</form>
			</div>
		</div>

		<div id="nav">
			<ul>
				<li><a href="#">网站首页</a></li>
				<li><a href="#">关于诚技</a></li>
				<li><a href="#">新闻资讯</a></li>
				<li><a href="#">产品中心</a></li>
				<li><a href="#">成功案例</a></li>
				<li><a href="#">人才招聘</a></li>
				<li><a href="#">联系我们</a></li>
			</ul>
		</div>

		<div id="ad">
			<img src="./images/lianxiwomen.png" height="202px"/>
		</div>

	</div>

	<div id="main">
		<div id="left">
			<div id="head">
				<div>联系我们</div>
			</div>
			<a href="#"  id="d2">> 联系我们</a>
			<a href="#"  id="d3">> 在线留言</a>
		</div>

		<div id="right">
			<div id="head">
				<div id="title">
					联系我们
				</div>

			</div>

			<div id="content">
			<?php
				$string = '';
				$string = $string . '<p>办公区：辽宁省大连市开发区东北七街上品公馆18A1108</p>';
				$string = $string . '<p>电话：0411-62634264      传真：0411-62634263</p>';
				$string = $string . '<img src="./images/lianxiwomen1.jpg" id="img1"/>';
				$string = $string . '<p>工厂区：辽宁省大连市开发区董家沟卧龙工业园一期铁山东路98-5-1</p>';
				$string = $string . '<p>电话：0411-87306696    传真：0411-87324028</p>';
				$string = $string . '<img src="./images/lianxiwomen2.jpg" id="img2"/>';
				echo $string;
			?>
			</div>
		</div>

	</div>

	<div id="footer">
		<div><a href="#">关于诚技</a> | <a href="#">新闻资讯</a> | <a href="#">产品中心</a> | <a href="#">成功案例</a> | <a href="#">人才招聘</a> | <a href="#">联系我们</a></div>
		<div>Copyright © 大连诚技机电设备有限公司 版权所有 辽ICP备13015234号-2</div>
		<div>网站设计：<a href="#">仟亿科技</a></div>
	</div>
</body>
</html>