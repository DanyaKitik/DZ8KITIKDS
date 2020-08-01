<?php

namespace App;

class ShawarmaBeef implements ShawarmaInterface
{
    private int $price = 75;
    private array $ingredients = ['чесночный соус',
        'говяжий окорок', 'огурцы маринованные', 'маринованный лук с барбарисом и зеленью'
        , 'салат коул слоу', 'тандырный лаваш', 'помидоры свежие', 'хумус, соус тахин'];
    private string $name = 'Шаурма говяжья';
    public function getCost(): float
    {
        return  $this->price;
    }
    public function getIngredients(): array
    {
        return $this->ingredients;
    }
    public function getTitle(): string
    {
        return $this->name;
    }
}
