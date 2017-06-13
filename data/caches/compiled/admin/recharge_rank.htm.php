<!-- $Id: user_rank.htm 14216 2008-03-10 02:27:21Z testyang $ -->
<?php if ($this->_var['full_page']): ?>
<?php echo $this->fetch('pageheader.htm'); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'../js/utils.js,listtable.js')); ?>

<form method="post" action="" name="listForm">
<!-- start ads list -->
<div class="list-div" id="listDiv">
<?php endif; ?>

<table cellspacing='1' id="list-table">
  <tr>
    <th>充值下限</th>
    <th>充值上限</th>
    <th>赠送余额</th>
    <th><?php echo $this->_var['lang']['handler']; ?></th>
  </tr>
  <?php $_from = $this->_var['recharge_rank']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'rank');if (count($_from)):
    foreach ($_from AS $this->_var['rank']):
?>
  <tr>
    <td align="right"><span onclick="listTable.edit(this, 'edit_min_money', <?php echo $this->_var['rank']['rec_id']; ?>)"><?php echo $this->_var['rank']['min_money']; ?></span></td>
    <td align="right"><span onclick="listTable.edit(this, 'edit_max_money', <?php echo $this->_var['rank']['rec_id']; ?>)"><?php echo $this->_var['rank']['max_money']; ?></span></td>
    <td align="right"><span onclick="listTable.edit(this, 'edit_sent_money', <?php echo $this->_var['rank']['rank_id']; ?>)"><?php echo $this->_var['rank']['sent_money']; ?></span></td>

    <td align="center">
    <a href="user_account.php?act=remove_charge&rec_id=<?php echo $this->_var['rank']['rec_id']; ?>" title="<?php echo $this->_var['lang']['remove']; ?>"><img src="images/icon_drop.gif" border="0" height="16" width="16"></a></td>
  </tr>
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
  </table>

<?php if ($this->_var['full_page']): ?>
</div>
<!-- end user ranks list -->
</form>
<script type="Text/Javascript" language="JavaScript">
<!--

onload = function()
{
    // 开始检查订单
    startCheckOrder();
}

//-->
</script>
<?php echo $this->fetch('pagefooter.htm'); ?>
<?php endif; ?>
