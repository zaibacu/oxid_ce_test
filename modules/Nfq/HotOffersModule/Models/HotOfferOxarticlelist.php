<?php
class Nfq_HotOffersModule_Models_HotOfferOxarticlelist extends Nfq_HotOffersModule_Models_HotOfferOxarticlelist_Parent
{
	protected $_sObjectsInListName = "Nfq_HotOffersModule_Models_HotOfferOxarticle";

	public function loadHotOffers($limit = 0){
		$this->_aArray = array();
		$sArticleTable = getViewName("oxarticles");
		$sSelect = "SELECT * FROM ". $sArticleTable ." WHERE oxactive = 1 AND oxissearch = 1 AND nfq_is_hotoffer = 1" 
		. $this->_getLimitQuery($limit);
		$this->selectString($sSelect);
	}

	public function loadArticles($limit = 0, $filter = ""){
		$this->_aArray = array();
		$sArticleTable = getViewName("oxarticles");
		$sSelect = "SELECT * FROM ". $sArticleTable ." WHERE oxactive = 1 AND oxissearch = 1" 
		. $this->_getLimitQuery($limit);
		$this->selectString($sSelect);
	}

	private function _getLimitQuery($limit){
		if($limit == 0 || $limit == null)
			return "";
		else
			return " LIMIT " . $limit;
	}
}
?>