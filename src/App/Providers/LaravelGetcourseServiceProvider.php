<?php

namespace ReactSkillSpace\LaravelGetcourse\App\Providers;

use Illuminate\Support\ServiceProvider;

class LaravelGetcourseServiceProvider extends ServiceProvider
{
	public function register()
	{
		//
	}

	public function boot()
	{
		$this->loadMigrationsFrom( __DIR__ . "/../../database/migrations" );
	}
}