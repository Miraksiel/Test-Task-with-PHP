<?php
/* Smarty version 4.5.6, created on 2026-04-28 10:35:48
  from '/var/www/html/templates/layouts/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.6',
  'unifunc' => 'content_69f08d841a03c5_51363933',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'df1774e5762002f3c8ea2440ec80a98cbdbdb334' => 
    array (
      0 => '/var/www/html/templates/layouts/header.tpl',
      1 => 1777372134,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_69f08d841a03c5_51363933 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo (($tmp = $_smarty_tpl->tpl_vars['pageTitle']->value ?? null)===null||$tmp==='' ? "Блог" ?? null : $tmp);?>
</title>
    <link rel="stylesheet" href="/assets/css/main.css">
</head>
<body>
    <header class="site-header">
        <div class="container">
            <div class="logo">
                <a href="/">
                    <svg class="logo-icon" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path>
                        <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path>
                    </svg>
                    <span class="logo-text">Информационный портал</span>
                </a>
            </div>
            <div class="header-tagline">Актуальные новости и статьи</div>
        </div>
    </header>
    <main class="main-content">
<?php }
}
