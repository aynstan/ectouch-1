<?php if ($this->_var['use_cat_price']): ?>

<?php $_from = $this->_var['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'vo_0_34031700_1497602753');$this->_foreach['vo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['vo']['total'] > 0):
    foreach ($_from AS $this->_var['vo_0_34031700_1497602753']):
        $this->_foreach['vo']['iteration']++;
?>
		
		<li>
			<div class="product-div">
				<a class="product-div-link" href="<?php echo $this->_var['vo_0_34031700_1497602753']['url']; ?>"></a>
				<img class="product-list-img" src="<?php echo $this->_var['vo_0_34031700_1497602753']['goods_img']; ?>" />

				<div class="product-text">
					<h4><?php echo $this->_var['vo_0_34031700_1497602753']['goods_name']; ?></h4>

					<p class="dis-box p-t-remark"><span class="box-flex"><?php echo $this->_var['vo_0_34031700_1497602753']['goods_brief']; ?></span></p>
				</div>

			</div>
		</li>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
<?php else: ?>

<?php $_from = $this->_var['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'vo_0_34031700_1497602753');$this->_foreach['vo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['vo']['total'] > 0):
    foreach ($_from AS $this->_var['vo_0_34031700_1497602753']):
        $this->_foreach['vo']['iteration']++;
?>
		
		<li>
			<div class="product-div">
				<a class="product-div-link" href="<?php echo $this->_var['vo_0_34031700_1497602753']['url']; ?>"></a>
				<img class="product-list-img" src="<?php echo $this->_var['vo_0_34031700_1497602753']['goods_img']; ?>" />

				<div class="product-text">

						<h4><?php echo $this->_var['vo_0_34031700_1497602753']['goods_name']; ?></h4>

					<?php if ($this->_var['vo_0_34031700_1497602753']['spe']): ?>
					
						<?php $_from = $this->_var['vo_0_34031700_1497602753']['spe']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'price_info');$this->_foreach['price_info'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['price_info']['total'] > 0):
    foreach ($_from AS $this->_var['price_info']):
        $this->_foreach['price_info']['iteration']++;
?>
							<p class="dis-box p-t-remark"><span class="box-flex"><?php echo $this->_var['price_info']['label']; ?>：<?php echo $this->_var['price_info']['format_price']; ?></span></p>
						<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

					<?php else: ?>
							<p class="dis-box p-t-remark"><span class="box-flex">价格：￥<?php echo $this->_var['vo_0_34031700_1497602753']['shop_price']; ?>元</span></p>
							<p class="dis-box p-t-remark"><span class="box-flex">库存：<?php echo $this->_var['vo_0_34031700_1497602753']['goods_number']; ?></span></p>
					<?php endif; ?>
						<p class="dis-box p-t-remark"><span class="box-flex">销量：<?php echo $this->_var['vo_0_34031700_1497602753']['sales_volume']; ?></span></p>
				</div>

			</div>
		</li>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

<?php endif; ?>