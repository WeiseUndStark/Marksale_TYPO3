<?php

if (!defined('TYPO3_MODE')) {
  die('Access denied.');
}

// Register frontend plugin
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
   $_EXTKEY,
  'pi1',
  'Marksale'
);

// Add static TypoScript template
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
  $_EXTKEY,
  'Configuration/TypoScript',
  'Marksale'
);