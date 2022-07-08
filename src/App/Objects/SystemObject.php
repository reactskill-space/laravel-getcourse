<?php

namespace ReactSkillSpace\LaravelGetcourse\App\Objects;

class SystemObject extends AbstractObject
{
	public function refreshUser()
	{
		$this->refresh_if_exists = 1;
		return $this;
	}

	public function noRefreshUser()
	{
		$this->refresh_if_exists = 0;
		return $this;
	}

	public function setPartnerEmail( string $email )
	{
		$this->partner_email = $email;
		return $this;
	}

	public function multipleOffers()
	{
		$this->multiple_offers = 1;
		return $this;
	}

	public function singlOffer()
	{
		$this->multiple_offers = 0;
		return $this;
	}

	public function returnPaymentLink()
	{
		$this->return_payment_link = 1;
		return $this;
	}

	public function noReturnPaymentLink()
	{
		$this->return_payment_link = 0;
		return $this;
	}

	public function returnDealNumber()
	{
		$this->return_deal_number = 1;
		return $this;
	}

	public function noReturnDealNumber()
	{
		$this->return_deal_number = 0;
		return $this;
	}
}