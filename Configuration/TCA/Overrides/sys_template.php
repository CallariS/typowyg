<?php

defined('TYPO3') || die('Access denied.');

call_user_func( static function() { \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('typowyg','Configuration/TypoScript/Viewer','Viewer');});