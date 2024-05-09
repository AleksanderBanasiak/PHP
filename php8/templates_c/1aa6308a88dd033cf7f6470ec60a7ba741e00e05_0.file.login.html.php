<?php
/* Smarty version 4.5.1, created on 2024-05-09 10:09:32
  from 'C:\xampp\htdocs\PHP\php8\app\view\login.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_663c84bcce1fc6_81570053',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1aa6308a88dd033cf7f6470ec60a7ba741e00e05' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PHP\\php8\\app\\view\\login.html',
      1 => 1715156499,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_663c84bcce1fc6_81570053 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_666865453663c84bcb599c7_92919274', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1140375991663c84bcb5ac05_15241849', 'container');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.html");
}
/* {block 'footer'} */
class Block_666865453663c84bcb599c7_92919274 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_666865453663c84bcb599c7_92919274',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
stopka<?php
}
}
/* {/block 'footer'} */
/* {block 'container'} */
class Block_1140375991663c84bcb5ac05_15241849 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'container' => 
  array (
    0 => 'Block_1140375991663c84bcb5ac05_15241849',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
login" method="post">
	<h1>Logowanie</h1><br />
		<label for="login">login: </label>
		<input id="login" type="text" name="login" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->login;?>
" /><br /><br /> 
		<label for="password">hasło: </label>
		<input id="password" type="password" name="password" /><br /><br />
	
	<input type="submit" value="zaloguj"/>
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




<?php
}
}
/* {/block 'container'} */
}
