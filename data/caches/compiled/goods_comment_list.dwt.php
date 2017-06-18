<?php echo $this->fetch('library/new_page_header.lbi'); ?>
<style>
/*page 分页样式 - 数字*/
.ect-page {padding: 0.6em; margin: 0;overflow:hidden;}
.ect-page ul li {float: left;}
.ect-page select {background: #FFF;}
.ect-page li a, .ect-page li a {background: #FFF; border-radius: 5px !important; padding: 0.4em 0.4em; font-size: 1.1em; border: 1px solid #e3e3e3; display: block;}
.ect-page .form-select select {padding: 0.9em 5em;    margin-left: 4rem;}
.ect-page .form-select i.fa {margin-top: -0.6em;}


</style>
<div class="con comment-con">
  <div class="ect-bg comment-header">
    <header class="ect-header ect-margin-tb ect-margin-lr text-center icon-write ect-bg"> 
	<a href="javascript:history.go(-1)" class="pull-left ect-icon ect-icon1 ect-icon-history"></a> 
	<span><?php echo $this->_var['title']; ?></span> <a href="javascript:;"  onClick="openMune()" class="pull-right ect-icon ect-icon1 ect-icon-mune icon-write"></a></header>
    <nav class="ect-nav ect-nav-list" style="display:none;"> <?php echo $this->fetch('library/page_menu.lbi'); ?> </nav>
  </div>



<div class="nav-div nav-fix">
<ul>
    <li class="goods-nav"><span class="nav-con"><a href="<?php echo url('goods/index',array('id'=>$this->_var['id']));?>" >商品</a></span></li>
    <li class="goods-nav"><span class="nav-con"><a href="<?php echo url('goods/info',array('id'=>$this->_var['id']));?>" >详情</span></li>
	<li class="goods-nav"><span class="nav-con active">评论(<?php echo $this->_var['comments']['count']; ?>)</a></span></li>
  </ul>
</div>



  <div class="goods-evaluation-page of-hidden ect-tab j-ect-tab">
	<div class="hd j-tab-title tab-title b-color-f of-hidden" style="margin-top:7.8rem;">
		<ul class="dis-box">
			<li class="box-flex <?php if ($this->_var['type'] == 1): ?>active<?php endif; ?>"><a href="<?php echo url('goods/comment_list',array('type'=>1,'id'=>$this->_var['id'],'page'=>1));?>"><?php echo $this->_var['lang']['all_comment']; ?></a><em class="dis-block m-top04"><?php echo $this->_var['comments_info']['count']; ?></em></li>
			<li class="box-flex <?php if ($this->_var['type'] == 2): ?>active<?php endif; ?>"><a href="<?php echo url('goods/comment_list',array('type'=>2,'id'=>$this->_var['id'],'page'=>1));?>"><?php echo $this->_var['lang']['favorable_comment']; ?></a><em class="dis-block m-top04"><?php echo $this->_var['comments_info']['favorable_count']; ?></em></li>
			<li class="box-flex <?php if ($this->_var['type'] == 3): ?>active<?php endif; ?>"><a href="<?php echo url('goods/comment_list',array('type'=>3,'id'=>$this->_var['id'],'page'=>1));?>"><?php echo $this->_var['lang']['medium_comment']; ?></a><em class="dis-block m-top04"><?php echo $this->_var['comments_info']['medium_count']; ?></em></li>
			<li class="box-flex <?php if ($this->_var['type'] == 4): ?>active<?php endif; ?>"><a href="<?php echo url('goods/comment_list',array('type'=>4,'id'=>$this->_var['id'],'page'=>1));?>"><?php echo $this->_var['lang']['bad_comment']; ?></a><em class="dis-block m-top04"><?php echo $this->_var['comments_info']['bad_count']; ?></em></li>
			<li class="box-flex <?php if ($this->_var['type'] == 5): ?>active<?php endif; ?>">有图<em class="dis-block m-top04">0</em></li>
		</ul>
	</div>
	<div id="j-tab-con" class="b-color-f tab-con m-top06">
	<div id="content"></div>
		<div class="swiper-wrapper">

			<section class="swiper-slide of-hidden">
			<?php if ($this->_var['comment_list']): ?>
			<?php $_from = $this->_var['comment_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'list');$this->_foreach['com'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['com']['total'] > 0):
    foreach ($_from AS $this->_var['list']):
        $this->_foreach['com']['iteration']++;
?>
				<div class="evaluation-list padding-all">
					<header class="of-hidden ">
						<p class="fl">
							<span class="grade-star g-star-<?php echo $this->_var['list']['comment_rank']; ?> fl"></span>
							<em class="t-remark fl"><?php echo $this->_var['list']['user_name']; ?></em>
						</p>
						<p class="fr t-remark"><?php echo $this->_var['list']['add_time']; ?></p>
					</header>
					<p class="clear m-top10 t-goods1"><?php echo $this->_var['list']['content']; ?></p>
					<?php if ($this->_var['comment']['re_content']): ?>
					<p><font class="f1"><?php echo $this->_var['lang']['admin_username']; ?></font><?php echo $this->_var['comment']['re_content']; ?></p>
					<?php endif; ?>
					<p style="display:none;" class="clear m-top08 t-remark">颜色分类：70cm、5144蓝色</p>
				</div>
				<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
				<?php endif; ?>
			</section>

		</div>
	</div>

</div>
 <ul class="pager ect-margin-lr ect-page">
	  <li class="pull-left"><a href="<?php echo url('goods/comment_list',array('type'=>$this->_var['type'],'id'=>$this->_var['id'],'page'=>($this->_var['pager']-1 && $this->_var['pager'] !== 0 )));?>">上一页</a></li>
	  <?php if ($this->_var['pager']['page_number']): ?>
	  <li class="form-select">
		<i class="fa fa-sort-desc"></i>
	  </li>
	  <?php endif; ?>
	  <?php if ($this->_var['is_page'] != 1): ?>
	  <li class="pull-right"><a href="<?php echo url('goods/comment_list',array('type'=>$this->_var['type'],'id'=>$this->_var['id'],'page'=>($this->_var['pager']+1)));?>">下一页</a></li>
	 <?php endif; ?>
</ul>
</div>

<script src="__PUBLIC__/bootstrap/js/bootstrap.min.js"></script>
<?php echo $this->fetch('library/new_search.lbi'); ?> <?php echo $this->fetch('library/new_page_footer.lbi'); ?>
<script>

	/*点击下拉菜单*/
	function openMune() {
	    if ($(".ect-nav").is(":visible")) {
	        $(".ect-nav").hide();
	    } else {
	        $(".ect-nav").show();
	    }
	}
	/*倒计时*/
	var goods_id = 3;
	var goodsattr_style = 1;
	var gmt_end_time = 0;
	var day = "天";
	var hour = "小时";
	var minute = "分钟";
	var second = "秒";
	var end = "结束";
	var goodsId = 3;
	var now_time = 1453767623;
	var use_how_oos = 1;


	function back_goods_number() {
		var goods_number = document.getElementById('goods_number').value;
		document.getElementById('back_number').value = goods_number;
	}



</script>

</div>
</body></html>