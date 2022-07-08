<?php

namespace ReactSkillSpace\LaravelGetcourse\App\Objects;

use Carbon\Carbon;
use Illuminate\Support\Collection;

abstract class AbstractObject
{
	protected static function extractValue( array $params, string $key, string $type = 'string', $default = null )
	{
		$val = $params[ $key ] ?? null;

		if( is_null( $val ) || ( $type !== 'string' && $val === '' ) ) {
			return $type === 'array' ? [] : $default;
		}

		return match( $type ) {
			'int'      => (int) $val,
			'float'    => (float) $val,
			'bool'     => (bool) $val,
			'datetime' => Carbon::parse( $val ),
			'array'    => is_array( $val ) ? $val : unserialize( $val ),
			'string'   => $val,
		};
	}
	
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