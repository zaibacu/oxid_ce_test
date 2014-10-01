<?php

/**
 * Metadata version
 */
$sMetadataVersion = '1.0';

/**
 * Module information
 */
$aModule = array(
    'id' => 'NfqModule',
    'title' => '',
    'description' => '',
    'thumbnail' => '',
    'version' => '1.0.0',
    'author' => 'NFQ',
    'url' => 'http://www.nfq.lt',
    'email' => 'info@nfq.lt',
    'extend' => array(),
    'templates' => array(),
    'events' => array(
        'onActivate' => 'Installer::onActivate',
    ),
    'files' => array(
        'Installer' => 'Nfq/HotOffersModule/Installer.php'
    )
);