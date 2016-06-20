<?php
/*
Template Name:移植简书主题
Description:没做饭
Version:1.2
Author:没做饭
Author Url:
Sidebar Amount:1
*/
if(!defined('EMLOG_ROOT')) {exit('error!');}
require_once View::getView('module');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<html class="no-js">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title><?php echo $site_title; ?></title>
<meta name="keywords" content="<?php echo $site_key; ?>" />
<meta name="description" content="<?php echo $site_description; ?>" />
<meta name="generator" content="emlog" />

 <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


<link rel="EditURI" type="application/rsd+xml" title="RSD" href="<?php echo BLOG_URL; ?>xmlrpc.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="<?php echo BLOG_URL; ?>wlwmanifest.xml" />
<link rel="alternate" type="application/rss+xml" title="RSS"  href="<?php echo BLOG_URL; ?>rss.php" />
<link href="<?php echo TEMPLATE_URL; ?>css/style.css" rel="stylesheet" type="text/css" />
<link href="<?php echo BLOG_URL; ?>admin/editor/plugins/code/prettify.css" rel="stylesheet" type="text/css" />
<script src="<?php echo BLOG_URL; ?>admin/editor/plugins/code/prettify.js" type="text/javascript"></script>
<script src="<?php echo BLOG_URL; ?>include/lib/js/common_tpl.js" type="text/javascript"></script>

<script src="<?php echo BLOG_URL; ?>content/templates/jiashu/js/common.js"></script>

<!--[if IE 6]>
<script src="<?php echo TEMPLATE_URL; ?>iefix.js" type="text/javascript"></script>
<![endif]-->
<?php doAction('index_head'); ?>
</head>

<div id="nav">
<nav class="nav-menu">
<a class="site-name current" href="<?php echo BLOG_URL; ?>" title="<?php echo $bloginfo; ?>">爱</a>
<a class="site-index current" href="<?php echo BLOG_URL; ?>"><i class="fa fa-home"></i><span>首页</span></a>
<?php blog_navi();?>
     </nav>
  </div>

<div class="nav-user">
	<a class="btn-search" href="#"><i class="fa fa-search"></i></a>
	<a class="btn-read-mode" href="#"><i class="fa fa-sun-o"></i></a>
			<?php if(ROLE == 'admin' || ROLE == 'writer'): ?><a href="<?php echo BLOG_URL; ?>admin/">网站管理</a>&nbsp;&nbsp;<a href="<?php echo BLOG_URL; ?>admin/?action=logout">[退出]</a><?php else: ?><a href="<?php echo BLOG_URL; ?>admin/">登录</a><?php endif; ?>
	</div>
<?php
/*
<div class="nav-user">
	<a class="btn-search" href="#"><i class="fa fa-search"></i></a>
	<a class="btn-read-mode" href="#"><i class="fa fa-sun-o"></i></a>
			<?php if(ROLE == 'admin' || ROLE == 'writer'): ?><a href="<?php echo BLOG_URL; ?>admin/">网站管理</a>&nbsp;&nbsp;<a href="<?php echo BLOG_URL; ?>admin/?action=logout">[退出]</a><?php else: ?><a href="<?php echo BLOG_URL; ?>admin/">登录</a><?php endif; ?>
	</div>
*/
?>

<div class="fixed-btn">
	<a class="btn-gotop" href="javascript:jBlog.goTop();"> <i class="fa fa-angle-up"></i></a>
</div>
<script>
	$(function(){
		jBlog.init({
			url:'http://www.liufu.cc/',
			action:'http://www.liufu.cc/te/index.php/action',
			current:'post',
			prefix:'2744e82ad531f0dafebd6b0f99cfefbe',
		});
	});
</script>



