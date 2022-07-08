<?php

namespace ReactSkillSpace\LaravelGetcourse\App\Objects;

class UserObject extends AbstractObject
{
	public function parse( array $params = [] ): object
	{
		$this->gc_id            = $this->extractValue( $params, 'id', 'int' );
		$this->email            = $this->extractValue( $params, 'Email' );
		$this->invited_by       = $this->extractValue( $params, 'Тип регистрации' );
		$this->gc_created_at    = $this->extractValue( $params, 'Создан', 'datetime' );
		$this->last_activity_at = $this->extractValue( $params, 'Последняя активность', 'datetime' );
		$this->first_name       = $this->extractValue( $params, 'Имя' );
		$this->last_name        = $this->extractValue( $params, 'Фамилия' );
		$this->phone            = $this->extractValue( $params, 'Телефон' );
		$this->birthday         = $this->extractValue( $params, 'Дата рождения', 'datetime' );
		$this->age              = $this->extractValue( $params, 'Возраст', 'int' );
		$this->country          = $this->extractValue( $params, 'Страна' );
		$this->city             = $this->extractValue( $params, 'Город' );
		$this->source           = $this->extractValue( $params, 'Откуда пришел' );
		$this->partner          = $this->extractValue( $params, 'От партнера' );
		$this->partner_id       = $this->extractValue( $params, 'ID партнера', 'int' );
		$this->partner_email    = $this->extractValue( $params, 'Email партнера' );
		$this->partner_name     = $this->extractValue( $params, 'ФИО партнера' );
		$this->manager_name     = $this->extractValue( $params, 'ФИО менеджера' );
		$this->vk_id            = $this->extractValue( $params, 'VK-ID', 'int' );
		$this->addfields        = $this->extractValue( $params, 'addfields', 'array' );
		$this->group_name       = $this->extractValue( $params, 'group_name', 'array' );

		return $this;
	}

	public function getId(): int
	{
		return $this->gc_id;
	}

	public function setEmail( string $email ): object
	{
		$this->email = $email;
		return $this;
	}

	public function getPhone(): string
	{
		return $this->phone;
	}

	public function setPhone( string $phone ): object
	{
		$this->phone = $phone;
		return $this;
	}

	public function getEmail(): string
	{
		return $this->email;
	}

	public function setFirstName( string $first_name ): object
	{
		$this->first_name = $first_name;
		return $this;
	}

	public function getFirstName(): string
	{
		return $this->first_name;
	}

	public function setLastName( string $last_name ): object
	{
		$this->last_name = $last_name;
		return $this;
	}

	public function getLastName(): string
	{
		return $this->last_name;
	}

	public function setCity( string $city ): object
	{
		$this->city = $city;
		return $this;
	}

	public function getCity(): string
	{
		return $this->city;
	}

	public function setCountry( string $country ): object
	{
		$this->country = $country;
		return $this;
	}

	public function getCountry(): string
	{
		return $this->country;
	}

	public function setCreatedAt( string $created_at ): object
	{
		$this->created_at = $created_at;
		return $this;
	}

	public function getCreatedAt(): string
	{
		return $this->created_at;
	}
}