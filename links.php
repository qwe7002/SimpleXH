<?php
/**
 * 友情链接
 *
 * @package custom
 */
?>
<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div class="am-g">
  <div class="am-u-sm-12"></div>
  <div class="am-u-sm-12"></div>

	<div id="links">
		
		<div class="am-alert" data-am-alert>
  <button type="button" class="am-close">&times;</button>
  		
  		<p style="text-align: center !important;">欢迎交换友情链接，博主E-mail:<a href="mailto:<?php include('conf.php'); echo MAIL;?>"><?php echo MAIL;?></a></p>
  		
		</div>


		<?php $this->content(); ?>
		<table class="am-table am-table-bordered am-table-striped am-table-hover">
    <thead>
        <tr>
            <th>网站名称</th>
            <th>网址</th>
        </tr>
    </thead>
    <tbody>
        <tr class="am-active">
            <td>starriv | 关注安全与研发</td>
            <td><a href="https://starriv.com/">https://starriv.com/</td>
        </tr>
        <tr class="am-active">
            <td>DELUXGHOST</td>
            <td><a href="http://deluxghost.me/">http://deluxghost.me/</td>
        </tr>
    </tbody>
</table>
	</div>
	
	
</div>
</div>
<div class="comments">
	<?php $this->need('comments.php'); ?>
</div>
<?php $this->need('sidebar-left.php'); ?>
<?php $this->need('sidebar-right.php'); ?>
<?php $this->need('footer.php'); ?>