<?php /* Smarty version 2.6.26, created on 2014-10-01 14:51:28
         compiled from widget/shoplupe/ratings.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'oxmultilang', 'widget/shoplupe/ratings.tpl', 2, false),)), $this); ?>
<div class="box">
    <h3><?php echo smarty_function_oxmultilang(array('ident' => 'SHOPLUPE'), $this);?>
</h3>
    <div class="content">
        <p class="shoplupe">
            <a href="http://www.shoplupe.com" target="_blank" title="<?php echo smarty_function_oxmultilang(array('ident' => 'SHOPLUPE'), $this);?>
">
                <img src="<?php echo $this->_tpl_vars['oViewConf']->getImageUrl('shoplupe.jpg'); ?>
" alt="<?php echo smarty_function_oxmultilang(array('ident' => 'SHOPLUPE'), $this);?>
">
            </a>
        </p>
    </div>
</div>