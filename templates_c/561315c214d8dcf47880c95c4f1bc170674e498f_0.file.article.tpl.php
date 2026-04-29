<?php
/* Smarty version 4.5.6, created on 2026-04-30 17:03:48
  from '/var/www/html/templates/pages/article.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.6',
  'unifunc' => 'content_69f38b7402ffb7_03102560',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '561315c214d8dcf47880c95c4f1bc170674e498f' => 
    array (
      0 => '/var/www/html/templates/pages/article.tpl',
      1 => 1777454357,
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
function content_69f38b7402ffb7_03102560 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/vendor/smarty/smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),1=>array('file'=>'/var/www/html/vendor/smarty/smarty/libs/plugins/modifier.count.php','function'=>'smarty_modifier_count',),));
$_smarty_tpl->_subTemplateRender("file:layouts/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pageTitle'=>$_smarty_tpl->tpl_vars['article']->value['title']), 0, false);
?>

<div class="container">
    <div class="breadcrumb">
        <a href="/" class="back-link">← На главную</a>
    </div>

    <article class="article-full">
        <?php if ($_smarty_tpl->tpl_vars['article']->value['image']) {?>
            <img src="<?php echo $_smarty_tpl->tpl_vars['article']->value['image'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
" class="article-image">
        <?php }?>

        <h1><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</h1>

        <div class="article-meta">
            <span class="date"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['article']->value['created_at'],"%d.%m.%Y");?>
</span>
            <span class="views"><?php echo $_smarty_tpl->tpl_vars['article']->value['views'];?>
 просмотров</span>
            <div class="categories">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'cat');
$_smarty_tpl->tpl_vars['cat']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->do_else = false;
?>
                    <a href="/category/<?php echo $_smarty_tpl->tpl_vars['cat']->value['slug'];?>
" class="category-badge"><?php echo $_smarty_tpl->tpl_vars['cat']->value['name'];?>
</a>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        </div>

        <div class="article-description">
            <p><strong><?php echo $_smarty_tpl->tpl_vars['article']->value['description'];?>
</strong></p>
        </div>

        <div class="article-content">
            <?php echo nl2br((string) $_smarty_tpl->tpl_vars['article']->value['content'], (bool) 1);?>

        </div>
    </article>

    <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['similar']->value) > 0) {?>
        <section class="similar-articles">
            <h2>Похожие статьи</h2>
            <div class="articles-grid">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['similar']->value, 'article');
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
    <?php }?>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:layouts/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
