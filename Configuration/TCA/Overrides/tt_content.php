<?php

call_user_func( static function() {
    // #region Type Definition
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem('tt_content','CType',[
        'LLL:EXT:typowyg/Resources/Private/Language/Viewer/locallang.xlf:title',
        'typowyg',
        'Typo WYG'],'common','after');
    // #endregion Type Definition
    // #region Field Definition
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', array('typowyg_trumbowyg_config' => array (
        'displayCond'   => 'FIELD:CType:=:typowyg',
        'label'     => 'LLL:EXT:typowyg/Resources/Private/Language/Viewer/locallang.xlf:Editor Config',
        'config'    => array (
            'type'              => 'text',
            'renderType'        => 't3editor',
            'wrap'              => 'on',
            'rows'              => '20',
            'enableTabulator'   => true,
            'format'            => 'css',
            'fixedFont'         => true ))));
    
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', array('typowyg_trumbowyg_id' => array(
        'displayCond'   => 'FIELD:CType:=:typowyg',
        'label'         => 'LLL:EXT:typowyg/Resources/Private/Language/Viewer/locallang.xlf:ID',
        'config'        => array (
            'type'          => 'input',
            'default'       => 'XC Typowyg',
            'dbType'        => 'text'))));
    
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', array('typowyg_trumbowyg_plugins' => array (
        'displayCond'   => 'FIELD:CType:=:typowyg',
        'label'         => 'LLL:EXT:typowyg/Resources/Private/Language/Viewer/locallang.xlf:Editor Plugins',
        'config'        => array (
            'type'              => 'select',
            'renderType'        => 'selectMultipleSideBySide',
            'items'             => [
                ['LLL:EXT:typowyg/Resources/Private/Language/Viewer/locallang.xlf:Paste Inline Image',             'base64'],
                ['LLL:EXT:typowyg/Resources/Private/Language/Viewer/locallang.xlf:Pasting',                        'pasteembed'],
                ['LLL:EXT:typowyg/Resources/Private/Language/Viewer/locallang.xlf:Paste Image URL',                'pasteimage'],
                ['LLL:EXT:typowyg/Resources/Private/Language/Viewer/locallang.xlf:Clean HTML-Code Before Pasting', 'cleanpaste'],
                ['LLL:EXT:typowyg/Resources/Private/Language/Viewer/locallang.xlf:Text Fore- and Backgroundcolor', 'colors'],
                ['LLL:EXT:typowyg/Resources/Private/Language/Viewer/locallang.xlf:Font',                           'fontfamily'],
                ['LLL:EXT:typowyg/Resources/Private/Language/Viewer/locallang.xlf:Fontsize',                       'fontsize'],
                ['LLL:EXT:typowyg/Resources/Private/Language/Viewer/locallang.xlf:Emojis',                         'emoji'],
                ['LLL:EXT:typowyg/Resources/Private/Language/Viewer/locallang.xlf:History',                        'history'],
                ['LLL:EXT:typowyg/Resources/Private/Language/Viewer/locallang.xlf:Indentation',                    'indent'],
                ['LLL:EXT:typowyg/Resources/Private/Language/Viewer/locallang.xlf:Insert Audio',                   'insertaudio'],
                ['LLL:EXT:typowyg/Resources/Private/Language/Viewer/locallang.xlf:Lineheight',                     'lineheight'],
                ['LLL:EXT:typowyg/Resources/Private/Language/Viewer/locallang.xlf:Mention',                        'mention'],
                ['LLL:EXT:typowyg/Resources/Private/Language/Viewer/locallang.xlf:Embed',                          'noembed'],
                ['LLL:EXT:typowyg/Resources/Private/Language/Viewer/locallang.xlf:Code Wrapper',                   'preformatted'],
                ['LLL:EXT:typowyg/Resources/Private/Language/Viewer/locallang.xlf:Resize Image',                   'resizimg'],
                ['LLL:EXT:typowyg/Resources/Private/Language/Viewer/locallang.xlf:Special Characters',             'specialchars'],
                ['LLL:EXT:typowyg/Resources/Private/Language/Viewer/locallang.xlf:Table',                          'table'],
                ['LLL:EXT:typowyg/Resources/Private/Language/Viewer/locallang.xlf:Highlight',                      'highlight'],
                ['LLL:EXT:typowyg/Resources/Private/Language/Viewer/locallang.xlf:Templates',                      'template'],
                ['LLL:EXT:typowyg/Resources/Private/Language/Viewer/locallang.xlf:Upload',                         'upload'],
                ['LLL:EXT:typowyg/Resources/Private/Language/Viewer/locallang.xlf:Speechrecognition',              'speechrecognition'],
                ['LLL:EXT:typowyg/Resources/Private/Language/Viewer/locallang.xlf:Google Drive',                   'WaXCode_OnlineStorage_Google']],
            'size'      => '10',
            'maxItems'  => '0',
            'multiple'  => '0'))));

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette('tt_content','typowyg','typowyg_trumbowyg_id, --linebreak--, typowyg_trumbowyg_config, --linebreak--, typowyg_trumbowyg_plugins','');
    // #region Field Definition
// #region Palette Definition
$GLOBALS['TCA']['tt_content']['types']['typowyg']['palettes']['typowyg'] = [
    'label'     => 'Typo WYG',
    'showitem'  => 'typowyg_trumbowyg_config'];

$GLOBALS['TCA']['tt_content']['types']['typowyg'] = [
    'showitem' => '
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
            --palette--;;general,
            header; Internal title (not displayed),
            bodytext;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bodytext_formlabel,
        --div--;Appearance,
            --palette--;;appearanceLinks,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
            --palette--;;access,
        --div--;LLL:EXT:typowyg/Resources/Private/Language/Viewer/locallang.xlf:TCA Tab Label,
            --palette--;;typowyg',
    'columnsOverrides' => [
        'bodytext' => [ 'config' => [
            'enableRichtext'        => true,
            'richtextConfiguration' => 'default']]]];

$GLOBALS['TCA']['tt_content']['types']['typowyg']['palettes']['typowyg'] = [
    'label'     => 'Typo WYG',
    'showitem'  => 'typowyg'];
// #region Palette Definition
});