<?php

namespace App;


class ShawarmaMutton implements ShawarmaInterface
{
    private int $price = 85;
    private array $ingredients = ['острый соус', 'огурцы маринованные', 'кинза', 'помидоры свежие', 'маринованный лук с барбарисом и зеленью', 'мясо баранины', 'лаваш арабский'];
    private string $name = 'Шаурма из Баранины';
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
