<?php 
/**
 * 站点首页模板
 */
if(!defined('EMLOG_ROOT')) {exit('error!');} 
?>



<div id="cover"><div class="cover-img" style="background-image:url('http://www.liufu.cc/content/templates/jiashu/images/bg.jpg')"></div><div class="cover-info"><img class="avatar" width="72" src="http://gravatar.duoshuo.com/avatar/8350a0e4f1d24880ea3db02c9a78c5d1?s=220&amp;r=X&amp;d=mm" alt=""><p><?php echo $bloginfo; ?> </p><div class="cover-sns"><div class="btn btn-weibo"><a href="javascript:void(0);"><i class="fa fa-weibo"></i></a><div class="qrcode"><img src="http://www.liufu.cc//content/templates/jiashu/images/site.png" alt=""></div><div class="qrcode-arrow"></div></div><div class="btn btn-weixin"><a class="" href="javascript:void(0);"><i class="fa fa-weixin"></i></a><div class="qrcode"><img src="http://www.liufu.cc//content/templates/jiashu/images/site.png" alt=""></div><div class="qrcode-arrow"></div></div></div></div></div>

<div id="body">
<div class="main">
<div class="page-title" style="width: 766px;"><ul><li class="active">
<a href="http://www.liufu.cc/">最新</a>
</li><li><a href="javascript:jBlog.ajaxGetExplore();" title="随机显示一篇文章">探索</a>


</li>
<li class="page-search"><form name="keyform" id="search" method="get" action="<?php echo BLOG_URL; ?>index.php" role="search"><label for="s" class="sr-only">搜索关键字</label><input type="text" name="keyword" class="text" placeholder="输入关键字搜索"><button type="submit" class="submit" title="搜索"><i class="fa fa-search"></i></button></form></li></ul></div>






<?php doAction('index_loglist_top'); ?>

<?php 
if (!empty($logs)):
foreach($logs as $value): 
?>
<div class="main-inner">

<article class="post">

<div class="post-cover">
<?php $imgsrc = preg_match_all("|<img[^>]+src=\"([^>\"]+)\"?[^>]*>|is", $value['content'], $img);$imgsrc = !empty($img[1]) ? $img[1][0] : ''; ?>
<?php if($imgsrc): ?>
<a href="<?php echo $value['log_url']; ?>" class="article_exp_img" target=_blank>


<img src=<?php echo BLOG_URL; ?>content/templates/jiashu/timthumb.php?src=<?php echo $imgsrc; ?> width="120" height="100" 

 alt="<?php echo $value['log_title']; ?>" title="<?php echo $value['log_title']; ?>"></a>

<?php else: ?>

<?php endif; ?>
</div>



<div class="post-header">

<div class="post-meta">




<?php blog_author($value['author']); ?></a> <strong></strong></a><em>·</em><?php echo gmdate('Y-n-j', $value['date']); ?></div>
<a class="post-title" <?php topflg($value['top'], $value['sortop'], isset($sortid)?$sortid:''); ?><a href="<?php echo $value['log_url']; ?>"><?php echo $value['log_title']; ?></a>
<div class="post-meta">
<a href="<?php echo $value['log_url']; ?>">阅读：(<?php echo $value['views']; ?>)</a><em></em>
<a href="<?php echo $value['log_url']; ?>#comments">评论：(<?php echo $value['comnum']; ?>)</a>
<em>·</em></div></div>
<?php echo $value['log_description']; ?>   </div></article>






<?php 
endforeach;
else:
?>
	<h2>未找到</h2>
	<p>抱歉，没有符合您查询条件的结果。</p>
<?php endif;?>

<ol class="page-navigator"><li class="current"><?php echo $page_url;?></a></li></ol>





<?php
 include View::getView('side');
 include View::getView('footer');
?>