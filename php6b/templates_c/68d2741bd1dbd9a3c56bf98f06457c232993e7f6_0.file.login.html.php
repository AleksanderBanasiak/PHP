<?php
/* Smarty version 4.5.1, created on 2024-04-09 08:07:43
  from 'C:\xampp\htdocs\php\php6a\app\auth\login.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_6614db2f1b2666_72151429',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '68d2741bd1dbd9a3c56bf98f06457c232993e7f6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php\\php6a\\app\\auth\\login.html',
      1 => 1712642856,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6614db2f1b2666_72151429 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_722307646614db2f1a7da9_19589818', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7961145296614db2f1a87a9_48257487', 'container');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.html");
}
/* {block 'footer'} */
class Block_722307646614db2f1a7da9_19589818 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_722307646614db2f1a7da9_19589818',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
stopka<?php
}
}
/* {/block 'footer'} */
/* {block 'container'} */
class Block_7961145296614db2f1a87a9_48257487 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'container' => 
  array (
    0 => 'Block_7961145296614db2f1a87a9_48257487',
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
