<?php
class Nfq_HotOffersModule_Models_HotOfferOxarticlelist extends Nfq_HotOffersModule_Models_HotOfferOxarticlelist_Parent
{
	protected $_sObjectsInListName = "Nfq_HotOffersModule_Models_HotOfferOxarticle";

	public function loadHotOffers(){
		$this->_aArray = array();

		$sSelect = "SELECT * FROM oxarticles WHERE oxactive = 1 AND oxissearch = 1";
		$this->selectString($sSelect);
	}
}
?>