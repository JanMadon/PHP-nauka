<?php
 
declare(strict_types=1);

namespace app\Wzorce_nauka\Fabryka_Prosta;
 
final class VegatarianMeal implements MealInterface
{
    public function containsAnimalProducts(): true
    {
        return true;
    }
}
