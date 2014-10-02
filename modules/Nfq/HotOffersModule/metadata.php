<?php

/**
 * Metadata version
 */
$sMetadataVersion = "1.0";

/**
 * Module information
 */
$aModule = array(
    "id" => "HotOffersModule",
    "title" => "HotOffersModule",
    "description" => "",
    "thumbnail" => "hot_offer.png",
    "version" => "1.0.0",
    "author" => "NFQ",
    "url" => "http://www.nfq.lt",
    "email" => "info@nfq.lt",
    "extend" => array(
        "oxarticle" => "Nfq_HotOffersModule_Models_HotOfferOxarticle",
        "oxarticlelist" => "Nfq_HotOffersModule_Models_HotOfferOxarticlelist"
    ),
    "templates" => array(
        "nfq_hot_offer_handling.tpl" => "Nfq/HotOffersModule/Views/Admin/tpl/nfq_hot_offer_handling.tpl"
    ),
    "events" => array(
        "onActivate" => "Installer::onActivate",
    ),
    "files" => array(
        "Installer" => "Nfq/HotOffersModule/Installer.php"
    )
);