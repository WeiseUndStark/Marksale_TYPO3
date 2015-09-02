<?php

use \TYPO3\CMS\Core\Utility\GeneralUtility;

/**
 * Parse key from ext configuration
 *
 */
class Parser {

  public function getKey($content, $conf) {
    $key = unserialize($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['marksale'])['key'];

    $view = GeneralUtility::makeInstance('TYPO3\\CMS\\Fluid\\View\\StandaloneView', $GLOBALS['TSFE']->cObj);
    $view->setTemplatePathAndFilename($conf['templateFile']);
    $view->assign('key', $key);
    
    return  $view->render();
  }
}