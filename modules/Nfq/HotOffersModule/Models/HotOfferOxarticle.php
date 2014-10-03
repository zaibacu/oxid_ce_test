<?php
	class Nfq_HotOffersModule_Models_HotOfferOxarticle extends Nfq_HotOffersModule_Models_HotOfferOxarticle_Parent
	{
		public function isHotOffer(){
			if($this->oxarticles__nfq_is_hotoffer == "1")
				return true;
			return false;
		}

		public function setHotOffer($val){
			$this->assign(array(
					"nfq_is_hotoffer" => $val
				)
			);
			parent::save();
		}
	}
?>