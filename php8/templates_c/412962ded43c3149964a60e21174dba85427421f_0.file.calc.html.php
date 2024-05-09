<?php
/* Smarty version 4.5.1, created on 2024-05-09 10:10:07
  from 'C:\xampp\htdocs\PHP\php8\app\view\calc.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_663c84df1cbc05_30947000',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '412962ded43c3149964a60e21174dba85427421f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PHP\\php8\\app\\view\\calc.html',
      1 => 1715156498,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_663c84df1cbc05_30947000 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_56826870663c84df1bdda6_13667994', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1829751716663c84df1beb85_66972265', 'container');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "templates/main.html");
}
/* {block 'footer'} */
class Block_56826870663c84df1bdda6_13667994 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_56826870663c84df1bdda6_13667994',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
stopka<?php
}
}
/* {/block 'footer'} */
/* {block 'container'} */
class Block_1829751716663c84df1beb85_66972265 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'container' => 
  array (
    0 => 'Block_1829751716663c84df1beb85_66972265',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



<h1>Kalkulator kredytowy</h1>
<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
logout">Wyloguj</a><br /><br />
<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
calc" method="post">
	<label for="amount">Kwota: </label>
	<input id="amount" type="text" name="amount" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->amount;?>
" />
	<br />
	<br />
	
	<label for="years">Na ile lat: </label>
	<input id="years" type="text" name="years" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->years;?>
" />
	<br />
	<br />

	<label for="interest">Oprocentowanie: </label>
	<input id="interest" type="text" name="interest" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->interest;?>
" />
	<br />
	<br />

	<input type="submit" value="Oblicz" />
</form>	

<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>
    <ol class="message">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getErrors(), 'error');
$_smarty_tpl->tpl_vars['error']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->do_else = false;
?>
            <li><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ol>
<?php }?>


<?php if ((isset($_smarty_tpl->tpl_vars['result']->value->result))) {?>
	<h4>Wynik:</h4>
	<?php echo $_smarty_tpl->tpl_vars['result']->value->result;?>

<?php }?>
		



<?php
}
}
/* {/block 'container'} */
}
