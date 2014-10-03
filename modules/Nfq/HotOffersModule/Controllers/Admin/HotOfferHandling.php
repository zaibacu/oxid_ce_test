<?php
class Nfq_HotOffersModule_Controllers_Admin_HotOfferHandling extends oxAdminDetails
{	
	protected $_sThisTemplate = "nfq_hot_offer_handling.tpl";

	/**
	 * Renders HotOffers list to admin view
	 * @return string module template
	 */
	public function render(){
		parent::render();
		$oOfferList = oxNew("Nfq_HotOffersModule_Models_HotOfferOxarticlelist");
		$oOfferList->loadArticles();
		$this->_aViewData["oOfferList"] = $oOfferList;
		return $this->_sThisTemplate;
	}

	/**
	 * Set 'hot offer' attribute for current article
	 * @return this class name
	 */
	public function setHot(){
		//$oxid = $this->_getOxid();
		//oxDb::getDb()->Execute("UPDATE `oxarticles` SET nfq_is_hotoffer = 1 WHERE oxid = '". $oxid ."'");
		$oArticle = $this->_getArticle();
		$oArticle->setHotOffer(1);
		return get_class($this);
	}

	/**
	 * Remove 'hot offer' attribute for current article
	 * @return this class name
	 */
	public function unsetHot(){
		//$oxid = $this->_getOxid();
		//oxDb::getDb()->Execute("UPDATE `oxarticles` SET nfq_is_hotoffer = 0 WHERE oxid = '". $oxid ."'");
		$oArticle = $this->_getArticle();
		$oArticle->setHotOffer(0);
		return get_class($this);
	}

	/**
	 * Parses oxid from url
	 * @return int oxid
	 */
	private function _getOxid(){
		return oxRegistry::getConfig()->getRequestParameter("oxid");
	}

	/**
	 * Creates article object from url
	 * @return HotOffersModule article object
	 */
	private function _getArticle(){
		$oxid = $this->_getOxid();
		$oArticle = oxNew("Nfq_HotOffersModule_Models_HotOfferOxarticle");
		$oArticle->load($oxid);

		return $oArticle;
	}
}
?>