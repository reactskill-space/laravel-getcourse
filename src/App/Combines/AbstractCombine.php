<?php

namespace ReactSkillSpace\LaravelGetcourse\App\Combines;

use Illuminate\Support\Collection;

abstract class AbstractCombine
{	
	public function toCollect(): Collection
	{
		return collect( $this );
	}

	public function toArray(): array
	{
		return collect( $this )->toArray();
	}

	public function toJson(): string
	{
		return collect( $this )->toJson();
	}
}