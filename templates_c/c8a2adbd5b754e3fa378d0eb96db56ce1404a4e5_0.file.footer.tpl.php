<?php
/* Smarty version 4.5.6, created on 2026-04-28 10:35:48
  from '/var/www/html/templates/layouts/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.6',
  'unifunc' => 'content_69f08d848dfd04_94948389',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c8a2adbd5b754e3fa378d0eb96db56ce1404a4e5' => 
    array (
      0 => '/var/www/html/templates/layouts/footer.tpl',
      1 => 1777372141,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_69f08d848dfd04_94948389 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/vendor/smarty/smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
    </main>
    <footer class="site-footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>О проекте</h3>
                    <p>Интересные статьи на различные темы</p>
                </div>
                <div class="footer-section">
                    <h3>Категории</h3>
                    <ul>
                        <li><a href="/">Все категории</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h3>Контакты</h3>
                    <p>Телефон: +380954111044</p>
                    <p>Email: mira.klimovitch@gmail.com</p>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; <?php echo smarty_modifier_date_format(time(),"%Y");?>
 Блог. Все права защищены.</p>
            </div>
        </div>
    </footer>
</body>
</html>
<?php }
}
