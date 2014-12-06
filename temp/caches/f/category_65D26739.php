<?php exit;?>a:3:{s:8:"template";a:11:{i:0;s:53:"/Users/tianyi/github/shop/themes/default/category.dwt";i:1;s:64:"/Users/tianyi/github/shop/themes/default/library/page_header.lbi";i:2;s:60:"/Users/tianyi/github/shop/themes/default/library/ur_here.lbi";i:3;s:57:"/Users/tianyi/github/shop/themes/default/library/cart.lbi";i:4;s:66:"/Users/tianyi/github/shop/themes/default/library/category_tree.lbi";i:5;s:60:"/Users/tianyi/github/shop/themes/default/library/history.lbi";i:6;s:67:"/Users/tianyi/github/shop/themes/default/library/recommend_best.lbi";i:7;s:63:"/Users/tianyi/github/shop/themes/default/library/goods_list.lbi";i:8;s:58:"/Users/tianyi/github/shop/themes/default/library/pages.lbi";i:9;s:57:"/Users/tianyi/github/shop/themes/default/library/help.lbi";i:10;s:64:"/Users/tianyi/github/shop/themes/default/library/page_footer.lbi";}s:7:"expires";i:1417857749;s:8:"maketime";i:1417857748;}<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="" />
<meta name="Description" content="" />
<title>手机_ECSHOP演示站 - Powered by ECShop</title>
<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="themes/default/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/common.js"></script><script type="text/javascript" src="js/global.js"></script><script type="text/javascript" src="js/compare.js"></script></head>
<body>
<script type="text/javascript">
var process_request = "正在处理您的请求...";
</script>
<div class="block clearfix">
 <div class="f_l"><a href="index.php" name="top"><img src="themes/default/images/logo.gif" /></a></div>
 <div class="f_r log">
   <ul>
   <li class="userInfo">
   <script type="text/javascript" src="js/transport.js"></script><script type="text/javascript" src="js/utils.js"></script>   <font id="ECS_MEMBERZONE">554fcae493e564ee0dc75bdf2ebf94camember_info|a:1:{s:4:"name";s:11:"member_info";}554fcae493e564ee0dc75bdf2ebf94ca </font>
   </li>
      </ul>
 </div>
</div>
<div  class="blank"></div>
<div id="mainNav" class="clearfix">
  <a href="index.php" class="cur">首页<span></span></a>
  </div>
<div id="search"  class="clearfix">
  <div class="keys f_l">
   <script type="text/javascript">
    
    <!--
    function checkSearchForm()
    {
        if(document.getElementById('keyword').value)
        {
            return true;
        }
        else
        {
            alert("请输入搜索关键词！");
            return false;
        }
    }
    -->
    
    </script>
      </div>
  <form id="searchForm" name="searchForm" method="get" action="search.php" onSubmit="return checkSearchForm()" class="f_r"  style="_position:relative; top:5px;">
   <select name="category" id="category" class="B_input">
      <option value="0">所有分类</option>
      <option value="1" >笔记本</option><option value="2" >手机</option>    </select>
   <input name="keywords" type="text" id="keyword" value="" class="B_input" style="width:110px;"/>
   <input name="imageField" type="submit" value="" class="go" style="cursor:pointer;" />
   <a href="search.php?act=advanced_search">高级搜索</a>
   </form>
</div>
<div class="block box">
 <div id="ur_here">
  当前位置: <a href=".">首页</a> <code>&gt;</code> <a href="category.php?id=2">手机</a> </div>
</div>
<div class="blank"></div>
<div class="block clearfix">
  
  <div class="AreaL">
    
<div class="cart" id="ECS_CARTINFO">
 554fcae493e564ee0dc75bdf2ebf94cacart_info|a:1:{s:4:"name";s:9:"cart_info";}554fcae493e564ee0dc75bdf2ebf94ca</div>
<div class="blank5"></div>
<div class="box">
 <div class="box_1">
  <div id="category_tree">
         <dl>
     <dt><a href="category.php?id=1">笔记本</a></dt>
            
       </dl>
         <dl>
     <dt><a href="category.php?id=2">手机</a></dt>
            
       </dl>
     
  </div>
 </div>
</div>
<div class="blank5"></div>
 <div class="box" id='history_div'>
 <div class="box_1">
  <h3><span>浏览历史</span></h3>
  <div class="boxCenterList clearfix" id='history_list'>
    554fcae493e564ee0dc75bdf2ebf94cahistory|a:1:{s:4:"name";s:7:"history";}554fcae493e564ee0dc75bdf2ebf94ca  </div>
 </div>
</div>
<div class="blank5"></div>
<script type="text/javascript">
if (document.getElementById('history_list').innerHTML.replace(/\s/g,'').length<1)
{
    document.getElementById('history_div').style.display='none';
}
else
{
    document.getElementById('history_div').style.display='block';
}
function clear_history()
{
Ajax.call('user.php', 'act=clear_history',clear_history_Response, 'GET', 'TEXT',1,1);
}
function clear_history_Response(res)
{
document.getElementById('history_list').innerHTML = '您已清空最近浏览过的商品';
}
</script>
    
  </div>
  
  
  <div class="AreaR">
	 
	  	  <div class="box">
		 <div class="box_1">
			<h3><span>商品筛选</span></h3>
						<div class="screeBox">
			  <strong>品牌：</strong>
														<span>全部</span>
																			<a href="category.php?id=2&amp;brand=1&amp;price_min=0&amp;price_max=0">苹果</a>&nbsp;
												</div>
											 </div>
		</div>
		<div class="blank5"></div>
	  	 
   
  <div class="box">
 <div class="box_1">
  <h3>
  <span>商品列表</span><a name='goods_list'></a>
  <form method="GET" class="sort" name="listform">
  显示方式：
  <a href="javascript:;" onClick="javascript:display_mode('list')"><img src="themes/default/images/display_mode_list.gif" alt=""></a>
  <a href="javascript:;" onClick="javascript:display_mode('grid')"><img src="themes/default/images/display_mode_grid_act.gif" alt=""></a>
  <a href="javascript:;" onClick="javascript:display_mode('text')"><img src="themes/default/images/display_mode_text.gif" alt=""></a>&nbsp;&nbsp;
  
  <a href="category.php?category=2&display=grid&brand=0&price_min=0&price_max=0&filter_attr=0&page=1&sort=goods_id&order=ASC#goods_list"><img src="themes/default/images/goods_id_DESC.gif" alt="按上架时间排序"></a>
  <a href="category.php?category=2&display=grid&brand=0&price_min=0&price_max=0&filter_attr=0&page=1&sort=shop_price&order=ASC#goods_list"><img src="themes/default/images/shop_price_default.gif" alt="按价格排序"></a>
  <a href="category.php?category=2&display=grid&brand=0&price_min=0&price_max=0&filter_attr=0&page=1&sort=last_update&order=DESC#goods_list"><img src="themes/default/images/last_update_default.gif" alt="按更新时间排序"></a>
  <input type="hidden" name="category" value="2" />
  <input type="hidden" name="display" value="grid" id="display" />
  <input type="hidden" name="brand" value="0" />
  <input type="hidden" name="price_min" value="0" />
  <input type="hidden" name="price_max" value="0" />
  <input type="hidden" name="filter_attr" value="0" />
  <input type="hidden" name="page" value="1" />
  <input type="hidden" name="sort" value="goods_id" />
  <input type="hidden" name="order" value="DESC" />
  </form>
  </h3>
      <form name="compareForm" action="compare.php" method="post" onSubmit="return compareGoods(this);">
            <div class="centerPadd">
    <div class="clearfix goodsBox" style="border:none;">
             <div class="goodsItem">
           <a href="goods.php?id=2"><img src="images/no_picture.gif" alt="IPhone6" class="goodsimg" /></a><br />
           <p><a href="goods.php?id=2" title="IPhone6">IPhone6</a></p>
                       市场价<font class="market_s">￥7200元</font><br />
                                    本店价<font class="shop_s">￥6000元</font><br />
                       <a href="javascript:collect(2);" class="f6">收藏</a> |
           <a href="javascript:addToCart(2)" class="f6">购买</a> |
           <a href="javascript:;" id="compareLink" onClick="Compare.add(2,'IPhone6','0')" class="f6">比较</a>
        </div>
                    </div>
    </div>
        </form>
  
 </div>
</div>
<div class="blank5"></div>
<script type="Text/Javascript" language="JavaScript">
<!--
function selectPage(sel)
{
  sel.form.submit();
}
//-->
</script>
<script type="text/javascript">
window.onload = function()
{
  Compare.init();
  fixpng();
}
var button_compare = '';
var exist = "您已经选择了%s";
var count_limit = "最多只能选择4个商品进行对比";
var goods_type_different = "\"%s\"和已选择商品类型不同无法进行对比";
var compare_no_goods = "您没有选定任何需要比较的商品或者比较的商品数少于 2 个。";
var btn_buy = "购买";
var is_cancel = "取消";
var select_spe = "请选择商品属性";
</script>  <form name="selectPageForm" action="/shop/category.php" method="get">
 <div id="pager" class="pagebar">
  <span class="f_l f6" style="margin-right:10px;">总计 <b>1</b>  个记录</span>
      
      </div>
</form>
<script type="Text/Javascript" language="JavaScript">
<!--
function selectPage(sel)
{
  sel.form.submit();
}
//-->
</script>
  </div>  
  
</div>
<div class="blank5"></div>
<div class="block">
  <div class="box">
   <div class="helpTitBg clearfix">
       </div>
  </div>  
</div>
<div class="blank"></div>
<div class="blank"></div>
<div id="bottomNav" class="box">
 <div class="box_1">
  <div class="bNavList clearfix">
   <div class="f_l">
      </div>
   <div class="f_r">
   <a href="#top"><img src="themes/default/images/bnt_top.gif" /></a> <a href="index.php"><img src="themes/default/images/bnt_home.gif" /></a>
   </div>
  </div>
 </div>
</div>
<div class="blank"></div>
<div id="footer">
 <div class="text">
 &copy; 2005-2014 ECSHOP 版权所有，并保留所有权利。<br />
                                                                                     <br />
    554fcae493e564ee0dc75bdf2ebf94caquery_info|a:1:{s:4:"name";s:10:"query_info";}554fcae493e564ee0dc75bdf2ebf94ca<br />
  <a href="http://www.ecshop.com" target="_blank" style=" font-family:Verdana; font-size:11px;">Powered&nbsp;by&nbsp;<strong><span style="color: #3366FF">ECShop</span>&nbsp;<span style="color: #FF9966">v2.7.3</span></strong></a>&nbsp;<a href="http://www.ecshop.com/license.php?product=ecshop_b2c&url=http%3A%2F%2Flocalhost%2Fshop%2F" target="_blank"
>&nbsp;&nbsp;Licensed</a><br />
        <div align="left"  id="rss"><a href="feed.php?cat=2"><img src="themes/default/images/xml_rss2.gif" alt="rss" /></a></div>
 </div>
</div>
</body>
</html>