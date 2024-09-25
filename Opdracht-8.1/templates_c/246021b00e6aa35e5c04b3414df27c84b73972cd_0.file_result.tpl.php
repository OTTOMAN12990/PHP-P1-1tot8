<?php
/* Smarty version 5.4.1, created on 2024-09-24 13:19:46
  from 'file:templates/result.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_66f2bc72e67cb4_04987490',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '246021b00e6aa35e5c04b3414df27c84b73972cd' => 
    array (
      0 => 'templates/result.tpl',
      1 => 1727183983,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_66f2bc72e67cb4_04987490 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\wamp64\\www\\PHP-P1\\Opdracht-8.1\\templates';
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('BLA'), 'value', false, 'field');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('field')->value => $_smarty_tpl->getVariable('value')->value) {
$foreach0DoElse = false;
?>

 <p><?php echo $_smarty_tpl->getValue('field');?>
:jij bent <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('value'), ENT_QUOTES, 'UTF-8', true);?>
</p>
 
 <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
}
}
