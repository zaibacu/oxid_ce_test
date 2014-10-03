<?php

/**
 * Metadata version
 */
$sMetadataVersion = "1.2";

/**
 * Module information
 */
$aModule = array(
    "id" => "HotOffersModule",
    "title" => "HotOffersModule",
    "description" => "",
    "thumbnail" => "hot_offer.png",
    "version" => "1.0.1",
    "author" => "NFQ",
    "url" => "http://www.nfq.lt",
    "email" => "info@nfq.lt",
    "extend" => array(
        "oxarticle" => "Nfq_HotOffersModule_Models_HotOfferOxarticle",
        "oxarticlelist" => "Nfq_HotOffersModule_Models_HotOfferOxarticlelist",
    ),
    "templates" => array(
        "nfq_hot_offer_handling.tpl" => "Nfq/HotOffersModule/views/admin/tpl/nfq_hot_offer_handling.tpl",
        "nfq_hot_offers.tpl" => "Nfq/HotOffersModule/views/azure/tpl/custom/nfq_hot_offers.tpl"
    ),
    "events" => array(
        "onActivate" => "Installer::onActivate",
    ),
    "files" => array(
        "Installer" => "Nfq/HotOffersModule/Installer.php"
    ),
    "blocks" => array(
        array(
            "template" => "widget/product/listitem_infogrid.tpl",
            "block" => "widget_product_listitem_infogrid_gridpicture",
            "file" => "views/azure/tpl/widget/product/blocks/listitem_infogrid.tpl"
        ),
        array(
            "template" => "page/details/inc/productmain.tpl",
            "block" => "details_productmain_zoom",
            "file" => "views/azure/tpl/page/details/inc/blocks/productmain.tpl"
        )
    )
);