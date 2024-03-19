<?php
/* Smarty version 4.5.1, created on 2024-03-18 22:09:13
  from 'C:\xampp\htdocs\php\php4\auth\login_view.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_65f8ad79782892_48242653',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '43928cfcf2fbabc1ea45dc60933f421f3d578bc2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php\\php4\\auth\\login_view.php',
      1 => 1710796150,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65f8ad79782892_48242653 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_174135202265f8ad79781277_83832585', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_113551407565f8ad79781ff9_75397784', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.html");
}
/* {block 'footer'} */
class Block_174135202265f8ad79781277_83832585 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_174135202265f8ad79781277_83832585',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
przykładowa tresć stopki wpisana do szablonu głównego z szablonu kalkulatora<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_113551407565f8ad79781ff9_75397784 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_113551407565f8ad79781ff9_75397784',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<form action="<?php echo '<?php'; ?>
 print(_APP_ROOT); <?php echo '?>'; ?>
/auth/login.php" method="post">
	<h1>Logowanie</h1><br />
		<label for="login">login: </label>
		<input id="login" type="text" name="login" value="<?php echo '<?php'; ?>
 checkIfIsSet($form['login']); <?php echo '?>'; ?>
" /><br /><br />
		<label for="password">hasło: </label>
		<input id="password" type="password" name="password" /><br /><br />
	
	<input type="submit" value="zaloguj"/>
</form>	

<?php echo '<?php'; ?>

if (isset($messages)) {
	if (count ( $messages ) > 0) {
		echo '<ol class="message">';
		foreach ( $messages as $key => $msg ) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</ol>';
	}
}

include _ROOT_PATH.'/templates/footer.php';
<?php echo '?>'; ?>


<?php
}
}
/* {/block 'content'} */
}
