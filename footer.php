<?php 
/**
 * 页面底部信息
 */
if(!defined('EMLOG_ROOT')) {exit('error!');} 
?>


<footer class="footer">
	<div class="footer-inner">


</div><!--end #content-->
<div style="clear:both;"></div>
<div id="footerbar">
	Copyright © <a href="http://www.liufu.cc" title="爱上书">爱上书</a> All Rights Reserved. 
	Powered by <a href="http://www.emlog.net" title="采用emlog系统">emlog</a>  theme By <a href="http://lixianhua.com/" target="_blank" >移植简书</a>
	<a href="http://www.miibeian.gov.cn" target="_blank"><?php echo $icp; ?></a> <?php echo $footer_info; ?>
	<?php doAction('index_footer'); ?>
</div><!--end #footerbar-->
</div><!--end #wrap-->
<script>prettyPrint();</script>
</body>
</html>