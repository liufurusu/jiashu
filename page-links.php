<?php 
/**
 * 自建页面模板
 */
if(!defined('EMLOG_ROOT')) {exit('error!');} 
?>
<div id="body">
<div class="main">

<div class="main-inner">
    <article class="post" itemscope="" itemtype="http://schema.org/BlogPosting">
        <div class="post-header">
	<h2 class="post-title"><?php echo $log_title; ?></h2>
	    </div>
		<p><?php echo $log_content; ?></p>
		<a href="<?php echo BLOG_URL; ?>waterwall.html"  title="申请链接"><font color=#FF0000>申请链接</font></a> | 
		<ul class="tag-list flinks">
		 
	  <? global $CACHE; 
	$link_cache = $CACHE->readCache('link');
	?>
	<?php foreach($link_cache as $value): ?>
	<li><a href="<?php echo $value['url']; ?>" title="<?php echo $value['des']; ?>" target="_blank"><?php echo $value['link']; ?></a> |</li>
	<?php endforeach; ?>
	
	</ul>
   </div>
		<div class="post-content" itemprop="articleBody">
	
	<hr>

        </div>
    </article>
	 </div>
	 </div>
	<?php blog_comments($comments); ?>
	<?php blog_comments_post($logid,$ckname,$ckmail,$ckurl,$verifyCode,$allow_remark); ?>
	<div style="clear:both;"></div>
</div><!--end #contentleft-->
<?php
 include View::getView('side');
 include View::getView('footer');
?>

