<?php

namespace App;


class ShawarmaCalculator
{
    private int $price = 0;
    private array $ingredients= [];

    public function add(ShawarmaInterface $shawarma): void
    {
            $this->price($shawarma);
            $this->ingredients($shawarma);
    }
    public function ingredients(ShawarmaInterface $shawarma): void
    {
        $this->setIngredients(array_merge($this->ingredients,$shawarma->getIngredients()));
    }
    public function setIngredients(array $ingredients): void
    {
        $this->ingredients = array_unique($ingredients);
    }
    public function getIngredients(): array
    {
        return $this->ingredients;
    }
    public function price(ShawarmaInterface $shawarma): void
    {
        $this->setPrice($this->price += $shawarma->getCost());
    }
    public function setPrice(int $price): void
    {
        $this->price = $price;
    }
    public function getPrice(): int
    {
        return $this->price;
    }
}
