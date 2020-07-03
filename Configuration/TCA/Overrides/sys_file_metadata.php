<?php

$temp_metacolumns = array(
	'copyright' => array(
		'exclude' => 1,
		'label' => 'Copyright',
		'config' => array(
			'type' => 'input',
			'size' => 20,
			'eval' => 'trim'
		),
	),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('sys_file_metadata',$temp_metacolumns);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes("sys_file_metadata","copyright","","description");