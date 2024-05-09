<?php
/* Smarty version 4.5.1, created on 2024-05-09 10:09:32
  from 'C:\xampp\htdocs\PHP\php8\app\view\templates\main.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_663c84bceaa550_39550589',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a881ab347e783f538730bbfb65c1293997dad813' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PHP\\php8\\app\\view\\templates\\main.html',
      1 => 1715156499,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_663c84bceaa550_39550589 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1973922539663c84bcea9920_55006273', 'container');
?>

</div>

<div class="footer">
	<p>
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1327595195663c84bceaa032_20607936', 'footer');
?>

	</p>
	
</div>

</body>
</html><?php }
/* {block 'container'} */
class Block_1973922539663c84bcea9920_55006273 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'container' => 
  array (
    0 => 'Block_1973922539663c84bcea9920_55006273',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości .... <?php
}
}
/* {/block 'container'} */
/* {block 'footer'} */
class Block_1327595195663c84bceaa032_20607936 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_1327595195663c84bceaa032_20607936',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść stopki .... <?php
}
}
/* {/block 'footer'} */
}
