<?php
/* Smarty version 4.5.6, created on 2026-04-30 16:55:00
  from '/var/www/html/templates/pages/category.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.6',
  'unifunc' => 'content_69f389641dfca4_86757404',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6ff6f30551d65950820205603e3d027150ff9e7c' => 
    array (
      0 => '/var/www/html/templates/pages/category.tpl',
      1 => 1777454350,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layouts/header.tpl' => 1,
    'file:components/article-card.tpl' => 1,
    'file:components/pagination.tpl' => 1,
    'file:layouts/footer.tpl' => 1,
  ),
),false)) {
function content_69f389641dfca4_86757404 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:layouts/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pageTitle'=>$_smarty_tpl->tpl_vars['category']->value['name']), 0, false);
?>

<div class="container">
    <div class="breadcrumb">
        <a href="/" class="back-link">← На главную</a>
    </div>

    <div class="category-info">
        <h1><?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
</h1>
        <p><?php echo $_smarty_tpl->tpl_vars['category']->value['description'];?>
</p>
    </div>

    <div class="sorting">
        <a href="?sort=date" class="<?php if ($_smarty_tpl->tpl_vars['sort']->value == 'date') {?>active<?php }?>">По дате</a>
        <a href="?sort=views" class="<?php if ($_smarty_tpl->tpl_vars['sort']->value == 'views') {?>active<?php }?>">По просмотрам</a>
    </div>

    <div class="articles-list">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['articles']->value, 'article');
$_smarty_tpl->tpl_vars['article']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->do_else = false;
?>
            <?php $_smarty_tpl->_subTemplateRender("file:components/article-card.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('article'=>$_smarty_tpl->tpl_vars['article']->value), 0, true);
?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>

    <?php $_smarty_tpl->_subTemplateRender("file:components/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pagination'=>$_smarty_tpl->tpl_vars['pagination']->value), 0, false);
?>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:layouts/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
