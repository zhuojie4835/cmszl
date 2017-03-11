/**
* 大公网通用headFooter-js
* ----------------------
* 作者：文杰
* 时间：2014-08-13
* 基于：Jquery
* 联系：QQ1662484899
* 创意源于生活，代码如诗从你我开始
* Javascript虽美，需培养，需规范，需慢慢品尝
*********************************************************************************************/
var a_review_flag=true;//总开关用于判断是否显示
$(function(){
	tpk_setSearchBox();//首页-搜索框
	tpk_dateTimeHtml();//首页-获取天气
	tpk_showNavMore();//导航版本-显示更多
	tpk_navScrollFix();//文章页导航鼠标滚动
	tpk_hk_china();//简繁切换
	tpk_reviewTime();//底部往期回顾
	$('a').bind("focus", function(){$(this).blur();});//a
	$(window).scroll(function(){$("#a_review").removeClass("on");$("#reviewBox").hide();a_review_flag = true;});
    //日期
    var now = new Date(); var year = now.getFullYear(); var month = now.getMonth(); var date = now.getDate(); var day = now.getDay(); var week;
	month = month + 1; if (month < 10) month = "0" + month; if (date < 10) date = "0" + date;
	var arr_week = new Array("星期日", "星期一", "星期二", "星期三", "星期四", "星期五", "星期六");
	week = arr_week[day]; var time = ""; time = year + "-" + month + "-" + date;
	document.getElementById('date').innerHTML = week+'&nbsp;'+time;
});
/*搜索框*/
function tpk_setSearchBox(){$("#tkp_search_txt").bind("focus",function(){var val=$("#tkp_search_txt").val();$("#tkp_search_txt").css("color","black");if(val=='输入搜索内容'){$("#tkp_search_txt").val('')}}).bind("blur",function(){var val=$("#tkp_search_txt").val();$("#tkp_search_txt").css("color","#BDBDBD");if(val==''){$("#tkp_search_txt").val('输入搜索内容')}})}
/*获取天气*/
function tpk_dateTimeHtml(){var html='',d=new Date;html=d.getFullYear()+'年'+(d.getMonth()+1)+'月'+d.getDate()+'日 星期'+['日','一','二','三','四','五','六'][d.getDay()];$('#tkp_date_weather').html(html)}
/*导航显示更多*/
function tpk_showNavMore(){var temp_dsq,temp_dsq2;$("#tkp_nav a.nav_more").bind("mouseover",function(){clearTimeout(temp_dsq);$("#tkp_nav dl").fadeIn()}).bind("mouseout",function(){temp_dsq=setTimeout(function(){$("#tkp_nav dl").hide()},500)});$("#tkp_nav dl").bind("mouseover",function(){clearTimeout(temp_dsq);$("#tkp_nav dl").show()}).bind("mouseout",function(){temp_dsq=setTimeout(function(){$("#tkp_nav dl").hide()},500)});$("#tkp_navBox .moreNav").bind("mouseover",function(){clearTimeout(temp_dsq2);$("#tkp_navBox .i_moreNav").addClass("i_moreNav_h");$("#tkp_navBox .navmenu").fadeIn()}).bind("mouseout",function(){$("#tkp_navBox .i_moreNav").removeClass("i_moreNav_h");temp_dsq2=setTimeout(function(){$("#tkp_navBox .navmenu").hide()},200)})}
/*文章页导航鼠标滚动*/
function tpk_navScrollFix(){function handle(delta){if(delta<0){$("#tkp_navBox").removeClass("pos_fix");$("#tkp_navBox").addClass("pos_sta")}else{$("#tkp_navBox").removeClass("pos_sta");$("#tkp_navBox").addClass("pos_fix")}}function wheel(event){var delta=0;if(!event)event=window.event;if(event.wheelDelta){delta=event.wheelDelta/120;if(window.opera){delta=-delta}}else if(event.detail){delta=-event.detail/3}if(delta){setTimeout(function(){handle(delta)},100)}}if(document.addEventListener){document.addEventListener('DOMMouseScroll',wheel,false)}window.onmousewheel=document.onmousewheel=wheel}
/*简繁切换 fontTrans函数返回布尔值，若未true，则是香港域名，若未false则是大陆域名。*/
function tpk_hk_china(){var fontTrans=function(){var url=window.location.href;var flog=url.indexOf('.hk');flog>0?flog=true:flog=false;return flog};var oBoolean=fontTrans();if(oBoolean){$(".setWebLange").html('<a href="http://www.takungpao.com/" target="_slef" class="a_setLange">简体</a>')}else{$(".setWebLange").html('<a href="http://www.takungpao.com.hk/" target="_slef" class="a_setLange">繁体</a>')}}
/*往期查询*/
function tpk_reviewTime(){$("#a_review").bind("click",function(){if(a_review_flag){$("#a_review").addClass("on");$("#reviewBox").show();a_review_flag=false}else{$("#a_review").removeClass("on");$("#reviewBox").hide();a_review_flag=true}});var review_flag=true;$("#reviewTime_flag").bind("click",function(){if(review_flag){$("#dateTime").val("22");$("#reviewTime_flag").addClass("on");$("#reviewTime_10").removeClass("on");$("#reviewTime_22").addClass("on");review_flag=false}else{$("#dateTime").val("10");$("#reviewTime_flag").removeClass("on");$("#reviewTime_10").addClass("on");$("#reviewTime_22").removeClass("on");review_flag=true}});$("#reviewTime_10").bind("click",function(){$("#dateTime").val("10");review_flag=false;$("#reviewTime_flag").click()});$("#reviewTime_22").bind("click",function(){$("#dateTime").val("22");review_flag=true;$("#reviewTime_flag").click()})}