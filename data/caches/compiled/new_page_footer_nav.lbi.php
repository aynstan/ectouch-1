<div class="filter-btn dis-box">
	<a href="<?php echo url('index/index');?>" class="filter-btn-flow filter-btn-a"><i class="iconfont">&#xe621;</i><em>首页</em></a>
	<a href="<?php echo url('flow/cart');?>" class="filter-btn-flow filter-btn-a"><i class="iconfont">&#xe626;</i><sup class="b-color" id='total_number'><?php if ($this->_var['seller_cart_total_number']): ?><?php echo $this->_var['seller_cart_total_number']; ?><?php else: ?>0<?php endif; ?></sup><em>购物车</em></a>
	<a type="button" class="btn-cart box-flex" onClick="<?php if ($this->_var['use_calendar'] == 1): ?>addToCart_quick(<?php echo $this->_var['goods']['goods_id']; ?>)<?php else: ?>new_addTocart()<?php endif; ?>;">加入购物车</a>
	<a type="button" class="btn-submit box-flex" onClick="<?php if ($this->_var['use_calendar'] == 1): ?>addToCart_quick(<?php echo $this->_var['goods']['goods_id']; ?>)<?php else: ?>new_addTocart()<?php endif; ?>;">立即购买</a>
</div>