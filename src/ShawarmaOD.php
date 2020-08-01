<?php

namespace App;


class ShawarmaOD implements ShawarmaInterface
{
    private int $price = 69;
    private array $ingredients = ['огурцы маринованные', 'картофель жареный',
        'чесночный соус', 'тандырный лаваш', 'маринованный лук с барбарисом и зеленью',
        'мясо куриное', 'салат коул слоу', 'корейская морковь'];
    private string $name = 'Шаурма Одесская';
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
