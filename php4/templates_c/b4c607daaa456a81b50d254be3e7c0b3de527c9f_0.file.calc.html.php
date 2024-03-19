<?php
/* Smarty version 4.5.1, created on 2024-03-19 08:23:41
  from 'C:\xampp\htdocs\php\php4\app\calc.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_65f93d7da27874_91240183',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b4c607daaa456a81b50d254be3e7c0b3de527c9f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php\\php4\\app\\calc.html',
      1 => 1710832968,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65f93d7da27874_91240183 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_105629723965f93d7da18057_44881214', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_37556297065f93d7da18998_51517099', 'container');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.html");
}
/* {block 'footer'} */
class Block_105629723965f93d7da18057_44881214 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_105629723965f93d7da18057_44881214',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
stopka<?php
}
}
/* {/block 'footer'} */
/* {block 'container'} */
class Block_37556297065f93d7da18998_51517099 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'container' => 
  array (
    0 => 'Block_37556297065f93d7da18998_51517099',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\php\\php4\\libs\\smarty\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
?>



<h1>Kalkulator kredytowy</h1>
<a href="<?php echo $_smarty_tpl->tpl_vars['app_root']->value;?>
/auth/logout.php">Wyloguj</a><br /><br />
<form action="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/calc.php" method="post">
	<label for="amount">Kwota: </label>
	<input id="amount" type="text" name="amount" value="<?php echo $_smarty_tpl->tpl_vars['amount']->value;?>
" />
	<br />
	<br />
	
	<label for="years">Na ile lat: </label>
	<input id="years" type="text" name="years" value="<?php echo $_smarty_tpl->tpl_vars['years']->value;?>
" />
	<br />
	<br />

	<label for="interest">Oprocentowanie: </label>
	<input id="interest" type="text" name="interest" value="<?php echo $_smarty_tpl->tpl_vars['interest']->value;?>
" />
	<br />
	<br />

	<input type="submit" value="Oblicz" />
</form>	


<?php if (((isset($_smarty_tpl->tpl_vars['messages']->value)))) {?> 
	<?php if ((smarty_modifier_count($_smarty_tpl->tpl_vars['messages']->value) > 0)) {?> 
		<ol class="message">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value, 'key');
$_smarty_tpl->tpl_vars['key']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value) {
$_smarty_tpl->tpl_vars['key']->do_else = false;
?> 
		<li><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</li>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ol>
	<?php }
}?>


<?php if ((isset($_smarty_tpl->tpl_vars['result']->value))) {?>
	<h4>Wynik:</h4>
	<?php echo $_smarty_tpl->tpl_vars['result']->value;?>

<?php }?>
		



<?php
}
}
/* {/block 'container'} */
}
