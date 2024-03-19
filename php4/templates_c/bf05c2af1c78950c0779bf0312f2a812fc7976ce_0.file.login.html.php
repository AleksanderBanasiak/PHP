<?php
/* Smarty version 4.5.1, created on 2024-03-19 08:09:41
  from 'C:\xampp\htdocs\php\php4\auth\login.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_65f93a359dc080_38900776',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bf05c2af1c78950c0779bf0312f2a812fc7976ce' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php\\php4\\auth\\login.html',
      1 => 1710832177,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65f93a359dc080_38900776 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_76928684665f93a359cbbb4_29963478', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_154595824365f93a359cca21_22058776', 'container');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.html");
}
/* {block 'footer'} */
class Block_76928684665f93a359cbbb4_29963478 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_76928684665f93a359cbbb4_29963478',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
stopka<?php
}
}
/* {/block 'footer'} */
/* {block 'container'} */
class Block_154595824365f93a359cca21_22058776 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'container' => 
  array (
    0 => 'Block_154595824365f93a359cca21_22058776',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\php\\php4\\libs\\smarty\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
?>


<form action="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/auth/login.php" method="post">
	<h1>Logowanie</h1><br />
		<label for="login">login: </label>
		<input id="login" type="text" name="login" value="<?php echo $_smarty_tpl->tpl_vars['login']->value;?>
" /><br /><br /> 
		<label for="password">hasło: </label>
		<input id="password" type="password" name="password" /><br /><br />
	
	<input type="submit" value="zaloguj"/>
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
		<li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ol>
	<?php }
}?>




<?php
}
}
/* {/block 'container'} */
}
