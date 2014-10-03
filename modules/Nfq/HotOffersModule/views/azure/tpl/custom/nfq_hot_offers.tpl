[{capture append="oxidBlock_content"}]
[{if $oView->getHotOffers()|@count > 0}]
<h1 class="pageHead">[{ oxmultilang ident="PAGE_SHOP_HOTOFFERS"}]</h1>

<div class="listRefine clear bottomRound">
    [{include file="widget/locator/listlocator.tpl" locator=$oView->getPageNavigationLimitedTop() itemsPerPage=true sort=true }]
</div>

[{include file="widget/product/list.tpl" type=$oView->getListDisplayType() listId="productList" products=$oView->getHotOffers()}]

[{include file="widget/locator/listlocator.tpl" locator=$oView->getPageNavigationLimitedBottom() place="bottom"}]

[{/if}]
[{insert name="oxid_tracker"}]
[{/capture}]
[{include file="layout/page.tpl" sidebar="Left"}]