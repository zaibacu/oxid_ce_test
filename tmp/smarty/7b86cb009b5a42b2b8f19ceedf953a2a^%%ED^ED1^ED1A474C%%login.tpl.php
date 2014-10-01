<?php /* Smarty version 2.6.26, created on 2014-10-01 11:33:01
         compiled from form/login.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'oxscript', 'form/login.tpl', 1, false),array('function', 'oxmultilang', 'form/login.tpl', 11, false),)), $this); ?>
<?php echo smarty_function_oxscript(array('include' => "js/widgets/oxinputvalidator.js",'priority' => 10), $this);?>

<?php echo smarty_function_oxscript(array('add' => "$('form.js-oxValidate').oxInputValidator();"), $this);?>

<form class="js-oxValidate" name="login" action="<?php echo $this->_tpl_vars['oViewConf']->getSslSelfLink(); ?>
" method="post">
<?php $this->assign('aErrors', $this->_tpl_vars['oView']->getFieldValidationErrors()); ?>
    <ul class="form">
        <li <?php if ($this->_tpl_vars['aErrors']): ?>class="oxInValid"<?php endif; ?>>
            <?php echo $this->_tpl_vars['oViewConf']->getHiddenSid(); ?>

            <?php echo $this->_tpl_vars['oViewConf']->getNavFormParams(); ?>

            <input type="hidden" name="fnc" value="login_noredirect">
            <input type="hidden" name="cl" value="<?php echo $this->_tpl_vars['oViewConf']->getActiveClassName(); ?>
">
            <label class="short"><?php echo smarty_function_oxmultilang(array('ident' => 'EMAIL_ADDRESS'), $this);?>
</label>
            <input type="text" name="lgn_usr" class="textbox js-oxValidate js-oxValidate_notEmpty" data-fieldsize="pair-xsmall">
            <p class="underInput short oxValidateError">
                <span class="js-oxError_notEmpty"><?php echo smarty_function_oxmultilang(array('ident' => 'ERROR_MESSAGE_INPUT_NOTALLFIELDS'), $this);?>
</span>
            </p>
        </li>
        <li <?php if ($this->_tpl_vars['aErrors']): ?>class="oxInValid"<?php endif; ?>>
            <label class="short"><?php echo smarty_function_oxmultilang(array('ident' => 'PASSWORD'), $this);?>
</label>
            <input type="password" name="lgn_pwd" class="js-oxValidate js-oxValidate_notEmpty textbox stepsPasswordbox" data-fieldsize="pair-xsmall">
            &nbsp;<strong><a class="forgotPasswordOpener" id="step2PswdOpener" href="#" title="<?php echo smarty_function_oxmultilang(array('ident' => 'FORGOT_PASSWORD'), $this);?>
">?</a></strong>
            <p class="underInput short oxValidateError">
                <span class="js-oxError_notEmpty"><?php echo smarty_function_oxmultilang(array('ident' => 'ERROR_MESSAGE_INPUT_NOTALLFIELDS'), $this);?>
</span>
            </p>
        </li>
        <li><button type="submit" class="submitButton"><?php echo smarty_function_oxmultilang(array('ident' => 'LOGIN'), $this);?>
</button></li>
    </ul>
</form>