<?php
/* Smarty version 4.5.1, created on 2024-05-07 21:23:19
  from 'C:\xampp\htdocs\php\php7b\app\view\templates\main.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_663a7fa7319121_54886516',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd398e3f931d139b9aa45f39123715b9baca06c08' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php\\php7b\\app\\view\\templates\\main.html',
      1 => 1715098577,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_663a7fa7319121_54886516 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!doctype html>
<html lang="pl">
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_930096415663a7fa7318464_35138385', 'container');
?>

</div>

<div class="footer">
	<p>
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_578771404663a7fa7318c09_19435922', 'footer');
?>

	</p>
	
</div>

</body>
</html><?php }
/* {block 'container'} */
class Block_930096415663a7fa7318464_35138385 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'container' => 
  array (
    0 => 'Block_930096415663a7fa7318464_35138385',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości .... <?php
}
}
/* {/block 'container'} */
/* {block 'footer'} */
class Block_578771404663a7fa7318c09_19435922 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_578771404663a7fa7318c09_19435922',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść stopki .... <?php
}
}
/* {/block 'footer'} */
}
