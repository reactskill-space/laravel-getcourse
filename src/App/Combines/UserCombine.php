<?php

namespace ReactSkillSpace\LaravelGetcourse\App\Combines;

use ReactSkillSpace\LaravelGetcourse\App\Objects\SessionObject;
use ReactSkillSpace\LaravelGetcourse\App\Objects\SystemObject;
use ReactSkillSpace\LaravelGetcourse\App\Objects\UserObject;

class UserCombine extends AbstractCombine
{
	public function __construct(
		public $user = new UserObject(),
		public $system = new SystemObject(),
		public $session = new SessionObject(),
	) {}
}