<?php /* Smarty version 2.6.26, created on 2014-10-01 14:51:28
         compiled from layout/sidebar.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'oxid_include_widget', 'layout/sidebar.tpl', 14, false),array('function', 'oxmultilang', 'layout/sidebar.tpl', 61, false),array('modifier', 'count', 'layout/sidebar.tpl', 53, false),)), $this); ?>
<?php $_from = $this->_tpl_vars['oxidBlock_sidebar']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['_block']):
?>
    <?php echo $this->_tpl_vars['_block']; ?>

<?php endforeach; endif; unset($_from); ?>


    
        <?php if ($this->_tpl_vars['oView']->isDemoShop()): ?>
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "widget/sidebar/adminbanner.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        <?php endif; ?>
    

    
        <?php if ($this->_tpl_vars['oView']->getClassName() != 'start' && $this->_tpl_vars['oView']->getClassName() != 'compare'): ?>
            <?php echo smarty_function_oxid_include_widget(array('cl' => 'oxwCategoryTree','cnid' => $this->_tpl_vars['oView']->getCategoryId(),'deepLevel' => 0,'noscript' => 1,'nocookie' => 1), $this);?>

        <?php endif; ?>
    

    
        <?php if ($this->_tpl_vars['oView']->getClassName() == 'start'): ?>
            <?php if ($this->_tpl_vars['oViewConf']->showTs('WIDGET')): ?>
                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "widget/trustedshops/ratings.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
            <?php endif; ?>
        <?php endif; ?>
    

    
        <?php if ($this->_tpl_vars['oView']->getClassName() == 'start'): ?>
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "widget/sidebar/partners.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        <?php endif; ?>
    

    
        <?php if ($this->_tpl_vars['oView']->getTop5ArticleList()): ?>
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "widget/product/boxproducts.tpl", 'smarty_include_vars' => array('_boxId' => 'topBox','_oBoxProducts' => $this->_tpl_vars['oView']->getTop5ArticleList(),'_sHeaderIdent' => 'TOP_OF_THE_SHOP')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        <?php endif; ?>
    

    
        <?php if ($this->_tpl_vars['oViewConf']->getShowListmania() && $this->_tpl_vars['oView']->getSimilarRecommListIds()): ?>
            <?php echo smarty_function_oxid_include_widget(array('nocookie' => 1,'cl' => 'oxwRecommendation','aArticleIds' => $this->_tpl_vars['oView']->getSimilarRecommListIds(),'searchrecomm' => $this->_tpl_vars['oView']->getRecommSearch()), $this);?>

        <?php elseif ($this->_tpl_vars['oViewConf']->getShowListmania() && $this->_tpl_vars['oView']->getRecommSearch()): ?>
            <?php echo smarty_function_oxid_include_widget(array('nocookie' => 1,'cl' => 'oxwRecommendation','_parent' => $this->_tpl_vars['oView']->getClassName(),'searchrecomm' => $this->_tpl_vars['oView']->getRecommSearch()), $this);?>

        <?php endif; ?>
    

    
        <?php if ($this->_tpl_vars['oView']->showTags() && $this->_tpl_vars['oView']->getClassName() != 'details' && $this->_tpl_vars['oView']->getClassName() != 'alist' && $this->_tpl_vars['oView']->getClassName() != 'suggest' && $this->_tpl_vars['oView']->getClassName() != 'tags'): ?>
            <?php echo smarty_function_oxid_include_widget(array('nocookie' => 1,'cl' => 'oxwTagCloud','blShowBox' => '1','noscript' => 1), $this);?>

        <?php endif; ?>
    

    
        <?php if (((is_array($_tmp=$this->_tpl_vars['oxcmp_news'])) ? $this->_run_mod_handler('count', true, $_tmp) : count($_tmp))): ?>
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "widget/sidebar/news.tpl", 'smarty_include_vars' => array('oNews' => $this->_tpl_vars['oxcmp_news'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        <?php endif; ?>
    

    
          <?php if ($this->_tpl_vars['oView']->isActive('FbFacepile') && $this->_tpl_vars['oView']->isConnectedWithFb()): ?>
            <div id="facebookFacepile" class="box">
                <h3><?php echo smarty_function_oxmultilang(array('ident' => 'FACEBOOK_FACEPILE'), $this);?>
</h3>
                <div class="content" id="productFbFacePile">
                    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "widget/facebook/enable.tpl", 'smarty_include_vars' => array('source' => "widget/facebook/facepile.tpl",'ident' => "#productFbFacePile",'type' => 'text')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                </div>
            </div>
        <?php endif; ?>
    

    
        <?php if ($this->_tpl_vars['oView']->getClassName() == 'start'): ?>
           <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "widget/shoplupe/ratings.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        <?php endif; ?>
    

