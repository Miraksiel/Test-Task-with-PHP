<?php
/* Smarty version 4.5.6, created on 2026-04-28 08:25:01
  from '/var/www/html/templates/components/article-card.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.6',
  'unifunc' => 'content_69f06edd1e0535_21546089',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f21c19e05dfdaf549c287c6ef4c64f26ac6b4ae0' => 
    array (
      0 => '/var/www/html/templates/components/article-card.tpl',
      1 => 1777360586,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_69f06edd1e0535_21546089 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/vendor/smarty/smarty/libs/plugins/modifier.truncate.php','function'=>'smarty_modifier_truncate',),1=>array('file'=>'/var/www/html/vendor/smarty/smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<div class="article-card">
    <a href="/article/<?php echo $_smarty_tpl->tpl_vars['article']->value['slug'];?>
">
        <?php if ($_smarty_tpl->tpl_vars['article']->value['image']) {?>
            <img src="<?php echo $_smarty_tpl->tpl_vars['article']->value['image'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
">
        <?php }?>
        <h3><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</h3>
        <p class="description"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['article']->value['description'],150);?>
</p>
        <div class="meta">
            <span class="date"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['article']->value['created_at'],"%d.%m.%Y");?>
</span>
            <span class="views"><?php echo $_smarty_tpl->tpl_vars['article']->value['views'];?>
 просмотров</span>
        </div>
    </a>
</div>
<?php }
}
