<style>
.hotoffer_overlay{
    background: url('[{$oViewConf->getModuleUrl("HotOffersModule")}]hot_offer.png') no-repeat;
    position: absolute;
    width: 190px;
    height: 150px;
    z-index: 1;
}
</style>
<div class="pictureBox gridPicture">
    <a class="sliderHover" href="[{ $_productLink }]" title="[{ $product->oxarticles__oxtitle->value}] [{$product->oxarticles__oxvarselect->value}]" style="z-index:2;"></a>
    <a href="[{$_productLink}]" class="viewAllHover glowShadow corners" title="[{ $product->oxarticles__oxtitle->value}] [{$product->oxarticles__oxvarselect->value}]" style="z-index:2;"><span>[{oxmultilang ident="PRODUCT_DETAILS"}]</span></a>
    [{if $product->oxarticles__nfq_is_hotoffer->value == "1" }]
    	<div class="hotoffer_overlay"></div>
	[{/if}]
	<img src="[{$product->getThumbnailUrl()}]" alt="[{ $product->oxarticles__oxtitle->value}] [{$product->oxarticles__oxvarselect->value}]">
		
</div>