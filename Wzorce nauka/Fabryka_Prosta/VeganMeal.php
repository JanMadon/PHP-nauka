<?php
 
declare(strict_types=1);
 
final class VeganMeal implements MealInterface
{
    public function containsAnimalProducts(): false
    {
        return false;
    }
}