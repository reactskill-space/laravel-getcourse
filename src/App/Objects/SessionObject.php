<?php

namespace ReactSkillSpace\LaravelGetcourse\App\Objects;

class SessionObject extends AbstractObject
{
	public function setUtmSource( string $value ): object
	{
		$this->utm_source = $value;
		return $this;
	}

	public function getUtmSource( string $type ): string
	{
		return $this->utm_source;
	}

	public function setUtmMedium( string $value ): object
	{
		$this->utm_medium = $value;
		return $this;
	}

	public function getUtmMedium( string $type ): string
	{
		return $this->utm_medium;
	}

	public function setUtmCampaign( string $value ): object
	{
		$this->utm_campaign = $value;
		return $this;
	}

	public function getUtmCampaign( string $type ): string
	{
		return $this->utm_campaign;
	}

	public function setUtmTerm( string $value ): object
	{
		$this->utm_term = $value;
		return $this;
	}

	public function getUtmTerm( string $type ): string
	{
		return $this->utm_term;
	}

	public function setUtmContent( string $value ): object
	{
		$this->utm_content = $value;
		return $this;
	}

	public function getUtmContent( string $type ): string
	{
		return $this->utm_content;
	}

	public function setUtmKeyword( string $value ): object
	{
		$this->utm_keyword = $value;
		return $this;
	}

	public function getUtmKeyword( string $type ): string
	{
		return $this->utm_keyword;
	}

	public function setUtmBanner( string $value ): object
	{
		$this->utm_banner = $value;
		return $this;
	}

	public function getUtmBanner( string $type ): string
	{
		return $this->utm_banner;
	}

	public function setUtmPhrase( string $value ): object
	{
		$this->utm_phrase = $value;
		return $this;
	}

	public function getUtmPhrase( string $type ): string
	{
		return $this->utm_phrase;
	}

	public function setUtmGroup( string $value ): object
	{
		$this->utm_group = $value;
		return $this;
	}

	public function getUtmGroup( string $type ): string
	{
		return $this->utm_group;
	}

	public function setGcpc( string $value ): object
	{
		$this->gcpc = $value;
		return $this;
	}

	public function getGcpc(): string
	{
		return $this->gcpc;
	}

	public function setGcao( string $value ): object
	{
		$this->gcao = $value;
		return $this;
	}

	public function getGcao(): string
	{
		return $this->gcao;
	}

	public function setReferer( string $value ): object
	{
		$this->referer = $value;
		return $this;
	}

	public function getReferer(): string
	{
		return $this->referer;
	}
}