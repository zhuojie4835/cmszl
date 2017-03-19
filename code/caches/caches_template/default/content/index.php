<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE HTML>
<html>
<head>
<title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="keywords" content="<?php echo $SEO['keyword'];?>">
<meta name="description" content="<?php echo $SEO['description'];?>">
<link type="text/css" rel="stylesheet" href="<?php echo APP_PATH;?>statics/v1/css/headFoot_2.0.css" />
<script type="text/javascript" src="<?php echo JS_PATH;?>jquery.min.js"></script>
<link rel="shortcut icon" href="<?php echo APP_PATH;?>statics/v1/images/logo_guo.jpg" />
<link type="text/css" rel="stylesheet" href="<?php echo APP_PATH;?>statics/v1/css/base_yt.css"  />
<link type="text/css" rel="stylesheet" href="<?php echo APP_PATH;?>statics/v1/css/finance_index.css"  />

<style type="text/css">
#news_pic .changeDiv {
    display: block;
}
.vote_right .tijiao .save{margin-right:-55px}
a {
  color: #21469a;
  text-decoration: none;
}
</style>

<style>
.binary {
    background: none repeat scroll 0 0 #fff;
    border: 2px solid #ddd;
    cursor: pointer;
    overflow: hidden;
    text-align: center;
    top: 243px;
    width: 105px;
    height: 147px;
    left: 52%;
    margin-left: 520px;
    position: fixed;
    z-index: 4;
}
.binary p {
    color: #666666;
    font-size: 12px;
    height: 40px;
    line-height: 20px;
    margin: 0 auto;
    overflow: hidden;
    width: 98px;
}
.binary a:hover {
    text-decoration: none;
}
.binary a {
    display: block;
    padding-top: 14px;
    text-align: center;
}
.tougao h3 a {
font-size: 22px;
font-family: Microsoft YaHei,arial;
color: #21469a;}
</style>

</head>
 <body>
<!-- 头部 -->
<header id="header">
    <!-- 顶部导航-->
    <div class="pubTopNav" id="pubTopNav">
      <div class="comWidth clearfix">
        <div class="fl_dib">
          <ul>
            <p class="date" id="date"></p>
          </ul>
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
                <li><a href="/" class="cur" target="_blank">首页</a></li>
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b43f1459ac702900c8d44c91a5e796dd&action=category&catid=0&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'0','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
                    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                        <li><a href="<?php echo $r['url'];?>" target="_blank"><?php echo $r['catname'];?></a></li>
                    <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </ul>
        </div>
    </div>      
</header>
    
<!--正文开始-->
<div class="wrapper">
<!--头条开始-->
<div class="news_headline">
    <div class="news_txt">
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b55e05dc411142b621542dcf1f6e5d64&action=position&posid=2&thumb=1&order=listorder+DESC&num=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'2','thumb'=>'1','order'=>'listorder DESC','limit'=>'1',));}?>
            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <h1><a href="<?php echo $r['url'];?>" target="_blank"><?php echo $r['title'];?></a></h1>
                <h4><p><?php echo $r['description'];?></p></h4>
            <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                      
        <ul>
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=1de60be2828f4e6b7f8a8f0728565c7c&action=position&posid=9&thumb=0&order=listorder+DESC&num=5\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'9','thumb'=>'0','order'=>'listorder DESC','limit'=>'5',));}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                    <li><a href="<?php echo $r['url'];?>" target="_blank"><?php echo $r['title'];?></a></li>
                <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </ul> 
    </div>
    <div class="news_pic" id="news_pic">
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=56f7dc181c9e7df01c1cd8071ffbcefa&action=position&posid=1&order=listorder+DESC&thumb=1&num=4\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'1','order'=>'listorder DESC','thumb'=>'1','limit'=>'4',));}?>
            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <div class="changeDiv">
                    <div class="tit"><h3><a href="<?php echo $r['url'];?>" target="_blank"><?php echo str_cut($r[title],36,'');?></a></h3></div>
                    <a href="<?php echo $r['url'];?>" target="_blank"><img src="<?php echo thumb($r[thumb],560,285);?>" border="0" alt="<?php echo $r['url'];?>"></a>
                </div>
            <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        <ul class="change_liu">
            <li><span></span></li>
            <li><span></span></li>
            <li><span></span></li>
            <li><span></span></li>
        </ul>
    </div>
</div>
<!--头条结束-->
<div class="clear"></div>
    <!--左侧开始-->
    <div class="wrapper_l">
        <!--开始-->
        <div class="news_list">
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=80f3aa42418fe76506c7d8735d402af5&action=lists&catid=7&num=5&order=id+DESC&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>'7','order'=>'id DESC','limit'=>'5',));}?>
                <h3><a href="#" target="_blank" title="国内">国内</a><span><a href="#" target="_blank" title="更多">更多</a></span></h3>
                <?php $n=1;if(is_array($info)) foreach($info AS $v) { ?>
                    <div class="list clearfix">
                    <ul class="pic">
                        <a href="<?php echo $v['url'];?>" target="_blank"><img src="<?php echo thumb($v[thumb],155,95);?>" height="95" width="155" border="0"></a>
                    </ul>
                    <ul class="text" style="width:425px;">
                        <li class="title"><a href="<?php echo $v['url'];?>" target="_blank"><?php echo $v['title'];?></a></li>
                        <li><?php echo str_cut($v['description'],300);?></li>
                    </ul>
                </div>
                <?php $n++;}unset($n); ?>
                
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>                    
        </div>
        <div class="news_list">
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=21f4fad4f30e20ba819e214e9b15cf6f&action=lists&catid=13&num=5&order=id+DESC&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>'13','order'=>'id DESC','limit'=>'5',));}?>
                <h3><a href="#" target="_blank" title="国内">历史</a><span><a href="#" target="_blank" title="更多">更多</a></span></h3>
                <?php $n=1;if(is_array($info)) foreach($info AS $v) { ?>
                    <div class="list clearfix">
                    <ul class="pic">
                        <a href="<?php echo $v['url'];?>" target="_blank"><img src="<?php echo thumb($v[thumb],155,95);?>" height="95" width="155" border="0"></a>
                    </ul>
                    <ul class="text" style="width:425px;">
                        <li class="title"><a href="<?php echo $v['url'];?>" target="_blank"><?php echo $v['title'];?></a></li>
                        <li><?php echo str_cut($v['description'],300);?></li>
                    </ul>
                </div>
                <?php $n++;}unset($n); ?>
                
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>                    
        </div>
        <div class="news_list">
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=f9ce2710eee57c52d5a7b0538d300250&action=lists&catid=11&num=5&order=id+DESC&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>'11','order'=>'id DESC','limit'=>'5',));}?>
                <h3><a href="#" target="_blank" title="国内">娱乐</a><span><a href="#" target="_blank" title="更多">更多</a></span></h3>
                <?php $n=1;if(is_array($info)) foreach($info AS $v) { ?>
                    <div class="list clearfix">
                    <ul class="pic">
                        <a href="<?php echo $v['url'];?>" target="_blank"><img src="<?php echo thumb($v[thumb],155,95);?>" height="95" width="155" border="0"></a>
                    </ul>
                    <ul class="text" style="width:425px;">
                        <li class="title"><a href="<?php echo $v['url'];?>" target="_blank"><?php echo $v['title'];?></a></li>
                        <li><?php echo str_cut($v['description'],300);?></li>
                    </ul>
                </div>
                <?php $n++;}unset($n); ?>
                
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>                    
        </div>
        <div class="news_list">
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=858d74efac80d95eba60c675fb4c495c&action=lists&catid=8&num=5&order=id+DESC&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>'8','order'=>'id DESC','limit'=>'5',));}?>
                <h3><a href="#" target="_blank" title="国内">呵呵</a><span><a href="#" target="_blank" title="更多">更多</a></span></h3>
                <?php $n=1;if(is_array($info)) foreach($info AS $v) { ?>
                    <div class="list clearfix">
                    <ul class="pic">
                        <a href="<?php echo $v['url'];?>" target="_blank"><img src="<?php echo thumb($v[thumb],155,95);?>" height="95" width="155" border="0"></a>
                    </ul>
                    <ul class="text" style="width:425px;">
                        <li class="title"><a href="<?php echo $v['url'];?>" target="_blank"><?php echo $v['title'];?></a></li>
                        <li><?php echo str_cut($v['description'],300);?></li>
                    </ul>
                </div>
                <?php $n++;}unset($n); ?>
                
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>                    
        </div>
        <!--结束-->
        
        
     <!--    <div class="news_list">
            <h3><a href="http://food.takungpao.com/" target="_blank" title="食品">食品</a><span><a href="" target="_blank" title="更多">更多</a></span></h3>
            <div class="list clearfix"> 
                <ul class="text" style="width:600px; float:none;">
                    <li class="title" style="height:auto; line-height:26px;padding-bottom:5px;"><a href="" target="_blank">提案采访揭秘：“潘刚之问”主角浮出水面</a></li>
                    <li>既有创新精神，又追求卓越品质，在中国的潘刚和美国的乔布斯之间，竟然有着惊人的相似之处。惺惺相惜亦相“吸”，也许，这正是“潘刚之问”的核心触点。</li>
                </ul>
            </div>             
        </div> -->
        
        <div class="h_10"></div>
        <div class="h_10"></div>
        
    </div>
    <!--左侧结束-->
    
    <!--右侧开始-->
    <div class="wrapper_r">
        <div class="dujia_right">
            <h3><a href="#" target="_blank" title="推荐">推荐</a></h3>
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=561220d925655e163cd44a7d5d58b01e&action=position&posid=12&thumb=1&order=listorder+DESC&num=8\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'12','thumb'=>'1','order'=>'listorder DESC','limit'=>'8',));}?>
            <ul class="content news-photo picbig">
             <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <li>
                    <a href="<?php echo $r['url'];?>" class="pic" target="_blank"><img src="<?php echo thumb($r[thumb]);?>" width="110" height="85" border="0"></a>
                    <h4><a href="<?php echo $r['url'];?>" target="_blank"><?php echo $r['title'];?></a></h4>
                <?php $n++;}unset($n); ?>
            </ul>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </div>

    </div>
    <!--右侧结束-->
    <div class="clear"></div>
    <div id="block_id_81278" class="admin_block" blockid="81278"><div style="padding: 15px; font-size: 16px; font-family: microsoft yahei; color: #666; text-align: right;"></div></div></div>
<!--正文结束-->    


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


<script type="text/javascript" src="<?php echo APP_PATH;?>statics/v1/js/headFoot_2.0.js"></script>
<script type="text/javascript" src="<?php echo APP_PATH;?>statics/v1/js/jcarousellite_1.0.1.min.js"></script>
<script type="text/javascript" src="<?php echo APP_PATH;?>statics/v1/js/jquery.soChange-min.js"></script>
<script>
$(function() {
    $(".scroll_web").jCarouselLite({
        btnNext: ".next",
        btnPrev: ".prev", 
        visible: 4,
        scroll: 3
    });
    //焦点图
    $('#news_pic div.changeDiv').soChange({
        thumbObj:'#news_pic .change_liu span', 
        thumbNowClass:'on',
        slideTime:0
    });
    
});
</script>
</body>
</html>
