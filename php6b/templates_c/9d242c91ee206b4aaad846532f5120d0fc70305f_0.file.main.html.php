<?php
/* Smarty version 4.5.1, created on 2024-04-09 08:12:43
  from 'C:\xampp\htdocs\php\php6a\app\view\templates\main.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_6614dc5bcf0c03_59877146',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9d242c91ee206b4aaad846532f5120d0fc70305f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php\\php6a\\app\\view\\templates\\main.html',
      1 => 1712642758,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6614dc5bcf0c03_59877146 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7753105806614dc5bcf0072_86267042', 'container');
?>

</div>

<div class="footer">
	<p>
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6528043606614dc5bcf0702_36889819', 'footer');
?>

	</p>
	
</div>

</body>
</html><?php }
/* {block 'container'} */
class Block_7753105806614dc5bcf0072_86267042 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'container' => 
  array (
    0 => 'Block_7753105806614dc5bcf0072_86267042',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości .... <?php
}
}
/* {/block 'container'} */
/* {block 'footer'} */
class Block_6528043606614dc5bcf0702_36889819 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_6528043606614dc5bcf0702_36889819',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść stopki .... <?php
}
}
/* {/block 'footer'} */
}
