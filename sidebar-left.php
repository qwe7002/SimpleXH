<?PHP
include("conf.php");
?>
<div id="sidebar-left" class="am-offcanvas">
  <div class="am-offcanvas-bar">
    <nav class="open am-animation-slide-left">
    <div id="photo">
      <img src="<?php
      $this->options->themeUrl('img/head.jpg');
      ?>">
    </div>
   
    <div id="author-info">
		<span id="starriv">
			<?php
      echo NAME;
      ?>
		</span>
      <a href="mailto:<?php echo MAIL;?>">
      <?php
      echo MAIL;
      ?></a>
    </div>
    <div id= "nav" class="am-offcanvas-content">
    <div id="list">
   <a href="<?php $this->options->siteUrl(); ?>"> <span id="ico" class="am-icon-home"></span>  &nbsp;&nbsp;&nbsp;主页</a>
      <a href="<?php
      $this->options->siteUrl();
      echo ABOUTME;
      ?>"><span id="ico" class="am-icon-angle-right"></span>  &nbsp;&nbsp;&nbsp;About ME</a>
      <a href="<?php
      $this->options->siteUrl();
      echo LINK;
      ?>"><span id="ico" class="am-icon-angle-right"></span>  &nbsp;&nbsp;&nbsp;友情连接</a>
 
        
        <div class="am-dropdown am-dropdown-up" data-am-dropdown>
  <button class="am-btn am-btn-danger am-dropdown-toggle shangla" data-am-dropdown-toggle><span id="ico" class="am-icon-angle-right"></span>&nbsp;&nbsp;分类&nbsp;&nbsp;<span class="am-icon-caret-up"></span></button> <ul class="am-dropdown-content shangla">
  
            <li class="am-active"><a href="<?php $this->options->siteUrl(); echo CATEGORYLIFEURL;?>">生活</a></li>
            <li class="am-active"><a href="<?php $this->options->siteUrl(); echo CATEGORYTECHNOLOGYURL;?>">技术</a></li>
  </ul>
		</div>
      </div>
    </div>
        		<form class="form" id="search-form">
      <input type="text" name="s" class="search-input" id="search" required="true" placeholder="Search...">
			</form>
        </nav>

              <div id="menu" class=""><span class="meuns">Menu</span></span></div>
    </div> 
  </div>
</div>
