[{include file="headitem.tpl" title="GENERAL_ADMIN_TITLE"|oxmultilangassign}]
<script type="text/javascript">
	function ajaxRequest(url, params, callback){
		var xmlhttp = new XMLHttpRequest();

		if(callback !== undefined){
			xmlhttp.onreadystatechange=function()
			{
				if (xmlhttp.readyState==4 && xmlhttp.status==200)
				{
					callback(xmlhttp.responseText);
				}
			}
		}
		
		xmlhttp.open("GET", url,true);
		xmlhttp.send();
	}

	function handleOffer($this){
		var url = window.location.href;
		if($this.checked)
			url = url + "&fnc=setHot";
		else
			url = url + "&fnc=unsetHot";

		url = url + "&oxid=" + $this.getAttribute("data-oxid");
		ajaxRequest(url);
	}
</script>
<style>
	.offers{
		display: table;
		width:auto;
	}
	.offers_head{
		font-weight: bold;
		display:table-row;
	}
	.offers_body{

	}
	.offer_row{
		display:table-row;
		width:auto;
		clear:both;
	}
	.offer_name{
		display:table-cell;
		width: 400px;
	}
	.offer_is_hot{
		display:table-cell;
		width: 10px;
	}
</style>

<div class="offers">
	<div class="offers_head offer_row">
		<div class="offer_name">Product title</div>
		<div class="offer_is_hot">HotOffer?</div>
	</div>
	<div class="offers_body">
	[{foreach from=$oOfferList item=offer}]
		<div class="offer_row">
			<div class="offer_name">
				[{$offer->oxarticles__oxtitle}]
			</div>
			<div class="offer_is_hot">
				<input type="checkbox" [{if $offer->isHotOffer()}]CHECKED[{/if}] name="hot_offer" 
					onclick="handleOffer(this)"
					data-oxid="[{$offer->oxarticles__oxid}]"
				/>
			</div>
		</div>
	[{/foreach}]
	</div>
</div>

[{include file="bottomnaviitem.tpl"}]
[{include file="bottomitem.tpl"}]