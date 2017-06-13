<!-- $Id: user_rank_info.htm 15053 2008-10-25 03:07:46Z testyang $ -->
<?php echo $this->fetch('pageheader.htm'); ?>

<div class="main-div">
<form action="user_account.php" method="post" name="theForm">
<table width="100%">
  <tr>
    <td class="label">充值下限: </td>
    <td><input type="text" name="min_money" value="<?php echo $this->_var['rank']['min_money']; ?>" size="10" maxlength="20" /></td>
  </tr>
  <tr>
    <td class="label">充值上限: </td>
    <td><input type="text" name="max_money" value="<?php echo $this->_var['rank']['max_money']; ?>" size="10" maxlength="20" /></td>
  </tr>
  <tr>
    <td class="label">赠送余额: </td>
    <td><input type="text" name="sent_money" value="<?php echo $this->_var['rank']['sent_money']; ?>" size="10" maxlength="20" /></td>
  </tr>
  <tr>
    <td colspan="2" align="center">
      <input type="hidden" name="act" value="<?php echo $this->_var['form_action']; ?>" />
      <input type="hidden" name="id" value="<?php echo $this->_var['rank']['rec_id']; ?>" />
      <input type="submit" value="<?php echo $this->_var['lang']['button_submit']; ?>" class="button" />
      <input type="reset" value="<?php echo $this->_var['lang']['button_reset']; ?>" class="button" />
    </td>
  </tr>
</table>
</form>
</div>
<?php echo $this->smarty_insert_scripts(array('files'=>'../js/utils.js,validator.js')); ?>

<script language="JavaScript">
<!--
document.forms['theForm'].elements['rank_name'].focus();

onload = function()
{
  // 开始检查订单
  startCheckOrder();
}

//-->
</script>

<?php echo $this->fetch('pagefooter.htm'); ?>