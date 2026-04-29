<?php
/* Smarty version 4.5.6, created on 2026-04-28 08:25:00
  from '/var/www/html/templates/pages/home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.6',
  'unifunc' => 'content_69f06edc19d6e5_74749809',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '96d95b4b3352a0406a8352b29753c41e7382d412' => 
    array (
      0 => '/var/www/html/templates/pages/home.tpl',
      1 => 1777360598,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layouts/header.tpl' => 1,
    'file:components/article-card.tpl' => 1,
    'file:layouts/footer.tpl' => 1,
  ),
),false)) {
function content_69f06edc19d6e5_74749809 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:layouts/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pageTitle'=>"Главная страница"), 0, false);
?>

<div class="container">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
        <section class="category-section">
            <div class="category-header">
                <h2><?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
</h2>
                <p><?php echo $_smarty_tpl->tpl_vars['category']->value['description'];?>
</p>
                <a href="/category/<?php echo $_smarty_tpl->tpl_vars['category']->value['slug'];?>
" class="btn">Все статьи</a>
            </div>

            <div class="articles-grid">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['category']->value['articles'], 'article');
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
        </section>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:layouts/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
