<?php
 
declare(strict_types=1);

namespace app\Wzorce_nauka\Fabryka_Prosta;
 
final class VeganMeal implements MealInterface
{
    public function containsAnimalProducts(): false
    {
        return false;
    }
}