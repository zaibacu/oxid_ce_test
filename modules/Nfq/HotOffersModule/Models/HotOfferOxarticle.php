<?php
	class Nfq_HotOffersModule_Models_HotOfferOxarticle extends Nfq_HotOffersModule_Models_HotOfferOxarticle_Parent
	{
		/**
		 * Tells if current article has 'hot offer' attribute
		 * @return bool
		 */
		public function isHotOffer(){
			if($this->oxarticles__nfq_is_hotoffer == "1")
				return true;
			return false;
		}


		/**
		 * Set 'hot offer' attribute to current article
		 * @return bool result
		 */
		public function setHotOffer($val){
			$this->assign(array(
					"nfq_is_hotoffer" => $val
				)
			);
			return parent::save();
		}
	}
?>