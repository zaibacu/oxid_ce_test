<?php /* Smarty version 2.6.26, created on 2014-10-01 11:33:01
         compiled from page/checkout/inc/options.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'oxscript', 'page/checkout/inc/options.tpl', 2, false),array('function', 'oxmultilang', 'page/checkout/inc/options.tpl', 8, false),array('block', 'oxifcontent', 'page/checkout/inc/options.tpl', 33, false),)), $this); ?>

    <?php echo smarty_function_oxscript(array('include' => "js/widgets/oxequalizer.js",'priority' => 10), $this);?>

    <?php echo smarty_function_oxscript(array('add' => "$(function(){oxEqualizer.equalHeight($('.checkoutOptions .option'));});"), $this);?>

    <div class="checkoutOptions clear">
        
            <?php if ($this->_tpl_vars['oView']->getShowNoRegOption()): ?>
            <div class="lineBox option" id="optionNoRegistration">
                <h3><?php echo smarty_function_oxmultilang(array('ident' => 'PURCHASE_WITHOUT_REGISTRATION'), $this);?>
</h3>
                
                    <p><?php echo smarty_function_oxmultilang(array('ident' => 'DO_NOT_WANT_CREATE_ACCOUNT'), $this);?>
</p>
                    <?php if ($this->_tpl_vars['oView']->isDownloadableProductWarning()): ?>
                        <p class="errorMsg"><?php echo smarty_function_oxmultilang(array('ident' => 'MESSAGE_DOWNLOADABLE_PRODUCT'), $this);?>
</p>
                    <?php endif; ?>
                
                <form action="<?php echo $this->_tpl_vars['oViewConf']->getSslSelfLink(); ?>
" method="post">
                    <p>
                        <?php echo $this->_tpl_vars['oViewConf']->getHiddenSid(); ?>

                        <?php echo $this->_tpl_vars['oViewConf']->getNavFormParams(); ?>

                        <input type="hidden" name="cl" value="user">
                        <input type="hidden" name="fnc" value="">
                        <input type="hidden" name="option" value="1">
                        <button class="submitButton nextStep" type="submit"><?php echo smarty_function_oxmultilang(array('ident' => 'NEXT'), $this);?>
</button>
                    </p>
                </form>
            </div>
            <?php endif; ?>
        

        
            <div class="lineBox option" id="optionRegistration">
                <h3><?php echo smarty_function_oxmultilang(array('ident' => 'OPEN_ACCOUNT'), $this);?>
</h3>
                
                    <?php $this->_tag_stack[] = array('oxifcontent', array('ident' => 'oxregistrationdescription','object' => 'oCont')); $_block_repeat=true;smarty_block_oxifcontent($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
                        <?php echo $this->_tpl_vars['oCont']->oxcontents__oxcontent->value; ?>

                    <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_oxifcontent($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
                
                <form action="<?php echo $this->_tpl_vars['oViewConf']->getSslSelfLink(); ?>
" method="post">
                    <p>
                        <?php echo $this->_tpl_vars['oViewConf']->getHiddenSid(); ?>

                        <?php echo $this->_tpl_vars['oViewConf']->getNavFormParams(); ?>

                        <input type="hidden" name="cl" value="user">
                        <input type="hidden" name="fnc" value="">
                        <input type="hidden" name="option" value="3">
                        <button class="submitButton nextStep" type="submit"><?php echo smarty_function_oxmultilang(array('ident' => 'NEXT'), $this);?>
</button>
                    </p>
                </form>
            </div>
        

        
            <div class="lineBox option" id="optionLogin">
                <h3><?php echo smarty_function_oxmultilang(array('ident' => 'ALREADY_CUSTOMER'), $this);?>
</h3>
                
                    <p><?php echo smarty_function_oxmultilang(array('ident' => 'LOGIN_DESCRIPTION'), $this);?>
</p>
                
                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "form/login.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
            </div>
        
    </div>