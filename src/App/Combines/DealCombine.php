<?php

namespace ReactSkillSpace\LaravelGetcourse\App\Combines;

class DealCombine extends AbstractCombine
{
	public function __construct(
		public $user,
		public $deal,
		public $system = [],
		public $session = [],
	) {}
}