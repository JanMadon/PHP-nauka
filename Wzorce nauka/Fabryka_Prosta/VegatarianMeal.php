<?php
 
declare(strict_types=1);
 
final class VegetarianMeal implements MealInterface
{
    public function containsAnimalProducts(): true
    {
        return true;
    }
}
