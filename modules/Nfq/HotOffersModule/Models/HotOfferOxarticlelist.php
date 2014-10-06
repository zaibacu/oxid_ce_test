<?php
class Nfq_HotOffersModule_Models_HotOfferOxarticlelist extends Nfq_HotOffersModule_Models_HotOfferOxarticlelist_Parent
{
	protected $_sObjectsInListName = "Nfq_HotOffersModule_Models_HotOfferOxarticle";

	/**
	 * Loads articles with attribute 'hot offer'
	 * @return array of articles
	 */
	public function loadHotOffers($start = 0, $limit = 0){
		$this->setSqlLimit($start, $limit);
		$this->_aArray = array();
		$sArticleTable = getViewName("oxarticles");
		$sSelect = "SELECT * FROM ". $sArticleTable ." WHERE oxactive = 1 AND oxissearch = 1 AND nfq_is_hotoffer = 1";
		$this->selectString($sSelect);
	}


	/**
	 * Loads articles
	 * @return array of articles
	 */
	public function loadArticles($start = 0, $limit = 0){
		$this->setSqlLimit($start, $limit);
		$this->_aArray = array();
		$sArticleTable = getViewName("oxarticles");
		$sSelect = "SELECT * FROM ". $sArticleTable ." WHERE oxactive = 1 AND oxissearch = 1";
		$this->selectString($sSelect);
	}

	public function getCount(){
		$myConfig = $this->getConfig();
		$oDb = oxDb::getDb();
		$sArticleTable = getViewName("oxarticles");
        $oBaseObject = $this->getBaseObject();

        $sSelect = "SELECT COUNT(oxid) FROM " . $sArticleTable . " WHERE oxactive = 1 AND oxissearch = 1 AND nfq_is_hotoffer = 1";
        $iRecCnt = (int) $oDb->getOne($sSelect);
		return $iRecCnt;
	}

}
?>