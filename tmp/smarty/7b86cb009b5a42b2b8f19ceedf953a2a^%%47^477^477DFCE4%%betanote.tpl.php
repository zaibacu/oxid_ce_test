<?php /* Smarty version 2.6.26, created on 2014-10-01 14:51:28
         compiled from widget/header/betanote.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'oxscript', 'widget/header/betanote.tpl', 1, false),array('function', 'oxmultilang', 'widget/header/betanote.tpl', 6, false),array('modifier', 'cat', 'widget/header/betanote.tpl', 3, false),array('modifier', 'regex_replace', 'widget/header/betanote.tpl', 7, false),)), $this); ?>
<?php echo smarty_function_oxscript(array('include' => "js/libs/cookie/jquery.cookie.js"), $this);?>

<?php echo smarty_function_oxscript(array('include' => "js/widgets/oxbetanote.js"), $this);?>

<?php $this->assign('beta_note_link', ((is_array($_tmp=((is_array($_tmp="<a href='")) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['oView']->getBetaNoteLink()) : smarty_modifier_cat($_tmp, $this->_tpl_vars['oView']->getBetaNoteLink())))) ? $this->_run_mod_handler('cat', true, $_tmp, "' class=\"external\">FAQ</a>") : smarty_modifier_cat($_tmp, "' class=\"external\">FAQ</a>"))); ?>
<div id="betaNote">
    <div class="notify">
        <?php echo smarty_function_oxmultilang(array('ident' => 'BETA_NOTE'), $this);?>

        <?php echo ((is_array($_tmp=$this->_tpl_vars['oxcmp_shop']->oxshops__oxversion->value)) ? $this->_run_mod_handler('regex_replace', true, $_tmp, "/[0-9]+\.[0-9]+\.[0-9]+([_a-zA-Z]+)?/", "") : smarty_modifier_regex_replace($_tmp, "/[0-9]+\.[0-9]+\.[0-9]+([_a-zA-Z]+)?/", "")); ?>

        <?php echo smarty_function_oxmultilang(array('ident' => 'BETA_NOTE_MIDDLE'), $this);?>

        <?php echo ((is_array($_tmp=$this->_tpl_vars['oxcmp_shop']->oxshops__oxversion->value)) ? $this->_run_mod_handler('regex_replace', true, $_tmp, "/[_a-zA-Z]+[0-9]+/", "") : smarty_modifier_regex_replace($_tmp, "/[_a-zA-Z]+[0-9]+/", "")); ?>

        <?php echo smarty_function_oxmultilang(array('ident' => 'BETA_NOTE_FAQ','args' => $this->_tpl_vars['beta_note_link']), $this);?>

        <span class="dismiss"><a href="#" title="<?php echo smarty_function_oxmultilang(array('ident' => 'CLOSE'), $this);?>
">x</a></span>
    </div>
</div>
<?php echo smarty_function_oxscript(array('add' => "$('#betaNote').oxBetaNote();"), $this);?>

<?php echo smarty_function_oxscript(array('widget' => $this->_tpl_vars['oView']->getClassName()), $this);?>