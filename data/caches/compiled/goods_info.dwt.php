<?php echo $this->fetch('library/new_page_header.lbi'); ?>
		<div class="con">

		<div class="ect-bg">
			<header class="ect-header ect-margin-tb ect-margin-lr text-center icon-write ect-bg">
				<a href="javascript:history.go(-1)" class="pull-left ect-icon ect-icon1 ect-icon-history"></a> <span><?php echo $this->_var['title']; ?></span>
				<a href="javascript:;" onClick="openMune()" class="pull-right ect-icon ect-icon1 ect-icon-mune icon-write"></a>
			</header>
			<nav class="ect-nav ect-nav-list" style="display:none;">
				<?php echo $this->fetch('library/page_menu.lbi'); ?>
			</nav>
		</div>
<div class="nav-div">
<ul>
    <li class="goods-nav"><span class="nav-con"><a href="<?php echo url('goods/index',array('id'=>$this->_var['goods']['goods_id']));?>" >商品</a></span></li>
    <li class="goods-nav"><span class="nav-con active">详情</span></li>
	<li class="goods-nav"><span class="nav-con"><a href="<?php echo url('goods/comment_list',array('id'=>$this->_var['goods']['goods_id']));?>" >评论(<?php echo $this->_var['comments']['count']; ?>)</a></span></li>
  </ul>
</div>

		<div class="goods-info of-hidden ect-tab b-color-f j-goods-info j-ect-tab ts-3">
<!--			<div class="hd j-tab-title tab-title b-color-f of-hidden">
				<ul class="dis-box">
					<li class="box-flex active"><?php echo $this->_var['lang']['goods_brief']; ?></li>
					<li class="box-flex">规格参数</li>
				</ul>
			</div>   -->
			<div id="j-tab-con" class="b-color-f m-top1px tab-con ">
				<div class="swiper-wrapper">
					<section class="swiper-slide ">
						<div class="padding-all">
							<?php echo $this->_var['goods']['goods_desc']; ?>
						</div>
					</section>
					<section class="swiper-slide goods-info-attr">
						<ul class="t-remark">
							<?php $_from = $this->_var['properties']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'property_group');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['property_group']):
?>
								<?php $_from = $this->_var['property_group']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'property');if (count($_from)):
    foreach ($_from AS $this->_var['property']):
?>
									<li class="of-hidden"><span class="fl">[<?php echo htmlspecialchars($this->_var['property']['name']); ?>]</span><span class="fr"><?php echo $this->_var['property']['value']; ?></span></li>
								<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
							<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
						</ul>
					</section>
					</div>
				</div>
			</div>
		</div>
<?php echo $this->fetch('library/search.lbi'); ?>
<?php echo $this->fetch('library/new_page_footer.lbi'); ?>
		</div>
		
		<script>
			/*切换*/
			var tabsSwiper = new Swiper('#j-tab-con', {
				speed: 100,
				noSwiping: true,
				autoHeight: true,
				onSlideChangeStart: function() {
					$(".j-tab-title .active").removeClass('active')
					$(".j-tab-title li").eq(tabsSwiper.activeIndex).addClass('active')
				}
			})
			$(".j-tab-title li").on('touchstart mousedown', function(e) {
				e.preventDefault()
				$(".j-tab-title .active").removeClass('active')
				$(this).addClass('active')
				tabsSwiper.slideTo($(this).index())
			})
			$(".j-tab-title li").click(function(e) {
				e.preventDefault()
			})
			
		</script>
	</body>

</html>