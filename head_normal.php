<html>
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
	<!-- 下面放置网站icon -->
	<link rel="icon" type="image/x-icon" href="<?php echo APP_URL_ROOT;?>/img/favicon.png" />
	<title>uploadlab</title>
</head>
<!-- 网站css -->
<link rel="stylesheet" type="text/css" href="<?php echo APP_URL_ROOT;?>/css/index.css">
<!-- 代码高亮css，用到了prism插件 -->
<link rel="stylesheet" type="text/css" href="<?php echo APP_URL_ROOT;?>/css/prism.css">
<body>
	<div id="head">
		<a href="<?php echo APP_URL_ROOT;?>/"><img src="<?php echo APP_URL_ROOT;?>/img/logo.png"/></a>
		<div id="head_menu">
			<a id="handle_code" href="javascript:show_code()">显示源码</a>
			<a href="javascript:get_prompt()">查看提示</a>
		</div>
	</div>
	<div id="main">