<?php
/**
 * @copyright C UAB “NFQ Solutions” 2013
 *
 * This Software is the property of UAB “NFQ Solutions”
 * and is protected by copyright law - it is NOT Freeware.
 *
 * Any unauthorized use of this software without a valid license key
 * is a violation of the license agreement and will be prosecuted by
 * civil and criminal law.
 *
 * Contact UAB “NFQ Solutions”:
 * E-mail: info@nfq.lt
 * http://www.nfq.lt
 *
 */

/**
 * Autoloader for nfq modules.
 */
class Autoloader
{
    /**
     * stores path to the specific NFQ modules directory
     * @var array
     */
    protected $_sNfqModuleDir = 'Nfq/';

    /**
     * stores classname to filepath array
     * @var array
     */
    protected $_aClassMap = null;

    /**
     * register's this autoloader in spl_autoload stack
     * @return bool
     */
    public function register()
    {
        return spl_autoload_register(array($this, 'load'));
    }


    /**
     * returns registered classes in array format
     * @return array
     */
    protected function _getRegisteredClasses()
    {
        $sPath = $this->_getModulesDir() . $this->_sNfqModuleDir;
        $aNfqModules = array();
        if ($handle = opendir($sPath)) {
            while (false !== ($sModule = readdir($handle))) {
                if (is_dir($sPath . $sModule)) {
                    $sClassMapFilePath = $sPath . $sModule . '/Classmap.php';
                    if (file_exists($sClassMapFilePath)) {
                        $aClassMap = require_once $sClassMapFilePath;
                        if (is_array($aClassMap) && !empty($aClassMap)) {
                            foreach ($aClassMap as $sClassName) {
                                $this->_aRegisteredClasses [] = $sClassName;
                            }
                        }
                    }
                }
            }
        }
        closedir($handle);

        return $this->_aRegisteredClasses;
    }

    /**
     * returns path of shop module dir
     * @return string
     */
    protected function _getModulesDir()
    {
        return getShopBasePath() . 'modules/';
    }

    /**
     * returns class map to file array.
     * Array key - class name in lowercase,
     * array value - full path there class is located
     * @param bool $blReset rebuild map
     * @return array
     */
    protected function _getMap($blReset = false)
    {
        if ($this->_aClassMap !== null && !$blReset) {
            return $this->_aClassMap;
        }
        $this->_aClassMap = array();
        $aClasses = $this->_getRegisteredClasses();
        if (is_array($aClasses) && !empty($aClasses)) {
            foreach ($aClasses as $sClassName) {
                $sFileName = $this->_getModulesDir();
                $sFileName .= str_replace('_', '/', $sClassName);
                $sFileName .= '.php';
                $this->_aClassMap[strtolower($sClassName)] = $sFileName;
            }
        }
        return $this->_aClassMap;
    }

    /**
     * checks if required class is in registered class list,
     * and if so, will call require_once for file
     * @param $sClassName class name which has to be loaded
     */
    protected function load($sClassName)
    {
        $aMap = $this->_getMap();
        $sClassName = strtolower($sClassName);

        if (isset($aMap[$sClassName])) {
            require_once $aMap[$sClassName];
        }
    }
}

$oNfqAutoloader = new Autoloader();
$oNfqAutoloader->register();