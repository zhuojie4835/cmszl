<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="renderer" content="webkit">
<title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
<meta name="keywords" content="<?php echo $SEO['keyword'];?>">
<meta name="description" content="<?php echo $SEO['description'];?>">
<link type="text/css" rel="stylesheet" href="<?php echo APP_PATH;?>statics/v1/css/headFoot_2.0.css" />
<link type="text/css" rel="stylesheet" href="<?php echo APP_PATH;?>statics/v1/css/content_2.0.css" />
<script type="text/javascript" src="<?php echo JS_PATH;?>jquery.min.js"></script>

</head>
<body>
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

<!-- 文章列表页 title-->
<div class="container container_list comWidth clearfix">
    <!-- 左 -->
    <div class="con_l fl_dib">
        <div class="location">
            您现在的位置： <a href="<?php echo siteurl($siteid);?>" target="_blank">首页</a> &gt <?php echo catpos($catid);?>       
        </div>
        <div class="m_news_list clearfix">
            <div style="width:100%;height:15px;">
                <!-- <div id=""><center><?php echo $pages;?></center></div> -->
            </div>
            <div class="m_txt_news">
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=5ab4b05e97fd14c3ed386604ee1a9399&action=lists&catid=%24catid&num=25&order=id+DESC&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 25;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$catid,'order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$catid,'order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
                <ul>
                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                    <li>
                        <a href="<?php echo $r['url'];?>" target="_blank" class="a_time <?php if($n%5==1) { ?>txt_blod<?php } ?>" ><?php echo date('Y-m-d',$r[inputtime]);?></a>
                        <a href="<?php echo $r['url'];?>" target="_blank" class="a_title <?php if($n%5==1) { ?>txt_blod<?php } ?>" ><?php echo $r['title'];?></a>
                    </li>
                    <?php if($n%5==0) { ?><li style="width:100%;height:30px;"></li><?php } ?>
                <?php $n++;}unset($n); ?>
                </ul>
                
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </div>
            
            <div class="page">
                <div id="displaypagenum"><center><?php echo $pages;?></center></div>
            </div>
        </div>
    </div>
    <!-- 右 -->
        
    <div class="con_r fr_dib">
        
        <!-- <h2 class="tpk_con_title"><a>大公出品</a></h2>
        <div class="tpk_con_list clearfix">
            <ul>
                <li>
                    <div class="list_l lid_img fl_dib">
                        <a href="http://news.takungpao.com/special/cp4979/" target="_blank"><img src="http://images.takungpao.com/2017/0210/20170210052017269.jpg" alt="机动巡视提高反腐震慑" /></a>
                    </div>
                    <div class="list_r fr_dib">
                        <h5><a href="http://news.takungpao.com/special/cp4979/" target="_blank">[北京观察]</a></h5>
                        <h5><a href="http://news.takungpao.com/special/cp4979/" target="_blank" class="txt">机动巡视提高反腐震慑</a></h5>
                    </div>
                </li>             
            </ul>
        </div> -->
        <h2 class="tpk_con_title"><a>推荐</a></h2>
            <div class="tpk_con_list clearfix">
                <ul>
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=2d4b9e3c7c2cc4bd0cec8b1fac9ae764&action=position&posid=12&thumb=1&order=listorder+DESC&num=10\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'12','thumb'=>'1','order'=>'listorder DESC','limit'=>'10',));}?>
                    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                    <li>
                        <div class="list_l lid_img fl_dib">
                            <a href="<?php echo $r['url'];?>" target="_blank"><img src="<?php echo thumb($r[thumb],110,0);?>" alt="" /></a>
                        </div>
                        <div class="list_r fr_dib">
                            <h5><a href="<?php echo $r['url'];?>" target="_blank" class="txt"><?php echo $r['title'];?></a></h5>
                        </div>
                    </li>             
                    <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                </ul>
            </div>
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

<!--通用底部end -->
<script type="text/javascript" src="<?php echo APP_PATH;?>statics/v1/js/headFoot_2.0.js"></script>
<script type="text/javascript" src="<?php echo APP_PATH;?>statics/v1/js/jquery.gotop.js"></script>

</body>
</html>
