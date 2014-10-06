<?php
	class Nfq_HotOffersModule_Controllers_HotOffers extends oxUBase
	{
		protected $_sThisTemplate = "nfq_hot_offers.tpl";
		private $_aOffers = null;
		protected $_iCntPages = null;
		private $_iLastPage = 0;
		/**
		 * Renders HotOffer page
		 * @return string template
		 */
		public function render(){
			parent::render();
			$oOfferList = oxNew("Nfq_HotOffersModule_Models_HotOfferOxarticlelist");
			$oOfferList->loadHotOffers();
			$this->_aViewData["oOfferList"] = $oOfferList;
			return $this->_sThisTemplate;
		}

		/**
		 * Returns articles with attribute 'hot offer'
		 * @return array of articles
		 */
		public function getHotOffers(){
			if($this->_aOffers != null && $this->_iLastPage == $this->getActPage())
				return $this->_aOffers;

			$myConfig = $this->getConfig();
			$iPerPage = (int) $myConfig->getConfigParam("iNrofCatArticles");
			$iPerPage = $iPerPage ? $iPerPage : 10;

			$oList = oxNew("Nfq_HotOffersModule_Models_HotOfferOxarticlelist");
			$count = $oList->getCount();
			$oList->loadHotOffers($this->getActPage() * $iPerPage, $iPerPage);
			$this->_aOffers = $oList;
			
			$this->_iCntPages = round($count / $iPerPage + 0.49);
			$this->_aArticleList = $oList;
			$this->_iLastPage = $this->getActPage();
			return $oList;
		}
	}
?>