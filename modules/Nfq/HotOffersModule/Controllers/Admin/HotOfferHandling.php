<?php
class Nfq_HotOffersModule_Controllers_Admin_HotOfferHandling extends oxAdminDetails
{	
	protected $_sThisTemplate = "nfq_hot_offer_handling.tpl";

	public function render(){
		parent::render();
		$oOfferList = oxNew("Nfq_HotOffersModule_Models_HotOfferOxarticlelist");
		$oOfferList->loadArticles();
		$this->_aViewData["oOfferList"] = $oOfferList;
		return $this->_sThisTemplate;
	}

	public function save(){
		parent::save();
	}

	public function setHot(){
		//$oxid = $this->_getOxid();
		//oxDb::getDb()->Execute("UPDATE `oxarticles` SET nfq_is_hotoffer = 1 WHERE oxid = '". $oxid ."'");
		$oArticle = $this->_getArticle();
		$oArticle->setHotOffer(1);
		return get_class($this);
	}

	public function unsetHot(){
		//$oxid = $this->_getOxid();
		//oxDb::getDb()->Execute("UPDATE `oxarticles` SET nfq_is_hotoffer = 0 WHERE oxid = '". $oxid ."'");
		$oArticle = $this->_getArticle();
		$oArticle->setHotOffer(0);
		return get_class($this);
	}

	private function _getOxid(){
		return oxRegistry::getConfig()->getRequestParameter("oxid");
	}

	private function _getArticle(){
		$oxid = $this->_getOxid();
		$oArticle = oxNew("Nfq_HotOffersModule_Models_HotOfferOxarticle");
		$oArticle->load($oxid);

		return $oArticle;
	}
}
?>