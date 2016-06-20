<?php 
/**
 * 自建页面模板
 */
if(!defined('EMLOG_ROOT')) {exit('error!');} 
?>
<div class="main-inner">
    <article class="post" itemscope="" itemtype="http://schema.org/BlogPosting">
        <div class="post-header">
	<h2 class="post-title"><?php echo $log_title; ?></h2>
	    </div>
		
		<div class="post-content" itemprop="articleBody">
	
	<hr>
<p><?php echo sysort();?></p>
<?php  Get_newlogs(20);?>
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

