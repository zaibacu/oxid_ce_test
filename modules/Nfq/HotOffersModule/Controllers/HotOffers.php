<?php
	class Nfq_HotOffersModule_Controllers_HotOffers extends oxUBase
	{
		protected $_sThisTemplate = "nfq_hot_offers.tpl";

		/**
		 * Renders HotOffer page
		 * @return string template
		 */
		public function render(){
			parent::render();
			$oOfferList = oxNew("Nfq_HotOffersModule_Models_HotOfferOxarticlelist");
			$oOfferList->loadHotOffers(null);
			$this->_aViewData["oOfferList"] = $oOfferList;
			return $this->_sThisTemplate;
		}

		/**
		 * Returns articles with attribute 'hot offer'
		 * @return array of articles
		 */
		public function getHotOffers(){
			$oList = oxNew("Nfq_HotOffersModule_Models_HotOfferOxarticlelist");
			$oList->loadHotOffers();

			return $oList;
		}
	}
?>