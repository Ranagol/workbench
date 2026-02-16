<?php

namespace testTopics\workbench\testTopics;
//*********************************** */


class Car {
	
	private string $brand;
	
	public function __construct(string $brand)
	{
		$this->setBrand($brand);
	}
	
	public function drive(): void
	{
		echo "The {$this->getBrand()} is driving";
	}
	
	public function setBrand(string $brand): void
	{
		$this->brand = $brand;
	}
	
	public function getBrand(): string
	{
		return $this->brand;
	}
	
	
}

$bmw = new Car('BMW');

$bmw->drive();
