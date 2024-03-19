<?php
/* Smarty version 4.5.1, created on 2024-03-19 08:09:46
  from 'C:\xampp\htdocs\php\php4\templates\main.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_65f93a3ac43d90_92597460',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f59fca8d05de26aee90010046c8228428aab0d2d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php\\php4\\templates\\main.html',
      1 => 1710832083,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65f93a3ac43d90_92597460 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!doctype html>
<html lang="pl">
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/css/style.css">	
</head>
<body>

<div class="header">
	<h1><?php echo (($tmp = $_smarty_tpl->tpl_vars['page_title']->value ?? null)===null||$tmp==='' ? "Tytuł domyślny" ?? null : $tmp);?>
</h1>
	<h2><?php echo (($tmp = $_smarty_tpl->tpl_vars['page_header']->value ?? null)===null||$tmp==='' ? "Tytuł domyślny" ?? null : $tmp);?>
</h1>
</div>

<div class="container">
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_84483717965f93a3ac431b4_54356324', 'container');
?>

</div><!-- content -->

<div class="footer">
	<p>
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_137384559065f93a3ac43875_44872534', 'footer');
?>

	</p>
	
</div>

</body>
</html><?php }
/* {block 'container'} */
class Block_84483717965f93a3ac431b4_54356324 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'container' => 
  array (
    0 => 'Block_84483717965f93a3ac431b4_54356324',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości .... <?php
}
}
/* {/block 'container'} */
/* {block 'footer'} */
class Block_137384559065f93a3ac43875_44872534 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_137384559065f93a3ac43875_44872534',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść stopki .... <?php
}
}
/* {/block 'footer'} */
}
