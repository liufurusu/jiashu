<?php 
/**
 * 阅读文章页面
 */
if(!defined('EMLOG_ROOT')) {exit('error!');} 
?>
<html class="no-js"><head>
   <script src="<?php echo BLOG_URL; ?>content/templates/jiashu/js/common.js"></script>
<body class=" single">
<!--[if lt IE 8]>
    <div class="browsehappy" role="dialog">当前网页 <strong>不支持</strong> 你正在使用的浏览器. 为了正常的访问, 请 <a href="http://browsehappy.com/">升级你的浏览器</a>.</div>
<![endif]-->

</div><!-- end #header -->

<div id="wrapper" class="clearfix">
<div id="body">
<div class="main">
<div class="page-title">
	<ul>
		<li><a href="<?php echo BLOG_URL; ?>">最新</a></li>
				<li class="active">
							<?php blog_sort($logid); ?> 
					</li>
						<li><a href="javascript:jBlog.ajaxGetExplore();" title="随机显示一篇文章">探索</a></li>
		<li class="page-search">
		<form name="keyform" id="search" method="get" action="<?php echo BLOG_URL; ?>index.php" role="search">
		<label for="s" class="sr-only">搜索关键字</label>
		<input type="text" name="keyword" class="text" placeholder="输入关键字搜索">
		<button type="submit" class="submit" title="搜索"><i class="fa fa-search"></i></button>
			</form>
		</li>
	</ul>
</div>
<div class="main-inner">
    <article class="post" itemscope="" itemtype="http://schema.org/BlogPosting">
        <div class="post-header">
			<div class="post-author clearfix">
				<a class="avatar fleft" href="#"><img width="48" src="
<?php $user_cache = $CACHE->readCache('user'); echo empty($user_cache[$author]['avatar']) ? BLOG_URL.'admin/views/images/avatar.jpg' : BLOG_URL.$user_cache[$author]['avatar']; ?>"style="  height: 48px; " /> </a>




				<p><span class="label">作者</span><?php blog_author($author); ?></a> <?php echo gmdate('Y-n-j', $date); ?> <?php editflg($logid,$author); ?></p>
				<p>写了87篇文章,回复51人,</p>
			</div>
			<h2 class="post-title"><?php topflg($top); ?><?php echo $log_title; ?></h2>
			<div class="post-meta">
				<a href="http://www.liufu.cc/ty/index.php/archives/800.html">阅读：174</a><em>·</em>
				<a href="http://www.liufu.cc/ty/index.php/archives/800.html#comments">评论：0</a><em>·</em>
				<span>喜欢：7</span>
				
				
			</div>
		</div>
        <div class="post-content">
            <?php echo $log_content; ?>
        </div>
		<?php doAction('log_related', $logData); ?>
		
		
		<div class="post-tool">
			<a class="btn-like" href="javascript:void(0);" data-cid="800" title="7"><i class="fa fa-heart-o"></i> 赞 | <span>7</span></a>
			<a class="btn-donate" href="javascript:void(0);">赏</a>
		</div>
        <div class="post-tags"><?php blog_tag($logid); ?></div>
		
		
    </article>
	
      <div class="nextlog"><?php neighbor_log($neighborLog); ?></div>
    
<div id="comments">

    <?php blog_comments($comments); ?>

    <?php blog_comments_post($logid,$ckname,$ckmail,$ckurl,$verifyCode,$allow_remark); ?>
	<div style="clear:both;"></div>


</div>

</div><!-- end #main-->
	</div><!-- end #main-->
</div><!-- end #body -->

</div>




<?php
 include View::getView('side');
 include View::getView('footer');
?>