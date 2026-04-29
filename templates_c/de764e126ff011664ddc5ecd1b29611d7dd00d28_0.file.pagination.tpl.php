<?php
/* Smarty version 4.5.6, created on 2026-04-28 08:26:55
  from '/var/www/html/templates/components/pagination.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.6',
  'unifunc' => 'content_69f06f4f24fae2_61693551',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'de764e126ff011664ddc5ecd1b29611d7dd00d28' => 
    array (
      0 => '/var/www/html/templates/components/pagination.tpl',
      1 => 1777360592,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_69f06f4f24fae2_61693551 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['pagination']->value['total'] > 1) {?>
<div class="pagination">
    <?php if ($_smarty_tpl->tpl_vars['pagination']->value['current'] > 1) {?>
        <a href="?page=<?php echo $_smarty_tpl->tpl_vars['pagination']->value['current']-1;?>
&sort=<?php echo $_smarty_tpl->tpl_vars['pagination']->value['sort'];?>
" class="btn">« Назад</a>
    <?php }?>

    <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['pagination']->value['total']+1 - (1) : 1-($_smarty_tpl->tpl_vars['pagination']->value['total'])+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
        <?php if ($_smarty_tpl->tpl_vars['i']->value == $_smarty_tpl->tpl_vars['pagination']->value['current']) {?>
            <span class="current"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</span>
        <?php } else { ?>
            <a href="?page=<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
&sort=<?php echo $_smarty_tpl->tpl_vars['pagination']->value['sort'];?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</a>
        <?php }?>
    <?php }
}
?>

    <?php if ($_smarty_tpl->tpl_vars['pagination']->value['current'] < $_smarty_tpl->tpl_vars['pagination']->value['total']) {?>
        <a href="?page=<?php echo $_smarty_tpl->tpl_vars['pagination']->value['current']+1;?>
&sort=<?php echo $_smarty_tpl->tpl_vars['pagination']->value['sort'];?>
" class="btn">Вперёд »</a>
    <?php }?>
</div>
<?php }
}
}
