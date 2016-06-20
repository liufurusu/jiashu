<?php 
/**
 * 自建页面模板
 */
if(!defined('EMLOG_ROOT')) {exit('error!');} 
?>
<div class="main-inner">
    <article class="post" itemscope="" itemtype="http://schema.org/BlogPosting">
        <div class="post-header">
		<?php global $CACHE;
$tag_cache = $CACHE->readCache('tags');?>

	<h2 class="post-title"><?php echo $log_title; ?></h2>
	    </div>
	<div class="post-content" itemprop="articleBody">
	<hr>
	
	<div class="post-content" itemprop="articleBody">
            <ul class="tag-list">
        <p>
         <?php foreach($tag_cache as $value): ?>
         
        <li> <a href="<?php echo Url::tag($value['tagurl']); ?>" title="<?php echo $value['usenum']; ?> 篇日志" style="color:rgb(<?php echo(rand(0,255)); ?>,<?php echo(rand(0,255)); ?>,<?php echo(rand(0,255)); ?>)"><?php echo $value['tagname']; ?></a></span> </li>
         <?php endforeach; ?></p>
		 </ul>
        </div>
    </article>
	
	
	<?php blog_comments($comments); ?>
	<?php blog_comments_post($logid,$ckname,$ckmail,$ckurl,$verifyCode,$allow_remark); ?>
	<div style="clear:both;"></div>
</div><!--end #contentleft-->
<?php
 include View::getView('side');
 include View::getView('footer');
?>
