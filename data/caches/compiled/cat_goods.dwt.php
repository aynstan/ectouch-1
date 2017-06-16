<!DOCTYPE html>
<html>
<head>
<meta name="Generator" content="ECTouch 2.2.30" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />
<meta name="format-detection" content="telephone=no" />
<meta charset="utf-8">
<title><?php echo $this->_var['page_title']; ?></title>



<link rel="stylesheet" href="__TPL__/assets/bootstrap/css/font-awesome.min.css">
<link rel="stylesheet" href="__TPL__/statics/css/swiper-3.2.5.min.css" />
<link rel="stylesheet" href="__TPL__/statics/css/ectouch.css?v=0007" />
<link rel="stylesheet" href="__TPL__/statics/fonts/iconfont.css" />
<link rel="stylesheet" href="__TPL__/statics/css/search.css" />

<style type="text/css">
html {
	font-size: 62.5%;
}
.com_box2{height: 77px; margin: 0 auto; clear:both}
.com_box2 dt{height: 37px; padding-top: 20px; text-align: center;}
.com_box2 dt a{background: url(themes/default/images/button.png) repeat-x 0 0; border: 1px solid #29aa0e; color: #fff; display: inline-block; font-size: 14px; height: 35px; line-height: 37px; margin: 0 auto; padding: 0 20px; text-align: center;}
.com_box2 dt a span{padding: 0 5px;}

@font-face {
  font-family: 'iconfont';
  src: url("__TPL__/fonts/iconfont.eot");
  /* IE9*/
  src: url("__TPL__/fonts/iconfont.eot?#iefix") format("embedded-opentype"), url("__TPL__/fonts/iconfont.woff") format("woff"), url("__TPL__/fonts/iconfont.ttf") format("truetype"), url("__TPL__/fonts/iconfont.svg#iconfont") format("svg");
  /* iOS 4.1- */ }
.iconfont {
  font-family: "iconfont" !important;
  font-size: 1.5rem;
  color:#ea2d2d;
  font-style: normal;
  -webkit-font-smoothing: antialiased;
  -webkit-text-stroke-width: 0.2px;
  -moz-osx-font-smoothing: grayscale; }


</style>
</head>

<body style="max-width:640px;">
<div id="loading"><img src="__TPL__/statics/img/loading.gif" /></div>


<div class="con">
	<?php echo $this->fetch('library/new_search_small.lbi'); ?>
	<aside>
		<div class="menu-left scrollbar-none" id="sidebar"><h3 style="text-align:center; height:50px; line-height:50px"><?php echo $this->_var['cat_name']; ?></h3>
			<ul>
				<?php $_from = $this->_var['category']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'vo');$this->_foreach['vo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['vo']['total'] > 0):
    foreach ($_from AS $this->_var['vo']):
        $this->_foreach['vo']['iteration']++;
?>
				<li <?php if (($this->_foreach['vo']['iteration'] - 1) == 0): ?> class="active"<?php endif; ?> rel="<?php echo $this->_var['vo']['cat_id']; ?>">
				<?php echo $this->_var['vo']['cat_name']; ?>
				<?php if ($this->_var['vo']['use_price']): ?>
					</br><?php echo $this->_var['vo']['star']; ?>
					</br><?php echo $this->_var['vo']['category_price']; ?>/次
				<?php endif; ?>
				</li>
				<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
			</ul>
		</div>
	</aside>


	<section class="menu-right-top product-sequence dis-box">
		<a class="box-flex a-change active" href="javascript:goodsSort(1)">综合</a>
		<a class="box-flex a-change" href="javascript:goodsSort(2)">销量</a>

	</section>

<section class="menu-right-goods padding-all j-content product-list j-product-list " data="2">

	<ul id="j-product-box">

<?php echo $this->fetch('library/ajaxgoodslist.lbi'); ?>

<!-- 		<%each list as vo%>
		<li>
			<div class="product-div">
				<a class="product-div-link" href="<%vo.url%>"></a>
				<img class="product-list-img" src="<%vo.goods_img%>" />
				<div class="product-text">
					<h4><%vo.goods_name%></h4>
					<p class="dis-box p-t-remark"><span class="box-flex"><%vo.goods_brief%></span>
				</div>
			</div>
		</li>
		<%/each%> -->
	</ul>
    <div class="clear"></div>
	<div id="loadingImg" style=" text-align:center">
		<img src="themes/default/images/loader.gif" alt="loading..." />
	</div>
	<div style=" margin-bottom:50px;">
		<dl class="com_box2" style=" margin-bottom:50px; display:none">
			<dt><a href="javascript:get_more()" id="more">加载更多商品</dt>
		</dl>
	</div>






</section>
</div>
<form>

    <input type="hidden" name="sort_by" id="sort_by" value="sort_order">
    <input type="hidden" name="cat_id" id="cat_id" value="<?php echo $this->_var['id']; ?>">
    <input type="hidden" name="page" id="page" value="1">


</form>


<div class="search-div j-search-div ts-3">
	<section class="search">
		<form action="javascript:searchGoods()" method="post">
		<div class="text-all dis-box j-text-all">
			<div class="box-flex input-text">
				<input class="j-input-text" type="text" id="keywords" name="keywords" placeholder="<?php echo $this->_var['lang']['no_keywords']; ?>" />
				<i class="iconfont icon-guanbi is-null j-is-null"></i>
			</div>
			<button type="submit" class="btn-submit">搜索</button>
		</div>
		</form>
	</section>
	<section class="search-con">
		<div class="swiper-scroll history-search">
			<div class="swiper-wrapper">
			<div class="swiper-slide">
		<p>
			<label class="fl"><?php echo $this->_var['lang']['hot_search']; ?></label>
		</p>
		<ul class="hot-search a-text-more">
			<?php $_from = $this->_var['hot_search_keywords']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'keyword');if (count($_from)):
    foreach ($_from AS $this->_var['keyword']):
?>
			<li class="w-3"><a href="javascript:searchGoods('<?php echo $this->_var['keyword']; ?>')"><span><?php echo $this->_var['keyword']; ?></span></a></li>
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		</ul>
		<p class="hos-search">
			<label class="fl">最近搜索</label>
			<span class="fr" onclick="javascript:clearHistroy();"><i class="iconfont icon-xiao10"></i></span>
		</p>
		
			<ul class="hot-search a-text-more a-text-one" id="search_histroy">
				<?php $_from = $this->_var['search_histroy']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'keyword');if (count($_from)):
    foreach ($_from AS $this->_var['keyword']):
?>
				<li><a href="javascript:searchGoods('<?php echo $this->_var['keyword']; ?>')"><span><?php echo $this->_var['keyword']; ?></span></a></li>
				<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
			</ul>
			</div>
			</div>
			<div class="swiper-scrollbar"></div>
		</div>
	</section>
	<footer class="close-search j-close-search">
		点击关闭
	</footer>
</div>


<?php echo $this->fetch('library/new_page_footer.lbi'); ?>



<script type="text/javascript" src="__PUBLIC__/js/jquery.infinite.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/template.js"></script>
<script type="text/javascript">
</script>
<script>

	$(function(){

	   // var url = '<?php echo url('category/async_list', array('id'=>$this->_var['id'], 'type'=>$this->_var['type'], 'brand'=>$this->_var['brand'], 'price_min'=>$this->_var['price_min'], 'filter_attr'=>$this->_var['filter_attr'], 'page'=>$this->_var['page'], 'sort'=>$this->_var['sort'], 'order'=>$this->_var['order'], 'keywords'=>$this->_var['keywords']));?>';
	   // $('.product-list').infinite({url: url,params:"brand=<?php echo $this->_var['brand']; ?>&price_min=<?php echo $this->_var['price_min']; ?>&price_max=<?php echo $this->_var['price_max']; ?>&filter_attr=<?php echo $this->_var['filter_attr']; ?>&keywords=<?php echo $this->_var['keywords']; ?>&type=<?php echo $this->_var['type']; ?>", template:'j-product'});
	   var cat_id = "<?php echo $this->_var['id']; ?>";
		getAjaxGoods(cat_id,0);

		$('#sidebar ul li').click(function(){
			$(this).addClass('active').siblings('li').removeClass('active');
			var index = $(this).index();
			// $('.j-content').eq(index).show().siblings('.j-content').hide();

			var cat_id = $(this).attr('rel');
			$("#page").val(1);
			$("#search-name").val('');
			getAjaxGoods(cat_id);
		})
	})

	var stop=true; 


function searchGoods(keywords){
	debugger;
	var keywords = (typeof(keywords) == "undefined") ? document.getElementById('keywords').value : keywords;
	var cat_id = $("#cat_id").val();
	$("#page").val('1');
	$('#search-name').val(keywords);
	getAjaxGoods(cat_id,keywords);
	$('.j-close-search').trigger("click");
}

	function getAjaxGoods(cat_id,keywords,page){
	 	
	  	keywords   = (typeof(keywords) == "undefined") ? document.getElementById('search-name').value : keywords;
	  	page   = $("#page").val();
	  	sort_by   = $("#sort_by").val();

	  
	  	var param = "id="+cat_id+"&keywords="+keywords+"&page="+page+"&sort="+sort_by;  
	  	$.ajax({
			type:'get',
			url:'<?php echo url("category/getAjaxGoods");?>',
			dataType: "json",
			data:param,
			// beforeSend:function() {  
			    
			// },  
			// complete:function(result) {  
			// },  
			success:function(result){
				//$(".com_box2").remove();
				if(page == 1){
			   		$("#j-product-box").html(result.html);
				}else{
			   		$("#j-product-box").append(result.html);
				}
				var left_page = result.totalPage-page;
				if(left_page>0)
				{
					$("#page").val(++page);
					// $(".com_box2").show();
					stop = true;
				}else{
					stop = false;

				   $("#loadingImg").hide();
				}
				$("#cat_id").val(cat_id);

			}
		});
	}

	function goodsSort(type){
		if(type == '1'){
			$("#sort_by").val('sort_order');
			$(".box-flex").removeClass('active');
			$(".box-flex").eq(type).addClass('active');
		}else{
			$("#sort_by").val('sales_volume');
			$(".box-flex").removeClass('active');
			$(".box-flex").eq(type).addClass('active');
		}
			$("#page").val('1');
		get_more();
	}

	function get_more(){
		var cat_id = $("#cat_id").val();
		getAjaxGoods(cat_id);
	}

	$(window).scroll(function(){
	    totalheight = parseFloat($(window).height()) + parseFloat($(window).scrollTop()); 
	    if($(document).height() <= totalheight){ 
	        if(stop==true){ 
	            stop=false; 
	                get_more();
	        } 
	    } 
	});

function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires="+d.toUTCString();
    document.cookie = cname + "=" + cvalue + "; " + expires;
}
function clearHistroy(){
	setCookie('ECS[keywords]', '', -1);
	document.getElementById("search_histroy").style.visibility = "hidden";
}

</script>
</body>

</html>







</body>
</html>