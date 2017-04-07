<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="renderer" content="webkit">
<title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
<link rel="shortcut icon" href="<?php echo APP_PATH;?>statics/v1/images/logo_guo.jpg" />
<meta name="keywords" content="<?php echo $SEO['keyword'];?>">
<meta name="description" content="<?php echo $SEO['description'];?>">
<link type="text/css" rel="stylesheet" href="<?php echo APP_PATH;?>statics/v1/css/content_2.0.css" />
<link type="text/css" rel="stylesheet" href="<?php echo APP_PATH;?>statics/v1/css/headFoot_2.0.css" />
<script type="text/javascript" src="<?php echo JS_PATH;?>jquery.min.js"></script>

</head>
<body>

<header id="header">
    <!-- 顶部导航-->
    <div class="pubTopNav" id="pubTopNav">
      <div class="comWidth clearfix">
        <div class="fl_dib">
          <ul>
            <p class="date" id="date">星期日&nbsp;2017-03-05</p>
          </ul>
        </div>
        <div class="fr_dib">
        </div>
      </div>
    </div>

    <div class="tkp_header comWidth clearfix">
        <div class="logoBox">
            <a href="/" target="_blank"><img width="83px" height="65px" src="<?php echo APP_PATH;?>statics/v1/images/favico.ico" class="tkp_channel_logo"></a>
        </div>
    </div>
       
    <!-- 导航 -->
    <div class="nav_wrap">
        <div class="nav">
            <ul>
                <li><a href="/" target="_blank">首页</a></li>
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b43f1459ac702900c8d44c91a5e796dd&action=category&catid=0&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'0','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
                    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                        <li><a href="<?php echo $r['url'];?>" target="_blank"><?php echo $r['catname'];?></a></li>
                    <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </ul>
        </div>
    </div> 
    <!-- //导航 -->    
        
</header>

<!-- 内容部分 -->
<div class="container comWidth clearfix">
    <!-- 左 -->
    <div class="con_l fl_dib">
        <div class="tpk_con clearfix">
            <h1 class="tpk_con_tle"><?php echo $title;?></h1>
            <div class="tpk_article_info">
                <div class="article_info_l fl_dib">
                    <div class="fl_dib"><?php echo $inputtime;?><span>|</span></div>
                    <div class="fl_dib">来源：<?php echo $copyfrom;?><span>|</span></div>
                </div>
            </div>
            <!-- 文章详情-->
            <div class="tpk_text clearfix">
                <?php echo $content;?>
            </div>
            <!-- 分页-->
            <div class="tpk_page clearfix">
                <?php echo $pages;?>
            </div>
            <!-- <div class="tkp_con_author clearfix"><span>责任编辑：DF003</span></div> -->
            
            <div class="clearfix">
            </div>
        </div>
        <!-- 文章内容end-->
    </div>
    <!-- 右 -->
        
    <div class="con_r fr_dib">
	   
    </div>
    <!-- 右end -->
</div>
<!-- 内容部分end -->

<!-- 返回顶部-->
<div id="tipback" class="btn_top" title="返回顶部" onclick="gotop();"><a class="icon_top_n" href="javascript:;"></a></div>
<!--通用底部 -->
<div class="tkp_line"></div>

<div class="copyright comWidth clearfix">
    <div class="cop_dg">
        <a href="#" target="_blank">关于我们</a><span>|</span>
        <a href="#" target="_blank">网站声明</a><span>|</span>
        <a href="#" target="_blank">举报投诉须知</a><span>|</span>
        <a href="#" target="_blank">诚聘英才</a><span>|</span>
        <a href="#" target="_blank">友情链接</a><span>|</span>
        <a href="#" target="_blank">联系我们</a><span>|</span>
        <a target="_blank" href="#">广告服务</a><span>|</span>
    </div>
    <div class="p-cut">湘ICP备15003377号-1</div>
</div>
<script type="text/javascript" src="<?php echo APP_PATH;?>statics/js/jquery.gotop.js"></script>
<script type="text/javascript" src="<?php echo APP_PATH;?>statics/v1/js/headFoot_2.0.js"></script>
</body>
</html>